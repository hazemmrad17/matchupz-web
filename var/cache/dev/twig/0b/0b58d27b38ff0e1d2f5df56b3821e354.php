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

/* user/index.html.twig */
class __TwigTemplate_0f104b099d843d1913bb522e12ff31ef extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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

        yield "Liste des Utilisateurs";
        
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
        yield "    <div class=\"container py-4\">
        ";
        // line 8
        yield "        <div class=\"card mb-4\">
            <div class=\"d-flex align-items-end row\">
                <div class=\"col-sm-7\">
                    <div class=\"card-body\">
                        <h3 class=\"card-title text-primary\">Aperçu des Utilisateurs 👥</h3>
                        <p class=\"mb-4\">
                            Vous avez <span class=\"fw-bold\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 14, $this->source); })())), "html", null, true);
        yield "</span> utilisateurs enregistrés dans le système.
                        </p>
                        <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        yield "\" class=\"btn btn-sm btn-outline-primary\">
                            <i class=\"fas fa-plus\"></i> Ajouter un Utilisateur
                        </a>
                        <a href=\"#users-list\" class=\"btn btn-sm btn-primary ms-2\">Voir la liste</a>
                    </div>
                </div>
                <div class=\"col-sm-5 text-center text-sm-left\">
                    <div class=\"card-body pb-0 px-0 px-md-4\">
                        <img
                            src=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/illustrations/team-light.png"), "html", null, true);
        yield "\"
                            height=\"170\"
                            alt=\"\"
                            data-app-dark-img=\"illustrations/team-dark.png\"
                            data-app-light-img=\"illustrations/team-light.png\"
                        />
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 37
        yield "        <div class=\"modal fade\" id=\"statsModal\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-sm\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">Statistiques par Genre</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body text-center\">
                        <div class=\"mb-4\">
                            <h4>Répartition par genre</h4>
                            <div class=\"d-flex justify-content-center my-3\">
                                <div class=\"text-center mx-4\">
                                    <div class=\"fs-1 fw-bold\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 49, $this->source); })()), "percentMen", [], "any", false, false, false, 49), "html", null, true);
        yield "%</div>
                                    <div>Hommes</div>
                                </div>
                                <div class=\"text-center mx-4\">
                                    <div class=\"fs-1 fw-bold\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 53, $this->source); })()), "percentWomen", [], "any", false, false, false, 53), "html", null, true);
        yield "%</div>
                                    <div>Femmes</div>
                                </div>
                            </div>
                            <div class=\"progress\" style=\"height: 20px;\">
                                <div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 58, $this->source); })()), "percentMen", [], "any", false, false, false, 58), "html", null, true);
        yield "%\" 
                                     aria-valuenow=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 59, $this->source); })()), "percentMen", [], "any", false, false, false, 59), "html", null, true);
        yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: ";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 60, $this->source); })()), "percentWomen", [], "any", false, false, false, 60), "html", null, true);
        yield "%\" 
                                     aria-valuenow=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 61, $this->source); })()), "percentWomen", [], "any", false, false, false, 61), "html", null, true);
        yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                            </div>
                        </div>
                        <div class=\"fw-bold\">Total Utilisateurs: ";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 64, $this->source); })()), "total", [], "any", false, false, false, 64), "html", null, true);
        yield "</div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 74
        yield "        <div id=\"users-list\">
            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                <h1 class=\"h3\">Liste des Utilisateurs</h1>
                <div>
                    <a href=\"#\" class=\"btn btn-info me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#statsModal\">
                        <i class=\"bx bx-stats\"></i> Statistiques
                    </a>
                    <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        yield "\" class=\"btn btn-primary\">
                        <i class=\"bx bx-plus\"></i> Nouveau Joueur
                    </a>
                </div>
            </div>

            <div class=\"row\">
                ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 88, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 89
            yield "                    <div class=\"col-md-6 col-lg-4 mb-4\">
                        <div class=\"card h-100 shadow-sm\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center mb-3\">
                                    <div class=\"flex-shrink-0 me-3\">
                                        ";
            // line 94
            if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "image", [], "any", false, false, false, 94)) {
                // line 95
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "image", [], "any", false, false, false, 95))), "html", null, true);
                yield "\" 
                                                 class=\"rounded-circle\" 
                                                 width=\"60\" 
                                                 height=\"60\" 
                                                 alt=\"";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 99), "html", null, true);
                yield "\">
                                        ";
            } else {
                // line 101
                yield "                                            <div class=\"rounded-circle bg-light d-flex align-items-center justify-content-center\" 
                                                 style=\"width: 60px; height: 60px;\">
                                                <i class=\"fas fa-user text-muted\"></i>
                                            </div>
                                        ";
            }
            // line 106
            yield "                                    </div>
                                    <div>
                                        <h5 class=\"mb-0 fw-bold\">";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 108), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 108), "html", null, true);
            yield "</h5>
                                        <small class=\"text-muted\">";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 109), "html", null, true);
            yield "</small>
                                    </div>
                                </div>
                                
                                <div class=\"user-details\">
                                    <div class=\"detail-item\">
                                        <span class=\"detail-label fw-bold\">Email:</span>
                                        <span class=\"detail-value\">";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 116), "html", null, true);
            yield "</span>
                                    </div>
                                    ";
            // line 118
            if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "dateDeNaissance", [], "any", false, false, false, 118)) {
                // line 119
                yield "                                    <div class=\"detail-item\">
                                        <span class=\"detail-label fw-bold\">Date de naissance:</span>
                                        <span class=\"detail-value\">";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "dateDeNaissance", [], "any", false, false, false, 121), "d/m/Y"), "html", null, true);
                yield "</span>
                                    </div>
                                    <div class=\"detail-item\">
                                        <span class=\"detail-label fw-bold\">Âge:</span>
                                        <span class=\"detail-value\">
                                            ";
                // line 126
                $context["birthYear"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "dateDeNaissance", [], "any", false, false, false, 126), "Y");
                // line 127
                yield "                                            ";
                $context["currentYear"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y");
                // line 128
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["currentYear"]) || array_key_exists("currentYear", $context) ? $context["currentYear"] : (function () { throw new RuntimeError('Variable "currentYear" does not exist.', 128, $this->source); })()) - (isset($context["birthYear"]) || array_key_exists("birthYear", $context) ? $context["birthYear"] : (function () { throw new RuntimeError('Variable "birthYear" does not exist.', 128, $this->source); })())), "html", null, true);
                yield " ans
                                        </span>
                                    </div>
                                    ";
            }
            // line 132
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "numTelephone", [], "any", false, false, false, 132)) {
                // line 133
                yield "                                    <div class=\"detail-item\">
                                        <span class=\"detail-label fw-bold\">Téléphone:</span>
                                        <span class=\"detail-value\">";
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "numTelephone", [], "any", false, false, false, 135), "html", null, true);
                yield "</span>
                                    </div>
                                    ";
            }
            // line 138
            yield "                                    <div class=\"detail-item\">
                                        <span class=\"detail-label fw-bold\">Genre:</span>
                                        <span class=\"detail-value\">";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "genre", [], "any", false, false, false, 140), "html", null, true);
            yield "</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"card-footer bg-white border-top-0 d-flex justify-content-end gap-2\">
                                <a href=\"";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id_user" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id_user", [], "any", false, false, false, 146)]), "html", null, true);
            yield "\" 
                                   class=\"btn btn-sm btn-outline-primary px-3\">
                                    Modifier
                                </a>
                                <form method=\"post\" action=\"";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id_user" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id_user", [], "any", false, false, false, 150)]), "html", null, true);
            yield "\" 
                                      onsubmit=\"return confirm('Êtes-vous sûr ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id_user", [], "any", false, false, false, 152))), "html", null, true);
            yield "\">
                                    <button class=\"btn btn-sm btn-outline-danger px-3\">
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        // line 160
        if (!$context['_iterated']) {
            // line 161
            yield "                    <div class=\"col-12\">
                        <div class=\"alert alert-info\">
                            Aucun utilisateur trouvé.
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        yield "            </div>
        </div>
    </div>

    <style>
        .user-details {
            font-size: 0.9rem;
            line-height: 1.6;
        }
        .detail-item {
            margin-bottom: 0.5rem;
        }
        .detail-label {
            display: inline-block;
            width: 120px;
        }
        .card {
            border-radius: 8px;
            border: 1px solid #e0e0e0;
        }
        .card-title {
            font-size: 1.1rem;
        }
    </style>
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
        return "user/index.html.twig";
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
        return array (  370 => 167,  359 => 161,  357 => 160,  344 => 152,  339 => 150,  332 => 146,  323 => 140,  319 => 138,  313 => 135,  309 => 133,  306 => 132,  298 => 128,  295 => 127,  293 => 126,  285 => 121,  281 => 119,  279 => 118,  274 => 116,  264 => 109,  258 => 108,  254 => 106,  247 => 101,  242 => 99,  234 => 95,  232 => 94,  225 => 89,  220 => 88,  210 => 81,  201 => 74,  189 => 64,  183 => 61,  179 => 60,  175 => 59,  171 => 58,  163 => 53,  156 => 49,  142 => 37,  128 => 25,  116 => 16,  111 => 14,  103 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Utilisateurs{% endblock %}

{% block body %}
    <div class=\"container py-4\">
        {# Carte d'aperçu des utilisateurs #}
        <div class=\"card mb-4\">
            <div class=\"d-flex align-items-end row\">
                <div class=\"col-sm-7\">
                    <div class=\"card-body\">
                        <h3 class=\"card-title text-primary\">Aperçu des Utilisateurs 👥</h3>
                        <p class=\"mb-4\">
                            Vous avez <span class=\"fw-bold\">{{ users|length }}</span> utilisateurs enregistrés dans le système.
                        </p>
                        <a href=\"{{ path('app_user_new') }}\" class=\"btn btn-sm btn-outline-primary\">
                            <i class=\"fas fa-plus\"></i> Ajouter un Utilisateur
                        </a>
                        <a href=\"#users-list\" class=\"btn btn-sm btn-primary ms-2\">Voir la liste</a>
                    </div>
                </div>
                <div class=\"col-sm-5 text-center text-sm-left\">
                    <div class=\"card-body pb-0 px-0 px-md-4\">
                        <img
                            src=\"{{ asset('img/illustrations/team-light.png') }}\"
                            height=\"170\"
                            alt=\"\"
                            data-app-dark-img=\"illustrations/team-dark.png\"
                            data-app-light-img=\"illustrations/team-light.png\"
                        />
                    </div>
                </div>
            </div>
        </div>

        {# Modal pour les statistiques #}
        <div class=\"modal fade\" id=\"statsModal\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-sm\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">Statistiques par Genre</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body text-center\">
                        <div class=\"mb-4\">
                            <h4>Répartition par genre</h4>
                            <div class=\"d-flex justify-content-center my-3\">
                                <div class=\"text-center mx-4\">
                                    <div class=\"fs-1 fw-bold\">{{ stats.percentMen }}%</div>
                                    <div>Hommes</div>
                                </div>
                                <div class=\"text-center mx-4\">
                                    <div class=\"fs-1 fw-bold\">{{ stats.percentWomen }}%</div>
                                    <div>Femmes</div>
                                </div>
                            </div>
                            <div class=\"progress\" style=\"height: 20px;\">
                                <div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: {{ stats.percentMen }}%\" 
                                     aria-valuenow=\"{{ stats.percentMen }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: {{ stats.percentWomen }}%\" 
                                     aria-valuenow=\"{{ stats.percentWomen }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                            </div>
                        </div>
                        <div class=\"fw-bold\">Total Utilisateurs: {{ stats.total }}</div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                    </div>
                </div>
            </div>
        </div>

        {# Liste des utilisateurs #}
        <div id=\"users-list\">
            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                <h1 class=\"h3\">Liste des Utilisateurs</h1>
                <div>
                    <a href=\"#\" class=\"btn btn-info me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#statsModal\">
                        <i class=\"bx bx-stats\"></i> Statistiques
                    </a>
                    <a href=\"{{ path('app_user_new') }}\" class=\"btn btn-primary\">
                        <i class=\"bx bx-plus\"></i> Nouveau Joueur
                    </a>
                </div>
            </div>

            <div class=\"row\">
                {% for user in users %}
                    <div class=\"col-md-6 col-lg-4 mb-4\">
                        <div class=\"card h-100 shadow-sm\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center mb-3\">
                                    <div class=\"flex-shrink-0 me-3\">
                                        {% if user.image %}
                                            <img src=\"{{ asset('uploads/users/' ~ user.image) }}\" 
                                                 class=\"rounded-circle\" 
                                                 width=\"60\" 
                                                 height=\"60\" 
                                                 alt=\"{{ user.nom }}\">
                                        {% else %}
                                            <div class=\"rounded-circle bg-light d-flex align-items-center justify-content-center\" 
                                                 style=\"width: 60px; height: 60px;\">
                                                <i class=\"fas fa-user text-muted\"></i>
                                            </div>
                                        {% endif %}
                                    </div>
                                    <div>
                                        <h5 class=\"mb-0 fw-bold\">{{ user.prenom }} {{ user.nom }}</h5>
                                        <small class=\"text-muted\">{{ user.role }}</small>
                                    </div>
                                </div>
                                
                                <div class=\"user-details\">
                                    <div class=\"detail-item\">
                                        <span class=\"detail-label fw-bold\">Email:</span>
                                        <span class=\"detail-value\">{{ user.email }}</span>
                                    </div>
                                    {% if user.dateDeNaissance %}
                                    <div class=\"detail-item\">
                                        <span class=\"detail-label fw-bold\">Date de naissance:</span>
                                        <span class=\"detail-value\">{{ user.dateDeNaissance|date('d/m/Y') }}</span>
                                    </div>
                                    <div class=\"detail-item\">
                                        <span class=\"detail-label fw-bold\">Âge:</span>
                                        <span class=\"detail-value\">
                                            {% set birthYear = user.dateDeNaissance|date('Y') %}
                                            {% set currentYear = \"now\"|date('Y') %}
                                            {{ currentYear - birthYear }} ans
                                        </span>
                                    </div>
                                    {% endif %}
                                    {% if user.numTelephone %}
                                    <div class=\"detail-item\">
                                        <span class=\"detail-label fw-bold\">Téléphone:</span>
                                        <span class=\"detail-value\">{{ user.numTelephone }}</span>
                                    </div>
                                    {% endif %}
                                    <div class=\"detail-item\">
                                        <span class=\"detail-label fw-bold\">Genre:</span>
                                        <span class=\"detail-value\">{{ user.genre }}</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"card-footer bg-white border-top-0 d-flex justify-content-end gap-2\">
                                <a href=\"{{ path('app_user_edit', {'id_user': user.id_user}) }}\" 
                                   class=\"btn btn-sm btn-outline-primary px-3\">
                                    Modifier
                                </a>
                                <form method=\"post\" action=\"{{ path('app_user_delete', {'id_user': user.id_user}) }}\" 
                                      onsubmit=\"return confirm('Êtes-vous sûr ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id_user) }}\">
                                    <button class=\"btn btn-sm btn-outline-danger px-3\">
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                {% else %}
                    <div class=\"col-12\">
                        <div class=\"alert alert-info\">
                            Aucun utilisateur trouvé.
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>

    <style>
        .user-details {
            font-size: 0.9rem;
            line-height: 1.6;
        }
        .detail-item {
            margin-bottom: 0.5rem;
        }
        .detail-label {
            display: inline-block;
            width: 120px;
        }
        .card {
            border-radius: 8px;
            border: 1px solid #e0e0e0;
        }
        .card-title {
            font-size: 1.1rem;
        }
    </style>
{% endblock %}", "user/index.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\user\\index.html.twig");
    }
}
