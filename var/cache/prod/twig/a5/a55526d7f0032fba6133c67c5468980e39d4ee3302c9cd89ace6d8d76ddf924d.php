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

/* WebBundle:Player:episode.html.twig */
class __TwigTemplate_ee65962ac1927638a8feed4bb321be03155644becde3133b636e7f06db8d2d18 extends \Twig\Template
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
        $context["subtitle"] = (" " . $this->getAttribute(($context["episode"] ?? null), "title", []));
        // line 3
        $context["og_description"] = (" " . $this->getAttribute(($context["episode"] ?? null), "title", []));
        // line 4
        $context["og_type"] = "null";
        // line 5
        $context["og_image"] = "null";
        // line 6
        $context["keywords"] = "null";
        // line 1
        $this->parent = $this->loadTemplate("WebBundle::player.html.twig", "WebBundle:Player:episode.html.twig", 1);
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
\t\t\t\tallow=\"autoplay\"
\t\t\t\t></iframe>
\t\t\t</div>
\t\t</div>
\t";
        } elseif (($this->getAttribute(        // line 19
($context["source"] ?? null), "type", []) == "m3u8")) {
            // line 20
            echo "\t\t<!-- <div class=\"flix_app_player\" >
\t\t\t<video id=\"my_video_1\" class=\"video-js vjs-fluid vjs-default-skin\" controls preload=\"auto\" data-setup='{}'>
\t\t\t\t<source src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute(($context["source"] ?? null), "url", []), "html", null, true);
            echo "\" type=\"application/x-mpegURL\">
\t\t\t\t";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["episode"] ?? null), "subtitles", []));
            foreach ($context['_seq'] as $context["_key"] => $context["subtitle"]) {
                // line 24
                echo "\t\t\t\t\t<track kind=\"subtitles\" label=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["subtitle"], "language", []), "language", []), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "scheme", []) . "://") . $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "httpHost", [])) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["subtitle"], "media", []), "link", []))), "html", null, true);
                echo "\" srclang=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["subtitle"], "language", []), "language", []), "html", null, true);
                echo "\" default />
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subtitle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t\t\t\t</video>
\t\t\t</div>
\t\t\t -->
\t\t\t  <div class=\"flix_app_player\">
            <div style=
            .issuu-embed-container {
            \"position: relative; padding-top: 177.77777777777777%; height: 0; overflow: hidden; max-width: 100%;\"> }
            ";
            // line 33
            $context["url"] = $this->getAttribute(($context["source"] ?? null), "url", []);
            // line 34
            $context["parts"] = twig_split_filter($this->env, ($context["url"] ?? null), "/");
            // line 35
            $context["new_url"] = ("https://iframe.mediadelivery.net/embed/94165/" . $this->getAttribute(($context["parts"] ?? null), 3, [], "array"));
            // line 36
            echo "<iframe src=\"";
            echo twig_escape_filter($this->env, ($context["new_url"] ?? null), "html", null, true);
            echo "?autoplay=true\" loading=\"lazy\" style=\"border: none; position: absolute; top: 0; height: 100%; width: 100%;\" allow=\"accelerometer; gyroscope; autoplay; encrypted-media; picture-in-picture;\" allowfullscreen=\"true\" ></iframe>

              
            </div>
          </div>
\t\t";
        } elseif (($this->getAttribute(        // line 41
($context["source"] ?? null), "type", []) == "embed")) {
            // line 42
            echo "\t\t\t<div class=\"flix_app_player\" >
\t\t\t\t<iframe src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute(($context["source"] ?? null), "url", []), "html", null, true);
            echo "\" allowfullscreen></iframe>
\t\t\t</div>
\t\t";
        } else {
            // line 46
            echo "\t\t\t<div class=\"flix_app_player\">
\t\t\t\t<video  id=\"player\" playsinline controls data-poster=\"/path/to/episode.jpg\">
\t\t\t\t\t<source src=\"";
            // line 48
            if ((($this->getAttribute(($context["source"] ?? null), "type", []) == "file") && ($this->getAttribute(($context["source"] ?? null), "media", []) != null))) {
                echo " ";
                echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "scheme", []) . "://") . $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "httpHost", [])) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["source"] ?? null), "media", []), "link", []))), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["source"] ?? null), "url", []), "html", null, true);
            }
            echo "\" type=\"video/mp4\"/>
\t\t\t\t\t";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["episode"] ?? null), "subtitles", []));
            foreach ($context['_seq'] as $context["_key"] => $context["subtitle"]) {
                // line 50
                echo "\t\t\t\t\t\t<track kind=\"subtitles\" label=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["subtitle"], "language", []), "language", []), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "scheme", []) . "://") . $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "httpHost", [])) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["subtitle"], "media", []), "link", []))), "html", null, true);
                echo "\" srclang=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["subtitle"], "language", []), "language", []), "html", null, true);
                echo "\" default />
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subtitle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "\t\t\t\t\t</video>
\t\t\t\t</div>
\t\t\t";
        }
        // line 55
        echo "\t\t\t<footer>
