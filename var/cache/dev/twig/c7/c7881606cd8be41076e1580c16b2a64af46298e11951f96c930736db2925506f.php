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

/* AppBundle:Movie:add.html.twig */
class __TwigTemplate_b27dd31592428882af4b86808eecfab0de5120986e2cd17a373f46601946be53 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Movie:add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Movie:add.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Movie:add.html.twig", 1);
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
\t\t\t\t<div class=\"card card-stats card-initial\" style=\"margin: 15px 0;\">
\t\t\t\t\t<div class=\"card-content views-body  pull-right\">
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">remove_red_eye</i> 0 Views</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie pull-right\"><i class=\"material-icons\">share</i> 0 Shares</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie pull-right\"><i class=\"material-icons\">cloud_download</i> 0 Downloads</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-header \" data-background-color=\"green\">
\t\t\t\t\t\t<i class=\"material-icons\">movie</i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-content trailer-body\">
\t\t\t\t\t\t<h4 class=\"title\">New Movie </h4>
\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-moivie\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie-active\"><i class=\"material-icons\">add</i> Add</a><a href=\"#\" class=\"btn btn-tab-movie btn-disabled\"><i class=\"material-icons\">folder</i> Sources</a><a href=\"#\" class=\"btn btn-tab-movie btn-disabled\"><i class=\"material-icons\">recent_actors</i> Cast</a><a href=\"#\" class=\"btn btn-tab-movie btn-disabled\"><i class=\"material-icons\">movie_filter</i> Trailer</a><a href=\"#\" class=\"btn btn-tab-movie btn-disabled\"><i class=\"material-icons\">subtitles</i> Subtitles</a><a href=\"#\" class=\"btn btn-tab-movie btn-disabled\"><i class=\"material-icons\">comment</i> Comments</a><a href=\"#\" class=\"btn btn-tab-movie btn-disabled\"><i class=\"material-icons\">star_half</i> Ratings</a>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header card-header-icon\" data-background-color=\"rose\">
\t\t\t\t\t\t<i class=\"material-icons\">movie</i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t<h4 class=\"card-title\">New Movie </h4>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"fileinput fileinput-new text-center\" style=\"width:100%\"  data-provides=\"fileinput\">
\t\t\t\t\t\t\t\t<div class=\"fileinput-new thumbnail\" style=\"width:100%\" >
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-rose btn-round btn-select\"><i class=\"material-icons\">image</i> Select image </a>
\t\t\t\t\t\t\t\t\t<img  id=\"img-preview\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/image_placeholder.jpg"), "poster_thumb"), "html", null, true);
        echo "\"  width=\"100%\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fileposter", []), 'widget', ["attr" => ["class" => "file-hidden input-file img-selector", "style" => "    display: none;"]]);
        echo "
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "fileposter", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"hidden\" name=\"image_url\" id=\"movie_image\" >
\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t<div class=\"fileinput fileinput-new text-center\"  data-provides=\"fileinput\">
\t\t\t\t\t\t\t\t<div class=\"fileinput-new thumbnail\" >
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-rose btn-round btn-select-1\"><i class=\"material-icons\">image</i> Select image </a>
\t\t\t\t\t\t\t\t\t<img  id=\"img-preview-1\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/image_placeholder.jpg"), "cover_thumb"), "html", null, true);
        echo "\"  width=\"100%\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "filecover", []), 'widget', ["attr" => ["class" => "file-hidden input-file-1 img-selector-1", "style" => "    display: none;"]]);
        echo "
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "filecover", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\" >
\t\t\t\t\t\t\t\t<label class=\"control-label\">Movie title</label>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", []), 'widget', ["attr" => ["class" => "form-control search-input"]]);
        echo "
\t\t\t\t\t\t\t\t<a href=\"#\" id=\"search\" class=\"btn btn-sm search-btn\"><i class=\"material-icons\" style=\"font-size: 30px;\">search</i></a>
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"div1\" style=\"display:none\">
\t\t\t\t\t\t\t\t<div id=\"result_search\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"pull-right\" style=\" margin: 7px; \"><a id=\"close_search\" href=\"#\" class=\"btn btn-fill btn-yellow\" style=\"    margin: 0px;\"> Cancel</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Movie description</label>
\t\t\t\t\t\t\t\t\t\t";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "label", []), 'widget', ["attr" => ["class" => "form-control", "rows" => 8]]);
        echo "
\t\t\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "label", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Sub-label</label>
\t\t\t\t\t\t\t\t\t\t";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sublabel", []), 'widget', ["attr" => ["class" => "form-control", "rows" => 8]]);
        echo "
