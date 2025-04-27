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

/* contrat/statistics.html.twig */
class __TwigTemplate_bed67d00fa09619efb712ce824ccd66a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/statistics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/statistics.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contrat/statistics.html.twig", 1);
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

        yield "Contrat Statistics";
        
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
        yield "<h4 class=\"fw-bold py-3 mb-4\">Contrat Statistics</h4>

<div class=\"row\">

    <!-- Montant Distribution Chart -->
    <div class=\"col-12 col-lg-8 mb-4\"> <!-- Changed col-lg-6 to col-lg-8 to make it wider -->
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Distribution des montants</h5></div>
            <div class=\"card-body\">
                <canvas id=\"montantDistributionChart\" style=\"min-height: 450px; max-height: 450px; width: 100%; display: block;\"></canvas> <!-- Increased min-height to 450px -->
            </div>
        </div>
    </div>

    <!-- Contract Duration Chart -->
    <div class=\"col-12 mb-4\">
        <div class=\"card h-100\">
            <div class=\"card-header\">
                <h5 class=\"card-title m-0 me-2\">Durée des contrats</h5>
            </div>
            <div class=\"card-body\">
                <canvas id=\"contractDurationChart\" style=\"min-height: 400px; max-height: 400px; width: 100%; display: block;\"></canvas>
            </div>
        </div>
    </div>

