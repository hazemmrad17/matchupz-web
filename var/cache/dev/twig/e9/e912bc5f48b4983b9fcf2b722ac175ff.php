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

/* reservation/statistics.html.twig */
class __TwigTemplate_f00776589813682d0c5b5b69fefb0462 extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/statistics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/statistics.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/statistics.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Statistiques des Réservations";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <h4 class=\"fw-bold py-3 mb-4\">Statistiques des Réservations</h4>

    <div class=\"row\">
        <!-- Total Reservations -->
        <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"card-title d-flex align-items-start justify-content-between\">
                        <div class=\"avatar flex-shrink-0\">
                            <img src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/chart-success.png"), "html", null, true);
        yield "\" alt=\"Reservations\" class=\"rounded\" />
                        </div>
                    </div>
                    <span class=\"fw-semibold d-block mb-1\">Total Réservations</span>
                    <h3 class=\"card-title mb-2\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalReservations"]) || array_key_exists("totalReservations", $context) ? $context["totalReservations"] : (function () { throw new RuntimeError('Variable "totalReservations" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "</h3>
                    <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Mis à jour aujourd'hui</small>
                </div>
            </div>
        </div>

        <!-- Status Distribution -->
        <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Distribution par Statut</h5></div>
                <div class=\"card-body\"><div id=\"statusChart\"></div></div>
            </div>
        </div>

        <!-- Motif Distribution -->
        <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Distribution par Motif</h5></div>
                <div class=\"card-body\"><div id=\"motifChart\"></div></div>
            </div>
        </div>

        <!-- All Reservations List -->
        <div class=\"col-12 col-lg-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Toutes les Réservations</h5></div>
                <div class=\"card-body\" style=\"max-height: 400px; overflow-y: auto;\">
                    <ul class=\"p-0 m-0\">
                        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allReservations"]) || array_key_exists("allReservations", $context) ? $context["allReservations"] : (function () { throw new RuntimeError('Variable "allReservations" does not exist.', 47, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 48
            yield "                            <li class=\"d-flex mb-4 pb-1\">
                                <div class=\"avatar flex-shrink-0 me-3\">
                                    <img src=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/chart.png"), "html", null, true);
            yield "\" alt=\"Reservation\" class=\"rounded\" />
                                </div>
                                <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                    <div class=\"me-2\">
                                        <h6 class=\"mb-0\">";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "espacesportif", [], "any", false, false, false, 54), "nom_espace", [], "any", false, false, false, 54), "html", null, true);
            yield "</h6>
                                        <small class=\"text-muted\">";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateReservee", [], "any", false, false, false, 55), "d/m/Y H:i"), "html", null, true);
            yield "</small>
                                    </div>
                                    <div class=\"user-progress\">
                                        <small class=\"fw-semibold\">";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "status", [], "any", false, false, false, 58), "html", null, true);
            yield "</small>
                                    </div>
                                </div>
                            </li>
                        ";
            $context['_iterated'] = true;
        }
        // line 62
        if (!$context['_iterated']) {
            // line 63
            yield "                            <li>Aucune réservation trouvée.</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "                    </ul>
                </div>
            </div>
        </div>

        <!-- Espace Distribution -->
        <div class=\"col-12 col-lg-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Réservations par Espace Sportif</h5></div>
                <div class=\"card-body\"><div id=\"espaceChart\"></div></div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 80
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 81
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Status Distribution Chart
            new ApexCharts(document.querySelector(\"#statusChart\"), {
                chart: { type: 'pie', height: 350 },
                series: [";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statusDistribution"]) || array_key_exists("statusDistribution", $context) ? $context["statusDistribution"] : (function () { throw new RuntimeError('Variable "statusDistribution" does not exist.', 87, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["status"] => $context["count"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 87)) {
                yield ",";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['status'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                labels: [";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statusDistribution"]) || array_key_exists("statusDistribution", $context) ? $context["statusDistribution"] : (function () { throw new RuntimeError('Variable "statusDistribution" does not exist.', 88, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["status"] => $context["count"]) {
            yield "\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["status"], "html", null, true);
            yield "\"";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 88)) {
                yield ",";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['status'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                colors: ['#28a745', '#dc3545', '#ffc107', '#17a2b8']
            }).render();

            // Motif Distribution Chart
            new ApexCharts(document.querySelector(\"#motifChart\"), {
                chart: { type: 'pie', height: 350 },
                series: [";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["motifDistribution"]) || array_key_exists("motifDistribution", $context) ? $context["motifDistribution"] : (function () { throw new RuntimeError('Variable "motifDistribution" does not exist.', 95, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["motif"] => $context["count"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 95)) {
                yield ",";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['motif'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                labels: [";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["motifDistribution"]) || array_key_exists("motifDistribution", $context) ? $context["motifDistribution"] : (function () { throw new RuntimeError('Variable "motifDistribution" does not exist.', 96, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["motif"] => $context["count"]) {
            yield "\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["motif"], "html", null, true);
            yield "\"";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 96)) {
                yield ",";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['motif'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                colors: ['#007bff', '#28a745', '#dc3545', '#ffc107']
            }).render();

            // Espace Distribution Chart
            new ApexCharts(document.querySelector(\"#espaceChart\"), {
                chart: { type: 'bar', height: 350 },
                series: [{
                    name: 'Réservations',
                    data: [";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["espaceDistribution"]) || array_key_exists("espaceDistribution", $context) ? $context["espaceDistribution"] : (function () { throw new RuntimeError('Variable "espaceDistribution" does not exist.', 105, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["espace"] => $context["count"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 105)) {
                yield ",";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['espace'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "]
                }],
                xaxis: {
                    categories: [";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["espaceDistribution"]) || array_key_exists("espaceDistribution", $context) ? $context["espaceDistribution"] : (function () { throw new RuntimeError('Variable "espaceDistribution" does not exist.', 108, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["espace"] => $context["count"]) {
            yield "\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["espace"], "html", null, true);
            yield "\"";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 108)) {
                yield ",";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['espace'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "]
                },
                colors: ['#007bff']
            }).render();
        });
    </script>
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
        return "reservation/statistics.html.twig";
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
        return array (  436 => 108,  399 => 105,  354 => 96,  319 => 95,  276 => 88,  241 => 87,  231 => 81,  218 => 80,  194 => 65,  187 => 63,  185 => 62,  176 => 58,  170 => 55,  166 => 54,  159 => 50,  155 => 48,  150 => 47,  119 => 19,  112 => 15,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Statistiques des Réservations{% endblock %}

{% block body %}
    <h4 class=\"fw-bold py-3 mb-4\">Statistiques des Réservations</h4>

    <div class=\"row\">
        <!-- Total Reservations -->
        <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"card-title d-flex align-items-start justify-content-between\">
                        <div class=\"avatar flex-shrink-0\">
                            <img src=\"{{ asset('img/icons/unicons/chart-success.png') }}\" alt=\"Reservations\" class=\"rounded\" />
                        </div>
                    </div>
                    <span class=\"fw-semibold d-block mb-1\">Total Réservations</span>
                    <h3 class=\"card-title mb-2\">{{ totalReservations }}</h3>
                    <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Mis à jour aujourd'hui</small>
                </div>
            </div>
        </div>

        <!-- Status Distribution -->
        <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Distribution par Statut</h5></div>
                <div class=\"card-body\"><div id=\"statusChart\"></div></div>
            </div>
        </div>

        <!-- Motif Distribution -->
        <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Distribution par Motif</h5></div>
                <div class=\"card-body\"><div id=\"motifChart\"></div></div>
            </div>
        </div>

        <!-- All Reservations List -->
        <div class=\"col-12 col-lg-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Toutes les Réservations</h5></div>
                <div class=\"card-body\" style=\"max-height: 400px; overflow-y: auto;\">
                    <ul class=\"p-0 m-0\">
                        {% for reservation in allReservations %}
                            <li class=\"d-flex mb-4 pb-1\">
                                <div class=\"avatar flex-shrink-0 me-3\">
                                    <img src=\"{{ asset('img/icons/unicons/chart.png') }}\" alt=\"Reservation\" class=\"rounded\" />
                                </div>
                                <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                    <div class=\"me-2\">
                                        <h6 class=\"mb-0\">{{ reservation.espacesportif.nom_espace }}</h6>
                                        <small class=\"text-muted\">{{ reservation.dateReservee|date('d/m/Y H:i') }}</small>
                                    </div>
                                    <div class=\"user-progress\">
                                        <small class=\"fw-semibold\">{{ reservation.status }}</small>
                                    </div>
                                </div>
                            </li>
                        {% else %}
                            <li>Aucune réservation trouvée.</li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>

        <!-- Espace Distribution -->
        <div class=\"col-12 col-lg-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Réservations par Espace Sportif</h5></div>
                <div class=\"card-body\"><div id=\"espaceChart\"></div></div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Status Distribution Chart
            new ApexCharts(document.querySelector(\"#statusChart\"), {
                chart: { type: 'pie', height: 350 },
                series: [{% for status, count in statusDistribution %}{{ count }}{% if not loop.last %},{% endif %}{% endfor %}],
                labels: [{% for status, count in statusDistribution %}\"{{ status }}\"{% if not loop.last %},{% endif %}{% endfor %}],
                colors: ['#28a745', '#dc3545', '#ffc107', '#17a2b8']
            }).render();

            // Motif Distribution Chart
            new ApexCharts(document.querySelector(\"#motifChart\"), {
                chart: { type: 'pie', height: 350 },
                series: [{% for motif, count in motifDistribution %}{{ count }}{% if not loop.last %},{% endif %}{% endfor %}],
                labels: [{% for motif, count in motifDistribution %}\"{{ motif }}\"{% if not loop.last %},{% endif %}{% endfor %}],
                colors: ['#007bff', '#28a745', '#dc3545', '#ffc107']
            }).render();

            // Espace Distribution Chart
            new ApexCharts(document.querySelector(\"#espaceChart\"), {
                chart: { type: 'bar', height: 350 },
                series: [{
                    name: 'Réservations',
                    data: [{% for espace, count in espaceDistribution %}{{ count }}{% if not loop.last %},{% endif %}{% endfor %}]
                }],
                xaxis: {
                    categories: [{% for espace, count in espaceDistribution %}\"{{ espace }}\"{% if not loop.last %},{% endif %}{% endfor %}]
                },
                colors: ['#007bff']
            }).render();
        });
    </script>
{% endblock %}", "reservation/statistics.html.twig", "C:\\Users\\ibtis\\Downloads\\matchupz-web-joueur\\matchupz-web-joueur\\templates\\reservation\\statistics.html.twig");
    }
}
