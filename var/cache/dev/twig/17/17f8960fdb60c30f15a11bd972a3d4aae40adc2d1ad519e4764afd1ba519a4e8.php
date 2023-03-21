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

/* @App/Home/api_mylist.html.php */
class __TwigTemplate_a9941f8b5df9cfa96449843efce839c3bb7e50a1405dc6b7adc507c376ab4c27 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/Home/api_mylist.html.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/Home/api_mylist.html.php"));

        // line 1
        echo "<?php 
\$obj;
\$channels_list =  array();
\$posters_list =  array();
foreach (\$channels as \$key => \$channel) {
\t\$ch = null;
\t\$ch[\"id\"]=\$channel->getChannel()->getId();
\t\$ch[\"title\"]=\$channel->getChannel()->getTitle();
\t\$ch[\"label\"]=\$channel->getChannel()->getLabel();
\t\$ch[\"sublabel\"]=\$channel->getChannel()->getSublabel();
\t\$ch[\"description\"]=\$channel->getChannel()->getDescription();
\t\$ch[\"website\"]=\$channel->getChannel()->getWebsite();
\t\$ch[\"classification\"]=\$channel->getChannel()->getClassification();
\t\$ch[\"views\"]=\$channel->getChannel()->getViews();
\t\$ch[\"shares\"]=\$channel->getChannel()->getShares();
\t\$ch[\"playas\"]=\$channel->getChannel()->getPlayas();
\t\$ch[\"rating\"]=\$channel->getChannel()->getRating();
\t\$ch[\"comment\"]=\$channel->getChannel()->getComment();
\t\$ch[\"image\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$channel->getChannel()->getMedia()->getLink()), 'channel_thumb');
\t\$source_channel_list = array();
\tforeach (\$channel->getChannel()->getSources() as \$key => \$source_channel) {
\t\t\$source_channel_obj = array();
\t\t\$source_channel_obj[\"id\"]=\$source_channel->getId();
\t\t\$source_channel_obj[\"title\"]=\$source_channel->getTitle();
\t\t\$source_channel_obj[\"quality\"]=\$source_channel->getQuality();
\t\t\$source_channel_obj[\"size\"]=\$source_channel->getSize();
\t\t\$source_channel_obj[\"kind\"]=\$source_channel->getKind();
\t\t\$source_channel_obj[\"premium\"]=\$source_channel->getPremium();
\t\t\$source_channel_obj[\"external\"]=\$source_channel->getExternal();
\t\t\$source_channel_obj[\"type\"]=\$source_channel->getType();
\t\t\$source_channel_obj[\"url\"]=\$source_channel->getUrl();
\t\t
\t\t\$source_channel_list[] = \$source_channel_obj;
\t}
\t\$ch[\"sources\"] = \$source_channel_list;

\t\$category_channel_list = array();
\tforeach (\$channel->getChannel()->getCategories() as \$key => \$category_channel) {
\t\t\$category_channel_obj = array();
\t\t\$category_channel_obj[\"id\"]=\$category_channel->getId();
\t\t\$category_channel_obj[\"title\"]=\$category_channel->getTitle();\t\t
\t\t\$category_channel_list[] = \$category_channel_obj;
\t}
\t\$ch[\"categories\"] = \$category_channel_list;

\t\$country_channel_list = array();
\tforeach (\$channel->getChannel()->getCountries() as \$key => \$country_channel) {
\t\t\$country_channel_obj = array();
\t\t\$country_channel_obj[\"id\"]=\$country_channel->getId();
\t\t\$country_channel_obj[\"title\"]=\$country_channel->getTitle();\t\t
\t\t\$country_channel_obj[\"image\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$country_channel->getMedia()->getLink()), 'country_thumb');

\t\t\$country_channel_list[] = \$country_channel_obj;
\t}
\t\$ch[\"countries\"] = \$country_channel_list;

\t\$channels_list[]=\$ch;
}
foreach (\$posters as \$key => \$poster) {
\t\t\$pstr = null;
\t\t\$pstr[\"id\"]= \$poster->getPoster()->getId();
\t\t\$pstr[\"title\"]= \$poster->getPoster()->getTitle();
\t\t\$pstr[\"label\"]= \$poster->getPoster()->getLabel();
\t\t\$pstr[\"sublabel\"]= \$poster->getPoster()->getSublabel();
\t\t\$pstr[\"type\"]= \$poster->getPoster()->getType();
\t\t\$pstr[\"description\"]= \$poster->getPoster()->getDescription();
\t\t\$pstr[\"year\"]= \$poster->getPoster()->getYear();
\t\t\$pstr[\"rating\"]= \$poster->getPoster()->getRating();
\t\t\$pstr[\"imdb\"]= \$poster->getPoster()->getImdb();
\t\t\$pstr[\"duration\"] = \$poster->getPoster()->getDuration();
\t\t\$pstr[\"comment\"]= \$poster->getPoster()->getComment();
\t\t\$pstr[\"downloadas\"] = \$poster->getPoster()->getDownloadas();
\t\t\$pstr[\"playas\"] = \$poster->getPoster()->getPlayas();
\t\t\$pstr[\"classification\"]= \$poster->getPoster()->getClassification();
\t\t\$pstr[\"image\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$poster->getPoster()->getPoster()->getLink()), 'poster_thumb');
\t\tif(\$poster->getPoster()->getCover())
\t\t\t\$pstr[\"cover\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$poster->getPoster()->getCover()->getLink()), 'cover_thumb');
\t
\t\t\$genre_poster_list =  array();
\t\tforeach (\$poster->getPoster()->getGenres() as \$key => \$genre_poster) {
\t\t\t\$genre_poster_obj = array();
\t\t\t\$genre_poster_obj[\"id\"]=\$genre_poster->getId();
\t\t\t\$genre_poster_obj[\"title\"]=\$genre_poster->getTitle();
\t\t\t\$genre_poster_list[] = \$genre_poster_obj;
\t\t}
\t\t\$pstr[\"genres\"] = \$genre_poster_list;

\t\tif(\$poster->getPoster()->getTrailer()){
\t\t\t\$trailer_poster_obj[\"id\"]=\$poster->getPoster()->getTrailer()->getId();
\t\t\tif (\$poster->getPoster()->getTrailer()->getType()==\"file\") {
\t\t\t\t\$trailer_poster_obj[\"url\"]=\$app->getRequest()->getScheme().\"://\".\$app->getRequest()->getHttpHost().\"/\". \$poster->getPoster()->getTrailer()->getMedia()->getLink();
\t\t\t\t\$trailer_poster_obj[\"type\"]=\$poster->getPoster()->getTrailer()->getMedia()->getExtension();
\t\t\t}else{
\t\t\t\t\$trailer_poster_obj[\"type\"]=\$poster->getPoster()->getTrailer()->getType();
\t\t\t\t\$trailer_poster_obj[\"url\"]=\$poster->getPoster()->getTrailer()->getUrl();
\t\t\t}
\t\t\t\$pstr[\"trailer\"] = \$trailer_poster_obj;
\t\t}
\t\t\$source_poster_list =  array();
\t\tforeach (\$poster->getPoster()->getSources() as \$key => \$source_poster) {
\t\t\t\$source_poster_obj = array();
\t\t\t\$source_poster_obj[\"id\"]=\$source_poster->getId();
\t\t\t\$source_poster_obj[\"title\"]=\$source_poster->getTitle();
\t\t\t\$source_poster_obj[\"quality\"]=\$source_poster->getQuality();
\t\t\t\$source_poster_obj[\"size\"]=\$source_poster->getSize();
\t\t\t\$source_poster_obj[\"kind\"]=\$source_poster->getKind();
\t\t\t\$source_poster_obj[\"premium\"]=\$source_poster->getPremium();
\t\t\t\$source_poster_obj[\"external\"]=\$source_poster->getExternal();
\t\t\tif (\$source_poster->getType()==\"file\") {
\t\t\t\t\$source_poster_obj[\"url\"]=\$app->getRequest()->getScheme().\"://\".\$app->getRequest()->getHttpHost().\"/\". \$source_poster->getMedia()->getLink();
\t\t\t\t\$source_poster_obj[\"type\"]=\$source_poster->getMedia()->getExtension();

\t\t\t}else{
\t\t\t\t\$source_poster_obj[\"type\"]=\$source_poster->getType();
\t\t\t\t\$source_poster_obj[\"url\"]=\$source_poster->getUrl();
\t\t\t}
\t\t\t\$source_poster_list[] = \$source_poster_obj;
\t\t}
\t\t\$pstr[\"sources\"] = \$source_poster_list;
\t\t\$posters_list[]=\$pstr;

}
\$obj[\"channels\"]=\$channels_list;
\$obj[\"posters\"]=\$posters_list;
echo json_encode(\$obj, JSON_UNESCAPED_UNICODE);
?>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@App/Home/api_mylist.html.php";
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
\$obj;
\$channels_list =  array();
\$posters_list =  array();
foreach (\$channels as \$key => \$channel) {
\t\$ch = null;
\t\$ch[\"id\"]=\$channel->getChannel()->getId();
\t\$ch[\"title\"]=\$channel->getChannel()->getTitle();
\t\$ch[\"label\"]=\$channel->getChannel()->getLabel();
\t\$ch[\"sublabel\"]=\$channel->getChannel()->getSublabel();
\t\$ch[\"description\"]=\$channel->getChannel()->getDescription();
\t\$ch[\"website\"]=\$channel->getChannel()->getWebsite();
\t\$ch[\"classification\"]=\$channel->getChannel()->getClassification();
\t\$ch[\"views\"]=\$channel->getChannel()->getViews();
\t\$ch[\"shares\"]=\$channel->getChannel()->getShares();
\t\$ch[\"playas\"]=\$channel->getChannel()->getPlayas();
\t\$ch[\"rating\"]=\$channel->getChannel()->getRating();
\t\$ch[\"comment\"]=\$channel->getChannel()->getComment();
\t\$ch[\"image\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$channel->getChannel()->getMedia()->getLink()), 'channel_thumb');
\t\$source_channel_list = array();
\tforeach (\$channel->getChannel()->getSources() as \$key => \$source_channel) {
\t\t\$source_channel_obj = array();
\t\t\$source_channel_obj[\"id\"]=\$source_channel->getId();
\t\t\$source_channel_obj[\"title\"]=\$source_channel->getTitle();
\t\t\$source_channel_obj[\"quality\"]=\$source_channel->getQuality();
\t\t\$source_channel_obj[\"size\"]=\$source_channel->getSize();
\t\t\$source_channel_obj[\"kind\"]=\$source_channel->getKind();
\t\t\$source_channel_obj[\"premium\"]=\$source_channel->getPremium();
\t\t\$source_channel_obj[\"external\"]=\$source_channel->getExternal();
\t\t\$source_channel_obj[\"type\"]=\$source_channel->getType();
\t\t\$source_channel_obj[\"url\"]=\$source_channel->getUrl();
\t\t
\t\t\$source_channel_list[] = \$source_channel_obj;
\t}
\t\$ch[\"sources\"] = \$source_channel_list;

\t\$category_channel_list = array();
\tforeach (\$channel->getChannel()->getCategories() as \$key => \$category_channel) {
\t\t\$category_channel_obj = array();
\t\t\$category_channel_obj[\"id\"]=\$category_channel->getId();
\t\t\$category_channel_obj[\"title\"]=\$category_channel->getTitle();\t\t
\t\t\$category_channel_list[] = \$category_channel_obj;
\t}
\t\$ch[\"categories\"] = \$category_channel_list;

\t\$country_channel_list = array();
\tforeach (\$channel->getChannel()->getCountries() as \$key => \$country_channel) {
\t\t\$country_channel_obj = array();
\t\t\$country_channel_obj[\"id\"]=\$country_channel->getId();
\t\t\$country_channel_obj[\"title\"]=\$country_channel->getTitle();\t\t
\t\t\$country_channel_obj[\"image\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$country_channel->getMedia()->getLink()), 'country_thumb');

\t\t\$country_channel_list[] = \$country_channel_obj;
\t}
\t\$ch[\"countries\"] = \$country_channel_list;

\t\$channels_list[]=\$ch;
}
foreach (\$posters as \$key => \$poster) {
\t\t\$pstr = null;
\t\t\$pstr[\"id\"]= \$poster->getPoster()->getId();
\t\t\$pstr[\"title\"]= \$poster->getPoster()->getTitle();
\t\t\$pstr[\"label\"]= \$poster->getPoster()->getLabel();
\t\t\$pstr[\"sublabel\"]= \$poster->getPoster()->getSublabel();
\t\t\$pstr[\"type\"]= \$poster->getPoster()->getType();
\t\t\$pstr[\"description\"]= \$poster->getPoster()->getDescription();
\t\t\$pstr[\"year\"]= \$poster->getPoster()->getYear();
\t\t\$pstr[\"rating\"]= \$poster->getPoster()->getRating();
\t\t\$pstr[\"imdb\"]= \$poster->getPoster()->getImdb();
\t\t\$pstr[\"duration\"] = \$poster->getPoster()->getDuration();
\t\t\$pstr[\"comment\"]= \$poster->getPoster()->getComment();
\t\t\$pstr[\"downloadas\"] = \$poster->getPoster()->getDownloadas();
\t\t\$pstr[\"playas\"] = \$poster->getPoster()->getPlayas();
\t\t\$pstr[\"classification\"]= \$poster->getPoster()->getClassification();
\t\t\$pstr[\"image\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$poster->getPoster()->getPoster()->getLink()), 'poster_thumb');
\t\tif(\$poster->getPoster()->getCover())
\t\t\t\$pstr[\"cover\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$poster->getPoster()->getCover()->getLink()), 'cover_thumb');
\t
\t\t\$genre_poster_list =  array();
\t\tforeach (\$poster->getPoster()->getGenres() as \$key => \$genre_poster) {
\t\t\t\$genre_poster_obj = array();
\t\t\t\$genre_poster_obj[\"id\"]=\$genre_poster->getId();
\t\t\t\$genre_poster_obj[\"title\"]=\$genre_poster->getTitle();
\t\t\t\$genre_poster_list[] = \$genre_poster_obj;
\t\t}
\t\t\$pstr[\"genres\"] = \$genre_poster_list;

\t\tif(\$poster->getPoster()->getTrailer()){
\t\t\t\$trailer_poster_obj[\"id\"]=\$poster->getPoster()->getTrailer()->getId();
\t\t\tif (\$poster->getPoster()->getTrailer()->getType()==\"file\") {
\t\t\t\t\$trailer_poster_obj[\"url\"]=\$app->getRequest()->getScheme().\"://\".\$app->getRequest()->getHttpHost().\"/\". \$poster->getPoster()->getTrailer()->getMedia()->getLink();
\t\t\t\t\$trailer_poster_obj[\"type\"]=\$poster->getPoster()->getTrailer()->getMedia()->getExtension();
\t\t\t}else{
\t\t\t\t\$trailer_poster_obj[\"type\"]=\$poster->getPoster()->getTrailer()->getType();
\t\t\t\t\$trailer_poster_obj[\"url\"]=\$poster->getPoster()->getTrailer()->getUrl();
\t\t\t}
\t\t\t\$pstr[\"trailer\"] = \$trailer_poster_obj;
\t\t}
\t\t\$source_poster_list =  array();
\t\tforeach (\$poster->getPoster()->getSources() as \$key => \$source_poster) {
\t\t\t\$source_poster_obj = array();
\t\t\t\$source_poster_obj[\"id\"]=\$source_poster->getId();
\t\t\t\$source_poster_obj[\"title\"]=\$source_poster->getTitle();
\t\t\t\$source_poster_obj[\"quality\"]=\$source_poster->getQuality();
\t\t\t\$source_poster_obj[\"size\"]=\$source_poster->getSize();
\t\t\t\$source_poster_obj[\"kind\"]=\$source_poster->getKind();
\t\t\t\$source_poster_obj[\"premium\"]=\$source_poster->getPremium();
\t\t\t\$source_poster_obj[\"external\"]=\$source_poster->getExternal();
\t\t\tif (\$source_poster->getType()==\"file\") {
\t\t\t\t\$source_poster_obj[\"url\"]=\$app->getRequest()->getScheme().\"://\".\$app->getRequest()->getHttpHost().\"/\". \$source_poster->getMedia()->getLink();
\t\t\t\t\$source_poster_obj[\"type\"]=\$source_poster->getMedia()->getExtension();

\t\t\t}else{
\t\t\t\t\$source_poster_obj[\"type\"]=\$source_poster->getType();
\t\t\t\t\$source_poster_obj[\"url\"]=\$source_poster->getUrl();
\t\t\t}
\t\t\t\$source_poster_list[] = \$source_poster_obj;
\t\t}
\t\t\$pstr[\"sources\"] = \$source_poster_list;
\t\t\$posters_list[]=\$pstr;

}
\$obj[\"channels\"]=\$channels_list;
\$obj[\"posters\"]=\$posters_list;
echo json_encode(\$obj, JSON_UNESCAPED_UNICODE);
?>", "@App/Home/api_mylist.html.php", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Home/api_mylist.html.php");
    }
}
