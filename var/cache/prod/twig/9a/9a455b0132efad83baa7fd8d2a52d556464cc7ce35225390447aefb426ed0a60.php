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
class __TwigTemplate_175650441f27873ea5a98e88052396057967218b3169d8af5c743c59421bb192 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Serie:trailer.html.twig", 1);
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
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">remove_red_eye</i> ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["serie"] ?? null), "viewscountnumber", []), "html", null, true);
        echo " Views</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie pull-right\"><i class=\"material-icons\">share</i> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["serie"] ?? null), "sharesnumber", []), "html", null, true);
        echo " Shares</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie pull-right\"><i class=\"material-icons\">cloud_download</i> ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["serie"] ?? null), "downloadscountnumber", []), "html", null, true);
        echo " Downloads</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-header \" data-background-color=\"green\">
\t\t\t\t\t\t<i class=\"material-icons\">tv</i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-content trailer-body\">
\t\t\t\t\t\t<h4 class=\"title\">Trailer : ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["serie"] ?? null), "title", []), "html", null, true);
        echo " </b></h4>
\t\t\t\t\t</div>
                    <div class=\"tab-moivie tab-series\"><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_serie_edit", ["id" => $this->getAttribute(($context["serie"] ?? null), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">edit</i> Edit</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_serie_cast", ["id" => $this->getAttribute(($context["serie"] ?? null), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">recent_actors</i> Cast</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_serie_trailer", ["id" => $this->getAttribute(($context["serie"] ?? null), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie-active\"><i class=\"material-icons\">movie_filter</i> Trailer</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_serie_seasons", ["id" => $this->getAttribute(($context["serie"] ?? null), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">dynamic_feed</i> SEASONS</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_serie_comments", ["id" => $this->getAttribute(($context["serie"] ?? null), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">comment</i> Comments</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_serie_ratings", ["id" => $this->getAttribute(($context["serie"] ?? null), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">star_half</i> Ratings</a>
                    </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t";
        // line 23
        if (($this->getAttribute(($context["serie"] ?? null), "trailer", []) != null)) {
            // line 24
            echo "\t\t\t\t\t<div class=\"card card-stats\" style=\"margin: 15px 0;\">
\t\t\t\t\t\t<div class=\"card-header \" data-background-color=\"green\">
\t\t\t\t\t\t\t<i class=\"material-icons\">movie_filter</i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card-content trailer-body\">
\t\t\t\t\t\t\t<h4 class=\"title\">";
            // line 29
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["serie"] ?? null), "trailer", []), "type", [])), "html", null, true);
            echo "  ";
            if ((($this->getAttribute($this->getAttribute(($context["serie"] ?? null), "trailer", []), "type", []) == "file") && ($this->getAttribute($this->getAttribute(($context["serie"] ?? null), "trailer", []), "media", []) != null))) {
                echo "(";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["serie"] ?? null), "trailer", []), "media", []), "extension", [])), "html", null, true);
                echo ")";
            }
            echo " | <b>Trailer : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["serie"] ?? null), "trailer", []), "url", []), "html", null, true);
            echo " ";
            if ((($this->getAttribute($this->getAttribute(($context["serie"] ?? null), "trailer", []), "type", []) == "file") && ($this->getAttribute($this->getAttribute(($context["serie"] ?? null), "trailer", []), "media", []) != null))) {
                echo " ";
                echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "scheme", []) . "://") . $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "httpHost", [])) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["serie"] ?? null), "trailer", []), "media", []), "link", []))), "html", null, true);
            }
            echo "</b></h4>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"trailer-footer\">
\t\t\t\t\t\t\t<a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_source_trailer", ["id" => $this->getAttribute($this->getAttribute(($context["serie"] ?? null), "trailer", []), "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-success btn-xs pull-right\" ><i class=\"material-icons\">edit</i></a>
\t\t\t\t\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_source_delete", ["id" => $this->getAttribute($this->getAttribute(($context["serie"] ?? null), "trailer", []), "id", [])]), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute(($context["serie"] ?? null), "title", []), "html", null, true);
            echo " Trailer</h4>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t";
            // line 44
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["trailer_form"] ?? null), 'form_start');
            echo "
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Source Type</label>
\t\t\t\t\t\t\t\t";
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["trailer_form"] ?? null), "type", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["trailer_form"] ?? null), "type", []), 'errors');
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Source Url</label>
\t\t\t\t\t\t\t\t";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["trailer_form"] ?? null), "url", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["trailer_form"] ?? null), "url", []), 'errors');
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\" style=\"display:none\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Source File</label>
\t\t\t\t\t\t\t\t";
            // line 57
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["trailer_form"] ?? null), "file", []), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
            // line 58
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["trailer_form"] ?? null), "file", []), 'errors');
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span class=\"pull-right\">";
            // line 60
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["trailer_form"] ?? null), "save", []), 'widget', ["attr" => ["class" => "btn btn-fill btn-rose"]]);
            echo "</span>
\t\t\t\t\t\t\t";
            // line 61
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["trailer_form"] ?? null), 'form_end');
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
        return array (  188 => 65,  181 => 61,  177 => 60,  172 => 58,  168 => 57,  161 => 53,  157 => 52,  150 => 48,  146 => 47,  140 => 44,  135 => 42,  128 => 37,  121 => 33,  117 => 32,  98 => 29,  91 => 24,  89 => 23,  71 => 18,  66 => 16,  57 => 10,  53 => 9,  49 => 8,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Serie:trailer.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Serie/trailer.html.twig");
    }
}
