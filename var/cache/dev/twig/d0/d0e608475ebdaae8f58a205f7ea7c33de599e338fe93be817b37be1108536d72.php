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

/* WebBundle:Actor:view.html.twig */
class __TwigTemplate_079795e4d8b2f38dc6890e1c65fcb9a9fb94d7800df434838355cb6646bdce19 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "WebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Actor:view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Actor:view.html.twig"));

        // line 2
        $context["subtitle"] = $this->getAttribute(($context["actor"] ?? $this->getContext($context, "actor")), "name", []);
        // line 3
        $context["og_description"] = $this->getAttribute(($context["actor"] ?? $this->getContext($context, "actor")), "bio", []);
        // line 4
        $context["og_type"] = "profile";
        // line 5
        $context["og_image"] = $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["actor"] ?? $this->getContext($context, "actor")), "media", []), "link", [])), "actor_thumb");
        // line 6
        $context["keywords"] = twig_replace_filter($this->getAttribute(($context["actor"] ?? $this->getContext($context, "actor")), "name", []), " ", ",");
        // line 1
        $this->parent = $this->loadTemplate("WebBundle::layout.html.twig", "WebBundle:Actor:view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["actor"] ?? $this->getContext($context, "actor")), "name", []), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<div class=\"row content-section\">
\t\t<div class=\"col-md-12\" >
\t\t\t<div class=\"actor-header-bg\" style=\" background-image: url('";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["actor"] ?? $this->getContext($context, "actor")), "media", []), "link", [])), "html", null, true);
        echo "');\">
\t\t\t\t<div class=\"movie-header actor-header\">
\t\t\t\t\t<div class=\"movie-title\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["actor"] ?? $this->getContext($context, "actor")), "name", []), "html", null, true);
        echo "</div>
\t\t\t\t\t<div class=\"movie-infos\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["actor"] ?? $this->getContext($context, "actor")), "type", []), "html", null, true);
        echo " • ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["actor"] ?? $this->getContext($context, "actor")), "born", []), "html", null, true);
        echo " • ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["actor"] ?? $this->getContext($context, "actor")), "height", []), "html", null, true);
        echo "</div>
\t\t\t\t</div>
\t\t\t\t<img class=\"actor-logo\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["actor"] ?? $this->getContext($context, "actor")), "media", []), "link", [])), "actor_thumb_web"), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-12 padding-top-20\" >
\t\t\t<div class=\"movie-section-title\">Biografia</div>
\t\t</div>
\t\t<div class=\"col-md-12\" >
\t\t\t<p>
\t\t\t\t";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["actor"] ?? $this->getContext($context, "actor")), "bio", []), "html", null, true);
        echo "
\t\t\t</p>
\t\t</div>
\t\t";
        // line 27
        if ((twig_length_filter($this->env, ($context["related_posters"] ?? $this->getContext($context, "related_posters"))) != 0)) {
            // line 28
            echo "\t\t\t<div class=\"col-md-12 padding-top-20\" >
\t\t\t\t<div class=\"movie-section-title\">Filmografia</div>
\t\t\t</div>
\t\t\t<div class=\"flix-carousel\" >
\t\t\t\t<button  class=\"prev_btn\"><i class=\"fa fa-chevron-left\"></i></button>
\t\t\t\t<button  class=\"next_btn\"><i class=\"fa fa-chevron-right\"></i></button>
\t\t\t\t<div class=\"flix-scroll-x\">
\t\t\t\t\t";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["related_posters"] ?? $this->getContext($context, "related_posters")));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["related_poster"]) {
                // line 36
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["related_poster"], "type", []) == "movie")) {
                    // line 37
                    echo "\t\t\t\t\t\t\t";
                    echo twig_include($this->env, $context, "WebBundle:Movie:movie.html.twig", ["poster" => $context["related_poster"]]);
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 39
                    echo "\t\t\t\t\t\t\t";
                    echo twig_include($this->env, $context, "WebBundle:Serie:serie.html.twig", ["poster" => $context["related_poster"]]);
                    echo "
\t\t\t\t\t\t";
                }
                // line 41
                echo "\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['related_poster'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 46
        echo "\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Actor:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 46,  186 => 42,  172 => 41,  166 => 39,  160 => 37,  157 => 36,  140 => 35,  131 => 28,  129 => 27,  123 => 24,  112 => 16,  103 => 14,  99 => 13,  94 => 11,  90 => 9,  81 => 8,  63 => 7,  52 => 1,  50 => 6,  48 => 5,  46 => 4,  44 => 3,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"WebBundle::layout.html.twig\" %}
{% set subtitle =  actor.name %}
{% set og_description =  actor.bio %}
{% set og_type =  \"profile\" %}
{% set og_image =  asset(actor.media.link)|imagine_filter('actor_thumb') %}
{% set keywords =  actor.name|replace(\" \",',') %}
{% block title %}{{actor.name}}{% endblock %}
{% block body %}
\t<div class=\"row content-section\">
\t\t<div class=\"col-md-12\" >
\t\t\t<div class=\"actor-header-bg\" style=\" background-image: url('{{asset(actor.media.link)}}');\">
\t\t\t\t<div class=\"movie-header actor-header\">
\t\t\t\t\t<div class=\"movie-title\">{{actor.name}}</div>
\t\t\t\t\t<div class=\"movie-infos\">{{actor.type}} • {{actor.born}} • {{actor.height}}</div>
\t\t\t\t</div>
\t\t\t\t<img class=\"actor-logo\" src=\"{{asset(actor.media.link)|imagine_filter('actor_thumb_web')}}\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-12 padding-top-20\" >
\t\t\t<div class=\"movie-section-title\">Biografia</div>
\t\t</div>
\t\t<div class=\"col-md-12\" >
\t\t\t<p>
\t\t\t\t{{actor.bio}}
\t\t\t</p>
\t\t</div>
\t\t{% if related_posters|length != 0 %}
\t\t\t<div class=\"col-md-12 padding-top-20\" >
\t\t\t\t<div class=\"movie-section-title\">Filmografia</div>
\t\t\t</div>
\t\t\t<div class=\"flix-carousel\" >
\t\t\t\t<button  class=\"prev_btn\"><i class=\"fa fa-chevron-left\"></i></button>
\t\t\t\t<button  class=\"next_btn\"><i class=\"fa fa-chevron-right\"></i></button>
\t\t\t\t<div class=\"flix-scroll-x\">
\t\t\t\t\t{% for related_poster in related_posters %}
\t\t\t\t\t\t{% if related_poster.type == \"movie\" %}
\t\t\t\t\t\t\t{{ include('WebBundle:Movie:movie.html.twig',{poster:related_poster}) }}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{{ include('WebBundle:Serie:serie.html.twig',{poster:related_poster}) }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}
\t</div>
{% endblock %}", "WebBundle:Actor:view.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Actor/view.html.twig");
    }
}
