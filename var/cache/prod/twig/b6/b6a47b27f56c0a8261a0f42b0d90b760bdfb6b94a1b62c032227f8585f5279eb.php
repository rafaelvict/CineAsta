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

/* AppBundle:Slide:index.html.twig */
class __TwigTemplate_1e16ea5e081fbaf4710605023f383fbf8f7e196ff60cd9c81aef63890dc7ffed extends \Twig\Template
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
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Slide:index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        // line 3
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
    <div class=\"col-md-12\">
    <div class=\"row\">
      <div class=\"col-md-4\">
        <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_slide_index");
        echo "\" class=\"btn  btn-lg btn-warning btn-block\"><i class=\"material-icons\" style=\"font-size: 30px;\">refresh</i> Refresh</a>
      </div>
      <div class=\"col-md-4\">
        <a class=\"btn btn btn-lg btn-yellow btn-block\"><i class=\"material-icons\" style=\"font-size: 30px;\">slideshow</i> ";
        // line 11
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["slides"] ?? null)), "html", null, true);
        echo " slides</a>
      </div>
      <div class=\"col-md-4\">
        <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_slide_add");
        echo "\" class=\"btn btn-rose btn-lg pull-right add-button btn-block\" title=\"\"><i class=\"material-icons\" style=\"font-size: 30px;\">add_box</i> NEW slide </a>
      </div>
    </div>
          <div class=\"row\">
           ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slides"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 19
            echo "
            <div class=\"col-md-6\">
              <div class=\"card\"  style=\"padding-bottom: 10px;\">
                <div class=\"card-content\" style=\"  padding: 0px;\">
                  <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["slide"], "media", []), "link", [])), "slide_thumb"), "html", null, true);
            echo "\" class=\"image-element\" style=\"width:100%; height:auto; position: relative !important\">
              
                  
                </div>
                <div class=\"card-footer\">
                  <span class=\"pull-left channel-title\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "clear", []), "html", null, true);
            echo "</span>
                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_slide_edit", ["id" => $this->getAttribute($context["slide"], "id", [])]), "html", null, true);
            echo "\" rel=\"tooltip\" data-placement=\"left\" class=\" btn btn-primary btn-xs btn-round pull-right\" data-original-title=\"Edit\">
                      <i class=\"material-icons\">edit</i>
                    </a>
                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_slide_delete", ["id" => $this->getAttribute($context["slide"], "id", [])]), "html", null, true);
            echo "\" rel=\"tooltip\" data-placement=\"left\" class=\" btn btn-danger btn-xs btn-round pull-right\" data-original-title=\"Delete\">
                      <i class=\"material-icons\">delete</i>
                    </a>
                    <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_slide_up", ["id" => $this->getAttribute($context["slide"], "id", [])]), "html", null, true);
            echo "\" rel=\"tooltip\" data-placement=\"left\" class=\" btn btn-info btn-xs btn-round pull-right\" data-original-title=\"Up\">
                      <i class=\"material-icons\">keyboard_arrow_up</i>
                    </a>
                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_slide_down", ["id" => $this->getAttribute($context["slide"], "id", [])]), "html", null, true);
            echo "\" rel=\"tooltip\" data-placement=\"left\" class=\" btn btn-info btn-xs btn-round pull-right\" data-original-title=\"Down\">
                      <i class=\"material-icons\">keyboard_arrow_down</i>
                    </a>
                </div>
              </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            echo "          <div class=\"col-md-12\">
        <div class=\"card\">
              <div class=\"card-content\">
                <br>
                <br>
                <center><img src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg_empty.png"), "html", null, true);
            echo "\"  style=\"width: auto !important;\" =\"\"></center>
                  <br>
                  <br>
              </div>
            </div>
            </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "      </div>
      

      </div>
  </div>
                            
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Slide:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 57,  128 => 50,  121 => 45,  109 => 38,  103 => 35,  97 => 32,  91 => 29,  87 => 28,  79 => 23,  73 => 19,  68 => 18,  61 => 14,  55 => 11,  49 => 8,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Slide:index.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Slide/index.html.twig");
    }
}
