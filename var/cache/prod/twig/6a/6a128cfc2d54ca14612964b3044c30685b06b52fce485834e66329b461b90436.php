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

/* @App/Serie/api_all.html.php */
class __TwigTemplate_9a9d97066cd96956edbcf3dd3dfab9c87ed50a8898e3803a942cf2f1d8495ab6 extends \Twig\Template
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

\$posters =  array();

foreach (\$posters_list as \$key => \$poster) {
\t\$pstr = null;
\t\$pstr[\"id\"]= \$poster->getId();
\t\$pstr[\"title\"]= \$poster->getTitle();
\t\$pstr[\"label\"]= \$poster->getLabel();
\t\$pstr[\"sublabel\"]= \$poster->getSublabel();
\t\$pstr[\"type\"]= \$poster->getType();
\t\$pstr[\"description\"]= \$poster->getDescription();
\t\$pstr[\"year\"]= \$poster->getYear();
\t\$pstr[\"rating\"]= \$poster->getRating();
\t\$pstr[\"imdb\"]= \$poster->getImdb();
\t\$pstr[\"comment\"]= \$poster->getComment();
\t\$pstr[\"duration\"] = \$poster->getDuration();
\t\$pstr[\"downloadas\"] = \$poster->getDownloadas();
\t\$pstr[\"classification\"]= \$poster->getClassification();
\t\$pstr[\"image\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$poster->getPoster()->getLink()), 'poster_thumb');
\tif(\$poster->getCover())
\t\t\$pstr[\"cover\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$poster->getCover()->getLink()), 'cover_thumb');


\t\$genre_poster_list =  array();
\tforeach (\$poster->getGenres() as \$key => \$genre_poster) {
\t\t\$genre_poster_obj = array();
\t\t\$genre_poster_obj[\"id\"]=\$genre_poster->getId();
\t\t\$genre_poster_obj[\"title\"]=\$genre_poster->getTitle();
\t\t\$genre_poster_list[] = \$genre_poster_obj;
\t}
\t\$pstr[\"genres\"] = \$genre_poster_list;

\tif(\$poster->getTrailer()){
\t\t\$trailer_poster_obj[\"id\"]=\$poster->getTrailer()->getId();
\t\tif (\$poster->getTrailer()->getType()==\"file\") {
\t\t\t\$trailer_poster_obj[\"url\"]=\$app->getRequest()->getScheme().\"://\".\$app->getRequest()->getHttpHost().\"/\". \$poster->getTrailer()->getMedia()->getLink();
\t\t\t\$trailer_poster_obj[\"type\"]=\$poster->getTrailer()->getMedia()->getExtension();

\t\t}else{
\t\t\t\$trailer_poster_obj[\"type\"]=\$poster->getTrailer()->getType();
\t\t\t\$trailer_poster_obj[\"url\"]=\$poster->getTrailer()->getUrl();
\t\t}
\t\t\$pstr[\"trailer\"] = \$trailer_poster_obj;
\t}
\t\$source_poster_list =  array();
\tforeach (\$poster->getSources() as \$key => \$source_poster) {
\t\t\$source_poster_obj = array();
\t\t\$source_poster_obj[\"id\"]=\$source_poster->getId();
\t\tif (\$source_poster->getType()==\"file\") {
\t\t\t\$source_poster_obj[\"url\"]=\$app->getRequest()->getScheme().\"://\".\$app->getRequest()->getHttpHost().\"/\". \$source_poster->getMedia()->getLink();
\t\t\t\$source_poster_obj[\"type\"]=\$source_poster->getMedia()->getExtension();

\t\t}else{
\t\t\t\$source_poster_obj[\"type\"]=\$source_poster->getType();
\t\t\t\$source_poster_obj[\"url\"]=\$source_poster->getUrl();
\t\t}
\t\t\$source_poster_list[] = \$source_poster_obj;
\t}
\t\$pstr[\"sources\"] = \$source_poster_list;

\t\$posters[]=\$pstr;

}


echo json_encode(\$posters, JSON_UNESCAPED_UNICODE);
?>";
    }

    public function getTemplateName()
    {
        return "@App/Serie/api_all.html.php";
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
        return new Source("", "@App/Serie/api_all.html.php", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Serie/api_all.html.php");
    }
}