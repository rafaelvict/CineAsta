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

/* WebBundle:Player:channel.html.twig */
class __TwigTemplate_0215aa3fa7ad65f579400eca91b2ff0dad34800f2d4424d1032f41c5be7c82b6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "WebBundle::player.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["subtitle"] = (" " . $this->getAttribute(($context["channel"] ?? null), "title", []));
        // line 3
        $context["og_description"] = (" " . $this->getAttribute(($context["channel"] ?? null), "title", []));
        // line 4
        $context["og_type"] = "null";
        // line 5
        $context["og_image"] = "null";
        // line 6
        $context["keywords"] = "null";
        // line 1
        $this->parent = $this->loadTemplate("WebBundle::player.html.twig", "WebBundle:Player:channel.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        // line 8
        echo "\t";
        if (($this->getAttribute(($context["source"] ?? null), "type", []) == "youtube")) {
            // line 9
            echo "\t\t<div class=\"flix_app_player\">
\t\t\t<div class=\"plyr__video-embed \" id=\"player\">
\t\t\t\t<iframe
\t\t\t\tsrc=\"https://www.youtube.com/embed/";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute(($context["source"] ?? null), "youtubeid", []), "html", null, true);
            echo "?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1\"
\t\t\t\tallowfullscreen
\t\t\t\tallowtransparency
\t\t\t\tdata-poster=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["channel"] ?? null), "media", []), "link", [])), "html", null, true);
            echo "\"
\t\t\t\tallow=\"autoplay\"
\t\t\t\t></iframe>
\t\t\t</div>
\t\t</div>
\t";
        } elseif (($this->getAttribute(        // line 20
($context["source"] ?? null), "type", []) == "m3u8")) {
            // line 21
            echo "\t\t\t<div class=\"flix_app_player\">
              <video id=\"my_video_1\" class=\"video-js vjs-fluid vjs-default-skin\" playsinline controls preload=\"auto\" data-setup='{}' data-poster=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["channel"] ?? null), "media", []), "link", [])), "html", null, true);
            echo "\">
                ";
            // line 23
            $context["url"] = $this->getAttribute(($context["source"] ?? null), "url", []);
            // line 24
            echo "                ";
            $context["parts"] = twig_split_filter($this->env, ($context["url"] ?? null), "/");
            // line 25
            echo "                ";
            $context["new_url"] = ("https://iframe.mediadelivery.net/embed/90826/" . $this->getAttribute(($context["parts"] ?? null), 3, [], "array"));
            // line 26
            echo "                <source src=\"";
            echo twig_escape_filter($this->env, ($context["new_url"] ?? null), "html", null, true);
            echo "?autoplay=true\" type=\"application/x-mpegURL\">
              </video>
            </div>
\t\t";
        } elseif (($this->getAttribute(        // line 29
($context["source"] ?? null), "type", []) == "embed")) {
            // line 30
            echo "\t\t\t<div class=\"flix_app_player\" >
\t\t\t\t<iframe src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute(($context["source"] ?? null), "url", []), "html", null, true);
            echo "\" allowfullscreen></iframe>
\t\t\t</div>
\t\t";
        } else {
            // line 34
            echo "\t\t\t<div class=\"flix_app_player\">
\t\t\t\t<video  id=\"player\" playsinline controls data-poster=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["channel"] ?? null), "media", []), "link", [])), "html", null, true);
            echo "\">
\t\t\t\t\t<source src=\"";
            // line 36
            if ((($this->getAttribute(($context["source"] ?? null), "type", []) == "file") && ($this->getAttribute(($context["source"] ?? null), "media", []) != null))) {
                echo " ";
                echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "scheme", []) . "://") . $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "httpHost", [])) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["source"] ?? null), "media", []), "link", []))), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["source"] ?? null), "url", []), "html", null, true);
            }
            echo "\" type=\"video/mp4\"/>
\t\t\t\t\t</video>
\t\t\t\t</div>
\t\t";
        }
        // line 40
        echo "\t\t\t<footer>
