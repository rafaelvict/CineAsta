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

/* WebBundle:Home:index.html.twig */
class __TwigTemplate_85e08d9b153dd94f59d201f54e7f69348a1b02d90b3d5ec3658cf227f9621084 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "WebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Home:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Home:index.html.twig"));

        // line 2
        $context["subtitle"] = $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "subtitle", []);
        // line 3
        $context["og_description"] = $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "sitedescription", []);
        // line 4
        $context["og_type"] = "website";
        // line 5
        $context["og_image"] = "null";
        // line 6
        $context["keywords"] = $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "sitekeywords", []);
        // line 1
        $this->parent = $this->loadTemplate("WebBundle::layout.html.twig", "WebBundle:Home:index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Início";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<div class=\"row content-section\">
\t\t<div class=\"col-sm-12 col-md-12\" >
\t\t\t<div id=\"myCarousel\" class=\"carousel slide w-100\" data-ride=\"carousel\">
\t\t\t\t<ol class=\"carousel-indicators float-right\">
\t\t\t\t\t";
        // line 13
        $context["index"] = 0;
        // line 14
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slides"] ?? $this->getContext($context, "slides")));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 15
            echo "\t\t\t\t\t\t";
            if ((($context["index"] ?? $this->getContext($context, "index")) == 0)) {
                // line 16
                echo "\t\t\t\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"";
                echo twig_escape_filter($this->env, ($context["index"] ?? $this->getContext($context, "index")), "html", null, true);
                echo "\" class=\"active\"></li>
\t\t\t\t\t\t";
            } else {
                // line 18
                echo "\t\t\t\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"";
                echo twig_escape_filter($this->env, ($context["index"] ?? $this->getContext($context, "index")), "html", null, true);
                echo "\" ></li>
\t\t\t\t\t\t";
            }
            // line 20
            echo "\t\t\t\t\t\t";
            $context["index"] = (($context["index"] ?? $this->getContext($context, "index")) + 1);
            // line 21
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t\t\t</ol>
\t\t\t\t<div class=\"carousel-inner w-100\" role=\"listbox\">
\t\t\t\t\t";
        // line 24
        $context["fist"] = true;
        // line 25
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slides"] ?? $this->getContext($context, "slides")));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 26
            echo "\t\t\t\t\t\t";
            if (($context["fist"] ?? $this->getContext($context, "fist"))) {
                // line 27
                echo "\t\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t";
                // line 28
                $context["fist"] = false;
                // line 29
                echo "\t\t\t\t\t\t";
            } else {
                // line 30
                echo "\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t";
            }
            // line 32
            echo "\t\t\t\t\t\t<div class=\"col-xxl-5 col-lg-8 col-md-12\">
\t\t\t\t\t\t\t<img height=\"370\" width=\"750\" class=\"img-fluid\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->getAttribute($this->getAttribute($context["slide"], "media", []), "link", []), "slide_thumb_web")), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
            // line 34
            if (($this->getAttribute($context["slide"], "type", []) == 4)) {
                // line 35
                echo "\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($context["slide"], "poster", []), "type", []) == "movie")) {
                    // line 36
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_movie_view", ["id" => $this->getAttribute($this->getAttribute($context["slide"], "poster", []), "id", []), "slug" => $this->getAttribute($this->getAttribute($context["slide"], "poster", []), "slug", [])]), "html", null, true);
                    echo "\" class=\"carousel-detail\">
\t\t\t\t\t\t\t\t";
                } elseif (($this->getAttribute($this->getAttribute(                // line 37
$context["slide"], "poster", []), "type", []) == "serie")) {
                    // line 38
                    echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_serie_view", ["id" => $this->getAttribute($this->getAttribute($context["slide"], "poster", []), "id", []), "slug" => $this->getAttribute($this->getAttribute($context["slide"], "poster", []), "slug", [])]), "html", null, true);
                    echo "\" class=\"carousel-detail\">
\t\t\t\t\t\t\t\t";
                }
                // line 40
                echo "\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h3>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "clear", []), "html", null, true);
                echo " <span><i class=\"fa fa-star\"></i> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["slide"], "poster", []), "imdb", []), "html", null, true);
                echo "/10</span></h3>
\t\t\t\t\t\t\t\t\t<p>";
                // line 42
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["slide"], "poster", []), "description", [])) > 180)) ? ((twig_slice($this->env, $this->getAttribute($this->getAttribute($context["slide"], "poster", []), "description", []), 0, 180) . "...")) : ($this->getAttribute($this->getAttribute($context["slide"], "poster", []), "description", []))), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t<button ><i class=\"fa fa-play\"></i> <span>Assistir<span></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 46
$context["slide"], "type", []) == 3)) {
                // line 47
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_channel_view", ["id" => $this->getAttribute($this->getAttribute($context["slide"], "channel", []), "id", []), "slug" => $this->getAttribute($this->getAttribute($context["slide"], "channel", []), "slug", [])]), "html", null, true);
                echo "\"  class=\"carousel-detail\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h3>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "clear", []), "html", null, true);
                echo "</h3>
\t\t\t\t\t\t\t\t\t\t<p>";
                // line 50
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["slide"], "channel", []), "description", [])) > 180)) ? ((twig_slice($this->env, $this->getAttribute($this->getAttribute($context["slide"], "channel", []), "description", []), 0, 180) . "...")) : ($this->getAttribute($this->getAttribute($context["slide"], "channel", []), "description", []))), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t<button ><i class=\"fa fa-play\"></i> <span>Assistir<span></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 54
$context["slide"], "type", []) == 1)) {
                // line 55
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "url", []), "html", null, true);
                echo "\"  class=\"carousel-detail\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h3>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "clear", []), "html", null, true);
                echo "</h3>
