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

/* UserBundle:Resetting:reseted.html.twig */
class __TwigTemplate_7d76ff94f0bd94f16869a037789264e0df9e9cc99189ad362d63a5cbc017ad1f extends \Twig\Template
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
        $this->parent = $this->loadTemplate("WebBundle::login.html.twig", "UserBundle:Resetting:reseted.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        // line 9
        echo "\t<div class=\"login-box\">
\t\t<div class=\"notif-body\">
\t\t\t<div class=\"carda__body pdn--al\">
\t\t\t\t<i class=\"fas fa-shield-alt login-icon\"></i>
\t\t\t\t<br>
\t\t\t\t<br>
\t\t\t\t";
        // line 16
        echo "\t\t\t\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 20
        echo "\t\t\t\t<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_home_index");
        echo "\"><i class=\"fa fa-fw fa-home\"></i> Go Home</a>
\t\t\t\t<br>
\t\t\t\t<br>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    // line 16
    public function block_fos_user_content($context, array $blocks = [])
    {
        // line 17
        echo "\t\t\t\t\t<p>Hi ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "name", []), "html", null, true);
        echo " !</p>
\t\t\t\t\t<p>Your password has been reset successfully</p>
\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "UserBundle:Resetting:reseted.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 17,  77 => 16,  65 => 20,  62 => 16,  54 => 9,  51 => 8,  46 => 1,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "UserBundle:Resetting:reseted.html.twig", "/www/wwwroot/tyflex.07.03/src/UserBundle/Resources/views/Resetting/reseted.html.twig");
    }
}
