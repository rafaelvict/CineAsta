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

/* WebBundle:Channel:view.html.twig */
class __TwigTemplate_15f4f1ee8b4da01308c2417bb45a96d9fd2b4530a59733a6772795db80e55864 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Channel:view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Channel:view.html.twig"));

        // line 2
        $context["subtitle"] = $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "title", []);
        // line 3
        $context["og_description"] = $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "description", []);
        // line 4
        $context["og_type"] = "video.movie";
        // line 5
        $context["og_image"] = $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "media", []), "link", [])), "channel_thumb");
        // line 6
        $context["keywords"] = $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "tags", []);
        // line 1
        $this->parent = $this->loadTemplate("WebBundle::layout.html.twig", "WebBundle:Channel:view.html.twig", 1);
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

        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "title", []), "html", null, true);
        
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "media", []), "link", [])), "html", null, true);
        echo "');\">
\t\t\t\t<div class=\"movie-header\">
\t\t\t\t\t<div class=\"movie-title\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "title", []), "html", null, true);
        echo "</div>
\t\t\t\t\t<div class=\"movie-infos\"> ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "classification", []), "html", null, true);
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "categories", []));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            echo " • <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_channel_index", ["category" => $this->getAttribute($context["category"], "title", []), "country" => "all", "order" => "views"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", []), "html", null, true);
            echo "</a>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
\t\t\t\t\t<div class=\"header-buttons\">
\t\t\t\t\t\t";
        // line 16
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 17
            echo "\t\t\t\t\t\t\t<button class=\"btn-fav-channel\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "id", []), "html", null, true);
            echo "\" >";
            if (($context["favorited"] ?? $this->getContext($context, "favorited"))) {
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
\t\t\t\t\t\t\t<a href=\"mailto:?Subject=";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "title", []), "html", null, true);
        echo "&amp;Body=";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "description", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((("https://tyflex.to" . "/c/share/") . $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "id", [])) . ".html"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"http://www.facebook.com/sharer.php?u=";
        // line 27
        echo twig_escape_filter($this->env, ((("https://tyflex.to" . "/c/share/") . $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "id", [])) . ".html"), "html", null, true);
        echo "\" target=\"_blank\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"http://www.linkedin.com/shareArticle?mini=true&amp;url=";
        // line 30
        echo twig_escape_filter($this->env, ((("https://tyflex.to" . "/c/share/") . $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "id", [])) . ".html"), "html", null, true);
        echo "\" target=\"_blank\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"https://twitter.com/share?url=";
        // line 33
        echo twig_escape_filter($this->env, ((("https://tyflex.to" . "/c/share/") . $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "id", [])) . ".html"), "html", null, true);
        echo "&amp;text=";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "title", []), "html", null, true);
        echo "\" target=\"_blank\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"header-ratings\">
\t\t\t\t\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "countries", []));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_channel_index", ["category" => "all", "country" => $this->getAttribute($context["country"], "title", []), "order" => "views"]), "html", null, true);
            echo "\"> <img class=\"country-logo\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($context["country"], "media", []), "link", []), "language_thumb_api")), "html", null, true);
            echo "\"> </a> • ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t\t\t\t\t\t";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "rating", []), "html", null, true);
        echo "/5
