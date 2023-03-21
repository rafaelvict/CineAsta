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

/* WebBundle:Home:header.html.twig */
class __TwigTemplate_2d7e5a24296009822500dc7c14cbdb7c6d8af1609a30fb52bf0595d77ce78f56 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Home:header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Home:header.html.twig"));

        // line 1
        echo "\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((($this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "favicon", []) != null)) ? ($this->getAttribute($this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "favicon", []), "link", [])) : ("favicon.png"))), "html", null, true);
        echo "\" />\t
\t\t<title>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "title", []), "html", null, true);
        echo " ";
        if ((($context["subtitle"] ?? $this->getContext($context, "subtitle")) != null)) {
            echo " - ";
            echo twig_escape_filter($this->env, ($context["subtitle"] ?? $this->getContext($context, "subtitle")), "html", null, true);
        }
        echo "</title>
\t\t<meta property=\"description\" content=\"";
        // line 3
        echo twig_escape_filter($this->env, (((($context["og_description"] ?? $this->getContext($context, "og_description")) == "null")) ? ($this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "sitedescription", [])) : (($context["og_description"] ?? $this->getContext($context, "og_description")))), "html", null, true);
        echo "\">
\t\t<meta property=\"keywords\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, (((($context["keywords"] ?? $this->getContext($context, "keywords")) == "null")) ? ($this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "sitekeywords", [])) : (($context["keywords"] ?? $this->getContext($context, "keywords")))), "html", null, true);
        echo "\">
\t\t<meta property=\"og:type\" content=\"";
        // line 5
        (((($context["og_type"] ?? $this->getContext($context, "og_type")) == "null")) ? (print ("website")) : (print (twig_escape_filter($this->env, ($context["og_type"] ?? $this->getContext($context, "og_type")), "html", null, true))));
        echo "\">
\t\t<meta property=\"og:title\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "title", []), "html", null, true);
        echo " ";
        if ((($context["subtitle"] ?? $this->getContext($context, "subtitle")) != null)) {
            echo " - ";
            echo twig_escape_filter($this->env, ($context["subtitle"] ?? $this->getContext($context, "subtitle")), "html", null, true);
        }
        echo "\">
\t\t<meta property=\"og:description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["og_description"] ?? $this->getContext($context, "og_description")), "html", null, true);
        echo "\">
\t\t<meta property=\"og:site_name\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "title", []), "html", null, true);
        echo " \">
\t\t<meta property=\"og:image\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, (((($context["og_image"] ?? $this->getContext($context, "og_image")) == "null")) ? ($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((($this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "logo", []) != null)) ? ($this->getAttribute($this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "logo", []), "link", [])) : ("web/img/logo.png"))), "slide_thumb_web")) : (($context["og_image"] ?? $this->getContext($context, "og_image")))), "html", null, true);
        echo "\">
\t\t";
        // line 10
        echo $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "header", []);
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Home:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 10,  79 => 9,  75 => 8,  71 => 7,  62 => 6,  58 => 5,  54 => 4,  50 => 3,  41 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("\t\t<link rel=\"icon\" type=\"image/x-icon\" href=\"{{asset((settings.favicon != null)? settings.favicon.link : \"favicon.png\")}}\" />\t
\t\t<title>{{settings.title}} {% if subtitle != null %} - {{subtitle}}{% endif %}</title>
\t\t<meta property=\"description\" content=\"{{(og_description == \"null\")? settings.sitedescription : og_description}}\">
\t\t<meta property=\"keywords\" content=\"{{(keywords == \"null\")? settings.sitekeywords : keywords}}\">
\t\t<meta property=\"og:type\" content=\"{{(og_type == \"null\")? \"website\" : og_type}}\">
\t\t<meta property=\"og:title\" content=\"{{settings.title}} {% if subtitle != null %} - {{subtitle}}{% endif %}\">
\t\t<meta property=\"og:description\" content=\"{{og_description}}\">
\t\t<meta property=\"og:site_name\" content=\"{{settings.title}} \">
\t\t<meta property=\"og:image\" content=\"{{(og_image == \"null\")? asset((settings.logo != null)? settings.logo.link : \"web/img/logo.png\")|imagine_filter('slide_thumb_web'):og_image}}\">
\t\t{{settings.header|raw}}
", "WebBundle:Home:header.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Home/header.html.twig");
    }
}
