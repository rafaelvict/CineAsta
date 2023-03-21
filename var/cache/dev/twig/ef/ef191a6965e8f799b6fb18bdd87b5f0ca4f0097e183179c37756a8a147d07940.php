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

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_847e65928dfff47e01edb7b3cf4621316b6ea01ac7d5483378decf2cf6caf4db extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "WebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        // line 2
        $context["subtitle"] = "Mudar senha";
        // line 3
        $context["og_description"] = "Mudar senha";
        // line 4
        $context["og_type"] = "null";
        // line 5
        $context["og_image"] = "null";
        // line 6
        $context["keywords"] = "null";
        // line 1
        $this->parent = $this->loadTemplate("WebBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mudar senha";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "\t<div class=\"row content-section\">
\t\t<div class=\"col-md-12\" >
\t\t\t<div class=\"actor-header-bg\" style=\" background-image: url('";
        // line 12
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "media", []), "type", []) == "link")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "media", []), "url", [])) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "media", []), "link", [])))), "html", null, true);
        echo "');\">
\t\t\t\t<div class=\"movie-header actor-header\">
\t\t\t\t\t<div class=\"movie-title\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "name", []), "html", null, true);
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<img class=\"actor-logo\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "media", []), "type", []) == "link")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "media", []), "url", [])) : ($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "media", []), "link", [])), "user_image"))), "html", null, true);
        echo "\">
\t\t</div>
\t\t<div class=\"col-md-3\" >
\t\t\t<a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\" class=\"btn btn-block btn-sm play-btn\"><i class=\"fas fa-user\"></i> Meu Perfil</a>
\t\t\t<a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_myprofile_edit");
        echo "\" class=\"btn btn-block btn-sm play-btn\"><i class=\"fas fa-user-edit\"></i> Editar Perfil</a>
\t\t\t<a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_user_subscriptions");
        echo "\" class=\"btn btn-block btn-sm play-btn\"><i class=\"fas fa-star\"></i> Minhas assinaturas</a>
\t\t\t";
        // line 23
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "type", []) == "email")) {
            // line 24
            echo "\t\t\t\t<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
            echo "\" class=\"btn btn-block btn-sm play-btn\"><i class=\"fas fa-user-lock\"></i> Mudar senha</a>
\t\t\t";
        }
        // line 26
        echo "\t\t\t<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\" class=\"btn btn-block btn-sm play-btn\"><i class=\"fas fa-sign-out-alt\"></i> Sair</a>
\t\t</div>
\t\t<div class=\"col-md-9\">
\t\t\t<h3>Mudar senha</h3>
\t\t\t<br>
\t\t\t";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => ["class" => "fos_user_change_password"]]);
        echo "
\t\t
\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "current_password", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Senha atual"]]);
        echo "
\t\t\t\t<span class=\"validate-input\">";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "current_password", []), 'errors');
        echo "</span>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "first", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nova Senha"]]);
        echo "
\t\t\t\t<span class=\"validate-input\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "first", []), 'errors');
        echo "</span>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "second", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Repita a nova senha"]]);
        echo "
\t\t\t\t<span class=\"validate-input\">";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "second", []), 'errors');
        echo "</span>
\t\t\t</div>
\t\t\t<button  class=\"btn btn-raised btn-primary float-right\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mudar senha", [], "FOSUserBundle"), "html", null, true);
        echo "</button>
\t\t\t";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 46,  175 => 45,  170 => 43,  166 => 42,  160 => 39,  156 => 38,  150 => 35,  146 => 34,  140 => 31,  131 => 26,  125 => 24,  123 => 23,  119 => 22,  115 => 21,  111 => 20,  105 => 17,  99 => 14,  94 => 12,  90 => 10,  81 => 9,  63 => 7,  52 => 1,  50 => 6,  48 => 5,  46 => 4,  44 => 3,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"WebBundle::layout.html.twig\" %}
{% set subtitle =   \"Mudar senha\"  %}
{% set og_description =  \"Mudar senha\" %}
{% set og_type =  \"null\" %}
{% set og_image =  \"null\" %}
{% set keywords =  \"null\" %}
{% block title %}Mudar senha{% endblock %}
{% trans_default_domain 'FOSUserBundle' %}
{% block body %}
\t<div class=\"row content-section\">
\t\t<div class=\"col-md-12\" >
\t\t\t<div class=\"actor-header-bg\" style=\" background-image: url('{{(app.user.media.type == \"link\" )? app.user.media.url : asset(app.user.media.link)}}');\">
\t\t\t\t<div class=\"movie-header actor-header\">
\t\t\t\t\t<div class=\"movie-title\">{{app.user.name}}</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<img class=\"actor-logo\" src=\"{{(app.user.media.type == \"link\" )? app.user.media.url : asset(app.user.media.link)|imagine_filter(\"user_image\")}}\">
\t\t</div>
\t\t<div class=\"col-md-3\" >
\t\t\t<a href=\"{{path(\"fos_user_profile_show\")}}\" class=\"btn btn-block btn-sm play-btn\"><i class=\"fas fa-user\"></i> Meu Perfil</a>
\t\t\t<a href=\"{{path(\"fos_user_myprofile_edit\")}}\" class=\"btn btn-block btn-sm play-btn\"><i class=\"fas fa-user-edit\"></i> Editar Perfil</a>
\t\t\t<a href=\"{{path(\"user_user_subscriptions\")}}\" class=\"btn btn-block btn-sm play-btn\"><i class=\"fas fa-star\"></i> Minhas assinaturas</a>
\t\t\t{% if app.user.type == \"email\" %}
\t\t\t\t<a href=\"{{path(\"fos_user_change_password\")}}\" class=\"btn btn-block btn-sm play-btn\"><i class=\"fas fa-user-lock\"></i> Mudar senha</a>
\t\t\t{% endif %}
\t\t\t<a href=\"{{path(\"fos_user_security_logout\")}}\" class=\"btn btn-block btn-sm play-btn\"><i class=\"fas fa-sign-out-alt\"></i> Sair</a>
\t\t</div>
\t\t<div class=\"col-md-9\">
\t\t\t<h3>Mudar senha</h3>
\t\t\t<br>
\t\t\t{{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
\t\t
\t\t\t<div class=\"form-group\">
\t\t\t\t{{form_widget(form.current_password,{\"attr\":{\"class\":\"form-control\",\"placeholder\":\"Senha atual\"}})}}
\t\t\t\t<span class=\"validate-input\">{{form_errors(form.current_password)}}</span>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t{{form_widget(form.plainPassword.first,{\"attr\":{\"class\":\"form-control\",\"placeholder\":\"Nova Senha\"}})}}
\t\t\t\t<span class=\"validate-input\">{{form_errors(form.plainPassword.first)}}</span>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t{{form_widget(form.plainPassword.second,{\"attr\":{\"class\":\"form-control\",\"placeholder\":\"Repita a nova senha\"}})}}
\t\t\t\t<span class=\"validate-input\">{{form_errors(form.plainPassword.second)}}</span>
\t\t\t</div>
\t\t\t<button  class=\"btn btn-raised btn-primary float-right\">{{ 'Mudar senha'|trans }}</button>
\t\t\t{{ form_end(form) }}
\t\t</div>
\t{% endblock %}", "FOSUserBundle:ChangePassword:change_password.html.twig", "/www/wwwroot/tyflex.07.03/src/UserBundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
