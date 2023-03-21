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

/* AppBundle:Support:view.html.twig */
class __TwigTemplate_d09669fce463a5a010201c6313c6c81d114ea08dd78b02c2ca5da0d2953fe5b4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Support:view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Support:view.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Support:view.html.twig", 1);
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
        <div class=\"col-sm-offset-1  col-md-4\">
            <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_support_index");
        echo "\" class=\"btn btn-default btn-lg add-button btn-block\" title=\"\"><i class=\"material-icons\">arrow_back</i> Messages </a>
        </div>
        <div class=\"col-md-5\">
            <a href=\"mailto:";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["support"] ?? $this->getContext($context, "support")), "email", []), "html", null, true);
        echo "?subject=feedback\"  class=\"btn btn-primary btn-lg add-button pull-right btn-block\" title=\"\"><i class=\"material-icons\">reply</i> Reply </a>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-offset-1 col-md-9\">
            <div class=\"card card-product\" >
                <center><h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["support"] ?? $this->getContext($context, "support")), "subject", []), "html", null, true);
        echo "</h2></center>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-offset-1  col-md-9\">
        
        <div class=\"card\" >
            <div class=\"card-content ch-dark palette-Teal-600 bg\">
                <h2><small>Full name : ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["support"] ?? $this->getContext($context, "support")), "subject", []), "html", null, true);
        echo " <br>
                E-mail : ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["support"] ?? $this->getContext($context, "support")), "email", []), "html", null, true);
        echo "</small>
                </h2>
            </div>

            <div class=\"card-content ch-dark palette-Teal-600 bg\">
              
                    <div >Message</div>
                    <div style=\"padding:40px; text-align: justify;padding:40px;\">
                        ";
        // line 34
        echo $this->getAttribute(($context["support"] ?? $this->getContext($context, "support")), "message", []);
        echo "
                        <br>
                        <br>
                        <br>
                        <ul class=\"lgi-attrs pull-right\">
                            Sending Date:";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["support"] ?? $this->getContext($context, "support")), "created", []), "d/m/Y"), "html", null, true);
        echo " at ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["support"] ?? $this->getContext($context, "support")), "created", []), "H:i"), "html", null, true);
        echo "
                        </ul>
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
        return "AppBundle:Support:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 39,  108 => 34,  97 => 26,  93 => 25,  81 => 16,  72 => 10,  66 => 7,  60 => 3,  51 => 2,  29 => 1,);
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
        <div class=\"col-sm-offset-1  col-md-4\">
            <a href=\"{{path(\"app_support_index\")}}\" class=\"btn btn-default btn-lg add-button btn-block\" title=\"\"><i class=\"material-icons\">arrow_back</i> Messages </a>
        </div>
        <div class=\"col-md-5\">
            <a href=\"mailto:{{support.email}}?subject=feedback\"  class=\"btn btn-primary btn-lg add-button pull-right btn-block\" title=\"\"><i class=\"material-icons\">reply</i> Reply </a>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-offset-1 col-md-9\">
            <div class=\"card card-product\" >
                <center><h2>{{support.subject}}</h2></center>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-offset-1  col-md-9\">
        
        <div class=\"card\" >
            <div class=\"card-content ch-dark palette-Teal-600 bg\">
                <h2><small>Full name : {{support.subject}} <br>
                E-mail : {{support.email}}</small>
                </h2>
            </div>

            <div class=\"card-content ch-dark palette-Teal-600 bg\">
              
                    <div >Message</div>
                    <div style=\"padding:40px; text-align: justify;padding:40px;\">
                        {{ support.message | raw }}
                        <br>
                        <br>
                        <br>
                        <ul class=\"lgi-attrs pull-right\">
                            Sending Date:{{support.created|date(\"d/m/Y\")}} at {{support.created|date(\"H:i\")}}
                        </ul>
                    </div>

            </div>
        </div>
    </div>
</div>

{% endblock%}", "AppBundle:Support:view.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Support/view.html.twig");
    }
}
