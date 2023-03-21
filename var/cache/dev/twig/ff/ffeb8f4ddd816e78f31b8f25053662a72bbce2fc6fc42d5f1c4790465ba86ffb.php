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

/* AppBundle:Serie:seasons.html.twig */
class __TwigTemplate_70f5cf25afa6417bb59689c7d14882211c84f35d02be6f3379f7e52fbdc88ba2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Serie:seasons.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Serie:seasons.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Serie:seasons.html.twig", 1);
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
\t\t\t\t\t\t<h4 class=\"title\">Seasons : ";
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
        echo "\" class=\"btn btn-tab-movie-active\"><i class=\"material-icons\">dynamic_feed</i> SEASONS</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_serie_comments", ["id" => $this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">comment</i> Comments</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_serie_ratings", ["id" => $this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">star_half</i> Ratings</a>
                    </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header card-header-icon\" data-background-color=\"rose\">
\t\t\t\t\t\t<i class=\"material-icons\">dynamic_feed</i>
\t\t\t\t\t</div>
\t\t\t\t\t<a  href=\"#\" class=\"btn  btn-xs btn-success pull-right new-subtitle-source\" id=\"new_season_btn\"><i class=\"material-icons\" style=\"font-size: 30px;\">add_box</i> New Season</a>
\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t<h4 class=\"card-title\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "title", []), "html", null, true);
        echo " Seasons</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 33
        if ((twig_length_filter($this->env, $this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "seasons", [])) > 0)) {
            // line 34
            echo "\t\t\t<div class=\"col-md-12\">
\t\t\t\t<form>

\t\t\t\t<select class=\"form-control pull-right\" name=\"season\" onchange=\"this.form.submit()\">
\t\t\t\t";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "seasons", []));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 39
                echo "\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", []), "html", null, true);
                echo "\"  ";
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "season"], "method") == $this->getAttribute($context["s"], "id", []))) {
                    echo " selected ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "title", []), "html", null, true);
                echo "</option>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t\t\t\t\t\t\t\t  

\t\t\t\t</select>
\t\t\t\t</form>
\t\t\t\t<br>
\t\t\t\t<br>
\t\t\t</div>
\t\t\t ";
        }
        // line 49
        echo "\t\t\t<div class=\"col-md-12\" id=\"new_season_dialog\" style=\"display:none\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["season_form"] ?? $this->getContext($context, "season_form")), 'form_start');
        echo "
\t\t\t\t\t<div class=\"card-header card-header-icon\" data-background-color=\"rose\">
\t\t\t\t\t\t<i class=\"material-icons\">add</i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t<h4 class=\"card-title\">Add new season</h4>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t<label class=\"control-label\">Season title</label>
\t\t\t\t\t\t\t";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["season_form"] ?? $this->getContext($context, "season_form")), "title", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["season_form"] ?? $this->getContext($context, "season_form")), "title", []), 'errors');
        echo "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"pull-right\"><a href=\"#\" id=\"new_season_btn_close\" class=\"btn btn-fill btn-info\"><i class=\"material-icons\">arrow_back</i> Cancel</a>";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["season_form"] ?? $this->getContext($context, "season_form")), "save", []), 'widget', ["attr" => ["class" => "btn btn-fill btn-success"]]);
        echo "</span>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["season_form"] ?? $this->getContext($context, "season_form")), 'form_end');
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t";
        // line 68
        if ((twig_length_filter($this->env, $this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "seasons", [])) > 0)) {
            // line 69
            echo "
\t\t\t\t\t";
            // line 70
            $context["season"] = $this->getAttribute($this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "seasons", []), 0, [], "array");
            // line 71
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["serie"] ?? $this->getContext($context, "serie")), "seasons", []));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 72
                echo "\t\t\t\t\t   ";
                if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "season"], "method") == $this->getAttribute($context["s"], "id", []))) {
                    // line 73
                    echo "\t\t\t\t\t\t\t";
                    $context["season"] = $context["s"];
                    // line 74
                    echo "\t\t\t\t\t   ";
                }
                // line 75
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "
\t\t\t\t";
            // line 77
            if ((($context["season"] ?? $this->getContext($context, "season")) != null)) {
                // line 78
                echo "\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"card card-initial\">
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-season\"><i class=\"material-icons\">dynamic_feed</i> ";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute(($context["season"] ?? $this->getContext($context, "season")), "title", []), "html", null, true);
                echo "</a>
