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

/* WebBundle:Movie:filter.html.twig */
class __TwigTemplate_e270482b24aa38008d9069f8ed148cefc2f2fd18e7fe7d342163d334e8c7780a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Movie:filter.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Movie:filter.html.twig"));

        // line 2
        $context["subtitle"] = twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "genre"], "method"));
        // line 3
        $context["og_description"] = twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "genre"], "method"));
        // line 4
        $context["og_type"] = "null";
        // line 5
        $context["og_image"] = "null";
        // line 6
        $context["keywords"] = "null";
        // line 1
        $this->parent = $this->loadTemplate("WebBundle::layout.html.twig", "WebBundle:Movie:filter.html.twig", 1);
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

        // line 8
        ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "genre"], "method") == "all")) ? (print ("Gêneros")) : (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "genre"], "method"), "html", null, true))));
        echo " • ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "order"], "method")), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "\t<div class=\"row content-section\">
\t\t<div class=\"filter-section\">
\t\t\t<div class=\"btn-group season-dropdown float-right\" role=\"group\" aria-label=\"Basic example\">
\t\t\t\t<a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_poster_filter", ["genre" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "genre"], "method"), "order" => "newest"]), "html", null, true);
        echo "\" class=\"btn btn-secondary ";
        if (("newest" == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "order"], "method"))) {
            echo " active ";
        }
        echo "\"><i class=\"far fa-clock\"></i><span class=\"for-desktop\"> O mais novo</span></a>
\t\t\t\t<a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_poster_filter", ["genre" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "genre"], "method"), "order" => "views"]), "html", null, true);
        echo "\" class=\"btn btn-secondary ";
        if (("views" == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "order"], "method"))) {
            echo " active ";
        }
        echo "\"><i class=\"far fa-eye\"></i><span class=\"for-desktop\"> Visualizações</span></a>
\t\t\t\t<a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_poster_filter", ["genre" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "genre"], "method"), "order" => "rating"]), "html", null, true);
        echo "\" class=\"btn btn-secondary ";
        if (("rating" == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "order"], "method"))) {
            echo " active ";
        }
        echo "\"><i class=\"fas fa-star-half-alt\"></i><span class=\"for-desktop\"> Avaliação</span></a>
\t\t\t\t<a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_poster_filter", ["genre" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "genre"], "method"), "order" => "imdb"]), "html", null, true);
        echo "\" class=\"btn btn-secondary ";
        if (("imdb" == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "order"], "method"))) {
            echo " active ";
        }
        echo "\"><i class=\"fab fa-imdb\"></i><span class=\"for-desktop\"> Classificação do IMdb</span></a>
\t\t\t\t<a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_poster_filter", ["genre" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "genre"], "method"), "order" => "title"]), "html", null, true);
        echo "\" class=\"btn btn-secondary ";
        if (("title" == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "order"], "method"))) {
            echo " active ";
        }
        echo "\"><i class=\"fas fa-sort-alpha-down\"></i><span class=\"for-desktop\"> Título</span></a>
\t\t\t\t<a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_poster_filter", ["genre" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "genre"], "method"), "order" => "year"]), "html", null, true);
        echo "\" class=\"btn btn-secondary ";
        if (("year" == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "order"], "method"))) {
            echo " active ";
        }
        echo "\"><i class=\"fas fa-calendar-alt\"></i><span class=\"for-desktop\"> Ano</span></a>
\t\t\t</div>
\t\t\t<div class=\"btn-group season-dropdown\" role=\"group\">
\t\t\t\t<button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t";
        // line 23
        ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "genre"], "method") == "all")) ? (print ("Gêneros")) : (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "genre"], "method"), "html", null, true))));
        echo "
\t\t\t\t</button>
\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_poster_filter", ["genre" => "all", "order" => "newest"]), "html", null, true);
        echo "\">Gêneros</a>
\t\t\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["genres"] ?? $this->getContext($context, "genres")));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 28
            echo "\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_poster_filter", ["genre" => $this->getAttribute($context["genre"], "title", []), "order" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "order"], "method")]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["genre"], "html", null, true);
            echo "</a>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row content-section\">
\t\t<div></div>
\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posters"] ?? $this->getContext($context, "posters")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["poster"]) {
            // line 37
            echo "\t\t\t";
            if (($this->getAttribute($context["poster"], "type", []) == "movie")) {
                // line 38
                echo "\t\t\t\t";
                echo twig_include($this->env, $context, "WebBundle:Movie:movie.html.twig", ["poster" => $context["poster"], "class" => "col-4 col-md-2 col-xxl-2"]);
                echo "
\t\t\t";
            } else {
                // line 40
                echo "\t\t\t\t";
                echo twig_include($this->env, $context, "WebBundle:Serie:serie.html.twig", ["poster" => $context["poster"], "class" => "col-4 col-md-2 col-xxl-2"]);
                echo "
\t\t\t";
            }
            // line 42
            echo "\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poster'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t</div>
