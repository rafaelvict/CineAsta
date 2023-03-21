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

/* UserBundle:User:subscriptions.html.twig */
class __TwigTemplate_da3a5a3c049e6ffabc05b945f27f1d6317786405fa6ffaeaa7becc6d7bf2eab0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "UserBundle:User:subscriptions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "UserBundle:User:subscriptions.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "UserBundle:User:subscriptions.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            ";
        // line 5
        if (($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "media", []) != null)) {
            // line 6
            echo "                ";
            if (($this->getAttribute($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "media", []), "type", []) == "link")) {
                // line 7
                echo "                    ";
                $context["image"] = $this->getAttribute($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "media", []), "url", []);
                // line 8
                echo "                ";
            } else {
                // line 9
                echo "                    ";
                $context["image"] = $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "media", []), "link", [])), "actor_thumb");
                // line 10
                echo "                ";
            }
            // line 11
            echo "            ";
        } else {
            // line 12
            echo "                ";
            $context["image"] = $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar.jpg"), "actor_thumb");
            // line 13
            echo "            ";
        }
        // line 14
        echo "            <div class=\"col-md-12\" style=\" height: auto; text-align:center;background-image:url(";
        echo twig_escape_filter($this->env, ($context["image"] ?? $this->getContext($context, "image")), "html", null, true);
        echo ");background-position: center;background-size: 100%;text-align: center;\">
                ";
        // line 15
        if (($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "media", []) != null)) {
            // line 16
            echo "                    ";
            if (($this->getAttribute($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "media", []), "type", []) == "link")) {
                // line 17
                echo "                        <img  style=\"border-radius:300px;margin:10px;height:100px;width:100px;border: 5px solid rgb(255, 247, 247);\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "media", []), "url", []), "html", null, true);
                echo "\" >
                    ";
            } else {
                // line 19
                echo "                        <img  style=\"border-radius:300px;margin:10px;height:100px;width:100px;border: 5px solid rgb(255, 247, 247);\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "media", []), "link", [])), "actor_thumb"), "html", null, true);
                echo "\" >
                    ";
            }
            // line 21
            echo "                ";
        } else {
            // line 22
            echo "                    <img class=\"avatar-char palette-Red-400 bg\"  style=\"border-radius: 100px;    border: 0.5px solid #ccc;\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar.jpg"), "actor_thumb"), "html", null, true);
            echo "\" alt=\"\">
                ";
        }
        // line 24
        echo "                <h3 style=\" color: white; font-weight: bold\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "name", []), "html", null, true);
        echo "</h3>
            </div>
            <div  class=\"col-md-12\" style=\"border:1px solid #ccc;height:70px;background:white\">
                <div class=\"row\">
                    <div  class=\"col-md-3\" style=\"border-right:1px solid #ccc;height:70px;background:white\">
                        <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_user_edit", ["id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", [])]), "html", null, true);
        echo "\" style=\"color:black;font-size:20px;line-height: 70px;font-weight: bold;\">Edit infos</a>
                    </div>
                    <div  class=\"col-md-3\" style=\"border-right:1px solid #ccc;height:70px;background:white\">
                        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_user_comments", ["id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", [])]), "html", null, true);
        echo "\" style=\"color:black;font-size:20px;line-height: 70px;font-weight: bold;\">Comments </a>
                    </div>
                    <div  class=\"col-md-3\" style=\"border-right:1px solid #ccc;height:70px;background:white\">
                        <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_user_ratings", ["id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", [])]), "html", null, true);
        echo "\" style=\"color:black;font-size:20px;line-height: 70px;font-weight: bold;\">Ratings </a>
                    </div>
                    <div  class=\"col-md-3\" style=\"border-right:1px solid #ccc;height:70px;background:white\">
                        <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_admin_user_subscriptions", ["id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", [])]), "html", null, true);
        echo "\" style=\"color:black;font-size:20px;line-height: 70px;font-weight: bold;\"> Assinaturas </a>
                    </div>
                </div>
                
            </div>
            <div  class=\"\" >
                <br>
                <br>
               
