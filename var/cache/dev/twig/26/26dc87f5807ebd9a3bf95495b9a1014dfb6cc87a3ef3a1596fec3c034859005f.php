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

/* AppBundle:Episode:edit.html.twig */
class __TwigTemplate_6a62f6fa20c5b787b490738f914d3a7ec43d3b638ffc2d7a686a48fcd6586d6c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Episode:edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Episode:edit.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Episode:edit.html.twig", 1);
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
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"tab-moivie tab-channel\">
\t\t\t\t\t\t<a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_episode_edit", ["id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie-active col-md-12\"><i class=\"material-icons\">edit</i> Edit</a>
\t\t\t\t\t\t<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_episode_sources", ["id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">folder</i> Sources</a>
\t\t\t\t\t\t<a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_episode_subtitles", ["id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">subtitles</i> Subtitles</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">remove_red_eye</i> ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "viewsnumber", []), "html", null, true);
        echo " views</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">cloud_download</i> ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "downloadsnumber", []), "html", null, true);
        echo " downloads</a>
\t\t\t\t\t\t<a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_serie_seasons", ["id" => $this->getAttribute($this->getAttribute(($context["season"] ?? $this->getContext($context, "season")), "poster", []), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">arrow_back</i> back</a>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-9\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header card-header-icon\" data-background-color=\"rose\">
\t\t\t\t\t\t<i class=\"material-icons\">movie</i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t<h4 class=\"card-title\">Edit \"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "title", []), "html", null, true);
        echo "\"</h4>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t\t\t\t<div class=\"fileinput fileinput-new text-center\"  data-provides=\"fileinput\">
\t\t\t\t\t\t\t<div class=\"fileinput-new thumbnail\" >
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-rose btn-round btn-select-1\"><i class=\"material-icons\">image</i> Select image </a>
\t\t\t\t\t\t\t\t";
        // line 30
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "media", []) != null)) {
            // line 31
            echo "\t\t\t\t\t\t\t\t\t<img  id=\"img-preview-1\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "media", []), "link", [])), "cover_thumb"), "html", null, true);
            echo "\"  width=\"100%\">
\t\t\t\t\t\t\t\t";
        } else {
            // line 33
            echo "\t\t\t\t\t\t\t\t\t<img  id=\"img-preview-1\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/image_placeholder.jpg"), "cover_thumb"), "html", null, true);
            echo "\"  width=\"100%\">
\t\t\t\t\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", []), 'widget', ["attr" => ["class" => "file-hidden input-file-1 img-selector-1", "style" => "    display: none;"]]);
        echo "
\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", []), 'errors');
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t<label class=\"control-label\">Episode title</label>
\t\t\t\t\t\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", []), 'errors');
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t<label class=\"control-label\">Episode description</label>
\t\t\t\t\t\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", []), 'widget', ["attr" => ["class" => "form-control", "rows" => 8]]);
        echo "
\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", []), 'errors');
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t<label class=\"control-label\">Episode duration</label>
\t\t\t\t\t\t\t";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "duration", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "duration", []), 'errors');
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t<label class=\"control-label\">Play Episode :  </label>
\t\t\t\t\t\t\t";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "playas", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "playas", []), 'errors');
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t<label class=\"control-label\">Download Episode :  </label>
\t\t\t\t\t\t\t";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "downloadas", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "downloadas", []), 'errors');
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "enabled", []), 'widget');
        echo "  Enabled
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"pull-right\"><a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_serie_seasons", ["id" => $this->getAttribute($this->getAttribute(($context["season"] ?? $this->getContext($context, "season")), "poster", []), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-fill btn-yellow\"><i class=\"material-icons\">arrow_back</i> Cancel</a>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", []), 'widget', ["attr" => ["class" => "btn btn-fill btn-rose"]]);
        echo "</span>
