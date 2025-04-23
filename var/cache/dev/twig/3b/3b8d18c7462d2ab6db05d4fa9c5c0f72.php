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

/* fournisseur/show.html.twig */
class __TwigTemplate_2ba6a13fe60db7fb5bb4b215b98a6eb1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fournisseur/show.html.twig", 1);
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
                <span class=\"text-muted fw-light\">Fournisseurs /</span> Détails du Fournisseur
            </h4>

            <div class=\"card\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <h5 class=\"card-title mb-0\">Fournisseur #";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 12, $this->source); })()), "id_fournisseur", [], "any", false, false, false, 12), "html", null, true);
        yield "</h5>
                    <div>
                        <a href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_edit", ["id_fournisseur" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 14, $this->source); })()), "id_fournisseur", [], "any", false, false, false, 14)]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-primary\">Modifier</a>
                        <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_index");
        yield "\" class=\"btn btn-sm btn-secondary\">Retour à la liste</a>

                        ";
        // line 18
        yield "                        <form method=\"post\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_delete", ["id_fournisseur" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 18, $this->source); })()), "id_fournisseur", [], "any", false, false, false, 18)]), "html", null, true);
        yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce fournisseur ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 19, $this->source); })()), "id_fournisseur", [], "any", false, false, false, 19))), "html", null, true);
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
                            <h6>Nom</h6>
                            <p>";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 30, $this->source); })()), "nom", [], "any", false, false, false, 30), "html", null, true);
        yield "</p>
                        </div>
                        <div class=\"col-md-6\">
                            <h6>Email</h6>
                            <p>";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), "html", null, true);
        yield "</p>
                        </div>
                    </div>
                    <div class=\"row mt-3\">
                        <div class=\"col-md-12\">
                            <h6>Adresse</h6>
                            <p>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 40, $this->source); })()), "adresse", [], "any", false, false, false, 40), "html", null, true);
        yield "</p>
                        </div>
                    </div>
                    <div class=\"row mt-3\">
                        <div class=\"col-md-6\">
                            <h6>Catégorie de Produit</h6>
                            <p>
                                ";
        // line 47
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 47, $this->source); })()), "categorie_produit", [], "any", false, false, false, 47) == "EQUIPEMENT_SPORTIF")) {
            // line 48
            yield "                                    Équipement Sportif
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 49
(isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 49, $this->source); })()), "categorie_produit", [], "any", false, false, false, 49) == "ACCESSOIRE_ENTRAINEMENT")) {
            // line 50
            yield "                                    Accessoire d'Entraînement
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 51
(isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 51, $this->source); })()), "categorie_produit", [], "any", false, false, false, 51) == "MATERIEL_JEU")) {
            // line 52
            yield "                                    Matériel de Jeu
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 53
(isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 53, $this->source); })()), "categorie_produit", [], "any", false, false, false, 53) == "TENUE_SPORTIVE")) {
            // line 54
            yield "                                    Tenue Sportive
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 55
(isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 55, $this->source); })()), "categorie_produit", [], "any", false, false, false, 55) == "EQUIPEMENT_PROTECTION")) {
            // line 56
            yield "                                    Équipement de Protection
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 57
(isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 57, $this->source); })()), "categorie_produit", [], "any", false, false, false, 57) == "INFRASTRUCTURE")) {
            // line 58
            yield "                                    Infrastructure
                                ";
        } else {
            // line 60
            yield "                                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["fournisseur"] ?? null), "categorie_produit", [], "any", true, true, false, 60)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 60, $this->source); })()), "categorie_produit", [], "any", false, false, false, 60), "Non spécifié")) : ("Non spécifié")), "html", null, true);
            yield "
                                ";
        }
        // line 62
        yield "                            </p>
                        </div>
                        <div class=\"col-md-6\">
                            <h6>Matériels fournis</h6>
                            <p>
                                ";
        // line 67
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 67, $this->source); })()), "materiels", [], "any", false, false, false, 67)) > 0)) {
            // line 68
            yield "                                    <ul class=\"list-unstyled\">
                                        ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 69, $this->source); })()), "materiels", [], "any", false, false, false, 69));
            foreach ($context['_seq'] as $context["_key"] => $context["materiel"]) {
                // line 70
                yield "                                            <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "nom", [], "any", false, false, false, 70), "html", null, true);
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "quantite", [], "any", false, false, false, 70), "html", null, true);
                yield " unités)</li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['materiel'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            yield "                                    </ul>
                                ";
        } else {
            // line 74
            yield "                                    Aucun matériel associé
                                ";
        }
        // line 76
        yield "                            </p>
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
        return "fournisseur/show.html.twig";
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
        return array (  217 => 76,  213 => 74,  209 => 72,  198 => 70,  194 => 69,  191 => 68,  189 => 67,  182 => 62,  176 => 60,  172 => 58,  170 => 57,  167 => 56,  165 => 55,  162 => 54,  160 => 53,  157 => 52,  155 => 51,  152 => 50,  150 => 49,  147 => 48,  145 => 47,  135 => 40,  126 => 34,  119 => 30,  105 => 19,  100 => 18,  95 => 15,  91 => 14,  86 => 12,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Fournisseurs /</span> Détails du Fournisseur
            </h4>

            <div class=\"card\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <h5 class=\"card-title mb-0\">Fournisseur #{{ fournisseur.id_fournisseur }}</h5>
                    <div>
                        <a href=\"{{ path('app_fournisseur_edit', {'id_fournisseur': fournisseur.id_fournisseur}) }}\" class=\"btn btn-sm btn-primary\">Modifier</a>
                        <a href=\"{{ path('app_fournisseur_index') }}\" class=\"btn btn-sm btn-secondary\">Retour à la liste</a>

                        {# Delete Button #}
                        <form method=\"post\" action=\"{{ path('app_fournisseur_delete', {'id_fournisseur': fournisseur.id_fournisseur}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce fournisseur ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ fournisseur.id_fournisseur) }}\">
                            <button class=\"btn btn-sm btn-danger\" type=\"submit\">
                                Supprimer
                            </button>
                        </form>
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <h6>Nom</h6>
                            <p>{{ fournisseur.nom }}</p>
                        </div>
                        <div class=\"col-md-6\">
                            <h6>Email</h6>
                            <p>{{ fournisseur.email }}</p>
                        </div>
                    </div>
                    <div class=\"row mt-3\">
                        <div class=\"col-md-12\">
                            <h6>Adresse</h6>
                            <p>{{ fournisseur.adresse }}</p>
                        </div>
                    </div>
                    <div class=\"row mt-3\">
                        <div class=\"col-md-6\">
                            <h6>Catégorie de Produit</h6>
                            <p>
                                {% if fournisseur.categorie_produit == 'EQUIPEMENT_SPORTIF' %}
                                    Équipement Sportif
                                {% elseif fournisseur.categorie_produit == 'ACCESSOIRE_ENTRAINEMENT' %}
                                    Accessoire d'Entraînement
                                {% elseif fournisseur.categorie_produit == 'MATERIEL_JEU' %}
                                    Matériel de Jeu
                                {% elseif fournisseur.categorie_produit == 'TENUE_SPORTIVE' %}
                                    Tenue Sportive
                                {% elseif fournisseur.categorie_produit == 'EQUIPEMENT_PROTECTION' %}
                                    Équipement de Protection
                                {% elseif fournisseur.categorie_produit == 'INFRASTRUCTURE' %}
                                    Infrastructure
                                {% else %}
                                    {{ fournisseur.categorie_produit|default('Non spécifié') }}
                                {% endif %}
                            </p>
                        </div>
                        <div class=\"col-md-6\">
                            <h6>Matériels fournis</h6>
                            <p>
                                {% if fournisseur.materiels|length > 0 %}
                                    <ul class=\"list-unstyled\">
                                        {% for materiel in fournisseur.materiels %}
                                            <li>{{ materiel.nom }} ({{ materiel.quantite }} unités)</li>
                                        {% endfor %}
                                    </ul>
                                {% else %}
                                    Aucun matériel associé
                                {% endif %}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "fournisseur/show.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-integration\\matchupz-web-integration\\templates\\fournisseur\\show.html.twig");
    }
}
