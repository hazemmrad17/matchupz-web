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
class __TwigTemplate_c9df0ff297188abb18f1d88147d20f59 extends Template
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
                        <h5 class=\"card-title text-primary\">Congratulations Hazem! 🎉</h5>
                        <p class=\"mb-4\">
                            You have added <span class=\"fw-bold\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["joueurs"]) || array_key_exists("joueurs", $context) ? $context["joueurs"] : (function () { throw new RuntimeError('Variable "joueurs" does not exist.', 9, $this->source); })())), "html", null, true);
        yield "</span> players today. Check your profile for updates.
                        </p>
                        <a href=\"javascript:;\" class=\"btn btn-sm btn-outline-primary\">View Profile</a>
                    </div>
                </div>
                <div class=\"col-sm-5 text-center text-sm-left\">
                    <div class=\"card-body pb-0 px-0 px-md-4\">
                        <img
                            src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/illustrations/man-with-laptop-light.png"), "html", null, true);
        yield "\"
                            height=\"140\"
                            alt=\"View Badge User\"
                            data-app-dark-img=\"illustrations/man-with-laptop-dark.png\"
                            data-app-light-img=\"illustrations/man-with-laptop-light.png\"
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
                                <img
                                    src=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/icons/unicons/chart-success.png"), "html", null, true);
        yield "\"
                                    alt=\"chart success\"
                                    class=\"rounded\"
                                />
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
        yield "\">Aller à la Page Statistiques</a>
                                </div>
                            </div>
                        </div>
                        <span class=\"fw-semibold d-block mb-1\">Statistiques</span>
                        <h3 class=\"card-title mb-2\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["joueurs"]) || array_key_exists("joueurs", $context) ? $context["joueurs"] : (function () { throw new RuntimeError('Variable "joueurs" does not exist.', 58, $this->source); })())), "html", null, true);
        yield " Joueurs</h3>
                        <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Total Registered</small>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-12 col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <img
                                    src=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/icons/unicons/wallet-info.png"), "html", null, true);
        yield "\"
                                    alt=\"Credit Card\"
                                    class=\"rounded\"
                                />
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
                                    <a class=\"dropdown-item\" href=\"#\">Go To Tracking Page</a>
                                </div>
                            </div>
                        </div>
                        <span>Player Tracking</span>
                        <h3 class=\"card-title text-nowrap mb-1\">En Cours</h3>
                        <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Coming Soon</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Total Revenue -->
    <div class=\"col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4\">
        <div class=\"card\">
            <div class=\"row row-bordered g-0\">
                <div class=\"col-md-8\">
                    <h5 class=\"card-header m-0 me-2 pb-3\">Player Distribution by Sport</h5>
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
                                    All Sports
                                </button>
                                <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"growthReportId\">
                                    <!-- Could add sport-specific filters here if needed -->
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">All Sports</a>
                                </div>
                            </div>
                        </div>
                        <div id=\"growthChart\"></div>
                        <div class=\"text-center fw-semibold pt-3 mb-2\">Active Players Rate</div>
                        <div class=\"d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between\">
                            <div class=\"d-flex\">
                                <div class=\"me-2\">
                                    <span class=\"badge bg-label-primary p-2\"><i class=\"bx bx-user text-primary\"></i></span>
                                </div>
                                <div class=\"d-flex flex-column\">
                                    <small>Total Players</small>
                                    <h6 class=\"mb-0\">";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["joueurs"]) || array_key_exists("joueurs", $context) ? $context["joueurs"] : (function () { throw new RuntimeError('Variable "joueurs" does not exist.', 135, $this->source); })())), "html", null, true);
        yield "</h6>
                                </div>
                            </div>
                            <div class=\"d-flex\">
                                <div class=\"me-2\">
                                    <span class=\"badge bg-label-success p-2\"><i class=\"bx bx-user-check text-success\"></i></span>
                                </div>
                                <div class=\"d-flex flex-column\">
                                    <small>Active</small>
                                    <h6 class=\"mb-0\">";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active_players"]) || array_key_exists("active_players", $context) ? $context["active_players"] : (function () { throw new RuntimeError('Variable "active_players" does not exist.', 144, $this->source); })()), "html", null, true);
        yield "</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Transactions -->
    <div class=\"col-md-6 col-lg-4 order-2 mb-4\">
        <div class=\"card h-100\">
            <div class=\"card-header d-flex align-items-center justify-content-between\">
                <h5 class=\"card-title m-0 me-2\">Les Joueurs Plus Performants</h5>
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
                        <a class=\"dropdown-item\" href=\"javascript:void(0);\">Last 28 Days</a>
                        <a class=\"dropdown-item\" href=\"javascript:void(0);\">Last Month</a>
                        <a class=\"dropdown-item\" href=\"javascript:void(0);\">Last Year</a>
                    </div>
                </div>
            </div>
            <div class=\"card-body\">
                <ul class=\"p-0 m-0\">
                    ";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["topPerformers"]) || array_key_exists("topPerformers", $context) ? $context["topPerformers"] : (function () { throw new RuntimeError('Variable "topPerformers" does not exist.', 179, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["joueur"]) {
            // line 180
            yield "                        <li class=\"d-flex mb-4 pb-1\">
                            <div class=\"avatar flex-shrink-0 me-3\">
                                <img src=\"";
            // line 182
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "profilePictureUrl", [], "any", false, false, false, 182)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "profilePictureUrl", [], "any", false, false, false, 182), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/icons/unicons/user.png"), "html", null, true)));
            yield "\" alt=\"User\" class=\"rounded\" />
                            </div>
                            <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                <div class=\"me-2\">
                                    <small class=\"text-muted d-block mb-1\">";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "prenom", [], "any", false, false, false, 186), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "nom", [], "any", false, false, false, 186), "html", null, true);
            yield "</small>
                                    <h6 class=\"mb-0\">";
            // line 187
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "sport", [], "any", false, true, false, 187), "nom", [], "any", true, true, false, 187) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "sport", [], "any", false, false, false, 187), "nom", [], "any", false, false, false, 187)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "sport", [], "any", false, false, false, 187), "nom", [], "any", false, false, false, 187), "html", null, true)) : ("N/A"));
            yield "</h6>
                                </div>
                                <div class=\"user-progress d-flex align-items-center gap-1\">
                                    <h6 class=\"mb-0\">";
            // line 190
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "taille", [], "any", false, false, false, 190)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "taille", [], "any", false, false, false, 190) . " m"), "html", null, true)) : ("N/A"));
            yield "</h6>
                                    <span class=\"text-muted\">";
            // line 191
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "poste", [], "any", true, true, false, 191) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "poste", [], "any", false, false, false, 191)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "poste", [], "any", false, false, false, 191), "html", null, true)) : ("N/A"));
            yield "</span>
                                </div>
                            </div>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['joueur'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        yield "                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var options = {
            chart: {
                type: 'bar', // Changed to bar chart for better visualization
                height: 300
            },
            series: [{
                name: 'Players',
                data: ";
        // line 211
        yield json_encode((isset($context["sport_distribution"]) || array_key_exists("sport_distribution", $context) ? $context["sport_distribution"] : (function () { throw new RuntimeError('Variable "sport_distribution" does not exist.', 211, $this->source); })()));
        yield "
            }],
            xaxis: {
                categories: ";
        // line 214
        yield json_encode((isset($context["sport_names"]) || array_key_exists("sport_names", $context) ? $context["sport_names"] : (function () { throw new RuntimeError('Variable "sport_names" does not exist.', 214, $this->source); })()));
        yield "
            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return val + \" players\"
                    }
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded'
                }
            },
            dataLabels: {
                enabled: true
            }
        };
        var chart = new ApexCharts(document.querySelector(\"#totalRevenueChart\"), options);
        chart.render();
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
        return array (  317 => 214,  311 => 211,  294 => 196,  283 => 191,  279 => 190,  273 => 187,  267 => 186,  260 => 182,  256 => 180,  252 => 179,  214 => 144,  202 => 135,  133 => 69,  119 => 58,  111 => 53,  91 => 36,  69 => 17,  58 => 9,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"row\">
    <div class=\"col-lg-8 mb-4 order-0\">
        <div class=\"card\">
            <div class=\"d-flex align-items-end row\">
                <div class=\"col-sm-7\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-primary\">Congratulations Hazem! 🎉</h5>
                        <p class=\"mb-4\">
                            You have added <span class=\"fw-bold\">{{ joueurs|length }}</span> players today. Check your profile for updates.
                        </p>
                        <a href=\"javascript:;\" class=\"btn btn-sm btn-outline-primary\">View Profile</a>
                    </div>
                </div>
                <div class=\"col-sm-5 text-center text-sm-left\">
                    <div class=\"card-body pb-0 px-0 px-md-4\">
                        <img
                            src=\"{{ asset('/img/illustrations/man-with-laptop-light.png') }}\"
                            height=\"140\"
                            alt=\"View Badge User\"
                            data-app-dark-img=\"illustrations/man-with-laptop-dark.png\"
                            data-app-light-img=\"illustrations/man-with-laptop-light.png\"
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
                                <img
                                    src=\"{{ asset('/img/icons/unicons/chart-success.png') }}\"
                                    alt=\"chart success\"
                                    class=\"rounded\"
                                />
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
                                    <a class=\"dropdown-item\" href=\"{{ path('joueur_statistics') }}\">Aller à la Page Statistiques</a>
                                </div>
                            </div>
                        </div>
                        <span class=\"fw-semibold d-block mb-1\">Statistiques</span>
                        <h3 class=\"card-title mb-2\">{{ joueurs|length }} Joueurs</h3>
                        <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Total Registered</small>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-12 col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <img
                                    src=\"{{ asset('/img/icons/unicons/wallet-info.png') }}\"
                                    alt=\"Credit Card\"
                                    class=\"rounded\"
                                />
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
                                    <a class=\"dropdown-item\" href=\"#\">Go To Tracking Page</a>
                                </div>
                            </div>
                        </div>
                        <span>Player Tracking</span>
                        <h3 class=\"card-title text-nowrap mb-1\">En Cours</h3>
                        <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Coming Soon</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Total Revenue -->
    <div class=\"col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4\">
        <div class=\"card\">
            <div class=\"row row-bordered g-0\">
                <div class=\"col-md-8\">
                    <h5 class=\"card-header m-0 me-2 pb-3\">Player Distribution by Sport</h5>
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
                                    All Sports
                                </button>
                                <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"growthReportId\">
                                    <!-- Could add sport-specific filters here if needed -->
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">All Sports</a>
                                </div>
                            </div>
                        </div>
                        <div id=\"growthChart\"></div>
                        <div class=\"text-center fw-semibold pt-3 mb-2\">Active Players Rate</div>
                        <div class=\"d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between\">
                            <div class=\"d-flex\">
                                <div class=\"me-2\">
                                    <span class=\"badge bg-label-primary p-2\"><i class=\"bx bx-user text-primary\"></i></span>
                                </div>
                                <div class=\"d-flex flex-column\">
                                    <small>Total Players</small>
                                    <h6 class=\"mb-0\">{{ joueurs|length }}</h6>
                                </div>
                            </div>
                            <div class=\"d-flex\">
                                <div class=\"me-2\">
                                    <span class=\"badge bg-label-success p-2\"><i class=\"bx bx-user-check text-success\"></i></span>
                                </div>
                                <div class=\"d-flex flex-column\">
                                    <small>Active</small>
                                    <h6 class=\"mb-0\">{{ active_players }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Transactions -->
    <div class=\"col-md-6 col-lg-4 order-2 mb-4\">
        <div class=\"card h-100\">
            <div class=\"card-header d-flex align-items-center justify-content-between\">
                <h5 class=\"card-title m-0 me-2\">Les Joueurs Plus Performants</h5>
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
                        <a class=\"dropdown-item\" href=\"javascript:void(0);\">Last 28 Days</a>
                        <a class=\"dropdown-item\" href=\"javascript:void(0);\">Last Month</a>
                        <a class=\"dropdown-item\" href=\"javascript:void(0);\">Last Year</a>
                    </div>
                </div>
            </div>
            <div class=\"card-body\">
                <ul class=\"p-0 m-0\">
                    {% for joueur in topPerformers %}
                        <li class=\"d-flex mb-4 pb-1\">
                            <div class=\"avatar flex-shrink-0 me-3\">
                                <img src=\"{{ joueur.profilePictureUrl ?: asset('/img/icons/unicons/user.png') }}\" alt=\"User\" class=\"rounded\" />
                            </div>
                            <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                <div class=\"me-2\">
                                    <small class=\"text-muted d-block mb-1\">{{ joueur.prenom }} {{ joueur.nom }}</small>
                                    <h6 class=\"mb-0\">{{ joueur.sport.nom ?? 'N/A' }}</h6>
                                </div>
                                <div class=\"user-progress d-flex align-items-center gap-1\">
                                    <h6 class=\"mb-0\">{{ joueur.taille ? joueur.taille ~ ' m' : 'N/A' }}</h6>
                                    <span class=\"text-muted\">{{ joueur.poste ?? 'N/A' }}</span>
                                </div>
                            </div>
                        </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var options = {
            chart: {
                type: 'bar', // Changed to bar chart for better visualization
                height: 300
            },
            series: [{
                name: 'Players',
                data: {{ sport_distribution|json_encode|raw }}
            }],
            xaxis: {
                categories: {{ sport_names|json_encode|raw }}
            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return val + \" players\"
                    }
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded'
                }
            },
            dataLabels: {
                enabled: true
            }
        };
        var chart = new ApexCharts(document.querySelector(\"#totalRevenueChart\"), options);
        chart.render();
    });
</script>", "joueur/widgets.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\joueur\\widgets.html.twig");
    }
}
