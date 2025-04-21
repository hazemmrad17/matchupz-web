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
            <span class=\"text-muted fw-light\">Matériel /</span> Détails du Matériel
        </h4>

        <!-- Filled Tabs -->
        <div class=\"nav-align-top mb-4\">
            <ul class=\"nav nav-tabs nav-fill\" role=\"tablist\">
                <li class=\"nav-item\">
                    <button
                        type=\"button\"
                        class=\"nav-link active\"
                        role=\"tab\"
                        data-bs-toggle=\"tab\"
                        data-bs-target=\"#navs-justified-materiel\"
                        aria-controls=\"navs-justified-materiel\"
                        aria-selected=\"true\"
                    >
                        <i class=\"tf-icons bx bx-box\"></i> Matériel
                    </button>
                </li>
            </ul>
            <div class=\"tab-content\">
                <!-- Matériel Tab -->
                <div class=\"tab-pane fade show active\" id=\"navs-justified-materiel\" role=\"tabpanel\">
                    <div class=\"card\">
                        <div class=\"card-header d-flex justify-content-between align-items-center\">
                            <h5 class=\"card-title mb-0\">Matériel #";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34), "html", null, true);
        yield "</h5>
                            <div>
                                <a href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-primary\">Modifier</a>
                                <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_index");
        yield "\" class=\"btn btn-sm btn-secondary\">Retour</a>
                                <form method=\"post\" action=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)]), "html", null, true);
        yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Confirmer la suppression?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39))), "html", null, true);
        yield "\">
                                    <button class=\"btn btn-sm btn-danger\" type=\"submit\">Supprimer</button>
                                </form>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            ";
        // line 45
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 45, $this->source); })()), "image", [], "any", false, false, false, 45)) {
            // line 46
            yield "                                <div class=\"mb-3 text-center\">
                                    <img src=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/materiels/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 47, $this->source); })()), "image", [], "any", false, false, false, 47))), "html", null, true);
            yield "\" alt=\"Image du matériel\" class=\"img-fluid rounded\" style=\"max-width: 200px;\">
                                </div>
                            ";
        }
        // line 50
        yield "
                            <h5>Informations Générales</h5>
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <h6>Nom</h6>
                                    <p>";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 55, $this->source); })()), "nom", [], "any", false, false, false, 55), "html", null, true);
        yield "</p>
                                </div>
                                <div class=\"col-md-6\">
                                    <h6>Type</h6>
                                    <p>
                                        <span class=\"badge bg-";
        // line 60
        yield (((CoreExtension::getAttribute($this->env, $this->source,         // line 61
(isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 61, $this->source); })()), "type", [], "any", false, false, false, 61) == "EQUIPEMENT_SPORTIF")) ? ("primary") : ((((CoreExtension::getAttribute($this->env, $this->source,         // line 62
(isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 62, $this->source); })()), "type", [], "any", false, false, false, 62) == "ACCESSOIRE_ENTRAINEMENT")) ? ("info") : ((((CoreExtension::getAttribute($this->env, $this->source,         // line 63
(isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 63, $this->source); })()), "type", [], "any", false, false, false, 63) == "MATERIEL_JEU")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source,         // line 64
(isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 64, $this->source); })()), "type", [], "any", false, false, false, 64) == "TENUE_SPORTIVE")) ? ("warning") : ((((CoreExtension::getAttribute($this->env, $this->source,         // line 65
(isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 65, $this->source); })()), "type", [], "any", false, false, false, 65) == "EQUIPEMENT_PROTECTION")) ? ("danger") : ((((CoreExtension::getAttribute($this->env, $this->source,         // line 66
(isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 66, $this->source); })()), "type", [], "any", false, false, false, 66) == "INFRASTRUCTURE")) ? ("dark") : ("secondary"))))))))))));
        // line 67
        yield "\">
    ";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["materiel"] ?? null), "type", [], "any", true, true, false, 68)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 68, $this->source); })()), "type", [], "any", false, false, false, 68), "Non spécifié")) : ("Non spécifié")), "html", null, true);
        yield "
