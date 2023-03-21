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

/* WebBundle:Subscription:manual.html.twig */
class __TwigTemplate_eb036cb907c948bee89becea3a9eabd69a45fde10c430355116fffcb7cfc6d12 extends \Twig\Template
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
        return "WebBundle::login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["subtitle"] = "Assinaturas";
        // line 3
        $context["og_description"] = "Assinaturas";
        // line 4
        $context["og_type"] = "null";
        // line 5
        $context["og_image"] = "null";
        // line 6
        $context["keywords"] = "null";
        // line 1
        $this->parent = $this->loadTemplate("WebBundle::login.html.twig", "WebBundle:Subscription:manual.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        // line 8
        echo "
<div class=\"tab-title\">Inscreva-se agora!</div>

<div id=\"subscribe-plan\">
\t<div class=\"subscribe-title\" id=\"selected_pack\">
\t\t<span>1</span>

\t\t<h5>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subscription"] ?? null), "pack", []), "html", null, true);
        echo "</h5>
\t\t<span class=\"fas fa-check float-right\"></span>
\t\t<span class=\"float-right price-step-1\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subscription"] ?? null), "price", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["subscription"] ?? null), "currency", []), "html", null, true);
        echo "</span>
\t</div>
\t<div class=\"subscribe-title\" id=\"selected_pack\">
\t\t<span>2</span>

\t\t<h5>Forma de pagamento </h5>
\t\t<span class=\"fas fa-check float-right\"></span>
\t\t<span class=\"float-right price-step-1\"><i class='fas fa-money-check-alt'></i>Pagamento por PIX </span>
\t</div>
\t<div class=\"subscribe-title\">
\t\t<span>3</span>
\t\t<h5>Carregue suas informações de pagamento</h5>
\t\t<span class=\"float-right\"><i class=\"fas fa-money-check-alt\"></i></span>
\t</div>
\t\t<p>
        <div class=\"form-group\">
        \t<label>Detalhes da nossa conta de pagamento :</label>
        \t<p class=\"banque-account\">
                ";
        // line 35
        echo nl2br(twig_escape_filter($this->env, ($context["account"] ?? null), "html", null, true));
        echo "
        \t</p>
        </div>
\t\t</p>
\t\t";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        <div class=\"form-group\">
        \t<label>Coloque seu E-mail</label>
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "transaction", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            <span class=\"validate-input\">";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "transaction", []), 'errors');
        echo "</span>
        </div>
        <div class=\"form-group\">
        \t<label>Confirme seu E-mail</label>
            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "infos", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
            <span class=\"validate-input\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "infos", []), 'errors');
        echo "</span>
        </div>
        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "file", []), 'widget', ["attr" => ["class" => "float-right btn btn-primary"]]);
        echo "</span>
        <div class=\"file-input\">
        \t<div class=\"message-after\">\t<i class=\"fas fa-check \"></i> O arquivo foi selecionado</div>
        \t<div class=\"message-before\">\t<i class=\"fas fa-money-check-alt\"></i> Clique para fazer upload do arquivo aqui</div>
       \t</div>
        <span class=\"validate-input\">";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "file", []), 'errors');
        echo "</span>
        <button class=\"float-right btn btn-primary\"><i class=\"fas fa-check\"></i> Envie seu pagamento</button>
        ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

</div>

";
    }

    public function getTemplateName()
    {
        return "WebBundle:Subscription:manual.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 57,  131 => 55,  123 => 50,  118 => 48,  114 => 47,  107 => 43,  103 => 42,  97 => 39,  90 => 35,  67 => 17,  62 => 15,  53 => 8,  50 => 7,  45 => 1,  43 => 6,  41 => 5,  39 => 4,  37 => 3,  35 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "WebBundle:Subscription:manual.html.twig", "/www/wwwroot/tyflex.07.03/src/WebBundle/Resources/views/Subscription/manual.html.twig");
    }
}
