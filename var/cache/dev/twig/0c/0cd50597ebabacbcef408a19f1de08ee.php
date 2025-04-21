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

/* joueur/statistics.html.twig */
class __TwigTemplate_c894273cb67572426e7f73f0c56dedad extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/statistics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/statistics.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "joueur/statistics.html.twig", 1);
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

        yield "Player Statistics";
        
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
        yield "<h4 class=\"fw-bold py-3 mb-4\">Player Statistics</h4>

<div class=\"row\">

    <!-- Average Height -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/ruler.png"), "html", null, true);
        yield "\" alt=\"Height\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Average Height</span>
                <h3 class=\"card-title mb-2\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["averageHeight"]) || array_key_exists("averageHeight", $context) ? $context["averageHeight"] : (function () { throw new RuntimeError('Variable "averageHeight" does not exist.', 20, $this->source); })()), 2), "html", null, true);
        yield " m</h3>
                <small class=\"text-muted\">Based on all registered players</small>
            </div>
        </div>
    </div>

    <!-- Average Weight -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/weight.png"), "html", null, true);
        yield "\" alt=\"Weight\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Average Weight</span>
                <h3 class=\"card-title mb-2\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["averageWeight"]) || array_key_exists("averageWeight", $context) ? $context["averageWeight"] : (function () { throw new RuntimeError('Variable "averageWeight" does not exist.', 36, $this->source); })()), 2), "html", null, true);
        yield " kg</h3>
                <small class=\"text-muted\">Based on all registered players</small>
            </div>
        </div>
    </div>

    <!-- Evaluated Players -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/checklist.png"), "html", null, true);
        yield "\" alt=\"Evaluations\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Evaluated Players</span>
                <h3 class=\"card-title mb-2\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["evaluatedPlayers"]) || array_key_exists("evaluatedPlayers", $context) ? $context["evaluatedPlayers"] : (function () { throw new RuntimeError('Variable "evaluatedPlayers" does not exist.', 52, $this->source); })()), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPlayers"]) || array_key_exists("totalPlayers", $context) ? $context["totalPlayers"] : (function () { throw new RuntimeError('Variable "totalPlayers" does not exist.', 52, $this->source); })()), "html", null, true);
        yield "</h3>
                <small class=\"text-success fw-semibold\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["evaluationRate"]) || array_key_exists("evaluationRate", $context) ? $context["evaluationRate"] : (function () { throw new RuntimeError('Variable "evaluationRate" does not exist.', 53, $this->source); })()), 1), "html", null, true);
        yield "% Coverage</small>
            </div>
        </div>
    </div>

    <!-- Average Endurance -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/clock.png"), "html", null, true);
        yield "\" alt=\"Endurance\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Average Endurance</span>
                <h3 class=\"card-title mb-2\">";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, (isset($context["averageScores"]) || array_key_exists("averageScores", $context) ? $context["averageScores"] : (function () { throw new RuntimeError('Variable "averageScores" does not exist.', 68, $this->source); })()), "niveauEndurance", [], "any", false, false, false, 68), 1), "html", null, true);
        yield "/10</h3>
                <small class=\"text-muted\">Based on evaluated players</small>
            </div>
        </div>
    </div>

    <!-- Average Strength -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/dumbbell.png"), "html", null, true);
        yield "\" alt=\"Strength\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Average Strength</span>
                <h3 class=\"card-title mb-2\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, (isset($context["averageScores"]) || array_key_exists("averageScores", $context) ? $context["averageScores"] : (function () { throw new RuntimeError('Variable "averageScores" does not exist.', 84, $this->source); })()), "forcePhysique", [], "any", false, false, false, 84), 1), "html", null, true);
        yield "/10</h3>
                <small class=\"text-muted\">Based on evaluated players</small>
            </div>
        </div>
    </div>

    <!-- Average Speed -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/run.png"), "html", null, true);
        yield "\" alt=\"Speed\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Average Speed</span>
                <h3 class=\"card-title mb-2\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, (isset($context["averageScores"]) || array_key_exists("averageScores", $context) ? $context["averageScores"] : (function () { throw new RuntimeError('Variable "averageScores" does not exist.', 100, $this->source); })()), "vitesse", [], "any", false, false, false, 100), 1), "html", null, true);
        yield "/10</h3>
                <small class=\"text-muted\">Based on evaluated players</small>
            </div>
        </div>
    </div>
