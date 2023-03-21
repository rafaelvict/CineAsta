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
class __TwigTemplate_a0111a953bdee08e84e7a47d10b76e2f40e2634b9a2fec098becc3db236cdea7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Player:episode.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Player:episode.html.twig"));

        // line 2
        $context["subtitle"] = (" " . $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "title", []));
        // line 3
        $context["og_description"] = (" " . $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "title", []));
        // line 4
        $context["og_type"] = "null";
        // line 5
        $context["og_image"] = "null";
        // line 6
        $context["keywords"] = "null";
        // line 1
        $this->parent = $this->loadTemplate("WebBundle::player.html.twig", "WebBundle:Player:episode.html.twig", 1);
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
\t\t\t\tallow=\"autoplay\"
\t\t\t\t></iframe>
\t\t\t</div>
\t\t</div>
\t";
        } elseif (($this->getAttribute(        // line 19
($context["source"] ?? $this->getContext($context, "source")), "type", []) == "m3u8")) {
            // line 20
            echo "\t\t<!-- <div class=\"flix_app_player\" >
\t\t\t<video id=\"my_video_1\" class=\"video-js vjs-fluid vjs-default-skin\" controls preload=\"auto\" data-setup='{}'>
\t\t\t\t<source src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute(($context["source"] ?? $this->getContext($context, "source")), "url", []), "html", null, true);
            echo "\" type=\"application/x-mpegURL\">
\t\t\t\t";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "subtitles", []));
            foreach ($context['_seq'] as $context["_key"] => $context["subtitle"]) {
                // line 24
                echo "\t\t\t\t\t<track kind=\"subtitles\" label=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["subtitle"], "language", []), "language", []), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "scheme", []) . "://") . $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "httpHost", [])) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["subtitle"], "media", []), "link", []))), "html", null, true);
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
            $context["url"] = $this->getAttribute(($context["source"] ?? $this->getContext($context, "source")), "url", []);
            // line 34
            $context["parts"] = twig_split_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "/");
            // line 35
            $context["new_url"] = ("https://iframe.mediadelivery.net/embed/94165/" . $this->getAttribute(($context["parts"] ?? $this->getContext($context, "parts")), 3, [], "array"));
            // line 36
            echo "<iframe src=\"";
            echo twig_escape_filter($this->env, ($context["new_url"] ?? $this->getContext($context, "new_url")), "html", null, true);
            echo "?autoplay=true\" loading=\"lazy\" style=\"border: none; position: absolute; top: 0; height: 100%; width: 100%;\" allow=\"accelerometer; gyroscope; autoplay; encrypted-media; picture-in-picture;\" allowfullscreen=\"true\" ></iframe>

              
            </div>
          </div>
\t\t";
        } elseif (($this->getAttribute(        // line 41
($context["source"] ?? $this->getContext($context, "source")), "type", []) == "embed")) {
            // line 42
            echo "\t\t\t<div class=\"flix_app_player\" >
\t\t\t\t<iframe src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute(($context["source"] ?? $this->getContext($context, "source")), "url", []), "html", null, true);
            echo "\" allowfullscreen></iframe>
\t\t\t</div>
\t\t";
        } else {
            // line 46
            echo "\t\t\t<div class=\"flix_app_player\">
\t\t\t\t<video  id=\"player\" playsinline controls data-poster=\"/path/to/episode.jpg\">
\t\t\t\t\t<source src=\"";
            // line 48
            if ((($this->getAttribute(($context["source"] ?? $this->getContext($context, "source")), "type", []) == "file") && ($this->getAttribute(($context["source"] ?? $this->getContext($context, "source")), "media", []) != null))) {
                echo " ";
                echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "scheme", []) . "://") . $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "httpHost", [])) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["source"] ?? $this->getContext($context, "source")), "media", []), "link", []))), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["source"] ?? $this->getContext($context, "source")), "url", []), "html", null, true);
            }
            echo "\" type=\"video/mp4\"/>
\t\t\t\t\t";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "subtitles", []));
            foreach ($context['_seq'] as $context["_key"] => $context["subtitle"]) {
                // line 50
                echo "\t\t\t\t\t\t<track kind=\"subtitles\" label=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["subtitle"], "language", []), "language", []), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "scheme", []) . "://") . $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "httpHost", [])) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["subtitle"], "media", []), "link", []))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_serie_view", ["id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "season", []), "poster", []), "id", []), "slug" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "season", []), "poster", []), "slug", [])]), "html", null, true);
        echo "\"><i class=\"fas fa-arrow-left\"></i></a>
\t\t\t\t";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebBundle:Home:logo"));
        echo "