\t\t\t\t\t\t";
        // line 42
        $context["rate"] = $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "rating", []);
        // line 43
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 44
            echo "\t\t\t\t\t\t\t";
            if ((($context["rate"] ?? $this->getContext($context, "rate")) >= 1)) {
                // line 45
                echo "\t\t\t\t\t\t\t\t<i class=\"fas fa-star checked\"></i>
\t\t\t\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\t\t\t\t";
            if (((($context["rate"] ?? $this->getContext($context, "rate")) >= 0.25) && (($context["rate"] ?? $this->getContext($context, "rate")) < 0.75))) {
                // line 48
                echo "\t\t\t\t\t\t\t\t<i class=\"fas fa-star-half-alt checked\"></i>
\t\t\t\t\t\t\t";
            }
            // line 50
            echo "\t\t\t\t\t\t\t";
            if (((($context["rate"] ?? $this->getContext($context, "rate")) >= 0.75) && (($context["rate"] ?? $this->getContext($context, "rate")) < 1))) {
                // line 51
                echo "\t\t\t\t\t\t\t\t<i class=\"fas fa-star checked\"></i>
\t\t\t\t\t\t\t";
            }
            // line 53
            echo "\t\t\t\t\t\t\t";
            if ((($context["rate"] ?? $this->getContext($context, "rate")) < 0.25)) {
                // line 54
                echo "\t\t\t\t\t\t\t\t<i class=\"far fa-star checked\"></i>
\t\t\t\t\t\t\t";
            }
            // line 56
            echo "\t\t\t\t\t\t\t";
            $context["rate"] = (($context["rate"] ?? $this->getContext($context, "rate")) - 1);
            // line 57
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<img class=\"channel-logo\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "media", []), "link", [])), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-12\" >
\t\t\t<div class=\"dropdown\">
\t\t\t\t";
        // line 66
        if ((twig_length_filter($this->env, ($context["all_sources"] ?? $this->getContext($context, "all_sources"))) > 0)) {
            // line 67
            echo "\t\t\t\t\t";
            if ((twig_length_filter($this->env, ($context["sources"] ?? $this->getContext($context, "sources"))) > 0)) {
                // line 68
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_player_channel", ["id" => $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "id", []), "slug" => $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "slug", []), "source" => $this->getAttribute($this->getAttribute(($context["sources"] ?? $this->getContext($context, "sources")), 0, [], "array"), "id", [])]), "html", null, true);
                echo "\" class=\"btn play-btn\"><span class=\"fa fa-play\"></span> Reproduzir</a>
\t\t\t\t\t";
            } else {
                // line 70
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_subscription_subscribe");
                echo "\" class=\"btn play-btn\"><i class=\"fas fa-star\"></i> Comprar ou Renovar</a>
\t\t\t\t\t";
            }
            // line 72
            echo "\t\t\t\t";
        }
        // line 73
        echo "\t\t\t\t<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "website", []), "html", null, true);
        echo "\" target=\"_blank\" id=\"trailer-btn\" class=\"btn play-btn\"><i class=\"fas fa-globe-americas\"></i> Abrir Site</a>
\t\t\t\t<a class=\"btn play-btn dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t<span class=\"fa fa-star\"></span> Avaliar Canal
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
\t\t\t\t\t<div class=\"comment-item  review-write\">
\t\t\t\t\t\t<div class='alert alert-success success-review' role='alert'>
\t\t\t\t\t\t\t<i class='fas fa-comment-alt'></i> Your Review has been added successfully!
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='alert alert-danger error-review' role='alert'>
\t\t\t\t\t\t\t<i class='fas fa-comment-alt'></i> Your Review could not be submitted
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"rate\" id=\"rate-input\" alt=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "id", []), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<input type=\"radio\" id=\"star5\" name=\"rate\" value=\"5\" />
\t\t\t\t\t\t\t<label for=\"star5\" title=\"text\">5 stars</label>
\t\t\t\t\t\t\t<input type=\"radio\" id=\"star4\" name=\"rate\" value=\"4\" />
\t\t\t\t\t\t\t<label for=\"star4\" title=\"text\">4 stars</label>
\t\t\t\t\t\t\t<input type=\"radio\" id=\"star3\" name=\"rate\" value=\"3\" />
\t\t\t\t\t\t\t<label for=\"star3\" title=\"text\">3 stars</label>
\t\t\t\t\t\t\t<input type=\"radio\" id=\"star2\" name=\"rate\" value=\"2\" />
\t\t\t\t\t\t\t<label for=\"star2\" title=\"text\">2 stars</label>
\t\t\t\t\t\t\t<input type=\"radio\" checked=\"true\" id=\"star1\" name=\"rate\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"star1\" title=\"text\">1 star</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<textarea  class=\"input-review\" placeholder=\"Escreva sua avaliação aqui\"></textarea>
\t\t\t\t\t\t";
        // line 98
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 99
            echo "\t\t\t\t\t\t\t<button alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "id", []), "html", null, true);
            echo "\" type=\"channel\" class=\"btn btn-primary  submit-review btn-block\">Enviar Avaliação <i class=\"fas fa-paper-plane\"></i> </button>
\t\t\t\t\t\t\t<button alt=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "id", []), "html", null, true);
            echo "\" class=\"btn btn-primary  loading-review btn-block\">Review Interting <i class=\"fas fa-circle-notch fa-spin\"></i> </button>
