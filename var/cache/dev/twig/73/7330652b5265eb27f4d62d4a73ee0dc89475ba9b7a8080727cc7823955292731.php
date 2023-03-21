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
class __TwigTemplate_be10310528478571165151c49e6703215e11e1bdadeefc9495b458f7f4266f72 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Channel:channel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Channel:channel.html.twig"));

        // line 1
        echo "<a class=\"channel ";
        (((isset($context["class"]) || array_key_exists("class", $context))) ? (print (twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true))) : (print ("")));
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_channel_view", ["id" => $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "id", []), "slug" => $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "slug", [])]), "html", null, true);
        echo "\" >
\t\t<img height=\"75\" width=\"150\" src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "media", []), "link", []), "channel_thumb_web")), "html", null, true);
        echo "\"/>
\t\t<div>
\t\t\t";
        // line 4
        if (($this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "label", []) != "")) {
            echo "<span>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "label", []), "html", null, true);
            echo "</span>";
        }
        if (($this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "sublabel", []) != "")) {
            echo "<p ";
            if (($this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "sublabel", []) != "")) {
                echo " class=\"two\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "sublabel", []), "html", null, true);
            echo "</p>";
        }
        // line 5
        echo "\t\t</div>
</a>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  63 => 5,  48 => 4,  43 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<a class=\"channel {{(class is defined)? class : \"\"}}\" href=\"{{path(\"wep_channel_view\",{id:channel.id,slug:channel.slug})}}\" >
\t\t<img height=\"75\" width=\"150\" src=\"{{asset(channel.media.link|imagine_filter('channel_thumb_web'))}}\"/>
\t\t<div>
\t\t\t{% if channel.label != \"\" %}<span>{{channel.label}}</span>{% endif %}{% if channel.sublabel != \"\" %}<p {% if channel.sublabel != \"\" %} class=\"two\" {% endif %}>{{channel.sublabel}}</p>{% endif %}
\t\t</div>
</a>", "WebBundle:Channel:channel.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Channel/channel.html.twig");
    }
}