\t\t\t\t\t\t\t\t\t\t<button ><i class=\"fas fa-globe\"></i> <span>Visit Now<span></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 61
$context["slide"], "type", []) == 5)) {
                // line 62
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_poster_filter", ["genre" => $this->getAttribute($this->getAttribute($context["slide"], "genre", []), "title", []), "order" => "newest"]), "html", null, true);
                echo "\"  class=\"carousel-detail\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h3>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "clear", []), "html", null, true);
                echo "</h3>
\t\t\t\t\t\t\t\t\t\t<button ><i class=\"fas fa-stream\"></i> <span>Explore Now<span></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 68
$context["slide"], "type", []) == 2)) {
                // line 69
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_channel_index", ["category" => $this->getAttribute($this->getAttribute($context["slide"], "category", []), "title", []), "country" => "all", "order" => "newest"]), "html", null, true);
                echo "\"  class=\"carousel-detail\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h3>";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "clear", []), "html", null, true);
                echo "</h3>
\t\t\t\t\t\t\t\t\t\t<button ><i class=\"fas fa-stream\"></i> <span>Explore Now<span></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
            }
            // line 76
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 82
        if (($this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "homebannertype", []) == "image")) {
            // line 83
            echo "\t\t\t\t<div class=\"col-sm-12 col-md-12 ads-element\">
\t\t\t\t\t<img src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "homebanner", []), "html", null, true);
            echo "\">
\t\t\t\t</div>
\t\t\t";
        } elseif (($this->getAttribute(        // line 86
($context["settings"] ?? $this->getContext($context, "settings")), "homebannertype", []) == "code")) {
            // line 87
            echo "\t\t\t\t<div class=\"col-sm-12 col-md-12\">
\t\t\t\t\t";
            // line 88
            echo $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "homebanner", []);
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 91
        echo "\t\t\t<div class=\"col-sm-12 col-md-12 \">
\t\t\t\t<a href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_channel_index", ["country" => "all", "category" => "all", "order" => "views"]), "html", null, true);
        echo "\" class=\"title-more\">
\t\t\t\t\t<span>Canais em Destaque</span>
\t\t\t\t\t<i class=\"fa fa-th float-right\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"flix-carousel\" >
\t\t\t\t<button  class=\"prev_btn\"><i class=\"fa fa-chevron-left\"></i></button>
\t\t\t\t<button  class=\"next_btn\"><i class=\"fa fa-chevron-right\"></i></button>
\t\t\t\t<div class=\"flix-scroll-x\">
\t\t\t\t\t";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["channels"] ?? $this->getContext($context, "channels")));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
            // line 102
            echo "\t\t\t\t\t\t";
            echo twig_include($this->env, $context, "WebBundle:Channel:channel.html.twig", ["poster" => $context["channel"]]);
            echo "
