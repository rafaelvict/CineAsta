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

/* WebBundle:Serie:index.html.twig */
class __TwigTemplate_cfb16bdf183329061f986b949bc3bfc03ce70df864e2988936f6e0243afde054 extends \Twig\Template
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
        // line 2
        $context["subtitle"] = (twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "genre"], "method")) . " Series");
        // line 3
        $context["og_description"] = (twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "genre"], "method")) . " Series");
        // line 4
        $context["og_type"] = "null";
        // line 5
        $context["og_image"] = "null";
        // line 6
        $context["keywords"] = "null";
        // line 1
        $this->parent = $this->loadTemplate("WebBundle::layout.html.twig", "WebBundle:Serie:index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        echo "Series ";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "genre"], "method") != "all")) {
            echo " • ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "genre"], "method"), "html", null, true);
        }
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        // line 9
        echo "
\t<div class=\"row content-section\">
\t\t<div class=\"filter-section\">
\t\t\t<div class=\"btn-group season-dropdown float-right\" role=\"group\" aria-label=\"Basic example\">
\t\t\t\t<a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_serie_index", ["type" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "type"], "method"), "genre" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "genre"], "method"), "order" => "newest"]), "html", null, true);
        echo "\" class=\"btn btn-secondary ";
        if (("newest" == $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "order"], "method"))) {
            echo " active ";
        }
        echo "\"><i class=\"far fa-clock\"></i> <span class=\"for-desktop\"> O mais novo</span></a>
\t\t\t\t<a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_serie_index", ["type" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "type"], "method"), "genre" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "genre"], "method"), "order" => "views"]), "html", null, true);
        echo "\" class=\"btn btn-secondary ";
        if (("views" == $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "order"], "method"))) {
            echo " active ";
        }
        echo "\"><i class=\"far fa-eye\"></i> <span class=\"for-desktop\"> Visualizações</span></a>
\t\t\t\t<a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_serie_index", ["type" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "type"], "method"), "genre" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "genre"], "method"), "order" => "rating"]), "html", null, true);
        echo "\" class=\"btn btn-secondary ";
        if (("rating" == $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "order"], "method"))) {
            echo " active ";
        }
        echo "\"><i class=\"fas fa-star-half-alt\"></i> <span class=\"for-desktop\"> Avaliação</span></a>
\t\t\t\t<a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_serie_index", ["type" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "type"], "method"), "genre" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "genre"], "method"), "order" => "imdb"]), "html", null, true);
        echo "\" class=\"btn btn-secondary ";
        if (("imdb" == $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "order"], "method"))) {
            echo " active ";
        }
        echo "\"><i class=\"fab fa-imdb\"></i> <span class=\"for-desktop\"> Classificação do IMdb</span></a>
\t\t\t\t<a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_serie_index", ["type" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "type"], "method"), "genre" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "genre"], "method"), "order" => "title"]), "html", null, true);
        echo "\" class=\"btn btn-secondary ";
        if (("title" == $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "order"], "method"))) {
            echo " active ";
        }
        echo "\"><i class=\"fas fa-sort-alpha-down\"></i> <span class=\"for-desktop\"> Título</span></a>
\t\t\t\t<a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_serie_index", ["type" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "type"], "method"), "genre" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "genre"], "method"), "order" => "year"]), "html", null, true);
        echo "\" class=\"btn btn-secondary ";
        if (("year" == $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "order"], "method"))) {
            echo " active ";
        }
        echo "\"><i class=\"fas fa-calendar-alt\"></i> <span class=\"for-desktop\"> Ano</span></a>
\t\t\t</div>
\t\t\t<div class=\"btn-group season-dropdown\" role=\"group\">
\t\t\t\t<button id=\"btnGroupDrop1\" type=\"button\" class=\"btn btn-secondary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t";
        // line 22
        ((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "genre"], "method") == "all")) ? (print ("Gêneros")) : (print (twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "genre"], "method"), "html", null, true))));
        echo "
\t\t\t\t</button>
\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"btnGroupDrop1\">
\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_serie_index", ["type" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "type"], "method"), "genre" => "all", "order" => "newest"]), "html", null, true);
        echo "\">Gêneros</a>
\t\t\t\t\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["genres"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 27
            echo "\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_serie_index", ["type" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "type"], "method"), "genre" => $this->getAttribute($context["genre"], "title", []), "order" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "order"], "method")]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["genre"], "html", null, true);
            echo "</a>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row content-section\">
\t\t<div></div>
\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posters"] ?? null));
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
            // line 36
            echo "\t\t\t";
            if (($this->getAttribute($context["poster"], "type", []) == "movie")) {
                // line 37
                echo "\t\t\t\t";
                echo twig_include($this->env, $context, "WebBundle:Movie:movie.html.twig", ["poster" => $context["poster"], "class" => "col-4 col-md-2 col-xxl-2"]);
                echo "
\t\t\t";
            } else {
                // line 39
                echo "\t\t\t\t";
                echo twig_include($this->env, $context, "WebBundle:Serie:serie.html.twig", ["poster" => $context["poster"], "class" => "col-4 col-md-2 col-xxl-2"]);
                echo "
\t\t\t";
            }
            // line 41
            echo "\t\t";
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
        // line 42
        echo "\t</div>
\t<div class=\"row content-section\">
\t\t<div class=\"filter-section\">
\t\t\t<div class=\" float-right\">
\t\t\t\t";
        // line 46
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["posters"] ?? null));
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "WebBundle:Serie:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 46,  200 => 42,  186 => 41,  180 => 39,  174 => 37,  171 => 36,  154 => 35,  146 => 29,  135 => 27,  131 => 26,  127 => 25,  121 => 22,  110 => 18,  102 => 17,  94 => 16,  86 => 15,  78 => 14,  70 => 13,  64 => 9,  61 => 8,  51 => 7,  46 => 1,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Serie:index.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Serie/index.html.twig");
    }
}
