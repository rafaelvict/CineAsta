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

/* WebBundle:Actor:cast.html.twig */
class __TwigTemplate_bc86a7a9ebeff97654b7d66aa995dfcb7029e1820ea67e90bf10dc797e05caa2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Actor:cast.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Actor:cast.html.twig"));

        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_actor_view", ["id" => $this->getAttribute($this->getAttribute(($context["cast"] ?? $this->getContext($context, "cast")), "actor", []), "id", []), "slug" => $this->getAttribute($this->getAttribute(($context["cast"] ?? $this->getContext($context, "cast")), "actor", []), "slug", [])]), "html", null, true);
        echo "\" class=\"actor\" >
\t<img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["cast"] ?? $this->getContext($context, "cast")), "actor", []), "media", []), "link", [])), "actor_thumb_mini_web"), "html", null, true);
        echo "\"/>
\t<span>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cast"] ?? $this->getContext($context, "cast")), "actor", []), "name", []), "html", null, true);
        echo "</span>
\t<label>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cast"] ?? $this->getContext($context, "cast")), "role", []), "html", null, true);
        echo "</label>
</a>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Actor:cast.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  45 => 3,  41 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<a href=\"{{path(\"wep_actor_view\",{id:cast.actor.id,slug:cast.actor.slug})}}\" class=\"actor\" >
\t<img src=\"{{asset(cast.actor.media.link)|imagine_filter('actor_thumb_mini_web')}}\"/>
\t<span>{{cast.actor.name}}</span>
\t<label>{{cast.role}}</label>
</a>", "WebBundle:Actor:cast.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Actor/cast.html.twig");
    }
}
