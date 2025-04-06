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

/* evaluation_physique/by_joueur.html.twig */
class __TwigTemplate_0f5b22524c128442840960c822da6c0b extends Template
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
            'searchbar' => [$this, 'block_searchbar'],
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evaluation_physique/by_joueur.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evaluation_physique/by_joueur.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "evaluation_physique/by_joueur.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_searchbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "searchbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "searchbar"));

        // line 3
        yield "    ";
        yield from $this->loadTemplate("searchbar.html.twig", "evaluation_physique/by_joueur.html.twig", 3)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Évaluations du Joueur";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <div class=\"card\">
                <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                    Évaluations Physiques du Joueur
                    <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_physique_new");
        yield "\" class=\"btn btn-primary\">Nouvelle Évaluation</a>
                </h5>
                <div class=\"card-body\">
                    ";
        // line 17
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["evaluations"]) || array_key_exists("evaluations", $context) ? $context["evaluations"] : (function () { throw new RuntimeError('Variable "evaluations" does not exist.', 17, $this->source); })())) > 0)) {
            // line 18
            yield "                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Endurance</th>
                                        <th>Force</th>
                                        <th>Vitesse</th>
                                        <th>Blessure</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evaluations"]) || array_key_exists("evaluations", $context) ? $context["evaluations"] : (function () { throw new RuntimeError('Variable "evaluations" does not exist.', 31, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["evaluation"]) {
                // line 32
                yield "                                        <tr>
                                            <td>";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "dateEvaluation", [], "any", false, false, false, 33), "d/m/Y"), "html", null, true);
                yield "</td>
                                            <td>";
                // line 34
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "niveauEndurance", [], "any", true, true, false, 34) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "niveauEndurance", [], "any", false, false, false, 34)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "niveauEndurance", [], "any", false, false, false, 34), "html", null, true)) : ("N/A"));
                yield "</td>
                                            <td>";
                // line 35
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "forcePhysique", [], "any", true, true, false, 35) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "forcePhysique", [], "any", false, false, false, 35)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "forcePhysique", [], "any", false, false, false, 35), "html", null, true)) : ("N/A"));
                yield "</td>
                                            <td>";
                // line 36
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "vitesse", [], "any", true, true, false, 36) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "vitesse", [], "any", false, false, false, 36)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "vitesse", [], "any", false, false, false, 36), "html", null, true)) : ("N/A"));
                yield "</td>
                                            <td>";
                // line 37
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "etatBlessure", [], "any", true, true, false, 37) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "etatBlessure", [], "any", false, false, false, 37)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "etatBlessure", [], "any", false, false, false, 37), "html", null, true)) : ("Aucune"));
                yield "</td>
                                            <td>
                                                <div class=\"dropdown\">
                                                    <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                        <i class=\"bx bx-dots-vertical-rounded\"></i>
                                                    </button>
                                                    <div class=\"dropdown-menu\">
                                                        <a class=\"dropdown-item\" href=\"";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_physique_show", ["idEvaluation" => CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "idEvaluation", [], "any", false, false, false, 44)]), "html", null, true);
                yield "\">
                                                            <i class=\"bx bx-show me-1\"></i> Voir
                                                        </a>
                                                        <a class=\"dropdown-item\" href=\"";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_physique_edit", ["idEvaluation" => CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "idEvaluation", [], "any", false, false, false, 47)]), "html", null, true);
                yield "\">
                                                            <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['evaluation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            yield "                                </tbody>
                            </table>
                        </div>
                    ";
        } else {
            // line 59
            yield "                        <div class=\"alert alert-info\">Aucune évaluation trouvée pour ce joueur.</div>
                    ";
        }
        // line 61
        yield "                </div>
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
        return "evaluation_physique/by_joueur.html.twig";
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
        return array (  219 => 61,  215 => 59,  209 => 55,  195 => 47,  189 => 44,  179 => 37,  175 => 36,  171 => 35,  167 => 34,  163 => 33,  160 => 32,  156 => 31,  141 => 18,  139 => 17,  133 => 14,  126 => 9,  113 => 8,  90 => 6,  78 => 3,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block title %}Évaluations du Joueur{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <div class=\"card\">
                <h5 class=\"card-header d-flex justify-content-between align-items-center\">
                    Évaluations Physiques du Joueur
                    <a href=\"{{ path('app_evaluation_physique_new') }}\" class=\"btn btn-primary\">Nouvelle Évaluation</a>
                </h5>
                <div class=\"card-body\">
                    {% if evaluations|length > 0 %}
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Endurance</th>
                                        <th>Force</th>
                                        <th>Vitesse</th>
                                        <th>Blessure</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for evaluation in evaluations %}
                                        <tr>
                                            <td>{{ evaluation.dateEvaluation|date('d/m/Y') }}</td>
                                            <td>{{ evaluation.niveauEndurance ?? 'N/A' }}</td>
                                            <td>{{ evaluation.forcePhysique ?? 'N/A' }}</td>
                                            <td>{{ evaluation.vitesse ?? 'N/A' }}</td>
                                            <td>{{ evaluation.etatBlessure ?? 'Aucune' }}</td>
                                            <td>
                                                <div class=\"dropdown\">
                                                    <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                        <i class=\"bx bx-dots-vertical-rounded\"></i>
                                                    </button>
                                                    <div class=\"dropdown-menu\">
                                                        <a class=\"dropdown-item\" href=\"{{ path('app_evaluation_physique_show', {'idEvaluation': evaluation.idEvaluation}) }}\">
                                                            <i class=\"bx bx-show me-1\"></i> Voir
                                                        </a>
                                                        <a class=\"dropdown-item\" href=\"{{ path('app_evaluation_physique_edit', {'idEvaluation': evaluation.idEvaluation}) }}\">
                                                            <i class=\"bx bx-edit-alt me-1\"></i> Modifier
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    {% else %}
                        <div class=\"alert alert-info\">Aucune évaluation trouvée pour ce joueur.</div>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "evaluation_physique/by_joueur.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\MatchupZ-Web-joueur-espace\\templates\\evaluation_physique\\by_joueur.html.twig");
    }
}
