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
class __TwigTemplate_adef959914754f327382396aba5ed1a3a53a0ab9ed976ae73ce9ee6ed282b376 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Subscription:subscribe.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Subscription:subscribe.html.twig"));

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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["id" => "form_payment_step"]]);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "packs", []));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 18
            echo "   \t   \t";
            $context["pack"] = null;
            // line 19
            echo "
   \t\t";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["packs"] ?? $this->getContext($context, "packs")));
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
            if (($this->getAttribute(($context["pack"] ?? $this->getContext($context, "pack")), "discount", []) != null)) {
                // line 29
                echo "\t\t\t\t\t<p>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["pack"] ?? $this->getContext($context, "pack")), "discount", []), "html", null, true);
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
            if (($this->getAttribute(($context["pack"] ?? $this->getContext($context, "pack")), "description", []) != null)) {
                // line 34
                echo "\t\t\t\t\t<h4>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["pack"] ?? $this->getContext($context, "pack")), "description", []), "html", null, true);
                echo "</h4>
\t\t\t\t";
            }
            // line 36
            echo "\t\t\t\t<span>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pack"] ?? $this->getContext($context, "pack")), "price", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["currency"] ?? $this->getContext($context, "currency")), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "method", []));
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
            echo ($context["icon"] ?? $this->getContext($context, "icon"));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  236 => 79,  231 => 76,  219 => 70,  215 => 69,  211 => 68,  205 => 66,  202 => 65,  199 => 64,  196 => 63,  193 => 62,  190 => 61,  187 => 60,  184 => 59,  181 => 58,  177 => 57,  158 => 40,  145 => 36,  139 => 34,  137 => 33,  133 => 32,  130 => 31,  124 => 29,  122 => 28,  118 => 27,  112 => 25,  106 => 24,  103 => 23,  100 => 22,  97 => 21,  93 => 20,  90 => 19,  87 => 18,  83 => 17,  71 => 8,  62 => 7,  51 => 1,  49 => 6,  47 => 5,  45 => 4,  43 => 3,  41 => 2,  29 => 1,);
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
{{ form_start(form, {'attr': {'id': 'form_payment_step'}}) }}

<div class=\"tab-title\">Inscreva-se agora!</div>
<div id=\"subscribe-plan\">
\t<div class=\"subscribe-title\">
\t\t<span>1</span>
\t\t<h5>Selecione um Pacote </h5>
\t</div>
\t<br>
   \t{% for field in form.packs %}
   \t   \t{% set pack = null %}

   \t\t{% for p in packs %}
   \t\t    {% if field.vars.value == p.id %}
   \t\t    \t{% set pack = p %}
   \t\t    {% endif %}
   \t\t{% endfor %}
\t\t<label class=\"pack\" alt=\"{{field.vars.value}}\" >
\t\t\t<div>
\t\t\t\t{{ form_widget(field) }}
\t\t\t\t{% if pack.discount != null %}
\t\t\t\t\t<p>{{pack.discount}}</p>
\t\t\t\t{% endif %}
\t\t\t\t
\t\t\t\t<h5>{{ field.vars.label }}</h5>
\t\t\t\t{% if pack.description != null %}
\t\t\t\t\t<h4>{{pack.description}}</h4>
\t\t\t\t{% endif %}
\t\t\t\t<span>{{pack.price}} {{currency}}</span>
\t\t\t</div>
\t\t</label>
    {% endfor %}
\t <p class=\"error-plan\">• Selecione um plano</p>
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

\t{% for field in form.method %}
\t\t{% set icon  = \"<i class='fab fa-paypal'></i>\" %}
   \t\t{% if field.vars.value == \"paypal\" %}
      \t\t{% set icon  = \"<i class='fab fa-paypal'></i>\" %}
   \t\t{% elseif field.vars.value == \"card\" %}
      \t\t{% set icon  = \"<i class='far fa-credit-card'></i>\"  %}
   \t\t{% elseif field.vars.value == \"manual\" %}
   \t\t\t{% set icon  = \"<i class='fas fa-money-check-alt'></i>\"  %}
   \t\t{% endif %}
\t\t<label class=\"payment\" alt=\"{{field.vars.value}}\">
\t\t\t<div>
\t\t\t\t{{icon|raw}}
\t\t\t\t{{ form_widget(field) }}
\t\t\t\t<h4>{{ field.vars.label }}</h4>
\t\t\t\t<i class=\"fas fa-check\"></i>
\t\t\t</div>
\t\t</label>

    {% endfor %}
\t <p class=\"error-method\">• Selecione um método de pagamento</p>
\t <span id=\"go-to-pay\" class=\"float-right btn btn-primary\"><i class=\"fas fa-check\"></i> PAGUE AGORA</button>
</div>
{{form_end(form)}}

{% endblock %}", "WebBundle:Subscription:subscribe.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Subscription/subscribe.html.twig");
    }
}
