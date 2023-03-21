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

/* WebBundle:Subscription:finish.html.twig */
class __TwigTemplate_a4da888ce1eab24fc85faa960d173c1a5ed41014c8de20e0552d73c6de828b76 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("WebBundle::login.html.twig", "WebBundle:Subscription:finish.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        // line 8
        echo "
<div class=\"tab-title\">Inscreva-se agora!</div>

<div id=\"subscribe-plan\">
\t<div class=\"subscribe-title\" id=\"selected_pack\">
\t\t<span>1</span>
\t\t<h5>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subscription"] ?? null), "pack", []), "html", null, true);
        echo "</h5>
\t\t<span class=\"fas fa-check float-right\"></span>
\t\t<span class=\"float-right price-step-1\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subscription"] ?? null), "price", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subscription"] ?? null), "currency", []), "html", null, true);
        echo "</span>
\t</div>
\t<div class=\"subscribe-title\" id=\"selected_pack\">
\t\t<span>2</span>
\t\t<h5>Forma de pagamento </h5>
\t\t<span class=\"fas fa-check float-right\"></span>
\t\t";
        // line 22
        if (($this->getAttribute(($context["subscription"] ?? null), "method", []) == "manual")) {
            // line 23
            echo "\t\t\t<span class=\"float-right price-step-1\"><i class='fas fa-money-check-alt'></i> Manual / Dinheiro</span>
\t\t";
        } elseif (($this->getAttribute(        // line 24
($context["subscription"] ?? null), "method", []) == "card")) {
            // line 25
            echo "\t\t\t<span class=\"float-right price-step-1\"><i class='far fa-credit-card'></i>Cartão de crédito</span>
\t\t";
        } elseif (($this->getAttribute(        // line 26
($context["subscription"] ?? null), "method", []) == "paypal")) {
            // line 27
            echo "\t\t\t<span class=\"float-right price-step-1\"><i class='fab fa-paypal'></i> PayPal</span>
\t\t";
        }
        // line 29
        echo "\t</div>
\t<div class=\"subscribe-title\">
\t\t<span>3</span>
\t\t<h5>Pagamento ";
        // line 32
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute(($context["subscription"] ?? null), "status", [])), "html", null, true);
        echo "</h5>
\t\t";
        // line 33
        if (($this->getAttribute(($context["subscription"] ?? null), "status", []) == "unpaid")) {
            // line 34
            echo "\t\t\t<span class=\"float-right price-step-1\"><i class=\"fas fa-exclamation-circle\"></i> Não pago</span>
\t\t";
        } elseif (($this->getAttribute(        // line 35
($context["subscription"] ?? null), "status", []) == "pendding")) {
            // line 36
            echo "\t\t\t<span class=\"float-right price-step-1\"><i class=\"fas fa-hourglass-half\"></i> Pendente</span>
\t\t";
        } elseif (($this->getAttribute(        // line 37
($context["subscription"] ?? null), "status", []) == "paid")) {
            // line 38
            echo "\t\t\t<span class=\"float-right price-step-1\"><i class='fas fa-check'></i> Pago</span>
\t\t";
        }
        // line 40
        echo "\t</div>
\t<center>
\t<span class=\"paypal-redirect\">
\t\t";
        // line 43
        if (($this->getAttribute(($context["subscription"] ?? null), "status", []) == "unpaid")) {
            // line 44
            echo "\t\t\t<i class=\"fas fa-exclamation-circle\"></i>
\t\t\t<p>O pagamento não foi recebido, entre em contato com nossa equipe de suporte</p>
\t\t";
        } elseif (($this->getAttribute(        // line 46
($context["subscription"] ?? null), "status", []) == "pendding")) {
            // line 47
            echo "\t\t\t<i class=\"far fa-check-circle\"></i>
\t\t\t<p>Obrigado pelo seu pagamento, iremos notificá-lo quando o seu pagamento for concluído.</p>
\t\t";
        } elseif (($this->getAttribute(        // line 49
($context["subscription"] ?? null), "status", []) == "paid")) {
            // line 50
            echo "\t\t\t<i class=\"far fa-check-circle\"></i>
\t\t\t<p>Parabéns agora você está inscrito</p>
\t\t";
        }
        // line 53
        echo "\t\t<p><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_home_index");
        echo "\"> <i class=\"fas fa-home\"></i> Vai İnicio</a></p>


\t</span>
\t</center>
</div>

";
    }

    public function getTemplateName()
    {
        return "WebBundle:Subscription:finish.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 53,  137 => 50,  135 => 49,  131 => 47,  129 => 46,  125 => 44,  123 => 43,  118 => 40,  114 => 38,  112 => 37,  109 => 36,  107 => 35,  104 => 34,  102 => 33,  98 => 32,  93 => 29,  89 => 27,  87 => 26,  84 => 25,  82 => 24,  79 => 23,  77 => 22,  66 => 16,  61 => 14,  53 => 8,  50 => 7,  45 => 1,  43 => 6,  41 => 5,  39 => 4,  37 => 3,  35 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Subscription:finish.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Subscription/finish.html.twig");
    }
}
