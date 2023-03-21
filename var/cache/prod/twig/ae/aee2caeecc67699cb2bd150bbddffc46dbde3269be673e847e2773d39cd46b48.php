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

/* AppBundle:Movie:edit.html.twig */
class __TwigTemplate_1b5f05959cba9a9e5c17622247c16fbd6e28916a5391d68de549a81d684df016 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Movie:edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        // line 3
        echo "\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"card card-stats card-initial\" style=\"margin: 15px 0;\">
\t\t\t\t\t<div class=\"card-content views-body  pull-right\">
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">remove_red_eye</i> ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["movie"] ?? null), "viewsnumber", []), "html", null, true);
        echo " Views</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie pull-right\"><i class=\"material-icons\">share</i> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["movie"] ?? null), "sharesnumber", []), "html", null, true);
        echo " Shares</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie pull-right\"><i class=\"material-icons\">cloud_download</i> ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["movie"] ?? null), "downloadsnumber", []), "html", null, true);
        echo " Downloads</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-header \" data-background-color=\"green\">
\t\t\t\t\t\t<i class=\"material-icons\">movie_filter</i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-content trailer-body\">
\t\t\t\t\t\t<h4 class=\"title\">Edit ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["movie"] ?? null), "title", []), "html", null, true);
        echo " </b></h4>
\t\t\t\t\t</div>
                  <div class=\"tab-moivie\">
                    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_movie_edit", ["id" => $this->getAttribute(($context["movie"] ?? null), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie-active\"><i class=\"material-icons\">edit</i> Edit</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_movie_sources", ["id" => $this->getAttribute(($context["movie"] ?? null), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">folder</i> Sources</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_movie_cast", ["id" => $this->getAttribute(($context["movie"] ?? null), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">recent_actors</i> Cast</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_movie_trailer", ["id" => $this->getAttribute(($context["movie"] ?? null), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">movie_filter</i> Trailer</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_movie_subtitles", ["id" => $this->getAttribute(($context["movie"] ?? null), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">subtitles</i> Subtitles</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_movie_comments", ["id" => $this->getAttribute(($context["movie"] ?? null), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">comment</i> Comments</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_movie_ratings", ["id" => $this->getAttribute(($context["movie"] ?? null), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">star_half</i> Ratings</a>
                  </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header card-header-icon\" data-background-color=\"rose\">
\t\t\t\t\t\t<i class=\"material-icons\">movie</i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t<h4 class=\"card-title\">Edit : ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "value", []), "title", []), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"fileinput fileinput-new text-center\" style=\"width:100%\"  data-provides=\"fileinput\">
\t\t\t\t\t\t\t\t<div class=\"fileinput-new thumbnail\" style=\"width:100%\" >
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-rose btn-round btn-select\"><i class=\"material-icons\">image</i> Select image </a>
\t\t\t\t\t\t\t\t\t<img  id=\"img-preview\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "value", []), "poster", []), "link", [])), "poster_thumb"), "html", null, true);
        echo "\"  width=\"100%\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fileposter", []), 'widget', ["attr" => ["class" => "file-hidden input-file img-selector", "style" => "    display: none;"]]);
        echo "
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fileposter", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t<div class=\"fileinput fileinput-new text-center\"  data-provides=\"fileinput\">
\t\t\t\t\t\t\t\t<div class=\"fileinput-new thumbnail\" >
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-rose btn-round btn-select-1\"><i class=\"material-icons\">image</i> Select image </a>
\t\t\t\t\t\t\t\t\t";
        // line 46
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "value", []), "cover", []) != null)) {
            // line 47
            echo "\t\t\t\t\t\t\t\t\t\t<img  id=\"img-preview-1\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "value", []), "cover", []), "link", [])), "cover_thumb"), "html", null, true);
            echo "\"  width=\"100%\">
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 49
            echo "\t\t\t\t\t\t\t\t\t\t<img  id=\"img-preview-1\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/image_placeholder.jpg"), "cover_thumb"), "html", null, true);
            echo "\"  width=\"100%\">
\t\t\t\t\t\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "filecover", []), 'widget', ["attr" => ["class" => "file-hidden input-file-1 img-selector-1", "style" => "    display: none;"]]);
        echo "
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "filecover", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Movie title</label>
\t\t\t\t\t\t\t\t";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "title", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "title", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Movie description</label>
\t\t\t\t\t\t\t\t\t\t";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "label", []), 'widget', ["attr" => ["class" => "form-control", "rows" => 8]]);
        echo "
\t\t\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "label", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Sub-label</label>
\t\t\t\t\t\t\t\t\t\t";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sublabel", []), 'widget', ["attr" => ["class" => "form-control", "rows" => 8]]);
        echo "
\t\t\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sublabel", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Movie description</label>
\t\t\t\t\t\t\t\t";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", []), 'widget', ["attr" => ["class" => "form-control", "rows" => 8]]);
        echo "
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Movie year</label>
\t\t\t\t\t\t\t\t";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Movie classification</label>
\t\t\t\t\t\t\t\t";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "classification", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "classification", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Movie IMdb Rating</label>
\t\t\t\t\t\t\t\t";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "imdb", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "imdb", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Movie duration</label>
\t\t\t\t\t\t\t\t";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "duration", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "duration", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Play Movie :  </label>
\t\t\t\t\t\t\t\t";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "playas", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "playas", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Download Movie :  </label>
\t\t\t\t\t\t\t\t";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "downloadas", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "downloadas", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating \">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Movie tags (Ex:anim,art,hero)</label>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "tags", []), 'widget', ["attr" => ["class" => "input-tags"]]);
        echo "
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "tags", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "enabled", []), 'widget');
        echo "  Enabled
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "comment", []), 'widget');
        echo "  Enabled Comment
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "genres", []), 'label', ["label_attr" => ["style" => "font-size:16px"]]);
        echo " :
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "genres", []));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 132
            echo "\t\t\t\t\t\t\t\t\t\t<label  style=\"background: #000;border-radius: 20px;padding: 5px;text-align: center;margin: 10px;color: white;font-weight: bold;padding-left: 20px;padding-right: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 133
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "vars", []), "label", []), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\$('.input-tags').selectize({
\t\t\t\t\t\t\t\tpersist: false,
\t\t\t\t\t\t\t\tcreateOnBlur: true,
\t\t\t\t\t\t\t\tcreate: true
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<span class=\"pull-right\"><a href=\"";
        // line 148
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_movie_index");
        echo "\" class=\"btn btn-fill btn-yellow\"><i class=\"material-icons\">arrow_back</i> Cancel</a>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "save", []), 'widget', ["attr" => ["class" => "btn btn-fill btn-rose"]]);
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 150
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
        return "AppBundle:Movie:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 150,  338 => 148,  324 => 136,  313 => 133,  310 => 132,  306 => 131,  300 => 128,  293 => 124,  285 => 119,  278 => 115,  274 => 114,  266 => 109,  262 => 108,  255 => 104,  251 => 103,  244 => 99,  240 => 98,  233 => 94,  229 => 93,  222 => 89,  218 => 88,  211 => 84,  207 => 83,  200 => 79,  196 => 78,  187 => 72,  183 => 71,  174 => 65,  170 => 64,  161 => 58,  157 => 57,  150 => 53,  146 => 52,  143 => 51,  137 => 49,  131 => 47,  129 => 46,  119 => 39,  115 => 38,  110 => 36,  102 => 31,  97 => 29,  72 => 19,  66 => 16,  57 => 10,  53 => 9,  49 => 8,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Movie:edit.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Movie/edit.html.twig");
    }
}
