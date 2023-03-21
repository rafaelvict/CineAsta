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

/* AppBundle:Episode:add.html.twig */
class __TwigTemplate_1e8d606ddc74f0230f6ebda903a27a7f16987a42c013eed644d363c24bfcca9c extends \Twig\Template
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
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Episode:add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        // line 3
        echo "\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-3\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"tab-moivie tab-channel\">
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie-active col-md-12\"><i class=\"material-icons\">add</i> Add</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie btn-disabled col-md-12\"><i class=\"material-icons\">folder</i> Sources</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie btn-disabled col-md-12\"><i class=\"material-icons\">subtitles</i> Subtitles</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie btn-disabled col-md-12\"><i class=\"material-icons\">remove_red_eye</i> 0 views</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie btn-disabled col-md-12\"><i class=\"material-icons\">cloud_download</i> 0 downloads</a>
\t\t\t\t\t\t<a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_serie_seasons", ["id" => $this->getAttribute($this->getAttribute(($context["season"] ?? null), "poster", []), "id", [])]), "html", null, true);
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
\t\t\t\t\t\t<h4 class=\"card-title\">New \"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["season"] ?? null), "poster", []), "title", []), "html", null, true);
        echo "\" Episode in \"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["season"] ?? null), "title", []), "html", null, true);
        echo "\"</h4>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
\t\t\t\t\t\t<div class=\"fileinput fileinput-new text-center\"  data-provides=\"fileinput\">
\t\t\t\t\t\t\t<div class=\"fileinput-new thumbnail\" >
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-rose btn-round btn-select-1\"><i class=\"material-icons\">image</i> Select image </a>
\t\t\t\t\t\t\t\t<img  id=\"img-preview-1\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/image_placeholder.jpg"), "cover_thumb"), "html", null, true);
        echo "\"  width=\"100%\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "file", []), 'widget', ["attr" => ["class" => "file-hidden input-file-1 img-selector-1", "style" => "    display: none;"]]);
        echo "
\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "file", []), 'errors');
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\" >
\t\t\t\t\t\t\t<label class=\"control-label\">Episode title</label>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<input type=\"hidden\" id=\"season_id\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["season"] ?? null), "title", []), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<input type=\"hidden\" id=\"serie_name\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["season"] ?? null), "poster", []), "title", []), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"image_url\" id=\"episode_image\" >
\t\t\t\t\t\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "title", []), 'widget', ["attr" => ["class" => "form-control search-input"]]);
        echo " 
\t\t\t\t\t\t\t<a href=\"#\" id=\"search_episodes\" class=\"btn btn-sm search-btn\"><i class=\"material-icons\" style=\"font-size: 30px;\">list</i></a>
\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "title", []), 'errors');
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div id=\"div1\" style=\"display:none\">
\t\t\t\t\t\t\t<div id=\"result_search\">

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"pull-right\" style=\" margin: 7px; \"><a id=\"close_search\" href=\"#\" class=\"btn btn-fill btn-yellow\" style=\"    margin: 0px;\"> Cancel</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t<label class=\"control-label\">Episode description</label>
\t\t\t\t\t\t\t";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", []), 'widget', ["attr" => ["class" => "form-control", "rows" => 8]]);
        echo "
\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", []), 'errors');
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t<label class=\"control-label\">Episode duration</label>
\t\t\t\t\t\t\t";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "duration", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "duration", []), 'errors');
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t<label class=\"control-label\">Play Episode :  </label>
\t\t\t\t\t\t\t";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "playas", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "playas", []), 'errors');
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t<label class=\"control-label\">Download Episode :  </label>
\t\t\t\t\t\t\t";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "downloadas", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "downloadas", []), 'errors');
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "enabled", []), 'widget');
        echo "  Enabled
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t<label class=\"panel-title\">Episode Source</label>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Source Type</label>
\t\t\t\t\t\t\t\t";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sourcetype", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sourcetype", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\" ";
        // line 83
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "sourcetype", []), "vars", []), "value", []) == 5)) {
            echo " style=\"display:none\" ";
        }
        echo ">
\t\t\t\t\t\t\t<label class=\"control-label\">Source Url</label>
\t\t\t\t\t\t\t";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sourceurl", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sourceurl", []), 'errors');
        echo "</span>
\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\" ";
        // line 89
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "sourcetype", []), "vars", []), "value", []) != 5)) {
            echo " style=\"display:none\" ";
        }
        echo ">
\t\t\t\t\t\t<label class=\"control-label\">Source File</label>
\t\t\t\t\t\t";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sourcefile", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"validate-input\">";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sourcefile", []), 'errors');
        echo "</span>
\t\t\t\t</div>
\t\t\t\t<span class=\"pull-right\"><a href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_serie_seasons", ["id" => $this->getAttribute($this->getAttribute(($context["season"] ?? null), "poster", []), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-fill btn-yellow\"><i class=\"material-icons\">arrow_back</i> Cancel</a>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "save", []), 'widget', ["attr" => ["class" => "btn btn-fill btn-rose"]]);
        echo "</span>
\t\t\t\t";
        // line 96
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Episode:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 96,  223 => 95,  218 => 93,  213 => 91,  206 => 89,  202 => 88,  196 => 85,  189 => 83,  185 => 82,  180 => 80,  170 => 73,  163 => 69,  159 => 68,  152 => 64,  148 => 63,  141 => 59,  137 => 58,  130 => 54,  126 => 53,  113 => 43,  108 => 41,  103 => 39,  99 => 38,  91 => 33,  87 => 32,  82 => 30,  75 => 26,  68 => 24,  54 => 13,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Episode:add.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Episode/add.html.twig");
    }
}
