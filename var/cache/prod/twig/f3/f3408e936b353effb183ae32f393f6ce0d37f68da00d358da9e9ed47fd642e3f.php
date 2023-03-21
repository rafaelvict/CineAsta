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

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_d8f8e600196298c31308fd83ea4573eddde62c66ddbdd03eb3b98782ffcf0cb8 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("WebBundle::login.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        // line 9
        echo "            <div class=\"login-box\">
                <div class=\"notif-head\">
                    <span class=\"notif-title\"><i class=\"fa fa-fw fa-check\"></i> Sua conta foi criada! </span>
                </div>
                <div class=\"notif-body\">
                    <div class=\"carda__body pdn--al\">
\t\t\t\t\t\t<br>                    \t
\t\t\t\t\t\t";
        // line 17
        echo "\t\t\t\t\t\t";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 23
        echo "\t\t\t\t\t\t<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_home_index");
        echo "\"><i class=\"fa fa-fw fa-home\"></i> Tela Inicial </a>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<br>
                    </div>
                </div>
            </div>
       ";
    }

    // line 17
    public function block_fos_user_content($context, array $blocks = [])
    {
        // line 18
        echo "\t\t\t\t\t\t    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", ["%username%" => $this->getAttribute(($context["user"] ?? null), "name", [])], "FOSUserBundle"), "html", null, true);
        echo "</p>
\t\t\t\t\t\t    ";
        // line 19
        if (($context["targetUrl"] ?? null)) {
            // line 20
            echo "\t\t\t\t\t\t    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", [], "FOSUserBundle"), "html", null, true);
            echo "</a></p>
\t\t\t\t\t\t    ";
        }
        // line 22
        echo "\t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 22,  88 => 20,  86 => 19,  81 => 18,  78 => 17,  66 => 23,  63 => 17,  54 => 9,  51 => 8,  46 => 1,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "FOSUserBundle:Registration:confirmed.html.twig", "/www/wwwroot/tyflex.07.03/src/UserBundle/Resources/views/Registration/confirmed.html.twig");
    }
}
