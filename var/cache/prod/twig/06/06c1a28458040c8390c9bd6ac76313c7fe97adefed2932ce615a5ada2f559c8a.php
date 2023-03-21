<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* WebBundle:Movie:view.html.twig */
class __TwigTemplate_e54edc8578d22d8b8809e529263b14f2d76c262120ffa03bdfdf12e6509e318f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "WebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["subtitle"] = $this->getAttribute(($context["poster"] ?? null), "title", []);
        // line 3
        $context["og_description"] = $this->getAttribute(($context["poster"] ?? null), "description", []);
        // line 4
        $context["og_type"] = "video.movie";
        // line 5
        $context["og_image"] = $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["poster"] ?? null), "poster", []), "link", [])), "poster_thumb");
        // line 6
        $context["keywords"] = $this->getAttribute(($context["poster"] ?? null), "tags", []);
        // line 1
        $this->parent = $this->loadTemplate("WebBundle::layout.html.twig", "WebBundle:Movie:view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "title", []), "html", null, true);
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        // line 9
        echo "\t<div class=\"row content-section\">
\t\t<div class=\"col-md-12\" >
\t\t\t<div class=\"movie-header-bg\" style=\" background-image: url('";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((($this->getAttribute(($context["poster"] ?? null), "cover", []) == null)) ? ($this->getAttribute($this->getAttribute(($context["poster"] ?? null), "poster", []), "link", [])) : ($this->getAttribute($this->getAttribute(($context["poster"] ?? null), "cover", []), "link", [])))), "html", null, true);
        echo "');\">
\t\t\t\t<div class=\"movie-header\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"movie-infos\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "year", []), "html", null, true);
        echo " • ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "classification", []), "html", null, true);
        echo " • ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "duration", []), "html", null, true);
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["poster"] ?? null), "genres", []));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            echo " • <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_movie_index", ["genre" => $this->getAttribute($context["genre"], "title", []), "order" => "views"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "title", []), "html", null, true);
            echo "</a>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"header-buttons\">
\t\t\t\t\t";
        // line 17
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 18
            echo "\t\t\t\t\t\t<button class=\"btn-fav\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "id", []), "html", null, true);
            echo "\" >";
            if (($context["favorited"] ?? null)) {
                echo "<i class=\"fa fa-heart\"></i>";
            } else {
                echo "<i class=\"far fa-heart\"></i>";
            }
            echo "</button>
\t\t\t\t\t";
        } else {
            // line 20
            echo "\t\t\t\t\t\t<button  class=\"open-login\"> <i class=\"far fa-heart\"></i></button>
\t\t\t\t\t";
        }
        // line 22
        echo "\t\t\t\t\t<button id=\"share-btn\">
\t\t\t\t\t<i  class=\"fa fa-share \"></i>COMPARTILHAR
\t\t\t\t\t<div class=\"share-buttons\">
\t\t\t\t\t\t<a href=\"mailto:?Subject=";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "title", []), "html", null, true);
        echo "&amp;Body=";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "description", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((("https://tyflex.to" . "/share/") . $this->getAttribute(($context["poster"] ?? null), "id", [])) . ".html"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<i class=\"fas fa-envelope\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"http://www.facebook.com/sharer.php?u=";
        // line 28
        echo twig_escape_filter($this->env, ((("https://tyflex.to" . "/share/") . $this->getAttribute(($context["poster"] ?? null), "id", [])) . ".html"), "html", null, true);
        echo "\" target=\"_blank\">
\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"http://www.linkedin.com/shareArticle?mini=true&amp;url=";
        // line 31
        echo twig_escape_filter($this->env, ((("https://tyflex.to" . "/share/") . $this->getAttribute(($context["poster"] ?? null), "id", [])) . ".html"), "html", null, true);
        echo "\" target=\"_blank\">
\t\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"https://twitter.com/share?url=";
        // line 34
        echo twig_escape_filter($this->env, ((("https://tyflex.to" . "/share/") . $this->getAttribute(($context["poster"] ?? null), "id", [])) . ".html"), "html", null, true);
        echo "&amp;text=";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "title", []), "html", null, true);
        echo "\" target=\"_blank\">
\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"header-ratings\">
\t\t\t\t\t";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "rating", []), "html", null, true);
        echo "/5
