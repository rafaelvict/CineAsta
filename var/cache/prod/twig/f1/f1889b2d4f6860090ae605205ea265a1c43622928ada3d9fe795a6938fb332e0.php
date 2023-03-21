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

/* WebBundle:Player:movie.html.twig */
class __TwigTemplate_a0d6e1892accdd408a9e5c4880fb5f9c1b441914ad9dd011a0be176920fa81e9 extends \Twig\Template
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
        $context["subtitle"] = (" " . $this->getAttribute(($context["poster"] ?? null), "title", []));
        // line 3
        $context["og_description"] = (" " . $this->getAttribute(($context["poster"] ?? null), "title", []));
        // line 4
        $context["og_type"] = "null";
        // line 5
        $context["og_image"] = "null";
        // line 6
        $context["keywords"] = "null";
        // line 1
        $this->parent = $this->loadTemplate("WebBundle::player.html.twig", "WebBundle:Player:movie.html.twig", 1);
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
\t\t\t<video id=\"my_video_1\" class=\"video-js vjs-fluid vjs-default-skin\" playsinline controls preload=\"auto\" data-setup='{}' data-poster=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((($this->getAttribute(($context["poster"] ?? null), "cover", []) == null)) ? ($this->getAttribute($this->getAttribute(($context["poster"] ?? null), "poster", []), "link", [])) : ($this->getAttribute($this->getAttribute(($context["poster"] ?? null), "cover", []), "link", [])))), "html", null, true);
            echo "\" >
\t\t\t\t<source src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute(($context["source"] ?? null), "url", []), "html", null, true);
            echo "\" type=\"application/x-mpegURL\">
\t\t\t\t";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["poster"] ?? null), "subtitles", []));
            foreach ($context['_seq'] as $context["_key"] => $context["subtitle"]) {
                // line 24
                echo "\t\t\t\t\t<track kind=\"subtitles\" label=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["subtitle"], "language", []), "language", []), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "scheme", []) . "://") . $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "httpHost", [])) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["subtitle"], "media", []), "link", []))), "html", null, true);
                echo "\" srclang=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["subtitle"], "language", []), "language", []), "html", null, true);
                echo "\" default />
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subtitle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t\t\t\t</video>
\t\t\t</div> -->
\t\t\t
\t\t\t
\t\t\t
<div class=\"flix_app_player\">
\t<div style=\"
\t\t.issuu-embed-container {
\t\t  position: relative; padding-top: 177.77777777777777%; height: 0; overflow: hidden; max-width: 100%;
\t\t\">

\t<div class=\"flix_app_player\">
                   <iframe src=\"";
            // line 38
            echo twig_escape_filter($this->env, ($context["video_src"] ?? null), "html", null, true);
            echo "\" loading=\"lazy\" style=\"border: none; position: absolute; top: 0; height: 100%; width: 100%;\" allow=\"accelerometer; gyroscope; autoplay; encrypted-media; picture-in-picture;\" allowfullscreen=\"true\" ></iframe>

                </div>
</div>
</div>
\t\t";
        } elseif (($this->getAttribute(        // line 43
($context["source"] ?? null), "type", []) == "embed")) {
            // line 44
            echo "\t\t\t<div class=\"flix_app_player\" >
\t\t\t\t<iframe src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute(($context["source"] ?? null), "url", []), "html", null, true);
            echo "\" allowfullscreen></iframe>
\t\t\t</div>
\t\t";
        } else {
            // line 48
            echo "\t\t\t<div class=\"flix_app_player\">
\t\t\t\t<video  id=\"player\" playsinline controls data-poster=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((($this->getAttribute(($context["poster"] ?? null), "cover", []) == null)) ? ($this->getAttribute($this->getAttribute(($context["poster"] ?? null), "poster", []), "link", [])) : ($this->getAttribute($this->getAttribute(($context["poster"] ?? null), "cover", []), "link", [])))), "html", null, true);
            echo "\">
\t\t\t\t\t<source src=\"";
            // line 50
            if ((($this->getAttribute(($context["source"] ?? null), "type", []) == "file") && ($this->getAttribute(($context["source"] ?? null), "media", []) != null))) {
                echo " ";
                echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "scheme", []) . "://") . $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "httpHost", [])) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["source"] ?? null), "media", []), "link", []))), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["source"] ?? null), "url", []), "html", null, true);
            }
            echo "\" type=\"video/mp4\"/>
