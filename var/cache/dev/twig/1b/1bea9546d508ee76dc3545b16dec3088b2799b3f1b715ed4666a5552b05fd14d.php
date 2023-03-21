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

/* AppBundle:Version:index.html.twig */
class __TwigTemplate_cc72f7d3adf2c040b8a998ed00315c43ee8f9ff6bf5ef204c2dba847ecf52aff extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Version:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Version:index.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Version:index.html.twig", 1);
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
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_version_index");
        echo "\" class=\"btn  btn-lg btn-warning btn-block\"><i class=\"material-icons\" style=\"font-size: 30px;\">refresh</i> Refresh</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<a class=\"btn btn btn-lg btn-yellow btn-block\"><i class=\"material-icons\" style=\"font-size: 30px;\">flag</i> ";
        // line 11
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["versions"] ?? $this->getContext($context, "versions"))), "html", null, true);
        echo " versions</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_version_add");
        echo "\" class=\"btn btn-rose btn-lg pull-right add-button btn-block\" title=\"\"><i class=\"material-icons\" style=\"font-size: 30px;\">add_box</i> NEW VERSION </a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"card\">
\t\t\t    <div class=\"card-content\">
\t\t\t        <div class=\"table-responsive\">
\t\t\t            <table class=\"table\" width=\"100%\">
\t\t\t                <thead class=\"text-primary\">
\t\t\t                    <th>ID</th>
\t\t\t                    <th>Version title</th>
\t\t\t                    <th>Version code</th>
\t\t\t                    <th>Status</th>
\t\t\t                    <th width=\"300px\">Action</th>
\t\t\t                </tr></thead>
\t\t\t                <tbody>
\t\t\t                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["versions"] ?? $this->getContext($context, "versions")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
            // line 30
            echo "\t\t\t                    <tr>
\t\t\t                        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["version"], "id", []), "html", null, true);
            echo "</td>
\t\t\t                        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["version"], "title", []), "html", null, true);
            echo "</td>
\t\t\t                        <td><span  > ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["version"], "code", []), "html", null, true);
            echo " </span></td>
\t\t\t                        <td>
\t\t\t                        ";
            // line 35
            if ($this->getAttribute($context["version"], "enabled", [])) {
                // line 36
                echo "\t\t\t                            <span class=\"label label-success\">Enabled</span>

\t\t\t                        ";
            } else {
                // line 39
                echo "\t\t\t                            <span class=\"label label-danger\">Disabled</span>

\t\t\t                        ";
            }
            // line 42
            echo "\t\t\t                        </td>
\t\t\t                        <td>
\t\t                                <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_version_edit", ["id" => $this->getAttribute($context["version"], "id", [])]), "html", null, true);
            echo "\" rel=\"tooltip\" data-placement=\"left\" class=\" btn btn-primary btn-xs btn-round\" data-original-title=\"Edit\">
\t\t                                    <i class=\"material-icons\">edit</i>
\t\t                                </a>
\t\t                                <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_version_delete", ["id" => $this->getAttribute($context["version"], "id", [])]), "html", null, true);
            echo "\" rel=\"tooltip\" data-placement=\"left\" class=\" btn btn-danger btn-xs btn-round\" data-original-title=\"Delete\">
\t\t                                    <i class=\"material-icons\">delete</i>
\t\t                                </a>
\t\t\t                        </td>
\t\t\t                    </tr>
\t\t\t                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            echo "\t\t\t\t\t\t          <tr>
\t\t\t\t\t\t\t          <td colspan=\"5\">
\t\t\t\t\t\t\t\t          <br>
\t\t\t\t\t\t\t\t          <br>
\t\t\t\t\t\t\t\t          <center><img src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg_empty.png"), "html", null, true);
            echo "\"  style=\"width: auto !important;\" =\"\"></center>
\t\t\t\t\t\t\t              <br>
\t\t\t\t\t\t\t              <br>
\t\t\t\t\t\t\t          </td>
\t\t\t\t\t\t          </tr>\t
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "\t\t\t                </tbody>
\t\t\t            </table>

\t\t\t        </div>
\t    \t\t</div>

\t    \t</div>
\t    </div>
\t</div>
                            
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Version:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 63,  157 => 57,  151 => 53,  140 => 47,  134 => 44,  130 => 42,  125 => 39,  120 => 36,  118 => 35,  113 => 33,  109 => 32,  105 => 31,  102 => 30,  97 => 29,  79 => 14,  73 => 11,  67 => 8,  60 => 3,  51 => 2,  29 => 1,);
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
\t\t\t\t\t<a href=\"{{path(\"app_version_index\")}}\" class=\"btn  btn-lg btn-warning btn-block\"><i class=\"material-icons\" style=\"font-size: 30px;\">refresh</i> Refresh</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<a class=\"btn btn btn-lg btn-yellow btn-block\"><i class=\"material-icons\" style=\"font-size: 30px;\">flag</i> {{versions|length}} versions</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<a href=\"{{path(\"app_version_add\")}}\" class=\"btn btn-rose btn-lg pull-right add-button btn-block\" title=\"\"><i class=\"material-icons\" style=\"font-size: 30px;\">add_box</i> NEW VERSION </a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"card\">
\t\t\t    <div class=\"card-content\">
\t\t\t        <div class=\"table-responsive\">
\t\t\t            <table class=\"table\" width=\"100%\">
\t\t\t                <thead class=\"text-primary\">
\t\t\t                    <th>ID</th>
\t\t\t                    <th>Version title</th>
\t\t\t                    <th>Version code</th>
\t\t\t                    <th>Status</th>
\t\t\t                    <th width=\"300px\">Action</th>
\t\t\t                </tr></thead>
\t\t\t                <tbody>
\t\t\t                {% for version in versions %}
\t\t\t                    <tr>
\t\t\t                        <td>{{version.id}}</td>
\t\t\t                        <td>{{version.title}}</td>
\t\t\t                        <td><span  > {{version.code}} </span></td>
\t\t\t                        <td>
\t\t\t                        {% if version.enabled %}
\t\t\t                            <span class=\"label label-success\">Enabled</span>

\t\t\t                        {% else %}
\t\t\t                            <span class=\"label label-danger\">Disabled</span>

\t\t\t                        {% endif %}
\t\t\t                        </td>
\t\t\t                        <td>
\t\t                                <a href=\"{{path(\"app_version_edit\",{\"id\":version.id})}}\" rel=\"tooltip\" data-placement=\"left\" class=\" btn btn-primary btn-xs btn-round\" data-original-title=\"Edit\">
\t\t                                    <i class=\"material-icons\">edit</i>
\t\t                                </a>
\t\t                                <a href=\"{{path(\"app_version_delete\",{\"id\":version.id})}}\" rel=\"tooltip\" data-placement=\"left\" class=\" btn btn-danger btn-xs btn-round\" data-original-title=\"Delete\">
\t\t                                    <i class=\"material-icons\">delete</i>
\t\t                                </a>
\t\t\t                        </td>
\t\t\t                    </tr>
\t\t\t                    {% else %}
\t\t\t\t\t\t          <tr>
\t\t\t\t\t\t\t          <td colspan=\"5\">
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

\t    \t</div>
\t    </div>
\t</div>
                            
{% endblock%}
", "AppBundle:Version:index.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Version/index.html.twig");
    }
}
