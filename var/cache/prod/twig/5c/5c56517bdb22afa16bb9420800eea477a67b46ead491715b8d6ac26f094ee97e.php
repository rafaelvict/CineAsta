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

/* WebBundle:Serie:view.html.twig */
class __TwigTemplate_802ad0dd62d6c5aee71196950758aa4d752184b6553cc7413fa40dce9c1b0529 extends \Twig\Template
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
        $context["og_type"] = "video.tv_show";
        // line 5
        $context["og_image"] = $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["poster"] ?? null), "poster", []), "link", [])), "poster_thumb");
        // line 6
        $context["keywords"] = $this->getAttribute(($context["poster"] ?? null), "tags", []);
        // line 1
        $this->parent = $this->loadTemplate("WebBundle::layout.html.twig", "WebBundle:Serie:view.html.twig", 1);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_serie_index", ["genre" => $this->getAttribute($context["genre"], "title", []), "order" => "views"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "title", []), "html", null, true);
            echo "</a>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
\t\t\t\t\t<div class=\"header-buttons\">
\t\t\t\t\t\t";
        // line 16
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 17
            echo "\t\t\t\t\t\t\t<button class=\"btn-fav\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "id", []), "html", null, true);
            echo "\" >";
            if (($context["favorited"] ?? null)) {
                echo "<i class=\"fa fa-heart\"></i>";
            } else {
                echo "<i class=\"far fa-heart\"></i>";
            }
            echo "</button>
\t\t\t\t\t\t";
        } else {
            // line 19
            echo "\t\t\t\t\t\t\t<button  class=\"open-login\"> <i class=\"far fa-heart\"></i></button>
\t\t\t\t\t\t";
        }
        // line 21
        echo "\t\t\t\t\t\t<button id=\"share-btn\">
\t\t\t\t\t\t<i  class=\"fa fa-share \"></i>COMPARTILHAR
\t\t\t\t\t\t<div class=\"share-buttons\">
\t\t\t\t\t\t\t\t<a href=\"mailto:?Subject=";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "title", []), "html", null, true);
        echo "&amp;Body=";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "description", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((("https://tyflex.to" . "/share/") . $this->getAttribute(($context["poster"] ?? null), "id", [])) . ".html"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"http://www.facebook.com/sharer.php?u=";
        // line 27
        echo twig_escape_filter($this->env, ((("https://tyflex.to" . "/share/") . $this->getAttribute(($context["poster"] ?? null), "id", [])) . ".html"), "html", null, true);
        echo "\" target=\"_blank\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"http://www.linkedin.com/shareArticle?mini=true&amp;url=";
        // line 30
        echo twig_escape_filter($this->env, ((("https://tyflex.to" . "/share/") . $this->getAttribute(($context["poster"] ?? null), "id", [])) . ".html"), "html", null, true);
        echo "\" target=\"_blank\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"https://twitter.com/share?url=";
        // line 33
        echo twig_escape_filter($this->env, ((("https://tyflex.to" . "/share/") . $this->getAttribute(($context["poster"] ?? null), "id", [])) . ".html"), "html", null, true);
        echo "&amp;text=";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "title", []), "html", null, true);
        echo "\" target=\"_blank\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"header-ratings\">
\t\t\t\t\t\t";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "rating", []), "html", null, true);
        echo "/5
