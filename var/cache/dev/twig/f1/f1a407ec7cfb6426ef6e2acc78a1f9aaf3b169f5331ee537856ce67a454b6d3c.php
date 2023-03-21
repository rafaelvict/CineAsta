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

/* WebBundle:Home:mylist.html.twig */
class __TwigTemplate_de7bc272a87bfb73ec753b100933915a18d51b1957747f023f75a0abef44a7b2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Home:mylist.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Home:mylist.html.twig"));

        // line 2
        $context["subtitle"] = "Minha Lista";
        // line 3
        $context["og_description"] = "My List";
        // line 4
        $context["og_type"] = "null";
        // line 5
        $context["og_image"] = "null";
        // line 6
        $context["keywords"] = "null";
        // line 1
        $this->parent = $this->loadTemplate("WebBundle::layout.html.twig", "WebBundle:Home:mylist.html.twig", 1);
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

        echo "Minha Lista";
        
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
\t\t\t";
        // line 10
        if ((twig_length_filter($this->env, ($context["channels"] ?? $this->getContext($context, "channels"))) != 0)) {
            // line 11
            echo "\t\t\t
\t\t
\t\t\t";
        }
        // line 14
        echo "\t\t\t";
        if ((($context["poster_size"] ?? $this->getContext($context, "poster_size")) > 0)) {
            // line 15
            echo "\t\t\t\t<div class=\"col-sm-12 col-md-12 \">
\t\t\t\t\t<a class=\"title-more\">
\t\t\t\t\t\t<span>Meus Filmes / Series</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t";
            // line 20
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
                // line 21
                echo "\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($context["poster"], "poster", []), "type", []) == "movie")) {
                    // line 22
                    echo "\t\t\t\t\t\t";
                    echo twig_include($this->env, $context, "WebBundle:Movie:movie.html.twig", ["poster" => $this->getAttribute($context["poster"], "poster", []), "class" => "col-3 col-md-2 col-xxl-2"]);
                    echo "
\t\t\t\t\t";
                } else {
                    // line 24
                    echo "\t\t\t\t\t\t";
                    echo twig_include($this->env, $context, "WebBundle:Serie:serie.html.twig", ["poster" => $this->getAttribute($context["poster"], "poster", []), "class" => "col-3 col-md-2 col-xxl-2"]);
                    echo "
\t\t\t\t\t";
                }
                // line 26
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
            // line 27
            echo "\t\t\t\t<div class=\"filter-section\">
\t\t\t\t\t<div class=\" float-right\">
\t\t\t\t\t\t";
            // line 29
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["posters"] ?? $this->getContext($context, "posters")));
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t";
        }
        // line 33
        echo "\t\t";
        if (((($context["poster_size"] ?? $this->getContext($context, "poster_size")) == 0) && (twig_length_filter($this->env, ($context["channels"] ?? $this->getContext($context, "channels"))) == 0))) {
            // line 34
            echo "\t\t<div class=\"empty-box\">
\t\t\t<img src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("web/img/empty.svg"), "html", null, true);
            echo "\">
\t\t\t<h3>Empty list</h3>
\t\t\t<p>comece a adicionar algum conteúdo à sua lista</p>
\t\t</div>
\t\t";
        }
        // line 40
        echo "\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Home:mylist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 40,  173 => 35,  170 => 34,  167 => 33,  160 => 29,  156 => 27,  142 => 26,  136 => 24,  130 => 22,  127 => 21,  110 => 20,  103 => 15,  100 => 14,  95 => 11,  93 => 10,  90 => 9,  81 => 8,  63 => 7,  52 => 1,  50 => 6,  48 => 5,  46 => 4,  44 => 3,  42 => 2,  30 => 1,);
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
{% set subtitle =  \"Minha Lista\" %}
{% set og_description =  \"My List\" %}
{% set og_type =  \"null\" %}
{% set og_image =  \"null\" %}
{% set keywords =  \"null\" %}
{% block title %}Minha Lista{% endblock %}
{% block body %}
\t<div class=\"row content-section\">
\t\t\t{% if channels|length != 0 %}
\t\t\t
\t\t
\t\t\t{% endif %}
\t\t\t{% if poster_size > 0 %}
\t\t\t\t<div class=\"col-sm-12 col-md-12 \">
\t\t\t\t\t<a class=\"title-more\">
\t\t\t\t\t\t<span>Meus Filmes / Series</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t{% for poster in posters %}
\t\t\t\t\t{% if poster.poster.type == \"movie\" %}
\t\t\t\t\t\t{{ include('WebBundle:Movie:movie.html.twig',{poster:poster.poster,class:\"col-3 col-md-2 col-xxl-2\"}) }}
\t\t\t\t\t{% else %}
\t\t\t\t\t\t{{ include('WebBundle:Serie:serie.html.twig',{poster:poster.poster,class:\"col-3 col-md-2 col-xxl-2\"}) }}
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t\t<div class=\"filter-section\">
\t\t\t\t\t<div class=\" float-right\">
\t\t\t\t\t\t{{ knp_pagination_render(posters) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t{% endif %}
\t\t{% if poster_size ==  0  and channels|length == 0 %}
\t\t<div class=\"empty-box\">
\t\t\t<img src=\"{{asset('web/img/empty.svg')}}\">
\t\t\t<h3>Empty list</h3>
\t\t\t<p>comece a adicionar algum conteúdo à sua lista</p>
\t\t</div>
\t\t{% endif %}
\t</div>
{% endblock %}", "WebBundle:Home:mylist.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Home/mylist.html.twig");
    }
}
