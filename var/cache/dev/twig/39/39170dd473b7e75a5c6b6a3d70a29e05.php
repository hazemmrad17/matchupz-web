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

/* materiel/showF.html.twig */
class __TwigTemplate_c91eb452e119e1a5f002ef567b145aa5 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "baseM.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiel/showF.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiel/showF.html.twig"));

        $this->parent = $this->loadTemplate("baseM.html.twig", "materiel/showF.html.twig", 1);
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

        yield "Détails du Matériel - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<style>
    .materiel-card {
        max-width: 800px;
        margin: 0 auto;
        border: none;
        border-radius: 15px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background: #fff;
    }
    .materiel-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 32px rgba(0, 0, 0, 0.2);
    }
    .materiel-img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        border-radius: 15px 15px 0 0;
        background-color: #f8f9fa;
    }
    .no-img-placeholder {
        width: 100%;
        height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f8f9fa;
        border-radius: 15px 15px 0 0;
    }
    .card-body {
        padding: 2rem;
    }
    .card-title {
        font-size: 2rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 1.5rem;
    }
    .detail-item {
        display: flex;
        align-items: center;
        padding: 0.75rem 0;
        border-bottom: 1px solid #eee;
        font-size: 1rem;
    }
    .detail-item i {
        font-size: 1.2rem;
        color: #0d6efd;
        margin-right: 1rem;
        width: 20px;
        text-align: center;
    }
    .detail-item p {
        margin: 0;
        color: #555;
    }
    .type-badge, .etat-badge {
        padding: 3px 12px;
        border-radius: 50px;
        font-size: 0.8rem;
        display: inline-block;
    }
    .card-footer {
        background: #f8f9fa;
        border-radius: 0 0 15px 15px;
        padding: 1.5rem;
        text-align: center;
    }
    .btn-return {
        font-size: 1rem;
        padding: 0.5rem 1.5rem;
    }
    @media (max-width: 576px) {
        .materiel-img, .no-img-placeholder {
            height: 200px;
        }
        .card-title {
            font-size: 1.5rem;
        }
        .detail-item {
            font-size: 0.9rem;
        }
    }
</style>

