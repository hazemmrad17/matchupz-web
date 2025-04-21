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

/* schedule/show.html.twig */
class __TwigTemplate_99dd0ccd27d04459f54aaea5286ec78c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "schedule/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "schedule/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "schedule/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        // line 3
        yield "        ";
        yield from $this->loadTemplate("searchbar.html.twig", "schedule/show.html.twig", 3)->unwrap()->yield($context);
        // line 4
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Plannings /</span> Détails du planning
            </h4>

            <div class=\"col-xl\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Schedule #";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 16, $this->source); })()), "idSchedule", [], "any", false, false, false, 16), "html", null, true);
        yield "</h5>
                        <small class=\"text-muted float-end\">Détails</small>
                    </div>
                    <div class=\"card-body\">
                        <dl class=\"row\">
                            <dt class=\"col-sm-3\">Date du Match</dt>
                            <dd class=\"col-sm-9\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 22, $this->source); })()), "dateMatch", [], "any", false, false, false, 22), "d/m/Y"), "html", null, true);
        yield "</dd>

                            <dt class=\"col-sm-3\">Heure de Début</dt>
                            <dd class=\"col-sm-9\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 25, $this->source); })()), "startTime", [], "any", false, false, false, 25), "H:i"), "html", null, true);
        yield "</dd>

                            <dt class=\"col-sm-3\">Heure de Fin</dt>
                            <dd class=\"col-sm-9\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 28, $this->source); })()), "endTime", [], "any", false, false, false, 28), "H:i"), "html", null, true);
        yield "</dd>

                            <dt class=\"col-sm-3\">Match</dt>
                            <dd class=\"col-sm-9\">";
        // line 31
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 31, $this->source); })()), "matchEntity", [], "any", false, false, false, 31)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 31, $this->source); })()), "matchEntity", [], "any", false, false, false, 31), "c1", [], "any", false, false, false, 31) . " vs ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 31, $this->source); })()), "matchEntity", [], "any", false, false, false, 31), "c2", [], "any", false, false, false, 31)), "html", null, true)) : ("N/A"));
        yield "</dd>

                            <dt class=\"col-sm-3\">Espace Sportif</dt>
                            <dd class=\"col-sm-9\">";
        // line 34
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 34, $this->source); })()), "espaceSportif", [], "any", false, false, false, 34)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 34, $this->source); })()), "espaceSportif", [], "any", false, false, false, 34), "nomEspace", [], "any", false, false, false, 34), "html", null, true)) : ("N/A"));
        yield "</dd>
                        </dl>
                        <a href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_edit", ["idSchedule" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["schedule"]) || array_key_exists("schedule", $context) ? $context["schedule"] : (function () { throw new RuntimeError('Variable "schedule" does not exist.', 36, $this->source); })()), "idSchedule", [], "any", false, false, false, 36)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">Modifier</a>
                        <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_main");
        yield "\" class=\"btn btn-secondary\">Retour</a>
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
        return "schedule/show.html.twig";
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
        return array (  157 => 37,  153 => 36,  148 => 34,  142 => 31,  136 => 28,  130 => 25,  124 => 22,  115 => 16,  104 => 7,  91 => 6,  80 => 4,  77 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
    {% block searchbar %}
        {% include 'searchbar.html.twig' %}
    {% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Plannings /</span> Détails du planning
            </h4>

            <div class=\"col-xl\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Schedule #{{ schedule.idSchedule }}</h5>
                        <small class=\"text-muted float-end\">Détails</small>
                    </div>
                    <div class=\"card-body\">
                        <dl class=\"row\">
                            <dt class=\"col-sm-3\">Date du Match</dt>
                            <dd class=\"col-sm-9\">{{ schedule.dateMatch|date('d/m/Y') }}</dd>

                            <dt class=\"col-sm-3\">Heure de Début</dt>
                            <dd class=\"col-sm-9\">{{ schedule.startTime|date('H:i') }}</dd>

                            <dt class=\"col-sm-3\">Heure de Fin</dt>
                            <dd class=\"col-sm-9\">{{ schedule.endTime|date('H:i') }}</dd>

                            <dt class=\"col-sm-3\">Match</dt>
                            <dd class=\"col-sm-9\">{{ schedule.matchEntity ? schedule.matchEntity.c1 ~ ' vs ' ~ schedule.matchEntity.c2 : 'N/A' }}</dd>

                            <dt class=\"col-sm-3\">Espace Sportif</dt>
                            <dd class=\"col-sm-9\">{{ schedule.espaceSportif ? schedule.espaceSportif.nomEspace : 'N/A' }}</dd>
                        </dl>
                        <a href=\"{{ path('schedule_edit', {'idSchedule': schedule.idSchedule}) }}\" class=\"btn btn-primary\">Modifier</a>
                        <a href=\"{{ path('schedule_main') }}\" class=\"btn btn-secondary\">Retour</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "schedule/show.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-integration\\matchupz-web-integration\\templates\\schedule\\show.html.twig");
    }
}
