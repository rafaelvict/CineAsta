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
class __TwigTemplate_df7961038cdc98162ed64e02492720f9851480d5cf07de26484c9c17933b1528 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Home:sitemap.xml.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Home:sitemap.xml.twig"));

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
        $context['_seq'] = twig_ensure_traversable(($context["genres"] ?? $this->getContext($context, "genres")));
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
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
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
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? $this->getContext($context, "countries")));
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
        $context['_seq'] = twig_ensure_traversable(($context["posters"] ?? $this->getContext($context, "posters")));
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
        $context['_seq'] = twig_ensure_traversable(($context["channels"] ?? $this->getContext($context, "channels")));
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  194 => 65,  183 => 62,  179 => 61,  176 => 60,  172 => 59,  161 => 56,  157 => 55,  154 => 54,  150 => 53,  141 => 50,  138 => 49,  134 => 48,  125 => 45,  122 => 44,  118 => 43,  109 => 40,  106 => 39,  102 => 38,  97 => 36,  91 => 33,  85 => 30,  79 => 27,  73 => 24,  67 => 21,  61 => 18,  55 => 15,  48 => 11,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset
      xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\"
      xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
      xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">
<!-- created with Free Online Sitemap Generator www.xml-sitemaps.com -->


<url>
  <loc>{{url(\"web_home_index\")}}</loc>
  <priority>1.00</priority>
</url>
<url>
  <loc>{{url(\"wep_home_privacy\")}}</loc>
</url>
<url>
  <loc>{{url(\"wep_home_contact\")}}</loc>
</url>
<url>
  <loc>{{url(\"wep_home_refund\")}}</loc>
</url>
<url>
  <loc>{{url(\"wep_home_faq\")}}</loc>
</url>
<url>
  <loc>{{ url(\"wep_channel_index\",{\"category\":\"all\",\"country\":\"all\",\"order\":\"newest\"})}}</loc>
</url>
<url>
  <loc>{{ url(\"wep_movie_index\",{\"genre\":\"all\",\"order\":\"newest\"})}}</loc>
</url>
<url>
  <loc>{{ url(\"wep_serie_index\",{\"genre\":\"all\",\"order\":\"newest\"})}}</loc>
</url>
<url>
  <loc>{{url(\"wep_subscription_subscribe\")}}</loc>
</url>
{% for genre in genres %}
<url>
  <loc>{{ url(\"wep_poster_filter\",{\"genre\":genre.title,\"order\":\"newest\"})}}</loc>
</url>
{% endfor %}
{% for category in categories %}
<url>
  <loc>{{ url(\"wep_channel_index\",{\"category\":category.title,\"country\":\"all\",\"order\":\"newest\"})}}</loc>
</url>
{% endfor %}
{% for country in countries %}
<url>
  <loc>{{ url(\"wep_channel_index\",{\"country\":country.title,\"category\":\"all\",\"order\":\"newest\"})}}</loc>
</url>
{% endfor %}
{% for poster in posters %}
<url>
  <loc>{{ (poster.type == \"movie\")? url(\"wep_movie_view\",{\"id\":poster.id,\"slug\":poster.slug}):url(\"wep_serie_view\",{\"id\":poster.id,\"slug\":poster.slug})}}</loc>
  <lastmod>{{poster.created|date(\"Y-m-d\")}}T{{poster.created|date(\"H:i:s\")}}+00:00</lastmod>
</url>
{% endfor %}
{% for channel in channels %}
<url>
  <loc>{{ url(\"wep_channel_view\",{\"id\":channel.id,\"slug\":channel.slug})}}</loc>
  <lastmod>{{channel.created|date(\"Y-m-d\")}}T{{channel.created|date(\"H:i:s\")}}+00:00</lastmod>
</url>
{% endfor %}

</urlset>", "WebBundle:Home:sitemap.xml.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Home/sitemap.xml.twig");
    }
}