<div class=\"container py-5\">
    <div class=\"materiel-card\">
        ";
        // line 94
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 94, $this->source); })()), "image", [], "any", false, false, false, 94)) {
            // line 95
            yield "        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/materiels/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 95, $this->source); })()), "image", [], "any", false, false, false, 95))), "html", null, true);
            yield "\" class=\"materiel-img\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 95, $this->source); })()), "nom", [], "any", false, false, false, 95), "html", null, true);
            yield "\">
        ";
        } else {
            // line 97
            yield "        <div class=\"no-img-placeholder\">
            <i class=\"fas fa-camera fa-3x text-muted\"></i>
        </div>
        ";
        }
        // line 101
        yield "        
        <div class=\"card-body\">
            <h2 class=\"card-title\">";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 103, $this->source); })()), "nom", [], "any", false, false, false, 103), "html", null, true);
        yield "</h2>
            <div class=\"detail-item\">
                <i class=\"fas fa-tag\"></i>
                <p>
                    <span class=\"type-badge ";
        // line 107
        yield (((CoreExtension::getAttribute($this->env, $this->source,         // line 108
(isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 108, $this->source); })()), "type", [], "any", false, false, false, 108) == "EQUIPEMENT_SPORTIF")) ? ("bg-primary") : ((((CoreExtension::getAttribute($this->env, $this->source,         // line 109
(isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 109, $this->source); })()), "type", [], "any", false, false, false, 109) == "ACCESSOIRE_ENTRAINEMENT")) ? ("bg-info") : ((((CoreExtension::getAttribute($this->env, $this->source,         // line 110
(isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 110, $this->source); })()), "type", [], "any", false, false, false, 110) == "MATERIEL_JEU")) ? ("bg-success") : ((((CoreExtension::getAttribute($this->env, $this->source,         // line 111
(isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 111, $this->source); })()), "type", [], "any", false, false, false, 111) == "TENUE_SPORTIVE")) ? ("bg-warning") : ((((CoreExtension::getAttribute($this->env, $this->source,         // line 112
(isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 112, $this->source); })()), "type", [], "any", false, false, false, 112) == "EQUIPEMENT_PROTECTION")) ? ("bg-danger") : ("bg-secondary"))))))))));
        // line 114
        yield "\">
                        ";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 115, $this->source); })()), "type", [], "any", false, false, false, 115), ["_" => " "]))), "html", null, true);
        yield "
                    </span>
                </p>
            </div>
            <div class=\"detail-item\">
                <i class=\"fas fa-boxes\"></i>
                <p>Quantité: ";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 121, $this->source); })()), "quantite", [], "any", false, false, false, 121), "html", null, true);
        yield "</p>
            </div>
            <div class=\"detail-item\">
                <i class=\"fas fa-check-circle\"></i>
                <p>
                    <span class=\"etat-badge ";
        // line 126
        yield (((CoreExtension::getAttribute($this->env, $this->source,         // line 127
(isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 127, $this->source); })()), "etat", [], "any", false, false, false, 127) == "NEUF")) ? ("bg-primary") : ((((CoreExtension::getAttribute($this->env, $this->source,         // line 128
(isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 128, $this->source); })()), "etat", [], "any", false, false, false, 128) == "USE")) ? ("bg-warning") : ("bg-danger"))));
        // line 129
        yield "\">
                        ";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 130, $this->source); })()), "etat", [], "any", false, false, false, 130), ["_" => " "]))), "html", null, true);
        yield "
                    </span>
                </p>
            </div>
            <div class=\"detail-item\">
                <i class=\"fas fa-euro-sign\"></i>
                <p>Prix: ";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 136, $this->source); })()), "prix", [], "any", false, false, false, 136), "EUR"), "html", null, true);
        yield "</p>
            </div>
            <div class=\"detail-item\">
                <i class=\"fas fa-barcode\"></i>
                <p>Code-barres: ";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 140, $this->source); })()), "barcode", [], "any", false, false, false, 140), "html", null, true);
        yield "</p>
            </div>
            <div class=\"detail-item\">
                <i class=\"fas fa-store\"></i>
                <p>
                    Fournisseur:
                    ";
        // line 146
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 146, $this->source); })()), "fournisseur", [], "any", false, false, false, 146)) {
            // line 147
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_showF", ["id_fournisseur" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 147, $this->source); })()), "fournisseur", [], "any", false, false, false, 147), "id_fournisseur", [], "any", false, false, false, 147)]), "html", null, true);
            yield "\">
                            ";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 148, $this->source); })()), "fournisseur", [], "any", false, false, false, 148), "nom", [], "any", false, false, false, 148), "html", null, true);
            yield "
                        </a>
                    ";
        } else {
            // line 151
            yield "                        Aucun fournisseur
                    ";
        }
        // line 153
        yield "                </p>
            </div>
        </div>
        <div class=\"card-footer\">
            <a href=\"";
        // line 157
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_indexF");
        yield "\" class=\"btn btn-outline-primary btn-return\">
                <i class=\"fas fa-arrow-left me-2\"></i> Retour à la liste
            </a>
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
        return "materiel/showF.html.twig";
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
        return array (  300 => 157,  294 => 153,  290 => 151,  284 => 148,  279 => 147,  277 => 146,  268 => 140,  261 => 136,  252 => 130,  249 => 129,  247 => 128,  246 => 127,  245 => 126,  237 => 121,  228 => 115,  225 => 114,  223 => 112,  222 => 111,  221 => 110,  220 => 109,  219 => 108,  218 => 107,  211 => 103,  207 => 101,  201 => 97,  193 => 95,  191 => 94,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseM.html.twig' %}

{% block title %}Détails du Matériel - {{ materiel.nom }}{% endblock %}

{% block body %}
<style>
    .materiel-card {
        max-width: 800px;
        margin: 0 auto;
        border: none;
        border-radius: 15px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background: #fff;
    }
    .materiel-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 32px rgba(0, 0, 0, 0.2);
    }
    .materiel-img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        border-radius: 15px 15px 0 0;
        background-color: #f8f9fa;
    }
    .no-img-placeholder {
        width: 100%;
        height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f8f9fa;
        border-radius: 15px 15px 0 0;
    }
    .card-body {
        padding: 2rem;
    }
    .card-title {
        font-size: 2rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 1.5rem;
    }
    .detail-item {
        display: flex;
        align-items: center;
        padding: 0.75rem 0;
        border-bottom: 1px solid #eee;
        font-size: 1rem;
    }
    .detail-item i {
        font-size: 1.2rem;
        color: #0d6efd;
        margin-right: 1rem;
        width: 20px;
        text-align: center;
    }
    .detail-item p {
        margin: 0;
        color: #555;
    }
    .type-badge, .etat-badge {
        padding: 3px 12px;
        border-radius: 50px;
        font-size: 0.8rem;
        display: inline-block;
    }
    .card-footer {
        background: #f8f9fa;
        border-radius: 0 0 15px 15px;
        padding: 1.5rem;
        text-align: center;
    }
    .btn-return {
        font-size: 1rem;
        padding: 0.5rem 1.5rem;
    }
    @media (max-width: 576px) {
        .materiel-img, .no-img-placeholder {
            height: 200px;
        }
        .card-title {
            font-size: 1.5rem;
        }
        .detail-item {
            font-size: 0.9rem;
        }
    }