</div>

<div class=\"row\">
    <!-- Sport Distribution Chart -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Sport Distribution</h5></div>
            <div class=\"card-body\"><div id=\"sportDistributionChart\"></div></div>
        </div>
    </div>

    <!-- Statut Distribution Chart -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Statut Distribution</h5></div>
            <div class=\"card-body\"><div id=\"statutChart\"></div></div>
        </div>
    </div>

    <!-- Poste Distribution Chart -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Position Distribution</h5></div>
            <div class=\"card-body\"><div id=\"posteChart\"></div></div>
        </div>
    </div>

    <!-- Top Players Table -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Top Physical Performers</h5></div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Player</th>
                                <th>Score</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["topPlayers"]) || array_key_exists("topPlayers", $context) ? $context["topPlayers"] : (function () { throw new RuntimeError('Variable "topPlayers" does not exist.', 147, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 148
            yield "                                <tr>
                                    <td>";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["player"], "prenom", [], "any", false, false, false, 149), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["player"], "nom", [], "any", false, false, false, 149), "html", null, true);
            yield "</td>
                                    <td>";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round(CoreExtension::getAttribute($this->env, $this->source, $context["player"], "score", [], "any", false, false, false, 150), 1), "html", null, true);
            yield "/10</td>
                                    <td>
                                        <a href=\"";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["player"], "idJoueur", [], "any", false, false, false, 152)]), "html", null, true);
            yield "\"
                                           class=\"btn btn-sm btn-outline-primary\">View</a>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 156
        if (!$context['_iterated']) {
            // line 157
            yield "                                <tr>
                                    <td colspan=\"3\">No evaluations available.</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['player'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Evaluations Table -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Recent Evaluations (Last 30 Days)</h5></div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Player</th>
                                <th>Date</th>
                                <th>Score</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 183
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recentEvaluations"]) || array_key_exists("recentEvaluations", $context) ? $context["recentEvaluations"] : (function () { throw new RuntimeError('Variable "recentEvaluations" does not exist.', 183, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["eval"]) {
            // line 184
            yield "                                <tr>
                                    <td>";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["eval"], "joueur", [], "any", false, false, false, 185), "prenom", [], "any", false, false, false, 185), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["eval"], "joueur", [], "any", false, false, false, 185), "nom", [], "any", false, false, false, 185), "html", null, true);
            yield "</td>
                                    <td>";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["eval"], "dateEvaluation", [], "any", false, false, false, 186), "d/m/Y"), "html", null, true);
            yield "</td>
                                    <td>
                                        ";
            // line 188
            $context["score"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["eval"], "niveauEndurance", [], "any", false, false, false, 188) + CoreExtension::getAttribute($this->env, $this->source, $context["eval"], "forcePhysique", [], "any", false, false, false, 188)) + CoreExtension::getAttribute($this->env, $this->source, $context["eval"], "vitesse", [], "any", false, false, false, 188)) / 3);
            // line 189
            yield "                                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::round((isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 189, $this->source); })()), 1), "html", null, true);
            yield "/10
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 192
        if (!$context['_iterated']) {
            // line 193
            yield "                                <tr>
                                    <td colspan=\"3\">No recent evaluations.</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['eval'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- All Players List -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">All Players</h5></div>
            <div class=\"card-body\" style=\"max-height: 400px; overflow-y: auto;\">
                <ul class=\"p-0 m-0\">
                    ";
        // line 210
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allPlayers"]) || array_key_exists("allPlayers", $context) ? $context["allPlayers"] : (function () { throw new RuntimeError('Variable "allPlayers" does not exist.', 210, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["joueur"]) {
            // line 211
            yield "                        <li class=\"d-flex mb-4 pb-1\">
                            <div class=\"avatar flex-shrink-0 me-3\">
                                <img src=\"";
            // line 213
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "profilePictureUrl", [], "any", false, false, false, 213)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "profilePictureUrl", [], "any", false, false, false, 213), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/default-avatar.png"), "html", null, true)));
            yield "\"
                                     alt=\"Player\" class=\"rounded\" />
                            </div>
                            <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                <div class=\"me-2\">
                                    <h6 class=\"mb-0\">";
            // line 218
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "prenom", [], "any", false, false, false, 218), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "nom", [], "any", false, false, false, 218), "html", null, true);
            yield "</h6>
                                    <small class=\"text-muted\">";
            // line 219
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "sport", [], "any", false, true, false, 219), "nomSport", [], "any", true, true, false, 219) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "sport", [], "any", false, false, false, 219), "nomSport", [], "any", false, false, false, 219)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "sport", [], "any", false, false, false, 219), "nomSport", [], "any", false, false, false, 219), "html", null, true)) : ("Unknown Sport"));
            yield "</small>
                                </div>
                                <div class=\"user-progress\">
                                    <small class=\"fw-semibold\">";
            // line 222
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "taille", [], "any", false, false, false, 222)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "taille", [], "any", false, false, false, 222) . " m"), "html", null, true)) : ("N/A"));
            yield "</small>
                                </div>
                            </div>
                        </li>
                    ";
            $context['_iterated'] = true;
        }
        // line 226
        if (!$context['_iterated']) {
            // line 227
            yield "                        <li>No players found.</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['joueur'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 229
        yield "                </ul>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 236
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

        // line 237
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Sport Distribution
            new ApexCharts(document.querySelector(\"#sportDistributionChart\"), {
                chart: { type: 'pie', height: 350 },
                series: [";
        // line 243
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sportDistribution"]) || array_key_exists("sportDistribution", $context) ? $context["sportDistribution"] : (function () { throw new RuntimeError('Variable "sportDistribution" does not exist.', 243, $this->source); })()));
        foreach ($context['_seq'] as $context["sport"] => $context["count"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            yield ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['sport'], $context['count'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                labels: [";
        // line 244
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys((isset($context["sportDistribution"]) || array_key_exists("sportDistribution", $context) ? $context["sportDistribution"] : (function () { throw new RuntimeError('Variable "sportDistribution" does not exist.', 244, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["sport"]) {
            yield "'";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["sport"], "html", null, true);
            yield "',";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sport'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "]
            }).render();

            // Statut Distribution
            new ApexCharts(document.querySelector(\"#statutChart\"), {
                chart: { type: 'donut', height: 350 },
                series: [";
        // line 250
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statutDistribution"]) || array_key_exists("statutDistribution", $context) ? $context["statutDistribution"] : (function () { throw new RuntimeError('Variable "statutDistribution" does not exist.', 250, $this->source); })()));
        foreach ($context['_seq'] as $context["statut"] => $context["count"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["count"], "html", null, true);
            yield ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['statut'], $context['count'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                labels: [";
        // line 251
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::keys((isset($context["statutDistribution"]) || array_key_exists("statutDistribution", $context) ? $context["statutDistribution"] : (function () { throw new RuntimeError('Variable "statutDistribution" does not exist.', 251, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["statut"]) {
            yield "'";
            yield (((true &&  !(null === $context["statut"]))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["statut"], "html", null, true)) : ("Non défini"));
            yield "',";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['statut'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "]
            }).render();

            // Poste Distribution
            new ApexCharts(document.querySelector(\"#posteChart\"), {
                chart: { type: 'bar', height: 350 },
                series: [{
                    name: \"Nombre de joueurs\",
                    data: [";
        // line 259
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["posteDistribution"]) || array_key_exists("posteDistribution", $context) ? $context["posteDistribution"] : (function () { throw new RuntimeError('Variable "posteDistribution" does not exist.', 259, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["poste"]) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["poste"], "count", [], "any", false, false, false, 259), "html", null, true);
            yield ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['poste'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "]
                }],
                xaxis: {
                    categories: [";
        // line 262
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["posteDistribution"]) || array_key_exists("posteDistribution", $context) ? $context["posteDistribution"] : (function () { throw new RuntimeError('Variable "posteDistribution" does not exist.', 262, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["poste"]) {
            yield "'";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["poste"], "poste", [], "any", true, true, false, 262) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["poste"], "poste", [], "any", false, false, false, 262)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["poste"], "poste", [], "any", false, false, false, 262), "html", null, true)) : ("Non défini"));
            yield "',";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['poste'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield "],
                    labels: { rotate: -45 }
                }
            }).render();
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
        return "joueur/statistics.html.twig";
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
        return array (  566 => 262,  552 => 259,  532 => 251,  520 => 250,  502 => 244,  490 => 243,  480 => 237,  467 => 236,  451 => 229,  444 => 227,  442 => 226,  433 => 222,  427 => 219,  421 => 218,  413 => 213,  409 => 211,  404 => 210,  389 => 197,  380 => 193,  378 => 192,  369 => 189,  367 => 188,  362 => 186,  356 => 185,  353 => 184,  348 => 183,  324 => 161,  315 => 157,  313 => 156,  304 => 152,  299 => 150,  293 => 149,  290 => 148,  285 => 147,  235 => 100,  228 => 96,  213 => 84,  206 => 80,  191 => 68,  184 => 64,  170 => 53,  164 => 52,  157 => 48,  142 => 36,  135 => 32,  120 => 20,  113 => 16,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Player Statistics{% endblock %}

{% block body %}
<h4 class=\"fw-bold py-3 mb-4\">Player Statistics</h4>

<div class=\"row\">

    <!-- Average Height -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"{{ asset('img/icons/unicons/ruler.png') }}\" alt=\"Height\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Average Height</span>
                <h3 class=\"card-title mb-2\">{{ averageHeight|round(2) }} m</h3>
                <small class=\"text-muted\">Based on all registered players</small>
            </div>
        </div>
    </div>

    <!-- Average Weight -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"{{ asset('img/icons/unicons/weight.png') }}\" alt=\"Weight\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Average Weight</span>
                <h3 class=\"card-title mb-2\">{{ averageWeight|round(2) }} kg</h3>
                <small class=\"text-muted\">Based on all registered players</small>
            </div>
        </div>
    </div>

    <!-- Evaluated Players -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"{{ asset('img/icons/unicons/checklist.png') }}\" alt=\"Evaluations\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Evaluated Players</span>
                <h3 class=\"card-title mb-2\">{{ evaluatedPlayers }}/{{ totalPlayers }}</h3>
                <small class=\"text-success fw-semibold\">{{ evaluationRate|round(1) }}% Coverage</small>
            </div>
        </div>
    </div>

    <!-- Average Endurance -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"{{ asset('img/icons/unicons/clock.png') }}\" alt=\"Endurance\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Average Endurance</span>
                <h3 class=\"card-title mb-2\">{{ averageScores.niveauEndurance|round(1) }}/10</h3>
                <small class=\"text-muted\">Based on evaluated players</small>
            </div>
        </div>
    </div>

    <!-- Average Strength -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"{{ asset('img/icons/unicons/dumbbell.png') }}\" alt=\"Strength\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Average Strength</span>
                <h3 class=\"card-title mb-2\">{{ averageScores.forcePhysique|round(1) }}/10</h3>
                <small class=\"text-muted\">Based on evaluated players</small>
            </div>
        </div>
    </div>

    <!-- Average Speed -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"{{ asset('img/icons/unicons/run.png') }}\" alt=\"Speed\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Average Speed</span>
                <h3 class=\"card-title mb-2\">{{ averageScores.vitesse|round(1) }}/10</h3>
                <small class=\"text-muted\">Based on evaluated players</small>
            </div>
        </div>
    </div>
</div>

<div class=\"row\">
    <!-- Sport Distribution Chart -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Sport Distribution</h5></div>
            <div class=\"card-body\"><div id=\"sportDistributionChart\"></div></div>
        </div>
    </div>

    <!-- Statut Distribution Chart -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Statut Distribution</h5></div>
            <div class=\"card-body\"><div id=\"statutChart\"></div></div>
        </div>
    </div>

    <!-- Poste Distribution Chart -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Position Distribution</h5></div>
            <div class=\"card-body\"><div id=\"posteChart\"></div></div>
        </div>
    </div>

    <!-- Top Players Table -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Top Physical Performers</h5></div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Player</th>
                                <th>Score</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for player in topPlayers %}
                                <tr>
                                    <td>{{ player.prenom }} {{ player.nom }}</td>
                                    <td>{{ player.score|round(1) }}/10</td>
                                    <td>
                                        <a href=\"{{ path('joueur_show', {'id': player.idJoueur}) }}\"
                                           class=\"btn btn-sm btn-outline-primary\">View</a>
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"3\">No evaluations available.</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Evaluations Table -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Recent Evaluations (Last 30 Days)</h5></div>
            <div class=\"card-body\">
                <div class=\"table-responsive\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Player</th>
                                <th>Date</th>
                                <th>Score</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for eval in recentEvaluations %}
                                <tr>
                                    <td>{{ eval.joueur.prenom }} {{ eval.joueur.nom }}</td>
                                    <td>{{ eval.dateEvaluation|date('d/m/Y') }}</td>
                                    <td>
                                        {% set score = (eval.niveauEndurance + eval.forcePhysique + eval.vitesse) / 3 %}
                                        {{ score|round(1) }}/10
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"3\">No recent evaluations.</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- All Players List -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">All Players</h5></div>
            <div class=\"card-body\" style=\"max-height: 400px; overflow-y: auto;\">
                <ul class=\"p-0 m-0\">
                    {% for joueur in allPlayers %}
                        <li class=\"d-flex mb-4 pb-1\">
                            <div class=\"avatar flex-shrink-0 me-3\">
                                <img src=\"{{ joueur.profilePictureUrl ?: asset('img/default-avatar.png') }}\"
                                     alt=\"Player\" class=\"rounded\" />
                            </div>
                            <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                <div class=\"me-2\">
                                    <h6 class=\"mb-0\">{{ joueur.prenom }} {{ joueur.nom }}</h6>
                                    <small class=\"text-muted\">{{ joueur.sport.nomSport ?? 'Unknown Sport' }}</small>
                                </div>
                                <div class=\"user-progress\">
                                    <small class=\"fw-semibold\">{{ joueur.taille ? joueur.taille ~ ' m' : 'N/A' }}</small>
                                </div>
                            </div>
                        </li>
                    {% else %}
                        <li>No players found.</li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Sport Distribution
            new ApexCharts(document.querySelector(\"#sportDistributionChart\"), {
                chart: { type: 'pie', height: 350 },
                series: [{% for sport, count in sportDistribution %}{{ count }},{% endfor %}],
                labels: [{% for sport in sportDistribution|keys %}'{{ sport }}',{% endfor %}]
            }).render();

            // Statut Distribution
            new ApexCharts(document.querySelector(\"#statutChart\"), {
                chart: { type: 'donut', height: 350 },
                series: [{% for statut, count in statutDistribution %}{{ count }},{% endfor %}],
                labels: [{% for statut in statutDistribution|keys %}'{{ statut ?? \"Non défini\" }}',{% endfor %}]
            }).render();

            // Poste Distribution
            new ApexCharts(document.querySelector(\"#posteChart\"), {
                chart: { type: 'bar', height: 350 },
                series: [{
                    name: \"Nombre de joueurs\",
                    data: [{% for poste in posteDistribution %}{{ poste.count }},{% endfor %}]
                }],
                xaxis: {
                    categories: [{% for poste in posteDistribution %}'{{ poste.poste ?? \"Non défini\" }}',{% endfor %}],
                    labels: { rotate: -45 }
                }
            }).render();
        });
    </script>
{% endblock %}", "joueur/statistics.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-integration\\matchupz-web-integration\\templates\\joueur\\statistics.html.twig");
    }
}
