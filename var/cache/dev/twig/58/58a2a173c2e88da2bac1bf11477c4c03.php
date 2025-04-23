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

/* materiel/show.html.twig */
class __TwigTemplate_124504f90a4d6ca9303f01ba6a333379 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiel/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiel/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "materiel/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Détails du Matériel #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"content-wrapper\">
    <div class=\"container-xxl flex-grow-1 container-p-y\">
        <h4 class=\"fw-bold py-3 mb-4\">
            <span class=\"text-muted fw-light\">Matériel /</span> Détails
        </h4>

        <div class=\"card\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h5 class=\"card-title mb-0\">Matériel #";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        yield "</h5>
                <div>
                    <a href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-primary\">Modifier</a>
                    <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_index");
        yield "\" class=\"btn btn-sm btn-secondary\">Retour</a>
                    <form method=\"post\" action=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
        yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19))), "html", null, true);
        yield "\">
                        <button class=\"btn btn-sm btn-danger\" type=\"submit\">Supprimer</button>
                    </form>
                </div>
            </div>
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <h6>Nom</h6>
                        <p>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\"col-md-6\">
                        <h6>Type</h6>
                        <p>
                            <span class=\"badge bg-label-";
        // line 33
        yield (((CoreExtension::getAttribute($this->env, $this->source,         // line 34
(isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 34, $this->source); })()), "type", [], "any", false, false, false, 34) == "EQUIPEMENT_SPORTIF")) ? ("primary") : ((((CoreExtension::getAttribute($this->env, $this->source,         // line 35
(isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 35, $this->source); })()), "type", [], "any", false, false, false, 35) == "ACCESSOIRE")) ? ("info") : ((((CoreExtension::getAttribute($this->env, $this->source,         // line 36
(isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 36, $this->source); })()), "type", [], "any", false, false, false, 36) == "VETEMENT")) ? ("success") : ("warning"))))));
        // line 37
        yield "\">
                                ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 38, $this->source); })()), "type", [], "any", false, false, false, 38), ["_" => " "]), "html", null, true);
        yield "
                            </span>
                        </p>
                    </div>
                </div>
                <div class=\"row mt-3\">
                    <div class=\"col-md-6\">
                        <h6>Quantité</h6>
                        <p>";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 46, $this->source); })()), "quantite", [], "any", false, false, false, 46), "html", null, true);
        yield "</p>
                    </div>
                    <div class=\"col-md-6\">
                        <h6>État</h6>
                        <p>
                            <span class=\"badge bg-label-";
        // line 51
        yield (((CoreExtension::getAttribute($this->env, $this->source,         // line 52
(isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 52, $this->source); })()), "etat", [], "any", false, false, false, 52) == "NEUF")) ? ("primary") : ((((CoreExtension::getAttribute($this->env, $this->source,         // line 53
(isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 53, $this->source); })()), "etat", [], "any", false, false, false, 53) == "BON_ETAT")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source,         // line 54
(isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 54, $this->source); })()), "etat", [], "any", false, false, false, 54) == "USAGE")) ? ("warning") : ("danger"))))));
        // line 55
        yield "\">
                                ";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 56, $this->source); })()), "etat", [], "any", false, false, false, 56), ["_" => " "]), "html", null, true);
        yield "
                            </span>
                        </p>
                    </div>
                </div>
                <div class=\"row mt-3\">
                    <div class=\"col-md-6\">
                        <h6>Prix Unitaire</h6>
                        <p>";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 64, $this->source); })()), "prix", [], "any", false, false, false, 64), 2, ".", ","), "html", null, true);
        yield " €</p>
                    </div>
                </div>
                <div class=\"row mt-3\">
                    <div class=\"col-md-12\">
                        <h6>Fournisseur</h6>
                        <p>
                            ";
        // line 71
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 71, $this->source); })()), "fournisseur", [], "any", false, false, false, 71)) {
            // line 72
            yield "                                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_show", ["id_fournisseur" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 72, $this->source); })()), "fournisseur", [], "any", false, false, false, 72), "id_fournisseur", [], "any", false, false, false, 72)]), "html", null, true);
            yield "\">
                                    ";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 73, $this->source); })()), "fournisseur", [], "any", false, false, false, 73), "nom", [], "any", false, false, false, 73), "html", null, true);
            yield "
                                </a>
                            ";
        } else {
            // line 76
            yield "                                <span class=\"text-muted\">Aucun fournisseur associé</span>
                            ";
        }
        // line 78
        yield "                        </p>
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
        return "materiel/show.html.twig";
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
        return array (  221 => 78,  217 => 76,  211 => 73,  206 => 72,  204 => 71,  194 => 64,  183 => 56,  180 => 55,  178 => 54,  177 => 53,  176 => 52,  175 => 51,  167 => 46,  156 => 38,  153 => 37,  151 => 36,  150 => 35,  149 => 34,  148 => 33,  140 => 28,  128 => 19,  124 => 18,  120 => 17,  116 => 16,  111 => 14,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails du Matériel #{{ materiel.id }}{% endblock %}

{% block content %}
<div class=\"content-wrapper\">
    <div class=\"container-xxl flex-grow-1 container-p-y\">
        <h4 class=\"fw-bold py-3 mb-4\">
            <span class=\"text-muted fw-light\">Matériel /</span> Détails
        </h4>

        <div class=\"card\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h5 class=\"card-title mb-0\">Matériel #{{ materiel.id }}</h5>
                <div>
                    <a href=\"{{ path('app_materiel_edit', {'id': materiel.id}) }}\" class=\"btn btn-sm btn-primary\">Modifier</a>
                    <a href=\"{{ path('app_materiel_index') }}\" class=\"btn btn-sm btn-secondary\">Retour</a>
                    <form method=\"post\" action=\"{{ path('app_materiel_delete', {'id': materiel.id}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ materiel.id) }}\">
                        <button class=\"btn btn-sm btn-danger\" type=\"submit\">Supprimer</button>
                    </form>
                </div>
            </div>
            <div class=\"card-body\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <h6>Nom</h6>
                        <p>{{ materiel.nom }}</p>
                    </div>
                    <div class=\"col-md-6\">
                        <h6>Type</h6>
                        <p>
                            <span class=\"badge bg-label-{{ 
                                materiel.type == 'EQUIPEMENT_SPORTIF' ? 'primary' : 
                                (materiel.type == 'ACCESSOIRE' ? 'info' :
                                (materiel.type == 'VETEMENT' ? 'success' : 'warning')) 
                            }}\">
                                {{ materiel.type|replace({'_': ' '}) }}
                            </span>
                        </p>
                    </div>
                </div>
                <div class=\"row mt-3\">
                    <div class=\"col-md-6\">
                        <h6>Quantité</h6>
                        <p>{{ materiel.quantite }}</p>
                    </div>
                    <div class=\"col-md-6\">
                        <h6>État</h6>
                        <p>
                            <span class=\"badge bg-label-{{ 
                                materiel.etat == 'NEUF' ? 'primary' : 
                                (materiel.etat == 'BON_ETAT' ? 'success' :
                                (materiel.etat == 'USAGE' ? 'warning' : 'danger')) 
                            }}\">
                                {{ materiel.etat|replace({'_': ' '}) }}
                            </span>
                        </p>
                    </div>
                </div>
                <div class=\"row mt-3\">
                    <div class=\"col-md-6\">
                        <h6>Prix Unitaire</h6>
                        <p>{{ materiel.prix | number_format(2, '.', ',') }} €</p>
                    </div>
                </div>
                <div class=\"row mt-3\">
                    <div class=\"col-md-12\">
                        <h6>Fournisseur</h6>
                        <p>
                            {% if materiel.fournisseur %}
                                <a href=\"{{ path('app_fournisseur_show', {'id_fournisseur': materiel.fournisseur.id_fournisseur}) }}\">
                                    {{ materiel.fournisseur.nom }}
                                </a>
                            {% else %}
                                <span class=\"text-muted\">Aucun fournisseur associé</span>
                            {% endif %}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "materiel/show.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-integration\\matchupz-web-integration\\templates\\materiel\\show.html.twig");
    }
}