\t\t\t\t<a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_serie_view", ["id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["episode"] ?? null), "season", []), "poster", []), "id", []), "slug" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["episode"] ?? null), "season", []), "poster", []), "slug", [])]), "html", null, true);
        echo "\"><i class=\"fas fa-arrow-left\"></i></a>
\t\t\t\t";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebBundle:Home:logo"));
        echo "
\t\t\t\t";
        // line 58
        if ((($context["next_episode"] ?? null) != null)) {
            // line 59
            echo "\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_player_pre_episode", ["id" => $this->getAttribute(($context["next_episode"] ?? null), "id", []), "slug" => $this->getAttribute(($context["next_episode"] ?? null), "slug", [])]), "html", null, true);
            echo "\" class=\"btn btn-secondary float-right next-episode\">Próximo <span class=\"for-desktop\">: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["next_episode"] ?? null), "title", []), "html", null, true);
            echo " </span><i class=\"fas fa-forward\"></i></a>
\t\t\t\t";
        }
        // line 61
        echo "\t\t\t\t<div class=\"btn-group dropup float-right sources-dropdown\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary dropdown-toggle season-btn-selected\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["source"] ?? null), "type", []), "html", null, true);
        echo " 
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["episode"] ?? null), "sources", []));
        foreach ($context['_seq'] as $context["_key"] => $context["current_source"]) {
            // line 67
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["current_source"], "premium", []) == 2)) {
                // line 68
                echo "\t\t\t\t\t\t\t\t";
                if ((($context["premium"] ?? null) == true)) {
                    // line 69
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["current_source"], "external", []) == true)) {
                        // line 70
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
                        // line 72
                        echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_player_episode", ["id" => $this->getAttribute(($context["episode"] ?? null), "id", []), "slug" => $this->getAttribute(($context["episode"] ?? null), "slug", []), "source" => $this->getAttribute($context["current_source"], "id", [])]), "html", null, true);
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
                    // line 74
                    echo "\t\t\t\t\t\t\t\t";
                } else {
                    // line 75
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
                // line 77
                echo "\t\t\t\t\t\t\t";
            } else {
                echo " 
\t\t\t\t\t\t\t\t\t";
                // line 78
                if (($this->getAttribute($context["current_source"], "external", []) == true)) {
                    // line 79
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
                    // line 81
                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_player_episode", ["id" => $this->getAttribute(($context["episode"] ?? null), "id", []), "slug" => $this->getAttribute(($context["episode"] ?? null), "slug", []), "source" => $this->getAttribute($context["current_source"], "id", [])]), "html", null, true);
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
                // line 83
                echo "\t\t\t\t\t\t\t";
            }
            // line 84
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['current_source'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>
\t\t";
    }

    // line 89
    public function block_script($context, array $blocks = [])
    {
        // line 90
        echo "\t\t\t";
        if (($this->getAttribute(($context["source"] ?? null), "type", []) == "m3u8")) {
            // line 91
            echo "\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t";
            // line 92
            if ((twig_length_filter($this->env, $this->getAttribute(($context["episode"] ?? null), "subtitles", [])) == 0)) {
                // line 93
                echo "\t\t\t\t\t\tconst player = new Plyr('#my_video_1');
\t\t\t\t\t";
            }
            // line 95
            echo "\t\t\t\t\tvar player_2 = videojs('my_video_1');
\t\t\t\t\tplayer_2.play();
\t\t\t\t</script>
\t\t\t";
        } else {
            // line 99
            echo "\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\tconst player = new Plyr('#player',{
\t\t\t\t\t\ttitle: 'Example Title',
\t\t\t\t\t\tcontrols:['play-large', 'play', 'progress', 'current-time', 'mute', 'volume', 'captions', 'settings', 'pip', 'airplay', 'fullscreen']
\t\t\t\t\t});
\t\t\t\t</script>
\t\t\t";
        }
        // line 106
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "WebBundle:Player:episode.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 106,  363 => 99,  357 => 95,  353 => 93,  351 => 92,  348 => 91,  345 => 90,  342 => 89,  335 => 85,  329 => 84,  326 => 83,  305 => 81,  284 => 79,  282 => 78,  277 => 77,  258 => 75,  255 => 74,  234 => 72,  213 => 70,  210 => 69,  207 => 68,  204 => 67,  200 => 66,  194 => 63,  190 => 61,  182 => 59,  180 => 58,  176 => 57,  172 => 56,  169 => 55,  164 => 52,  151 => 50,  147 => 49,  138 => 48,  134 => 46,  128 => 43,  125 => 42,  123 => 41,  114 => 36,  112 => 35,  110 => 34,  108 => 33,  99 => 26,  86 => 24,  82 => 23,  78 => 22,  74 => 20,  72 => 19,  62 => 12,  57 => 9,  54 => 8,  51 => 7,  46 => 1,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Player:episode.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Player/episode.html.twig");
    }
}
