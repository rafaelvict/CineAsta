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

/* KnpPaginatorBundle:Pagination:twitter_bootstrap_v4_pagination.html.twig */
class __TwigTemplate_7e292145d32ea012bd569c5797e4e199252df35f172bd0ac13c1d93dfa0f8b58 extends \Twig\Template
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
        // line 12
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 13
            echo "    <nav>
        ";
            // line 14
            $context["classAlign"] = (( !(isset($context["align"]) || array_key_exists("align", $context))) ? ("") : ((((($context["align"] ?? null) == "center")) ? (" justify-content-center") : ((((($context["align"] ?? null) == "right")) ? (" justify-content-end") : (""))))));
            // line 15
            echo "        ";
            $context["classSize"] = (( !(isset($context["size"]) || array_key_exists("size", $context))) ? ("") : ((((($context["size"] ?? null) == "large")) ? (" pagination-lg") : ((((($context["size"] ?? null) == "small")) ? (" pagination-sm") : (""))))));
            // line 16
            echo "        <ul class=\"pagination";
            echo twig_escape_filter($this->env, ($context["classAlign"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, ($context["classSize"] ?? null), "html", null, true);
            echo "\">

            ";
            // line 18
            if ((isset($context["previous"]) || array_key_exists("previous", $context))) {
                // line 19
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" rel=\"prev\" href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)])), "html", null, true);
                echo "\">&laquo;&nbsp;";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
                </li>
            ";
            } else {
                // line 23
                echo "                <li class=\"page-item disabled\">
                    <span class=\"page-link\">&laquo;&nbsp;";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_previous", [], "KnpPaginatorBundle"), "html", null, true);
                echo "</span>
                </li>
            ";
            }
            // line 27
            echo "
            ";
            // line 28
            if ((($context["startPage"] ?? null) > 1)) {
                // line 29
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => 1])), "html", null, true);
                echo "\">1</a>
                </li>
                ";
                // line 32
                if ((($context["startPage"] ?? null) == 3)) {
                    // line 33
                    echo "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => 2])), "html", null, true);
                    echo "\">2</a>
                    </li>
                ";
                } elseif ((                // line 36
($context["startPage"] ?? null) != 2)) {
                    // line 37
                    echo "                    <li class=\"page-item disabled\">
                        <span class=\"page-link\">&hellip;</span>
                    </li>
                ";
                }
                // line 41
                echo "            ";
            }
            // line 42
            echo "
            ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 44
                echo "                ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 45
                    echo "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                    // line 46
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => $context["page"]])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                    </li>
                ";
                } else {
                    // line 49
                    echo "                    <li class=\"page-item active\">
                        <span class=\"page-link\">";
                    // line 50
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span>
                    </li>
                ";
                }
                // line 53
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "
            ";
            // line 56
            if ((($context["pageCount"] ?? null) > ($context["endPage"] ?? null))) {
                // line 57
                echo "                ";
                if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 1))) {
                    // line 58
                    echo "                    ";
                    if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 2))) {
                        // line 59
                        echo "                        <li class=\"page-item disabled\">
                            <span class=\"page-link\">&hellip;</span>
                        </li>
                    ";
                    } else {
                        // line 63
                        echo "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                        // line 64
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => (($context["pageCount"] ?? null) - 1)])), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (($context["pageCount"] ?? null) - 1), "html", null, true);
                        echo "</a>
                        </li>
                    ";
                    }
                    // line 67
                    echo "                ";
                }
                // line 68
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["pageCount"] ?? null)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["pageCount"] ?? null), "html", null, true);
                echo "</a>
                </li>
            ";
            }
            // line 72
            echo "
            ";
            // line 73
            if ((isset($context["next"]) || array_key_exists("next", $context))) {
                // line 74
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" rel=\"next\" href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), [($context["pageParameterName"] ?? null) => ($context["next"] ?? null)])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo "&nbsp;&raquo;</a>
                </li>
            ";
            } else {
                // line 78
                echo "                <li  class=\"page-item disabled\">
                    <span class=\"page-link\">";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_next", [], "KnpPaginatorBundle"), "html", null, true);
                echo "&nbsp;&raquo;</span>
                </li>
            ";
            }
            // line 82
            echo "        </ul>
    </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:twitter_bootstrap_v4_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 82,  201 => 79,  198 => 78,  190 => 75,  187 => 74,  185 => 73,  182 => 72,  174 => 69,  171 => 68,  168 => 67,  160 => 64,  157 => 63,  151 => 59,  148 => 58,  145 => 57,  143 => 56,  140 => 55,  133 => 53,  127 => 50,  124 => 49,  116 => 46,  113 => 45,  110 => 44,  106 => 43,  103 => 42,  100 => 41,  94 => 37,  92 => 36,  87 => 34,  84 => 33,  82 => 32,  77 => 30,  74 => 29,  72 => 28,  69 => 27,  63 => 24,  60 => 23,  52 => 20,  49 => 19,  47 => 18,  40 => 16,  37 => 15,  35 => 14,  32 => 13,  30 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "KnpPaginatorBundle:Pagination:twitter_bootstrap_v4_pagination.html.twig", "/www/wwwroot/tyflex.07.03/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/twitter_bootstrap_v4_pagination.html.twig");
    }
}
