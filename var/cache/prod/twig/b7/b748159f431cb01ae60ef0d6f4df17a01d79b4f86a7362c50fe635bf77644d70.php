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

/* AppBundle:Episode:subtitles.html.twig */
class __TwigTemplate_eb59473d0588b43639fc4c5b345581cc3bbab9c82ca64ea53564d22440fa7372 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Episode:subtitles.html.twig", 1);
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
\t\t\t\t\t\t<a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_episode_edit", ["id" => $this->getAttribute(($context["episode"] ?? null), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">edit</i> Edit</a>
\t\t\t\t\t\t<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_episode_sources", ["id" => $this->getAttribute(($context["episode"] ?? null), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">folder</i> Sources</a>
\t\t\t\t\t\t<a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_episode_subtitles", ["id" => $this->getAttribute(($context["episode"] ?? null), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie-active col-md-12\"><i class=\"material-icons\">subtitles</i> Subtitles</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">remove_red_eye</i> ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["episode"] ?? null), "viewsnumber", []), "html", null, true);
        echo " views</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">cloud_download</i> ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["episode"] ?? null), "downloadsnumber", []), "html", null, true);
        echo " downloads</a>
\t\t\t\t\t\t<a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_serie_seasons", ["id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["episode"] ?? null), "season", []), "poster", []), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">arrow_back</i> back</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-9\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header card-header-icon\" data-background-color=\"rose\">
\t\t\t\t\t\t<i class=\"material-icons\">subtitles</i>
\t\t\t\t\t</div>
\t\t\t\t\t<a  href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_subtitle_add_episode", ["episode" => $this->getAttribute(($context["episode"] ?? null), "id", [])]), "html", null, true);
        echo "\" class=\"btn  btn-xs btn-success pull-right new-subtitle-source\"><i class=\"material-icons\" style=\"font-size: 30px;\">add_box</i> New Subtitle</a>
\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t<h4 class=\"card-title\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["episode"] ?? null), "title", []), "html", null, true);
        echo " Subtitles</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t<div class=\"card\" style=\"margin: 15px 0;\">
\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t<table class=\"table table-source\" width=\"100%\">
\t\t\t\t\t\t\t\t\t<thead class=\"text-primary\">
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th><b>Language</b></th>
\t\t\t\t\t\t\t\t\t\t\t<th style=\"text-align:right\"><b>Action</b></th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["episode"] ?? null), "subtitles", []));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["subtitle"]) {
            // line 40
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"mini-language-img\" src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["subtitle"], "language", []), "media", []), "link", [])), "html", null, true);
            echo "\" />";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subtitle"], "language", []), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "scheme", []) . "://") . $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "httpHost", [])) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["subtitle"], "media", []), "link", []))), "html", null, true);
            echo "\" class=\"btn btn-rose btn-xs pull-right\" ><i class=\"material-icons\">cloud_download</i> Download</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_subtitle_delete", ["id" => $this->getAttribute($context["subtitle"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-rose btn-xs pull-right\"><i class=\"material-icons\">delete</i></a>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 50
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td rowspan=\"2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t<center><img src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg_empty.png"), "html", null, true);
            echo "\"  style=\"width: auto !important;\" =\"\"></center>
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subtitle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Episode:subtitles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 58,  139 => 53,  134 => 50,  125 => 46,  121 => 45,  113 => 42,  109 => 40,  104 => 39,  86 => 24,  81 => 22,  69 => 13,  65 => 12,  61 => 11,  57 => 10,  53 => 9,  49 => 8,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Episode:subtitles.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Episode/subtitles.html.twig");
    }
}
