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

/* AppBundle:Home:privacypolicy.html.twig */
class __TwigTemplate_f803a15b1005c640b2236243feb64c7ac68eabe783ce48b68d5afdcc614ded6f extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["setting"] ?? null), "appname", []), "html", null, true);
        echo " - Privacy Policy</title>
</head>
<body style=\"padding:10px\">
";
        // line 7
        echo $this->getAttribute(($context["setting"] ?? null), "privacypolicy", []);
        echo "
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Home:privacypolicy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Home:privacypolicy.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Home/privacypolicy.html.twig");
    }
}
