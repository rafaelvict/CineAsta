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

/* TwigBundle:Exception:trace.html.twig */
class __TwigTemplate_326c1da7cd15a55ad269d8410984c184d067b36f88e1e3763078dc88bf26abbc extends \Twig\Template
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
        echo "<div class=\"trace-line-header break-long-words ";
        echo (((($this->getAttribute(($context["trace"] ?? null), "file", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["trace"] ?? null), "file", []), false)) : (false))) ? ("sf-toggle") : (""));
        echo "\" data-toggle-selector=\"#trace-html-";
        echo twig_escape_filter($this->env, ($context["prefix"] ?? null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
        echo "\" data-toggle-initial=\"";
        echo ((($context["_display_code_snippet"] ?? null)) ? ("display") : (""));
        echo "\">
    ";
        // line 2
        if ((($this->getAttribute(($context["trace"] ?? null), "file", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["trace"] ?? null), "file", []), false)) : (false))) {
            // line 3
            echo "        <span class=\"icon icon-close\">";
            echo twig_include($this->env, $context, "@Twig/images/icon-minus-square.svg");
            echo "</span>
        <span class=\"icon icon-open\">";
            // line 4
            echo twig_include($this->env, $context, "@Twig/images/icon-plus-square.svg");
            echo "</span>
    ";
        }
        // line 6
        echo "
    ";
        // line 7
        if ($this->getAttribute(($context["trace"] ?? null), "function", [])) {
            // line 8
            echo "        <span class=\"trace-class\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute(($context["trace"] ?? null), "class", []));
            echo "</span>";
            if ( !twig_test_empty($this->getAttribute(($context["trace"] ?? null), "type", []))) {
                echo "<span class=\"trace-type\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["trace"] ?? null), "type", []), "html", null, true);
                echo "</span>";
            }
            echo "<span class=\"trace-method\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["trace"] ?? null), "function", []), "html", null, true);
            echo "</span><span class=\"trace-arguments\">(";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatArgs($this->getAttribute(($context["trace"] ?? null), "args", []));
            echo ")</span>
    ";
        }
        // line 10
        echo "
    ";
        // line 11
        if ((($this->getAttribute(($context["trace"] ?? null), "file", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["trace"] ?? null), "file", []), false)) : (false))) {
            // line 12
            echo "        ";
            $context["line_number"] = (($this->getAttribute(($context["trace"] ?? null), "line", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["trace"] ?? null), "line", []), 1)) : (1));
            // line 13
            echo "        ";
            $context["file_link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink($this->getAttribute(($context["trace"] ?? null), "file", []), ($context["line_number"] ?? null));
            // line 14
            echo "        ";
            $context["file_path"] = twig_replace_filter(strip_tags($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFile($this->getAttribute(($context["trace"] ?? null), "file", []), ($context["line_number"] ?? null))), [(" at line " . ($context["line_number"] ?? null)) => ""]);
            // line 15
            echo "        ";
            $context["file_path_parts"] = twig_split_filter($this->env, ($context["file_path"] ?? null), twig_constant("DIRECTORY_SEPARATOR"));
            // line 16
            echo "
        <span class=\"block trace-file-path\">
            in
            <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, ($context["file_link"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_join_filter(twig_slice($this->env, ($context["file_path_parts"] ?? null), 0,  -1), twig_constant("DIRECTORY_SEPARATOR")), "html", null, true);
            echo twig_escape_filter($this->env, twig_constant("DIRECTORY_SEPARATOR"), "html", null, true);
            echo "<strong>";
            echo twig_escape_filter($this->env, twig_last($this->env, ($context["file_path_parts"] ?? null)), "html", null, true);
            echo "</strong></a>
            (line ";
            // line 20
            echo twig_escape_filter($this->env, ($context["line_number"] ?? null), "html", null, true);
            echo ")
        </span>
    ";
        }
        // line 23
        echo "</div>
";
        // line 24
        if ((($this->getAttribute(($context["trace"] ?? null), "file", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["trace"] ?? null), "file", []), false)) : (false))) {
            // line 25
            echo "    <div id=\"trace-html-";
            echo twig_escape_filter($this->env, ((($context["prefix"] ?? null) . "-") . ($context["i"] ?? null)), "html", null, true);
            echo "\" class=\"trace-code sf-toggle-content\">
        ";
            // line 26
            echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt($this->getAttribute(($context["trace"] ?? null), "file", []), $this->getAttribute(($context["trace"] ?? null), "line", []), 5), ["#DD0000" => "#183691", "#007700" => "#a71d5d", "#0000BB" => "#222222", "#FF8000" => "#969896"]);
            // line 31
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 31,  121 => 26,  116 => 25,  114 => 24,  111 => 23,  105 => 20,  96 => 19,  91 => 16,  88 => 15,  85 => 14,  82 => 13,  79 => 12,  77 => 11,  74 => 10,  58 => 8,  56 => 7,  53 => 6,  48 => 4,  43 => 3,  41 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "TwigBundle:Exception:trace.html.twig", "/www/wwwroot/tyflex.07.03/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/trace.html.twig");
    }
}
