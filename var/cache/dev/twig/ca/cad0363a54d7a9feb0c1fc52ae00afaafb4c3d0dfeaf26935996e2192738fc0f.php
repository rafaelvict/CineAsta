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

/* WebBundle:Home:search.html.twig */
class __TwigTemplate_a9540a4d23f074c5989a2dbbabfd40103957e0e297e3742479d487346ccaa327 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Home:search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Home:search.html.twig"));

        // line 2
        $context["subtitle"] = (("Busca '" . $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "q"], "method")) . "'");
        // line 3
        $context["og_description"] = (("Pesquisar '" . $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "q"], "method")) . "'");
        // line 4
        $context["og_type"] = "null";
        // line 5
        $context["og_image"] = "null";
        // line 6
        $context["keywords"] = "null";
        // line 1
        $this->parent = $this->loadTemplate("WebBundle::layout.html.twig", "WebBundle:Home:search.html.twig", 1);
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

        echo " Busca : \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "get", [0 => "q"], "method"), "html", null, true);
        echo "\"";
        
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
        echo "
\t<div class=\"row content-section\">Pesquisar
\t\t\t";
        // line 11
        if ((twig_length_filter($this->env, ($context["actors"] ?? $this->getContext($context, "actors"))) != 0)) {
            // line 12
            echo "
\t\t\t<div class=\"col-sm-12 col-md-12 \">
\t\t\t\t<a href=\"\" class=\"title-more\">
\t\t\t\t\t<span>Elenco</span>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"flix-carousel\" >
\t\t\t\t<button  class=\"prev_btn\"><i class=\"fa fa-chevron-left\"></i></button>
\t\t\t\t<button  class=\"next_btn\"><i class=\"fa fa-chevron-right\"></i></button>
\t\t\t\t<div class=\"flix-scroll-x\">
\t\t\t\t\t";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["actors"] ?? $this->getContext($context, "actors")));
            foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
                // line 23
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_actor_view", ["id" => $this->getAttribute($context["actor"], "id", []), "slug" => $this->getAttribute($context["actor"], "slug", [])]), "html", null, true);
                echo "\" class=\"col-sm-1 col-md-1 actor\" >
\t\t\t\t\t\t\t<img src=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["actor"], "media", []), "link", [])), "actor_thumb_mini_web"), "html", null, true);
                echo "\"/>
\t\t\t\t\t\t\t<span>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["actor"], "name", []), "html", null, true);
                echo "</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 31
        echo "
\t\t\t";
        // line 32
        if ((twig_length_filter($this->env, ($context["channels"] ?? $this->getContext($context, "channels"))) != 0)) {
            // line 33
            echo "\t\t\t
\t\t\t
\t\t\t";
        }
        // line 36
        echo "\t\t\t";
        if ((twig_length_filter($this->env, ($context["posters"] ?? $this->getContext($context, "posters"))) > 0)) {
            // line 37
            echo "\t\t\t\t<div class=\"col-sm-12 col-md-12 \">
\t\t\t\t\t<a class=\"title-more\">
\t\t\t\t\t\t<span>Filmes / Series</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["posters"] ?? $this->getContext($context, "posters")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["poster"]) {
                // line 43
                echo "\t\t\t\t\t";
                if (($this->getAttribute($context["poster"], "type", []) == "movie")) {
                    // line 44
                    echo "\t\t\t\t\t\t";
                    echo twig_include($this->env, $context, "WebBundle:Movie:movie.html.twig", ["poster" => $context["poster"], "class" => "col-4 col-md-2 col-xxl-2"]);
                    echo "
\t\t\t\t\t";
                } else {
                    // line 46
                    echo "\t\t\t\t\t\t";
                    echo twig_include($this->env, $context, "WebBundle:Serie:serie.html.twig", ["poster" => $context["poster"], "class" => "col-4 col-md-2 col-xxl-2"]);
                    echo "
\t\t\t\t\t";
                }
                // line 48
                echo "\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poster'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "\t\t\t\t<div class=\"filter-section\">
\t\t\t\t\t<div class=\" float-right\">
\t\t\t\t\t\t";
            // line 51
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["posters"] ?? $this->getContext($context, "posters")));
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t";
        }
        // line 55
        echo "\t\t";
        if ((((twig_length_filter($this->env, ($context["posters"] ?? $this->getContext($context, "posters"))) == 0) && (twig_length_filter($this->env, ($context["channels"] ?? $this->getContext($context, "channels"))) == 0)) && (twig_length_filter($this->env, ($context["actors"] ?? $this->getContext($context, "actors"))) == 0))) {
            // line 56
            echo "\t\t<div class=\"empty-box\">
\t\t\t<img src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("web/img/empty.svg"), "html", null, true);
            echo "\">