\t\t\t\t\t";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["poster"] ?? null), "subtitles", []));
            foreach ($context['_seq'] as $context["_key"] => $context["subtitle"]) {
                // line 52
                echo "\t\t\t\t\t\t<track kind=\"subtitles\" label=\"";
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
            // line 54
            echo "\t\t\t\t\t</video>
\t\t\t\t</div>
\t\t";
        }
        // line 57
        echo "\t\t\t<footer>
\t\t\t\t<a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_movie_view", ["id" => $this->getAttribute(($context["poster"] ?? null), "id", []), "slug" => $this->getAttribute(($context["poster"] ?? null), "slug", [])]), "html", null, true);
        echo "\"><i class=\"fas fa-arrow-left\"></i></a>
\t\t\t\t";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebBundle:Home:logo"));
        echo "
\t\t\t\t<div class=\"btn-group dropup float-right sources-dropdown\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary dropdown-toggle season-btn-selected\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute(($context["source"] ?? null), "title", []), "html", null, true);
        echo "  
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["poster"] ?? null), "sources", []));
        foreach ($context['_seq'] as $context["_key"] => $context["current_source"]) {
            // line 66
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["current_source"], "premium", []) == 2)) {
                // line 67
                echo "\t\t\t\t\t\t\t\t";
                if ((($context["premium"] ?? null) == true)) {
                    // line 68
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["current_source"], "external", []) == true)) {
                        // line 69
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
                        // line 71
                        echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_player_movie", ["id" => $this->getAttribute(($context["poster"] ?? null), "id", []), "slug" => $this->getAttribute(($context["poster"] ?? null), "slug", []), "source" => $this->getAttribute($context["current_source"], "id", [])]), "html", null, true);
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
                    // line 73
                    echo "\t\t\t\t\t\t\t\t";
                } else {
                    // line 74
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
                // line 76
                echo "\t\t\t\t\t\t\t";
            } else {
                echo " 
\t\t\t\t\t\t\t\t\t";
                // line 77
                if (($this->getAttribute($context["current_source"], "external", []) == true)) {
                    // line 78
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
                    // line 80
                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_player_movie", ["id" => $this->getAttribute(($context["poster"] ?? null), "id", []), "slug" => $this->getAttribute(($context["poster"] ?? null), "slug", []), "source" => $this->getAttribute($context["current_source"], "id", [])]), "html", null, true);
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
                // line 82
                echo "\t\t\t\t\t\t\t";
            }
            // line 83
            echo "\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['current_source'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>
\t\t";
    }

    // line 88
    public function block_script($context, array $blocks = [])
    {
        // line 89
        echo "\t\t\t";
        if (($this->getAttribute(($context["source"] ?? null), "type", []) == "m3u8")) {
            // line 90
            echo "\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t";
            // line 91
            if ((twig_length_filter($this->env, $this->getAttribute(($context["poster"] ?? null), "subtitles", [])) == 0)) {
                // line 92
                echo "\t\t\t\t\t\tconst player = new Plyr('#my_video_1');
\t\t\t\t\t";
            }
            // line 94
            echo "
\t\t\t\t\tvar player_2 = videojs('my_video_1');
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
        return "WebBundle:Player:movie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 106,  356 => 99,  349 => 94,  345 => 92,  343 => 91,  340 => 90,  337 => 89,  334 => 88,  327 => 84,  321 => 83,  318 => 82,  297 => 80,  276 => 78,  274 => 77,  269 => 76,  250 => 74,  247 => 73,  226 => 71,  205 => 69,  202 => 68,  199 => 67,  196 => 66,  192 => 65,  186 => 62,  180 => 59,  176 => 58,  173 => 57,  168 => 54,  155 => 52,  151 => 51,  142 => 50,  138 => 49,  135 => 48,  129 => 45,  126 => 44,  124 => 43,  116 => 38,  102 => 26,  89 => 24,  85 => 23,  81 => 22,  77 => 21,  74 => 20,  72 => 19,  62 => 12,  57 => 9,  54 => 8,  51 => 7,  46 => 1,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Player:movie.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Player/movie.html.twig");
    }
}
