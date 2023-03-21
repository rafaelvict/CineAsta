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

/* AppBundle:Home:notif_channel.html.twig */
class __TwigTemplate_506df49513bdbe3825dcb7eea0e6420aa7c2090791617bf881e62cf9275aebfd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Home:notif_channel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Home:notif_channel.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Home:notif_channel.html.twig", 1);
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
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
       <div class=\"col-sm-offset-2 col-md-8\">
            <div class=\"card\">
                <div class=\"card-header card-header-icon\" data-background-color=\"rose\">
                    <i class=\"material-icons\">notifications_active</i>
                </div>
                <div class=\"card-content\">
                    <h4 class=\"card-title\">TV Channel</h4>
                    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                        <br>
                        <label class=\"control-label\">Notification Title</label>
                        <div class=\"form-group label-floating\">
                            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", []), 'widget', ["value" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "title"], "method"), "attr" => ["class" => "form-control", "data-emojiable" => "true", "data-emoji-input" => "unicode"]]);
        echo "
                            <span class=\"validate-input\">";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", []), 'errors');
        echo "</span>
                        </div>
                        <label class=\"control-label\">Notification Message</label>
                        <div class=\"form-group label-floating \">
                            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "message", []), 'widget', ["value" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "title"], "method"), "attr" => ["class" => "form-control", "data-emojiable" => "true", "data-emoji-input" => "unicode"]]);
        echo "
                            <span class=\"validate-input\">";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "message", []), 'errors');
        echo "</span>
                        </div>
                        <div class=\"form-group label-floating \">
                            <label class=\"control-label\">Large Icon</label>
                            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "icon", []), 'widget', ["value" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "icon"], "method"), "attr" => ["class" => "form-control"]]);
        echo "
                            <span class=\"validate-input\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "icon", []), 'errors');
        echo "</span>
                        </div>
                        <div class=\"form-group label-floating \">
                            <label class=\"control-label\">Big Image</label>
                            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", []), 'widget', ["value" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "image"], "method"), "attr" => ["class" => "form-control"]]);
        echo "
                            <span class=\"validate-input\">";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "image", []), 'errors');
        echo "</span>
                        </div>
                        <div class=\"form-group label-floating \">
                            <label class=\"control-label\">TV Channel</label>
                            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "object", []), 'widget', ["value" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "id"], "method"), "attr" => ["class" => "form-control"]]);
        echo "
                            <span class=\"validate-input\">";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "object", []), 'errors');
        echo "</span>
                        </div>
                        <span class=\"pull-right\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "send", []), 'widget', ["attr" => ["class" => "btn btn-fill btn-rose"]]);
        echo "</span>

                    ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
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
        return "AppBundle:Home:notif_channel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 41,  131 => 39,  126 => 37,  122 => 36,  115 => 32,  111 => 31,  104 => 27,  100 => 26,  93 => 22,  89 => 21,  82 => 17,  78 => 16,  71 => 12,  60 => 3,  51 => 2,  29 => 1,);
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
       <div class=\"col-sm-offset-2 col-md-8\">
            <div class=\"card\">
                <div class=\"card-header card-header-icon\" data-background-color=\"rose\">
                    <i class=\"material-icons\">notifications_active</i>
                </div>
                <div class=\"card-content\">
                    <h4 class=\"card-title\">TV Channel</h4>
                    {{form_start(form)}}
                        <br>
                        <label class=\"control-label\">Notification Title</label>
                        <div class=\"form-group label-floating\">
                            {{form_widget(form.title,{value: app.request.query.get(\"title\"),\"attr\":{\"class\":\"form-control\",\"data-emojiable\":\"true\",\"data-emoji-input\":\"unicode\"}})}}
                            <span class=\"validate-input\">{{form_errors(form.title)}}</span>
                        </div>
                        <label class=\"control-label\">Notification Message</label>
                        <div class=\"form-group label-floating \">
                            {{form_widget(form.message,{value: app.request.query.get(\"title\"),\"attr\":{\"class\":\"form-control\",\"data-emojiable\":\"true\",\"data-emoji-input\":\"unicode\"}})}}
                            <span class=\"validate-input\">{{form_errors(form.message)}}</span>
                        </div>
                        <div class=\"form-group label-floating \">
                            <label class=\"control-label\">Large Icon</label>
                            {{form_widget(form.icon,{value: app.request.query.get(\"icon\"),\"attr\":{\"class\":\"form-control\"}})}}
                            <span class=\"validate-input\">{{form_errors(form.icon)}}</span>
                        </div>
                        <div class=\"form-group label-floating \">
                            <label class=\"control-label\">Big Image</label>
                            {{form_widget(form.image,{value: app.request.query.get(\"image\"),\"attr\":{\"class\":\"form-control\"}})}}
                            <span class=\"validate-input\">{{form_errors(form.image)}}</span>
                        </div>
                        <div class=\"form-group label-floating \">
                            <label class=\"control-label\">TV Channel</label>
                            {{form_widget(form.object,{value: app.request.query.get(\"id\"),\"attr\":{\"class\":\"form-control\"}})}}
                            <span class=\"validate-input\">{{form_errors(form.object)}}</span>
                        </div>
                        <span class=\"pull-right\">{{form_widget(form.send,{attr:{\"class\":\"btn btn-fill btn-rose\"}})}}</span>

                    {{form_end(form)}}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock%}", "AppBundle:Home:notif_channel.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Home/notif_channel.html.twig");
    }
}