\t\t\t\t\t";
        // line 42
        $context["rate"] = $this->getAttribute(($context["poster"] ?? null), "rating", []);
        // line 43
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 44
            echo "\t\t\t\t\t\t";
            if ((($context["rate"] ?? null) >= 1)) {
                // line 45
                echo "\t\t\t\t\t\t\t<i class=\"fas fa-star checked\"></i>
\t\t\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\t\t\t";
            if (((($context["rate"] ?? null) >= 0.25) && (($context["rate"] ?? null) < 0.75))) {
                // line 48
                echo "\t\t\t\t\t\t\t<i class=\"fas fa-star-half-alt checked\"></i>
\t\t\t\t\t\t";
            }
            // line 50
            echo "\t\t\t\t\t\t";
            if (((($context["rate"] ?? null) >= 0.75) && (($context["rate"] ?? null) < 1))) {
                // line 51
                echo "\t\t\t\t\t\t\t<i class=\"fas fa-star checked\"></i>
\t\t\t\t\t\t";
            }
            // line 53
            echo "\t\t\t\t\t\t";
            if ((($context["rate"] ?? null) < 0.25)) {
                // line 54
                echo "\t\t\t\t\t\t\t<i class=\"far fa-star checked\"></i>
\t\t\t\t\t\t";
            }
            // line 56
            echo "\t\t\t\t\t\t";
            $context["rate"] = (($context["rate"] ?? null) - 1);
            // line 57
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t\t\t\t• ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "imdb", []), "html", null, true);
        echo " / 10 <span class=\"imdb\">IMDb</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col-md-12\" >
\t\t<div class=\"dropdown\">
\t\t\t\t";
        // line 65
        if ((twig_length_filter($this->env, ($context["all_sources"] ?? null)) > 0)) {
            // line 66
            echo "\t\t\t\t\t";
            if ((twig_length_filter($this->env, ($context["sources"] ?? null)) > 0)) {
                // line 67
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_player_movie", ["id" => $this->getAttribute(($context["poster"] ?? null), "id", []), "slug" => $this->getAttribute(($context["poster"] ?? null), "slug", []), "source" => $this->getAttribute($this->getAttribute(($context["sources"] ?? null), 0, [], "array"), "id", [])]), "html", null, true);
                echo "\" class=\"btn play-btn\"><span class=\"fa fa-play\"></span> Reproduzir</a>
\t\t\t\t\t";
            } else {
                // line 69
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_subscription_subscribe");
                echo "\" class=\"btn play-btn\"><i class=\"fas fa-star\"></i> Comprar ou Renovar</a>
\t\t\t\t\t";
            }
            // line 71
            echo "\t\t\t\t";
        }
        // line 72
        echo "\t\t\t\t";
        if (($this->getAttribute(($context["poster"] ?? null), "trailer", []) != null)) {
            // line 73
            echo "\t\t\t\t\t<button id=\"trailer-btn\" class=\"btn play-btn\"><span class=\"fa fa-bullhorn\"></span> Trailer</button>
\t\t\t\t";
        }
        // line 75
        echo "\t\t\t\t";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "subtitles", [])) > 0)) {
            // line 76
            echo "\t\t\t\t\t<button id=\"subtitles-btn\" class=\"btn play-btn movie-subtitles\"  data-id=";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "id", []), "html", null, true);
            echo " data-title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "title", []), "html", null, true);
            echo "\"><span class=\"fa fa-cc\"></span> Legendas</button>
\t\t\t\t";
        }
        // line 78
        echo "
\t\t\t\t";
        // line 79
        if ((twig_length_filter($this->env, ($context["all_source_downloads"] ?? null)) > 0)) {
            // line 80
            echo "\t\t\t\t\t<button id=\"downloads-btn\" class=\"btn play-btn movie-downloads\"  data-id=";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "id", []), "html", null, true);
            echo " data-title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "title", []), "html", null, true);
            echo "\"><span class=\"fas fa-download\"></span> Download</button>
