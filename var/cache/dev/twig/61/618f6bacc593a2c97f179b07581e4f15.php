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

/* sport/statistics.html.twig */
class __TwigTemplate_0fb8376d92af6d30acb0a00e04fadf0c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sport/statistics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sport/statistics.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sport/statistics.html.twig", 1);
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

        yield "Sport Statistics";
        
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
        yield "<h4 class=\"fw-bold py-3 mb-4\">Sport Statistics</h4>

<div class=\"row\">
    <!-- Total Sports -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/chart-success.png"), "html", null, true);
        yield "\" alt=\"Sports\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Total Sports</span>
                <h3 class=\"card-title mb-2\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalSports"]) || array_key_exists("totalSports", $context) ? $context["totalSports"] : (function () { throw new RuntimeError('Variable "totalSports" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "</h3>
                <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Updated Today</small>
            </div>
        </div>
    </div>

    <!-- Average Description Length -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/text.png"), "html", null, true);
        yield "\" alt=\"Description\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Avg. Description Length</span>
                <h3 class=\"card-title mb-2\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["averageDescriptionLength"]) || array_key_exists("averageDescriptionLength", $context) ? $context["averageDescriptionLength"] : (function () { throw new RuntimeError('Variable "averageDescriptionLength" does not exist.', 35, $this->source); })()), 0), "html", null, true);
        yield " chars</h3>
                <small class=\"text-muted\">Based on all sports with descriptions</small>
            </div>
        </div>
    </div>

    <!-- Sports with Descriptions -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/check.png"), "html", null, true);
        yield "\" alt=\"Described\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Sports with Descriptions</span>
                <h3 class=\"card-title mb-2\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sportsWithDescription"]) || array_key_exists("sportsWithDescription", $context) ? $context["sportsWithDescription"] : (function () { throw new RuntimeError('Variable "sportsWithDescription" does not exist.', 51, $this->source); })()), "html", null, true);
        yield "</h3>
                <small class=\"text-muted\">Out of ";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalSports"]) || array_key_exists("totalSports", $context) ? $context["totalSports"] : (function () { throw new RuntimeError('Variable "totalSports" does not exist.', 52, $this->source); })()), "html", null, true);
        yield " total sports</small>
            </div>
        </div>
    </div>

    <!-- All Sports List -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">All Sports</h5></div>
            <div class=\"card-body\" style=\"max-height: 400px; overflow-y: auto;\">
                <ul class=\"p-0 m-0\">
                    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allSports"]) || array_key_exists("allSports", $context) ? $context["allSports"] : (function () { throw new RuntimeError('Variable "allSports" does not exist.', 63, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["sport"]) {
            // line 64
            yield "                        <li class=\"d-flex mb-4 pb-1\">
                            <div class=\"avatar flex-shrink-0 me-3\">
                                <img src=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/sport.png"), "html", null, true);
            yield "\" alt=\"Sport\" class=\"rounded\" />
                            </div>
                            <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                <div class=\"me-2\">
                                    <h6 class=\"mb-0\">";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sport"], "nomSport", [], "any", false, false, false, 70), "html", null, true);
            yield "</h6>
                                    <small class=\"text-muted\">
                                        ";
            // line 72
            if (CoreExtension::getAttribute($this->env, $this->source, $context["sport"], "description", [], "any", false, false, false, 72)) {
                // line 73
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["sport"], "description", [], "any", false, false, false, 73)), "html", null, true);
                yield " chars
                                        ";
            } else {
                // line 75
                yield "                                            No description
                                        ";
            }
            // line 77
            yield "                                    </small>
                                </div>
                                <div class=\"user-progress\">
                                    <small class=\"fw-semibold\">ID: ";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sport"], "idSport", [], "any", false, false, false, 80), "html", null, true);
            yield "</small>
                                </div>
                            </div>
                        </li>
                    ";
            $context['_iterated'] = true;
        }
        // line 84
        if (!$context['_iterated']) {
            // line 85
            yield "                        <li>No sports found.</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sport'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        yield "                </ul>
            </div>
        </div>
    </div>

    <!-- Description Availability Chart -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Description Availability</h5></div>
            <div class=\"card-body\"><div id=\"descriptionChart\"></div></div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 102
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

        // line 103
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Description Availability Chart
            new ApexCharts(document.querySelector(\"#descriptionChart\"), {
                chart: { type: 'pie', height: 350 },
                series: [";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sportsWithDescription"]) || array_key_exists("sportsWithDescription", $context) ? $context["sportsWithDescription"] : (function () { throw new RuntimeError('Variable "sportsWithDescription" does not exist.', 109, $this->source); })()), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["totalSports"]) || array_key_exists("totalSports", $context) ? $context["totalSports"] : (function () { throw new RuntimeError('Variable "totalSports" does not exist.', 109, $this->source); })()) - (isset($context["sportsWithDescription"]) || array_key_exists("sportsWithDescription", $context) ? $context["sportsWithDescription"] : (function () { throw new RuntimeError('Variable "sportsWithDescription" does not exist.', 109, $this->source); })())), "html", null, true);
        yield "],
                labels: ['With Description', 'Without Description'],
                colors: ['#28a745', '#dc3545']
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
        return "sport/statistics.html.twig";
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
        return array (  284 => 109,  274 => 103,  261 => 102,  237 => 87,  230 => 85,  228 => 84,  219 => 80,  214 => 77,  210 => 75,  204 => 73,  202 => 72,  197 => 70,  190 => 66,  186 => 64,  181 => 63,  167 => 52,  163 => 51,  156 => 47,  141 => 35,  134 => 31,  119 => 19,  112 => 15,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Sport Statistics{% endblock %}

{% block body %}
<h4 class=\"fw-bold py-3 mb-4\">Sport Statistics</h4>

<div class=\"row\">
    <!-- Total Sports -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"{{ asset('img/icons/unicons/chart-success.png') }}\" alt=\"Sports\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Total Sports</span>
                <h3 class=\"card-title mb-2\">{{ totalSports }}</h3>
                <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Updated Today</small>
            </div>
        </div>
    </div>

    <!-- Average Description Length -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"{{ asset('img/icons/unicons/text.png') }}\" alt=\"Description\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Avg. Description Length</span>
                <h3 class=\"card-title mb-2\">{{ averageDescriptionLength|round(0) }} chars</h3>
                <small class=\"text-muted\">Based on all sports with descriptions</small>
            </div>
        </div>
    </div>

    <!-- Sports with Descriptions -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"{{ asset('img/icons/unicons/check.png') }}\" alt=\"Described\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Sports with Descriptions</span>
                <h3 class=\"card-title mb-2\">{{ sportsWithDescription }}</h3>
                <small class=\"text-muted\">Out of {{ totalSports }} total sports</small>
            </div>
        </div>
    </div>

    <!-- All Sports List -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">All Sports</h5></div>
            <div class=\"card-body\" style=\"max-height: 400px; overflow-y: auto;\">
                <ul class=\"p-0 m-0\">
                    {% for sport in allSports %}
                        <li class=\"d-flex mb-4 pb-1\">
                            <div class=\"avatar flex-shrink-0 me-3\">
                                <img src=\"{{ asset('img/icons/unicons/sport.png') }}\" alt=\"Sport\" class=\"rounded\" />
                            </div>
                            <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                <div class=\"me-2\">
                                    <h6 class=\"mb-0\">{{ sport.nomSport }}</h6>
                                    <small class=\"text-muted\">
                                        {% if sport.description %}
                                            {{ sport.description|length }} chars
                                        {% else %}
                                            No description
                                        {% endif %}
                                    </small>
                                </div>
                                <div class=\"user-progress\">
                                    <small class=\"fw-semibold\">ID: {{ sport.idSport }}</small>
                                </div>
                            </div>
                        </li>
                    {% else %}
                        <li>No sports found.</li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </div>

    <!-- Description Availability Chart -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Description Availability</h5></div>
            <div class=\"card-body\"><div id=\"descriptionChart\"></div></div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Description Availability Chart
            new ApexCharts(document.querySelector(\"#descriptionChart\"), {
                chart: { type: 'pie', height: 350 },
                series: [{{ sportsWithDescription }}, {{ totalSports - sportsWithDescription }}],
                labels: ['With Description', 'Without Description'],
                colors: ['#28a745', '#dc3545']
            }).render();
        });
    </script>
{% endblock %}", "sport/statistics.html.twig", "C:\\Users\\ibtis\\Downloads\\matchupz-web-joueur\\matchupz-web-joueur\\templates\\sport\\statistics.html.twig");
    }
}
