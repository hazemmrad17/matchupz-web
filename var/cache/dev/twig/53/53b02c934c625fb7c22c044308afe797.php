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

/* espace/statistics.html.twig */
class __TwigTemplate_0c14ab3caa54eaeffe0bdc3b4192c4c2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace/statistics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace/statistics.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "espace/statistics.html.twig", 1);
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

        yield "Statistiques des Espaces Sportifs";
        
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
        yield "    <h4 class=\"fw-bold py-3 mb-4\">Statistiques des Espaces Sportifs</h4>

    <div class=\"row\">
        <!-- Total Espaces -->
        <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"card-title d-flex align-items-start justify-content-between\">
                        <div class=\"avatar flex-shrink-0\">
                            <img src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/chart-success.png"), "html", null, true);
        yield "\" alt=\"Espaces\" class=\"rounded\" />
                        </div>
                    </div>
                    <span class=\"fw-semibold d-block mb-1\">Total Espaces</span>
                    <h3 class=\"card-title mb-2\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalEspaces"]) || array_key_exists("totalEspaces", $context) ? $context["totalEspaces"] : (function () { throw new RuntimeError('Variable "totalEspaces" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "</h3>
                    <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Mis à jour aujourd'hui</small>
                </div>
            </div>
        </div>

        <!-- Average Capacity -->
        <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"card-title d-flex align-items-start justify-content-between\">
                        <div class=\"avatar flex-shrink-0\">
                            <img src=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/wallet-info.png"), "html", null, true);
        yield "\" alt=\"Average Capacity\" class=\"rounded\" />
                        </div>
                    </div>
                    <span class=\"fw-semibold d-block mb-1\">Capacité Moyenne</span>
                    <h3 class=\"card-title mb-2\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["averageCapacite"]) || array_key_exists("averageCapacite", $context) ? $context["averageCapacite"] : (function () { throw new RuntimeError('Variable "averageCapacite" does not exist.', 35, $this->source); })()), 2), "html", null, true);
        yield "</h3>
                    <small class=\"text-info fw-semibold\"><i class=\"bx bx-info-circle\"></i> Par Espace</small>
                </div>
            </div>
        </div>

        <!-- Category Distribution -->
        <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Distribution par Catégorie</h5></div>
                <div class=\"card-body\"><div id=\"categoryChart\"></div></div>
            </div>
        </div>

        <!-- Reservation Status Distribution -->
        <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Espaces Avec/Sans Réservations</h5></div>
                <div class=\"card-body\"><div id=\"reservationStatusChart\"></div></div>
            </div>
        </div>

        <!-- All Espaces List -->
        <div class=\"col-12 col-lg-4 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Tous les Espaces</h5></div>
                <div class=\"card-body\" style=\"max-height: 400px; overflow-y: auto;\">
                    <ul class=\"p-0 m-0\">
                        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allEspaces"]) || array_key_exists("allEspaces", $context) ? $context["allEspaces"] : (function () { throw new RuntimeError('Variable "allEspaces" does not exist.', 63, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["espace"]) {
            // line 64
            yield "                            <li class=\"d-flex mb-4 pb-1\">
                                <div class=\"avatar flex-shrink-0 me-3\">
                                    <img src=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/building.png"), "html", null, true);
            yield "\" alt=\"Espace\" class=\"rounded\" />
                                </div>
                                <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                    <div class=\"me-2\">
                                        <h6 class=\"mb-0\">";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "nom_espace", [], "any", false, false, false, 70), "html", null, true);
            yield "</h6>
                                        <small class=\"text-muted\">";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "categorie", [], "any", false, false, false, 71), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "adresse", [], "any", false, false, false, 71), "html", null, true);
            yield "</small>
                                    </div>
                                    <div class=\"user-progress\">
                                        <small class=\"fw-semibold\">Capacité: ";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "capacite", [], "any", false, false, false, 74), "html", null, true);
            yield "</small>
                                    </div>
                                </div>
                            </li>
                        ";
            $context['_iterated'] = true;
        }
        // line 78
        if (!$context['_iterated']) {
            // line 79
            yield "                            <li>Aucun espace trouvé.</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['espace'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "                    </ul>
                </div>
            </div>
        </div>

        <!-- Reservations per Espace -->
        <div class=\"col-12 col-lg-4 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Réservations par Espace</h5></div>
                <div class=\"card-body\"><div id=\"reservationChart\"></div></div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 96
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

        // line 97
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Category Distribution Chart
            new ApexCharts(document.querySelector(\"#categoryChart\"), {
                chart: { type: 'pie', height: 350 },
                series: [";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categorieDistribution"]) || array_key_exists("categorieDistribution", $context) ? $context["categorieDistribution"] : (function () { throw new RuntimeError('Variable "categorieDistribution" does not exist.', 103, $this->source); })()));
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
        foreach ($context['_seq'] as $context["category"] => $context["count"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
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
        unset($context['_seq'], $context['category'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                labels: [";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categorieDistribution"]) || array_key_exists("categorieDistribution", $context) ? $context["categorieDistribution"] : (function () { throw new RuntimeError('Variable "categorieDistribution" does not exist.', 104, $this->source); })()));
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
        foreach ($context['_seq'] as $context["category"] => $context["count"]) {
            yield "\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["category"], "html", null, true);
            yield "\"";
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 104)) {
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
        unset($context['_seq'], $context['category'], $context['count'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                colors: ['#007bff', '#28a745', '#dc3545', '#ffc107', '#17a2b8']
            }).render();

            // Reservation Status Distribution Chart
            new ApexCharts(document.querySelector(\"#reservationStatusChart\"), {
                chart: { type: 'pie', height: 350 },
                series: [";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservationStatusDistribution"]) || array_key_exists("reservationStatusDistribution", $context) ? $context["reservationStatusDistribution"] : (function () { throw new RuntimeError('Variable "reservationStatusDistribution" does not exist.', 111, $this->source); })()));
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
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 111)) {
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
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservationStatusDistribution"]) || array_key_exists("reservationStatusDistribution", $context) ? $context["reservationStatusDistribution"] : (function () { throw new RuntimeError('Variable "reservationStatusDistribution" does not exist.', 112, $this->source); })()));
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
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 112)) {
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
                colors: ['#28a745', '#dc3545']
            }).render();

            // Reservations per Espace Chart
            new ApexCharts(document.querySelector(\"#reservationChart\"), {
                chart: { type: 'bar', height: 350 },
                series: [{
                    name: 'Réservations',
                    data: [";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservationDistribution"]) || array_key_exists("reservationDistribution", $context) ? $context["reservationDistribution"] : (function () { throw new RuntimeError('Variable "reservationDistribution" does not exist.', 121, $this->source); })()));
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
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 121)) {
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
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservationDistribution"]) || array_key_exists("reservationDistribution", $context) ? $context["reservationDistribution"] : (function () { throw new RuntimeError('Variable "reservationDistribution" does not exist.', 124, $this->source); })()));
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
            if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 124)) {
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
        return "espace/statistics.html.twig";
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
        return array (  460 => 124,  423 => 121,  378 => 112,  343 => 111,  300 => 104,  265 => 103,  255 => 97,  242 => 96,  218 => 81,  211 => 79,  209 => 78,  200 => 74,  192 => 71,  188 => 70,  181 => 66,  177 => 64,  172 => 63,  141 => 35,  134 => 31,  119 => 19,  112 => 15,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Statistiques des Espaces Sportifs{% endblock %}

{% block body %}
    <h4 class=\"fw-bold py-3 mb-4\">Statistiques des Espaces Sportifs</h4>

    <div class=\"row\">
        <!-- Total Espaces -->
        <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"card-title d-flex align-items-start justify-content-between\">
                        <div class=\"avatar flex-shrink-0\">
                            <img src=\"{{ asset('img/icons/unicons/chart-success.png') }}\" alt=\"Espaces\" class=\"rounded\" />
                        </div>
                    </div>
                    <span class=\"fw-semibold d-block mb-1\">Total Espaces</span>
                    <h3 class=\"card-title mb-2\">{{ totalEspaces }}</h3>
                    <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Mis à jour aujourd'hui</small>
                </div>
            </div>
        </div>

        <!-- Average Capacity -->
        <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"card-title d-flex align-items-start justify-content-between\">
                        <div class=\"avatar flex-shrink-0\">
                            <img src=\"{{ asset('img/icons/unicons/wallet-info.png') }}\" alt=\"Average Capacity\" class=\"rounded\" />
                        </div>
                    </div>
                    <span class=\"fw-semibold d-block mb-1\">Capacité Moyenne</span>
                    <h3 class=\"card-title mb-2\">{{ averageCapacite|round(2) }}</h3>
                    <small class=\"text-info fw-semibold\"><i class=\"bx bx-info-circle\"></i> Par Espace</small>
                </div>
            </div>
        </div>

        <!-- Category Distribution -->
        <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Distribution par Catégorie</h5></div>
                <div class=\"card-body\"><div id=\"categoryChart\"></div></div>
            </div>
        </div>

        <!-- Reservation Status Distribution -->
        <div class=\"col-lg-4 col-md-6 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Espaces Avec/Sans Réservations</h5></div>
                <div class=\"card-body\"><div id=\"reservationStatusChart\"></div></div>
            </div>
        </div>

        <!-- All Espaces List -->
        <div class=\"col-12 col-lg-4 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Tous les Espaces</h5></div>
                <div class=\"card-body\" style=\"max-height: 400px; overflow-y: auto;\">
                    <ul class=\"p-0 m-0\">
                        {% for espace in allEspaces %}
                            <li class=\"d-flex mb-4 pb-1\">
                                <div class=\"avatar flex-shrink-0 me-3\">
                                    <img src=\"{{ asset('img/icons/unicons/building.png') }}\" alt=\"Espace\" class=\"rounded\" />
                                </div>
                                <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                    <div class=\"me-2\">
                                        <h6 class=\"mb-0\">{{ espace.nom_espace }}</h6>
                                        <small class=\"text-muted\">{{ espace.categorie }} - {{ espace.adresse }}</small>
                                    </div>
                                    <div class=\"user-progress\">
                                        <small class=\"fw-semibold\">Capacité: {{ espace.capacite }}</small>
                                    </div>
                                </div>
                            </li>
                        {% else %}
                            <li>Aucun espace trouvé.</li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>

        <!-- Reservations per Espace -->
        <div class=\"col-12 col-lg-4 mb-4\">
            <div class=\"card\">
                <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Réservations par Espace</h5></div>
                <div class=\"card-body\"><div id=\"reservationChart\"></div></div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Category Distribution Chart
            new ApexCharts(document.querySelector(\"#categoryChart\"), {
                chart: { type: 'pie', height: 350 },
                series: [{% for category, count in categorieDistribution %}{{ count }}{% if not loop.last %},{% endif %}{% endfor %}],
                labels: [{% for category, count in categorieDistribution %}\"{{ category }}\"{% if not loop.last %},{% endif %}{% endfor %}],
                colors: ['#007bff', '#28a745', '#dc3545', '#ffc107', '#17a2b8']
            }).render();

            // Reservation Status Distribution Chart
            new ApexCharts(document.querySelector(\"#reservationStatusChart\"), {
                chart: { type: 'pie', height: 350 },
                series: [{% for status, count in reservationStatusDistribution %}{{ count }}{% if not loop.last %},{% endif %}{% endfor %}],
                labels: [{% for status, count in reservationStatusDistribution %}\"{{ status }}\"{% if not loop.last %},{% endif %}{% endfor %}],
                colors: ['#28a745', '#dc3545']
            }).render();

            // Reservations per Espace Chart
            new ApexCharts(document.querySelector(\"#reservationChart\"), {
                chart: { type: 'bar', height: 350 },
                series: [{
                    name: 'Réservations',
                    data: [{% for espace, count in reservationDistribution %}{{ count }}{% if not loop.last %},{% endif %}{% endfor %}]
                }],
                xaxis: {
                    categories: [{% for espace, count in reservationDistribution %}\"{{ espace }}\"{% if not loop.last %},{% endif %}{% endfor %}]
                },
                colors: ['#007bff']
            }).render();
        });
    </script>
{% endblock %}", "espace/statistics.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\matchupz-web-0\\templates\\espace\\statistics.html.twig");
    }
}
