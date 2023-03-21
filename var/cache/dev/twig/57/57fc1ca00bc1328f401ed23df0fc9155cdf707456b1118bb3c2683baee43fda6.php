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

/* @App/Home/api_all.html.php */
class __TwigTemplate_181f5bdfd0b8a05f2c4749c1bee246680e58ba0b8055cb5ce3c6a5d86f89d489 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/Home/api_all.html.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/Home/api_all.html.php"));

        // line 1
        echo "<?php 
\$obj;
\$channels_list =  array();
\$slides_list =  array();
\$genres_list =  array();
\$genres_list =  array();
foreach (\$channels as \$key => \$channel) {
\t\$ch = null;
\t\$ch[\"id\"]=\$channel->getId();
\t\$ch[\"title\"]=\$channel->getTitle();
\t\$ch[\"label\"]=\$channel->getLabel();
\t\$ch[\"sublabel\"]=\$channel->getSublabel();
\t\$ch[\"description\"]=\$channel->getDescription();
\t\$ch[\"website\"]=\$channel->getWebsite();
\t\$ch[\"classification\"]=\$channel->getClassification();
\t\$ch[\"views\"]=\$channel->getViews();
\t\$ch[\"shares\"]=\$channel->getShares();
\t\$ch[\"rating\"]=\$channel->getRating();
\t\$ch[\"playas\"]=\$channel->getPlayas();
\t\$ch[\"comment\"]=\$channel->getComment();
\t\$ch[\"image\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$channel->getMedia()->getLink()), 'channel_thumb');
\t\$source_channel_list = array();
\tforeach (\$channel->getSources() as \$key => \$source_channel) {
\t\t\$source_channel_obj = array();
\t\t\$source_channel_obj[\"id\"]=\$source_channel->getId();
\t\t\$source_channel_obj[\"title\"]=\$source_channel->getTitle();
\t\t\$source_channel_obj[\"quality\"]=\$source_channel->getQuality();
\t\t\$source_channel_obj[\"size\"]=\$source_channel->getSize();
\t\t\$source_channel_obj[\"kind\"]=\$source_channel->getKind();
\t\t\$source_channel_obj[\"premium\"]=\$source_channel->getPremium();
\t\t\$source_channel_obj[\"external\"]=\$source_channel->getExternal();
\t\t
\t\t\$source_channel_obj[\"type\"]=\$source_channel->getType();
\t\t\$source_channel_obj[\"url\"]=\$source_channel->getUrl();
\t\t
\t\t\$source_channel_list[] = \$source_channel_obj;
\t}
\t\$ch[\"sources\"] = \$source_channel_list;

\t\$category_channel_list = array();
\tforeach (\$channel->getCategories() as \$key => \$category_channel) {
\t\t\$category_channel_obj = array();
\t\t\$category_channel_obj[\"id\"]=\$category_channel->getId();
\t\t\$category_channel_obj[\"title\"]=\$category_channel->getTitle();\t\t
\t\t\$category_channel_list[] = \$category_channel_obj;
\t}
\t\$ch[\"categories\"] = \$category_channel_list;

\t\$country_channel_list = array();
\tforeach (\$channel->getCountries() as \$key => \$country_channel) {
\t\t\$country_channel_obj = array();
\t\t\$country_channel_obj[\"id\"]=\$country_channel->getId();
\t\t\$country_channel_obj[\"title\"]=\$country_channel->getTitle();\t\t
\t\t\$country_channel_obj[\"image\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$country_channel->getMedia()->getLink()), 'country_thumb');

\t\t\$country_channel_list[] = \$country_channel_obj;
\t}
\t\$ch[\"countries\"] = \$country_channel_list;

\t\$channels_list[]=\$ch;
}
foreach (\$slides as \$key => \$slide) {
\t\$slide_obj = null;
\t\$slide_obj[\"id\"]=\$slide->getId();
\t\$slide_obj[\"title\"]=\$slide->getClear();
\t\$slide_obj[\"type\"]=\$slide->getType();
\t\$slide_obj[\"image\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$slide->getMedia()->getLink()), 'slide_thumb');
\tif (\$slide->getType() == \"1\" && \$slide->getUrl() != null) {
\t\t\$slide_obj[\"url\"]= \$slide->getUrl();
\t}
\tif (\$slide->getType() == \"2\" && \$slide->getCategory() != null) {
\t\t\$category_obj = null;
\t\t\$category_obj[\"id\"]=\$slide->getCategory()->getId();
\t\t\$category_obj[\"title\"]=\$slide->getCategory()->getTitle();\t
\t\t\$slide_obj[\"category\"]= \$category_obj;
\t}
\tif (\$slide->getType() == \"5\" && \$slide->getGenre() != null) {
\t\t\$genre_obj = null;
\t\t\$genre_obj[\"id\"]=\$slide->getGenre()->getId();
\t\t\$genre_obj[\"title\"]=\$slide->getGenre()->getTitle();
\t\t\$slide_obj[\"genre\"]= \$genre_obj;
\t}
\tif (\$slide->getType() == \"3\" && \$slide->getChannel() != null) {
\t\t\$ch = null;
\t\t\$ch[\"id\"]=\$slide->getChannel()->getId();
\t\t\$ch[\"title\"]=\$slide->getChannel()->getTitle();
\t\t\$ch[\"label\"]=\$slide->getChannel()->getLabel();
\t\t\$ch[\"sublabel\"]=\$slide->getChannel()->getSublabel();
\t\t\$ch[\"description\"]=\$slide->getChannel()->getDescription();
\t\t\$ch[\"website\"]=\$slide->getChannel()->getWebsite();
\t\t\$ch[\"classification\"]=\$slide->getChannel()->getClassification();
\t\t\$ch[\"views\"]=\$slide->getChannel()->getViews();
\t\t\$ch[\"playas\"]=\$slide->getChannel()->getPlayas();

\t\t\$ch[\"shares\"]=\$slide->getChannel()->getShares();
\t\t\$ch[\"rating\"]=\$slide->getChannel()->getRating();
\t\t\$ch[\"comment\"]=\$slide->getChannel()->getComment();
\t\t\$ch[\"image\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$slide->getChannel()->getMedia()->getLink()), 'channel_thumb');
\t\t\$source_channel_list = array();
\t\tforeach (\$slide->getChannel()->getSources() as \$key => \$source_channel) {
\t\t\t\$source_channel_obj = array();
\t\t\t\$source_channel_obj[\"id\"]=\$source_channel->getId();
\t\t\t\$source_channel_obj[\"title\"]=\$source_channel->getTitle();
\t\t\t\$source_channel_obj[\"quality\"]=\$source_channel->getQuality();
\t\t\t\$source_channel_obj[\"size\"]=\$source_channel->getSize();
\t\t\t\$source_channel_obj[\"kind\"]=\$source_channel->getKind();
\t\t\t\$source_channel_obj[\"premium\"]=\$source_channel->getPremium();
\t\t\t\$source_channel_obj[\"external\"]=\$source_channel->getExternal();
\t\t\t
\t\t\t\$source_channel_obj[\"type\"]=\$source_channel->getType();
\t\t\t\$source_channel_obj[\"url\"]=\$source_channel->getUrl();
\t\t\t
\t\t\t\$source_channel_list[] = \$source_channel_obj;
\t\t}
\t\t\$ch[\"sources\"] = \$source_channel_list;

\t\t\$category_channel_list = array();
\t\tforeach (\$slide->getChannel()->getCategories() as \$key => \$category_channel) {
\t\t\t\$category_channel_obj = array();
\t\t\t\$category_channel_obj[\"id\"]=\$category_channel->getId();
\t\t\t\$category_channel_obj[\"title\"]=\$category_channel->getTitle();\t\t
\t\t\t\$category_channel_list[] = \$category_channel_obj;
\t\t}
\t\t\$ch[\"categories\"] = \$category_channel_list;

\t\t\$country_channel_list = array();
\t\tforeach (\$channel->getCountries() as \$key => \$country_channel) {
\t\t\t\$country_channel_obj = array();
\t\t\t\$country_channel_obj[\"id\"]=\$country_channel->getId();
\t\t\t\$country_channel_obj[\"title\"]=\$country_channel->getTitle();\t\t
\t\t\t\$country_channel_obj[\"image\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$country_channel->getMedia()->getLink()), 'country_thumb');

\t\t\t\$country_channel_list[] = \$country_channel_obj;
\t\t}
\t\t\$ch[\"countries\"] = \$country_channel_list;
\t\t\$slide_obj[\"channel\"]= \$ch;

\t}
\tif (\$slide->getType() == \"4\" && \$slide->getPoster() != null) {
\t\t\$pstr = null;
\t\t\$pstr[\"id\"]= \$slide->getPoster()->getId();
\t\t\$pstr[\"title\"]= \$slide->getPoster()->getTitle();
\t\t\$pstr[\"label\"]= \$slide->getPoster()->getLabel();
\t\t\$pstr[\"sublabel\"]= \$slide->getPoster()->getSublabel();
\t\t\$pstr[\"type\"]= \$slide->getPoster()->getType();
\t\t\$pstr[\"description\"]= \$slide->getPoster()->getDescription();
\t\t\$pstr[\"year\"]= \$slide->getPoster()->getYear();
\t\t\$pstr[\"imdb\"]= \$slide->getPoster()->getImdb();

\t\t\$pstr[\"rating\"]= \$slide->getPoster()->getRating();
\t\t\$pstr[\"duration\"] = \$slide->getPoster()->getDuration();
\t\t\$pstr[\"downloadas\"] = \$slide->getPoster()->getDownloadas();
\t\t\$pstr[\"comment\"] = \$slide->getPoster()->getComment();
\t\t\$pstr[\"playas\"] = \$slide->getPoster()->getPlayas();\t
\t\t\$pstr[\"classification\"]= \$slide->getPoster()->getClassification();
\t\t\$pstr[\"image\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$slide->getPoster()->getPoster()->getLink()), 'poster_thumb');
\t\tif(\$slide->getPoster()->getCover())
\t\t\t\$pstr[\"cover\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$slide->getPoster()->getCover()->getLink()), 'cover_thumb');
\t
\t\t\$genre_poster_list =  array();
\t\tforeach (\$slide->getPoster()->getGenres() as \$key => \$genre_poster) {
\t\t\t\$genre_poster_obj = array();
\t\t\t\$genre_poster_obj[\"id\"]=\$genre_poster->getId();
\t\t\t\$genre_poster_obj[\"title\"]=\$genre_poster->getTitle();
\t\t\t\$genre_poster_list[] = \$genre_poster_obj;
\t\t}
\t\t\$pstr[\"genres\"] = \$genre_poster_list;

\t\tif(\$slide->getPoster()->getTrailer()){
\t\t\t\$trailer_poster_obj[\"id\"]=\$slide->getPoster()->getTrailer()->getId();
\t\t\tif (\$slide->getPoster()->getTrailer()->getType()==\"file\") {
\t\t\t\t\$trailer_poster_obj[\"url\"]=\$app->getRequest()->getScheme().\"://\".\$app->getRequest()->getHttpHost().\"/\". \$slide->getPoster()->getTrailer()->getMedia()->getLink();
\t\t\t\t\$trailer_poster_obj[\"type\"]=\$slide->getPoster()->getTrailer()->getMedia()->getExtension();

\t\t\t}else{
\t\t\t\t\$trailer_poster_obj[\"type\"]=\$slide->getPoster()->getTrailer()->getType();
\t\t\t\t\$trailer_poster_obj[\"url\"]=\$slide->getPoster()->getTrailer()->getUrl();
\t\t\t}
\t\t\t\$pstr[\"trailer\"] = \$trailer_poster_obj;
\t\t}

\t\t\$source_poster_list =  array();
\t\tforeach (\$slide->getPoster()->getSources() as \$key => \$source_poster) {
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
\t\t\$slide_obj[\"poster\"]= \$pstr;
\t}
\t\$slides_list[]=\$slide_obj;
}

\$genre_obj[\"id\"]=-1;
\$genre_obj[\"title\"]=\"Mais Avaliados \";
\$posters = array();

foreach (\$bestrated as \$key => \$poster) {
\t\t\$pstr = null;
\t\t\$pstr[\"id\"]= \$poster->getId();
\t\t\$pstr[\"title\"]= \$poster->getTitle();
\t\t\$pstr[\"label\"]= \$poster->getLabel();
\t\t\$pstr[\"sublabel\"]= \$poster->getSublabel();
\t\t\$pstr[\"type\"]= \$poster->getType();
\t\t\$pstr[\"description\"]= \$poster->getDescription();
\t\t\$pstr[\"year\"]= \$poster->getYear();
\t\t\$pstr[\"imdb\"]= \$poster->getImdb();
\t\t\$pstr[\"rating\"]= \$poster->getRating();
\t\t\$pstr[\"comment\"]= \$poster->getComment();
\t\t\$pstr[\"duration\"] = \$poster->getDuration();
\t\t\$pstr[\"downloadas\"] = \$poster->getDownloadas();
\t\t\$pstr[\"playas\"] = \$poster->getPlayas();\t
\t\t\$pstr[\"classification\"]= \$poster->getClassification();
\t\t\$pstr[\"image\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$poster->getPoster()->getLink()), 'poster_thumb');
\t\tif(\$poster->getCover())
\t\t\t\$pstr[\"cover\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$poster->getCover()->getLink()), 'cover_thumb');
\t
\t\t\$genre_poster_list =  array();
\t\tforeach (\$poster->getGenres() as \$key => \$genre_poster) {
\t\t\t\$genre_poster_obj = array();
\t\t\t\$genre_poster_obj[\"id\"]=\$genre_poster->getId();
\t\t\t\$genre_poster_obj[\"title\"]=\$genre_poster->getTitle();
\t\t\t\$genre_poster_list[] = \$genre_poster_obj;
\t\t}
\t\t\$pstr[\"genres\"] = \$genre_poster_list;

\t\tif(\$poster->getTrailer()){
\t\t\t\$trailer_poster_obj[\"id\"]=\$poster->getTrailer()->getId();
\t\t\tif (\$poster->getTrailer()->getType()==\"file\") {
\t\t\t\t\$trailer_poster_obj[\"url\"]=\$app->getRequest()->getScheme().\"://\".\$app->getRequest()->getHttpHost().\"/\". \$poster->getTrailer()->getMedia()->getLink();
\t\t\t\t\$trailer_poster_obj[\"type\"]=\$poster->getTrailer()->getMedia()->getExtension();

\t\t\t}else{
\t\t\t\t\$trailer_poster_obj[\"type\"]=\$poster->getTrailer()->getType();
\t\t\t\t\$trailer_poster_obj[\"url\"]=\$poster->getTrailer()->getUrl();
\t\t\t}
\t\t\t\$pstr[\"trailer\"] = \$trailer_poster_obj;
\t\t}

\t\t\$source_poster_list =  array();
\t\tforeach (\$poster->getSources() as \$key => \$source_poster) {
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

\t\t\$posters[]=\$pstr;
\t

}
\$genre_obj[\"posters\"] = \$posters;
\$genres_list[]=\$genre_obj;
\$genre_obj = null;
\$genre_obj[\"id\"]=0;
\$genre_obj[\"title\"]=\"Popular\";
\$posters = array();
foreach (\$popular as \$key => \$poster) {
\t\t\$pstr = null;
\t\t\$pstr[\"id\"]= \$poster->getId();
\t\t\$pstr[\"title\"]= \$poster->getTitle();
\t\t\$pstr[\"label\"]= \$poster->getLabel();
\t\t\$pstr[\"sublabel\"]= \$poster->getSublabel();
\t\t\$pstr[\"type\"]= \$poster->getType();
\t\t\$pstr[\"imdb\"]= \$poster->getImdb();
\t\t\$pstr[\"description\"]= \$poster->getDescription();
\t\t\$pstr[\"year\"]= \$poster->getYear();
\t\t\$pstr[\"comment\"]= \$poster->getComment();
\t\t\$pstr[\"rating\"]= \$poster->getRating();
\t\t\$pstr[\"duration\"] = \$poster->getDuration();
\t\t\$pstr[\"downloadas\"] = \$poster->getDownloadas();
\t\t\$pstr[\"playas\"] = \$poster->getPlayas();
\t\t\$pstr[\"classification\"]= \$poster->getClassification();
\t\t\$pstr[\"image\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$poster->getPoster()->getLink()), 'poster_thumb');
\t\tif(\$poster->getCover())
\t\t\t\$pstr[\"cover\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$poster->getCover()->getLink()), 'cover_thumb');
\t
\t\t\$genre_poster_list =  array();
\t\tforeach (\$poster->getGenres() as \$key => \$genre_poster) {
\t\t\t\$genre_poster_obj = array();
\t\t\t\$genre_poster_obj[\"id\"]=\$genre_poster->getId();
\t\t\t\$genre_poster_obj[\"title\"]=\$genre_poster->getTitle();
\t\t\t\$genre_poster_list[] = \$genre_poster_obj;
\t\t}
\t\t\$pstr[\"genres\"] = \$genre_poster_list;

\t\tif(\$poster->getTrailer()){
\t\t\t\$trailer_poster_obj[\"id\"]=\$poster->getTrailer()->getId();
\t\t\tif (\$poster->getTrailer()->getType()==\"file\") {
\t\t\t\t\$trailer_poster_obj[\"url\"]=\$app->getRequest()->getScheme().\"://\".\$app->getRequest()->getHttpHost().\"/\". \$poster->getTrailer()->getMedia()->getLink();
\t\t\t\t\$trailer_poster_obj[\"type\"]=\$poster->getTrailer()->getMedia()->getExtension();

\t\t\t}else{
\t\t\t\t\$trailer_poster_obj[\"type\"]=\$poster->getTrailer()->getType();
\t\t\t\t\$trailer_poster_obj[\"url\"]=\$poster->getTrailer()->getUrl();
\t\t\t}
\t\t\t\$pstr[\"trailer\"] = \$trailer_poster_obj;
\t\t}

\t\t\$source_poster_list =  array();
\t\tforeach (\$poster->getSources() as \$key => \$source_poster) {
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

\t\t\$posters[]=\$pstr;
\t

}
\$genre_obj[\"posters\"] = \$posters;
\$genres_list[]=\$genre_obj;

foreach (\$genres as \$key => \$genre) {
\t\$genre_obj = null;
\t\$genre_obj[\"id\"]=\$genre->getId();
\t\$genre_obj[\"title\"]=\$genre->getTitle();
\t\$posters = array();
\t\$count = 0;
\tforeach (\$genre->getPosters() as \$key => \$poster) {
\t\tif (\$count<15 && \$poster->getEnabled()) {
\t\t\t\$count++;
\t\t\t\$pstr = null;
\t\t\t\$pstr[\"id\"]= \$poster->getId();
\t\t\t\$pstr[\"title\"]= \$poster->getTitle();
\t\t\t\$pstr[\"label\"]= \$poster->getLabel();
\t\t\t\$pstr[\"sublabel\"]= \$poster->getSublabel();
\t\t\t\$pstr[\"type\"]= \$poster->getType();
\t\t\t\$pstr[\"description\"]= \$poster->getDescription();
\t\t\t\$pstr[\"year\"]= \$poster->getYear();
\t\t\t\$pstr[\"rating\"]= \$poster->getRating();
\t\t\t\$pstr[\"comment\"]= \$poster->getComment();
\t\t\t\$pstr[\"imdb\"]= \$poster->getImdb();
\t\t\t\$pstr[\"duration\"] = \$poster->getDuration();
\t\t\t\$pstr[\"downloadas\"] = \$poster->getDownloadas();
\t\t\t\$pstr[\"playas\"] = \$poster->getPlayas();
\t\t\t\$pstr[\"classification\"]= \$poster->getClassification();
\t\t\t\$pstr[\"image\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$poster->getPoster()->getLink()), 'poster_thumb');
\t\t\tif(\$poster->getCover())
\t\t\t\t\$pstr[\"cover\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$poster->getCover()->getLink()), 'cover_thumb');
\t\t
\t\t\t\$genre_poster_list =  array();
\t\t\tforeach (\$poster->getGenres() as \$key => \$genre_poster) {
\t\t\t\t\$genre_poster_obj = array();
\t\t\t\t\$genre_poster_obj[\"id\"]=\$genre_poster->getId();
\t\t\t\t\$genre_poster_obj[\"title\"]=\$genre_poster->getTitle();
\t\t\t\t\$genre_poster_list[] = \$genre_poster_obj;
\t\t\t}
\t\t\t\$pstr[\"genres\"] = \$genre_poster_list;

\t\t\tif(\$poster->getTrailer()){
\t\t\t\t\$trailer_poster_obj[\"id\"]=\$poster->getTrailer()->getId();
\t\t\t\tif (\$poster->getTrailer()->getType()==\"file\") {
\t\t\t\t\t\$trailer_poster_obj[\"url\"]=\$app->getRequest()->getScheme().\"://\".\$app->getRequest()->getHttpHost().\"/\". \$poster->getTrailer()->getMedia()->getLink();
\t\t\t\t\t\$trailer_poster_obj[\"type\"]=\$poster->getTrailer()->getMedia()->getExtension();

\t\t\t\t}else{
\t\t\t\t\t\$trailer_poster_obj[\"type\"]=\$poster->getTrailer()->getType();
\t\t\t\t\t\$trailer_poster_obj[\"url\"]=\$poster->getTrailer()->getUrl();
\t\t\t\t}
\t\t\t\t\$pstr[\"trailer\"] = \$trailer_poster_obj;
\t\t\t}

\t\t\t\$source_poster_list =  array();
\t\t\tforeach (\$poster->getSources() as \$key => \$source_poster) {
\t\t\t\t\$source_poster_obj = array();
\t\t\t\t\$source_poster_obj[\"id\"]=\$source_poster->getId();
\t\t\t\t\$source_poster_obj[\"title\"]=\$source_poster->getTitle();
\t\t\t\t\$source_poster_obj[\"quality\"]=\$source_poster->getQuality();
\t\t\t\t\$source_poster_obj[\"size\"]=\$source_poster->getSize();
\t\t\t\t\$source_poster_obj[\"kind\"]=\$source_poster->getKind();
\t\t\t\t\$source_poster_obj[\"premium\"]=\$source_poster->getPremium();
\t\t\t\t\$source_poster_obj[\"external\"]=\$source_poster->getExternal();
\t\t\t\tif (\$source_poster->getType()==\"file\") {
\t\t\t\t\t\$source_poster_obj[\"url\"]=\$app->getRequest()->getScheme().\"://\".\$app->getRequest()->getHttpHost().\"/\". \$source_poster->getMedia()->getLink();
\t\t\t\t\t\$source_poster_obj[\"type\"]=\$source_poster->getMedia()->getExtension();

\t\t\t\t}else{
\t\t\t\t\t\$source_poster_obj[\"type\"]=\$source_poster->getType();
\t\t\t\t\t\$source_poster_obj[\"url\"]=\$source_poster->getUrl();
\t\t\t\t}
\t\t\t\t\$source_poster_list[] = \$source_poster_obj;
\t\t\t}
\t\t\t\$pstr[\"sources\"] = \$source_poster_list;

\t\t\t\$posters[]=\$pstr;
\t\t}

\t}
\t\$genre_obj[\"posters\"] = \$posters;
\t\$genres_list[]=\$genre_obj;

}
\$actors_list=array();
foreach (\$actors as \$key => \$actor) {
          \$actor_obj[\"id\"]=\$actor[\"id\"];
          \$actor_obj[\"type\"]=\$actor[\"type\"];
          \$actor_obj[\"name\"]=\$actor[\"name\"];
          \$actor_obj[\"bio\"]=\$actor[\"bio\"];
          \$actor_obj[\"height\"]=\$actor[\"height\"];
          \$actor_obj[\"born\"]=\$actor[\"born\"];
\t\$actor_obj[\"image\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\"uploads/\".\$actor[\"extension\"].\"/\".\$actor[\"image\"]), 'actor_thumb');
\t\$actors_list[]=\$actor_obj;
}

\$obj[\"channels\"]=\$channels_list;
\$obj[\"slides\"]=\$slides_list;
\$obj[\"genres\"]=\$genres_list;
\$obj[\"actors\"]=\$actors_list;
echo json_encode(\$obj, JSON_UNESCAPED_UNICODE);
?>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@App/Home/api_all.html.php";
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
\$slides_list =  array();
\$genres_list =  array();
\$genres_list =  array();
foreach (\$channels as \$key => \$channel) {
\t\$ch = null;
\t\$ch[\"id\"]=\$channel->getId();
\t\$ch[\"title\"]=\$channel->getTitle();
\t\$ch[\"label\"]=\$channel->getLabel();
\t\$ch[\"sublabel\"]=\$channel->getSublabel();
\t\$ch[\"description\"]=\$channel->getDescription();
\t\$ch[\"website\"]=\$channel->getWebsite();
\t\$ch[\"classification\"]=\$channel->getClassification();
\t\$ch[\"views\"]=\$channel->getViews();
\t\$ch[\"shares\"]=\$channel->getShares();
\t\$ch[\"rating\"]=\$channel->getRating();
\t\$ch[\"playas\"]=\$channel->getPlayas();
\t\$ch[\"comment\"]=\$channel->getComment();
\t\$ch[\"image\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$channel->getMedia()->getLink()), 'channel_thumb');
\t\$source_channel_list = array();
\tforeach (\$channel->getSources() as \$key => \$source_channel) {
\t\t\$source_channel_obj = array();
\t\t\$source_channel_obj[\"id\"]=\$source_channel->getId();
\t\t\$source_channel_obj[\"title\"]=\$source_channel->getTitle();
\t\t\$source_channel_obj[\"quality\"]=\$source_channel->getQuality();
\t\t\$source_channel_obj[\"size\"]=\$source_channel->getSize();
\t\t\$source_channel_obj[\"kind\"]=\$source_channel->getKind();
\t\t\$source_channel_obj[\"premium\"]=\$source_channel->getPremium();
\t\t\$source_channel_obj[\"external\"]=\$source_channel->getExternal();
\t\t
\t\t\$source_channel_obj[\"type\"]=\$source_channel->getType();
\t\t\$source_channel_obj[\"url\"]=\$source_channel->getUrl();
\t\t
\t\t\$source_channel_list[] = \$source_channel_obj;
\t}
\t\$ch[\"sources\"] = \$source_channel_list;

\t\$category_channel_list = array();
\tforeach (\$channel->getCategories() as \$key => \$category_channel) {
\t\t\$category_channel_obj = array();
\t\t\$category_channel_obj[\"id\"]=\$category_channel->getId();
\t\t\$category_channel_obj[\"title\"]=\$category_channel->getTitle();\t\t
\t\t\$category_channel_list[] = \$category_channel_obj;
\t}
\t\$ch[\"categories\"] = \$category_channel_list;

\t\$country_channel_list = array();
\tforeach (\$channel->getCountries() as \$key => \$country_channel) {
\t\t\$country_channel_obj = array();
\t\t\$country_channel_obj[\"id\"]=\$country_channel->getId();
\t\t\$country_channel_obj[\"title\"]=\$country_channel->getTitle();\t\t
\t\t\$country_channel_obj[\"image\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$country_channel->getMedia()->getLink()), 'country_thumb');

\t\t\$country_channel_list[] = \$country_channel_obj;
\t}
\t\$ch[\"countries\"] = \$country_channel_list;

\t\$channels_list[]=\$ch;
}
foreach (\$slides as \$key => \$slide) {
\t\$slide_obj = null;
\t\$slide_obj[\"id\"]=\$slide->getId();
\t\$slide_obj[\"title\"]=\$slide->getClear();
\t\$slide_obj[\"type\"]=\$slide->getType();
\t\$slide_obj[\"image\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$slide->getMedia()->getLink()), 'slide_thumb');
\tif (\$slide->getType() == \"1\" && \$slide->getUrl() != null) {
\t\t\$slide_obj[\"url\"]= \$slide->getUrl();
\t}
\tif (\$slide->getType() == \"2\" && \$slide->getCategory() != null) {
\t\t\$category_obj = null;
\t\t\$category_obj[\"id\"]=\$slide->getCategory()->getId();
\t\t\$category_obj[\"title\"]=\$slide->getCategory()->getTitle();\t
\t\t\$slide_obj[\"category\"]= \$category_obj;
\t}
\tif (\$slide->getType() == \"5\" && \$slide->getGenre() != null) {
\t\t\$genre_obj = null;
\t\t\$genre_obj[\"id\"]=\$slide->getGenre()->getId();
\t\t\$genre_obj[\"title\"]=\$slide->getGenre()->getTitle();
\t\t\$slide_obj[\"genre\"]= \$genre_obj;
\t}
\tif (\$slide->getType() == \"3\" && \$slide->getChannel() != null) {
\t\t\$ch = null;
\t\t\$ch[\"id\"]=\$slide->getChannel()->getId();
\t\t\$ch[\"title\"]=\$slide->getChannel()->getTitle();
\t\t\$ch[\"label\"]=\$slide->getChannel()->getLabel();
\t\t\$ch[\"sublabel\"]=\$slide->getChannel()->getSublabel();
\t\t\$ch[\"description\"]=\$slide->getChannel()->getDescription();
\t\t\$ch[\"website\"]=\$slide->getChannel()->getWebsite();
\t\t\$ch[\"classification\"]=\$slide->getChannel()->getClassification();
\t\t\$ch[\"views\"]=\$slide->getChannel()->getViews();
\t\t\$ch[\"playas\"]=\$slide->getChannel()->getPlayas();

\t\t\$ch[\"shares\"]=\$slide->getChannel()->getShares();
\t\t\$ch[\"rating\"]=\$slide->getChannel()->getRating();
\t\t\$ch[\"comment\"]=\$slide->getChannel()->getComment();
\t\t\$ch[\"image\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$slide->getChannel()->getMedia()->getLink()), 'channel_thumb');
\t\t\$source_channel_list = array();
\t\tforeach (\$slide->getChannel()->getSources() as \$key => \$source_channel) {
\t\t\t\$source_channel_obj = array();
\t\t\t\$source_channel_obj[\"id\"]=\$source_channel->getId();
\t\t\t\$source_channel_obj[\"title\"]=\$source_channel->getTitle();
\t\t\t\$source_channel_obj[\"quality\"]=\$source_channel->getQuality();
\t\t\t\$source_channel_obj[\"size\"]=\$source_channel->getSize();
\t\t\t\$source_channel_obj[\"kind\"]=\$source_channel->getKind();
\t\t\t\$source_channel_obj[\"premium\"]=\$source_channel->getPremium();
\t\t\t\$source_channel_obj[\"external\"]=\$source_channel->getExternal();
\t\t\t
\t\t\t\$source_channel_obj[\"type\"]=\$source_channel->getType();
\t\t\t\$source_channel_obj[\"url\"]=\$source_channel->getUrl();
\t\t\t
\t\t\t\$source_channel_list[] = \$source_channel_obj;
\t\t}
\t\t\$ch[\"sources\"] = \$source_channel_list;

\t\t\$category_channel_list = array();
\t\tforeach (\$slide->getChannel()->getCategories() as \$key => \$category_channel) {
\t\t\t\$category_channel_obj = array();
\t\t\t\$category_channel_obj[\"id\"]=\$category_channel->getId();
\t\t\t\$category_channel_obj[\"title\"]=\$category_channel->getTitle();\t\t
\t\t\t\$category_channel_list[] = \$category_channel_obj;
\t\t}
\t\t\$ch[\"categories\"] = \$category_channel_list;

\t\t\$country_channel_list = array();
\t\tforeach (\$channel->getCountries() as \$key => \$country_channel) {
\t\t\t\$country_channel_obj = array();
\t\t\t\$country_channel_obj[\"id\"]=\$country_channel->getId();
\t\t\t\$country_channel_obj[\"title\"]=\$country_channel->getTitle();\t\t
\t\t\t\$country_channel_obj[\"image\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$country_channel->getMedia()->getLink()), 'country_thumb');

\t\t\t\$country_channel_list[] = \$country_channel_obj;
\t\t}
\t\t\$ch[\"countries\"] = \$country_channel_list;
\t\t\$slide_obj[\"channel\"]= \$ch;

\t}
\tif (\$slide->getType() == \"4\" && \$slide->getPoster() != null) {
\t\t\$pstr = null;
\t\t\$pstr[\"id\"]= \$slide->getPoster()->getId();
\t\t\$pstr[\"title\"]= \$slide->getPoster()->getTitle();
\t\t\$pstr[\"label\"]= \$slide->getPoster()->getLabel();
\t\t\$pstr[\"sublabel\"]= \$slide->getPoster()->getSublabel();
\t\t\$pstr[\"type\"]= \$slide->getPoster()->getType();
\t\t\$pstr[\"description\"]= \$slide->getPoster()->getDescription();
\t\t\$pstr[\"year\"]= \$slide->getPoster()->getYear();
\t\t\$pstr[\"imdb\"]= \$slide->getPoster()->getImdb();

\t\t\$pstr[\"rating\"]= \$slide->getPoster()->getRating();
\t\t\$pstr[\"duration\"] = \$slide->getPoster()->getDuration();
\t\t\$pstr[\"downloadas\"] = \$slide->getPoster()->getDownloadas();
\t\t\$pstr[\"comment\"] = \$slide->getPoster()->getComment();
\t\t\$pstr[\"playas\"] = \$slide->getPoster()->getPlayas();\t
\t\t\$pstr[\"classification\"]= \$slide->getPoster()->getClassification();
\t\t\$pstr[\"image\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$slide->getPoster()->getPoster()->getLink()), 'poster_thumb');
\t\tif(\$slide->getPoster()->getCover())
\t\t\t\$pstr[\"cover\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$slide->getPoster()->getCover()->getLink()), 'cover_thumb');
\t
\t\t\$genre_poster_list =  array();
\t\tforeach (\$slide->getPoster()->getGenres() as \$key => \$genre_poster) {
\t\t\t\$genre_poster_obj = array();
\t\t\t\$genre_poster_obj[\"id\"]=\$genre_poster->getId();
\t\t\t\$genre_poster_obj[\"title\"]=\$genre_poster->getTitle();
\t\t\t\$genre_poster_list[] = \$genre_poster_obj;
\t\t}
\t\t\$pstr[\"genres\"] = \$genre_poster_list;

\t\tif(\$slide->getPoster()->getTrailer()){
\t\t\t\$trailer_poster_obj[\"id\"]=\$slide->getPoster()->getTrailer()->getId();
\t\t\tif (\$slide->getPoster()->getTrailer()->getType()==\"file\") {
\t\t\t\t\$trailer_poster_obj[\"url\"]=\$app->getRequest()->getScheme().\"://\".\$app->getRequest()->getHttpHost().\"/\". \$slide->getPoster()->getTrailer()->getMedia()->getLink();
\t\t\t\t\$trailer_poster_obj[\"type\"]=\$slide->getPoster()->getTrailer()->getMedia()->getExtension();

\t\t\t}else{
\t\t\t\t\$trailer_poster_obj[\"type\"]=\$slide->getPoster()->getTrailer()->getType();
\t\t\t\t\$trailer_poster_obj[\"url\"]=\$slide->getPoster()->getTrailer()->getUrl();
\t\t\t}
\t\t\t\$pstr[\"trailer\"] = \$trailer_poster_obj;
\t\t}

\t\t\$source_poster_list =  array();
\t\tforeach (\$slide->getPoster()->getSources() as \$key => \$source_poster) {
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
\t\t\$slide_obj[\"poster\"]= \$pstr;
\t}
\t\$slides_list[]=\$slide_obj;
}

\$genre_obj[\"id\"]=-1;
\$genre_obj[\"title\"]=\"Mais Avaliados \";
\$posters = array();

foreach (\$bestrated as \$key => \$poster) {
\t\t\$pstr = null;
\t\t\$pstr[\"id\"]= \$poster->getId();
\t\t\$pstr[\"title\"]= \$poster->getTitle();
\t\t\$pstr[\"label\"]= \$poster->getLabel();
\t\t\$pstr[\"sublabel\"]= \$poster->getSublabel();
\t\t\$pstr[\"type\"]= \$poster->getType();
\t\t\$pstr[\"description\"]= \$poster->getDescription();
\t\t\$pstr[\"year\"]= \$poster->getYear();
\t\t\$pstr[\"imdb\"]= \$poster->getImdb();
\t\t\$pstr[\"rating\"]= \$poster->getRating();
\t\t\$pstr[\"comment\"]= \$poster->getComment();
\t\t\$pstr[\"duration\"] = \$poster->getDuration();
\t\t\$pstr[\"downloadas\"] = \$poster->getDownloadas();
\t\t\$pstr[\"playas\"] = \$poster->getPlayas();\t
\t\t\$pstr[\"classification\"]= \$poster->getClassification();
\t\t\$pstr[\"image\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$poster->getPoster()->getLink()), 'poster_thumb');
\t\tif(\$poster->getCover())
\t\t\t\$pstr[\"cover\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$poster->getCover()->getLink()), 'cover_thumb');
\t
\t\t\$genre_poster_list =  array();
\t\tforeach (\$poster->getGenres() as \$key => \$genre_poster) {
\t\t\t\$genre_poster_obj = array();
\t\t\t\$genre_poster_obj[\"id\"]=\$genre_poster->getId();
\t\t\t\$genre_poster_obj[\"title\"]=\$genre_poster->getTitle();
\t\t\t\$genre_poster_list[] = \$genre_poster_obj;
\t\t}
\t\t\$pstr[\"genres\"] = \$genre_poster_list;

\t\tif(\$poster->getTrailer()){
\t\t\t\$trailer_poster_obj[\"id\"]=\$poster->getTrailer()->getId();
\t\t\tif (\$poster->getTrailer()->getType()==\"file\") {
\t\t\t\t\$trailer_poster_obj[\"url\"]=\$app->getRequest()->getScheme().\"://\".\$app->getRequest()->getHttpHost().\"/\". \$poster->getTrailer()->getMedia()->getLink();
\t\t\t\t\$trailer_poster_obj[\"type\"]=\$poster->getTrailer()->getMedia()->getExtension();

\t\t\t}else{
\t\t\t\t\$trailer_poster_obj[\"type\"]=\$poster->getTrailer()->getType();
\t\t\t\t\$trailer_poster_obj[\"url\"]=\$poster->getTrailer()->getUrl();
\t\t\t}
\t\t\t\$pstr[\"trailer\"] = \$trailer_poster_obj;
\t\t}

\t\t\$source_poster_list =  array();
\t\tforeach (\$poster->getSources() as \$key => \$source_poster) {
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

\t\t\$posters[]=\$pstr;
\t

}
\$genre_obj[\"posters\"] = \$posters;
\$genres_list[]=\$genre_obj;
\$genre_obj = null;
\$genre_obj[\"id\"]=0;
\$genre_obj[\"title\"]=\"Popular\";
\$posters = array();
foreach (\$popular as \$key => \$poster) {
\t\t\$pstr = null;
\t\t\$pstr[\"id\"]= \$poster->getId();
\t\t\$pstr[\"title\"]= \$poster->getTitle();
\t\t\$pstr[\"label\"]= \$poster->getLabel();
\t\t\$pstr[\"sublabel\"]= \$poster->getSublabel();
\t\t\$pstr[\"type\"]= \$poster->getType();
\t\t\$pstr[\"imdb\"]= \$poster->getImdb();
\t\t\$pstr[\"description\"]= \$poster->getDescription();
\t\t\$pstr[\"year\"]= \$poster->getYear();
\t\t\$pstr[\"comment\"]= \$poster->getComment();
\t\t\$pstr[\"rating\"]= \$poster->getRating();
\t\t\$pstr[\"duration\"] = \$poster->getDuration();
\t\t\$pstr[\"downloadas\"] = \$poster->getDownloadas();
\t\t\$pstr[\"playas\"] = \$poster->getPlayas();
\t\t\$pstr[\"classification\"]= \$poster->getClassification();
\t\t\$pstr[\"image\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$poster->getPoster()->getLink()), 'poster_thumb');
\t\tif(\$poster->getCover())
\t\t\t\$pstr[\"cover\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$poster->getCover()->getLink()), 'cover_thumb');
\t
\t\t\$genre_poster_list =  array();
\t\tforeach (\$poster->getGenres() as \$key => \$genre_poster) {
\t\t\t\$genre_poster_obj = array();
\t\t\t\$genre_poster_obj[\"id\"]=\$genre_poster->getId();
\t\t\t\$genre_poster_obj[\"title\"]=\$genre_poster->getTitle();
\t\t\t\$genre_poster_list[] = \$genre_poster_obj;
\t\t}
\t\t\$pstr[\"genres\"] = \$genre_poster_list;

\t\tif(\$poster->getTrailer()){
\t\t\t\$trailer_poster_obj[\"id\"]=\$poster->getTrailer()->getId();
\t\t\tif (\$poster->getTrailer()->getType()==\"file\") {
\t\t\t\t\$trailer_poster_obj[\"url\"]=\$app->getRequest()->getScheme().\"://\".\$app->getRequest()->getHttpHost().\"/\". \$poster->getTrailer()->getMedia()->getLink();
\t\t\t\t\$trailer_poster_obj[\"type\"]=\$poster->getTrailer()->getMedia()->getExtension();

\t\t\t}else{
\t\t\t\t\$trailer_poster_obj[\"type\"]=\$poster->getTrailer()->getType();
\t\t\t\t\$trailer_poster_obj[\"url\"]=\$poster->getTrailer()->getUrl();
\t\t\t}
\t\t\t\$pstr[\"trailer\"] = \$trailer_poster_obj;
\t\t}

\t\t\$source_poster_list =  array();
\t\tforeach (\$poster->getSources() as \$key => \$source_poster) {
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

\t\t\$posters[]=\$pstr;
\t

}
\$genre_obj[\"posters\"] = \$posters;
\$genres_list[]=\$genre_obj;

foreach (\$genres as \$key => \$genre) {
\t\$genre_obj = null;
\t\$genre_obj[\"id\"]=\$genre->getId();
\t\$genre_obj[\"title\"]=\$genre->getTitle();
\t\$posters = array();
\t\$count = 0;
\tforeach (\$genre->getPosters() as \$key => \$poster) {
\t\tif (\$count<15 && \$poster->getEnabled()) {
\t\t\t\$count++;
\t\t\t\$pstr = null;
\t\t\t\$pstr[\"id\"]= \$poster->getId();
\t\t\t\$pstr[\"title\"]= \$poster->getTitle();
\t\t\t\$pstr[\"label\"]= \$poster->getLabel();
\t\t\t\$pstr[\"sublabel\"]= \$poster->getSublabel();
\t\t\t\$pstr[\"type\"]= \$poster->getType();
\t\t\t\$pstr[\"description\"]= \$poster->getDescription();
\t\t\t\$pstr[\"year\"]= \$poster->getYear();
\t\t\t\$pstr[\"rating\"]= \$poster->getRating();
\t\t\t\$pstr[\"comment\"]= \$poster->getComment();
\t\t\t\$pstr[\"imdb\"]= \$poster->getImdb();
\t\t\t\$pstr[\"duration\"] = \$poster->getDuration();
\t\t\t\$pstr[\"downloadas\"] = \$poster->getDownloadas();
\t\t\t\$pstr[\"playas\"] = \$poster->getPlayas();
\t\t\t\$pstr[\"classification\"]= \$poster->getClassification();
\t\t\t\$pstr[\"image\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$poster->getPoster()->getLink()), 'poster_thumb');
\t\t\tif(\$poster->getCover())
\t\t\t\t\$pstr[\"cover\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$poster->getCover()->getLink()), 'cover_thumb');
\t\t
\t\t\t\$genre_poster_list =  array();
\t\t\tforeach (\$poster->getGenres() as \$key => \$genre_poster) {
\t\t\t\t\$genre_poster_obj = array();
\t\t\t\t\$genre_poster_obj[\"id\"]=\$genre_poster->getId();
\t\t\t\t\$genre_poster_obj[\"title\"]=\$genre_poster->getTitle();
\t\t\t\t\$genre_poster_list[] = \$genre_poster_obj;
\t\t\t}
\t\t\t\$pstr[\"genres\"] = \$genre_poster_list;

\t\t\tif(\$poster->getTrailer()){
\t\t\t\t\$trailer_poster_obj[\"id\"]=\$poster->getTrailer()->getId();
\t\t\t\tif (\$poster->getTrailer()->getType()==\"file\") {
\t\t\t\t\t\$trailer_poster_obj[\"url\"]=\$app->getRequest()->getScheme().\"://\".\$app->getRequest()->getHttpHost().\"/\". \$poster->getTrailer()->getMedia()->getLink();
\t\t\t\t\t\$trailer_poster_obj[\"type\"]=\$poster->getTrailer()->getMedia()->getExtension();

\t\t\t\t}else{
\t\t\t\t\t\$trailer_poster_obj[\"type\"]=\$poster->getTrailer()->getType();
\t\t\t\t\t\$trailer_poster_obj[\"url\"]=\$poster->getTrailer()->getUrl();
\t\t\t\t}
\t\t\t\t\$pstr[\"trailer\"] = \$trailer_poster_obj;
\t\t\t}

\t\t\t\$source_poster_list =  array();
\t\t\tforeach (\$poster->getSources() as \$key => \$source_poster) {
\t\t\t\t\$source_poster_obj = array();
\t\t\t\t\$source_poster_obj[\"id\"]=\$source_poster->getId();
\t\t\t\t\$source_poster_obj[\"title\"]=\$source_poster->getTitle();
\t\t\t\t\$source_poster_obj[\"quality\"]=\$source_poster->getQuality();
\t\t\t\t\$source_poster_obj[\"size\"]=\$source_poster->getSize();
\t\t\t\t\$source_poster_obj[\"kind\"]=\$source_poster->getKind();
\t\t\t\t\$source_poster_obj[\"premium\"]=\$source_poster->getPremium();
\t\t\t\t\$source_poster_obj[\"external\"]=\$source_poster->getExternal();
\t\t\t\tif (\$source_poster->getType()==\"file\") {
\t\t\t\t\t\$source_poster_obj[\"url\"]=\$app->getRequest()->getScheme().\"://\".\$app->getRequest()->getHttpHost().\"/\". \$source_poster->getMedia()->getLink();
\t\t\t\t\t\$source_poster_obj[\"type\"]=\$source_poster->getMedia()->getExtension();

\t\t\t\t}else{
\t\t\t\t\t\$source_poster_obj[\"type\"]=\$source_poster->getType();
\t\t\t\t\t\$source_poster_obj[\"url\"]=\$source_poster->getUrl();
\t\t\t\t}
\t\t\t\t\$source_poster_list[] = \$source_poster_obj;
\t\t\t}
\t\t\t\$pstr[\"sources\"] = \$source_poster_list;

\t\t\t\$posters[]=\$pstr;
\t\t}

\t}
\t\$genre_obj[\"posters\"] = \$posters;
\t\$genres_list[]=\$genre_obj;

}
\$actors_list=array();
foreach (\$actors as \$key => \$actor) {
          \$actor_obj[\"id\"]=\$actor[\"id\"];
          \$actor_obj[\"type\"]=\$actor[\"type\"];
          \$actor_obj[\"name\"]=\$actor[\"name\"];
          \$actor_obj[\"bio\"]=\$actor[\"bio\"];
          \$actor_obj[\"height\"]=\$actor[\"height\"];
          \$actor_obj[\"born\"]=\$actor[\"born\"];
\t\$actor_obj[\"image\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\"uploads/\".\$actor[\"extension\"].\"/\".\$actor[\"image\"]), 'actor_thumb');
\t\$actors_list[]=\$actor_obj;
}

\$obj[\"channels\"]=\$channels_list;
\$obj[\"slides\"]=\$slides_list;
\$obj[\"genres\"]=\$genres_list;
\$obj[\"actors\"]=\$actors_list;
echo json_encode(\$obj, JSON_UNESCAPED_UNICODE);
?>", "@App/Home/api_all.html.php", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Home/api_all.html.php");
    }
}