</style>

<div class=\"container py-5\">
    <div class=\"materiel-card\">
        {% if materiel.image %}
        <img src=\"{{ asset('Uploads/materiels/' ~ materiel.image) }}\" class=\"materiel-img\" alt=\"{{ materiel.nom }}\">
        {% else %}
        <div class=\"no-img-placeholder\">
            <i class=\"fas fa-camera fa-3x text-muted\"></i>
        </div>
        {% endif %}
        
        <div class=\"card-body\">
            <h2 class=\"card-title\">{{ materiel.nom }}</h2>
            <div class=\"detail-item\">
                <i class=\"fas fa-tag\"></i>
                <p>
                    <span class=\"type-badge {{ 
                        materiel.type == 'EQUIPEMENT_SPORTIF' ? 'bg-primary' : 
                        (materiel.type == 'ACCESSOIRE_ENTRAINEMENT' ? 'bg-info' : 
                        (materiel.type == 'MATERIEL_JEU' ? 'bg-success' : 
                        (materiel.type == 'TENUE_SPORTIVE' ? 'bg-warning' : 
                        (materiel.type == 'EQUIPEMENT_PROTECTION' ? 'bg-danger' : 
                        'bg-secondary')))) 
                    }}\">
                        {{ materiel.type|replace({'_': ' '})|lower|capitalize }}
                    </span>
                </p>
            </div>
            <div class=\"detail-item\">
                <i class=\"fas fa-boxes\"></i>
                <p>Quantité: {{ materiel.quantite }}</p>
            </div>
            <div class=\"detail-item\">
                <i class=\"fas fa-check-circle\"></i>
                <p>
                    <span class=\"etat-badge {{ 
                        materiel.etat == 'NEUF' ? 'bg-primary' : 
                        (materiel.etat == 'USE' ? 'bg-warning' : 'bg-danger') 
                    }}\">
                        {{ materiel.etat|replace({'_': ' '})|lower|capitalize }}
                    </span>
                </p>
            </div>
            <div class=\"detail-item\">
                <i class=\"fas fa-euro-sign\"></i>
                <p>Prix: {{ materiel.prix|format_currency('EUR') }}</p>
            </div>
            <div class=\"detail-item\">
                <i class=\"fas fa-barcode\"></i>
                <p>Code-barres: {{ materiel.barcode }}</p>
            </div>
            <div class=\"detail-item\">
                <i class=\"fas fa-store\"></i>
                <p>
                    Fournisseur:
                    {% if materiel.fournisseur %}
                        <a href=\"{{ path('app_fournisseur_showF', {'id_fournisseur': materiel.fournisseur.id_fournisseur}) }}\">
                            {{ materiel.fournisseur.nom }}
                        </a>
                    {% else %}
                        Aucun fournisseur
                    {% endif %}
                </p>
            </div>
        </div>
        <div class=\"card-footer\">
            <a href=\"{{ path('app_materiel_indexF') }}\" class=\"btn btn-outline-primary btn-return\">
                <i class=\"fas fa-arrow-left me-2\"></i> Retour à la liste
            </a>
        </div>
    </div>
</div>
{% endblock %}", "materiel/showF.html.twig", "C:\\Users\\ibtis\\Downloads\\matchupz-web-joueur\\matchupz-web-joueur\\templates\\materiel\\showF.html.twig");
    }
}
