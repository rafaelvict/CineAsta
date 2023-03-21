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
class __TwigTemplate_90256fc4e257c7d8d90fd54ece7635d0caeee9e8c2860189c9b510f7749e0c9e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Subscription:paypal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Subscription:paypal.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<div class=\"tab-title\">Inscreva-se agora!</div>

<div id=\"subscribe-plan\">
\t<div class=\"subscribe-title\" id=\"selected_pack\">
\t\t<span>1</span>

\t\t<h5>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subscription"] ?? $this->getContext($context, "subscription")), "pack", []), "html", null, true);
        echo "</h5>
\t\t<span class=\"fas fa-check float-right\"></span>
\t\t<span class=\"float-right price-step-1\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subscription"] ?? $this->getContext($context, "subscription")), "price", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subscription"] ?? $this->getContext($context, "subscription")), "currency", []), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["link"] ?? $this->getContext($context, "link")), "html", null, true);
        echo "\" method=\"post\" id=\"paypal-form-pay\">
\t    <!-- Identify your business so that you can collect the payments -->
\t    <input type=\"hidden\" name=\"business\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["account"] ?? $this->getContext($context, "account")), "html", null, true);
        echo "\">
\t    <!-- Specify a subscriptions button. -->
\t    <input type=\"hidden\" name=\"cmd\" value=\"_xclick-subscriptions\">
\t    <!-- Specify details about the subscription that buyers will purchase -->
\t    <input type=\"hidden\" name=\"item_name\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subscription"] ?? $this->getContext($context, "subscription")), "pack", []), "html", null, true);
        echo "\">
\t    <input type=\"hidden\" name=\"item_number\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\">
\t    <input type=\"hidden\" name=\"currency_code\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subscription"] ?? $this->getContext($context, "subscription")), "currency", []), "html", null, true);
        echo "\">
\t    <input type=\"hidden\" name=\"a3\" id=\"paypalAmt\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subscription"] ?? $this->getContext($context, "subscription")), "price", []), "html", null, true);
        echo "\">
\t    <input type=\"hidden\" name=\"subscription\" id=\"paypalAmt\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subscription"] ?? $this->getContext($context, "subscription")), "id", []), "html", null, true);
        echo "\">
\t    <input type=\"hidden\" name=\"p3\" id=\"paypalValid\" value=\"1\">
\t    <input type=\"hidden\" name=\"t3\" value=\"M\">

\t    <input type=\"hidden\" name=\"cancel_return\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("wep_subscription_cancel", ["id" => $this->getAttribute(($context["subscription"] ?? $this->getContext($context, "subscription")), "id", [])]), "html", null, true);
        echo "\">
\t    <input type=\"hidden\" name=\"return\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("wep_subscription_paypal_finish", ["id" => $this->getAttribute(($context["subscription"] ?? $this->getContext($context, "subscription")), "id", [])]), "html", null, true);
        echo "\">
\t    <input type=\"hidden\" name=\"notify_url\" value=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("wep_subscription_notify");
        echo "\">
\t\t<input class=\"buy-btn\" style=\"display:none\" type=\"submit\" value=\"Comprar assinatura\">

\t</form>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  154 => 54,  150 => 53,  146 => 52,  139 => 48,  135 => 47,  131 => 46,  127 => 45,  123 => 44,  116 => 40,  111 => 38,  85 => 17,  80 => 15,  71 => 8,  62 => 7,  51 => 1,  49 => 6,  47 => 5,  45 => 4,  43 => 3,  41 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"WebBundle::login.html.twig\" %}
{% set subtitle =   \"Assinaturas\"  %}
{% set og_description =  \"Assinaturas\" %}
{% set og_type =  \"null\" %}
{% set og_image =  \"null\" %}
{% set keywords =  \"null\" %}
{% block body %}

<div class=\"tab-title\">Inscreva-se agora!</div>

<div id=\"subscribe-plan\">
\t<div class=\"subscribe-title\" id=\"selected_pack\">
\t\t<span>1</span>

\t\t<h5>{{subscription.pack}}</h5>
\t\t<span class=\"fas fa-check float-right\"></span>
\t\t<span class=\"float-right price-step-1\">{{subscription.price}} {{subscription.currency}}</span>
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
\t<form action=\"{{link}}\" method=\"post\" id=\"paypal-form-pay\">
\t    <!-- Identify your business so that you can collect the payments -->
\t    <input type=\"hidden\" name=\"business\" value=\"{{account}}\">
\t    <!-- Specify a subscriptions button. -->
\t    <input type=\"hidden\" name=\"cmd\" value=\"_xclick-subscriptions\">
\t    <!-- Specify details about the subscription that buyers will purchase -->
\t    <input type=\"hidden\" name=\"item_name\" value=\"{{subscription.pack}}\">
\t    <input type=\"hidden\" name=\"item_number\" value=\"{{id}}\">
\t    <input type=\"hidden\" name=\"currency_code\" value=\"{{subscription.currency}}\">
\t    <input type=\"hidden\" name=\"a3\" id=\"paypalAmt\" value=\"{{subscription.price}}\">
\t    <input type=\"hidden\" name=\"subscription\" id=\"paypalAmt\" value=\"{{subscription.id}}\">
\t    <input type=\"hidden\" name=\"p3\" id=\"paypalValid\" value=\"1\">
\t    <input type=\"hidden\" name=\"t3\" value=\"M\">

\t    <input type=\"hidden\" name=\"cancel_return\" value=\"{{ url('wep_subscription_cancel',{\"id\":subscription.id})}}\">
\t    <input type=\"hidden\" name=\"return\" value=\"{{ url('wep_subscription_paypal_finish',{\"id\":subscription.id})}}\">
\t    <input type=\"hidden\" name=\"notify_url\" value=\"{{ url('wep_subscription_notify')}}\">
\t\t<input class=\"buy-btn\" style=\"display:none\" type=\"submit\" value=\"Comprar assinatura\">

\t</form>
</div>

{% endblock %}", "WebBundle:Subscription:paypal.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Subscription/paypal.html.twig");
    }
}
