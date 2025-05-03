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

/* joueur/football_layout.html.twig */
class __TwigTemplate_047d31ca62cfca6d5495ab28638de7a3 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/football_layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/football_layout.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "joueur/football_layout.html.twig", 1);
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

        yield "Disposition de l'Équipe de Football";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/css/football_layout.css"), "html", null, true);
        yield "\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
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

        // line 13
        yield "<main>
    <div class=\"static\">
        <h1 class=\"js-heading\">FORMATION DE FOOTBALL</h1>
        <p class=\"js-subheading\">Glissez les joueurs sur le terrain pour construire votre équipe.<br><span style=\"font-size: 11px\">Assurez-vous que les joueurs correspondent à leurs rôles de position.</span></p>
        
        <div class=\"formation-selector\">
            <form method=\"get\" action=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("football_layout");
        yield "\">
                <label for=\"formation\">Sélectionner la Formation :</label>
                <select name=\"formation\" id=\"formationSelect\" onchange=\"this.form.submit()\">
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 23
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["formation"], "html", null, true);
            yield "\" ";
            yield ((($context["formation"] == (isset($context["selected_formation"]) || array_key_exists("selected_formation", $context) ? $context["selected_formation"] : (function () { throw new RuntimeError('Variable "selected_formation" does not exist.', 23, $this->source); })()))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["formation"], "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['formation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "                </select>
            </form>
        </div>
        
        <div class=\"js-switcher switcher\">
            <a href=\"#\" class=\"js-switch switch-btn disabled\" data-side=\"home\">DOMICILE</a>
            <a href=\"#\" class=\"js-switch switch-btn\" data-side=\"away\">EXTÉRIEUR</a>
        </div>

        <div class=\"save-buttons\">
            <h5>Enregistrer la Formation</h5>
            <button class=\"js-save-btn save-btn\" data-format=\"json\">Enregistrer en JSON</button>
        </div>

        <div class=\"back-button\">
            <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_main");
        yield "\" class=\"save-btn\"><i class=\"bx bx-arrow-back me-1\"></i> Retour aux Joueurs</a>
        </div>

        <div class=\"player-list\">
            <h5>Joueurs Disponibles</h5>

            ";
        // line 46
        $context["positionMapping"] = ["Gardien" => ["GK"], "Défenseur" => ["RB", "LB", "RWB", "LWB", "SW", "CB"], "Milieu" => ["DM", "CM", "AM", "RM", "LM"], "Attaquant" => ["RW", "LW", "CF", "ST", "SS"]];
        // line 52
        yield "
            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["positionMapping"]) || array_key_exists("positionMapping", $context) ? $context["positionMapping"] : (function () { throw new RuntimeError('Variable "positionMapping" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["position"] => $context["roles"]) {
            // line 54
            yield "                <h6>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["position"], "html", null, true);
            yield "s</h6>
                ";
            // line 55
            $context["hasPlayers"] = false;
            // line 56
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["joueurs"]) || array_key_exists("joueurs", $context) ? $context["joueurs"] : (function () { throw new RuntimeError('Variable "joueurs" does not exist.', 56, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["joueur"]) {
                // line 57
                yield "                    ";
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "poste", [], "any", false, false, false, 57))) {
                    // line 58
                    yield "                        ";
                    $context["normalizedPoste"] = Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "poste", [], "any", false, false, false, 58)));
                    // line 59
                    yield "                        ";
                    $context["matchesRole"] = false;
                    // line 60
                    yield "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["roles"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                        // line 61
                        yield "                            ";
                        if (((isset($context["normalizedPoste"]) || array_key_exists("normalizedPoste", $context) ? $context["normalizedPoste"] : (function () { throw new RuntimeError('Variable "normalizedPoste" does not exist.', 61, $this->source); })()) == $context["role"])) {
                            // line 62
                            yield "                                ";
                            $context["matchesRole"] = true;
                            // line 63
                            yield "                            ";
                        }
                        // line 64
                        yield "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 65
                    yield "                        ";
                    if ((isset($context["matchesRole"]) || array_key_exists("matchesRole", $context) ? $context["matchesRole"] : (function () { throw new RuntimeError('Variable "matchesRole" does not exist.', 65, $this->source); })())) {
                        // line 66
                        yield "                            ";
                        $context["hasPlayers"] = true;
                        // line 67
                        yield "                            <div class=\"player-item\" draggable=\"true\" 
                                 data-player-id=\"";
                        // line 68
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "idJoueur", [], "any", false, false, false, 68), "html", null, true);
                        yield "\"
                                 data-position=\"";
                        // line 69
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["normalizedPoste"]) || array_key_exists("normalizedPoste", $context) ? $context["normalizedPoste"] : (function () { throw new RuntimeError('Variable "normalizedPoste" does not exist.', 69, $this->source); })()), "html", null, true);
                        yield "\"
                                 data-category=\"";
                        // line 70
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim($context["position"]), "html", null, true);
                        yield "\"
                                 data-name=\"";
                        // line 71
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "nom", [], "any", false, false, false, 71) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "prenom", [], "any", false, false, false, 71))), "html", null, true);
                        yield "\"
                                 data-img=\"";
                        // line 72
                        yield ((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "profilePicture", [], "any", false, false, false, 72)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/Uploads/profile_pictures/" . CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "profilePicture", [], "any", false, false, false, 72))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/Uploads/photos/default_avatar.png"), "html", null, true)));
                        yield "\"
                                 data-goals=\"";
                        // line 73
                        yield ((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "performanceJoueur", [], "any", false, false, false, 73)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "performanceJoueur", [], "any", false, false, false, 73), "butsMarques", [], "any", false, false, false, 73), "html", null, true)) : (0));
                        yield "\"
                                 data-matches=\"";
                        // line 74
                        yield ((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "performanceJoueur", [], "any", false, false, false, 74)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((int) floor((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "performanceJoueur", [], "any", false, false, false, 74), "minutesJouees", [], "any", false, false, false, 74) / 90)), "html", null, true)) : (0));
                        yield "\"
                                 data-height=\"";
                        // line 75
                        yield ((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "taille", [], "any", false, false, false, 75)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "taille", [], "any", false, false, false, 75) . "m"), "html", null, true)) : ("N/A"));
                        yield "\"
                                 data-side=\"";
                        // line 76
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "teamType", [], "any", true, true, false, 76)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "teamType", [], "any", false, false, false, 76), "home")) : ("home")), "html", null, true);
                        yield "\">
                                <img src=\"";
                        // line 77
                        yield ((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "profilePicture", [], "any", false, false, false, 77)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/Uploads/profile_pictures/" . CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "profilePicture", [], "any", false, false, false, 77))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/Uploads/photos/default_avatar.png"), "html", null, true)));
                        yield "\" 
                                     alt=\"";
                        // line 78
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "nom", [], "any", false, false, false, 78), "html", null, true);
                        yield "\"
                                     onerror=\"this.onerror=null; this.src='";
                        // line 79
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/Uploads/photos/default_avatar.png"), "html", null, true);
                        yield "';\">
                                <span>
                                    ";
                        // line 81
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "nom", [], "any", false, false, false, 81) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "prenom", [], "any", false, false, false, 81))), "html", null, true);
                        yield " (";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "poste", [], "any", false, false, false, 81), "html", null, true);
                        yield ")
                                    <span class=\"status-rectangle\" style=\"background-color: ";
                        // line 82
                        yield (((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "statut", [], "any", false, false, false, 82) == "Actif")) ? ("green") : ("red"));
                        yield ";\"></span>
                                </span>
                            </div>
                        ";
                    }
                    // line 86
                    yield "                    ";
                }
                // line 87
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['joueur'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            yield "                ";
            if ( !(isset($context["hasPlayers"]) || array_key_exists("hasPlayers", $context) ? $context["hasPlayers"] : (function () { throw new RuntimeError('Variable "hasPlayers" does not exist.', 88, $this->source); })())) {
                // line 89
                yield "                    <p class=\"no-players\">Aucun ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $context["position"]), "html", null, true);
                yield " disponible.</p>
                ";
            }
            // line 91
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['position'], $context['roles'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        yield "
            <h6>Autres Joueurs (Aucune Position Spécifiée)</h6>
            ";
        // line 94
        $context["hasOthers"] = false;
        // line 95
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["joueurs"]) || array_key_exists("joueurs", $context) ? $context["joueurs"] : (function () { throw new RuntimeError('Variable "joueurs" does not exist.', 95, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["joueur"]) {
            // line 96
            yield "                ";
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "poste", [], "any", false, false, false, 96))) {
                // line 97
                yield "                    ";
                $context["hasOthers"] = true;
                // line 98
                yield "                    <div class=\"player-item\" draggable=\"false\"
                         data-player-id=\"";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "idJoueur", [], "any", false, false, false, 99), "html", null, true);
                yield "\"
                         data-position=\"Unknown\"
                         data-category=\"Unknown\"
                         data-name=\"";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "nom", [], "any", false, false, false, 102) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "prenom", [], "any", false, false, false, 102))), "html", null, true);
                yield "\"
                         data-img=\"";
                // line 103
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "profilePicture", [], "any", false, false, false, 103)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/Uploads/profile_pictures/" . CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "profilePicture", [], "any", false, false, false, 103))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/Uploads/photos/default_avatar.png"), "html", null, true)));
                yield "\"
                         data-goals=\"";
                // line 104
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "performanceJoueur", [], "any", false, false, false, 104)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "performanceJoueur", [], "any", false, false, false, 104), "butsMarques", [], "any", false, false, false, 104), "html", null, true)) : (0));
                yield "\"
                         data-matches=\"";
                // line 105
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "performanceJoueur", [], "any", false, false, false, 105)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((int) floor((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "performanceJoueur", [], "any", false, false, false, 105), "minutesJouees", [], "any", false, false, false, 105) / 90)), "html", null, true)) : (0));
                yield "\"
                         data-height=\"";
                // line 106
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "taille", [], "any", false, false, false, 106)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "taille", [], "any", false, false, false, 106) . "m"), "html", null, true)) : ("N/A"));
                yield "\"
                         data-side=\"";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "teamType", [], "any", true, true, false, 107)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "teamType", [], "any", false, false, false, 107), "home")) : ("home")), "html", null, true);
                yield "\">
                        <img src=\"";
                // line 108
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "profilePicture", [], "any", false, false, false, 108)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/Uploads/profile_pictures/" . CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "profilePicture", [], "any", false, false, false, 108))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/Uploads/photos/default_avatar.png"), "html", null, true)));
                yield "\"
                             alt=\"";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "nom", [], "any", false, false, false, 109), "html", null, true);
                yield "\"
                             onerror=\"this.onerror=null; this.src='";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/Uploads/photos/default_avatar.png"), "html", null, true);
                yield "';\">
                        <span>
                            ";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "nom", [], "any", false, false, false, 112) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "prenom", [], "any", false, false, false, 112))), "html", null, true);
                yield " (Aucune Position)
                            <span class=\"status-rectangle\" style=\"background-color: ";
                // line 113
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "statut", [], "any", false, false, false, 113) == "Actif")) ? ("green") : ("red"));
                yield ";\"></span>
                        </span>
                    </div>
                ";
            }
            // line 117
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['joueur'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        yield "            ";
        if ( !(isset($context["hasOthers"]) || array_key_exists("hasOthers", $context) ? $context["hasOthers"] : (function () { throw new RuntimeError('Variable "hasOthers" does not exist.', 118, $this->source); })())) {
            // line 119
            yield "                <p class=\"no-players\">Aucun joueur sans position.</p>
            ";
        }
        // line 121
        yield "        </div>
    </div>
    <div class=\"js-stage stage texture\">
        <div class=\"js-world world\">
            <div class=\"team js-team\">
                <!-- Formation positions populated by JavaScript -->
            </div>
            <div class=\"terrain js-terrain\">
                <div class=\"field field--alt\"></div>
                <div class=\"field ground\">
                    <div class=\"field__texture field__texture--gradient\"></div>
                    <div class=\"field__texture field__texture--gradient-b\"></div>
                    <div class=\"field__texture field__texture--grass\"></div>
                    <div class=\"field__line field__line--goal\"></div>
                    <div class=\"field__line field__line--goal field__line--goal--far\"></div>
                    <div class=\"field__line field__line--outline\"></div>
                    <div class=\"field__line field__line--penalty\"></div>
                    <div class=\"field__line field__line--penalty-arc\"></div>
                    <div class=\"field__line field__line--penalty-arc field__line--penalty-arc--far\"></div>
                    <div class=\"field__line field__line--mid\"></div>
                    <div class=\"field__line field__line--circle\"></div>
                    <div class=\"field__line field__line--penalty field__line--penalty--far\"></div>
                </div>
                <div class=\"field__side field__side--front\"></div>
                <div class=\"field__side field__side--left\"></div>
                <div class=\"field__side field__side--right\"></div>
                <div class=\"field__side field__side--back\"></div>
            </div>
        </div>
        <div class=\"loading js-loading\">VEUILLEZ PATIENTER...</div>
    </div>
</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 155
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

        // line 156
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/velocity/1.5.2/velocity.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js\"></script>
    <script src=\"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/vendor/js/football_layout.js"), "html", null, true);
        yield "\"></script>
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
        return "joueur/football_layout.html.twig";
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
        return array (  489 => 161,  480 => 156,  467 => 155,  424 => 121,  420 => 119,  417 => 118,  411 => 117,  404 => 113,  400 => 112,  395 => 110,  391 => 109,  387 => 108,  383 => 107,  379 => 106,  375 => 105,  371 => 104,  367 => 103,  363 => 102,  357 => 99,  354 => 98,  351 => 97,  348 => 96,  343 => 95,  341 => 94,  337 => 92,  331 => 91,  325 => 89,  322 => 88,  316 => 87,  313 => 86,  306 => 82,  300 => 81,  295 => 79,  291 => 78,  287 => 77,  283 => 76,  279 => 75,  275 => 74,  271 => 73,  267 => 72,  263 => 71,  259 => 70,  255 => 69,  251 => 68,  248 => 67,  245 => 66,  242 => 65,  236 => 64,  233 => 63,  230 => 62,  227 => 61,  222 => 60,  219 => 59,  216 => 58,  213 => 57,  208 => 56,  206 => 55,  201 => 54,  197 => 53,  194 => 52,  192 => 46,  183 => 40,  166 => 25,  153 => 23,  149 => 22,  143 => 19,  135 => 13,  122 => 12,  107 => 7,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Disposition de l'Équipe de Football{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('/vendor/css/football_layout.css') }}\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css\">
{% endblock %}

{% block body %}
<main>
    <div class=\"static\">
        <h1 class=\"js-heading\">FORMATION DE FOOTBALL</h1>
        <p class=\"js-subheading\">Glissez les joueurs sur le terrain pour construire votre équipe.<br><span style=\"font-size: 11px\">Assurez-vous que les joueurs correspondent à leurs rôles de position.</span></p>
        
        <div class=\"formation-selector\">
            <form method=\"get\" action=\"{{ path('football_layout') }}\">
                <label for=\"formation\">Sélectionner la Formation :</label>
                <select name=\"formation\" id=\"formationSelect\" onchange=\"this.form.submit()\">
                    {% for formation in formations %}
                        <option value=\"{{ formation }}\" {{ formation == selected_formation ? 'selected' : '' }}>{{ formation }}</option>
                    {% endfor %}
                </select>
            </form>
        </div>
        
        <div class=\"js-switcher switcher\">
            <a href=\"#\" class=\"js-switch switch-btn disabled\" data-side=\"home\">DOMICILE</a>
            <a href=\"#\" class=\"js-switch switch-btn\" data-side=\"away\">EXTÉRIEUR</a>
        </div>

        <div class=\"save-buttons\">
            <h5>Enregistrer la Formation</h5>
            <button class=\"js-save-btn save-btn\" data-format=\"json\">Enregistrer en JSON</button>
        </div>

        <div class=\"back-button\">
            <a href=\"{{ path('joueur_main') }}\" class=\"save-btn\"><i class=\"bx bx-arrow-back me-1\"></i> Retour aux Joueurs</a>
        </div>

        <div class=\"player-list\">
            <h5>Joueurs Disponibles</h5>

            {% set positionMapping = {
                'Gardien': ['GK'],
                'Défenseur': ['RB', 'LB', 'RWB', 'LWB', 'SW', 'CB'],
                'Milieu': ['DM', 'CM', 'AM', 'RM', 'LM'],
                'Attaquant': ['RW', 'LW', 'CF', 'ST', 'SS']
            } %}

            {% for position, roles in positionMapping %}
                <h6>{{ position }}s</h6>
                {% set hasPlayers = false %}
                {% for joueur in joueurs %}
                    {% if joueur.poste is not empty %}
                        {% set normalizedPoste = joueur.poste|trim|upper %}
                        {% set matchesRole = false %}
                        {% for role in roles %}
                            {% if normalizedPoste == role %}
                                {% set matchesRole = true %}
                            {% endif %}
                        {% endfor %}
                        {% if matchesRole %}
                            {% set hasPlayers = true %}
                            <div class=\"player-item\" draggable=\"true\" 
                                 data-player-id=\"{{ joueur.idJoueur }}\"
                                 data-position=\"{{ normalizedPoste }}\"
                                 data-category=\"{{ position|trim }}\"
                                 data-name=\"{{ (joueur.nom ~ ' ' ~ joueur.prenom)|trim }}\"
                                 data-img=\"{{ joueur.profilePicture ? asset('/Uploads/profile_pictures/' ~ joueur.profilePicture) : asset('/Uploads/photos/default_avatar.png') }}\"
                                 data-goals=\"{{ joueur.performanceJoueur ? joueur.performanceJoueur.butsMarques : 0 }}\"
                                 data-matches=\"{{ joueur.performanceJoueur ? joueur.performanceJoueur.minutesJouees // 90 : 0 }}\"
                                 data-height=\"{{ joueur.taille ? joueur.taille ~ 'm' : 'N/A' }}\"
                                 data-side=\"{{ joueur.teamType|default('home') }}\">
                                <img src=\"{{ joueur.profilePicture ? asset('/Uploads/profile_pictures/' ~ joueur.profilePicture) : asset('/Uploads/photos/default_avatar.png') }}\" 
                                     alt=\"{{ joueur.nom }}\"
                                     onerror=\"this.onerror=null; this.src='{{ asset('/Uploads/photos/default_avatar.png') }}';\">
                                <span>
                                    {{ (joueur.nom ~ ' ' ~ joueur.prenom)|trim }} ({{ joueur.poste }})
                                    <span class=\"status-rectangle\" style=\"background-color: {{ joueur.statut == 'Actif' ? 'green' : 'red' }};\"></span>
                                </span>
                            </div>
                        {% endif %}
                    {% endif %}
                {% endfor %}
                {% if not hasPlayers %}
                    <p class=\"no-players\">Aucun {{ position|lower }} disponible.</p>
                {% endif %}
            {% endfor %}

            <h6>Autres Joueurs (Aucune Position Spécifiée)</h6>
            {% set hasOthers = false %}
            {% for joueur in joueurs %}
                {% if joueur.poste is empty %}
                    {% set hasOthers = true %}
                    <div class=\"player-item\" draggable=\"false\"
                         data-player-id=\"{{ joueur.idJoueur }}\"
                         data-position=\"Unknown\"
                         data-category=\"Unknown\"
                         data-name=\"{{ (joueur.nom ~ ' ' ~ joueur.prenom)|trim }}\"
                         data-img=\"{{ joueur.profilePicture ? asset('/Uploads/profile_pictures/' ~ joueur.profilePicture) : asset('/Uploads/photos/default_avatar.png') }}\"
                         data-goals=\"{{ joueur.performanceJoueur ? joueur.performanceJoueur.butsMarques : 0 }}\"
                         data-matches=\"{{ joueur.performanceJoueur ? joueur.performanceJoueur.minutesJouees // 90 : 0 }}\"
                         data-height=\"{{ joueur.taille ? joueur.taille ~ 'm' : 'N/A' }}\"
                         data-side=\"{{ joueur.teamType|default('home') }}\">
                        <img src=\"{{ joueur.profilePicture ? asset('/Uploads/profile_pictures/' ~ joueur.profilePicture) : asset('/Uploads/photos/default_avatar.png') }}\"
                             alt=\"{{ joueur.nom }}\"
                             onerror=\"this.onerror=null; this.src='{{ asset('/Uploads/photos/default_avatar.png') }}';\">
                        <span>
                            {{ (joueur.nom ~ ' ' ~ joueur.prenom)|trim }} (Aucune Position)
                            <span class=\"status-rectangle\" style=\"background-color: {{ joueur.statut == 'Actif' ? 'green' : 'red' }};\"></span>
                        </span>
                    </div>
                {% endif %}
            {% endfor %}
            {% if not hasOthers %}
                <p class=\"no-players\">Aucun joueur sans position.</p>
            {% endif %}
        </div>
    </div>
    <div class=\"js-stage stage texture\">
        <div class=\"js-world world\">
            <div class=\"team js-team\">
                <!-- Formation positions populated by JavaScript -->
            </div>
            <div class=\"terrain js-terrain\">
                <div class=\"field field--alt\"></div>
                <div class=\"field ground\">
                    <div class=\"field__texture field__texture--gradient\"></div>
                    <div class=\"field__texture field__texture--gradient-b\"></div>
                    <div class=\"field__texture field__texture--grass\"></div>
                    <div class=\"field__line field__line--goal\"></div>
                    <div class=\"field__line field__line--goal field__line--goal--far\"></div>
                    <div class=\"field__line field__line--outline\"></div>
                    <div class=\"field__line field__line--penalty\"></div>
                    <div class=\"field__line field__line--penalty-arc\"></div>
                    <div class=\"field__line field__line--penalty-arc field__line--penalty-arc--far\"></div>
                    <div class=\"field__line field__line--mid\"></div>
                    <div class=\"field__line field__line--circle\"></div>
                    <div class=\"field__line field__line--penalty field__line--penalty--far\"></div>
                </div>
                <div class=\"field__side field__side--front\"></div>
                <div class=\"field__side field__side--left\"></div>
                <div class=\"field__side field__side--right\"></div>
                <div class=\"field__side field__side--back\"></div>
            </div>
        </div>
        <div class=\"loading js-loading\">VEUILLEZ PATIENTER...</div>
    </div>
</main>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/velocity/1.5.2/velocity.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js\"></script>
    <script src=\"{{ asset('/vendor/js/football_layout.js') }}\"></script>
{% endblock %}", "joueur/football_layout.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\Web2\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\joueur\\football_layout.html.twig");
    }
}
