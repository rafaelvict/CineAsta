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

/* MediaBundle:Media:add.html.twig */
class __TwigTemplate_1b287ec06f6a017b6240406925e3b6516a87dd28c2b1075e0f348e475c9b8155 extends \Twig\Template
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
        return "MediaBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("MediaBundle::layout.html.twig", "MediaBundle:Media:add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        // line 3
        echo "\t";
        if (($this->getAttribute(($context["media"] ?? null), "id", []) != null)) {
            // line 4
            echo "\t\t<script type=\"text/javascript\">
\t\tsendToParent(\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["media"] ?? null), "link", [])), "media_article"), "html", null, true);
            echo "\");
\t\twindow.close();
\t\t</script>
\t";
        }
        // line 9
        echo "\t<div class=\"notif\" >
\t\t<div class=\"notif-head\">
\t\t\t<a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("media_index", ["CKEditor" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "query", []), "get", [0 => "CKEditor"], "method"), "CKEditorFuncNum" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "query", []), "get", [0 => "CKEditorFuncNum"], "method"), "langCode" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "query", []), "get", [0 => "langCode"], "method")]), "html", null, true);
        echo "\" class=\"notif-close\"><i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>Images list</a>
\t\t\t<span class=\"notif-title\">Add image</span>
\t\t</div>
\t\t";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
\t\t
\t\t<div class=\"notif-body clearfix\" dir=\"rtl\">
\t\t\t<div class=\"thumb img-thumbnail upload\" onclick=\"document.getElementById('form_file').click()\">
\t\t\t\t<img>
\t\t\t\t<div class=\"select\"> Click to add image to article <br>\t <i class=\"fa fa-camera fa-5x\" aria-hidden=\"true\"></i></div>
\t\t\t\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "file", []), 'widget', ["attr" => ["style" => "opacity:0;"]]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"errors-form\">
\t\t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "file", []), 'errors');
        echo "
\t\t\t</div>
\t\t\t<br>
\t\t\t<button class=\"btn btn-hiya\" style=\"width:300px;\" >Upload image<i class=\"fa fa-send\" aria-hidden=\"true\"></i></button>
\t\t\t";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "MediaBundle:Media:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 27,  80 => 23,  74 => 20,  65 => 14,  59 => 11,  55 => 9,  48 => 5,  45 => 4,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "MediaBundle:Media:add.html.twig", "/www/wwwroot/tyflex.07.03/src/MediaBundle/Resources/views/Media/add.html.twig");
    }
}
