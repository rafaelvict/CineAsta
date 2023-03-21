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

/* WebBundle:Subscription:cancel.html.twig */
class __TwigTemplate_8a3fe1ffc25949d9cf487a70c5f7eef39f4a58d45da1d33b24e97af64efb12ae extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Subscription:cancel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Subscription:cancel.html.twig"));

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
        $this->parent = $this->loadTemplate("WebBundle::login.html.twig", "WebBundle:Subscription:cancel.html.twig", 1);
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
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subscription"] ?? $this->getContext($context, "subscription")), "pack", []), "html", null, true);
        echo "</h5>
\t\t<span class=\"fas fa-check float-right\"></span>
\t\t<span class=\"float-right price-step-1\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subscription"] ?? $this->getContext($context, "subscription")), "price", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subscription"] ?? $this->getContext($context, "subscription")), "currency", []), "html", null, true);
        echo "</span>
\t</div>
\t<div class=\"subscribe-title\" id=\"selected_pack\">
\t\t<span>2</span>
\t\t<h5>Forma de pagamento</h5>
\t\t<span class=\"fas fa-check float-right\"></span>
\t\t";
        // line 22
        if (($this->getAttribute(($context["subscription"] ?? $this->getContext($context, "subscription")), "method", []) == "manual")) {
            // line 23
            echo "\t\t\t<span class=\"float-right price-step-1\"><i class='fas fa-money-check-alt'></i> Pagamento por PIX </span>
\t\t";
        } elseif (($this->getAttribute(        // line 24
($context["subscription"] ?? $this->getContext($context, "subscription")), "method", []) == "card")) {
            // line 25
            echo "\t\t\t<span class=\"float-right price-step-1\"><i class='far fa-credit-card'></i> Cartão de Crédito</span>
\t\t";
        } elseif (($this->getAttribute(        // line 26
($context["subscription"] ?? $this->getContext($context, "subscription")), "method", []) == "paypal")) {
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
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute(($context["subscription"] ?? $this->getContext($context, "subscription")), "status", [])), "html", null, true);
        echo "</h5>
\t\t<span class=\"float-right price-step-1\"><i class='fas fa-exclamation-circle'></i> Não pago</span>
\t</div>

\t<span class=\"paypal-redirect\">
\t\t\t<i class=\"fas fa-exclamation-circle\"></i>
\t\t\t<p>Pagamento Phe não recebido, por favor, tente novamente ou entre em contato com nossa equipe de suporte,</p>  
\t</span>

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Subscription:cancel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 32,  111 => 29,  107 => 27,  105 => 26,  102 => 25,  100 => 24,  97 => 23,  95 => 22,  84 => 16,  79 => 14,  71 => 8,  62 => 7,  51 => 1,  49 => 6,  47 => 5,  45 => 4,  43 => 3,  41 => 2,  29 => 1,);
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
\t\t<h5>Forma de pagamento</h5>
\t\t<span class=\"fas fa-check float-right\"></span>
\t\t{% if subscription.method == \"manual\" %}
\t\t\t<span class=\"float-right price-step-1\"><i class='fas fa-money-check-alt'></i> Pagamento por PIX </span>
\t\t{% elseif subscription.method == \"card\" %}
\t\t\t<span class=\"float-right price-step-1\"><i class='far fa-credit-card'></i> Cartão de Crédito</span>
\t\t{% elseif subscription.method == \"paypal\" %}
\t\t\t<span class=\"float-right price-step-1\"><i class='fab fa-paypal'></i> PayPal</span>
\t\t{% endif %}
\t</div>
\t<div class=\"subscribe-title\">
\t\t<span>3</span>
\t\t<h5>Pagamento {{subscription.status|capitalize}}</h5>
\t\t<span class=\"float-right price-step-1\"><i class='fas fa-exclamation-circle'></i> Não pago</span>
\t</div>

\t<span class=\"paypal-redirect\">
\t\t\t<i class=\"fas fa-exclamation-circle\"></i>
\t\t\t<p>Pagamento Phe não recebido, por favor, tente novamente ou entre em contato com nossa equipe de suporte,</p>  
\t</span>

</div>

{% endblock %}", "WebBundle:Subscription:cancel.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Subscription/cancel.html.twig");
    }
}
