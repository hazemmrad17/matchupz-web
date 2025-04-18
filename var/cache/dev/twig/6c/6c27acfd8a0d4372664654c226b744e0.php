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
class __TwigTemplate_3300c7680940d0b3da5bb966ae840686 extends Template
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
                        <a href=\"javascript:;\" class=\"btn btn-sm btn-outline-primary\">Voir Profile</a>
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
                                    <a class=\"dropdown-item\" href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_tracking");
        yield "\">Go To Tracking Page</a>
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
    <!-- Player Distribution by Sport -->
    <div class=\"col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4\">
        <div class=\"card\">
            <div class=\"row row-bordered g-0\">
                <div class=\"col-md-8\">
                    <h5 class=\"card-header m-0 me-2 pb-3\">Moyenne Performance Sportif des</h5>
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
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">All Sports</a>
                                </div>
                            </div>
                        </div>
                        <div id=\"growthChart\"></div>
                        <div class=\"text-center fw-semibold pt-3 mb-2\">Moyenne Fitness Physique</div>
                        <div class=\"d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between\">
                            <div class=\"d-flex\">
                                <div class=\"me-2\">
                                    <span class=\"badge bg-label-primary p-2\"><i class=\"bx bx-user text-primary\"></i></span>
                                </div>
                                <div class=\"d-flex flex-column\">
                                    <small>Total Players</small>
                                    <h6 class=\"mb-0\">";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["joueurs"]) || array_key_exists("joueurs", $context) ? $context["joueurs"] : (function () { throw new RuntimeError('Variable "joueurs" does not exist.', 134, $this->source); })())), "html", null, true);
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
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["topPerformers"]) || array_key_exists("topPerformers", $context) ? $context["topPerformers"] : (function () { throw new RuntimeError('Variable "topPerformers" does not exist.', 178, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["performer"]) {
            // line 179
            yield "                        <li class=\"d-flex mb-4 pb-1\">
                            <div class=\"avatar flex-shrink-0 me-3\">
                                <img src=\"";
            // line 181
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["performer"], "joueur", [], "any", false, false, false, 181), "profilePictureUrl", [], "any", false, false, false, 181)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["performer"], "joueur", [], "any", false, false, false, 181), "profilePictureUrl", [], "any", false, false, false, 181), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/icons/unicons/user.png"), "html", null, true)));
            yield "\" alt=\"User\" class=\"rounded\" />
                            </div>
                            <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                <div class=\"me-2\">
                                    <small class=\"text-muted d-block mb-1\">";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["performer"], "joueur", [], "any", false, false, false, 185), "prenom", [], "any", false, false, false, 185), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["performer"], "joueur", [], "any", false, false, false, 185), "nom", [], "any", false, false, false, 185), "html", null, true);
            yield "</small>
                                </div>
                                <div class=\"user-progress d-flex align-items-center gap-1\">
                                    <h6 class=\"mb-0\">";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["performer"], "score", [], "any", false, false, false, 188), "html", null, true);
            yield "/100</h6>
                                </div>
                            </div>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['performer'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        yield "                </ul>
            </div>
        </div>
    </div>
</div>";
        
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
        return array (  288 => 193,  277 => 188,  269 => 185,  262 => 181,  258 => 179,  254 => 178,  216 => 143,  204 => 134,  153 => 86,  133 => 69,  119 => 58,  111 => 53,  91 => 36,  69 => 17,  58 => 9,  48 => 1,);
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
                        <a href=\"javascript:;\" class=\"btn btn-sm btn-outline-primary\">Voir Profile</a>
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
                                    <a class=\"dropdown-item\" href=\"{{ path('joueur_tracking') }}\">Go To Tracking Page</a>
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
    <!-- Player Distribution by Sport -->
    <div class=\"col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4\">
        <div class=\"card\">
            <div class=\"row row-bordered g-0\">
                <div class=\"col-md-8\">
                    <h5 class=\"card-header m-0 me-2 pb-3\">Moyenne Performance Sportif des</h5>
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
                                    <a class=\"dropdown-item\" href=\"javascript:void(0);\">All Sports</a>
                                </div>
                            </div>
                        </div>
                        <div id=\"growthChart\"></div>
                        <div class=\"text-center fw-semibold pt-3 mb-2\">Moyenne Fitness Physique</div>
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

    <!-- Top Performers -->
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
                    {% for performer in topPerformers %}
                        <li class=\"d-flex mb-4 pb-1\">
                            <div class=\"avatar flex-shrink-0 me-3\">
                                <img src=\"{{ performer.joueur.profilePictureUrl ?: asset('/img/icons/unicons/user.png') }}\" alt=\"User\" class=\"rounded\" />
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
                    {% endfor %}
                </ul>
            </div>
        </div>
    </div>
</div>", "joueur/widgets.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\matchupz-web-0\\templates\\joueur\\widgets.html.twig");
    }
}
