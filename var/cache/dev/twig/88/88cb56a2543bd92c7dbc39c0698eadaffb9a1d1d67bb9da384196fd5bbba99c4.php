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

/* UserBundle:ChangePassword:admin_changePassword_content.html.twig */
class __TwigTemplate_09bafe33391d0a42aa9144e5dedaebcddddfdd564b53d92847752a655aee8292 extends \Twig\Template
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
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "UserBundle:ChangePassword:admin_changePassword_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "UserBundle:ChangePassword:admin_changePassword_content.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "UserBundle:ChangePassword:admin_changePassword_content.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<div class=\"container-fluid\">
\t\t<div class=\"row\">\t\t
\t\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"card\">
                    <div class=\"tab-moivie tab-channel\">
                        <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_websettings");
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">web</i> Web Settings</a>
                        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_settings");
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">phonelink_setup</i> Mobile Settings</a>
                        <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_ads");
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">show_chart</i> Ads Settings</a>
                        <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_webads");
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">show_chart</i>Web Ads Settings</a>
                        <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_payment");
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">payment</i> Payment Settings</a>
                        <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_edit_privacypolicy");
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">privacy_tip</i> Privacy Policy</a>
                        <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_refundpolicy");
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">attach_money</i> Refund Policy</a>
                        <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_faq");
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">live_help</i> FAQ Page</a>
                        <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_change_password");
        echo "\" class=\"btn btn-tab-movie-active col-md-12\"><i class=\"material-icons\">lock</i> Change password</a>
                    </div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-sm-9\">
\t\t\t<div class=\"card \">
\t\t\t\t<div class=\"card-header card-header-icon\" data-background-color=\"rose\">
\t\t\t\t\t<i class=\"material-icons\">lock</i>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t<h4 class=\"card-title\">Change Password</h4>
\t\t\t\t\t<br>


\t\t\t\t\t";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_change_password"), "attr" => ["class" => "fos_user_change_password"]]);
        echo "
\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "current_password", []), 'label');
        echo "
\t\t\t\t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "current_password", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "current_password", []), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "first", []), 'label');
        echo "
\t\t\t\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "first", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "first", []), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "second", []), 'label');
        echo "
\t\t\t\t\t\t";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "second", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", []), "second", []), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<button  class=\"btn btn-raised btn-primary pull-right\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Change password", [], "FOSUserBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t\t\t
\t\t\t\t\t<br>
\t\t\t\t\t<br>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:ChangePassword:admin_changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 48,  162 => 47,  157 => 45,  153 => 44,  149 => 43,  143 => 40,  139 => 39,  135 => 38,  129 => 35,  125 => 34,  121 => 33,  116 => 31,  99 => 17,  95 => 16,  91 => 15,  87 => 14,  83 => 13,  79 => 12,  75 => 11,  71 => 10,  67 => 9,  60 => 4,  51 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'AppBundle::layout.html.twig' %}
{% trans_default_domain 'FOSUserBundle' %}
{% block body %}
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">\t\t
\t\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"card\">
                    <div class=\"tab-moivie tab-channel\">
                        <a href=\"{{path(\"app_home_websettings\")}}\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">web</i> Web Settings</a>
                        <a href=\"{{path(\"app_home_settings\")}}\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">phonelink_setup</i> Mobile Settings</a>
                        <a href=\"{{path(\"app_home_ads\")}}\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">show_chart</i> Ads Settings</a>
                        <a href=\"{{path(\"app_home_webads\")}}\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">show_chart</i>Web Ads Settings</a>
                        <a href=\"{{path(\"app_home_payment\")}}\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">payment</i> Payment Settings</a>
                        <a href=\"{{path(\"app_home_edit_privacypolicy\")}}\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">privacy_tip</i> Privacy Policy</a>
                        <a href=\"{{path(\"app_home_refundpolicy\")}}\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">attach_money</i> Refund Policy</a>
                        <a href=\"{{path(\"app_home_faq\")}}\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">live_help</i> FAQ Page</a>
                        <a href=\"{{path(\"admin_change_password\")}}\" class=\"btn btn-tab-movie-active col-md-12\"><i class=\"material-icons\">lock</i> Change password</a>
                    </div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-sm-9\">
\t\t\t<div class=\"card \">
\t\t\t\t<div class=\"card-header card-header-icon\" data-background-color=\"rose\">
\t\t\t\t\t<i class=\"material-icons\">lock</i>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t<h4 class=\"card-title\">Change Password</h4>
\t\t\t\t\t<br>


\t\t\t\t\t{{ form_start(form, { 'action': path('admin_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t{{form_label(form.current_password)}}
\t\t\t\t\t\t{{ form_widget(form.current_password,{attr:{\"class\":\"form-control\"}})}}
\t\t\t\t\t\t{{ form_errors(form.current_password)}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t{{form_label(form.plainPassword.first)}}
\t\t\t\t\t\t{{ form_widget(form.plainPassword.first,{attr:{\"class\":\"form-control\"}})}}
\t\t\t\t\t\t{{ form_errors(form.plainPassword.first)}}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t{{form_label(form.plainPassword.second)}}
\t\t\t\t\t\t{{ form_widget(form.plainPassword.second,{attr:{\"class\":\"form-control\"}})}}
\t\t\t\t\t\t{{ form_errors(form.plainPassword.second)}}
\t\t\t\t\t</div>
\t\t\t\t\t<button  class=\"btn btn-raised btn-primary pull-right\">{{ 'Change password'|trans }}</button>
\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t\t
\t\t\t\t\t<br>
\t\t\t\t\t<br>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
{% endblock %}", "UserBundle:ChangePassword:admin_changePassword_content.html.twig", "/www/wwwroot/tyflex.07.03/src/UserBundle/Resources/views/ChangePassword/admin_changePassword_content.html.twig");
    }
}
