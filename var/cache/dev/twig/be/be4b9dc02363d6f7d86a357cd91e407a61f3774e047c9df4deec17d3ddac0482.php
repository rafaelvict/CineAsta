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
class __TwigTemplate_8c25ee3555fdeee5be20ddbc8f43470fe3b51d8f4d1ff0ae09d360920e481fd3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Channel:edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Channel:edit.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Channel:edit.html.twig", 1);
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
          <div class=\"tab-moivie tab-channel\">
            <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_channel_edit", ["id" => $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie-active col-md-12\"><i class=\"material-icons\">edit</i> Edit</a>
            <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_channel_sources", ["id" => $this->getAttribute(($context["channel"] ?? $this->getContext($context, "channel")), "id", [])]), "html", null, true);
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">folder</i> Sources</a>
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
            <i class=\"material-icons\">live_tv</i>
          </div>
          <div class=\"card-content\">
            <h4 class=\"card-title\">Edit :  ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "title", []), "html", null, true);
        echo "</h4>
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

            <div class=\"fileinput fileinput-new text-center\" style=\"    width: 100%;\" data-provides=\"fileinput\">
              <div class=\"fileinput-new thumbnail\" >
                <a href=\"#\" class=\"btn btn-rose btn-round btn-select\"><i class=\"material-icons\">image</i> Select image </a>
                <img  id=\"img-preview\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "media", []), "link", [])), "channel_thumb"), "html", null, true);
        echo "\"  width=\"100%\">
              </div>
              ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", []), 'widget', ["attr" => ["class" => "file-hidden input-file img-selector", "style" => "    display: none;"]]);
        echo "
              <span class=\"validate-input\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", []), 'errors');
        echo "</span>
            </div>
              <div class=\"row\">
                <div class=\"col-md-6\">
                  <div class=\"form-group label-floating is-empty\">
                    <label class=\"control-label\">Label</label>
                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "label", []), 'widget', ["attr" => ["class" => "form-control", "rows" => 8]]);
        echo "
                    <span class=\"validate-input\">";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "label", []), 'errors');
        echo "</span>
                  </div>
                </div>
                
                <div class=\"col-md-6\">
                  <div class=\"form-group label-floating is-empty\">
                    <label class=\"control-label\">Sub-label</label>
                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sublabel", []), 'widget', ["attr" => ["class" => "form-control", "rows" => 8]]);
        echo "
                    <span class=\"validate-input\">";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sublabel", []), 'errors');
        echo "</span>
                  </div>
                </div>
              </div>
            <div class=\"form-group label-floating is-empty\">
              <label class=\"control-label\">TV Channel description</label>
              ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", []), 'widget', ["attr" => ["class" => "form-control", "rows" => 8]]);
        echo "
              <span class=\"validate-input\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", []), 'errors');
        echo "</span>
            </div>
            <div class=\"form-group label-floating is-empty\">
              <label class=\"control-label\">TV Channel website</label>
              ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "website", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
              <span class=\"validate-input\">";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "website", []), 'errors');
        echo "</span>
            </div>
            <div class=\"form-group label-floating is-empty\">
              <label class=\"control-label\">TV Channel classification</label>
              ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "classification", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
              <span class=\"validate-input\">";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "classification", []), 'errors');
        echo "</span>
            </div>
            <div class=\"form-group label-floating is-empty\">
              <label class=\"control-label\">Play TV Channel  :  </label>
              ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "playas", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
              <span class=\"validate-input\">";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "playas", []), 'errors');
        echo "</span>
            </div>
            <div class=\"form-group label-floating \">
              <label class=\"control-label\">Channel tags (Ex:anim,art,hero)</label>
              <br>
              ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "tags", []), 'widget', ["attr" => ["class" => "input-tags"]]);
        echo "
              <span class=\"validate-input\">";
        // line 82
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
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "enabled", []), 'widget');
        echo "  Enabled
              </label>
            </div>
            <div class=\"\">
              <label>
                ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "featured", []), 'widget');
        echo "  Featured TV Channel
              </label>
            </div>
            <div class=\"\">
              <label>
                ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "comment", []), 'widget');
        echo "  Enabled Comment
              </label>
            </div>
            <br>
            ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categories", []), 'label', ["label_attr" => ["style" => "font-size:16px"]]);
        echo " :
            <div>
              <div class=\"row\">
                ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "categories", []));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "countries", []), 'label', ["label_attr" => ["style" => "font-size:16px"]]);
        echo " :
            <div>
              <div class=\"row\">
                ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "countries", []));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", []), 'widget', ["attr" => ["class" => "btn btn-fill btn-success"]]);
        echo "</span>
            ";
        // line 130
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
        return "AppBundle:Channel:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 130,  317 => 129,  312 => 126,  301 => 123,  298 => 122,  294 => 121,  288 => 118,  283 => 115,  272 => 112,  269 => 111,  265 => 110,  259 => 107,  252 => 103,  244 => 98,  236 => 93,  222 => 82,  218 => 81,  210 => 76,  206 => 75,  199 => 71,  195 => 70,  188 => 66,  184 => 65,  177 => 61,  173 => 60,  164 => 54,  160 => 53,  150 => 46,  146 => 45,  137 => 39,  133 => 38,  128 => 36,  119 => 30,  115 => 29,  108 => 25,  104 => 24,  91 => 14,  87 => 13,  83 => 12,  79 => 11,  75 => 10,  71 => 9,  67 => 8,  60 => 3,  51 => 2,  29 => 1,);
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
          <div class=\"tab-moivie tab-channel\">
            <a href=\"{{path(\"app_channel_edit\",{\"id\":channel.id})}}\" class=\"btn btn-tab-movie-active col-md-12\"><i class=\"material-icons\">edit</i> Edit</a>
            <a href=\"{{path(\"app_channel_sources\",{\"id\":channel.id})}}\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">folder</i> Sources</a>
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
            <i class=\"material-icons\">live_tv</i>
          </div>
          <div class=\"card-content\">
            <h4 class=\"card-title\">Edit :  {{form.vars.value.title}}</h4>
            {{form_start(form)}}
            <br>
            <div class=\"form-group label-floating is-empty\">
              <label class=\"control-label\">TV Channel name</label>
              {{form_widget(form.title,{\"attr\":{\"class\":\"form-control\"}})}}
              <span class=\"validate-input\">{{form_errors(form.title)}}</span>
            </div>

            <div class=\"fileinput fileinput-new text-center\" style=\"    width: 100%;\" data-provides=\"fileinput\">
              <div class=\"fileinput-new thumbnail\" >
                <a href=\"#\" class=\"btn btn-rose btn-round btn-select\"><i class=\"material-icons\">image</i> Select image </a>
                <img  id=\"img-preview\" src=\"{{asset(form.vars.value.media.link)|imagine_filter('channel_thumb')}}\"  width=\"100%\">
              </div>
              {{form_widget(form.file,{\"attr\":{\"class\":\"file-hidden input-file img-selector\",\"style\":\"    display: none;\"}})}}
              <span class=\"validate-input\">{{form_errors(form.file)}}</span>
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
            <div class=\"form-group label-floating is-empty\">
              <label class=\"control-label\">TV Channel description</label>
              {{form_widget(form.description,{\"attr\":{\"class\":\"form-control\",\"rows\":8}})}}
              <span class=\"validate-input\">{{form_errors(form.description)}}</span>
            </div>
            <div class=\"form-group label-floating is-empty\">
              <label class=\"control-label\">TV Channel website</label>
              {{form_widget(form.website,{\"attr\":{\"class\":\"form-control\"}})}}
              <span class=\"validate-input\">{{form_errors(form.website)}}</span>
            </div>
            <div class=\"form-group label-floating is-empty\">
              <label class=\"control-label\">TV Channel classification</label>
              {{form_widget(form.classification,{\"attr\":{\"class\":\"form-control\"}})}}
              <span class=\"validate-input\">{{form_errors(form.classification)}}</span>
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
                  <label  style=\"background: #000;border-radius: 2px;padding: 5px;text-align: center;margin: 10px;color: white;font-weight: bold;padding-left: 20px;padding-right: 20px;\">
                    {{ form_widget(field) }} {{ field.vars.label }}
                  </label>
                {% endfor %}
              </div>
            </div>
            <br>
            {{form_label(form.countries,null,{label_attr:{\"style\":\"font-size:16px\"}})}} :
            <div>
              <div class=\"row\">
                {% for field in form.countries %}
                  <label  style=\"background: #000;border-radius: 2px;padding: 5px;text-align: center;margin: 10px;color: white;font-weight: bold;padding-left: 20px;padding-right: 20px;\">
                    {{ form_widget(field) }} {{ field.vars.label }}
                  </label>
                {% endfor %}
              </div>
            </div>
            <br>
            <span class=\"pull-right\"><a href=\"{{path(\"app_channel_index\")}}\" class=\"btn btn-fill btn-yellow\"><i class=\"material-icons\">arrow_back</i> Cancel</a>{{form_widget(form.save,{attr:{\"class\":\"btn btn-fill btn-success\"}})}}</span>
            {{form_end(form)}}
          </div>
        </div>
      </div>
    </div>
  </div>
{% endblock%}", "AppBundle:Channel:edit.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Channel/edit.html.twig");
    }
}
