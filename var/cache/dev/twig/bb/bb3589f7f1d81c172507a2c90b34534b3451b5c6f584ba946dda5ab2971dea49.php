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
class __TwigTemplate_10fa0877bbc2c4cf9bb000677d76df12d6ebd0f10049d9c096d05012f4dafd68 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Player:channel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Player:channel.html.twig"));

        // line 2
        $context["subtitle"] = (" " . $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "title", []));
        // line 3
        $context["og_description"] = (" " . $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "title", []));
        // line 4
        $context["og_type"] = "null";
        // line 5
        $context["og_image"] = "null";
        // line 6
        $context["keywords"] = "null";
        // line 1
        $this->parent = $this->loadTemplate("WebBundle::player.html.twig", "WebBundle:Player:channel.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t";
        if (($this->getAttribute(($context["source"] ?? $this->getContext($context, "source")), "type", []) == "youtube")) {
            // line 9
            echo "\t\t<div class=\"flix_app_player\">
\t\t\t<div class=\"plyr__video-embed \" id=\"player\">
\t\t\t\t<iframe
\t\t\t\tsrc=\"https://www.youtube.com/embed/";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute(($context["source"] ?? $this->getContext($context, "source")), "youtubeid", []), "html", null, true);
            echo "?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1\"
\t\t\t\tallowfullscreen
\t\t\t\tallowtransparency
\t\t\t\tdata-poster=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "media", []), "link", [])), "html", null, true);
            echo "\"
\t\t\t\tallow=\"autoplay\"
\t\t\t\t></iframe>
\t\t\t</div>
\t\t</div>
\t";
        } elseif (($this->getAttribute(        // line 20
($context["source"] ?? $this->getContext($context, "source")), "type", []) == "m3u8")) {
            // line 21
            echo "\t\t\t<div class=\"flix_app_player\">
              <video id=\"my_video_1\" class=\"video-js vjs-fluid vjs-default-skin\" playsinline controls preload=\"auto\" data-setup='{}' data-poster=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "media", []), "link", [])), "html", null, true);
            echo "\">
                ";
            // line 23
            $context["url"] = $this->getAttribute(($context["source"] ?? $this->getContext($context, "source")), "url", []);
            // line 24
            echo "                ";
            $context["parts"] = twig_split_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "/");
            // line 25
            echo "                ";
            $context["new_url"] = ("https://iframe.mediadelivery.net/embed/90826/" . $this->getAttribute(($context["parts"] ?? $this->getContext($context, "parts")), 3, [], "array"));
            // line 26
            echo "                <source src=\"";
            echo twig_escape_filter($this->env, ($context["new_url"] ?? $this->getContext($context, "new_url")), "html", null, true);
            echo "?autoplay=true\" type=\"application/x-mpegURL\">
              </video>
            </div>
\t\t";
        } elseif (($this->getAttribute(        // line 29
($context["source"] ?? $this->getContext($context, "source")), "type", []) == "embed")) {
            // line 30
            echo "\t\t\t<div class=\"flix_app_player\" >
\t\t\t\t<iframe src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute(($context["source"] ?? $this->getContext($context, "source")), "url", []), "html", null, true);
            echo "\" allowfullscreen></iframe>
\t\t\t</div>
\t\t";
        } else {
            // line 34
            echo "\t\t\t<div class=\"flix_app_player\">
\t\t\t\t<video  id=\"player\" playsinline controls data-poster=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "media", []), "link", [])), "html", null, true);
            echo "\">
\t\t\t\t\t<source src=\"";
            // line 36
            if ((($this->getAttribute(($context["source"] ?? $this->getContext($context, "source")), "type", []) == "file") && ($this->getAttribute(($context["source"] ?? $this->getContext($context, "source")), "media", []) != null))) {
                echo " ";
                echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "scheme", []) . "://") . $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "httpHost", [])) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["source"] ?? $this->getContext($context, "source")), "media", []), "link", []))), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["source"] ?? $this->getContext($context, "source")), "url", []), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_channel_view", ["id" => $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "id", []), "slug" => $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "slug", [])]), "html", null, true);
        echo "\"><i class=\"fas fa-arrow-left\"></i></a>
\t\t\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebBundle:Home:logo"));
        echo "
