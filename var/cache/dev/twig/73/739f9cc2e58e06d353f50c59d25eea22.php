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

/* historique_club/widgets.html.twig */
class __TwigTemplate_e52aff141f3061ac1d51b1f53cf9d5cc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historique_club/widgets.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "historique_club/widgets.html.twig"));

        // line 2
        yield "<div class=\"row mb-4\">
    <div class=\"col-12\">
        <div class=\"row\">
            <!-- Total Players Widget -->
            <div class=\"col-lg-3 col-md-6 col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <span class=\"avatar-initial rounded bg-label-primary\">
                                    <i class=\"bx bx-user widget-icon\"></i>
                                </span>
                            </div>
                            <div class=\"dropdown\">
                                <button class=\"btn p-0\" type=\"button\" data-bs-toggle=\"dropdown\">
                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                </button>
                                <div class=\"dropdown-menu dropdown-menu-end\">
                                    <a class=\"dropdown-item\" href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_historique_club_index");
        yield "\">Voir Tous</a>
                                </div>
                            </div>
                        </div>
                        <span>Joueurs Total</span>
                        <h3 class=\"card-title text-nowrap mb-1\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 25, $this->source); })()), "total_players", [], "any", false, false, false, 25), "html", null, true);
        yield "</h3>
                        <small class=\"text-muted\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 26, $this->source); })()), "new_players_this_month", [], "any", false, false, false, 26), "html", null, true);
        yield " nouveaux ce mois</small>
                    </div>
                </div>
            </div>

            <!-- Current Clubs Widget -->
            <div class=\"col-lg-3 col-md-6 col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <span class=\"avatar-initial rounded bg-label-success\">
                                    <i class=\"bx bx-group widget-icon\"></i>
                                </span>
                            </div>
                        </div>
                        <span>Clubs Actifs</span>
                        <h3 class=\"card-title text-nowrap mb-1\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 43, $this->source); })()), "active_clubs", [], "any", false, false, false, 43), "html", null, true);
        yield "</h3>
                        <small class=\"text-muted\">";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 44, $this->source); })()), "clubs_with_players", [], "any", false, false, false, 44), "html", null, true);
        yield " avec joueurs</small>
                    </div>
                </div>
            </div>

            <!-- Average Duration Widget -->
            <div class=\"col-lg-3 col-md-6 col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <span class=\"avatar-initial rounded bg-label-warning\">
                                    <i class=\"bx bx-time-five widget-icon\"></i>
                                </span>
                            </div>
                        </div>
                        <span>Durée Moyenne</span>
                        <h3 class=\"card-title text-nowrap mb-1\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 61, $this->source); })()), "avg_duration", [], "any", false, false, false, 61), 1), "html", null, true);
        yield " mois</h3>
                        <small class=\"text-muted\">Max: ";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 62, $this->source); })()), "max_duration", [], "any", false, false, false, 62), 1), "html", null, true);
        yield " mois</small>
                    </div>
                </div>
            </div>

            <!-- Recent Activity Widget -->
            <div class=\"col-lg-3 col-md-6 col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <span class=\"avatar-initial rounded bg-label-info\">
                                    <i class=\"bx bx-calendar-event widget-icon\"></i>
                                </span>
                            </div>
                        </div>
                        <span>Mises à Jour Récentes</span>
                        <h3 class=\"card-title text-nowrap mb-1\">";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 79, $this->source); })()), "recent_updates", [], "any", false, false, false, 79), "html", null, true);
        yield "</h3>
                        <small class=\"text-muted\">7 derniers jours</small>
                    </div>
                </div>
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
        return "historique_club/widgets.html.twig";
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
        return array (  148 => 79,  128 => 62,  124 => 61,  104 => 44,  100 => 43,  80 => 26,  76 => 25,  68 => 20,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/historique_club/_widgets.html.twig #}
<div class=\"row mb-4\">
    <div class=\"col-12\">
        <div class=\"row\">
            <!-- Total Players Widget -->
            <div class=\"col-lg-3 col-md-6 col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <span class=\"avatar-initial rounded bg-label-primary\">
                                    <i class=\"bx bx-user widget-icon\"></i>
                                </span>
                            </div>
                            <div class=\"dropdown\">
                                <button class=\"btn p-0\" type=\"button\" data-bs-toggle=\"dropdown\">
                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                </button>
                                <div class=\"dropdown-menu dropdown-menu-end\">
                                    <a class=\"dropdown-item\" href=\"{{ path('app_historique_club_index') }}\">Voir Tous</a>
                                </div>
                            </div>
                        </div>
                        <span>Joueurs Total</span>
                        <h3 class=\"card-title text-nowrap mb-1\">{{ stats.total_players }}</h3>
                        <small class=\"text-muted\">{{ stats.new_players_this_month }} nouveaux ce mois</small>
                    </div>
                </div>
            </div>

            <!-- Current Clubs Widget -->
            <div class=\"col-lg-3 col-md-6 col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <span class=\"avatar-initial rounded bg-label-success\">
                                    <i class=\"bx bx-group widget-icon\"></i>
                                </span>
                            </div>
                        </div>
                        <span>Clubs Actifs</span>
                        <h3 class=\"card-title text-nowrap mb-1\">{{ stats.active_clubs }}</h3>
                        <small class=\"text-muted\">{{ stats.clubs_with_players }} avec joueurs</small>
                    </div>
                </div>
            </div>

            <!-- Average Duration Widget -->
            <div class=\"col-lg-3 col-md-6 col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <span class=\"avatar-initial rounded bg-label-warning\">
                                    <i class=\"bx bx-time-five widget-icon\"></i>
                                </span>
                            </div>
                        </div>
                        <span>Durée Moyenne</span>
                        <h3 class=\"card-title text-nowrap mb-1\">{{ stats.avg_duration|round(1) }} mois</h3>
                        <small class=\"text-muted\">Max: {{ stats.max_duration|round(1) }} mois</small>
                    </div>
                </div>
            </div>

            <!-- Recent Activity Widget -->
            <div class=\"col-lg-3 col-md-6 col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <span class=\"avatar-initial rounded bg-label-info\">
                                    <i class=\"bx bx-calendar-event widget-icon\"></i>
                                </span>
                            </div>
                        </div>
                        <span>Mises à Jour Récentes</span>
                        <h3 class=\"card-title text-nowrap mb-1\">{{ stats.recent_updates }}</h3>
                        <small class=\"text-muted\">7 derniers jours</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "historique_club/widgets.html.twig", "C:\\Users\\louay\\Desktop\\Projet\\web\\matchupz-web-match\\templates\\historique_club\\widgets.html.twig");
    }
}
