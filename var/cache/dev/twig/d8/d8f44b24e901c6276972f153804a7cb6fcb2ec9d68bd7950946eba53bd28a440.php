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

/* UserBundle:User:edit.html.twig */
class __TwigTemplate_22bd5d7833cdaa5a146984c2bf5fe27704ca4a12c76f666157a5dfc78e8c5261 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "UserBundle:User:edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "UserBundle:User:edit.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "UserBundle:User:edit.html.twig", 1);
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
                echo "\"  >
                    ";
            } else {
                // line 19
                echo "                        <img  style=\"border-radius:300px;margin:10px;height:100px;width:100px;border: 5px solid rgb(255, 247, 247);\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "media", []), "link", [])), "actor_thumb"), "html", null, true);
                echo "\"  >
                    ";
            }
            // line 21
            echo "                ";
        } else {
            // line 22
            echo "                    <img class=\"avatar-char palette-Red-400 bg\"  style=\"border-radius: 100px;    border: 0.5px solid #ccc;\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar.jpg"), "actor_thumb"), "html", null, true);
            echo "\"  >
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
            <div  class=\"col-md-12\" style=\"height:20px;\">
                
            </div>
            <div class=\"col-sm-offset-2  col-md-8\">
                <div class=\"card\">
                    <div class=\"card-header card-header-icon\" data-background-color=\"rose\">
                        <i class=\"material-icons\">group</i>
                    </div>
                    <div class=\"card-content\">
                        <h4 class=\"card-title\">Edit :  ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "name", []), "html", null, true);
        echo "</h4>
                        <br>
                        <div class=\"card-body card-padding\">
                            ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
                            <div class=\"form-group fg-line\">
                                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", []), 'label', ["label_attr" => ["class" => ""]]);
        echo "
                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", []), 'errors');
        echo "
                            </div>
                            <div class=\"form-group fg-line\">
                                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'label', ["label_attr" => ["class" => ""]]);
        echo "
                                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", []), 'errors');
        echo "
                            </div>
                            <div class=\"form-group fg-line\">
                                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", []), 'label', ["label_attr" => ["class" => ""]]);
        echo "
                                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", []), 'errors');
        echo "
                            </div>
                            <div >
                                <label>
                                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "enabled", []), 'widget');
        echo "
                                    Enabled
                                </label>
                            </div>
                            <br>
                            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", []), 'widget', ["attr" => ["class" => "btn btn-success btn-lg waves-effect pull-right"]]);
        echo "
                            ";
        // line 79
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
                            <br>
                            <br>
                        </div>
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
        return "UserBundle:User:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 79,  227 => 78,  219 => 73,  212 => 69,  208 => 68,  204 => 67,  198 => 64,  194 => 63,  190 => 62,  184 => 59,  180 => 58,  176 => 57,  171 => 55,  165 => 52,  148 => 38,  142 => 35,  136 => 32,  130 => 29,  121 => 24,  115 => 22,  112 => 21,  106 => 19,  100 => 17,  97 => 16,  95 => 15,  90 => 14,  87 => 13,  84 => 12,  81 => 11,  78 => 10,  75 => 9,  72 => 8,  69 => 7,  66 => 6,  64 => 5,  60 => 3,  51 => 2,  29 => 1,);
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
                        <img  style=\"border-radius:300px;margin:10px;height:100px;width:100px;border: 5px solid rgb(255, 247, 247);\" src=\"{{user.media.url}}\"  >
                    {% else %}
                        <img  style=\"border-radius:300px;margin:10px;height:100px;width:100px;border: 5px solid rgb(255, 247, 247);\" src=\"{{asset(user.media.link)|imagine_filter('actor_thumb')}}\"  >
                    {% endif %}
                {% else %}
                    <img class=\"avatar-char palette-Red-400 bg\"  style=\"border-radius: 100px;    border: 0.5px solid #ccc;\" src=\"{{asset(\"img/avatar.jpg\")|imagine_filter('actor_thumb')}}\"  >
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
            <div  class=\"col-md-12\" style=\"height:20px;\">
                
            </div>
            <div class=\"col-sm-offset-2  col-md-8\">
                <div class=\"card\">
                    <div class=\"card-header card-header-icon\" data-background-color=\"rose\">
                        <i class=\"material-icons\">group</i>
                    </div>
                    <div class=\"card-content\">
                        <h4 class=\"card-title\">Edit :  {{form.vars.value.name}}</h4>
                        <br>
                        <div class=\"card-body card-padding\">
                            {{ form_start(form,{attr:{\"class\":\"form-horizontal\"}}) }}
                            <div class=\"form-group fg-line\">
                                {{form_label(form.name,null,{label_attr:{\"class\":\"\"}})}}
                                {{form_widget(form.name,{attr:{\"class\":\"form-control\"}})}}
                                {{form_errors(form.name)}}
                            </div>
                            <div class=\"form-group fg-line\">
                                {{form_label(form.email,null,{label_attr:{\"class\":\"\"}})}}
                                {{form_widget(form.email,{attr:{\"class\":\"form-control\"}})}}
                                {{form_errors(form.email)}}
                            </div>
                            <div class=\"form-group fg-line\">
                                {{form_label(form.type,null,{label_attr:{\"class\":\"\"}})}}
                                {{form_widget(form.type,{attr:{\"class\":\"form-control\"}})}}
                                {{form_errors(form.type)}}
                            </div>
                            <div >
                                <label>
                                    {{form_widget(form.enabled)}}
                                    Enabled
                                </label>
                            </div>
                            <br>
                            {{form_widget(form.save,{attr:{\"class\":\"btn btn-success btn-lg waves-effect pull-right\"}})}}
                            {{ form_end(form) }}
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock%}", "UserBundle:User:edit.html.twig", "/www/wwwroot/tyflex.07.03/src/UserBundle/Resources/views/User/edit.html.twig");
    }
}
