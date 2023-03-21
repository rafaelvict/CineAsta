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

/* AppBundle:Serie:import_episodes.html.twig */
class __TwigTemplate_5893a504d5ae52cab9fcaff47e382ca2cd09e0cf764325c4f7a808a51316b8c1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Serie:import_episodes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Serie:import_episodes.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Serie:import_episodes.html.twig", 1);
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
        echo "\t<script type=\"text/javascript\">
\t  \tvar themoviedb_key = \"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["setting"] ?? $this->getContext($context, "setting")), "themoviedbkey", []), "html", null, true);
        echo "\";
  \t\tvar language =  \"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["setting"] ?? $this->getContext($context, "setting")), "themoviedblang", []), "html", null, true);
        echo "\";
\t</script>
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-offset-2 col-md-8\">
\t\t\t\t<div class=\"poster-infos\">
\t\t\t\t\t<div class=\"card\" style=\"margin: 10px 0;\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "poster", []), "link", [])), "poster_thumb"), "html", null, true);
        echo "\" id=\"image-poster\" width=\"100%\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t<table width=\"100%\" class=\"table\">
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th style=\"vertical-align: top;\">Title</th>
\t\t\t\t\t\t\t\t\t\t\t<td id=\"title-poster\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "title", []), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th style=\"vertical-align: top;\">Release Date</th>
\t\t\t\t\t\t\t\t\t\t\t<td id=\"date-poster\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "year", []), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th style=\"vertical-align: top;\">Rating</th>
\t\t\t\t\t\t\t\t\t\t\t<td id=\"rating-poster\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "imdb", []), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th style=\"vertical-align: top;\">Overview</th>
\t\t\t\t\t\t\t\t\t\t\t<td id=\"overview-poster\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "description", []), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card\" style=\"margin: 10px 0;\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<span class=\"import-title\" >Serie tv Details Imported</span>
\t\t\t\t\t\t\t<span class=\"label label-fill label-success pull-right\"  style=\"margin: 10px;\"><i class=\"material-icons\">check</i></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card\" style=\"margin: 10px 0;\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<span class=\"import-title\" >Serie tv Keywords Imported</span>
\t\t\t\t\t\t\t<span class=\"label label-fill label-success pull-right\"  style=\"margin: 10px;\"><i class=\"material-icons\">check</i></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card\" style=\"margin: 10px 0;\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<span class=\"import-title\" >";
        // line 52
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "roles", [])), "html", null, true);
        echo " casts Imported</span>
\t\t\t\t\t\t\t<span class=\"label label-fill label-success pull-right\"  style=\"margin: 10px;\"><i class=\"material-icons\">check</i></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card\" style=\"margin: 10px 0;\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<span class=\"import-title\" >Trailer video Imported</span>
\t\t\t\t\t\t\t<span class=\"label label-fill label-success pull-right\"  style=\"margin: 10px;\"><i class=\"material-icons\">check</i></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "seasons", []));
        foreach ($context['_seq'] as $context["_key"] => $context["old_season"]) {
            // line 63
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute(($context["season"] ?? $this->getContext($context, "season")), "position", []) > $this->getAttribute($context["old_season"], "position", []))) {
                // line 64
                echo "\t\t\t\t\t\t<div class=\"card\" style=\"margin: 10px 0;\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span class=\"import-title\" >";
                // line 66
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["old_season"], "episodes", [])), "html", null, true);
                echo " Episodes Imported in \"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["old_season"], "title", []), "html", null, true);
                echo "\"</span>
