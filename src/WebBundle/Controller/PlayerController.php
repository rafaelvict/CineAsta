<?php

namespace WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use UserBundle\Entity\UserView;

class PlayerController extends Controller
{


     public function movieAction($id,$slug,$source)
    {


        $premium = false; 
        if ($this->getUser()!=null) {
            $premium = $this->getUser()->isSubscribed();
        } 
        $em = $this->getDoctrine()->getManager();
      	$poster = $em->getRepository('AppBundle:Poster')->findOneBy(array("id"=>$id,"slug"=>$slug));
      	$source = $em->getRepository('AppBundle:Source')->findOneBy(array("id"=>$source,"poster"=>$poster));
        



        if ($source->getPremium() == 2) {
            if ($premium == false) {
                   return $this->redirect($this->generateUrl('wep_subscription_subscribe'));
            }
        }
        $session = new Session();

        if (!$session->has('movie_'.$poster->getId())) {
            $session->set('movie_'.$poster->getId(), 'viewed');
            $poster->setViews($poster->getViews()+1);
            $em->flush();
        }

        $videoPath = $source->getUrl(); // caminho para o vídeo protegido no bucket
        $accessKey = '0337c55f-d67b-4fad-0zxd-a5f9431a62aa'; // chave de acesso criada anteriormente
        
        // faz a substituição do CDN antigo pelo novo e remove a parte '/playlist.m3u8'
        $videoPath = str_replace('https://vz-59f5cc21-8ef.b-cdn.net/', '', $videoPath);
        $videoPath = str_replace('/playlist.m3u8', '', $videoPath);
        
        // cria o token de autenticação
        $expiry = time() + 3600; // tempo de validade do token em segundos (1 hora neste exemplo)
        
        // Generate the token 
        $hashableBase = $accessKey.$videoPath.$expiry; 
        
        // If using IP validation 
        //$hashableBase .= "51.222.160.2"; 
        
        $token = hash('sha256', $hashableBase); 
        
        // gera a URL de acesso ao vídeo protegido
        $url = 'https://iframe.mediadelivery.net/embed/020/' . $videoPath . '?token=' . $token . '&expires=' . $expiry;
        
         
     $user = $this->getUser();

    if ($user != null) {
        // Obtém o id do usuário
        $user_id = $user->getId();
        // Consulta a quantidade de conteúdos acessados
        $url = "http://51.222.160.2:3075/consultaviews/" . $user_id;
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
         
          echo '<script>console.log(" user_id: '. $response . ' ")</script>';
        if ($statusCode == 200 && !empty($response)) {
            // Atualiza a quantidade de conteúdos acessados
           
            $data = json_decode($response, true);
           
            $quantity = $data['total_views'] + 1;
            $createdAt = date('Y-m-d H:i:s');
            
            echo '<script>console.log(" user_id: '. $user_id . 'quantidade' . $quantity . 'data' . $createdAt .' ")</script>';
            $url = "http://51.222.160.2:3075/atualizaviews";
            $data = array(
                'user_id' => $user_id,
                'quantidade' => $quantity,
                'created_at' => $createdAt
            );
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            $response = curl_exec($ch);
            $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);

            echo '<script>console.log(" body: '. json_encode($_POST) .' ")</script>';

            if ($statusCode == 200) {
                // Registro atualizado com sucesso
            } else {
                // Ocorreu um erro ao atualizar o registro
            }
        } else {
            echo '<script>console.log(" id2: '. $user_id .' ")</script>';
            
            // create the data object
            $data = array(
                'quantidade' => 1,
                'created_at' => null
            );
            $data['user_id'] = $user_id;
            echo '<script>console.log("data: '. json_encode($data) .' ")</script>';
            // Cadastra o usuário com 1 visualização em quantidade
    
            $url = "http://51.222.160.2:3075/cadastraviewes/" . $user_id;
            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
            $response = curl_exec($ch);
            $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
    
            if ($statusCode == 200) {
                // Registro cadastrado com sucesso
            } else {
                // Ocorreu um erro ao cadastrar o registro
            }
        }
    } else {
        echo '<script>console.log("Não tem id ")</script>'; // adiciona um log no console do navegador usando JavaScript
    }
        