\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-12 col-md-12 \">
\t\t\t\t<a href=\"";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_actor_index");
        echo "\" class=\"title-more\">
\t\t\t\t\t<span>Estrelas Populares</span>
\t\t\t\t\t<i class=\"fa fa-th float-right\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"flix-carousel\" >
\t\t\t\t<button  class=\"prev_btn\"><i class=\"fa fa-chevron-left\"></i></button>
\t\t\t\t<button  class=\"next_btn\"><i class=\"fa fa-chevron-right\"></i></button>
\t\t\t\t<div class=\"flix-scroll-x\">
\t\t\t\t\t";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actors"] ?? $this->getContext($context, "actors")));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
            // line 117
            echo "\t\t\t\t\t\t";
            echo twig_include($this->env, $context, "WebBundle:Actor:actor.html.twig", ["actor" => $context["actor"]]);
            echo "
\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-12 col-md-12 \">
\t\t\t\t<a href=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_poster_filter", ["genre" => "all", "order" => "rating"]), "html", null, true);
        echo "\" class=\"title-more\">
\t\t\t\t\t<span>Avaliados Recentemente</span>
\t\t\t\t\t<i class=\"fa fa-th float-right\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"flix-carousel\" >
\t\t\t\t<button  class=\"prev_btn\"><i class=\"fa fa-chevron-left\"></i></button>
\t\t\t\t<button  class=\"next_btn\"><i class=\"fa fa-chevron-right\"></i></button>
\t\t\t\t<div class=\"flix-scroll-x\">
\t\t\t\t\t";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bestrated"] ?? $this->getContext($context, "bestrated")));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["poster"]) {
            // line 132
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["poster"], "type", []) == "movie")) {
                // line 133
                echo "\t\t\t\t\t\t\t";
                echo twig_include($this->env, $context, "WebBundle:Movie:movie.html.twig", ["poster" => $context["poster"]]);
                echo "
\t\t\t\t\t\t";
            } else {
                // line 135
                echo "\t\t\t\t\t\t\t";
                echo twig_include($this->env, $context, "WebBundle:Serie:serie.html.twig", ["poster" => $context["poster"]]);
                echo "
\t\t\t\t\t\t";
            }
            // line 137
            echo "\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poster'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-12 col-md-12 \">
\t\t\t\t<a href=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_poster_filter", ["genre" => "all", "order" => "views"]), "html", null, true);
        echo "\" class=\"title-more\">
\t\t\t\t\t<span>Popular</span>
\t\t\t\t\t<i class=\"fa fa-th float-right\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"flix-carousel\" >
\t\t\t\t<button  class=\"prev_btn\"><i class=\"fa fa-chevron-left\"></i></button>
\t\t\t\t<button  class=\"next_btn\"><i class=\"fa fa-chevron-right\"></i></button>
\t\t\t\t<div class=\"flix-scroll-x\">
\t\t\t\t\t";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["popular"] ?? $this->getContext($context, "popular")));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["poster"]) {
            // line 151
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute($context["poster"], "type", []) == "movie")) {
                // line 152
                echo "\t\t\t\t\t\t\t";
                echo twig_include($this->env, $context, "WebBundle:Movie:movie.html.twig", ["poster" => $context["poster"]]);
                echo "
\t\t\t\t\t\t";
            } else {
                // line 154
                echo "\t\t\t\t\t\t\t";
                echo twig_include($this->env, $context, "WebBundle:Serie:serie.html.twig", ["poster" => $context["poster"]]);
                echo "
\t\t\t\t\t\t";
            }
            // line 156
            echo "\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poster'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["genres"] ?? $this->getContext($context, "genres")));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 160
            echo "\t\t\t\t<div class=\"col-sm-12 col-md-12 \">
\t\t\t\t\t<a href=\"";
            // line 161
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_poster_filter", ["genre" => $this->getAttribute($context["genre"], "title", []), "order" => "newest"]), "html", null, true);
            echo "\" class=\"title-more\">
\t\t\t\t\t\t<span>";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute($context["genre"], "title", []), "html", null, true);
            echo "</span>
