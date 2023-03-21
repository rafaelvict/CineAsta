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

/* AppBundle:Movie:index.html.twig */
class __TwigTemplate_d82f70ef9ea90bc8bf79b66f01804aab2386dd35a560de7ed76505baa804d886 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Movie:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Movie:index.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Movie:index.html.twig", 1);
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
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_movie_index");
        echo "\" class=\"btn  btn-lg btn-warning btn-block\"><i class=\"material-icons\" style=\"font-size: 30px;\">refresh</i> Refresh</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<a class=\"btn btn btn-lg btn-yellow btn-block\"><i class=\"material-icons\" style=\"font-size: 30px;\">movie</i> ";
        // line 11
        echo twig_escape_filter($this->env, ($context["movies_count"] ?? $this->getContext($context, "movies_count")), "html", null, true);
        echo " Movies</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_movie_add");
        echo "\" class=\"btn btn-rose btn-lg pull-right add-button btn-block\" title=\"\"><i class=\"material-icons\" style=\"font-size: 30px;\">add_box</i> NEW MOVIE </a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_movie_import");
        echo "\" class=\"btn btn-success btn-lg pull-right add-button btn-block\" title=\"\"><i class=\"material-icons\" style=\"font-size: 30px;\">get_app</i> IMPORT MOVIE </a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t<input name=\"q\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "q"], "method"), "html", null, true);
        echo "\" type=\"text\" class=\"search-input\">
\t\t\t\t\t\t\t<button class=\"btn btn-sm search-btn\"><i class=\"material-icons\" style=\"font-size: 30px;\">search</i></button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["movies"] ?? $this->getContext($context, "movies")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 30
            echo "\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6 col-lg-3 col-xl-2\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-content\" style=\"text-align: center;   padding: 0px;\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["movie"], "poster", []), "link", [])), "poster_thumb"), "html", null, true);
            echo "\"  >
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<span class=\"label-lang\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["movie"], "title", []), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-footer\" style=\"    text-align: center;\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_movie_edit", ["id" => $this->getAttribute($context["movie"], "id", [])]), "html", null, true);
            echo "\" rel=\"tooltip\" data-placement=\"left\" class=\" btn btn-success btn-xs btn-round\" data-original-title=\"Edit\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">edit</i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
            // line 41
            if (($this->getAttribute($context["movie"], "cover", []) != null)) {
                // line 42
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_notif_poster", ["title" => $this->getAttribute($context["movie"], "title", []), "id" => $this->getAttribute($context["movie"], "id", []), "image" => $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["movie"], "cover", []), "link", [])), "cover_thumb"), "icon" => $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["movie"], "poster", []), "link", [])), "poster_thumb")]), "html", null, true);
                echo "\" rel=\"tooltip\" data-placement=\"left\" class=\" btn btn-primary btn-xs btn-round\" data-original-title=\"Noitifcation\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">notifications</i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 46
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_notif_poster", ["title" => $this->getAttribute($context["movie"], "title", []), "id" => $this->getAttribute($context["movie"], "id", []), "image" => $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["movie"], "poster", []), "link", [])), "cover_thumb"), "icon" => $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["movie"], "poster", []), "link", [])), "poster_thumb")]), "html", null, true);
                echo "\" rel=\"tooltip\" data-placement=\"left\" class=\" btn btn-primary btn-xs btn-round\" data-original-title=\"Noitifcation\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">notifications</i>
\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
            }
            // line 50
            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_movie_delete", ["id" => $this->getAttribute($context["movie"], "id", [])]), "html", null, true);
            echo "\" rel=\"tooltip\" data-placement=\"left\" class=\" btn btn-danger btn-xs btn-round\" data-original-title=\"Delete\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">delete</i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 57
            echo "\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<center><img src=\"";
            // line 62
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\" pull-right\">
\t\t\t\t\t";
        // line 71
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["movies"] ?? $this->getContext($context, "movies")));
        echo "
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
        return "AppBundle:Movie:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 71,  181 => 69,  168 => 62,  161 => 57,  148 => 50,  140 => 46,  132 => 42,  130 => 41,  124 => 38,  118 => 35,  113 => 33,  108 => 30,  103 => 29,  94 => 23,  85 => 17,  79 => 14,  73 => 11,  67 => 8,  60 => 3,  51 => 2,  29 => 1,);
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
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<a href=\"{{path(\"app_movie_index\")}}\" class=\"btn  btn-lg btn-warning btn-block\"><i class=\"material-icons\" style=\"font-size: 30px;\">refresh</i> Refresh</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<a class=\"btn btn btn-lg btn-yellow btn-block\"><i class=\"material-icons\" style=\"font-size: 30px;\">movie</i> {{movies_count}} Movies</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<a href=\"{{path(\"app_movie_add\")}}\" class=\"btn btn-rose btn-lg pull-right add-button btn-block\" title=\"\"><i class=\"material-icons\" style=\"font-size: 30px;\">add_box</i> NEW MOVIE </a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<a href=\"{{path(\"app_movie_import\")}}\" class=\"btn btn-success btn-lg pull-right add-button btn-block\" title=\"\"><i class=\"material-icons\" style=\"font-size: 30px;\">get_app</i> IMPORT MOVIE </a>
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
\t\t\t\t\t{% for movie in movies %}
\t\t\t\t\t\t<div class=\"col-md-4 col-sm-6 col-lg-3 col-xl-2\">
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-content\" style=\"text-align: center;   padding: 0px;\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset(movie.poster.link)|imagine_filter('poster_thumb')}}\"  >
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t<span class=\"label-lang\">{{movie.title}}</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-footer\" style=\"    text-align: center;\">
\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"app_movie_edit\",{\"id\":movie.id})}}\" rel=\"tooltip\" data-placement=\"left\" class=\" btn btn-success btn-xs btn-round\" data-original-title=\"Edit\">
\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">edit</i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t{% if movie.cover != null  %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"app_home_notif_poster\",{title:movie.title,id:movie.id,image:asset(movie.cover.link)|imagine_filter(\"cover_thumb\"),icon:asset(movie.poster.link)|imagine_filter(\"poster_thumb\")})}}\" rel=\"tooltip\" data-placement=\"left\" class=\" btn btn-primary btn-xs btn-round\" data-original-title=\"Noitifcation\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">notifications</i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"app_home_notif_poster\",{title:movie.title,id:movie.id,image:asset(movie.poster.link)|imagine_filter(\"cover_thumb\"),icon:asset(movie.poster.link)|imagine_filter(\"poster_thumb\")})}}\" rel=\"tooltip\" data-placement=\"left\" class=\" btn btn-primary btn-xs btn-round\" data-original-title=\"Noitifcation\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"material-icons\">notifications</i>
\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"app_movie_delete\",{\"id\":movie.id})}}\" rel=\"tooltip\" data-placement=\"left\" class=\" btn btn-danger btn-xs btn-round\" data-original-title=\"Delete\">
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
\t\t\t\t</div>
\t\t\t\t<div class=\" pull-right\">
\t\t\t\t\t{{ knp_pagination_render(movies) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t{% endblock%}", "AppBundle:Movie:index.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Movie/index.html.twig");
    }
}
