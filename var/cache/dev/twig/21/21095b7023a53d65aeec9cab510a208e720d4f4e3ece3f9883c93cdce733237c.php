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

/* WebBundle:Subscription:card.html.twig */
class __TwigTemplate_744c2434cc41d27f02100c3097b412b062c808f40de69598ba137609ca5232fd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'script' => [$this, 'block_script'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Subscription:card.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Subscription:card.html.twig"));

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
        $this->parent = $this->loadTemplate("WebBundle::login.html.twig", "WebBundle:Subscription:card.html.twig", 1);
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
\t\t<span class=\"float-right price-step-1\"><i class='far fa-credit-card'></i> Cartão de crédito </span>
\t</div>
\t<div class=\"subscribe-title\">
\t\t<span>3</span>
\t\t<h5>Carregue suas informações de pagamento</h5>
\t\t<span class=\"float-right\"><i class=\"far fa-credit-card\"></i></span>
\t</div>
\t<br>
\t<div class='alert alert-danger alert-card' role='alert'>
\t\t<i class='fas fa-exclamation-circle'></i> Não foi possível processar seu pagamento
\t</div>
\t<div>
\t<div class=\"form-group\">
        \t<label>Nome completo :</label>
\t\t\t<input id=\"cardholder-name\" type=\"text\" class=\"form-control\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["subscription"] ?? $this->getContext($context, "subscription")), "user", []), "name", []), "html", null, true);
        echo "\">
    </div>
\t<div class=\"form-group\">
        \t<label>Número do cartão de crédito: </label>
\t\t\t<div id=\"card-element\"></div>
    </div>
\t<input id=\"secret\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["intent"] ?? $this->getContext($context, "intent")), "client_secret", []), "html", null, true);
        echo "\" type=\"hidden\" >
\t<button id=\"card-button\" class=\"float-right btn btn-primary\" data-secure=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["intent"] ?? $this->getContext($context, "intent")), "client_secret", []), "html", null, true);
        echo "\"><i class=\"fas fa-check \"></i> Enviar pagamento</button>
\t</div>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
    public function block_script($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 53
        echo "<script src=\"https://js.stripe.com/v3/\"></script>
";
        // line 54
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "theme", []) == "dark")) {
            // line 55
            echo "<script type=\"text/javascript\">

var style = {
    base: {
        color: '#eee',
        lineHeight: '24px',
        fontFamily: '\"Helvetica Neue\", Helvetica, sans-serif',
        fontSmoothing: 'antialiased',
        fontSize: '16px',
        '::placeholder': {
            color: '#aab7c4'
        }
    },
    invalid: {
        color: '#fa755a',
        iconColor: '#fa755a'
    }
};

</script>
";
        } else {
            // line 76
            echo "    <script type=\"text/javascript\">

var style = {
    base: {
        color: '#555',
        lineHeight: '24px',
        fontFamily: '\"Helvetica Neue\", Helvetica, sans-serif',
        fontSmoothing: 'antialiased',
        fontSize: '16px',
        '::placeholder': {
            color: '#555'
        }
    },
    invalid: {
        color: '#fa755a',
        iconColor: '#fa755a'
    }
};

</script>
";
        }
        // line 97
        echo " <script type=\"text/javascript\">

 var stripe = Stripe('";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "stripepublickey", []), "html", null, true);
        echo "');

var elements = stripe.elements();
var cardElement = elements.create('card',{style: style});
cardElement.mount('#card-element');


var cardholderName =  document.getElementById(\"cardholder-name\");
var cardButton =  document.getElementById(\"card-button\");
var secretInput =  document.getElementById(\"secret\");

var clientSecret = secretInput.value;

cardButton.addEventListener('click', function(ev) {
\tcardButton.disabled = true;
\tcardButton.innerHTML = \" <i class='fas fa-circle-notch fa-spin'></i> Submitting Payment\";

  \tstripe.handleCardPayment(
    clientSecret, cardElement,{
\t\t\tpayment_method_data:{
\t\t\t\tbilling_details: {name: cardholderName.value}
\t\t\t}
\t\t}
  ).then(function(result) {
    if (result.error) {
\t\tcardButton.disabled = false;
\t\tcardButton.innerHTML = \"<i class='fas fa-check'></i> Submit Payment\" ;
\t\t\$(\".alert-card\").show();

    } else {
    \tconsole.log(result.paymentIntent.id);
\t\tvar d = {
\t\t\t\"id\": ";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subscription"] ?? $this->getContext($context, "subscription")), "id", []), "html", null, true);
        echo ",
\t\t\t\"intent\": result.paymentIntent.id
\t\t};
\t\t\$.ajax({
\t\t\ttype: \"post\",
\t\t\tdata: d,
\t\t\turl: \"/ajax/subscription/charge.html\",
\t\t\tsuccess: function(result) {
\t\t\t\tif (result==200) {
\t\t\t\t\tlocation.replace(\"/subscription/finish/\"+ ";
        // line 140
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subscription"] ?? $this->getContext($context, "subscription")), "id", []), "html", null, true);
        echo " +\".html\");
\t\t\t\t}else{
\t\t\t\t\t\$(\".alert-card\").show();
\t\t\t\t}
\t\t\t},
 \t\t\terror: function(xhr){
 \t\t\t\t\$(\".alert-card\").show();
    \t\t}

\t\t});
    }
  \t});
});

 </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Subscription:card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 140,  240 => 131,  205 => 99,  201 => 97,  178 => 76,  155 => 55,  153 => 54,  150 => 53,  141 => 52,  125 => 45,  121 => 44,  112 => 38,  86 => 17,  81 => 15,  72 => 8,  63 => 7,  52 => 1,  50 => 6,  48 => 5,  46 => 4,  44 => 3,  42 => 2,  30 => 1,);
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
\t\t<span class=\"float-right price-step-1\"><i class='far fa-credit-card'></i> Cartão de crédito </span>
\t</div>
\t<div class=\"subscribe-title\">
\t\t<span>3</span>
\t\t<h5>Carregue suas informações de pagamento</h5>
\t\t<span class=\"float-right\"><i class=\"far fa-credit-card\"></i></span>
\t</div>
\t<br>
\t<div class='alert alert-danger alert-card' role='alert'>
\t\t<i class='fas fa-exclamation-circle'></i> Não foi possível processar seu pagamento
\t</div>
\t<div>
\t<div class=\"form-group\">
        \t<label>Nome completo :</label>
\t\t\t<input id=\"cardholder-name\" type=\"text\" class=\"form-control\" value=\"{{subscription.user.name}}\">
    </div>
\t<div class=\"form-group\">
        \t<label>Número do cartão de crédito: </label>
\t\t\t<div id=\"card-element\"></div>
    </div>
\t<input id=\"secret\" value=\"{{ intent.client_secret}}\" type=\"hidden\" >
\t<button id=\"card-button\" class=\"float-right btn btn-primary\" data-secure=\"{{ intent.client_secret}}\"><i class=\"fas fa-check \"></i> Enviar pagamento</button>
\t</div>
</div>


{% endblock %}

{% block script %}
<script src=\"https://js.stripe.com/v3/\"></script>
{% if app.user.theme == \"dark\" %}
<script type=\"text/javascript\">

var style = {
    base: {
        color: '#eee',
        lineHeight: '24px',
        fontFamily: '\"Helvetica Neue\", Helvetica, sans-serif',
        fontSmoothing: 'antialiased',
        fontSize: '16px',
        '::placeholder': {
            color: '#aab7c4'
        }
    },
    invalid: {
        color: '#fa755a',
        iconColor: '#fa755a'
    }
};

</script>
{% else %}
    <script type=\"text/javascript\">

var style = {
    base: {
        color: '#555',
        lineHeight: '24px',
        fontFamily: '\"Helvetica Neue\", Helvetica, sans-serif',
        fontSmoothing: 'antialiased',
        fontSize: '16px',
        '::placeholder': {
            color: '#555'
        }
    },
    invalid: {
        color: '#fa755a',
        iconColor: '#fa755a'
    }
};

</script>
{% endif %}
 <script type=\"text/javascript\">

 var stripe = Stripe('{{settings.stripepublickey}}');

var elements = stripe.elements();
var cardElement = elements.create('card',{style: style});
cardElement.mount('#card-element');


var cardholderName =  document.getElementById(\"cardholder-name\");
var cardButton =  document.getElementById(\"card-button\");
var secretInput =  document.getElementById(\"secret\");

var clientSecret = secretInput.value;

cardButton.addEventListener('click', function(ev) {
\tcardButton.disabled = true;
\tcardButton.innerHTML = \" <i class='fas fa-circle-notch fa-spin'></i> Submitting Payment\";

  \tstripe.handleCardPayment(
    clientSecret, cardElement,{
\t\t\tpayment_method_data:{
\t\t\t\tbilling_details: {name: cardholderName.value}
\t\t\t}
\t\t}
  ).then(function(result) {
    if (result.error) {
\t\tcardButton.disabled = false;
\t\tcardButton.innerHTML = \"<i class='fas fa-check'></i> Submit Payment\" ;
\t\t\$(\".alert-card\").show();

    } else {
    \tconsole.log(result.paymentIntent.id);
\t\tvar d = {
\t\t\t\"id\": {{subscription.id}},
\t\t\t\"intent\": result.paymentIntent.id
\t\t};
\t\t\$.ajax({
\t\t\ttype: \"post\",
\t\t\tdata: d,
\t\t\turl: \"/ajax/subscription/charge.html\",
\t\t\tsuccess: function(result) {
\t\t\t\tif (result==200) {
\t\t\t\t\tlocation.replace(\"/subscription/finish/\"+ {{subscription.id}} +\".html\");
\t\t\t\t}else{
\t\t\t\t\t\$(\".alert-card\").show();
\t\t\t\t}
\t\t\t},
 \t\t\terror: function(xhr){
 \t\t\t\t\$(\".alert-card\").show();
    \t\t}

\t\t});
    }
  \t});
});

 </script>

{% endblock %}
", "WebBundle:Subscription:card.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Subscription/card.html.twig");
    }
}