\t\t\t\t\t\t";
        } else {
            // line 102
            echo "\t\t\t\t\t\t\t<button  class=\"btn btn-primary btn-block open-login\"> <i class=\"fas fa-check\"></i> Faça login para deixar um comentário </button>
\t\t\t\t\t\t";
        }
        // line 104
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 108
        if (($this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "channelbannertype", []) == "image")) {
            // line 109
            echo "\t\t\t<div class=\"col-sm-12 col-md-12 ads-element\">
\t\t\t\t<img src=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "homebanner", []), "html", null, true);
            echo "\">
\t\t\t</div>
\t\t";
        } elseif (($this->getAttribute(        // line 112
($context["settings"] ?? $this->getContext($context, "settings")), "channelbannertype", []) == "code")) {
            // line 113
            echo "\t\t\t<div class=\"col-sm-12 col-md-12\">
\t\t\t\t";
            // line 114
            echo $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "homebanner", []);
            echo "
\t\t\t</div>
\t\t";
        }
        // line 117
        echo "\t\t<div class=\"col-md-12 padding-top-20\" >
\t\t\t<div class=\"movie-section-title\">Descrição</div>
\t\t</div>
\t\t<div class=\"col-md-12\" >
\t\t\t<p>
\t\t\t\t";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "description", []), "html", null, true);
        echo "
\t\t\t</p>
\t\t</div>
\t\t";
        // line 125
        if ((twig_length_filter($this->env, ($context["related_channels"] ?? $this->getContext($context, "related_channels"))) != 0)) {
            // line 126
            echo "\t\t\t<div class=\"col-md-12 padding-top-20\" >
\t\t\t\t<div class=\"movie-section-title\">Recomendados para você</div>
\t\t\t</div>
\t\t\t<div class=\"flix-carousel\" >
\t\t\t\t<button  class=\"prev_btn\"><i class=\"fa fa-chevron-left\"></i></button>
\t\t\t\t<button  class=\"next_btn\"><i class=\"fa fa-chevron-right\"></i></button>
\t\t\t\t<div class=\"flix-scroll-x\">
\t\t\t\t\t";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["related_channels"] ?? $this->getContext($context, "related_channels")));
            foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
                // line 134
                echo "\t\t\t\t\t\t<a class=\"channel\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_channel_view", ["id" => $this->getAttribute($context["channel"], "id", []), "slug" => $this->getAttribute($context["channel"], "slug", [])]), "html", null, true);
                echo "\" >
\t\t\t\t\t\t\t<img src=\"";
                // line 135
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($context["channel"], "media", []), "link", []), "channel_thumb")), "html", null, true);
                echo "\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 141
        echo "\t\t";
        if ($this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "comment", [])) {
            // line 142
            echo "\t\t\t<div class=\"col-md-6 padding-top-20\">
\t\t\t\t<div class=\"movie-section-title\"><i class=\"fa fa-comment\"></i> ";
            // line 143
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["comments"] ?? $this->getContext($context, "comments"))), "html", null, true);
            echo " Comments</div>
\t\t\t\t<div class=\"comment-section comment-list\">
\t\t\t\t\t";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? $this->getContext($context, "comments")));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 146
                echo "\t\t\t\t\t\t<div class=\"comment-item\">