\t\t\t<h3>Lista vazia</h3>
\t\t\t<p>comece a adicionar algum conteúdo à sua lista</p>
\t\t</div>
\t\t";
        }
        // line 62
        echo "\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Home:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 62,  220 => 57,  217 => 56,  214 => 55,  207 => 51,  203 => 49,  189 => 48,  183 => 46,  177 => 44,  174 => 43,  157 => 42,  150 => 37,  147 => 36,  142 => 33,  140 => 32,  137 => 31,  132 => 28,  123 => 25,  119 => 24,  114 => 23,  110 => 22,  98 => 12,  96 => 11,  92 => 9,  83 => 8,  63 => 7,  52 => 1,  50 => 6,  48 => 5,  46 => 4,  44 => 3,  42 => 2,  30 => 1,);
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
{% set subtitle =  \"Busca '\" ~ app.request.get(\"q\")~  \"'\" %}
{% set og_description =  \"Pesquisar '\" ~ app.request.get(\"q\")~  \"'\"  %}
{% set og_type =  \"null\" %}
{% set og_image =  \"null\" %}
{% set keywords =  \"null\" %}
{% block title %} Busca : \"{{app.request.get(\"q\")}}\"{% endblock %}
{% block body %}

\t<div class=\"row content-section\">Pesquisar
\t\t\t{% if actors|length != 0 %}

\t\t\t<div class=\"col-sm-12 col-md-12 \">
\t\t\t\t<a href=\"\" class=\"title-more\">
\t\t\t\t\t<span>Elenco</span>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"flix-carousel\" >
\t\t\t\t<button  class=\"prev_btn\"><i class=\"fa fa-chevron-left\"></i></button>
\t\t\t\t<button  class=\"next_btn\"><i class=\"fa fa-chevron-right\"></i></button>
\t\t\t\t<div class=\"flix-scroll-x\">
\t\t\t\t\t{% for actor in actors %}
\t\t\t\t\t\t<a href=\"{{path(\"wep_actor_view\",{\"id\":actor.id,\"slug\":actor.slug})}}\" class=\"col-sm-1 col-md-1 actor\" >
\t\t\t\t\t\t\t<img src=\"{{asset( actor.media.link)|imagine_filter('actor_thumb_mini_web')}}\"/>
\t\t\t\t\t\t\t<span>{{actor.name}}</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% endif %}

\t\t\t{% if channels|length != 0 %}
\t\t\t
\t\t\t
\t\t\t{% endif %}
\t\t\t{% if posters|length >  0 %}
\t\t\t\t<div class=\"col-sm-12 col-md-12 \">
\t\t\t\t\t<a class=\"title-more\">
\t\t\t\t\t\t<span>Filmes / Series</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t{% for poster in posters %}
\t\t\t\t\t{% if poster.type == \"movie\" %}
\t\t\t\t\t\t{{ include('WebBundle:Movie:movie.html.twig',{poster:poster,class:\"col-4 col-md-2 col-xxl-2\"}) }}
\t\t\t\t\t{% else %}
\t\t\t\t\t\t{{ include('WebBundle:Serie:serie.html.twig',{poster:poster,class:\"col-4 col-md-2 col-xxl-2\"}) }}
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t\t<div class=\"filter-section\">
\t\t\t\t\t<div class=\" float-right\">
\t\t\t\t\t\t{{ knp_pagination_render(posters) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t{% endif %}
\t\t{% if posters|length ==  0  and channels|length == 0  and actors|length == 0 %}
\t\t<div class=\"empty-box\">
\t\t\t<img src=\"{{asset('web/img/empty.svg')}}\">
\t\t\t<h3>Lista vazia</h3>
\t\t\t<p>comece a adicionar algum conteúdo à sua lista</p>
\t\t</div>
\t\t{% endif %}
\t</div>
{% endblock %}", "WebBundle:Home:search.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Home/search.html.twig");
    }
}
