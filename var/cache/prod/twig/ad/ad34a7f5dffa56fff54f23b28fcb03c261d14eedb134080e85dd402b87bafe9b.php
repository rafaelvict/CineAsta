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
class __TwigTemplate_bbab00caa37613862b8dc56f4ee42d4325c50b3879d95850fca659e62c175ff7 extends \Twig\Template
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["subscription"] ?? null), "user", []), "name", []), "html", null, true);
        echo "\">
    </div>
\t<div class=\"form-group\">
        \t<label>Número do cartão de crédito: </label>
\t\t\t<div id=\"card-element\"></div>
    </div>
\t<input id=\"secret\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["intent"] ?? null), "client_secret", []), "html", null, true);
        echo "\" type=\"hidden\" >
\t<button id=\"card-button\" class=\"float-right btn btn-primary\" data-secure=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["intent"] ?? null), "client_secret", []), "html", null, true);
        echo "\"><i class=\"fas fa-check \"></i> Enviar pagamento</button>
\t</div>
</div>


";
    }

    // line 52
    public function block_script($context, array $blocks = [])
    {
        // line 53
        echo "<script src=\"https://js.stripe.com/v3/\"></script>
";
        // line 54
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "theme", []) == "dark")) {
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "stripepublickey", []), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subscription"] ?? null), "id", []), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subscription"] ?? null), "id", []), "html", null, true);
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
        return array (  222 => 140,  210 => 131,  175 => 99,  171 => 97,  148 => 76,  125 => 55,  123 => 54,  120 => 53,  117 => 52,  107 => 45,  103 => 44,  94 => 38,  68 => 17,  63 => 15,  54 => 8,  51 => 7,  46 => 1,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Subscription:card.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Subscription/card.html.twig");
    }
}