\t\t\t\t";
        }
        // line 82
        echo "\t\t\t\t<a class=\"btn play-btn dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t<span class=\"fa fa-star\"></span> Avaliar Filme
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
\t\t\t\t\t<div class=\"comment-item  review-write\">
\t\t\t\t\t\t<div class='alert alert-success success-review' role='alert'>
\t\t\t\t\t\t\t<i class='fas fa-comment-alt'></i> Sua avaliação foi adicionada com sucesso!
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='alert alert-danger error-review' role='alert'>
\t\t\t\t\t\t\t<i class='fas fa-comment-alt'></i> Não foi possível enviar sua avaliação
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"rate\" id=\"rate-input\" alt=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "id", []), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<input type=\"radio\" id=\"star5\" name=\"rate\" value=\"5\" />
\t\t\t\t\t\t\t<label for=\"star5\" title=\"text\">5 estrelas</label>
\t\t\t\t\t\t\t<input type=\"radio\" id=\"star4\" name=\"rate\" value=\"4\" />
\t\t\t\t\t\t\t<label for=\"star4\" title=\"text\">4 estrelas</label>
\t\t\t\t\t\t\t<input type=\"radio\" id=\"star3\" name=\"rate\" value=\"3\" />
\t\t\t\t\t\t\t<label for=\"star3\" title=\"text\">3 estrelas</label>
\t\t\t\t\t\t\t<input type=\"radio\" id=\"star2\" name=\"rate\" value=\"2\" />
\t\t\t\t\t\t\t<label for=\"star2\" title=\"text\">2 estrelas</label>
\t\t\t\t\t\t\t<input type=\"radio\" checked=\"true\" id=\"star1\" name=\"rate\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"star1\" title=\"text\">1 estrelas</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<textarea  class=\"input-review\" placeholder=\"Escreva sua avaliação aqui\"></textarea>
\t\t\t\t\t\t";
        // line 106
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 107
            echo "\t\t\t\t\t\t\t<button alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "id", []), "html", null, true);
            echo "\" type=\"poster\"  class=\"btn btn-primary  submit-review btn-block\"><i class=\"fas fa-paper-plane\"></i> Enviar Avaliação</button>
\t\t\t\t\t\t\t<button alt=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "id", []), "html", null, true);
            echo "\" class=\"btn btn-primary  loading-review btn-block\"><i class=\"fas fa-circle-notch fa-spin\"></i>  Revisar Interação</button>
\t\t\t\t\t\t";
        } else {
            // line 110
            echo "\t\t\t\t\t\t\t<button  class=\"btn btn-primary btn-block open-login\"> <i class=\"fas fa-check\"></i> Faça login para deixar um comentário </button>
\t\t\t\t\t\t";
        }
        // line 112
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 116
        if (($this->getAttribute(($context["settings"] ?? null), "moviebannertype", []) == "image")) {
            // line 117
            echo "\t\t\t<div class=\"col-sm-12 col-md-12 ads-element\">
\t\t\t\t<img src=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "homebanner", []), "html", null, true);
            echo "\">
\t\t\t</div>
\t\t";
        } elseif (($this->getAttribute(        // line 120
($context["settings"] ?? null), "moviebannertype", []) == "code")) {
            // line 121
            echo "\t\t\t<div class=\"col-sm-12 col-md-12\">
\t\t\t\t";
            // line 122
            echo $this->getAttribute(($context["settings"] ?? null), "homebanner", []);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 125
        echo "\t\t<div class=\"col-md-12 padding-top-20\" >
\t\t\t<div class=\"movie-section-title\">Sinopse</div>
\t\t</div>
\t\t<div class=\"col-md-12\" >
\t\t\t<p>
\t\t\t\t";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "description", []), "html", null, true);
        echo "
\t\t\t</p>
\t\t</div>
\t\t";
        // line 133
        if ((twig_length_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "roles", [])) != 0)) {
            // line 134
            echo "\t\t\t<div class=\"col-md-12 padding-top-20\" >
\t\t\t\t<div class=\"movie-section-title\">Elenco</div>
\t\t\t</div>
\t\t\t<div class=\"flix-carousel\" >
\t\t\t\t<button  class=\"prev_btn\"><i class=\"fa fa-chevron-left\"></i></button>
\t\t\t\t<button  class=\"next_btn\"><i class=\"fa fa-chevron-right\"></i></button>
\t\t\t\t<div class=\"flix-scroll-x\">
\t\t\t\t\t";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["poster"] ?? null), "roles", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["cast"]) {
                // line 142
                echo "\t\t\t\t\t\t";
                echo twig_include($this->env, $context, "WebBundle:Actor:cast.html.twig", ["cast" => $context["cast"]]);
                echo "
\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cast'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 147
        echo "\t\t";
        if ((twig_length_filter($this->env, ($context["related_posters"] ?? null)) != 0)) {
            // line 148
            echo "\t\t\t<div class=\"col-md-12 padding-top-20\" >
\t\t\t\t<div class=\"movie-section-title\">Recomendados para você</div>
\t\t\t</div>
\t\t\t<div class=\"flix-carousel\" >
\t\t\t\t<button  class=\"prev_btn\"><i class=\"fa fa-chevron-left\"></i></button>
\t\t\t\t<button  class=\"next_btn\"><i class=\"fa fa-chevron-right\"></i></button>
\t\t\t\t<div class=\"flix-scroll-x\">
\t\t\t\t\t";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["related_posters"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["related_poster"]) {
                // line 156
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["related_poster"], "type", []) == "movie")) {
                    // line 157
                    echo "\t\t\t\t\t\t\t";
                    echo twig_include($this->env, $context, "WebBundle:Movie:movie.html.twig", ["poster" => $context["related_poster"]]);
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 159
                    echo "\t\t\t\t\t\t\t";
                    echo twig_include($this->env, $context, "WebBundle:Serie:serie.html.twig", ["poster" => $context["related_poster"]]);
                    echo "
\t\t\t\t\t\t";
                }
                // line 161
                echo "\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['related_poster'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            echo "\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 166
        echo "\t\t";
        if ($this->getAttribute(($context["poster"] ?? null), "comment", [])) {
            // line 167
            echo "\t\t\t<div class=\"col-md-6 padding-top-20\">
\t\t\t\t<div class=\"movie-section-title\"><i class=\"fa fa-comment\"></i> ";
            // line 168
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["comments"] ?? null)), "html", null, true);
            echo " Comentários</div>
