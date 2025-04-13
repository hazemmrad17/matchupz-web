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
class __TwigTemplate_434508c85889d8e8ee7b637e1f8b0535 extends Template
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

        yield "Contract Statistics";
        
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
        yield "<h4 class=\"fw-bold py-3 mb-4\">Contract Statistics</h4>

<div class=\"row\">
    <!-- Total Contracts -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/chart-success.png"), "html", null, true);
        yield "\" alt=\"Contracts\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Total Contracts</span>
                <h3 class=\"card-title mb-2\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalContracts"]) || array_key_exists("totalContracts", $context) ? $context["totalContracts"] : (function () { throw new RuntimeError('Variable "totalContracts" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "</h3>
                <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Updated Today</small>
            </div>
        </div>
    </div>

    <!-- Montant Distribution Chart -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Montant Distribution</h5></div>
            <div class=\"card-body\"><div id=\"montantDistributionChart\"></div></div>
        </div>
    </div>

    <!-- All Contracts List -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">All Contracts</h5></div>
            <div class=\"card-body\" style=\"max-height: 400px; overflow-y: auto;\">
                <ul class=\"p-0 m-0\">
                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allContracts"]) || array_key_exists("allContracts", $context) ? $context["allContracts"] : (function () { throw new RuntimeError('Variable "allContracts" does not exist.', 39, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contract"]) {
            // line 40
            yield "                        <li class=\"d-flex mb-4 pb-1\">
                            <div class=\"avatar flex-shrink-0 me-3\">
                                <img src=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/default-avatar.png"), "html", null, true);
            yield "\" alt=\"Contract\" class=\"rounded\" />
                            </div>
                            <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                <div class=\"me-2\">
                                    <h6 class=\"mb-0\">";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contract"], "Titre", [], "any", false, false, false, 46), "html", null, true);
            yield "</h6>
                                </div>
                                <div class=\"user-progress\">
                                    <small class=\"fw-semibold\">";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contract"], "Montant", [], "any", false, false, false, 49), "html", null, true);
            yield " €</small>
                                </div>
                            </div>
                        </li>
                    ";
            $context['_iterated'] = true;
        }
        // line 53
        if (!$context['_iterated']) {
            // line 54
            yield "                        <li>No contracts found.</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['contract'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "                </ul>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 63
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

        // line 64
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Montant Distribution Chart (Histogram)
            new ApexCharts(document.querySelector(\"#montantDistributionChart\"), {
                chart: { type: 'histogram', height: 350 },
                series: [{
                    name: 'Montant',
                    data: [
                        ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["montantDistribution"]) || array_key_exists("montantDistribution", $context) ? $context["montantDistribution"] : (function () { throw new RuntimeError('Variable "montantDistribution" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["count"]) {
            // line 74
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            yield ",
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['count'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "                    ]
                }],
                xaxis: {
                    categories: [";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys((isset($context["montantDistribution"]) || array_key_exists("montantDistribution", $context) ? $context["montantDistribution"] : (function () { throw new RuntimeError('Variable "montantDistribution" does not exist.', 79, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["bin"]) {
            yield "'";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["bin"], "html", null, true);
            yield "',";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['bin'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                    title: { text: 'Montant Range (€)' }
                },
                yaxis: {
                    title: { text: 'Number of Contracts' }
                },
                colors: ['#FF5733'], // Match the orange color from the image
                title: {
                    text: 'Distribution des montants des contrats',
                    align: 'center'
                }
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
        return array (  242 => 79,  237 => 76,  228 => 74,  224 => 73,  211 => 64,  198 => 63,  182 => 56,  175 => 54,  173 => 53,  164 => 49,  158 => 46,  151 => 42,  147 => 40,  142 => 39,  119 => 19,  112 => 15,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contract Statistics{% endblock %}

{% block body %}
<h4 class=\"fw-bold py-3 mb-4\">Contract Statistics</h4>

<div class=\"row\">
    <!-- Total Contracts -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"{{ asset('img/icons/unicons/chart-success.png') }}\" alt=\"Contracts\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Total Contracts</span>
                <h3 class=\"card-title mb-2\">{{ totalContracts }}</h3>
                <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Updated Today</small>
            </div>
        </div>
    </div>

    <!-- Montant Distribution Chart -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Montant Distribution</h5></div>
            <div class=\"card-body\"><div id=\"montantDistributionChart\"></div></div>
        </div>
    </div>

    <!-- All Contracts List -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">All Contracts</h5></div>
            <div class=\"card-body\" style=\"max-height: 400px; overflow-y: auto;\">
                <ul class=\"p-0 m-0\">
                    {% for contract in allContracts %}
                        <li class=\"d-flex mb-4 pb-1\">
                            <div class=\"avatar flex-shrink-0 me-3\">
                                <img src=\"{{ asset('img/default-avatar.png') }}\" alt=\"Contract\" class=\"rounded\" />
                            </div>
                            <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                <div class=\"me-2\">
                                    <h6 class=\"mb-0\">{{ contract.Titre }}</h6>
                                </div>
                                <div class=\"user-progress\">
                                    <small class=\"fw-semibold\">{{ contract.Montant }} €</small>
                                </div>
                            </div>
                        </li>
                    {% else %}
                        <li>No contracts found.</li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Montant Distribution Chart (Histogram)
            new ApexCharts(document.querySelector(\"#montantDistributionChart\"), {
                chart: { type: 'histogram', height: 350 },
                series: [{
                    name: 'Montant',
                    data: [
                        {% for count in montantDistribution %}
                            {{ count }},
                        {% endfor %}
                    ]
                }],
                xaxis: {
                    categories: [{% for bin in montantDistribution|keys %}'{{ bin }}',{% endfor %}],
                    title: { text: 'Montant Range (€)' }
                },
                yaxis: {
                    title: { text: 'Number of Contracts' }
                },
                colors: ['#FF5733'], // Match the orange color from the image
                title: {
                    text: 'Distribution des montants des contrats',
                    align: 'center'
                }
            }).render();
        });
    </script>
{% endblock %}", "contrat/statistics.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\contrat\\statistics.html.twig");
    }
}
