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

/* WebBundle:Subscription:subscribe.html.twig */
class __TwigTemplate_b41e2e36bae6f7920143a1404f87a5e93dfcb2a09b8d1f51bab766ca470e3161 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "WebBundle::login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["subtitle"] = "Assinaturas";
        // line 3
        $context["og_description"] = "Assinaturas";
        // line 4
        $context["og_type"] = "null";
        // line 5
        $context["og_image"] = "null";
        // line 6
        $context["keywords"] = "null";
        // line 1
        $this->parent = $this->loadTemplate("WebBundle::login.html.twig", "WebBundle:Subscription:subscribe.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["id" => "form_payment_step"]]);
        echo "

<div class=\"tab-title\">Inscreva-se agora!</div>
<div id=\"subscribe-plan\">
\t<div class=\"subscribe-title\">
\t\t<span>1</span>
\t\t<h5>Selecione um Pacote </h5>
\t</div>
\t<br>
   \t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "packs", []));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 18
            echo "   \t   \t";
            $context["pack"] = null;
            // line 19
            echo "
   \t\t";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["packs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 21
                echo "   \t\t    ";
                if (($this->getAttribute($this->getAttribute($context["field"], "vars", []), "value", []) == $this->getAttribute($context["p"], "id", []))) {
                    // line 22
                    echo "   \t\t    \t";
                    $context["pack"] = $context["p"];
                    // line 23
                    echo "   \t\t    ";
                }
                // line 24
                echo "   \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t\t<label class=\"pack\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "vars", []), "value", []), "html", null, true);
            echo "\" >
\t\t\t<div>
\t\t\t\t";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
            echo "
\t\t\t\t";
            // line 28
            if (($this->getAttribute(($context["pack"] ?? null), "discount", []) != null)) {
                // line 29
                echo "\t\t\t\t\t<p>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["pack"] ?? null), "discount", []), "html", null, true);
                echo "</p>
\t\t\t\t";
            }
            // line 31
            echo "\t\t\t\t
\t\t\t\t<h5>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "vars", []), "label", []), "html", null, true);
            echo "</h5>
\t\t\t\t";
            // line 33
            if (($this->getAttribute(($context["pack"] ?? null), "description", []) != null)) {
                // line 34
                echo "\t\t\t\t\t<h4>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["pack"] ?? null), "description", []), "html", null, true);
                echo "</h4>
\t\t\t\t";
            }
            // line 36
            echo "\t\t\t\t<span>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pack"] ?? null), "price", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["currency"] ?? null), "html", null, true);
            echo "</span>
\t\t\t</div>
\t\t</label>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t <p class=\"error-plan\">• Selecione um plano</p>
\t <span  id=\"go-payment-method\" class=\"float-right btn btn-primary\">PROSSEGUIR <i class=\"fas fa-chevron-right\"></i></span>
</div>
<div id=\"payment-method\">
\t<div class=\"subscribe-title\" id=\"selected_pack\">
\t\t<span>1</span>

\t\t<h5>x </h5>
\t\t<span class=\"fas fa-check float-right\"></span>
\t\t<span class=\"float-right price-step-1\">x</span>
\t</div>
\t<div class=\"subscribe-title\">
\t\t<span>2</span>
\t\t<h5> Método de Pagamento </h5>
\t</div>
\t<br>

\t";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "method", []));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 58
            echo "\t\t";
            $context["icon"] = "<i class='fab fa-paypal'></i>";
            // line 59
            echo "   \t\t";
            if (($this->getAttribute($this->getAttribute($context["field"], "vars", []), "value", []) == "paypal")) {
                // line 60
                echo "      \t\t";
                $context["icon"] = "<i class='fab fa-paypal'></i>";
                // line 61
                echo "   \t\t";
            } elseif (($this->getAttribute($this->getAttribute($context["field"], "vars", []), "value", []) == "card")) {
                // line 62
                echo "      \t\t";
                $context["icon"] = "<i class='far fa-credit-card'></i>";
                // line 63
                echo "   \t\t";
            } elseif (($this->getAttribute($this->getAttribute($context["field"], "vars", []), "value", []) == "manual")) {
                // line 64
                echo "   \t\t\t";
                $context["icon"] = "<i class='fas fa-money-check-alt'></i>";
                // line 65
                echo "   \t\t";
            }
            // line 66
            echo "\t\t<label class=\"payment\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "vars", []), "value", []), "html", null, true);
            echo "\">
\t\t\t<div>
\t\t\t\t";
            // line 68
            echo ($context["icon"] ?? null);
            echo "
\t\t\t\t";
            // line 69
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
            echo "
\t\t\t\t<h4>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "vars", []), "label", []), "html", null, true);
            echo "</h4>
\t\t\t\t<i class=\"fas fa-check\"></i>
\t\t\t</div>
\t\t</label>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "\t <p class=\"error-method\">• Selecione um método de pagamento</p>
\t <span id=\"go-to-pay\" class=\"float-right btn btn-primary\"><i class=\"fas fa-check\"></i> PAGUE AGORA</button>
</div>
";
        // line 79
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "WebBundle:Subscription:subscribe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 79,  213 => 76,  201 => 70,  197 => 69,  193 => 68,  187 => 66,  184 => 65,  181 => 64,  178 => 63,  175 => 62,  172 => 61,  169 => 60,  166 => 59,  163 => 58,  159 => 57,  140 => 40,  127 => 36,  121 => 34,  119 => 33,  115 => 32,  112 => 31,  106 => 29,  104 => 28,  100 => 27,  94 => 25,  88 => 24,  85 => 23,  82 => 22,  79 => 21,  75 => 20,  72 => 19,  69 => 18,  65 => 17,  53 => 8,  50 => 7,  45 => 1,  43 => 6,  41 => 5,  39 => 4,  37 => 3,  35 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Subscription:subscribe.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Subscription/subscribe.html.twig");
    }
}