\t\t\t\t\t\t\t\t<span class=\"label label-fill label-success pull-right\"  style=\"margin: 10px;\"><i class=\"material-icons\">check</i></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 71
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['old_season'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "\t\t\t\t\t<div class=\"card\" style=\"margin: 10px 0;\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t";
        // line 74
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t\t\t\t\t";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "id", []), 'widget');
        echo "
\t\t\t\t\t\t\t<span class=\"import-title\" >Import \"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute(($context["season"] ?? $this->getContext($context, "season")), "title", []), "html", null, true);
        echo "\" Episodes</span>
\t\t\t\t\t\t\t<button class=\"btn btn-fill btn-rose pull-right\" id=\"import_movie\" style=\"margin: 10px;\"><i class=\"material-icons\">get_app</i> Import</button>
\t\t\t\t\t\t\t";
        // line 78
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Serie:import_episodes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 78,  184 => 76,  180 => 75,  176 => 74,  172 => 72,  166 => 71,  156 => 66,  152 => 64,  149 => 63,  145 => 62,  132 => 52,  109 => 32,  102 => 28,  95 => 24,  88 => 20,  79 => 14,  67 => 5,  63 => 4,  60 => 3,  51 => 2,  29 => 1,);
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
\t<script type=\"text/javascript\">
\t  \tvar themoviedb_key = \"{{setting.themoviedbkey}}\";
  \t\tvar language =  \"{{setting.themoviedblang}}\";
\t</script>
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-offset-2 col-md-8\">
\t\t\t\t<div class=\"poster-infos\">
\t\t\t\t\t<div class=\"card\" style=\"margin: 10px 0;\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset(poster.poster.link)|imagine_filter('poster_thumb')}}\" id=\"image-poster\" width=\"100%\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t<table width=\"100%\" class=\"table\">
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th style=\"vertical-align: top;\">Title</th>
\t\t\t\t\t\t\t\t\t\t\t<td id=\"title-poster\">{{poster.title}}</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th style=\"vertical-align: top;\">Release Date</th>
\t\t\t\t\t\t\t\t\t\t\t<td id=\"date-poster\">{{poster.year}}</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th style=\"vertical-align: top;\">Rating</th>
\t\t\t\t\t\t\t\t\t\t\t<td id=\"rating-poster\">{{poster.imdb}}</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th style=\"vertical-align: top;\">Overview</th>
\t\t\t\t\t\t\t\t\t\t\t<td id=\"overview-poster\">{{poster.description}}</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card\" style=\"margin: 10px 0;\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<span class=\"import-title\" >Serie tv Details Imported</span>
\t\t\t\t\t\t\t<span class=\"label label-fill label-success pull-right\"  style=\"margin: 10px;\"><i class=\"material-icons\">check</i></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card\" style=\"margin: 10px 0;\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<span class=\"import-title\" >Serie tv Keywords Imported</span>
\t\t\t\t\t\t\t<span class=\"label label-fill label-success pull-right\"  style=\"margin: 10px;\"><i class=\"material-icons\">check</i></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card\" style=\"margin: 10px 0;\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<span class=\"import-title\" >{{poster.roles|length}} casts Imported</span>
\t\t\t\t\t\t\t<span class=\"label label-fill label-success pull-right\"  style=\"margin: 10px;\"><i class=\"material-icons\">check</i></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card\" style=\"margin: 10px 0;\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<span class=\"import-title\" >Trailer video Imported</span>
\t\t\t\t\t\t\t<span class=\"label label-fill label-success pull-right\"  style=\"margin: 10px;\"><i class=\"material-icons\">check</i></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% for old_season in poster.seasons %}
\t\t\t\t\t\t{% if season.position > old_season.position %}
\t\t\t\t\t\t<div class=\"card\" style=\"margin: 10px 0;\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span class=\"import-title\" >{{old_season.episodes|length}} Episodes Imported in \"{{old_season.title}}\"</span>
\t\t\t\t\t\t\t\t<span class=\"label label-fill label-success pull-right\"  style=\"margin: 10px;\"><i class=\"material-icons\">check</i></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t\t<div class=\"card\" style=\"margin: 10px 0;\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t\t\t{{form_widget(form.id)}}
\t\t\t\t\t\t\t<span class=\"import-title\" >Import \"{{season.title}}\" Episodes</span>
\t\t\t\t\t\t\t<button class=\"btn btn-fill btn-rose pull-right\" id=\"import_movie\" style=\"margin: 10px;\"><i class=\"material-icons\">get_app</i> Import</button>
\t\t\t\t\t\t\t{{ form_end(form) }}\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock%}", "AppBundle:Serie:import_episodes.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Serie/import_episodes.html.twig");
    }
}
