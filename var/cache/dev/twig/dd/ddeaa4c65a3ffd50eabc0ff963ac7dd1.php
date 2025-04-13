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

/* match/widgets.html.twig */
class __TwigTemplate_f94a0189834ddc9df3fd36911b677b9f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "match/widgets.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "match/widgets.html.twig"));

        // line 1
        yield "<div class=\"row\">
    <div class=\"col-lg-8 mb-4 order-0\">
        <div class=\"card\">
            <div class=\"d-flex align-items-end row\">
                <div class=\"col-sm-7\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-primary\">Félicitations Louay ! 🎉</h5>
                        <p class=\"mb-4\">
                            Tu as ajouté <span class=\"fw-bold\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["matches"]) || array_key_exists("matches", $context) ? $context["matches"] : (function () { throw new RuntimeError('Variable "matches" does not exist.', 9, $this->source); })())), "html", null, true);
        yield "</span> matches aujourd'hui. Consulte ton profil pour les mises à jour.
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
                            </div>
                        </div>
                        <span class=\"fw-semibold d-block mb-1\">Statistics</span>
                        <h3 class=\"card-title mb-2\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["matches"]) || array_key_exists("matches", $context) ? $context["matches"] : (function () { throw new RuntimeError('Variable "matches" does not exist.', 55, $this->source); })())), "html", null, true);
        yield " Matches</h3>
                        <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Total enregistrés</small>
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
        // line 66
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
                        <h3 class=\"card-title text-nowrap mb-1\">In Progress</h3>
                        <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Coming Soon</small>
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
        return "match/widgets.html.twig";
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
        return array (  127 => 66,  113 => 55,  91 => 36,  69 => 17,  58 => 9,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"row\">
    <div class=\"col-lg-8 mb-4 order-0\">
        <div class=\"card\">
            <div class=\"d-flex align-items-end row\">
                <div class=\"col-sm-7\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-primary\">Félicitations Louay ! 🎉</h5>
                        <p class=\"mb-4\">
                            Tu as ajouté <span class=\"fw-bold\">{{ matches|length }}</span> matches aujourd'hui. Consulte ton profil pour les mises à jour.
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
                            </div>
                        </div>
                        <span class=\"fw-semibold d-block mb-1\">Statistics</span>
                        <h3 class=\"card-title mb-2\">{{ matches|length }} Matches</h3>
                        <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Total enregistrés</small>
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
                        <h3 class=\"card-title text-nowrap mb-1\">In Progress</h3>
                        <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Coming Soon</small>
                    </div>
                </div>
            </div>
        </div>
    </div>", "match/widgets.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\match\\widgets.html.twig");
    }
}
