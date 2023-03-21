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

/* WebBundle:Serie:subtitles.html.twig */
class __TwigTemplate_5d892822387af3ccfd9a1cf5fbc26abd1c5fbf16ff02036393ad8e7be909f5d5 extends \Twig\Template
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
        // line 1
        echo "<div class=\"subtitles-table\" >
\t<div class=\"table-responsive  \">
\t\t";
        // line 3
        if ((twig_length_filter($this->env, $this->getAttribute(($context["episode"] ?? null), "subtitles", [])) == 0)) {
            // line 4
            echo "\t\t\t<div class=\"empty-box\">
\t\t\t\t<img style=\"width: 150px;height: 135px;\" src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("web/img/empty.svg"), "html", null, true);
            echo "\">
\t\t\t\t<h3>Lista vazia!</h3>
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["episode"] ?? null), "subtitles", []));
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
                echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "scheme", []) . "://") . $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "httpHost", [])) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["subtitle"], "media", []), "link", []))), "html", null, true);
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
    }

    public function getTemplateName()
    {
        return "WebBundle:Serie:subtitles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 28,  83 => 25,  74 => 22,  70 => 21,  64 => 20,  61 => 19,  57 => 18,  46 => 9,  39 => 5,  36 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Serie:subtitles.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Serie/subtitles.html.twig");
    }
}
