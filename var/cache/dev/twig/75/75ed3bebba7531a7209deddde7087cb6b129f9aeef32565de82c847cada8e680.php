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
class __TwigTemplate_80ca6cefb14a47bc565f1bc2f0d1a46c0d92f394f82b6006a31c2916c1f17193 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/Season/api_all.html.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@App/Season/api_all.html.php"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@App/Season/api_all.html.php";
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
?>", "@App/Season/api_all.html.php", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Season/api_all.html.php");
    }
}