\t\t\t\t\t\t\t<a title=\"View profile\" href=\"#\" class=\"avatar-thumb\"><img  src=\"";
                // line 147
                echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", []), "media", []), "type", []) == "link")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", []), "media", []), "url", [])) : ($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", []), "media", []), "link", [])), "actor_thumb_mini_web"))), "html", null, true);
                echo "\"></a>
\t\t\t\t\t\t\t<div class=\"comment-text\">
\t\t\t\t\t\t\t\t<a>";
                // line 149
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", []), "name", []), "html", null, true);
                echo "</a><span class=\"float-right\"><i class=\"fa fa-clock-o\"></i> ";
                echo $this->env->getExtension('Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension')->diff($this->getAttribute($context["comment"], "created", []));
                echo " </span>
\t\t\t\t\t\t\t\t<p> ";
                // line 150
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "contentclear", []), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "\t\t\t\t</div>
\t\t\t\t<div class='alert alert-success success-comment' role='alert'>
\t\t\t\t\t<i class='fas fa-comment-alt'></i> Your comment has been added successfully!
\t\t\t\t</div>
\t\t\t\t<div class='alert alert-danger error-comment' role='alert'>
\t\t\t\t\t<i class='fas fa-comment-alt'></i> Your comment could not be submitted
\t\t\t\t</div>
\t\t\t\t";
            // line 161
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 162
                echo "\t\t\t\t\t<div class=\"comment-item comment-write\">
\t\t\t\t\t\t<a title=\"View profile\" href=\"#\" class=\"avatar-thumb\"><img  src=\"";
                // line 163
                echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "media", []), "type", []) == "link")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "media", []), "url", [])) : ($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "media", []), "link", [])), "actor_thumb_mini_web"))), "html", null, true);
                echo "\"></a>
\t\t\t\t\t\t<div class=\"comment-text\">
\t\t\t\t\t\t\t<a>";
                // line 165
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "name", []), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t<textarea  class=\"input-comment\" alt=\"channel\" placeholder=\"Escreva sua avaliação aqui\"></textarea>
\t\t\t\t\t\t\t<button alt=\"";
                // line 167
                echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "id", []), "html", null, true);
                echo "\" class=\"btn btn-primary float-right submit-comment\">Submite Comment <i class=\"fas fa-paper-plane\"></i> </button>
\t\t\t\t\t\t\t<button alt=\"";
                // line 168
                echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "id", []), "html", null, true);
                echo "\" class=\"btn btn-primary float-right loading-comment\">Comment Interting <i class=\"fas fa-circle-notch fa-spin\"></i> </button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            } else {
                // line 172
                echo "\t\t\t\t\t<button class=\"btn comment-btn-item open-login\">
\t\t\t\t\t<i class=\"fa fa-check\"></i> Login to leave a comment
\t\t\t\t\t</button>
\t\t\t\t";
            }
            // line 176
            echo "\t\t\t</div>
\t\t";
        }
        // line 178
        echo "\t\t<div class=\"col-md-6 padding-top-20\">
\t\t\t<div class=\"movie-section-title\"><i class=\"fa fa-star\"></i> ";
        // line 179
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "ratings", [])), "html", null, true);
        echo " Avaliações</div>
\t\t\t<div class=\"comment-section \">
\t\t\t\t";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "ratings", []));
        foreach ($context['_seq'] as $context["_key"] => $context["rating"]) {
            // line 182
            echo "\t\t\t\t\t<div class=\"review\">
\t\t\t\t\t\t<div class=\"review-properties\">
\t\t\t\t\t\t\tReviewed by
\t\t\t\t\t\t\t<span class=\"review-author\">";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rating"], "user", []), "name", []), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t<span class=\"fa fa-star checked\"></span>
\t\t\t\t\t\t\t<span class=\"review-rating\">";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute($context["rating"], "value", []), "html", null, true);
            echo " / 5</span>
