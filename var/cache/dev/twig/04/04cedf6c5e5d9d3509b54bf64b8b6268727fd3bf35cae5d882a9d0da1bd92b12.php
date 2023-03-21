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

/* AppBundle:Channel:sources.html.twig */
class __TwigTemplate_9c0725faacf5fc9dc6136a52e8ad700c7ff4503e3479657625458ce41d62cc36 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Channel:sources.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Channel:sources.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Channel:sources.html.twig", 1);
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
      <div class=\"col-md-3\">
        <div class=\"card\">
          <div class=\"tab-moivie  tab-channel\">
            <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_channel_edit", ["id" => $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">edit</i> Edit</a>
            <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_channel_sources", ["id" => $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie-active col-md-12\"><i class=\"material-icons\">folder</i> Sources</a>
            <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_channel_comments", ["id" => $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">comment</i> Comments</a>
            <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_channel_ratings", ["id" => $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">star_half</i> Ratings</a>
            <a href=\"#\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">remove_red_eye</i> ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "viewsnumber", []), "html", null, true);
        echo " views</a>
            <a href=\"#\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">share</i> ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "sharesnumber", []), "html", null, true);
        echo " shares</a>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_channel_index");
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">arrow_back</i> Cancel</a>
          </div>
        </div>
      </div>
      <div class=\"col-md-9\">
              <div class=\"card\">
                <div class=\"card-header card-header-icon\" data-background-color=\"rose\">
                  <i class=\"material-icons\">folder</i>
                </div>
                <a  href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_source_add_channel", ["channel" => $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-success btn-xs pull-right new-subtitle-source\"><i class=\"material-icons\" style=\"font-size: 30px;\">add_box</i> New Source</a>
                <div class=\"card-content\">
                  <h4 class=\"card-title\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "title", []), "html", null, true);
        echo " Sources</h4>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-md-12\">
                  <div class=\"card\" style=\"margin: 15px 0;\">
                    <div class=\"table-responsive\">
                      <table class=\"table table-source\" width=\"100%\" >
                        <thead class=\"text-primary\">
                          <tr>
                            <th><b>Type</b></th>
                            <th><b>Url</b></th>
                            <th style=\"text-align:right\"><b>Action</b></th>
                          </tr>
                        </thead>
                        <tbody>
                          ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "sources", []));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["source"]) {
            // line 42
            echo "                            <tr>
                              <td><b>";
            // line 43
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["source"], "type", [])), "html", null, true);
            echo "  ";
            if ((($this->getAttribute($context["source"], "type", []) == "file") && ($this->getAttribute($context["source"], "media", []) != null))) {
                echo "(";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["source"], "media", []), "extension", [])), "html", null, true);
                echo ")";
            }
            echo " </b></td>
                              <td><span class=\"label label-info\" style=\"    text-transform: inherit;\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["source"], "url", []), "html", null, true);
            echo " ";
            if ((($this->getAttribute($context["source"], "type", []) == "file") && ($this->getAttribute($context["source"], "media", []) != null))) {
                echo " ";
                echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "scheme", []) . "://") . $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "httpHost", [])) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["source"], "media", []), "link", []))), "html", null, true);
            }
            echo "</span></td>
                              <td>
                                <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_source_edit_channel", ["id" => $this->getAttribute($context["source"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-success btn-xs pull-right\" ><i class=\"material-icons\">edit</i></a>
                                <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_source_delete", ["id" => $this->getAttribute($context["source"], "id", [])]), "html", null, true);
            echo "\" class=\"btn btn-rose btn-xs pull-right\"><i class=\"material-icons\">delete</i></a>
                              </td>
                            </tr>
                          ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 51
            echo "                            <tr>
                              <td colspan=\"3\">
                                <br>
                                <center><img src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg_empty.png"), "html", null, true);
            echo "\"  style=\"width: 100% !important;\" =\"\"></center>
                                <br>
                              </td>
                            </tr>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['source'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Channel:sources.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 59,  173 => 54,  168 => 51,  159 => 47,  155 => 46,  145 => 44,  135 => 43,  132 => 42,  127 => 41,  108 => 25,  103 => 23,  91 => 14,  87 => 13,  83 => 12,  79 => 11,  75 => 10,  71 => 9,  67 => 8,  60 => 3,  51 => 2,  29 => 1,);
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
      <div class=\"col-md-3\">
        <div class=\"card\">
          <div class=\"tab-moivie  tab-channel\">
            <a href=\"{{path(\"app_channel_edit\",{\"id\":channel.id})}}\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">edit</i> Edit</a>
            <a href=\"{{path(\"app_channel_sources\",{\"id\":channel.id})}}\" class=\"btn btn-tab-movie-active col-md-12\"><i class=\"material-icons\">folder</i> Sources</a>
            <a href=\"{{path(\"app_channel_comments\",{\"id\":channel.id})}}\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">comment</i> Comments</a>
            <a href=\"{{path(\"app_channel_ratings\",{\"id\":channel.id})}}\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">star_half</i> Ratings</a>
            <a href=\"#\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">remove_red_eye</i> {{channel.viewsnumber}} views</a>
            <a href=\"#\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">share</i> {{channel.sharesnumber}} shares</a>
            <a href=\"{{path(\"app_channel_index\")}}\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">arrow_back</i> Cancel</a>
          </div>
        </div>
      </div>
      <div class=\"col-md-9\">
              <div class=\"card\">
                <div class=\"card-header card-header-icon\" data-background-color=\"rose\">
                  <i class=\"material-icons\">folder</i>
                </div>
                <a  href=\"{{path(\"app_source_add_channel\",{\"channel\":channel.id})}}\" class=\"btn btn-success btn-xs pull-right new-subtitle-source\"><i class=\"material-icons\" style=\"font-size: 30px;\">add_box</i> New Source</a>
                <div class=\"card-content\">
                  <h4 class=\"card-title\">{{channel.title}} Sources</h4>
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-md-12\">
                  <div class=\"card\" style=\"margin: 15px 0;\">
                    <div class=\"table-responsive\">
                      <table class=\"table table-source\" width=\"100%\" >
                        <thead class=\"text-primary\">
                          <tr>
                            <th><b>Type</b></th>
                            <th><b>Url</b></th>
                            <th style=\"text-align:right\"><b>Action</b></th>
                          </tr>
                        </thead>
                        <tbody>
                          {% for source in channel.sources %}
                            <tr>
                              <td><b>{{source.type|capitalize}}  {% if source.type == \"file\" and source.media != null %}({{source.media.extension|capitalize}}){% endif %} </b></td>
                              <td><span class=\"label label-info\" style=\"    text-transform: inherit;\">{{source.url}} {% if source.type == \"file\" and source.media != null %} {{ app.request.scheme ~'://' ~ app.request.httpHost ~ asset(source.media.link) }}{% endif %}</span></td>
                              <td>
                                <a href=\"{{path(\"app_source_edit_channel\",{\"id\":source.id})}}\" class=\"btn btn-success btn-xs pull-right\" ><i class=\"material-icons\">edit</i></a>
                                <a href=\"{{path(\"app_source_delete\",{\"id\":source.id})}}\" class=\"btn btn-rose btn-xs pull-right\"><i class=\"material-icons\">delete</i></a>
                              </td>
                            </tr>
                          {% else %}
                            <tr>
                              <td colspan=\"3\">
                                <br>
                                <center><img src=\"{{asset(\"img/bg_empty.png\")}}\"  style=\"width: 100% !important;\" =\"\"></center>
                                <br>
                              </td>
                            </tr>
                          {% endfor %}
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    </div>
</div>
{% endblock%}", "AppBundle:Channel:sources.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Channel/sources.html.twig");
    }
}
