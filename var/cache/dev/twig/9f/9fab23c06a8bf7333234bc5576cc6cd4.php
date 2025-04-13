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

/* joueur/show.html.twig */
class __TwigTemplate_d466f07417b1a731a27fd5bdc3b4ed60 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "joueur/show.html.twig", 1);
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
                <span class=\"text-muted fw-light\">Joueurs /</span> Détails du Joueur
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
                            data-bs-target=\"#navs-justified-joueur\"
                            aria-controls=\"navs-justified-joueur\"
                            aria-selected=\"true\"
                        >
                            <i class=\"tf-icons bx bx-user\"></i> Joueur
                        </button>
                    </li>
                    <li class=\"nav-item\">
                        <button
                            type=\"button\"
                            class=\"nav-link\"
                            role=\"tab\"
                            data-bs-toggle=\"tab\"
                            data-bs-target=\"#navs-justified-evaluation\"
                            aria-controls=\"navs-justified-evaluation\"
                            aria-selected=\"false\"
                        >
                            <i class=\"tf-icons bx bx-heart\"></i> Évaluation Physique
                        </button>
                    </li>
                    <li class=\"nav-item\">
                        <button
                            type=\"button\"
                            class=\"nav-link\"
                            role=\"tab\"
                            data-bs-toggle=\"tab\"
                            data-bs-target=\"#navs-justified-performance\"
                            aria-controls=\"navs-justified-performance\"
                            aria-selected=\"false\"
                        >
                            <i class=\"tf-icons bx bx-football\"></i> Performance
                        </button>
                    </li>
                </ul>
                <div class=\"tab-content\">
                    <!-- Joueur Tab -->
                    <div class=\"tab-pane fade show active\" id=\"navs-justified-joueur\" role=\"tabpanel\">
                        <div class=\"card\">
                            <div class=\"card-header d-flex justify-content-between align-items-center\">
                                <h5 class=\"card-title mb-0\">Joueur #";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 58, $this->source); })()), "idJoueur", [], "any", false, false, false, 58), "html", null, true);
        yield "</h5>
                                <div>
                                    <a href=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 60, $this->source); })()), "idJoueur", [], "any", false, false, false, 60)]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-primary\">Modifier</a>
                                    <a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_main");
        yield "\" class=\"btn btn-sm btn-secondary\">Retour à la liste</a>
                                    <form method=\"post\" action=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 62, $this->source); })()), "idJoueur", [], "any", false, false, false, 62)]), "html", null, true);
        yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce joueur ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 63, $this->source); })()), "idJoueur", [], "any", false, false, false, 63))), "html", null, true);
        yield "\">
                                        <button class=\"btn btn-sm btn-danger\" type=\"submit\">Supprimer</button>
                                    </form>
                                </div>
                            </div>
                            <div class=\"card-body\">
                                ";
        // line 69
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 69, $this->source); })()), "profilePictureUrl", [], "any", false, false, false, 69)) {
            // line 70
            yield "                                    <div class=\"mb-3 text-center\">
                                        <img src=\"";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 71, $this->source); })()), "profilePictureUrl", [], "any", false, false, false, 71), "html", null, true);
            yield "\" alt=\"Photo de profil\" class=\"img-fluid rounded\" style=\"max-width: 200px;\">
                                    </div>
                                ";
        }
        // line 74
        yield "
                                <h5>Informations Générales</h5>
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <h6>Nom</h6>
                                        <p>";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 79, $this->source); })()), "nom", [], "any", false, false, false, 79), "html", null, true);
        yield "</p>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <h6>Prénom</h6>
                                        <p>";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 83, $this->source); })()), "prenom", [], "any", false, false, false, 83), "html", null, true);
        yield "</p>
                                    </div>
                                </div>
                                <div class=\"row mt-3\">
                                    <div class=\"col-md-6\">
                                        <h6>Date de Naissance</h6>
                                        <p>";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 89, $this->source); })()), "dateNaissance", [], "any", false, false, false, 89), "d/m/Y"), "html", null, true);
        yield "</p>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <h6>Sport</h6>
                                        <p>";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["joueur"] ?? null), "sport", [], "any", false, true, false, 93), "nomSport", [], "any", true, true, false, 93)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 93, $this->source); })()), "sport", [], "any", false, false, false, 93), "nomSport", [], "any", false, false, false, 93), "N/A")) : ("N/A")), "html", null, true);
        yield "</p>
                                    </div>
                                </div>
                                <div class=\"row mt-3\">
                                    <div class=\"col-md-6\">
                                        <h6>Poste</h6>
                                        <p>";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["joueur"] ?? null), "poste", [], "any", true, true, false, 99)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 99, $this->source); })()), "poste", [], "any", false, false, false, 99), "Non spécifié")) : ("Non spécifié")), "html", null, true);
        yield "</p>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <h6>Statut</h6>
                                        <p>";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["joueur"] ?? null), "statut", [], "any", true, true, false, 103)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 103, $this->source); })()), "statut", [], "any", false, false, false, 103), "Non spécifié")) : ("Non spécifié")), "html", null, true);
        yield "</p>
                                    </div>
                                </div>
                                <div class=\"row mt-3\">
                                    <div class=\"col-md-6\">
                                        <h6>Taille</h6>
                                        <p>";
        // line 109
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 109, $this->source); })()), "taille", [], "any", false, false, false, 109)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 109, $this->source); })()), "taille", [], "any", false, false, false, 109) * 100), 0) . " cm"), "html", null, true)) : ("Non spécifié"));
        yield "</p>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <h6>Poids</h6>
                                        <p>";
        // line 113
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 113, $this->source); })()), "poids", [], "any", false, false, false, 113)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 113, $this->source); })()), "poids", [], "any", false, false, false, 113), 0) . " kg"), "html", null, true)) : ("Non spécifié"));
        yield "</p>
                                    </div>
                                </div>
                                <div class=\"row mt-3\">
                                    <div class=\"col-md-6\">
                                        <h6>Email</h6>
                                        <p>";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["joueur"] ?? null), "email", [], "any", true, true, false, 119)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 119, $this->source); })()), "email", [], "any", false, false, false, 119), "Non spécifié")) : ("Non spécifié")), "html", null, true);
        yield "</p>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <h6>Téléphone</h6>
                                        <p>";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["joueur"] ?? null), "telephone", [], "any", true, true, false, 123)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 123, $this->source); })()), "telephone", [], "any", false, false, false, 123), "Non spécifié")) : ("Non spécifié")), "html", null, true);
        yield "</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Évaluation Physique Tab -->
                    <div class=\"tab-pane fade\" id=\"navs-justified-evaluation\" role=\"tabpanel\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h5>Évaluations Physiques</h5>
                                ";
        // line 135
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["evaluations"]) || array_key_exists("evaluations", $context) ? $context["evaluations"] : (function () { throw new RuntimeError('Variable "evaluations" does not exist.', 135, $this->source); })())) > 0)) {
            // line 136
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evaluations"]) || array_key_exists("evaluations", $context) ? $context["evaluations"] : (function () { throw new RuntimeError('Variable "evaluations" does not exist.', 136, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["evaluation"]) {
                // line 137
                yield "                                        <div class=\"mb-4\">
                                            <h6>Évaluation du ";
                // line 138
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "dateEvaluation", [], "any", false, false, false, 138), "d/m/Y"), "html", null, true);
                yield "</h6>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <h6>Niveau d'Endurance</h6>
                                                    <p>";
                // line 142
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "niveauEndurance", [], "any", false, false, false, 142), 2, ".", ","), "html", null, true);
                yield "</p>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <h6>Force Physique</h6>
                                                    <p>";
                // line 146
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "forcePhysique", [], "any", false, false, false, 146), 2, ".", ","), "html", null, true);
                yield "</p>
                                                </div>
                                            </div>
                                            <div class=\"row mt-3\">
                                                <div class=\"col-md-6\">
                                                    <h6>Vitesse</h6>
                                                    <p>";
                // line 152
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "vitesse", [], "any", false, false, false, 152), 2, ".", ","), "html", null, true);
                yield "</p>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <h6>État de Blessure</h6>
                                                    <p>";
                // line 156
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "etatBlessure", [], "any", true, true, false, 156)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "etatBlessure", [], "any", false, false, false, 156), "N/A")) : ("N/A")), "html", null, true);
                yield "</p>
                                                </div>
                                            </div>
                                            <div class=\"row mt-3\">
                                                <div class=\"col-md-12\">
                                                    <h6>Distribution des Attributs</h6>
                                                    <canvas id=\"radarChart-";
                // line 162
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 162), "html", null, true);
                yield "\" style=\"max-width: 300px; max-height: 300px; margin: 0 auto;\"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        ";
                // line 166
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 166)) {
                    // line 167
                    yield "                                            <hr class=\"my-4\">
                                        ";
                }
                // line 169
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
            unset($context['_seq'], $context['_key'], $context['evaluation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 170
            yield "                                ";
        } else {
            // line 171
            yield "                                    <p>Aucune donnée d'évaluation physique disponible.</p>
                                ";
        }
        // line 173
        yield "                            </div>
                        </div>
                    </div>

                    <!-- Performance Tab -->
                    <div class=\"tab-pane fade\" id=\"navs-justified-performance\" role=\"tabpanel\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h5>Performances</h5>
                                ";
        // line 182
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["performances"]) || array_key_exists("performances", $context) ? $context["performances"] : (function () { throw new RuntimeError('Variable "performances" does not exist.', 182, $this->source); })())) > 0)) {
            // line 183
            yield "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["performances"]) || array_key_exists("performances", $context) ? $context["performances"] : (function () { throw new RuntimeError('Variable "performances" does not exist.', 183, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["performance"]) {
                // line 184
                yield "                                        <div class=\"mb-4\">
                                            <h6>Performance de la saison ";
                // line 185
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["performance"], "saison", [], "any", false, false, false, 185), "html", null, true);
                yield "</h6>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <h6>Nombre de Matches</h6>
                                                    <p>";
                // line 189
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["performance"], "nombreMatches", [], "any", true, true, false, 189)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["performance"], "nombreMatches", [], "any", false, false, false, 189), "N/A")) : ("N/A")), "html", null, true);
                yield "</p>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <h6>Minutes Jouées</h6>
                                                    <p>";
                // line 193
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["performance"], "minutesJouees", [], "any", true, true, false, 193)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["performance"], "minutesJouees", [], "any", false, false, false, 193), "N/A")) : ("N/A")), "html", null, true);
                yield "</p>
                                                </div>
                                            </div>
                                            <div class=\"row mt-3\">
                                                <div class=\"col-md-6\">
                                                    <h6>Buts Marqués</h6>
                                                    <p>";
                // line 199
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["performance"], "butsMarques", [], "any", true, true, false, 199)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["performance"], "butsMarques", [], "any", false, false, false, 199), "0")) : ("0")), "html", null, true);
                yield "</p>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <h6>Passes Décisives</h6>
                                                    <p>";
                // line 203
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["performance"], "passesDecisives", [], "any", true, true, false, 203)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["performance"], "passesDecisives", [], "any", false, false, false, 203), "0")) : ("0")), "html", null, true);
                yield "</p>
                                                </div>
                                            </div>
                                            <div class=\"row mt-3\">
                                                <div class=\"col-md-6\">
                                                    <h6>Cartons Jaunes</h6>
                                                    <p>";
                // line 209
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["performance"], "cartonsJaunes", [], "any", true, true, false, 209)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["performance"], "cartonsJaunes", [], "any", false, false, false, 209), "0")) : ("0")), "html", null, true);
                yield "</p>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <h6>Cartons Rouges</h6>
                                                    <p>";
                // line 213
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["performance"], "cartonsRouges", [], "any", true, true, false, 213)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["performance"], "cartonsRouges", [], "any", false, false, false, 213), "0")) : ("0")), "html", null, true);
                yield "</p>
                                                </div>
                                            </div>
                                        </div>
                                        ";
                // line 217
                if ( !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 217)) {
                    // line 218
                    yield "                                            <hr class=\"my-4\">
                                        ";
                }
                // line 220
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
            unset($context['_seq'], $context['_key'], $context['performance'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 221
            yield "                                ";
        } else {
            // line 222
            yield "                                    <p>Aucune donnée de performance disponible.</p>
                                ";
        }
        // line 224
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

    // line 234
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 235
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js\"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            console.log('Evaluations count: ";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["evaluations"]) || array_key_exists("evaluations", $context) ? $context["evaluations"] : (function () { throw new RuntimeError('Variable "evaluations" does not exist.', 240, $this->source); })())), "html", null, true);
        yield "');
            const charts = {};

            ";
        // line 243
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["evaluations"]) || array_key_exists("evaluations", $context) ? $context["evaluations"] : (function () { throw new RuntimeError('Variable "evaluations" does not exist.', 243, $this->source); })())) > 0)) {
            // line 244
            yield "                document.querySelector('button[data-bs-target=\"#navs-justified-evaluation\"]').addEventListener('shown.bs.tab', function () {
                    ";
            // line 245
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evaluations"]) || array_key_exists("evaluations", $context) ? $context["evaluations"] : (function () { throw new RuntimeError('Variable "evaluations" does not exist.', 245, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["evaluation"]) {
                // line 246
                yield "                        console.log('Evaluation ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 246), "html", null, true);
                yield ": Endurance=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "niveauEndurance", [], "any", true, true, false, 246)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "niveauEndurance", [], "any", false, false, false, 246), 0)) : (0)), "html", null, true);
                yield ", Force=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "forcePhysique", [], "any", true, true, false, 246)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "forcePhysique", [], "any", false, false, false, 246), 0)) : (0)), "html", null, true);
                yield ", Vitesse=";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "vitesse", [], "any", true, true, false, 246)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "vitesse", [], "any", false, false, false, 246), 0)) : (0)), "html", null, true);
                yield "');
                        const ctx";
                // line 247
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 247), "html", null, true);
                yield " = document.getElementById('radarChart-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 247), "html", null, true);
                yield "');
                        if (ctx";
                // line 248
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 248), "html", null, true);
                yield " && !charts['radarChart-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 248), "html", null, true);
                yield "']) {
                            charts['radarChart-";
                // line 249
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 249), "html", null, true);
                yield "'] = new Chart(ctx";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 249), "html", null, true);
                yield ".getContext('2d'), {
                                type: 'radar',
                                data: {
                                    labels: ['Endurance', 'Force Physique', 'Vitesse'],
                                    datasets: [{
                                        label: 'Attributs Physiques',
                                        data: [
                                            ";
                // line 256
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "niveauEndurance", [], "any", true, true, false, 256)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "niveauEndurance", [], "any", false, false, false, 256), 0)) : (0)), 2, ".", ""), "html", null, true);
                yield ",
                                            ";
                // line 257
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "forcePhysique", [], "any", true, true, false, 257)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "forcePhysique", [], "any", false, false, false, 257), 0)) : (0)), 2, ".", ""), "html", null, true);
                yield ",
                                            ";
                // line 258
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "vitesse", [], "any", true, true, false, 258)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "vitesse", [], "any", false, false, false, 258), 0)) : (0)), 2, ".", ""), "html", null, true);
                yield "
                                        ],
                                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                                        borderColor: 'rgba(54, 162, 235, 1)',
                                        borderWidth: 1,
                                        pointBackgroundColor: 'rgba(54, 162, 235, 1)',
                                        pointBorderColor: '#fff',
                                        pointHoverBackgroundColor: '#fff',
                                        pointHoverBorderColor: 'rgba(54, 162, 235, 1)'
                                    }]
                                },
                                options: {
                                    scales: {
                                        r: {
                                            angleLines: { display: true },
                                            suggestedMin: 0,
                                            suggestedMax: 10,
                                            ticks: { stepSize: 2, backdropColor: 'rgba(0, 0, 0, 0)' },
                                            grid: { color: 'rgba(0, 0, 0, 0.1)' }
                                        }
                                    },
                                    plugins: {
                                        legend: { display: false }
                                    }
                                }
                            });
                        } else if (!ctx";
                // line 284
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 284), "html", null, true);
                yield ") {
                            console.error('Canvas element radarChart-";
                // line 285
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 285), "html", null, true);
                yield " not found');
                        }
                    ";
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
            unset($context['_seq'], $context['_key'], $context['evaluation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 288
            yield "                });
            ";
        } else {
            // line 290
            yield "                console.log('No evaluations to display charts for');
            ";
        }
        // line 292
        yield "        });
    </script>
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
        return "joueur/show.html.twig";
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
        return array (  643 => 292,  639 => 290,  635 => 288,  618 => 285,  614 => 284,  585 => 258,  581 => 257,  577 => 256,  565 => 249,  559 => 248,  553 => 247,  542 => 246,  525 => 245,  522 => 244,  520 => 243,  514 => 240,  505 => 235,  492 => 234,  473 => 224,  469 => 222,  466 => 221,  452 => 220,  448 => 218,  446 => 217,  439 => 213,  432 => 209,  423 => 203,  416 => 199,  407 => 193,  400 => 189,  393 => 185,  390 => 184,  372 => 183,  370 => 182,  359 => 173,  355 => 171,  352 => 170,  338 => 169,  334 => 167,  332 => 166,  325 => 162,  316 => 156,  309 => 152,  300 => 146,  293 => 142,  286 => 138,  283 => 137,  265 => 136,  263 => 135,  248 => 123,  241 => 119,  232 => 113,  225 => 109,  216 => 103,  209 => 99,  200 => 93,  193 => 89,  184 => 83,  177 => 79,  170 => 74,  164 => 71,  161 => 70,  159 => 69,  150 => 63,  146 => 62,  142 => 61,  138 => 60,  133 => 58,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Joueurs /</span> Détails du Joueur
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
                            data-bs-target=\"#navs-justified-joueur\"
                            aria-controls=\"navs-justified-joueur\"
                            aria-selected=\"true\"
                        >
                            <i class=\"tf-icons bx bx-user\"></i> Joueur
                        </button>
                    </li>
                    <li class=\"nav-item\">
                        <button
                            type=\"button\"
                            class=\"nav-link\"
                            role=\"tab\"
                            data-bs-toggle=\"tab\"
                            data-bs-target=\"#navs-justified-evaluation\"
                            aria-controls=\"navs-justified-evaluation\"
                            aria-selected=\"false\"
                        >
                            <i class=\"tf-icons bx bx-heart\"></i> Évaluation Physique
                        </button>
                    </li>
                    <li class=\"nav-item\">
                        <button
                            type=\"button\"
                            class=\"nav-link\"
                            role=\"tab\"
                            data-bs-toggle=\"tab\"
                            data-bs-target=\"#navs-justified-performance\"
                            aria-controls=\"navs-justified-performance\"
                            aria-selected=\"false\"
                        >
                            <i class=\"tf-icons bx bx-football\"></i> Performance
                        </button>
                    </li>
                </ul>
                <div class=\"tab-content\">
                    <!-- Joueur Tab -->
                    <div class=\"tab-pane fade show active\" id=\"navs-justified-joueur\" role=\"tabpanel\">
                        <div class=\"card\">
                            <div class=\"card-header d-flex justify-content-between align-items-center\">
                                <h5 class=\"card-title mb-0\">Joueur #{{ joueur.idJoueur }}</h5>
                                <div>
                                    <a href=\"{{ path('joueur_edit', {'id': joueur.idJoueur}) }}\" class=\"btn btn-sm btn-primary\">Modifier</a>
                                    <a href=\"{{ path('joueur_main') }}\" class=\"btn btn-sm btn-secondary\">Retour à la liste</a>
                                    <form method=\"post\" action=\"{{ path('joueur_delete', {'id': joueur.idJoueur}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce joueur ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ joueur.idJoueur) }}\">
                                        <button class=\"btn btn-sm btn-danger\" type=\"submit\">Supprimer</button>
                                    </form>
                                </div>
                            </div>
                            <div class=\"card-body\">
                                {% if joueur.profilePictureUrl %}
                                    <div class=\"mb-3 text-center\">
                                        <img src=\"{{ joueur.profilePictureUrl }}\" alt=\"Photo de profil\" class=\"img-fluid rounded\" style=\"max-width: 200px;\">
                                    </div>
                                {% endif %}

                                <h5>Informations Générales</h5>
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <h6>Nom</h6>
                                        <p>{{ joueur.nom }}</p>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <h6>Prénom</h6>
                                        <p>{{ joueur.prenom }}</p>
                                    </div>
                                </div>
                                <div class=\"row mt-3\">
                                    <div class=\"col-md-6\">
                                        <h6>Date de Naissance</h6>
                                        <p>{{ joueur.dateNaissance|date('d/m/Y') }}</p>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <h6>Sport</h6>
                                        <p>{{ joueur.sport.nomSport|default('N/A') }}</p>
                                    </div>
                                </div>
                                <div class=\"row mt-3\">
                                    <div class=\"col-md-6\">
                                        <h6>Poste</h6>
                                        <p>{{ joueur.poste|default('Non spécifié') }}</p>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <h6>Statut</h6>
                                        <p>{{ joueur.statut|default('Non spécifié') }}</p>
                                    </div>
                                </div>
                                <div class=\"row mt-3\">
                                    <div class=\"col-md-6\">
                                        <h6>Taille</h6>
                                        <p>{{ joueur.taille ? (joueur.taille * 100)|number_format(0) ~ ' cm' : 'Non spécifié' }}</p>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <h6>Poids</h6>
                                        <p>{{ joueur.poids ? joueur.poids|number_format(0) ~ ' kg' : 'Non spécifié' }}</p>
                                    </div>
                                </div>
                                <div class=\"row mt-3\">
                                    <div class=\"col-md-6\">
                                        <h6>Email</h6>
                                        <p>{{ joueur.email|default('Non spécifié') }}</p>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <h6>Téléphone</h6>
                                        <p>{{ joueur.telephone|default('Non spécifié') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Évaluation Physique Tab -->
                    <div class=\"tab-pane fade\" id=\"navs-justified-evaluation\" role=\"tabpanel\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h5>Évaluations Physiques</h5>
                                {% if evaluations|length > 0 %}
                                    {% for evaluation in evaluations %}
                                        <div class=\"mb-4\">
                                            <h6>Évaluation du {{ evaluation.dateEvaluation|date('d/m/Y') }}</h6>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <h6>Niveau d'Endurance</h6>
                                                    <p>{{ evaluation.niveauEndurance|number_format(2, '.', ',') }}</p>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <h6>Force Physique</h6>
                                                    <p>{{ evaluation.forcePhysique|number_format(2, '.', ',') }}</p>
                                                </div>
                                            </div>
                                            <div class=\"row mt-3\">
                                                <div class=\"col-md-6\">
                                                    <h6>Vitesse</h6>
                                                    <p>{{ evaluation.vitesse|number_format(2, '.', ',') }}</p>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <h6>État de Blessure</h6>
                                                    <p>{{ evaluation.etatBlessure|default('N/A') }}</p>
                                                </div>
                                            </div>
                                            <div class=\"row mt-3\">
                                                <div class=\"col-md-12\">
                                                    <h6>Distribution des Attributs</h6>
                                                    <canvas id=\"radarChart-{{ loop.index }}\" style=\"max-width: 300px; max-height: 300px; margin: 0 auto;\"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        {% if not loop.last %}
                                            <hr class=\"my-4\">
                                        {% endif %}
                                    {% endfor %}
                                {% else %}
                                    <p>Aucune donnée d'évaluation physique disponible.</p>
                                {% endif %}
                            </div>
                        </div>
                    </div>

                    <!-- Performance Tab -->
                    <div class=\"tab-pane fade\" id=\"navs-justified-performance\" role=\"tabpanel\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <h5>Performances</h5>
                                {% if performances|length > 0 %}
                                    {% for performance in performances %}
                                        <div class=\"mb-4\">
                                            <h6>Performance de la saison {{ performance.saison }}</h6>
                                            <div class=\"row\">
                                                <div class=\"col-md-6\">
                                                    <h6>Nombre de Matches</h6>
                                                    <p>{{ performance.nombreMatches|default('N/A') }}</p>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <h6>Minutes Jouées</h6>
                                                    <p>{{ performance.minutesJouees|default('N/A') }}</p>
                                                </div>
                                            </div>
                                            <div class=\"row mt-3\">
                                                <div class=\"col-md-6\">
                                                    <h6>Buts Marqués</h6>
                                                    <p>{{ performance.butsMarques|default('0') }}</p>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <h6>Passes Décisives</h6>
                                                    <p>{{ performance.passesDecisives|default('0') }}</p>
                                                </div>
                                            </div>
                                            <div class=\"row mt-3\">
                                                <div class=\"col-md-6\">
                                                    <h6>Cartons Jaunes</h6>
                                                    <p>{{ performance.cartonsJaunes|default('0') }}</p>
                                                </div>
                                                <div class=\"col-md-6\">
                                                    <h6>Cartons Rouges</h6>
                                                    <p>{{ performance.cartonsRouges|default('0') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        {% if not loop.last %}
                                            <hr class=\"my-4\">
                                        {% endif %}
                                    {% endfor %}
                                {% else %}
                                    <p>Aucune donnée de performance disponible.</p>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / Filled Tabs -->
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js\"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            console.log('Evaluations count: {{ evaluations|length }}');
            const charts = {};

            {% if evaluations|length > 0 %}
                document.querySelector('button[data-bs-target=\"#navs-justified-evaluation\"]').addEventListener('shown.bs.tab', function () {
                    {% for evaluation in evaluations %}
                        console.log('Evaluation {{ loop.index }}: Endurance={{ evaluation.niveauEndurance|default(0) }}, Force={{ evaluation.forcePhysique|default(0) }}, Vitesse={{ evaluation.vitesse|default(0) }}');
                        const ctx{{ loop.index }} = document.getElementById('radarChart-{{ loop.index }}');
                        if (ctx{{ loop.index }} && !charts['radarChart-{{ loop.index }}']) {
                            charts['radarChart-{{ loop.index }}'] = new Chart(ctx{{ loop.index }}.getContext('2d'), {
                                type: 'radar',
                                data: {
                                    labels: ['Endurance', 'Force Physique', 'Vitesse'],
                                    datasets: [{
                                        label: 'Attributs Physiques',
                                        data: [
                                            {{ evaluation.niveauEndurance|default(0)|number_format(2, '.', '') }},
                                            {{ evaluation.forcePhysique|default(0)|number_format(2, '.', '') }},
                                            {{ evaluation.vitesse|default(0)|number_format(2, '.', '') }}
                                        ],
                                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                                        borderColor: 'rgba(54, 162, 235, 1)',
                                        borderWidth: 1,
                                        pointBackgroundColor: 'rgba(54, 162, 235, 1)',
                                        pointBorderColor: '#fff',
                                        pointHoverBackgroundColor: '#fff',
                                        pointHoverBorderColor: 'rgba(54, 162, 235, 1)'
                                    }]
                                },
                                options: {
                                    scales: {
                                        r: {
                                            angleLines: { display: true },
                                            suggestedMin: 0,
                                            suggestedMax: 10,
                                            ticks: { stepSize: 2, backdropColor: 'rgba(0, 0, 0, 0)' },
                                            grid: { color: 'rgba(0, 0, 0, 0.1)' }
                                        }
                                    },
                                    plugins: {
                                        legend: { display: false }
                                    }
                                }
                            });
                        } else if (!ctx{{ loop.index }}) {
                            console.error('Canvas element radarChart-{{ loop.index }} not found');
                        }
                    {% endfor %}
                });
            {% else %}
                console.log('No evaluations to display charts for');
            {% endif %}
        });
    </script>
{% endblock %}", "joueur/show.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\joueur\\show.html.twig");
    }
}
