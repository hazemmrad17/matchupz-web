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

/* joueur/statistics.html.twig */
class __TwigTemplate_022bc1318d0980258c6388b54111b29a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/statistics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/statistics.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "joueur/statistics.html.twig", 1);
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

        yield "Player Statistics";
        
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
        yield "<h4 class=\"fw-bold py-3 mb-4\">Player Statistics</h4>

<div class=\"row\">
    <!-- Total Players -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/chart-success.png"), "html", null, true);
        yield "\" alt=\"Players\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Total Players</span>
                <h3 class=\"card-title mb-2\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPlayers"]) || array_key_exists("totalPlayers", $context) ? $context["totalPlayers"] : (function () { throw new RuntimeError('Variable "totalPlayers" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "</h3>
                <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Updated Today</small>
            </div>
        </div>
    </div>

    <!-- Average Height -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/ruler.png"), "html", null, true);
        yield "\" alt=\"Height\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Average Height</span>
                <h3 class=\"card-title mb-2\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["averageHeight"]) || array_key_exists("averageHeight", $context) ? $context["averageHeight"] : (function () { throw new RuntimeError('Variable "averageHeight" does not exist.', 35, $this->source); })()), 2), "html", null, true);
        yield " m</h3>
                <small class=\"text-muted\">Based on all registered players</small>
            </div>
        </div>
    </div>

    <!-- Average Weight -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/weight.png"), "html", null, true);
        yield "\" alt=\"Weight\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Average Weight</span>
                <h3 class=\"card-title mb-2\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["averageWeight"]) || array_key_exists("averageWeight", $context) ? $context["averageWeight"] : (function () { throw new RuntimeError('Variable "averageWeight" does not exist.', 51, $this->source); })()), 2), "html", null, true);
        yield " kg</h3>
                <small class=\"text-muted\">Based on all registered players</small>
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

    <!-- Statut Distribution Chart -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Statut Distribution</h5></div>
            <div class=\"card-body\"><div id=\"statutChart\"></div></div>
        </div>
    </div>

    <!-- Poste Distribution Chart -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Position Distribution</h5></div>
            <div class=\"card-body\"><div id=\"posteChart\"></div></div>
        </div>
    </div>

    <!-- All Players List -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">All Players</h5></div>
            <div class=\"card-body\" style=\"max-height: 400px; overflow-y: auto;\">
                <ul class=\"p-0 m-0\">
                    ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allPlayers"]) || array_key_exists("allPlayers", $context) ? $context["allPlayers"] : (function () { throw new RuntimeError('Variable "allPlayers" does not exist.', 87, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["joueur"]) {
            // line 88
            yield "                        <li class=\"d-flex mb-4 pb-1\">
                            <div class=\"avatar flex-shrink-0 me-3\">
                                <img src=\"";
            // line 90
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "profilePictureUrl", [], "any", false, false, false, 90)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "profilePictureUrl", [], "any", false, false, false, 90), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/default-avatar.png"), "html", null, true)));
            yield "\" alt=\"Player\" class=\"rounded\" />
                            </div>
                            <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                <div class=\"me-2\">
                                    <h6 class=\"mb-0\">";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "prenom", [], "any", false, false, false, 94), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "nom", [], "any", false, false, false, 94), "html", null, true);
            yield "</h6>
                                    <small class=\"text-muted\">";
            // line 95
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "sport", [], "any", false, true, false, 95), "nom", [], "any", true, true, false, 95) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "sport", [], "any", false, false, false, 95), "nom", [], "any", false, false, false, 95)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "sport", [], "any", false, false, false, 95), "nom", [], "any", false, false, false, 95), "html", null, true)) : ("Unknown Sport"));
            yield "</small>
                                </div>
                                <div class=\"user-progress\">
                                    <small class=\"fw-semibold\">";
            // line 98
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "taille", [], "any", false, false, false, 98)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "taille", [], "any", false, false, false, 98) . " m"), "html", null, true)) : ("N/A"));
            yield "</small>
                                </div>
                            </div>
                        </li>
                    ";
            $context['_iterated'] = true;
        }
        // line 102
        if (!$context['_iterated']) {
            // line 103
            yield "                        <li>No players found.</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['joueur'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
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

    // line 112
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

        // line 113
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Sport Distribution
            new ApexCharts(document.querySelector(\"#sportDistributionChart\"), {
                chart: { type: 'pie', height: 350 },
                series: [";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sportDistribution"]) || array_key_exists("sportDistribution", $context) ? $context["sportDistribution"] : (function () { throw new RuntimeError('Variable "sportDistribution" does not exist.', 119, $this->source); })()));
        foreach ($context['_seq'] as $context["sport"] => $context["count"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            yield ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['sport'], $context['count'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                labels: [";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys((isset($context["sportDistribution"]) || array_key_exists("sportDistribution", $context) ? $context["sportDistribution"] : (function () { throw new RuntimeError('Variable "sportDistribution" does not exist.', 120, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["sport"]) {
            yield "'";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["sport"], "html", null, true);
            yield "',";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sport'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "]
            }).render();

            // Statut Distribution
            new ApexCharts(document.querySelector(\"#statutChart\"), {
                chart: { type: 'donut', height: 350 },
                series: [";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statutDistribution"]) || array_key_exists("statutDistribution", $context) ? $context["statutDistribution"] : (function () { throw new RuntimeError('Variable "statutDistribution" does not exist.', 126, $this->source); })()));
        foreach ($context['_seq'] as $context["statut"] => $context["count"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            yield ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['statut'], $context['count'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                labels: [";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys((isset($context["statutDistribution"]) || array_key_exists("statutDistribution", $context) ? $context["statutDistribution"] : (function () { throw new RuntimeError('Variable "statutDistribution" does not exist.', 127, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["statut"]) {
            yield "'";
            yield (((true &&  !(null === $context["statut"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["statut"], "html", null, true)) : ("Non défini"));
            yield "',";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['statut'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "]
            }).render();

            // Poste Distribution
            new ApexCharts(document.querySelector(\"#posteChart\"), {
                chart: { type: 'bar', height: 350 },
                series: [{
                    name: \"Nombre de joueurs\",
                    data: [";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["posteDistribution"]) || array_key_exists("posteDistribution", $context) ? $context["posteDistribution"] : (function () { throw new RuntimeError('Variable "posteDistribution" does not exist.', 135, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["poste"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["poste"], "count", [], "any", false, false, false, 135), "html", null, true);
            yield ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['poste'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "]
                }],
                xaxis: {
                    categories: [";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["posteDistribution"]) || array_key_exists("posteDistribution", $context) ? $context["posteDistribution"] : (function () { throw new RuntimeError('Variable "posteDistribution" does not exist.', 138, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["poste"]) {
            yield "'";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["poste"], "poste", [], "any", true, true, false, 138) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["poste"], "poste", [], "any", false, false, false, 138)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["poste"], "poste", [], "any", false, false, false, 138), "html", null, true)) : ("Non défini"));
            yield "',";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['poste'], $context['_parent']);
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
        return "joueur/statistics.html.twig";
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
        return array (  363 => 138,  349 => 135,  329 => 127,  317 => 126,  299 => 120,  287 => 119,  277 => 113,  264 => 112,  248 => 105,  241 => 103,  239 => 102,  230 => 98,  224 => 95,  218 => 94,  211 => 90,  207 => 88,  202 => 87,  163 => 51,  156 => 47,  141 => 35,  134 => 31,  119 => 19,  112 => 15,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Player Statistics{% endblock %}

{% block body %}
<h4 class=\"fw-bold py-3 mb-4\">Player Statistics</h4>

<div class=\"row\">
    <!-- Total Players -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"{{ asset('img/icons/unicons/chart-success.png') }}\" alt=\"Players\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Total Players</span>
                <h3 class=\"card-title mb-2\">{{ totalPlayers }}</h3>
                <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Updated Today</small>
            </div>
        </div>
    </div>

    <!-- Average Height -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"{{ asset('img/icons/unicons/ruler.png') }}\" alt=\"Height\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Average Height</span>
                <h3 class=\"card-title mb-2\">{{ averageHeight|round(2) }} m</h3>
                <small class=\"text-muted\">Based on all registered players</small>
            </div>
        </div>
    </div>

    <!-- Average Weight -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"{{ asset('img/icons/unicons/weight.png') }}\" alt=\"Weight\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Average Weight</span>
                <h3 class=\"card-title mb-2\">{{ averageWeight|round(2) }} kg</h3>
                <small class=\"text-muted\">Based on all registered players</small>
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

    <!-- Statut Distribution Chart -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Statut Distribution</h5></div>
            <div class=\"card-body\"><div id=\"statutChart\"></div></div>
        </div>
    </div>

    <!-- Poste Distribution Chart -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Position Distribution</h5></div>
            <div class=\"card-body\"><div id=\"posteChart\"></div></div>
        </div>
    </div>

    <!-- All Players List -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">All Players</h5></div>
            <div class=\"card-body\" style=\"max-height: 400px; overflow-y: auto;\">
                <ul class=\"p-0 m-0\">
                    {% for joueur in allPlayers %}
                        <li class=\"d-flex mb-4 pb-1\">
                            <div class=\"avatar flex-shrink-0 me-3\">
                                <img src=\"{{ joueur.profilePictureUrl ?: asset('img/default-avatar.png') }}\" alt=\"Player\" class=\"rounded\" />
                            </div>
                            <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                <div class=\"me-2\">
                                    <h6 class=\"mb-0\">{{ joueur.prenom }} {{ joueur.nom }}</h6>
                                    <small class=\"text-muted\">{{ joueur.sport.nom ?? 'Unknown Sport' }}</small>
                                </div>
                                <div class=\"user-progress\">
                                    <small class=\"fw-semibold\">{{ joueur.taille ? joueur.taille ~ ' m' : 'N/A' }}</small>
                                </div>
                            </div>
                        </li>
                    {% else %}
                        <li>No players found.</li>
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
            // Sport Distribution
            new ApexCharts(document.querySelector(\"#sportDistributionChart\"), {
                chart: { type: 'pie', height: 350 },
                series: [{% for sport, count in sportDistribution %}{{ count }},{% endfor %}],
                labels: [{% for sport in sportDistribution|keys %}'{{ sport }}',{% endfor %}]
            }).render();

            // Statut Distribution
            new ApexCharts(document.querySelector(\"#statutChart\"), {
                chart: { type: 'donut', height: 350 },
                series: [{% for statut, count in statutDistribution %}{{ count }},{% endfor %}],
                labels: [{% for statut in statutDistribution|keys %}'{{ statut ?? \"Non défini\" }}',{% endfor %}]
            }).render();

            // Poste Distribution
            new ApexCharts(document.querySelector(\"#posteChart\"), {
                chart: { type: 'bar', height: 350 },
                series: [{
                    name: \"Nombre de joueurs\",
                    data: [{% for poste in posteDistribution %}{{ poste.count }},{% endfor %}]
                }],
                xaxis: {
                    categories: [{% for poste in posteDistribution %}'{{ poste.poste ?? \"Non défini\" }}',{% endfor %}],
                    labels: { rotate: -45 }
                }
            }).render();
        });
    </script>
{% endblock %}", "joueur/statistics.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\MatchupZ-Web-joueur-espace - Copy (5)\\templates\\joueur\\statistics.html.twig");
    }
}
