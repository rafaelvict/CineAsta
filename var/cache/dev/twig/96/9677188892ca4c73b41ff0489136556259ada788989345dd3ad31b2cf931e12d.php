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

/* AppBundle:Source:add_channel.html.twig */
class __TwigTemplate_4fb41351bd1f18e14988cfc6202890ad3a0f54e75d1124db7d3de674d35dbde6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Source:add_channel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Source:add_channel.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Source:add_channel.html.twig", 1);
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
                    <i class=\"material-icons\">folder</i>
                </div>
                <div class=\"card-content\">
                    <h4 class=\"card-title\">Add New Source to  :";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "title", []), "html", null, true);
        echo " </h4>
                    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                                                <div class=\"form-group label-floating is-empty\">
                            <label class=\"control-label\">Source title</label>
                            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <span class=\"validate-input\">";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", []), 'errors');
        echo "</span>
                        </div>
                        <div class=\"form-group label-floating is-empty\">
                            <label class=\"control-label\">Source quality</label>
                            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quality", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <span class=\"validate-input\">";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quality", []), 'errors');
        echo "</span>
                        </div>
                        <div class=\"form-group label-floating is-empty\">
                            <label class=\"control-label\">Source size</label>
                            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "size", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <span class=\"validate-input\">";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "size", []), 'errors');
        echo "</span>
                        </div>
                        <div class=\"form-group label-floating is-empty\">
                            <label class=\"control-label\">Source kind</label>
                            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "kind", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <span class=\"validate-input\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "kind", []), 'errors');
        echo "</span>
                        </div>
                        <div class=\"form-group label-floating is-empty\">
                            <label class=\"control-label\">Source type</label>
                            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "premium", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <span class=\"validate-input\">";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "premium", []), 'errors');
        echo "</span>
                        </div>
                        <div class=\"form-group label-floating is-empty\">
                            <label class=\"control-label\">Source Type</label>
                            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <span class=\"validate-input\">";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", []), 'errors');
        echo "</span>
                        </div>
                        <div class=\"form-group label-floating is-empty\" ";
        // line 43
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", []), "vars", []), "value", []) == 5)) {
            echo " style=\"display:none\" ";
        }
        echo ">
                            <label class=\"control-label\">Source Url</label>
                            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "url", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <span class=\"validate-input\">";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "url", []), 'errors');
        echo "</span>
                        </div>
                        <div class=\"form-group label-floating is-empty\" ";
        // line 48
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "type", []), "vars", []), "value", []) != 5)) {
            echo " style=\"display:none\" ";
        }
        echo ">
                            <label class=\"control-label\">Source File</label>
                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                        <span class=\"validate-input\">";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", []), 'errors');
        echo "</span>
                        <span class=\"pull-right\"><a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["rout"] ?? $this->getContext($context, "rout")), ["id" => $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-fill btn-yellow\"><i class=\"material-icons\">arrow_back</i> Cancel</a>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", []), 'widget', ["attr" => ["class" => "btn btn-fill btn-rose"]]);
        echo "</span>
                        <div class=\"\">
                            <label>
                              ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "external", []), 'widget');
        echo "  Open in external browser
                            </label>
                        </div>
                    ";
        // line 59
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
        return "AppBundle:Source:add_channel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 59,  184 => 56,  176 => 53,  172 => 52,  167 => 50,  160 => 48,  155 => 46,  151 => 45,  144 => 43,  139 => 41,  135 => 40,  128 => 36,  124 => 35,  117 => 31,  113 => 30,  106 => 26,  102 => 25,  95 => 21,  91 => 20,  84 => 16,  80 => 15,  74 => 12,  70 => 11,  60 => 3,  51 => 2,  29 => 1,);
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
                    <i class=\"material-icons\">folder</i>
                </div>
                <div class=\"card-content\">
                    <h4 class=\"card-title\">Add New Source to  :{{channel.title}} </h4>
                    {{form_start(form)}}
                                                <div class=\"form-group label-floating is-empty\">
                            <label class=\"control-label\">Source title</label>
                            {{form_widget(form.title,{\"attr\":{\"class\":\"form-control\"}})}}
                            <span class=\"validate-input\">{{form_errors(form.title)}}</span>
                        </div>
                        <div class=\"form-group label-floating is-empty\">
                            <label class=\"control-label\">Source quality</label>
                            {{form_widget(form.quality,{\"attr\":{\"class\":\"form-control\"}})}}
                            <span class=\"validate-input\">{{form_errors(form.quality)}}</span>
                        </div>
                        <div class=\"form-group label-floating is-empty\">
                            <label class=\"control-label\">Source size</label>
                            {{form_widget(form.size,{\"attr\":{\"class\":\"form-control\"}})}}
                            <span class=\"validate-input\">{{form_errors(form.size)}}</span>
                        </div>
                        <div class=\"form-group label-floating is-empty\">
                            <label class=\"control-label\">Source kind</label>
                            {{form_widget(form.kind,{\"attr\":{\"class\":\"form-control\"}})}}
                            <span class=\"validate-input\">{{form_errors(form.kind)}}</span>
                        </div>
                        <div class=\"form-group label-floating is-empty\">
                            <label class=\"control-label\">Source type</label>
                            {{form_widget(form.premium,{\"attr\":{\"class\":\"form-control\"}})}}
                            <span class=\"validate-input\">{{form_errors(form.premium)}}</span>
                        </div>
                        <div class=\"form-group label-floating is-empty\">
                            <label class=\"control-label\">Source Type</label>
                            {{form_widget(form.type,{\"attr\":{\"class\":\"form-control\"}})}}
                            <span class=\"validate-input\">{{form_errors(form.type)}}</span>
                        </div>
                        <div class=\"form-group label-floating is-empty\" {% if form.type.vars.value == 5 %} style=\"display:none\" {% endif %}>
                            <label class=\"control-label\">Source Url</label>
                            {{form_widget(form.url,{\"attr\":{\"class\":\"form-control\"}})}}
                            <span class=\"validate-input\">{{form_errors(form.url)}}</span>
                        </div>
                        <div class=\"form-group label-floating is-empty\" {% if form.type.vars.value != 5 %} style=\"display:none\" {% endif %}>
                            <label class=\"control-label\">Source File</label>
                            {{form_widget(form.file,{\"attr\":{\"class\":\"form-control\"}})}}
                        </div>
                        <span class=\"validate-input\">{{form_errors(form.file)}}</span>
                        <span class=\"pull-right\"><a href=\"{{path(rout,{\"id\":channel.id})}}\" class=\"btn btn-fill btn-yellow\"><i class=\"material-icons\">arrow_back</i> Cancel</a>{{form_widget(form.save,{attr:{\"class\":\"btn btn-fill btn-rose\"}})}}</span>
                        <div class=\"\">
                            <label>
                              {{form_widget(form.external)}}  Open in external browser
                            </label>
                        </div>
                    {{form_end(form)}}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock%}", "AppBundle:Source:add_channel.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Source/add_channel.html.twig");
    }
}
