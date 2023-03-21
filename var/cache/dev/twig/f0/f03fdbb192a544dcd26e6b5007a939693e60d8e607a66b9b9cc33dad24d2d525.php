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
class __TwigTemplate_e7dca0b427cec69521ea3a7784f004bdec590aba046f00f744a81b6c537d9475 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Movie:view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Movie:view.html.twig"));

        // line 2
        $context["subtitle"] = $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "title", []);
        // line 3
        $context["og_description"] = $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "description", []);
        // line 4
        $context["og_type"] = "video.movie";
        // line 5
        $context["og_image"] = $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "poster", []), "link", [])), "poster_thumb");
        // line 6
        $context["keywords"] = $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "tags", []);
        // line 1
        $this->parent = $this->loadTemplate("WebBundle::layout.html.twig", "WebBundle:Movie:view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "title", []), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<div class=\"row content-section\">
\t\t<div class=\"col-md-12\" >
\t\t\t<div class=\"movie-header-bg\" style=\" background-image: url('";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((($this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "cover", []) == null)) ? ($this->getAttribute($this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "poster", []), "link", [])) : ($this->getAttribute($this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "cover", []), "link", [])))), "html", null, true);
        echo "');\">
\t\t\t\t<div class=\"movie-header\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"movie-infos\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "year", []), "html", null, true);
        echo " • ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "classification", []), "html", null, true);
        echo " • ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "duration", []), "html", null, true);
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "genres", []));
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
            echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "id", []), "html", null, true);
            echo "\" >";
            if (($context["favorited"] ?? $this->getContext($context, "favorited"))) {
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "title", []), "html", null, true);
        echo "&amp;Body=";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "description", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((("https://tyflex.to" . "/share/") . $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "id", [])) . ".html"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<i class=\"fas fa-envelope\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"http://www.facebook.com/sharer.php?u=";
        // line 28
        echo twig_escape_filter($this->env, ((("https://tyflex.to" . "/share/") . $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "id", [])) . ".html"), "html", null, true);
        echo "\" target=\"_blank\">
\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"http://www.linkedin.com/shareArticle?mini=true&amp;url=";
        // line 31
        echo twig_escape_filter($this->env, ((("https://tyflex.to" . "/share/") . $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "id", [])) . ".html"), "html", null, true);
        echo "\" target=\"_blank\">
\t\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"https://twitter.com/share?url=";
        // line 34
        echo twig_escape_filter($this->env, ((("https://tyflex.to" . "/share/") . $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "id", [])) . ".html"), "html", null, true);
        echo "&amp;text=";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "title", []), "html", null, true);
        echo "\" target=\"_blank\">
\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"header-ratings\">
\t\t\t\t\t";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "rating", []), "html", null, true);
        echo "/5
\t\t\t\t\t";
        // line 42
        $context["rate"] = $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "rating", []);
        // line 43
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 44
            echo "\t\t\t\t\t\t";
            if ((($context["rate"] ?? $this->getContext($context, "rate")) >= 1)) {
                // line 45
                echo "\t\t\t\t\t\t\t<i class=\"fas fa-star checked\"></i>
\t\t\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\t\t\t";
            if (((($context["rate"] ?? $this->getContext($context, "rate")) >= 0.25) && (($context["rate"] ?? $this->getContext($context, "rate")) < 0.75))) {
                // line 48
                echo "\t\t\t\t\t\t\t<i class=\"fas fa-star-half-alt checked\"></i>
\t\t\t\t\t\t";
            }
            // line 50
            echo "\t\t\t\t\t\t";
            if (((($context["rate"] ?? $this->getContext($context, "rate")) >= 0.75) && (($context["rate"] ?? $this->getContext($context, "rate")) < 1))) {
                // line 51
                echo "\t\t\t\t\t\t\t<i class=\"fas fa-star checked\"></i>
\t\t\t\t\t\t";
            }
            // line 53
            echo "\t\t\t\t\t\t";
            if ((($context["rate"] ?? $this->getContext($context, "rate")) < 0.25)) {
                // line 54
                echo "\t\t\t\t\t\t\t<i class=\"far fa-star checked\"></i>
\t\t\t\t\t\t";
            }
            // line 56
            echo "\t\t\t\t\t\t";
            $context["rate"] = (($context["rate"] ?? $this->getContext($context, "rate")) - 1);
            // line 57
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t\t\t\t• ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "imdb", []), "html", null, true);
        echo " / 10 <span class=\"imdb\">IMDb</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col-md-12\" >
