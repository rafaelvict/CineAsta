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

/* UserBundle:User:comments.html.twig */
class __TwigTemplate_c6a8a3b1db7adf32ba8617df6fc4cb38d9eff47a6605da134348412a50d61b81 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "UserBundle:User:comments.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "UserBundle:User:comments.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "UserBundle:User:comments.html.twig", 1);
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
        echo "\" style=\"color:black;font-size:20px;line-height: 70px;font-weight: bold;\">Subscriptions </a>
                    </div>
                </div>
                
            </div>
            <div  class=\"col-md-12\" >
                <br>
                <br>
                
                <div class=\"row\">
                    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 49
            echo "                        <div class=\"col-md-6\">
                            <ul class=\"timeline timeline-simple\">
                                <li class=\"timeline-inverted\">
                                    <div class=\"timeline-badge info\">
                                        ";
            // line 53
            if (($this->getAttribute($this->getAttribute($context["comment"], "user", []), "media", []) != null)) {
                // line 54
                echo "                                            ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", []), "media", []), "type", []) == "link")) {
                    // line 55
                    echo "                                                <img class=\"avatar-char palette-Red-400 bg\"  style=\"border-radius: 100px;    border: 0.5px solid #ccc;\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", []), "media", []), "url", []), "html", null, true);
                    echo "\" alt=\"\">
                                            ";
                } else {
                    // line 57
                    echo "                                                <img class=\"avatar-char palette-Red-400 bg\"  style=\"border-radius: 100px;    border: 0.5px solid #ccc;\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["comment"], "user", []), "media", []), "link", [])), "actor_thumb"), "html", null, true);
                    echo "\" alt=\"\">
                                            ";
                }
                // line 59
                echo "                                        ";
            } else {
                // line 60
                echo "                                            <img class=\"avatar-char palette-Red-400 bg\"  style=\"border-radius: 100px;    border: 0.5px solid #ccc;\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar.jpg"), "actor_thumb"), "html", null, true);
                echo "\" alt=\"\">
                                        ";
            }
            // line 62
            echo "                                    </div>
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_user_edit", ["id" => $this->getAttribute($this->getAttribute($context["comment"], "user", []), "id", [])]), "html", null, true);
            echo "\" title=\"\">
                                                <span class=\"label label-danger\">";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "user", []), "name", []), "html", null, true);
            echo "</span>
                                            </a>
                                            <span class=\"pull-right\" >
                                                <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_comment_delete", ["id" => $this->getAttribute($context["comment"], "id", []), "comment" => "true"]), "html", null, true);
            echo "\"  rel=\"tooltip\" data-placement=\"bottom\" title=\"\" data-original-title=\"Delete\">
                                                    <i class=\"material-icons\" style=\"color:red\">delete</i>
                                                </a>
                                                ";
            // line 72
            if ($this->getAttribute($context["comment"], "enabled", [])) {
                // line 73
                echo "                                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_comment_hide", ["id" => $this->getAttribute($context["comment"], "id", [])]), "html", null, true);
                echo "\"  rel=\"tooltip\" data-placement=\"bottom\" title=\"\" data-original-title=\"Hide\">
                                                        <i class=\"material-icons\">visibility_off</i>
                                                    </a>
                                                ";
            } else {
                // line 77
                echo "                                                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_comment_hide", ["id" => $this->getAttribute($context["comment"], "id", [])]), "html", null, true);
                echo "\"  rel=\"tooltip\" data-placement=\"bottom\" title=\"\" data-original-title=\"Show\">
                                                        <i class=\"material-icons\">remove_red_eye</i>
                                                    </a>
                                                ";
            }
            // line 81
            echo "                                            </span>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "contentclear", []), "html", null, true);
            echo "</p>
                                        </div>
                                        <hr>
                                        ";
            // line 87
            if (($this->getAttribute($context["comment"], "channel", []) != null)) {
                // line 88
                echo "                                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_channel_comments", ["id" => $this->getAttribute($this->getAttribute($context["comment"], "channel", []), "id", [])]), "html", null, true);
                echo "\" title=\"\">
                                                <small class=\"label label-rose\">
                                                <span>";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "channel", []), "html", null, true);
                echo "</span>
                                                </small>
                                            </a>
                                        ";
            } elseif (($this->getAttribute(            // line 93
$context["comment"], "poster", []) != null)) {
                // line 94
                echo "                                            ";
                if (($this->getAttribute($this->getAttribute($context["comment"], "poster", []), "type", []) == "serie")) {
                    // line 95
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_serie_comments", ["id" => $this->getAttribute($this->getAttribute($context["comment"], "poster", []), "id", [])]), "html", null, true);
                    echo "\" title=\"\">
                                                    <small class=\"label label-rose\">
                                                    <span>";
                    // line 97
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "poster", []), "html", null, true);
                    echo "</span>
                                                    </small>
                                                </a>
                                            ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 100
