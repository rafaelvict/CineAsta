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

/* AppBundle:Serie:add.html.twig */
class __TwigTemplate_e09b126458728c9c6b5e8f0dc6fe9ccc249e8f1396ad0d0088a701af4ef853a3 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Serie:add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        // line 3
        echo "\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"card card-stats card card-initial\" >
\t\t\t\t\t<div class=\"card-content views-body  pull-right\">
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">remove_red_eye</i> 0 Views</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie pull-right\"><i class=\"material-icons\">share</i> 0 Shares</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie pull-right\"><i class=\"material-icons\">cloud_download</i> 0 Downloads</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-header \" data-background-color=\"green\">
\t\t\t\t\t\t<i class=\"material-icons\">tv</i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-content trailer-body\">
\t\t\t\t\t\t<h4 class=\"title\">New TV Show</b></h4>
\t\t\t\t\t</div>
                    <div class=\"tab-moivie tab-series\"><a href=\"#\" class=\"btn btn-tab-movie-active\"><i class=\"material-icons\">add</i> Add</a><a href=\"#\" class=\"btn btn-tab-movie btn-disabled\"><i class=\"material-icons\">recent_actors</i> Cast</a><a href=\"#\" class=\"btn btn-tab-movie btn-disabled\"><i class=\"material-icons\">movie_filter</i> Trailer</a><a href=\"#\" class=\"btn btn-tab-movie btn-disabled\"><i class=\"material-icons\">dynamic_feed</i> SEASONS</a><a href=\"\" class=\"btn btn-tab-movie btn-disabled\"><i class=\"material-icons\">comment</i> Comments</a><a href=\"#\" class=\"btn btn-tab-movie btn-disabled\"><i class=\"material-icons\">star_half</i> Ratings</a>
                    </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header card-header-icon\" data-background-color=\"rose\">
\t\t\t\t\t\t<i class=\"material-icons\">tv</i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t<h4 class=\"card-title\">New TV Show </h4>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<div class=\"fileinput fileinput-new text-center\" style=\"width:100%\"  data-provides=\"fileinput\">
\t\t\t\t\t\t\t\t<div class=\"fileinput-new thumbnail\" style=\"width:100%\" >
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-rose btn-round btn-select\"><i class=\"material-icons\">image</i> Select Poster image </a>
\t\t\t\t\t\t\t\t\t<img  id=\"img-preview\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/image_placeholder.jpg"), "poster_thumb"), "html", null, true);
        echo "\"  width=\"100%\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fileposter", []), 'widget', ["attr" => ["class" => "file-hidden input-file img-selector", "style" => "    display: none;"]]);
        echo "
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "fileposter", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"hidden\" name=\"image_url\" id=\"serie_image\" >
\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t<div class=\"fileinput fileinput-new text-center\"  data-provides=\"fileinput\">
\t\t\t\t\t\t\t\t<div class=\"fileinput-new thumbnail\" >
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-rose btn-round btn-select-1\"><i class=\"material-icons\">image</i> Select Cover image </a>
\t\t\t\t\t\t\t\t\t<img  id=\"img-preview-1\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/image_placeholder.jpg"), "cover_thumb"), "html", null, true);
        echo "\"  width=\"100%\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "filecover", []), 'widget', ["attr" => ["class" => "file-hidden input-file-1 img-selector-1", "style" => "    display: none;"]]);
        echo "
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "filecover", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\" >
\t\t\t\t\t\t\t\t<label class=\"control-label\">TV Show title</label>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "title", []), 'widget', ["attr" => ["class" => "form-control search-input"]]);
        echo " 
\t\t\t\t\t\t\t\t<a href=\"#\" id=\"search_series\" class=\"btn btn-sm search-btn\"><i class=\"material-icons\" style=\"font-size: 30px;\">search</i></a>
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "title", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Movie description</label>
\t\t\t\t\t\t\t\t\t\t";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "label", []), 'widget', ["attr" => ["class" => "form-control", "rows" => 8]]);
        echo "
\t\t\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "label", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Sub-label</label>
\t\t\t\t\t\t\t\t\t\t";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sublabel", []), 'widget', ["attr" => ["class" => "form-control", "rows" => 8]]);
        echo "
\t\t\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sublabel", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div id=\"div1\" style=\"display:none\">
\t\t\t\t\t\t\t\t<div id=\"result_search\">

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"pull-right\" style=\" margin: 7px; \"><a id=\"close_search\" href=\"#\" class=\"btn btn-fill btn-yellow\" style=\"    margin: 0px;\"> Cancel</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">TV Show description</label>
\t\t\t\t\t\t\t\t";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", []), 'widget', ["attr" => ["class" => "form-control", "rows" => 8]]);
        echo "
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">TV Show year</label>
\t\t\t\t\t\t\t\t";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">TV Show classification</label>
\t\t\t\t\t\t\t\t";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "classification", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "classification", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">TV Show IMdb Rating</label>
\t\t\t\t\t\t\t\t";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "imdb", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "imdb", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">TV Show duration</label>
\t\t\t\t\t\t\t\t";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "duration", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "duration", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating \">
\t\t\t\t\t\t\t\t<label class=\"control-label\">TV Show tags (Ex:anim,art,hero)</label>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "tags", []), 'widget', ["attr" => ["class" => "input-tags"]]);
        echo "
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "tags", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "enabled", []), 'widget');
        echo "  Enabled
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "comment", []), 'widget');
        echo "  Enabled Comment
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "genres", []), 'label', ["label_attr" => ["style" => "font-size:16px"]]);
        echo " :
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "genres", []));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 127
            echo "\t\t\t\t\t\t\t\t\t\t<label  style=\"background: #000;border-radius: 20px;padding: 5px;text-align: center;margin: 10px;color: white;font-weight: bold;padding-left: 20px;padding-right: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 128
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
        // line 131
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\$('.input-tags').selectize({
\t\t\t\t\t\t\t\tpersist: false,
\t\t\t\t\t\t\t\tcreateOnBlur: true,
\t\t\t\t\t\t\t\tcreate: true
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<label class=\"panel-title\">Tv Show  Trailer</label>

\t\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\"  >
\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Trailer Youtube Url</label>
\t\t\t\t\t\t\t\t\t";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "trailerurl", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "trailerurl", []), 'errors');
        echo "</span>


\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t<span class=\"pull-right\"><a href=\"";
        // line 156
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_serie_index");
        echo "\" class=\"btn btn-fill btn-yellow\"><i class=\"material-icons\">arrow_back</i> Cancel</a>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "save", []), 'widget', ["attr" => ["class" => "btn btn-fill btn-rose"]]);
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 158
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
        return "AppBundle:Serie:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 158,  302 => 156,  291 => 148,  286 => 146,  269 => 131,  258 => 128,  255 => 127,  251 => 126,  245 => 123,  238 => 119,  230 => 114,  223 => 110,  219 => 109,  211 => 104,  207 => 103,  200 => 99,  196 => 98,  189 => 94,  185 => 93,  178 => 89,  174 => 88,  167 => 84,  163 => 83,  148 => 71,  144 => 70,  134 => 63,  130 => 62,  121 => 56,  116 => 54,  108 => 49,  104 => 48,  99 => 46,  88 => 38,  84 => 37,  79 => 35,  71 => 30,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Serie:add.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Serie/add.html.twig");
    }
}
