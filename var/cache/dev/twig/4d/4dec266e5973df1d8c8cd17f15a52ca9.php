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

/* performance_joueur/widgets.html.twig */
class __TwigTemplate_0d226e79365ca8667b54bd52782f8209 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "performance_joueur/widgets.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "performance_joueur/widgets.html.twig"));

        // line 1
        yield "<div class=\"row mb-4\">
    <div class=\"col-12\">
        <div class=\"row\">
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
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("performance_joueur_index");
        yield "\">Voir Tous</a>
                                </div>
                            </div>
                        </div>
                        <span>Performances Total</span>
                        <h3 class=\"card-title text-nowrap mb-1\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 23, $this->source); })()), "total_performances", [], "any", false, false, false, 23), "html", null, true);
        yield "</h3>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-3 col-md-6 col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <span class=\"avatar-initial rounded bg-label-success\">
                                    <i class=\"bx bx-football widget-icon\"></i>
                                </span>
                            </div>
                        </div>
                        <span>Matches Joués</span>
                        <h3 class=\"card-title text-nowrap mb-1\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 39, $this->source); })()), "total_matches", [], "any", false, false, false, 39), "html", null, true);
        yield "</h3>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-3 col-md-6 col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <span class=\"avatar-initial rounded bg-label-warning\">
                                    <i class=\"bx bx-target-lock widget-icon\"></i>
                                </span>
                            </div>
                        </div>
                        <span>Buts Totaux</span>
                        <h3 class=\"card-title text-nowrap mb-1\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 55, $this->source); })()), "total_goals", [], "any", false, false, false, 55), "html", null, true);
        yield "</h3>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-3 col-md-6 col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <span class=\"avatar-initial rounded bg-label-info\">
                                    <i class=\"bx bx-pass widget-icon\"></i>
                                </span>
                            </div>
                        </div>
                        <span>Passes Décisives</span>
                        <h3 class=\"card-title text-nowrap mb-1\">";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 71, $this->source); })()), "total_assists", [], "any", false, false, false, 71), "html", null, true);
        yield "</h3>
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
        return "performance_joueur/widgets.html.twig";
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
        return array (  132 => 71,  113 => 55,  94 => 39,  75 => 23,  67 => 18,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"row mb-4\">
    <div class=\"col-12\">
        <div class=\"row\">
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
                                    <a class=\"dropdown-item\" href=\"{{ path('performance_joueur_index') }}\">Voir Tous</a>
                                </div>
                            </div>
                        </div>
                        <span>Performances Total</span>
                        <h3 class=\"card-title text-nowrap mb-1\">{{ stats.total_performances }}</h3>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-3 col-md-6 col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <span class=\"avatar-initial rounded bg-label-success\">
                                    <i class=\"bx bx-football widget-icon\"></i>
                                </span>
                            </div>
                        </div>
                        <span>Matches Joués</span>
                        <h3 class=\"card-title text-nowrap mb-1\">{{ stats.total_matches }}</h3>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-3 col-md-6 col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <span class=\"avatar-initial rounded bg-label-warning\">
                                    <i class=\"bx bx-target-lock widget-icon\"></i>
                                </span>
                            </div>
                        </div>
                        <span>Buts Totaux</span>
                        <h3 class=\"card-title text-nowrap mb-1\">{{ stats.total_goals }}</h3>
                    </div>
                </div>
            </div>

            <div class=\"col-lg-3 col-md-6 col-6 mb-4\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"card-title d-flex align-items-start justify-content-between\">
                            <div class=\"avatar flex-shrink-0\">
                                <span class=\"avatar-initial rounded bg-label-info\">
                                    <i class=\"bx bx-pass widget-icon\"></i>
                                </span>
                            </div>
                        </div>
                        <span>Passes Décisives</span>
                        <h3 class=\"card-title text-nowrap mb-1\">{{ stats.total_assists }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "performance_joueur/widgets.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\performance_joueur\\widgets.html.twig");
    }
}
