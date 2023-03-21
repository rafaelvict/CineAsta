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

/* AppBundle:Movie:share.html.twig */
class __TwigTemplate_f48ed85cbd5cbcc3a95d8e1fd260c01ac35d86727846f2504502f17b4a360c89 extends \Twig\Template
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
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <title>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["setting"] ?? null), "appname", []), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "title", []), "html", null, true);
        echo "</title>
\t<meta property=\"og:title\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "title", []), "html", null, true);
        echo "\">
\t<meta property=\"og:description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "title", []), "html", null, true);
        echo "\">
\t<meta property=\"og:image\" \t\tcontent=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["poster"] ?? null), "poster", []), "link", [])), "poster_thumb"), "html", null, true);
        echo "\">
\t<meta property=\"og:url\" \t\tcontent=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "uri", []), "html", null, true);
        echo "\">

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"title\" content=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["setting"] ?? null), "appname", []), "html", null, true);
        echo "\">
    <meta name=\"description\" content=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["setting"] ?? null), "appdescription", []), "html", null, true);
        echo "\">
    <link rel=\"dns-prefetch\" href=\"//fonts.googleapis.com\">
    <link href=\"https://fonts.googleapis.com/css?family=Rubik:300,400,500\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>
<body data-spy=\"scroll\" data-target=\"#navbar\" data-offset=\"30\">
    <!-- Nav Menu -->
    <header class=\"bg-gradient\" id=\"home\">
        <div class=\"container mt-5\">
            <h1>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["setting"] ?? null), "appname", []), "html", null, true);
        echo "</h1>
            <p class=\"tagline\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["setting"] ?? null), "appdescription", []), "html", null, true);
        echo "</p>
            <br>
            <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["setting"] ?? null), "googleplay", []), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/download.png"), "html", null, true);
        echo "\" style=\"    width: 350px;\" class=\"img\"></a>
            <br>
            <br>
            <div class=\"img-holder mt-3\"><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["setting"] ?? null), "media", []), "link", [])), "html", null, true);
        echo "\" alt=\"phone\" class=\"img-fluid img\"></div>
        </div>
    </header>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Movie:share.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 29,  92 => 26,  87 => 24,  83 => 23,  74 => 17,  70 => 16,  64 => 13,  60 => 12,  53 => 8,  49 => 7,  45 => 6,  41 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Movie:share.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Movie/share.html.twig");
    }
}
