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
class __TwigTemplate_3ef198f9a1f5f175ed8153623a622e43c728adc55fdad1445dfd642b2983f886 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Channel:sources.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        // line 3
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-md-3\">
        <div class=\"card\">
          <div class=\"tab-moivie  tab-channel\">
            <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_channel_edit", ["id" => $this->getAttribute(($context["channel"] ?? null), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">edit</i> Edit</a>
            <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_channel_sources", ["id" => $this->getAttribute(($context["channel"] ?? null), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie-active col-md-12\"><i class=\"material-icons\">folder</i> Sources</a>
            <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_channel_comments", ["id" => $this->getAttribute(($context["channel"] ?? null), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">comment</i> Comments</a>
            <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_channel_ratings", ["id" => $this->getAttribute(($context["channel"] ?? null), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">star_half</i> Ratings</a>
            <a href=\"#\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">remove_red_eye</i> ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? null), "viewsnumber", []), "html", null, true);
        echo " views</a>
            <a href=\"#\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">share</i> ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? null), "sharesnumber", []), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_source_add_channel", ["channel" => $this->getAttribute(($context["channel"] ?? null), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-success btn-xs pull-right new-subtitle-source\"><i class=\"material-icons\" style=\"font-size: 30px;\">add_box</i> New Source</a>
                <div class=\"card-content\">
                  <h4 class=\"card-title\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["channel"] ?? null), "title", []), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["channel"] ?? null), "sources", []));
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
                echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "scheme", []) . "://") . $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "httpHost", [])) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($context["source"], "media", []), "link", []))), "html", null, true);
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
        return array (  166 => 59,  155 => 54,  150 => 51,  141 => 47,  137 => 46,  127 => 44,  117 => 43,  114 => 42,  109 => 41,  90 => 25,  85 => 23,  73 => 14,  69 => 13,  65 => 12,  61 => 11,  57 => 10,  53 => 9,  49 => 8,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Channel:sources.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Channel/sources.html.twig");
    }
}