\t\t\t\t<a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_channel_view", ["id" => $this->getAttribute(($context["channel"] ?? null), "id", []), "slug" => $this->getAttribute(($context["channel"] ?? null), "slug", [])]), "html", null, true);
        echo "\"><i class=\"fas fa-arrow-left\"></i></a>
\t\t\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebBundle:Home:logo"));
        echo "
\t\t\t\t<div class=\"btn-group dropup float-right sources-dropdown\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary dropdown-toggle season-btn-selected\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["source"] ?? null), "type", []), "html", null, true);
        echo " 
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["channel"] ?? null), "sources", []));
        foreach ($context['_seq'] as $context["_key"] => $context["current_source"]) {
            // line 49
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["current_source"], "premium", []) == 2)) {
                // line 50
                echo "\t\t\t\t\t\t\t\t";
                if ((($context["premium"] ?? null) == true)) {
                    // line 51
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["current_source"], "external", []) == true)) {
                        // line 52
                        echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["current_source"], "url", []), "html", null, true);
                        echo "\" target=\"_blank\" class=\"dropdown-item source-btn\"  alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["current_source"], "id", []), "html", null, true);
                        echo "\" type=\"button\"><i class=\"fas fa-external-link-alt\"></i> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["current_source"], "title", []), "html", null, true);
                        echo " ";
                        if (($this->getAttribute($context["current_source"], "quality", []) != null)) {
                            echo "<label class=\"badge badge-light float-right \">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["current_source"], "quality", []), "html", null, true);
                            echo " </label> ";
                        }
                        if (($this->getAttribute($context["current_source"], "size", []) != null)) {
                            echo "<label class=\"badge badge-light float-right \">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["current_source"], "size", []), "html", null, true);
                            echo " </label>";
                        }
                        echo "</a>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 54
                        echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_player_channel", ["id" => $this->getAttribute(($context["channel"] ?? null), "id", []), "slug" => $this->getAttribute(($context["channel"] ?? null), "slug", []), "source" => $this->getAttribute($context["current_source"], "id", [])]), "html", null, true);
                        echo "\" class=\"dropdown-item source-btn\"  alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["current_source"], "id", []), "html", null, true);
                        echo "\" type=\"button\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["current_source"], "title", []), "html", null, true);
                        echo " ";
                        if (($this->getAttribute($context["current_source"], "quality", []) != null)) {
                            echo "<label class=\"badge badge-light float-right \">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["current_source"], "quality", []), "html", null, true);
                            echo " </label> ";
                        }
                        if (($this->getAttribute($context["current_source"], "size", []) != null)) {
                            echo "<label class=\"badge badge-light float-right \">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["current_source"], "size", []), "html", null, true);
                            echo " </label>";
                        }
                        echo "</a> 
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 56
                    echo "\t\t\t\t\t\t\t\t";
                } else {
                    // line 57
                    echo "\t\t\t\t\t\t\t\t   <a href=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_subscription_subscribe");
                    echo "\" class=\"dropdown-item source-btn\"  type=\"button\"><i class=\"fas fa-star\"></i> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["current_source"], "title", []), "html", null, true);
                    echo " ";
                    if (($this->getAttribute($context["current_source"], "quality", []) != null)) {
                        echo "<label class=\"badge badge-light float-right \">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["current_source"], "quality", []), "html", null, true);
                        echo " </label> ";
                    }
                    if (($this->getAttribute($context["current_source"], "size", []) != null)) {
                        echo "<label class=\"badge badge-light float-right \">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["current_source"], "size", []), "html", null, true);
                        echo " </label>";
                    }
                    echo "</a>
