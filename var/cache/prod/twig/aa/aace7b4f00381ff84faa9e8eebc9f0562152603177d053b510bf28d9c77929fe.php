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
class __TwigTemplate_265c2d1ef11009c04b22c548598c3e7ad7feef6d52e7e76f37ca04b1f18c2f16 extends \Twig\Template
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
        $context["subtitle"] = (("Busca '" . $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "q"], "method")) . "'");
        // line 3
        $context["og_description"] = (("Pesquisar '" . $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "q"], "method")) . "'");
        // line 4
        $context["og_type"] = "null";
        // line 5
        $context["og_image"] = "null";
        // line 6
        $context["keywords"] = "null";
        // line 1
        $this->parent = $this->loadTemplate("WebBundle::layout.html.twig", "WebBundle:Home:search.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        echo " Busca : \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "get", [0 => "q"], "method"), "html", null, true);
        echo "\"";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        // line 9
        echo "
\t<div class=\"row content-section\">Pesquisar
\t\t\t";
        // line 11
        if ((twig_length_filter($this->env, ($context["actors"] ?? null)) != 0)) {
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
            $context['_seq'] = twig_ensure_traversable(($context["actors"] ?? null));
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
        if ((twig_length_filter($this->env, ($context["channels"] ?? null)) != 0)) {
            // line 33
            echo "\t\t\t
\t\t\t
\t\t\t";
        }
        // line 36
        echo "\t\t\t";
        if ((twig_length_filter($this->env, ($context["posters"] ?? null)) > 0)) {
            // line 37
            echo "\t\t\t\t<div class=\"col-sm-12 col-md-12 \">
\t\t\t\t\t<a class=\"title-more\">
\t\t\t\t\t\t<span>Filmes / Series</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t";
            // line 42
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
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["posters"] ?? null));
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t";
        }
        // line 55
        echo "\t\t";
        if ((((twig_length_filter($this->env, ($context["posters"] ?? null)) == 0) && (twig_length_filter($this->env, ($context["channels"] ?? null)) == 0)) && (twig_length_filter($this->env, ($context["actors"] ?? null)) == 0))) {
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
        return array (  198 => 62,  190 => 57,  187 => 56,  184 => 55,  177 => 51,  173 => 49,  159 => 48,  153 => 46,  147 => 44,  144 => 43,  127 => 42,  120 => 37,  117 => 36,  112 => 33,  110 => 32,  107 => 31,  102 => 28,  93 => 25,  89 => 24,  84 => 23,  80 => 22,  68 => 12,  66 => 11,  62 => 9,  59 => 8,  51 => 7,  46 => 1,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Home:search.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Home/search.html.twig");
    }
}
