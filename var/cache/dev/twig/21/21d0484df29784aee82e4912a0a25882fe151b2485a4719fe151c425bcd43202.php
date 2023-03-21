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

/* AppBundle:Home:ads.html.twig */
class __TwigTemplate_3e905b0e9a59407f346140bd4351025baff8cf9a5d9abcd5887ba7e506fe896c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Home:ads.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Home:ads.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Home:ads.html.twig", 1);
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
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">web</i> Web Settings</a>
                        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_ads");
        echo "\" class=\"btn btn-tab-movie-active col-md-12\"><i class=\"material-icons\">show_chart</i> Ads Settings</a>
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
                        <i class=\"material-icons\">monetization_on</i>
                    </div>
                    <div class=\"card-content\">
                        <h4 class=\"card-title\">Ads Settings</h4>
                        ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                        <div class=\"panel-body\">
                            <label class=\"panel-title\">Ad Rewarded</label>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Rewarded Id</label>
                                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rewardedadmobid", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <span class=\"validate-input\">";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rewardedadmobid", []), 'errors');
        echo "</span>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Banner Display Type</label>
                                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bannerfacebookid", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <span class=\"validate-input\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bannerfacebookid", []), 'errors');
        echo "</span>
                        </div>
                        <div class=\"panel-body\">
                            <label class=\"panel-title\">Ad Banner</label>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Banner Id</label>
                                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "banneradmobid", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <span class=\"validate-input\">";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "banneradmobid", []), 'errors');
        echo "</span>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Banner Display Type</label>
                                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bannertype", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <span class=\"validate-input\">";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "bannertype", []), 'errors');
        echo "</span>
                        </div>
                        <div class=\"panel-body\">
                            <label class=\"panel-title\">Ad Interstitial</label>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Interstitial Id</label>
                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "interstitialadmobid", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <span class=\"validate-input\">";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "interstitialadmobid", []), 'errors');
        echo "</span>

                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Interstitial Display Type</label>
                                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "interstitialtype", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <span class=\"validate-input\">";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "interstitialtype", []), 'errors');
        echo "</span>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Click between interstitial Ad</label>
                                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "interstitialclick", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <span class=\"validate-input\">";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "interstitialclick", []), 'errors');
        echo "</span>
                        </div>
                        <div class=\"panel-body\">
                            <label class=\"panel-title\">Ad Native</label>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Native Id</label>
                                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nativeadmobid", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <span class=\"validate-input\">";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nativeadmobid", []), 'errors');
        echo "</span>

                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Native Display Type</label>
                                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nativetype", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <span class=\"validate-input\">";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nativetype", []), 'errors');
        echo "</span>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Items between Native Ads</label>
                                ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nativeitem", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <span class=\"validate-input\">";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nativeitem", []), 'errors');
        echo "</span>
                        </div>
                        <span class=\"pull-right\"><a href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_category_index");
        echo "\" class=\"btn btn-fill btn-yellow\"><i class=\"material-icons\">arrow_back</i> Cancel</a>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", []), 'widget', ["attr" => ["class" => "btn btn-fill btn-rose"]]);
        echo "</span>
                    </div>
                    ";
        // line 94
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
        return "AppBundle:Home:ads.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 94,  241 => 92,  236 => 90,  231 => 88,  225 => 85,  220 => 83,  213 => 79,  208 => 77,  199 => 71,  194 => 69,  188 => 66,  183 => 64,  176 => 60,  171 => 58,  162 => 52,  157 => 50,  151 => 47,  146 => 45,  137 => 39,  132 => 37,  126 => 34,  121 => 32,  113 => 27,  99 => 16,  95 => 15,  91 => 14,  87 => 13,  83 => 12,  79 => 11,  75 => 10,  71 => 9,  67 => 8,  60 => 3,  51 => 2,  29 => 1,);
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
                        <a href=\"{{path(\"app_home_settings\")}}\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">phonelink_setup</i> Mobile Settings</a>
                        <a href=\"{{path(\"app_home_websettings\")}}\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">web</i> Web Settings</a>
                        <a href=\"{{path(\"app_home_ads\")}}\" class=\"btn btn-tab-movie-active col-md-12\"><i class=\"material-icons\">show_chart</i> Ads Settings</a>
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
                        <i class=\"material-icons\">monetization_on</i>
                    </div>
                    <div class=\"card-content\">
                        <h4 class=\"card-title\">Ads Settings</h4>
                        {{form_start(form)}}
                        <div class=\"panel-body\">
                            <label class=\"panel-title\">Ad Rewarded</label>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Rewarded Id</label>
                                {{form_widget(form.rewardedadmobid,{\"attr\":{\"class\":\"form-control\"}})}}
                            </div>
                            <span class=\"validate-input\">{{form_errors(form.rewardedadmobid)}}</span>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Banner Display Type</label>
                                {{form_widget(form.bannerfacebookid,{\"attr\":{\"class\":\"form-control\"}})}}
                            </div>
                            <span class=\"validate-input\">{{form_errors(form.bannerfacebookid)}}</span>
                        </div>
                        <div class=\"panel-body\">
                            <label class=\"panel-title\">Ad Banner</label>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Banner Id</label>
                                {{form_widget(form.banneradmobid,{\"attr\":{\"class\":\"form-control\"}})}}
                            </div>
                            <span class=\"validate-input\">{{form_errors(form.banneradmobid)}}</span>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Banner Display Type</label>
                                {{form_widget(form.bannertype,{\"attr\":{\"class\":\"form-control\"}})}}
                            </div>
                            <span class=\"validate-input\">{{form_errors(form.bannertype)}}</span>
                        </div>
                        <div class=\"panel-body\">
                            <label class=\"panel-title\">Ad Interstitial</label>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Interstitial Id</label>
                                {{form_widget(form.interstitialadmobid,{\"attr\":{\"class\":\"form-control\"}})}}
                            </div>
                            <span class=\"validate-input\">{{form_errors(form.interstitialadmobid)}}</span>

                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Interstitial Display Type</label>
                                {{form_widget(form.interstitialtype,{\"attr\":{\"class\":\"form-control\"}})}}
                            </div>
                            <span class=\"validate-input\">{{form_errors(form.interstitialtype)}}</span>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Click between interstitial Ad</label>
                                {{form_widget(form.interstitialclick,{\"attr\":{\"class\":\"form-control\"}})}}
                            </div>
                            <span class=\"validate-input\">{{form_errors(form.interstitialclick)}}</span>
                        </div>
                        <div class=\"panel-body\">
                            <label class=\"panel-title\">Ad Native</label>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Native Id</label>
                                {{form_widget(form.nativeadmobid,{\"attr\":{\"class\":\"form-control\"}})}}
                            </div>
                            <span class=\"validate-input\">{{form_errors(form.nativeadmobid)}}</span>

                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Native Display Type</label>
                                {{form_widget(form.nativetype,{\"attr\":{\"class\":\"form-control\"}})}}
                            </div>
                            <span class=\"validate-input\">{{form_errors(form.nativetype)}}</span>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Items between Native Ads</label>
                                {{form_widget(form.nativeitem,{\"attr\":{\"class\":\"form-control\"}})}}
                            </div>
                            <span class=\"validate-input\">{{form_errors(form.nativeitem)}}</span>
                        </div>
                        <span class=\"pull-right\"><a href=\"{{path(\"app_category_index\")}}\" class=\"btn btn-fill btn-yellow\"><i class=\"material-icons\">arrow_back</i> Cancel</a>{{form_widget(form.save,{attr:{\"class\":\"btn btn-fill btn-rose\"}})}}</span>
                    </div>
                    {{form_end(form)}}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock%}", "AppBundle:Home:ads.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Home/ads.html.twig");
    }
}
