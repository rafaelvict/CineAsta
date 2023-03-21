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

/* UserBundle:Security:box.html.twig */
class __TwigTemplate_5a4a1600ee4cabe0f03640efaf08fe1a4e2b3aba7a12bce39babf245de4a7a5e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"background-close login-full\">
\t<div class=\"login-box\">
\t\t<div class=\"notif-head\">
\t\t\t<span class=\"notif-close\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></span>
\t\t\t<span class=\"notif-title\"><i class=\"fa fa-fw fa-lock\"></i>  Login </span>
\t\t</div>
\t\t<div class=\"notif-body\">
\t\t\t<div class=\"carda__body pdn--al\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<form method=\"POST\" action=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" >
\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "\" />
\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t<input class=\"form-control\" type=\"email\" id=\"username\" name=\"_username\" value=\"\" placeholder=\"E-mail\" required=\"required\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group \">
\t\t\t\t\t\t\t<input placeholder=\"Senha\" class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group  row mrg--vh\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-block\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-sign-in-alt\"></i> ";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group checkbox clearfix\">
\t\t\t\t\t\t\t<a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\" class=\"btn btn-link float-right pdn--an-imp\">Resetar a Senha</a>
\t\t\t\t\t\t\t<label class=\"float-left remember-me\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\">
\t\t\t\t\t\t\t";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<p>";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("are_you_new_here"), "html", null, true);
        echo " <a  href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit"), "html", null, true);
        echo "</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "UserBundle:Security:box.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 32,  72 => 29,  66 => 26,  58 => 21,  45 => 11,  41 => 10,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "UserBundle:Security:box.html.twig", "/www/wwwroot/tyflex.07.03/src/UserBundle/Resources/views/Security/box.html.twig");
    }
}
