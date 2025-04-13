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

/* evaluation_physique/show.html.twig */
class __TwigTemplate_f3eb2622d28ea8864f2cc14a7d669e39 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evaluation_physique/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evaluation_physique/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evaluation_physique/show.html.twig", 1);
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
                <span class=\"text-muted fw-light\">Évaluations /</span> Détails de l'Évaluation
            </h4>

            <div class=\"card\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <h5 class=\"card-title mb-0\">Évaluation #";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluation_physique"]) || array_key_exists("evaluation_physique", $context) ? $context["evaluation_physique"] : (function () { throw new RuntimeError('Variable "evaluation_physique" does not exist.', 12, $this->source); })()), "idEvaluation", [], "any", false, false, false, 12), "html", null, true);
        yield "</h5>
                    <div>
                        <a href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_physique_edit", ["idEvaluation" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluation_physique"]) || array_key_exists("evaluation_physique", $context) ? $context["evaluation_physique"] : (function () { throw new RuntimeError('Variable "evaluation_physique" does not exist.', 14, $this->source); })()), "idEvaluation", [], "any", false, false, false, 14)]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-primary\">Modifier</a>
                        <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_physique_index");
        yield "\" class=\"btn btn-sm btn-secondary\">Retour à la liste</a>

                        <form method=\"post\" action=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_physique_delete", ["idEvaluation" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluation_physique"]) || array_key_exists("evaluation_physique", $context) ? $context["evaluation_physique"] : (function () { throw new RuntimeError('Variable "evaluation_physique" does not exist.', 17, $this->source); })()), "idEvaluation", [], "any", false, false, false, 17)]), "html", null, true);
        yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette évaluation ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluation_physique"]) || array_key_exists("evaluation_physique", $context) ? $context["evaluation_physique"] : (function () { throw new RuntimeError('Variable "evaluation_physique" does not exist.', 18, $this->source); })()), "idEvaluation", [], "any", false, false, false, 18))), "html", null, true);
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
                            <h6>Joueur</h6>
                            <p>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluation_physique"]) || array_key_exists("evaluation_physique", $context) ? $context["evaluation_physique"] : (function () { throw new RuntimeError('Variable "evaluation_physique" does not exist.', 29, $this->source); })()), "joueur", [], "any", false, false, false, 29), "nom", [], "any", false, false, false, 29), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluation_physique"]) || array_key_exists("evaluation_physique", $context) ? $context["evaluation_physique"] : (function () { throw new RuntimeError('Variable "evaluation_physique" does not exist.', 29, $this->source); })()), "joueur", [], "any", false, false, false, 29), "prenom", [], "any", false, false, false, 29), "html", null, true);
        yield "</p>
                        </div>
                        <div class=\"col-md-6\">
                            <h6>Date d'Évaluation</h6>
                            <p>";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluation_physique"]) || array_key_exists("evaluation_physique", $context) ? $context["evaluation_physique"] : (function () { throw new RuntimeError('Variable "evaluation_physique" does not exist.', 33, $this->source); })()), "dateEvaluation", [], "any", false, false, false, 33), "d/m/Y"), "html", null, true);
        yield "</p>
                        </div>
                    </div>
                    <div class=\"row mt-3\">
                        <div class=\"col-md-4\">
                            <h6>Niveau d'Endurance</h6>
                            <p>";
        // line 39
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["evaluation_physique"] ?? null), "niveauEndurance", [], "any", true, true, false, 39) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluation_physique"]) || array_key_exists("evaluation_physique", $context) ? $context["evaluation_physique"] : (function () { throw new RuntimeError('Variable "evaluation_physique" does not exist.', 39, $this->source); })()), "niveauEndurance", [], "any", false, false, false, 39)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluation_physique"]) || array_key_exists("evaluation_physique", $context) ? $context["evaluation_physique"] : (function () { throw new RuntimeError('Variable "evaluation_physique" does not exist.', 39, $this->source); })()), "niveauEndurance", [], "any", false, false, false, 39), "html", null, true)) : ("Non évalué"));
        yield "</p>
                        </div>
                        <div class=\"col-md-4\">
                            <h6>Force Physique</h6>
                            <p>";
        // line 43
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["evaluation_physique"] ?? null), "forcePhysique", [], "any", true, true, false, 43) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluation_physique"]) || array_key_exists("evaluation_physique", $context) ? $context["evaluation_physique"] : (function () { throw new RuntimeError('Variable "evaluation_physique" does not exist.', 43, $this->source); })()), "forcePhysique", [], "any", false, false, false, 43)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluation_physique"]) || array_key_exists("evaluation_physique", $context) ? $context["evaluation_physique"] : (function () { throw new RuntimeError('Variable "evaluation_physique" does not exist.', 43, $this->source); })()), "forcePhysique", [], "any", false, false, false, 43), "html", null, true)) : ("Non évalué"));
        yield "</p>
                        </div>
                        <div class=\"col-md-4\">
                            <h6>Vitesse</h6>
                            <p>";
        // line 47
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["evaluation_physique"] ?? null), "vitesse", [], "any", true, true, false, 47) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluation_physique"]) || array_key_exists("evaluation_physique", $context) ? $context["evaluation_physique"] : (function () { throw new RuntimeError('Variable "evaluation_physique" does not exist.', 47, $this->source); })()), "vitesse", [], "any", false, false, false, 47)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluation_physique"]) || array_key_exists("evaluation_physique", $context) ? $context["evaluation_physique"] : (function () { throw new RuntimeError('Variable "evaluation_physique" does not exist.', 47, $this->source); })()), "vitesse", [], "any", false, false, false, 47), "html", null, true)) : ("Non évalué"));
        yield "</p>
                        </div>
                    </div>
                    <div class=\"row mt-3\">
                        <div class=\"col-12\">
                            <h6>État de Blessure</h6>
                            <p>";
        // line 53
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["evaluation_physique"] ?? null), "etatBlessure", [], "any", true, true, false, 53) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluation_physique"]) || array_key_exists("evaluation_physique", $context) ? $context["evaluation_physique"] : (function () { throw new RuntimeError('Variable "evaluation_physique" does not exist.', 53, $this->source); })()), "etatBlessure", [], "any", false, false, false, 53)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["evaluation_physique"]) || array_key_exists("evaluation_physique", $context) ? $context["evaluation_physique"] : (function () { throw new RuntimeError('Variable "evaluation_physique" does not exist.', 53, $this->source); })()), "etatBlessure", [], "any", false, false, false, 53), "html", null, true)) : ("Aucune blessure signalée"));
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
        return "evaluation_physique/show.html.twig";
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
        return array (  159 => 53,  150 => 47,  143 => 43,  136 => 39,  127 => 33,  118 => 29,  104 => 18,  100 => 17,  95 => 15,  91 => 14,  86 => 12,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Évaluations /</span> Détails de l'Évaluation
            </h4>

            <div class=\"card\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <h5 class=\"card-title mb-0\">Évaluation #{{ evaluation_physique.idEvaluation }}</h5>
                    <div>
                        <a href=\"{{ path('app_evaluation_physique_edit', {'idEvaluation': evaluation_physique.idEvaluation}) }}\" class=\"btn btn-sm btn-primary\">Modifier</a>
                        <a href=\"{{ path('app_evaluation_physique_index') }}\" class=\"btn btn-sm btn-secondary\">Retour à la liste</a>

                        <form method=\"post\" action=\"{{ path('app_evaluation_physique_delete', {'idEvaluation': evaluation_physique.idEvaluation}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette évaluation ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ evaluation_physique.idEvaluation) }}\">
                            <button class=\"btn btn-sm btn-danger\" type=\"submit\">
                                Supprimer
                            </button>
                        </form>
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <h6>Joueur</h6>
                            <p>{{ evaluation_physique.joueur.nom }} {{ evaluation_physique.joueur.prenom }}</p>
                        </div>
                        <div class=\"col-md-6\">
                            <h6>Date d'Évaluation</h6>
                            <p>{{ evaluation_physique.dateEvaluation|date('d/m/Y') }}</p>
                        </div>
                    </div>
                    <div class=\"row mt-3\">
                        <div class=\"col-md-4\">
                            <h6>Niveau d'Endurance</h6>
                            <p>{{ evaluation_physique.niveauEndurance ?? 'Non évalué' }}</p>
                        </div>
                        <div class=\"col-md-4\">
                            <h6>Force Physique</h6>
                            <p>{{ evaluation_physique.forcePhysique ?? 'Non évalué' }}</p>
                        </div>
                        <div class=\"col-md-4\">
                            <h6>Vitesse</h6>
                            <p>{{ evaluation_physique.vitesse ?? 'Non évalué' }}</p>
                        </div>
                    </div>
                    <div class=\"row mt-3\">
                        <div class=\"col-12\">
                            <h6>État de Blessure</h6>
                            <p>{{ evaluation_physique.etatBlessure ?? 'Aucune blessure signalée' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "evaluation_physique/show.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\evaluation_physique\\show.html.twig");
    }
}
