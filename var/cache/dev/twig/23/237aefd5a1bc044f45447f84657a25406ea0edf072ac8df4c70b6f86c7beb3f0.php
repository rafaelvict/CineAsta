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
class __TwigTemplate_a8472f76852a7abcff703b4a316f7b95c7ed38137b12059f78a2cd8bdfca8397 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Player:movie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Player:movie.html.twig"));

        // line 2
        $context["subtitle"] = (" " . $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "title", []));
        // line 3
        $context["og_description"] = (" " . $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "title", []));
        // line 4
        $context["og_type"] = "null";
        // line 5
        $context["og_image"] = "null";
        // line 6
        $context["keywords"] = "null";
        // line 1
        $this->parent = $this->loadTemplate("WebBundle::player.html.twig", "WebBundle:Player:movie.html.twig", 1);
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
\t\t\t<video id=\"my_video_1\" class=\"video-js vjs-fluid vjs-default-skin\" playsinline controls preload=\"auto\" data-setup='{}' data-poster=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((($this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "cover", []) == null)) ? ($this->getAttribute($this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "poster", []), "link", [])) : ($this->getAttribute($this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "cover", []), "link", [])))), "html", null, true);
            echo "\" >
\t\t\t\t<source src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute(($context["source"] ?? $this->getContext($context, "source")), "url", []), "html", null, true);
            echo "\" type=\"application/x-mpegURL\">
\t\t\t\t";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "subtitles", []));
            foreach ($context['_seq'] as $context["_key"] => $context["subtitle"]) {
                // line 24
                echo "\t\t\t\t\t<track kind=\"subtitles\" label=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["subtitle"], "language", []), "language", []), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "scheme", []) . "://") . $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "httpHost", [])) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["subtitle"], "media", []), "link", []))), "html", null, true);
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
            echo twig_escape_filter($this->env, ($context["video_src"] ?? $this->getContext($context, "video_src")), "html", null, true);
            echo "\" loading=\"lazy\" style=\"border: none; position: absolute; top: 0; height: 100%; width: 100%;\" allow=\"accelerometer; gyroscope; autoplay; encrypted-media; picture-in-picture;\" allowfullscreen=\"true\" ></iframe>

                </div>
</div>
</div>
\t\t";
        } elseif (($this->getAttribute(        // line 43
($context["source"] ?? $this->getContext($context, "source")), "type", []) == "embed")) {
            // line 44
            echo "\t\t\t<div class=\"flix_app_player\" >
\t\t\t\t<iframe src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute(($context["source"] ?? $this->getContext($context, "source")), "url", []), "html", null, true);
            echo "\" allowfullscreen></iframe>
\t\t\t</div>
\t\t";
        } else {
            // line 48
            echo "\t\t\t<div class=\"flix_app_player\">
\t\t\t\t<video  id=\"player\" playsinline controls data-poster=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(((($this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "cover", []) == null)) ? ($this->getAttribute($this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "poster", []), "link", [])) : ($this->getAttribute($this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "cover", []), "link", [])))), "html", null, true);
            echo "\">
\t\t\t\t\t<source src=\"";
            // line 50
            if ((($this->getAttribute(($context["source"] ?? $this->getContext($context, "source")), "type", []) == "file") && ($this->getAttribute(($context["source"] ?? $this->getContext($context, "source")), "media", []) != null))) {
                echo " ";
                echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "scheme", []) . "://") . $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "httpHost", [])) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["source"] ?? $this->getContext($context, "source")), "media", []), "link", []))), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["source"] ?? $this->getContext($context, "source")), "url", []), "html", null, true);
            }
            echo "\" type=\"video/mp4\"/>
\t\t\t\t\t";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "subtitles", []));
            foreach ($context['_seq'] as $context["_key"] => $context["subtitle"]) {
                // line 52
                echo "\t\t\t\t\t\t<track kind=\"subtitles\" label=\"";
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
            // line 54
            echo "\t\t\t\t\t</video>
\t\t\t\t</div>
\t\t";
        }
        // line 57
        echo "\t\t\t<footer>
