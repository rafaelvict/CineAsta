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

/* AppBundle:Channel:edit.html.twig */
class __TwigTemplate_530214146de3f3a3efd9a3183c9a8c4eccfd0e505f5c685e1cbb16594663d019 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Channel:edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        // line 3
        echo "  <div class=\"container-fluid\">
    <div class=\"row\">
      <div class=\"col-md-3\">
        <div class=\"card\">
          <div class=\"tab-moivie tab-channel\">
            <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_channel_edit", ["id" => $this->getAttribute(($context["channel"] ?? null), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie-active col-md-12\"><i class=\"material-icons\">edit</i> Edit</a>
            <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_channel_sources", ["id" => $this->getAttribute(($context["channel"] ?? null), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">folder</i> Sources</a>
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
            <i class=\"material-icons\">live_tv</i>
          </div>
          <div class=\"card-content\">
            <h4 class=\"card-title\">Edit :  ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "value", []), "title", []), "html", null, true);
        echo "</h4>
            ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
            <br>
            <div class=\"form-group label-floating is-empty\">
              <label class=\"control-label\">TV Channel name</label>
              ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "title", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
              <span class=\"validate-input\">";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "title", []), 'errors');
        echo "</span>
            </div>

            <div class=\"fileinput fileinput-new text-center\" style=\"    width: 100%;\" data-provides=\"fileinput\">
              <div class=\"fileinput-new thumbnail\" >
                <a href=\"#\" class=\"btn btn-rose btn-round btn-select\"><i class=\"material-icons\">image</i> Select image </a>
                <img  id=\"img-preview\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "value", []), "media", []), "link", [])), "channel_thumb"), "html", null, true);
        echo "\"  width=\"100%\">
              </div>
              ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "file", []), 'widget', ["attr" => ["class" => "file-hidden input-file img-selector", "style" => "    display: none;"]]);
        echo "
              <span class=\"validate-input\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "file", []), 'errors');
        echo "</span>
            </div>
              <div class=\"row\">
                <div class=\"col-md-6\">
                  <div class=\"form-group label-floating is-empty\">
                    <label class=\"control-label\">Label</label>
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "label", []), 'widget', ["attr" => ["class" => "form-control", "rows" => 8]]);
        echo "
                    <span class=\"validate-input\">";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "label", []), 'errors');
        echo "</span>
                  </div>
                </div>
                
                <div class=\"col-md-6\">
                  <div class=\"form-group label-floating is-empty\">
                    <label class=\"control-label\">Sub-label</label>
                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sublabel", []), 'widget', ["attr" => ["class" => "form-control", "rows" => 8]]);
        echo "
                    <span class=\"validate-input\">";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sublabel", []), 'errors');
        echo "</span>
                  </div>
                </div>
              </div>
            <div class=\"form-group label-floating is-empty\">
              <label class=\"control-label\">TV Channel description</label>
              ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", []), 'widget', ["attr" => ["class" => "form-control", "rows" => 8]]);
        echo "
              <span class=\"validate-input\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", []), 'errors');
        echo "</span>
            </div>
            <div class=\"form-group label-floating is-empty\">
              <label class=\"control-label\">TV Channel website</label>
              ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "website", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
              <span class=\"validate-input\">";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "website", []), 'errors');
        echo "</span>
            </div>
            <div class=\"form-group label-floating is-empty\">
              <label class=\"control-label\">TV Channel classification</label>
              ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "classification", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
              <span class=\"validate-input\">";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "classification", []), 'errors');
        echo "</span>
            </div>
            <div class=\"form-group label-floating is-empty\">
              <label class=\"control-label\">Play TV Channel  :  </label>
              ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "playas", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
              <span class=\"validate-input\">";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "playas", []), 'errors');
        echo "</span>
            </div>
            <div class=\"form-group label-floating \">
              <label class=\"control-label\">Channel tags (Ex:anim,art,hero)</label>
              <br>
              ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "tags", []), 'widget', ["attr" => ["class" => "input-tags"]]);
        echo "
              <span class=\"validate-input\">";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "tags", []), 'errors');
        echo "</span>
            </div>
            <script>
            \$('.input-tags').selectize({
            persist: false,
            createOnBlur: true,
            create: true
            });
            </script>
            <div class=\"\">
              <label>
                ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "enabled", []), 'widget');
        echo "  Enabled
              </label>
            </div>
            <div class=\"\">
              <label>
                ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "featured", []), 'widget');
        echo "  Featured TV Channel
              </label>
            </div>
            <div class=\"\">
              <label>
                ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "comment", []), 'widget');
        echo "  Enabled Comment
              </label>
            </div>
            <br>
            ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "categories", []), 'label', ["label_attr" => ["style" => "font-size:16px"]]);
        echo " :
            <div>
              <div class=\"row\">
                ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "categories", []));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 111
            echo "                  <label  style=\"background: #000;border-radius: 2px;padding: 5px;text-align: center;margin: 10px;color: white;font-weight: bold;padding-left: 20px;padding-right: 20px;\">
                    ";
            // line 112
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "vars", []), "label", []), "html", null, true);
            echo "
                  </label>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "              </div>
            </div>
            <br>
            ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "countries", []), 'label', ["label_attr" => ["style" => "font-size:16px"]]);
        echo " :
            <div>
              <div class=\"row\">
                ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "countries", []));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 122
            echo "                  <label  style=\"background: #000;border-radius: 2px;padding: 5px;text-align: center;margin: 10px;color: white;font-weight: bold;padding-left: 20px;padding-right: 20px;\">
                    ";
            // line 123
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field"], "vars", []), "label", []), "html", null, true);
            echo "
                  </label>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "              </div>
            </div>
            <br>
            <span class=\"pull-right\"><a href=\"";
        // line 129
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_channel_index");
        echo "\" class=\"btn btn-fill btn-yellow\"><i class=\"material-icons\">arrow_back</i> Cancel</a>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "save", []), 'widget', ["attr" => ["class" => "btn btn-fill btn-success"]]);
        echo "</span>
            ";
        // line 130
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Channel:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 130,  299 => 129,  294 => 126,  283 => 123,  280 => 122,  276 => 121,  270 => 118,  265 => 115,  254 => 112,  251 => 111,  247 => 110,  241 => 107,  234 => 103,  226 => 98,  218 => 93,  204 => 82,  200 => 81,  192 => 76,  188 => 75,  181 => 71,  177 => 70,  170 => 66,  166 => 65,  159 => 61,  155 => 60,  146 => 54,  142 => 53,  132 => 46,  128 => 45,  119 => 39,  115 => 38,  110 => 36,  101 => 30,  97 => 29,  90 => 25,  86 => 24,  73 => 14,  69 => 13,  65 => 12,  61 => 11,  57 => 10,  53 => 9,  49 => 8,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Channel:edit.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Channel/edit.html.twig");
    }
}
