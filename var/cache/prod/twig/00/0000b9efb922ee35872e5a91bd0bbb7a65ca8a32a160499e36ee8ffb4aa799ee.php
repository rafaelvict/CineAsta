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

/* WebBundle::player.html.twig */
class __TwigTemplate_33981b94fe285701d128d9919f1bc5774621566a4208053dd046ce2c1344fa45 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t\t";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebBundle:Home:header", ["keywords" => ($context["keywords"] ?? null), "og_image" => ($context["og_image"] ?? null), "og_description" => ($context["og_description"] ?? null), "subtitle" => ($context["subtitle"] ?? null), "og_type" => ($context["og_type"] ?? null)]));
        echo "

\t\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("web/css/player.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" href=\"https://cdn.plyr.io/3.6.1/plyr.css\" />
\t\t\t<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t\t<!--[if lt IE 9]>
\t\t<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
\t\t<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t\t<![endif]-->
\t\t<link href=\"https://unpkg.com/video.js/dist/video-js.css\" rel=\"stylesheet\">
  \t\t<script src=\"https://unpkg.com/video.js/dist/video.js\"></script>
  \t\t<script src=\"https://unpkg.com/videojs-contrib-hls/dist/videojs-contrib-hls.js\"></script>
  \t\t<script src=\"https://kit.fontawesome.com/017eaf7e3f.js\" crossorigin=\"anonymous\"></script>

\t</head>
\t<body>
\t\t";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "<script>
window['__onGCastApiAvailable'] = function(isAvailable) {
  if (isAvailable) {
    initializeCastApi();
  }
};

initializeCastApi = function() {
  cast.framework.CastContext.getInstance().setOptions({
    receiverApplicationId: applicationId,
    autoJoinPolicy: chrome.cast.AutoJoinPolicy.ORIGIN_SCOPED
  });
};
\t\t
</script>
\t\t<script src=\"//www.gstatic.com/cv/js/sender/v1/cast_sender.js?loadCastFramework=1\"></script>

\t\t<!-- Include all compiled plugins (below), or include individual files as needed -->
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
\t\t<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
\t\t\t
\t\t<script src=\"https://cdn.plyr.io/3.6.1/plyr.polyfilled.js\"></script>

\t\t";
        // line 53
        $this->displayBlock('script', $context, $blocks);
        // line 55
        echo "\t</body>
</html>";
    }

    // line 26
    public function block_body($context, array $blocks = [])
    {
        // line 27
        echo "\t\t\t
\t\t";
    }

    // line 53
    public function block_script($context, array $blocks = [])
    {
        // line 54
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "WebBundle::player.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 54,  108 => 53,  103 => 27,  100 => 26,  95 => 55,  93 => 53,  67 => 29,  65 => 26,  47 => 11,  41 => 8,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle::player.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/player.html.twig");
    }
}
