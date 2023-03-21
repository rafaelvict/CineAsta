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

/* AppBundle:Report:index.html.twig */
class __TwigTemplate_087981f24647d35a07ca6fee77838ec375b68c3b20852e3993067d7a70a78f37 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Report:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Report:index.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Report:index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<div class=\"container-fluid\">
    <div class=\"row\">
\t\t<div class=\"col-md-12\">

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div style=\"padding-left: 0px;\">
\t\t\t\t\t\t<div class=\"card card-stats\">
\t\t\t\t\t\t\t<div class=\"card-header\" data-background-color=\"rose\">
\t\t\t\t\t\t\t\t<i class=\"material-icons\">messages</i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t<p class=\"category\">report messages</p>
\t\t\t\t\t\t\t\t<h3 class=\"card-title\">";
        // line 17
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["reports"] ?? $this->getContext($context, "reports"))), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
       \t\t</div>
\t\t\t<div class=\"card\">
\t\t\t    <div class=\"card-content\">
\t\t\t        <div class=\"table-responsive\">
\t\t\t            <table class=\"table\" width=\"100%\">
\t\t\t                <thead class=\"text-primary\">
\t\t\t                \t<tr>
\t\t\t                    <th>#</th>
\t\t\t                    <th>Message</th>
\t\t\t                    <th>Date</th>
\t\t\t                    <th width=\"160px\">Action</th>
\t\t\t                \t</tr>
\t\t\t                </thead>
\t\t\t                <tbody>
\t\t\t                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
            // line 37
            echo "\t\t\t                    <tr>
\t\t\t                        <td><img src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["report"], "wallpaper", []), "media", []), "link", [])), "section_thumb"), "html", null, true);
            echo "\" style=\"width:70px; height:70px;    border-radius: 5px;\" ></td>
\t\t\t                        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["report"], "message", []), "html", null, true);
            echo "</td>
\t\t\t                        <td>";
            // line 40
            echo $this->env->getExtension('Knp\Bundle\TimeBundle\Twig\Extension\TimeExtension')->diff($this->getAttribute($context["report"], "created", []));
            echo "</td>
\t\t\t                        <td>
\t\t                                <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_wallpaper_delete", ["id" => $this->getAttribute($this->getAttribute($context["report"], "wallpaper", []), "id", [])]), "html", null, true);
            echo "\" rel=\"tooltip\" data-placement=\"left\" class=\" btn btn-primary btn-xs btn-round\" data-original-title=\"Delete wallpaper\">
\t\t                                    <i class=\"material-icons\">delete</i>
\t\t                                </a>
\t\t                                <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_report_delete", ["id" => $this->getAttribute($context["report"], "id", [])]), "html", null, true);
            echo "\" rel=\"tooltip\" data-placement=\"left\" class=\" btn btn-danger btn-xs btn-round\" data-original-title=\"Delete report\">
\t\t                                    <i class=\"material-icons\">delete</i>
\t\t                                </a>
\t\t\t                        </td>
\t\t\t                    </tr>
\t\t\t                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            echo "\t\t\t\t\t\t          <tr>
\t\t\t\t\t\t\t          <td colspan=\"4\">
\t\t\t\t\t\t\t\t          <br>
\t\t\t\t\t\t\t\t          <br>
\t\t\t\t\t\t\t\t          <center><img src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg_empty.png"), "html", null, true);
            echo "\"  style=\"width: auto !important;\" =\"\"></center>
\t\t\t\t\t\t\t              <br>
\t\t\t\t\t\t\t              <br>
\t\t\t\t\t\t\t          </td>
\t\t\t\t\t\t          </tr>\t
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "\t\t\t                </tbody>
\t\t\t            </table>

\t\t\t        </div>
\t    \t\t</div>
\t\t\t<div class=\" pull-right\">
\t\t\t\t";
        // line 67
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
\t\t\t</div>
\t    \t</div>
\t    </div>
\t</div>
                            
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Report:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 67,  154 => 61,  142 => 55,  136 => 51,  125 => 45,  119 => 42,  114 => 40,  110 => 39,  106 => 38,  103 => 37,  98 => 36,  76 => 17,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"AppBundle::layout.html.twig\" %}
{% block body%}

<div class=\"container-fluid\">
    <div class=\"row\">
\t\t<div class=\"col-md-12\">

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div style=\"padding-left: 0px;\">
\t\t\t\t\t\t<div class=\"card card-stats\">
\t\t\t\t\t\t\t<div class=\"card-header\" data-background-color=\"rose\">
\t\t\t\t\t\t\t\t<i class=\"material-icons\">messages</i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"card-content\">
\t\t\t\t\t\t\t\t<p class=\"category\">report messages</p>
\t\t\t\t\t\t\t\t<h3 class=\"card-title\">{{reports|length}}</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
       \t\t</div>
\t\t\t<div class=\"card\">
\t\t\t    <div class=\"card-content\">
\t\t\t        <div class=\"table-responsive\">
\t\t\t            <table class=\"table\" width=\"100%\">
\t\t\t                <thead class=\"text-primary\">
\t\t\t                \t<tr>
\t\t\t                    <th>#</th>
\t\t\t                    <th>Message</th>
\t\t\t                    <th>Date</th>
\t\t\t                    <th width=\"160px\">Action</th>
\t\t\t                \t</tr>
\t\t\t                </thead>
\t\t\t                <tbody>
\t\t\t                {% for report in pagination %}
\t\t\t                    <tr>
\t\t\t                        <td><img src=\"{{asset(report.wallpaper.media.link)|imagine_filter('section_thumb')}}\" style=\"width:70px; height:70px;    border-radius: 5px;\" ></td>
\t\t\t                        <td>{{report.message}}</td>
\t\t\t                        <td>{{report.created|ago()}}</td>
\t\t\t                        <td>
\t\t                                <a href=\"{{path(\"app_wallpaper_delete\",{\"id\":report.wallpaper.id})}}\" rel=\"tooltip\" data-placement=\"left\" class=\" btn btn-primary btn-xs btn-round\" data-original-title=\"Delete wallpaper\">
\t\t                                    <i class=\"material-icons\">delete</i>
\t\t                                </a>
\t\t                                <a href=\"{{path(\"app_report_delete\",{\"id\":report.id})}}\" rel=\"tooltip\" data-placement=\"left\" class=\" btn btn-danger btn-xs btn-round\" data-original-title=\"Delete report\">
\t\t                                    <i class=\"material-icons\">delete</i>
\t\t                                </a>
\t\t\t                        </td>
\t\t\t                    </tr>
\t\t\t                    {% else %}
\t\t\t\t\t\t          <tr>
\t\t\t\t\t\t\t          <td colspan=\"4\">
\t\t\t\t\t\t\t\t          <br>
\t\t\t\t\t\t\t\t          <br>
\t\t\t\t\t\t\t\t          <center><img src=\"{{asset(\"img/bg_empty.png\")}}\"  style=\"width: auto !important;\" =\"\"></center>
\t\t\t\t\t\t\t              <br>
\t\t\t\t\t\t\t              <br>
\t\t\t\t\t\t\t          </td>
\t\t\t\t\t\t          </tr>\t
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t                </tbody>
\t\t\t            </table>

\t\t\t        </div>
\t    \t\t</div>
\t\t\t<div class=\" pull-right\">
\t\t\t\t{{ knp_pagination_render(pagination) }}
\t\t\t</div>
\t    \t</div>
\t    </div>
\t</div>
                            
{% endblock%}


", "AppBundle:Report:index.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Report/index.html.twig");
    }
}