\t\t\t\t\t\t\t<span class=\"float-right\"><i class=\"fa fa-clock-o\"></i> ";
            // line 188
            echo $this->env->getExtension('Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension')->diff($this->getAttribute($context["rating"], "created", []));
            echo " </span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<article><p>";
            // line 190
            echo twig_escape_filter($this->env, $this->getAttribute($context["rating"], "review", []), "html", null, true);
            echo "</p></article>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rating'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Channel:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  519 => 193,  510 => 190,  505 => 188,  501 => 187,  496 => 185,  491 => 182,  487 => 181,  482 => 179,  479 => 178,  475 => 176,  469 => 172,  462 => 168,  458 => 167,  453 => 165,  448 => 163,  445 => 162,  443 => 161,  434 => 154,  424 => 150,  418 => 149,  413 => 147,  410 => 146,  406 => 145,  401 => 143,  398 => 142,  395 => 141,  390 => 138,  381 => 135,  376 => 134,  372 => 133,  363 => 126,  361 => 125,  355 => 122,  348 => 117,  342 => 114,  339 => 113,  337 => 112,  332 => 110,  329 => 109,  327 => 108,  321 => 104,  317 => 102,  312 => 100,  307 => 99,  305 => 98,  289 => 85,  273 => 73,  270 => 72,  264 => 70,  258 => 68,  255 => 67,  253 => 66,  245 => 61,  240 => 58,  234 => 57,  231 => 56,  227 => 54,  224 => 53,  220 => 51,  217 => 50,  213 => 48,  210 => 47,  206 => 45,  203 => 44,  198 => 43,  196 => 42,  191 => 41,  178 => 40,  166 => 33,  160 => 30,  154 => 27,  144 => 24,  139 => 21,  135 => 19,  123 => 17,  121 => 16,  103 => 14,  99 => 13,  94 => 11,  90 => 9,  81 => 8,  63 => 7,  52 => 1,  50 => 6,  48 => 5,  46 => 4,  44 => 3,  42 => 2,  30 => 1,);
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
{% set subtitle =  channel.title %}
{% set og_description =  channel.description %}
{% set og_type =  \"video.movie\" %}
{% set og_image =  asset(channel.media.link)|imagine_filter('channel_thumb') %}
{% set keywords =  channel.tags %}
{% block title %}{{channel.title}}{% endblock %}
{% block body%}
\t<div class=\"row content-section\">
\t\t<div class=\"col-md-12\" >
\t\t\t<div class=\"movie-header-bg\" style=\" background-image: url('{{asset(channel.media.link)}}');\">
\t\t\t\t<div class=\"movie-header\">
\t\t\t\t\t<div class=\"movie-title\">{{channel.title}}</div>
\t\t\t\t\t<div class=\"movie-infos\"> {{channel.classification}} {% for category in channel.categories %} • <a href=\"{{path(\"wep_channel_index\",{category: category.title,country:\"all\",order:\"views\"})}}\">{{category.title}}</a>{% endfor %}</div>
\t\t\t\t\t<div class=\"header-buttons\">
\t\t\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t\t\t<button class=\"btn-fav-channel\" alt=\"{{channel.id}}\" >{% if favorited %}<i class=\"fa fa-heart\"></i>{% else %}<i class=\"far fa-heart\"></i>{% endif %}</button>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<button  class=\"open-login\"> <i class=\"far fa-heart\"></i></button>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<button id=\"share-btn\">
\t\t\t\t\t\t<i  class=\"fa fa-share \"></i>COMPARTILHAR
\t\t\t\t\t\t<div class=\"share-buttons\">
\t\t\t\t\t\t\t<a href=\"mailto:?Subject={{channel.title}}&amp;Body={{channel.description}} {{ \"https://tyflex.to\" ~ \"/c/share/\" ~ channel.id ~ \".html\"}}\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"http://www.facebook.com/sharer.php?u={{ \"https://tyflex.to\" ~ \"/c/share/\" ~ channel.id ~ \".html\"}}\" target=\"_blank\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"http://www.linkedin.com/shareArticle?mini=true&amp;url={{ \"https://tyflex.to\" ~ \"/c/share/\" ~ channel.id ~ \".html\"}}\" target=\"_blank\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"https://twitter.com/share?url={{ \"https://tyflex.to\" ~ \"/c/share/\" ~ channel.id ~ \".html\"}}&amp;text={{channel.title}}\" target=\"_blank\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"header-ratings\">
\t\t\t\t\t\t{% for country in channel.countries %}<a href=\"{{path(\"wep_channel_index\",{category: \"all\",country: country.title ,order:\"views\"})}}\"> <img class=\"country-logo\" src=\"{{asset(country.media.link|imagine_filter('language_thumb_api'))}}\"> </a> • {% endfor %}
\t\t\t\t\t\t{{channel.rating}}/5
\t\t\t\t\t\t{% set rate = channel.rating %}
\t\t\t\t\t\t{% for i in 1..5 %}
\t\t\t\t\t\t\t{% if rate >= 1 %}
\t\t\t\t\t\t\t\t<i class=\"fas fa-star checked\"></i>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if rate >= 0.25 and  rate < 0.75 %}
\t\t\t\t\t\t\t\t<i class=\"fas fa-star-half-alt checked\"></i>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if rate >= 0.75 and  rate < 1 %}
\t\t\t\t\t\t\t\t<i class=\"fas fa-star checked\"></i>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% if rate < 0.25 %}
\t\t\t\t\t\t\t\t<i class=\"far fa-star checked\"></i>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% set rate  =  rate - 1 %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<img class=\"channel-logo\" src=\"{{asset(channel.media.link)}}\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-12\" >
\t\t\t<div class=\"dropdown\">
\t\t\t\t{% if all_sources|length > 0 %}
\t\t\t\t\t{% if sources|length > 0 %}
\t\t\t\t\t\t<a href=\"{{path(\"wep_player_channel\",{id:channel.id,slug:channel.slug,source:sources[0].id})}}\" class=\"btn play-btn\"><span class=\"fa fa-play\"></span> Reproduzir</a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a href=\"{{path(\"wep_subscription_subscribe\")}}\" class=\"btn play-btn\"><i class=\"fas fa-star\"></i> Comprar ou Renovar</a>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endif %}
\t\t\t\t<a href=\"{{channel.website}}\" target=\"_blank\" id=\"trailer-btn\" class=\"btn play-btn\"><i class=\"fas fa-globe-americas\"></i> Abrir Site</a>
\t\t\t\t<a class=\"btn play-btn dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t<span class=\"fa fa-star\"></span> Avaliar Canal
\t\t\t\t</a>
\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
\t\t\t\t\t<div class=\"comment-item  review-write\">
\t\t\t\t\t\t<div class='alert alert-success success-review' role='alert'>
\t\t\t\t\t\t\t<i class='fas fa-comment-alt'></i> Your Review has been added successfully!
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class='alert alert-danger error-review' role='alert'>
\t\t\t\t\t\t\t<i class='fas fa-comment-alt'></i> Your Review could not be submitted
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"rate\" id=\"rate-input\" alt=\"{{channel.id}}\">
\t\t\t\t\t\t\t<input type=\"radio\" id=\"star5\" name=\"rate\" value=\"5\" />
\t\t\t\t\t\t\t<label for=\"star5\" title=\"text\">5 stars</label>
\t\t\t\t\t\t\t<input type=\"radio\" id=\"star4\" name=\"rate\" value=\"4\" />
\t\t\t\t\t\t\t<label for=\"star4\" title=\"text\">4 stars</label>
\t\t\t\t\t\t\t<input type=\"radio\" id=\"star3\" name=\"rate\" value=\"3\" />
\t\t\t\t\t\t\t<label for=\"star3\" title=\"text\">3 stars</label>
\t\t\t\t\t\t\t<input type=\"radio\" id=\"star2\" name=\"rate\" value=\"2\" />
\t\t\t\t\t\t\t<label for=\"star2\" title=\"text\">2 stars</label>
\t\t\t\t\t\t\t<input type=\"radio\" checked=\"true\" id=\"star1\" name=\"rate\" value=\"1\" />
\t\t\t\t\t\t\t<label for=\"star1\" title=\"text\">1 star</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<textarea  class=\"input-review\" placeholder=\"Escreva sua avaliação aqui\"></textarea>
\t\t\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t\t\t<button alt=\"{{channel.id}}\" type=\"channel\" class=\"btn btn-primary  submit-review btn-block\">Enviar Avaliação <i class=\"fas fa-paper-plane\"></i> </button>
\t\t\t\t\t\t\t<button alt=\"{{channel.id}}\" class=\"btn btn-primary  loading-review btn-block\">Review Interting <i class=\"fas fa-circle-notch fa-spin\"></i> </button>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<button  class=\"btn btn-primary btn-block open-login\"> <i class=\"fas fa-check\"></i> Faça login para deixar um comentário </button>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t{% if settings.channelbannertype == \"image\"%}
\t\t\t<div class=\"col-sm-12 col-md-12 ads-element\">
\t\t\t\t<img src=\"{{settings.homebanner}}\">
\t\t\t</div>
\t\t{% elseif settings.channelbannertype ==\"code\" %}
\t\t\t<div class=\"col-sm-12 col-md-12\">
\t\t\t\t{{settings.homebanner|raw}}
\t\t\t</div>
\t\t{% endif %}
\t\t<div class=\"col-md-12 padding-top-20\" >
\t\t\t<div class=\"movie-section-title\">Descrição</div>
\t\t</div>
\t\t<div class=\"col-md-12\" >
\t\t\t<p>
\t\t\t\t{{channel.description}}
\t\t\t</p>
\t\t</div>
\t\t{% if related_channels|length != 0 %}
\t\t\t<div class=\"col-md-12 padding-top-20\" >
\t\t\t\t<div class=\"movie-section-title\">Recomendados para você</div>
\t\t\t</div>
\t\t\t<div class=\"flix-carousel\" >
\t\t\t\t<button  class=\"prev_btn\"><i class=\"fa fa-chevron-left\"></i></button>
\t\t\t\t<button  class=\"next_btn\"><i class=\"fa fa-chevron-right\"></i></button>
\t\t\t\t<div class=\"flix-scroll-x\">
\t\t\t\t\t{% for channel in related_channels %}
\t\t\t\t\t\t<a class=\"channel\" href=\"{{path(\"wep_channel_view\",{id:channel.id,slug:channel.slug})}}\" >
\t\t\t\t\t\t\t<img src=\"{{asset(channel.media.link|imagine_filter('channel_thumb'))}}\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}
\t\t{% if channel.comment %}
\t\t\t<div class=\"col-md-6 padding-top-20\">
\t\t\t\t<div class=\"movie-section-title\"><i class=\"fa fa-comment\"></i> {{comments|length}} Comments</div>
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
\t\t\t\t\t<i class='fas fa-comment-alt'></i> Your comment has been added successfully!
\t\t\t\t</div>
\t\t\t\t<div class='alert alert-danger error-comment' role='alert'>
\t\t\t\t\t<i class='fas fa-comment-alt'></i> Your comment could not be submitted
\t\t\t\t</div>
\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t<div class=\"comment-item comment-write\">
\t\t\t\t\t\t<a title=\"View profile\" href=\"#\" class=\"avatar-thumb\"><img  src=\"{{(app.user.media.type == \"link\" )? app.user.media.url : asset(app.user.media.link)|imagine_filter('actor_thumb_mini_web')}}\"></a>
\t\t\t\t\t\t<div class=\"comment-text\">
\t\t\t\t\t\t\t<a>{{app.user.name}}</a>
\t\t\t\t\t\t\t<textarea  class=\"input-comment\" alt=\"channel\" placeholder=\"Escreva sua avaliação aqui\"></textarea>
\t\t\t\t\t\t\t<button alt=\"{{channel.id}}\" class=\"btn btn-primary float-right submit-comment\">Submite Comment <i class=\"fas fa-paper-plane\"></i> </button>
\t\t\t\t\t\t\t<button alt=\"{{channel.id}}\" class=\"btn btn-primary float-right loading-comment\">Comment Interting <i class=\"fas fa-circle-notch fa-spin\"></i> </button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% else %}
\t\t\t\t\t<button class=\"btn comment-btn-item open-login\">
\t\t\t\t\t<i class=\"fa fa-check\"></i> Login to leave a comment
\t\t\t\t\t</button>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t{% endif %}
\t\t<div class=\"col-md-6 padding-top-20\">
\t\t\t<div class=\"movie-section-title\"><i class=\"fa fa-star\"></i> {{channel.ratings|length}} Avaliações</div>
\t\t\t<div class=\"comment-section \">
\t\t\t\t{% for rating in channel.ratings %}
\t\t\t\t\t<div class=\"review\">
\t\t\t\t\t\t<div class=\"review-properties\">
\t\t\t\t\t\t\tReviewed by
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
{% endblock%}", "WebBundle:Channel:view.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Channel/view.html.twig");
    }
}
