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
class __TwigTemplate_fdc3b26b83bd4195d45d805d68280f9a6860887fa1f749def718c3d0b3905825 extends \Twig\Template
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
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_actor_view", ["id" => $this->getAttribute($this->getAttribute(($context["cast"] ?? null), "actor", []), "id", []), "slug" => $this->getAttribute($this->getAttribute(($context["cast"] ?? null), "actor", []), "slug", [])]), "html", null, true);
        echo "\" class=\"actor\" >
\t<img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["cast"] ?? null), "actor", []), "media", []), "link", [])), "actor_thumb_mini_web"), "html", null, true);
        echo "\"/>
\t<span>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["cast"] ?? null), "actor", []), "name", []), "html", null, true);
        echo "</span>
\t<label>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["cast"] ?? null), "role", []), "html", null, true);
        echo "</label>
</a>";
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
        return array (  43 => 4,  39 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Actor:cast.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Actor/cast.html.twig");
    }
}
