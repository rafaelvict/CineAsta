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
class __TwigTemplate_9af1c797f644244493de5a1324d38cfd45525a7f7597c63a69987675df80fa00 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "UserBundle:ChangePassword:admin_changePassword_content.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_change_password"), "attr" => ["class" => "fos_user_change_password"]]);
        echo "
\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "current_password", []), 'label');
        echo "
\t\t\t\t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "current_password", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "current_password", []), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", []), "first", []), 'label');
        echo "
\t\t\t\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", []), "first", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", []), "first", []), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group label-floating is-empty\">
\t\t\t\t\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", []), "second", []), 'label');
        echo "
\t\t\t\t\t\t";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", []), "second", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
\t\t\t\t\t\t";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", []), "second", []), 'errors');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<button  class=\"btn btn-raised btn-primary pull-right\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Change password", [], "FOSUserBundle"), "html", null, true);
        echo "</button>
\t\t\t\t\t";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
        return array (  148 => 48,  144 => 47,  139 => 45,  135 => 44,  131 => 43,  125 => 40,  121 => 39,  117 => 38,  111 => 35,  107 => 34,  103 => 33,  98 => 31,  81 => 17,  77 => 16,  73 => 15,  69 => 14,  65 => 13,  61 => 12,  57 => 11,  53 => 10,  49 => 9,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "UserBundle:ChangePassword:admin_changePassword_content.html.twig", "/www/wwwroot/tyflex.07.03/src/UserBundle/Resources/views/ChangePassword/admin_changePassword_content.html.twig");
    }
}
