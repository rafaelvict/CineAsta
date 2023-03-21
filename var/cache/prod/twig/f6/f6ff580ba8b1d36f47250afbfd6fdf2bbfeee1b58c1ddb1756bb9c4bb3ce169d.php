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
class __TwigTemplate_9c0459e399dc4619501f1d7ba082e490bef728393e37b6b5798c15a43e596253 extends \Twig\Template
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
        $context["subtitle"] = $this->getAttribute(($context["channel"] ?? null), "title", []);
        // line 3
        $context["og_description"] = $this->getAttribute(($context["channel"] ?? null), "description", []);
        // line 4
        $context["og_type"] = "video.movie";
        // line 5
        $context["og_image"] = $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["channel"] ?? null), "media", []), "link", [])), "channel_thumb");
        // line 6
        $context["keywords"] = $this->getAttribute(($context["channel"] ?? null), "tags", []);
        // line 1
        $this->parent = $this->loadTemplate("WebBundle::layout.html.twig", "WebBundle:Channel:view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? null), "title", []), "html", null, true);
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        // line 9
        echo "\t<div class=\"row content-section\">
\t\t<div class=\"col-md-12\" >
\t\t\t<div class=\"movie-header-bg\" style=\" background-image: url('";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["channel"] ?? null), "media", []), "link", [])), "html", null, true);
        echo "');\">
\t\t\t\t<div class=\"movie-header\">
\t\t\t\t\t<div class=\"movie-title\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? null), "title", []), "html", null, true);
        echo "</div>
\t\t\t\t\t<div class=\"movie-infos\"> ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? null), "classification", []), "html", null, true);
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["channel"] ?? null), "categories", []));
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
            echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? null), "id", []), "html", null, true);
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
\t\t\t\t\t\t\t<a href=\"mailto:?Subject=";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? null), "title", []), "html", null, true);
        echo "&amp;Body=";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? null), "description", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((("https://tyflex.to" . "/c/share/") . $this->getAttribute(($context["channel"] ?? null), "id", [])) . ".html"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"http://www.facebook.com/sharer.php?u=";
        // line 27
        echo twig_escape_filter($this->env, ((("https://tyflex.to" . "/c/share/") . $this->getAttribute(($context["channel"] ?? null), "id", [])) . ".html"), "html", null, true);
        echo "\" target=\"_blank\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"http://www.linkedin.com/shareArticle?mini=true&amp;url=";
        // line 30
        echo twig_escape_filter($this->env, ((("https://tyflex.to" . "/c/share/") . $this->getAttribute(($context["channel"] ?? null), "id", [])) . ".html"), "html", null, true);
        echo "\" target=\"_blank\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"https://twitter.com/share?url=";
        // line 33
        echo twig_escape_filter($this->env, ((("https://tyflex.to" . "/c/share/") . $this->getAttribute(($context["channel"] ?? null), "id", [])) . ".html"), "html", null, true);
        echo "&amp;text=";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? null), "title", []), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["channel"] ?? null), "countries", []));
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? null), "rating", []), "html", null, true);
        echo "/5
\t\t\t\t\t\t";
        // line 42
        $context["rate"] = $this->getAttribute(($context["channel"] ?? null), "rating", []);
        // line 43
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 44
            echo "\t\t\t\t\t\t\t";
            if ((($context["rate"] ?? null) >= 1)) {
                // line 45
                echo "\t\t\t\t\t\t\t\t<i class=\"fas fa-star checked\"></i>
\t\t\t\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\t\t\t\t";
            if (((($context["rate"] ?? null) >= 0.25) && (($context["rate"] ?? null) < 0.75))) {
                // line 48
                echo "\t\t\t\t\t\t\t\t<i class=\"fas fa-star-half-alt checked\"></i>
\t\t\t\t\t\t\t";
            }
            // line 50
            echo "\t\t\t\t\t\t\t";
            if (((($context["rate"] ?? null) >= 0.75) && (($context["rate"] ?? null) < 1))) {
                // line 51
                echo "\t\t\t\t\t\t\t\t<i class=\"fas fa-star checked\"></i>
\t\t\t\t\t\t\t";
            }
            // line 53
            echo "\t\t\t\t\t\t\t";
            if ((($context["rate"] ?? null) < 0.25)) {
                // line 54
                echo "\t\t\t\t\t\t\t\t<i class=\"far fa-star checked\"></i>
\t\t\t\t\t\t\t";
            }
            // line 56
            echo "\t\t\t\t\t\t\t";
            $context["rate"] = (($context["rate"] ?? null) - 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["channel"] ?? null), "media", []), "link", [])), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-12\" >