\t\t\t\t\t\t<i class=\"fa fa-th float-right\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"flix-carousel\" >
\t\t\t\t\t<button  class=\"prev_btn\"><i class=\"fa fa-chevron-left\"></i></button>
\t\t\t\t\t<button  class=\"next_btn\"><i class=\"fa fa-chevron-right\"></i></button>
\t\t\t\t\t<div class=\"flix-scroll-x\">
\t\t\t\t\t";
            // line 170
            $context["max"] = 1;
            // line 171
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["genre"], "posters", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["poster"]) {
                // line 172
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["poster"], "enabled", []) == true)) {
                    // line 173
                    echo "\t\t\t\t\t\t\t";
                    if ((($context["max"] ?? $this->getContext($context, "max")) < 16)) {
                        // line 174
                        echo "\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["poster"], "type", []) == "movie")) {
                            // line 175
                            echo "\t\t\t\t\t\t\t\t\t";
                            echo twig_include($this->env, $context, "WebBundle:Movie:movie.html.twig", ["poster" => $context["poster"]]);
                            echo "
\t\t\t\t\t\t\t\t";
                        } else {
                            // line 177
                            echo "\t\t\t\t\t\t\t\t\t";
                            echo twig_include($this->env, $context, "WebBundle:Serie:serie.html.twig", ["poster" => $context["poster"]]);
                            echo "
\t\t\t\t\t\t\t\t";
                        }
                        // line 179
                        echo "\t\t\t\t\t\t\t\t";
                        $context["max"] = (($context["max"] ?? $this->getContext($context, "max")) + 1);
                        // line 180
                        echo "\t\t\t\t\t\t\t";
                    }
                    // line 181
                    echo "\t\t\t\t\t\t";
                }
                // line 182
                echo "\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poster'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "\t\t</div>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  638 => 186,  622 => 183,  608 => 182,  605 => 181,  602 => 180,  599 => 179,  593 => 177,  587 => 175,  584 => 174,  581 => 173,  578 => 172,  560 => 171,  558 => 170,  547 => 162,  543 => 161,  540 => 160,  523 => 159,  519 => 157,  505 => 156,  499 => 154,  493 => 152,  490 => 151,  473 => 150,  461 => 141,  456 => 138,  442 => 137,  436 => 135,  430 => 133,  427 => 132,  410 => 131,  398 => 122,  393 => 119,  376 => 117,  359 => 116,  347 => 107,  342 => 104,  325 => 102,  308 => 101,  296 => 92,  293 => 91,  287 => 88,  284 => 87,  282 => 86,  277 => 84,  274 => 83,  272 => 82,  267 => 79,  259 => 76,  251 => 71,  245 => 69,  243 => 68,  236 => 64,  230 => 62,  228 => 61,  221 => 57,  215 => 55,  213 => 54,  206 => 50,  202 => 49,  196 => 47,  194 => 46,  187 => 42,  181 => 41,  178 => 40,  172 => 38,  170 => 37,  165 => 36,  162 => 35,  160 => 34,  156 => 33,  153 => 32,  149 => 30,  146 => 29,  144 => 28,  141 => 27,  138 => 26,  133 => 25,  131 => 24,  127 => 22,  121 => 21,  118 => 20,  112 => 18,  106 => 16,  103 => 15,  98 => 14,  96 => 13,  90 => 9,  81 => 8,  63 => 7,  52 => 1,  50 => 6,  48 => 5,  46 => 4,  44 => 3,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"WebBundle::layout.html.twig\" %}
{% set subtitle =  settings.subtitle %}
{% set og_description =  settings.sitedescription %}
{% set og_type =  \"website\" %}
{% set og_image =  \"null\" %}
{% set keywords =  settings.sitekeywords %}
{% block title %}Início{% endblock %}
{% block body %}
\t<div class=\"row content-section\">
\t\t<div class=\"col-sm-12 col-md-12\" >
\t\t\t<div id=\"myCarousel\" class=\"carousel slide w-100\" data-ride=\"carousel\">
\t\t\t\t<ol class=\"carousel-indicators float-right\">
\t\t\t\t\t{% set index = 0 %}
\t\t\t\t\t{% for slide in slides %}
\t\t\t\t\t\t{% if index == 0 %}
\t\t\t\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"{{index}}\" class=\"active\"></li>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"{{index}}\" ></li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% set index = index + 1 %}
\t\t\t\t\t{% endfor %}
\t\t\t\t</ol>
\t\t\t\t<div class=\"carousel-inner w-100\" role=\"listbox\">
\t\t\t\t\t{% set fist = true %}
\t\t\t\t\t{% for slide in slides %}
\t\t\t\t\t\t{% if fist %}
\t\t\t\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t\t\t{% set fist = false %}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<div class=\"col-xxl-5 col-lg-8 col-md-12\">
\t\t\t\t\t\t\t<img height=\"370\" width=\"750\" class=\"img-fluid\" src=\"{{asset(slide.media.link|imagine_filter('slide_thumb_web'))}}\">
\t\t\t\t\t\t\t{% if slide.type == 4 %}
\t\t\t\t\t\t\t\t{% if slide.poster.type == \"movie\" %}
\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"wep_movie_view\",{id : slide.poster.id, slug : slide.poster.slug})}}\" class=\"carousel-detail\">
\t\t\t\t\t\t\t\t{% elseif slide.poster.type == \"serie\" %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"wep_serie_view\",{id : slide.poster.id, slug : slide.poster.slug})}}\" class=\"carousel-detail\">
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<h3>{{slide.clear}} <span><i class=\"fa fa-star\"></i> {{slide.poster.imdb}}/10</span></h3>
\t\t\t\t\t\t\t\t\t<p>{{ slide.poster.description|length > 180 ? slide.poster.description|slice(0, 180) ~ '...' : slide.poster.description  }}</p>
\t\t\t\t\t\t\t\t\t<button ><i class=\"fa fa-play\"></i> <span>Assistir<span></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% elseif slide.type == 3 %}
\t\t\t\t\t\t\t\t<a href=\"{{path(\"wep_channel_view\",{id : slide.channel.id, slug : slide.channel.slug})}}\"  class=\"carousel-detail\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h3>{{slide.clear}}</h3>
\t\t\t\t\t\t\t\t\t\t<p>{{slide.channel.description|length > 180 ? slide.channel.description|slice(0, 180) ~ '...' : slide.channel.description}}</p>
\t\t\t\t\t\t\t\t\t\t<button ><i class=\"fa fa-play\"></i> <span>Assistir<span></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% elseif slide.type == 1 %}
\t\t\t\t\t\t\t\t<a href=\"{{slide.url}}\"  class=\"carousel-detail\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h3>{{slide.clear}}</h3>
\t\t\t\t\t\t\t\t\t\t<button ><i class=\"fas fa-globe\"></i> <span>Visit Now<span></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% elseif slide.type == 5 %}
\t\t\t\t\t\t\t\t<a href=\"{{path(\"wep_poster_filter\",{genre : slide.genre.title, order : \"newest\"})}}\"  class=\"carousel-detail\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h3>{{slide.clear}}</h3>
\t\t\t\t\t\t\t\t\t\t<button ><i class=\"fas fa-stream\"></i> <span>Explore Now<span></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% elseif slide.type == 2 %}
\t\t\t\t\t\t\t\t<a href=\"{{path(\"wep_channel_index\",{category : slide.category.title,country: \"all\", order : \"newest\"})}}\"  class=\"carousel-detail\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<h3>{{slide.clear}}</h3>
\t\t\t\t\t\t\t\t\t\t<button ><i class=\"fas fa-stream\"></i> <span>Explore Now<span></button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% if settings.homebannertype == \"image\"%}
\t\t\t\t<div class=\"col-sm-12 col-md-12 ads-element\">
\t\t\t\t\t<img src=\"{{settings.homebanner}}\">
\t\t\t\t</div>
\t\t\t{% elseif settings.homebannertype ==\"code\" %}
\t\t\t\t<div class=\"col-sm-12 col-md-12\">
\t\t\t\t\t{{settings.homebanner|raw}}
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t<div class=\"col-sm-12 col-md-12 \">
\t\t\t\t<a href=\"{{path(\"wep_channel_index\",{country:\"all\",category: \"all\",order:\"views\"})}}\" class=\"title-more\">
\t\t\t\t\t<span>Canais em Destaque</span>
\t\t\t\t\t<i class=\"fa fa-th float-right\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"flix-carousel\" >
\t\t\t\t<button  class=\"prev_btn\"><i class=\"fa fa-chevron-left\"></i></button>
\t\t\t\t<button  class=\"next_btn\"><i class=\"fa fa-chevron-right\"></i></button>
\t\t\t\t<div class=\"flix-scroll-x\">
\t\t\t\t\t{% for channel in channels %}
\t\t\t\t\t\t{{ include('WebBundle:Channel:channel.html.twig',{poster:channel}) }}
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-12 col-md-12 \">
\t\t\t\t<a href=\"{{path(\"wep_actor_index\")}}\" class=\"title-more\">
\t\t\t\t\t<span>Estrelas Populares</span>
\t\t\t\t\t<i class=\"fa fa-th float-right\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"flix-carousel\" >
\t\t\t\t<button  class=\"prev_btn\"><i class=\"fa fa-chevron-left\"></i></button>
\t\t\t\t<button  class=\"next_btn\"><i class=\"fa fa-chevron-right\"></i></button>
\t\t\t\t<div class=\"flix-scroll-x\">
\t\t\t\t\t{% for actor in actors %}
\t\t\t\t\t\t{{ include('WebBundle:Actor:actor.html.twig',{actor:actor}) }}
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-12 col-md-12 \">
\t\t\t\t<a href=\"{{path(\"wep_poster_filter\",{genre: \"all\",order:\"rating\"})}}\" class=\"title-more\">
\t\t\t\t\t<span>Avaliados Recentemente</span>
\t\t\t\t\t<i class=\"fa fa-th float-right\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"flix-carousel\" >
\t\t\t\t<button  class=\"prev_btn\"><i class=\"fa fa-chevron-left\"></i></button>
\t\t\t\t<button  class=\"next_btn\"><i class=\"fa fa-chevron-right\"></i></button>
\t\t\t\t<div class=\"flix-scroll-x\">
\t\t\t\t\t{% for poster in bestrated %}
\t\t\t\t\t\t{% if poster.type == \"movie\" %}
\t\t\t\t\t\t\t{{ include('WebBundle:Movie:movie.html.twig',{poster:poster}) }}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{{ include('WebBundle:Serie:serie.html.twig',{poster:poster}) }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-sm-12 col-md-12 \">
\t\t\t\t<a href=\"{{path(\"wep_poster_filter\",{genre: \"all\",order:\"views\"})}}\" class=\"title-more\">
\t\t\t\t\t<span>Popular</span>
\t\t\t\t\t<i class=\"fa fa-th float-right\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"flix-carousel\" >
\t\t\t\t<button  class=\"prev_btn\"><i class=\"fa fa-chevron-left\"></i></button>
\t\t\t\t<button  class=\"next_btn\"><i class=\"fa fa-chevron-right\"></i></button>
\t\t\t\t<div class=\"flix-scroll-x\">
\t\t\t\t\t{% for poster in popular %}
\t\t\t\t\t\t{% if poster.type == \"movie\" %}
\t\t\t\t\t\t\t{{ include('WebBundle:Movie:movie.html.twig',{poster:poster}) }}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{{ include('WebBundle:Serie:serie.html.twig',{poster:poster}) }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% for genre in genres %}
\t\t\t\t<div class=\"col-sm-12 col-md-12 \">
\t\t\t\t\t<a href=\"{{path(\"wep_poster_filter\",{genre: genre.title,order:\"newest\"})}}\" class=\"title-more\">
\t\t\t\t\t\t<span>{{genre.title}}</span>
\t\t\t\t\t\t<i class=\"fa fa-th float-right\"></i>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"flix-carousel\" >
\t\t\t\t\t<button  class=\"prev_btn\"><i class=\"fa fa-chevron-left\"></i></button>
\t\t\t\t\t<button  class=\"next_btn\"><i class=\"fa fa-chevron-right\"></i></button>
\t\t\t\t\t<div class=\"flix-scroll-x\">
\t\t\t\t\t{% set max = 1 %}
\t\t\t\t\t{% for poster in genre.posters %}
\t\t\t\t\t\t{% if poster.enabled == true %}
\t\t\t\t\t\t\t{% if max < 16 %}
\t\t\t\t\t\t\t\t{% if poster.type == \"movie\" %}
\t\t\t\t\t\t\t\t\t{{ include('WebBundle:Movie:movie.html.twig',{poster:poster}) }}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t{{ include('WebBundle:Serie:serie.html.twig',{poster:poster}) }}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% set max = max+1 %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t{% endblock%}", "WebBundle:Home:index.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Home/index.html.twig");
    }
}
