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

/* sponsor/statistics.html.twig */
class __TwigTemplate_820b4f81be1f3381531b336153d4f883 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sponsor/statistics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sponsor/statistics.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sponsor/statistics.html.twig", 1);
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

        yield "Sponsor Statistics";
        
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
        yield "<h4 class=\"fw-bold py-3 mb-4\">Sponsor Statistics</h4>

<div class=\"row\">
    <!-- Total Sponsors -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/chart-success.png"), "html", null, true);
        yield "\" alt=\"Sponsors\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Total Sponsors</span>
                <h3 class=\"card-title mb-2\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalSponsors"]) || array_key_exists("totalSponsors", $context) ? $context["totalSponsors"] : (function () { throw new RuntimeError('Variable "totalSponsors" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "</h3>
                <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Updated Today</small>
            </div>
        </div>
    </div>

    <!-- Pack Distribution Chart -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Pack Distribution</h5></div>
            <div class=\"card-body\"><div id=\"packDistributionChart\"></div></div>
        </div>
    </div>

    <!-- All Sponsors List -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">All Sponsors</h5></div>
            <div class=\"card-body\" style=\"max-height: 400px; overflow-y: auto;\">
                <ul class=\"p-0 m-0\">
                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allSponsors"]) || array_key_exists("allSponsors", $context) ? $context["allSponsors"] : (function () { throw new RuntimeError('Variable "allSponsors" does not exist.', 39, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["sponsor"]) {
            // line 40
            yield "                        <li class=\"d-flex mb-4 pb-1\">
                            <div class=\"avatar flex-shrink-0 me-3\">
                                <img src=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/default-avatar.png"), "html", null, true);
            yield "\" alt=\"Sponsor\" class=\"rounded\" />
                            </div>
                            <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                <div class=\"me-2\">
                                    <h6 class=\"mb-0\">";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "nom", [], "any", false, false, false, 46), "html", null, true);
            yield "</h6>
                                    <small class=\"text-muted\">";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "pack", [], "any", false, false, false, 47), "html", null, true);
            yield "</small>
                                </div>
                                <div class=\"user-progress\">
                                    <small class=\"fw-semibold\">";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "contact", [], "any", false, false, false, 50), "html", null, true);
            yield "</small>
                                </div>
                            </div>
                        </li>
                    ";
            $context['_iterated'] = true;
        }
        // line 54
        if (!$context['_iterated']) {
            // line 55
            yield "                        <li>No sponsors found.</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sponsor'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
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

    // line 64
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

        // line 65
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Pack Distribution
            new ApexCharts(document.querySelector(\"#packDistributionChart\"), {
                chart: { type: 'pie', height: 350 },
                series: [";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["packDistribution"]) || array_key_exists("packDistribution", $context) ? $context["packDistribution"] : (function () { throw new RuntimeError('Variable "packDistribution" does not exist.', 71, $this->source); })()));
        foreach ($context['_seq'] as $context["pack"] => $context["count"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            yield ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['pack'], $context['count'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                labels: [";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys((isset($context["packDistribution"]) || array_key_exists("packDistribution", $context) ? $context["packDistribution"] : (function () { throw new RuntimeError('Variable "packDistribution" does not exist.', 72, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["pack"]) {
            yield "'";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["pack"], "html", null, true);
            yield "',";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['pack'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "]
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
        return "sponsor/statistics.html.twig";
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
        return array (  237 => 72,  225 => 71,  215 => 65,  202 => 64,  186 => 57,  179 => 55,  177 => 54,  168 => 50,  162 => 47,  158 => 46,  151 => 42,  147 => 40,  142 => 39,  119 => 19,  112 => 15,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Sponsor Statistics{% endblock %}

{% block body %}
<h4 class=\"fw-bold py-3 mb-4\">Sponsor Statistics</h4>

<div class=\"row\">
    <!-- Total Sponsors -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"{{ asset('img/icons/unicons/chart-success.png') }}\" alt=\"Sponsors\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Total Sponsors</span>
                <h3 class=\"card-title mb-2\">{{ totalSponsors }}</h3>
                <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Updated Today</small>
            </div>
        </div>
    </div>

    <!-- Pack Distribution Chart -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Pack Distribution</h5></div>
            <div class=\"card-body\"><div id=\"packDistributionChart\"></div></div>
        </div>
    </div>

    <!-- All Sponsors List -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">All Sponsors</h5></div>
            <div class=\"card-body\" style=\"max-height: 400px; overflow-y: auto;\">
                <ul class=\"p-0 m-0\">
                    {% for sponsor in allSponsors %}
                        <li class=\"d-flex mb-4 pb-1\">
                            <div class=\"avatar flex-shrink-0 me-3\">
                                <img src=\"{{ asset('img/default-avatar.png') }}\" alt=\"Sponsor\" class=\"rounded\" />
                            </div>
                            <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                <div class=\"me-2\">
                                    <h6 class=\"mb-0\">{{ sponsor.nom }}</h6>
                                    <small class=\"text-muted\">{{ sponsor.pack }}</small>
                                </div>
                                <div class=\"user-progress\">
                                    <small class=\"fw-semibold\">{{ sponsor.contact }}</small>
                                </div>
                            </div>
                        </li>
                    {% else %}
                        <li>No sponsors found.</li>
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
            // Pack Distribution
            new ApexCharts(document.querySelector(\"#packDistributionChart\"), {
                chart: { type: 'pie', height: 350 },
                series: [{% for pack, count in packDistribution %}{{ count }},{% endfor %}],
                labels: [{% for pack in packDistribution|keys %}'{{ pack }}',{% endfor %}]
            }).render();
        });
    </script>
{% endblock %}", "sponsor/statistics.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-integration\\matchupz-web-integration\\templates\\sponsor\\statistics.html.twig");
    }
}
