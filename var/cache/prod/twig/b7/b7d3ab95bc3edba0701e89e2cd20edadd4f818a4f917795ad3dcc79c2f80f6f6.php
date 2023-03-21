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

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_a513bee6783fe30690e3e16f34827d08f4feadc6e2319057c7c07ed66bae0b1c extends \Twig\Template
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
        $this->parent = $this->loadTemplate("WebBundle::login.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        // line 10
        echo "            <div class=\"login-box\">
                <div class=\"notif-head\">
                    <span class=\"notif-title\"><i class=\"fa fa-fw fa-user-plus\"></i>  Criar Conta </span>
                </div>
                <div class=\"notif-body\">
                    <div class=\"carda__body pdn--al\">
                        <div class=\"row\">
                            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => ["class" => "fos_user_registration_register"]]);
        echo "
                            <div class=\"form-group\">
                                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "E-mail"]]);
        echo "
                                <span class=\"validate-input\">";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", []), 'errors');
        echo "</span>
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nome"]]);
        echo "
                                <span class=\"validate-input\">";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", []), 'errors');
        echo "</span>
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", []), "first", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Senha"]]);
        echo "
                                <span class=\"validate-input\">";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", []), "first", []), 'errors');
        echo "</span>
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", []), "second", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Digite a senha novamente"]]);
        echo "
                                <span class=\"validate-input\">";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "plainPassword", []), "second", []), 'errors');
        echo "</span>
                            </div>
                            <div class=\"form-group checkbox clearfix\">
                            <label class=\"float-left remember-me\">
                                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "privacypolicy", []), 'widget');
        echo " Eu li e concordo <a  href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_privacypolicy");
        echo "\">Dúvidas?</a>
                            </label>
                            <span class=\"validate-input\">";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "privacypolicy", []), 'errors');
        echo "</span>
                            </div>
                            <div class=\"form-group  row mrg--vh\">
                                <div class=\"col-sm-12\">
                                    <button type=\"submit\" class=\"btn btn-primary btn-block\">
                                    <i class=\"fa fa-fw fa-user-plus\"></i> ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", [], "FOSUserBundle"), "html", null, true);
        echo "
                                    </button>
                                </div>
                            </div>
                            <div>
                                <p>Já tem uma conta?
                                <a  href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
        echo "</a><br></p>
                            </div>
                            ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                        </div>
                    </div>
                </div>
            </div>
       ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 51,  132 => 49,  123 => 43,  115 => 38,  108 => 36,  101 => 32,  97 => 31,  91 => 28,  87 => 27,  81 => 24,  77 => 23,  71 => 20,  67 => 19,  62 => 17,  53 => 10,  50 => 9,  45 => 1,  43 => 6,  41 => 5,  39 => 4,  37 => 3,  35 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "FOSUserBundle:Registration:register.html.twig", "/www/wwwroot/tyflex.07.03/src/UserBundle/Resources/views/Registration/register.html.twig");
    }
}