\t\t\t\t<div class=\"comment-section comment-list\">
\t\t\t\t\t";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 171
                echo "\t\t\t\t\t\t<div class=\"comment-item\">
\t\t\t\t\t\t\t<a title=\"View profile\" href=\"#\" class=\"avatar-thumb\"><img  src=\"";
                // line 172
                echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", []), "media", []), "type", []) == "link")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", []), "media", []), "url", [])) : ($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", []), "media", []), "link", [])), "actor_thumb_mini_web"))), "html", null, true);
                echo "\"></a>
\t\t\t\t\t\t\t<div class=\"comment-text\">
\t\t\t\t\t\t\t\t<a>";
                // line 174
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", []), "name", []), "html", null, true);
                echo "</a><span class=\"float-right\"><i class=\"fa fa-clock-o\"></i> ";
                echo $this->env->getExtension('Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension')->diff($this->getAttribute($context["comment"], "created", []));
                echo " </span>
\t\t\t\t\t\t\t\t<p> ";
                // line 175
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "contentclear", []), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            echo "\t\t\t\t</div>
\t\t\t\t<div class='alert alert-success success-comment' role='alert'>
\t\t\t\t\t<i class='fas fa-comment-alt'></i> Seu comentário foi adicionado com sucesso!
\t\t\t\t</div>
\t\t\t\t<div class='alert alert-danger error-comment' role='alert'>
\t\t\t\t\t<i class='fas fa-comment-alt'></i> Não foi possível enviar seu comentário
\t\t\t\t</div>
\t\t\t\t";
            // line 186
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 187
                echo "\t\t\t\t\t<div class=\"comment-item comment-write\">
\t\t\t\t\t\t<a title=\"View profile\" href=\"#\" class=\"avatar-thumb\"><img  src=\"";
                // line 188
                echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "media", []), "type", []) == "link")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "media", []), "url", [])) : ($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "media", []), "link", [])), "actor_thumb_mini_web"))), "html", null, true);
                echo "\"></a>
\t\t\t\t\t\t<div class=\"comment-text\">
\t\t\t\t\t\t\t<a>";
                // line 190
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "name", []), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t<textarea  class=\"input-comment\" alt=\"poster\" placeholder=\"Write you comment here\"></textarea>
\t\t\t\t\t\t\t<button alt=\"";
                // line 192
                echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "id", []), "html", null, true);
                echo "\" class=\"btn btn-primary float-right submit-comment\"><i class=\"fas fa-paper-plane\"></i> enviar comentário</button>
\t\t\t\t\t\t\t<button alt=\"";
                // line 193
                echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "id", []), "html", null, true);
                echo "\" class=\"btn btn-primary float-right loading-comment\"><i class=\"fas fa-circle-notch fa-spin\"></i> Interação de comentários</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            } else {
                // line 197
                echo "\t\t\t\t\t<button class=\"btn comment-btn-item open-login\">
