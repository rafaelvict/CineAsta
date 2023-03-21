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

/* UserBundle:User:ratings.html.twig */
class __TwigTemplate_5cdc4130957c7c0c6bd8ae16dcc91e7e82fd791942a3de2933499b3134a0349f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "UserBundle:User:ratings.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        // line 3
        echo "\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t";
        // line 5
        if (($this->getAttribute(($context["user"] ?? null), "media", []) != null)) {
            // line 6
            echo "\t\t\t\t";
            if (($this->getAttribute($this->getAttribute(($context["user"] ?? null), "media", []), "type", []) == "link")) {
                // line 7
                echo "\t\t\t\t\t";
                $context["image"] = $this->getAttribute($this->getAttribute(($context["user"] ?? null), "media", []), "url", []);
                // line 8
                echo "\t\t\t\t";
            } else {
                // line 9
                echo "\t\t\t\t\t";
                $context["image"] = $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["user"] ?? null), "media", []), "link", [])), "actor_thumb");
                // line 10
                echo "\t\t\t\t";
            }
            // line 11
            echo "\t\t\t";
        } else {
            // line 12
            echo "\t\t\t\t";
            $context["image"] = $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar.jpg"), "actor_thumb");
            // line 13
            echo "\t\t\t";
        }
        // line 14
        echo "\t\t\t<div class=\"col-md-12\" style=\" height: auto; text-align:center;background-image:url(";
        echo twig_escape_filter($this->env, ($context["image"] ?? null), "html", null, true);
        echo ");background-position: center;background-size: 100%;text-align: center;\">
\t\t\t\t";
        // line 15
        if (($this->getAttribute(($context["user"] ?? null), "media", []) != null)) {
            // line 16
            echo "\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute(($context["user"] ?? null), "media", []), "type", []) == "link")) {
                // line 17
                echo "\t\t\t\t\t\t<img  style=\"border-radius:300px;margin:10px;height:100px;width:100px;border: 5px solid rgb(255, 247, 247);\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user"] ?? null), "media", []), "url", []), "html", null, true);
                echo "\" >
\t\t\t\t\t";
            } else {
                // line 19
                echo "\t\t\t\t\t\t<img  style=\"border-radius:300px;margin:10px;height:100px;width:100px;border: 5px solid rgb(255, 247, 247);\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["user"] ?? null), "media", []), "link", [])), "actor_thumb"), "html", null, true);
                echo "\" >
\t\t\t\t\t";
            }
            // line 21
            echo "\t\t\t\t";
        } else {
            // line 22
            echo "\t\t\t\t\t<img class=\"avatar-char palette-Red-400 bg\"  style=\"border-radius: 100px;    border: 0.5px solid #ccc;\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar.jpg"), "actor_thumb"), "html", null, true);
            echo "\" alt=\"\">
\t\t\t\t";
        }
        // line 24
        echo "\t\t\t\t<h3 style=\" color: white; font-weight: bold\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "name", []), "html", null, true);
        echo "</h3>
\t\t\t</div>
\t\t\t<div  class=\"col-md-12\" style=\"border:1px solid #ccc;height:70px;background:white\">
                <div class=\"row\">
                    <div  class=\"col-md-3\" style=\"border-right:1px solid #ccc;height:70px;background:white\">
                        <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_user_edit", ["id" => $this->getAttribute(($context["user"] ?? null), "id", [])]), "html", null, true);
        echo "\" style=\"color:black;font-size:20px;line-height: 70px;font-weight: bold;\">Edit infos</a>
                    </div>
                    <div  class=\"col-md-3\" style=\"border-right:1px solid #ccc;height:70px;background:white\">
                        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_user_comments", ["id" => $this->getAttribute(($context["user"] ?? null), "id", [])]), "html", null, true);
        echo "\" style=\"color:black;font-size:20px;line-height: 70px;font-weight: bold;\">Comments </a>
                    </div>
                    <div  class=\"col-md-3\" style=\"border-right:1px solid #ccc;height:70px;background:white\">
                        <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_user_ratings", ["id" => $this->getAttribute(($context["user"] ?? null), "id", [])]), "html", null, true);
        echo "\" style=\"color:black;font-size:20px;line-height: 70px;font-weight: bold;\">Ratings </a>
                    </div>
                    <div  class=\"col-md-3\" style=\"border-right:1px solid #ccc;height:70px;background:white\">
                        <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_admin_user_subscriptions", ["id" => $this->getAttribute(($context["user"] ?? null), "id", [])]), "html", null, true);
        echo "\" style=\"color:black;font-size:20px;line-height: 70px;font-weight: bold;\">Subscriptions </a>
                    </div>
                </div>