\t\t\t\t\t\t";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
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
        return "AppBundle:Episode:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 70,  202 => 69,  196 => 66,  189 => 62,  185 => 61,  178 => 57,  174 => 56,  167 => 52,  163 => 51,  156 => 47,  152 => 46,  145 => 42,  141 => 41,  134 => 37,  130 => 36,  127 => 35,  121 => 33,  115 => 31,  113 => 30,  106 => 26,  101 => 24,  87 => 13,  83 => 12,  79 => 11,  75 => 10,  71 => 9,  67 => 8,  60 => 3,  51 => 2,  29 => 1,);
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
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"tab-moivie tab-channel\">
\t\t\t\t\t\t<a href=\"{{path(\"app_episode_edit\",{\"id\":form.vars.value.id})}}\" class=\"btn btn-tab-movie-active col-md-12\"><i class=\"material-icons\">edit</i> Edit</a>
\t\t\t\t\t\t<a href=\"{{path(\"app_episode_sources\",{\"id\":form.vars.value.id})}}\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">folder</i> Sources</a>
\t\t\t\t\t\t<a href=\"{{path(\"app_episode_subtitles\",{\"id\":form.vars.value.id})}}\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">subtitles</i> Subtitles</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">remove_red_eye</i> {{form.vars.value.viewsnumber}} views</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">cloud_download</i> {{form.vars.value.downloadsnumber}} downloads</a>
\t\t\t\t\t\t<a href=\"{{path(\"app_serie_seasons\",{\"id\":season.poster.id})}}\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">arrow_back</i> back</a>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-9\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header card-header-icon\" data-background-color=\"rose\">
\t\t\t\t\t\t<i class=\"material-icons\">movie</i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t<h4 class=\"card-title\">Edit \"{{form.vars.value.title}}\"</h4>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t{{form_start(form)}}
\t\t\t\t\t\t<div class=\"fileinput fileinput-new text-center\"  data-provides=\"fileinput\">
\t\t\t\t\t\t\t<div class=\"fileinput-new thumbnail\" >
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-rose btn-round btn-select-1\"><i class=\"material-icons\">image</i> Select image </a>
\t\t\t\t\t\t\t\t{% if form.vars.value.media != null %}
\t\t\t\t\t\t\t\t\t<img  id=\"img-preview-1\" src=\"{{asset(form.vars.value.media.link)|imagine_filter('cover_thumb')}}\"  width=\"100%\">
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<img  id=\"img-preview-1\" src=\"{{asset(\"img/image_placeholder.jpg\")|imagine_filter('cover_thumb')}}\"  width=\"100%\">
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{{form_widget(form.file,{\"attr\":{\"class\":\"file-hidden input-file-1 img-selector-1\",\"style\":\"    display: none;\"}})}}
\t\t\t\t\t\t\t<span class=\"validate-input\">{{form_errors(form.file)}}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t<label class=\"control-label\">Episode title</label>
\t\t\t\t\t\t\t{{form_widget(form.title,{\"attr\":{\"class\":\"form-control\"}})}}
\t\t\t\t\t\t\t<span class=\"validate-input\">{{form_errors(form.title)}}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t<label class=\"control-label\">Episode description</label>
\t\t\t\t\t\t\t{{form_widget(form.description,{\"attr\":{\"class\":\"form-control\",\"rows\":8}})}}
\t\t\t\t\t\t\t<span class=\"validate-input\">{{form_errors(form.description)}}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t<label class=\"control-label\">Episode duration</label>
\t\t\t\t\t\t\t{{form_widget(form.duration,{\"attr\":{\"class\":\"form-control\"}})}}
\t\t\t\t\t\t\t<span class=\"validate-input\">{{form_errors(form.duration)}}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t<label class=\"control-label\">Play Episode :  </label>
\t\t\t\t\t\t\t{{form_widget(form.playas,{\"attr\":{\"class\":\"form-control\"}})}}
\t\t\t\t\t\t\t<span class=\"validate-input\">{{form_errors(form.playas)}}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t<label class=\"control-label\">Download Episode :  </label>
\t\t\t\t\t\t\t{{form_widget(form.downloadas,{\"attr\":{\"class\":\"form-control\"}})}}
\t\t\t\t\t\t\t<span class=\"validate-input\">{{form_errors(form.downloadas)}}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t{{form_widget(form.enabled)}}  Enabled
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"pull-right\"><a href=\"{{path(\"app_serie_seasons\",{\"id\":season.poster.id})}}\" class=\"btn btn-fill btn-yellow\"><i class=\"material-icons\">arrow_back</i> Cancel</a>{{form_widget(form.save,{attr:{\"class\":\"btn btn-fill btn-rose\"}})}}</span>
\t\t\t\t\t\t{{form_end(form)}}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock%}", "AppBundle:Episode:edit.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Episode/edit.html.twig");
    }
}
