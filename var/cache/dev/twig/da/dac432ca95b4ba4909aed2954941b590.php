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

/* club/club_widgets.html.twig */
class __TwigTemplate_cdd9a54dadc42d4b3c7a90869f15d19b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/club_widgets.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/club_widgets.html.twig"));

        // line 1
        yield "<div class=\"row\">
    <!-- Club Overview Widget -->
    <div class=\"col-lg-8 mb-4 order-0\">
        <div class=\"card\">
            <div class=\"d-flex align-items-end row\">
                <div class=\"col-sm-7\">
                    <div class=\"card-body\">
                        <h3 class=\"card-title text-primary\">Clubs Overview 🏟️</h3>
                        <p class=\"mb-4\">
                            You have <span class=\"fw-bold\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["clubs"]) || array_key_exists("clubs", $context) ? $context["clubs"] : (function () { throw new RuntimeError('Variable "clubs" does not exist.', 10, $this->source); })())), "html", null, true);
        yield "</span> clubs registered in the system.
                        </p>
                        <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_new");
        yield "\" class=\"btn btn-sm btn-outline-primary\">Add New Club</a>
                        <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_index");
        yield "\" class=\"btn btn-sm btn-primary ms-2\">View All</a>
                    </div>
                </div>
                <div class=\"col-sm-5 text-center text-sm-left\">
                    <div class=\"card-body pb-0 px-0 px-md-4\">
                        <img
                            src=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/illustrations/team-meeting-light.png"), "html", null, true);
        yield "\"
                            height=\"140\"
                            alt=\"Clubs Overview\"
                            data-app-dark-img=\"illustrations/team-meeting-dark.png\"
                            data-app-light-img=\"illustrations/team-meeting-light.png\"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Smaller Widgets -->
    <div class=\"col-lg-4 col-md-4 order-1\">
        <div class=\"row\">
            <!-- Total Clubs Widget -->
            <div class=\"col-lg-6 col-md-12 col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <img
                                    src=\"";
        // line 41
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
                                    id=\"cardOptClubTotal\"
                                    data-bs-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\"
                                >
                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                </button>
                                <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"cardOptClubTotal\">
                                    <a class=\"dropdown-item\" href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_index");
        yield "\">View All Clubs</a>
                                </div>
                            </div>
                        </div>
                        <span class=\"fw-semibold d-block mb-1\">Total Clubs</span>
                        <h3 class=\"card-title mb-2\">";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["clubs"]) || array_key_exists("clubs", $context) ? $context["clubs"] : (function () { throw new RuntimeError('Variable "clubs" does not exist.', 63, $this->source); })())), "html", null, true);
        yield "</h3>
                        <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Registered</small>
                    </div>
                </div>
            </div>

            <!-- Clubs with Photos Widget -->
            <div class=\"col-lg-6 col-md-12 col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <img
                                    src=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/icons/unicons/camera.png"), "html", null, true);
        yield "\"
                                    alt=\"photo\"
                                    class=\"rounded\"
                                />
                            </div>
                            <div class=\"dropdown\">
                                <button
                                    class=\"btn p-0\"
                                    type=\"button\"
                                    id=\"cardOptClubPhotos\"
                                    data-bs-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\"
                                >
                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                </button>
                                <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"cardOptClubPhotos\">
                                    <a class=\"dropdown-item\" href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_index");
        yield "\">View Clubs</a>
                                </div>
                            </div>
                        </div>
                        <span>Clubs with Photos</span>
                        <h3 class=\"card-title text-nowrap mb-1\">";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["clubs_with_photos"]) || array_key_exists("clubs_with_photos", $context) ? $context["clubs_with_photos"] : (function () { throw new RuntimeError('Variable "clubs_with_photos" does not exist.', 98, $this->source); })()), "html", null, true);
        yield "</h3>
                        <small class=\"text-muted\">Out of ";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["clubs"]) || array_key_exists("clubs", $context) ? $context["clubs"] : (function () { throw new RuntimeError('Variable "clubs" does not exist.', 99, $this->source); })())), "html", null, true);
        yield " (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((((isset($context["clubs_with_photos"]) || array_key_exists("clubs_with_photos", $context) ? $context["clubs_with_photos"] : (function () { throw new RuntimeError('Variable "clubs_with_photos" does not exist.', 99, $this->source); })()) / Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["clubs"]) || array_key_exists("clubs", $context) ? $context["clubs"] : (function () { throw new RuntimeError('Variable "clubs" does not exist.', 99, $this->source); })()))) * 100), 1), "html", null, true);
        yield "%)</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bar Chart for Clubs -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var options = {
            chart: {
                type: 'bar',
                height: 300
            },
            series: [{
                name: 'Clubs',
                data: [";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["clubs"]) || array_key_exists("clubs", $context) ? $context["clubs"] : (function () { throw new RuntimeError('Variable "clubs" does not exist.', 117, $this->source); })())), "html", null, true);
        yield "]
            }],
            xaxis: {
                categories: ['Total Clubs']
            },
            colors: ['#696cff']
        };
        var chart = new ApexCharts(document.querySelector(\"#clubsChart\"), options);
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
        return "club/club_widgets.html.twig";
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
        return array (  201 => 117,  178 => 99,  174 => 98,  166 => 93,  146 => 76,  130 => 63,  122 => 58,  102 => 41,  77 => 19,  68 => 13,  64 => 12,  59 => 10,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"row\">
    <!-- Club Overview Widget -->
    <div class=\"col-lg-8 mb-4 order-0\">
        <div class=\"card\">
            <div class=\"d-flex align-items-end row\">
                <div class=\"col-sm-7\">
                    <div class=\"card-body\">
                        <h3 class=\"card-title text-primary\">Clubs Overview 🏟️</h3>
                        <p class=\"mb-4\">
                            You have <span class=\"fw-bold\">{{ clubs|length }}</span> clubs registered in the system.
                        </p>
                        <a href=\"{{ path('club_new') }}\" class=\"btn btn-sm btn-outline-primary\">Add New Club</a>
                        <a href=\"{{ path('club_index') }}\" class=\"btn btn-sm btn-primary ms-2\">View All</a>
                    </div>
                </div>
                <div class=\"col-sm-5 text-center text-sm-left\">
                    <div class=\"card-body pb-0 px-0 px-md-4\">
                        <img
                            src=\"{{ asset('/img/illustrations/team-meeting-light.png') }}\"
                            height=\"140\"
                            alt=\"Clubs Overview\"
                            data-app-dark-img=\"illustrations/team-meeting-dark.png\"
                            data-app-light-img=\"illustrations/team-meeting-light.png\"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Smaller Widgets -->
    <div class=\"col-lg-4 col-md-4 order-1\">
        <div class=\"row\">
            <!-- Total Clubs Widget -->
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
                                    id=\"cardOptClubTotal\"
                                    data-bs-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\"
                                >
                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                </button>
                                <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"cardOptClubTotal\">
                                    <a class=\"dropdown-item\" href=\"{{ path('club_index') }}\">View All Clubs</a>
                                </div>
                            </div>
                        </div>
                        <span class=\"fw-semibold d-block mb-1\">Total Clubs</span>
                        <h3 class=\"card-title mb-2\">{{ clubs|length }}</h3>
                        <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Registered</small>
                    </div>
                </div>
            </div>

            <!-- Clubs with Photos Widget -->
            <div class=\"col-lg-6 col-md-12 col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <img
                                    src=\"{{ asset('/img/icons/unicons/camera.png') }}\"
                                    alt=\"photo\"
                                    class=\"rounded\"
                                />
                            </div>
                            <div class=\"dropdown\">
                                <button
                                    class=\"btn p-0\"
                                    type=\"button\"
                                    id=\"cardOptClubPhotos\"
                                    data-bs-toggle=\"dropdown\"
                                    aria-haspopup=\"true\"
                                    aria-expanded=\"false\"
                                >
                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                </button>
                                <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"cardOptClubPhotos\">
                                    <a class=\"dropdown-item\" href=\"{{ path('club_index') }}\">View Clubs</a>
                                </div>
                            </div>
                        </div>
                        <span>Clubs with Photos</span>
                        <h3 class=\"card-title text-nowrap mb-1\">{{ clubs_with_photos }}</h3>
                        <small class=\"text-muted\">Out of {{ clubs|length }} ({{ (clubs_with_photos / clubs|length * 100)|round(1) }}%)</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bar Chart for Clubs -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var options = {
            chart: {
                type: 'bar',
                height: 300
            },
            series: [{
                name: 'Clubs',
                data: [{{ clubs|length }}]
            }],
            xaxis: {
                categories: ['Total Clubs']
            },
            colors: ['#696cff']
        };
        var chart = new ApexCharts(document.querySelector(\"#clubsChart\"), options);
        chart.render();
    });
</script>", "club/club_widgets.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-0\\matchupz-web-0\\templates\\club\\club_widgets.html.twig");
    }
}
