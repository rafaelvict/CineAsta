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

/* AppBundle:Serie:ratings.html.twig */
class __TwigTemplate_9997063d55931b72a8acb109f5a256f264c1370b28d5e096757a3353fcea7467 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Serie:ratings.html.twig", 1);
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
\t\t\t\t\t\t<h4 class=\"title\">Ratings : ";
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
        echo "\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">movie_filter</i> Trailer</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_serie_seasons", ["id" => $this->getAttribute(($context["serie"] ?? null), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">dynamic_feed</i> SEASONS</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_serie_comments", ["id" => $this->getAttribute(($context["serie"] ?? null), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">comment</i> Comments</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_serie_ratings", ["id" => $this->getAttribute(($context["serie"] ?? null), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie-active\"><i class=\"material-icons\">star_half</i> Ratings</a>
                    </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header card-header-icon\" data-background-color=\"rose\">
\t\t\t\t\t\t<i class=\"material-icons\">star_half</i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t<h4 class=\"card-title\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["serie"] ?? null), "title", []), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
        echo " Ratings </h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"card\" >
\t\t\t\t\t<div class=\"status-bar\"></div>
\t\t\t\t\t<div class=\"action-bar\">
\t\t\t\t\t\t<a href=\"#\" class=\"zmdi zmdi-star\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 36
        $context["rate"] = ($context["rating"] ?? null);
        // line 37
        echo "\t\t\t\t\t";
        $context["rate_main"] = ($context["rating"] ?? null);
        // line 38
        echo "\t\t\t\t\t<div class=\"list-group lg-alt lg-even-black\">
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<table width=\"100%\" >
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"2\" style=\"padding: 15px;\" align=\"right\">
\t\t\t\t\t\t\t\t\t<div >
\t\t\t\t\t\t\t\t\t\t";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 45
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ((($context["rate"] ?? null) >= 1)) {
                // line 46
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
                echo "\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 48
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($context["rate"] ?? null) >= 0.25) && (($context["rate"] ?? null) < 0.75))) {
                // line 49
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_h.png"), "html", null, true);
                echo "\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 51
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($context["rate"] ?? null) >= 0.75) && (($context["rate"] ?? null) < 1))) {
                // line 52
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
                echo "\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 54
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ((($context["rate"] ?? null) < 0.25)) {
                // line 55
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_e.png"), "html", null, true);
                echo "\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 57
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            $context["rate"] = (($context["rate"] ?? null) - 1);
            // line 58
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span style=\"height: 28px;display: inline-block;font-size: 30pt;font-weight: bold;padding-left: 20px;\">Rating : ";
        // line 62
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["rate_main"] ?? null), 1, ".", ","), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t`
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td width=\"50%\" align=\"right\" style=\"padding: 5px;\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td width=\"30px\" align=\"center\">";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ratings"] ?? null), "rate_5", []), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t<td  align=\"left\" style=\"padding:10px\">
\t\t\t\t\t\t\t\t\t<span style=\"display:block;height:15px;background-color:black;border-radius: 12px;width:";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute(($context["values"] ?? null), "rate_5", []), "html", null, true);
        echo "%\"></span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td width=\"50%\" align=\"right\" style=\"padding: 5px;\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_e.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td width=\"30px\" align=\"center\">";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ratings"] ?? null), "rate_4", []), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t<td  align=\"left\" style=\"padding:10px\">
\t\t\t\t\t\t\t\t\t<span style=\"display:block;height:15px;background-color:black;border-radius: 12px;width:";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute(($context["values"] ?? null), "rate_4", []), "html", null, true);
        echo "%\"></span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td width=\"50%\" align=\"right\" style=\"padding: 5px;\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_e.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_e.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td width=\"30px\" align=\"center\">";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ratings"] ?? null), "rate_3", []), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t<td  align=\"left\" style=\"padding:10px\">
\t\t\t\t\t\t\t\t\t<span style=\"display:block;height:15px;background-color:black;border-radius: 12px;width:";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute(($context["values"] ?? null), "rate_3", []), "html", null, true);
        echo "%\"></span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td width=\"50%\" align=\"right\" style=\"padding: 5px;\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_e.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_e.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_e.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td width=\"30px\" align=\"center\">";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ratings"] ?? null), "rate_2", []), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t<td  align=\"left\" style=\"padding:10px\">
\t\t\t\t\t\t\t\t\t<span style=\"display:block;height:15px;background-color:black;border-radius: 12px;width:";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute(($context["values"] ?? null), "rate_2", []), "html", null, true);
        echo "%\"></span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td width=\"50%\" align=\"right\" style=\"padding: 5px;\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_e.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_e.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_e.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_e.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td width=\"30px\" align=\"center\">";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ratings"] ?? null), "rate_1", []), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t<td  align=\"left\" style=\"padding:10px\">
\t\t\t\t\t\t\t\t\t<span style=\"display:block;height:15px;background-color:black;border-radius: 12px;width:";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute(($context["values"] ?? null), "rate_1", []), "html", null, true);
        echo "%\"></span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["rate"]) {
            // line 136
            echo "\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<ul class=\"timeline timeline-simple\">
\t\t\t\t\t\t\t<li class=\"timeline-inverted\">
\t\t\t\t\t\t\t\t<div class=\"timeline-badge info\">
\t\t\t\t\t\t\t\t\t";
            // line 140
            if (($this->getAttribute($this->getAttribute($context["rate"], "user", []), "media", []) != null)) {
                // line 141
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["rate"], "user", []), "media", []), "type", []) == "link")) {
                    // line 142
                    echo "\t\t\t\t\t\t\t\t\t\t\t<img class=\"avatar-char palette-Red-400 bg\"  style=\"border-radius: 100px;    border: 0.5px solid #ccc;\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rate"], "user", []), "media", []), "url", []), "html", null, true);
                    echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 144
                    echo "\t\t\t\t\t\t\t\t\t\t\t<img class=\"avatar-char palette-Red-400 bg\"  style=\"border-radius: 100px;    border: 0.5px solid #ccc;\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["rate"], "user", []), "media", []), "link", [])), "actor_thumb"), "html", null, true);
                    echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 146
                echo "\t\t\t\t\t\t\t\t\t";
            } else {
                // line 147
                echo "\t\t\t\t\t\t\t\t\t\t<img class=\"avatar-char palette-Red-400 bg\"  style=\"border-radius: 100px;    border: 0.5px solid #ccc;\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar.jpg"), "actor_thumb"), "html", null, true);
                echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t";
            }
            // line 149
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t\t<div class=\"timeline-heading\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 152
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_user_edit", ["id" => $this->getAttribute($this->getAttribute($context["rate"], "user", []), "id", [])]), "html", null, true);
            echo "\" title=\"\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-danger\">";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rate"], "user", []), "name", []), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"timeline-body\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<div style=\"float: left;\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 159
            $context["rate_value"] = $this->getAttribute($context["rate"], "value", []);
            // line 160
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 161
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((($context["rate_value"] ?? null) >= 1)) {
                    // line 162
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
                    echo "\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 164
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (((($context["rate_value"] ?? null) >= 0.25) && (($context["rate_value"] ?? null) < 0.75))) {
                    // line 165
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_h.png"), "html", null, true);
                    echo "\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 167
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (((($context["rate_value"] ?? null) >= 0.75) && (($context["rate_value"] ?? null) < 1))) {
                    // line 168
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
                    echo "\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 170
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((($context["rate_value"] ?? null) < 0.25)) {
                    // line 171
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_e.png"), "html", null, true);
                    echo "\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 173
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["rate_value"] = (($context["rate_value"] ?? null) - 1);
                // line 174
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span style=\"line-height: 50px;display: inline-block;font-size: 56pt;font-weight: bold;padding-left: 20px;\">";
            // line 176
            echo twig_escape_filter($this->env, $this->getAttribute($context["rate"], "value", []), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t<small class=\"pull-right label label-rose\">
\t\t\t\t\t\t\t\t\t<span>";
            // line 182
            echo $this->env->getExtension('Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension')->diff($this->getAttribute($context["rate"], "created", []));
            echo "</span>
\t\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 190
            echo "\t\t\t\t\t<div class=\"card\"  style=\"text-align: center;\" >
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<img src=\"";
            // line 193
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg_empty.png"), "html", null, true);
            echo "\"  style=\"width: auto !important;\" =\"\">
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<br>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        echo "\t\t\t</div>
\t\t\t<div class=\" pull-right\">
\t\t\t\t";
        // line 200
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? null));
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Serie:ratings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  507 => 200,  503 => 198,  492 => 193,  487 => 190,  474 => 182,  465 => 176,  462 => 175,  456 => 174,  453 => 173,  447 => 171,  444 => 170,  438 => 168,  435 => 167,  429 => 165,  426 => 164,  420 => 162,  417 => 161,  412 => 160,  410 => 159,  401 => 153,  397 => 152,  392 => 149,  386 => 147,  383 => 146,  377 => 144,  371 => 142,  368 => 141,  366 => 140,  360 => 136,  355 => 135,  346 => 129,  341 => 127,  336 => 125,  332 => 124,  328 => 123,  324 => 122,  320 => 121,  312 => 116,  307 => 114,  302 => 112,  298 => 111,  294 => 110,  290 => 109,  286 => 108,  277 => 102,  272 => 100,  267 => 98,  263 => 97,  259 => 96,  255 => 95,  251 => 94,  243 => 89,  238 => 87,  233 => 85,  229 => 84,  225 => 83,  221 => 82,  217 => 81,  209 => 76,  204 => 74,  199 => 72,  195 => 71,  191 => 70,  187 => 69,  183 => 68,  174 => 62,  169 => 59,  163 => 58,  160 => 57,  154 => 55,  151 => 54,  145 => 52,  142 => 51,  136 => 49,  133 => 48,  127 => 46,  124 => 45,  120 => 44,  112 => 38,  109 => 37,  107 => 36,  94 => 28,  71 => 18,  66 => 16,  57 => 10,  53 => 9,  49 => 8,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Serie:ratings.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Serie/ratings.html.twig");
    }
}
