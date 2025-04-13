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

/* abonnement/statistics.html.twig */
class __TwigTemplate_ad558e7aa78eb934c5cd1febfbb815ff extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/statistics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/statistics.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "abonnement/statistics.html.twig", 1);
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

        yield "Statistiques des Abonnements";
        
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
        yield "    <h4 class=\"fw-bold py-3 mb-4\">Statistiques des Abonnements</h4>

    <div class=\"row\">
        <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"card-title d-flex align-items-start justify-content-between\">
                        <div class=\"avatar flex-shrink-0\">
                            <img src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/chart-success.png"), "html", null, true);
        yield "\" alt=\"Abonnements\" class=\"rounded\" />
                        </div>
                    </div>
                    <span class=\"fw-semibold d-block mb-1\">Total Abonnements</span>
                    <h3 class=\"card-title mb-2\">";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalAbonnements"]) || array_key_exists("totalAbonnements", $context) ? $context["totalAbonnements"] : (function () { throw new RuntimeError('Variable "totalAbonnements" does not exist.', 18, $this->source); })()), "html", null, true);
        yield "</h3>
                    <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Mis à jour aujourd'hui</small>
                </div>
            </div>
        </div>

        <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Distribution par État</h5></div>
                <div class=\"card-body\"><div id=\"etatChart\"></div></div>
            </div>
        </div>

        <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Distribution par Type</h5></div>
                <div class=\"card-body\"><div id=\"typeChart\"></div></div>
            </div>
        </div>

        <div class=\"col-12 col-lg-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Tous les Abonnements</h5></div>
                <div class=\"card-body\" style=\"max-height: 400px; overflow-y: auto;\">
                    <ul class=\"p-0 m-0\">
                        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allAbonnements"]) || array_key_exists("allAbonnements", $context) ? $context["allAbonnements"] : (function () { throw new RuntimeError('Variable "allAbonnements" does not exist.', 43, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["abonnement"]) {
            // line 44
            yield "                            <li class=\"d-flex mb-4 pb-1\">
                                <div class=\"avatar flex-shrink-0 me-3\">
                                    <img src=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/chart.png"), "html", null, true);
            yield "\" alt=\"Abonnement\" class=\"rounded\" />
                                </div>
                                <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                    <div class=\"me-2\">
                                        <h6 class=\"mb-0\">";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "club", [], "any", false, false, false, 50), "nomClub", [], "any", false, false, false, 50), "html", null, true);
            yield "</h6>
                                        <small class=\"text-muted\">";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "dateDebut", [], "any", false, false, false, 51), "d/m/Y"), "html", null, true);
            yield "</small>
                                    </div>
                                    <div class=\"user-progress\">
                                        <small class=\"fw-semibold\">";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["abonnement"], "etat", [], "any", false, false, false, 54), "html", null, true);
            yield "</small>
                                    </div>
                                </div>
                            </li>
                        ";
            $context['_iterated'] = true;
        }
        // line 58
        if (!$context['_iterated']) {
            // line 59
            yield "                            <li>Aucun abonnement trouvé.</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['abonnement'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "                    </ul>
                </div>
            </div>
        </div>

        <div class=\"col-12 col-lg-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Abonnements par Club</h5></div>
                <div class=\"card-body\"><div id=\"clubChart\"></div></div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 75
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

        // line 76
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Etat Distribution Chart
            new ApexCharts(document.querySelector(\"#etatChart\"), {
                chart: { type: 'pie', height: 350 },
                series: [";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["etatDistribution"]) || array_key_exists("etatDistribution", $context) ? $context["etatDistribution"] : (function () { throw new RuntimeError('Variable "etatDistribution" does not exist.', 82, $this->source); })()));
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
        foreach ($context['_seq'] as $context["etat"] => $context["count"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 82)) {
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
        unset($context['_seq'], $context['etat'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                labels: [";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["etatDistribution"]) || array_key_exists("etatDistribution", $context) ? $context["etatDistribution"] : (function () { throw new RuntimeError('Variable "etatDistribution" does not exist.', 83, $this->source); })()));
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
        foreach ($context['_seq'] as $context["etat"] => $context["count"]) {
            yield "\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["etat"], "html", null, true);
            yield "\"";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 83)) {
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
        unset($context['_seq'], $context['etat'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                colors: ['#28a745', '#dc3545', '#ffc107']
            }).render();

            // Type Distribution Chart
            new ApexCharts(document.querySelector(\"#typeChart\"), {
                chart: { type: 'pie', height: 350 },
                series: [";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["typeDistribution"]) || array_key_exists("typeDistribution", $context) ? $context["typeDistribution"] : (function () { throw new RuntimeError('Variable "typeDistribution" does not exist.', 90, $this->source); })()));
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
        foreach ($context['_seq'] as $context["type"] => $context["count"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 90)) {
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
        unset($context['_seq'], $context['type'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                labels: [";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["typeDistribution"]) || array_key_exists("typeDistribution", $context) ? $context["typeDistribution"] : (function () { throw new RuntimeError('Variable "typeDistribution" does not exist.', 91, $this->source); })()));
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
        foreach ($context['_seq'] as $context["type"] => $context["count"]) {
            yield "\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
            yield "\"";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 91)) {
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
        unset($context['_seq'], $context['type'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                colors: ['#007bff', '#28a745', '#dc3545']
            }).render();

            // Club Distribution Chart
            new ApexCharts(document.querySelector(\"#clubChart\"), {
                chart: { type: 'bar', height: 350 },
                series: [{
                    name: 'Abonnements',
                    data: [";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clubDistribution"]) || array_key_exists("clubDistribution", $context) ? $context["clubDistribution"] : (function () { throw new RuntimeError('Variable "clubDistribution" does not exist.', 100, $this->source); })()));
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
        foreach ($context['_seq'] as $context["club"] => $context["count"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 100)) {
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
        unset($context['_seq'], $context['club'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "]
                }],
                xaxis: {
                    categories: [";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clubDistribution"]) || array_key_exists("clubDistribution", $context) ? $context["clubDistribution"] : (function () { throw new RuntimeError('Variable "clubDistribution" does not exist.', 103, $this->source); })()));
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
        foreach ($context['_seq'] as $context["club"] => $context["count"]) {
            yield "\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["club"], "html", null, true);
            yield "\"";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 103)) {
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
        unset($context['_seq'], $context['club'], $context['count'], $context['_parent'], $context['loop']);
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
        return "abonnement/statistics.html.twig";
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
        return array (  431 => 103,  394 => 100,  349 => 91,  314 => 90,  271 => 83,  236 => 82,  226 => 76,  213 => 75,  190 => 61,  183 => 59,  181 => 58,  172 => 54,  166 => 51,  162 => 50,  155 => 46,  151 => 44,  146 => 43,  118 => 18,  111 => 14,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Statistiques des Abonnements{% endblock %}

{% block body %}
    <h4 class=\"fw-bold py-3 mb-4\">Statistiques des Abonnements</h4>

    <div class=\"row\">
        <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"card-title d-flex align-items-start justify-content-between\">
                        <div class=\"avatar flex-shrink-0\">
                            <img src=\"{{ asset('img/icons/unicons/chart-success.png') }}\" alt=\"Abonnements\" class=\"rounded\" />
                        </div>
                    </div>
                    <span class=\"fw-semibold d-block mb-1\">Total Abonnements</span>
                    <h3 class=\"card-title mb-2\">{{ totalAbonnements }}</h3>
                    <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Mis à jour aujourd'hui</small>
                </div>
            </div>
        </div>

        <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Distribution par État</h5></div>
                <div class=\"card-body\"><div id=\"etatChart\"></div></div>
            </div>
        </div>

        <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Distribution par Type</h5></div>
                <div class=\"card-body\"><div id=\"typeChart\"></div></div>
            </div>
        </div>

        <div class=\"col-12 col-lg-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Tous les Abonnements</h5></div>
                <div class=\"card-body\" style=\"max-height: 400px; overflow-y: auto;\">
                    <ul class=\"p-0 m-0\">
                        {% for abonnement in allAbonnements %}
                            <li class=\"d-flex mb-4 pb-1\">
                                <div class=\"avatar flex-shrink-0 me-3\">
                                    <img src=\"{{ asset('img/icons/unicons/chart.png') }}\" alt=\"Abonnement\" class=\"rounded\" />
                                </div>
                                <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                    <div class=\"me-2\">
                                        <h6 class=\"mb-0\">{{ abonnement.club.nomClub }}</h6>
                                        <small class=\"text-muted\">{{ abonnement.dateDebut|date('d/m/Y') }}</small>
                                    </div>
                                    <div class=\"user-progress\">
                                        <small class=\"fw-semibold\">{{ abonnement.etat }}</small>
                                    </div>
                                </div>
                            </li>
                        {% else %}
                            <li>Aucun abonnement trouvé.</li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>

        <div class=\"col-12 col-lg-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Abonnements par Club</h5></div>
                <div class=\"card-body\"><div id=\"clubChart\"></div></div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Etat Distribution Chart
            new ApexCharts(document.querySelector(\"#etatChart\"), {
                chart: { type: 'pie', height: 350 },
                series: [{% for etat, count in etatDistribution %}{{ count }}{% if not loop.last %},{% endif %}{% endfor %}],
                labels: [{% for etat, count in etatDistribution %}\"{{ etat }}\"{% if not loop.last %},{% endif %}{% endfor %}],
                colors: ['#28a745', '#dc3545', '#ffc107']
            }).render();

            // Type Distribution Chart
            new ApexCharts(document.querySelector(\"#typeChart\"), {
                chart: { type: 'pie', height: 350 },
                series: [{% for type, count in typeDistribution %}{{ count }}{% if not loop.last %},{% endif %}{% endfor %}],
                labels: [{% for type, count in typeDistribution %}\"{{ type }}\"{% if not loop.last %},{% endif %}{% endfor %}],
                colors: ['#007bff', '#28a745', '#dc3545']
            }).render();

            // Club Distribution Chart
            new ApexCharts(document.querySelector(\"#clubChart\"), {
                chart: { type: 'bar', height: 350 },
                series: [{
                    name: 'Abonnements',
                    data: [{% for club, count in clubDistribution %}{{ count }}{% if not loop.last %},{% endif %}{% endfor %}]
                }],
                xaxis: {
                    categories: [{% for club, count in clubDistribution %}\"{{ club }}\"{% if not loop.last %},{% endif %}{% endfor %}]
                },
                colors: ['#007bff']
            }).render();
        });
    </script>
{% endblock %}", "abonnement/statistics.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\abonnement\\statistics.html.twig");
    }
}
