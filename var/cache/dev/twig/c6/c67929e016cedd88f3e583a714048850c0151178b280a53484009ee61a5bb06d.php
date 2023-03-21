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

/* @App/Comment/api_by.html.php */
class __TwigTemplate_c140bca272c2e18e37935aaf68cbda573c7c40206e42aa1573b895a90781ffbe extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/Comment/api_by.html.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/Comment/api_by.html.php"));

        // line 1
        echo "<?php 
\$list=array();
foreach (\$comments as \$key => \$comment) {
\t\$a[\"id\"]=\$comment->getId();
\t\$a[\"user\"]=\$comment->getUser()->getName();
\t\$a[\"content\"]=\$comment->getContent();
\t\$a[\"enabled\"]=\$comment->getEnabled();
          if(\$comment->getUser()->getMedia() ==  null ){
              \$a[\"image\"] = \"https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg\" ;
          }else{
              if (\$comment->getUser()->getMedia()->getType()==\"link\") {
                  \$a[\"image\"] = \$comment->getUser()->getMedia()->getUrl() ;
              }else{
                  \$a[\"image\"] = \$this['imagine']->filter(\$comment->getUser()->getMedia()->getLink(), 'actor_thumb') ;
              }
          }
\t\$a[\"created\"]=\$view['time']->diff(\$comment->getCreated());
\t\$list[]=\$a;
}
echo json_encode(\$list, JSON_UNESCAPED_UNICODE);
?>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@App/Comment/api_by.html.php";
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
\$list=array();
foreach (\$comments as \$key => \$comment) {
\t\$a[\"id\"]=\$comment->getId();
\t\$a[\"user\"]=\$comment->getUser()->getName();
\t\$a[\"content\"]=\$comment->getContent();
\t\$a[\"enabled\"]=\$comment->getEnabled();
          if(\$comment->getUser()->getMedia() ==  null ){
              \$a[\"image\"] = \"https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg\" ;
          }else{
              if (\$comment->getUser()->getMedia()->getType()==\"link\") {
                  \$a[\"image\"] = \$comment->getUser()->getMedia()->getUrl() ;
              }else{
                  \$a[\"image\"] = \$this['imagine']->filter(\$comment->getUser()->getMedia()->getLink(), 'actor_thumb') ;
              }
          }
\t\$a[\"created\"]=\$view['time']->diff(\$comment->getCreated());
\t\$list[]=\$a;
}
echo json_encode(\$list, JSON_UNESCAPED_UNICODE);
?>", "@App/Comment/api_by.html.php", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Comment/api_by.html.php");
    }
}
