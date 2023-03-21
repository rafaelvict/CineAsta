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

/* WebBundle:Channel:index.html.twig */
class __TwigTemplate_780938d75985ab6a33c03ca74ec8968cc0cc52f5507070b30ebbd2904b1387e7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Channel:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Channel:index.html.twig"));

        // line 2
        $context["subtitle"] = "TV Channels";
        // line 3
        $context["og_description"] = "TV Channels";
        // line 4
        $context["og_type"] = "null";
        // line 5
        $context["og_image"] = "null";
        // line 6
        $context["keywords"] = "null";
        // line 1
        $this->parent = $this->loadTemplate("WebBundle::layout.html.twig", "WebBundle:Channel:index.html.twig", 1);
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

        echo "Channels ";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "country"], "method") != "all")) {
            echo " • ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "country"], "method"), "html", null, true);
        }
        echo " ";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "category"], "method") != "all")) {
            echo " • ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "category"], "method"), "html", null, true);
        }
        
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
\t\t<div class=\"filter-section\">
\t\t\t<div class=\"btn-group season-dropdown float-right\" role=\"group\" aria-label=\"Basic example\">
\t\t\t\t<a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_channel_index", ["country" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "country"], "method"), "category" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "category"], "method"), "order" => "newest"]), "html", null, true);
        echo "\" class=\"btn btn-secondary ";
        if (("newest" == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "order"], "method"))) {
            echo " active ";
        }
        echo "\"><i class=\"far fa-clock\"></i> <span class=\"for-desktop\">O mais novo</span></a>
\t\t\t\t<a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_channel_index", ["country" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "country"], "method"), "category" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "category"], "method"), "order" => "views"]), "html", null, true);
        echo "\" class=\"btn btn-secondary ";
        if (("views" == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "order"], "method"))) {
            echo " active ";
        }
        echo "\"><i class=\"far fa-eye\"></i> <span class=\"for-desktop\">Visualizações</span></a>
\t\t\t\t<a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_channel_index", ["country" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "country"], "method"), "category" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "category"], "method"), "order" => "rating"]), "html", null, true);
        echo "\" class=\"btn btn-secondary ";
        if (("rating" == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "order"], "method"))) {
            echo " active ";
        }
        echo "\"><i class=\"fas fa-star-half-alt\"></i> <span class=\"for-desktop\">Avaliações</span></a>
\t\t\t\t<a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_channel_index", ["country" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "country"], "method"), "category" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "category"], "method"), "order" => "title"]), "html", null, true);
        echo "\" class=\"btn btn-secondary ";
        if (("title" == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "order"], "method"))) {
            echo " active ";
        }
        echo "\"><i class=\"fas fa-sort-alpha-down\"></i> <span class=\"for-desktop\">Título</span></a>
\t\t\t</div>
\t\t\t<div class=\"btn-group season-dropdown\" role=\"group\">
\t\t\t\t<button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t";
        // line 19
        ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "category"], "method") == "all")) ? (print ("Categorias")) : (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "category"], "method"), "html", null, true))));
        echo "
\t\t\t\t</button>
\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_channel_index", ["country" => "all", "category" => "all", "order" => "newest"]), "html", null, true);
        echo "\">Todos</a>
\t\t\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 24
            echo "\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_channel_index", ["category" => $this->getAttribute($context["category"], "title", []), "order" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "order"], "method"), "country" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "country"], "method")]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "</a>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"btn-group season-dropdown\" role=\"group\">
\t\t\t\t<button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t";
        // line 30
        ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "country"], "method") == "all")) ? (print ("Países")) : (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "country"], "method"), "html", null, true))));
        echo "
\t\t\t\t</button>
\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_channel_index", ["country" => "all", "category" => "all", "order" => "newest"]), "html", null, true);
        echo "\">Todos</a>
\t\t\t\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? $this->getContext($context, "countries")));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 35
            echo "\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_channel_index", ["category" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "category"], "method"), "order" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "order"], "method"), "country" => $this->getAttribute($context["country"], "title", [])]), "html", null, true);
            echo "\"><img class=\"country-logo\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($context["country"], "media", []), "link", []), "language_thumb_api")), "html", null, true);
            echo "\">  ";
            echo twig_escape_filter($this->env, $context["country"], "html", null, true);
            echo "</a>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row content-section\">
\t\t<div></div>
\t\t";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["channels"] ?? $this->getContext($context, "channels")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
            // line 44
            echo "\t\t\t";
            echo twig_include($this->env, $context, "WebBundle:Channel:channel.html.twig", ["poster" => $context["channel"], "class" => "col-4 col-md-2 col-xxl-2"]);
            echo "
