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

/* WebBundle:Movie:subtitles.html.twig */
class __TwigTemplate_ad87c146039fe2f0a0f3a8c18ec5bf85c6b0837ef05cac27200891bb3fd7576b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Movie:subtitles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Movie:subtitles.html.twig"));

        // line 1
        echo "<div class=\"subtitles-table\" >
\t<div class=\"table-responsive  \">
\t\t";
        // line 3
        if ((twig_length_filter($this->env, $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "subtitles", [])) == 0)) {
            // line 4
            echo "\t\t\t<div class=\"empty-box\">
\t\t\t\t<img style=\"width: 150px;height: 135px;\" src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("web/img/empty.svg"), "html", null, true);
            echo "\">
\t\t\t\t<h3>Lista vazia</h3>
\t\t\t</div>
\t\t";
        } else {
            // line 9
            echo "\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th width=\"120px;\" scope=\"col\">Idioma</th>
\t\t\t\t\t<th scope=\"col\">Liberar</th>
\t\t\t\t\t<th scope=\"col\" width=\"130px;\">Download</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "subtitles", []));
            foreach ($context['_seq'] as $context["_key"] => $context["subtitle"]) {
                // line 19
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td><img src=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["subtitle"], "language", []), "media", []), "link", [])), "language_thumb_api"), "html", null, true);
                echo "\"> <b>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["subtitle"], "language", []), "language", []), "html", null, true);
                echo "</b></td>
\t\t\t\t\t\t<td><small>\t";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["subtitle"], "media", []), "titre", []), "html", null, true);
                echo "</small></td>
\t\t\t\t\t\t<td><a href=\"";
                // line 22
                echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "scheme", []) . "://") . $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "httpHost", [])) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["subtitle"], "media", []), "link", []))), "html", null, true);
                echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-download\"></i> Download</a></td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subtitle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t\t\t</tbody>
\t\t</table>
\t\t";
        }
        // line 28
        echo "
\t</div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Movie:subtitles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 28,  89 => 25,  80 => 22,  76 => 21,  70 => 20,  67 => 19,  63 => 18,  52 => 9,  45 => 5,  42 => 4,  40 => 3,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"subtitles-table\" >
\t<div class=\"table-responsive  \">
\t\t{% if poster.subtitles|length == 0 %}
\t\t\t<div class=\"empty-box\">
\t\t\t\t<img style=\"width: 150px;height: 135px;\" src=\"{{asset('web/img/empty.svg')}}\">
\t\t\t\t<h3>Lista vazia</h3>
\t\t\t</div>
\t\t{% else %}
\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th width=\"120px;\" scope=\"col\">Idioma</th>
\t\t\t\t\t<th scope=\"col\">Liberar</th>
\t\t\t\t\t<th scope=\"col\" width=\"130px;\">Download</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for subtitle in poster.subtitles %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td><img src=\"{{asset(subtitle.language.media.link)|imagine_filter('language_thumb_api')}}\"> <b>{{subtitle.language.language}}</b></td>
\t\t\t\t\t\t<td><small>\t{{subtitle.media.titre}}</small></td>
\t\t\t\t\t\t<td><a href=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset(subtitle.media.link) }}\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-download\"></i> Download</a></td>
\t\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t\t{% endif %}

\t</div>
</div>", "WebBundle:Movie:subtitles.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Movie/subtitles.html.twig");
    }
}