\t\t\t\t\t\t";
        // line 41
        $context["rate"] = $this->getAttribute(($context["poster"] ?? null), "rating", []);
        // line 42
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 43
            echo "\t\t\t\t\t\t\t";
            if ((($context["rate"] ?? null) >= 1)) {
                // line 44
                echo "\t\t\t\t\t\t\t\t<i class=\"fas fa-star checked\"></i>
\t\t\t\t\t\t\t";
            }
            // line 46
            echo "\t\t\t\t\t\t\t";
            if (((($context["rate"] ?? null) >= 0.25) && (($context["rate"] ?? null) < 0.75))) {
                // line 47
                echo "\t\t\t\t\t\t\t\t<i class=\"fas fa-star-half-alt checked\"></i>
\t\t\t\t\t\t\t";
            }
            // line 49
            echo "\t\t\t\t\t\t\t";
            if (((($context["rate"] ?? null) >= 0.75) && (($context["rate"] ?? null) < 1))) {
                // line 50
                echo "\t\t\t\t\t\t\t\t<i class=\"fas fa-star checked\"></i>
\t\t\t\t\t\t\t";
            }
            // line 52
            echo "\t\t\t\t\t\t\t";
            if ((($context["rate"] ?? null) < 0.25)) {
                // line 53
                echo "\t\t\t\t\t\t\t\t<i class=\"far fa-star checked\"></i>
\t\t\t\t\t\t\t";
            }
            // line 55
            echo "\t\t\t\t\t\t\t";
            $context["rate"] = (($context["rate"] ?? null) - 1);
            // line 56
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t\t\t\t\t\t• ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "imdb", []), "html", null, true);
        echo " / 10 <span class=\"imdb\">IMDb</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-12\" >
\t\t\t";
        // line 63
        if (($this->getAttribute(($context["poster"] ?? null), "trailer", []) != null)) {
            // line 64
            echo "\t\t\t\t<button id=\"trailer-btn\" class=\"btn play-btn\"><span class=\"fa fa-bullhorn\"></span> Trailer</button>
\t\t\t";
        }
        // line 66
        echo "
\t\t\t<a class=\"btn play-btn dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t<span class=\"fa fa-star\"></span> Avaliar Série
\t\t\t</a>
\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
\t\t\t\t<div class=\"comment-item  review-write\">
\t\t\t\t\t<div class='alert alert-success success-review' role='alert'>
\t\t\t\t\t\t<i class='fas fa-comment-alt'></i> Sua foi avaliada com sucesso!
\t\t\t\t\t</div>
\t\t\t\t\t<div class='alert alert-danger error-review' role='alert'>
\t\t\t\t\t\t<i class='fas fa-comment-alt'></i> Não foi possível enviar sua avaliação
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"rate\" id=\"rate-input\" alt=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "id", []), "html", null, true);
        echo "\">
\t\t\t\t\t\t<input type=\"radio\" id=\"star5\" name=\"rate\" value=\"5\" />
\t\t\t\t\t\t<label for=\"star5\" title=\"text\">5 estrelas</label>
\t\t\t\t\t\t<input type=\"radio\" id=\"star4\" name=\"rate\" value=\"4\" />
\t\t\t\t\t\t<label for=\"star4\" title=\"text\">4 estrelas</label>
\t\t\t\t\t\t<input type=\"radio\" id=\"star3\" name=\"rate\" value=\"3\" />
\t\t\t\t\t\t<label for=\"star3\" title=\"text\">3 estrelas</label>
\t\t\t\t\t\t<input type=\"radio\" id=\"star2\" name=\"rate\" value=\"2\" />
\t\t\t\t\t\t<label for=\"star2\" title=\"text\">2 estrelas</label>
\t\t\t\t\t\t<input type=\"radio\" checked=\"true\" id=\"star1\" name=\"rate\" value=\"1\" />
\t\t\t\t\t\t<label for=\"star1\" title=\"text\">1 estrelas</label>
\t\t\t\t\t</div>
\t\t\t\t\t<textarea  class=\"input-review\" placeholder=\"Escreva sua avaliação aqui\"></textarea>
\t\t\t\t\t";
        // line 91
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 92
            echo "\t\t\t\t\t\t<button alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "id", []), "html", null, true);
            echo "\"  type=\"poster\" class=\"btn btn-primary  submit-review btn-block\"><i class=\"fas fa-paper-plane\"></i>  Enviar revisão</button>
\t\t\t\t\t\t<button alt=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "id", []), "html", null, true);
            echo "\" class=\"btn btn-primary  loading-review btn-block\"><i class=\"fas fa-circle-notch fa-spin\"></i>  Revisar Interação</button>
