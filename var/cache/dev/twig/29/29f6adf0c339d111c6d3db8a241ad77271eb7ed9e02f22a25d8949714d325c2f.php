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

/* WebBundle:Movie:downloads.html.twig */
class __TwigTemplate_638f599555bcaa3fae4ecd3c9d9f83d931971835dda8ad69a5e85706f9e10fe1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Movie:downloads.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WebBundle:Movie:downloads.html.twig"));

        // line 1
        echo "<div class=\" downloads-table\" >
\t<div class=\"table-responsive \">
\t\t";
        // line 3
        if ((twig_length_filter($this->env, ($context["sources"] ?? $this->getContext($context, "sources"))) == 0)) {
            // line 4
            echo "\t\t\t<div class=\"empty-box\">
\t\t\t\t<img style=\"width: 150px;height: 135px;\" src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("web/img/empty.svg"), "html", null, true);
            echo "\">
\t\t\t\t<h3>Lista vazia</h3>
\t\t\t</div>
\t\t";
        } else {
            // line 9
            echo "\t\t\t<table class=\"table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\">Release</th>
\t\t\t\t\t\t<th scope=\"col\" >Size</th>
\t\t\t\t\t\t<th scope=\"col\" width=\"130px;\" >Quality</th>
\t\t\t\t\t\t<th scope=\"col\" width=\"140px;\">Download</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sources"] ?? $this->getContext($context, "sources")));
            foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
                // line 20
                echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>";
                // line 21
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["source"], "title", [])), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "size", []), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td><label class=\"badge badge-light\">";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "quality", []), "html", null, true);
                echo "</label></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
                // line 25
                if ((($this->getAttribute($context["source"], "premium", []) == 1) || ($this->getAttribute($context["source"], "premium", []) == 3))) {
                    // line 26
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($this->getAttribute($context["source"], "type", []) == "file")) {
                        // line 27
                        echo "\t\t\t\t\t\t\t\t\t\t<a ";
                        if ($this->getAttribute($context["source"], "external", [])) {
                            echo " target=\"_blank\" ";
                        }
                        echo "  href=\"";
                        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "scheme", []) . "://") . $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "httpHost", [])) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["source"], "media", []), "link", []))), "html", null, true);
                        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-download\"></i> Download</a>
\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 29
                        echo "\t\t\t\t\t\t\t\t\t\t<a ";
                        if ($this->getAttribute($context["source"], "external", [])) {
                            echo " target=\"_blank\" ";
                        }
                        echo " href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "url", []), "html", null, true);
                        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-download\"></i> Download</a>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 31
                    echo "\t\t\t\t\t\t\t\t";
                } else {
                    // line 32
                    echo "\t\t\t\t\t\t\t\t\t";
                    if (($context["premium"] ?? $this->getContext($context, "premium"))) {
                        // line 33
                        echo "\t\t\t\t\t\t\t\t\t\t";
                        if (($this->getAttribute($context["source"], "type", []) == "file")) {
                            // line 34
                            echo "\t\t\t\t\t\t\t\t\t\t\t<a ";
                            if ($this->getAttribute($context["source"], "external", [])) {
                                echo " target=\"_blank\" ";
                            }
                            echo "  href=\"";
                            echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "scheme", []) . "://") . $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "httpHost", [])) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["source"], "media", []), "link", []))), "html", null, true);
                            echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-download\"></i> Download</a>
\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 36
                            echo "\t\t\t\t\t\t\t\t\t\t\t<a ";
                            if ($this->getAttribute($context["source"], "external", [])) {
                                echo " target=\"_blank\" ";
                            }
                            echo " href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "url", []), "html", null, true);
                            echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-download\"></i> Download</a>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 38
                        echo "\t\t\t\t\t\t\t\t\t";
                    } else {
                        // line 39
                        echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("wep_subscription_subscribe");
                        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-star\"></i> Assinaturas !</a>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 41
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 42
                echo "\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t";
        }
        // line 48
        echo "\t</div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "WebBundle:Movie:downloads.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 48,  158 => 45,  150 => 42,  147 => 41,  141 => 39,  138 => 38,  128 => 36,  118 => 34,  115 => 33,  112 => 32,  109 => 31,  99 => 29,  89 => 27,  86 => 26,  84 => 25,  79 => 23,  75 => 22,  71 => 21,  68 => 20,  64 => 19,  52 => 9,  45 => 5,  42 => 4,  40 => 3,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\" downloads-table\" >
\t<div class=\"table-responsive \">
\t\t{% if sources|length == 0 %}
\t\t\t<div class=\"empty-box\">
\t\t\t\t<img style=\"width: 150px;height: 135px;\" src=\"{{asset('web/img/empty.svg')}}\">
\t\t\t\t<h3>Lista vazia</h3>
\t\t\t</div>
\t\t{% else %}
\t\t\t<table class=\"table\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\">Release</th>
\t\t\t\t\t\t<th scope=\"col\" >Size</th>
\t\t\t\t\t\t<th scope=\"col\" width=\"130px;\" >Quality</th>
\t\t\t\t\t\t<th scope=\"col\" width=\"140px;\">Download</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for source in sources %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>{{source.title|capitalize}}</td>
\t\t\t\t\t\t\t<td>{{source.size}}</td>
\t\t\t\t\t\t\t<td><label class=\"badge badge-light\">{{source.quality}}</label></td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t{% if source.premium == 1 or source.premium == 3 %}
\t\t\t\t\t\t\t\t\t{% if source.type == \"file\" %}
\t\t\t\t\t\t\t\t\t\t<a {% if source.external %} target=\"_blank\" {% endif %}  href=\"{{app.request.scheme ~'://' ~ app.request.httpHost ~ asset(source.media.link)}}\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-download\"></i> Download</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<a {% if source.external %} target=\"_blank\" {% endif %} href=\"{{source.url}}\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-download\"></i> Download</a>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t{% if premium %}
\t\t\t\t\t\t\t\t\t\t{% if source.type == \"file\" %}
\t\t\t\t\t\t\t\t\t\t\t<a {% if source.external %} target=\"_blank\" {% endif %}  href=\"{{app.request.scheme ~'://' ~ app.request.httpHost ~ asset(source.media.link)}}\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-download\"></i> Download</a>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<a {% if source.external %} target=\"_blank\" {% endif %} href=\"{{source.url}}\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-download\"></i> Download</a>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{path(\"wep_subscription_subscribe\")}}\" class=\"btn btn-primary btn-sm\"><i class=\"fas fa-star\"></i> Assinaturas !</a>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t{% endif %}
\t</div>
</div>", "WebBundle:Movie:downloads.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Movie/downloads.html.twig");
    }
}
