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

/* AppBundle:Channel:share.html.twig */
class __TwigTemplate_dec9528890914b6248dbeec095fb46ded5dce4f4e493cf0121b1e06311f20c10 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Channel:share.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Channel:share.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <title>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["setting"] ?? $this->getContext($context, "setting")), "appname", []), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "title", []), "html", null, true);
        echo "</title>
\t<meta property=\"og:title\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "title", []), "html", null, true);
        echo "\">
\t<meta property=\"og:description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "title", []), "html", null, true);
        echo "\">
\t<meta property=\"og:image\" \t\tcontent=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "media", []), "link", [])), "channel_thumb"), "html", null, true);
        echo "\">
\t<meta property=\"og:url\" \t\tcontent=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "uri", []), "html", null, true);
        echo "\">

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"title\" content=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["setting"] ?? $this->getContext($context, "setting")), "appname", []), "html", null, true);
        echo "\">
    <meta name=\"description\" content=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["setting"] ?? $this->getContext($context, "setting")), "appdescription", []), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["setting"] ?? $this->getContext($context, "setting")), "appname", []), "html", null, true);
        echo "</h1>
            <p class=\"tagline\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["setting"] ?? $this->getContext($context, "setting")), "appdescription", []), "html", null, true);
        echo "</p>
            <br>
            <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["setting"] ?? $this->getContext($context, "setting")), "googleplay", []), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/download.png"), "html", null, true);
        echo "\" style=\"    width: 350px;\" class=\"img\"></a>
            <br>
            <br>
            <div class=\"img-holder mt-3\"><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["setting"] ?? $this->getContext($context, "setting")), "media", []), "link", [])), "html", null, true);
        echo "\" alt=\"phone\" class=\"img-fluid img\"></div>
        </div>
    </header>
</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Channel:share.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 29,  98 => 26,  93 => 24,  89 => 23,  80 => 17,  76 => 16,  70 => 13,  66 => 12,  59 => 8,  55 => 7,  51 => 6,  47 => 5,  41 => 4,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <title>{{setting.appname}} - {{channel.title}}</title>
\t<meta property=\"og:title\" content=\"{{channel.title}}\">
\t<meta property=\"og:description\" content=\"{{channel.title}}\">
\t<meta property=\"og:image\" \t\tcontent=\"{{asset(channel.media.link)|imagine_filter(\"channel_thumb\")}}\">
\t<meta property=\"og:url\" \t\tcontent=\"{{app.request.uri}}\">

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"title\" content=\"{{setting.appname}}\">
    <meta name=\"description\" content=\"{{setting.appdescription}}\">
    <link rel=\"dns-prefetch\" href=\"//fonts.googleapis.com\">
    <link href=\"https://fonts.googleapis.com/css?family=Rubik:300,400,500\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{asset(\"css/bootstrap.min.css\")}}\">
    <link href=\"{{asset(\"css/style.css\")}}\" rel=\"stylesheet\">
</head>
<body data-spy=\"scroll\" data-target=\"#navbar\" data-offset=\"30\">
    <!-- Nav Menu -->
    <header class=\"bg-gradient\" id=\"home\">
        <div class=\"container mt-5\">
            <h1>{{setting.appname}}</h1>
            <p class=\"tagline\">{{setting.appdescription}}</p>
            <br>
            <a href=\"{{setting.googleplay}}\"><img src=\"{{asset(\"img/download.png\")}}\" style=\"    width: 350px;\" class=\"img\"></a>
            <br>
            <br>
            <div class=\"img-holder mt-3\"><img src=\"{{asset(setting.media.link)}}\" alt=\"phone\" class=\"img-fluid img\"></div>
        </div>
    </header>
</body>

</html>
", "AppBundle:Channel:share.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Channel/share.html.twig");
    }
}
