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

/* AppBundle:Movie:import_keywords.html.twig */
class __TwigTemplate_af30e92088fbeff8d7f0cfd551339143519121aef7577e74e322aa21c5f5a0b1 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Movie:import_keywords.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        // line 3
        echo "\t<script type=\"text/javascript\">
\t  \tvar themoviedb_key = \"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["setting"] ?? null), "themoviedbkey", []), "html", null, true);
        echo "\";
  \t\tvar language =  \"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["setting"] ?? null), "themoviedblang", []), "html", null, true);
        echo "\";
\t</script>
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-offset-2 col-md-8\">
\t\t\t\t<div class=\"poster-infos\">
\t\t\t\t\t<div class=\"card\" style=\"margin: 10px 0;\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["poster"] ?? null), "poster", []), "link", [])), "poster_thumb"), "html", null, true);
        echo "\" id=\"image-poster\" width=\"100%\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t<table width=\"100%\" class=\"table\">
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th style=\"vertical-align: top;\">Title</th>
\t\t\t\t\t\t\t\t\t\t\t<td id=\"title-poster\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "title", []), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th style=\"vertical-align: top;\">Release Date</th>
\t\t\t\t\t\t\t\t\t\t\t<td id=\"date-poster\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "year", []), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th style=\"vertical-align: top;\">Rating</th>
\t\t\t\t\t\t\t\t\t\t\t<td id=\"rating-poster\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "imdb", []), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th style=\"vertical-align: top;\">Overview</th>
\t\t\t\t\t\t\t\t\t\t\t<td id=\"overview-poster\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "description", []), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card\" style=\"margin: 10px 0;\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<span class=\"import-title\" >Movie Details Imported</span>
\t\t\t\t\t\t\t<span class=\"label label-fill label-success pull-right\"  style=\"margin: 10px;\"><i class=\"material-icons\">check</i></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card\" style=\"margin: 10px 0;\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t";
        // line 46
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
\t\t\t\t\t\t\t";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "id", []), 'widget');
        echo "
\t\t\t\t\t\t\t<span class=\"import-title\" >Import Movie Keywords</span>
\t\t\t\t\t\t\t<button class=\"btn btn-fill btn-rose pull-right\" id=\"import_movie\" style=\"margin: 10px;\"><i class=\"material-icons\">get_app</i> Import</button>
\t\t\t\t\t\t\t";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Movie:import_keywords.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 50,  112 => 47,  108 => 46,  91 => 32,  84 => 28,  77 => 24,  70 => 20,  61 => 14,  49 => 5,  45 => 4,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Movie:import_keywords.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Movie/import_keywords.html.twig");
    }
}