\t\t\t<div class=\"dropdown\">
\t\t\t\t";
        // line 66
        if ((twig_length_filter($this->env, ($context["all_sources"] ?? null)) > 0)) {
            // line 67
            echo "\t\t\t\t\t";
            if ((twig_length_filter($this->env, ($context["sources"] ?? null)) > 0)) {
                // line 68
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_player_channel", ["id" => $this->getAttribute(($context["channel"] ?? null), "id", []), "slug" => $this->getAttribute(($context["channel"] ?? null), "slug", []), "source" => $this->getAttribute($this->getAttribute(($context["sources"] ?? null), 0, [], "array"), "id", [])]), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? null), "website", []), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? null), "id", []), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? null), "id", []), "html", null, true);
            echo "\" type=\"channel\" class=\"btn btn-primary  submit-review btn-block\">Enviar Avaliação <i class=\"fas fa-paper-plane\"></i> </button>
\t\t\t\t\t\t\t<button alt=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? null), "id", []), "html", null, true);
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
        if (($this->getAttribute(($context["settings"] ?? null), "channelbannertype", []) == "image")) {
            // line 109
            echo "\t\t\t<div class=\"col-sm-12 col-md-12 ads-element\">
\t\t\t\t<img src=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "homebanner", []), "html", null, true);
            echo "\">
\t\t\t</div>
\t\t";
        } elseif (($this->getAttribute(        // line 112
($context["settings"] ?? null), "channelbannertype", []) == "code")) {
            // line 113
            echo "\t\t\t<div class=\"col-sm-12 col-md-12\">
\t\t\t\t";
            // line 114
            echo $this->getAttribute(($context["settings"] ?? null), "homebanner", []);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? null), "description", []), "html", null, true);
        echo "
\t\t\t</p>
\t\t</div>
\t\t";
        // line 125
        if ((twig_length_filter($this->env, ($context["related_channels"] ?? null)) != 0)) {
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
            $context['_seq'] = twig_ensure_traversable(($context["related_channels"] ?? null));
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
        if ($this->getAttribute(($context["channel"] ?? null), "comment", [])) {
            // line 142
            echo "\t\t\t<div class=\"col-md-6 padding-top-20\">
\t\t\t\t<div class=\"movie-section-title\"><i class=\"fa fa-comment\"></i> ";
            // line 143
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["comments"] ?? null)), "html", null, true);
            echo " Comments</div>
\t\t\t\t<div class=\"comment-section comment-list\">
\t\t\t\t\t";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
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
                echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "media", []), "type", []) == "link")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "media", []), "url", [])) : ($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "media", []), "link", [])), "actor_thumb_mini_web"))), "html", null, true);
                echo "\"></a>
\t\t\t\t\t\t<div class=\"comment-text\">
\t\t\t\t\t\t\t<a>";
                // line 165
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "name", []), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t<textarea  class=\"input-comment\" alt=\"channel\" placeholder=\"Escreva sua avaliação aqui\"></textarea>
\t\t\t\t\t\t\t<button alt=\"";
                // line 167
                echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? null), "id", []), "html", null, true);
                echo "\" class=\"btn btn-primary float-right submit-comment\">Submite Comment <i class=\"fas fa-paper-plane\"></i> </button>
\t\t\t\t\t\t\t<button alt=\"";
                // line 168
                echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? null), "id", []), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["channel"] ?? null), "ratings", [])), "html", null, true);
        echo " Avaliações</div>
\t\t\t<div class=\"comment-section \">
\t\t\t\t";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["channel"] ?? null), "ratings", []));
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
        return array (  489 => 193,  480 => 190,  475 => 188,  471 => 187,  466 => 185,  461 => 182,  457 => 181,  452 => 179,  449 => 178,  445 => 176,  439 => 172,  432 => 168,  428 => 167,  423 => 165,  418 => 163,  415 => 162,  413 => 161,  404 => 154,  394 => 150,  388 => 149,  383 => 147,  380 => 146,  376 => 145,  371 => 143,  368 => 142,  365 => 141,  360 => 138,  351 => 135,  346 => 134,  342 => 133,  333 => 126,  331 => 125,  325 => 122,  318 => 117,  312 => 114,  309 => 113,  307 => 112,  302 => 110,  299 => 109,  297 => 108,  291 => 104,  287 => 102,  282 => 100,  277 => 99,  275 => 98,  259 => 85,  243 => 73,  240 => 72,  234 => 70,  228 => 68,  225 => 67,  223 => 66,  215 => 61,  210 => 58,  204 => 57,  201 => 56,  197 => 54,  194 => 53,  190 => 51,  187 => 50,  183 => 48,  180 => 47,  176 => 45,  173 => 44,  168 => 43,  166 => 42,  161 => 41,  148 => 40,  136 => 33,  130 => 30,  124 => 27,  114 => 24,  109 => 21,  105 => 19,  93 => 17,  91 => 16,  73 => 14,  69 => 13,  64 => 11,  60 => 9,  57 => 8,  51 => 7,  46 => 1,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Channel:view.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Channel/view.html.twig");
    }
}
