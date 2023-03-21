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

/* AppBundle:Movie:ratings.html.twig */
class __TwigTemplate_6854f0be3db8809b09a00f109da1d8500c87f8e82fc3a4e91300d119208c7088 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Movie:ratings.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Movie:ratings.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Movie:ratings.html.twig", 1);
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
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">remove_red_eye</i> ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["movie"] ?? $this->getContext($context, "movie")), "viewsnumber", []), "html", null, true);
        echo " Views</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie pull-right\"><i class=\"material-icons\">share</i> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["movie"] ?? $this->getContext($context, "movie")), "sharesnumber", []), "html", null, true);
        echo " Shares</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie pull-right\"><i class=\"material-icons\">cloud_download</i> ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["movie"] ?? $this->getContext($context, "movie")), "downloadsnumber", []), "html", null, true);
        echo " Downloads</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-header \" data-background-color=\"green\">
\t\t\t\t\t\t<i class=\"material-icons\">movie_filter</i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-content trailer-body\">
\t\t\t\t\t\t<h4 class=\"title\">Ratings : ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["movie"] ?? $this->getContext($context, "movie")), "title", []), "html", null, true);
        echo " </b></h4>
\t\t\t\t\t</div>
                  <div class=\"tab-moivie\">
                    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_movie_edit", ["id" => $this->getAttribute(($context["movie"] ?? $this->getContext($context, "movie")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">edit</i> Edit</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_movie_sources", ["id" => $this->getAttribute(($context["movie"] ?? $this->getContext($context, "movie")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">folder</i> Sources</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_movie_cast", ["id" => $this->getAttribute(($context["movie"] ?? $this->getContext($context, "movie")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">recent_actors</i> Cast</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_movie_trailer", ["id" => $this->getAttribute(($context["movie"] ?? $this->getContext($context, "movie")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">movie_filter</i> Trailer</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_movie_subtitles", ["id" => $this->getAttribute(($context["movie"] ?? $this->getContext($context, "movie")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">subtitles</i> Subtitles</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_movie_comments", ["id" => $this->getAttribute(($context["movie"] ?? $this->getContext($context, "movie")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">comment</i> Comments</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_movie_ratings", ["id" => $this->getAttribute(($context["movie"] ?? $this->getContext($context, "movie")), "id", [])]), "html", null, true);
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
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["movie"] ?? $this->getContext($context, "movie")), "title", []), "html", null, true);
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
        // line 37
        $context["rate"] = ($context["rating"] ?? $this->getContext($context, "rating"));
        // line 38
        echo "\t\t\t\t\t";
        $context["rate_main"] = ($context["rating"] ?? $this->getContext($context, "rating"));
        // line 39
        echo "\t\t\t\t\t<div class=\"list-group lg-alt lg-even-black\">
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<table width=\"100%\" >
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"2\" style=\"padding: 15px;\" align=\"right\">
\t\t\t\t\t\t\t\t\t<div >
\t\t\t\t\t\t\t\t\t\t";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 46
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ((($context["rate"] ?? $this->getContext($context, "rate")) >= 1)) {
                // line 47
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
                echo "\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 49
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($context["rate"] ?? $this->getContext($context, "rate")) >= 0.25) && (($context["rate"] ?? $this->getContext($context, "rate")) < 0.75))) {
                // line 50
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_h.png"), "html", null, true);
                echo "\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 52
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (((($context["rate"] ?? $this->getContext($context, "rate")) >= 0.75) && (($context["rate"] ?? $this->getContext($context, "rate")) < 1))) {
                // line 53
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
                echo "\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 55
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if ((($context["rate"] ?? $this->getContext($context, "rate")) < 0.25)) {
                // line 56
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_e.png"), "html", null, true);
                echo "\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 58
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            $context["rate"] = (($context["rate"] ?? $this->getContext($context, "rate")) - 1);
            // line 59
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<span style=\"height: 28px;display: inline-block;font-size: 30pt;font-weight: bold;padding-left: 20px;\">Rating : ";
        // line 63
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["rate_main"] ?? $this->getContext($context, "rate_main")), 1, ".", ","), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t`
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td width=\"50%\" align=\"right\" style=\"padding: 5px;\">
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
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td width=\"30px\" align=\"center\">";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ratings"] ?? $this->getContext($context, "ratings")), "rate_5", []), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t<td  align=\"left\" style=\"padding:10px\">
\t\t\t\t\t\t\t\t\t<span style=\"display:block;height:15px;background-color:black;border-radius: 12px;width:";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute(($context["values"] ?? $this->getContext($context, "values")), "rate_5", []), "html", null, true);
        echo "%\"></span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td width=\"50%\" align=\"right\" style=\"padding: 5px;\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_e.png"), "html", null, true);
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
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td width=\"30px\" align=\"center\">";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ratings"] ?? $this->getContext($context, "ratings")), "rate_4", []), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t<td  align=\"left\" style=\"padding:10px\">
\t\t\t\t\t\t\t\t\t<span style=\"display:block;height:15px;background-color:black;border-radius: 12px;width:";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute(($context["values"] ?? $this->getContext($context, "values")), "rate_4", []), "html", null, true);
        echo "%\"></span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td width=\"50%\" align=\"right\" style=\"padding: 5px;\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_e.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_e.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td width=\"30px\" align=\"center\">";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ratings"] ?? $this->getContext($context, "ratings")), "rate_3", []), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t<td  align=\"left\" style=\"padding:10px\">
\t\t\t\t\t\t\t\t\t<span style=\"display:block;height:15px;background-color:black;border-radius: 12px;width:";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute(($context["values"] ?? $this->getContext($context, "values")), "rate_3", []), "html", null, true);
        echo "%\"></span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td width=\"50%\" align=\"right\" style=\"padding: 5px;\">
\t\t\t\t\t\t\t\t\t
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_e.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td width=\"30px\" align=\"center\">";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ratings"] ?? $this->getContext($context, "ratings")), "rate_2", []), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t<td  align=\"left\" style=\"padding:10px\">
\t\t\t\t\t\t\t\t\t<span style=\"display:block;height:15px;background-color:black;border-radius: 12px;width:";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute(($context["values"] ?? $this->getContext($context, "values")), "rate_2", []), "html", null, true);
        echo "%\"></span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td width=\"50%\" align=\"right\" style=\"padding: 5px;\">
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_e.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
        echo "\" style=\"height:30px;width:30px\">
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td width=\"30px\" align=\"center\">";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ratings"] ?? $this->getContext($context, "ratings")), "rate_1", []), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t<td  align=\"left\" style=\"padding:10px\">
\t\t\t\t\t\t\t\t\t<span style=\"display:block;height:15px;background-color:black;border-radius: 12px;width:";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute(($context["values"] ?? $this->getContext($context, "values")), "rate_1", []), "html", null, true);
        echo "%\"></span>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["rate"]) {
            // line 137
            echo "\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<ul class=\"timeline timeline-simple\">
\t\t\t\t\t\t\t<li class=\"timeline-inverted\">
\t\t\t\t\t\t\t\t<div class=\"timeline-badge info\">
\t\t\t\t\t\t\t\t\t";
            // line 141
            if (($this->getAttribute($this->getAttribute($context["rate"], "user", []), "media", []) != null)) {
                // line 142
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["rate"], "user", []), "media", []), "type", []) == "link")) {
                    // line 143
                    echo "\t\t\t\t\t\t\t\t\t\t\t<img class=\"avatar-char palette-Red-400 bg\"  style=\"border-radius: 100px;    border: 0.5px solid #ccc;\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rate"], "user", []), "media", []), "url", []), "html", null, true);
                    echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 145
                    echo "\t\t\t\t\t\t\t\t\t\t\t<img class=\"avatar-char palette-Red-400 bg\"  style=\"border-radius: 100px;    border: 0.5px solid #ccc;\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["rate"], "user", []), "media", []), "link", [])), "actor_thumb"), "html", null, true);
                    echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 147
                echo "\t\t\t\t\t\t\t\t\t";
            } else {
                // line 148
                echo "\t\t\t\t\t\t\t\t\t\t<img class=\"avatar-char palette-Red-400 bg\"  style=\"border-radius: 100px;    border: 0.5px solid #ccc;\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar.jpg"), "actor_thumb"), "html", null, true);
                echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t";
            }
            // line 150
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t\t<div class=\"timeline-heading\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_user_edit", ["id" => $this->getAttribute($this->getAttribute($context["rate"], "user", []), "id", [])]), "html", null, true);
            echo "\" title=\"\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-danger\">";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["rate"], "user", []), "name", []), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"timeline-body\">
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t<div style=\"float: left;\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 160
            $context["rate_value"] = $this->getAttribute($context["rate"], "value", []);
            // line 161
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 162
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((($context["rate_value"] ?? $this->getContext($context, "rate_value")) >= 1)) {
                    // line 163
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
                    echo "\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 165
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (((($context["rate_value"] ?? $this->getContext($context, "rate_value")) >= 0.25) && (($context["rate_value"] ?? $this->getContext($context, "rate_value")) < 0.75))) {
                    // line 166
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_h.png"), "html", null, true);
                    echo "\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 168
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if (((($context["rate_value"] ?? $this->getContext($context, "rate_value")) >= 0.75) && (($context["rate_value"] ?? $this->getContext($context, "rate_value")) < 1))) {
                    // line 169
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star.png"), "html", null, true);
                    echo "\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 171
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ((($context["rate_value"] ?? $this->getContext($context, "rate_value")) < 0.25)) {
                    // line 172
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/star_e.png"), "html", null, true);
                    echo "\" style=\"height:50px;width:50px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 174
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
                $context["rate_value"] = (($context["rate_value"] ?? $this->getContext($context, "rate_value")) - 1);
                // line 175
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 176
            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span style=\"line-height: 50px;display: inline-block;font-size: 56pt;font-weight: bold;padding-left: 20px;\">";
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute($context["rate"], "value", []), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t<small class=\"pull-right label label-rose\">
\t\t\t\t\t\t\t\t\t<span>";
            // line 183
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
            // line 191
            echo "\t\t\t\t\t<div class=\"card\"  style=\"text-align: center;\" >
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<img src=\"";
            // line 194
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
        // line 199
        echo "\t\t\t</div>
\t\t\t<div class=\" pull-right\">
\t\t\t\t";
        // line 201
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
        return "AppBundle:Movie:ratings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  528 => 201,  524 => 199,  513 => 194,  508 => 191,  495 => 183,  486 => 177,  483 => 176,  477 => 175,  474 => 174,  468 => 172,  465 => 171,  459 => 169,  456 => 168,  450 => 166,  447 => 165,  441 => 163,  438 => 162,  433 => 161,  431 => 160,  422 => 154,  418 => 153,  413 => 150,  407 => 148,  404 => 147,  398 => 145,  392 => 143,  389 => 142,  387 => 141,  381 => 137,  376 => 136,  367 => 130,  362 => 128,  357 => 126,  353 => 125,  349 => 124,  345 => 123,  341 => 122,  333 => 117,  328 => 115,  323 => 113,  319 => 112,  315 => 111,  311 => 110,  307 => 109,  298 => 103,  293 => 101,  288 => 99,  284 => 98,  280 => 97,  276 => 96,  272 => 95,  264 => 90,  259 => 88,  254 => 86,  250 => 85,  246 => 84,  242 => 83,  238 => 82,  230 => 77,  225 => 75,  220 => 73,  216 => 72,  212 => 71,  208 => 70,  204 => 69,  195 => 63,  190 => 60,  184 => 59,  181 => 58,  175 => 56,  172 => 55,  166 => 53,  163 => 52,  157 => 50,  154 => 49,  148 => 47,  145 => 46,  141 => 45,  133 => 39,  130 => 38,  128 => 37,  115 => 29,  90 => 19,  84 => 16,  75 => 10,  71 => 9,  67 => 8,  60 => 3,  51 => 2,  29 => 1,);
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
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">remove_red_eye</i> {{movie.viewsnumber}} Views</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie pull-right\"><i class=\"material-icons\">share</i> {{movie.sharesnumber}} Shares</a>
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-movie pull-right\"><i class=\"material-icons\">cloud_download</i> {{movie.downloadsnumber}} Downloads</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-header \" data-background-color=\"green\">
\t\t\t\t\t\t<i class=\"material-icons\">movie_filter</i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-content trailer-body\">
\t\t\t\t\t\t<h4 class=\"title\">Ratings : {{movie.title }} </b></h4>
\t\t\t\t\t</div>
                  <div class=\"tab-moivie\">
                    <a href=\"{{path(\"app_movie_edit\",{\"id\":movie.id})}}\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">edit</i> Edit</a><a href=\"{{path(\"app_movie_sources\",{\"id\":movie.id})}}\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">folder</i> Sources</a><a href=\"{{path(\"app_movie_cast\",{\"id\":movie.id})}}\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">recent_actors</i> Cast</a><a href=\"{{path(\"app_movie_trailer\",{\"id\":movie.id})}}\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">movie_filter</i> Trailer</a><a href=\"{{path(\"app_movie_subtitles\",{\"id\":movie.id})}}\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">subtitles</i> Subtitles</a><a href=\"{{path(\"app_movie_comments\",{\"id\":movie.id})}}\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">comment</i> Comments</a><a href=\"{{path(\"app_movie_ratings\",{\"id\":movie.id})}}\" class=\"btn btn-tab-movie-active\"><i class=\"material-icons\">star_half</i> Ratings</a>
                  </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header card-header-icon\" data-background-color=\"rose\">
\t\t\t\t\t\t<i class=\"material-icons\">star_half</i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t<h4 class=\"card-title\">{{movie.title}}: {{count}} Ratings </h4>
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
{% endblock%}", "AppBundle:Movie:ratings.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Movie/ratings.html.twig");
    }
}