</span>
                                    </p>
                                </div>
                            </div>
                            <div class=\"row mt-3\">
                                <div class=\"col-md-6\">
                                    <h6>Quantité</h6>
                                    <p>";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["materiel"] ?? null), "quantite", [], "any", true, true, false, 76)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 76, $this->source); })()), "quantite", [], "any", false, false, false, 76), "Non spécifié")) : ("Non spécifié")), "html", null, true);
        yield "</p>
                                </div>
                                <div class=\"col-md-6\">
                                    <h6>État</h6>
                                    <p>
                                        <span class=\"badge bg-";
        // line 81
        yield (((CoreExtension::getAttribute($this->env, $this->source,         // line 82
(isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 82, $this->source); })()), "etat", [], "any", false, false, false, 82) == "NEUF")) ? ("primary") : ((((CoreExtension::getAttribute($this->env, $this->source,         // line 83
(isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 83, $this->source); })()), "etat", [], "any", false, false, false, 83) == "BON")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source,         // line 84
(isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 84, $this->source); })()), "etat", [], "any", false, false, false, 84) == "USE")) ? ("warning") : ((((CoreExtension::getAttribute($this->env, $this->source,         // line 85
(isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 85, $this->source); })()), "etat", [], "any", false, false, false, 85) == "DEFAUT")) ? ("danger") : ("secondary"))))))));
        // line 86
        yield "\">
                                            ";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["materiel"] ?? null), "etat", [], "any", true, true, false, 87)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 87, $this->source); })()), "etat", [], "any", false, false, false, 87), "Non spécifié")) : ("Non spécifié")), "html", null, true);
        yield "
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div class=\"row mt-3\">
                                <div class=\"col-md-6\">
                                    <h6>Prix Unitaire</h6>
                                    <p>";
        // line 95
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 95, $this->source); })()), "prix", [], "any", false, false, false, 95)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 95, $this->source); })()), "prix", [], "any", false, false, false, 95), 2, ".", ",") . " €"), "html", null, true)) : ("Non spécifié"));
        yield "</p>
                                </div>
                                <div class=\"col-md-6\">
                                    <h6>Fournisseur</h6>
                                    <p>
                                        ";
        // line 100
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 100, $this->source); })()), "fournisseur", [], "any", false, false, false, 100)) {
            // line 101
            yield "                                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_show", ["id_fournisseur" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 101, $this->source); })()), "fournisseur", [], "any", false, false, false, 101), "idFournisseur", [], "any", false, false, false, 101)]), "html", null, true);
            yield "\">
                                                ";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 102, $this->source); })()), "fournisseur", [], "any", false, false, false, 102), "nom", [], "any", false, false, false, 102), "html", null, true);
            yield "
                                            </a>
                                        ";
        } else {
            // line 105
            yield "                                            <span class=\"text-muted\">Aucun fournisseur associé</span>
                                        ";
        }
        // line 107
        yield "                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Filled Tabs -->
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
        return array (  258 => 107,  254 => 105,  248 => 102,  243 => 101,  241 => 100,  233 => 95,  222 => 87,  219 => 86,  217 => 85,  216 => 84,  215 => 83,  214 => 82,  213 => 81,  205 => 76,  194 => 68,  191 => 67,  189 => 66,  188 => 65,  187 => 64,  186 => 63,  185 => 62,  184 => 61,  183 => 60,  175 => 55,  168 => 50,  162 => 47,  159 => 46,  157 => 45,  148 => 39,  144 => 38,  140 => 37,  136 => 36,  131 => 34,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails du Matériel #{{ materiel.id }}{% endblock %}

{% block content %}
<div class=\"content-wrapper\">
    <div class=\"container-xxl flex-grow-1 container-p-y\">
        <h4 class=\"fw-bold py-3 mb-4\">
            <span class=\"text-muted fw-light\">Matériel /</span> Détails du Matériel
        </h4>

        <!-- Filled Tabs -->
        <div class=\"nav-align-top mb-4\">
            <ul class=\"nav nav-tabs nav-fill\" role=\"tablist\">
                <li class=\"nav-item\">
                    <button
                        type=\"button\"
                        class=\"nav-link active\"
                        role=\"tab\"
                        data-bs-toggle=\"tab\"
                        data-bs-target=\"#navs-justified-materiel\"
                        aria-controls=\"navs-justified-materiel\"
                        aria-selected=\"true\"
                    >
                        <i class=\"tf-icons bx bx-box\"></i> Matériel
                    </button>
                </li>
            </ul>
            <div class=\"tab-content\">
                <!-- Matériel Tab -->
                <div class=\"tab-pane fade show active\" id=\"navs-justified-materiel\" role=\"tabpanel\">
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
                            {% if materiel.image %}
                                <div class=\"mb-3 text-center\">
                                    <img src=\"{{ asset('uploads/materiels/' ~ materiel.image) }}\" alt=\"Image du matériel\" class=\"img-fluid rounded\" style=\"max-width: 200px;\">
                                </div>
                            {% endif %}

                            <h5>Informations Générales</h5>
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    <h6>Nom</h6>
                                    <p>{{ materiel.nom }}</p>
                                </div>
                                <div class=\"col-md-6\">
                                    <h6>Type</h6>
                                    <p>
                                        <span class=\"badge bg-{{ 
    materiel.type == 'EQUIPEMENT_SPORTIF' ? 'primary' : 
    (materiel.type == 'ACCESSOIRE_ENTRAINEMENT' ? 'info' :
    (materiel.type == 'MATERIEL_JEU' ? 'success' : 
    (materiel.type == 'TENUE_SPORTIVE' ? 'warning' : 
    (materiel.type == 'EQUIPEMENT_PROTECTION' ? 'danger' : 
    (materiel.type == 'INFRASTRUCTURE' ? 'dark' : 'secondary'))))) 
}}\">
    {{ materiel.type|default('Non spécifié') }}
</span>
                                    </p>
                                </div>
                            </div>
                            <div class=\"row mt-3\">
                                <div class=\"col-md-6\">
                                    <h6>Quantité</h6>
                                    <p>{{ materiel.quantite|default('Non spécifié') }}</p>
                                </div>
                                <div class=\"col-md-6\">
                                    <h6>État</h6>
                                    <p>
                                        <span class=\"badge bg-{{ 
                                            materiel.etat == 'NEUF' ? 'primary' : 
                                            (materiel.etat == 'BON' ? 'success' :
                                            (materiel.etat == 'USE' ? 'warning' : 
                                            (materiel.etat == 'DEFAUT' ? 'danger' : 'secondary'))) 
                                        }}\">
                                            {{ materiel.etat|default('Non spécifié') }}
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div class=\"row mt-3\">
                                <div class=\"col-md-6\">
                                    <h6>Prix Unitaire</h6>
                                    <p>{{ materiel.prix ? (materiel.prix|number_format(2, '.', ',')) ~ ' €' : 'Non spécifié' }}</p>
                                </div>
                                <div class=\"col-md-6\">
                                    <h6>Fournisseur</h6>
                                    <p>
                                        {% if materiel.fournisseur %}
                                            <a href=\"{{ path('app_fournisseur_show', {'id_fournisseur': materiel.fournisseur.idFournisseur}) }}\">
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
        </div>
        <!-- / Filled Tabs -->
    </div>
</div>
{% endblock %}", "materiel/show.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\materiel\\show.html.twig");
    }
}