\t<div class=\"row content-section\">
\t\t<div class=\"filter-section\">
\t\t\t<div class=\" float-right\">
\t\t\t\t";
        // line 47
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["posters"] ?? $this->getContext($context, "posters")));
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
        return "WebBundle:Movie:filter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 47,  230 => 43,  216 => 42,  210 => 40,  204 => 38,  201 => 37,  184 => 36,  176 => 30,  165 => 28,  161 => 27,  157 => 26,  151 => 23,  140 => 19,  132 => 18,  124 => 17,  116 => 16,  108 => 15,  100 => 14,  95 => 11,  86 => 10,  72 => 8,  63 => 7,  52 => 1,  50 => 6,  48 => 5,  46 => 4,  44 => 3,  42 => 2,  30 => 1,);
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
{% set subtitle =    app.request.get('genre')|capitalize %}
{% set og_description = app.request.get('genre')|capitalize %}
{% set og_type =  \"null\" %}
{% set og_image =  \"null\" %}
{% set keywords =  \"null\" %}
{% block title %}
{{ (app.request.get('genre') == \"all\")? \"Gêneros\": app.request.get('genre') }} • {{app.request.get('order')|capitalize}}
{% endblock %}
{% block body %}
\t<div class=\"row content-section\">
\t\t<div class=\"filter-section\">
\t\t\t<div class=\"btn-group season-dropdown float-right\" role=\"group\" aria-label=\"Basic example\">
\t\t\t\t<a href=\"{{path(\"wep_poster_filter\",{genre:app.request.get('genre'),order:\"newest\"})}}\" class=\"btn btn-secondary {% if \"newest\" ==  app.request.get(\"order\") %} active {% endif %}\"><i class=\"far fa-clock\"></i><span class=\"for-desktop\"> O mais novo</span></a>
\t\t\t\t<a href=\"{{path(\"wep_poster_filter\",{genre:app.request.get('genre'),order:\"views\"})}}\" class=\"btn btn-secondary {% if \"views\" ==  app.request.get(\"order\") %} active {% endif %}\"><i class=\"far fa-eye\"></i><span class=\"for-desktop\"> Visualizações</span></a>
\t\t\t\t<a href=\"{{path(\"wep_poster_filter\",{genre:app.request.get('genre'),order:\"rating\"})}}\" class=\"btn btn-secondary {% if \"rating\" ==  app.request.get(\"order\") %} active {% endif %}\"><i class=\"fas fa-star-half-alt\"></i><span class=\"for-desktop\"> Avaliação</span></a>
\t\t\t\t<a href=\"{{path(\"wep_poster_filter\",{genre:app.request.get('genre'),order:\"imdb\"})}}\" class=\"btn btn-secondary {% if \"imdb\" ==  app.request.get(\"order\") %} active {% endif %}\"><i class=\"fab fa-imdb\"></i><span class=\"for-desktop\"> Classificação do IMdb</span></a>
\t\t\t\t<a href=\"{{path(\"wep_poster_filter\",{genre:app.request.get('genre'),order:\"title\"})}}\" class=\"btn btn-secondary {% if \"title\" ==  app.request.get(\"order\") %} active {% endif %}\"><i class=\"fas fa-sort-alpha-down\"></i><span class=\"for-desktop\"> Título</span></a>
\t\t\t\t<a href=\"{{path(\"wep_poster_filter\",{genre:app.request.get('genre'),order:\"year\"})}}\" class=\"btn btn-secondary {% if \"year\" ==  app.request.get(\"order\") %} active {% endif %}\"><i class=\"fas fa-calendar-alt\"></i><span class=\"for-desktop\"> Ano</span></a>
\t\t\t</div>
\t\t\t<div class=\"btn-group season-dropdown\" role=\"group\">
\t\t\t\t<button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t{{ (app.request.get('genre') == \"all\")? \"Gêneros\": app.request.get('genre') }}
\t\t\t\t</button>
\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path(\"wep_poster_filter\",{genre:\"all\",order:\"newest\"})}}\">Gêneros</a>
\t\t\t\t\t{% for genre in genres %}
\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{path(\"wep_poster_filter\",{genre:genre.title,order:app.request.get(\"order\")})}}\">{{genre}}</a>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row content-section\">
\t\t<div></div>
\t\t{% for poster in posters %}
\t\t\t{% if poster.type == \"movie\" %}
\t\t\t\t{{ include('WebBundle:Movie:movie.html.twig',{poster:poster,class:\"col-4 col-md-2 col-xxl-2\"}) }}
\t\t\t{% else %}
\t\t\t\t{{ include('WebBundle:Serie:serie.html.twig',{poster:poster,class:\"col-4 col-md-2 col-xxl-2\"}) }}
\t\t\t{% endif %}
\t\t{% endfor %}
\t</div>
\t<div class=\"row content-section\">
\t\t<div class=\"filter-section\">
\t\t\t<div class=\" float-right\">
\t\t\t\t{{ knp_pagination_render(posters) }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock%}", "WebBundle:Movie:filter.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Movie/filter.html.twig");
    }
}
