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

/* @App/Channel/api_all.html.php */
class __TwigTemplate_7c7a127141399fa10c5b6d825747e8a41cd909aebea96a3421eef86e4459d4bc extends \Twig\Template
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
\$channels_list =  array();

foreach (\$channels as \$key => \$channel) {
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
echo json_encode(\$channels_list, JSON_UNESCAPED_UNICODE);

 ?>";
    }

    public function getTemplateName()
    {
        return "@App/Channel/api_all.html.php";
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
        return new Source("", "@App/Channel/api_all.html.php", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Channel/api_all.html.php");
    }
}
