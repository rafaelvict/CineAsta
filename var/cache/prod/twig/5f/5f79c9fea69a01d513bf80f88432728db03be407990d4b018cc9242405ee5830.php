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

/* UserBundle:User:edit.html.twig */
class __TwigTemplate_846dc4815fb333d335cc540422d5e2a33d92c95c073f90b88cdd5f04a2c917d7 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "UserBundle:User:edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        // line 3
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
           ";
        // line 5
        if (($this->getAttribute(($context["user"] ?? null), "media", []) != null)) {
            // line 6
            echo "                ";
            if (($this->getAttribute($this->getAttribute(($context["user"] ?? null), "media", []), "type", []) == "link")) {
                // line 7
                echo "                    ";
                $context["image"] = $this->getAttribute($this->getAttribute(($context["user"] ?? null), "media", []), "url", []);
                // line 8
                echo "                ";
            } else {
                // line 9
                echo "                    ";
                $context["image"] = $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["user"] ?? null), "media", []), "link", [])), "actor_thumb");
                // line 10
                echo "                ";
            }
            // line 11
            echo "            ";
        } else {
            // line 12
            echo "                ";
            $context["image"] = $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar.jpg"), "actor_thumb");
            // line 13
            echo "            ";
        }
        // line 14
        echo "            <div class=\"col-md-12\" style=\" height: auto; text-align:center;background-image:url(";
        echo twig_escape_filter($this->env, ($context["image"] ?? null), "html", null, true);
        echo ");background-position: center;background-size: 100%;text-align: center;\">
                ";
        // line 15
        if (($this->getAttribute(($context["user"] ?? null), "media", []) != null)) {
            // line 16
            echo "                    ";
            if (($this->getAttribute($this->getAttribute(($context["user"] ?? null), "media", []), "type", []) == "link")) {
                // line 17
                echo "                        <img  style=\"border-radius:300px;margin:10px;height:100px;width:100px;border: 5px solid rgb(255, 247, 247);\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["user"] ?? null), "media", []), "url", []), "html", null, true);
                echo "\"  >
                    ";
            } else {
                // line 19
                echo "                        <img  style=\"border-radius:300px;margin:10px;height:100px;width:100px;border: 5px solid rgb(255, 247, 247);\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["user"] ?? null), "media", []), "link", [])), "actor_thumb"), "html", null, true);
                echo "\"  >
                    ";
            }
            // line 21
            echo "                ";
        } else {
            // line 22
            echo "                    <img class=\"avatar-char palette-Red-400 bg\"  style=\"border-radius: 100px;    border: 0.5px solid #ccc;\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/avatar.jpg"), "actor_thumb"), "html", null, true);
            echo "\"  >
                ";
        }
        // line 24
        echo "                <h3 style=\" color: white; font-weight: bold\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "name", []), "html", null, true);
        echo "</h3>
            </div>
            <div  class=\"col-md-12\" style=\"border:1px solid #ccc;height:70px;background:white\">
                <div class=\"row\">
                    <div  class=\"col-md-3\" style=\"border-right:1px solid #ccc;height:70px;background:white\">
                        <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_user_edit", ["id" => $this->getAttribute(($context["user"] ?? null), "id", [])]), "html", null, true);
        echo "\" style=\"color:black;font-size:20px;line-height: 70px;font-weight: bold;\">Edit infos</a>
                    </div>
                    <div  class=\"col-md-3\" style=\"border-right:1px solid #ccc;height:70px;background:white\">
                        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_user_comments", ["id" => $this->getAttribute(($context["user"] ?? null), "id", [])]), "html", null, true);
        echo "\" style=\"color:black;font-size:20px;line-height: 70px;font-weight: bold;\">Comments </a>
                    </div>
                    <div  class=\"col-md-3\" style=\"border-right:1px solid #ccc;height:70px;background:white\">
                        <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_user_ratings", ["id" => $this->getAttribute(($context["user"] ?? null), "id", [])]), "html", null, true);
        echo "\" style=\"color:black;font-size:20px;line-height: 70px;font-weight: bold;\">Ratings </a>
                    </div>
                    <div  class=\"col-md-3\" style=\"border-right:1px solid #ccc;height:70px;background:white\">
                        <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_admin_user_subscriptions", ["id" => $this->getAttribute(($context["user"] ?? null), "id", [])]), "html", null, true);
        echo "\" style=\"color:black;font-size:20px;line-height: 70px;font-weight: bold;\">Subscriptions </a>
                    </div>
                </div>
                
            </div>
            <div  class=\"col-md-12\" style=\"height:20px;\">
                
            </div>
            <div class=\"col-sm-offset-2  col-md-8\">
                <div class=\"card\">
                    <div class=\"card-header card-header-icon\" data-background-color=\"rose\">
                        <i class=\"material-icons\">group</i>
                    </div>
                    <div class=\"card-content\">
                        <h4 class=\"card-title\">Edit :  ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", []), "value", []), "name", []), "html", null, true);
        echo "</h4>
                        <br>
                        <div class=\"card-body card-padding\">
                            ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
                            <div class=\"form-group fg-line\">
                                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", []), 'label', ["label_attr" => ["class" => ""]]);
        echo "
                                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", []), 'errors');
        echo "
                            </div>
                            <div class=\"form-group fg-line\">
                                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", []), 'label', ["label_attr" => ["class" => ""]]);
        echo "
                                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "email", []), 'errors');
        echo "
                            </div>
                            <div class=\"form-group fg-line\">
                                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "type", []), 'label', ["label_attr" => ["class" => ""]]);
        echo "
                                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "type", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "type", []), 'errors');
        echo "
                            </div>
                            <div >
                                <label>
                                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "enabled", []), 'widget');
        echo "
                                    Enabled
                                </label>
                            </div>
                            <br>
                            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "save", []), 'widget', ["attr" => ["class" => "btn btn-success btn-lg waves-effect pull-right"]]);
        echo "
                            ";
        // line 79
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:User:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 79,  209 => 78,  201 => 73,  194 => 69,  190 => 68,  186 => 67,  180 => 64,  176 => 63,  172 => 62,  166 => 59,  162 => 58,  158 => 57,  153 => 55,  147 => 52,  130 => 38,  124 => 35,  118 => 32,  112 => 29,  103 => 24,  97 => 22,  94 => 21,  88 => 19,  82 => 17,  79 => 16,  77 => 15,  72 => 14,  69 => 13,  66 => 12,  63 => 11,  60 => 10,  57 => 9,  54 => 8,  51 => 7,  48 => 6,  46 => 5,  42 => 3,  39 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "UserBundle:User:edit.html.twig", "/www/wwwroot/tyflex.07.03/src/UserBundle/Resources/views/User/edit.html.twig");
    }
}
