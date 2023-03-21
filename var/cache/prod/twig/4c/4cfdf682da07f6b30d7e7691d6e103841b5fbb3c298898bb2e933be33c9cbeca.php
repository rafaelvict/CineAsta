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

/* WebBundle:Subscription:paypal.html.twig */
class __TwigTemplate_fcd3b36b46c7bf31f9490f4b78ac6209685f7fb45dde05401a76ce3a3e516d6c extends \Twig\Template
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
        $this->parent = $this->loadTemplate("WebBundle::login.html.twig", "WebBundle:Subscription:paypal.html.twig", 1);
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
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subscription"] ?? null), "pack", []), "html", null, true);
        echo "</h5>
\t\t<span class=\"fas fa-check float-right\"></span>
\t\t<span class=\"float-right price-step-1\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subscription"] ?? null), "price", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subscription"] ?? null), "currency", []), "html", null, true);
        echo "</span>
\t</div>
\t<div class=\"subscribe-title\" id=\"selected_pack\">
\t\t<span>2</span>

\t\t<h5>Forma de pagamento </h5>
\t\t<span class=\"fas fa-check float-right\"></span>
\t\t<span class=\"float-right price-step-1\"><i class='fab fa-paypal'></i> PayPal</span>
\t</div>
\t<div class=\"subscribe-title\">
\t\t<span>3</span>
\t\t<h5>pagamento no processo  </h5>
\t\t<span class=\"float-right\"><i class=\"fas fa-circle-notch fa-spin \"></i></span>
\t</div>
\t<center>\t
\t<span class=\"paypal-redirect\">
\t\t<i class='fab fa-paypal'></i>
\t\t<p> <i class=\"fas fa-circle-notch fa-spin \"></i> Redirecionando para o PayPal ...</p>
\t</span>
\t</center>\t    
\t<!-- Buy button -->
\t<form action=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
        echo "\" method=\"post\" id=\"paypal-form-pay\">
\t    <!-- Identify your business so that you can collect the payments -->
\t    <input type=\"hidden\" name=\"business\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["account"] ?? null), "html", null, true);
        echo "\">
\t    <!-- Specify a subscriptions button. -->
\t    <input type=\"hidden\" name=\"cmd\" value=\"_xclick-subscriptions\">
\t    <!-- Specify details about the subscription that buyers will purchase -->
\t    <input type=\"hidden\" name=\"item_name\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subscription"] ?? null), "pack", []), "html", null, true);
        echo "\">
\t    <input type=\"hidden\" name=\"item_number\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
\t    <input type=\"hidden\" name=\"currency_code\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subscription"] ?? null), "currency", []), "html", null, true);
        echo "\">
\t    <input type=\"hidden\" name=\"a3\" id=\"paypalAmt\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subscription"] ?? null), "price", []), "html", null, true);
        echo "\">
\t    <input type=\"hidden\" name=\"subscription\" id=\"paypalAmt\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subscription"] ?? null), "id", []), "html", null, true);
        echo "\">
\t    <input type=\"hidden\" name=\"p3\" id=\"paypalValid\" value=\"1\">
\t    <input type=\"hidden\" name=\"t3\" value=\"M\">

\t    <input type=\"hidden\" name=\"cancel_return\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("wep_subscription_cancel", ["id" => $this->getAttribute(($context["subscription"] ?? null), "id", [])]), "html", null, true);
        echo "\">
\t    <input type=\"hidden\" name=\"return\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("wep_subscription_paypal_finish", ["id" => $this->getAttribute(($context["subscription"] ?? null), "id", [])]), "html", null, true);
        echo "\">
\t    <input type=\"hidden\" name=\"notify_url\" value=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("wep_subscription_notify");
        echo "\">
\t\t<input class=\"buy-btn\" style=\"display:none\" type=\"submit\" value=\"Comprar assinatura\">

\t</form>
</div>

";
    }

    public function getTemplateName()
    {
        return "WebBundle:Subscription:paypal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 54,  132 => 53,  128 => 52,  121 => 48,  117 => 47,  113 => 46,  109 => 45,  105 => 44,  98 => 40,  93 => 38,  67 => 17,  62 => 15,  53 => 8,  50 => 7,  45 => 1,  43 => 6,  41 => 5,  39 => 4,  37 => 3,  35 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Subscription:paypal.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Subscription/paypal.html.twig");
    }
}
