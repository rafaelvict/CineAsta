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

/* @App/Season/api_all.html.php */
class __TwigTemplate_7145caeeb2d88c96c7f3ba801d64c93fe1392edb67a2b1fa17322bb9a0d50973 extends \Twig\Template
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

\$seasons_list =  array();

foreach (\$seasons as \$key => \$season) {
\t\$season_obj = null;
\t\$season_obj[\"id\"]=\$season->getId();
\t\$season_obj[\"title\"]=\$season->getTitle();
\t\$episodes_list =  array();
\tforeach (\$season->getEpisodes() as \$episode) {
\t\t\$episode_obj = null;
\t\tif (\$episode->getEnabled()) {
\t\t\t
\t\t\t\$episode_obj[\"id\"] = \$episode->getId();
\t\t\t\$episode_obj[\"title\"] = \$episode->getTitle();
\t\t\t\$episode_obj[\"description\"] = \$episode->getDescription();
\t\t\t\$episode_obj[\"duration\"] = \$episode->getDuration();
\t\t\t\$episode_obj[\"downloadas\"] = \$episode->getDownloadas();
\t\t\t\$episode_obj[\"playas\"] = \$episode->getPlayas();
\t\t\tif(\$episode->getMedia())
\t\t\t\t\$episode_obj[\"image\"] = \$this['imagine']->filter(\$view['assets']->getUrl(\$episode->getMedia()->getLink()), 'episode_thumb');

\t\t\t\$source_episode_list =  array();
\t\t\tforeach (\$episode->getSources() as \$key => \$source_episode) {
\t\t\t\t\$source_episode_obj = array();
\t\t\t\t\$source_episode_obj[\"id\"]=\$source_episode->getId();
\t\t\t\t\$source_episode_obj[\"title\"]=\$source_episode->getTitle();
\t\t\t\t\$source_episode_obj[\"quality\"]=\$source_episode->getQuality();
\t\t\t\t\$source_episode_obj[\"size\"]=\$source_episode->getSize();
\t\t\t\t\$source_episode_obj[\"kind\"]=\$source_episode->getKind();
\t\t\t\t\$source_episode_obj[\"premium\"]=\$source_episode->getPremium();
\t\t\t\t\$source_episode_obj[\"external\"]=\$source_episode->getExternal();
\t\t\t\tif (\$source_episode->getType()==\"file\") {
\t\t\t\t\t\$source_episode_obj[\"url\"]=\$app->getRequest()->getScheme().\"://\".\$app->getRequest()->getHttpHost().\"/\". \$source_episode->getMedia()->getLink();
\t\t\t\t\t\$source_episode_obj[\"type\"]=\$source_episode->getMedia()->getExtension();

\t\t\t\t}else{
\t\t\t\t\t\$source_episode_obj[\"type\"]=\$source_episode->getType();
\t\t\t\t\t\$source_episode_obj[\"url\"]=\$source_episode->getUrl();
\t\t\t\t}
\t\t\t\t\$source_episode_list[] = \$source_episode_obj;
\t\t\t}
\t\t\t\$episode_obj[\"sources\"] = \$source_episode_list;

\t\t\t\$episodes_list[]=\$episode_obj;
\t\t}
\t}
\t\$season_obj[\"episodes\"] = \$episodes_list;
\t\$seasons_list[]=\$season_obj;
}


echo json_encode(\$seasons_list, JSON_UNESCAPED_UNICODE);
?>";
    }

    public function getTemplateName()
    {
        return "@App/Season/api_all.html.php";
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
        return new Source("", "@App/Season/api_all.html.php", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Season/api_all.html.php");
    }
}
