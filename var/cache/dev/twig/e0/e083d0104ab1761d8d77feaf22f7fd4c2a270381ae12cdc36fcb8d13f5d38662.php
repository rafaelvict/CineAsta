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

/* AppBundle:Serie:trailer.html.twig */
class __TwigTemplate_f9d11b45ca093d6f2e142404b27e196240e54c735808e7f1d7819238b73da458 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Serie:trailer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Serie:trailer.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Serie:trailer.html.twig", 1);
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
\t\t\t\t<div class=\"card card-stats card card-initial\" >
\t\t\t\t\t<div class=\"card-content views-body  pull-right\">
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">remove_red_eye</i> ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "viewscountnumber", []), "html", null, true);
        echo " Views</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie pull-right\"><i class=\"material-icons\">share</i> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "sharesnumber", []), "html", null, true);
        echo " Shares</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie pull-right\"><i class=\"material-icons\">cloud_download</i> ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "downloadscountnumber", []), "html", null, true);
        echo " Downloads</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-header \" data-background-color=\"green\">
\t\t\t\t\t\t<i class=\"material-icons\">tv</i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-content trailer-body\">
\t\t\t\t\t\t<h4 class=\"title\">Trailer : ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "title", []), "html", null, true);
        echo " </b></h4>
\t\t\t\t\t</div>
                    <div class=\"tab-moivie tab-series\"><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_serie_edit", ["id" => $this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">edit</i> Edit</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_serie_cast", ["id" => $this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">recent_actors</i> Cast</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_serie_trailer", ["id" => $this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie-active\"><i class=\"material-icons\">movie_filter</i> Trailer</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_serie_seasons", ["id" => $this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">dynamic_feed</i> SEASONS</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_serie_comments", ["id" => $this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">comment</i> Comments</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_serie_ratings", ["id" => $this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">star_half</i> Ratings</a>
                    </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t";
        // line 23
        if (($this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "trailer", []) != null)) {
            // line 24
            echo "\t\t\t\t\t<div class=\"card card-stats\" style=\"margin: 15px 0;\">
\t\t\t\t\t\t<div class=\"card-header \" data-background-color=\"green\">
\t\t\t\t\t\t\t<i class=\"material-icons\">movie_filter</i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-content trailer-body\">
\t\t\t\t\t\t\t<h4 class=\"title\">";
            // line 29
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "trailer", []), "type", [])), "html", null, true);
            echo "  ";
            if ((($this->getAttribute($this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "trailer", []), "type", []) == "file") && ($this->getAttribute($this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "trailer", []), "media", []) != null))) {
                echo "(";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "trailer", []), "media", []), "extension", [])), "html", null, true);
                echo ")";
            }
            echo " | <b>Trailer : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "trailer", []), "url", []), "html", null, true);
            echo " ";
            if ((($this->getAttribute($this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "trailer", []), "type", []) == "file") && ($this->getAttribute($this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "trailer", []), "media", []) != null))) {
                echo " ";
                echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "scheme", []) . "://") . $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "httpHost", [])) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "trailer", []), "media", []), "link", []))), "html", null, true);
            }
            echo "</b></h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"trailer-footer\">
\t\t\t\t\t\t\t<a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_source_trailer", ["id" => $this->getAttribute($this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "trailer", []), "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-success btn-xs pull-right\" ><i class=\"material-icons\">edit</i></a>
\t\t\t\t\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_source_delete", ["id" => $this->getAttribute($this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "trailer", []), "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-rose btn-xs pull-right\"><i class=\"material-icons\">delete</i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        } else {
            // line 37
            echo "\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-header card-header-icon\" data-background-color=\"rose\">
\t\t\t\t\t\t\t<i class=\"material-icons\">movie_filter</i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t<h4 class=\"card-title\">Add ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "title", []), "html", null, true);
            echo " Trailer</h4>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t";
            // line 44
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["trailer_form"] ?? $this->getContext($context, "trailer_form")), 'form_start');
            echo "
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Source Type</label>
\t\t\t\t\t\t\t\t";
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["trailer_form"] ?? $this->getContext($context, "trailer_form")), "type", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["trailer_form"] ?? $this->getContext($context, "trailer_form")), "type", []), 'errors');
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Source Url</label>
\t\t\t\t\t\t\t\t";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["trailer_form"] ?? $this->getContext($context, "trailer_form")), "url", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["trailer_form"] ?? $this->getContext($context, "trailer_form")), "url", []), 'errors');
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\" style=\"display:none\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Source File</label>
\t\t\t\t\t\t\t\t";
            // line 57
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["trailer_form"] ?? $this->getContext($context, "trailer_form")), "file", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
            // line 58
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["trailer_form"] ?? $this->getContext($context, "trailer_form")), "file", []), 'errors');
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"pull-right\">";
            // line 60
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["trailer_form"] ?? $this->getContext($context, "trailer_form")), "save", []), 'widget', ["attr" => ["class" => "btn btn-fill btn-rose"]]);
            echo "</span>
