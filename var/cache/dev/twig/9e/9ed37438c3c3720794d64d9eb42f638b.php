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

/* joueur/football_layout.twig */
class __TwigTemplate_fd24cd9b78d9afd417c4192415cbec50 extends Template
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
            'sidebar' => [$this, 'block_sidebar'],
            'searchbar' => [$this, 'block_searchbar'],
            'football_layout' => [$this, 'block_football_layout'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/football_layout.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/football_layout.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "joueur/football_layout.twig", 1);
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

        // line 4
        yield "    Football Layout | ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/css/football_layout.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
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
        yield "<div class=\"container-xxl flex-grow-1 container-p-y\">
    <div class=\"layout-wrapper layout-content-navbar\">
        <div class=\"layout-container\">
            <!-- Sidebar -->
            ";
        // line 17
        yield from $this->unwrap()->yieldBlock('sidebar', $context, $blocks);
        // line 20
        yield "
            <!-- Layout container -->
            <div class=\"layout-page\">
                <!-- Navbar/Searchbar -->
                ";
        // line 24
        yield from $this->unwrap()->yieldBlock('searchbar', $context, $blocks);
        // line 27
        yield "
                <!-- Content wrapper -->
                <div class=\"content-wrapper\">
                    <div class=\"container-xxl flex-grow-1 container-p-y\">
                        <!-- Formation Selector and Pitch -->
                        ";
        // line 32
        yield from $this->unwrap()->yieldBlock('football_layout', $context, $blocks);
        // line 67
        yield "
                        <!-- Main content block for child templates -->
                        ";
        // line 69
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 71
        yield "                    </div>

                    <!-- Footer -->
                    <div class=\"content-backdrop fade\"></div>
                </div>
            </div>
        </div>
        <div class=\"layout-overlay layout-menu-toggle\"></div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 18
        yield "                ";
        yield from $this->loadTemplate("sidebar.html.twig", "joueur/football_layout.twig", 18)->unwrap()->yield($context);
        // line 19
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 24
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

        // line 25
        yield "                    ";
        yield from $this->loadTemplate("searchbar.html.twig", "joueur/football_layout.twig", 25)->unwrap()->yield($context);
        // line 26
        yield "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 32
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_football_layout(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "football_layout"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "football_layout"));

        // line 33
        yield "                            <div class=\"card mb-4\">
                                <h5 class=\"card-header\">Football Formations</h5>
                                <div class=\"card-body\">
                                    <!-- Formation Selector -->
                                    <div class=\"mb-3\">
                                        <label for=\"formationSelect\" class=\"form-label\">Select Formation:</label>
                                        <select id=\"formationSelect\" class=\"form-select\">
                                            <option value=\"4-4-2\">4-4-2</option>
                                            <option value=\"4-2-3-1\">4-2-3-1</option>
                                            <option value=\"4-3-3\">4-3-3</option>
                                            <option value=\"3-5-2\">3-5-2</option>
                                            <option value=\"5-3-2\">5-3-2</option>
                                        </select>
                                    </div>
                                    <!-- Player List (for selection) -->
                                    <div class=\"mb-3\">
                                        <label class=\"form-label\">Available Players:</label>
                                        <ul id=\"playerList\" class=\"list-group\">
                                            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["joueurs"]) || array_key_exists("joueurs", $context) ? $context["joueurs"] : (function () { throw new RuntimeError('Variable "joueurs" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["joueur"]) {
            // line 52
            yield "                                                <li class=\"list-group-item\" data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "idJoueur", [], "any", false, false, false, 52), "html", null, true);
            yield "\" data-poste=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "poste", [], "any", false, false, false, 52), "html", null, true);
            yield "\">
                                                    ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "prenom", [], "any", false, false, false, 53), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "nom", [], "any", false, false, false, 53), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joueur"], "poste", [], "any", false, false, false, 53), "html", null, true);
            yield ")
                                                </li>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['joueur'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "                                        </ul>
                                    </div>
                                    <!-- Football Pitch -->
                                    <div id=\"football-pitch\" class=\"football-pitch\">
                                        <div class=\"pitch\">
                                            <!-- Positions will be populated by JavaScript -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 69
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

        // line 70
        yield "                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 83
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

        // line 84
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/vendor/js/football_layout.js"), "html", null, true);
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
        return "joueur/football_layout.twig";
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
        return array (  367 => 85,  362 => 84,  349 => 83,  338 => 70,  325 => 69,  304 => 56,  291 => 53,  284 => 52,  280 => 51,  260 => 33,  247 => 32,  236 => 26,  233 => 25,  220 => 24,  209 => 19,  206 => 18,  193 => 17,  172 => 71,  170 => 69,  166 => 67,  164 => 32,  157 => 27,  155 => 24,  149 => 20,  147 => 17,  141 => 13,  128 => 12,  115 => 9,  110 => 8,  97 => 7,  83 => 4,  70 => 3,  47 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    Football Layout | {{ parent() }}
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('build/vendor/css/football_layout.css') }}\" rel=\"stylesheet\">
{% endblock %}

{% block body %}
<div class=\"container-xxl flex-grow-1 container-p-y\">
    <div class=\"layout-wrapper layout-content-navbar\">
        <div class=\"layout-container\">
            <!-- Sidebar -->
            {% block sidebar %}
                {% include 'sidebar.html.twig' %}
            {% endblock %}

            <!-- Layout container -->
            <div class=\"layout-page\">
                <!-- Navbar/Searchbar -->
                {% block searchbar %}
                    {% include 'searchbar.html.twig' %}
                {% endblock %}

                <!-- Content wrapper -->
                <div class=\"content-wrapper\">
                    <div class=\"container-xxl flex-grow-1 container-p-y\">
                        <!-- Formation Selector and Pitch -->
                        {% block football_layout %}
                            <div class=\"card mb-4\">
                                <h5 class=\"card-header\">Football Formations</h5>
                                <div class=\"card-body\">
                                    <!-- Formation Selector -->
                                    <div class=\"mb-3\">
                                        <label for=\"formationSelect\" class=\"form-label\">Select Formation:</label>
                                        <select id=\"formationSelect\" class=\"form-select\">
                                            <option value=\"4-4-2\">4-4-2</option>
                                            <option value=\"4-2-3-1\">4-2-3-1</option>
                                            <option value=\"4-3-3\">4-3-3</option>
                                            <option value=\"3-5-2\">3-5-2</option>
                                            <option value=\"5-3-2\">5-3-2</option>
                                        </select>
                                    </div>
                                    <!-- Player List (for selection) -->
                                    <div class=\"mb-3\">
                                        <label class=\"form-label\">Available Players:</label>
                                        <ul id=\"playerList\" class=\"list-group\">
                                            {% for joueur in joueurs %}
                                                <li class=\"list-group-item\" data-id=\"{{ joueur.idJoueur }}\" data-poste=\"{{ joueur.poste }}\">
                                                    {{ joueur.prenom }} {{ joueur.nom }} ({{ joueur.poste }})
                                                </li>
                                            {% endfor %}
                                        </ul>
                                    </div>
                                    <!-- Football Pitch -->
                                    <div id=\"football-pitch\" class=\"football-pitch\">
                                        <div class=\"pitch\">
                                            <!-- Positions will be populated by JavaScript -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% endblock %}

                        <!-- Main content block for child templates -->
                        {% block content %}
                        {% endblock %}
                    </div>

                    <!-- Footer -->
                    <div class=\"content-backdrop fade\"></div>
                </div>
            </div>
        </div>
        <div class=\"layout-overlay layout-menu-toggle\"></div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('build/vendor/js/football_layout.js') }}\"></script>
{% endblock %}", "joueur/football_layout.twig", "C:\\Users\\louay\\Desktop\\Projet\\web\\matchupz-web-match\\templates\\joueur\\football_layout.twig");
    }
}
