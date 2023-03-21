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

/* UserBundle:Profile:subscriptions.html.twig */
class __TwigTemplate_d1440bf2ee48b63a86b52a75893c0ff4783e704e31d68d0898c800d4b114f832 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "UserBundle:Profile:subscriptions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "UserBundle:Profile:subscriptions.html.twig"));

        // line 2
        $context["subtitle"] = "Assinaturas";
        // line 3
        $context["og_description"] = "Assinaturas";
        // line 4
        $context["og_type"] = "null";
        // line 5
        $context["og_image"] = "null";
        // line 6
        $context["keywords"] = "null";
        // line 1
        $this->parent = $this->loadTemplate("WebBundle::layout.html.twig", "UserBundle:Profile:subscriptions.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Assinaturas";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<div class=\"row content-section\">
\t\t<div class=\"col-md-12\" >
\t\t\t<div class=\"actor-header-bg\" style=\" background-image: url('";
        // line 11
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "media", []), "type", []) == "link")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "media", []), "url", [])) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "media", []), "link", [])))), "html", null, true);
        echo "');\">
\t\t\t\t<div class=\"movie-header actor-header\">
\t\t\t\t\t<div class=\"movie-title\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "name", []), "html", null, true);
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<img class=\"actor-logo\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "media", []), "type", []) == "link")) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "media", []), "url", [])) : ($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "media", []), "link", [])), "user_image"))), "html", null, true);
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
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "type", []) == "email")) {
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
\t\t\t<h3>Assinaturas</h3>
\t\t\t<div class=\"table-responsive \">
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"col\">Início</th>
\t\t\t\t\t\t\t<th scope=\"col\">Plano</th>
\t\t\t\t\t\t\t<th scope=\"col\">Preço</th>
\t\t\t\t\t\t\t<th scope=\"col\">Expirar</th>
\t\t\t\t\t\t\t<th scope=\"col\">Status</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "subscriptions", []));
        foreach ($context['_seq'] as $context["_key"] => $context["subscription"]) {
            // line 42
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["subscription"], "created", []), "Y/d/m H:i"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["subscription"], "pack", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["subscription"], "price", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subscription"], "currency", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["subscription"], "expired", []), "Y/d/m H:i"), "html", null, true);
            echo " </td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<label class=\"badge badge-light btn-sm\">";
            // line 48
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["subscription"], "status", [])), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t";
            // line 49
            if (($this->getAttribute($context["subscription"], "status", []) == "unpaid")) {
                // line 50
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["subscription"], "method", []) == "paypal")) {
                    // line 51
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_subscription_paypal", ["id" => $this->getAttribute($context["subscription"], "id", [])]), "html", null, true);
                    echo "\" class=\"btn btn-primary btn-sm float-right\">Pague agora</a>
\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute(                // line 52
$context["subscription"], "method", []) == "card")) {
                    // line 53
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_subscription_card", ["id" => $this->getAttribute($context["subscription"], "id", [])]), "html", null, true);
                    echo "\" class=\"btn btn-primary btn-sm float-right\">Pague agora</a>
\t\t\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute(                // line 54
$context["subscription"], "method", []) == "manual")) {
                    // line 55
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_subscription_manual", ["id" => $this->getAttribute($context["subscription"], "id", [])]), "html", null, true);
                    echo "\" class=\"btn btn-primary btn-sm float-right\">Pague agora</a>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 57
                echo "\t\t\t\t\t\t\t\t\t";
            }
            // line 58
            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Profile:subscriptions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 61,  209 => 58,  206 => 57,  200 => 55,  198 => 54,  193 => 53,  191 => 52,  186 => 51,  183 => 50,  181 => 49,  177 => 48,  172 => 46,  166 => 45,  162 => 44,  158 => 43,  155 => 42,  151 => 41,  131 => 25,  125 => 23,  123 => 22,  119 => 21,  115 => 20,  111 => 19,  105 => 16,  99 => 13,  94 => 11,  90 => 9,  81 => 8,  63 => 7,  52 => 1,  50 => 6,  48 => 5,  46 => 4,  44 => 3,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"WebBundle::layout.html.twig\" %}
{% set subtitle =   \"Assinaturas\"  %}
{% set og_description =  \"Assinaturas\" %}
{% set og_type =  \"null\" %}
{% set og_image =  \"null\" %}
{% set keywords =  \"null\" %}
{% block title %}Assinaturas{% endblock %}
{% block body %}
\t<div class=\"row content-section\">
\t\t<div class=\"col-md-12\" >
\t\t\t<div class=\"actor-header-bg\" style=\" background-image: url('{{(app.user.media.type == \"link\" )? app.user.media.url : asset(app.user.media.link)}}');\">
\t\t\t\t<div class=\"movie-header actor-header\">
\t\t\t\t\t<div class=\"movie-title\">{{app.user.name}}</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<img class=\"actor-logo\" src=\"{{(app.user.media.type == \"link\" )? app.user.media.url : asset(app.user.media.link)|imagine_filter(\"user_image\")}}\">
\t\t</div>
\t\t<div class=\"col-md-3\" >
\t\t\t<a href=\"{{path(\"fos_user_profile_show\")}}\" class=\"btn btn-block btn-sm play-btn\"><i class=\"fas fa-user\"></i> Meu Perfil</a>
\t\t\t<a href=\"{{path(\"fos_user_myprofile_edit\")}}\" class=\"btn btn-block btn-sm play-btn\"><i class=\"fas fa-user-edit\"></i> Editar Perfil</a>
\t\t\t<a href=\"{{path(\"user_user_subscriptions\")}}\" class=\"btn btn-block btn-sm play-btn\"><i class=\"fas fa-star\"></i> Minhas assinaturas</a>
\t\t\t{% if app.user.type == \"email\" %}
\t\t\t\t<a href=\"{{path(\"fos_user_change_password\")}}\" class=\"btn btn-block btn-sm play-btn\"><i class=\"fas fa-user-lock\"></i> Mudar senha</a>
\t\t\t{% endif %}
\t\t\t<a href=\"{{path(\"fos_user_security_logout\")}}\" class=\"btn btn-block btn-sm play-btn\"><i class=\"fas fa-sign-out-alt\"></i> Sair</a>
\t\t</div>
\t\t<div class=\"col-md-9\">
\t\t\t<h3>Assinaturas</h3>
\t\t\t<div class=\"table-responsive \">
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"col\">Início</th>
\t\t\t\t\t\t\t<th scope=\"col\">Plano</th>
\t\t\t\t\t\t\t<th scope=\"col\">Preço</th>
\t\t\t\t\t\t\t<th scope=\"col\">Expirar</th>
\t\t\t\t\t\t\t<th scope=\"col\">Status</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for subscription  in app.user.subscriptions %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{subscription.created|date(\"Y/d/m H:i\")}}</td>
\t\t\t\t\t\t\t\t<td>{{subscription.pack}}</td>
\t\t\t\t\t\t\t\t<td>{{subscription.price}} {{subscription.currency}}</td>
\t\t\t\t\t\t\t\t<td>{{subscription.expired|date(\"Y/d/m H:i\")}} </td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<label class=\"badge badge-light btn-sm\">{{subscription.status|capitalize}}</label>
\t\t\t\t\t\t\t\t\t{% if subscription.status == \"unpaid\" %}
\t\t\t\t\t\t\t\t\t\t{% if subscription.method == \"paypal\"  %}
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"wep_subscription_paypal\",{\"id\":subscription.id})}}\" class=\"btn btn-primary btn-sm float-right\">Pague agora</a>
\t\t\t\t\t\t\t\t\t\t{% elseif subscription.method == \"card\"  %}
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"wep_subscription_card\",{\"id\":subscription.id})}}\" class=\"btn btn-primary btn-sm float-right\">Pague agora</a>
\t\t\t\t\t\t\t\t\t\t{% elseif subscription.method == \"manual\"  %}
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"wep_subscription_manual\",{\"id\":subscription.id})}}\" class=\"btn btn-primary btn-sm float-right\">Pague agora</a>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}", "UserBundle:Profile:subscriptions.html.twig", "/www/wwwroot/tyflex.07.03/src/UserBundle/Resources/views/Profile/subscriptions.html.twig");
    }
}
