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

/* AppBundle:Role:edit.html.twig */
class __TwigTemplate_7749b855e33ad7f432f8a11852e5bb4bc5f32631e2f2ff2b7916bc737f98b0cf extends \Twig\Template
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
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Role:edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        // line 3
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
       <div class=\"col-sm-offset-2 col-md-8\">
            <div class=\"card\">
                <div class=\"card-header card-header-icon\" data-background-color=\"rose\">
                    <i class=\"material-icons\">supervised_user_circle</i>
                </div>
                <div class=\"card-content\">
                    <h4 class=\"card-title\">Edit :  ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "value", []), "role", []), "html", null, true);
        echo "</h4>
                    <br>
                    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                    <form method=\"#\" action=\"#\">
                        <div class=\"form-group label-floating\">
                            <label class=\"control-label\">Genre role</label>
                            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "role", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <span class=\"validate-input\">";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "role", []), 'errors');
        echo "</span>
                        </div>
                        <div class=\"form-group label-floating is-empty\">
                        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "actor", []), 'widget', ["attr" => ["class" => "form-control form-control-role", "placeholder" => "Actor/Director"]]);
        echo "
                        <span class=\"validate-input\">";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "actor", []), 'errors');
        echo "</span>
                        </div>
                        <script type=\"text/javascript\">
                              \$(\"#Role_actor\").selectize();
                        </script>
                        <span class=\"pull-right\"><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["rout"] ?? null), ["id" => $this->getAttribute(($context["poster"] ?? null), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-fill btn-yellow\"><i class=\"material-icons\">arrow_back</i> Cancel</a>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "save", []), 'widget', ["attr" => ["class" => "btn btn-fill btn-rose"]]);
        echo "</span>
                    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "AppBundle:Role:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 28,  86 => 27,  78 => 22,  74 => 21,  68 => 18,  64 => 17,  57 => 13,  52 => 11,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Role:edit.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Role/edit.html.twig");
    }
}
