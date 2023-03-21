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

/* WebBundle:Home:contact.html.twig */
class __TwigTemplate_5ac127cf9dfef3658873a7180872b0ccf3da6c19c16f1dcab10662894d6cd2d4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Home:contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Home:contact.html.twig"));

        // line 2
        $context["subtitle"] = "Reportar Problemas";
        // line 3
        $context["og_description"] = "Contact us";
        // line 4
        $context["og_type"] = "null";
        // line 5
        $context["og_image"] = "null";
        // line 6
        $context["keywords"] = "null";
        // line 1
        $this->parent = $this->loadTemplate("WebBundle::login.html.twig", "WebBundle:Home:contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "            <div class=\"login-box\">
                <div class=\"notif-head\">
                    <span class=\"notif-title\"><i class=\"fas fa-envelope\"></i>  Reportar Problemas</span>
                </div>
                <div class=\"notif-body\">
                    <div class=\"carda__body pdn--al\">
                        <div class=\"row\">

                            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["method" => "post", "attr" => ["class" => "fos_user_registration_register"]]);
        echo "
                            <div class=\"form-group\">
                                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "E-mail"]]);
        echo "
                                <span class=\"validate-input\">";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'errors');
        echo "</span>
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "subject", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nome completo"]]);
        echo "
                                <span class=\"validate-input\">";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "subject", []), 'errors');
        echo "</span>
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "message", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Sua mensagem", "rows" => 5]]);
        echo "
                                <span class=\"validate-input\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "message", []), 'errors');
        echo "</span>
                            </div>
                        \t<span class=\"pull-right\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "send", []), 'widget', ["attr" => ["class" => "btn btn-raised btn-primary float-right"]]);
        echo "</span>
                            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                        </div>
                    </div>
                </div>
            </div>
       ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Home:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 32,  115 => 31,  110 => 29,  106 => 28,  100 => 25,  96 => 24,  90 => 21,  86 => 20,  81 => 18,  71 => 10,  62 => 9,  51 => 1,  49 => 6,  47 => 5,  45 => 4,  43 => 3,  41 => 2,  29 => 1,);
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
{% set subtitle =   \"Reportar Problemas\"  %}
{% set og_description =  \"Contact us\" %}
{% set og_type =  \"null\" %}
{% set og_image =  \"null\" %}
{% set keywords =  \"null\" %}
{% trans_default_domain 'FOSUserBundle' %}

{% block body %}
            <div class=\"login-box\">
                <div class=\"notif-head\">
                    <span class=\"notif-title\"><i class=\"fas fa-envelope\"></i>  Reportar Problemas</span>
                </div>
                <div class=\"notif-body\">
                    <div class=\"carda__body pdn--al\">
                        <div class=\"row\">

                            {{ form_start(form, {'method': 'post', 'attr': {'class': 'fos_user_registration_register'}}) }}
                            <div class=\"form-group\">
                                {{form_widget(form.email,{\"attr\":{\"class\":\"form-control\",\"placeholder\":\"E-mail\"}})}}
                                <span class=\"validate-input\">{{form_errors(form.email)}}</span>
                            </div>
                            <div class=\"form-group\">
                                {{form_widget(form.subject,{\"attr\":{\"class\":\"form-control\",\"placeholder\":\"Nome completo\"}})}}
                                <span class=\"validate-input\">{{form_errors(form.subject)}}</span>
                            </div>
                            <div class=\"form-group\">
                                {{form_widget(form.message,{\"attr\":{\"class\":\"form-control\",\"placeholder\":\"Sua mensagem\",\"rows\":5}})}}
                                <span class=\"validate-input\">{{form_errors(form.message)}}</span>
                            </div>
                        \t<span class=\"pull-right\">{{form_widget(form.send,{attr:{\"class\":\"btn btn-raised btn-primary float-right\"}})}}</span>
                            {{ form_end(form) }}
                        </div>
                    </div>
                </div>
            </div>
       {% endblock %}
       ", "WebBundle:Home:contact.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Home/contact.html.twig");
    }
}