\t\t\t\t\t";
        } else {
            // line 95
            echo "\t\t\t\t\t\t<button  class=\"btn btn-primary btn-block open-login\"> <i class=\"fas fa-check\"></i> Faça login para deixar um comentário </button>
\t\t\t\t\t";
        }
        // line 97
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 100
        if (($this->getAttribute(($context["poster"] ?? null), "trailer", []) != null)) {
            // line 101
            echo "\t\t\t<div class=\"trailer-video\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["poster"] ?? null), "trailer", []), "youtubeid", []), "html", null, true);
            echo "\"></div>
\t\t";
        }
        // line 103
        echo "\t";
        if (($this->getAttribute(($context["settings"] ?? null), "seriebannertype", []) == "image")) {
            // line 104
            echo "\t\t<div class=\"col-sm-12 col-md-12 ads-element\">\t\t
\t\t\t<img src=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "homebanner", []), "html", null, true);
            echo "\">
\t\t</div>
\t";
        } elseif (($this->getAttribute(        // line 107
($context["settings"] ?? null), "seriebannertype", []) == "code")) {
            // line 108
            echo "\t\t<div class=\"col-sm-12 col-md-12\">\t\t
\t\t\t";
            // line 109
            echo $this->getAttribute(($context["settings"] ?? null), "homebanner", []);
            echo "
\t\t</div>
\t";
        }
        // line 112
        echo "\t\t<div class=\"col-md-12 padding-top-20\" >
\t\t\t<div class=\"movie-section-title\">Sinopse</div>
\t\t</div>
\t\t<div class=\"col-md-12\" >
\t\t\t<p>
\t\t\t\t";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "description", []), "html", null, true);
        echo "
\t\t\t</p>
\t\t</div>
\t\t";
        // line 120
        if ((twig_length_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "seasons", [])) != 0)) {
            // line 121
            echo "\t\t\t<div class=\"col-md-12 padding-top-20\" >
\t\t\t\t<div class=\"movie-section-title season-btn-selected\">";
            // line 122
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["poster"] ?? null), "seasons", []), 0, [], "array"), "title", [])), "html", null, true);
            echo "</div>
\t\t\t\t<div class=\"btn-group float-right season-dropdown\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary dropdown-toggle season-btn-selected\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t";
            // line 125
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["poster"] ?? null), "seasons", []), 0, [], "array"), "title", [])), "html", null, true);
            echo "
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t";
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["poster"] ?? null), "seasons", []));
            foreach ($context['_seq'] as $context["_key"] => $context["season"]) {
                // line 129
                echo "\t\t\t\t\t\t\t<button class=\"dropdown-item season-btn\"  alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["season"], "id", []), "html", null, true);
                echo "\" type=\"button\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["season"], "title", [])), "html", null, true);
                echo "</button>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['season'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"flix-carousel\" >
\t\t\t\t<button  class=\"prev_btn\"><i class=\"fa fa-chevron-left\"></i></button>
\t\t\t\t<button  class=\"next_btn\"><i class=\"fa fa-chevron-right\"></i></button>
\t\t\t\t<div class=\"flix-scroll-x serie-episodes\">
\t\t\t\t\t";
            // line 138
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebBundle:Serie:episodes", ["id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["poster"] ?? null), "seasons", []), 0, [], "array"), "id", [])]));
            echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"serie-episodes-loading\">