$context["comment"], "poster", []), "type", []) == "serie")) {
                    // line 101
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_movie_comments", ["id" => $this->getAttribute($this->getAttribute($context["comment"], "poster", []), "id", [])]), "html", null, true);
                    echo "\" title=\"\">
                                                    <small class=\"label label-rose\">
                                                    <span>";
                    // line 103
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "poster", []), "html", null, true);
                    echo "</span>
                                                    </small>
                                                </a>
                                            ";
                }
                // line 107
                echo "                                        ";
            }
            // line 108
            echo "                                        
                                        <small class=\"pull-right label label-rose\">
                                        <span>";
            // line 110
            echo $this->env->getExtension('Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension')->diff($this->getAttribute($context["comment"], "created", []));
            echo "</span>
                                        </small>
                                    </div>
                                </li>
                                
                            </ul>
                        </div>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 118
            echo "                        <div class=\"card\">
                            <div class=\"card-content\">
                                <br>
                                <br>
                                <center><img src=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg_empty.png"), "html", null, true);
            echo "\"  style=\"width: auto !important;\" =\"\"></center>
                                <br>
                                <br>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "                </div>
                <div class=\" pull-right\">
                    ";
        // line 130
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
        return "UserBundle:User:comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 130,  332 => 128,  320 => 122,  314 => 118,  301 => 110,  297 => 108,  294 => 107,  287 => 103,  281 => 101,  279 => 100,  273 => 97,  267 => 95,  264 => 94,  262 => 93,  256 => 90,  250 => 88,  248 => 87,  242 => 84,  237 => 81,  229 => 77,  221 => 73,  219 => 72,  213 => 69,  207 => 66,  203 => 65,  198 => 62,  192 => 60,  189 => 59,  183 => 57,  177 => 55,  174 => 54,  172 => 53,  166 => 49,  161 => 48,  148 => 38,  142 => 35,  136 => 32,  130 => 29,  121 => 24,  115 => 22,  112 => 21,  106 => 19,  100 => 17,  97 => 16,  95 => 15,  90 => 14,  87 => 13,  84 => 12,  81 => 11,  78 => 10,  75 => 9,  72 => 8,  69 => 7,  66 => 6,  64 => 5,  60 => 3,  51 => 2,  29 => 1,);
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
                        <a href=\"{{path(\"user_admin_user_subscriptions\",{\"id\":user.id})}}\" style=\"color:black;font-size:20px;line-height: 70px;font-weight: bold;\">Subscriptions </a>
                    </div>
                </div>
                
            </div>
            <div  class=\"col-md-12\" >
                <br>
                <br>
                
                <div class=\"row\">
                    {% for comment in pagination %}
                        <div class=\"col-md-6\">
                            <ul class=\"timeline timeline-simple\">
                                <li class=\"timeline-inverted\">
                                    <div class=\"timeline-badge info\">
                                        {% if comment.user.media != null %}
                                            {% if comment.user.media.type ==\"link\" %}
                                                <img class=\"avatar-char palette-Red-400 bg\"  style=\"border-radius: 100px;    border: 0.5px solid #ccc;\" src=\"{{comment.user.media.url}}\" alt=\"\">
                                            {% else %}
                                                <img class=\"avatar-char palette-Red-400 bg\"  style=\"border-radius: 100px;    border: 0.5px solid #ccc;\" src=\"{{asset(comment.user.media.link)|imagine_filter('actor_thumb')}}\" alt=\"\">
                                            {% endif %}
                                        {% else %}
                                            <img class=\"avatar-char palette-Red-400 bg\"  style=\"border-radius: 100px;    border: 0.5px solid #ccc;\" src=\"{{asset(\"img/avatar.jpg\")|imagine_filter('actor_thumb')}}\" alt=\"\">
                                        {% endif %}
                                    </div>
                                    <div class=\"timeline-panel\">
                                        <div class=\"timeline-heading\">
                                            <a href=\"{{path(\"user_user_edit\",{id:comment.user.id})}}\" title=\"\">
                                                <span class=\"label label-danger\">{{comment.user.name}}</span>
                                            </a>
                                            <span class=\"pull-right\" >
                                                <a href=\"{{path(\"app_comment_delete\",{id:comment.id,\"comment\":\"true\"})}}\"  rel=\"tooltip\" data-placement=\"bottom\" title=\"\" data-original-title=\"Delete\">
                                                    <i class=\"material-icons\" style=\"color:red\">delete</i>
                                                </a>
                                                {% if comment.enabled %}
                                                    <a href=\"{{path(\"app_comment_hide\",{id:comment.id})}}\"  rel=\"tooltip\" data-placement=\"bottom\" title=\"\" data-original-title=\"Hide\">
                                                        <i class=\"material-icons\">visibility_off</i>
                                                    </a>
                                                {% else %}
                                                    <a href=\"{{path(\"app_comment_hide\",{id:comment.id})}}\"  rel=\"tooltip\" data-placement=\"bottom\" title=\"\" data-original-title=\"Show\">
                                                        <i class=\"material-icons\">remove_red_eye</i>
                                                    </a>
                                                {% endif %}
                                            </span>
                                        </div>
                                        <div class=\"timeline-body\">
                                            <p>{{comment.contentclear}}</p>
                                        </div>
                                        <hr>
                                        {% if comment.channel != null  %}
                                            <a href=\"{{path(\"app_channel_comments\",{id:comment.channel.id})}}\" title=\"\">
                                                <small class=\"label label-rose\">
                                                <span>{{comment.channel}}</span>
                                                </small>
                                            </a>
                                        {% elseif comment.poster != null  %}
                                            {% if comment.poster.type == \"serie\" %}
                                                <a href=\"{{path(\"app_serie_comments\",{id:comment.poster.id})}}\" title=\"\">
                                                    <small class=\"label label-rose\">
                                                    <span>{{comment.poster}}</span>
                                                    </small>
                                                </a>
                                            {% elseif comment.poster.type == \"serie\"   %}
                                                <a href=\"{{path(\"app_movie_comments\",{id:comment.poster.id})}}\" title=\"\">
                                                    <small class=\"label label-rose\">
                                                    <span>{{comment.poster}}</span>
                                                    </small>
                                                </a>
                                            {% endif %}
                                        {% endif %}
                                        
                                        <small class=\"pull-right label label-rose\">
                                        <span>{{comment.created|ago}}</span>
                                        </small>
                                    </div>
                                </li>
                                
                            </ul>
                        </div>
                    {% else %}
                        <div class=\"card\">
                            <div class=\"card-content\">
                                <br>
                                <br>
                                <center><img src=\"{{asset(\"img/bg_empty.png\")}}\"  style=\"width: auto !important;\" =\"\"></center>
                                <br>
                                <br>
                            </div>
                        </div>
                    {% endfor %}
                </div>
                <div class=\" pull-right\">
                    {{ knp_pagination_render(pagination) }}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock%}", "UserBundle:User:comments.html.twig", "/www/wwwroot/tyflex.07.03/src/UserBundle/Resources/views/User/comments.html.twig");
    }
}
