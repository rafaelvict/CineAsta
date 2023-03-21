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
class __TwigTemplate_77164527703a7a47307990ce498dc55f687b4081c1e5a23250d041824b51e9dc extends \Twig\Template
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
    }

    public function getTemplateName()
    {
        return "@App/Comment/api_by.html.php";
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
        return new Source("", "@App/Comment/api_by.html.php", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Comment/api_by.html.php");
    }
}
