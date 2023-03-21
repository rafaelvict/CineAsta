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

/* WebBundle:Serie:serie.html.twig */
class __TwigTemplate_0b1fbfb6fecbbd8a44795992b92dbc08ecb96a4f224305864dc24e37f606e977 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Serie:serie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Serie:serie.html.twig"));

        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_serie_view", ["id" => $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "id", []), "slug" => $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "slug", [])]), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "title", []), "html", null, true);
        echo "\"  class=\"poster ";
        (((isset($context["class"]) || array_key_exists("class", $context))) ? (print (twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true))) : (print ("")));
        echo "\" >
\t<div>
\t\t<img width=\"170\" height=\"255\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "poster", []), "link", [])), "poster_thumb_web"), "html", null, true);
        echo "\" />
\t\t<div>
\t\t\t";
        // line 5
        if (($this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "label", []) != "")) {
            echo "<span>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "label", []), "html", null, true);
            echo "</span>";
        }
        if (($this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "sublabel", []) != "")) {
            echo "<p ";
            if (($this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "label", []) != "")) {
                echo " class=\"two\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "sublabel", []), "html", null, true);
            echo "</p>";
        }
        // line 6
        echo "\t\t</div>
\t</div>
</a>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Serie:serie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 6,  51 => 5,  46 => 3,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<a href=\"{{path(\"wep_serie_view\",{id : poster.id, slug : poster.slug})}}\" title=\"{{poster.title}}\"  class=\"poster {{(class is defined)? class : \"\"}}\" >
\t<div>
\t\t<img width=\"170\" height=\"255\" src=\"{{asset(poster.poster.link)|imagine_filter('poster_thumb_web')}}\" />
\t\t<div>
\t\t\t{% if poster.label != \"\" %}<span>{{poster.label}}</span>{% endif %}{% if poster.sublabel != \"\" %}<p {% if poster.label != \"\" %} class=\"two\" {% endif %}>{{poster.sublabel}}</p>{% endif %}
\t\t</div>
\t</div>
</a>", "WebBundle:Serie:serie.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Serie/serie.html.twig");
    }
}
