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

/* WebBundle:Serie:episodes.html.twig */
class __TwigTemplate_53b32ac08954aaf47ec5519a24ebceac49700690e1716ec94387eb8dee7e9252 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Serie:episodes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Serie:episodes.html.twig"));

        // line 1
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["episodes"] ?? $this->getContext($context, "episodes")));
        foreach ($context['_seq'] as $context["_key"] => $context["episode"]) {
            // line 2
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_player_pre_episode", ["id" => $this->getAttribute($context["episode"], "id", []), "slug" => $this->getAttribute($context["episode"], "slug", [])]), "html", null, true);
            echo "\" class=\"episode\" >
\t\t\t\t<img src=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((($this->getAttribute($context["episode"], "media", []) != null)) ? ($this->getAttribute($this->getAttribute($context["episode"], "media", []), "link", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["episode"], "season", []), "poster", []), "poster", []), "link", [])))), "episode_thumb"), "html", null, true);
            echo "\"/>
\t\t\t\t<div class=\"episode-detail\">
\t\t\t\t\t<span>
\t\t\t\t\t\t<h4>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "title", []), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t<p>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "description", []), "html", null, true);
            echo "</p>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t\t<button class=\"btn episode-btn btn-sm episode-subtitles\" data-id=";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "id", []), "html", null, true);
            echo " data-title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["episode"], "season", []), "poster", []), "title", []), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["episode"], "season", []), "title", []), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "title", []), "html", null, true);
            echo "\"  ><span class=\"fa fa-cc\"></span></button>
\t\t\t\t<button class=\"btn episode-btn btn-sm episode-download\" data-id=";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "id", []), "html", null, true);
            echo " data-title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["episode"], "season", []), "poster", []), "title", []), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["episode"], "season", []), "title", []), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["episode"], "title", []), "html", null, true);
            echo "\"  ><span class=\"fa fa-download\"></span></button>
\t\t\t</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['episode'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Serie:episodes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 11,  62 => 10,  56 => 7,  52 => 6,  46 => 3,  41 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("\t\t{% for episode in episodes %}
\t\t\t<a href=\"{{path(\"wep_player_pre_episode\",{id:episode.id,slug:episode.slug})}}\" class=\"episode\" >
\t\t\t\t<img src=\"{{asset((episode.media != null)? episode.media.link:episode.season.poster.poster.link )|imagine_filter('episode_thumb')}}\"/>
\t\t\t\t<div class=\"episode-detail\">
\t\t\t\t\t<span>
\t\t\t\t\t\t<h4>{{episode.title}}</h4>
\t\t\t\t\t\t<p>{{episode.description}}</p>
\t\t\t\t\t</span>
\t\t\t\t</div>
\t\t\t\t<button class=\"btn episode-btn btn-sm episode-subtitles\" data-id={{episode.id}} data-title=\"{{episode.season.poster.title}} - {{episode.season.title}} - {{episode.title}}\"  ><span class=\"fa fa-cc\"></span></button>
\t\t\t\t<button class=\"btn episode-btn btn-sm episode-download\" data-id={{episode.id}} data-title=\"{{episode.season.poster.title}} - {{episode.season.title}} - {{episode.title}}\"  ><span class=\"fa fa-download\"></span></button>
\t\t\t</a>
\t\t{% endfor %}
", "WebBundle:Serie:episodes.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Serie/episodes.html.twig");
    }
}
