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

/* joueur/scouting.html.twig */
class __TwigTemplate_b2039a70b2cb096662a3304ed44d1f0f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/scouting.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/scouting.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "joueur/scouting.html.twig", 1);
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
        yield from $this->loadTemplate("searchbar.html.twig", "joueur/scouting.html.twig", 4)->unwrap()->yield($context);
        
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

        yield "Meilleurs Buteurs";
        
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
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Joueurs /</span> Meilleurs Buteurs
            </h4>

            <!-- Form for selecting league and season -->
            <div class=\"card mb-4\">
                <h5 class=\"card-header\">Sélectionner une Ligue et une Saison</h5>
                <div class=\"card-body\">
                    <form method=\"get\" action=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_scouting");
        yield "\">
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label for=\"league\" class=\"form-label\">Ligue</label>
                                <select name=\"league\" id=\"league\" class=\"form-select\" required>
                                    <option value=\"39\" ";
        // line 25
        if ((array_key_exists("selected_league", $context) && ((isset($context["selected_league"]) || array_key_exists("selected_league", $context) ? $context["selected_league"] : (function () { throw new RuntimeError('Variable "selected_league" does not exist.', 25, $this->source); })()) == 39))) {
            yield "selected";
        }
        yield ">Premier League (England)</option>
                                    <option value=\"40\" ";
        // line 26
        if ((array_key_exists("selected_league", $context) && ((isset($context["selected_league"]) || array_key_exists("selected_league", $context) ? $context["selected_league"] : (function () { throw new RuntimeError('Variable "selected_league" does not exist.', 26, $this->source); })()) == 40))) {
            yield "selected";
        }
        yield ">Championship (England)</option>
                                    <option value=\"135\" ";
        // line 27
        if ((array_key_exists("selected_league", $context) && ((isset($context["selected_league"]) || array_key_exists("selected_league", $context) ? $context["selected_league"] : (function () { throw new RuntimeError('Variable "selected_league" does not exist.', 27, $this->source); })()) == 135))) {
            yield "selected";
        }
        yield ">Serie A (Italy)</option>
                                    <option value=\"78\" ";
        // line 28
        if ((array_key_exists("selected_league", $context) && ((isset($context["selected_league"]) || array_key_exists("selected_league", $context) ? $context["selected_league"] : (function () { throw new RuntimeError('Variable "selected_league" does not exist.', 28, $this->source); })()) == 78))) {
            yield "selected";
        }
        yield ">Bundesliga (Germany)</option>
                                    <option value=\"61\" ";
        // line 29
        if ((array_key_exists("selected_league", $context) && ((isset($context["selected_league"]) || array_key_exists("selected_league", $context) ? $context["selected_league"] : (function () { throw new RuntimeError('Variable "selected_league" does not exist.', 29, $this->source); })()) == 61))) {
            yield "selected";
        }
        yield ">Ligue 1 (France)</option>
                                    <option value=\"140\" ";
        // line 30
        if ((array_key_exists("selected_league", $context) && ((isset($context["selected_league"]) || array_key_exists("selected_league", $context) ? $context["selected_league"] : (function () { throw new RuntimeError('Variable "selected_league" does not exist.', 30, $this->source); })()) == 140))) {
            yield "selected";
        }
        yield ">La Liga (Spain)</option>
                                </select>
                            </div>
                            <div class=\"col-md-4 mb-3\">
                                <label for=\"season\" class=\"form-label\">Saison</label>
                                <select name=\"season\" id=\"season\" class=\"form-select\" required>
                                    <option value=\"2023\" ";
        // line 36
        if ((array_key_exists("selected_season", $context) && ((isset($context["selected_season"]) || array_key_exists("selected_season", $context) ? $context["selected_season"] : (function () { throw new RuntimeError('Variable "selected_season" does not exist.', 36, $this->source); })()) == 2023))) {
            yield "selected";
        }
        yield ">2023</option>
                                    <option value=\"2022\" ";
        // line 37
        if ((array_key_exists("selected_season", $context) && ((isset($context["selected_season"]) || array_key_exists("selected_season", $context) ? $context["selected_season"] : (function () { throw new RuntimeError('Variable "selected_season" does not exist.', 37, $this->source); })()) == 2022))) {
            yield "selected";
        }
        yield ">2022</option>
                                    <option value=\"2021\" ";
        // line 38
        if ((array_key_exists("selected_season", $context) && ((isset($context["selected_season"]) || array_key_exists("selected_season", $context) ? $context["selected_season"] : (function () { throw new RuntimeError('Variable "selected_season" does not exist.', 38, $this->source); })()) == 2021))) {
            yield "selected";
        }
        yield ">2021</option>
                                </select>
                            </div>
                            <div class=\"col-md-2 mb-3 d-flex align-items-end\">
                                <button type=\"submit\" class=\"btn btn-primary w-100\">Filtrer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Top Scorers Table -->
            <div class=\"card mb-4\">
                <h5 class=\"card-header\">
                    Meilleurs Buteurs
                    ";
        // line 53
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["top_scorers"]) || array_key_exists("top_scorers", $context) ? $context["top_scorers"] : (function () { throw new RuntimeError('Variable "top_scorers" does not exist.', 53, $this->source); })())) > 0)) {
            // line 54
            yield "                        (Saison ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_scorers"]) || array_key_exists("top_scorers", $context) ? $context["top_scorers"] : (function () { throw new RuntimeError('Variable "top_scorers" does not exist.', 54, $this->source); })()), 0, [], "array", false, false, false, 54), "season_id", [], "any", false, false, false, 54), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["top_scorers"]) || array_key_exists("top_scorers", $context) ? $context["top_scorers"] : (function () { throw new RuntimeError('Variable "top_scorers" does not exist.', 54, $this->source); })()), 0, [], "array", false, false, false, 54), "season_id", [], "any", false, false, false, 54) + 1), "html", null, true);
            yield ")
                    ";
        }
        // line 56
        yield "                </h5>
                <div class=\"table-responsive text-nowrap\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Position</th>
                                <th>Joueur</th>
                                <th>Équipe</th>
                                <th>Buts</th>
                            </tr>
                        </thead>
                        <tbody class=\"table-border-bottom-0\">
                            ";
        // line 68
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["top_scorers"]) || array_key_exists("top_scorers", $context) ? $context["top_scorers"] : (function () { throw new RuntimeError('Variable "top_scorers" does not exist.', 68, $this->source); })())) > 0)) {
            // line 69
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["top_scorers"]) || array_key_exists("top_scorers", $context) ? $context["top_scorers"] : (function () { throw new RuntimeError('Variable "top_scorers" does not exist.', 69, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["scorer"]) {
                // line 70
                yield "                                    <tr>
                                        <td>";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["scorer"], "position", [], "any", false, false, false, 71), "html", null, true);
                yield "</td>
                                        <td><strong>";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["scorer"], "player_name", [], "any", false, false, false, 72), "html", null, true);
                yield "</strong></td>
                                        <td>";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["scorer"], "team_name", [], "any", false, false, false, 73), "html", null, true);
                yield "</td>
                                        <td>";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["scorer"], "goals", [], "any", false, false, false, 74), "html", null, true);
                yield "</td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['scorer'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            yield "                            ";
        } else {
            // line 78
            yield "                                <tr>
                                    <td colspan=\"4\" class=\"text-center\">Aucun buteur trouvé</td>
                                </tr>
                            ";
        }
        // line 82
        yield "                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Error Message -->
            ";
        // line 88
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 88, $this->source); })())) {
            // line 89
            yield "                <div class=\"alert alert-danger\" role=\"alert\">
                    ";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 90, $this->source); })()), "html", null, true);
            yield "
                </div>
            ";
        }
        // line 93
        yield "        </div>
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
        return "joueur/scouting.html.twig";
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
        return array (  302 => 93,  296 => 90,  293 => 89,  291 => 88,  283 => 82,  277 => 78,  274 => 77,  265 => 74,  261 => 73,  257 => 72,  253 => 71,  250 => 70,  245 => 69,  243 => 68,  229 => 56,  221 => 54,  219 => 53,  199 => 38,  193 => 37,  187 => 36,  176 => 30,  170 => 29,  164 => 28,  158 => 27,  152 => 26,  146 => 25,  138 => 20,  126 => 10,  113 => 9,  90 => 7,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block title %}Meilleurs Buteurs{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Joueurs /</span> Meilleurs Buteurs
            </h4>

            <!-- Form for selecting league and season -->
            <div class=\"card mb-4\">
                <h5 class=\"card-header\">Sélectionner une Ligue et une Saison</h5>
                <div class=\"card-body\">
                    <form method=\"get\" action=\"{{ path('joueur_scouting') }}\">
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                <label for=\"league\" class=\"form-label\">Ligue</label>
                                <select name=\"league\" id=\"league\" class=\"form-select\" required>
                                    <option value=\"39\" {% if selected_league is defined and selected_league == 39 %}selected{% endif %}>Premier League (England)</option>
                                    <option value=\"40\" {% if selected_league is defined and selected_league == 40 %}selected{% endif %}>Championship (England)</option>
                                    <option value=\"135\" {% if selected_league is defined and selected_league == 135 %}selected{% endif %}>Serie A (Italy)</option>
                                    <option value=\"78\" {% if selected_league is defined and selected_league == 78 %}selected{% endif %}>Bundesliga (Germany)</option>
                                    <option value=\"61\" {% if selected_league is defined and selected_league == 61 %}selected{% endif %}>Ligue 1 (France)</option>
                                    <option value=\"140\" {% if selected_league is defined and selected_league == 140 %}selected{% endif %}>La Liga (Spain)</option>
                                </select>
                            </div>
                            <div class=\"col-md-4 mb-3\">
                                <label for=\"season\" class=\"form-label\">Saison</label>
                                <select name=\"season\" id=\"season\" class=\"form-select\" required>
                                    <option value=\"2023\" {% if selected_season is defined and selected_season == 2023 %}selected{% endif %}>2023</option>
                                    <option value=\"2022\" {% if selected_season is defined and selected_season == 2022 %}selected{% endif %}>2022</option>
                                    <option value=\"2021\" {% if selected_season is defined and selected_season == 2021 %}selected{% endif %}>2021</option>
                                </select>
                            </div>
                            <div class=\"col-md-2 mb-3 d-flex align-items-end\">
                                <button type=\"submit\" class=\"btn btn-primary w-100\">Filtrer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Top Scorers Table -->
            <div class=\"card mb-4\">
                <h5 class=\"card-header\">
                    Meilleurs Buteurs
                    {% if top_scorers|length > 0 %}
                        (Saison {{ top_scorers[0].season_id }}/{{ top_scorers[0].season_id + 1 }})
                    {% endif %}
                </h5>
                <div class=\"table-responsive text-nowrap\">
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Position</th>
                                <th>Joueur</th>
                                <th>Équipe</th>
                                <th>Buts</th>
                            </tr>
                        </thead>
                        <tbody class=\"table-border-bottom-0\">
                            {% if top_scorers|length > 0 %}
                                {% for scorer in top_scorers %}
                                    <tr>
                                        <td>{{ scorer.position }}</td>
                                        <td><strong>{{ scorer.player_name }}</strong></td>
                                        <td>{{ scorer.team_name }}</td>
                                        <td>{{ scorer.goals }}</td>
                                    </tr>
                                {% endfor %}
                            {% else %}
                                <tr>
                                    <td colspan=\"4\" class=\"text-center\">Aucun buteur trouvé</td>
                                </tr>
                            {% endif %}
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Error Message -->
            {% if error %}
                <div class=\"alert alert-danger\" role=\"alert\">
                    {{ error }}
                </div>
            {% endif %}
        </div>
    </div>
{% endblock %}", "joueur/scouting.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\Web2\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\joueur\\scouting.html.twig");
    }
}
