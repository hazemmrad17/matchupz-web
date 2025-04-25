<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* performance_joueur/statistics.html.twig */
class __TwigTemplate_30f432093c0c467b5f9052346e06537b extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'searchbar' => [$this, 'block_searchbar'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "performance_joueur/statistics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "performance_joueur/statistics.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "performance_joueur/statistics.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_searchbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "searchbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "searchbar"));

        // line 4
        yield "    ";
        yield from $this->loadTemplate("searchbar.html.twig", "performance_joueur/statistics.html.twig", 4)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Statistiques Performance Joueur";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 10
        yield "    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <div class=\"card mb-4\">
                <h5 class=\"card-header\">Statistiques des Performances Joueurs</h5>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"card mb-4\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Total Performances</h5>
                                    <p class=\"display-4\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 20, $this->source); })()), "total_performances", [], "any", false, false, false, 20), "html", null, true);
        yield "</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"card mb-4\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Matches Joués</h5>
                                    <p class=\"display-4\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 28, $this->source); })()), "total_matches", [], "any", false, false, false, 28), "html", null, true);
        yield "</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"card mb-4\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Minutes Jouées</h5>
                                    <p class=\"display-4\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 36, $this->source); })()), "total_minutes", [], "any", false, false, false, 36), "html", null, true);
        yield "</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"card mb-4\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Buts Totaux</h5>
                                    <p class=\"display-4\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 44, $this->source); })()), "total_goals", [], "any", false, false, false, 44), "html", null, true);
        yield "</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"card mb-4\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Passes Décisives</h5>
                                    <p class=\"display-4\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 52, $this->source); })()), "total_assists", [], "any", false, false, false, 52), "html", null, true);
        yield "</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"card mb-4\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Cartons Jaunes</h5>
                                    <p class=\"display-4\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 60, $this->source); })()), "total_yellow_cards", [], "any", false, false, false, 60), "html", null, true);
        yield "</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"card mb-4\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Cartons Rouges</h5>
                                    <p class=\"display-4\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 68, $this->source); })()), "total_red_cards", [], "any", false, false, false, 68), "html", null, true);
        yield "</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "performance_joueur/statistics.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  204 => 68,  193 => 60,  182 => 52,  171 => 44,  160 => 36,  149 => 28,  138 => 20,  126 => 10,  113 => 9,  90 => 7,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block title %}Statistiques Performance Joueur{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <div class=\"card mb-4\">
                <h5 class=\"card-header\">Statistiques des Performances Joueurs</h5>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"card mb-4\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Total Performances</h5>
                                    <p class=\"display-4\">{{ stats.total_performances }}</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"card mb-4\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Matches Joués</h5>
                                    <p class=\"display-4\">{{ stats.total_matches }}</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"card mb-4\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Minutes Jouées</h5>
                                    <p class=\"display-4\">{{ stats.total_minutes }}</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"card mb-4\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Buts Totaux</h5>
                                    <p class=\"display-4\">{{ stats.total_goals }}</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"card mb-4\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Passes Décisives</h5>
                                    <p class=\"display-4\">{{ stats.total_assists }}</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"card mb-4\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Cartons Jaunes</h5>
                                    <p class=\"display-4\">{{ stats.total_yellow_cards }}</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6 col-lg-4\">
                            <div class=\"card mb-4\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">Cartons Rouges</h5>
                                    <p class=\"display-4\">{{ stats.total_red_cards }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "performance_joueur/statistics.html.twig", "C:\\Users\\Ismail\\Desktop\\matchupz\\templates\\performance_joueur\\statistics.html.twig");
    }
}
