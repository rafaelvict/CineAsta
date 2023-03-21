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

/* AppBundle:Home:index.html.twig */
class __TwigTemplate_c32816f1940567043e78f7342be7144e52154979d2aff34bf15a599619c4d9f2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Home:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AppBundle:Home:index.html.twig"));

        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Home:index.html.twig", 1);
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
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"red\">
                    <i class=\"material-icons\">credit_card</i>
                </div>
                <div class=\"card-content\">
                    <h3 class=\"title\">";
        // line 11
        echo twig_escape_filter($this->env, ($context["subscription_count"] ?? $this->getContext($context, "subscription_count")), "html", null, true);
        echo "</h3>
                    <p class=\"category\">Subscription</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats my-statis-card\">
                <div class=\"card-header\" data-background-color=\"blue\">
                    <i class=\"material-icons\">movie</i>
                </div>
                <div class=\"card-content\">
                    <h3 class=\"title\">";
        // line 23
        echo twig_escape_filter($this->env, ($context["movies_count"] ?? $this->getContext($context, "movies_count")), "html", null, true);
        echo "</h3>
                    <p class=\"category\">Movies</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats my-statis-card\">
                <div class=\"card-header\" data-background-color=\"orange\">
                    <i class=\"material-icons\">tv</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">";
        // line 35
        echo twig_escape_filter($this->env, ($context["series_count"] ?? $this->getContext($context, "series_count")), "html", null, true);
        echo "</h3>
                    <p class=\"category\">TV Shows</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"purple\">
                    <i class=\"material-icons\">live_tv</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">";
        // line 47
        echo twig_escape_filter($this->env, ($context["channels_count"] ?? $this->getContext($context, "channels_count")), "html", null, true);
        echo "</h3>
                    <p class=\"category\">TV channels</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats my-statis-card\">
                <div class=\"card-header\" data-background-color=\"rose\">
                    <i class=\"material-icons\">view_list</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">";
        // line 59
        echo twig_escape_filter($this->env, ($context["category_count"] ?? $this->getContext($context, "category_count")), "html", null, true);
        echo "</h3>
                    <p class=\"category\">Categories</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"green\">
                    <i class=\"material-icons\">label</i>
                </div>
                <div class=\"card-content\">
                    <h3 class=\"title\">";
        // line 71
        echo twig_escape_filter($this->env, ($context["genre_count"] ?? $this->getContext($context, "genre_count")), "html", null, true);
        echo "</h3>
                    <p class=\"category\">Genres</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"red\">
                    <i class=\"material-icons\">flag</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">";
        // line 83
        echo twig_escape_filter($this->env, ($context["language_count"] ?? $this->getContext($context, "language_count")), "html", null, true);
        echo "</h3>
                    <p class=\"category\">Languages</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"blue\">
                    <i class=\"material-icons\">public</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">";
        // line 95
        echo twig_escape_filter($this->env, ($context["country_count"] ?? $this->getContext($context, "country_count")), "html", null, true);
        echo "</h3>
                    <p class=\"category\">Countries</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"orange\">
                    <i class=\"material-icons\">recent_actors</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">";
        // line 107
        echo twig_escape_filter($this->env, ($context["actor_count"] ?? $this->getContext($context, "actor_count")), "html", null, true);
        echo "</h3>
                    <p class=\"category\">Actors</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"purple\">
                    <i class=\"material-icons\">slideshow</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">";
        // line 119
        echo twig_escape_filter($this->env, ($context["slide_count"] ?? $this->getContext($context, "slide_count")), "html", null, true);
        echo "</h3>
                    <p class=\"category\">Slides</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"rose\">
                    <i class=\"material-icons\">remove_red_eye</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">";
        // line 131
        echo twig_escape_filter($this->env, ($context["movie_views"] ?? $this->getContext($context, "movie_views")), "html", null, true);
        echo "</h3>
                    <p class=\"category\">Movies Views</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"green\">
                    <i class=\"material-icons\">cloud_download</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">";
        // line 143
        echo twig_escape_filter($this->env, ($context["movie_downloads"] ?? $this->getContext($context, "movie_downloads")), "html", null, true);
        echo "</h3>
                    <p class=\"category\">Movies Downloads</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"red\">
                    <i class=\"material-icons\">share</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">";
        // line 155
        echo twig_escape_filter($this->env, ($context["movie_shares"] ?? $this->getContext($context, "movie_shares")), "html", null, true);
        echo "</h3>
                    <p class=\"category\">Movies Shares</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"blue\">
                    <i class=\"material-icons\">remove_red_eye</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">";
        // line 167
        echo twig_escape_filter($this->env, ($context["serie_views"] ?? $this->getContext($context, "serie_views")), "html", null, true);
        echo "</h3>
                    <p class=\"category\">TV Shows Views</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"orange\">
                    <i class=\"material-icons\">cloud_download</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">";
        // line 179
        echo twig_escape_filter($this->env, ($context["serie_downloads"] ?? $this->getContext($context, "serie_downloads")), "html", null, true);
        echo "</h3>
                    <p class=\"category\">TV Shows Downloads</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"purple\">
                    <i class=\"material-icons\">share</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">";
        // line 191
        echo twig_escape_filter($this->env, ($context["serie_shares"] ?? $this->getContext($context, "serie_shares")), "html", null, true);
        echo "</h3>
                    <p class=\"category\">TV Shows Shares</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"rose\">
                    <i class=\"material-icons\">remove_red_eye</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">";
        // line 203
        echo twig_escape_filter($this->env, ($context["channel_views"] ?? $this->getContext($context, "channel_views")), "html", null, true);
        echo "</h3>
                    <p class=\"category\">Channels Views</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"green\">
                    <i class=\"material-icons\">share</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">";
        // line 215
        echo twig_escape_filter($this->env, ($context["channel_shares"] ?? $this->getContext($context, "channel_shares")), "html", null, true);
        echo "</h3>
                    <p class=\"category\">Channels Shares</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"red\">
                    <i class=\"material-icons\">comment</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">";
        // line 227
        echo twig_escape_filter($this->env, ($context["comment_count"] ?? $this->getContext($context, "comment_count")), "html", null, true);
        echo "</h3>
                    <p class=\"category\">Comments</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"blue\">
                    <i class=\"material-icons\">message</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">";
        // line 239
        echo twig_escape_filter($this->env, ($context["support_count"] ?? $this->getContext($context, "support_count")), "html", null, true);
        echo "</h3>
                    <p class=\"category\">Support and Rating</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"orange\">
                    <i class=\"material-icons\">devices_other</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">";
        // line 251
        echo twig_escape_filter($this->env, ($context["devices_count"] ?? $this->getContext($context, "devices_count")), "html", null, true);
        echo "</h3>
                    <p class=\"category\">Installs</p>
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
        return "AppBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 251,  355 => 239,  340 => 227,  325 => 215,  310 => 203,  295 => 191,  280 => 179,  265 => 167,  250 => 155,  235 => 143,  220 => 131,  205 => 119,  190 => 107,  175 => 95,  160 => 83,  145 => 71,  130 => 59,  115 => 47,  100 => 35,  85 => 23,  70 => 11,  60 => 3,  51 => 2,  29 => 1,);
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
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"red\">
                    <i class=\"material-icons\">credit_card</i>
                </div>
                <div class=\"card-content\">
                    <h3 class=\"title\">{{subscription_count}}</h3>
                    <p class=\"category\">Subscription</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats my-statis-card\">
                <div class=\"card-header\" data-background-color=\"blue\">
                    <i class=\"material-icons\">movie</i>
                </div>
                <div class=\"card-content\">
                    <h3 class=\"title\">{{movies_count}}</h3>
                    <p class=\"category\">Movies</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats my-statis-card\">
                <div class=\"card-header\" data-background-color=\"orange\">
                    <i class=\"material-icons\">tv</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">{{series_count}}</h3>
                    <p class=\"category\">TV Shows</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"purple\">
                    <i class=\"material-icons\">live_tv</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">{{channels_count}}</h3>
                    <p class=\"category\">TV channels</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats my-statis-card\">
                <div class=\"card-header\" data-background-color=\"rose\">
                    <i class=\"material-icons\">view_list</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">{{category_count}}</h3>
                    <p class=\"category\">Categories</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"green\">
                    <i class=\"material-icons\">label</i>
                </div>
                <div class=\"card-content\">
                    <h3 class=\"title\">{{genre_count}}</h3>
                    <p class=\"category\">Genres</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"red\">
                    <i class=\"material-icons\">flag</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">{{language_count}}</h3>
                    <p class=\"category\">Languages</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"blue\">
                    <i class=\"material-icons\">public</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">{{country_count}}</h3>
                    <p class=\"category\">Countries</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"orange\">
                    <i class=\"material-icons\">recent_actors</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">{{actor_count}}</h3>
                    <p class=\"category\">Actors</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"purple\">
                    <i class=\"material-icons\">slideshow</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">{{slide_count}}</h3>
                    <p class=\"category\">Slides</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"rose\">
                    <i class=\"material-icons\">remove_red_eye</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">{{movie_views}}</h3>
                    <p class=\"category\">Movies Views</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"green\">
                    <i class=\"material-icons\">cloud_download</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">{{movie_downloads}}</h3>
                    <p class=\"category\">Movies Downloads</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"red\">
                    <i class=\"material-icons\">share</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">{{movie_shares}}</h3>
                    <p class=\"category\">Movies Shares</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"blue\">
                    <i class=\"material-icons\">remove_red_eye</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">{{serie_views}}</h3>
                    <p class=\"category\">TV Shows Views</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"orange\">
                    <i class=\"material-icons\">cloud_download</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">{{serie_downloads}}</h3>
                    <p class=\"category\">TV Shows Downloads</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"purple\">
                    <i class=\"material-icons\">share</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">{{serie_shares}}</h3>
                    <p class=\"category\">TV Shows Shares</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"rose\">
                    <i class=\"material-icons\">remove_red_eye</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">{{channel_views}}</h3>
                    <p class=\"category\">Channels Views</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"green\">
                    <i class=\"material-icons\">share</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">{{channel_shares}}</h3>
                    <p class=\"category\">Channels Shares</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"red\">
                    <i class=\"material-icons\">comment</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">{{comment_count}}</h3>
                    <p class=\"category\">Comments</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"blue\">
                    <i class=\"material-icons\">message</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">{{support_count}}</h3>
                    <p class=\"category\">Support and Rating</p>
                </div>

            </div>
        </div>
        <div class=\"col-lg-4 col-md-6 col-sm-6\">
            <div class=\"card card-stats  my-statis-card\">
                <div class=\"card-header\" data-background-color=\"orange\">
                    <i class=\"material-icons\">devices_other</i>
                </div>
                <div class=\"card-content\">
                     <h3 class=\"title\">{{devices_count}}</h3>
                    <p class=\"category\">Installs</p>
                </div>

            </div>
        </div>
    </div>
</div>
{% endblock%}", "AppBundle:Home:index.html.twig", "/www/wwwroot/tyflex.07.03/src/AppBundle/Resources/views/Home/index.html.twig");
    }
}
