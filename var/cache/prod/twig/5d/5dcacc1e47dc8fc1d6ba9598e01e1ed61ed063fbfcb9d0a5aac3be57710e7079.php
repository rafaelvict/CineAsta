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

/* WebBundle:Movie:downloads.html.twig */
class __TwigTemplate_3cbcf53c84ed76ad86e2914fea2c9b3a35d8e7fb94dee73d25c28be5ed8e4d7c extends \Twig\Template
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
        // line 1
        echo "<div class=\" downloads-table\" >
\t<div class=\"table-responsive \">
\t\t";
        // line 3
        if ((twig_length_filter($this->env, ($context["sources"] ?? null)) == 0)) {
            // line 4
            echo "\t\t\t<div class=\"empty-box\">
\t\t\t\t<img style=\"width: 150px;height: 135px;\" src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("web/img/empty.svg"), "html", null, true);
            echo "\">
\t\t\t\t<h3>Lista vazia</h3>
\t\t\t</div>
\t\t";
        } else {
            // line 9
            echo "\t\t\t<table class=\"table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\">Release</th>
\t\t\t\t\t\t<th scope=\"col\" >Size</th>
\t\t\t\t\t\t<th scope=\"col\" width=\"130px;\" >Quality</th>
\t\t\t\t\t\t<th scope=\"col\" width=\"140px;\">Download</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sources"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
                // line 20
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                // line 21
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["source"], "title", [])), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "size", []), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td><label class=\"badge badge-light\">";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "quality", []), "html", null, true);
                echo "</label></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                // line 25
                if ((($this->getAttribute($context["source"], "premium", []) == 1) || ($this->getAttribute($context["source"], "premium", []) == 3))) {
                    // line 26
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["source"], "type", []) == "file")) {
                        // line 27
                        echo "\t\t\t\t\t\t\t\t\t\t<a ";
                        if ($this->getAttribute($context["source"], "external", [])) {
                            echo " target=\"_blank\" ";
                        }
                        echo "  href=\"";
                        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "scheme", []) . "://") . $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "httpHost", [])) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["source"], "media", []), "link", []))), "html", null, true);
                        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-download\"></i> Download</a>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 29
                        echo "\t\t\t\t\t\t\t\t\t\t<a ";
                        if ($this->getAttribute($context["source"], "external", [])) {
                            echo " target=\"_blank\" ";
                        }
                        echo " href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "url", []), "html", null, true);
                        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-download\"></i> Download</a>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 31
                    echo "\t\t\t\t\t\t\t\t";
                } else {
                    // line 32
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($context["premium"] ?? null)) {
                        // line 33
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["source"], "type", []) == "file")) {
                            // line 34
                            echo "\t\t\t\t\t\t\t\t\t\t\t<a ";
                            if ($this->getAttribute($context["source"], "external", [])) {
                                echo " target=\"_blank\" ";
                            }
                            echo "  href=\"";
                            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "scheme", []) . "://") . $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "httpHost", [])) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["source"], "media", []), "link", []))), "html", null, true);
                            echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-download\"></i> Download</a>
\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 36
                            echo "\t\t\t\t\t\t\t\t\t\t\t<a ";
                            if ($this->getAttribute($context["source"], "external", [])) {
                                echo " target=\"_blank\" ";
                            }
                            echo " href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "url", []), "html", null, true);
                            echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-download\"></i> Download</a>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 38
                        echo "\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 39
                        echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_subscription_subscribe");
                        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-star\"></i> Assinaturas !</a>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 41
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 42
                echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t";
        }
        // line 48
        echo "\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "WebBundle:Movie:downloads.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 48,  152 => 45,  144 => 42,  141 => 41,  135 => 39,  132 => 38,  122 => 36,  112 => 34,  109 => 33,  106 => 32,  103 => 31,  93 => 29,  83 => 27,  80 => 26,  78 => 25,  73 => 23,  69 => 22,  65 => 21,  62 => 20,  58 => 19,  46 => 9,  39 => 5,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Movie:downloads.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Movie/downloads.html.twig");
    }
}
