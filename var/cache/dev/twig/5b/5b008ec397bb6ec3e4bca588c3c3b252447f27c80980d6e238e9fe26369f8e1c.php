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
class __TwigTemplate_91d25f0468cb06920d9cc143dbf7599ba787a020a7432e680483ad7ecab33b5f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MediaBundle:Media:add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "MediaBundle:Media:add.html.twig"));

        $this->parent = $this->loadTemplate("MediaBundle::layout.html.twig", "MediaBundle:Media:add.html.twig", 1);
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
        echo "\t";
        if (($this->getAttribute(($context["media"] ?? $this->getContext($context, "media")), "id", []) != null)) {
            // line 4
            echo "\t\t<script type=\"text/javascript\">
\t\tsendToParent(\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["media"] ?? $this->getContext($context, "media")), "link", [])), "media_article"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("media_index", ["CKEditor" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "CKEditor"], "method"), "CKEditorFuncNum" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "CKEditorFuncNum"], "method"), "langCode" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "langCode"], "method")]), "html", null, true);
        echo "\" class=\"notif-close\"><i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>Images list</a>
\t\t\t<span class=\"notif-title\">Add image</span>
\t\t</div>
\t\t";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
\t\t
\t\t<div class=\"notif-body clearfix\" dir=\"rtl\">
\t\t\t<div class=\"thumb img-thumbnail upload\" onclick=\"document.getElementById('form_file').click()\">
\t\t\t\t<img>
\t\t\t\t<div class=\"select\"> Click to add image to article <br>\t <i class=\"fa fa-camera fa-5x\" aria-hidden=\"true\"></i></div>
\t\t\t\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", []), 'widget', ["attr" => ["style" => "opacity:0;"]]);
        echo "
\t\t\t</div>
\t\t\t<div class=\"errors-form\">
\t\t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", []), 'errors');
        echo "
\t\t\t</div>
\t\t\t<br>
\t\t\t<button class=\"btn btn-hiya\" style=\"width:300px;\" >Upload image<i class=\"fa fa-send\" aria-hidden=\"true\"></i></button>
\t\t\t";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  105 => 27,  98 => 23,  92 => 20,  83 => 14,  77 => 11,  73 => 9,  66 => 5,  63 => 4,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'MediaBundle::layout.html.twig' %}
{% block body %}
\t{% if media.id !=null %}
\t\t<script type=\"text/javascript\">
\t\tsendToParent(\"{{asset(media.link)|imagine_filter('media_article')}}\");
\t\twindow.close();
\t\t</script>
\t{% endif %}
\t<div class=\"notif\" >
\t\t<div class=\"notif-head\">
\t\t\t<a href=\"{{path(\"media_index\",{CKEditor:app.request.query.get(\"CKEditor\"),CKEditorFuncNum:app.request.query.get(\"CKEditorFuncNum\"),langCode:app.request.query.get(\"langCode\")})}}\" class=\"notif-close\"><i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>Images list</a>
\t\t\t<span class=\"notif-title\">Add image</span>
\t\t</div>
\t\t{{ form_start(form)}}
\t\t
\t\t<div class=\"notif-body clearfix\" dir=\"rtl\">
\t\t\t<div class=\"thumb img-thumbnail upload\" onclick=\"document.getElementById('form_file').click()\">
\t\t\t\t<img>
\t\t\t\t<div class=\"select\"> Click to add image to article <br>\t <i class=\"fa fa-camera fa-5x\" aria-hidden=\"true\"></i></div>
\t\t\t\t{{form_widget(form.file,{\"attr\":{\"style\":\"opacity:0;\"}})}}
\t\t\t</div>
\t\t\t<div class=\"errors-form\">
\t\t\t\t{{form_errors(form.file)}}
\t\t\t</div>
\t\t\t<br>
\t\t\t<button class=\"btn btn-hiya\" style=\"width:300px;\" >Upload image<i class=\"fa fa-send\" aria-hidden=\"true\"></i></button>
\t\t\t{{form_end(form)}}
\t\t</div>
\t</div>
{% endblock %}", "MediaBundle:Media:add.html.twig", "/www/wwwroot/tyflex.07.03/src/MediaBundle/Resources/views/Media/add.html.twig");
    }
}
