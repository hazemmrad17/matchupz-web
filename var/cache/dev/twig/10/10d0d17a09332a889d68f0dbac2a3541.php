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
class __TwigTemplate_8bc74283d83098d4a998c3921dc2c4fd extends Template
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

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "schedule/statistics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "schedule/statistics.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 82
        yield "
";
        // line 83
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
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

        // line 2
        yield "    <h4 class=\"fw-bold py-3 mb-4 text-center\">Statistiques des plannings</h4>

    <!-- Summary Cards -->
    <div class=\"row justify-content-center mb-4\">
        <!-- Total Schedules -->
        <div class=\"col-lg-4 col-md-6 col-sm-12 mb-4\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body text-center\">
                    <div class=\"d-flex justify-content-center mb-3\">
                        <div class=\"avatar flex-shrink-0\">
                            <img src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/chart-success.png"), "html", null, true);
        yield "\" alt=\"Schedules\" class=\"rounded\" />
                        </div>
                    </div>
                    <span class=\"fw-semibold d-block mb-1\">Total Schedules</span>
                    <h3 class=\"card-title mb-2\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalSchedules"]) || array_key_exists("totalSchedules", $context) ? $context["totalSchedules"] : (function () { throw new RuntimeError('Variable "totalSchedules" does not exist.', 16, $this->source); })()), "html", null, true);
        yield "</h3>
                    <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Updated Today</small>
                </div>
            </div>
        </div>

        <!-- Ongoing Matches -->
        <div class=\"col-lg-4 col-md-6 col-sm-12 mb-4\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body text-center\">
                    <div class=\"d-flex justify-content-center mb-3\">
                        <div class=\"avatar flex-shrink-0\">
                            <img src=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/clock.png"), "html", null, true);
        yield "\" alt=\"Ongoing\" class=\"rounded\" />
                        </div>
                    </div>
                    <span class=\"fw-semibold d-block mb-1\">Ongoing Matches</span>
                    <h3 class=\"card-title mb-2\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["ongoingMatches"]) || array_key_exists("ongoingMatches", $context) ? $context["ongoingMatches"] : (function () { throw new RuntimeError('Variable "ongoingMatches" does not exist.', 32, $this->source); })())), "html", null, true);
        yield "</h3>
                    <small class=\"text-warning fw-semibold\">Currently Active</small>
                </div>
            </div>
        </div>

        <!-- Completed Matches -->
        <div class=\"col-lg-4 col-md-6 col-sm-12 mb-4\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body text-center\">
                    <div class=\"d-flex justify-content-center mb-3\">
                        <div class=\"avatar flex-shrink-0\">
                            <img src=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/times.png"), "html", null, true);
        yield "\" alt=\"Completed\" class=\"rounded\" />
                        </div>
                    </div>
                    <span class=\"fw-semibold d-block mb-1\">Completed Matches</span>
                    <h3 class=\"card-title mb-2\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["completedMatches"]) || array_key_exists("completedMatches", $context) ? $context["completedMatches"] : (function () { throw new RuntimeError('Variable "completedMatches" does not exist.', 48, $this->source); })()), "html", null, true);
        yield "</h3>
                    <small class=\"text-muted fw-semibold\">Finished Matches</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Section -->
    <div class=\"row g-4 mb-4\">
        <!-- Sport Distribution Chart -->
        <div class=\"col-lg-6 col-md-6 col-sm-12\">
            <div class=\"card shadow-sm h-100\">
                <div class=\"card-header\">
                    <h5 class=\"card-title m-0 me-2\">Sport Distribution</h5>
                </div>
                <div class=\"card-body\">
                    <div id=\"sportDistributionChart\"></div>
                </div>
            </div>
        </div>

        <!-- Venue Distribution Chart -->
        <div class=\"col-lg-6 col-md-6 col-sm-12\">
            <div class=\"card shadow-sm h-100\">
                <div class=\"card-header\">
                    <h5 class=\"card-title m-0 me-2\">Venue Distribution</h5>
                </div>
                <div class=\"card-body\">
                    <div id=\"venueDistributionChart\"></div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 83
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

        // line 84
        yield "    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Sport Distribution
            new ApexCharts(document.querySelector(\"#sportDistributionChart\"), {
                chart: { type: 'pie', height: 350 },
                series: [";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("sportDistribution", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sportDistribution"]) || array_key_exists("sportDistribution", $context) ? $context["sportDistribution"] : (function () { throw new RuntimeError('Variable "sportDistribution" does not exist.', 89, $this->source); })()), [])) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["count"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            yield ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['count'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                labels: [";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::keys((isset($context["sportDistribution"]) || array_key_exists("sportDistribution", $context) ? $context["sportDistribution"] : (function () { throw new RuntimeError('Variable "sportDistribution" does not exist.', 90, $this->source); })())), []));
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
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(((array_key_exists("venueDistribution", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["venueDistribution"]) || array_key_exists("venueDistribution", $context) ? $context["venueDistribution"] : (function () { throw new RuntimeError('Variable "venueDistribution" does not exist.', 98, $this->source); })()), [])) : ([])));
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
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::keys((isset($context["venueDistribution"]) || array_key_exists("venueDistribution", $context) ? $context["venueDistribution"] : (function () { throw new RuntimeError('Variable "venueDistribution" does not exist.', 101, $this->source); })())), []));
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
    public function getDebugInfo(): array
    {
        return array (  253 => 101,  239 => 98,  219 => 90,  207 => 89,  200 => 84,  187 => 83,  142 => 48,  135 => 44,  120 => 32,  113 => 28,  98 => 16,  91 => 12,  79 => 2,  66 => 1,  55 => 83,  52 => 82,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block body %}
    <h4 class=\"fw-bold py-3 mb-4 text-center\">Statistiques des plannings</h4>

    <!-- Summary Cards -->
    <div class=\"row justify-content-center mb-4\">
        <!-- Total Schedules -->
        <div class=\"col-lg-4 col-md-6 col-sm-12 mb-4\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body text-center\">
                    <div class=\"d-flex justify-content-center mb-3\">
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

        <!-- Ongoing Matches -->
        <div class=\"col-lg-4 col-md-6 col-sm-12 mb-4\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body text-center\">
                    <div class=\"d-flex justify-content-center mb-3\">
                        <div class=\"avatar flex-shrink-0\">
                            <img src=\"{{ asset('img/icons/unicons/clock.png') }}\" alt=\"Ongoing\" class=\"rounded\" />
                        </div>
                    </div>
                    <span class=\"fw-semibold d-block mb-1\">Ongoing Matches</span>
                    <h3 class=\"card-title mb-2\">{{ ongoingMatches|length }}</h3>
                    <small class=\"text-warning fw-semibold\">Currently Active</small>
                </div>
            </div>
        </div>

        <!-- Completed Matches -->
        <div class=\"col-lg-4 col-md-6 col-sm-12 mb-4\">
            <div class=\"card shadow-sm\">
                <div class=\"card-body text-center\">
                    <div class=\"d-flex justify-content-center mb-3\">
                        <div class=\"avatar flex-shrink-0\">
                            <img src=\"{{ asset('img/icons/unicons/times.png') }}\" alt=\"Completed\" class=\"rounded\" />
                        </div>
                    </div>
                    <span class=\"fw-semibold d-block mb-1\">Completed Matches</span>
                    <h3 class=\"card-title mb-2\">{{ completedMatches }}</h3>
                    <small class=\"text-muted fw-semibold\">Finished Matches</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Section -->
    <div class=\"row g-4 mb-4\">
        <!-- Sport Distribution Chart -->
        <div class=\"col-lg-6 col-md-6 col-sm-12\">
            <div class=\"card shadow-sm h-100\">
                <div class=\"card-header\">
                    <h5 class=\"card-title m-0 me-2\">Sport Distribution</h5>
                </div>
                <div class=\"card-body\">
                    <div id=\"sportDistributionChart\"></div>
                </div>
            </div>
        </div>

        <!-- Venue Distribution Chart -->
        <div class=\"col-lg-6 col-md-6 col-sm-12\">
            <div class=\"card shadow-sm h-100\">
                <div class=\"card-header\">
                    <h5 class=\"card-title m-0 me-2\">Venue Distribution</h5>
                </div>
                <div class=\"card-body\">
                    <div id=\"venueDistributionChart\"></div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Sport Distribution
            new ApexCharts(document.querySelector(\"#sportDistributionChart\"), {
                chart: { type: 'pie', height: 350 },
                series: [{% for count in sportDistribution|default([]) %}{{ count }},{% endfor %}],
                labels: [{% for sport in sportDistribution|keys|default([]) %}'{{ sport ?? \"Unknown\" }}',{% endfor %}]
            }).render();

            // Venue Distribution
            new ApexCharts(document.querySelector(\"#venueDistributionChart\"), {
                chart: { type: 'bar', height: 350 },
                series: [{
                    name: \"Number of Schedules\",
                    data: [{% for count in venueDistribution|default([]) %}{{ count }},{% endfor %}]
                }],
                xaxis: {
                    categories: [{% for venue in venueDistribution|keys|default([]) %}'{{ venue }}',{% endfor %}],
                    labels: { rotate: -45 }
                }
            }).render();
        });
    </script>
{% endblock %}", "schedule/statistics.html.twig", "C:\\Users\\louay\\Desktop\\Projet\\web\\matchupz-web-match\\templates\\schedule\\statistics.html.twig");
    }
}
