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

/* @App/Movie/api_reviews.html.php */
class __TwigTemplate_6aaedd89dbdcb387d35fd9d1df8054eeda6044ca76fed97ba96fafd8c0a16936 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/Movie/api_reviews.html.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/Movie/api_reviews.html.php"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@App/Movie/api_reviews.html.php";
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
?>", "@App/Movie/api_reviews.html.php", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Movie/api_reviews.html.php");
    }
}