\t\t\t\t\t<i class=\"fa fa-check\"></i> Entre para deixar um comentário
\t\t\t\t\t</button>
\t\t\t\t";
            }
            // line 201
            echo "\t\t\t</div>
\t\t";
        }
        // line 203
        echo "\t\t<div class=\"col-md-6 padding-top-20\">
\t\t\t<div class=\"movie-section-title\"><i class=\"fa fa-star\"></i> ";
        // line 204
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["ratings"] ?? null)), "html", null, true);
        echo " Avaliações</div>
\t\t\t<div class=\"comment-section \">
\t\t\t\t";
        // line 206
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ratings"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["rating"]) {
            // line 207
            echo "\t\t\t\t\t<div class=\"review\">
\t\t\t\t\t\t<div class=\"review-properties\">
\t\t\t\t\t\t\tRevisados ​​pela
\t\t\t\t\t\t\t<span class=\"review-author\">";
            // line 210
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rating"], "user", []), "name", []), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t<span class=\"review-rating\">";
            // line 212
            echo twig_escape_filter($this->env, $this->getAttribute($context["rating"], "value", []), "html", null, true);
            echo " / 5</span>
\t\t\t\t\t\t\t<span class=\"float-right\"><i class=\"fa fa-clock-o\"></i> ";
            // line 213
            echo $this->env->getExtension('Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension')->diff($this->getAttribute($context["rating"], "created", []));
            echo " </span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<article><p>";
            // line 215
            echo twig_escape_filter($this->env, $this->getAttribute($context["rating"], "review", []), "html", null, true);
            echo "</p></article>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rating'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        echo "\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"background-close  serie-dialog\">
\t\t<div class=\"login-box \">
\t\t\t<div class=\"notif-head\">
\t\t\t\t<span class=\"notif-close\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></span>
\t\t\t\t<span class=\"notif-title\"><i class=\"fa fa-fw fa-lock\"></i>  </span>
\t\t\t</div>
\t\t\t<div class=\"notif-body\">
\t\t\t\t<div class=\"carda__body\">
\t\t\t\t\t<div class=\"box-content\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 235
        if (($this->getAttribute(($context["poster"] ?? null), "trailer", []) != null)) {
            // line 236
            echo "\t\t<div class=\"trailer-video\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["poster"] ?? null), "trailer", []), "youtubeid", []), "html", null, true);
            echo "\"></div>
\t";
        }
    }

    public function getTemplateName()
    {
        return "WebBundle:Movie:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  604 => 236,  602 => 235,  583 => 218,  574 => 215,  569 => 213,  565 => 212,  560 => 210,  555 => 207,  551 => 206,  546 => 204,  543 => 203,  539 => 201,  533 => 197,  526 => 193,  522 => 192,  517 => 190,  512 => 188,  509 => 187,  507 => 186,  498 => 179,  488 => 175,  482 => 174,  477 => 172,  474 => 171,  470 => 170,  465 => 168,  462 => 167,  459 => 166,  453 => 162,  439 => 161,  433 => 159,  427 => 157,  424 => 156,  407 => 155,  398 => 148,  395 => 147,  390 => 144,  373 => 142,  356 => 141,  347 => 134,  345 => 133,  339 => 130,  332 => 125,  326 => 122,  323 => 121,  321 => 120,  316 => 118,  313 => 117,  311 => 116,  305 => 112,  301 => 110,  296 => 108,  291 => 107,  289 => 106,  273 => 93,  260 => 82,  252 => 80,  250 => 79,  247 => 78,  239 => 76,  236 => 75,  232 => 73,  229 => 72,  226 => 71,  220 => 69,  214 => 67,  211 => 66,  209 => 65,  198 => 58,  192 => 57,  189 => 56,  185 => 54,  182 => 53,  178 => 51,  175 => 50,  171 => 48,  168 => 47,  164 => 45,  161 => 44,  156 => 43,  154 => 42,  150 => 41,  138 => 34,  132 => 31,  126 => 28,  116 => 25,  111 => 22,  107 => 20,  95 => 18,  93 => 17,  89 => 15,  70 => 14,  64 => 11,  60 => 9,  57 => 8,  51 => 7,  46 => 1,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Movie:view.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Movie/view.html.twig");
    }
}