\t\t\t\t\t<i class=\"fas fa-circle-notch fa-spin\"></i>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 145
        echo "\t\t";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "roles", [])) != 0)) {
            // line 146
            echo "\t\t\t<div class=\"col-md-12 padding-top-20\" >
\t\t\t\t<div class=\"movie-section-title\">Elenco</div>
\t\t\t</div>
\t\t\t<div class=\"flix-carousel\" >
\t\t\t\t<button  class=\"prev_btn\"><i class=\"fa fa-chevron-left\"></i></button>
\t\t\t\t<button  class=\"next_btn\"><i class=\"fa fa-chevron-right\"></i></button>
\t\t\t\t<div class=\"flix-scroll-x\">
\t\t\t\t\t";
            // line 153
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
                // line 154
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
            // line 156
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 159
        echo "\t\t";
        if ((twig_length_filter($this->env, ($context["related_posters"] ?? null)) != 0)) {
            // line 160
            echo "\t\t\t<div class=\"col-md-12 padding-top-20\" >
\t\t\t\t<div class=\"movie-section-title\">Recomendados para você</div>
\t\t\t</div>
\t\t\t<div class=\"flix-carousel\" >
\t\t\t\t<button  class=\"prev_btn\"><i class=\"fa fa-chevron-left\"></i></button>
\t\t\t\t<button  class=\"next_btn\"><i class=\"fa fa-chevron-right\"></i></button>
\t\t\t\t<div class=\"flix-scroll-x\">
\t\t\t\t\t";
            // line 167
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
                // line 168
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["related_poster"], "type", []) == "movie")) {
                    // line 169
                    echo "\t\t\t\t\t\t\t";
                    echo twig_include($this->env, $context, "WebBundle:Movie:movie.html.twig", ["poster" => $context["related_poster"]]);
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 171
                    echo "\t\t\t\t\t\t\t";
                    echo twig_include($this->env, $context, "WebBundle:Serie:serie.html.twig", ["poster" => $context["related_poster"]]);
                    echo "
\t\t\t\t\t\t";
                }
                // line 173
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
            // line 174
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 177
        echo "\t\t";
        if ($this->getAttribute(($context["poster"] ?? null), "comment", [])) {
            // line 178
            echo "\t\t\t<div class=\"col-md-6 padding-top-20\">
\t\t\t\t<div class=\"movie-section-title\"><i class=\"fa fa-comment\"></i> ";
            // line 179
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["comments"] ?? null)), "html", null, true);
            echo " Comentários</div>
\t\t\t\t<div class=\"comment-section comment-list\">
\t\t\t\t\t";
            // line 181
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 182
                echo "\t\t\t\t\t\t<div class=\"comment-item\">
\t\t\t\t\t\t\t<a title=\"View profile\" href=\"#\" class=\"avatar-thumb\"><img  src=\"";
                // line 183
                echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", []), "media", []), "type", []) == "link")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", []), "media", []), "url", [])) : ($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", []), "media", []), "link", [])), "actor_thumb_mini_web"))), "html", null, true);
                echo "\"></a>
\t\t\t\t\t\t\t<div class=\"comment-text\">
\t\t\t\t\t\t\t\t<a>";
                // line 185
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", []), "name", []), "html", null, true);
                echo "</a><span class=\"float-right\"><i class=\"fa fa-clock-o\"></i> ";
                echo $this->env->getExtension('Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension')->diff($this->getAttribute($context["comment"], "created", []));
                echo " </span>
\t\t\t\t\t\t\t\t<p> ";
                // line 186
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "contentclear", []), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "\t\t\t\t</div>
\t\t\t\t<div class='alert alert-success success-comment' role='alert'>
\t\t\t\t\t<i class='fas fa-comment-alt'></i> Seu comentário foi adicionado com sucesso!
\t\t\t\t</div>
\t\t\t\t<div class='alert alert-danger error-comment' role='alert'>
\t\t\t\t\t<i class='fas fa-comment-alt'></i> Não foi possível enviar seu comentário
\t\t\t\t</div>
\t\t\t\t";
            // line 197
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 198
                echo "\t\t\t\t\t<div class=\"comment-item comment-write\">
\t\t\t\t\t\t<a title=\"View profile\" href=\"#\" class=\"avatar-thumb\"><img  src=\"";
                // line 199
                echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "media", []), "type", []) == "link")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "media", []), "url", [])) : ($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "media", []), "link", [])), "actor_thumb_mini_web"))), "html", null, true);
                echo "\"></a>
\t\t\t\t\t\t<div class=\"comment-text\">
\t\t\t\t\t\t\t<a>";
                // line 201
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "name", []), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t<textarea  class=\"input-comment\" alt=\"poster\" placeholder=\"Escreva seu comentário aqui\"></textarea>
\t\t\t\t\t\t\t<button alt=\"";
                // line 203
                echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "id", []), "html", null, true);
                echo "\" class=\"btn btn-primary float-right submit-comment\"><i class=\"fas fa-paper-plane\"></i> enviar comentário</button>
