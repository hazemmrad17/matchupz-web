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

/* joueur/new.html.twig */
class __TwigTemplate_44d14eaba54da91bfe762ae789b7f4ba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "joueur/new.html.twig", 1);
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
        yield from $this->loadTemplate("searchbar.html.twig", "joueur/new.html.twig", 3)->unwrap()->yield($context);
        
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
        yield "    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Joueurs /</span> Nouveau Joueur
            </h4>

            <div class=\"col-xl\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Ajouter un Nouveau Joueur</h5>
                        <small class=\"text-muted float-end\">Remplir les détails</small>
                    </div>
                    <div class=\"card-body\">
                        <!-- Toast container (positioned at top-right) -->
                        <div class=\"position-fixed top-0 end-0 p-3\" style=\"z-index: 1050;\" id=\"toast-container\"></div>

                        ";
        // line 22
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data", "id" => "playerForm", "novalidate" => "novalidate"]]);
        yield "
                            <!-- Existing Joueur fields (unchanged) -->
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_nom\">Nom</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                    ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom du joueur"]]);
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_prenom\">Prénom</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                    ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "prenom", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Prénom du joueur"]]);
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_dateNaissance\">Date de Naissance</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                    ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "dateNaissance", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_sport\">Sport</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-run\"></i></span>
                                    ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "sport", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_poste\">Poste</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-target-lock\"></i></span>
                                    ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "poste", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_taille\">Taille (m)</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-ruler\"></i></span>
                                    ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "taille", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 1.85"]]);
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_poids\">Poids (kg)</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-scale\"></i></span>
                                    ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "poids", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 75"]]);
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_email\">Email</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                                    ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "email", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "email@exemple.com"]]);
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_telephone\">Téléphone</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-phone\"></i></span>
                                    ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "telephone", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control phone-mask", "placeholder" => "Numéro de téléphone"]]);
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_statut\">Statut</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-id-card\"></i></span>
                                    ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "statut", [], "any", false, false, false, 91), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_profilePicture\">Photo de Profil</label>
                                ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "profilePicture", [], "any", false, false, false, 96), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>

                            <!-- Evaluation Physique Fields (unchanged) -->
                            <h5 class=\"mt-4\">Évaluation Physique</h5>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_evaluationPhysique_dateEvaluation\">Date d'Évaluation</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                    ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "evaluationPhysique", [], "any", false, false, false, 105), "dateEvaluation", [], "any", false, false, false, 105), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_evaluationPhysique_niveauEndurance\">Niveau d'Endurance (0-10)</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-heart\"></i></span>
                                    ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "evaluationPhysique", [], "any", false, false, false, 112), "niveauEndurance", [], "any", false, false, false, 112), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 8.5"]]);
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_evaluationPhysique_forcePhysique\">Force Physique (0-10)</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-dumbbell\"></i></span>
                                    ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "evaluationPhysique", [], "any", false, false, false, 119), "forcePhysique", [], "any", false, false, false, 119), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 7.0"]]);
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_evaluationPhysique_vitesse\">Vitesse (0-10)</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-run\"></i></span>
                                    ";
        // line 126
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "evaluationPhysique", [], "any", false, false, false, 126), "vitesse", [], "any", false, false, false, 126), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 9.0"]]);
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_evaluationPhysique_etatBlessure\">État de Blessure</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-band-aid\"></i></span>
                                    ";
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "evaluationPhysique", [], "any", false, false, false, 133), "etatBlessure", [], "any", false, false, false, 133), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: Aucun"]]);
        yield "
                                </div>
                            </div>

                            <!-- Performance Joueur Fields (unchanged) -->
                            <h5 class=\"mt-4\">Performance du Joueur</h5>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_performanceJoueur_saison\">Saison</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                    ";
        // line 143
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 143), "saison", [], "any", false, false, false, 143), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 2023-2024"]]);
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_performanceJoueur_nombreMatches\">Nombre de Matches</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-football\"></i></span>
                                    ";
        // line 150
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 150), "nombreMatches", [], "any", false, false, false, 150), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 10"]]);
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_performanceJoueur_minutesJouees\">Minutes Jouées</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-time\"></i></span>
                                    ";
        // line 157
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 157), "minutesJouees", [], "any", false, false, false, 157), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 900"]]);
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_performanceJoueur_butsMarques\">Buts Marqués</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-target-lock\"></i></span>
                                    ";
        // line 164
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 164), "butsMarques", [], "any", false, false, false, 164), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 5"]]);
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_performanceJoueur_passesDecisives\">Passes Décisives</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-target-lock\"></i></span>
                                    ";
        // line 171
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 171), "passesDecisives", [], "any", false, false, false, 171), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 3"]]);
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_performanceJoueur_cartonsJaunes\">Cartons Jaunes</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-card\"></i></span>
                                    ";
        // line 178
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 178), "cartonsJaunes", [], "any", false, false, false, 178), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 2"]]);
        yield "
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_performanceJoueur_cartonsRouges\">Cartons Rouges</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-card\"></i></span>
                                    ";
        // line 185
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 185), "cartonsRouges", [], "any", false, false, false, 185), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 0"]]);
        yield "
                                </div>
                            </div>

                            <button type=\"submit\" class=\"btn btn-primary\">Créer</button>
                            <a href=\"";
        // line 190
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_main");
        yield "\" class=\"btn btn-secondary\">Annuler</a>
                        ";
        // line 191
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('playerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const toastContainer = document.getElementById('toast-container');
            toastContainer.innerHTML = '';

            const nom = document.getElementById('joueur_nom')?.value.trim() || '';
            const prenom = document.getElementById('joueur_prenom')?.value.trim() || '';
            const dateNaissance = document.getElementById('joueur_dateNaissance')?.value || '';
            const sport = document.getElementById('joueur_sport')?.value || '';
            const poste = document.getElementById('joueur_poste')?.value || '';
            const taille = document.getElementById('joueur_taille')?.value.trim() || '';
            const poids = document.getElementById('joueur_poids')?.value.trim() || '';
            const email = document.getElementById('joueur_email')?.value.trim() || '';
            const telephone = document.getElementById('joueur_telephone')?.value.trim() || '';
            const statut = document.getElementById('joueur_statut')?.value || '';
            const profilePicture = document.getElementById('joueur_profilePicture')?.files[0];
            const dateEvaluation = document.getElementById('joueur_evaluationPhysique_dateEvaluation')?.value || '';
            const niveauEndurance = document.getElementById('joueur_evaluationPhysique_niveauEndurance')?.value.trim() || '';
            const forcePhysique = document.getElementById('joueur_evaluationPhysique_forcePhysique')?.value.trim() || '';
            const vitesse = document.getElementById('joueur_evaluationPhysique_vitesse')?.value.trim() || '';
            const etatBlessure = document.getElementById('joueur_evaluationPhysique_etatBlessure')?.value.trim() || '';
            const saison = document.getElementById('joueur_performanceJoueur_saison')?.value.trim() || '';
            const nombreMatches = document.getElementById('joueur_performanceJoueur_nombreMatches')?.value.trim() || '';
            const minutesJouees = document.getElementById('joueur_performanceJoueur_minutesJouees')?.value.trim() || '';
            const butsMarques = document.getElementById('joueur_performanceJoueur_butsMarques')?.value.trim() || '';
            const passesDecisives = document.getElementById('joueur_performanceJoueur_passesDecisives')?.value.trim() || '';
            const cartonsJaunes = document.getElementById('joueur_performanceJoueur_cartonsJaunes')?.value.trim() || '';
            const cartonsRouges = document.getElementById('joueur_performanceJoueur_cartonsRouges')?.value.trim() || '';

            // Joueur Fields Validation
            if (!nom) addToast('Erreur Nom', 'Le champ nom est vide.');
            else if (nom.length > 50) addToast('Erreur Nom', 'Le nom ne doit pas dépasser 50 caractères.');

            if (!prenom) addToast('Erreur Prénom', 'Le champ prénom est vide.');
            else if (prenom.length > 50) addToast('Erreur Prénom', 'Le prénom ne doit pas dépasser 50 caractères.');

            if (!dateNaissance) addToast('Erreur Date', 'Le champ date de naissance est vide.');
            else {
                const birthDate = new Date(dateNaissance);
                const today = new Date();
                if (birthDate > today) addToast('Erreur Date', 'La date de naissance ne peut pas être dans le futur.');
            }

            if (!sport) addToast('Erreur Sport', 'Le champ sport est vide.');

            if (!poste) addToast('Erreur Poste', 'Le champ poste est vide.');
            else if (!['GK','RB','LB','RWB','LWB','SW','DM','CM','AM','RM','LM','RW','LW','CF','ST','SS'].includes(poste)) addToast('Erreur Poste', 'Veuillez sélectionner un poste valide.');

            if (!taille) addToast('Erreur Taille', 'Le champ taille est vide.');
            else {
                const tailleNum = parseFloat(taille);
                if (isNaN(tailleNum) || tailleNum <= 0) addToast('Erreur Taille', 'La taille doit être un nombre positif.');
                else if (tailleNum > 3) addToast('Erreur Taille', 'La taille semble irréaliste (max 3m).');
            }

            if (!poids) addToast('Erreur Poids', 'Le champ poids est vide.');
            else {
                const poidsNum = parseFloat(poids);
                if (isNaN(poidsNum) || poidsNum <= 0) addToast('Erreur Poids', 'Le poids doit être un nombre positif.');
                else if (poidsNum > 500) addToast('Erreur Poids', 'Le poids semble irréaliste (max 500kg).');
            }

            if (!email) addToast('Erreur Email', 'Le champ email est vide.');
            else if (!isValidEmail(email)) addToast('Erreur Email', 'Veuillez entrer un email valide.');
            else if (email.length > 100) addToast('Erreur Email', 'L\\'email ne doit pas dépasser 100 caractères.');

            if (!telephone) addToast('Erreur Téléphone', 'Le champ téléphone est vide.');
            else if (!isValidPhone(telephone)) addToast('Erreur Téléphone', 'Veuillez entrer un numéro de téléphone valide.');
            else if (telephone.length > 20) addToast('Erreur Téléphone', 'Le numéro ne doit pas dépasser 20 caractères.');

            if (!statut) addToast('Erreur Statut', 'Le champ statut est vide.');
            else if (!['Actif','Blessé','Suspendu',''].includes(statut)) addToast('Erreur Statut', 'Veuillez sélectionner un statut valide.');

            if (!profilePicture) addToast('Erreur Photo', 'Le champ photo de profil est vide.');
            else {
                const validTypes = ['image/jpeg', 'image/png'];
                if (!validTypes.includes(profilePicture.type)) addToast('Erreur Photo', 'La photo doit être au format JPEG ou PNG.');
                if (profilePicture.size > 2 * 1024 * 1024) addToast('Erreur Photo', 'La photo ne doit pas dépasser 2Mo.');
            }

            // Evaluation Physique Fields Validation
            if (!dateEvaluation) addToast('Erreur Date Évaluation', 'Le champ date d\\'évaluation est vide.');
            else {
                const evalDate = new Date(dateEvaluation);
                const today = new Date();
                if (evalDate > today) addToast('Erreur Date Évaluation', 'La date d\\'évaluation ne peut pas être dans le futur.');
            }

            if (!niveauEndurance) addToast('Erreur Endurance', 'Le champ niveau d\\'endurance est vide.');
            else {
                const enduranceNum = parseFloat(niveauEndurance);
                if (isNaN(enduranceNum) || enduranceNum < 0 || enduranceNum > 10) addToast('Erreur Endurance', 'Le niveau d\\'endurance doit être entre 0 et 10.');
            }

            if (!forcePhysique) addToast('Erreur Force', 'Le champ force physique est vide.');
            else {
                const forceNum = parseFloat(forcePhysique);
                if (isNaN(forceNum) || forceNum < 0 || forceNum > 10) addToast('Erreur Force', 'La force physique doit être entre 0 et 10.');
            }

            if (!vitesse) addToast('Erreur Vitesse', 'Le champ vitesse est vide.');
            else {
                const vitesseNum = parseFloat(vitesse);
                if (isNaN(vitesseNum) || vitesseNum < 0 || vitesseNum > 10) addToast('Erreur Vitesse', 'La vitesse doit être entre 0 et 10.');
            }

            if (!etatBlessure) addToast('Erreur État Blessure', 'Le champ état de blessure est vide.');
            else if (etatBlessure.length > 255) addToast('Erreur État Blessure', 'L\\'état de blessure ne doit pas dépasser 255 caractères.');

            // Performance Joueur Fields Validation
            if (!saison) addToast('Erreur Saison', 'Le champ saison est vide.');
            else if (saison.length > 9) addToast('Erreur Saison', 'La saison ne doit pas dépasser 9 caractères (ex: 2023-2024).');

            if (!nombreMatches) addToast('Erreur Matches', 'Le champ nombre de matches est vide.');
            else if (isNaN(parseInt(nombreMatches)) || parseInt(nombreMatches) < 0) addToast('Erreur Matches', 'Le nombre de matches doit être un entier positif.');

            if (!minutesJouees) addToast('Erreur Minutes', 'Le champ minutes jouées est vide.');
            else if (isNaN(parseInt(minutesJouees)) || parseInt(minutesJouees) < 0) addToast('Erreur Minutes', 'Les minutes jouées doivent être un entier positif.');

            if (!butsMarques) addToast('Erreur Buts', 'Le champ buts marqués est vide.');
            else if (isNaN(parseInt(butsMarques)) || parseInt(butsMarques) < 0) addToast('Erreur Buts', 'Les buts marqués doivent être un entier positif.');

            if (!passesDecisives) addToast('Erreur Passes', 'Le champ passes décisives est vide.');
            else if (isNaN(parseInt(passesDecisives)) || parseInt(passesDecisives) < 0) addToast('Erreur Passes', 'Les passes décisives doivent être un entier positif.');

            if (!cartonsJaunes) addToast('Erreur Jaunes', 'Le champ cartons jaunes est vide.');
            else if (isNaN(parseInt(cartonsJaunes)) || parseInt(cartonsJaunes) < 0) addToast('Erreur Jaunes', 'Les cartons jaunes doivent être un entier positif.');

            if (!cartonsRouges) addToast('Erreur Rouges', 'Le champ cartons rouges est vide.');
            else if (isNaN(parseInt(cartonsRouges)) || parseInt(cartonsRouges) < 0) addToast('Erreur Rouges', 'Les cartons rouges doivent être un entier positif.');

            // Submit if no errors
            if (toastContainer.children.length === 0) {
                this.submit();
            } else {
                const toastElements = toastContainer.querySelectorAll('.toast');
                toastElements.forEach(toast => new bootstrap.Toast(toast, { autohide: true, delay: 5000 }).show());
            }
        });

        function addToast(title, message) {
            const toastContainer = document.getElementById('toast-container');
            const toastId = 'toast-' + Date.now();
            const toastHTML = `
                <div id=\"\${toastId}\" class=\"bs-toast toast fade bg-danger\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
                    <div class=\"toast-header\">
                        <i class=\"bx bx-bell me-2\"></i>
                        <div class=\"me-auto fw-semibold\">\${title}</div>
                        <small>Maintenant</small>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"toast-body\">\${message}</div>
                </div>
            `;
            toastContainer.innerHTML += toastHTML;
        }

        function isValidEmail(email) {
            const re = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
            return re.test(email);
        }

        function isValidPhone(phone) {
            const re = /^\\+?[\\d\\s-]{9,}\$/;
            return re.test(phone);
        }
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
        return "joueur/new.html.twig";
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
        return array (  364 => 191,  360 => 190,  352 => 185,  342 => 178,  332 => 171,  322 => 164,  312 => 157,  302 => 150,  292 => 143,  279 => 133,  269 => 126,  259 => 119,  249 => 112,  239 => 105,  227 => 96,  219 => 91,  209 => 84,  199 => 77,  189 => 70,  179 => 63,  169 => 56,  159 => 49,  149 => 42,  139 => 35,  129 => 28,  120 => 22,  102 => 6,  89 => 5,  77 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}
{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Joueurs /</span> Nouveau Joueur
            </h4>

            <div class=\"col-xl\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Ajouter un Nouveau Joueur</h5>
                        <small class=\"text-muted float-end\">Remplir les détails</small>
                    </div>
                    <div class=\"card-body\">
                        <!-- Toast container (positioned at top-right) -->
                        <div class=\"position-fixed top-0 end-0 p-3\" style=\"z-index: 1050;\" id=\"toast-container\"></div>

                        {{ form_start(form, {'attr': {'enctype': 'multipart/form-data', 'id': 'playerForm', 'novalidate': 'novalidate'}}) }}
                            <!-- Existing Joueur fields (unchanged) -->
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_nom\">Nom</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                    {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder': 'Nom du joueur'}}) }}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_prenom\">Prénom</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                    {{ form_widget(form.prenom, {'attr': {'class': 'form-control', 'placeholder': 'Prénom du joueur'}}) }}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_dateNaissance\">Date de Naissance</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                    {{ form_widget(form.dateNaissance, {'attr': {'class': 'form-control'}}) }}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_sport\">Sport</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-run\"></i></span>
                                    {{ form_widget(form.sport, {'attr': {'class': 'form-control'}}) }}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_poste\">Poste</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-target-lock\"></i></span>
                                    {{ form_widget(form.poste, {'attr': {'class': 'form-control'}}) }}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_taille\">Taille (m)</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-ruler\"></i></span>
                                    {{ form_widget(form.taille, {'attr': {'class': 'form-control', 'placeholder': 'ex: 1.85'}}) }}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_poids\">Poids (kg)</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-scale\"></i></span>
                                    {{ form_widget(form.poids, {'attr': {'class': 'form-control', 'placeholder': 'ex: 75'}}) }}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_email\">Email</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                                    {{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder': 'email@exemple.com'}}) }}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_telephone\">Téléphone</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-phone\"></i></span>
                                    {{ form_widget(form.telephone, {'attr': {'class': 'form-control phone-mask', 'placeholder': 'Numéro de téléphone'}}) }}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_statut\">Statut</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-id-card\"></i></span>
                                    {{ form_widget(form.statut, {'attr': {'class': 'form-control'}}) }}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_profilePicture\">Photo de Profil</label>
                                {{ form_widget(form.profilePicture, {'attr': {'class': 'form-control'}}) }}
                            </div>

                            <!-- Evaluation Physique Fields (unchanged) -->
                            <h5 class=\"mt-4\">Évaluation Physique</h5>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_evaluationPhysique_dateEvaluation\">Date d'Évaluation</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                    {{ form_widget(form.evaluationPhysique.dateEvaluation, {'attr': {'class': 'form-control'}}) }}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_evaluationPhysique_niveauEndurance\">Niveau d'Endurance (0-10)</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-heart\"></i></span>
                                    {{ form_widget(form.evaluationPhysique.niveauEndurance, {'attr': {'class': 'form-control', 'placeholder': 'ex: 8.5'}}) }}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_evaluationPhysique_forcePhysique\">Force Physique (0-10)</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-dumbbell\"></i></span>
                                    {{ form_widget(form.evaluationPhysique.forcePhysique, {'attr': {'class': 'form-control', 'placeholder': 'ex: 7.0'}}) }}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_evaluationPhysique_vitesse\">Vitesse (0-10)</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-run\"></i></span>
                                    {{ form_widget(form.evaluationPhysique.vitesse, {'attr': {'class': 'form-control', 'placeholder': 'ex: 9.0'}}) }}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_evaluationPhysique_etatBlessure\">État de Blessure</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-band-aid\"></i></span>
                                    {{ form_widget(form.evaluationPhysique.etatBlessure, {'attr': {'class': 'form-control', 'placeholder': 'ex: Aucun'}}) }}
                                </div>
                            </div>

                            <!-- Performance Joueur Fields (unchanged) -->
                            <h5 class=\"mt-4\">Performance du Joueur</h5>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_performanceJoueur_saison\">Saison</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                    {{ form_widget(form.performanceJoueur.saison, {'attr': {'class': 'form-control', 'placeholder': 'ex: 2023-2024'}}) }}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_performanceJoueur_nombreMatches\">Nombre de Matches</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-football\"></i></span>
                                    {{ form_widget(form.performanceJoueur.nombreMatches, {'attr': {'class': 'form-control', 'placeholder': 'ex: 10'}}) }}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_performanceJoueur_minutesJouees\">Minutes Jouées</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-time\"></i></span>
                                    {{ form_widget(form.performanceJoueur.minutesJouees, {'attr': {'class': 'form-control', 'placeholder': 'ex: 900'}}) }}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_performanceJoueur_butsMarques\">Buts Marqués</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-target-lock\"></i></span>
                                    {{ form_widget(form.performanceJoueur.butsMarques, {'attr': {'class': 'form-control', 'placeholder': 'ex: 5'}}) }}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_performanceJoueur_passesDecisives\">Passes Décisives</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-target-lock\"></i></span>
                                    {{ form_widget(form.performanceJoueur.passesDecisives, {'attr': {'class': 'form-control', 'placeholder': 'ex: 3'}}) }}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_performanceJoueur_cartonsJaunes\">Cartons Jaunes</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-card\"></i></span>
                                    {{ form_widget(form.performanceJoueur.cartonsJaunes, {'attr': {'class': 'form-control', 'placeholder': 'ex: 2'}}) }}
                                </div>
                            </div>
                            <div class=\"mb-3\">
                                <label class=\"form-label\" for=\"joueur_performanceJoueur_cartonsRouges\">Cartons Rouges</label>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-card\"></i></span>
                                    {{ form_widget(form.performanceJoueur.cartonsRouges, {'attr': {'class': 'form-control', 'placeholder': 'ex: 0'}}) }}
                                </div>
                            </div>

                            <button type=\"submit\" class=\"btn btn-primary\">Créer</button>
                            <a href=\"{{ path('joueur_main') }}\" class=\"btn btn-secondary\">Annuler</a>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('playerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const toastContainer = document.getElementById('toast-container');
            toastContainer.innerHTML = '';

            const nom = document.getElementById('joueur_nom')?.value.trim() || '';
            const prenom = document.getElementById('joueur_prenom')?.value.trim() || '';
            const dateNaissance = document.getElementById('joueur_dateNaissance')?.value || '';
            const sport = document.getElementById('joueur_sport')?.value || '';
            const poste = document.getElementById('joueur_poste')?.value || '';
            const taille = document.getElementById('joueur_taille')?.value.trim() || '';
            const poids = document.getElementById('joueur_poids')?.value.trim() || '';
            const email = document.getElementById('joueur_email')?.value.trim() || '';
            const telephone = document.getElementById('joueur_telephone')?.value.trim() || '';
            const statut = document.getElementById('joueur_statut')?.value || '';
            const profilePicture = document.getElementById('joueur_profilePicture')?.files[0];
            const dateEvaluation = document.getElementById('joueur_evaluationPhysique_dateEvaluation')?.value || '';
            const niveauEndurance = document.getElementById('joueur_evaluationPhysique_niveauEndurance')?.value.trim() || '';
            const forcePhysique = document.getElementById('joueur_evaluationPhysique_forcePhysique')?.value.trim() || '';
            const vitesse = document.getElementById('joueur_evaluationPhysique_vitesse')?.value.trim() || '';
            const etatBlessure = document.getElementById('joueur_evaluationPhysique_etatBlessure')?.value.trim() || '';
            const saison = document.getElementById('joueur_performanceJoueur_saison')?.value.trim() || '';
            const nombreMatches = document.getElementById('joueur_performanceJoueur_nombreMatches')?.value.trim() || '';
            const minutesJouees = document.getElementById('joueur_performanceJoueur_minutesJouees')?.value.trim() || '';
            const butsMarques = document.getElementById('joueur_performanceJoueur_butsMarques')?.value.trim() || '';
            const passesDecisives = document.getElementById('joueur_performanceJoueur_passesDecisives')?.value.trim() || '';
            const cartonsJaunes = document.getElementById('joueur_performanceJoueur_cartonsJaunes')?.value.trim() || '';
            const cartonsRouges = document.getElementById('joueur_performanceJoueur_cartonsRouges')?.value.trim() || '';

            // Joueur Fields Validation
            if (!nom) addToast('Erreur Nom', 'Le champ nom est vide.');
            else if (nom.length > 50) addToast('Erreur Nom', 'Le nom ne doit pas dépasser 50 caractères.');

            if (!prenom) addToast('Erreur Prénom', 'Le champ prénom est vide.');
            else if (prenom.length > 50) addToast('Erreur Prénom', 'Le prénom ne doit pas dépasser 50 caractères.');

            if (!dateNaissance) addToast('Erreur Date', 'Le champ date de naissance est vide.');
            else {
                const birthDate = new Date(dateNaissance);
                const today = new Date();
                if (birthDate > today) addToast('Erreur Date', 'La date de naissance ne peut pas être dans le futur.');
            }

            if (!sport) addToast('Erreur Sport', 'Le champ sport est vide.');

            if (!poste) addToast('Erreur Poste', 'Le champ poste est vide.');
            else if (!['GK','RB','LB','RWB','LWB','SW','DM','CM','AM','RM','LM','RW','LW','CF','ST','SS'].includes(poste)) addToast('Erreur Poste', 'Veuillez sélectionner un poste valide.');

            if (!taille) addToast('Erreur Taille', 'Le champ taille est vide.');
            else {
                const tailleNum = parseFloat(taille);
                if (isNaN(tailleNum) || tailleNum <= 0) addToast('Erreur Taille', 'La taille doit être un nombre positif.');
                else if (tailleNum > 3) addToast('Erreur Taille', 'La taille semble irréaliste (max 3m).');
            }

            if (!poids) addToast('Erreur Poids', 'Le champ poids est vide.');
            else {
                const poidsNum = parseFloat(poids);
                if (isNaN(poidsNum) || poidsNum <= 0) addToast('Erreur Poids', 'Le poids doit être un nombre positif.');
                else if (poidsNum > 500) addToast('Erreur Poids', 'Le poids semble irréaliste (max 500kg).');
            }

            if (!email) addToast('Erreur Email', 'Le champ email est vide.');
            else if (!isValidEmail(email)) addToast('Erreur Email', 'Veuillez entrer un email valide.');
            else if (email.length > 100) addToast('Erreur Email', 'L\\'email ne doit pas dépasser 100 caractères.');

            if (!telephone) addToast('Erreur Téléphone', 'Le champ téléphone est vide.');
            else if (!isValidPhone(telephone)) addToast('Erreur Téléphone', 'Veuillez entrer un numéro de téléphone valide.');
            else if (telephone.length > 20) addToast('Erreur Téléphone', 'Le numéro ne doit pas dépasser 20 caractères.');

            if (!statut) addToast('Erreur Statut', 'Le champ statut est vide.');
            else if (!['Actif','Blessé','Suspendu',''].includes(statut)) addToast('Erreur Statut', 'Veuillez sélectionner un statut valide.');

            if (!profilePicture) addToast('Erreur Photo', 'Le champ photo de profil est vide.');
            else {
                const validTypes = ['image/jpeg', 'image/png'];
                if (!validTypes.includes(profilePicture.type)) addToast('Erreur Photo', 'La photo doit être au format JPEG ou PNG.');
                if (profilePicture.size > 2 * 1024 * 1024) addToast('Erreur Photo', 'La photo ne doit pas dépasser 2Mo.');
            }

            // Evaluation Physique Fields Validation
            if (!dateEvaluation) addToast('Erreur Date Évaluation', 'Le champ date d\\'évaluation est vide.');
            else {
                const evalDate = new Date(dateEvaluation);
                const today = new Date();
                if (evalDate > today) addToast('Erreur Date Évaluation', 'La date d\\'évaluation ne peut pas être dans le futur.');
            }

            if (!niveauEndurance) addToast('Erreur Endurance', 'Le champ niveau d\\'endurance est vide.');
            else {
                const enduranceNum = parseFloat(niveauEndurance);
                if (isNaN(enduranceNum) || enduranceNum < 0 || enduranceNum > 10) addToast('Erreur Endurance', 'Le niveau d\\'endurance doit être entre 0 et 10.');
            }

            if (!forcePhysique) addToast('Erreur Force', 'Le champ force physique est vide.');
            else {
                const forceNum = parseFloat(forcePhysique);
                if (isNaN(forceNum) || forceNum < 0 || forceNum > 10) addToast('Erreur Force', 'La force physique doit être entre 0 et 10.');
            }

            if (!vitesse) addToast('Erreur Vitesse', 'Le champ vitesse est vide.');
            else {
                const vitesseNum = parseFloat(vitesse);
                if (isNaN(vitesseNum) || vitesseNum < 0 || vitesseNum > 10) addToast('Erreur Vitesse', 'La vitesse doit être entre 0 et 10.');
            }

            if (!etatBlessure) addToast('Erreur État Blessure', 'Le champ état de blessure est vide.');
            else if (etatBlessure.length > 255) addToast('Erreur État Blessure', 'L\\'état de blessure ne doit pas dépasser 255 caractères.');

            // Performance Joueur Fields Validation
            if (!saison) addToast('Erreur Saison', 'Le champ saison est vide.');
            else if (saison.length > 9) addToast('Erreur Saison', 'La saison ne doit pas dépasser 9 caractères (ex: 2023-2024).');

            if (!nombreMatches) addToast('Erreur Matches', 'Le champ nombre de matches est vide.');
            else if (isNaN(parseInt(nombreMatches)) || parseInt(nombreMatches) < 0) addToast('Erreur Matches', 'Le nombre de matches doit être un entier positif.');

            if (!minutesJouees) addToast('Erreur Minutes', 'Le champ minutes jouées est vide.');
            else if (isNaN(parseInt(minutesJouees)) || parseInt(minutesJouees) < 0) addToast('Erreur Minutes', 'Les minutes jouées doivent être un entier positif.');

            if (!butsMarques) addToast('Erreur Buts', 'Le champ buts marqués est vide.');
            else if (isNaN(parseInt(butsMarques)) || parseInt(butsMarques) < 0) addToast('Erreur Buts', 'Les buts marqués doivent être un entier positif.');

            if (!passesDecisives) addToast('Erreur Passes', 'Le champ passes décisives est vide.');
            else if (isNaN(parseInt(passesDecisives)) || parseInt(passesDecisives) < 0) addToast('Erreur Passes', 'Les passes décisives doivent être un entier positif.');

            if (!cartonsJaunes) addToast('Erreur Jaunes', 'Le champ cartons jaunes est vide.');
            else if (isNaN(parseInt(cartonsJaunes)) || parseInt(cartonsJaunes) < 0) addToast('Erreur Jaunes', 'Les cartons jaunes doivent être un entier positif.');

            if (!cartonsRouges) addToast('Erreur Rouges', 'Le champ cartons rouges est vide.');
            else if (isNaN(parseInt(cartonsRouges)) || parseInt(cartonsRouges) < 0) addToast('Erreur Rouges', 'Les cartons rouges doivent être un entier positif.');

            // Submit if no errors
            if (toastContainer.children.length === 0) {
                this.submit();
            } else {
                const toastElements = toastContainer.querySelectorAll('.toast');
                toastElements.forEach(toast => new bootstrap.Toast(toast, { autohide: true, delay: 5000 }).show());
            }
        });

        function addToast(title, message) {
            const toastContainer = document.getElementById('toast-container');
            const toastId = 'toast-' + Date.now();
            const toastHTML = `
                <div id=\"\${toastId}\" class=\"bs-toast toast fade bg-danger\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
                    <div class=\"toast-header\">
                        <i class=\"bx bx-bell me-2\"></i>
                        <div class=\"me-auto fw-semibold\">\${title}</div>
                        <small>Maintenant</small>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"toast-body\">\${message}</div>
                </div>
            `;
            toastContainer.innerHTML += toastHTML;
        }

        function isValidEmail(email) {
            const re = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
            return re.test(email);
        }

        function isValidPhone(phone) {
            const re = /^\\+?[\\d\\s-]{9,}\$/;
            return re.test(phone);
        }
    </script>
{% endblock %}", "joueur/new.html.twig", "C:\\Users\\ibtis\\Downloads\\matchupz-web-joueur\\matchupz-web-joueur\\templates\\joueur\\new.html.twig");
    }
}