\t\t\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sublabel", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Movie description</label>
\t\t\t\t\t\t\t\t";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", []), 'widget', ["attr" => ["class" => "form-control", "rows" => 8]]);
        echo "
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Movie year</label>
\t\t\t\t\t\t\t\t";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Movie classification</label>
\t\t\t\t\t\t\t\t";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "classification", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "classification", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Movie IMdb Rating</label>
\t\t\t\t\t\t\t\t";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "imdb", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "imdb", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Movie duration</label>
\t\t\t\t\t\t\t\t";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "duration", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "duration", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Play Movie :  </label>
\t\t\t\t\t\t\t\t";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "playas", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "playas", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Download Movie :  </label>
\t\t\t\t\t\t\t\t";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "downloadas", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "downloadas", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating \">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Movie tags (Ex:anim,art,hero)</label>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tags", []), 'widget', ["attr" => ["class" => "input-tags"]]);
        echo "
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tags", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "enabled", []), 'widget');
        echo "  Enabled
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "comment", []), 'widget');
        echo "  Enabled Comment
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "genres", []), 'label', ["label_attr" => ["style" => "font-size:16px"]]);
        echo " :
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "genres", []));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 137
            echo "\t\t\t\t\t\t\t\t\t\t<label  style=\"background: #000;border-radius: 20px;padding: 5px;text-align: center;margin: 10px;color: white;font-weight: bold;padding-left: 20px;padding-right: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 138
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
            echo " <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "vars", []), "label", []), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<div class=\"panel-body\">

\t\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\"  >
\t\t\t\t\t\t\t\t<label class=\"control-label\">Trailer Youtube Url</label>
\t\t\t\t\t\t\t\t";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "trailerurl", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "trailerurl", []), 'errors');
        echo "</span>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<label class=\"panel-title\">Movie Source</label>
\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t<label class=\"control-label\">Source Type</label>
\t\t\t\t\t\t\t";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sourcetype", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sourcetype", []), 'errors');
        echo "</span>
\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\" ";
        // line 160
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sourcetype", []), "vars", []), "value", []) == 5)) {
            echo " style=\"display:none\" ";
        }
        echo ">
\t\t\t\t\t\t<label class=\"control-label\">Source Url</label>
\t\t\t\t\t\t";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sourceurl", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"validate-input\">";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sourceurl", []), 'errors');
        echo "</span>
\t\t\t\t\t<div class=\"form-group label-floating is-empty\" ";
        // line 166
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sourcetype", []), "vars", []), "value", []) != 5)) {
            echo " style=\"display:none\" ";
        }
        echo ">
\t\t\t\t\t<label class=\"control-label\">Source File</label>
\t\t\t\t\t";
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sourcefile", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t</div>
\t\t\t\t<span class=\"validate-input\">";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sourcefile", []), 'errors');
        echo "</span>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-12\">
\t\t\t<hr>
\t\t\t<span class=\"pull-right\"><a href=\"";
        // line 175
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_movie_index");
        echo "\" class=\"btn btn-fill btn-yellow\"><i class=\"material-icons\">arrow_back</i> Cancel</a>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", []), 'widget', ["attr" => ["class" => "btn btn-fill btn-rose"]]);
        echo "</span>
