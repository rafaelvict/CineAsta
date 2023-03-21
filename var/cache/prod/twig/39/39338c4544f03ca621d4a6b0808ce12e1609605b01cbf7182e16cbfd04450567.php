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

/* WebBundle:Serie:downloads.html.twig */
class __TwigTemplate_3e8ed5f067051d54a20c1cf95751457fc53217f0b5238e6413eecbdd907e2588 extends \Twig\Template
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
\t\t\t\t<h3>Lista vazia!</h3>
\t\t\t</div>
\t\t";
        } else {
            // line 9
            echo "\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th scope=\"col\">Liberar</th>
\t\t\t\t\t<th scope=\"col\" >Tamanho</th>
\t\t\t\t\t<th scope=\"col\" width=\"130px;\" >Qualidade</th>
\t\t\t\t\t<th scope=\"col\" width=\"130px;\">Download</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sources"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
                // line 20
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                // line 21
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["source"], "title", [])), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "size", []), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td><label class=\"badge badge-light\">";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "quality", []), "html", null, true);
                echo "</label></td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t";
                // line 25
                if ((($this->getAttribute($context["source"], "premium", []) == 1) || ($this->getAttribute($context["source"], "premium", []) == 3))) {
                    // line 26
                    echo "
\t\t\t\t\t\t\t";
                    // line 27
                    if (($this->getAttribute($context["source"], "type", []) == "file")) {
                        // line 28
                        echo "\t\t\t\t\t\t\t\t<a ";
                        if ($this->getAttribute($context["source"], "external", [])) {
                            echo " target=\"_blank\" ";
                        }
                        echo "  href=\"";
                        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "scheme", []) . "://") . $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "httpHost", [])) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["source"], "media", []), "link", []))), "html", null, true);
                        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-download\"></i> Download</a>
\t\t\t\t\t\t\t";
                    } else {
                        // line 30
                        echo "\t\t\t\t\t\t\t\t<a ";
                        if ($this->getAttribute($context["source"], "external", [])) {
                            echo " target=\"_blank\" ";
                        }
                        echo " href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "url", []), "html", null, true);
                        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-download\"></i> Download</a>
\t\t\t\t\t\t\t";
                    }
                    // line 32
                    echo "\t\t\t\t\t\t";
                } else {
                    // line 33
                    echo "\t\t\t\t\t\t\t";
                    if (($context["premium"] ?? null)) {
                        // line 34
                        echo "\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["source"], "type", []) == "file")) {
                            // line 35
                            echo "\t\t\t\t\t\t\t\t\t<a ";
                            if ($this->getAttribute($context["source"], "external", [])) {
                                echo " target=\"_blank\" ";
                            }
                            echo "  href=\"";
                            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "scheme", []) . "://") . $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "httpHost", [])) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["source"], "media", []), "link", []))), "html", null, true);
                            echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-download\"></i> Download</a>
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 37
                            echo "\t\t\t\t\t\t\t\t\t<a ";
                            if ($this->getAttribute($context["source"], "external", [])) {
                                echo " target=\"_blank\" ";
                            }
                            echo " href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "url", []), "html", null, true);
                            echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-download\"></i> Download</a>
\t\t\t\t\t\t\t\t";
                        }
                        // line 39
                        echo "\t\t\t\t\t\t\t";
                    } else {
                        // line 40
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_subscription_subscribe");
                        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-star\"></i> Entrar ou Criar Conta</a>
\t\t\t\t\t\t\t";
                    }
                    // line 42
                    echo "\t\t\t\t\t\t";
                }
                // line 43
                echo "\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "\t\t\t</tbody>
\t\t</table>
\t\t";
        }
        // line 49
        echo "
\t</div>
</div>


";
    }

    public function getTemplateName()
    {
        return "WebBundle:Serie:downloads.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 49,  154 => 46,  146 => 43,  143 => 42,  137 => 40,  134 => 39,  124 => 37,  114 => 35,  111 => 34,  108 => 33,  105 => 32,  95 => 30,  85 => 28,  83 => 27,  80 => 26,  78 => 25,  73 => 23,  69 => 22,  65 => 21,  62 => 20,  58 => 19,  46 => 9,  39 => 5,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Serie:downloads.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Serie/downloads.html.twig");
    }
}
