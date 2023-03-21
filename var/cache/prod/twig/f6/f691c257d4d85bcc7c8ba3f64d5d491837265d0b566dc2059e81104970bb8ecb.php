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
class __TwigTemplate_b859800aab8af5778fe76764405556c661e363cae5c7d75ec4ed7d1722b323b1 extends \Twig\Template
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
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        // line 8
        echo "    <div class=\"login-box\">
        <div class=\"notif-head\">
            <span class=\"notif-title\"><i class=\"fa fa-fw fa-lock\"></i>  Login </span>
        </div>
        <div class=\"notif-body\">
            <div class=\"carda__body pdn--al\">
                ";
        // line 14
        if (($context["error"] ?? null)) {
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
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "\" />
                        <div class=\"form-group \">
                            <input class=\"form-control\" type=\"email\" id=\"username\" name=\"_username\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
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
        return array (  115 => 45,  109 => 42,  103 => 39,  95 => 34,  84 => 26,  79 => 24,  75 => 23,  72 => 22,  63 => 15,  61 => 14,  53 => 8,  50 => 7,  45 => 1,  43 => 6,  41 => 5,  39 => 4,  37 => 3,  35 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "FOSUserBundle:Security:login.html.twig", "/www/wwwroot/tyflex.07.03/src/UserBundle/Resources/views/Security/login.html.twig");
    }
}
