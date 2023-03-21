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

/* @App/Channel/api_reviews.html.php */
class __TwigTemplate_88863de56b420f4bf252cb4e22d16599708d566e54f1953c4a2325a0f48aabff extends \Twig\Template
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
foreach (\$reviews as \$key => \$review) {
\t\$a[\"id\"]=\$review->getId();
\t\$a[\"user\"]=\$review->getUser()->getName();
  \$a[\"content\"]=\$review->getReview();
\t\$a[\"rating\"]=\$review->getValue();
          if(\$review->getUser()->getMedia() ==  null ){
              \$a[\"image\"] = \"https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg\" ;
          }else{
              if (\$review->getUser()->getMedia()->getType()==\"link\") {
                  \$a[\"image\"] = \$review->getUser()->getMedia()->getUrl() ;
              }else{
                  \$a[\"image\"] = \$this['imagine']->filter(\$review->getUser()->getMedia()->getLink(), 'actor_thumb') ;
              }
          }
\t\$a[\"created\"]=\$view['time']->diff(\$review->getCreated());
\t\$list[]=\$a;
}
echo json_encode(\$list, JSON_UNESCAPED_UNICODE);
?>";
    }

    public function getTemplateName()
    {
        return "@App/Channel/api_reviews.html.php";
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
        return new Source("", "@App/Channel/api_reviews.html.php", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Channel/api_reviews.html.php");
    }
}
