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

/* AppBundle:Country:delete.html.twig */
class __TwigTemplate_5dd3ee5e337cc4cfd5e5effc06fb055c7787dac1cc5bb52c09815b7f7dfd4161 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Country:delete.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Country:delete.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Country:delete.html.twig", 1);
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
\t<div class=\"swal2-modal swal2-show\" style=\"display: block; width: 500px; padding: 20px; background: rgb(255, 255, 255); min-height: 332px;\" tabindex=\"-1\">
\t    <ul class=\"swal2-progresssteps\" style=\"display: none;\"></ul>
\t    <div class=\"swal2-icon swal2-error\" style=\"display: none;\"><span class=\"x-mark\"><span class=\"line left\"></span><span class=\"line right\"></span></span>
\t    </div>
\t    <div class=\"swal2-icon swal2-question\" style=\"display: none;\">?</div>
\t    <div class=\"swal2-icon swal2-warning pulse-warning\" style=\"display: block;\">!</div>
\t    <div class=\"swal2-icon swal2-info\" style=\"display: none;\">i</div>
\t    <div class=\"swal2-icon swal2-success\" style=\"display: none;\"><span class=\"line tip\"></span> <span class=\"line long\"></span>
\t        <div class=\"placeholder\"></div>
\t        <div class=\"fix\"></div>
\t    </div><img class=\"swal2-image\" style=\"display: none;\">
\t    <h2>Are you sure</h2>
\t    <div class=\"swal2-content\" style=\"display: block;\">Do you really want to delete this Country</div>
\t    <input class=\"swal2-input\" style=\"display: none;\">
\t    <input type=\"file\" class=\"swal2-file\" style=\"display: none;\">
\t    <div class=\"swal2-range\" style=\"display: none;\">
\t        <output></output>
\t        <input type=\"range\">
\t    </div>
\t    <select class=\"swal2-select\" style=\"display: none;\"></select>
\t    <div class=\"swal2-radio\" style=\"display: none;\"></div>
\t    <label for=\"swal2-checkbox\" class=\"swal2-checkbox\" style=\"display: none;\">
\t        <input type=\"checkbox\">
\t    </label>
\t    <textarea class=\"swal2-textarea\" style=\"display: none;\"></textarea>
\t    <div class=\"swal2-validationerror\" style=\"display: none;\"></div>
\t    <hr class=\"swal2-spacer\" style=\"display: block;\">
\t    ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
              ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "Yes", []), 'widget', ["attr" => ["class" => "swal2-confirm btn btn-success"]]);
        echo "
              <a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_country_index");
        echo "\" class=\"swal2-cancel btn btn-danger\">Cancel</a>
\t\t";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
\t</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Country:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 34,  98 => 33,  94 => 32,  90 => 31,  60 => 3,  51 => 2,  29 => 1,);
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
\t<div class=\"swal2-modal swal2-show\" style=\"display: block; width: 500px; padding: 20px; background: rgb(255, 255, 255); min-height: 332px;\" tabindex=\"-1\">
\t    <ul class=\"swal2-progresssteps\" style=\"display: none;\"></ul>
\t    <div class=\"swal2-icon swal2-error\" style=\"display: none;\"><span class=\"x-mark\"><span class=\"line left\"></span><span class=\"line right\"></span></span>
\t    </div>
\t    <div class=\"swal2-icon swal2-question\" style=\"display: none;\">?</div>
\t    <div class=\"swal2-icon swal2-warning pulse-warning\" style=\"display: block;\">!</div>
\t    <div class=\"swal2-icon swal2-info\" style=\"display: none;\">i</div>
\t    <div class=\"swal2-icon swal2-success\" style=\"display: none;\"><span class=\"line tip\"></span> <span class=\"line long\"></span>
\t        <div class=\"placeholder\"></div>
\t        <div class=\"fix\"></div>
\t    </div><img class=\"swal2-image\" style=\"display: none;\">
\t    <h2>Are you sure</h2>
\t    <div class=\"swal2-content\" style=\"display: block;\">Do you really want to delete this Country</div>
\t    <input class=\"swal2-input\" style=\"display: none;\">
\t    <input type=\"file\" class=\"swal2-file\" style=\"display: none;\">
\t    <div class=\"swal2-range\" style=\"display: none;\">
\t        <output></output>
\t        <input type=\"range\">
\t    </div>
\t    <select class=\"swal2-select\" style=\"display: none;\"></select>
\t    <div class=\"swal2-radio\" style=\"display: none;\"></div>
\t    <label for=\"swal2-checkbox\" class=\"swal2-checkbox\" style=\"display: none;\">
\t        <input type=\"checkbox\">
\t    </label>
\t    <textarea class=\"swal2-textarea\" style=\"display: none;\"></textarea>
\t    <div class=\"swal2-validationerror\" style=\"display: none;\"></div>
\t    <hr class=\"swal2-spacer\" style=\"display: block;\">
\t    {{form_start(form)}}
              {{form_widget(form.Yes,{\"attr\":{\"class\":\"swal2-confirm btn btn-success\"}})}}
              <a href=\"{{path(\"app_country_index\")}}\" class=\"swal2-cancel btn btn-danger\">Cancel</a>
\t\t{{form_end(form)}}
\t</div>
</div>
{% endblock%}", "AppBundle:Country:delete.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Country/delete.html.twig");
    }
}