\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t</div>
\t<div class=\"row content-section\">
\t\t<div class=\"filter-section\">
\t\t\t<div class=\" float-right\">
\t\t\t\t";
        // line 50
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["channels"] ?? $this->getContext($context, "channels")));
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Channel:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 50,  239 => 46,  222 => 44,  205 => 43,  197 => 37,  184 => 35,  180 => 34,  176 => 33,  170 => 30,  164 => 26,  153 => 24,  149 => 23,  145 => 22,  139 => 19,  128 => 15,  120 => 14,  112 => 13,  104 => 12,  99 => 9,  90 => 8,  63 => 7,  52 => 1,  50 => 6,  48 => 5,  46 => 4,  44 => 3,  42 => 2,  30 => 1,);
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
{% set subtitle =  \"TV Channels\" %}
{% set og_description =  \"TV Channels\" %}
{% set og_type =  \"null\" %}
{% set og_image =  \"null\" %}
{% set keywords =  \"null\" %}
{% block title %}Channels {% if app.request.get('country') != \"all\" %} • {{app.request.get('country')}}{% endif %} {% if app.request.get('category') != \"all\" %} • {{app.request.get('category')}}{% endif %}{% endblock %}
{% block body%}
\t<div class=\"row content-section\">
\t\t<div class=\"filter-section\">
\t\t\t<div class=\"btn-group season-dropdown float-right\" role=\"group\" aria-label=\"Basic example\">
\t\t\t\t<a href=\"{{path(\"wep_channel_index\",{country:app.request.get(\"country\"),category:app.request.get('category'),order:\"newest\"})}}\" class=\"btn btn-secondary {% if \"newest\" ==  app.request.get(\"order\") %} active {% endif %}\"><i class=\"far fa-clock\"></i> <span class=\"for-desktop\">O mais novo</span></a>
\t\t\t\t<a href=\"{{path(\"wep_channel_index\",{country:app.request.get(\"country\"),category:app.request.get('category'),order:\"views\"})}}\" class=\"btn btn-secondary {% if \"views\" ==  app.request.get(\"order\") %} active {% endif %}\"><i class=\"far fa-eye\"></i> <span class=\"for-desktop\">Visualizações</span></a>
\t\t\t\t<a href=\"{{path(\"wep_channel_index\",{country:app.request.get(\"country\"),category:app.request.get('category'),order:\"rating\"})}}\" class=\"btn btn-secondary {% if \"rating\" ==  app.request.get(\"order\") %} active {% endif %}\"><i class=\"fas fa-star-half-alt\"></i> <span class=\"for-desktop\">Avaliações</span></a>
\t\t\t\t<a href=\"{{path(\"wep_channel_index\",{country:app.request.get(\"country\"),category:app.request.get('category'),order:\"title\"})}}\" class=\"btn btn-secondary {% if \"title\" ==  app.request.get(\"order\") %} active {% endif %}\"><i class=\"fas fa-sort-alpha-down\"></i> <span class=\"for-desktop\">Título</span></a>
\t\t\t</div>
\t\t\t<div class=\"btn-group season-dropdown\" role=\"group\">
\t\t\t\t<button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t{{ (app.request.get('category') == \"all\")? \"Categorias\": app.request.get('category') }}
\t\t\t\t</button>
\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path(\"wep_channel_index\",{country:\"all\",category:\"all\",order:\"newest\"})}}\">Todos</a>
\t\t\t\t\t{% for category in categories %}
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path(\"wep_channel_index\",{category:category.title,order:app.request.get(\"order\"),country:app.request.get(\"country\")})}}\">{{category}}</a>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"btn-group season-dropdown\" role=\"group\">
\t\t\t\t<button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t{{ (app.request.get('country') == \"all\")? \"Países\": app.request.get('country') }}
\t\t\t\t</button>
\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path(\"wep_channel_index\",{country:\"all\",category:\"all\",order:\"newest\"})}}\">Todos</a>
\t\t\t\t\t{% for country in countries %}
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path(\"wep_channel_index\",{category:app.request.get(\"category\"),order:app.request.get(\"order\"),country:country.title})}}\"><img class=\"country-logo\" src=\"{{asset(country.media.link|imagine_filter('language_thumb_api'))}}\">  {{country}}</a>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row content-section\">
\t\t<div></div>
\t\t{% for channel in channels %}
\t\t\t{{ include('WebBundle:Channel:channel.html.twig',{poster:channel,class:\"col-4 col-md-2 col-xxl-2\"}) }}
\t\t{% endfor %}
\t</div>
\t<div class=\"row content-section\">
\t\t<div class=\"filter-section\">
\t\t\t<div class=\" float-right\">
\t\t\t\t{{ knp_pagination_render(channels) }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock%}", "WebBundle:Channel:index.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Channel/index.html.twig");
    }
}
