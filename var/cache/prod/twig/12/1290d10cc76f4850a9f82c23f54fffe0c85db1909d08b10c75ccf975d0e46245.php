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

/* AppBundle:Channel:ratings.html.twig */
class __TwigTemplate_cb700d3dd2fa0f504e7397d57ecdba466bc00cd3a74cf0322814c42f2aecd692 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Channel:ratings.html.twig", 1);
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
\t\t\t\t\t<div class=\"tab-moivie  tab-channel\">
\t\t\t\t\t\t<a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_channel_edit", ["id" => $this->getAttribute(($context["channel"] ?? null), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">edit</i> Edit</a>
\t\t\t\t\t\t<a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_channel_sources", ["id" => $this->getAttribute(($context["channel"] ?? null), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">folder</i> Sources</a>
\t\t\t\t\t\t<a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_channel_comments", ["id" => $this->getAttribute(($context["channel"] ?? null), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">comment</i> Comments</a>
\t\t\t\t\t\t<a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_channel_ratings", ["id" => $this->getAttribute(($context["channel"] ?? null), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie-active col-md-12\"><i class=\"material-icons\">star_half</i> Ratings</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">remove_red_eye</i> ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? null), "viewsnumber", []), "html", null, true);
        echo " views</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">share</i> ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? null), "sharesnumber", []), "html", null, true);
        echo " shares</a>
