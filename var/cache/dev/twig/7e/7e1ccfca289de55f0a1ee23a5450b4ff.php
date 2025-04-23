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

/* schedule/statistics.html.twig */
class __TwigTemplate_5cbd28668e5ccce17c4e39f5c340dc5a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "schedule/statistics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "schedule/statistics.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "schedule/statistics.html.twig", 1);
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

        yield "Schedule Statistics";
        
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
        yield "<h4 class=\"fw-bold py-3 mb-4\">Schedule Statistics</h4>

<div class=\"row\">
    <!-- Total Schedules -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/chart-success.png"), "html", null, true);
        yield "\" alt=\"Schedules\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Total Schedules</span>
                <h3 class=\"card-title mb-2\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalSchedules"]) || array_key_exists("totalSchedules", $context) ? $context["totalSchedules"] : (function () { throw new RuntimeError('Variable "totalSchedules" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "</h3>
                <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Updated Today</small>
            </div>
        </div>
    </div>

    <!-- Sport Distribution Chart -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Sport Distribution</h5></div>
            <div class=\"card-body\"><div id=\"sportDistributionChart\"></div></div>
        </div>
    </div>

    <!-- Venue Distribution Chart -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Venue Distribution</h5></div>
            <div class=\"card-body\"><div id=\"venueDistributionChart\"></div></div>
        </div>
    </div>


</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 45
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

        // line 46
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Sport Distribution
            new ApexCharts(document.querySelector(\"#sportDistributionChart\"), {
                chart: { type: 'pie', height: 350 },
                series: [";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sportDistribution"]) || array_key_exists("sportDistribution", $context) ? $context["sportDistribution"] : (function () { throw new RuntimeError('Variable "sportDistribution" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["count"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            yield ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['count'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                labels: [";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys((isset($context["sportDistribution"]) || array_key_exists("sportDistribution", $context) ? $context["sportDistribution"] : (function () { throw new RuntimeError('Variable "sportDistribution" does not exist.', 53, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["sport"]) {
            yield "'";
            yield (((true &&  !(null === $context["sport"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["sport"], "html", null, true)) : ("Unknown"));
            yield "',";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sport'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "]
            }).render();

            // Venue Distribution
            new ApexCharts(document.querySelector(\"#venueDistributionChart\"), {
                chart: { type: 'bar', height: 350 },
                series: [{
                    name: \"Number of Schedules\",
                    data: [";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["venueDistribution"]) || array_key_exists("venueDistribution", $context) ? $context["venueDistribution"] : (function () { throw new RuntimeError('Variable "venueDistribution" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["count"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            yield ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['count'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "]
                }],
                xaxis: {
                    categories: [";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys((isset($context["venueDistribution"]) || array_key_exists("venueDistribution", $context) ? $context["venueDistribution"] : (function () { throw new RuntimeError('Variable "venueDistribution" does not exist.', 64, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["venue"]) {
            yield "'";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["venue"], "html", null, true);
            yield "',";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['venue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                    labels: { rotate: -45 }
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
        return "schedule/statistics.html.twig";
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
        return array (  224 => 64,  210 => 61,  190 => 53,  178 => 52,  168 => 46,  155 => 45,  119 => 19,  112 => 15,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Schedule Statistics{% endblock %}

{% block body %}
<h4 class=\"fw-bold py-3 mb-4\">Schedule Statistics</h4>

<div class=\"row\">
    <!-- Total Schedules -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"{{ asset('img/icons/unicons/chart-success.png') }}\" alt=\"Schedules\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Total Schedules</span>
                <h3 class=\"card-title mb-2\">{{ totalSchedules }}</h3>
                <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Updated Today</small>
            </div>
        </div>
    </div>

    <!-- Sport Distribution Chart -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Sport Distribution</h5></div>
            <div class=\"card-body\"><div id=\"sportDistributionChart\"></div></div>
        </div>
    </div>

    <!-- Venue Distribution Chart -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Venue Distribution</h5></div>
            <div class=\"card-body\"><div id=\"venueDistributionChart\"></div></div>
        </div>
    </div>


</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Sport Distribution
            new ApexCharts(document.querySelector(\"#sportDistributionChart\"), {
                chart: { type: 'pie', height: 350 },
                series: [{% for count in sportDistribution %}{{ count }},{% endfor %}],
                labels: [{% for sport in sportDistribution|keys %}'{{ sport ?? \"Unknown\" }}',{% endfor %}]
            }).render();

            // Venue Distribution
            new ApexCharts(document.querySelector(\"#venueDistributionChart\"), {
                chart: { type: 'bar', height: 350 },
                series: [{
                    name: \"Number of Schedules\",
                    data: [{% for count in venueDistribution %}{{ count }},{% endfor %}]
                }],
                xaxis: {
                    categories: [{% for venue in venueDistribution|keys %}'{{ venue }}',{% endfor %}],
                    labels: { rotate: -45 }
                }
            }).render();
        });
    </script>
{% endblock %}", "schedule/statistics.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-integration\\matchupz-web-integration\\templates\\schedule\\statistics.html.twig");
    }
}
