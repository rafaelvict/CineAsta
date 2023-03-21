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

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_5cd46fde7333f9f1255cc044f84355844106d18b19f22882b2210286e54ec3c2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'fos_user_content' => [$this, 'block_fos_user_content'],
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
        $context["subtitle"] = "Resetting password";
        // line 3
        $context["og_description"] = "Resetting password";
        // line 4
        $context["og_type"] = "null";
        // line 5
        $context["og_image"] = "null";
        // line 6
        $context["keywords"] = "null";
        // line 1
        $this->parent = $this->loadTemplate("WebBundle::login.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        // line 10
        echo "\t\t\t\t<div class=\"login-box\">
\t\t\t\t\t<div class=\"notif-body\">
\t\t\t\t\t\t<div class=\"carda__body pdn--al\">
\t\t\t\t\t\t\t<i class=\"far fa-check-circle login-icon\"></i>
\t\t\t\t\t\t\t";
        // line 15
        echo "\t\t\t\t\t\t\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 20
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t
";
    }

    // line 15
    public function block_fos_user_content($context, array $blocks = [])
    {
        // line 16
        echo "\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t";
        // line 17
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", ["%tokenLifetime%" => ($context["tokenLifetime"] ?? null)], "FOSUserBundle"), "html", null, true));
        echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 17,  74 => 16,  71 => 15,  63 => 20,  60 => 15,  54 => 10,  51 => 9,  46 => 1,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "FOSUserBundle:Resetting:check_email.html.twig", "/www/wwwroot/tyflex.07.03/src/UserBundle/Resources/views/Resetting/check_email.html.twig");
    }
}