\t\t\t\t\t\t<a href=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_season_edit", ["id" => $this->getAttribute(($context["season"] ?? $this->getContext($context, "season")), "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-primary  btn-xs btn-tab-season-action pull-right\"><i class=\"material-icons\">edit</i></a>
\t\t\t\t\t\t<a href=\"";
                // line 82
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_season_delete", ["id" => $this->getAttribute(($context["season"] ?? $this->getContext($context, "season")), "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-danger  btn-xs btn-tab-season-action pull-right\"><i class=\"material-icons\">delete</i></a>
\t\t\t\t\t\t<a href=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_season_up", ["id" => $this->getAttribute(($context["season"] ?? $this->getContext($context, "season")), "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-info btn-xs btn-tab-season-action pull-right\"><i class=\"material-icons\">keyboard_arrow_up</i></a>
\t\t\t\t\t\t<a href=\"";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_season_down", ["id" => $this->getAttribute(($context["season"] ?? $this->getContext($context, "season")), "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-info btn-xs btn-tab-season-action pull-right\"><i class=\"material-icons\">keyboard_arrow_down</i></a>
\t\t\t\t\t\t<a href=\"";
                // line 85
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_episode_add", ["id" => $this->getAttribute(($context["season"] ?? $this->getContext($context, "season")), "id", [])]), "html", null, true);
                echo "\" class=\"btn btn-success btn-xs btn-tab-season-action pull-right\"><i class=\"material-icons\">add</i>New Episode</a>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"episodes-contrainer \">
\t\t\t\t\t\t\t<div class=\"episodes-list\">
\t\t\t\t\t\t\t\t";
                // line 89
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["season"] ?? $this->getContext($context, "season")), "episodes", []));
                foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
                    // line 90
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"card card-episode\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 91
                    if (($this->getAttribute($context["episode"], "media", []) == null)) {
                        // line 92
                        echo "\t\t\t\t\t\t\t\t\t\t\t<img class=\"img\" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["season"] ?? $this->getContext($context, "season")), "poster", []), "poster", []), "link", [])), "actor_thumb"), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 94
                        echo "\t\t\t\t\t\t\t\t\t\t\t<img class=\"img\" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["episode"], "media", []), "link", [])), "actor_thumb"), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 96
                    echo "\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<h4>";
                    // line 97
                    echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "title", []), "html", null, true);
                    echo "</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>";
                    // line 98
                    echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "description", []), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 100
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_episode_edit", ["id" => $this->getAttribute($context["episode"], "id", [])]), "html", null, true);
                    echo "\" class=\"btn  btn-xs btn-success pull-right\"><i class=\"material-icons\">edit</i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 101
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_episode_delete", ["id" => $this->getAttribute($context["episode"], "id", [])]), "html", null, true);
                    echo "\" class=\"btn  btn-xs btn-danger pull-right\"><i class=\"material-icons\">delete</i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 102
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_episode_down", ["id" => $this->getAttribute($context["episode"], "id", [])]), "html", null, true);
                    echo "\" class=\"btn  btn-xs btn-info pull-right\"><i class=\"material-icons\">keyboard_arrow_down</i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 103
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_episode_up", ["id" => $this->getAttribute($context["episode"], "id", [])]), "html", null, true);
                    echo "\" class=\"btn  btn-xs btn-info pull-right\"><i class=\"material-icons\">keyboard_arrow_up</i></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 113
            echo "\t\t\t\t";
        }
        // line 114
        echo "\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Serie:seasons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 114,  319 => 113,  312 => 108,  301 => 103,  297 => 102,  293 => 101,  289 => 100,  284 => 98,  280 => 97,  277 => 96,  271 => 94,  265 => 92,  263 => 91,  260 => 90,  256 => 89,  249 => 85,  245 => 84,  241 => 83,  237 => 82,  233 => 81,  229 => 80,  225 => 78,  223 => 77,  220 => 76,  214 => 75,  211 => 74,  208 => 73,  205 => 72,  200 => 71,  198 => 70,  195 => 69,  193 => 68,  187 => 65,  182 => 63,  177 => 61,  173 => 60,  161 => 51,  157 => 49,  147 => 41,  132 => 39,  128 => 38,  122 => 34,  120 => 33,  113 => 29,  89 => 18,  84 => 16,  75 => 10,  71 => 9,  67 => 8,  60 => 3,  51 => 2,  29 => 1,);
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
\t\t\t\t\t\t<h4 class=\"title\">Seasons : {{serie.title }} </b></h4>
\t\t\t\t\t</div>
                    <div class=\"tab-moivie tab-series\"><a href=\"{{path(\"app_serie_edit\",{\"id\":serie.id})}}\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">edit</i> Edit</a><a href=\"{{path(\"app_serie_cast\",{\"id\":serie.id})}}\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">recent_actors</i> Cast</a><a href=\"{{path(\"app_serie_trailer\",{\"id\":serie.id})}}\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">movie_filter</i> Trailer</a><a href=\"{{path(\"app_serie_seasons\",{\"id\":serie.id})}}\" class=\"btn btn-tab-movie-active\"><i class=\"material-icons\">dynamic_feed</i> SEASONS</a><a href=\"{{path(\"app_serie_comments\",{\"id\":serie.id})}}\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">comment</i> Comments</a><a href=\"{{path(\"app_serie_ratings\",{\"id\":serie.id})}}\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">star_half</i> Ratings</a>
                    </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header card-header-icon\" data-background-color=\"rose\">
\t\t\t\t\t\t<i class=\"material-icons\">dynamic_feed</i>
\t\t\t\t\t</div>
\t\t\t\t\t<a  href=\"#\" class=\"btn  btn-xs btn-success pull-right new-subtitle-source\" id=\"new_season_btn\"><i class=\"material-icons\" style=\"font-size: 30px;\">add_box</i> New Season</a>
\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t<h4 class=\"card-title\">{{serie.title}} Seasons</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% if serie.seasons|length > 0 %}
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<form>

