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

/* AppBundle:Comment:index.html.twig */
class __TwigTemplate_7c9a3791562020d25dc149fd509b51b534a1a6c103882d7d28626e3701df6d52 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Comment:index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        // line 3
        echo "\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_comment_index");
        echo "\" class=\"btn  btn-lg btn-warning btn-block\"><i class=\"material-icons\" style=\"font-size: 30px;\">refresh</i> Refresh</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<a class=\"btn btn btn-lg btn-yellow btn-block\"><i class=\"material-icons\" style=\"font-size: 30px;\">message</i> ";
        // line 11
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["comments"] ?? null)), "html", null, true);
        echo " Comments</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<br>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 17
            echo "\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<ul class=\"timeline timeline-simple\">
\t\t\t\t\t\t\t\t<li class=\"timeline-inverted\">
\t\t\t\t\t\t\t\t\t<div class=\"timeline-badge info\">
\t\t\t\t\t\t\t\t\t\t";
            // line 21
            if (($this->getAttribute($this->getAttribute($context["comment"], "user", []), "media", []) != null)) {
                // line 22
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", []), "media", []), "type", []) == "link")) {
                    // line 23
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"avatar-char palette-Red-400 bg\"  style=\"border-radius: 100px;    border: 0.5px solid #ccc;\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", []), "media", []), "url", []), "html", null, true);
                    echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 25
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"avatar-char palette-Red-400 bg\"  style=\"border-radius: 100px;    border: 0.5px solid #ccc;\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", []), "media", []), "link", [])), "actor_thumb"), "html", null, true);
                    echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 27
                echo "\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 28
                echo "\t\t\t\t\t\t\t\t\t\t\t<img class=\"avatar-char palette-Red-400 bg\"  style=\"border-radius: 100px;    border: 0.5px solid #ccc;\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar.jpg"), "actor_thumb"), "html", null, true);
                echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 30
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-heading\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_user_edit", ["id" => $this->getAttribute($this->getAttribute($context["comment"], "user", []), "id", [])]), "html", null, true);
            echo "\" title=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-danger\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", []), "name", []), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right\" >
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_comment_delete", ["id" => $this->getAttribute($context["comment"], "id", []), "comment" => "true"]), "html", null, true);
            echo "\"  class=\"btn btn-xs btn-success\"    rel=\"tooltip\" data-placement=\"bottom\" title=\"\" data-original-title=\"Delete\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\" >delete</i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 40
            if ($this->getAttribute($context["comment"], "enabled", [])) {
                // line 41
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_comment_hide", ["id" => $this->getAttribute($context["comment"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-xs btn-danger\"  rel=\"tooltip\" data-placement=\"bottom\" title=\"\" data-original-title=\"Hide\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">visibility_off</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 45
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_comment_hide", ["id" => $this->getAttribute($context["comment"], "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-xs btn-danger\"  rel=\"tooltip\" data-placement=\"bottom\" title=\"\" data-original-title=\"Show\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">remove_red_eye</i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 49
            echo "\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-body\">
\t\t\t\t\t\t\t\t\t\t\t<p>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "contentclear", []), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t";
            // line 55
            if (($this->getAttribute($context["comment"], "channel", []) != null)) {
                // line 56
                echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_channel_comments", ["id" => $this->getAttribute($this->getAttribute($context["comment"], "channel", []), "id", [])]), "html", null, true);
                echo "\" title=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"label label-rose\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "channel", []), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 61
$context["comment"], "poster", []) != null)) {
                // line 62
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($context["comment"], "poster", []), "type", []) == "serie")) {
                    // line 63
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_serie_comments", ["id" => $this->getAttribute($this->getAttribute($context["comment"], "poster", []), "id", [])]), "html", null, true);
                    echo "\" title=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"label label-rose\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "poster", []), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute($this->getAttribute(                // line 68
$context["comment"], "poster", []), "type", []) == "serie")) {
                    // line 69
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_movie_comments", ["id" => $this->getAttribute($this->getAttribute($context["comment"], "poster", []), "id", [])]), "html", null, true);
                    echo "\" title=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"label label-rose\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 71
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "poster", []), "html", null, true);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 76
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            // line 77
            echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<small class=\"pull-right label label-rose\">
\t\t\t\t\t\t\t\t\t\t<span>";
            // line 79
            echo $this->env->getExtension('Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension')->diff($this->getAttribute($context["comment"], "created", []));
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
            // line 87
            echo "\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<center><img src=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg_empty.png"), "html", null, true);
            echo "\"  style=\"width: auto !important;\" =\"\"></center>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\" pull-right\">
\t\t\t\t\t";
        // line 99
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? null));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Comment:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 99,  235 => 97,  223 => 91,  217 => 87,  204 => 79,  200 => 77,  197 => 76,  189 => 71,  183 => 69,  181 => 68,  175 => 65,  169 => 63,  166 => 62,  164 => 61,  158 => 58,  152 => 56,  150 => 55,  144 => 52,  139 => 49,  131 => 45,  123 => 41,  121 => 40,  115 => 37,  109 => 34,  105 => 33,  100 => 30,  94 => 28,  91 => 27,  85 => 25,  79 => 23,  76 => 22,  74 => 21,  68 => 17,  63 => 16,  55 => 11,  49 => 8,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Comment:index.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Comment/index.html.twig");
    }
}
