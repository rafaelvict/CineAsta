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
class __TwigTemplate_3bdbc54b02534ebf86b3358251537c7c4c3365c0d9983e7b56a633b7e6f89cc7 extends \Twig\Template
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
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        echo "Minha Lista";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        // line 9
        echo "\t<div class=\"row content-section\">
\t\t\t";
        // line 10
        if ((twig_length_filter($this->env, ($context["channels"] ?? null)) != 0)) {
            // line 11
            echo "\t\t\t
\t\t
\t\t\t";
        }
        // line 14
        echo "\t\t\t";
        if ((($context["poster_size"] ?? null) > 0)) {
            // line 15
            echo "\t\t\t\t<div class=\"col-sm-12 col-md-12 \">
\t\t\t\t\t<a class=\"title-more\">
\t\t\t\t\t\t<span>Meus Filmes / Series</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t";
            // line 20
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
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["posters"] ?? null));
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t";
        }
        // line 33
        echo "\t\t";
        if (((($context["poster_size"] ?? null) == 0) && (twig_length_filter($this->env, ($context["channels"] ?? null)) == 0))) {
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
        return array (  151 => 40,  143 => 35,  140 => 34,  137 => 33,  130 => 29,  126 => 27,  112 => 26,  106 => 24,  100 => 22,  97 => 21,  80 => 20,  73 => 15,  70 => 14,  65 => 11,  63 => 10,  60 => 9,  57 => 8,  51 => 7,  46 => 1,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Home:mylist.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Home/mylist.html.twig");
    }
}
