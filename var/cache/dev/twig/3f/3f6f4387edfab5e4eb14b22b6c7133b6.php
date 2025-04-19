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

/* reservation/reservation_widgets.html.twig */
class __TwigTemplate_c18de7397c078c68c2edd01f371c1e40 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/reservation_widgets.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/reservation_widgets.html.twig"));

        // line 1
        yield "<div class=\"row\">
    <div class=\"col-lg-8 mb-4 order-0\">
        <div class=\"card\">
            <div class=\"d-flex align-items-end row\">
                <div class=\"col-sm-7\">
                    <div class=\"card-body\">
                        <h3 class=\"card-title text-primary\">Aperçu des Réservations 🎯</h3>
                        <p class=\"mb-4\">
                            Vous avez <span class=\"fw-bold\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 9, $this->source); })())), "html", null, true);
        yield "</span> réservations enregistrées dans le système.
                        </p>
                        <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_new");
        yield "\" class=\"btn btn-sm btn-outline-primary\">Ajouter une Réservation</a>
                        <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_statistics");
        yield "\" class=\"btn btn-sm btn-primary ms-2\">Voir Plus</a>
                    </div>
                </div>
                <div class=\"col-sm-5 text-center text-sm-left\">
                    <div class=\"card-body pb-0 px-0 px-md-4\">
                        <img
                            src=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/illustrations/man-with-laptop-light.png"), "html", null, true);
        yield "\"
                            height=\"170\"
                            alt=\"Réservations Overview\"
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
        // line 37
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
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_statistics");
        yield "\">Voir Plus de Statistiques</a>
                                </div>
                            </div>
                        </div>
                        <span class=\"fw-semibold d-block mb-1\">Total Réservations</span>
                        <h3 class=\"card-title mb-2\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 59, $this->source); })())), "html", null, true);
        yield "</h3>
                        <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Enregistrées</small>
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
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/icons/unicons/wallet-info.png"), "html", null, true);
        yield "\"
                                    alt=\"Confirmed\"
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
                                    <a class=\"dropdown-item\" href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index");
        yield "\">Voir Réservations</a>
                                </div>
                            </div>
                        </div>
                        <span>Réservations Confirmées</span>
                        <h3 class=\"card-title text-nowrap mb-1\">";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["upcoming_reservations"]) || array_key_exists("upcoming_reservations", $context) ? $context["upcoming_reservations"] : (function () { throw new RuntimeError('Variable "upcoming_reservations" does not exist.', 92, $this->source); })())), "html", null, true);
        yield "</h3>
                        <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> À venir</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var options = {
            chart: {
                type: 'bar',
                height: 300
            },
            series: [{
                name: 'Réservations',
                data: [";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 110, $this->source); })())), "html", null, true);
        yield "]
            }],
            xaxis: {
                categories: ['Total Réservations']
            }
        };
        var chart = new ApexCharts(document.querySelector(\"#reservationsChart\"), options);
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
        return "reservation/reservation_widgets.html.twig";
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
        return array (  189 => 110,  168 => 92,  160 => 87,  140 => 70,  126 => 59,  118 => 54,  98 => 37,  76 => 18,  67 => 12,  63 => 11,  58 => 9,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"row\">
    <div class=\"col-lg-8 mb-4 order-0\">
        <div class=\"card\">
            <div class=\"d-flex align-items-end row\">
                <div class=\"col-sm-7\">
                    <div class=\"card-body\">
                        <h3 class=\"card-title text-primary\">Aperçu des Réservations 🎯</h3>
                        <p class=\"mb-4\">
                            Vous avez <span class=\"fw-bold\">{{ reservations|length }}</span> réservations enregistrées dans le système.
                        </p>
                        <a href=\"{{ path('reservation_new') }}\" class=\"btn btn-sm btn-outline-primary\">Ajouter une Réservation</a>
                        <a href=\"{{ path('reservation_statistics') }}\" class=\"btn btn-sm btn-primary ms-2\">Voir Plus</a>
                    </div>
                </div>
                <div class=\"col-sm-5 text-center text-sm-left\">
                    <div class=\"card-body pb-0 px-0 px-md-4\">
                        <img
                            src=\"{{ asset('/img/illustrations/man-with-laptop-light.png') }}\"
                            height=\"170\"
                            alt=\"Réservations Overview\"
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
                                    <a class=\"dropdown-item\" href=\"{{ path('reservation_statistics') }}\">Voir Plus de Statistiques</a>
                                </div>
                            </div>
                        </div>
                        <span class=\"fw-semibold d-block mb-1\">Total Réservations</span>
                        <h3 class=\"card-title mb-2\">{{ reservations|length }}</h3>
                        <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Enregistrées</small>
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
                                    alt=\"Confirmed\"
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
                                    <a class=\"dropdown-item\" href=\"{{ path('reservation_index') }}\">Voir Réservations</a>
                                </div>
                            </div>
                        </div>
                        <span>Réservations Confirmées</span>
                        <h3 class=\"card-title text-nowrap mb-1\">{{ upcoming_reservations|length }}</h3>
                        <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> À venir</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var options = {
            chart: {
                type: 'bar',
                height: 300
            },
            series: [{
                name: 'Réservations',
                data: [{{ reservations|length }}]
            }],
            xaxis: {
                categories: ['Total Réservations']
            }
        };
        var chart = new ApexCharts(document.querySelector(\"#reservationsChart\"), options);
        chart.render();
    });
</script>", "reservation/reservation_widgets.html.twig", "C:\\Users\\ibtis\\Downloads\\matchupz-web-joueur\\matchupz-web-joueur\\templates\\reservation\\reservation_widgets.html.twig");
    }
}
