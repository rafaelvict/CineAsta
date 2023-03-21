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

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_a6b6be2a1c12b03c62231b2241786fecebf2d80cfd59bc55be38cd14ad9f44ec extends \Twig\Template
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
        $this->parent = $this->loadTemplate("WebBundle::login.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        // line 9
        echo "                <div class=\"login-box\">
                    <div class=\"notif-body\">
                        <div class=\"carda__body pdn--al\">
                            <i class=\"fas fa-shield-alt login-icon\"></i>
                            <p> Well,Type your new account password, and we'll get you unstuck...</p>
                            ";
        // line 15
        echo "
                            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_reset", ["token" => ($context["token"] ?? null)]), "attr" => ["class" => "fos_user_resetting_reset"]]);
        echo "
                                <div class=\"form-group \">
                                    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", []), "first", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "form.new_password"]]);
        echo "
                                    <p class=\"help-block\">";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", []), "first", []), 'errors');
        echo "</p>
                                </div>
                                <div class=\"form-group \">
                                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", []), "second", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "form.new_password_confirmation"]]);
        echo "
                                    <p class=\"help-block\">";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", []), "second", []), 'errors');
        echo "</p>
                                </div>
                                <div>
                                    <input type=\"submit\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block\" />
                                </div>
                            ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                            <br>
                        </div>
                    </div>
                </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 28,  88 => 26,  82 => 23,  78 => 22,  72 => 19,  68 => 18,  63 => 16,  60 => 15,  53 => 9,  50 => 8,  45 => 1,  43 => 6,  41 => 5,  39 => 4,  37 => 3,  35 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "FOSUserBundle:Resetting:reset.html.twig", "/www/wwwroot/tyflex.07.03/src/UserBundle/Resources/views/Resetting/reset.html.twig");
    }
}
