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

/* dashboard/index.html.twig */
class __TwigTemplate_e87f9c26a0c368315627366931984bb0 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/index.html.twig", 1);
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

        yield "Dashboard - Joueur Overview";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    <style>
        .card {
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        .avatar i {
            color: #2a437c;
        }
        .badge.bg-label-primary, .badge.bg-label-success {
            border-radius: 50%;
        }
        #totalRevenueChart, #growthChart {
            margin: 0 auto;
        }
        .text-muted {
            font-size: 0.9rem;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 27
        yield "    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Tableau de Bord /</span> Aperçu
            </h4>
            <div class=\"row\">
                <!-- Statistics and Tracking Cards -->
                <div class=\"col-lg-4 col-md-4 order-1\">
                    <div class=\"row\">
                        <!-- Statistics Card -->
                        <div class=\"col-lg-6 col-md-12 col-6 mb-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"card-title d-flex align-items-start justify-content-between\">
                                        <div class=\"avatar flex-shrink-0\">
                                            <i class=\"bx bx-line-chart rounded\" style=\"font-size: 40px;\"></i>
                                        </div>
                                        <div class=\"dropdown\">
                                            <button
                                                class=\"btn p-0\"
                                                type=\"button\"
                                                id=\"cardOpt3\"
                                                data-bs-toggle=\"dropdown\"
                                                aria-haspopup=\"true\"
                                                aria-expanded=\"false\"
                                            >
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"cardOpt3\">
                                                <a class=\"dropdown-item\" href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_statistics");
        yield "\">Aller à la Page des Statistiques</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span class=\"fw-semibold d-block mb-1\">Statistiques</span>
                                    <h3 class=\"card-title mb-2\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_players"]) || array_key_exists("total_players", $context) ? $context["total_players"] : (function () { throw new RuntimeError('Variable "total_players" does not exist.', 61, $this->source); })()), "html", null, true);
        yield " Joueurs</h3>
                                    <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Total Inscrits</small>
                                </div>
                            </div>
                        </div>
                        <!-- Tracking Card -->
                        <div class=\"col-lg-6 col-md-12 col-6 mb-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"card-title d-flex align-items-start justify-content-between\">
                                        <div class=\"avatar flex-shrink-0\">
                                            <i class=\"bx bx-wallet rounded\" style=\"font-size: 40px;\"></i>
                                        </div>
                                        <div class=\"dropdown\">
                                            <button
                                                class=\"btn p-0\"
                                                type=\"button\"
                                                id=\"cardOpt6\"
                                                data-bs-toggle=\"dropdown\"
                                                aria-haspopup=\"true\"
                                                aria-expanded=\"false\"
                                            >
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"cardOpt6\">
                                                <a class=\"dropdown-item\" href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("football_analysis");
        yield "\">Aller à la Page de Suivi</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span>Suivi des Joueurs</span>
                                    <h3 class=\"card-title text-nowrap mb-1\">Ouvert</h3>
                                    <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i>Nouveau</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Performance and Physical Charts -->
                <div class=\"col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4\">
                    <div class=\"card\">
                        <div class=\"row row-bordered g-0\">
                            <div class=\"col-md-8\">
                                <h5 class=\"card-header m-0 me-2 pb-3\">Moyenne des Performances Sportives</h5>
                                <div id=\"totalRevenueChart\" class=\"px-2\"></div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"card-body\">
                                    <div class=\"text-center\">
                                        <div class=\"dropdown\">
                                            <button
                                                class=\"btn btn-sm btn-outline-primary dropdown-toggle\"
                                                type=\"button\"
                                                id=\"growthReportId\"
                                                data-bs-toggle=\"dropdown\"
                                                aria-haspopup=\"true\"
                                                aria-expanded=\"false\"
                                            >
                                                Tous les Sports
                                            </button>
                                            <div class=\"dropdown-menu dropdown-menu-end\">
                                                <a class=\"dropdown-item\" href=\"javascript:void(0);\">Tous les Sports</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id=\"growthChart\" style=\"min-height: 200px;\"></div>
                                    <div class=\"text-center fw-semibold pt-3 mb-2\">Moyenne de la Condition Physique</div>
                                    <div class=\"d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between\">
                                        <div class=\"d-flex\">
                                            <div class=\"me-2\">
                                                <span class=\"badge bg-label-primary p-2\"><i class=\"bx bx-user text-primary\"></i></span>
                                            </div>
                                            <div class=\"d-flex flex-column\">
                                                <small>Total Joueurs</small>
                                                <h6 class=\"mb-0\">";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_players"]) || array_key_exists("total_players", $context) ? $context["total_players"] : (function () { throw new RuntimeError('Variable "total_players" does not exist.', 134, $this->source); })()), "html", null, true);
        yield "</h6>
                                            </div>
                                        </div>
                                        <div class=\"d-flex\">
                                            <div class=\"me-2\">
                                                <span class=\"badge bg-label-success p-2\"><i class=\"bx bx-user-check text-success\"></i></span>
                                            </div>
                                            <div class=\"d-flex flex-column\">
                                                <small>Actifs</small>
                                                <h6 class=\"mb-0\">";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active_players"]) || array_key_exists("active_players", $context) ? $context["active_players"] : (function () { throw new RuntimeError('Variable "active_players" does not exist.', 143, $this->source); })()), "html", null, true);
        yield "</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Top Performers -->
                <div class=\"col-md-6 col-lg-4 order-2 mb-4\">
                    <div class=\"card h-100\">
                        <div class=\"card-header d-flex align-items-center justify-content-between\">
                            <h5 class=\"card-title m-0 me-2\">Joueurs les Plus Performants</h5>
                            <div class=\"dropdown\">
                                <button
                                    class=\"btn p-0\"
                                    type=\"button\"
                                    id=\"transactionID\"
                                    data-bs-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\"
                                >
                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                </button>
                                <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"transactionID\">
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">Derniers 28 Jours</a>
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">Dernier Mois</a>
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">Dernière Année</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <ul class=\"p-0 m-0\">
                                ";
        // line 177
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["topPerformers"]) || array_key_exists("topPerformers", $context) ? $context["topPerformers"] : (function () { throw new RuntimeError('Variable "topPerformers" does not exist.', 177, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["performer"]) {
            // line 178
            yield "                                    <li class=\"d-flex mb-4 pb-1\">
                                        <div class=\"avatar flex-shrink-0 me-3\">
                                            <img
                                                src=\"";
            // line 181
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["performer"], "joueur", [], "any", false, false, false, 181), "profilePicture", [], "any", false, false, false, 181)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/Uploads/profile_pictures/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["performer"], "joueur", [], "any", false, false, false, 181), "profilePicture", [], "any", false, false, false, 181))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/Uploads/photos/default_avatar.png"), "html", null, true)));
            yield "\"
                                                alt=\"Photo de profil de ";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["performer"], "joueur", [], "any", false, false, false, 182), "prenom", [], "any", false, false, false, 182), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["performer"], "joueur", [], "any", false, false, false, 182), "nom", [], "any", false, false, false, 182), "html", null, true);
            yield "\"
                                                class=\"rounded\"
                                                onerror=\"this.onerror=null; this.src='";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/Uploads/photos/default_avatar.png"), "html", null, true);
            yield "';\"
                                            />
                                        </div>
                                        <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                            <div class=\"me-2\">
                                                <small class=\"text-muted d-block mb-1\">";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["performer"], "joueur", [], "any", false, false, false, 189), "prenom", [], "any", false, false, false, 189), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["performer"], "joueur", [], "any", false, false, false, 189), "nom", [], "any", false, false, false, 189), "html", null, true);
            yield "</small>
                                            </div>
                                            <div class=\"user-progress d-flex align-items-center gap-1\">
                                                <h6 class=\"mb-0\">";
            // line 192
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["performer"], "score", [], "any", false, false, false, 192), "html", null, true);
            yield "/100</h6>
                                            </div>
                                        </div>
                                    </li>
                                ";
            $context['_iterated'] = true;
        }
        // line 196
        if (!$context['_iterated']) {
            // line 197
            yield "                                    <li class=\"text-center text-muted\">Aucun joueur performant trouvé.</li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['performer'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        yield "                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 208
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

        // line 209
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/libs/apex-charts/apexcharts.js"), "html", null, true);
        yield "\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            if (window.distributionChart || window.physicalChart) {
                return;
            }

            const totalRevenueChartEl = document.querySelector(\"#totalRevenueChart\");
            if (totalRevenueChartEl) {
                const sportData = ";
        // line 218
        yield Twig\Extension\CoreExtension::default(json_encode((isset($context["sport_distribution"]) || array_key_exists("sport_distribution", $context) ? $context["sport_distribution"] : (function () { throw new RuntimeError('Variable "sport_distribution" does not exist.', 218, $this->source); })())), "[]");
        yield ";
                const sportNames = ";
        // line 219
        yield Twig\Extension\CoreExtension::default(json_encode((isset($context["sport_names"]) || array_key_exists("sport_names", $context) ? $context["sport_names"] : (function () { throw new RuntimeError('Variable "sport_names" does not exist.', 219, $this->source); })())), "[]");
        yield ";
                if (sportData.length && sportNames.length) {
                    const distributionOptions = {
                        chart: {
                            type: 'bar',
                            height: 300,
                            animations: {
                                enabled: true,
                                easing: 'easeinout',
                                speed: 800,
                                animateGradually: { enabled: true, delay: 150 },
                                dynamicAnimation: { enabled: true, speed: 350 }
                            }
                        },
                        series: [{ name: 'Score Moyen', data: sportData }],
                        xaxis: {
                            categories: sportNames,
                            title: { text: 'Sports' }
                        },
                        tooltip: {
                            y: { formatter: val => val + \" / 100\" }
                        },
                        plotOptions: {
                            bar: { horizontal: false, columnWidth: '55%', endingShape: 'rounded' }
                        },
                        dataLabels: {
                            enabled: true,
                            formatter: val => val.toFixed(1)
                        },
                        yaxis: {
                            max: 100,
                            title: { text: 'Score de Performance Moyen' }
                        }
                    };
                    window.distributionChart = new ApexCharts(totalRevenueChartEl, distributionOptions);
                    window.distributionChart.render();
                } else {
                    totalRevenueChartEl.innerHTML = '<p class=\"text-muted text-center\">Aucune donnée disponible pour le graphique.</p>';
                }
            }

            const growthChartEl = document.querySelector(\"#growthChart\");
            if (growthChartEl) {
                const physicalData = ";
        // line 262
        yield Twig\Extension\CoreExtension::default(json_encode((isset($context["physical_data"]) || array_key_exists("physical_data", $context) ? $context["physical_data"] : (function () { throw new RuntimeError('Variable "physical_data" does not exist.', 262, $this->source); })())), "[0,0,0]");
        yield ";
                if (physicalData.length && physicalData.some(val => val > 0)) {
                    const physicalOptions = {
                        chart: {
                            type: 'radar',
                            height: 200,
                            animations: {
                                enabled: true,
                                easing: 'easeinout',
                                speed: 800,
                                animateGradually: { enabled: true, delay: 150 },
                                dynamicAnimation: { enabled: true, speed: 350 }
                            }
                        },
                        series: [{ name: 'Statistiques Physiques', data: physicalData }],
                        labels: ['Endurance', 'Force', 'Vitesse'],
                        plotOptions: {
                            radar: {
                                size: 80,
                                polygons: {
                                    strokeColors: '#e9ecef',
                                    fill: { colors: ['#f8f9fa', '#fff'] }
                                }
                            }
                        },
                        yaxis: { max: 10, stepSize: 2 },
                        tooltip: {
                            y: { formatter: val => val + \" / 10\" }
                        }
                    };
                    window.physicalChart = new ApexCharts(growthChartEl, physicalOptions);
                    window.physicalChart.render();
                } else {
                    growthChartEl.innerHTML = '<p class=\"text-muted text-center\">Aucune donnée disponible pour le graphique.</p>';
                }
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
        return "dashboard/index.html.twig";
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
        return array (  460 => 262,  414 => 219,  410 => 218,  397 => 209,  384 => 208,  366 => 199,  359 => 197,  357 => 196,  348 => 192,  340 => 189,  332 => 184,  325 => 182,  321 => 181,  316 => 178,  311 => 177,  274 => 143,  262 => 134,  211 => 86,  183 => 61,  175 => 56,  144 => 27,  131 => 26,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard - Joueur Overview{% endblock %}

{% block stylesheets %}
    <style>
        .card {
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        .avatar i {
            color: #2a437c;
        }
        .badge.bg-label-primary, .badge.bg-label-success {
            border-radius: 50%;
        }
        #totalRevenueChart, #growthChart {
            margin: 0 auto;
        }
        .text-muted {
            font-size: 0.9rem;
        }
    </style>
{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Tableau de Bord /</span> Aperçu
            </h4>
            <div class=\"row\">
                <!-- Statistics and Tracking Cards -->
                <div class=\"col-lg-4 col-md-4 order-1\">
                    <div class=\"row\">
                        <!-- Statistics Card -->
                        <div class=\"col-lg-6 col-md-12 col-6 mb-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"card-title d-flex align-items-start justify-content-between\">
                                        <div class=\"avatar flex-shrink-0\">
                                            <i class=\"bx bx-line-chart rounded\" style=\"font-size: 40px;\"></i>
                                        </div>
                                        <div class=\"dropdown\">
                                            <button
                                                class=\"btn p-0\"
                                                type=\"button\"
                                                id=\"cardOpt3\"
                                                data-bs-toggle=\"dropdown\"
                                                aria-haspopup=\"true\"
                                                aria-expanded=\"false\"
                                            >
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"cardOpt3\">
                                                <a class=\"dropdown-item\" href=\"{{ path('joueur_statistics') }}\">Aller à la Page des Statistiques</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span class=\"fw-semibold d-block mb-1\">Statistiques</span>
                                    <h3 class=\"card-title mb-2\">{{ total_players }} Joueurs</h3>
                                    <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Total Inscrits</small>
                                </div>
                            </div>
                        </div>
                        <!-- Tracking Card -->
                        <div class=\"col-lg-6 col-md-12 col-6 mb-4\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <div class=\"card-title d-flex align-items-start justify-content-between\">
                                        <div class=\"avatar flex-shrink-0\">
                                            <i class=\"bx bx-wallet rounded\" style=\"font-size: 40px;\"></i>
                                        </div>
                                        <div class=\"dropdown\">
                                            <button
                                                class=\"btn p-0\"
                                                type=\"button\"
                                                id=\"cardOpt6\"
                                                data-bs-toggle=\"dropdown\"
                                                aria-haspopup=\"true\"
                                                aria-expanded=\"false\"
                                            >
                                                <i class=\"bx bx-dots-vertical-rounded\"></i>
                                            </button>
                                            <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"cardOpt6\">
                                                <a class=\"dropdown-item\" href=\"{{ path('football_analysis') }}\">Aller à la Page de Suivi</a>
                                            </div>
                                        </div>
                                    </div>
                                    <span>Suivi des Joueurs</span>
                                    <h3 class=\"card-title text-nowrap mb-1\">Ouvert</h3>
                                    <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i>Nouveau</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Performance and Physical Charts -->
                <div class=\"col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4\">
                    <div class=\"card\">
                        <div class=\"row row-bordered g-0\">
                            <div class=\"col-md-8\">
                                <h5 class=\"card-header m-0 me-2 pb-3\">Moyenne des Performances Sportives</h5>
                                <div id=\"totalRevenueChart\" class=\"px-2\"></div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"card-body\">
                                    <div class=\"text-center\">
                                        <div class=\"dropdown\">
                                            <button
                                                class=\"btn btn-sm btn-outline-primary dropdown-toggle\"
                                                type=\"button\"
                                                id=\"growthReportId\"
                                                data-bs-toggle=\"dropdown\"
                                                aria-haspopup=\"true\"
                                                aria-expanded=\"false\"
                                            >
                                                Tous les Sports
                                            </button>
                                            <div class=\"dropdown-menu dropdown-menu-end\">
                                                <a class=\"dropdown-item\" href=\"javascript:void(0);\">Tous les Sports</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id=\"growthChart\" style=\"min-height: 200px;\"></div>
                                    <div class=\"text-center fw-semibold pt-3 mb-2\">Moyenne de la Condition Physique</div>
                                    <div class=\"d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between\">
                                        <div class=\"d-flex\">
                                            <div class=\"me-2\">
                                                <span class=\"badge bg-label-primary p-2\"><i class=\"bx bx-user text-primary\"></i></span>
                                            </div>
                                            <div class=\"d-flex flex-column\">
                                                <small>Total Joueurs</small>
                                                <h6 class=\"mb-0\">{{ total_players }}</h6>
                                            </div>
                                        </div>
                                        <div class=\"d-flex\">
                                            <div class=\"me-2\">
                                                <span class=\"badge bg-label-success p-2\"><i class=\"bx bx-user-check text-success\"></i></span>
                                            </div>
                                            <div class=\"d-flex flex-column\">
                                                <small>Actifs</small>
                                                <h6 class=\"mb-0\">{{ active_players }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Top Performers -->
                <div class=\"col-md-6 col-lg-4 order-2 mb-4\">
                    <div class=\"card h-100\">
                        <div class=\"card-header d-flex align-items-center justify-content-between\">
                            <h5 class=\"card-title m-0 me-2\">Joueurs les Plus Performants</h5>
                            <div class=\"dropdown\">
                                <button
                                    class=\"btn p-0\"
                                    type=\"button\"
                                    id=\"transactionID\"
                                    data-bs-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\"
                                >
                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                </button>
                                <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"transactionID\">
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">Derniers 28 Jours</a>
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">Dernier Mois</a>
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">Dernière Année</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <ul class=\"p-0 m-0\">
                                {% for performer in topPerformers %}
                                    <li class=\"d-flex mb-4 pb-1\">
                                        <div class=\"avatar flex-shrink-0 me-3\">
                                            <img
                                                src=\"{{ performer.joueur.profilePicture ? asset('/Uploads/profile_pictures/' ~ performer.joueur.profilePicture) : asset('/Uploads/photos/default_avatar.png') }}\"
                                                alt=\"Photo de profil de {{ performer.joueur.prenom }} {{ performer.joueur.nom }}\"
                                                class=\"rounded\"
                                                onerror=\"this.onerror=null; this.src='{{ asset('/Uploads/photos/default_avatar.png') }}';\"
                                            />
                                        </div>
                                        <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                            <div class=\"me-2\">
                                                <small class=\"text-muted d-block mb-1\">{{ performer.joueur.prenom }} {{ performer.joueur.nom }}</small>
                                            </div>
                                            <div class=\"user-progress d-flex align-items-center gap-1\">
                                                <h6 class=\"mb-0\">{{ performer.score }}/100</h6>
                                            </div>
                                        </div>
                                    </li>
                                {% else %}
                                    <li class=\"text-center text-muted\">Aucun joueur performant trouvé.</li>
                                {% endfor %}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('/vendor/libs/apex-charts/apexcharts.js') }}\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            if (window.distributionChart || window.physicalChart) {
                return;
            }

            const totalRevenueChartEl = document.querySelector(\"#totalRevenueChart\");
            if (totalRevenueChartEl) {
                const sportData = {{ sport_distribution|json_encode|default('[]')|raw }};
                const sportNames = {{ sport_names|json_encode|default('[]')|raw }};
                if (sportData.length && sportNames.length) {
                    const distributionOptions = {
                        chart: {
                            type: 'bar',
                            height: 300,
                            animations: {
                                enabled: true,
                                easing: 'easeinout',
                                speed: 800,
                                animateGradually: { enabled: true, delay: 150 },
                                dynamicAnimation: { enabled: true, speed: 350 }
                            }
                        },
                        series: [{ name: 'Score Moyen', data: sportData }],
                        xaxis: {
                            categories: sportNames,
                            title: { text: 'Sports' }
                        },
                        tooltip: {
                            y: { formatter: val => val + \" / 100\" }
                        },
                        plotOptions: {
                            bar: { horizontal: false, columnWidth: '55%', endingShape: 'rounded' }
                        },
                        dataLabels: {
                            enabled: true,
                            formatter: val => val.toFixed(1)
                        },
                        yaxis: {
                            max: 100,
                            title: { text: 'Score de Performance Moyen' }
                        }
                    };
                    window.distributionChart = new ApexCharts(totalRevenueChartEl, distributionOptions);
                    window.distributionChart.render();
                } else {
                    totalRevenueChartEl.innerHTML = '<p class=\"text-muted text-center\">Aucune donnée disponible pour le graphique.</p>';
                }
            }

            const growthChartEl = document.querySelector(\"#growthChart\");
            if (growthChartEl) {
                const physicalData = {{ physical_data|json_encode|default('[0,0,0]')|raw }};
                if (physicalData.length && physicalData.some(val => val > 0)) {
                    const physicalOptions = {
                        chart: {
                            type: 'radar',
                            height: 200,
                            animations: {
                                enabled: true,
                                easing: 'easeinout',
                                speed: 800,
                                animateGradually: { enabled: true, delay: 150 },
                                dynamicAnimation: { enabled: true, speed: 350 }
                            }
                        },
                        series: [{ name: 'Statistiques Physiques', data: physicalData }],
                        labels: ['Endurance', 'Force', 'Vitesse'],
                        plotOptions: {
                            radar: {
                                size: 80,
                                polygons: {
                                    strokeColors: '#e9ecef',
                                    fill: { colors: ['#f8f9fa', '#fff'] }
                                }
                            }
                        },
                        yaxis: { max: 10, stepSize: 2 },
                        tooltip: {
                            y: { formatter: val => val + \" / 10\" }
                        }
                    };
                    window.physicalChart = new ApexCharts(growthChartEl, physicalOptions);
                    window.physicalChart.render();
                } else {
                    growthChartEl.innerHTML = '<p class=\"text-muted text-center\">Aucune donnée disponible pour le graphique.</p>';
                }
            }
        });
    </script>
{% endblock %}", "dashboard/index.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\Web2\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\dashboard\\index.html.twig");
    }
}
