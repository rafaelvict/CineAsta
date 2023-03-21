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
class __TwigTemplate_6005b82698c53017ecf09191264611ac6e19c415fc4bf1b88e5d93d09d2a90bf extends \Twig\Template
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
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Home:ads.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
                        <div class=\"panel-body\">
                            <label class=\"panel-title\">Ad Rewarded</label>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Rewarded Id</label>
                                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "rewardedadmobid", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <span class=\"validate-input\">";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "rewardedadmobid", []), 'errors');
        echo "</span>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Banner Display Type</label>
                                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "bannerfacebookid", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <span class=\"validate-input\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "bannerfacebookid", []), 'errors');
        echo "</span>
                        </div>
                        <div class=\"panel-body\">
                            <label class=\"panel-title\">Ad Banner</label>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Banner Id</label>
                                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "banneradmobid", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <span class=\"validate-input\">";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "banneradmobid", []), 'errors');
        echo "</span>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Banner Display Type</label>
                                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "bannertype", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <span class=\"validate-input\">";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "bannertype", []), 'errors');
        echo "</span>
                        </div>
                        <div class=\"panel-body\">
                            <label class=\"panel-title\">Ad Interstitial</label>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Interstitial Id</label>
                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "interstitialadmobid", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <span class=\"validate-input\">";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "interstitialadmobid", []), 'errors');
        echo "</span>

                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Interstitial Display Type</label>
                                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "interstitialtype", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <span class=\"validate-input\">";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "interstitialtype", []), 'errors');
        echo "</span>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Click between interstitial Ad</label>
                                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "interstitialclick", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <span class=\"validate-input\">";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "interstitialclick", []), 'errors');
        echo "</span>
                        </div>
                        <div class=\"panel-body\">
                            <label class=\"panel-title\">Ad Native</label>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Native Id</label>
                                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nativeadmobid", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <span class=\"validate-input\">";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nativeadmobid", []), 'errors');
        echo "</span>

                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Native Display Type</label>
                                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nativetype", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <span class=\"validate-input\">";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nativetype", []), 'errors');
        echo "</span>
                            <div class=\"form-group label-floating is-empty\">
                                <label class=\"control-label\">Items between Native Ads</label>
                                ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nativeitem", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            <span class=\"validate-input\">";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "nativeitem", []), 'errors');
        echo "</span>
                        </div>
                        <span class=\"pull-right\"><a href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_category_index");
        echo "\" class=\"btn btn-fill btn-yellow\"><i class=\"material-icons\">arrow_back</i> Cancel</a>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "save", []), 'widget', ["attr" => ["class" => "btn btn-fill btn-rose"]]);
        echo "</span>
                    </div>
                    ";
        // line 94
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
        return "AppBundle:Home:ads.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 94,  223 => 92,  218 => 90,  213 => 88,  207 => 85,  202 => 83,  195 => 79,  190 => 77,  181 => 71,  176 => 69,  170 => 66,  165 => 64,  158 => 60,  153 => 58,  144 => 52,  139 => 50,  133 => 47,  128 => 45,  119 => 39,  114 => 37,  108 => 34,  103 => 32,  95 => 27,  81 => 16,  77 => 15,  73 => 14,  69 => 13,  65 => 12,  61 => 11,  57 => 10,  53 => 9,  49 => 8,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Home:ads.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Home/ads.html.twig");
    }
}
