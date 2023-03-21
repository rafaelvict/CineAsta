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

/* AppBundle:Element:menu.html.twig */
class __TwigTemplate_5ef682312679d4f1fac53c505f2b9564febae820af487d20be5410a6953dbb5f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Element:menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Element:menu.html.twig"));

        // line 1
        echo "<div class=\"sidebar\" data-color=\"blue\"  data-background-color=\"black\" data-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/sidebar-1.jpg"), "html", null, true);
        echo "\">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color=\"purple | blue | green | orange | red\"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class=\"logo\">
      <a href=\"http://www.creative-tim.com\" class=\"simple-text\">
          Creative Tim
      </a>
  </div>
  <div class=\"sidebar-wrapper\">
    <div class=\"user\">
            <div class=\"photo\">
                <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar.jpg"), "html", null, true);
        echo "\">
            </div>
            <div class=\"info\">
                <a data-toggle=\"collapse\" href=\"#collapseExample\" class=\"collapsed\">
                    Admin
                    <b class=\"caret\"></b>
                </a>
                <div class=\"collapse\" id=\"collapseExample\">
                    <ul class=\"nav\" style=\"margin-top:0px\">
                        <li>
                            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password");
        echo "\">Change Password</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
         <ul class=\"nav\">
            <li ";
        // line 35
        if (twig_in_filter("home", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
            echo " class=\"active\"";
        }
        echo ">
                <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("app_home_index");
        echo "\">
                    <i class=\"material-icons\">dashboard</i>
                    <p>Tableau de bord </p>
                </a>
            </li>
            <li  ";
        // line 41
        if (twig_in_filter("categorie", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
            echo " class=\"active\"";
        }
        echo " >
                <a href=\"";
        // line 42
        echo "\">
                    <i class=\"material-icons\">view_list</i>
                    <p>Catégories</p>
                </a>
            </li>
            <li ";
        // line 47
        if (twig_in_filter("banner", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
            echo " class=\"active\"";
        }
        echo "  >
                <a href=\"";
        // line 48
        echo "\">
                    <i class=\"material-icons\">picture_in_picture</i>
                    <p>Banners</p>
                </a>
            </li>

            <li ";
        // line 54
        if (twig_in_filter("product", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
            echo " class=\"active\"";
        }
        echo "  >
                <a href=\"";
        // line 55
        echo "\">
                    <i class=\"material-icons\">view_agenda</i>
                    <p>Produits</p>
                </a>
            </li>
            <li ";
        // line 60
        if (twig_in_filter("commande_", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
            echo " class=\"active\"";
        }
        echo "  >
                <a href=\"";
        // line 61
        echo "\">
                    <i class=\"material-icons\">shopping_cart</i>
                    <p>Commandes</p>
                </a>
            </li>
            <li ";
        // line 66
        if (twig_in_filter("coupon_", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
            echo " class=\"active\"";
        }
        echo "  >
                <a href=\"";
        // line 67
        echo "\">
                <i class=\"material-icons\">card_giftcard</i>
                    <p>Codes promotionnels</p>
                </a>
            </li>
            <li ";
        // line 72
        if (twig_in_filter("user", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
            echo " class=\"active\"";
        }
        echo "  >
                <a href=\"";
        // line 73
        echo "\">
                <i class=\"material-icons\">group</i>
                    <p>Les utilisateurs</p>
                </a>
            </li>
        </ul>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Element:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 73,  163 => 72,  156 => 67,  150 => 66,  143 => 61,  137 => 60,  130 => 55,  124 => 54,  116 => 48,  110 => 47,  103 => 42,  97 => 41,  89 => 36,  83 => 35,  73 => 28,  67 => 25,  54 => 15,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"sidebar\" data-color=\"blue\"  data-background-color=\"black\" data-image=\"{{asset(\"img/sidebar-1.jpg\")}}\">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color=\"purple | blue | green | orange | red\"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class=\"logo\">
      <a href=\"http://www.creative-tim.com\" class=\"simple-text\">
          Creative Tim
      </a>
  </div>
  <div class=\"sidebar-wrapper\">
    <div class=\"user\">
            <div class=\"photo\">
                <img src=\"{{asset(\"img/avatar.jpg\")}}\">
            </div>
            <div class=\"info\">
                <a data-toggle=\"collapse\" href=\"#collapseExample\" class=\"collapsed\">
                    Admin
                    <b class=\"caret\"></b>
                </a>
                <div class=\"collapse\" id=\"collapseExample\">
                    <ul class=\"nav\" style=\"margin-top:0px\">
                        <li>
                            <a href=\"{{path(\"fos_user_change_password\")}}\">Change Password</a>
                        </li>
                        <li>
                            <a href=\"{{path(\"fos_user_security_logout\")}}\">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
         <ul class=\"nav\">
            <li {% if \"home\" in  app.request.attributes.get('_route') %} class=\"active\"{% endif %}>
                <a href=\"{{path(\"app_home_index\")}}\">
                    <i class=\"material-icons\">dashboard</i>
                    <p>Tableau de bord </p>
                </a>
            </li>
            <li  {% if \"categorie\" in  app.request.attributes.get('_route') %} class=\"active\"{% endif %} >
                <a href=\"{# path(\"app_categorie_index\") #}\">
                    <i class=\"material-icons\">view_list</i>
                    <p>Catégories</p>
                </a>
            </li>
            <li {% if \"banner\" in  app.request.attributes.get('_route') %} class=\"active\"{% endif %}  >
                <a href=\"{#path(\"app_banner_index\")#}\">
                    <i class=\"material-icons\">picture_in_picture</i>
                    <p>Banners</p>
                </a>
            </li>

            <li {% if \"product\" in  app.request.attributes.get('_route') %} class=\"active\"{% endif %}  >
                <a href=\"{#path(\"app_product_index\")#}\">
                    <i class=\"material-icons\">view_agenda</i>
                    <p>Produits</p>
                </a>
            </li>
            <li {% if \"commande_\" in  app.request.attributes.get('_route') %} class=\"active\"{% endif %}  >
                <a href=\"{#path(\"app_commande_index\")#}\">
                    <i class=\"material-icons\">shopping_cart</i>
                    <p>Commandes</p>
                </a>
            </li>
            <li {% if \"coupon_\" in  app.request.attributes.get('_route') %} class=\"active\"{% endif %}  >
                <a href=\"{#path(\"app_coupon_index\")#}\">
                <i class=\"material-icons\">card_giftcard</i>
                    <p>Codes promotionnels</p>
                </a>
            </li>
            <li {% if \"user\" in  app.request.attributes.get('_route') %} class=\"active\"{% endif %}  >
                <a href=\"{#path(\"app_user_index\")#}\">
                <i class=\"material-icons\">group</i>
                    <p>Les utilisateurs</p>
                </a>
            </li>
        </ul>
    </div>
</div>
", "AppBundle:Element:menu.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Element/menu.html.twig");
    }
}