\t\t\t\t<a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_movie_view", ["id" => $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "id", []), "slug" => $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "slug", [])]), "html", null, true);
        echo "\"><i class=\"fas fa-arrow-left\"></i></a>
\t\t\t\t";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WebBundle:Home:logo"));
        echo "
\t\t\t\t<div class=\"btn-group dropup float-right sources-dropdown\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary dropdown-toggle season-btn-selected\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute(($context["source"] ?? $this->getContext($context, "source")), "title", []), "html", null, true);
        echo "  
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "sources", []));
        foreach ($context['_seq'] as $context["_key"] => $context["current_source"]) {
            // line 66
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["current_source"], "premium", []) == 2)) {
                // line 67
                echo "\t\t\t\t\t\t\t\t";
                if ((($context["premium"] ?? $this->getContext($context, "premium")) == true)) {
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
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_player_movie", ["id" => $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "id", []), "slug" => $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "slug", []), "source" => $this->getAttribute($context["current_source"], "id", [])]), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_player_movie", ["id" => $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "id", []), "slug" => $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "slug", []), "source" => $this->getAttribute($context["current_source"], "id", [])]), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 88
    public function block_script($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 89
        echo "\t\t\t";
        if (($this->getAttribute(($context["source"] ?? $this->getContext($context, "source")), "type", []) == "m3u8")) {
            // line 90
            echo "\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t";
            // line 91
            if ((twig_length_filter($this->env, $this->getAttribute(($context["poster"] ?? $this->getContext($context, "poster")), "subtitles", [])) == 0)) {
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  395 => 106,  386 => 99,  379 => 94,  375 => 92,  373 => 91,  370 => 90,  367 => 89,  358 => 88,  345 => 84,  339 => 83,  336 => 82,  315 => 80,  294 => 78,  292 => 77,  287 => 76,  268 => 74,  265 => 73,  244 => 71,  223 => 69,  220 => 68,  217 => 67,  214 => 66,  210 => 65,  204 => 62,  198 => 59,  194 => 58,  191 => 57,  186 => 54,  173 => 52,  169 => 51,  160 => 50,  156 => 49,  153 => 48,  147 => 45,  144 => 44,  142 => 43,  134 => 38,  120 => 26,  107 => 24,  103 => 23,  99 => 22,  95 => 21,  92 => 20,  90 => 19,  80 => 12,  75 => 9,  72 => 8,  63 => 7,  52 => 1,  50 => 6,  48 => 5,  46 => 4,  44 => 3,  42 => 2,  30 => 1,);
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
{% set subtitle =   \" \" ~ poster.title  %}
{% set og_description =  \" \" ~ poster.title %}
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
\t\t\t<video id=\"my_video_1\" class=\"video-js vjs-fluid vjs-default-skin\" playsinline controls preload=\"auto\" data-setup='{}' data-poster=\"{{asset((poster.cover == null)? poster.poster.link : poster.cover.link)}}\" >
\t\t\t\t<source src=\"{{source.url}}\" type=\"application/x-mpegURL\">
\t\t\t\t{% for subtitle in poster.subtitles %}
\t\t\t\t\t<track kind=\"subtitles\" label=\"{{subtitle.language.language}}\" src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset(subtitle.media.link) }}\" srclang=\"{{subtitle.language.language}}\" default />
\t\t\t\t{% endfor %}
\t\t\t\t</video>
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
                   <iframe src=\"{{ video_src }}\" loading=\"lazy\" style=\"border: none; position: absolute; top: 0; height: 100%; width: 100%;\" allow=\"accelerometer; gyroscope; autoplay; encrypted-media; picture-in-picture;\" allowfullscreen=\"true\" ></iframe>

                </div>
</div>
</div>
\t\t{% elseif source.type == \"embed\" %}
\t\t\t<div class=\"flix_app_player\" >
\t\t\t\t<iframe src=\"{{source.url}}\" allowfullscreen></iframe>
\t\t\t</div>
\t\t{% else %}
\t\t\t<div class=\"flix_app_player\">
\t\t\t\t<video  id=\"player\" playsinline controls data-poster=\"{{asset((poster.cover == null)? poster.poster.link : poster.cover.link)}}\">
\t\t\t\t\t<source src=\"{% if source.type == \"file\" and source.media != null %} {{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset(source.media.link) }}{% else %}{{source.url}}{% endif %}\" type=\"video/mp4\"/>
\t\t\t\t\t{% for subtitle in poster.subtitles %}
\t\t\t\t\t\t<track kind=\"subtitles\" label=\"{{subtitle.language.language}}\" src=\"{{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset(subtitle.media.link) }}\" srclang=\"{{subtitle.language.language}}\" default />
\t\t\t\t\t{% endfor %}
\t\t\t\t\t</video>
\t\t\t\t</div>
\t\t{% endif %}
\t\t\t<footer>
\t\t\t\t<a href=\"{{path(\"wep_movie_view\",{id : poster.id, slug : poster.slug})}}\"><i class=\"fas fa-arrow-left\"></i></a>
\t\t\t\t{{render(controller(\"WebBundle:Home:logo\"))}}
\t\t\t\t<div class=\"btn-group dropup float-right sources-dropdown\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary dropdown-toggle season-btn-selected\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t{{source.title }}  
\t\t\t\t\t</button>
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right\">
\t\t\t\t\t\t{% for current_source in poster.sources %}
\t\t\t\t\t\t\t{% if current_source.premium == 2 %}
\t\t\t\t\t\t\t\t{% if premium == true %}
\t\t\t\t\t\t\t\t\t{% if current_source.external == true %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{current_source.url}}\" target=\"_blank\" class=\"dropdown-item source-btn\"  alt=\"{{current_source.id}}\" type=\"button\"><i class=\"fas fa-external-link-alt\"></i> {{current_source.title}} {% if current_source.quality != null %}<label class=\"badge badge-light float-right \">{{current_source.quality}} </label> {% endif %}{% if current_source.size != null %}<label class=\"badge badge-light float-right \">{{current_source.size}} </label>{% endif %}</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"wep_player_movie\",{id:poster.id,slug:poster.slug,source:current_source.id})}}\" class=\"dropdown-item source-btn\"  alt=\"{{current_source.id}}\" type=\"button\">{{current_source.title}} {% if current_source.quality != null %}<label class=\"badge badge-light float-right \">{{current_source.quality}} </label> {% endif %}{% if current_source.size != null %}<label class=\"badge badge-light float-right \">{{current_source.size}} </label>{% endif %}</a> 
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t   <a href=\"{{path(\"wep_subscription_subscribe\")}}\" class=\"dropdown-item source-btn\"  type=\"button\"><i class=\"fas fa-star\"></i> {{current_source.title}} {% if current_source.quality != null %}<label class=\"badge badge-light float-right \">{{current_source.quality}} </label> {% endif %}{% if current_source.size != null %}<label class=\"badge badge-light float-right \">{{current_source.size}} </label>{% endif %}</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% else %} 
\t\t\t\t\t\t\t\t\t{% if current_source.external == true %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{current_source.url}}\" target=\"_blank\" class=\"dropdown-item source-btn\"  alt=\"{{current_source.id}}\" type=\"button\"><i class=\"fas fa-external-link-alt\"></i> {{current_source.title}} {% if current_source.quality != null %}<label class=\"badge badge-light float-right \">{{current_source.quality}} </label> {% endif %}{% if current_source.size != null %}<label class=\"badge badge-light float-right \">{{current_source.size}} </label>{% endif %}</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"wep_player_movie\",{id:poster.id,slug:poster.slug,source:current_source.id})}}\" class=\"dropdown-item source-btn\"  alt=\"{{current_source.id}}\" type=\"button\">{{current_source.title}} {% if current_source.quality != null %}<label class=\"badge badge-light float-right \">{{current_source.quality}} </label> {% endif %}{% if current_source.size != null %}<label class=\"badge badge-light float-right \">{{current_source.size}} </label>{% endif %}</a> 
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
\t\t\t\t\t{% if poster.subtitles|length == 0 %}
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
\t\t{% endblock %}", "WebBundle:Player:movie.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Player/movie.html.twig");
    }
}
