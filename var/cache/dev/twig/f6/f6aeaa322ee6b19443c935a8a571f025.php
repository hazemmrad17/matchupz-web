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
class __TwigTemplate_c5ee0fe3dd9d14d2d0507b80efabe3a1 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fournisseur/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fournisseur/show.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        // line 5
        yield "    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Fournisseurs /</span> Détails du Fournisseur
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
                            data-bs-target=\"#navs-justified-fournisseur\"
                            aria-controls=\"navs-justified-fournisseur\"
                            aria-selected=\"true\"
                        >
                            <i class=\"tf-icons bx bx-building\"></i> Fournisseur
                        </button>
                    </li>
                    <li class=\"nav-item\">
                        <button
                            type=\"button\"
                            class=\"nav-link\"
                            role=\"tab\"
                            data-bs-toggle=\"tab\"
                            data-bs-target=\"#navs-justified-materiels\"
                            aria-controls=\"navs-justified-materiels\"
                            aria-selected=\"false\"
                        >
                            <i class=\"tf-icons bx bx-box\"></i> Matériels Fournis
                        </button>
                    </li>
                </ul>
                <div class=\"tab-content\">
                    <!-- Fournisseur Tab -->
                    <div class=\"tab-pane fade show active\" id=\"navs-justified-fournisseur\" role=\"tabpanel\">
                        <div class=\"card\">
                            <div class=\"card-header d-flex justify-content-between align-items-center\">
                                <h5 class=\"card-title mb-0\">Fournisseur #";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 46, $this->source); })()), "id_fournisseur", [], "any", false, false, false, 46), "html", null, true);
        yield "</h5>
                                <div>
                                    <a href=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_edit", ["id_fournisseur" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 48, $this->source); })()), "id_fournisseur", [], "any", false, false, false, 48)]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-primary\">Modifier</a>
                                    <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_index");
        yield "\" class=\"btn btn-sm btn-secondary\">Retour à la liste</a>
                                    <form method=\"post\" action=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_delete", ["id_fournisseur" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 50, $this->source); })()), "id_fournisseur", [], "any", false, false, false, 50)]), "html", null, true);
        yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce fournisseur ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 51, $this->source); })()), "id_fournisseur", [], "any", false, false, false, 51))), "html", null, true);
        yield "\">
                                        <button class=\"btn btn-sm btn-danger\" type=\"submit\">Supprimer</button>
                                    </form>
                                </div>
                            </div>
                            <div class=\"card-body\">
                                <h5>Informations Générales</h5>
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <h6>Nom</h6>
                                        <p>";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["fournisseur"] ?? null), "nom", [], "any", true, true, false, 61)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 61, $this->source); })()), "nom", [], "any", false, false, false, 61), "Non spécifié")) : ("Non spécifié")), "html", null, true);
        yield "</p>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <h6>Email</h6>
                                        <p>";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["fournisseur"] ?? null), "email", [], "any", true, true, false, 65)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 65, $this->source); })()), "email", [], "any", false, false, false, 65), "Non spécifié")) : ("Non spécifié")), "html", null, true);
        yield "</p>
                                    </div>
                                </div>
                                <div class=\"row mt-3\">
                                    <div class=\"col-md-6\">
                                        <h6>Adresse</h6>
                                        <p>";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["fournisseur"] ?? null), "adresse", [], "any", true, true, false, 71)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 71, $this->source); })()), "adresse", [], "any", false, false, false, 71), "Non spécifié")) : ("Non spécifié")), "html", null, true);
        yield "</p>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <h6>Catégorie de Produit</h6>
                                        <p>
                                            ";
        // line 76
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 76, $this->source); })()), "categorie_produit", [], "any", false, false, false, 76) == "EQUIPEMENT_SPORTIF")) {
            // line 77
            yield "                                                Équipement Sportif
                                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 78
(isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 78, $this->source); })()), "categorie_produit", [], "any", false, false, false, 78) == "ACCESSOIRE_ENTRAINEMENT")) {
            // line 79
            yield "                                                Accessoire d'Entraînement
                                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 80
(isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 80, $this->source); })()), "categorie_produit", [], "any", false, false, false, 80) == "MATERIEL_JEU")) {
            // line 81
            yield "                                                Matériel de Jeu
                                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 82
(isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 82, $this->source); })()), "categorie_produit", [], "any", false, false, false, 82) == "TENUE_SPORTIVE")) {
            // line 83
            yield "                                                Tenue Sportive
                                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 84
(isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 84, $this->source); })()), "categorie_produit", [], "any", false, false, false, 84) == "EQUIPEMENT_PROTECTION")) {
            // line 85
            yield "                                                Équipement de Protection
                                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 86
(isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 86, $this->source); })()), "categorie_produit", [], "any", false, false, false, 86) == "INFRASTRUCTURE")) {
            // line 87
            yield "                                                Infrastructure
                                            ";
        } else {
            // line 89
            yield "                                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["fournisseur"] ?? null), "categorie_produit", [], "any", true, true, false, 89)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 89, $this->source); })()), "categorie_produit", [], "any", false, false, false, 89), "Non spécifié")) : ("Non spécifié")), "html", null, true);
            yield "
                                            ";
        }
        // line 91
        yield "                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Matériels Fournis Tab -->
                    <div class=\"tab-pane fade\" id=\"navs-justified-materiels\" role=\"tabpanel\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h5>Matériels Fournis</h5>
                                ";
        // line 103
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 103, $this->source); })()), "materiels", [], "any", false, false, false, 103)) > 0)) {
            // line 104
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseur"]) || array_key_exists("fournisseur", $context) ? $context["fournisseur"] : (function () { throw new RuntimeError('Variable "fournisseur" does not exist.', 104, $this->source); })()), "materiels", [], "any", false, false, false, 104));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["materiel"]) {
                // line 105
                yield "                                        <div class=\"mb-4\">
                                            <h6>Matériel #";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 106), "html", null, true);
                yield "</h6>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <h6>Nom</h6>
                                                    <p>";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "nom", [], "any", true, true, false, 110)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "nom", [], "any", false, false, false, 110), "N/A")) : ("N/A")), "html", null, true);
                yield "</p>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <h6>Quantité</h6>
                                                    <p>";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "quantite", [], "any", true, true, false, 114)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "quantite", [], "any", false, false, false, 114), "N/A")) : ("N/A")), "html", null, true);
                yield "</p>
                                                </div>
                                            </div>
                                        </div>
                                        ";
                // line 118
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 118)) {
                    // line 119
                    yield "                                            <hr class=\"my-4\">
                                        ";
                }
                // line 121
                yield "                                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['materiel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 122
            yield "                                ";
        } else {
            // line 123
            yield "                                    <p>Aucun matériel associé à ce fournisseur.</p>
                                ";
        }
        // line 125
        yield "                            </div>
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
        return array (  295 => 125,  291 => 123,  288 => 122,  274 => 121,  270 => 119,  268 => 118,  261 => 114,  254 => 110,  247 => 106,  244 => 105,  226 => 104,  224 => 103,  210 => 91,  204 => 89,  200 => 87,  198 => 86,  195 => 85,  193 => 84,  190 => 83,  188 => 82,  185 => 81,  183 => 80,  180 => 79,  178 => 78,  175 => 77,  173 => 76,  165 => 71,  156 => 65,  149 => 61,  136 => 51,  132 => 50,  128 => 49,  124 => 48,  119 => 46,  76 => 5,  63 => 4,  40 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/fournisseur/show.html.twig #}
{% extends 'base.html.twig' %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Fournisseurs /</span> Détails du Fournisseur
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
                            data-bs-target=\"#navs-justified-fournisseur\"
                            aria-controls=\"navs-justified-fournisseur\"
                            aria-selected=\"true\"
                        >
                            <i class=\"tf-icons bx bx-building\"></i> Fournisseur
                        </button>
                    </li>
                    <li class=\"nav-item\">
                        <button
                            type=\"button\"
                            class=\"nav-link\"
                            role=\"tab\"
                            data-bs-toggle=\"tab\"
                            data-bs-target=\"#navs-justified-materiels\"
                            aria-controls=\"navs-justified-materiels\"
                            aria-selected=\"false\"
                        >
                            <i class=\"tf-icons bx bx-box\"></i> Matériels Fournis
                        </button>
                    </li>
                </ul>
                <div class=\"tab-content\">
                    <!-- Fournisseur Tab -->
                    <div class=\"tab-pane fade show active\" id=\"navs-justified-fournisseur\" role=\"tabpanel\">
                        <div class=\"card\">
                            <div class=\"card-header d-flex justify-content-between align-items-center\">
                                <h5 class=\"card-title mb-0\">Fournisseur #{{ fournisseur.id_fournisseur }}</h5>
                                <div>
                                    <a href=\"{{ path('app_fournisseur_edit', {'id_fournisseur': fournisseur.id_fournisseur}) }}\" class=\"btn btn-sm btn-primary\">Modifier</a>
                                    <a href=\"{{ path('app_fournisseur_index') }}\" class=\"btn btn-sm btn-secondary\">Retour à la liste</a>
                                    <form method=\"post\" action=\"{{ path('app_fournisseur_delete', {'id_fournisseur': fournisseur.id_fournisseur}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce fournisseur ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ fournisseur.id_fournisseur) }}\">
                                        <button class=\"btn btn-sm btn-danger\" type=\"submit\">Supprimer</button>
                                    </form>
                                </div>
                            </div>
                            <div class=\"card-body\">
                                <h5>Informations Générales</h5>
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <h6>Nom</h6>
                                        <p>{{ fournisseur.nom|default('Non spécifié') }}</p>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <h6>Email</h6>
                                        <p>{{ fournisseur.email|default('Non spécifié') }}</p>
                                    </div>
                                </div>
                                <div class=\"row mt-3\">
                                    <div class=\"col-md-6\">
                                        <h6>Adresse</h6>
                                        <p>{{ fournisseur.adresse|default('Non spécifié') }}</p>
                                    </div>
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
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Matériels Fournis Tab -->
                    <div class=\"tab-pane fade\" id=\"navs-justified-materiels\" role=\"tabpanel\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h5>Matériels Fournis</h5>
                                {% if fournisseur.materiels|length > 0 %}
                                    {% for materiel in fournisseur.materiels %}
                                        <div class=\"mb-4\">
                                            <h6>Matériel #{{ materiel.id }}</h6>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <h6>Nom</h6>
                                                    <p>{{ materiel.nom|default('N/A') }}</p>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <h6>Quantité</h6>
                                                    <p>{{ materiel.quantite|default('N/A') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        {% if not loop.last %}
                                            <hr class=\"my-4\">
                                        {% endif %}
                                    {% endfor %}
                                {% else %}
                                    <p>Aucun matériel associé à ce fournisseur.</p>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / Filled Tabs -->
        </div>
    </div>
{% endblock %}", "fournisseur/show.html.twig", "C:\\Users\\ibtis\\Downloads\\matchupz-web-joueur\\matchupz-web-joueur\\templates\\fournisseur\\show.html.twig");
    }
}
