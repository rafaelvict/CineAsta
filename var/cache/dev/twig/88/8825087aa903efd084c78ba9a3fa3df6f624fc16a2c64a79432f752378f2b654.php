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

/* WebBundle:Subscription:manual.html.twig */
class __TwigTemplate_9a24125d0e78a6e8cf859e391e516d98d0a4b3f21821e99c0a5b5716ed313dfc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Subscription:manual.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Subscription:manual.html.twig"));

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
        $this->parent = $this->loadTemplate("WebBundle::login.html.twig", "WebBundle:Subscription:manual.html.twig", 1);
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
\t\t<span class=\"float-right price-step-1\"><i class='fas fa-money-check-alt'></i>Pagamento por PIX </span>
\t</div>
\t<div class=\"subscribe-title\">
\t\t<span>3</span>
\t\t<h5>Carregue suas informações de pagamento</h5>
\t\t<span class=\"float-right\"><i class=\"fas fa-money-check-alt\"></i></span>
\t</div>
\t\t<p>
        <div class=\"form-group\">
        \t<label>Detalhes da nossa conta de pagamento :</label>
        \t<p class=\"banque-account\">
                ";
        // line 35
        echo nl2br(twig_escape_filter($this->env, ($context["account"] ?? $this->getContext($context, "account")), "html", null, true));
        echo "
        \t</p>
        </div>
\t\t</p>
\t\t";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"form-group\">
        \t<label>Coloque seu E-mail</label>
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "transaction", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            <span class=\"validate-input\">";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "transaction", []), 'errors');
        echo "</span>
        </div>
        <div class=\"form-group\">
        \t<label>Confirme seu E-mail</label>
            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "infos", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            <span class=\"validate-input\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "infos", []), 'errors');
        echo "</span>
        </div>
        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", []), 'widget', ["attr" => ["class" => "float-right btn btn-primary"]]);
        echo "</span>
        <div class=\"file-input\">
        \t<div class=\"message-after\">\t<i class=\"fas fa-check \"></i> O arquivo foi selecionado</div>
        \t<div class=\"message-before\">\t<i class=\"fas fa-money-check-alt\"></i> Clique para fazer upload do arquivo aqui</div>
       \t</div>
        <span class=\"validate-input\">";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", []), 'errors');
        echo "</span>
        <button class=\"float-right btn btn-primary\"><i class=\"fas fa-check\"></i> Envie seu pagamento</button>
        ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Subscription:manual.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 57,  149 => 55,  141 => 50,  136 => 48,  132 => 47,  125 => 43,  121 => 42,  115 => 39,  108 => 35,  85 => 17,  80 => 15,  71 => 8,  62 => 7,  51 => 1,  49 => 6,  47 => 5,  45 => 4,  43 => 3,  41 => 2,  29 => 1,);
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
\t\t<span class=\"float-right price-step-1\"><i class='fas fa-money-check-alt'></i>Pagamento por PIX </span>
\t</div>
\t<div class=\"subscribe-title\">
\t\t<span>3</span>
\t\t<h5>Carregue suas informações de pagamento</h5>
\t\t<span class=\"float-right\"><i class=\"fas fa-money-check-alt\"></i></span>
\t</div>
\t\t<p>
        <div class=\"form-group\">
        \t<label>Detalhes da nossa conta de pagamento :</label>
        \t<p class=\"banque-account\">
                {{account|nl2br}}
        \t</p>
        </div>
\t\t</p>
\t\t{{form_start(form)}}
        <div class=\"form-group\">
        \t<label>Coloque seu E-mail</label>
            {{form_widget(form.transaction,{\"attr\":{\"class\":\"form-control\"}})}}
            <span class=\"validate-input\">{{form_errors(form.transaction)}}</span>
        </div>
        <div class=\"form-group\">
        \t<label>Confirme seu E-mail</label>
            {{form_widget(form.infos,{\"attr\":{\"class\":\"form-control\"}})}}
            <span class=\"validate-input\">{{form_errors(form.infos)}}</span>
        </div>
        {{form_widget(form.file,{attr:{\"class\":\"float-right btn btn-primary\"}})}}</span>
        <div class=\"file-input\">
        \t<div class=\"message-after\">\t<i class=\"fas fa-check \"></i> O arquivo foi selecionado</div>
        \t<div class=\"message-before\">\t<i class=\"fas fa-money-check-alt\"></i> Clique para fazer upload do arquivo aqui</div>
       \t</div>
        <span class=\"validate-input\">{{form_errors(form.file)}}</span>
        <button class=\"float-right btn btn-primary\"><i class=\"fas fa-check\"></i> Envie seu pagamento</button>
        {{form_end(form)}}

</div>

{% endblock %}", "WebBundle:Subscription:manual.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Subscription/manual.html.twig");
    }
}