\t\t\t\t\t\t<a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_channel_index");
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">arrow_back</i> Cancel</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-9\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header card-header-icon\" data-background-color=\"rose\">
\t\t\t\t\t\t<i class=\"material-icons\">star_half</i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t<h4 class=\"card-title\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? null), "title", []), "html", null, true);
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
        // line 32
        $context["rate"] = ($context["rating"] ?? null);
        // line 33
        echo "\t\t\t\t\t";
        $context["rate_main"] = ($context["rating"] ?? null);
        // line 34
        echo "\t\t\t\t\t<div class=\"list-group lg-alt lg-even-black\">
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<table width=\"100%\" >
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"2\" style=\"padding: 15px;\" align=\"right\">
\t\t\t\t\t\t\t\t\t<div >
\t\t\t\t\t\t\t\t\t\t";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 41
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ((($context["rate"] ?? null) >= 1)) {
                // line 42
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
                echo "\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 44
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($context["rate"] ?? null) >= 0.25) && (($context["rate"] ?? null) < 0.75))) {
                // line 45
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_h.png"), "html", null, true);
                echo "\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($context["rate"] ?? null) >= 0.75) && (($context["rate"] ?? null) < 1))) {
                // line 48
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
                echo "\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 50
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ((($context["rate"] ?? null) < 0.25)) {
                // line 51
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_e.png"), "html", null, true);
                echo "\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 53
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            $context["rate"] = (($context["rate"] ?? null) - 1);
            // line 54
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span style=\"height: 28px;display: inline-block;font-size: 30pt;font-weight: bold;padding-left: 20px;\">Rating : ";
        // line 58
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["rate_main"] ?? null), 1, ".", ","), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t`
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td width=\"50%\" align=\"right\" style=\"padding: 5px;\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td width=\"30px\" align=\"center\">";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ratings"] ?? null), "rate_5", []), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t<td  align=\"left\" style=\"padding:10px\">
\t\t\t\t\t\t\t\t\t<span style=\"display:block;height:15px;background-color:black;border-radius: 12px;width:";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute(($context["values"] ?? null), "rate_5", []), "html", null, true);
        echo "%\"></span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td width=\"50%\" align=\"right\" style=\"padding: 5px;\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_e.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td width=\"30px\" align=\"center\">";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ratings"] ?? null), "rate_4", []), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t<td  align=\"left\" style=\"padding:10px\">
\t\t\t\t\t\t\t\t\t<span style=\"display:block;height:15px;background-color:black;border-radius: 12px;width:";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute(($context["values"] ?? null), "rate_4", []), "html", null, true);
        echo "%\"></span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td width=\"50%\" align=\"right\" style=\"padding: 5px;\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_e.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_e.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td width=\"30px\" align=\"center\">";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ratings"] ?? null), "rate_3", []), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t<td  align=\"left\" style=\"padding:10px\">
\t\t\t\t\t\t\t\t\t<span style=\"display:block;height:15px;background-color:black;border-radius: 12px;width:";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute(($context["values"] ?? null), "rate_3", []), "html", null, true);
        echo "%\"></span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td width=\"50%\" align=\"right\" style=\"padding: 5px;\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_e.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_e.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_e.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td width=\"30px\" align=\"center\">";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ratings"] ?? null), "rate_2", []), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t<td  align=\"left\" style=\"padding:10px\">
\t\t\t\t\t\t\t\t\t<span style=\"display:block;height:15px;background-color:black;border-radius: 12px;width:";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute(($context["values"] ?? null), "rate_2", []), "html", null, true);
        echo "%\"></span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td width=\"50%\" align=\"right\" style=\"padding: 5px;\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_e.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_e.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_e.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_e.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td width=\"30px\" align=\"center\">";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ratings"] ?? null), "rate_1", []), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t<td  align=\"left\" style=\"padding:10px\">
\t\t\t\t\t\t\t\t\t<span style=\"display:block;height:15px;background-color:black;border-radius: 12px;width:";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute(($context["values"] ?? null), "rate_1", []), "html", null, true);
        echo "%\"></span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["rate"]) {
            // line 133
            echo "\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<ul class=\"timeline timeline-simple\">
\t\t\t\t\t\t\t\t<li class=\"timeline-inverted\">
\t\t\t\t\t\t\t\t\t<div class=\"timeline-badge info\">
\t\t\t\t\t\t\t\t\t\t";
            // line 137
            if (($this->getAttribute($this->getAttribute($context["rate"], "user", []), "media", []) != null)) {
                // line 138
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["rate"], "user", []), "media", []), "type", []) == "link")) {
                    // line 139
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"avatar-char palette-Red-400 bg\"  style=\"border-radius: 100px;    border: 0.5px solid #ccc;\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rate"], "user", []), "media", []), "url", []), "html", null, true);
                    echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 141
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"avatar-char palette-Red-400 bg\"  style=\"border-radius: 100px;    border: 0.5px solid #ccc;\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["rate"], "user", []), "media", []), "link", [])), "actor_thumb"), "html", null, true);
                    echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 143
                echo "\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 144
                echo "\t\t\t\t\t\t\t\t\t\t\t<img class=\"avatar-char palette-Red-400 bg\"  style=\"border-radius: 100px;    border: 0.5px solid #ccc;\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar.jpg"), "actor_thumb"), "html", null, true);
                echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 146
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-heading\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_user_edit", ["id" => $this->getAttribute($this->getAttribute($context["rate"], "user", []), "id", [])]), "html", null, true);
            echo "\" title=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-danger\">";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rate"], "user", []), "name", []), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"timeline-body\">
\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t<div style=\"float: left;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 156
            $context["rate_value"] = $this->getAttribute($context["rate"], "value", []);
            // line 157
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 158
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((($context["rate_value"] ?? null) >= 1)) {
                    // line 159
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
                    echo "\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 161
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (((($context["rate_value"] ?? null) >= 0.25) && (($context["rate_value"] ?? null) < 0.75))) {
                    // line 162
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_h.png"), "html", null, true);
                    echo "\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 164
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (((($context["rate_value"] ?? null) >= 0.75) && (($context["rate_value"] ?? null) < 1))) {
                    // line 165
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
                    echo "\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 167
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((($context["rate_value"] ?? null) < 0.25)) {
                    // line 168
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_e.png"), "html", null, true);
                    echo "\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 170
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["rate_value"] = (($context["rate_value"] ?? null) - 1);
                // line 171
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"line-height: 50px;display: inline-block;font-size: 56pt;font-weight: bold;padding-left: 20px;\">";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute($context["rate"], "value", []), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t<small class=\"pull-right label label-rose\">
\t\t\t\t\t\t\t\t\t\t<span>";
            // line 179
            echo $this->env->getExtension('Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension')->diff($this->getAttribute($context["rate"], "created", []));
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 187
            echo "\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<div class=\"card\"  style=\"text-align: center;\" >
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<img src=\"";
            // line 191
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg_empty.png"), "html", null, true);
            echo "\"  style=\"width: 100% !important;\" =\"\">
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        echo "\t\t\t\t</div>
\t\t\t</div>
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
        return "AppBundle:Channel:ratings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  503 => 200,  498 => 197,  486 => 191,  480 => 187,  467 => 179,  458 => 173,  455 => 172,  449 => 171,  446 => 170,  440 => 168,  437 => 167,  431 => 165,  428 => 164,  422 => 162,  419 => 161,  413 => 159,  410 => 158,  405 => 157,  403 => 156,  394 => 150,  390 => 149,  385 => 146,  379 => 144,  376 => 143,  370 => 141,  364 => 139,  361 => 138,  359 => 137,  353 => 133,  348 => 132,  338 => 125,  333 => 123,  328 => 121,  324 => 120,  320 => 119,  316 => 118,  312 => 117,  304 => 112,  299 => 110,  294 => 108,  290 => 107,  286 => 106,  282 => 105,  278 => 104,  269 => 98,  264 => 96,  259 => 94,  255 => 93,  251 => 92,  247 => 91,  243 => 90,  235 => 85,  230 => 83,  225 => 81,  221 => 80,  217 => 79,  213 => 78,  209 => 77,  201 => 72,  196 => 70,  191 => 68,  187 => 67,  183 => 66,  179 => 65,  175 => 64,  166 => 58,  161 => 55,  155 => 54,  152 => 53,  146 => 51,  143 => 50,  137 => 48,  134 => 47,  128 => 45,  125 => 44,  119 => 42,  116 => 41,  112 => 40,  104 => 34,  101 => 33,  99 => 32,  86 => 24,  73 => 14,  69 => 13,  65 => 12,  61 => 11,  57 => 10,  53 => 9,  49 => 8,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Channel:ratings.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Channel/ratings.html.twig");
    }
}
