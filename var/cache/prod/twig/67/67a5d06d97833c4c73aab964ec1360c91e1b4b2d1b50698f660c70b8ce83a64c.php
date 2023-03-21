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

/* AppBundle:Channel:add.html.twig */
class __TwigTemplate_937788afcafe4af5c128e0fa4a0f984b08dd75cfdcf430f17a2c1b42a5ae84d9 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Channel:add.html.twig", 1);
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
          <div class=\"tab-moivie  tab-channel\">
            <a href=\"#\" class=\"btn btn-tab-movie-active col-md-12\"><i class=\"material-icons\">add</i> Add</a>
            <a href=\"#\" class=\"btn btn-tab-movie btn-disabled col-md-12\"><i class=\"material-icons\">folder</i> Sources</a>
            <a href=\"#\" class=\"btn btn-tab-movie btn-disabled col-md-12\"><i class=\"material-icons\">comment</i> Comments</a>
            <a href=\"#\" class=\"btn btn-tab-movie btn-disabled col-md-12\"><i class=\"material-icons\">star_half</i> Ratings</a>
            <a href=\"#\" class=\"btn btn-tab-movie btn-disabled col-md-12\"><i class=\"material-icons\">remove_red_eye</i> 0 views</a>
            <a href=\"#\" class=\"btn btn-tab-movie btn-disabled col-md-12\"><i class=\"material-icons\">share</i> 0 shares</a>
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
            <h4 class=\"card-title\">New TV Channel </h4>
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
              <div class=\"row\">
                <div class=\"col-md-6\">
                  <div class=\"form-group label-floating is-empty\">
                    <label class=\"control-label\">Label</label>
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "label", []), 'widget', ["attr" => ["class" => "form-control", "rows" => 8]]);
        echo "
                    <span class=\"validate-input\">";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "label", []), 'errors');
        echo "</span>
                  </div>
                </div>
                
                <div class=\"col-md-6\">
                  <div class=\"form-group label-floating is-empty\">
                    <label class=\"control-label\">Sub-label</label>
                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sublabel", []), 'widget', ["attr" => ["class" => "form-control", "rows" => 8]]);
        echo "
                    <span class=\"validate-input\">";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sublabel", []), 'errors');
        echo "</span>
                  </div>
                </div>
              </div>
            <div class=\"fileinput fileinput-new text-center\" style=\"    width: 100%;\" data-provides=\"fileinput\">
              <div class=\"fileinput-new thumbnail\" >
                <a href=\"#\" class=\"btn btn-rose btn-round btn-select\"><i class=\"material-icons\">image</i> Select image </a>
                <img  id=\"img-preview\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/image_placeholder.jpg"), "channel_thumb"), "html", null, true);
        echo "\"  width=\"100%\">
              </div>
              ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "file", []), 'widget', ["attr" => ["class" => "file-hidden input-file img-selector", "style" => "    display: none;"]]);
        echo "
              <span class=\"validate-input\">";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "file", []), 'errors');
        echo "</span>
            </div>
            <div class=\"form-group label-floating is-empty\">
              <label class=\"control-label\">TV Channel description</label>
              ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", []), 'widget', ["attr" => ["class" => "form-control", "rows" => 8]]);
        echo "
              <span class=\"validate-input\">";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "description", []), 'errors');
        echo "</span>
            </div>
            <div class=\"form-group label-floating is-empty\">
              <label class=\"control-label\">TV Channel classification</label>
              ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "classification", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
              <span class=\"validate-input\">";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "classification", []), 'errors');
        echo "</span>
            </div>
            <div class=\"form-group label-floating is-empty\">
              <label class=\"control-label\">TV Channel website</label>
              ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "website", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
              <span class=\"validate-input\">";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "website", []), 'errors');
        echo "</span>
            </div>
            <div class=\"form-group label-floating is-empty\">
              <label class=\"control-label\">Play TV Channel  :  </label>
              ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "playas", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
              <span class=\"validate-input\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "playas", []), 'errors');
        echo "</span>
            </div>
            <div class=\"form-group label-floating \">
              <label class=\"control-label\">Channel tags (Ex:anim,art,hero)</label>
              <br>
              ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "tags", []), 'widget', ["attr" => ["class" => "input-tags"]]);
        echo "
              <span class=\"validate-input\">";
        // line 81
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
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "enabled", []), 'widget');
        echo "  Enabled
              </label>
            </div>
            <div class=\"\">
              <label>
                ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "featured", []), 'widget');
        echo "  Featured TV Channel
              </label>
            </div>
            <div class=\"\">
              <label>
                ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "comment", []), 'widget');
        echo "  Enabled Comment
              </label>
            </div>
            <br>
            ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "categories", []), 'label', ["label_attr" => ["style" => "font-size:16px"]]);
        echo " :
            <div>
              <div class=\"row\">
                ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "categories", []));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 110
            echo "                  <label  class=\"tag-app\">
                    ";
            // line 111
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
        // line 114
        echo "              </div>
            </div>
            ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "countries", []), 'label', ["label_attr" => ["style" => "font-size:16px"]]);
        echo " :
            <div>
              <div class=\"row\">
                ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "countries", []));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 120
            echo "                  <label  class=\"tag-app\">
                    ";
            // line 121
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
        // line 124
        echo "              </div>
            </div>
            <div class=\"panel-body\">
              <label class=\"panel-title\">Channel Source</label>
              <div class=\"form-group label-floating is-empty\">
                <label class=\"control-label\">Source Type</label>
                ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sourcetype", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
              </div>
              <span class=\"validate-input\">";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sourcetype", []), 'errors');
        echo "</span>
              <div class=\"form-group label-floating is-empty\" ";
        // line 133
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "sourcetype", []), "vars", []), "value", []) == 5)) {
            echo " style=\"display:none\" ";
        }
        echo ">
              <label class=\"control-label\">Source Url</label>
              ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sourceurl", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            <span class=\"validate-input\">";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "sourceurl", []), 'errors');
        echo "</span>
          </div>
          <br>
          <span class=\"pull-right\"><a href=\"";
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_channel_index");
        echo "\" class=\"btn btn-fill btn-yellow\"><i class=\"material-icons\">arrow_back</i> Cancel</a>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "save", []), 'widget', ["attr" => ["class" => "btn btn-fill btn-success"]]);
        echo "</span>
          ";
        // line 141
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
        return "AppBundle:Channel:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 141,  306 => 140,  300 => 137,  295 => 135,  288 => 133,  284 => 132,  279 => 130,  271 => 124,  260 => 121,  257 => 120,  253 => 119,  247 => 116,  243 => 114,  232 => 111,  229 => 110,  225 => 109,  219 => 106,  212 => 102,  204 => 97,  196 => 92,  182 => 81,  178 => 80,  170 => 75,  166 => 74,  159 => 70,  155 => 69,  148 => 65,  144 => 64,  137 => 60,  133 => 59,  126 => 55,  122 => 54,  117 => 52,  107 => 45,  103 => 44,  93 => 37,  89 => 36,  80 => 30,  76 => 29,  69 => 25,  55 => 14,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Channel:add.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Channel/add.html.twig");
    }
}
