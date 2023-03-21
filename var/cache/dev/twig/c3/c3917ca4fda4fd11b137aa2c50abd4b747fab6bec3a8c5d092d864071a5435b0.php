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

/* AppBundle:Home:websettings.html.twig */
class __TwigTemplate_310031028c5844fcf48d778b8268d56f1d8b4c9fbc49b1ae3a14753f1fab3485 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Home:websettings.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Home:websettings.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Home:websettings.html.twig", 1);
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
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                <div class=\"card\">
                    <div class=\"tab-moivie tab-channel\">
                        <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_settings");
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">phonelink_setup</i> Mobile Settings</a>
                        <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_websettings");
        echo "\" class=\"btn btn-tab-movie-active col-md-12\"><i class=\"material-icons\">web</i> Web Settings</a>
                        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_ads");
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">show_chart</i> Ads Settings</a>
                        <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_webads");
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">show_chart</i>Web Ads Settings</a>
                        <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_payment");
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">payment</i> Payment Settings</a>
                        <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_edit_privacypolicy");
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">privacy_tip</i> Privacy Policy</a>
                        <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_refundpolicy");
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">attach_money</i> Refund Policy</a>
                        <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_faq");
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">live_help</i> FAQ Page</a>
                        <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_change_password");
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">lock</i> Change password</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-9\">
                <div class=\"card\">
                    <div class=\"card-header card-header-icon\" data-background-color=\"rose\">
                        <i class=\"material-icons\">settings</i>
                    </div>
                    <div class=\"card-content\">
                        <h4 class=\"card-title\">Settings</h4>
                        ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                        <br>
                        <div class=\"panel-body\">
                            <label class=\"panel-title\">TheMoviedb API</label>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">TheMoviedb API key</label>
                                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "themoviedbkey", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <span class=\"validate-input\">";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "themoviedbkey", []), 'errors');
        echo "</span>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">TheMoviedb API language code</label>
                                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "themoviedblang", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <span class=\"validate-input\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "themoviedblang", []), 'errors');
        echo "</span>
                        </div>
                        <br>
                        <div class=\"panel-body\">
                            <label class=\"panel-title\">Web Site</label>
                            <div class=\"form-group label-floating\">
                                <label class=\"control-label\">Web site title : </label>
                                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                <span class=\"validate-input\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", []), 'errors');
        echo "</span>
                            </div>
                            <div class=\"form-group label-floating\">
                                <label class=\"control-label\">Web site sub-title : </label>
                                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "subtitle", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                <span class=\"validate-input\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "subtitle", []), 'errors');
        echo "</span>
                            </div>
                            <div class=\"form-group label-floating\">
                                <label class=\"control-label\">Web site description : </label>
                                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sitedescription", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                <span class=\"validate-input\">";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sitedescription", []), 'errors');
        echo "</span>
                            </div>
                            <div class=\"form-group label-floating\">
                                <label class=\"control-label\">Web site keywords : </label>
                                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sitekeywords", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                <span class=\"validate-input\">";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sitekeywords", []), 'errors');
        echo "</span>
                            </div>
                            <div class=\"form-group label-floating\">
                                <label class=\"control-label\">add html to header : </label>
                                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "header", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                <span class=\"validate-input\">";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "header", []), 'errors');
        echo "</span>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-9\">
                                    <div class=\"fileinput fileinput-new text-center\" style=\"    width: 100%;\" data-provides=\"fileinput\">
                                        <div class=\"fileinput-new thumbnail\" style=\"    width: 100%;\">
                                            ";
        // line 74
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "logo", []) != null)) {
            // line 75
            echo "                                                <img  id=\"img-preview-1\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "logo", []), "link", [])), "html", null, true);
            echo "\"  width=\"100%\">
                                            ";
        } else {
            // line 77
            echo "                                                <img  id=\"img-preview-1\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/image_placeholder.jpg"), "actor_thumb"), "html", null, true);
            echo "\"  width=\"100%\">  
                                            ";
        }
        // line 79
        echo "                                            <a href=\"#\" class=\"btn btn-rose btn-round btn-select-1\"><i class=\"material-icons\">image</i> Select image </a>
                                        </div>
                                        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", []), 'widget', ["attr" => ["class" => "file-hidden input-file-1 img-selector-1", "style" => "    display: none;"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"col-md-3\">
                                    <span class=\"validate-input\">";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", []), 'errors');
        echo "</span>
                                    <div class=\"fileinput fileinput-new text-center\" style=\"    width: 100%;\" data-provides=\"fileinput\">
                                        <div class=\"fileinput-new thumbnail\" style=\"    width: 100%;\">
                                            ";
        // line 88
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "favicon", []) != null)) {
            // line 89
            echo "                                                <img  id=\"img-preview\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", []), "value", []), "favicon", []), "link", [])), "html", null, true);
            echo "\"  width=\"100%\">
                                            ";
        } else {
            // line 91
            echo "                                                <img  id=\"img-preview\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/image_placeholder.jpg"), "actor_thumb"), "html", null, true);
            echo "\"  width=\"100%\">
                                            ";
        }
        // line 93
        echo "                                            <a href=\"#\" class=\"btn btn-rose btn-round btn-select\"><i class=\"material-icons\">image</i> Select image </a>
                                        </div>
                                        ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "favfile", []), 'widget', ["attr" => ["class" => "file-hidden input-file img-selector", "style" => "    display: none;"]]);
        echo "
                                    </div>
                                </div>
                            </div>
                            <span class=\"validate-input\">";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "favfile", []), 'errors');
        echo "</span>
                        </div>
                    </div>
                    <span class=\"pull-right\"><a href=\"";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_category_index");
        echo "\" class=\"btn btn-fill btn-yellow\"><i class=\"material-icons\">arrow_back</i> Cancel</a>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", []), 'widget', ["attr" => ["class" => "btn btn-fill btn-rose"]]);
        echo "</span>
                    ";
        // line 103
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
        return "AppBundle:Home:websettings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 103,  267 => 102,  261 => 99,  254 => 95,  250 => 93,  244 => 91,  238 => 89,  236 => 88,  230 => 85,  223 => 81,  219 => 79,  213 => 77,  207 => 75,  205 => 74,  196 => 68,  192 => 67,  185 => 63,  181 => 62,  174 => 58,  170 => 57,  163 => 53,  159 => 52,  152 => 48,  148 => 47,  138 => 40,  133 => 38,  127 => 35,  122 => 33,  113 => 27,  99 => 16,  95 => 15,  91 => 14,  87 => 13,  83 => 12,  79 => 11,  75 => 10,  71 => 9,  67 => 8,  60 => 3,  51 => 2,  29 => 1,);
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
{% block body %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-md-3\">
                <div class=\"card\">
                    <div class=\"tab-moivie tab-channel\">
                        <a href=\"{{path(\"app_home_settings\")}}\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">phonelink_setup</i> Mobile Settings</a>
                        <a href=\"{{path(\"app_home_websettings\")}}\" class=\"btn btn-tab-movie-active col-md-12\"><i class=\"material-icons\">web</i> Web Settings</a>
                        <a href=\"{{path(\"app_home_ads\")}}\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">show_chart</i> Ads Settings</a>
                        <a href=\"{{path(\"app_home_webads\")}}\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">show_chart</i>Web Ads Settings</a>
                        <a href=\"{{path(\"app_home_payment\")}}\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">payment</i> Payment Settings</a>
                        <a href=\"{{path(\"app_home_edit_privacypolicy\")}}\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">privacy_tip</i> Privacy Policy</a>
                        <a href=\"{{path(\"app_home_refundpolicy\")}}\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">attach_money</i> Refund Policy</a>
                        <a href=\"{{path(\"app_home_faq\")}}\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">live_help</i> FAQ Page</a>
                        <a href=\"{{path(\"admin_change_password\")}}\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">lock</i> Change password</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-9\">
                <div class=\"card\">
                    <div class=\"card-header card-header-icon\" data-background-color=\"rose\">
                        <i class=\"material-icons\">settings</i>
                    </div>
                    <div class=\"card-content\">
                        <h4 class=\"card-title\">Settings</h4>
                        {{form_start(form)}}
                        <br>
                        <div class=\"panel-body\">
                            <label class=\"panel-title\">TheMoviedb API</label>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">TheMoviedb API key</label>
                                {{form_widget(form.themoviedbkey,{\"attr\":{\"class\":\"form-control\"}})}}
                            </div>
                            <span class=\"validate-input\">{{form_errors(form.themoviedbkey)}}</span>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">TheMoviedb API language code</label>
                                {{form_widget(form.themoviedblang,{\"attr\":{\"class\":\"form-control\"}})}}
                            </div>
                            <span class=\"validate-input\">{{form_errors(form.themoviedblang)}}</span>
                        </div>
                        <br>
                        <div class=\"panel-body\">
                            <label class=\"panel-title\">Web Site</label>
                            <div class=\"form-group label-floating\">
                                <label class=\"control-label\">Web site title : </label>
                                {{form_widget(form.title,{\"attr\":{\"class\":\"form-control\"}})}}
                                <span class=\"validate-input\">{{form_errors(form.title)}}</span>
                            </div>
                            <div class=\"form-group label-floating\">
                                <label class=\"control-label\">Web site sub-title : </label>
                                {{form_widget(form.subtitle,{\"attr\":{\"class\":\"form-control\"}})}}
                                <span class=\"validate-input\">{{form_errors(form.subtitle)}}</span>
                            </div>
                            <div class=\"form-group label-floating\">
                                <label class=\"control-label\">Web site description : </label>
                                {{form_widget(form.sitedescription,{\"attr\":{\"class\":\"form-control\"}})}}
                                <span class=\"validate-input\">{{form_errors(form.sitedescription)}}</span>
                            </div>
                            <div class=\"form-group label-floating\">
                                <label class=\"control-label\">Web site keywords : </label>
                                {{form_widget(form.sitekeywords,{\"attr\":{\"class\":\"form-control\"}})}}
                                <span class=\"validate-input\">{{form_errors(form.sitekeywords)}}</span>
                            </div>
                            <div class=\"form-group label-floating\">
                                <label class=\"control-label\">add html to header : </label>
                                {{form_widget(form.header,{\"attr\":{\"class\":\"form-control\"}})}}
                                <span class=\"validate-input\">{{form_errors(form.header)}}</span>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-9\">
                                    <div class=\"fileinput fileinput-new text-center\" style=\"    width: 100%;\" data-provides=\"fileinput\">
                                        <div class=\"fileinput-new thumbnail\" style=\"    width: 100%;\">
                                            {% if form.vars.value.logo != null %}
                                                <img  id=\"img-preview-1\" src=\"{{asset(form.vars.value.logo.link)}}\"  width=\"100%\">
                                            {% else %}
                                                <img  id=\"img-preview-1\" src=\"{{asset(\"img/image_placeholder.jpg\")|imagine_filter('actor_thumb')}}\"  width=\"100%\">  
                                            {% endif %}
                                            <a href=\"#\" class=\"btn btn-rose btn-round btn-select-1\"><i class=\"material-icons\">image</i> Select image </a>
                                        </div>
                                        {{form_widget(form.file,{\"attr\":{\"class\":\"file-hidden input-file-1 img-selector-1\",\"style\":\"    display: none;\"}})}}
                                    </div>
                                </div>
                                <div class=\"col-md-3\">
                                    <span class=\"validate-input\">{{form_errors(form.file)}}</span>
                                    <div class=\"fileinput fileinput-new text-center\" style=\"    width: 100%;\" data-provides=\"fileinput\">
                                        <div class=\"fileinput-new thumbnail\" style=\"    width: 100%;\">
                                            {% if form.vars.value.favicon != null %}
                                                <img  id=\"img-preview\" src=\"{{asset(form.vars.value.favicon.link)}}\"  width=\"100%\">
                                            {% else %}
                                                <img  id=\"img-preview\" src=\"{{asset(\"img/image_placeholder.jpg\")|imagine_filter('actor_thumb')}}\"  width=\"100%\">
                                            {% endif %}
                                            <a href=\"#\" class=\"btn btn-rose btn-round btn-select\"><i class=\"material-icons\">image</i> Select image </a>
                                        </div>
                                        {{form_widget(form.favfile,{\"attr\":{\"class\":\"file-hidden input-file img-selector\",\"style\":\"    display: none;\"}})}}
                                    </div>
                                </div>
                            </div>
                            <span class=\"validate-input\">{{form_errors(form.favfile)}}</span>
                        </div>
                    </div>
                    <span class=\"pull-right\"><a href=\"{{path(\"app_category_index\")}}\" class=\"btn btn-fill btn-yellow\"><i class=\"material-icons\">arrow_back</i> Cancel</a>{{form_widget(form.save,{attr:{\"class\":\"btn btn-fill btn-rose\"}})}}</span>
                    {{form_end(form)}}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "AppBundle:Home:websettings.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Home/websettings.html.twig");
    }
}
