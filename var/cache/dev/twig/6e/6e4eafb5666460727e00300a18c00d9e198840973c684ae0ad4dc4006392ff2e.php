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
class __TwigTemplate_71c8caac18b0b9eb559b8b9551c9b489502bae49a2b5f0aa50e8f337f8449204 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Channel:add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Channel:add.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Channel:add.html.twig", 1);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            <br>
            <div class=\"form-group label-floating is-empty\">
              <label class=\"control-label\">TV Channel name</label>
              ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
              <span class=\"validate-input\">";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", []), 'errors');
        echo "</span>
            </div>
              <div class=\"row\">
                <div class=\"col-md-6\">
                  <div class=\"form-group label-floating is-empty\">
                    <label class=\"control-label\">Label</label>
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "label", []), 'widget', ["attr" => ["class" => "form-control", "rows" => 8]]);
        echo "
                    <span class=\"validate-input\">";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "label", []), 'errors');
        echo "</span>
                  </div>
                </div>
                
                <div class=\"col-md-6\">
                  <div class=\"form-group label-floating is-empty\">
                    <label class=\"control-label\">Sub-label</label>
                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sublabel", []), 'widget', ["attr" => ["class" => "form-control", "rows" => 8]]);
        echo "
                    <span class=\"validate-input\">";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sublabel", []), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", []), 'widget', ["attr" => ["class" => "file-hidden input-file img-selector", "style" => "    display: none;"]]);
        echo "
              <span class=\"validate-input\">";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", []), 'errors');
        echo "</span>
            </div>
            <div class=\"form-group label-floating is-empty\">
              <label class=\"control-label\">TV Channel description</label>
              ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", []), 'widget', ["attr" => ["class" => "form-control", "rows" => 8]]);
        echo "
              <span class=\"validate-input\">";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", []), 'errors');
        echo "</span>
            </div>
            <div class=\"form-group label-floating is-empty\">
              <label class=\"control-label\">TV Channel classification</label>
              ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "classification", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
              <span class=\"validate-input\">";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "classification", []), 'errors');
        echo "</span>
            </div>
            <div class=\"form-group label-floating is-empty\">
              <label class=\"control-label\">TV Channel website</label>
              ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "website", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
              <span class=\"validate-input\">";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "website", []), 'errors');
        echo "</span>
            </div>
            <div class=\"form-group label-floating is-empty\">
              <label class=\"control-label\">Play TV Channel  :  </label>
              ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "playas", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
              <span class=\"validate-input\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "playas", []), 'errors');
        echo "</span>
            </div>
            <div class=\"form-group label-floating \">
              <label class=\"control-label\">Channel tags (Ex:anim,art,hero)</label>
              <br>
              ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tags", []), 'widget', ["attr" => ["class" => "input-tags"]]);
        echo "
              <span class=\"validate-input\">";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tags", []), 'errors');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "enabled", []), 'widget');
        echo "  Enabled
              </label>
            </div>
            <div class=\"\">
              <label>
                ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "featured", []), 'widget');
        echo "  Featured TV Channel
              </label>
            </div>
            <div class=\"\">
              <label>
                ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "comment", []), 'widget');
        echo "  Enabled Comment
              </label>
            </div>
            <br>
            ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categories", []), 'label', ["label_attr" => ["style" => "font-size:16px"]]);
        echo " :
            <div>
              <div class=\"row\">
                ";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categories", []));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "countries", []), 'label', ["label_attr" => ["style" => "font-size:16px"]]);
        echo " :
            <div>
              <div class=\"row\">
                ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "countries", []));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sourcetype", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
              </div>
              <span class=\"validate-input\">";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sourcetype", []), 'errors');
        echo "</span>
              <div class=\"form-group label-floating is-empty\" ";
        // line 133
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sourcetype", []), "vars", []), "value", []) == 5)) {
            echo " style=\"display:none\" ";
        }
        echo ">
              <label class=\"control-label\">Source Url</label>
              ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sourceurl", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            </div>
            <span class=\"validate-input\">";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sourceurl", []), 'errors');
        echo "</span>
          </div>
          <br>
          <span class=\"pull-right\"><a href=\"";
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_channel_index");
        echo "\" class=\"btn btn-fill btn-yellow\"><i class=\"material-icons\">arrow_back</i> Cancel</a>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", []), 'widget', ["attr" => ["class" => "btn btn-fill btn-success"]]);
        echo "</span>
          ";
        // line 141
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
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
        return "AppBundle:Channel:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 141,  324 => 140,  318 => 137,  313 => 135,  306 => 133,  302 => 132,  297 => 130,  289 => 124,  278 => 121,  275 => 120,  271 => 119,  265 => 116,  261 => 114,  250 => 111,  247 => 110,  243 => 109,  237 => 106,  230 => 102,  222 => 97,  214 => 92,  200 => 81,  196 => 80,  188 => 75,  184 => 74,  177 => 70,  173 => 69,  166 => 65,  162 => 64,  155 => 60,  151 => 59,  144 => 55,  140 => 54,  135 => 52,  125 => 45,  121 => 44,  111 => 37,  107 => 36,  98 => 30,  94 => 29,  87 => 25,  73 => 14,  60 => 3,  51 => 2,  29 => 1,);
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
            <a href=\"#\" class=\"btn btn-tab-movie-active col-md-12\"><i class=\"material-icons\">add</i> Add</a>
            <a href=\"#\" class=\"btn btn-tab-movie btn-disabled col-md-12\"><i class=\"material-icons\">folder</i> Sources</a>
            <a href=\"#\" class=\"btn btn-tab-movie btn-disabled col-md-12\"><i class=\"material-icons\">comment</i> Comments</a>
            <a href=\"#\" class=\"btn btn-tab-movie btn-disabled col-md-12\"><i class=\"material-icons\">star_half</i> Ratings</a>
            <a href=\"#\" class=\"btn btn-tab-movie btn-disabled col-md-12\"><i class=\"material-icons\">remove_red_eye</i> 0 views</a>
            <a href=\"#\" class=\"btn btn-tab-movie btn-disabled col-md-12\"><i class=\"material-icons\">share</i> 0 shares</a>
            <a href=\"{{path(\"app_channel_index\")}}\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">arrow_back</i> Cancel</a>
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
            {{form_start(form)}}
            <br>
            <div class=\"form-group label-floating is-empty\">
              <label class=\"control-label\">TV Channel name</label>
              {{form_widget(form.title,{\"attr\":{\"class\":\"form-control\"}})}}
              <span class=\"validate-input\">{{form_errors(form.title)}}</span>
            </div>
              <div class=\"row\">
                <div class=\"col-md-6\">
                  <div class=\"form-group label-floating is-empty\">
                    <label class=\"control-label\">Label</label>
                    {{form_widget(form.label,{\"attr\":{\"class\":\"form-control\",\"rows\":8}})}}
                    <span class=\"validate-input\">{{form_errors(form.label)}}</span>
                  </div>
                </div>
                
                <div class=\"col-md-6\">
                  <div class=\"form-group label-floating is-empty\">
                    <label class=\"control-label\">Sub-label</label>
                    {{form_widget(form.sublabel,{\"attr\":{\"class\":\"form-control\",\"rows\":8}})}}
                    <span class=\"validate-input\">{{form_errors(form.sublabel)}}</span>
                  </div>
                </div>
              </div>
            <div class=\"fileinput fileinput-new text-center\" style=\"    width: 100%;\" data-provides=\"fileinput\">
              <div class=\"fileinput-new thumbnail\" >
                <a href=\"#\" class=\"btn btn-rose btn-round btn-select\"><i class=\"material-icons\">image</i> Select image </a>
                <img  id=\"img-preview\" src=\"{{asset(\"img/image_placeholder.jpg\")|imagine_filter('channel_thumb')}}\"  width=\"100%\">
              </div>
              {{form_widget(form.file,{\"attr\":{\"class\":\"file-hidden input-file img-selector\",\"style\":\"    display: none;\"}})}}
              <span class=\"validate-input\">{{form_errors(form.file)}}</span>
            </div>
            <div class=\"form-group label-floating is-empty\">
              <label class=\"control-label\">TV Channel description</label>
              {{form_widget(form.description,{\"attr\":{\"class\":\"form-control\",\"rows\":8}})}}
              <span class=\"validate-input\">{{form_errors(form.description)}}</span>
            </div>
            <div class=\"form-group label-floating is-empty\">
              <label class=\"control-label\">TV Channel classification</label>
              {{form_widget(form.classification,{\"attr\":{\"class\":\"form-control\"}})}}
              <span class=\"validate-input\">{{form_errors(form.classification)}}</span>
            </div>
            <div class=\"form-group label-floating is-empty\">
              <label class=\"control-label\">TV Channel website</label>
              {{form_widget(form.website,{\"attr\":{\"class\":\"form-control\"}})}}
              <span class=\"validate-input\">{{form_errors(form.website)}}</span>
            </div>
            <div class=\"form-group label-floating is-empty\">
              <label class=\"control-label\">Play TV Channel  :  </label>
              {{form_widget(form.playas,{\"attr\":{\"class\":\"form-control\"}})}}
              <span class=\"validate-input\">{{form_errors(form.playas)}}</span>
            </div>
            <div class=\"form-group label-floating \">
              <label class=\"control-label\">Channel tags (Ex:anim,art,hero)</label>
              <br>
              {{form_widget(form.tags,{\"attr\":{\"class\":\"input-tags\"}})}}
              <span class=\"validate-input\">{{form_errors(form.tags)}}</span>
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
                {{form_widget(form.enabled)}}  Enabled
              </label>
            </div>
            <div class=\"\">
              <label>
                {{form_widget(form.featured)}}  Featured TV Channel
              </label>
            </div>
            <div class=\"\">
              <label>
                {{form_widget(form.comment)}}  Enabled Comment
              </label>
            </div>
            <br>
            {{form_label(form.categories,null,{label_attr:{\"style\":\"font-size:16px\"}})}} :
            <div>
              <div class=\"row\">
                {% for field in form.categories %}
                  <label  class=\"tag-app\">
                    {{ form_widget(field) }} {{ field.vars.label }}
                  </label>
                {% endfor %}
              </div>
            </div>
            {{form_label(form.countries,null,{label_attr:{\"style\":\"font-size:16px\"}})}} :
            <div>
              <div class=\"row\">
                {% for field in form.countries %}
                  <label  class=\"tag-app\">
                    {{ form_widget(field) }} {{ field.vars.label }}
                  </label>
                {% endfor %}
              </div>
            </div>
            <div class=\"panel-body\">
              <label class=\"panel-title\">Channel Source</label>
              <div class=\"form-group label-floating is-empty\">
                <label class=\"control-label\">Source Type</label>
                {{form_widget(form.sourcetype,{\"attr\":{\"class\":\"form-control\"}})}}
              </div>
              <span class=\"validate-input\">{{form_errors(form.sourcetype)}}</span>
              <div class=\"form-group label-floating is-empty\" {% if form.sourcetype.vars.value == 5 %} style=\"display:none\" {% endif %}>
              <label class=\"control-label\">Source Url</label>
              {{form_widget(form.sourceurl,{\"attr\":{\"class\":\"form-control\"}})}}
            </div>
            <span class=\"validate-input\">{{form_errors(form.sourceurl)}}</span>
          </div>
          <br>
          <span class=\"pull-right\"><a href=\"{{path(\"app_channel_index\")}}\" class=\"btn btn-fill btn-yellow\"><i class=\"material-icons\">arrow_back</i> Cancel</a>{{form_widget(form.save,{attr:{\"class\":\"btn btn-fill btn-success\"}})}}</span>
          {{form_end(form)}}
        </div>
      </div>
    </div>
  </div>
</div>
{% endblock%}", "AppBundle:Channel:add.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Channel/add.html.twig");
    }
}