\t\t\t\t
\t\t\t</div>
\t\t\t<div  class=\"col-md-12\" >
\t\t\t\t<br>
\t\t\t\t<br>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["rate"]) {
            // line 48
            echo "\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<ul class=\"timeline timeline-simple\">
\t\t\t\t\t\t\t\t<li class=\"timeline-inverted\">
\t\t\t\t\t\t\t\t\t<div class=\"timeline-badge info\">
\t\t\t\t\t\t\t\t\t\t";
            // line 52
            if (($this->getAttribute($this->getAttribute($context["rate"], "user", []), "media", []) != null)) {
                // line 53
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["rate"], "user", []), "media", []), "type", []) == "link")) {
                    // line 54
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"avatar-char palette-Red-400 bg\"  style=\"border-radius: 100px;    border: 0.5px solid #ccc;\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rate"], "user", []), "media", []), "url", []), "html", null, true);
                    echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 56
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"avatar-char palette-Red-400 bg\"  style=\"border-radius: 100px;    border: 0.5px solid #ccc;\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["rate"], "user", []), "media", []), "link", [])), "actor_thumb"), "html", null, true);
                    echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 58
                echo "\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 59
                echo "\t\t\t\t\t\t\t\t\t\t\t<img class=\"avatar-char palette-Red-400 bg\"  style=\"border-radius: 100px;    border: 0.5px solid #ccc;\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar.jpg"), "actor_thumb"), "html", null, true);
                echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 61
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-heading\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_user_edit", ["id" => $this->getAttribute($this->getAttribute($context["rate"], "user", []), "id", [])]), "html", null, true);
            echo "\" title=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-danger\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rate"], "user", []), "name", []), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-body\">
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"float: left;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 71
            $context["rate_value"] = $this->getAttribute($context["rate"], "value", []);
            // line 72
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 73
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((($context["rate_value"] ?? null) >= 1)) {
                    // line 74
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
                    echo "\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 76
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (((($context["rate_value"] ?? null) >= 0.25) && (($context["rate_value"] ?? null) < 0.75))) {
                    // line 77
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_h.png"), "html", null, true);
                    echo "\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 79
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (((($context["rate_value"] ?? null) >= 0.75) && (($context["rate_value"] ?? null) < 1))) {
                    // line 80
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
                    echo "\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 82
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((($context["rate_value"] ?? null) < 0.25)) {
                    // line 83
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_e.png"), "html", null, true);
                    echo "\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 85
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["rate_value"] = (($context["rate_value"] ?? null) - 1);
                // line 86
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"line-height: 50px;display: inline-block;font-size: 56pt;font-weight: bold;padding-left: 20px;\">";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["rate"], "value", []), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t";
            // line 93
            if (($this->getAttribute($context["rate"], "channel", []) != null)) {
                // line 94
                echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_channel_ratings", ["id" => $this->getAttribute($this->getAttribute($context["rate"], "channel", []), "id", [])]), "html", null, true);
                echo "\" title=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"label label-rose\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($context["rate"], "channel", []), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 99
$context["rate"], "poster", []) != null)) {
                // line 100
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($context["rate"], "poster", []), "type", []) == "serie")) {
                    // line 101
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_serie_ratings", ["id" => $this->getAttribute($this->getAttribute($context["rate"], "poster", []), "id", [])]), "html", null, true);
                    echo "\" title=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"label label-rose\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 103
                    echo twig_escape_filter($this->env, $this->getAttribute($context["rate"], "poster", []), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute($this->getAttribute(                // line 106
$context["rate"], "poster", []), "type", []) == "movie")) {
                    // line 107
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_movie_ratings", ["id" => $this->getAttribute($this->getAttribute($context["rate"], "poster", []), "id", [])]), "html", null, true);
                    echo "\" title=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"label label-rose\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 109
                    echo twig_escape_filter($this->env, $this->getAttribute($context["rate"], "poster", []), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 113
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            // line 114
            echo "\t\t\t\t\t\t\t\t\t\t<small class=\"pull-right label label-rose\">
\t\t\t\t\t\t\t\t\t\t<span>";
            // line 115
            echo $this->env->getExtension('Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension')->diff($this->getAttribute($context["rate"], "created", []));
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 123
            echo "\t\t\t\t\t\t<div class=\"card\"  style=\"text-align: center;\" >
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<img src=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg_empty.png"), "html", null, true);
            echo "\"  style=\"width: auto !important;\" =\"\">
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "\t\t\t\t\t<div class=\" pull-right\">
\t\t\t\t\t\t";
        // line 132
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? null));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:User:ratings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 132,  341 => 131,  330 => 126,  325 => 123,  312 => 115,  309 => 114,  306 => 113,  299 => 109,  293 => 107,  291 => 106,  285 => 103,  279 => 101,  276 => 100,  274 => 99,  268 => 96,  262 => 94,  260 => 93,  252 => 88,  249 => 87,  243 => 86,  240 => 85,  234 => 83,  231 => 82,  225 => 80,  222 => 79,  216 => 77,  213 => 76,  207 => 74,  204 => 73,  199 => 72,  197 => 71,  188 => 65,  184 => 64,  179 => 61,  173 => 59,  170 => 58,  164 => 56,  158 => 54,  155 => 53,  153 => 52,  147 => 48,  142 => 47,  130 => 38,  124 => 35,  118 => 32,  112 => 29,  103 => 24,  97 => 22,  94 => 21,  88 => 19,  82 => 17,  79 => 16,  77 => 15,  72 => 14,  69 => 13,  66 => 12,  63 => 11,  60 => 10,  57 => 9,  54 => 8,  51 => 7,  48 => 6,  46 => 5,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "UserBundle:User:ratings.html.twig", "/www/wwwroot/tyflex.07.03/src/UserBundle/Resources/views/User/ratings.html.twig");
    }
}