\t\t\t\t\t\t<div class=\"card\" >
\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t<table class=\"table table-source\" width=\"100%\">
\t\t\t\t\t\t\t\t\t<thead class=\"text-primary\">
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th><b>User</b></th>
\t\t\t\t\t\t\t\t\t\t\t<th><b>Pack</b></th>
\t\t\t\t\t\t\t\t\t\t\t<th><b>Price</b></th>
\t\t\t\t\t\t\t\t\t\t\t<th><b>Duration</b></th>
\t\t\t\t\t\t\t\t\t\t\t<th><b>Started</b></th>
\t\t\t\t\t\t\t\t\t\t\t<th><b>Expired</b></th>
\t\t\t\t\t\t\t\t\t\t\t<th><b>Status</b></th>
\t\t\t\t\t\t\t\t\t\t\t<th><b>Action</b></th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["subscription"]) {
            // line 64
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td><a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_user_edit", ["id" => $this->getAttribute($context["subscription"], "id", [])]), "html", null, true);
            echo "\"><b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["subscription"], "user", []), "name", []), "html", null, true);
            echo "</b></a></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["subscription"], "pack", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["subscription"], "price", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subscription"], "currency", []), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["subscription"], "duration", []), "html", null, true);
            echo " <small>Day(s)</small></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["subscription"], "started", []), "d/m/y H:i"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 70
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["subscription"], "expired", []), "d/m/y H:i"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"label label-";
            // line 71
            echo ((($this->getAttribute($context["subscription"], "status", []) == "paid")) ? ("success") : ("danger"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["subscription"], "status", []), "html", null, true);
            echo "</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_subscription_delete", ["id" => $this->getAttribute($context["subscription"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-rose btn-xs pull-right\"><i class=\"material-icons\">delete</i></a><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_subscription_edit", ["id" => $this->getAttribute($context["subscription"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-success btn-xs pull-right\"><i class=\"material-icons\">edit</i></a></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 75
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<center><img src=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg_empty.png"), "html", null, true);
            echo "\"  style=\"width: auto !important;\" =\"\"></center>
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subscription'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                        <div class=\" pull-right\">
                            ";
        // line 88
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
                        </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:User:subscriptions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 88,  244 => 83,  233 => 78,  228 => 75,  218 => 72,  212 => 71,  208 => 70,  204 => 69,  200 => 68,  194 => 67,  190 => 66,  184 => 65,  181 => 64,  176 => 63,  148 => 38,  142 => 35,  136 => 32,  130 => 29,  121 => 24,  115 => 22,  112 => 21,  106 => 19,  100 => 17,  97 => 16,  95 => 15,  90 => 14,  87 => 13,  84 => 12,  81 => 11,  78 => 10,  75 => 9,  72 => 8,  69 => 7,  66 => 6,  64 => 5,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"AppBundle::layout.html.twig\" %}
{% block body%}
    <div class=\"container-fluid\">
        <div class=\"row\">
            {% if user.media != null %}
                {% if user.media.type ==\"link\" %}
                    {% set image = user.media.url%}
                {% else %}
                    {% set image = asset(user.media.link)|imagine_filter('actor_thumb') %}
                {% endif %}
            {% else %}
                {% set image = asset(\"img/avatar.jpg\")|imagine_filter('actor_thumb') %}
            {% endif %}
            <div class=\"col-md-12\" style=\" height: auto; text-align:center;background-image:url({{image}});background-position: center;background-size: 100%;text-align: center;\">
                {% if user.media != null %}
                    {% if user.media.type ==\"link\" %}
                        <img  style=\"border-radius:300px;margin:10px;height:100px;width:100px;border: 5px solid rgb(255, 247, 247);\" src=\"{{user.media.url}}\" >
                    {% else %}
                        <img  style=\"border-radius:300px;margin:10px;height:100px;width:100px;border: 5px solid rgb(255, 247, 247);\" src=\"{{asset(user.media.link)|imagine_filter('actor_thumb')}}\" >
                    {% endif %}
                {% else %}
                    <img class=\"avatar-char palette-Red-400 bg\"  style=\"border-radius: 100px;    border: 0.5px solid #ccc;\" src=\"{{asset(\"img/avatar.jpg\")|imagine_filter('actor_thumb')}}\" alt=\"\">
                {% endif %}
                <h3 style=\" color: white; font-weight: bold\">{{user.name}}</h3>
            </div>
            <div  class=\"col-md-12\" style=\"border:1px solid #ccc;height:70px;background:white\">
                <div class=\"row\">
                    <div  class=\"col-md-3\" style=\"border-right:1px solid #ccc;height:70px;background:white\">
                        <a href=\"{{path(\"user_user_edit\",{\"id\":user.id})}}\" style=\"color:black;font-size:20px;line-height: 70px;font-weight: bold;\">Edit infos</a>
                    </div>
                    <div  class=\"col-md-3\" style=\"border-right:1px solid #ccc;height:70px;background:white\">
                        <a href=\"{{path(\"user_user_comments\",{\"id\":user.id})}}\" style=\"color:black;font-size:20px;line-height: 70px;font-weight: bold;\">Comments </a>
                    </div>
                    <div  class=\"col-md-3\" style=\"border-right:1px solid #ccc;height:70px;background:white\">
                        <a href=\"{{path(\"user_user_ratings\",{\"id\":user.id})}}\" style=\"color:black;font-size:20px;line-height: 70px;font-weight: bold;\">Ratings </a>
                    </div>
                    <div  class=\"col-md-3\" style=\"border-right:1px solid #ccc;height:70px;background:white\">
                        <a href=\"{{path(\"user_admin_user_subscriptions\",{\"id\":user.id})}}\" style=\"color:black;font-size:20px;line-height: 70px;font-weight: bold;\"> Assinaturas </a>
                    </div>
                </div>
                
            </div>
            <div  class=\"\" >
                <br>
                <br>
               
\t\t\t\t\t\t<div class=\"card\" >
\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t<table class=\"table table-source\" width=\"100%\">
\t\t\t\t\t\t\t\t\t<thead class=\"text-primary\">
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th><b>User</b></th>
\t\t\t\t\t\t\t\t\t\t\t<th><b>Pack</b></th>
\t\t\t\t\t\t\t\t\t\t\t<th><b>Price</b></th>
\t\t\t\t\t\t\t\t\t\t\t<th><b>Duration</b></th>
\t\t\t\t\t\t\t\t\t\t\t<th><b>Started</b></th>
\t\t\t\t\t\t\t\t\t\t\t<th><b>Expired</b></th>
\t\t\t\t\t\t\t\t\t\t\t<th><b>Status</b></th>
\t\t\t\t\t\t\t\t\t\t\t<th><b>Action</b></th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t{% for subscription in pagination %}
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td><a href=\"{{path(\"user_user_edit\",{\"id\":subscription.id})}}\"><b>{{subscription.user.name}}</b></a></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{subscription.pack}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{subscription.price}} {{subscription.currency}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{subscription.duration}} <small>Day(s)</small></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{subscription.started|date(\"d/m/y H:i\")}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>{{subscription.expired|date(\"d/m/y H:i\")}}</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"label label-{{(subscription.status == \"paid\")?\"success\":\"danger\"}}\">{{subscription.status}}</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><a href=\"{{path(\"app_subscription_delete\",{\"id\":subscription.id})}}\" class=\"btn btn-rose btn-xs pull-right\"><i class=\"material-icons\">delete</i></a><a href=\"{{path(\"app_subscription_edit\",{\"id\":subscription.id})}}\" class=\"btn btn-success btn-xs pull-right\"><i class=\"material-icons\">edit</i></a></td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<center><img src=\"{{asset(\"img/bg_empty.png\")}}\"  style=\"width: auto !important;\" =\"\"></center>
\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                        <div class=\" pull-right\">
                            {{ knp_pagination_render(pagination) }}
                        </div>
            </div>
        </div>
    </div>
</div>
{% endblock%}
", "UserBundle:User:subscriptions.html.twig", "/www/wwwroot/tyflex.07.03/src/UserBundle/Resources/views/User/subscriptions.html.twig");
    }
}