\t\t\t\t\t\t\t\t";
                }
                // line 59
                echo "\t\t\t\t\t\t\t";
            } else {
                echo " 
\t\t\t\t\t\t\t\t\t";
                // line 60
                if (($this->getAttribute($context["current_source"], "external", []) == true)) {
                    // line 61
                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["current_source"], "url", []), "html", null, true);
                    echo "\" target=\"_blank\" class=\"dropdown-item source-btn\"  alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["current_source"], "id", []), "html", null, true);
                    echo "\" type=\"button\"><i class=\"fas fa-external-link-alt\"></i> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["current_source"], "title", []), "html", null, true);
                    echo " ";
                    if (($this->getAttribute($context["current_source"], "quality", []) != null)) {
                        echo "<label class=\"badge badge-light float-right \">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["current_source"], "quality", []), "html", null, true);
                        echo " </label> ";
                    }
                    if (($this->getAttribute($context["current_source"], "size", []) != null)) {
                        echo "<label class=\"badge badge-light float-right \">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["current_source"], "size", []), "html", null, true);
                        echo " </label>";
                    }
                    echo "</a>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 63
                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_player_channel", ["id" => $this->getAttribute(($context["channel"] ?? null), "id", []), "slug" => $this->getAttribute(($context["channel"] ?? null), "slug", []), "source" => $this->getAttribute($context["current_source"], "id", [])]), "html", null, true);
                    echo "\" class=\"dropdown-item source-btn\"  alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["current_source"], "id", []), "html", null, true);
                    echo "\" type=\"button\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["current_source"], "title", []), "html", null, true);
                    echo " ";
                    if (($this->getAttribute($context["current_source"], "quality", []) != null)) {
                        echo "<label class=\"badge badge-light float-right \">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["current_source"], "quality", []), "html", null, true);
                        echo " </label> ";
                    }
                    if (($this->getAttribute($context["current_source"], "size", []) != null)) {
                        echo "<label class=\"badge badge-light float-right \">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["current_source"], "size", []), "html", null, true);
                        echo " </label>";
                    }
                    echo "</a> 
\t\t\t\t\t\t\t\t\t";
                }
                // line 65
                echo "\t\t\t\t\t\t\t";
            }
            // line 66
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['current_source'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>
\t\t";
    }

    // line 71
    public function block_script($context, array $blocks = [])
    {
        // line 72
        echo "\t\t\t";
        if (($this->getAttribute(($context["source"] ?? null), "type", []) == "m3u8")) {
            // line 73
            echo "\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\tconst player = new Plyr('#my_video_1',{
\t\t\t\t\t\ttitle: 'Example Title',
\t\t\t\t\t\tcontrols:['play-large', 'play', 'mute', 'volume', 'captions', 'settings', 'pip', 'airplay', 'fullscreen']
\t\t\t\t\t});
\t\t\t\t\tvar player_2 = videojs('my_video_1');
\t\t\t\t\tplayer_2.play();


\t\t\t\t</script>
\t\t\t";
        } else {
            // line 84
            echo "\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\tconst player = new Plyr('#player',{
\t\t\t\t\t\ttitle: 'Example Title',
\t\t\t\t\t\tcontrols:['play-large', 'play', 'mute', 'volume', 'captions', 'settings', 'pip', 'airplay', 'fullscreen']
\t\t\t\t\t});
\t\t\t\t</script>
\t\t\t";
        }
        // line 91
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "WebBundle:Player:channel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 91,  310 => 84,  297 => 73,  294 => 72,  291 => 71,  284 => 67,  278 => 66,  275 => 65,  254 => 63,  233 => 61,  231 => 60,  226 => 59,  207 => 57,  204 => 56,  183 => 54,  162 => 52,  159 => 51,  156 => 50,  153 => 49,  149 => 48,  143 => 45,  137 => 42,  133 => 41,  130 => 40,  118 => 36,  114 => 35,  111 => 34,  105 => 31,  102 => 30,  100 => 29,  93 => 26,  90 => 25,  87 => 24,  85 => 23,  81 => 22,  78 => 21,  76 => 20,  68 => 15,  62 => 12,  57 => 9,  54 => 8,  51 => 7,  46 => 1,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Player:channel.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Player/channel.html.twig");
    }
}
