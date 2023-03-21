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

/* WebBundle:Channel:channel.html.twig */
class __TwigTemplate_3397c2b5988cf962a97b63ecc62db436f6e5d12d1330f6eb909f1fd448c3b915 extends \Twig\Template
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
        echo "<a class=\"channel ";
        (((isset($context["class"]) || array_key_exists("class", $context))) ? (print (twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true))) : (print ("")));
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_channel_view", ["id" => $this->getAttribute(($context["channel"] ?? null), "id", []), "slug" => $this->getAttribute(($context["channel"] ?? null), "slug", [])]), "html", null, true);
        echo "\" >
\t\t<img height=\"75\" width=\"150\" src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute(($context["channel"] ?? null), "media", []), "link", []), "channel_thumb_web")), "html", null, true);
        echo "\"/>
\t\t<div>
\t\t\t";
        // line 4
        if (($this->getAttribute(($context["channel"] ?? null), "label", []) != "")) {
            echo "<span>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? null), "label", []), "html", null, true);
            echo "</span>";
        }
        if (($this->getAttribute(($context["channel"] ?? null), "sublabel", []) != "")) {
            echo "<p ";
            if (($this->getAttribute(($context["channel"] ?? null), "sublabel", []) != "")) {
                echo " class=\"two\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? null), "sublabel", []), "html", null, true);
            echo "</p>";
        }
        // line 5
        echo "\t\t</div>
</a>";
    }

    public function getTemplateName()
    {
        return "WebBundle:Channel:channel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 5,  42 => 4,  37 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Channel:channel.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Channel/channel.html.twig");
    }
}
