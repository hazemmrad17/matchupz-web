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

/* evaluation_physique/evaluation_widgets.html.twig */
class __TwigTemplate_1a5426a7748a0551ff528ea3a4b90448 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evaluation_physique/evaluation_widgets.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evaluation_physique/evaluation_widgets.html.twig"));

        // line 1
        yield "<div class=\"row mb-4\">
    <div class=\"col-12\">
        <div class=\"row\">
            <!-- Evaluated Players Widget -->
            <div class=\"col-lg-3 col-md-12 col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <span class=\"avatar-initial rounded bg-label-primary\">
                                    <i class=\"bx bx-user-check\"></i>
                                </span>
                            </div>
                            <div class=\"dropdown\">
                                <button class=\"btn p-0\" type=\"button\" data-bs-toggle=\"dropdown\">
                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                </button>
                                <div class=\"dropdown-menu dropdown-menu-end\">
                                    <a class=\"dropdown-item\" href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_physique_index");
        yield "\">Voir Tous</a>
                                </div>
                            </div>
                        </div>
                        <span>Joueurs Évalués</span>
                        <h3 class=\"card-title text-nowrap mb-1\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 24, $this->source); })()), "players_evaluated", [], "any", false, false, false, 24), "html", null, true);
        yield "</h3>
                        <small class=\"text-muted\">
                            Sur ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 26, $this->source); })()), "total_players", [], "any", false, false, false, 26), "html", null, true);
        yield " 
                            (";
        // line 27
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 27, $this->source); })()), "total_players", [], "any", false, false, false, 27) > 0)) {
            // line 28
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 28, $this->source); })()), "players_evaluated", [], "any", false, false, false, 28) / CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 28, $this->source); })()), "total_players", [], "any", false, false, false, 28)) * 100), 1), "html", null, true);
            yield "
                            ";
        } else {
            // line 29
            yield "0";
        }
        yield "%)
                        </small>
                    </div>
                </div>
            </div>

            <!-- Average Endurance Widget -->
            <div class=\"col-lg-3 col-md-6 col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <span class=\"avatar-initial rounded bg-label-success\">
                                    <i class=\"bx bx-timer\"></i>
                                </span>
                            </div>
                        </div>
                        <span>Endurance Moyenne</span>
                        <h3 class=\"card-title text-nowrap mb-1\">
                            ";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 48, $this->source); })()), "avg_endurance", [], "any", false, false, false, 48), 1), "html", null, true);
        yield "/10
                        </h3>
                        <small class=\"text-muted\">Sur ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["enduranceScores"]) || array_key_exists("enduranceScores", $context) ? $context["enduranceScores"] : (function () { throw new RuntimeError('Variable "enduranceScores" does not exist.', 50, $this->source); })())), "html", null, true);
        yield " évaluations</small>
                    </div>
                </div>
            </div>

            <!-- Average Force Widget -->
            <div class=\"col-lg-3 col-md-6 col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <span class=\"avatar-initial rounded bg-label-danger\">
                                    <i class=\"bx bx-dumbbell\"></i>
                                </span>
                            </div>
                        </div>
                        <span>Force Moyenne</span>
                        <h3 class=\"card-title text-nowrap mb-1\">
                            ";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 68, $this->source); })()), "avg_force", [], "any", false, false, false, 68), 1), "html", null, true);
        yield "/10
                        </h3>
                        <small class=\"text-muted\">Sur ";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["forceScores"]) || array_key_exists("forceScores", $context) ? $context["forceScores"] : (function () { throw new RuntimeError('Variable "forceScores" does not exist.', 70, $this->source); })())), "html", null, true);
        yield " évaluations</small>
                    </div>
                </div>
            </div>

            <!-- Average Speed Widget -->
            <div class=\"col-lg-3 col-md-6 col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <span class=\"avatar-initial rounded bg-label-info\">
                                    <i class=\"bx bx-run\"></i>
                                </span>
                            </div>
                        </div>
                        <span>Vitesse Moyenne</span>
                        <h3 class=\"card-title text-nowrap mb-1\">
                            ";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 88, $this->source); })()), "avg_vitesse", [], "any", false, false, false, 88), 1), "html", null, true);
        yield "/10
                        </h3>
                        <small class=\"text-muted\">Sur ";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["vitesseScores"]) || array_key_exists("vitesseScores", $context) ? $context["vitesseScores"] : (function () { throw new RuntimeError('Variable "vitesseScores" does not exist.', 90, $this->source); })())), "html", null, true);
        yield " évaluations</small>
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
        return "evaluation_physique/evaluation_widgets.html.twig";
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
        return array (  173 => 90,  168 => 88,  147 => 70,  142 => 68,  121 => 50,  116 => 48,  93 => 29,  87 => 28,  85 => 27,  81 => 26,  76 => 24,  68 => 19,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"row mb-4\">
    <div class=\"col-12\">
        <div class=\"row\">
            <!-- Evaluated Players Widget -->
            <div class=\"col-lg-3 col-md-12 col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <span class=\"avatar-initial rounded bg-label-primary\">
                                    <i class=\"bx bx-user-check\"></i>
                                </span>
                            </div>
                            <div class=\"dropdown\">
                                <button class=\"btn p-0\" type=\"button\" data-bs-toggle=\"dropdown\">
                                    <i class=\"bx bx-dots-vertical-rounded\"></i>
                                </button>
                                <div class=\"dropdown-menu dropdown-menu-end\">
                                    <a class=\"dropdown-item\" href=\"{{ path('app_evaluation_physique_index') }}\">Voir Tous</a>
                                </div>
                            </div>
                        </div>
                        <span>Joueurs Évalués</span>
                        <h3 class=\"card-title text-nowrap mb-1\">{{ stats.players_evaluated }}</h3>
                        <small class=\"text-muted\">
                            Sur {{ stats.total_players }} 
                            ({% if stats.total_players > 0 %}
                                {{ (stats.players_evaluated / stats.total_players * 100)|round(1) }}
                            {% else %}0{% endif %}%)
                        </small>
                    </div>
                </div>
            </div>

            <!-- Average Endurance Widget -->
            <div class=\"col-lg-3 col-md-6 col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <span class=\"avatar-initial rounded bg-label-success\">
                                    <i class=\"bx bx-timer\"></i>
                                </span>
                            </div>
                        </div>
                        <span>Endurance Moyenne</span>
                        <h3 class=\"card-title text-nowrap mb-1\">
                            {{ stats.avg_endurance|round(1) }}/10
                        </h3>
                        <small class=\"text-muted\">Sur {{ enduranceScores|length }} évaluations</small>
                    </div>
                </div>
            </div>

            <!-- Average Force Widget -->
            <div class=\"col-lg-3 col-md-6 col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <span class=\"avatar-initial rounded bg-label-danger\">
                                    <i class=\"bx bx-dumbbell\"></i>
                                </span>
                            </div>
                        </div>
                        <span>Force Moyenne</span>
                        <h3 class=\"card-title text-nowrap mb-1\">
                            {{ stats.avg_force|round(1) }}/10
                        </h3>
                        <small class=\"text-muted\">Sur {{ forceScores|length }} évaluations</small>
                    </div>
                </div>
            </div>

            <!-- Average Speed Widget -->
            <div class=\"col-lg-3 col-md-6 col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <span class=\"avatar-initial rounded bg-label-info\">
                                    <i class=\"bx bx-run\"></i>
                                </span>
                            </div>
                        </div>
                        <span>Vitesse Moyenne</span>
                        <h3 class=\"card-title text-nowrap mb-1\">
                            {{ stats.avg_vitesse|round(1) }}/10
                        </h3>
                        <small class=\"text-muted\">Sur {{ vitesseScores|length }} évaluations</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "evaluation_physique/evaluation_widgets.html.twig", "C:\\Users\\Ismail\\Desktop\\matchupz\\templates\\evaluation_physique\\evaluation_widgets.html.twig");
    }
}
