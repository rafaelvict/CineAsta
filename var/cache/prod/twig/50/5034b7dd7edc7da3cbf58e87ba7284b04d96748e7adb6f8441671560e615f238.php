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

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_2d457210ebe8ea33f8efde3525a6b1eaef01c78ac1b8405befed50de9c49817f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "WebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["subtitle"] = "Editar Perfil";
        // line 3
        $context["og_description"] = "Editar Perfil";
        // line 4
        $context["og_type"] = "null";
        // line 5
        $context["og_image"] = "null";
        // line 6
        $context["keywords"] = "null";
        // line 1
        $this->parent = $this->loadTemplate("WebBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        echo "Editar Perfil";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        // line 9
        echo "\t<div class=\"row content-section\">
\t\t<div class=\"col-md-12\" >
\t\t\t<div class=\"actor-header-bg\" style=\" background-image: url('";
        // line 11
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "media", []), "type", []) == "link")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "media", []), "url", [])) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "media", []), "link", [])))), "html", null, true);
        echo "');\">
\t\t\t\t<div class=\"movie-header actor-header\">
\t\t\t\t\t<div class=\"movie-title\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "name", []), "html", null, true);
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<img class=\"actor-logo\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "media", []), "type", []) == "link")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "media", []), "url", [])) : ($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "media", []), "link", [])), "user_image"))), "html", null, true);
        echo "\">
\t\t</div>
\t\t<div class=\"col-md-3\" >
\t\t\t<a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\" class=\"btn btn-block btn-sm play-btn\"><i class=\"fas fa-user\"></i> Meu Perfil</a>
\t\t\t<a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_myprofile_edit");
        echo "\" class=\"btn btn-block btn-sm play-btn\"><i class=\"fas fa-user-edit\"></i> Editar Perfil</a>
\t\t\t<a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_user_subscriptions");
        echo "\" class=\"btn btn-block btn-sm play-btn\"><i class=\"fas fa-star\"></i> Minhas assinaturas</a>
\t\t\t";
        // line 22
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "type", []) == "email")) {
            // line 23
            echo "\t\t\t\t<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
            echo "\" class=\"btn btn-block btn-sm play-btn\"><i class=\"fas fa-user-lock\"></i> Mudar senha</a>
\t\t\t";
        }
        // line 25
        echo "\t\t\t<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\" class=\"btn btn-block btn-sm play-btn\"><i class=\"fas fa-sign-out-alt\"></i> Sair</a>
\t\t</div>
\t\t<div class=\"col-md-9\">
\t\t\t<h3>Meu Perfil</h3>
\t\t\t";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "file", []), 'widget', ["attr" => ["class" => "float-right btn btn-primary"]]);
        echo "
\t\t\t<div class=\"file-input\">
\t\t\t\t<div class=\"message-after\">\t<i class=\"fas fa-check \"></i> O arquivo foi selecionado</div>
\t\t\t\t<div class=\"message-before\">\t<i class=\"fas fa-money-check-alt\"></i> Selecione sua foto de perfil</div>
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nome completo"]]);
        echo "
\t\t\t\t<span class=\"validate-input\">";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", []), 'errors');
        echo "</span>
\t\t\t</div>
\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "save", []), 'widget', ["attr" => ["class" => "btn btn-raised btn-primary float-right"]]);
        echo "
\t\t\t";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 40,  131 => 39,  126 => 37,  122 => 36,  113 => 30,  109 => 29,  101 => 25,  95 => 23,  93 => 22,  89 => 21,  85 => 20,  81 => 19,  75 => 16,  69 => 13,  64 => 11,  60 => 9,  57 => 8,  51 => 7,  46 => 1,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "FOSUserBundle:Profile:edit.html.twig", "/www/wwwroot/tyflex.07.03/src/UserBundle/Resources/views/Profile/edit.html.twig");
    }
}