\t\t\t\t\t\t\t";
            // line 61
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["trailer_form"] ?? $this->getContext($context, "trailer_form")), 'form_end');
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 65
        echo "\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Serie:trailer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 65,  199 => 61,  195 => 60,  190 => 58,  186 => 57,  179 => 53,  175 => 52,  168 => 48,  164 => 47,  158 => 44,  153 => 42,  146 => 37,  139 => 33,  135 => 32,  116 => 29,  109 => 24,  107 => 23,  89 => 18,  84 => 16,  75 => 10,  71 => 9,  67 => 8,  60 => 3,  51 => 2,  29 => 1,);
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
\t\t\t\t<div class=\"card card-stats card card-initial\" >
\t\t\t\t\t<div class=\"card-content views-body  pull-right\">
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">remove_red_eye</i> {{serie.viewscountnumber}} Views</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie pull-right\"><i class=\"material-icons\">share</i> {{serie.sharesnumber}} Shares</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie pull-right\"><i class=\"material-icons\">cloud_download</i> {{serie.downloadscountnumber}} Downloads</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-header \" data-background-color=\"green\">
\t\t\t\t\t\t<i class=\"material-icons\">tv</i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-content trailer-body\">
\t\t\t\t\t\t<h4 class=\"title\">Trailer : {{serie.title }} </b></h4>
\t\t\t\t\t</div>
                    <div class=\"tab-moivie tab-series\"><a href=\"{{path(\"app_serie_edit\",{\"id\":serie.id})}}\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">edit</i> Edit</a><a href=\"{{path(\"app_serie_cast\",{\"id\":serie.id})}}\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">recent_actors</i> Cast</a><a href=\"{{path(\"app_serie_trailer\",{\"id\":serie.id})}}\" class=\"btn btn-tab-movie-active\"><i class=\"material-icons\">movie_filter</i> Trailer</a><a href=\"{{path(\"app_serie_seasons\",{\"id\":serie.id})}}\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">dynamic_feed</i> SEASONS</a><a href=\"{{path(\"app_serie_comments\",{\"id\":serie.id})}}\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">comment</i> Comments</a><a href=\"{{path(\"app_serie_ratings\",{\"id\":serie.id})}}\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">star_half</i> Ratings</a>
                    </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t{% if serie.trailer != null %}
\t\t\t\t\t<div class=\"card card-stats\" style=\"margin: 15px 0;\">
\t\t\t\t\t\t<div class=\"card-header \" data-background-color=\"green\">
\t\t\t\t\t\t\t<i class=\"material-icons\">movie_filter</i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-content trailer-body\">
\t\t\t\t\t\t\t<h4 class=\"title\">{{serie.trailer.type|capitalize}}  {% if serie.trailer.type == \"file\" and serie.trailer.media != null %}({{serie.trailer.media.extension|capitalize}}){% endif %} | <b>Trailer : {{serie.trailer.url}} {% if serie.trailer.type == \"file\" and serie.trailer.media != null %} {{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset(serie.trailer.media.link) }}{% endif %}</b></h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"trailer-footer\">
\t\t\t\t\t\t\t<a href=\"{{path(\"app_source_trailer\",{\"id\":serie.trailer.id})}}\" class=\"btn btn-success btn-xs pull-right\" ><i class=\"material-icons\">edit</i></a>
\t\t\t\t\t\t\t<a href=\"{{path(\"app_source_delete\",{\"id\":serie.trailer.id})}}\" class=\"btn btn-rose btn-xs pull-right\"><i class=\"material-icons\">delete</i></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% else %}
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-header card-header-icon\" data-background-color=\"rose\">
\t\t\t\t\t\t\t<i class=\"material-icons\">movie_filter</i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t<h4 class=\"card-title\">Add {{serie.title}} Trailer</h4>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t{{form_start(trailer_form)}}
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Source Type</label>
\t\t\t\t\t\t\t\t{{form_widget(trailer_form.type,{\"attr\":{\"class\":\"form-control\"}})}}
\t\t\t\t\t\t\t\t<span class=\"validate-input\">{{form_errors(trailer_form.type)}}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Source Url</label>
\t\t\t\t\t\t\t\t{{form_widget(trailer_form.url,{\"attr\":{\"class\":\"form-control\"}})}}
\t\t\t\t\t\t\t\t<span class=\"validate-input\">{{form_errors(trailer_form.url)}}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\" style=\"display:none\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Source File</label>
\t\t\t\t\t\t\t\t{{form_widget(trailer_form.file,{\"attr\":{\"class\":\"form-control\"}})}}
\t\t\t\t\t\t\t\t<span class=\"validate-input\">{{form_errors(trailer_form.file)}}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"pull-right\">{{form_widget(trailer_form.save,{attr:{\"class\":\"btn btn-fill btn-rose\"}})}}</span>
\t\t\t\t\t\t\t{{form_end(trailer_form)}}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock%}", "AppBundle:Serie:trailer.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Serie/trailer.html.twig");
    }
}