\t\t\t\t<div class=\"btn-group dropup float-right sources-dropdown\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary dropdown-toggle season-btn-selected\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["source"] ?? $this->getContext($context, "source")), "type", []), "html", null, true);
        echo " 
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "sources", []));
        foreach ($context['_seq'] as $context["_key"] => $context["current_source"]) {
            // line 49
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["current_source"], "premium", []) == 2)) {
                // line 50
                echo "\t\t\t\t\t\t\t\t";
                if ((($context["premium"] ?? $this->getContext($context, "premium")) == true)) {
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
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_player_channel", ["id" => $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "id", []), "slug" => $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "slug", []), "source" => $this->getAttribute($context["current_source"], "id", [])]), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_player_channel", ["id" => $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "id", []), "slug" => $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "slug", []), "source" => $this->getAttribute($context["current_source"], "id", [])]), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_script($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 72
        echo "\t\t\t";
        if (($this->getAttribute(($context["source"] ?? $this->getContext($context, "source")), "type", []) == "m3u8")) {
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  349 => 91,  340 => 84,  327 => 73,  324 => 72,  315 => 71,  302 => 67,  296 => 66,  293 => 65,  272 => 63,  251 => 61,  249 => 60,  244 => 59,  225 => 57,  222 => 56,  201 => 54,  180 => 52,  177 => 51,  174 => 50,  171 => 49,  167 => 48,  161 => 45,  155 => 42,  151 => 41,  148 => 40,  136 => 36,  132 => 35,  129 => 34,  123 => 31,  120 => 30,  118 => 29,  111 => 26,  108 => 25,  105 => 24,  103 => 23,  99 => 22,  96 => 21,  94 => 20,  86 => 15,  80 => 12,  75 => 9,  72 => 8,  63 => 7,  52 => 1,  50 => 6,  48 => 5,  46 => 4,  44 => 3,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"WebBundle::player.html.twig\" %}
{% set subtitle =   \" \" ~ channel.title  %}
{% set og_description =  \" \" ~ channel.title %}
{% set og_type =  \"null\" %}
{% set og_image =  \"null\" %}
{% set keywords =  \"null\" %}
{% block body %}
\t{% if source.type == \"youtube\" %}
\t\t<div class=\"flix_app_player\">
\t\t\t<div class=\"plyr__video-embed \" id=\"player\">
\t\t\t\t<iframe
\t\t\t\tsrc=\"https://www.youtube.com/embed/{{source.youtubeid}}?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1\"
\t\t\t\tallowfullscreen
\t\t\t\tallowtransparency
\t\t\t\tdata-poster=\"{{asset(channel.media.link)}}\"
\t\t\t\tallow=\"autoplay\"
\t\t\t\t></iframe>
\t\t\t</div>
\t\t</div>
\t{% elseif source.type == \"m3u8\" %}
\t\t\t<div class=\"flix_app_player\">
              <video id=\"my_video_1\" class=\"video-js vjs-fluid vjs-default-skin\" playsinline controls preload=\"auto\" data-setup='{}' data-poster=\"{{asset(channel.media.link)}}\">
                {% set url = source.url %}
                {% set parts = url|split('/') %}
                {% set new_url = \"https://iframe.mediadelivery.net/embed/90826/\" ~ parts[3] %}
                <source src=\"{{ new_url }}?autoplay=true\" type=\"application/x-mpegURL\">
              </video>
            </div>
\t\t{% elseif source.type == \"embed\" %}
\t\t\t<div class=\"flix_app_player\" >
\t\t\t\t<iframe src=\"{{source.url}}\" allowfullscreen></iframe>
\t\t\t</div>
\t\t{% else %}
\t\t\t<div class=\"flix_app_player\">
\t\t\t\t<video  id=\"player\" playsinline controls data-poster=\"{{asset(channel.media.link)}}\">
\t\t\t\t\t<source src=\"{% if source.type == \"file\" and source.media != null %} {{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset(source.media.link) }}{% else %}{{source.url}}{% endif %}\" type=\"video/mp4\"/>
\t\t\t\t\t</video>
\t\t\t\t</div>
\t\t{% endif %}
\t\t\t<footer>
\t\t\t\t<a href=\"{{path(\"wep_channel_view\",{id : channel.id, slug : channel.slug})}}\"><i class=\"fas fa-arrow-left\"></i></a>
\t\t\t\t{{render(controller(\"WebBundle:Home:logo\"))}}
\t\t\t\t<div class=\"btn-group dropup float-right sources-dropdown\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary dropdown-toggle season-btn-selected\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t{{source.type }} 
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t{% for current_source in channel.sources %}
\t\t\t\t\t\t\t{% if current_source.premium == 2 %}
\t\t\t\t\t\t\t\t{% if premium == true %}
\t\t\t\t\t\t\t\t\t{% if current_source.external == true %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{current_source.url}}\" target=\"_blank\" class=\"dropdown-item source-btn\"  alt=\"{{current_source.id}}\" type=\"button\"><i class=\"fas fa-external-link-alt\"></i> {{current_source.title}} {% if current_source.quality != null %}<label class=\"badge badge-light float-right \">{{current_source.quality}} </label> {% endif %}{% if current_source.size != null %}<label class=\"badge badge-light float-right \">{{current_source.size}} </label>{% endif %}</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"wep_player_channel\",{id:channel.id,slug:channel.slug,source:current_source.id})}}\" class=\"dropdown-item source-btn\"  alt=\"{{current_source.id}}\" type=\"button\">{{current_source.title}} {% if current_source.quality != null %}<label class=\"badge badge-light float-right \">{{current_source.quality}} </label> {% endif %}{% if current_source.size != null %}<label class=\"badge badge-light float-right \">{{current_source.size}} </label>{% endif %}</a> 
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t   <a href=\"{{path(\"wep_subscription_subscribe\")}}\" class=\"dropdown-item source-btn\"  type=\"button\"><i class=\"fas fa-star\"></i> {{current_source.title}} {% if current_source.quality != null %}<label class=\"badge badge-light float-right \">{{current_source.quality}} </label> {% endif %}{% if current_source.size != null %}<label class=\"badge badge-light float-right \">{{current_source.size}} </label>{% endif %}</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% else %} 
\t\t\t\t\t\t\t\t\t{% if current_source.external == true %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{current_source.url}}\" target=\"_blank\" class=\"dropdown-item source-btn\"  alt=\"{{current_source.id}}\" type=\"button\"><i class=\"fas fa-external-link-alt\"></i> {{current_source.title}} {% if current_source.quality != null %}<label class=\"badge badge-light float-right \">{{current_source.quality}} </label> {% endif %}{% if current_source.size != null %}<label class=\"badge badge-light float-right \">{{current_source.size}} </label>{% endif %}</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"wep_player_channel\",{id:channel.id,slug:channel.slug,source:current_source.id})}}\" class=\"dropdown-item source-btn\"  alt=\"{{current_source.id}}\" type=\"button\">{{current_source.title}} {% if current_source.quality != null %}<label class=\"badge badge-light float-right \">{{current_source.quality}} </label> {% endif %}{% if current_source.size != null %}<label class=\"badge badge-light float-right \">{{current_source.size}} </label>{% endif %}</a> 
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</footer>
\t\t{% endblock %}
\t\t{% block script %}
\t\t\t{% if source.type == \"m3u8\" %}
\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\tconst player = new Plyr('#my_video_1',{
\t\t\t\t\t\ttitle: 'Example Title',
\t\t\t\t\t\tcontrols:['play-large', 'play', 'mute', 'volume', 'captions', 'settings', 'pip', 'airplay', 'fullscreen']
\t\t\t\t\t});
\t\t\t\t\tvar player_2 = videojs('my_video_1');
\t\t\t\t\tplayer_2.play();


\t\t\t\t</script>
\t\t\t{% else %}
\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\tconst player = new Plyr('#player',{
\t\t\t\t\t\ttitle: 'Example Title',
\t\t\t\t\t\tcontrols:['play-large', 'play', 'mute', 'volume', 'captions', 'settings', 'pip', 'airplay', 'fullscreen']
\t\t\t\t\t});
\t\t\t\t</script>
\t\t\t{% endif %}
\t\t{% endblock %}", "WebBundle:Player:channel.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Player/channel.html.twig");
    }
}