</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 35
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

        // line 36
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Check if Chart.js is loaded
            if (typeof Chart === 'undefined') {
                console.error('Chart.js is not loaded.');
                document.getElementById('montantDistributionChart').parentElement.innerHTML = '<p class=\"text-center text-danger\">Error: Chart.js failed to load.</p>';
                document.getElementById('contractDurationChart').parentElement.innerHTML = '<p class=\"text-center text-danger\">Error: Chart.js failed to load.</p>';
                return;
            }

            // Montant Distribution Chart
            const montantCtx = document.getElementById('montantDistributionChart').getContext('2d');
            // Generate arrays safely
            const montantLabels = [";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys((isset($context["montantDistribution"]) || array_key_exists("montantDistribution", $context) ? $context["montantDistribution"] : (function () { throw new RuntimeError('Variable "montantDistribution" does not exist.', 52, $this->source); })())));
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
        foreach ($context['_seq'] as $context["_key"] => $context["bin"]) {
            yield "'";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["bin"], "html", null, true);
            yield "'";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 52)) {
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
        unset($context['_seq'], $context['_key'], $context['bin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "];
            const montantValues = [";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["montantDistribution"]) || array_key_exists("montantDistribution", $context) ? $context["montantDistribution"] : (function () { throw new RuntimeError('Variable "montantDistribution" does not exist.', 53, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["count"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 53)) {
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
        unset($context['_seq'], $context['_key'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "];
            const montantDistributionData = {
                labels: montantLabels,
                values: montantValues
            };
            console.log('Montant Distribution Data:', montantDistributionData);

            if (montantDistributionData.labels.length > 0 && montantDistributionData.values.length > 0) {
                try {
                    new Chart(montantCtx, {
                        type: 'bar',
                        data: {
                            labels: montantDistributionData.labels,
                            datasets: [{
                                label: 'Nombre des Contrats',
                                data: montantDistributionData.values,
                                backgroundColor: '#FF5733',
                                borderColor: '#FF5733',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: {
                                title: {
                                    display: true,
                                    text: 'Distribution des montants des contrats',
                                    align: 'center',
                                    font: {
                                        size: 18 // Increased font size for title to match larger card
                                    }
                                },
                                legend: {
                                    display: false
                                }
                            },
                            scales: {
                                x: {
                                    title: {
                                        display: true,
                                        text: 'Montant Range (TND)',
                                        font: {
                                            size: 14 // Slightly larger font for axis title
                                        }
                                    },
                                    ticks: {
                                        autoSkip: false,
                                        maxRotation: 45,
                                        minRotation: 45,
                                        font: {
                                            size: 12 // Slightly larger font for ticks
                                        }
                                    }
                                },
                                y: {
                                    title: {
                                        display: true,
                                        text: 'Nombre des Contrats',
                                        font: {
                                            size: 14 // Slightly larger font for axis title
                                        }
                                    },
                                    beginAtZero: true,
                                    ticks: {
                                        stepSize: 1,
                                        font: {
                                            size: 12 // Slightly larger font for ticks
                                        }
                                    }
                                }
                            }
                        }
                    });
                } catch (error) {
                    console.error('Error rendering Montant Distribution Chart:', error);
                    document.getElementById('montantDistributionChart').parentElement.innerHTML = '<p class=\"text-center text-danger\">Error rendering chart: ' + error.message + '</p>';
                }
            } else {
                document.getElementById('montantDistributionChart').parentElement.innerHTML = '<p class=\"text-center text-muted\">No data available for Montant Distribution.</p>';
            }

            // Contract Duration Chart
            const durationCtx = document.getElementById('contractDurationChart').getContext('2d');
            const contractDurationData = {
                labels: [],
                startDates: [],
                durations: []
            };
            // Generate arrays from Twig data
            const rawLabels = [";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allContracts"]) || array_key_exists("allContracts", $context) ? $context["allContracts"] : (function () { throw new RuntimeError('Variable "allContracts" does not exist.', 143, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["contract"]) {
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["contract"], "dateDebut", [], "any", false, false, false, 143) && CoreExtension::getAttribute($this->env, $this->source, $context["contract"], "dateFin", [], "any", false, false, false, 143))) {
                yield "'";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["contract"], "titre", [], "any", true, true, false, 143)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["contract"], "titre", [], "any", false, false, false, 143), ("Contract #" . CoreExtension::getAttribute($this->env, $this->source, $context["contract"], "idContrat", [], "any", false, false, false, 143)))) : (("Contract #" . CoreExtension::getAttribute($this->env, $this->source, $context["contract"], "idContrat", [], "any", false, false, false, 143)))), "js"), "html", null, true);
                yield "'";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 143)) {
                    yield ",";
                }
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
        unset($context['_seq'], $context['_key'], $context['contract'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "];
            const rawStartDates = [";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allContracts"]) || array_key_exists("allContracts", $context) ? $context["allContracts"] : (function () { throw new RuntimeError('Variable "allContracts" does not exist.', 144, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["contract"]) {
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["contract"], "dateDebut", [], "any", false, false, false, 144) && CoreExtension::getAttribute($this->env, $this->source, $context["contract"], "dateFin", [], "any", false, false, false, 144))) {
                yield "'";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["contract"], "dateDebut", [], "any", false, false, false, 144), "Y-m-d"), "html", null, true);
                yield "'";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 144)) {
                    yield ",";
                }
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
        unset($context['_seq'], $context['_key'], $context['contract'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "];
            const rawEndDates = [";
        // line 145
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allContracts"]) || array_key_exists("allContracts", $context) ? $context["allContracts"] : (function () { throw new RuntimeError('Variable "allContracts" does not exist.', 145, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["contract"]) {
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["contract"], "dateDebut", [], "any", false, false, false, 145) && CoreExtension::getAttribute($this->env, $this->source, $context["contract"], "dateFin", [], "any", false, false, false, 145))) {
                yield "'";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["contract"], "dateFin", [], "any", false, false, false, 145), "Y-m-d"), "html", null, true);
                yield "'";
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 145)) {
                    yield ",";
                }
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
        unset($context['_seq'], $context['_key'], $context['contract'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "];

            // Process dates and calculate durations
            for (let i = 0; i < rawLabels.length; i++) {
                const startDate = new Date(rawStartDates[i]);
                const endDate = new Date(rawEndDates[i]);
                if (!isNaN(startDate.getTime()) && !isNaN(endDate.getTime()) && endDate >= startDate) {
                    contractDurationData.labels.push(rawLabels[i]);
                    contractDurationData.startDates.push(startDate.getTime());
                    contractDurationData.durations.push((endDate.getTime() - startDate.getTime()) / (1000 * 60 * 60 * 24));
                } else {
                    console.warn('Skipping contract due to invalid dates:', rawLabels[i], rawStartDates[i], rawEndDates[i]);
                }
            }
            console.log('Contract Duration Data:', contractDurationData);

            if (contractDurationData.labels.length > 0) {
                try {
                    new Chart(durationCtx, {
                        type: 'bar',
                        data: {
                            labels: contractDurationData.labels,
                            datasets: [{
                                label: 'Contract Duration',
                                data: contractDurationData.durations.map((duration, index) => ({
                                    x: duration,
                                    y: contractDurationData.labels[index]
                                })),
                                backgroundColor: '#00B7E8',
                                borderColor: '#00B7E8',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            indexAxis: 'y',
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: {
                                title: {
                                    display: true,
                                    text: 'Durée des contrats (Début à Fin)',
                                    align: 'center'
                                },
                                tooltip: {
                                    callbacks: {
                                        label: function(context) {
                                            const label = context.label || '';
                                            const duration = context.raw.x;
                                            const startDate = new Date(contractDurationData.startDates[context.dataIndex]);
                                            const endDate = new Date(startDate.getTime() + duration * 1000 * 60 * 60 * 24);
                                            return `\${label}: \${startDate.toLocaleDateString()} - \${endDate.toLocaleDateString()} (\${Math.round(duration)} jours)`;
                                        }
                                    }
                                }
                            },
                            scales: {
                                x: {
                                    title: {
                                        display: true,
                                        text: 'Durée (jours)'
                                    },
                                    beginAtZero: true,
                                    ticks: {
                                        stepSize: 50
                                    }
                                },
                                y: {
                                    title: {
                                        display: true,
                                        text: 'Contracts'
                                    }
                                }
                            }
                        }
                    });
                } catch (error) {
                    console.error('Error rendering Contract Duration Chart:', error);
                    document.getElementById('contractDurationChart').parentElement.innerHTML = '<p class=\"text-center text-danger\">Error rendering chart: ' + error.message + '</p>';
                }
            } else {
                document.getElementById('contractDurationChart').parentElement.innerHTML = '<p class=\"text-center text-muted\">No contracts with valid start and end dates available.</p>';
            }
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
        return "contrat/statistics.html.twig";
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
        return array (  411 => 145,  372 => 144,  333 => 143,  209 => 53,  172 => 52,  152 => 36,  139 => 35,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contrat Statistics{% endblock %}

{% block body %}
<h4 class=\"fw-bold py-3 mb-4\">Contrat Statistics</h4>

<div class=\"row\">

    <!-- Montant Distribution Chart -->
    <div class=\"col-12 col-lg-8 mb-4\"> <!-- Changed col-lg-6 to col-lg-8 to make it wider -->
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Distribution des montants</h5></div>
            <div class=\"card-body\">
                <canvas id=\"montantDistributionChart\" style=\"min-height: 450px; max-height: 450px; width: 100%; display: block;\"></canvas> <!-- Increased min-height to 450px -->
            </div>
        </div>
    </div>

    <!-- Contract Duration Chart -->
    <div class=\"col-12 mb-4\">
        <div class=\"card h-100\">
            <div class=\"card-header\">
                <h5 class=\"card-title m-0 me-2\">Durée des contrats</h5>
            </div>
            <div class=\"card-body\">
                <canvas id=\"contractDurationChart\" style=\"min-height: 400px; max-height: 400px; width: 100%; display: block;\"></canvas>
            </div>
        </div>
    </div>

</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Check if Chart.js is loaded
            if (typeof Chart === 'undefined') {
                console.error('Chart.js is not loaded.');
                document.getElementById('montantDistributionChart').parentElement.innerHTML = '<p class=\"text-center text-danger\">Error: Chart.js failed to load.</p>';
                document.getElementById('contractDurationChart').parentElement.innerHTML = '<p class=\"text-center text-danger\">Error: Chart.js failed to load.</p>';
                return;
            }

            // Montant Distribution Chart
            const montantCtx = document.getElementById('montantDistributionChart').getContext('2d');
            // Generate arrays safely
            const montantLabels = [{% for bin in montantDistribution|keys %}'{{ bin }}'{% if not loop.last %},{% endif %}{% endfor %}];
            const montantValues = [{% for count in montantDistribution %}{{ count }}{% if not loop.last %},{% endif %}{% endfor %}];
            const montantDistributionData = {
                labels: montantLabels,
                values: montantValues
            };
            console.log('Montant Distribution Data:', montantDistributionData);

            if (montantDistributionData.labels.length > 0 && montantDistributionData.values.length > 0) {
                try {
                    new Chart(montantCtx, {
                        type: 'bar',
                        data: {
                            labels: montantDistributionData.labels,
                            datasets: [{
                                label: 'Nombre des Contrats',
                                data: montantDistributionData.values,
                                backgroundColor: '#FF5733',
                                borderColor: '#FF5733',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: {
                                title: {
                                    display: true,
                                    text: 'Distribution des montants des contrats',
                                    align: 'center',
                                    font: {
                                        size: 18 // Increased font size for title to match larger card
                                    }
                                },
                                legend: {
                                    display: false
                                }
                            },
                            scales: {
                                x: {
                                    title: {
                                        display: true,
                                        text: 'Montant Range (TND)',
                                        font: {
                                            size: 14 // Slightly larger font for axis title
                                        }
                                    },
                                    ticks: {
                                        autoSkip: false,
                                        maxRotation: 45,
                                        minRotation: 45,
                                        font: {
                                            size: 12 // Slightly larger font for ticks
                                        }
                                    }
                                },
                                y: {
                                    title: {
                                        display: true,
                                        text: 'Nombre des Contrats',
                                        font: {
                                            size: 14 // Slightly larger font for axis title
                                        }
                                    },
                                    beginAtZero: true,
                                    ticks: {
                                        stepSize: 1,
                                        font: {
                                            size: 12 // Slightly larger font for ticks
                                        }
                                    }
                                }
                            }
                        }
                    });
                } catch (error) {
                    console.error('Error rendering Montant Distribution Chart:', error);
                    document.getElementById('montantDistributionChart').parentElement.innerHTML = '<p class=\"text-center text-danger\">Error rendering chart: ' + error.message + '</p>';
                }
            } else {
                document.getElementById('montantDistributionChart').parentElement.innerHTML = '<p class=\"text-center text-muted\">No data available for Montant Distribution.</p>';
            }

            // Contract Duration Chart
            const durationCtx = document.getElementById('contractDurationChart').getContext('2d');
            const contractDurationData = {
                labels: [],
                startDates: [],
                durations: []
            };
            // Generate arrays from Twig data
            const rawLabels = [{% for contract in allContracts %}{% if contract.dateDebut and contract.dateFin %}'{{ contract.titre|default('Contract #' ~ contract.idContrat)|e('js') }}'{% if not loop.last %},{% endif %}{% endif %}{% endfor %}];
            const rawStartDates = [{% for contract in allContracts %}{% if contract.dateDebut and contract.dateFin %}'{{ contract.dateDebut|date('Y-m-d') }}'{% if not loop.last %},{% endif %}{% endif %}{% endfor %}];
            const rawEndDates = [{% for contract in allContracts %}{% if contract.dateDebut and contract.dateFin %}'{{ contract.dateFin|date('Y-m-d') }}'{% if not loop.last %},{% endif %}{% endif %}{% endfor %}];

            // Process dates and calculate durations
            for (let i = 0; i < rawLabels.length; i++) {
                const startDate = new Date(rawStartDates[i]);
                const endDate = new Date(rawEndDates[i]);
                if (!isNaN(startDate.getTime()) && !isNaN(endDate.getTime()) && endDate >= startDate) {
                    contractDurationData.labels.push(rawLabels[i]);
                    contractDurationData.startDates.push(startDate.getTime());
                    contractDurationData.durations.push((endDate.getTime() - startDate.getTime()) / (1000 * 60 * 60 * 24));
                } else {
                    console.warn('Skipping contract due to invalid dates:', rawLabels[i], rawStartDates[i], rawEndDates[i]);
                }
            }
            console.log('Contract Duration Data:', contractDurationData);

            if (contractDurationData.labels.length > 0) {
                try {
                    new Chart(durationCtx, {
                        type: 'bar',
                        data: {
                            labels: contractDurationData.labels,
                            datasets: [{
                                label: 'Contract Duration',
                                data: contractDurationData.durations.map((duration, index) => ({
                                    x: duration,
                                    y: contractDurationData.labels[index]
                                })),
                                backgroundColor: '#00B7E8',
                                borderColor: '#00B7E8',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            indexAxis: 'y',
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: {
                                title: {
                                    display: true,
                                    text: 'Durée des contrats (Début à Fin)',
                                    align: 'center'
                                },
                                tooltip: {
                                    callbacks: {
                                        label: function(context) {
                                            const label = context.label || '';
                                            const duration = context.raw.x;
                                            const startDate = new Date(contractDurationData.startDates[context.dataIndex]);
                                            const endDate = new Date(startDate.getTime() + duration * 1000 * 60 * 60 * 24);
                                            return `\${label}: \${startDate.toLocaleDateString()} - \${endDate.toLocaleDateString()} (\${Math.round(duration)} jours)`;
                                        }
                                    }
                                }
                            },
                            scales: {
                                x: {
                                    title: {
                                        display: true,
                                        text: 'Durée (jours)'
                                    },
                                    beginAtZero: true,
                                    ticks: {
                                        stepSize: 50
                                    }
                                },
                                y: {
                                    title: {
                                        display: true,
                                        text: 'Contracts'
                                    }
                                }
                            }
                        }
                    });
                } catch (error) {
                    console.error('Error rendering Contract Duration Chart:', error);
                    document.getElementById('contractDurationChart').parentElement.innerHTML = '<p class=\"text-center text-danger\">Error rendering chart: ' + error.message + '</p>';
                }
            } else {
                document.getElementById('contractDurationChart').parentElement.innerHTML = '<p class=\"text-center text-muted\">No contracts with valid start and end dates available.</p>';
            }
        });
    </script>
{% endblock %}", "contrat/statistics.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-integration\\matchupz-web-integration\\templates\\contrat\\statistics.html.twig");
    }
}
