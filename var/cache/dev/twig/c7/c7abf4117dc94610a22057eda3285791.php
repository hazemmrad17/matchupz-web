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

/* joueur/widgets.html.twig */
class __TwigTemplate_58ae590540a7f56d699398bb5736fabb extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/widgets.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/widgets.html.twig"));

        // line 1
        yield "<div class=\"row\">
    <div class=\"col-lg-8 mb-4 order-0\">
        <div class=\"card\">
            <div class=\"d-flex align-items-end row\">
                <div class=\"col-sm-7\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-primary\">Félicitations Hazem ! 🎉</h5>
                        <p class=\"mb-4\">
                            Vous avez ajouté <span class=\"fw-bold\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["joueurs"]) || array_key_exists("joueurs", $context) ? $context["joueurs"] : (function () { throw new RuntimeError('Variable "joueurs" does not exist.', 9, $this->source); })())), "html", null, true);
        yield "</span> joueurs aujourd'hui. Consultez votre profil pour les mises à jour.
                        </p>
                        <a href=\"javascript:;\" class=\"btn btn-sm btn-outline-primary\">Voir le Profil</a>
                        <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_scouting");
        yield "\" class=\"btn btn-sm btn-outline-primary\">Scouting</a>
                        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("football_analysis");
        yield "\" class=\"btn btn-sm btn-outline-primary\">Suivi des Joueurs</a>
                        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("football_layout");
        yield "\" class=\"btn btn-sm btn-outline-primary\">Formations</a>
                    </div>
                </div>
                <div class=\"col-sm-5 text-center text-sm-left\">
                    <div class=\"card-body pb-0 px-0 px-md-4\">
                        <img
                            src=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/illustrations/man-with-laptop-light.png"), "html", null, true);
        yield "\"
                            height=\"140\"
                            alt=\"Voir l'utilisateur avec badge\"
                            data-app-dark-img=\"illustrations/man-with-laptop-dark.png\"
                            data-app-light-img=\"illustrations/man-with-laptop-light.png\"
                            onerror=\"this.onerror=null; this.src='";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/Uploads/photos/default_avatar.png"), "html", null, true);
        yield "';\"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-lg-4 col-md-4 order-1\">
        <div class=\"row\">
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
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_statistics");
        yield "\">Aller à la Page des Statistiques</a>
                                </div>
                            </div>
                        </div>
                        <span class=\"fw-semibold d-block mb-1\">Statistiques</span>
                        <h3 class=\"card-title mb-2\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["joueurs"]) || array_key_exists("joueurs", $context) ? $context["joueurs"] : (function () { throw new RuntimeError('Variable "joueurs" does not exist.', 58, $this->source); })())), "html", null, true);
        yield " Joueurs</h3>
                        <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Total Inscrits</small>
                    </div>
                </div>
            </div>
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
        // line 82
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
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["joueurs"]) || array_key_exists("joueurs", $context) ? $context["joueurs"] : (function () { throw new RuntimeError('Variable "joueurs" does not exist.', 129, $this->source); })())), "html", null, true);
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
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active_players"]) || array_key_exists("active_players", $context) ? $context["active_players"] : (function () { throw new RuntimeError('Variable "active_players" does not exist.', 138, $this->source); })()), "html", null, true);
        yield "</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["topPerformers"]) || array_key_exists("topPerformers", $context) ? $context["topPerformers"] : (function () { throw new RuntimeError('Variable "topPerformers" does not exist.', 171, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["performer"]) {
            // line 172
            yield "                        <li class=\"d-flex mb-4 pb-1\">
                            <div class=\"avatar flex-shrink-0 me-3\">
                                <img
                                    src=\"";
            // line 175
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["performer"], "joueur", [], "any", false, false, false, 175), "profilePicture", [], "any", false, false, false, 175)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/uploads/profile_pictures/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["performer"], "joueur", [], "any", false, false, false, 175), "profilePicture", [], "any", false, false, false, 175))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/uploads/photos/default_avatar.png"), "html", null, true)));
            yield "\"
                                    alt=\"Photo de profil de ";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["performer"], "joueur", [], "any", false, false, false, 176), "prenom", [], "any", false, false, false, 176), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["performer"], "joueur", [], "any", false, false, false, 176), "nom", [], "any", false, false, false, 176), "html", null, true);
            yield "\"
                                    class=\"rounded\"
                                    onerror=\"this.onerror=null; this.src='";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/uploads/photos/default_avatar.png"), "html", null, true);
            yield "';\"
                                />
                            </div>
                            <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                <div class=\"me-2\">
                                    <small class=\"text-muted d-block mb-1\">";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["performer"], "joueur", [], "any", false, false, false, 183), "prenom", [], "any", false, false, false, 183), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["performer"], "joueur", [], "any", false, false, false, 183), "nom", [], "any", false, false, false, 183), "html", null, true);
            yield "</small>
                                </div>
                                <div class=\"user-progress d-flex align-items-center gap-1\">
                                    <h6 class=\"mb-0\">";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["performer"], "score", [], "any", false, false, false, 186), "html", null, true);
            yield "/100</h6>
                                </div>
                            </div>
                        </li>
                    ";
            $context['_iterated'] = true;
        }
        // line 190
        if (!$context['_iterated']) {
            // line 191
            yield "                        <li class=\"text-center text-muted\">Aucun joueur performant trouvé.</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['performer'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        yield "                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        if (window.distributionChart || window.physicalChart) {
            return;
        }

        const totalRevenueChartEl = document.querySelector(\"#totalRevenueChart\");
        if (totalRevenueChartEl) {
            const sportData = ";
        // line 207
        yield Twig\Extension\CoreExtension::default(json_encode((isset($context["sport_distribution"]) || array_key_exists("sport_distribution", $context) ? $context["sport_distribution"] : (function () { throw new RuntimeError('Variable "sport_distribution" does not exist.', 207, $this->source); })())), "[]");
        yield ";
            const sportNames = ";
        // line 208
        yield Twig\Extension\CoreExtension::default(json_encode((isset($context["sport_names"]) || array_key_exists("sport_names", $context) ? $context["sport_names"] : (function () { throw new RuntimeError('Variable "sport_names" does not exist.', 208, $this->source); })())), "[]");
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
        // line 251
        yield Twig\Extension\CoreExtension::default(json_encode((isset($context["physical_data"]) || array_key_exists("physical_data", $context) ? $context["physical_data"] : (function () { throw new RuntimeError('Variable "physical_data" does not exist.', 251, $this->source); })())), "[0,0,0]");
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
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "joueur/widgets.html.twig";
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
        return array (  374 => 251,  328 => 208,  324 => 207,  308 => 193,  301 => 191,  299 => 190,  290 => 186,  282 => 183,  274 => 178,  267 => 176,  263 => 175,  258 => 172,  253 => 171,  217 => 138,  205 => 129,  155 => 82,  128 => 58,  120 => 53,  89 => 25,  81 => 20,  72 => 14,  68 => 13,  64 => 12,  58 => 9,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"row\">
    <div class=\"col-lg-8 mb-4 order-0\">
        <div class=\"card\">
            <div class=\"d-flex align-items-end row\">
                <div class=\"col-sm-7\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-primary\">Félicitations Hazem ! 🎉</h5>
                        <p class=\"mb-4\">
                            Vous avez ajouté <span class=\"fw-bold\">{{ joueurs|length }}</span> joueurs aujourd'hui. Consultez votre profil pour les mises à jour.
                        </p>
                        <a href=\"javascript:;\" class=\"btn btn-sm btn-outline-primary\">Voir le Profil</a>
                        <a href=\"{{ path('joueur_scouting') }}\" class=\"btn btn-sm btn-outline-primary\">Scouting</a>
                        <a href=\"{{ path('football_analysis') }}\" class=\"btn btn-sm btn-outline-primary\">Suivi des Joueurs</a>
                        <a href=\"{{ path('football_layout') }}\" class=\"btn btn-sm btn-outline-primary\">Formations</a>
                    </div>
                </div>
                <div class=\"col-sm-5 text-center text-sm-left\">
                    <div class=\"card-body pb-0 px-0 px-md-4\">
                        <img
                            src=\"{{ asset('img/illustrations/man-with-laptop-light.png') }}\"
                            height=\"140\"
                            alt=\"Voir l'utilisateur avec badge\"
                            data-app-dark-img=\"illustrations/man-with-laptop-dark.png\"
                            data-app-light-img=\"illustrations/man-with-laptop-light.png\"
                            onerror=\"this.onerror=null; this.src='{{ asset('/Uploads/photos/default_avatar.png') }}';\"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-lg-4 col-md-4 order-1\">
        <div class=\"row\">
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
                        <h3 class=\"card-title mb-2\">{{ joueurs|length }} Joueurs</h3>
                        <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Total Inscrits</small>
                    </div>
                </div>
            </div>
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
                                    <h6 class=\"mb-0\">{{ joueurs|length }}</h6>
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
                                    src=\"{{ performer.joueur.profilePicture ? asset('/uploads/profile_pictures/' ~ performer.joueur.profilePicture) : asset('/uploads/photos/default_avatar.png') }}\"
                                    alt=\"Photo de profil de {{ performer.joueur.prenom }} {{ performer.joueur.nom }}\"
                                    class=\"rounded\"
                                    onerror=\"this.onerror=null; this.src='{{ asset('/uploads/photos/default_avatar.png') }}';\"
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
</script>", "joueur/widgets.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\Web2\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\joueur\\widgets.html.twig");
    }
}
