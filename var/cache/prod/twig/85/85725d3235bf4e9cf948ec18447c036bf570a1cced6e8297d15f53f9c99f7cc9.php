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
class __TwigTemplate_1bf650fb3441eb2561a9f9103ec0c87b80c97471639331704f8df72b3bf829cb extends \Twig\Template
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
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        echo "Assinaturas";
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", []), "subscriptions", []));
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
        return array (  187 => 61,  179 => 58,  176 => 57,  170 => 55,  168 => 54,  163 => 53,  161 => 52,  156 => 51,  153 => 50,  151 => 49,  147 => 48,  142 => 46,  136 => 45,  132 => 44,  128 => 43,  125 => 42,  121 => 41,  101 => 25,  95 => 23,  93 => 22,  89 => 21,  85 => 20,  81 => 19,  75 => 16,  69 => 13,  64 => 11,  60 => 9,  57 => 8,  51 => 7,  46 => 1,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "UserBundle:Profile:subscriptions.html.twig", "/www/wwwroot/tyflex.07.03/src/UserBundle/Resources/views/Profile/subscriptions.html.twig");
    }
}
