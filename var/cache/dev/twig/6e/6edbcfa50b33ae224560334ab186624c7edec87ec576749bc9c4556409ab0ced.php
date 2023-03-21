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

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_0aae7300e1fc28d15748a982e72fac04888c8a50e876aa654d9d7228cd2e5ae0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        // line 2
        $context["subtitle"] = "Login";
        // line 3
        $context["og_description"] = "Login";
        // line 4
        $context["og_type"] = "null";
        // line 5
        $context["og_image"] = "null";
        // line 6
        $context["keywords"] = "null";
        // line 1
        $this->parent = $this->loadTemplate("WebBundle::login.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        echo "    <div class=\"login-box\">
        <div class=\"notif-head\">
            <span class=\"notif-title\"><i class=\"fa fa-fw fa-lock\"></i>  Login </span>
        </div>
        <div class=\"notif-body\">
            <div class=\"carda__body pdn--al\">
                ";
        // line 14
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 15
            echo "                    <div class=\"card-content\" style=\"padding-right:10px\">
                        <div class=\"alert alert-danger\">
                            <span>
                            <b>Erreur ! </b>  incorrect username or password</span>
                        </div>
                    </div>
                ";
        }
        // line 22
        echo "                <div class=\"row email-login-section\" >
                    <form method=\"POST\" action=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" >
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                        <div class=\"form-group \">
                            <input class=\"form-control\" type=\"email\" id=\"username\" name=\"_username\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"E-mail\" required=\"required\">
                        </div>
                        <div class=\"form-group \">
                            <input placeholder=\"Senha\" class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\">
                        </div>
                        <div class=\"form-group  row mrg--vh\">
                            <div class=\"col-sm-12\">
                                <button type=\"submit\" class=\"btn btn-primary btn-block\">
                                <i class=\"fas fa-sign-in-alt\"></i> ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit"), "html", null, true);
        echo "
                                </button>
                            </div>
                        </div>
                        <div class=\"form-group checkbox clearfix\">
                            <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\" class=\"btn btn-link float-right pdn--an-imp\">Resetar a Senha</a>
                            <label class=\"float-left remember-me\">
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\">
                            ";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me"), "html", null, true);
        echo "</label>
                        </div>
                        <div>
                            <p>";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("are_you_new_here"), "html", null, true);
        echo " <a  href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit"), "html", null, true);
        echo "</a></p>
                        </div>
                    </form>
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
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 45,  127 => 42,  121 => 39,  113 => 34,  102 => 26,  97 => 24,  93 => 23,  90 => 22,  81 => 15,  79 => 14,  71 => 8,  62 => 7,  51 => 1,  49 => 6,  47 => 5,  45 => 4,  43 => 3,  41 => 2,  29 => 1,);
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
{% set subtitle =   \"Login\"  %}
{% set og_description =  \"Login\" %}
{% set og_type =  \"null\" %}
{% set og_image =  \"null\" %}
{% set keywords =  \"null\" %}
{% block body %}
    <div class=\"login-box\">
        <div class=\"notif-head\">
            <span class=\"notif-title\"><i class=\"fa fa-fw fa-lock\"></i>  Login </span>
        </div>
        <div class=\"notif-body\">
            <div class=\"carda__body pdn--al\">
                {% if error %}
                    <div class=\"card-content\" style=\"padding-right:10px\">
                        <div class=\"alert alert-danger\">
                            <span>
                            <b>Erreur ! </b>  incorrect username or password</span>
                        </div>
                    </div>
                {% endif %}
                <div class=\"row email-login-section\" >
                    <form method=\"POST\" action=\"{{ path(\"fos_user_security_check\") }}\" >
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
                        <div class=\"form-group \">
                            <input class=\"form-control\" type=\"email\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" placeholder=\"E-mail\" required=\"required\">
                        </div>
                        <div class=\"form-group \">
                            <input placeholder=\"Senha\" class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\">
                        </div>
                        <div class=\"form-group  row mrg--vh\">
                            <div class=\"col-sm-12\">
                                <button type=\"submit\" class=\"btn btn-primary btn-block\">
                                <i class=\"fas fa-sign-in-alt\"></i> {{ 'security.login.submit'|trans }}
                                </button>
                            </div>
                        </div>
                        <div class=\"form-group checkbox clearfix\">
                            <a href=\"{{path(\"fos_user_resetting_request\")}}\" class=\"btn btn-link float-right pdn--an-imp\">Resetar a Senha</a>
                            <label class=\"float-left remember-me\">
                                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\">
                            {{ 'security.login.remember_me'|trans }}</label>
                        </div>
                        <div>
                            <p>{{'are_you_new_here'|trans}} <a  href=\"{{path(\"fos_user_registration_register\")}}\">{{'registration.submit'|trans}}</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "FOSUserBundle:Security:login.html.twig", "/www/wwwroot/tyflex.07.03/src/UserBundle/Resources/views/Security/login.html.twig");
    }
}
