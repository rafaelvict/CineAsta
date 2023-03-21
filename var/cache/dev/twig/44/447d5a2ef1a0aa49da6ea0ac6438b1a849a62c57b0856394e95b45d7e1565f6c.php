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

/* @User/User/api_export.html.php */
class __TwigTemplate_294f4b96d48ee3ac2c9a3761b4638fe9f0cfecac464a8dd3fbad410b1417e322 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@User/User/api_export.html.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@User/User/api_export.html.php"));

        // line 1
        echo "<?php 
\$followings=array();
for (\$i=0; \$i < sizeof(\$users); \$i++) { 
\tfor (\$j=\$i+1; \$j < sizeof(\$users); \$j++) { 
\t\tif (\$users[\$i][\"status\"]->getCreated()<\$users[\$j][\"status\"]->getCreated()) {
\t\t\t\$temp = \$users[\$i];
\t\t\t\$users[\$i] = \$users[\$j];
\t\t\t\$users[\$j] =\$temp ;
\t\t}
\t}
}
\$max = 10;
for (\$i=0; \$i < sizeof(\$users); \$i++) { 
\t\$a[\"id\"]=\$users[\$i][\"id\"];
\t\$a[\"name\"]=\$users[\$i][\"name\"];
\t\$a[\"image\"]=\$users[\$i][\"image\"];
\t\$a[\"trusted\"]=\$users[\$i][\"trusted\"];
\t\$a[\"label\"]=\$view['time']->diff(\$users[\$i][\"status\"]->getCreated());
\t\$a[\"thum\"] =\$users[\$i][\"image\"];
\tif (\$users[\$i][\"status\"]->getMedia()) 
\t\t\$a[\"thum\"]= \$this['imagine']->filter(\$view['assets']->getUrl(\$users[\$i][\"status\"]->getMedia()->getLink()), 'status_thumb_api');
\t
\t\$followings[]=\$a;
\tif (\$i==9) {
\t\tbreak;
\t}
}
echo json_encode(\$followings, JSON_UNESCAPED_UNICODE);

?>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@User/User/api_export.html.php";
    }

    public function getDebugInfo()
    {
        return array (  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<?php 
\$followings=array();
for (\$i=0; \$i < sizeof(\$users); \$i++) { 
\tfor (\$j=\$i+1; \$j < sizeof(\$users); \$j++) { 
\t\tif (\$users[\$i][\"status\"]->getCreated()<\$users[\$j][\"status\"]->getCreated()) {
\t\t\t\$temp = \$users[\$i];
\t\t\t\$users[\$i] = \$users[\$j];
\t\t\t\$users[\$j] =\$temp ;
\t\t}
\t}
}
\$max = 10;
for (\$i=0; \$i < sizeof(\$users); \$i++) { 
\t\$a[\"id\"]=\$users[\$i][\"id\"];
\t\$a[\"name\"]=\$users[\$i][\"name\"];
\t\$a[\"image\"]=\$users[\$i][\"image\"];
\t\$a[\"trusted\"]=\$users[\$i][\"trusted\"];
\t\$a[\"label\"]=\$view['time']->diff(\$users[\$i][\"status\"]->getCreated());
\t\$a[\"thum\"] =\$users[\$i][\"image\"];
\tif (\$users[\$i][\"status\"]->getMedia()) 
\t\t\$a[\"thum\"]= \$this['imagine']->filter(\$view['assets']->getUrl(\$users[\$i][\"status\"]->getMedia()->getLink()), 'status_thumb_api');
\t
\t\$followings[]=\$a;
\tif (\$i==9) {
\t\tbreak;
\t}
}
echo json_encode(\$followings, JSON_UNESCAPED_UNICODE);

?>", "@User/User/api_export.html.php", "/www/wwwroot/tyflex.07.03/src/UserBundle/Resources/views/User/api_export.html.php");
    }
}
