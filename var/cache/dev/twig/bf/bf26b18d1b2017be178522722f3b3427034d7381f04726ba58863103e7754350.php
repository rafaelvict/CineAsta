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
class __TwigTemplate_716ad7fa1bf6b4b477a0eb8036ea5fd19e7716111ada0acf0bb237ca19bfa7c4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Serie:ratings.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Serie:ratings.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Serie:ratings.html.twig", 1);
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
\t\t\t\t\t\t<h4 class=\"title\">Ratings : ";
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
        echo "\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">movie_filter</i> Trailer</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_serie_seasons", ["id" => $this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">dynamic_feed</i> SEASONS</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_serie_comments", ["id" => $this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">comment</i> Comments</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_serie_ratings", ["id" => $this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "id", [])]), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "title", []), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
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
        $context["rate"] = ($context["rating"] ?? $this->getContext($context, "rating"));
        // line 37
        echo "\t\t\t\t\t";
        $context["rate_main"] = ($context["rating"] ?? $this->getContext($context, "rating"));
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
            if ((($context["rate"] ?? $this->getContext($context, "rate")) >= 1)) {
                // line 46
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
                echo "\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 48
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($context["rate"] ?? $this->getContext($context, "rate")) >= 0.25) && (($context["rate"] ?? $this->getContext($context, "rate")) < 0.75))) {
                // line 49
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_h.png"), "html", null, true);
                echo "\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 51
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($context["rate"] ?? $this->getContext($context, "rate")) >= 0.75) && (($context["rate"] ?? $this->getContext($context, "rate")) < 1))) {
                // line 52
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
                echo "\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 54
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ((($context["rate"] ?? $this->getContext($context, "rate")) < 0.25)) {
                // line 55
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_e.png"), "html", null, true);
                echo "\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 57
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            $context["rate"] = (($context["rate"] ?? $this->getContext($context, "rate")) - 1);
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
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["rate_main"] ?? $this->getContext($context, "rate_main")), 1, ".", ","), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ratings"] ?? $this->getContext($context, "ratings")), "rate_5", []), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t<td  align=\"left\" style=\"padding:10px\">
\t\t\t\t\t\t\t\t\t<span style=\"display:block;height:15px;background-color:black;border-radius: 12px;width:";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute(($context["values"] ?? $this->getContext($context, "values")), "rate_5", []), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ratings"] ?? $this->getContext($context, "ratings")), "rate_4", []), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t<td  align=\"left\" style=\"padding:10px\">
\t\t\t\t\t\t\t\t\t<span style=\"display:block;height:15px;background-color:black;border-radius: 12px;width:";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute(($context["values"] ?? $this->getContext($context, "values")), "rate_4", []), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ratings"] ?? $this->getContext($context, "ratings")), "rate_3", []), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t<td  align=\"left\" style=\"padding:10px\">
\t\t\t\t\t\t\t\t\t<span style=\"display:block;height:15px;background-color:black;border-radius: 12px;width:";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute(($context["values"] ?? $this->getContext($context, "values")), "rate_3", []), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ratings"] ?? $this->getContext($context, "ratings")), "rate_2", []), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t<td  align=\"left\" style=\"padding:10px\">
\t\t\t\t\t\t\t\t\t<span style=\"display:block;height:15px;background-color:black;border-radius: 12px;width:";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute(($context["values"] ?? $this->getContext($context, "values")), "rate_2", []), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ratings"] ?? $this->getContext($context, "ratings")), "rate_1", []), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t<td  align=\"left\" style=\"padding:10px\">
\t\t\t\t\t\t\t\t\t<span style=\"display:block;height:15px;background-color:black;border-radius: 12px;width:";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute(($context["values"] ?? $this->getContext($context, "values")), "rate_1", []), "html", null, true);
        echo "%\"></span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
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
                if ((($context["rate_value"] ?? $this->getContext($context, "rate_value")) >= 1)) {
                    // line 162
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
                    echo "\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 164
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (((($context["rate_value"] ?? $this->getContext($context, "rate_value")) >= 0.25) && (($context["rate_value"] ?? $this->getContext($context, "rate_value")) < 0.75))) {
                    // line 165
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_h.png"), "html", null, true);
                    echo "\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 167
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (((($context["rate_value"] ?? $this->getContext($context, "rate_value")) >= 0.75) && (($context["rate_value"] ?? $this->getContext($context, "rate_value")) < 1))) {
                    // line 168
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
                    echo "\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 170
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((($context["rate_value"] ?? $this->getContext($context, "rate_value")) < 0.25)) {
                    // line 171
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_e.png"), "html", null, true);
                    echo "\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 173
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["rate_value"] = (($context["rate_value"] ?? $this->getContext($context, "rate_value")) - 1);
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
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  525 => 200,  521 => 198,  510 => 193,  505 => 190,  492 => 182,  483 => 176,  480 => 175,  474 => 174,  471 => 173,  465 => 171,  462 => 170,  456 => 168,  453 => 167,  447 => 165,  444 => 164,  438 => 162,  435 => 161,  430 => 160,  428 => 159,  419 => 153,  415 => 152,  410 => 149,  404 => 147,  401 => 146,  395 => 144,  389 => 142,  386 => 141,  384 => 140,  378 => 136,  373 => 135,  364 => 129,  359 => 127,  354 => 125,  350 => 124,  346 => 123,  342 => 122,  338 => 121,  330 => 116,  325 => 114,  320 => 112,  316 => 111,  312 => 110,  308 => 109,  304 => 108,  295 => 102,  290 => 100,  285 => 98,  281 => 97,  277 => 96,  273 => 95,  269 => 94,  261 => 89,  256 => 87,  251 => 85,  247 => 84,  243 => 83,  239 => 82,  235 => 81,  227 => 76,  222 => 74,  217 => 72,  213 => 71,  209 => 70,  205 => 69,  201 => 68,  192 => 62,  187 => 59,  181 => 58,  178 => 57,  172 => 55,  169 => 54,  163 => 52,  160 => 51,  154 => 49,  151 => 48,  145 => 46,  142 => 45,  138 => 44,  130 => 38,  127 => 37,  125 => 36,  112 => 28,  89 => 18,  84 => 16,  75 => 10,  71 => 9,  67 => 8,  60 => 3,  51 => 2,  29 => 1,);
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
\t\t\t\t\t\t<h4 class=\"title\">Ratings : {{serie.title }} </b></h4>
\t\t\t\t\t</div>
                    <div class=\"tab-moivie tab-series\"><a href=\"{{path(\"app_serie_edit\",{\"id\":serie.id})}}\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">edit</i> Edit</a><a href=\"{{path(\"app_serie_cast\",{\"id\":serie.id})}}\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">recent_actors</i> Cast</a><a href=\"{{path(\"app_serie_trailer\",{\"id\":serie.id})}}\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">movie_filter</i> Trailer</a><a href=\"{{path(\"app_serie_seasons\",{\"id\":serie.id})}}\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">dynamic_feed</i> SEASONS</a><a href=\"{{path(\"app_serie_comments\",{\"id\":serie.id})}}\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">comment</i> Comments</a><a href=\"{{path(\"app_serie_ratings\",{\"id\":serie.id})}}\" class=\"btn btn-tab-movie-active\"><i class=\"material-icons\">star_half</i> Ratings</a>
                    </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header card-header-icon\" data-background-color=\"rose\">
\t\t\t\t\t\t<i class=\"material-icons\">star_half</i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t<h4 class=\"card-title\">{{serie.title}}: {{count}} Ratings </h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"card\" >
\t\t\t\t\t<div class=\"status-bar\"></div>
\t\t\t\t\t<div class=\"action-bar\">
\t\t\t\t\t\t<a href=\"#\" class=\"zmdi zmdi-star\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t{% set rate  =  rating %}
\t\t\t\t\t{% set rate_main  =  rating %}
\t\t\t\t\t<div class=\"list-group lg-alt lg-even-black\">
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<table width=\"100%\" >
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"2\" style=\"padding: 15px;\" align=\"right\">
\t\t\t\t\t\t\t\t\t<div >
\t\t\t\t\t\t\t\t\t\t{% for i in 1..5 %}
\t\t\t\t\t\t\t\t\t\t\t{% if rate >= 1 %}
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"img/star.png\")}}\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% if rate >= 0.25 and  rate < 0.75 %}
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"img/star_h.png\")}}\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% if rate >= 0.75 and  rate < 1 %}
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"img/star.png\")}}\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% if rate < 0.25 %}
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"img/star_e.png\")}}\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% set rate  =  rate - 1 %}
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span style=\"height: 28px;display: inline-block;font-size: 30pt;font-weight: bold;padding-left: 20px;\">Rating : {{rate_main|number_format(1, '.', ',')}}</span>
\t\t\t\t\t\t\t\t\t`
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td width=\"50%\" align=\"right\" style=\"padding: 5px;\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"img/star.png\")}}\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"img/star.png\")}}\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"img/star.png\")}}\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"img/star.png\")}}\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"img/star.png\")}}\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td width=\"30px\" align=\"center\">{{ratings.rate_5}}</td>
\t\t\t\t\t\t\t\t<td  align=\"left\" style=\"padding:10px\">
\t\t\t\t\t\t\t\t\t<span style=\"display:block;height:15px;background-color:black;border-radius: 12px;width:{{values.rate_5}}%\"></span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td width=\"50%\" align=\"right\" style=\"padding: 5px;\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"img/star_e.png\")}}\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"img/star.png\")}}\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"img/star.png\")}}\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"img/star.png\")}}\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"img/star.png\")}}\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td width=\"30px\" align=\"center\">{{ratings.rate_4}}</td>
\t\t\t\t\t\t\t\t<td  align=\"left\" style=\"padding:10px\">
\t\t\t\t\t\t\t\t\t<span style=\"display:block;height:15px;background-color:black;border-radius: 12px;width:{{values.rate_4}}%\"></span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td width=\"50%\" align=\"right\" style=\"padding: 5px;\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"img/star_e.png\")}}\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"img/star_e.png\")}}\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"img/star.png\")}}\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"img/star.png\")}}\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"img/star.png\")}}\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td width=\"30px\" align=\"center\">{{ratings.rate_3}}</td>
\t\t\t\t\t\t\t\t<td  align=\"left\" style=\"padding:10px\">
\t\t\t\t\t\t\t\t\t<span style=\"display:block;height:15px;background-color:black;border-radius: 12px;width:{{values.rate_3}}%\"></span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td width=\"50%\" align=\"right\" style=\"padding: 5px;\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"img/star_e.png\")}}\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"img/star_e.png\")}}\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"img/star_e.png\")}}\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"img/star.png\")}}\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"img/star.png\")}}\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td width=\"30px\" align=\"center\">{{ratings.rate_2}}</td>
\t\t\t\t\t\t\t\t<td  align=\"left\" style=\"padding:10px\">
\t\t\t\t\t\t\t\t\t<span style=\"display:block;height:15px;background-color:black;border-radius: 12px;width:{{values.rate_2}}%\"></span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td width=\"50%\" align=\"right\" style=\"padding: 5px;\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"img/star_e.png\")}}\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"img/star_e.png\")}}\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"img/star_e.png\")}}\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"img/star_e.png\")}}\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"img/star.png\")}}\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td width=\"30px\" align=\"center\">{{ratings.rate_1}}</td>
\t\t\t\t\t\t\t\t<td  align=\"left\" style=\"padding:10px\">
\t\t\t\t\t\t\t\t\t<span style=\"display:block;height:15px;background-color:black;border-radius: 12px;width:{{values.rate_1}}%\"></span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% for rate in pagination %}
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<ul class=\"timeline timeline-simple\">
\t\t\t\t\t\t\t<li class=\"timeline-inverted\">
\t\t\t\t\t\t\t\t<div class=\"timeline-badge info\">
\t\t\t\t\t\t\t\t\t{% if rate.user.media != null %}
\t\t\t\t\t\t\t\t\t\t{% if rate.user.media.type ==\"link\" %}
\t\t\t\t\t\t\t\t\t\t\t<img class=\"avatar-char palette-Red-400 bg\"  style=\"border-radius: 100px;    border: 0.5px solid #ccc;\" src=\"{{rate.user.media.url}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<img class=\"avatar-char palette-Red-400 bg\"  style=\"border-radius: 100px;    border: 0.5px solid #ccc;\" src=\"{{asset(rate.user.media.link)|imagine_filter('actor_thumb')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<img class=\"avatar-char palette-Red-400 bg\"  style=\"border-radius: 100px;    border: 0.5px solid #ccc;\" src=\"{{asset(\"img/avatar.jpg\")|imagine_filter('actor_thumb')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t\t<div class=\"timeline-heading\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"user_user_edit\",{id:rate.user.id})}}\" title=\"\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-danger\">{{rate.user.name}}</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"timeline-body\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<div style=\"float: left;\">
\t\t\t\t\t\t\t\t\t\t\t\t{% set rate_value = rate.value %}
\t\t\t\t\t\t\t\t\t\t\t\t{% for i in 1..5 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if rate_value >= 1 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"img/star.png\")}}\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if rate_value >= 0.25 and  rate_value < 0.75 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"img/star_h.png\")}}\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if rate_value >= 0.75 and  rate_value < 1 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"img/star.png\")}}\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% if rate_value < 0.25 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset(\"img/star_e.png\")}}\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% set rate_value  =  rate_value - 1 %}
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span style=\"line-height: 50px;display: inline-block;font-size: 56pt;font-weight: bold;padding-left: 20px;\">{{rate.value}}</span>
\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t<small class=\"pull-right label label-rose\">
\t\t\t\t\t\t\t\t\t<span>{{rate.created|ago}}</span>
\t\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t{% else %}
\t\t\t\t\t<div class=\"card\"  style=\"text-align: center;\" >
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<img src=\"{{asset(\"img/bg_empty.png\")}}\"  style=\"width: auto !important;\" =\"\">
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<br>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t\t<div class=\" pull-right\">
\t\t\t\t{{ knp_pagination_render(pagination) }}
\t\t\t</div>
\t\t</div>
\t</div>
</div>
{% endblock%}", "AppBundle:Serie:ratings.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Serie/ratings.html.twig");
    }
}
