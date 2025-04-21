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

/* club/show.html.twig */
class __TwigTemplate_f13aa4f6ef9ee99fc10b35b5b7ea30ba extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "club/show.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 3, $this->source); })()), "nomClub", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield "    <div class=\"container-xxl flex-grow-1 container-p-y\">
        <h4 class=\"fw-bold py-3 mb-4\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 7, $this->source); })()), "nomClub", [], "any", false, false, false, 7), "html", null, true);
        yield "</h4>

        <div class=\"card\">
            <div class=\"card-body\">
                <p><strong>Name:</strong> ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 11, $this->source); })()), "nomClub", [], "any", false, false, false, 11), "html", null, true);
        yield "</p>
                <p><strong>Photo:</strong></p>
                ";
        // line 13
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 13, $this->source); })()), "photoUrl", [], "any", false, false, false, 13)) {
            // line 14
            yield "                    <img 
                        src=\"";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 15, $this->source); })()), "photoUrl", [], "any", false, false, false, 15)), "html", null, true);
            yield "\" 
                        alt=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 16, $this->source); })()), "nomClub", [], "any", false, false, false, 16), "html", null, true);
            yield "\" 
                        style=\"max-width: 300px;\" 
                        onerror=\"this.onerror=null; this.src='";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/default_club.png"), "html", null, true);
            yield "';\"
                    >
                ";
        } else {
            // line 21
            yield "                    <img 
                        src=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/default_club.png"), "html", null, true);
            yield "\" 
                        alt=\"Default Club Image\" 
                        style=\"max-width: 300px;\"
                    >
                    <p class=\"text-muted\">No photo available for this club.</p>
                ";
        }
        // line 28
        yield "            </div>
        </div>

        <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_index");
        yield "\" class=\"btn btn-outline-secondary mt-3\">Vers La List</a>
        <a href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_edit", ["idClub" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 32, $this->source); })()), "idClub", [], "any", false, false, false, 32)]), "html", null, true);
        yield "\" class=\"btn btn-primary mt-3\">Modifier</a>
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
        return "club/show.html.twig";
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
        return array (  156 => 32,  152 => 31,  147 => 28,  138 => 22,  135 => 21,  129 => 18,  124 => 16,  120 => 15,  117 => 14,  115 => 13,  110 => 11,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ club.nomClub }}{% endblock %}

{% block body %}
    <div class=\"container-xxl flex-grow-1 container-p-y\">
        <h4 class=\"fw-bold py-3 mb-4\">{{ club.nomClub }}</h4>

        <div class=\"card\">
            <div class=\"card-body\">
                <p><strong>Name:</strong> {{ club.nomClub }}</p>
                <p><strong>Photo:</strong></p>
                {% if club.photoUrl %}
                    <img 
                        src=\"{{ asset(club.photoUrl) }}\" 
                        alt=\"{{ club.nomClub }}\" 
                        style=\"max-width: 300px;\" 
                        onerror=\"this.onerror=null; this.src='{{ asset('img/default_club.png') }}';\"
                    >
                {% else %}
                    <img 
                        src=\"{{ asset('img/default_club.png') }}\" 
                        alt=\"Default Club Image\" 
                        style=\"max-width: 300px;\"
                    >
                    <p class=\"text-muted\">No photo available for this club.</p>
                {% endif %}
            </div>
        </div>

        <a href=\"{{ path('club_index') }}\" class=\"btn btn-outline-secondary mt-3\">Vers La List</a>
        <a href=\"{{ path('club_edit', {'idClub': club.idClub}) }}\" class=\"btn btn-primary mt-3\">Modifier</a>
    </div>
{% endblock %}", "club/show.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-integration\\matchupz-web-integration\\templates\\club\\show.html.twig");
    }
}