\t\t\t\t<select class=\"form-control pull-right\" name=\"season\" onchange=\"this.form.submit()\">
\t\t\t\t{% for s in serie.seasons %}
\t\t\t\t\t<option value=\"{{s.id}}\"  {% if app.request.get(\"season\") == s.id %} selected {% endif %}>{{s.title}}</option>
\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t  

\t\t\t\t</select>
\t\t\t\t</form>
\t\t\t\t<br>
\t\t\t\t<br>
\t\t\t</div>
\t\t\t {% endif %}
\t\t\t<div class=\"col-md-12\" id=\"new_season_dialog\" style=\"display:none\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t{{form_start(season_form)}}
\t\t\t\t\t<div class=\"card-header card-header-icon\" data-background-color=\"rose\">
\t\t\t\t\t\t<i class=\"material-icons\">add</i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t<h4 class=\"card-title\">Add new season</h4>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t<label class=\"control-label\">Season title</label>
\t\t\t\t\t\t\t{{form_widget(season_form.title,{\"attr\":{\"class\":\"form-control\"}})}}
\t\t\t\t\t\t\t<span class=\"validate-input\">{{form_errors(season_form.title)}}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"pull-right\"><a href=\"#\" id=\"new_season_btn_close\" class=\"btn btn-fill btn-info\"><i class=\"material-icons\">arrow_back</i> Cancel</a>{{form_widget(season_form.save,{attr:{\"class\":\"btn btn-fill btn-success\"}})}}</span>
\t\t\t\t\t</div>
\t\t\t\t\t{{form_end(season_form)}}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t{% if serie.seasons|length > 0 %}

\t\t\t\t\t{% set season = serie.seasons[0] %}
\t\t\t\t\t{% for s in serie.seasons %}
\t\t\t\t\t   {% if app.request.get(\"season\") == s.id %}
\t\t\t\t\t\t\t{% set season = s %}
\t\t\t\t\t   {% endif %}
\t\t\t\t\t{% endfor %}

\t\t\t\t{% if season != null %}
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"card card-initial\">
\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-tab-season\"><i class=\"material-icons\">dynamic_feed</i> {{season.title}}</a>
\t\t\t\t\t\t<a href=\"{{path(\"app_season_edit\",{\"id\":season.id})}}\" class=\"btn btn-primary  btn-xs btn-tab-season-action pull-right\"><i class=\"material-icons\">edit</i></a>
\t\t\t\t\t\t<a href=\"{{path(\"app_season_delete\",{\"id\":season.id})}}\" class=\"btn btn-danger  btn-xs btn-tab-season-action pull-right\"><i class=\"material-icons\">delete</i></a>
\t\t\t\t\t\t<a href=\"{{path(\"app_season_up\",{\"id\":season.id})}}\" class=\"btn btn-info btn-xs btn-tab-season-action pull-right\"><i class=\"material-icons\">keyboard_arrow_up</i></a>
\t\t\t\t\t\t<a href=\"{{path(\"app_season_down\",{\"id\":season.id})}}\" class=\"btn btn-info btn-xs btn-tab-season-action pull-right\"><i class=\"material-icons\">keyboard_arrow_down</i></a>
\t\t\t\t\t\t<a href=\"{{path(\"app_episode_add\",{\"id\":season.id})}}\" class=\"btn btn-success btn-xs btn-tab-season-action pull-right\"><i class=\"material-icons\">add</i>New Episode</a>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<div class=\"episodes-contrainer \">
\t\t\t\t\t\t\t<div class=\"episodes-list\">
\t\t\t\t\t\t\t\t{% for episode in season.episodes %}
\t\t\t\t\t\t\t\t\t<div class=\"card card-episode\">
\t\t\t\t\t\t\t\t\t\t{% if episode.media == null %}
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img\" src=\"{{asset(season.poster.poster.link)|imagine_filter('actor_thumb')}}\">
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img\" src=\"{{asset(episode.media.link)|imagine_filter('actor_thumb')}}\">
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<h4>{{episode.title}}</h4>
\t\t\t\t\t\t\t\t\t\t\t<p>{{episode.description}}</p>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"app_episode_edit\",{\"id\":episode.id})}}\" class=\"btn  btn-xs btn-success pull-right\"><i class=\"material-icons\">edit</i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"app_episode_delete\",{\"id\":episode.id})}}\" class=\"btn  btn-xs btn-danger pull-right\"><i class=\"material-icons\">delete</i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"app_episode_down\",{\"id\":episode.id})}}\" class=\"btn  btn-xs btn-info pull-right\"><i class=\"material-icons\">keyboard_arrow_down</i></a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"app_episode_up\",{\"id\":episode.id})}}\" class=\"btn  btn-xs btn-info pull-right\"><i class=\"material-icons\">keyboard_arrow_up</i></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t{% endif %}
\t\t</div>
\t</div>
{% endblock%}", "AppBundle:Serie:seasons.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Serie/seasons.html.twig");
    }
}
