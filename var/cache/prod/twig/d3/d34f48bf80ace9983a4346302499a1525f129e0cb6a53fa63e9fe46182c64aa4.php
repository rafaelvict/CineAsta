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
class __TwigTemplate_bcc68db18c1fc37622d173ec7c4f922e6e1a67e9597ff9b48fb62893beaf0277 extends \Twig\Template
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
        if (twig_in_filter("home", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
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
        if (twig_in_filter("categorie", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
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
        if (twig_in_filter("banner", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
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
        if (twig_in_filter("product", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
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
        if (twig_in_filter("commande_", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
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
        if (twig_in_filter("coupon_", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
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
        if (twig_in_filter("user", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", []), "attributes", []), "get", [0 => "_route"], "method"))) {
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
        return array (  163 => 73,  157 => 72,  150 => 67,  144 => 66,  137 => 61,  131 => 60,  124 => 55,  118 => 54,  110 => 48,  104 => 47,  97 => 42,  91 => 41,  83 => 36,  77 => 35,  67 => 28,  61 => 25,  48 => 15,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "AppBundle:Element:menu.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Element/menu.html.twig");
    }
}
