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

/* WebBundle:Home:sitemap.xml.twig */
class __TwigTemplate_0f29d534bad67305b4dc337a0ed5fdcc20aecaffc20351ea0db46521c93c3209 extends \Twig\Template
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
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset
      xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\"
      xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
      xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">
<!-- created with Free Online Sitemap Generator www.xml-sitemaps.com -->


<url>
  <loc>";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("web_home_index");
        echo "</loc>
  <priority>1.00</priority>
</url>
<url>
  <loc>";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("wep_home_privacy");
        echo "</loc>
</url>
<url>
  <loc>";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("wep_home_contact");
        echo "</loc>
</url>
<url>
  <loc>";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("wep_home_refund");
        echo "</loc>
</url>
<url>
  <loc>";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("wep_home_faq");
        echo "</loc>
</url>
<url>
  <loc>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("wep_channel_index", ["category" => "all", "country" => "all", "order" => "newest"]), "html", null, true);
        echo "</loc>
</url>
<url>
  <loc>";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("wep_movie_index", ["genre" => "all", "order" => "newest"]), "html", null, true);
        echo "</loc>
</url>
<url>
  <loc>";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("wep_serie_index", ["genre" => "all", "order" => "newest"]), "html", null, true);
        echo "</loc>
</url>
<url>
  <loc>";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("wep_subscription_subscribe");
        echo "</loc>
</url>
";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["genres"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 39
            echo "<url>
  <loc>";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("wep_poster_filter", ["genre" => $this->getAttribute($context["genre"], "title", []), "order" => "newest"]), "html", null, true);
            echo "</loc>
</url>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 44
            echo "<url>
  <loc>";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("wep_channel_index", ["category" => $this->getAttribute($context["category"], "title", []), "country" => "all", "order" => "newest"]), "html", null, true);
            echo "</loc>
</url>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 49
            echo "<url>
  <loc>";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("wep_channel_index", ["country" => $this->getAttribute($context["country"], "title", []), "category" => "all", "order" => "newest"]), "html", null, true);
            echo "</loc>
</url>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["poster"]) {
            // line 54
            echo "<url>
  <loc>";
            // line 55
            echo twig_escape_filter($this->env, ((($this->getAttribute($context["poster"], "type", []) == "movie")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("wep_movie_view", ["id" => $this->getAttribute($context["poster"], "id", []), "slug" => $this->getAttribute($context["poster"], "slug", [])])) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("wep_serie_view", ["id" => $this->getAttribute($context["poster"], "id", []), "slug" => $this->getAttribute($context["poster"], "slug", [])]))), "html", null, true);
            echo "</loc>
  <lastmod>";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["poster"], "created", []), "Y-m-d"), "html", null, true);
            echo "T";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["poster"], "created", []), "H:i:s"), "html", null, true);
            echo "+00:00</lastmod>
</url>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poster'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["channels"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["channel"]) {
            // line 60
            echo "<url>
  <loc>";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("wep_channel_view", ["id" => $this->getAttribute($context["channel"], "id", []), "slug" => $this->getAttribute($context["channel"], "slug", [])]), "html", null, true);
            echo "</loc>
  <lastmod>";
            // line 62
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["channel"], "created", []), "Y-m-d"), "html", null, true);
            echo "T";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["channel"], "created", []), "H:i:s"), "html", null, true);
            echo "+00:00</lastmod>
</url>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['channel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
</urlset>";
    }

    public function getTemplateName()
    {
        return "WebBundle:Home:sitemap.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 65,  177 => 62,  173 => 61,  170 => 60,  166 => 59,  155 => 56,  151 => 55,  148 => 54,  144 => 53,  135 => 50,  132 => 49,  128 => 48,  119 => 45,  116 => 44,  112 => 43,  103 => 40,  100 => 39,  96 => 38,  91 => 36,  85 => 33,  79 => 30,  73 => 27,  67 => 24,  61 => 21,  55 => 18,  49 => 15,  42 => 11,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Home:sitemap.xml.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Home/sitemap.xml.twig");
    }
}
