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

/* contrat/widgets.html.twig */
class __TwigTemplate_17fcf2ecc0d2d2985f0dde9d9c952b4b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/widgets.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/widgets.html.twig"));

        // line 1
        yield "<div class=\"row\">
    <div class=\"col-lg-8 mb-4 order-0\">
        <div class=\"card\">
            <div class=\"d-flex align-items-end row\">
                <div class=\"col-sm-7\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-primary\">Congratulations Amine! 🎉</h5>
                        <p class=\"mb-4\">
                            ";
        // line 9
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "attributes", [], "any", false, false, false, 9), "get", ["_route"], "method", false, false, false, 9) == "contrat_main")) {
            // line 10
            yield "                                You have <span class=\"fw-bold\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 10, $this->source); })())), "html", null, true);
            yield "</span> contracts in total. Check your profile for updates.
                            ";
        } else {
            // line 12
            yield "                                Check your profile for updates.
                            ";
        }
        // line 14
        yield "                        </p>
                        <a href=\"javascript:;\" class=\"btn btn-sm btn-outline-primary\">View Profile</a>
                    </div>
                </div>
                <div class=\"col-sm-5 text-center text-sm-left\">
                    <div class=\"card-body pb-0 px-0 px-md-4\">
                        <img
                            src=\"";
        // line 21
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
                                <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_statistics");
        yield "\">
                                    <img
                                    src=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/icons/unicons/chart-success.png"), "html", null, true);
        yield "\"
                                    alt=\"chart success\"
                                    class=\"rounded\"
                                    />
                                </a>
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
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">Go To Statistics Page</a>
                                </div>
                            </div>
                        </div>
                        <span class=\"fw-semibold d-block mb-1\">Statistics</span>
                        ";
        // line 64
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "request", [], "any", false, false, false, 64), "attributes", [], "any", false, false, false, 64), "get", ["_route"], "method", false, false, false, 64) == "contrat_main")) {
            // line 65
            yield "                            <h3 class=\"card-title mb-2\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 65, $this->source); })())), "html", null, true);
            yield " Contracts</h3>
                            <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Total Contracts</small>
                        ";
        } else {
            // line 68
            yield "                            <h3 class=\"card-title mb-2\">N/A</h3>
                            <small class=\"text-muted fw-semibold\">No Data Available</small>
                        ";
        }
        // line 71
        yield "                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-12 col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <img
                                    src=\"";
        // line 80
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
                        <span>Tracking</span>
                        <h3 class=\"card-title text-nowrap mb-1\">In Progress</h3>
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
                    <h5 class=\"card-header m-0 me-2 pb-3\">
                        ";
        // line 115
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "request", [], "any", false, false, false, 115), "attributes", [], "any", false, false, false, 115), "get", ["_route"], "method", false, false, false, 115) == "contrat_main")) {
            // line 116
            yield "                            Contract Growth
                        ";
        } else {
            // line 118
            yield "                            Growth Statistics
                        ";
        }
        // line 120
        yield "                    </h5>
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
                                    2024
                                </button>
                                <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"growthReportId\">
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">2023</a>
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">2022</a>
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">2021</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id=\"growthChart\"></div>
                    <div class=\"text-center fw-semibold pt-3 mb-2\">
                        ";
        // line 147
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 147, $this->source); })()), "request", [], "any", false, false, false, 147), "attributes", [], "any", false, false, false, 147), "get", ["_route"], "method", false, false, false, 147) == "contrat_main")) {
            // line 148
            yield "                            Contract Registration Trend
                        ";
        } else {
            // line 150
            yield "                            Registration Trend
                        ";
        }
        // line 152
        yield "                    </div>
                    <div class=\"d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between\">
                        <div class=\"d-flex\">
                            <div class=\"me-2\">
                                <span class=\"badge bg-label-primary p-2\"><i class=\"bx bx-user text-primary\"></i></span>
                            </div>
                            <div class=\"d-flex flex-column\">
                                <small>2024</small>
                                ";
        // line 160
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 160, $this->source); })()), "request", [], "any", false, false, false, 160), "attributes", [], "any", false, false, false, 160), "get", ["_route"], "method", false, false, false, 160) == "contrat_main")) {
            // line 161
            yield "                                    <h6 class=\"mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 161, $this->source); })())), "html", null, true);
            yield "</h6>
                                ";
        } else {
            // line 163
            yield "                                    <h6 class=\"mb-0\">N/A</h6>
                                ";
        }
        // line 165
        yield "                            </div>
                        </div>
                        <div class=\"d-flex\">
                            <div class=\"me-2\">
                                <span class=\"badge bg-label-info p-2\"><i class=\"bx bx-user text-info\"></i></span>
                            </div>
                            <div class=\"d-flex flex-column\">
                                <small>2023</small>
                                <h6 class=\"mb-0\">N/A</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Recent Contracts -->
    <div class=\"col-md-6 col-lg-4 order-2 mb-4\">
        <div class=\"card h-100\">
            <div class=\"card-header d-flex align-items-center justify-content-between\">
                <h5 class=\"card-title m-0 me-2\">
                    ";
        // line 186
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 186, $this->source); })()), "request", [], "any", false, false, false, 186), "attributes", [], "any", false, false, false, 186), "get", ["_route"], "method", false, false, false, 186) == "contrat_main")) {
            // line 187
            yield "                        Recent Contracts
                    ";
        } else {
            // line 189
            yield "                        Recent Activity
                    ";
        }
        // line 191
        yield "                </h5>
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
        // line 212
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 212, $this->source); })()), "request", [], "any", false, false, false, 212), "attributes", [], "any", false, false, false, 212), "get", ["_route"], "method", false, false, false, 212) == "contrat_main")) {
            // line 213
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recentContracts"]) || array_key_exists("recentContracts", $context) ? $context["recentContracts"] : (function () { throw new RuntimeError('Variable "recentContracts" does not exist.', 213, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["contrat"]) {
                yield " ";
                // line 214
                yield "                            <li class=\"d-flex mb-4 pb-1\">
                                <div class=\"avatar flex-shrink-0 me-3\">
                                    <img src=\"";
                // line 216
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/icons/unicons/file.png"), "html", null, true);
                yield "\" alt=\"Contract\" class=\"rounded\" />
                                </div>
                                <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                    <div class=\"me-2\">
                                        <small class=\"text-muted d-block mb-1\">";
                // line 220
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "DateDebut", [], "any", false, false, false, 220), "Y-m-d"), "html", null, true);
                yield "</small>
                                        <h6 class=\"mb-0\">";
                // line 221
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Titre", [], "any", false, false, false, 221), "html", null, true);
                yield "</h6>
                                    </div>
                                    <div class=\"user-progress d-flex align-items-center gap-1\">
                                        <h6 class=\"mb-0\">";
                // line 224
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Montant", [], "any", false, false, false, 224), "html", null, true);
                yield " TND</h6>
                                    </div>
                                </div>
                            </li>
                        ";
                $context['_iterated'] = true;
            }
            // line 228
            if (!$context['_iterated']) {
                // line 229
                yield "                            <li class=\"d-flex mb-4 pb-1\">
                                <div class=\"text-muted\">Aucun contrat récent</div>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['contrat'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 233
            yield "                    ";
        } else {
            // line 234
            yield "                        <li class=\"d-flex mb-4 pb-1\">
                            <div class=\"text-muted\">No recent activity available</div>
                        </li>
                    ";
        }
        // line 238
        yield "                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var options = {
            chart: {
                type: 'line',
                height: 300
            },
            series: [{
                name: '";
        // line 252
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 252, $this->source); })()), "request", [], "any", false, false, false, 252), "attributes", [], "any", false, false, false, 252), "get", ["_route"], "method", false, false, false, 252) == "contrat_main")) ? ("Contracts") : ("Activity"));
        yield "',
                data: [";
        // line 253
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 253, $this->source); })()), "request", [], "any", false, false, false, 253), "attributes", [], "any", false, false, false, 253), "get", ["_route"], "method", false, false, false, 253) == "contrat_main")) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 253, $this->source); })())), "html", null, true)) : (0));
        yield "]
            }],
            xaxis: {
                categories: ['2024']
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
        return "contrat/widgets.html.twig";
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
        return array (  400 => 253,  396 => 252,  380 => 238,  374 => 234,  371 => 233,  362 => 229,  360 => 228,  351 => 224,  345 => 221,  341 => 220,  334 => 216,  330 => 214,  323 => 213,  321 => 212,  298 => 191,  294 => 189,  290 => 187,  288 => 186,  265 => 165,  261 => 163,  255 => 161,  253 => 160,  243 => 152,  239 => 150,  235 => 148,  233 => 147,  204 => 120,  200 => 118,  196 => 116,  194 => 115,  156 => 80,  145 => 71,  140 => 68,  133 => 65,  131 => 64,  105 => 41,  100 => 39,  79 => 21,  70 => 14,  66 => 12,  60 => 10,  58 => 9,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"row\">
    <div class=\"col-lg-8 mb-4 order-0\">
        <div class=\"card\">
            <div class=\"d-flex align-items-end row\">
                <div class=\"col-sm-7\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-primary\">Congratulations Amine! 🎉</h5>
                        <p class=\"mb-4\">
                            {% if app.request.attributes.get('_route') == 'contrat_main' %}
                                You have <span class=\"fw-bold\">{{ contrats|length }}</span> contracts in total. Check your profile for updates.
                            {% else %}
                                Check your profile for updates.
                            {% endif %}
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
                                <a href=\"{{ path('contrat_statistics') }}\">
                                    <img
                                    src=\"{{ asset('/img/icons/unicons/chart-success.png') }}\"
                                    alt=\"chart success\"
                                    class=\"rounded\"
                                    />
                                </a>
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
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">Go To Statistics Page</a>
                                </div>
                            </div>
                        </div>
                        <span class=\"fw-semibold d-block mb-1\">Statistics</span>
                        {% if app.request.attributes.get('_route') == 'contrat_main' %}
                            <h3 class=\"card-title mb-2\">{{ contrats|length }} Contracts</h3>
                            <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Total Contracts</small>
                        {% else %}
                            <h3 class=\"card-title mb-2\">N/A</h3>
                            <small class=\"text-muted fw-semibold\">No Data Available</small>
                        {% endif %}
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
                        <span>Tracking</span>
                        <h3 class=\"card-title text-nowrap mb-1\">In Progress</h3>
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
                    <h5 class=\"card-header m-0 me-2 pb-3\">
                        {% if app.request.attributes.get('_route') == 'contrat_main' %}
                            Contract Growth
                        {% else %}
                            Growth Statistics
                        {% endif %}
                    </h5>
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
                                    2024
                                </button>
                                <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"growthReportId\">
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">2023</a>
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">2022</a>
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">2021</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id=\"growthChart\"></div>
                    <div class=\"text-center fw-semibold pt-3 mb-2\">
                        {% if app.request.attributes.get('_route') == 'contrat_main' %}
                            Contract Registration Trend
                        {% else %}
                            Registration Trend
                        {% endif %}
                    </div>
                    <div class=\"d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between\">
                        <div class=\"d-flex\">
                            <div class=\"me-2\">
                                <span class=\"badge bg-label-primary p-2\"><i class=\"bx bx-user text-primary\"></i></span>
                            </div>
                            <div class=\"d-flex flex-column\">
                                <small>2024</small>
                                {% if app.request.attributes.get('_route') == 'contrat_main' %}
                                    <h6 class=\"mb-0\">{{ contrats|length }}</h6>
                                {% else %}
                                    <h6 class=\"mb-0\">N/A</h6>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"d-flex\">
                            <div class=\"me-2\">
                                <span class=\"badge bg-label-info p-2\"><i class=\"bx bx-user text-info\"></i></span>
                            </div>
                            <div class=\"d-flex flex-column\">
                                <small>2023</small>
                                <h6 class=\"mb-0\">N/A</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Recent Contracts -->
    <div class=\"col-md-6 col-lg-4 order-2 mb-4\">
        <div class=\"card h-100\">
            <div class=\"card-header d-flex align-items-center justify-content-between\">
                <h5 class=\"card-title m-0 me-2\">
                    {% if app.request.attributes.get('_route') == 'contrat_main' %}
                        Recent Contracts
                    {% else %}
                        Recent Activity
                    {% endif %}
                </h5>
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
                    {% if app.request.attributes.get('_route') == 'contrat_main' %}
                        {% for contrat in recentContracts %} {# Changed recentContrats to recentContracts #}
                            <li class=\"d-flex mb-4 pb-1\">
                                <div class=\"avatar flex-shrink-0 me-3\">
                                    <img src=\"{{ asset('/img/icons/unicons/file.png') }}\" alt=\"Contract\" class=\"rounded\" />
                                </div>
                                <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                    <div class=\"me-2\">
                                        <small class=\"text-muted d-block mb-1\">{{ contrat.DateDebut|date('Y-m-d') }}</small>
                                        <h6 class=\"mb-0\">{{ contrat.Titre }}</h6>
                                    </div>
                                    <div class=\"user-progress d-flex align-items-center gap-1\">
                                        <h6 class=\"mb-0\">{{ contrat.Montant }} TND</h6>
                                    </div>
                                </div>
                            </li>
                        {% else %}
                            <li class=\"d-flex mb-4 pb-1\">
                                <div class=\"text-muted\">Aucun contrat récent</div>
                            </li>
                        {% endfor %}
                    {% else %}
                        <li class=\"d-flex mb-4 pb-1\">
                            <div class=\"text-muted\">No recent activity available</div>
                        </li>
                    {% endif %}
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var options = {
            chart: {
                type: 'line',
                height: 300
            },
            series: [{
                name: '{{ app.request.attributes.get('_route') == 'contrat_main' ? 'Contracts' : 'Activity' }}',
                data: [{{ app.request.attributes.get('_route') == 'contrat_main' ? contrats|length : 0 }}]
            }],
            xaxis: {
                categories: ['2024']
            }
        };
        var chart = new ApexCharts(document.querySelector(\"#totalRevenueChart\"), options);
        chart.render();
    });
</script>", "contrat/widgets.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\contrat\\widgets.html.twig");
    }
}
