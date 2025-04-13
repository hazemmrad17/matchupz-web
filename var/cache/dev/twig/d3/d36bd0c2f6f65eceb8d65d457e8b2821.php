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

/* match/show.html.twig */
class __TwigTemplate_e7101421c5fb5370a2f57bfcb4f4475c extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "match/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "match/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "match/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        yield "    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Matchs /</span> Détails du Match
            </h4>

            <div class=\"card\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <h5 class=\"card-title mb-0\">Match #";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 12, $this->source); })()), "idMatch", [], "any", false, false, false, 12), "html", null, true);
        yield "</h5>
                    <div>
                        <a href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("match_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 14, $this->source); })()), "idMatch", [], "any", false, false, false, 14)]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-primary\">Modifier</a>
                        <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("match_main");
        yield "\" class=\"btn btn-sm btn-secondary\">Retour à la liste</a>

                        ";
        // line 18
        yield "                        <form method=\"post\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("match_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 18, $this->source); })()), "idMatch", [], "any", false, false, false, 18)]), "html", null, true);
        yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce match ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 19, $this->source); })()), "idMatch", [], "any", false, false, false, 19))), "html", null, true);
        yield "\">
                            <button class=\"btn btn-sm btn-danger\" type=\"submit\">
                                Supprimer
                            </button>
                        </form>
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <h6>Competitor 1</h6>
                            <p>";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 30, $this->source); })()), "c1", [], "any", false, false, false, 30), "html", null, true);
        yield "</p>
                        </div>
                        <div class=\"col-md-6\">
                            <h6>Competitor 2</h6>
                            <p>";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 34, $this->source); })()), "c2", [], "any", false, false, false, 34), "html", null, true);
        yield "</p>
                        </div>
                    </div>
                    <div class=\"row mt-3\">
                        <div class=\"col-md-6\">
                            <h6>Sport Type</h6>
                            <p>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["match"] ?? null), "sportType", [], "any", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["match"]) || array_key_exists("match", $context) ? $context["match"] : (function () { throw new RuntimeError('Variable "match" does not exist.', 40, $this->source); })()), "sportType", [], "any", false, false, false, 40), "Non spécifié")) : ("Non spécifié")), "html", null, true);
        yield "</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "match/show.html.twig";
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
        return array (  135 => 40,  126 => 34,  119 => 30,  105 => 19,  100 => 18,  95 => 15,  91 => 14,  86 => 12,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Matchs /</span> Détails du Match
            </h4>

            <div class=\"card\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <h5 class=\"card-title mb-0\">Match #{{ match.idMatch }}</h5>
                    <div>
                        <a href=\"{{ path('match_edit', {'id': match.idMatch}) }}\" class=\"btn btn-sm btn-primary\">Modifier</a>
                        <a href=\"{{ path('match_main') }}\" class=\"btn btn-sm btn-secondary\">Retour à la liste</a>

                        {# Remove Button #}
                        <form method=\"post\" action=\"{{ path('match_delete', {'id': match.idMatch}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce match ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ match.idMatch) }}\">
                            <button class=\"btn btn-sm btn-danger\" type=\"submit\">
                                Supprimer
                            </button>
                        </form>
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <h6>Competitor 1</h6>
                            <p>{{ match.c1 }}</p>
                        </div>
                        <div class=\"col-md-6\">
                            <h6>Competitor 2</h6>
                            <p>{{ match.c2 }}</p>
                        </div>
                    </div>
                    <div class=\"row mt-3\">
                        <div class=\"col-md-6\">
                            <h6>Sport Type</h6>
                            <p>{{ match.sportType|default('Non spécifié') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "match/show.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\match\\show.html.twig");
    }
}
