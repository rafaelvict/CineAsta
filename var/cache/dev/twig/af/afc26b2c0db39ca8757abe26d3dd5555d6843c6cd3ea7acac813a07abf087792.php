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

/* AppBundle:Channel:index.html.twig */
class __TwigTemplate_2d66624e3f7a36cf4b00021d02643f9d3ecb4d88b36b98ede1da4b5d2f34a636 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Channel:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Channel:index.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Channel:index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_channel_index");
        echo "\" class=\"btn  btn-lg btn-warning btn-block\"><i class=\"material-icons\" style=\"font-size: 30px;\">refresh</i> Refresh</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<a class=\"btn btn btn-lg btn-yellow btn-block\"><i class=\"material-icons\" style=\"font-size: 30px;\">live_tv</i> ";
        // line 11
        echo twig_escape_filter($this->env, ($context["channels_count"] ?? $this->getContext($context, "channels_count")), "html", null, true);
        echo " TV channels</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_channel_add");
        echo "\" class=\"btn btn-rose btn-lg pull-right add-button btn-block\" title=\"\"><i class=\"material-icons\" style=\"font-size: 30px;\">add_box</i> NEW TV CHANNEL </a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t<input name=\"q\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "q"], "method"), "html", null, true);
        echo "\" type=\"text\" class=\"search-input\">
\t\t\t\t\t\t\t<button class=\"btn btn-sm search-btn\"><i class=\"material-icons\" style=\"font-size: 30px;\">search</i></button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["channels"] ?? $this->getContext($context, "channels")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
            // line 27
            echo "\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-content\" style=\"text-align: center;   padding: 0px;\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["channel"], "media", []), "link", [])), "channel_thumb"), "html", null, true);
            echo "\" class=\"image-element\" style=\"    position: relative !important;\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-footer\" >
\t\t\t\t\t\t\t\t\t<span class=\"pull-left channel-title\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["channel"], "title", []), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_channel_edit", ["id" => $this->getAttribute($context["channel"], "id", [])]), "html", null, true);
            echo "\" rel=\"tooltip\" data-placement=\"left\" class=\" btn btn-success btn-xs btn-round pull-right\" data-original-title=\"Edit\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">edit</i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_notif_channel", ["title" => $this->getAttribute($context["channel"], "title", []), "id" => $this->getAttribute($context["channel"], "id", []), "image" => $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["channel"], "media", []), "link", [])), "channel_thumb"), "icon" => $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["channel"], "media", []), "link", [])), "channel_thumb")]), "html", null, true);
            echo "\" rel=\"tooltip\" data-placement=\"left\" class=\" btn btn-primary btn-xs btn-round pull-right\" data-original-title=\"Noitifcation\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">notifications</i>
\t\t\t\t\t\t\t\t\t</a>\t
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_channel_delete", ["id" => $this->getAttribute($context["channel"], "id", [])]), "html", null, true);
            echo "\" rel=\"tooltip\" data-placement=\"left\" class=\" btn btn-danger btn-xs btn-round pull-right\" data-original-title=\"Delete\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">delete</i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            echo "\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<center><img src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg_empty.png"), "html", null, true);
            echo "\"  style=\"width: auto !important;\" =\"\"></center>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "\t\t\t\t\t<div class=\" pull-right\">
\t\t\t\t\t\t";
        // line 62
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["channels"] ?? $this->getContext($context, "channels")));
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Channel:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 62,  163 => 61,  150 => 54,  143 => 49,  131 => 42,  125 => 39,  119 => 36,  115 => 35,  107 => 30,  102 => 27,  97 => 26,  88 => 20,  79 => 14,  73 => 11,  67 => 8,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"AppBundle::layout.html.twig\" %}
{% block body%}
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<a href=\"{{path(\"app_channel_index\")}}\" class=\"btn  btn-lg btn-warning btn-block\"><i class=\"material-icons\" style=\"font-size: 30px;\">refresh</i> Refresh</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<a class=\"btn btn btn-lg btn-yellow btn-block\"><i class=\"material-icons\" style=\"font-size: 30px;\">live_tv</i> {{channels_count}} TV channels</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t<a href=\"{{path(\"app_channel_add\")}}\" class=\"btn btn-rose btn-lg pull-right add-button btn-block\" title=\"\"><i class=\"material-icons\" style=\"font-size: 30px;\">add_box</i> NEW TV CHANNEL </a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t<input name=\"q\" value=\"{{app.request.query.get(\"q\")}}\" type=\"text\" class=\"search-input\">
\t\t\t\t\t\t\t<button class=\"btn btn-sm search-btn\"><i class=\"material-icons\" style=\"font-size: 30px;\">search</i></button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t{% for channel in channels %}
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-content\" style=\"text-align: center;   padding: 0px;\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset(channel.media.link)|imagine_filter('channel_thumb')}}\" class=\"image-element\" style=\"    position: relative !important;\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-footer\" >
\t\t\t\t\t\t\t\t\t<span class=\"pull-left channel-title\">{{channel.title}}</span>
\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"app_channel_edit\",{\"id\":channel.id})}}\" rel=\"tooltip\" data-placement=\"left\" class=\" btn btn-success btn-xs btn-round pull-right\" data-original-title=\"Edit\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">edit</i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"app_home_notif_channel\",{title:channel.title,id:channel.id,image:asset(channel.media.link)|imagine_filter(\"channel_thumb\"),icon:asset(channel.media.link)|imagine_filter(\"channel_thumb\")})}}\" rel=\"tooltip\" data-placement=\"left\" class=\" btn btn-primary btn-xs btn-round pull-right\" data-original-title=\"Noitifcation\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">notifications</i>
\t\t\t\t\t\t\t\t\t</a>\t
\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"app_channel_delete\",{\"id\":channel.id})}}\" rel=\"tooltip\" data-placement=\"left\" class=\" btn btn-danger btn-xs btn-round pull-right\" data-original-title=\"Delete\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">delete</i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<center><img src=\"{{asset(\"img/bg_empty.png\")}}\"  style=\"width: auto !important;\" =\"\"></center>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t<div class=\" pull-right\">
\t\t\t\t\t\t{{ knp_pagination_render(channels) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t{% endblock%}", "AppBundle:Channel:index.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Channel/index.html.twig");
    }
}
