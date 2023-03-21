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

/* AppBundle:Movie:cast.html.twig */
class __TwigTemplate_4e1b87f148ff71fd015a87985965030151582b5d51857aa5ed19422e951957c5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Movie:cast.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Movie:cast.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Movie:cast.html.twig", 1);
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
\t\t\t\t\t\t<h4 class=\"title\">Cast : ";
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
        echo "\" class=\"btn btn-tab-movie-active\"><i class=\"material-icons\">recent_actors</i> Cast</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_movie_trailer", ["id" => $this->getAttribute(($context["movie"] ?? $this->getContext($context, "movie")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">movie_filter</i> Trailer</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_movie_subtitles", ["id" => $this->getAttribute(($context["movie"] ?? $this->getContext($context, "movie")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">subtitles</i> Subtitles</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_movie_comments", ["id" => $this->getAttribute(($context["movie"] ?? $this->getContext($context, "movie")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">comment</i> Comments</a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_movie_ratings", ["id" => $this->getAttribute(($context["movie"] ?? $this->getContext($context, "movie")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">star_half</i> Ratings</a>
                  </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header card-header-icon\" data-background-color=\"rose\">
\t\t\t\t\t\t<i class=\"material-icons\">recent_actors</i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t<h4 class=\"card-title\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["movie"] ?? $this->getContext($context, "movie")), "title", []), "html", null, true);
        echo " Cast</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<div class=\"card card-profile card-initial\">
\t\t\t\t\t\t\t<div class=\"card-avatar\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img class=\"img\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/add.png"), "actor_thumb"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["role_form"] ?? $this->getContext($context, "role_form")), 'form_start');
        echo "
\t\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["role_form"] ?? $this->getContext($context, "role_form")), "role", []), 'widget', ["attr" => ["class" => "form-control form-control-role", "placeholder" => "Role"]]);
        echo "
\t\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["role_form"] ?? $this->getContext($context, "role_form")), "role", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t\t";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["role_form"] ?? $this->getContext($context, "role_form")), "actor", []), 'widget', ["attr" => ["class" => "form-control form-control-role", "placeholder" => "Actor/Director"]]);
        echo "
\t\t\t\t\t\t\t\t\t<span class=\"validate-input\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["role_form"] ?? $this->getContext($context, "role_form")), "actor", []), 'errors');
        echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span>";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["role_form"] ?? $this->getContext($context, "role_form")), "save", []), 'widget', ["attr" => ["class" => "btn btn-success btn-xs form-control-role"]]);
        echo "</span>
\t\t\t\t\t\t\t\t";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["role_form"] ?? $this->getContext($context, "role_form")), 'form_end');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\$(\"#Role_actor\").selectize();
\t\t\t\t\t</script>
\t\t\t\t\t";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 59
            echo "\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"card card-profile card-initial\">
\t\t\t\t\t\t\t\t<div class=\"card-avatar\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img\" src=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["role"], "actor", []), "media", []), "link", [])), "actor_thumb"), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\"><b>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["role"], "actor", []), "name", []), "html", null, true);
            echo "</b></h5>
\t\t\t\t\t\t\t\t\t<h5 class=\"card-sub-title\" style=\"color:gray\"><b>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "role", []), "html", null, true);
            echo "</b></h5>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_role_edit", ["id" => $this->getAttribute($context["role"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-success btn-xs\"><i class=\"material-icons\">edit</i></a>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_role_delete", ["id" => $this->getAttribute($context["role"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-rose btn-xs\"><i class=\"material-icons\">delete</i></a>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_role_up", ["id" => $this->getAttribute($context["role"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-info btn-xs\"><i class=\"material-icons\">keyboard_arrow_up</i></a>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_role_down", ["id" => $this->getAttribute($context["role"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-info btn-xs\"><i class=\"material-icons\">keyboard_arrow_down</i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\" pull-right\">
\t\t\t\t\t\t";
        // line 79
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
\t\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Movie:cast.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 79,  219 => 77,  208 => 72,  204 => 71,  200 => 70,  196 => 69,  192 => 68,  188 => 67,  181 => 63,  175 => 59,  171 => 58,  161 => 51,  157 => 50,  152 => 48,  148 => 47,  142 => 44,  138 => 43,  133 => 41,  126 => 37,  115 => 29,  90 => 19,  84 => 16,  75 => 10,  71 => 9,  67 => 8,  60 => 3,  51 => 2,  29 => 1,);
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
\t\t\t\t\t\t<h4 class=\"title\">Cast : {{movie.title }} </b></h4>
\t\t\t\t\t</div>
                  <div class=\"tab-moivie\">
                    <a href=\"{{path(\"app_movie_edit\",{\"id\":movie.id})}}\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">edit</i> Edit</a><a href=\"{{path(\"app_movie_sources\",{\"id\":movie.id})}}\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">folder</i> Sources</a><a href=\"{{path(\"app_movie_cast\",{\"id\":movie.id})}}\" class=\"btn btn-tab-movie-active\"><i class=\"material-icons\">recent_actors</i> Cast</a><a href=\"{{path(\"app_movie_trailer\",{\"id\":movie.id})}}\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">movie_filter</i> Trailer</a><a href=\"{{path(\"app_movie_subtitles\",{\"id\":movie.id})}}\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">subtitles</i> Subtitles</a><a href=\"{{path(\"app_movie_comments\",{\"id\":movie.id})}}\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">comment</i> Comments</a><a href=\"{{path(\"app_movie_ratings\",{\"id\":movie.id})}}\" class=\"btn btn-tab-movie\"><i class=\"material-icons\">star_half</i> Ratings</a>
                  </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header card-header-icon\" data-background-color=\"rose\">
\t\t\t\t\t\t<i class=\"material-icons\">recent_actors</i>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t<h4 class=\"card-title\">{{movie.title}} Cast</h4>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t<div class=\"card card-profile card-initial\">
\t\t\t\t\t\t\t<div class=\"card-avatar\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<img class=\"img\" src=\"{{asset(\"img/add.png\")|imagine_filter('actor_thumb')}}\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t{{form_start(role_form)}}
\t\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t\t{{form_widget(role_form.role,{\"attr\":{\"class\":\"form-control form-control-role\",\"placeholder\":\"Role\"}})}}
\t\t\t\t\t\t\t\t\t<span class=\"validate-input\">{{form_errors(role_form.role)}}</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t\t\t\t{{form_widget(role_form.actor,{\"attr\":{\"class\":\"form-control form-control-role\",\"placeholder\":\"Actor/Director\"}})}}
\t\t\t\t\t\t\t\t\t<span class=\"validate-input\">{{form_errors(role_form.actor)}}</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span>{{form_widget(role_form.save,{attr:{\"class\":\"btn btn-success btn-xs form-control-role\"}})}}</span>
\t\t\t\t\t\t\t\t{{form_end(role_form)}}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\$(\"#Role_actor\").selectize();
\t\t\t\t\t</script>
\t\t\t\t\t{% for role in pagination %}
\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t<div class=\"card card-profile card-initial\">
\t\t\t\t\t\t\t\t<div class=\"card-avatar\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img\" src=\"{{asset(role.actor.media.link)|imagine_filter('actor_thumb')}}\">
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t\t<h5 class=\"card-title\"><b>{{role.actor.name}}</b></h5>
\t\t\t\t\t\t\t\t\t<h5 class=\"card-sub-title\" style=\"color:gray\"><b>{{role.role}}</b></h5>
\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"app_role_edit\",{\"id\":role.id})}}\" class=\"btn btn-success btn-xs\"><i class=\"material-icons\">edit</i></a>
\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"app_role_delete\",{\"id\":role.id})}}\" class=\"btn btn-rose btn-xs\"><i class=\"material-icons\">delete</i></a>
\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"app_role_up\",{\"id\":role.id})}}\" class=\"btn btn-info btn-xs\"><i class=\"material-icons\">keyboard_arrow_up</i></a>
\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"app_role_down\",{\"id\":role.id})}}\" class=\"btn btn-info btn-xs\"><i class=\"material-icons\">keyboard_arrow_down</i></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\" pull-right\">
\t\t\t\t\t\t{{ knp_pagination_render(pagination) }}
\t\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock%}", "AppBundle:Movie:cast.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Movie/cast.html.twig");
    }
}