\t\t\t\t\t\t\t<button alt=\"";
                // line 204
                echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "id", []), "html", null, true);
                echo "\" class=\"btn btn-primary float-right loading-comment\"><i class=\"fas fa-circle-notch fa-spin\"></i> Interação de comentários</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            } else {
                // line 208
                echo "\t\t\t\t\t<button class=\"btn comment-btn-item open-login\">
\t\t\t\t\t<i class=\"fa fa-check\"></i> Entre para deixar um comentário
\t\t\t\t\t</button>
\t\t\t\t";
            }
            // line 212
            echo "\t\t\t</div>
\t\t";
        }
        // line 214
        echo "\t\t<div class=\"col-md-6 padding-top-20\">
\t\t\t<div class=\"movie-section-title\"><i class=\"fa fa-star\"></i> ";
        // line 215
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "ratings", [])), "html", null, true);
        echo " Avaliações </div>
\t\t\t<div class=\"comment-section \">
\t\t\t\t";
        // line 217
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["poster"] ?? null), "ratings", []));
        foreach ($context['_seq'] as $context["_key"] => $context["rating"]) {
            // line 218
            echo "\t\t\t\t\t<div class=\"review\">
\t\t\t\t\t\t<div class=\"review-properties\">
\t\t\t\t\t\t\tRevisados ​​pela
\t\t\t\t\t\t\t<span class=\"review-author\">";
            // line 221
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rating"], "user", []), "name", []), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t<span class=\"review-rating\">";
            // line 223
            echo twig_escape_filter($this->env, $this->getAttribute($context["rating"], "value", []), "html", null, true);
            echo " / 5</span>
\t\t\t\t\t\t\t<span class=\"float-right\"><i class=\"fa fa-clock-o\"></i> ";
            // line 224
            echo $this->env->getExtension('Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension')->diff($this->getAttribute($context["rating"], "created", []));
            echo " </span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<article><p>";
            // line 226
            echo twig_escape_filter($this->env, $this->getAttribute($context["rating"], "review", []), "html", null, true);
            echo "</p></article>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rating'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 229
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
";
    }

    public function getTemplateName()
    {
        return "WebBundle:Serie:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  596 => 229,  587 => 226,  582 => 224,  578 => 223,  573 => 221,  568 => 218,  564 => 217,  559 => 215,  556 => 214,  552 => 212,  546 => 208,  539 => 204,  535 => 203,  530 => 201,  525 => 199,  522 => 198,  520 => 197,  511 => 190,  501 => 186,  495 => 185,  490 => 183,  487 => 182,  483 => 181,  478 => 179,  475 => 178,  472 => 177,  467 => 174,  453 => 173,  447 => 171,  441 => 169,  438 => 168,  421 => 167,  412 => 160,  409 => 159,  404 => 156,  387 => 154,  370 => 153,  361 => 146,  358 => 145,  348 => 138,  339 => 131,  328 => 129,  324 => 128,  318 => 125,  312 => 122,  309 => 121,  307 => 120,  301 => 117,  294 => 112,  288 => 109,  285 => 108,  283 => 107,  278 => 105,  275 => 104,  272 => 103,  266 => 101,  264 => 100,  259 => 97,  255 => 95,  250 => 93,  245 => 92,  243 => 91,  227 => 78,  213 => 66,  209 => 64,  207 => 63,  197 => 57,  191 => 56,  188 => 55,  184 => 53,  181 => 52,  177 => 50,  174 => 49,  170 => 47,  167 => 46,  163 => 44,  160 => 43,  155 => 42,  153 => 41,  149 => 40,  137 => 33,  131 => 30,  125 => 27,  115 => 24,  110 => 21,  106 => 19,  94 => 17,  92 => 16,  70 => 14,  64 => 11,  60 => 9,  57 => 8,  51 => 7,  46 => 1,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Serie:view.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Serie/view.html.twig");
    }
}
