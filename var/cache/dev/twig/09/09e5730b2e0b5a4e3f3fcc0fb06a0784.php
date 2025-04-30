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

        yield "Football Team Layout";
        
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
    <!-- Add Boxicons for the toast icon -->
    <link rel=\"stylesheet\" href=\"https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 13
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

        // line 14
        yield "<main>
    <!-- Toast Container -->
    <div class=\"position-fixed bottom-0 end-0 p-3\" style=\"z-index: 11\">
        <div id=\"invalidDropToast\" class=\"bs-toast toast toast-placement-ex m-2 fade hide\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\" data-delay=\"5000\">
            <div class=\"toast-header\">
                <i class=\"bx bx-bell me-2\"></i>
                <div class=\"me-auto fw-semibold\">Erreur de Placement</div>
                <small>Just now</small>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
            </div>
            <div class=\"toast-body\">
                <!-- Message will be set by JavaScript -->
            </div>
        </div>
    </div>

    <div class=\"static\">
        <h1 class=\"js-heading\">FOOTBALL FORMATION</h1>
        <p class=\"js-subheading\">Drag players onto the field to build your team.<br><span style=\"font-size: 11px\">Ensure players match their position roles.</span></p>
        
        <!-- Add Toast Color Selector -->
        <div class=\"toast-color-selector mb-3\">
            <label for=\"toastColorSelect\">Toast Color:</label>
            <select id=\"toastColorSelect\" class=\"form-select color-dropdown\">
                <option value=\"bg-danger\" selected>Danger (Red)</option>
                <option value=\"bg-primary\">Primary (Blue)</option>
                <option value=\"bg-success\">Success (Green)</option>
                <option value=\"bg-warning\">Warning (Yellow)</option>
                <option value=\"bg-info\">Info (Cyan)</option>
            </select>
        </div>

        <div class=\"formation-selector\">
            <form method=\"get\" action=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("football_layout");
        yield "\">
                <label for=\"formation\">Select Formation:</label>
                <select name=\"formation\" id=\"formationSelect\" onchange=\"this.form.submit()\">
                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 51
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["formation"], "html", null, true);
            yield "\" ";
            yield ((($context["formation"] == (isset($context["selected_formation"]) || array_key_exists("selected_formation", $context) ? $context["selected_formation"] : (function () { throw new RuntimeError('Variable "selected_formation" does not exist.', 51, $this->source); })()))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["formation"], "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['formation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "                </select>
            </form>
        </div>
        <div class=\"player-list\">
            <h5>Available Players</h5>
            <p>Debug: ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["joueurs"]) || array_key_exists("joueurs", $context) ? $context["joueurs"] : (function () { throw new RuntimeError('Variable "joueurs" does not exist.', 58, $this->source); })())), "html", null, true);
        yield " players found.</p>

            ";
        // line 60
        $context["positionMapping"] = ["Gardien" => ["GK"], "Défenseur" => ["RB", "LB", "RWB", "LWB", "SW"], "Milieu" => ["DM", "CM", "AM", "RM", "LM"], "Attaquant" => ["RW", "LW", "CF", "ST", "SS"]];
        // line 66
        yield "
            ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["positionMapping"]) || array_key_exists("positionMapping", $context) ? $context["positionMapping"] : (function () { throw new RuntimeError('Variable "positionMapping" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["position"] => $context["roles"]) {
            // line 68
            yield "                <h6>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["position"], "html", null, true);
            yield "s</h6>
                ";
            // line 69
            $context["hasPlayers"] = false;
            // line 70
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["joueurs"]) || array_key_exists("joueurs", $context) ? $context["joueurs"] : (function () { throw new RuntimeError('Variable "joueurs" does not exist.', 70, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["joueur"]) {
                // line 71
                yield "                    ";
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "poste", [], "any", false, false, false, 71))) {
                    // line 72
                    yield "                        ";
                    $context["matchesRole"] = false;
                    // line 73
                    yield "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["roles"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                        // line 74
                        yield "                            ";
                        if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "poste", [], "any", false, false, false, 74)) == Twig\Extension\CoreExtension::lower($this->env->getCharset(), $context["role"]))) {
                            // line 75
                            yield "                                ";
                            $context["matchesRole"] = true;
                            // line 76
                            yield "                            ";
                        }
                        // line 77
                        yield "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 78
                    yield "                        ";
                    if ((isset($context["matchesRole"]) || array_key_exists("matchesRole", $context) ? $context["matchesRole"] : (function () { throw new RuntimeError('Variable "matchesRole" does not exist.', 78, $this->source); })())) {
                        // line 79
                        yield "                            ";
                        $context["hasPlayers"] = true;
                        // line 80
                        yield "                            <p>Debug: Player ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "nom", [], "any", false, false, false, 80), "html", null, true);
                        yield " - Poste: ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "poste", [], "any", false, false, false, 80), "html", null, true);
                        yield ", Category: ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["position"], "html", null, true);
                        yield "</p>
                            <div class=\"player-item\" draggable=\"true\" 
                                 data-player-id=\"";
                        // line 82
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "idJoueur", [], "any", false, false, false, 82), "html", null, true);
                        yield "\" 
                                 data-position=\"";
                        // line 83
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "poste", [], "any", false, false, false, 83)), "html", null, true);
                        yield "\"
                                 data-category=\"";
                        // line 84
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim($context["position"]), "html", null, true);
                        yield "\"
                                 data-name=\"";
                        // line 85
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "nom", [], "any", false, false, false, 85) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "prenom", [], "any", false, false, false, 85))), "html", null, true);
                        yield "\"
                                 data-img=\"";
                        // line 86
                        yield ((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "profilePicture", [], "any", false, false, false, 86)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/Uploads/profile_pictures/" . CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "profilePicture", [], "any", false, false, false, 86))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/Uploads/photos/default_avatar.png"), "html", null, true)));
                        yield "\"
                                 data-goals=\"";
                        // line 87
                        yield ((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "performanceJoueur", [], "any", false, false, false, 87)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "performanceJoueur", [], "any", false, false, false, 87), "butsMarques", [], "any", false, false, false, 87), "html", null, true)) : (0));
                        yield "\"
                                 data-matches=\"";
                        // line 88
                        yield ((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "performanceJoueur", [], "any", false, false, false, 88)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((int) floor((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "performanceJoueur", [], "any", false, false, false, 88), "minutesJouees", [], "any", false, false, false, 88) / 90)), "html", null, true)) : (0));
                        yield "\"
                                 data-height=\"";
                        // line 89
                        yield ((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "taille", [], "any", false, false, false, 89)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "taille", [], "any", false, false, false, 89) . "m"), "html", null, true)) : ("N/A"));
                        yield "\">
                                <img src=\"";
                        // line 90
                        yield ((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "profilePicture", [], "any", false, false, false, 90)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/Uploads/profile_pictures/" . CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "profilePicture", [], "any", false, false, false, 90))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/Uploads/photos/default_avatar.png"), "html", null, true)));
                        yield "\" 
                                     alt=\"";
                        // line 91
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "nom", [], "any", false, false, false, 91), "html", null, true);
                        yield "\" 
                                     onerror=\"this.onerror=null; this.src='";
                        // line 92
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/Uploads/photos/default_avatar.png"), "html", null, true);
                        yield "';\">
                                <span>
                                    ";
                        // line 94
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "nom", [], "any", false, false, false, 94) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "prenom", [], "any", false, false, false, 94)), "html", null, true);
                        yield " (";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "poste", [], "any", false, false, false, 94), "html", null, true);
                        yield ")
                                    <span style=\"display: inline-block; width: 15px; height: 15px; background-color: ";
                        // line 95
                        yield (((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "statut", [], "any", false, false, false, 95) == "Actif")) ? ("green") : ("red"));
                        yield "; margin-left: 5px; vertical-align: middle;\"></span>
                                </span>
                            </div>
                        ";
                    }
                    // line 99
                    yield "                    ";
                }
                // line 100
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['joueur'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            yield "                ";
            if ( !(isset($context["hasPlayers"]) || array_key_exists("hasPlayers", $context) ? $context["hasPlayers"] : (function () { throw new RuntimeError('Variable "hasPlayers" does not exist.', 101, $this->source); })())) {
                // line 102
                yield "                    <p class=\"no-players\">No ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $context["position"]), "html", null, true);
                yield "s available.</p>
                ";
            }
            // line 104
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['position'], $context['roles'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        yield "
            <h6>Other Players (No Position Specified)</h6>
            ";
        // line 107
        $context["hasOthers"] = false;
        // line 108
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["joueurs"]) || array_key_exists("joueurs", $context) ? $context["joueurs"] : (function () { throw new RuntimeError('Variable "joueurs" does not exist.', 108, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["joueur"]) {
            // line 109
            yield "                ";
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "poste", [], "any", false, false, false, 109))) {
                // line 110
                yield "                    ";
                $context["hasOthers"] = true;
                // line 111
                yield "                    <div class=\"player-item\" draggable=\"false\" 
                         data-player-id=\"";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "idJoueur", [], "any", false, false, false, 112), "html", null, true);
                yield "\" 
                         data-position=\"Unknown\"
                         data-category=\"Unknown\"
                         data-name=\"";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "nom", [], "any", false, false, false, 115) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "prenom", [], "any", false, false, false, 115))), "html", null, true);
                yield "\"
                         data-img=\"";
                // line 116
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "profilePicture", [], "any", false, false, false, 116)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/Uploads/profile_pictures/" . CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "profilePicture", [], "any", false, false, false, 116))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/Uploads/photos/default_avatar.png"), "html", null, true)));
                yield "\"
                         data-goals=\"";
                // line 117
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "performanceJoueur", [], "any", false, false, false, 117)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "performanceJoueur", [], "any", false, false, false, 117), "butsMarques", [], "any", false, false, false, 117), "html", null, true)) : (0));
                yield "\"
                         data-matches=\"";
                // line 118
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "performanceJoueur", [], "any", false, false, false, 118)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((int) floor((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "performanceJoueur", [], "any", false, false, false, 118), "minutesJouees", [], "any", false, false, false, 118) / 90)), "html", null, true)) : (0));
                yield "\"
                         data-height=\"";
                // line 119
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "taille", [], "any", false, false, false, 119)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "taille", [], "any", false, false, false, 119) . "m"), "html", null, true)) : ("N/A"));
                yield "\">
                        <img src=\"";
                // line 120
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "profilePicture", [], "any", false, false, false, 120)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/Uploads/profile_pictures/" . CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "profilePicture", [], "any", false, false, false, 120))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/Uploads/photos/default_avatar.png"), "html", null, true)));
                yield "\" 
                             alt=\"";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "nom", [], "any", false, false, false, 121), "html", null, true);
                yield "\" 
                             onerror=\"this.onerror=null; this.src='";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/Uploads/photos/default_avatar.png"), "html", null, true);
                yield "';\">
                        <span>
                            ";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "nom", [], "any", false, false, false, 124) . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "prenom", [], "any", false, false, false, 124)), "html", null, true);
                yield " (No Position)
                            <span style=\"display: inline-block; width: 15px; height: 15px; background-color: ";
                // line 125
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "statut", [], "any", false, false, false, 125) == "Actif")) ? ("green") : ("red"));
                yield "; margin-left: 5px; vertical-align: middle;\"></span>
                        </span>
                    </div>
                ";
            }
            // line 129
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['joueur'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        yield "            ";
        if ( !(isset($context["hasOthers"]) || array_key_exists("hasOthers", $context) ? $context["hasOthers"] : (function () { throw new RuntimeError('Variable "hasOthers" does not exist.', 130, $this->source); })())) {
            // line 131
            yield "                <p class=\"no-players\">No players without a position.</p>
            ";
        }
        // line 133
        yield "        </div>
    </div>
    <div class=\"js-stage stage texture\">
        <div class=\"js-world world\">
            <div class=\"team js-team\">
                <!-- Formation positions will be populated by JavaScript -->
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
        <div class=\"loading js-loading\">PLEASE WAIT...</div>
    </div>
</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 167
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

        // line 168
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/velocity/1.5.2/velocity.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"";
        // line 171
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
        return array (  497 => 171,  490 => 168,  477 => 167,  434 => 133,  430 => 131,  427 => 130,  421 => 129,  414 => 125,  410 => 124,  405 => 122,  401 => 121,  397 => 120,  393 => 119,  389 => 118,  385 => 117,  381 => 116,  377 => 115,  371 => 112,  368 => 111,  365 => 110,  362 => 109,  357 => 108,  355 => 107,  351 => 105,  345 => 104,  339 => 102,  336 => 101,  330 => 100,  327 => 99,  320 => 95,  314 => 94,  309 => 92,  305 => 91,  301 => 90,  297 => 89,  293 => 88,  289 => 87,  285 => 86,  281 => 85,  277 => 84,  273 => 83,  269 => 82,  259 => 80,  256 => 79,  253 => 78,  247 => 77,  244 => 76,  241 => 75,  238 => 74,  233 => 73,  230 => 72,  227 => 71,  222 => 70,  220 => 69,  215 => 68,  211 => 67,  208 => 66,  206 => 60,  201 => 58,  194 => 53,  181 => 51,  177 => 50,  171 => 47,  136 => 14,  123 => 13,  107 => 7,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Football Team Layout{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('/vendor/css/football_layout.css') }}\">
    <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap\" rel=\"stylesheet\">
    <!-- Add Boxicons for the toast icon -->
    <link rel=\"stylesheet\" href=\"https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css\">
{% endblock %}

{% block body %}
<main>
    <!-- Toast Container -->
    <div class=\"position-fixed bottom-0 end-0 p-3\" style=\"z-index: 11\">
        <div id=\"invalidDropToast\" class=\"bs-toast toast toast-placement-ex m-2 fade hide\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\" data-delay=\"5000\">
            <div class=\"toast-header\">
                <i class=\"bx bx-bell me-2\"></i>
                <div class=\"me-auto fw-semibold\">Erreur de Placement</div>
                <small>Just now</small>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
            </div>
            <div class=\"toast-body\">
                <!-- Message will be set by JavaScript -->
            </div>
        </div>
    </div>

    <div class=\"static\">
        <h1 class=\"js-heading\">FOOTBALL FORMATION</h1>
        <p class=\"js-subheading\">Drag players onto the field to build your team.<br><span style=\"font-size: 11px\">Ensure players match their position roles.</span></p>
        
        <!-- Add Toast Color Selector -->
        <div class=\"toast-color-selector mb-3\">
            <label for=\"toastColorSelect\">Toast Color:</label>
            <select id=\"toastColorSelect\" class=\"form-select color-dropdown\">
                <option value=\"bg-danger\" selected>Danger (Red)</option>
                <option value=\"bg-primary\">Primary (Blue)</option>
                <option value=\"bg-success\">Success (Green)</option>
                <option value=\"bg-warning\">Warning (Yellow)</option>
                <option value=\"bg-info\">Info (Cyan)</option>
            </select>
        </div>

        <div class=\"formation-selector\">
            <form method=\"get\" action=\"{{ path('football_layout') }}\">
                <label for=\"formation\">Select Formation:</label>
                <select name=\"formation\" id=\"formationSelect\" onchange=\"this.form.submit()\">
                    {% for formation in formations %}
                        <option value=\"{{ formation }}\" {{ formation == selected_formation ? 'selected' : '' }}>{{ formation }}</option>
                    {% endfor %}
                </select>
            </form>
        </div>
        <div class=\"player-list\">
            <h5>Available Players</h5>
            <p>Debug: {{ joueurs|length }} players found.</p>

            {% set positionMapping = {
                'Gardien': ['GK'],
                'Défenseur': ['RB', 'LB', 'RWB', 'LWB', 'SW'],
                'Milieu': ['DM', 'CM', 'AM', 'RM', 'LM'],
                'Attaquant': ['RW', 'LW', 'CF', 'ST', 'SS']
            } %}

            {% for position, roles in positionMapping %}
                <h6>{{ position }}s</h6>
                {% set hasPlayers = false %}
                {% for joueur in joueurs %}
                    {% if joueur.poste is not empty %}
                        {% set matchesRole = false %}
                        {% for role in roles %}
                            {% if joueur.poste|lower == role|lower %}
                                {% set matchesRole = true %}
                            {% endif %}
                        {% endfor %}
                        {% if matchesRole %}
                            {% set hasPlayers = true %}
                            <p>Debug: Player {{ joueur.nom }} - Poste: {{ joueur.poste }}, Category: {{ position }}</p>
                            <div class=\"player-item\" draggable=\"true\" 
                                 data-player-id=\"{{ joueur.idJoueur }}\" 
                                 data-position=\"{{ joueur.poste|trim }}\"
                                 data-category=\"{{ position|trim }}\"
                                 data-name=\"{{ (joueur.nom ~ ' ' ~ joueur.prenom)|trim }}\"
                                 data-img=\"{{ joueur.profilePicture ? asset('/Uploads/profile_pictures/' ~ joueur.profilePicture) : asset('/Uploads/photos/default_avatar.png') }}\"
                                 data-goals=\"{{ joueur.performanceJoueur ? joueur.performanceJoueur.butsMarques : 0 }}\"
                                 data-matches=\"{{ joueur.performanceJoueur ? joueur.performanceJoueur.minutesJouees // 90 : 0 }}\"
                                 data-height=\"{{ joueur.taille ? joueur.taille ~ 'm' : 'N/A' }}\">
                                <img src=\"{{ joueur.profilePicture ? asset('/Uploads/profile_pictures/' ~ joueur.profilePicture) : asset('/Uploads/photos/default_avatar.png') }}\" 
                                     alt=\"{{ joueur.nom }}\" 
                                     onerror=\"this.onerror=null; this.src='{{ asset('/Uploads/photos/default_avatar.png') }}';\">
                                <span>
                                    {{ joueur.nom ~ ' ' ~ joueur.prenom }} ({{ joueur.poste }})
                                    <span style=\"display: inline-block; width: 15px; height: 15px; background-color: {{ joueur.statut == 'Actif' ? 'green' : 'red' }}; margin-left: 5px; vertical-align: middle;\"></span>
                                </span>
                            </div>
                        {% endif %}
                    {% endif %}
                {% endfor %}
                {% if not hasPlayers %}
                    <p class=\"no-players\">No {{ position|lower }}s available.</p>
                {% endif %}
            {% endfor %}

            <h6>Other Players (No Position Specified)</h6>
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
                         data-height=\"{{ joueur.taille ? joueur.taille ~ 'm' : 'N/A' }}\">
                        <img src=\"{{ joueur.profilePicture ? asset('/Uploads/profile_pictures/' ~ joueur.profilePicture) : asset('/Uploads/photos/default_avatar.png') }}\" 
                             alt=\"{{ joueur.nom }}\" 
                             onerror=\"this.onerror=null; this.src='{{ asset('/Uploads/photos/default_avatar.png') }}';\">
                        <span>
                            {{ joueur.nom ~ ' ' ~ joueur.prenom }} (No Position)
                            <span style=\"display: inline-block; width: 15px; height: 15px; background-color: {{ joueur.statut == 'Actif' ? 'green' : 'red' }}; margin-left: 5px; vertical-align: middle;\"></span>
                        </span>
                    </div>
                {% endif %}
            {% endfor %}
            {% if not hasOthers %}
                <p class=\"no-players\">No players without a position.</p>
            {% endif %}
        </div>
    </div>
    <div class=\"js-stage stage texture\">
        <div class=\"js-world world\">
            <div class=\"team js-team\">
                <!-- Formation positions will be populated by JavaScript -->
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
        <div class=\"loading js-loading\">PLEASE WAIT...</div>
    </div>
</main>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/velocity/1.5.2/velocity.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    <script src=\"{{ asset('/vendor/js/football_layout.js') }}\"></script>
{% endblock %}", "joueur/football_layout.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\Web2\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\joueur\\football_layout.html.twig");
    }
}
