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

/* AppBundle:Home:payment.html.twig */
class __TwigTemplate_0249ab5fd9e11d30d7ae7034de992b6eeddefb7baed94340ce78641db8b6c9c7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Home:payment.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Home:payment.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Home:payment.html.twig", 1);
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
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">show_chart</i> Ads Settings</a>
                        <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_webads");
        echo "\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">show_chart</i>Web Ads Settings</a>
                        <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_payment");
        echo "\" class=\"btn btn-tab-movie-active col-md-12\"><i class=\"material-icons\">payment</i> Payment Settings</a>
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
                    <i class=\"material-icons\">payment</i>
                </div>
                <div class=\"card-content\">
                    <h4 class=\"card-title\">Payment Settings</h4>
                    <br>
                    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
                        <div class=\"panel-body\">
                            <label class=\"panel-title\">Global Settings</label>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Currency Code </label>
                                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "currency", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"panel-body\">
                            <label class=\"panel-title\">PayPal Settings</label>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">PayPal Payment </label>
                                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "paypal", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">PayPal account seller </label>
                                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "paypalaccount", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">PayPal sandbox</label>
                                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "paypalsandbox", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">PayPal Client id</label>
                                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "paypalclientid", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">PayPal Client secret</label>
                                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "paypalclientsecret", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"panel-body\">
                            <label class=\"panel-title\">Google Play</label>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Payment Settings</label>
                                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "gpay", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"panel-body\">
                            <label class=\"panel-title\">Stripe Settings</label>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Stripe Payment </label>
                                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "stripe", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Stripe Api Key</label>
                                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "stripeapikey", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Stripe Public Key</label>
                                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "stripepublickey", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"panel-body\">
                            <label class=\"panel-title\">Cash Payment Settings</label>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Cash Payment</label>
                                ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "manual", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Cash Account Infos</label>
                                ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "cashaccount", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>
                        <span class=\"pull-right\"><a href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_category_index");
        echo "\" class=\"btn btn-fill btn-yellow\"><i class=\"material-icons\">arrow_back</i> Cancel</a>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", []), 'widget', ["attr" => ["class" => "btn btn-fill btn-rose"]]);
        echo "</span>

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
        return "AppBundle:Home:payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 94,  217 => 92,  211 => 89,  204 => 85,  194 => 78,  187 => 74,  180 => 70,  170 => 63,  160 => 56,  153 => 52,  146 => 48,  139 => 44,  132 => 40,  122 => 33,  114 => 28,  99 => 16,  95 => 15,  91 => 14,  87 => 13,  83 => 12,  79 => 11,  75 => 10,  71 => 9,  67 => 8,  60 => 3,  51 => 2,  29 => 1,);
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
                        <a href=\"{{path(\"app_home_ads\")}}\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">show_chart</i> Ads Settings</a>
                        <a href=\"{{path(\"app_home_webads\")}}\" class=\"btn btn-tab-movie col-md-12\"><i class=\"material-icons\">show_chart</i>Web Ads Settings</a>
                        <a href=\"{{path(\"app_home_payment\")}}\" class=\"btn btn-tab-movie-active col-md-12\"><i class=\"material-icons\">payment</i> Payment Settings</a>
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
                    <i class=\"material-icons\">payment</i>
                </div>
                <div class=\"card-content\">
                    <h4 class=\"card-title\">Payment Settings</h4>
                    <br>
                    {{form_start(form)}}
                        <div class=\"panel-body\">
                            <label class=\"panel-title\">Global Settings</label>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Currency Code </label>
                                {{form_widget(form.currency,{\"attr\":{\"class\":\"form-control\"}})}}
                            </div>
                        </div>
                        <div class=\"panel-body\">
                            <label class=\"panel-title\">PayPal Settings</label>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">PayPal Payment </label>
                                {{form_widget(form.paypal,{\"attr\":{\"class\":\"form-control\"}})}}
                            </div>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">PayPal account seller </label>
                                {{form_widget(form.paypalaccount,{\"attr\":{\"class\":\"form-control\"}})}}
                            </div>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">PayPal sandbox</label>
                                {{form_widget(form.paypalsandbox,{\"attr\":{\"class\":\"form-control\"}})}}
                            </div>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">PayPal Client id</label>
                                {{form_widget(form.paypalclientid,{\"attr\":{\"class\":\"form-control\"}})}}
                            </div>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">PayPal Client secret</label>
                                {{form_widget(form.paypalclientsecret,{\"attr\":{\"class\":\"form-control\"}})}}
                            </div>
                        </div>
                        <div class=\"panel-body\">
                            <label class=\"panel-title\">Google Play</label>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Payment Settings</label>
                                {{form_widget(form.gpay,{\"attr\":{\"class\":\"form-control\"}})}}
                            </div>
                        </div>
                        <div class=\"panel-body\">
                            <label class=\"panel-title\">Stripe Settings</label>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Stripe Payment </label>
                                {{form_widget(form.stripe,{\"attr\":{\"class\":\"form-control\"}})}}
                            </div>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Stripe Api Key</label>
                                {{form_widget(form.stripeapikey,{\"attr\":{\"class\":\"form-control\"}})}}
                            </div>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Stripe Public Key</label>
                                {{form_widget(form.stripepublickey,{\"attr\":{\"class\":\"form-control\"}})}}
                            </div>
                        </div>
                        <div class=\"panel-body\">
                            <label class=\"panel-title\">Cash Payment Settings</label>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Cash Payment</label>
                                {{form_widget(form.manual,{\"attr\":{\"class\":\"form-control\"}})}}
                            </div>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Cash Account Infos</label>
                                {{form_widget(form.cashaccount,{\"attr\":{\"class\":\"form-control\"}})}}
                            </div>
                        </div>
                        <span class=\"pull-right\"><a href=\"{{path(\"app_category_index\")}}\" class=\"btn btn-fill btn-yellow\"><i class=\"material-icons\">arrow_back</i> Cancel</a>{{form_widget(form.save,{attr:{\"class\":\"btn btn-fill btn-rose\"}})}}</span>

                    {{form_end(form)}}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock%}", "AppBundle:Home:payment.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Home/payment.html.twig");
    }
}
