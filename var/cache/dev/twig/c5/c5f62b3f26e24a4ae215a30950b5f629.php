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
class __TwigTemplate_d462ae8f982e33bb6b896900e1cf459a extends Template
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

    // line 3
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

        // line 4
        yield "    ";
        yield from $this->loadTemplate("searchbar.html.twig", "evaluation_physique/by_joueur.html.twig", 4)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        yield "Évaluations de ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 7, $this->source); })()), "nom", [], "any", false, false, false, 7), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 7, $this->source); })()), "prenom", [], "any", false, false, false, 7), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
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

        // line 10
        yield "    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            ";
        // line 13
        yield "            <div class=\"card mb-4\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <h5>Profil de ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 15, $this->source); })()), "prenom", [], "any", false, false, false, 15), "html", null, true);
        yield "</h5>
                    <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_physique_new");
        yield "\" class=\"btn btn-primary\">Nouvelle Évaluation</a>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <img src=\"";
        // line 21
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 21, $this->source); })()), "profilePictureUrl", [], "any", false, false, false, 21)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 21, $this->source); })()), "profilePictureUrl", [], "any", false, false, false, 21), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-player.jpg"), "html", null, true)));
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), "html", null, true);
        yield "\" class=\"img-fluid rounded-circle\" style=\"width: 150px; height: 150px;\">
                        </div>
                        <div class=\"col-md-8\">
                            <p><strong>Position:</strong> ";
        // line 24
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["joueur"] ?? null), "poste", [], "any", true, true, false, 24) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 24, $this->source); })()), "poste", [], "any", false, false, false, 24)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 24, $this->source); })()), "poste", [], "any", false, false, false, 24), "html", null, true)) : ("N/A"));
        yield "</p>
                            <p><strong>Taille:</strong> ";
        // line 25
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["anthropometry"]) || array_key_exists("anthropometry", $context) ? $context["anthropometry"] : (function () { throw new RuntimeError('Variable "anthropometry" does not exist.', 25, $this->source); })()), "height", [], "any", false, false, false, 25)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["anthropometry"]) || array_key_exists("anthropometry", $context) ? $context["anthropometry"] : (function () { throw new RuntimeError('Variable "anthropometry" does not exist.', 25, $this->source); })()), "height", [], "any", false, false, false, 25) . " cm"), "html", null, true)) : ("N/A"));
        yield "</p>
                            <p><strong>Poids:</strong> ";
        // line 26
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["anthropometry"]) || array_key_exists("anthropometry", $context) ? $context["anthropometry"] : (function () { throw new RuntimeError('Variable "anthropometry" does not exist.', 26, $this->source); })()), "weight", [], "any", false, false, false, 26)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["anthropometry"]) || array_key_exists("anthropometry", $context) ? $context["anthropometry"] : (function () { throw new RuntimeError('Variable "anthropometry" does not exist.', 26, $this->source); })()), "weight", [], "any", false, false, false, 26) . " kg"), "html", null, true)) : ("N/A"));
        yield "</p>
                            <p><strong>Âge:</strong> ";
        // line 27
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 27, $this->source); })()), "dateNaissance", [], "any", false, false, false, 27)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y") - $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 27, $this->source); })()), "dateNaissance", [], "any", false, false, false, 27), "Y")) . " ans"), "html", null, true)) : ("N/A"));
        yield "</p>
                            <p><strong>Email:</strong> ";
        // line 28
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["joueur"] ?? null), "email", [], "any", true, true, false, 28) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), "html", null, true)) : ("N/A"));
        yield "</p>
                            <p><strong>Téléphone:</strong> ";
        // line 29
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["joueur"] ?? null), "telephone", [], "any", true, true, false, 29) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 29, $this->source); })()), "telephone", [], "any", false, false, false, 29)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 29, $this->source); })()), "telephone", [], "any", false, false, false, 29), "html", null, true)) : ("N/A"));
        yield "</p>
                            <p><strong>Statut:</strong> ";
        // line 30
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["joueur"] ?? null), "statut", [], "any", true, true, false, 30) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 30, $this->source); })()), "statut", [], "any", false, false, false, 30)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["joueur"]) || array_key_exists("joueur", $context) ? $context["joueur"] : (function () { throw new RuntimeError('Variable "joueur" does not exist.', 30, $this->source); })()), "statut", [], "any", false, false, false, 30), "html", null, true)) : ("N/A"));
        yield "</p>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 37
        yield "            <div class=\"card mb-4\">
                <h5 class=\"card-header\">Anthropométrie</h5>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <p><strong>Masse Grasse:</strong> ";
        // line 42
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["anthropometry"]) || array_key_exists("anthropometry", $context) ? $context["anthropometry"] : (function () { throw new RuntimeError('Variable "anthropometry" does not exist.', 42, $this->source); })()), "fat_mass", [], "any", false, false, false, 42)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["anthropometry"]) || array_key_exists("anthropometry", $context) ? $context["anthropometry"] : (function () { throw new RuntimeError('Variable "anthropometry" does not exist.', 42, $this->source); })()), "fat_mass", [], "any", false, false, false, 42) . "%"), "html", null, true)) : ("N/A"));
        yield "</p>
                            <p><strong>Bicipital:</strong> ";
        // line 43
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["anthropometry"]) || array_key_exists("anthropometry", $context) ? $context["anthropometry"] : (function () { throw new RuntimeError('Variable "anthropometry" does not exist.', 43, $this->source); })()), "bicipital", [], "any", false, false, false, 43)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["anthropometry"]) || array_key_exists("anthropometry", $context) ? $context["anthropometry"] : (function () { throw new RuntimeError('Variable "anthropometry" does not exist.', 43, $this->source); })()), "bicipital", [], "any", false, false, false, 43) . " cm"), "html", null, true)) : ("N/A"));
        yield "</p>
                            <p><strong>Tricipital:</strong> ";
        // line 44
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["anthropometry"]) || array_key_exists("anthropometry", $context) ? $context["anthropometry"] : (function () { throw new RuntimeError('Variable "anthropometry" does not exist.', 44, $this->source); })()), "tricipital", [], "any", false, false, false, 44)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["anthropometry"]) || array_key_exists("anthropometry", $context) ? $context["anthropometry"] : (function () { throw new RuntimeError('Variable "anthropometry" does not exist.', 44, $this->source); })()), "tricipital", [], "any", false, false, false, 44) . " cm"), "html", null, true)) : ("N/A"));
        yield "</p>
                        </div>
                        <div class=\"col-md-6\">
                            <p><strong>Quadricipital (Droit):</strong> ";
        // line 47
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["anthropometry"]) || array_key_exists("anthropometry", $context) ? $context["anthropometry"] : (function () { throw new RuntimeError('Variable "anthropometry" does not exist.', 47, $this->source); })()), "quadricipital_right", [], "any", false, false, false, 47)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["anthropometry"]) || array_key_exists("anthropometry", $context) ? $context["anthropometry"] : (function () { throw new RuntimeError('Variable "anthropometry" does not exist.', 47, $this->source); })()), "quadricipital_right", [], "any", false, false, false, 47) . " cm"), "html", null, true)) : ("N/A"));
        yield "</p>
                            <p><strong>Géminal (Droit):</strong> ";
        // line 48
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["anthropometry"]) || array_key_exists("anthropometry", $context) ? $context["anthropometry"] : (function () { throw new RuntimeError('Variable "anthropometry" does not exist.', 48, $this->source); })()), "geminal_right", [], "any", false, false, false, 48)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["anthropometry"]) || array_key_exists("anthropometry", $context) ? $context["anthropometry"] : (function () { throw new RuntimeError('Variable "anthropometry" does not exist.', 48, $this->source); })()), "geminal_right", [], "any", false, false, false, 48) . " cm"), "html", null, true)) : ("N/A"));
        yield "</p>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 55
        yield "            <div class=\"card mb-4\">
                <h5 class=\"card-header\">Flexibilité et Mobilité</h5>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <h6>Flexibilité de la Chaîne Postérieure (cm)</h6>
                            ";
        // line 61
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["flexibility_data"]) || array_key_exists("flexibility_data", $context) ? $context["flexibility_data"] : (function () { throw new RuntimeError('Variable "flexibility_data" does not exist.', 61, $this->source); })()), "rear_chain", [], "any", false, false, false, 61), "ev1", [], "any", false, false, false, 61))) {
            // line 62
            yield "                                <div class=\"progress mb-2\">
                                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: ";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["flexibility_data"]) || array_key_exists("flexibility_data", $context) ? $context["flexibility_data"] : (function () { throw new RuntimeError('Variable "flexibility_data" does not exist.', 63, $this->source); })()), "rear_chain", [], "any", false, false, false, 63), "ev1", [], "any", false, false, false, 63), "html", null, true);
            yield "%\" aria-valuenow=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["flexibility_data"]) || array_key_exists("flexibility_data", $context) ? $context["flexibility_data"] : (function () { throw new RuntimeError('Variable "flexibility_data" does not exist.', 63, $this->source); })()), "rear_chain", [], "any", false, false, false, 63), "ev1", [], "any", false, false, false, 63), "html", null, true);
            yield "\" aria-valuemin=\"0\" aria-valuemax=\"60\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["flexibility_data"]) || array_key_exists("flexibility_data", $context) ? $context["flexibility_data"] : (function () { throw new RuntimeError('Variable "flexibility_data" does not exist.', 63, $this->source); })()), "rear_chain", [], "any", false, false, false, 63), "ev1", [], "any", false, false, false, 63), "html", null, true);
            yield " cm</div>
                                </div>
                            ";
        } else {
            // line 66
            yield "                                <p>EV1: N/A</p>
                            ";
        }
        // line 68
        yield "                            ";
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["flexibility_data"]) || array_key_exists("flexibility_data", $context) ? $context["flexibility_data"] : (function () { throw new RuntimeError('Variable "flexibility_data" does not exist.', 68, $this->source); })()), "rear_chain", [], "any", false, false, false, 68), "ev2", [], "any", false, false, false, 68))) {
            // line 69
            yield "                                <div class=\"progress mb-2\">
                                    <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["flexibility_data"]) || array_key_exists("flexibility_data", $context) ? $context["flexibility_data"] : (function () { throw new RuntimeError('Variable "flexibility_data" does not exist.', 70, $this->source); })()), "rear_chain", [], "any", false, false, false, 70), "ev2", [], "any", false, false, false, 70), "html", null, true);
            yield "%\" aria-valuenow=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["flexibility_data"]) || array_key_exists("flexibility_data", $context) ? $context["flexibility_data"] : (function () { throw new RuntimeError('Variable "flexibility_data" does not exist.', 70, $this->source); })()), "rear_chain", [], "any", false, false, false, 70), "ev2", [], "any", false, false, false, 70), "html", null, true);
            yield "\" aria-valuemin=\"0\" aria-valuemax=\"60\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["flexibility_data"]) || array_key_exists("flexibility_data", $context) ? $context["flexibility_data"] : (function () { throw new RuntimeError('Variable "flexibility_data" does not exist.', 70, $this->source); })()), "rear_chain", [], "any", false, false, false, 70), "ev2", [], "any", false, false, false, 70), "html", null, true);
            yield " cm</div>
                                </div>
                            ";
        } else {
            // line 73
            yield "                                <p>EV2: N/A</p>
                            ";
        }
        // line 75
        yield "                            ";
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["flexibility_data"]) || array_key_exists("flexibility_data", $context) ? $context["flexibility_data"] : (function () { throw new RuntimeError('Variable "flexibility_data" does not exist.', 75, $this->source); })()), "rear_chain", [], "any", false, false, false, 75), "avg", [], "any", false, false, false, 75))) {
            // line 76
            yield "                                <div class=\"progress\">
                                    <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: ";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["flexibility_data"]) || array_key_exists("flexibility_data", $context) ? $context["flexibility_data"] : (function () { throw new RuntimeError('Variable "flexibility_data" does not exist.', 77, $this->source); })()), "rear_chain", [], "any", false, false, false, 77), "avg", [], "any", false, false, false, 77), "html", null, true);
            yield "%\" aria-valuenow=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["flexibility_data"]) || array_key_exists("flexibility_data", $context) ? $context["flexibility_data"] : (function () { throw new RuntimeError('Variable "flexibility_data" does not exist.', 77, $this->source); })()), "rear_chain", [], "any", false, false, false, 77), "avg", [], "any", false, false, false, 77), "html", null, true);
            yield "\" aria-valuemin=\"0\" aria-valuemax=\"60\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["flexibility_data"]) || array_key_exists("flexibility_data", $context) ? $context["flexibility_data"] : (function () { throw new RuntimeError('Variable "flexibility_data" does not exist.', 77, $this->source); })()), "rear_chain", [], "any", false, false, false, 77), "avg", [], "any", false, false, false, 77), "html", null, true);
            yield " cm (Moyenne)</div>
                                </div>
                            ";
        } else {
            // line 80
            yield "                                <p>Moyenne: N/A</p>
                            ";
        }
        // line 82
        yield "                        </div>
                        <div class=\"col-md-6\">
                            <h6>Tests de Mobilité</h6>
                            <p><strong>Adducteurs:</strong>
                                <span class=\"badge ";
        // line 86
        yield (( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["flexibility_data"]) || array_key_exists("flexibility_data", $context) ? $context["flexibility_data"] : (function () { throw new RuntimeError('Variable "flexibility_data" does not exist.', 86, $this->source); })()), "adductors", [], "any", false, false, false, 86), "ev1", [], "any", false, false, false, 86))) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["flexibility_data"]) || array_key_exists("flexibility_data", $context) ? $context["flexibility_data"] : (function () { throw new RuntimeError('Variable "flexibility_data" does not exist.', 86, $this->source); })()), "adductors", [], "any", false, false, false, 86), "ev1", [], "any", false, false, false, 86)) ? ("bg-success") : ("bg-danger"))) : ("bg-secondary"));
        yield "\">";
        yield (( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["flexibility_data"]) || array_key_exists("flexibility_data", $context) ? $context["flexibility_data"] : (function () { throw new RuntimeError('Variable "flexibility_data" does not exist.', 86, $this->source); })()), "adductors", [], "any", false, false, false, 86), "ev1", [], "any", false, false, false, 86))) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["flexibility_data"]) || array_key_exists("flexibility_data", $context) ? $context["flexibility_data"] : (function () { throw new RuntimeError('Variable "flexibility_data" does not exist.', 86, $this->source); })()), "adductors", [], "any", false, false, false, 86), "ev1", [], "any", false, false, false, 86)) ? ("Passé") : ("Échoué"))) : ("N/A"));
        yield "</span>
                                <span class=\"badge ";
        // line 87
        yield (( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["flexibility_data"]) || array_key_exists("flexibility_data", $context) ? $context["flexibility_data"] : (function () { throw new RuntimeError('Variable "flexibility_data" does not exist.', 87, $this->source); })()), "adductors", [], "any", false, false, false, 87), "ev2", [], "any", false, false, false, 87))) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["flexibility_data"]) || array_key_exists("flexibility_data", $context) ? $context["flexibility_data"] : (function () { throw new RuntimeError('Variable "flexibility_data" does not exist.', 87, $this->source); })()), "adductors", [], "any", false, false, false, 87), "ev2", [], "any", false, false, false, 87)) ? ("bg-success") : ("bg-danger"))) : ("bg-secondary"));
        yield "\">";
        yield (( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["flexibility_data"]) || array_key_exists("flexibility_data", $context) ? $context["flexibility_data"] : (function () { throw new RuntimeError('Variable "flexibility_data" does not exist.', 87, $this->source); })()), "adductors", [], "any", false, false, false, 87), "ev2", [], "any", false, false, false, 87))) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["flexibility_data"]) || array_key_exists("flexibility_data", $context) ? $context["flexibility_data"] : (function () { throw new RuntimeError('Variable "flexibility_data" does not exist.', 87, $this->source); })()), "adductors", [], "any", false, false, false, 87), "ev2", [], "any", false, false, false, 87)) ? ("Passé") : ("Échoué"))) : ("N/A"));
        yield "</span>
                            </p>
                            <p><strong>Active Straight Leg Raise:</strong>
                                <span class=\"badge ";
        // line 90
        yield (( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["flexibility_data"]) || array_key_exists("flexibility_data", $context) ? $context["flexibility_data"] : (function () { throw new RuntimeError('Variable "flexibility_data" does not exist.', 90, $this->source); })()), "mobility_active_straight_leg_raise", [], "any", false, false, false, 90), "ev1", [], "any", false, false, false, 90))) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["flexibility_data"]) || array_key_exists("flexibility_data", $context) ? $context["flexibility_data"] : (function () { throw new RuntimeError('Variable "flexibility_data" does not exist.', 90, $this->source); })()), "mobility_active_straight_leg_raise", [], "any", false, false, false, 90), "ev1", [], "any", false, false, false, 90)) ? ("bg-success") : ("bg-danger"))) : ("bg-secondary"));
        yield "\">";
        yield (( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["flexibility_data"]) || array_key_exists("flexibility_data", $context) ? $context["flexibility_data"] : (function () { throw new RuntimeError('Variable "flexibility_data" does not exist.', 90, $this->source); })()), "mobility_active_straight_leg_raise", [], "any", false, false, false, 90), "ev1", [], "any", false, false, false, 90))) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["flexibility_data"]) || array_key_exists("flexibility_data", $context) ? $context["flexibility_data"] : (function () { throw new RuntimeError('Variable "flexibility_data" does not exist.', 90, $this->source); })()), "mobility_active_straight_leg_raise", [], "any", false, false, false, 90), "ev1", [], "any", false, false, false, 90)) ? ("Passé") : ("Échoué"))) : ("N/A"));
        yield "</span>
                                <span class=\"badge ";
        // line 91
        yield (( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["flexibility_data"]) || array_key_exists("flexibility_data", $context) ? $context["flexibility_data"] : (function () { throw new RuntimeError('Variable "flexibility_data" does not exist.', 91, $this->source); })()), "mobility_active_straight_leg_raise", [], "any", false, false, false, 91), "ev2", [], "any", false, false, false, 91))) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["flexibility_data"]) || array_key_exists("flexibility_data", $context) ? $context["flexibility_data"] : (function () { throw new RuntimeError('Variable "flexibility_data" does not exist.', 91, $this->source); })()), "mobility_active_straight_leg_raise", [], "any", false, false, false, 91), "ev2", [], "any", false, false, false, 91)) ? ("bg-success") : ("bg-danger"))) : ("bg-secondary"));
        yield "\">";
        yield (( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["flexibility_data"]) || array_key_exists("flexibility_data", $context) ? $context["flexibility_data"] : (function () { throw new RuntimeError('Variable "flexibility_data" does not exist.', 91, $this->source); })()), "mobility_active_straight_leg_raise", [], "any", false, false, false, 91), "ev2", [], "any", false, false, false, 91))) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["flexibility_data"]) || array_key_exists("flexibility_data", $context) ? $context["flexibility_data"] : (function () { throw new RuntimeError('Variable "flexibility_data" does not exist.', 91, $this->source); })()), "mobility_active_straight_leg_raise", [], "any", false, false, false, 91), "ev2", [], "any", false, false, false, 91)) ? ("Passé") : ("Échoué"))) : ("N/A"));
        yield "</span>
                            </p>
                            <p><strong>Overhead Squat:</strong>
                                <span class=\"badge ";
        // line 94
        yield (( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["flexibility_data"]) || array_key_exists("flexibility_data", $context) ? $context["flexibility_data"] : (function () { throw new RuntimeError('Variable "flexibility_data" does not exist.', 94, $this->source); })()), "mobility_overhead_squat", [], "any", false, false, false, 94), "ev1", [], "any", false, false, false, 94))) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["flexibility_data"]) || array_key_exists("flexibility_data", $context) ? $context["flexibility_data"] : (function () { throw new RuntimeError('Variable "flexibility_data" does not exist.', 94, $this->source); })()), "mobility_overhead_squat", [], "any", false, false, false, 94), "ev1", [], "any", false, false, false, 94)) ? ("bg-success") : ("bg-danger"))) : ("bg-secondary"));
        yield "\">";
        yield (( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["flexibility_data"]) || array_key_exists("flexibility_data", $context) ? $context["flexibility_data"] : (function () { throw new RuntimeError('Variable "flexibility_data" does not exist.', 94, $this->source); })()), "mobility_overhead_squat", [], "any", false, false, false, 94), "ev1", [], "any", false, false, false, 94))) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["flexibility_data"]) || array_key_exists("flexibility_data", $context) ? $context["flexibility_data"] : (function () { throw new RuntimeError('Variable "flexibility_data" does not exist.', 94, $this->source); })()), "mobility_overhead_squat", [], "any", false, false, false, 94), "ev1", [], "any", false, false, false, 94)) ? ("Passé") : ("Échoué"))) : ("N/A"));
        yield "</span>
                                <span class=\"badge ";
        // line 95
        yield (( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["flexibility_data"]) || array_key_exists("flexibility_data", $context) ? $context["flexibility_data"] : (function () { throw new RuntimeError('Variable "flexibility_data" does not exist.', 95, $this->source); })()), "mobility_overhead_squat", [], "any", false, false, false, 95), "ev2", [], "any", false, false, false, 95))) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["flexibility_data"]) || array_key_exists("flexibility_data", $context) ? $context["flexibility_data"] : (function () { throw new RuntimeError('Variable "flexibility_data" does not exist.', 95, $this->source); })()), "mobility_overhead_squat", [], "any", false, false, false, 95), "ev2", [], "any", false, false, false, 95)) ? ("bg-success") : ("bg-danger"))) : ("bg-secondary"));
        yield "\">";
        yield (( !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["flexibility_data"]) || array_key_exists("flexibility_data", $context) ? $context["flexibility_data"] : (function () { throw new RuntimeError('Variable "flexibility_data" does not exist.', 95, $this->source); })()), "mobility_overhead_squat", [], "any", false, false, false, 95), "ev2", [], "any", false, false, false, 95))) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["flexibility_data"]) || array_key_exists("flexibility_data", $context) ? $context["flexibility_data"] : (function () { throw new RuntimeError('Variable "flexibility_data" does not exist.', 95, $this->source); })()), "mobility_overhead_squat", [], "any", false, false, false, 95), "ev2", [], "any", false, false, false, 95)) ? ("Passé") : ("Échoué"))) : ("N/A"));
        yield "</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 103
        yield "            <div class=\"card mb-4\">
                <h5 class=\"card-header\">Tendances de Performance</h5>
                <div class=\"card-body\">
                    <canvas id=\"performanceTrendChart\" height=\"100\"></canvas>
                </div>
            </div>

            ";
        // line 111
        yield "            <div class=\"card\">
                <h5 class=\"card-header\">Évaluations Physiques</h5>
                <div class=\"card-body\">
                    ";
        // line 114
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["evaluations"]) || array_key_exists("evaluations", $context) ? $context["evaluations"] : (function () { throw new RuntimeError('Variable "evaluations" does not exist.', 114, $this->source); })())) > 0)) {
            // line 115
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
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evaluations"]) || array_key_exists("evaluations", $context) ? $context["evaluations"] : (function () { throw new RuntimeError('Variable "evaluations" does not exist.', 128, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["evaluation"]) {
                // line 129
                yield "                                        <tr>
                                            <td>";
                // line 130
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "dateEvaluation", [], "any", false, false, false, 130), "d/m/Y"), "html", null, true);
                yield "</td>
                                            <td>";
                // line 131
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "niveauEndurance", [], "any", true, true, false, 131) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "niveauEndurance", [], "any", false, false, false, 131)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "niveauEndurance", [], "any", false, false, false, 131), "html", null, true)) : ("N/A"));
                yield "</td>
                                            <td>";
                // line 132
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "forcePhysique", [], "any", true, true, false, 132) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "forcePhysique", [], "any", false, false, false, 132)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "forcePhysique", [], "any", false, false, false, 132), "html", null, true)) : ("N/A"));
                yield "</td>
                                            <td>";
                // line 133
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "vitesse", [], "any", true, true, false, 133) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "vitesse", [], "any", false, false, false, 133)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "vitesse", [], "any", false, false, false, 133), "html", null, true)) : ("N/A"));
                yield "</td>
                                            <td>";
                // line 134
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "etatBlessure", [], "any", true, true, false, 134) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "etatBlessure", [], "any", false, false, false, 134)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "etatBlessure", [], "any", false, false, false, 134), "html", null, true)) : ("Aucune"));
                yield "</td>
                                            <td>
                                                <div class=\"dropdown\">
                                                    <button type=\"button\" class=\"btn p-0 dropdown-toggle hide-arrow\" data-bs-toggle=\"dropdown\">
                                                        <i class=\"bx bx-dots-vertical-rounded\"></i>
                                                    </button>
                                                    <div class=\"dropdown-menu\">
                                                        <a class=\"dropdown-item\" href=\"";
                // line 141
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_physique_show", ["idEvaluation" => CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "idEvaluation", [], "any", false, false, false, 141)]), "html", null, true);
                yield "\">
                                                            <i class=\"bx bx-show me-1\"></i> Voir
                                                        </a>
                                                        <a class=\"dropdown-item\" href=\"";
                // line 144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_physique_edit", ["idEvaluation" => CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "idEvaluation", [], "any", false, false, false, 144)]), "html", null, true);
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
            // line 152
            yield "                                </tbody>
                            </table>
                        </div>
                    ";
        } else {
            // line 156
            yield "                        <div class=\"alert alert-info\">Aucune évaluation trouvée pour ce joueur.</div>
                    ";
        }
        // line 158
        yield "                </div>
            </div>
        </div>
    </div>

    ";
        // line 164
        yield "    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const trendCtx = document.getElementById('performanceTrendChart').getContext('2d');
            new Chart(trendCtx, {
                type: 'line',
                data: {
                    labels: ";
        // line 170
        yield json_encode((isset($context["dates"]) || array_key_exists("dates", $context) ? $context["dates"] : (function () { throw new RuntimeError('Variable "dates" does not exist.', 170, $this->source); })()));
        yield ",
                    datasets: [
                        {
                            label: 'Endurance',
                            data: ";
        // line 174
        yield json_encode((isset($context["endurance_trend"]) || array_key_exists("endurance_trend", $context) ? $context["endurance_trend"] : (function () { throw new RuntimeError('Variable "endurance_trend" does not exist.', 174, $this->source); })()));
        yield ",
                            borderColor: 'rgba(54, 162, 235, 1)',
                            fill: false
                        },
                        {
                            label: 'Force',
                            data: ";
        // line 180
        yield json_encode((isset($context["force_trend"]) || array_key_exists("force_trend", $context) ? $context["force_trend"] : (function () { throw new RuntimeError('Variable "force_trend" does not exist.', 180, $this->source); })()));
        yield ",
                            borderColor: 'rgba(255, 99, 132, 1)',
                            fill: false
                        },
                        {
                            label: 'Vitesse',
                            data: ";
        // line 186
        yield json_encode((isset($context["vitesse_trend"]) || array_key_exists("vitesse_trend", $context) ? $context["vitesse_trend"] : (function () { throw new RuntimeError('Variable "vitesse_trend" does not exist.', 186, $this->source); })()));
        yield ",
                            borderColor: 'rgba(75, 192, 192, 1)',
                            fill: false
                        }
                    ]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 10
                        }
                    }
                }
            });
        });
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
        return array (  479 => 186,  470 => 180,  461 => 174,  454 => 170,  446 => 164,  439 => 158,  435 => 156,  429 => 152,  415 => 144,  409 => 141,  399 => 134,  395 => 133,  391 => 132,  387 => 131,  383 => 130,  380 => 129,  376 => 128,  361 => 115,  359 => 114,  354 => 111,  345 => 103,  333 => 95,  327 => 94,  319 => 91,  313 => 90,  305 => 87,  299 => 86,  293 => 82,  289 => 80,  279 => 77,  276 => 76,  273 => 75,  269 => 73,  259 => 70,  256 => 69,  253 => 68,  249 => 66,  239 => 63,  236 => 62,  234 => 61,  226 => 55,  217 => 48,  213 => 47,  207 => 44,  203 => 43,  199 => 42,  192 => 37,  183 => 30,  179 => 29,  175 => 28,  171 => 27,  167 => 26,  163 => 25,  159 => 24,  151 => 21,  143 => 16,  137 => 15,  133 => 13,  129 => 10,  116 => 9,  90 => 7,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block title %}Évaluations de {{ joueur.nom }} {{ joueur.prenom }}{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            {# Player Overview #}
            <div class=\"card mb-4\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <h5>Profil de {{ joueur.nom }} {{ joueur.prenom }}</h5>
                    <a href=\"{{ path('app_evaluation_physique_new') }}\" class=\"btn btn-primary\">Nouvelle Évaluation</a>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <img src=\"{{ joueur.profilePictureUrl ? joueur.profilePictureUrl : asset('images/default-player.jpg') }}\" alt=\"{{ joueur.nom }}\" class=\"img-fluid rounded-circle\" style=\"width: 150px; height: 150px;\">
                        </div>
                        <div class=\"col-md-8\">
                            <p><strong>Position:</strong> {{ joueur.poste ?? 'N/A' }}</p>
                            <p><strong>Taille:</strong> {{ anthropometry.height ? anthropometry.height ~ ' cm' : 'N/A' }}</p>
                            <p><strong>Poids:</strong> {{ anthropometry.weight ? anthropometry.weight ~ ' kg' : 'N/A' }}</p>
                            <p><strong>Âge:</strong> {{ joueur.dateNaissance ? ('now'|date('Y') - joueur.dateNaissance|date('Y')) ~ ' ans' : 'N/A' }}</p>
                            <p><strong>Email:</strong> {{ joueur.email ?? 'N/A' }}</p>
                            <p><strong>Téléphone:</strong> {{ joueur.telephone ?? 'N/A' }}</p>
                            <p><strong>Statut:</strong> {{ joueur.statut ?? 'N/A' }}</p>
                        </div>
                    </div>
                </div>
            </div>

            {# Anthropometry Section #}
            <div class=\"card mb-4\">
                <h5 class=\"card-header\">Anthropométrie</h5>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <p><strong>Masse Grasse:</strong> {{ anthropometry.fat_mass ? anthropometry.fat_mass ~ '%' : 'N/A' }}</p>
                            <p><strong>Bicipital:</strong> {{ anthropometry.bicipital ? anthropometry.bicipital ~ ' cm' : 'N/A' }}</p>
                            <p><strong>Tricipital:</strong> {{ anthropometry.tricipital ? anthropometry.tricipital ~ ' cm' : 'N/A' }}</p>
                        </div>
                        <div class=\"col-md-6\">
                            <p><strong>Quadricipital (Droit):</strong> {{ anthropometry.quadricipital_right ? anthropometry.quadricipital_right ~ ' cm' : 'N/A' }}</p>
                            <p><strong>Géminal (Droit):</strong> {{ anthropometry.geminal_right ? anthropometry.geminal_right ~ ' cm' : 'N/A' }}</p>
                        </div>
                    </div>
                </div>
            </div>

            {# Flexibility and Mobility Section #}
            <div class=\"card mb-4\">
                <h5 class=\"card-header\">Flexibilité et Mobilité</h5>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <h6>Flexibilité de la Chaîne Postérieure (cm)</h6>
                            {% if flexibility_data.rear_chain.ev1 is not null %}
                                <div class=\"progress mb-2\">
                                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: {{ flexibility_data.rear_chain.ev1 }}%\" aria-valuenow=\"{{ flexibility_data.rear_chain.ev1 }}\" aria-valuemin=\"0\" aria-valuemax=\"60\">{{ flexibility_data.rear_chain.ev1 }} cm</div>
                                </div>
                            {% else %}
                                <p>EV1: N/A</p>
                            {% endif %}
                            {% if flexibility_data.rear_chain.ev2 is not null %}
                                <div class=\"progress mb-2\">
                                    <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: {{ flexibility_data.rear_chain.ev2 }}%\" aria-valuenow=\"{{ flexibility_data.rear_chain.ev2 }}\" aria-valuemin=\"0\" aria-valuemax=\"60\">{{ flexibility_data.rear_chain.ev2 }} cm</div>
                                </div>
                            {% else %}
                                <p>EV2: N/A</p>
                            {% endif %}
                            {% if flexibility_data.rear_chain.avg is not null %}
                                <div class=\"progress\">
                                    <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: {{ flexibility_data.rear_chain.avg }}%\" aria-valuenow=\"{{ flexibility_data.rear_chain.avg }}\" aria-valuemin=\"0\" aria-valuemax=\"60\">{{ flexibility_data.rear_chain.avg }} cm (Moyenne)</div>
                                </div>
                            {% else %}
                                <p>Moyenne: N/A</p>
                            {% endif %}
                        </div>
                        <div class=\"col-md-6\">
                            <h6>Tests de Mobilité</h6>
                            <p><strong>Adducteurs:</strong>
                                <span class=\"badge {{ flexibility_data.adductors.ev1 is not null ? (flexibility_data.adductors.ev1 ? 'bg-success' : 'bg-danger') : 'bg-secondary' }}\">{{ flexibility_data.adductors.ev1 is not null ? (flexibility_data.adductors.ev1 ? 'Passé' : 'Échoué') : 'N/A' }}</span>
                                <span class=\"badge {{ flexibility_data.adductors.ev2 is not null ? (flexibility_data.adductors.ev2 ? 'bg-success' : 'bg-danger') : 'bg-secondary' }}\">{{ flexibility_data.adductors.ev2 is not null ? (flexibility_data.adductors.ev2 ? 'Passé' : 'Échoué') : 'N/A' }}</span>
                            </p>
                            <p><strong>Active Straight Leg Raise:</strong>
                                <span class=\"badge {{ flexibility_data.mobility_active_straight_leg_raise.ev1 is not null ? (flexibility_data.mobility_active_straight_leg_raise.ev1 ? 'bg-success' : 'bg-danger') : 'bg-secondary' }}\">{{ flexibility_data.mobility_active_straight_leg_raise.ev1 is not null ? (flexibility_data.mobility_active_straight_leg_raise.ev1 ? 'Passé' : 'Échoué') : 'N/A' }}</span>
                                <span class=\"badge {{ flexibility_data.mobility_active_straight_leg_raise.ev2 is not null ? (flexibility_data.mobility_active_straight_leg_raise.ev2 ? 'bg-success' : 'bg-danger') : 'bg-secondary' }}\">{{ flexibility_data.mobility_active_straight_leg_raise.ev2 is not null ? (flexibility_data.mobility_active_straight_leg_raise.ev2 ? 'Passé' : 'Échoué') : 'N/A' }}</span>
                            </p>
                            <p><strong>Overhead Squat:</strong>
                                <span class=\"badge {{ flexibility_data.mobility_overhead_squat.ev1 is not null ? (flexibility_data.mobility_overhead_squat.ev1 ? 'bg-success' : 'bg-danger') : 'bg-secondary' }}\">{{ flexibility_data.mobility_overhead_squat.ev1 is not null ? (flexibility_data.mobility_overhead_squat.ev1 ? 'Passé' : 'Échoué') : 'N/A' }}</span>
                                <span class=\"badge {{ flexibility_data.mobility_overhead_squat.ev2 is not null ? (flexibility_data.mobility_overhead_squat.ev2 ? 'bg-success' : 'bg-danger') : 'bg-secondary' }}\">{{ flexibility_data.mobility_overhead_squat.ev2 is not null ? (flexibility_data.mobility_overhead_squat.ev2 ? 'Passé' : 'Échoué') : 'N/A' }}</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {# Performance Trends Chart #}
            <div class=\"card mb-4\">
                <h5 class=\"card-header\">Tendances de Performance</h5>
                <div class=\"card-body\">
                    <canvas id=\"performanceTrendChart\" height=\"100\"></canvas>
                </div>
            </div>

            {# Evaluations Table #}
            <div class=\"card\">
                <h5 class=\"card-header\">Évaluations Physiques</h5>
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

    {# ChartJS Script for Performance Trends #}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const trendCtx = document.getElementById('performanceTrendChart').getContext('2d');
            new Chart(trendCtx, {
                type: 'line',
                data: {
                    labels: {{ dates|json_encode|raw }},
                    datasets: [
                        {
                            label: 'Endurance',
                            data: {{ endurance_trend|json_encode|raw }},
                            borderColor: 'rgba(54, 162, 235, 1)',
                            fill: false
                        },
                        {
                            label: 'Force',
                            data: {{ force_trend|json_encode|raw }},
                            borderColor: 'rgba(255, 99, 132, 1)',
                            fill: false
                        },
                        {
                            label: 'Vitesse',
                            data: {{ vitesse_trend|json_encode|raw }},
                            borderColor: 'rgba(75, 192, 192, 1)',
                            fill: false
                        }
                    ]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 10
                        }
                    }
                }
            });
        });
    </script>
{% endblock %}", "evaluation_physique/by_joueur.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\evaluation_physique\\by_joueur.html.twig");
    }
}
