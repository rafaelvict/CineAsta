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

/* WebBundle:Actor:view.html.twig */
class __TwigTemplate_ac543b60b81060e39a9edd04e0f2dd7262fa46245a0848f70e663c05b7871558 extends \Twig\Template
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
        // line 2
        $context["subtitle"] = $this->getAttribute(($context["actor"] ?? null), "name", []);
        // line 3
        $context["og_description"] = $this->getAttribute(($context["actor"] ?? null), "bio", []);
        // line 4
        $context["og_type"] = "profile";
        // line 5
        $context["og_image"] = $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["actor"] ?? null), "media", []), "link", [])), "actor_thumb");
        // line 6
        $context["keywords"] = twig_replace_filter($this->getAttribute(($context["actor"] ?? null), "name", []), " ", ",");
        // line 1
        $this->parent = $this->loadTemplate("WebBundle::layout.html.twig", "WebBundle:Actor:view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, $this->getAttribute(($context["actor"] ?? null), "name", []), "html", null, true);
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        // line 9
        echo "\t<div class=\"row content-section\">
\t\t<div class=\"col-md-12\" >
\t\t\t<div class=\"actor-header-bg\" style=\" background-image: url('";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["actor"] ?? null), "media", []), "link", [])), "html", null, true);
        echo "');\">
\t\t\t\t<div class=\"movie-header actor-header\">
\t\t\t\t\t<div class=\"movie-title\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["actor"] ?? null), "name", []), "html", null, true);
        echo "</div>
\t\t\t\t\t<div class=\"movie-infos\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["actor"] ?? null), "type", []), "html", null, true);
        echo " • ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["actor"] ?? null), "born", []), "html", null, true);
        echo " • ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["actor"] ?? null), "height", []), "html", null, true);
        echo "</div>
\t\t\t\t</div>
\t\t\t\t<img class=\"actor-logo\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["actor"] ?? null), "media", []), "link", [])), "actor_thumb_web"), "html", null, true);
        echo "\">
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-12 padding-top-20\" >
\t\t\t<div class=\"movie-section-title\">Biografia</div>
\t\t</div>
\t\t<div class=\"col-md-12\" >
\t\t\t<p>
\t\t\t\t";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["actor"] ?? null), "bio", []), "html", null, true);
        echo "
\t\t\t</p>
\t\t</div>
\t\t";
        // line 27
        if ((twig_length_filter($this->env, ($context["related_posters"] ?? null)) != 0)) {
            // line 28
            echo "\t\t\t<div class=\"col-md-12 padding-top-20\" >
\t\t\t\t<div class=\"movie-section-title\">Filmografia</div>
\t\t\t</div>
\t\t\t<div class=\"flix-carousel\" >
\t\t\t\t<button  class=\"prev_btn\"><i class=\"fa fa-chevron-left\"></i></button>
\t\t\t\t<button  class=\"next_btn\"><i class=\"fa fa-chevron-right\"></i></button>
\t\t\t\t<div class=\"flix-scroll-x\">
\t\t\t\t\t";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["related_posters"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["related_poster"]) {
                // line 36
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute($context["related_poster"], "type", []) == "movie")) {
                    // line 37
                    echo "\t\t\t\t\t\t\t";
                    echo twig_include($this->env, $context, "WebBundle:Movie:movie.html.twig", ["poster" => $context["related_poster"]]);
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 39
                    echo "\t\t\t\t\t\t\t";
                    echo twig_include($this->env, $context, "WebBundle:Serie:serie.html.twig", ["poster" => $context["related_poster"]]);
                    echo "
\t\t\t\t\t\t";
                }
                // line 41
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['related_poster'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 46
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "WebBundle:Actor:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 46,  156 => 42,  142 => 41,  136 => 39,  130 => 37,  127 => 36,  110 => 35,  101 => 28,  99 => 27,  93 => 24,  82 => 16,  73 => 14,  69 => 13,  64 => 11,  60 => 9,  57 => 8,  51 => 7,  46 => 1,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Actor:view.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Actor/view.html.twig");
    }
}
