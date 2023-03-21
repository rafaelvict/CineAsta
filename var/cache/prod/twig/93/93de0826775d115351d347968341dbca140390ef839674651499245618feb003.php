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

/* @App/Subtitle/show.html.php */
class __TwigTemplate_3e0d061a35cbabe8c46384210a6d483d3d515a7e30492fbc81f61dd10aec2fde extends \Twig\Template
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
        echo "<?php 
\$media = \$subtitle->getMedia();
\$file_name = \$media->getLink();
\$result = file_get_contents(\$media->getLink());
header('Content-Type:text/vtt; charset=utf-8');
echo \$result;
?>";
    }

    public function getTemplateName()
    {
        return "@App/Subtitle/show.html.php";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@App/Subtitle/show.html.php", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Subtitle/show.html.php");
    }
}