        return $this->render('WebBundle:Player:movie.html.twig',array(
            "source" => $source,
            "poster" => $poster,
            "premium"=> $premium,
            "video_src" => $url
        ));
    }
    public function channelAction($id,$slug,$source)
    {

       
        $premium = false;
        if ($this->getUser()!=null) {
            $premium = $this->getUser()->isSubscribed();
        } 
        $em = $this->getDoctrine()->getManager();
        $channel = $em->getRepository('AppBundle:Channel')->findOneBy(array("id"=>$id,"slug"=>$slug));
        $source = $em->getRepository('AppBundle:Source')->findOneBy(array("id"=>$source,"channel"=>$channel));
        if ($source->getPremium() == 2) {
            if ($premium == false) {
                   return $this->redirect($this->generateUrl('wep_subscription_subscribe'));
            }
        }
        $session = new Session();

        if (!$session->has('channel_'.$channel->getId())) {
            $session->set('channel_'.$channel->getId(), 'viewed');
            $channel->setViews($channel->getViews()+1);
            $em->flush();
        }
        return $this->render('WebBundle:Player:channel.html.twig',array(
            "source" => $source,
            "channel" => $channel,
            "premium"=>$premium
        ));
    }
    public function preepisodeAction($id,$slug){
        $em = $this->getDoctrine()->getManager();
        $episode = $em->getRepository('AppBundle:Episode')->findOneBy(array("id"=>$id,"slug"=>$slug));
        $premium = false;
        if ($this->getUser()!=null) {
            $premium = $this->getUser()->isSubscribed();
        } 
        $repository_soure = $em->getRepository('AppBundle:Source');
        $repo_query_source = $repository_soure->createQueryBuilder('c');
        $repo_query_source->leftJoin('c.episode', 'e');
        $repo_query_source->where("e.id = ". $id ,"c.kind like 'play' or c.kind like 'both' " );
   
        $query_source_test =  $repo_query_source->getQuery(); 
        $sources_test = $query_source_test->getResult();
        if (sizeof($sources_test) == 0) {
            $this->addFlash('success', 'They are no sources in this episode ! ');
            return $this->redirect($this->generateUrl('wep_serie_view',array("id"=>$episode->getSeason()->getPoster()->getId(),"slug"=>$episode->getSeason()->getPoster()->getSlug())));
        }

        if ($this->getUser()!=null) {
           if (!$premium) {
                $repo_query_source->andWhere("c.premium like '1' or c.premium like '3'");
           }
        }else{
           $repo_query_source->andWhere("c.premium like '1' or c.premium like '3'");
        }

        $query_source =  $repo_query_source->getQuery(); 
        $sources = $query_source->getResult();
        if (sizeof($sources)>0) {
            return $this->redirect($this->generateUrl('wep_player_episode',array("id"=>$episode->getId(),"source"=>$sources[0]->getId(),"slug"=>$episode->getSlug())));
        }else{
             return $this->redirect($this->generateUrl('wep_subscription_subscribe'));
        }
    }
    public function episodeAction($id,$slug,$source)
    {

        $em = $this->getDoctrine()->getManager();
        $episode = $em->getRepository('AppBundle:Episode')->findOneBy(array("id"=>$id,"slug"=>$slug));
        
        $next_episode = $em->getRepository('AppBundle:Episode')->findOneBy(array("position"=>$episode->getPosition()+1,"season"=>$episode->getSeason()));
        $source = $em->getRepository('AppBundle:Source')->findOneBy(array("id"=>$source,"episode"=>$episode));
        if ($next_episode==null) {
              $next_season = $em->getRepository('AppBundle:Season')->findOneBy(array("position"=>$episode->getSeason()->getPosition()+1,"poster"=>$episode->getSeason()->getPoster()));
              $next_episode = $em->getRepository('AppBundle:Episode')->findOneBy(array("position"=>1,"season"=>$next_season));
        }
  
        $premium = false;
        if ($this->getUser()!=null) {
            $premium = $this->getUser()->isSubscribed();
        } 
        if ($source->getPremium() == 2) {
            if ($premium == false) {
                   return $this->redirect($this->generateUrl('wep_subscription_subscribe'));
            }
        }
        $session = new Session();


        if (!$session->has('episode_'.$episode->getId())) {
            $session->set('episode_'.$episode->getId(), 'viewed');
            $episode->setViews($episode->getViews()+1);
            $em->flush();
            
            $episode->getSeason()->getPoster()->setViews($episode->getSeason()->getPoster()->getViews()+1);
            $em->flush();
        }
        
        $videoPath = $source->getUrl(); // caminho para o vídeo protegido no bucket
        $accessKey = '0337c55f-d67b-4fad-zf31-a5f9431a62aa'; // chave de acesso criada anteriormente
        
        // faz a substituição do CDN antigo pelo novo e remove a parte '/playlist.m3u8'
        $videoPath = str_replace('https://vz-59f5cc21-8ef.b-cdn.net/', '', $videoPath);
        $videoPath = str_replace('/playlist.m3u8', '', $videoPath);
        
        // cria o token de autenticação
        $expiry = time() + 3600; // tempo de validade do token em segundos (1 hora neste exemplo)
        
        // Generate the token 
        $hashableBase = $accessKey.$videoPath.$expiry; 
        
        // If using IP validation 
        //$hashableBase .= "51.222.160.2"; 
        
        $token = hash('sha256', $hashableBase); 
        
        // gera a URL de acesso ao vídeo protegido
        $url = 'https://iframe.mediadelivery.net/embed/020/' . $videoPath . '?token=' . $token . '&expires=' . $expiry;
        
         // Verifica se o usuário está logado
        $user = $this->getUser();
        if ($user != null) {
            // Obtém o id do usuário
            $userId = $user->getId();

            // Adiciona o registro na tabela users_views
            $userView = new UserView();
            $userView->setUserId($userId);
            $userView->setQuantidade(1); // Define a quantidade de conteúdos acessados
            $em->persist($userView);
            $em->flush();
        }
        
        return $this->render('WebBundle:Player:episode.html.twig',array(
            "source" => $source,
            "episode" => $episode,
            "next_episode"=> $next_episode,
            "premium"=>$premium,
            "video_src" => $url
        ));
    }

}