\t\t<div class=\"dropdown\">
\t\t\t\t";
        // line 65
        if ((twig_length_filter($this->env, ($context["all_sources"] ?? $this->getContext($context, "all_sources"))) > 0)) {
            // line 66
            echo "\t\t\t\t\t";
            if ((twig_length_filter($this->env, ($context["sources"] ?? $this->getContext($context, "sources"))) > 0)) {
                // line 67
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_player_movie", ["id" => $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "id", []), "slug" => $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "slug", []), "source" => $this->getAttribute($this->getAttribute(($context["sources"] ?? $this->getContext($context, "sources")), 0, [], "array"), "id", [])]), "html", null, true);
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
        if (($this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "trailer", []) != null)) {
            // line 73
            echo "\t\t\t\t\t<button id=\"trailer-btn\" class=\"btn play-btn\"><span class=\"fa fa-bullhorn\"></span> Trailer</button>
\t\t\t\t";
        }
        // line 75
        echo "\t\t\t\t";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "subtitles", [])) > 0)) {
            // line 76
            echo "\t\t\t\t\t<button id=\"subtitles-btn\" class=\"btn play-btn movie-subtitles\"  data-id=";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "id", []), "html", null, true);
            echo " data-title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "title", []), "html", null, true);
            echo "\"><span class=\"fa fa-cc\"></span> Legendas</button>
\t\t\t\t";
        }
        // line 78
        echo "
\t\t\t\t";
        // line 79
        if ((twig_length_filter($this->env, ($context["all_source_downloads"] ?? $this->getContext($context, "all_source_downloads"))) > 0)) {
            // line 80
            echo "\t\t\t\t\t<button id=\"downloads-btn\" class=\"btn play-btn movie-downloads\"  data-id=";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "id", []), "html", null, true);
            echo " data-title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "title", []), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "id", []), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "id", []), "html", null, true);
            echo "\" type=\"poster\"  class=\"btn btn-primary  submit-review btn-block\"><i class=\"fas fa-paper-plane\"></i> Enviar Avaliação</button>
\t\t\t\t\t\t\t<button alt=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "id", []), "html", null, true);
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
        if (($this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "moviebannertype", []) == "image")) {
            // line 117
            echo "\t\t\t<div class=\"col-sm-12 col-md-12 ads-element\">
\t\t\t\t<img src=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "homebanner", []), "html", null, true);
            echo "\">
\t\t\t</div>
\t\t";
        } elseif (($this->getAttribute(        // line 120
($context["settings"] ?? $this->getContext($context, "settings")), "moviebannertype", []) == "code")) {
            // line 121
            echo "\t\t\t<div class=\"col-sm-12 col-md-12\">
\t\t\t\t";
            // line 122
            echo $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "homebanner", []);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "description", []), "html", null, true);
        echo "
\t\t\t</p>
\t\t</div>
\t\t";
        // line 133
        if ((twig_length_filter($this->env, $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "roles", [])) != 0)) {
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "roles", []));
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
        if ((twig_length_filter($this->env, ($context["related_posters"] ?? $this->getContext($context, "related_posters"))) != 0)) {
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
            $context['_seq'] = twig_ensure_traversable(($context["related_posters"] ?? $this->getContext($context, "related_posters")));
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
        if ($this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "comment", [])) {
            // line 167
            echo "\t\t\t<div class=\"col-md-6 padding-top-20\">
\t\t\t\t<div class=\"movie-section-title\"><i class=\"fa fa-comment\"></i> ";
            // line 168
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["comments"] ?? $this->getContext($context, "comments"))), "html", null, true);
            echo " Comentários</div>