\t\t</div>
\t\t";
        // line 177
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
\t</div>
</div>
</div>
</div>
</div>
<script>
\t\$('.input-tags').selectize({
\t\tpersist: false,
\t\tcreateOnBlur: true,
\t\tcreate: true
\t});
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Movie:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 177,  379 => 175,  371 => 170,  366 => 168,  359 => 166,  355 => 165,  349 => 162,  342 => 160,  338 => 159,  333 => 157,  323 => 150,  318 => 148,  309 => 141,  298 => 138,  295 => 137,  291 => 136,  285 => 133,  278 => 129,  270 => 124,  263 => 120,  259 => 119,  251 => 114,  247 => 113,  240 => 109,  236 => 108,  229 => 104,  225 => 103,  218 => 99,  214 => 98,  207 => 94,  203 => 93,  196 => 89,  192 => 88,  185 => 84,  181 => 83,  172 => 77,  168 => 76,  158 => 69,  154 => 68,  140 => 57,  135 => 55,  127 => 50,  123 => 49,  118 => 47,  107 => 39,  103 => 38,  98 => 36,  90 => 31,  60 => 3,  51 => 2,  29 => 1,);
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
\t\t\t\t<div class=\"card card-stats card-initial\" style=\"margin: 15px 0;\">
\t\t\t\t\t<div class=\"card-content views-body  pull-right\">
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">remove_red_eye</i> 0 Views</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie pull-right\"><i class=\"material-icons\">share</i> 0 Shares</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie pull-right\"><i class=\"material-icons\">cloud_download</i> 0 Downloads</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-header \" data-background-color=\"green\">
\t\t\t\t\t\t<i class=\"material-icons\">movie</i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-content trailer-body\">
\t\t\t\t\t\t<h4 class=\"title\">New Movie </h4>
\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-moivie\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie-active\"><i class=\"material-icons\">add</i> Add</a><a href=\"#\" class=\"btn btn-tab-movie btn-disabled\"><i class=\"material-icons\">folder</i> Sources</a><a href=\"#\" class=\"btn btn-tab-movie btn-disabled\"><i class=\"material-icons\">recent_actors</i> Cast</a><a href=\"#\" class=\"btn btn-tab-movie btn-disabled\"><i class=\"material-icons\">movie_filter</i> Trailer</a><a href=\"#\" class=\"btn btn-tab-movie btn-disabled\"><i class=\"material-icons\">subtitles</i> Subtitles</a><a href=\"#\" class=\"btn btn-tab-movie btn-disabled\"><i class=\"material-icons\">comment</i> Comments</a><a href=\"#\" class=\"btn btn-tab-movie btn-disabled\"><i class=\"material-icons\">star_half</i> Ratings</a>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header card-header-icon\" data-background-color=\"rose\">
\t\t\t\t\t\t<i class=\"material-icons\">movie</i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t<h4 class=\"card-title\">New Movie </h4>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t{{form_start(form)}}
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"fileinput fileinput-new text-center\" style=\"width:100%\"  data-provides=\"fileinput\">
\t\t\t\t\t\t\t\t<div class=\"fileinput-new thumbnail\" style=\"width:100%\" >
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-rose btn-round btn-select\"><i class=\"material-icons\">image</i> Select image </a>
\t\t\t\t\t\t\t\t\t<img  id=\"img-preview\" src=\"{{asset(\"img/image_placeholder.jpg\")|imagine_filter('poster_thumb')}}\"  width=\"100%\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{{form_widget(form.fileposter,{\"attr\":{\"class\":\"file-hidden input-file img-selector\",\"style\":\"    display: none;\"}})}}
\t\t\t\t\t\t\t\t<span class=\"validate-input\">{{form_errors(form.fileposter)}}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"hidden\" name=\"image_url\" id=\"movie_image\" >
\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t<div class=\"fileinput fileinput-new text-center\"  data-provides=\"fileinput\">
\t\t\t\t\t\t\t\t<div class=\"fileinput-new thumbnail\" >
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-rose btn-round btn-select-1\"><i class=\"material-icons\">image</i> Select image </a>
\t\t\t\t\t\t\t\t\t<img  id=\"img-preview-1\" src=\"{{asset(\"img/image_placeholder.jpg\")|imagine_filter('cover_thumb')}}\"  width=\"100%\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{{form_widget(form.filecover,{\"attr\":{\"class\":\"file-hidden input-file-1 img-selector-1\",\"style\":\"    display: none;\"}})}}
\t\t\t\t\t\t\t\t<span class=\"validate-input\">{{form_errors(form.filecover)}}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\" >
\t\t\t\t\t\t\t\t<label class=\"control-label\">Movie title</label>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t{{form_widget(form.title,{\"attr\":{\"class\":\"form-control search-input\"}})}}
\t\t\t\t\t\t\t\t<a href=\"#\" id=\"search\" class=\"btn btn-sm search-btn\"><i class=\"material-icons\" style=\"font-size: 30px;\">search</i></a>
\t\t\t\t\t\t\t\t<span class=\"validate-input\">{{form_errors(form.title)}}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"div1\" style=\"display:none\">
\t\t\t\t\t\t\t\t<div id=\"result_search\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"pull-right\" style=\" margin: 7px; \"><a id=\"close_search\" href=\"#\" class=\"btn btn-fill btn-yellow\" style=\"    margin: 0px;\"> Cancel</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Movie description</label>
\t\t\t\t\t\t\t\t\t\t{{form_widget(form.label,{\"attr\":{\"class\":\"form-control\",\"rows\":8}})}}
\t\t\t\t\t\t\t\t\t\t<span class=\"validate-input\">{{form_errors(form.label)}}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Sub-label</label>
\t\t\t\t\t\t\t\t\t\t{{form_widget(form.sublabel,{\"attr\":{\"class\":\"form-control\",\"rows\":8}})}}
\t\t\t\t\t\t\t\t\t\t<span class=\"validate-input\">{{form_errors(form.sublabel)}}</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Movie description</label>
\t\t\t\t\t\t\t\t{{form_widget(form.description,{\"attr\":{\"class\":\"form-control\",\"rows\":8}})}}
\t\t\t\t\t\t\t\t<span class=\"validate-input\">{{form_errors(form.description)}}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Movie year</label>
\t\t\t\t\t\t\t\t{{form_widget(form.year,{\"attr\":{\"class\":\"form-control\"}})}}
\t\t\t\t\t\t\t\t<span class=\"validate-input\">{{form_errors(form.year)}}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Movie classification</label>
\t\t\t\t\t\t\t\t{{form_widget(form.classification,{\"attr\":{\"class\":\"form-control\"}})}}
\t\t\t\t\t\t\t\t<span class=\"validate-input\">{{form_errors(form.classification)}}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Movie IMdb Rating</label>
\t\t\t\t\t\t\t\t{{form_widget(form.imdb,{\"attr\":{\"class\":\"form-control\"}})}}
\t\t\t\t\t\t\t\t<span class=\"validate-input\">{{form_errors(form.imdb)}}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Movie duration</label>
\t\t\t\t\t\t\t\t{{form_widget(form.duration,{\"attr\":{\"class\":\"form-control\"}})}}
\t\t\t\t\t\t\t\t<span class=\"validate-input\">{{form_errors(form.duration)}}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Play Movie :  </label>
\t\t\t\t\t\t\t\t{{form_widget(form.playas,{\"attr\":{\"class\":\"form-control\"}})}}
\t\t\t\t\t\t\t\t<span class=\"validate-input\">{{form_errors(form.playas)}}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Download Movie :  </label>
\t\t\t\t\t\t\t\t{{form_widget(form.downloadas,{\"attr\":{\"class\":\"form-control\"}})}}
\t\t\t\t\t\t\t\t<span class=\"validate-input\">{{form_errors(form.downloadas)}}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating \">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Movie tags (Ex:anim,art,hero)</label>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t{{form_widget(form.tags,{\"attr\":{\"class\":\"input-tags\"}})}}
\t\t\t\t\t\t\t\t<span class=\"validate-input\">{{form_errors(form.tags)}}</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t{{form_widget(form.enabled)}}  Enabled
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t{{form_widget(form.comment)}}  Enabled Comment
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t{{form_label(form.genres,null,{label_attr:{\"style\":\"font-size:16px\"}})}} :
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t{% for field in form.genres %}
\t\t\t\t\t\t\t\t\t\t<label  style=\"background: #000;border-radius: 20px;padding: 5px;text-align: center;margin: 10px;color: white;font-weight: bold;padding-left: 20px;padding-right: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(field) }} <span>{{ field.vars.label }}</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<div class=\"panel-body\">

\t\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\"  >
\t\t\t\t\t\t\t\t<label class=\"control-label\">Trailer Youtube Url</label>
\t\t\t\t\t\t\t\t{{form_widget(form.trailerurl,{\"attr\":{\"class\":\"form-control\"}})}}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"validate-input\">{{form_errors(form.trailerurl)}}</span>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t<label class=\"panel-title\">Movie Source</label>
\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t<label class=\"control-label\">Source Type</label>
\t\t\t\t\t\t\t{{form_widget(form.sourcetype,{\"attr\":{\"class\":\"form-control\"}})}}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"validate-input\">{{form_errors(form.sourcetype)}}</span>
\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\" {% if form.sourcetype.vars.value == 5 %} style=\"display:none\" {% endif %}>
\t\t\t\t\t\t<label class=\"control-label\">Source Url</label>
\t\t\t\t\t\t{{form_widget(form.sourceurl,{\"attr\":{\"class\":\"form-control\"}})}}
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"validate-input\">{{form_errors(form.sourceurl)}}</span>
\t\t\t\t\t<div class=\"form-group label-floating is-empty\" {% if form.sourcetype.vars.value != 5 %} style=\"display:none\" {% endif %}>
\t\t\t\t\t<label class=\"control-label\">Source File</label>
\t\t\t\t\t{{form_widget(form.sourcefile,{\"attr\":{\"class\":\"form-control\"}})}}
\t\t\t\t</div>
\t\t\t\t<span class=\"validate-input\">{{form_errors(form.sourcefile)}}</span>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-12\">
\t\t\t<hr>
\t\t\t<span class=\"pull-right\"><a href=\"{{path(\"app_movie_index\")}}\" class=\"btn btn-fill btn-yellow\"><i class=\"material-icons\">arrow_back</i> Cancel</a>{{form_widget(form.save,{attr:{\"class\":\"btn btn-fill btn-rose\"}})}}</span>
\t\t</div>
\t\t{{form_end(form)}}
\t</div>
</div>
</div>
</div>
</div>
<script>
\t\$('.input-tags').selectize({
\t\tpersist: false,
\t\tcreateOnBlur: true,
\t\tcreate: true
\t});
</script>
{% endblock%}", "AppBundle:Movie:add.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Movie/add.html.twig");
    }
}