\t\t\t\t";
        // line 58
        if ((($context["next_episode"] ?? $this->getContext($context, "next_episode")) != null)) {
            // line 59
            echo "\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_player_pre_episode", ["id" => $this->getAttribute(($context["next_episode"] ?? $this->getContext($context, "next_episode")), "id", []), "slug" => $this->getAttribute(($context["next_episode"] ?? $this->getContext($context, "next_episode")), "slug", [])]), "html", null, true);
            echo "\" class=\"btn btn-secondary float-right next-episode\">Próximo <span class=\"for-desktop\">: ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["next_episode"] ?? $this->getContext($context, "next_episode")), "title", []), "html", null, true);
            echo " </span><i class=\"fas fa-forward\"></i></a>
\t\t\t\t";
        }
        // line 61
        echo "\t\t\t\t<div class=\"btn-group dropup float-right sources-dropdown\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary dropdown-toggle season-btn-selected\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["source"] ?? $this->getContext($context, "source")), "type", []), "html", null, true);
        echo " 
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "sources", []));
        foreach ($context['_seq'] as $context["_key"] => $context["current_source"]) {
            // line 67
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["current_source"], "premium", []) == 2)) {
                // line 68
                echo "\t\t\t\t\t\t\t\t";
                if ((($context["premium"] ?? $this->getContext($context, "premium")) == true)) {
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
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_player_episode", ["id" => $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "id", []), "slug" => $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "slug", []), "source" => $this->getAttribute($context["current_source"], "id", [])]), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_player_episode", ["id" => $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "id", []), "slug" => $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "slug", []), "source" => $this->getAttribute($context["current_source"], "id", [])]), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 89
    public function block_script($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 90
        echo "\t\t\t";
        if (($this->getAttribute(($context["source"] ?? $this->getContext($context, "source")), "type", []) == "m3u8")) {
            // line 91
            echo "\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t";
            // line 92
            if ((twig_length_filter($this->env, $this->getAttribute(($context["episode"] ?? $this->getContext($context, "episode")), "subtitles", [])) == 0)) {
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  402 => 106,  393 => 99,  387 => 95,  383 => 93,  381 => 92,  378 => 91,  375 => 90,  366 => 89,  353 => 85,  347 => 84,  344 => 83,  323 => 81,  302 => 79,  300 => 78,  295 => 77,  276 => 75,  273 => 74,  252 => 72,  231 => 70,  228 => 69,  225 => 68,  222 => 67,  218 => 66,  212 => 63,  208 => 61,  200 => 59,  198 => 58,  194 => 57,  190 => 56,  187 => 55,  182 => 52,  169 => 50,  165 => 49,  156 => 48,  152 => 46,  146 => 43,  143 => 42,  141 => 41,  132 => 36,  130 => 35,  128 => 34,  126 => 33,  117 => 26,  104 => 24,  100 => 23,  96 => 22,  92 => 20,  90 => 19,  80 => 12,  75 => 9,  72 => 8,  63 => 7,  52 => 1,  50 => 6,  48 => 5,  46 => 4,  44 => 3,  42 => 2,  30 => 1,);
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
{% set subtitle =   \" \" ~ episode.title  %}
{% set og_description =  \" \" ~ episode.title %}
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
\t\t\t\tallow=\"autoplay\"
\t\t\t\t></iframe>
\t\t\t</div>
\t\t</div>
\t{% elseif source.type == \"m3u8\" %}
\t\t<!-- <div class=\"flix_app_player\" >
\t\t\t<video id=\"my_video_1\" class=\"video-js vjs-fluid vjs-default-skin\" controls preload=\"auto\" data-setup='{}'>
\t\t\t\t<source src=\"{{source.url}}\" type=\"application/x-mpegURL\">
\t\t\t\t{% for subtitle in episode.subtitles %}
\t\t\t\t\t<track kind=\"subtitles\" label=\"{{subtitle.language.language}}\" src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset(subtitle.media.link) }}\" srclang=\"{{subtitle.language.language}}\" default />
\t\t\t\t\t{% endfor %}
\t\t\t\t</video>
\t\t\t</div>
\t\t\t -->
\t\t\t  <div class=\"flix_app_player\">
            <div style=
            .issuu-embed-container {
            \"position: relative; padding-top: 177.77777777777777%; height: 0; overflow: hidden; max-width: 100%;\"> }
            {% set url = source.url %}
{% set parts = url|split('/') %}
{% set new_url = \"https://iframe.mediadelivery.net/embed/94165/\" ~ parts[3] %}
<iframe src=\"{{ new_url }}?autoplay=true\" loading=\"lazy\" style=\"border: none; position: absolute; top: 0; height: 100%; width: 100%;\" allow=\"accelerometer; gyroscope; autoplay; encrypted-media; picture-in-picture;\" allowfullscreen=\"true\" ></iframe>

              
            </div>
          </div>
\t\t{% elseif source.type == \"embed\" %}
\t\t\t<div class=\"flix_app_player\" >
\t\t\t\t<iframe src=\"{{source.url}}\" allowfullscreen></iframe>
\t\t\t</div>
\t\t{% else %}
\t\t\t<div class=\"flix_app_player\">
\t\t\t\t<video  id=\"player\" playsinline controls data-poster=\"/path/to/episode.jpg\">
\t\t\t\t\t<source src=\"{% if source.type == \"file\" and source.media != null %} {{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset(source.media.link) }}{% else %}{{source.url}}{% endif %}\" type=\"video/mp4\"/>
\t\t\t\t\t{% for subtitle in episode.subtitles %}
\t\t\t\t\t\t<track kind=\"subtitles\" label=\"{{subtitle.language.language}}\" src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset(subtitle.media.link) }}\" srclang=\"{{subtitle.language.language}}\" default />
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</video>
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t<footer>
\t\t\t\t<a href=\"{{path(\"wep_serie_view\",{id : episode.season.poster.id, slug : episode.season.poster.slug})}}\"><i class=\"fas fa-arrow-left\"></i></a>
\t\t\t\t{{render(controller(\"WebBundle:Home:logo\"))}}
\t\t\t\t{% if next_episode != null %}
\t\t\t\t\t<a href=\"{{path(\"wep_player_pre_episode\",{id:next_episode.id,slug:next_episode.slug})}}\" class=\"btn btn-secondary float-right next-episode\">Próximo <span class=\"for-desktop\">: {{next_episode.title}} </span><i class=\"fas fa-forward\"></i></a>
\t\t\t\t{% endif %}
\t\t\t\t<div class=\"btn-group dropup float-right sources-dropdown\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary dropdown-toggle season-btn-selected\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t{{source.type }} 
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t{% for current_source in episode.sources %}
\t\t\t\t\t\t\t{% if current_source.premium == 2 %}
\t\t\t\t\t\t\t\t{% if premium == true %}
\t\t\t\t\t\t\t\t\t{% if current_source.external == true %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{current_source.url}}\" target=\"_blank\" class=\"dropdown-item source-btn\"  alt=\"{{current_source.id}}\" type=\"button\"><i class=\"fas fa-external-link-alt\"></i> {{current_source.title}} {% if current_source.quality != null %}<label class=\"badge badge-light float-right \">{{current_source.quality}} </label> {% endif %}{% if current_source.size != null %}<label class=\"badge badge-light float-right \">{{current_source.size}} </label>{% endif %}</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"wep_player_episode\",{id:episode.id,slug:episode.slug,source:current_source.id})}}\" class=\"dropdown-item source-btn\"  alt=\"{{current_source.id}}\" type=\"button\">{{current_source.title}} {% if current_source.quality != null %}<label class=\"badge badge-light float-right \">{{current_source.quality}} </label> {% endif %}{% if current_source.size != null %}<label class=\"badge badge-light float-right \">{{current_source.size}} </label>{% endif %}</a> 
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t   <a href=\"{{path(\"wep_subscription_subscribe\")}}\" class=\"dropdown-item source-btn\"  type=\"button\"><i class=\"fas fa-star\"></i> {{current_source.title}} {% if current_source.quality != null %}<label class=\"badge badge-light float-right \">{{current_source.quality}} </label> {% endif %}{% if current_source.size != null %}<label class=\"badge badge-light float-right \">{{current_source.size}} </label>{% endif %}</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% else %} 
\t\t\t\t\t\t\t\t\t{% if current_source.external == true %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{current_source.url}}\" target=\"_blank\" class=\"dropdown-item source-btn\"  alt=\"{{current_source.id}}\" type=\"button\"><i class=\"fas fa-external-link-alt\"></i> {{current_source.title}} {% if current_source.quality != null %}<label class=\"badge badge-light float-right \">{{current_source.quality}} </label> {% endif %}{% if current_source.size != null %}<label class=\"badge badge-light float-right \">{{current_source.size}} </label>{% endif %}</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"wep_player_episode\",{id:episode.id,slug:episode.slug,source:current_source.id})}}\" class=\"dropdown-item source-btn\"  alt=\"{{current_source.id}}\" type=\"button\">{{current_source.title}} {% if current_source.quality != null %}<label class=\"badge badge-light float-right \">{{current_source.quality}} </label> {% endif %}{% if current_source.size != null %}<label class=\"badge badge-light float-right \">{{current_source.size}} </label>{% endif %}</a> 
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
\t\t\t\t\t{% if episode.subtitles|length == 0 %}
\t\t\t\t\t\tconst player = new Plyr('#my_video_1');
\t\t\t\t\t{% endif %}
\t\t\t\t\tvar player_2 = videojs('my_video_1');
\t\t\t\t\tplayer_2.play();
\t\t\t\t</script>
\t\t\t{% else %}
\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\tconst player = new Plyr('#player',{
\t\t\t\t\t\ttitle: 'Example Title',
\t\t\t\t\t\tcontrols:['play-large', 'play', 'progress', 'current-time', 'mute', 'volume', 'captions', 'settings', 'pip', 'airplay', 'fullscreen']
\t\t\t\t\t});
\t\t\t\t</script>
\t\t\t{% endif %}
\t\t{% endblock %}", "WebBundle:Player:episode.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Player/episode.html.twig");
    }
}
