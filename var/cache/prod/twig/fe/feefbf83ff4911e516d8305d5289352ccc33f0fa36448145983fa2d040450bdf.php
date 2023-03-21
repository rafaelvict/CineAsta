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
class __TwigTemplate_4ff687cbfc838dc8e0ba77ff56c07b880c3edfaecc1eff62c4d66ab0032b2439 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Support:view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["support"] ?? null), "email", []), "html", null, true);
        echo "?subject=feedback\"  class=\"btn btn-primary btn-lg add-button pull-right btn-block\" title=\"\"><i class=\"material-icons\">reply</i> Reply </a>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-offset-1 col-md-9\">
            <div class=\"card card-product\" >
                <center><h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["support"] ?? null), "subject", []), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["support"] ?? null), "subject", []), "html", null, true);
        echo " <br>
                E-mail : ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["support"] ?? null), "email", []), "html", null, true);
        echo "</small>
                </h2>
            </div>

            <div class=\"card-content ch-dark palette-Teal-600 bg\">
              
                    <div >Message</div>
                    <div style=\"padding:40px; text-align: justify;padding:40px;\">
                        ";
        // line 34
        echo $this->getAttribute(($context["support"] ?? null), "message", []);
        echo "
                        <br>
                        <br>
                        <br>
                        <ul class=\"lgi-attrs pull-right\">
                            Sending Date:";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["support"] ?? null), "created", []), "d/m/Y"), "html", null, true);
        echo " at ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["support"] ?? null), "created", []), "H:i"), "html", null, true);
        echo "
                        </ul>
                    </div>

            </div>
        </div>
    </div>
</div>

";
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
        return array (  98 => 39,  90 => 34,  79 => 26,  75 => 25,  63 => 16,  54 => 10,  48 => 7,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Support:view.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Support/view.html.twig");
    }
}