\t\t\t\t<div class=\"comment-section comment-list\">
\t\t\t\t\t";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? $this->getContext($context, "comments")));
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
                echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "media", []), "type", []) == "link")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "media", []), "url", [])) : ($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "media", []), "link", [])), "actor_thumb_mini_web"))), "html", null, true);
                echo "\"></a>
\t\t\t\t\t\t<div class=\"comment-text\">
\t\t\t\t\t\t\t<a>";
                // line 190
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "name", []), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t<textarea  class=\"input-comment\" alt=\"poster\" placeholder=\"Write you comment here\"></textarea>
\t\t\t\t\t\t\t<button alt=\"";
                // line 192
                echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "id", []), "html", null, true);
                echo "\" class=\"btn btn-primary float-right submit-comment\"><i class=\"fas fa-paper-plane\"></i> enviar comentário</button>
\t\t\t\t\t\t\t<button alt=\"";
                // line 193
                echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "id", []), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["ratings"] ?? $this->getContext($context, "ratings"))), "html", null, true);
        echo " Avaliações</div>
\t\t\t<div class=\"comment-section \">
\t\t\t\t";
        // line 206
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ratings"] ?? $this->getContext($context, "ratings")));
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
        if (($this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "trailer", []) != null)) {
            // line 236
            echo "\t\t<div class=\"trailer-video\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "trailer", []), "youtubeid", []), "html", null, true);
            echo "\"></div>
\t";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  634 => 236,  632 => 235,  613 => 218,  604 => 215,  599 => 213,  595 => 212,  590 => 210,  585 => 207,  581 => 206,  576 => 204,  573 => 203,  569 => 201,  563 => 197,  556 => 193,  552 => 192,  547 => 190,  542 => 188,  539 => 187,  537 => 186,  528 => 179,  518 => 175,  512 => 174,  507 => 172,  504 => 171,  500 => 170,  495 => 168,  492 => 167,  489 => 166,  483 => 162,  469 => 161,  463 => 159,  457 => 157,  454 => 156,  437 => 155,  428 => 148,  425 => 147,  420 => 144,  403 => 142,  386 => 141,  377 => 134,  375 => 133,  369 => 130,  362 => 125,  356 => 122,  353 => 121,  351 => 120,  346 => 118,  343 => 117,  341 => 116,  335 => 112,  331 => 110,  326 => 108,  321 => 107,  319 => 106,  303 => 93,  290 => 82,  282 => 80,  280 => 79,  277 => 78,  269 => 76,  266 => 75,  262 => 73,  259 => 72,  256 => 71,  250 => 69,  244 => 67,  241 => 66,  239 => 65,  228 => 58,  222 => 57,  219 => 56,  215 => 54,  212 => 53,  208 => 51,  205 => 50,  201 => 48,  198 => 47,  194 => 45,  191 => 44,  186 => 43,  184 => 42,  180 => 41,  168 => 34,  162 => 31,  156 => 28,  146 => 25,  141 => 22,  137 => 20,  125 => 18,  123 => 17,  119 => 15,  100 => 14,  94 => 11,  90 => 9,  81 => 8,  63 => 7,  52 => 1,  50 => 6,  48 => 5,  46 => 4,  44 => 3,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"WebBundle::layout.html.twig\" %}
{% set subtitle =  poster.title %}
{% set og_description =  poster.description %}
{% set og_type =  \"video.movie\" %}
{% set og_image =  asset(poster.poster.link)|imagine_filter('poster_thumb') %}
{% set keywords =  poster.tags %}
{% block title %}{{poster.title}}{% endblock %}
{% block body %}
\t<div class=\"row content-section\">
\t\t<div class=\"col-md-12\" >
\t\t\t<div class=\"movie-header-bg\" style=\" background-image: url('{{asset((poster.cover == null)? poster.poster.link : poster.cover.link)}}');\">
\t\t\t\t<div class=\"movie-header\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"movie-infos\">{{poster.year}} • {{poster.classification}} • {{poster.duration}} {% for genre in poster.genres %} • <a href=\"{{path(\"wep_movie_index\",{genre: genre.title,order:\"views\"})}}\">{{genre.title}}</a>{% endfor %}
\t\t\t\t</div>
\t\t\t\t<div class=\"header-buttons\">
\t\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t\t<button class=\"btn-fav\" alt=\"{{poster.id}}\" >{% if favorited %}<i class=\"fa fa-heart\"></i>{% else %}<i class=\"far fa-heart\"></i>{% endif %}</button>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<button  class=\"open-login\"> <i class=\"far fa-heart\"></i></button>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<button id=\"share-btn\">
\t\t\t\t\t<i  class=\"fa fa-share \"></i>COMPARTILHAR
\t\t\t\t\t<div class=\"share-buttons\">
\t\t\t\t\t\t<a href=\"mailto:?Subject={{poster.title}}&amp;Body={{poster.description}} {{ \"https://tyflex.to\" ~ \"/share/\" ~ poster.id ~ \".html\"}}\">
\t\t\t\t\t\t\t<i class=\"fas fa-envelope\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"http://www.facebook.com/sharer.php?u={{ \"https://tyflex.to\" ~ \"/share/\" ~ poster.id ~ \".html\"}}\" target=\"_blank\">
\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"http://www.linkedin.com/shareArticle?mini=true&amp;url={{ \"https://tyflex.to\" ~ \"/share/\" ~ poster.id ~ \".html\"}}\" target=\"_blank\">
\t\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"https://twitter.com/share?url={{ \"https://tyflex.to\" ~ \"/share/\" ~ poster.id ~ \".html\"}}&amp;text={{poster.title}}\" target=\"_blank\">
\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"header-ratings\">
\t\t\t\t\t{{poster.rating}}/5
\t\t\t\t\t{% set rate = poster.rating %}
\t\t\t\t\t{% for i in 1..5 %}
\t\t\t\t\t\t{% if rate >= 1 %}
\t\t\t\t\t\t\t<i class=\"fas fa-star checked\"></i>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if rate >= 0.25 and  rate < 0.75 %}
\t\t\t\t\t\t\t<i class=\"fas fa-star-half-alt checked\"></i>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if rate >= 0.75 and  rate < 1 %}
\t\t\t\t\t\t\t<i class=\"fas fa-star checked\"></i>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if rate < 0.25 %}
\t\t\t\t\t\t\t<i class=\"far fa-star checked\"></i>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% set rate  =  rate - 1 %}
\t\t\t\t\t{% endfor %}
\t\t\t\t\t• {{poster.imdb}} / 10 <span class=\"imdb\">IMDb</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col-md-12\" >
\t\t<div class=\"dropdown\">
\t\t\t\t{% if all_sources|length > 0 %}
\t\t\t\t\t{% if sources|length >0 %}
\t\t\t\t\t\t<a href=\"{{path(\"wep_player_movie\",{id:poster.id,slug:poster.slug,source:sources[0].id})}}\" class=\"btn play-btn\"><span class=\"fa fa-play\"></span> Reproduzir</a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a href=\"{{path(\"wep_subscription_subscribe\")}}\" class=\"btn play-btn\"><i class=\"fas fa-star\"></i> Comprar ou Renovar</a>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endif %}
\t\t\t\t{% if poster.trailer != null %}
\t\t\t\t\t<button id=\"trailer-btn\" class=\"btn play-btn\"><span class=\"fa fa-bullhorn\"></span> Trailer</button>
\t\t\t\t{%  endif %}
\t\t\t\t{% if poster.subtitles|length > 0 %}
\t\t\t\t\t<button id=\"subtitles-btn\" class=\"btn play-btn movie-subtitles\"  data-id={{poster.id}} data-title=\"{{poster.title}}\"><span class=\"fa fa-cc\"></span> Legendas</button>
\t\t\t\t{% endif %}

\t\t\t\t{% if all_source_downloads|length > 0 %}
\t\t\t\t\t<button id=\"downloads-btn\" class=\"btn play-btn movie-downloads\"  data-id={{poster.id}} data-title=\"{{poster.title}}\"><span class=\"fas fa-download\"></span> Download</button>
\t\t\t\t{% endif %}
\t\t\t\t<a class=\"btn play-btn dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
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
\t\t\t\t\t\t<div class=\"rate\" id=\"rate-input\" alt=\"{{poster.id}}\">
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
\t\t\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t\t\t<button alt=\"{{poster.id}}\" type=\"poster\"  class=\"btn btn-primary  submit-review btn-block\"><i class=\"fas fa-paper-plane\"></i> Enviar Avaliação</button>
\t\t\t\t\t\t\t<button alt=\"{{poster.id}}\" class=\"btn btn-primary  loading-review btn-block\"><i class=\"fas fa-circle-notch fa-spin\"></i>  Revisar Interação</button>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<button  class=\"btn btn-primary btn-block open-login\"> <i class=\"fas fa-check\"></i> Faça login para deixar um comentário </button>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t{% if settings.moviebannertype == \"image\"%}
\t\t\t<div class=\"col-sm-12 col-md-12 ads-element\">
\t\t\t\t<img src=\"{{settings.homebanner}}\">
\t\t\t</div>
\t\t{% elseif settings.moviebannertype ==\"code\" %}
\t\t\t<div class=\"col-sm-12 col-md-12\">
\t\t\t\t{{settings.homebanner|raw}}
\t\t\t</div>
\t\t{% endif %}
\t\t<div class=\"col-md-12 padding-top-20\" >
\t\t\t<div class=\"movie-section-title\">Sinopse</div>
\t\t</div>
\t\t<div class=\"col-md-12\" >
\t\t\t<p>
\t\t\t\t{{poster.description}}
\t\t\t</p>
\t\t</div>
\t\t{% if poster.roles|length != 0 %}
\t\t\t<div class=\"col-md-12 padding-top-20\" >
\t\t\t\t<div class=\"movie-section-title\">Elenco</div>
\t\t\t</div>
\t\t\t<div class=\"flix-carousel\" >
\t\t\t\t<button  class=\"prev_btn\"><i class=\"fa fa-chevron-left\"></i></button>
\t\t\t\t<button  class=\"next_btn\"><i class=\"fa fa-chevron-right\"></i></button>
\t\t\t\t<div class=\"flix-scroll-x\">
\t\t\t\t\t{% for cast in poster.roles %}
\t\t\t\t\t\t{{ include('WebBundle:Actor:cast.html.twig',{cast:cast}) }}
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}
\t\t{% if related_posters|length != 0 %}
\t\t\t<div class=\"col-md-12 padding-top-20\" >
\t\t\t\t<div class=\"movie-section-title\">Recomendados para você</div>
\t\t\t</div>
\t\t\t<div class=\"flix-carousel\" >
\t\t\t\t<button  class=\"prev_btn\"><i class=\"fa fa-chevron-left\"></i></button>
\t\t\t\t<button  class=\"next_btn\"><i class=\"fa fa-chevron-right\"></i></button>
\t\t\t\t<div class=\"flix-scroll-x\">
\t\t\t\t\t{% for related_poster in related_posters %}
\t\t\t\t\t\t{% if related_poster.type == \"movie\" %}
\t\t\t\t\t\t\t{{ include('WebBundle:Movie:movie.html.twig',{poster:related_poster}) }}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{{ include('WebBundle:Serie:serie.html.twig',{poster:related_poster}) }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}
\t\t{% if poster.comment %}
\t\t\t<div class=\"col-md-6 padding-top-20\">
\t\t\t\t<div class=\"movie-section-title\"><i class=\"fa fa-comment\"></i> {{comments|length}} Comentários</div>
\t\t\t\t<div class=\"comment-section comment-list\">
\t\t\t\t\t{% for comment in comments %}
\t\t\t\t\t\t<div class=\"comment-item\">
\t\t\t\t\t\t\t<a title=\"View profile\" href=\"#\" class=\"avatar-thumb\"><img  src=\"{{(comment.user.media.type == \"link\")? comment.user.media.url : asset(comment.user.media.link)|imagine_filter('actor_thumb_mini_web')}}\"></a>
\t\t\t\t\t\t\t<div class=\"comment-text\">
\t\t\t\t\t\t\t\t<a>{{comment.user.name}}</a><span class=\"float-right\"><i class=\"fa fa-clock-o\"></i> {{comment.created|ago}} </span>
\t\t\t\t\t\t\t\t<p> {{(comment.contentclear)}}</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t\t<div class='alert alert-success success-comment' role='alert'>
\t\t\t\t\t<i class='fas fa-comment-alt'></i> Seu comentário foi adicionado com sucesso!
\t\t\t\t</div>
\t\t\t\t<div class='alert alert-danger error-comment' role='alert'>
\t\t\t\t\t<i class='fas fa-comment-alt'></i> Não foi possível enviar seu comentário
\t\t\t\t</div>
\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t<div class=\"comment-item comment-write\">
\t\t\t\t\t\t<a title=\"View profile\" href=\"#\" class=\"avatar-thumb\"><img  src=\"{{(app.user.media.type == \"link\" )? app.user.media.url : asset(app.user.media.link)|imagine_filter('actor_thumb_mini_web')}}\"></a>
\t\t\t\t\t\t<div class=\"comment-text\">
\t\t\t\t\t\t\t<a>{{app.user.name}}</a>
\t\t\t\t\t\t\t<textarea  class=\"input-comment\" alt=\"poster\" placeholder=\"Write you comment here\"></textarea>
\t\t\t\t\t\t\t<button alt=\"{{poster.id}}\" class=\"btn btn-primary float-right submit-comment\"><i class=\"fas fa-paper-plane\"></i> enviar comentário</button>
\t\t\t\t\t\t\t<button alt=\"{{poster.id}}\" class=\"btn btn-primary float-right loading-comment\"><i class=\"fas fa-circle-notch fa-spin\"></i> Interação de comentários</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% else %}
\t\t\t\t\t<button class=\"btn comment-btn-item open-login\">
\t\t\t\t\t<i class=\"fa fa-check\"></i> Entre para deixar um comentário
\t\t\t\t\t</button>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t{% endif %}
\t\t<div class=\"col-md-6 padding-top-20\">
\t\t\t<div class=\"movie-section-title\"><i class=\"fa fa-star\"></i> {{ratings|length}} Avaliações</div>
\t\t\t<div class=\"comment-section \">
\t\t\t\t{% for rating in ratings %}
\t\t\t\t\t<div class=\"review\">
\t\t\t\t\t\t<div class=\"review-properties\">
\t\t\t\t\t\t\tRevisados ​​pela
\t\t\t\t\t\t\t<span class=\"review-author\">{{rating.user.name}}</span>
\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t<span class=\"review-rating\">{{rating.value}} / 5</span>
\t\t\t\t\t\t\t<span class=\"float-right\"><i class=\"fa fa-clock-o\"></i> {{rating.created|ago}} </span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<article><p>{{rating.review}}</p></article>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
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
\t{% if poster.trailer != null %}
\t\t<div class=\"trailer-video\" alt=\"{{poster.trailer.youtubeid}}\"></div>
\t{% endif %}
{% endblock%}", "WebBundle:Movie:view.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Movie/view.html.twig");
    }
}
