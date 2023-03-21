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

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_d7ebac4f51411f29a1d6bf9dda7c109cbb60b64468816e274744ef59885135f8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        // line 2
        $context["subtitle"] = "Cadastro";
        // line 3
        $context["og_description"] = "Cadastro";
        // line 4
        $context["og_type"] = "null";
        // line 5
        $context["og_image"] = "null";
        // line 6
        $context["keywords"] = "null";
        // line 1
        $this->parent = $this->loadTemplate("WebBundle::login.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
                    <span class=\"notif-title\"><i class=\"fa fa-fw fa-user-plus\"></i>  Criar Conta </span>
                </div>
                <div class=\"notif-body\">
                    <div class=\"carda__body pdn--al\">
                        <div class=\"row\">
                            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => ["class" => "fos_user_registration_register"]]);
        echo "
                            <div class=\"form-group\">
                                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "E-mail"]]);
        echo "
                                <span class=\"validate-input\">";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'errors');
        echo "</span>
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nome"]]);
        echo "
                                <span class=\"validate-input\">";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", []), 'errors');
        echo "</span>
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "first", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Senha"]]);
        echo "
                                <span class=\"validate-input\">";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "first", []), 'errors');
        echo "</span>
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "second", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Digite a senha novamente"]]);
        echo "
                                <span class=\"validate-input\">";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "second", []), 'errors');
        echo "</span>
                            </div>
                            <div class=\"form-group checkbox clearfix\">
                            <label class=\"float-left remember-me\">
                                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "privacypolicy", []), 'widget');
        echo " Eu li e concordo <a  href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_privacypolicy");
        echo "\">Dúvidas?</a>
                            </label>
                            <span class=\"validate-input\">";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "privacypolicy", []), 'errors');
        echo "</span>
                            </div>
                            <div class=\"form-group  row mrg--vh\">
                                <div class=\"col-sm-12\">
                                    <button type=\"submit\" class=\"btn btn-primary btn-block\">
                                    <i class=\"fa fa-fw fa-user-plus\"></i> ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", [], "FOSUserBundle"), "html", null, true);
        echo "
                                    </button>
                                </div>
                            </div>
                            <div>
                                <p>Já tem uma conta?
                                <a  href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
        echo "</a><br></p>
                            </div>
                            ";
        // line 51
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
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 51,  150 => 49,  141 => 43,  133 => 38,  126 => 36,  119 => 32,  115 => 31,  109 => 28,  105 => 27,  99 => 24,  95 => 23,  89 => 20,  85 => 19,  80 => 17,  71 => 10,  62 => 9,  51 => 1,  49 => 6,  47 => 5,  45 => 4,  43 => 3,  41 => 2,  29 => 1,);
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
{% set subtitle =   \"Cadastro\"  %}
{% set og_description =  \"Cadastro\" %}
{% set og_type =  \"null\" %}
{% set og_image =  \"null\" %}
{% set keywords =  \"null\" %}
{% trans_default_domain 'FOSUserBundle' %}

{% block body %}
            <div class=\"login-box\">
                <div class=\"notif-head\">
                    <span class=\"notif-title\"><i class=\"fa fa-fw fa-user-plus\"></i>  Criar Conta </span>
                </div>
                <div class=\"notif-body\">
                    <div class=\"carda__body pdn--al\">
                        <div class=\"row\">
                            {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
                            <div class=\"form-group\">
                                {{form_widget(form.email,{\"attr\":{\"class\":\"form-control\",\"placeholder\":\"E-mail\"}})}}
                                <span class=\"validate-input\">{{form_errors(form.email)}}</span>
                            </div>
                            <div class=\"form-group\">
                                {{form_widget(form.name,{\"attr\":{\"class\":\"form-control\",\"placeholder\":\"Nome\"}})}}
                                <span class=\"validate-input\">{{form_errors(form.name)}}</span>
                            </div>
                            <div class=\"form-group\">
                                {{form_widget(form.plainPassword.first,{\"attr\":{\"class\":\"form-control\",\"placeholder\":\"Senha\"}})}}
                                <span class=\"validate-input\">{{form_errors(form.plainPassword.first)}}</span>
                            </div>
                            <div class=\"form-group\">
                                {{form_widget(form.plainPassword.second,{\"attr\":{\"class\":\"form-control\",\"placeholder\":\"Digite a senha novamente\"}})}}
                                <span class=\"validate-input\">{{form_errors(form.plainPassword.second)}}</span>
                            </div>
                            <div class=\"form-group checkbox clearfix\">
                            <label class=\"float-left remember-me\">
                                {{form_widget(form.privacypolicy)}} Eu li e concordo <a  href=\"{{path(\"app_home_privacypolicy\")}}\">Dúvidas?</a>
                            </label>
                            <span class=\"validate-input\">{{form_errors(form.privacypolicy)}}</span>
                            </div>
                            <div class=\"form-group  row mrg--vh\">
                                <div class=\"col-sm-12\">
                                    <button type=\"submit\" class=\"btn btn-primary btn-block\">
                                    <i class=\"fa fa-fw fa-user-plus\"></i> {{ 'registration.submit'|trans }}
                                    </button>
                                </div>
                            </div>
                            <div>
                                <p>Já tem uma conta?
                                <a  href=\"{{path(\"fos_user_security_login\")}}\">{{'security.login.submit'|trans}}</a><br></p>
                            </div>
                            {{ form_end(form) }}
                        </div>
                    </div>
                </div>
            </div>
       {% endblock %}
       ", "FOSUserBundle:Registration:register.html.twig", "/www/wwwroot/tyflex.07.03/src/UserBundle/Resources/views/Registration/register.html.twig");
    }
}
