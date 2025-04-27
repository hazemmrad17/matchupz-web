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

/* sponsor/show.html.twig */
class __TwigTemplate_c2b0baba693b7416a024f99b409bdd25 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sponsor/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sponsor/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "sponsor/show.html.twig", 1);
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
                <span class=\"text-muted fw-light\">Sponsors /</span> Détails du Sponsor
            </h4>

            <div class=\"card\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <h5 class=\"card-title mb-0\">Sponsor #";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsor"]) || array_key_exists("sponsor", $context) ? $context["sponsor"] : (function () { throw new RuntimeError('Variable "sponsor" does not exist.', 12, $this->source); })()), "idSponsor", [], "any", false, false, false, 12), "html", null, true);
        yield "</h5>
                    <div>
                        <a href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsor"]) || array_key_exists("sponsor", $context) ? $context["sponsor"] : (function () { throw new RuntimeError('Variable "sponsor" does not exist.', 14, $this->source); })()), "idSponsor", [], "any", false, false, false, 14)]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-primary\">Modifier</a>
                        <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_main");
        yield "\" class=\"btn btn-sm btn-secondary\">Retour à la liste</a>

                        ";
        // line 18
        yield "                        <form method=\"post\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sponsor_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsor"]) || array_key_exists("sponsor", $context) ? $context["sponsor"] : (function () { throw new RuntimeError('Variable "sponsor" does not exist.', 18, $this->source); })()), "idSponsor", [], "any", false, false, false, 18)]), "html", null, true);
        yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce sponsor ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsor"]) || array_key_exists("sponsor", $context) ? $context["sponsor"] : (function () { throw new RuntimeError('Variable "sponsor" does not exist.', 19, $this->source); })()), "idSponsor", [], "any", false, false, false, 19))), "html", null, true);
        yield "\">
                            <button class=\"btn btn-sm btn-danger\" type=\"submit\">
                                Supprimer
                            </button>
                        </form>
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <h6>Nom</h6>
                            <p>";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsor"]) || array_key_exists("sponsor", $context) ? $context["sponsor"] : (function () { throw new RuntimeError('Variable "sponsor" does not exist.', 30, $this->source); })()), "nom", [], "any", false, false, false, 30), "html", null, true);
        yield "</p>
                        </div>
                        <div class=\"col-md-6\">
                            <h6>Contact</h6>
                            <p>";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsor"]) || array_key_exists("sponsor", $context) ? $context["sponsor"] : (function () { throw new RuntimeError('Variable "sponsor" does not exist.', 34, $this->source); })()), "contact", [], "any", false, false, false, 34), "html", null, true);
        yield "</p>
                        </div>
                    </div>
                    <div class=\"row mt-3\">
                        <div class=\"col-md-6\">
                            <h6>Pack</h6>
                            <p>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsor"]) || array_key_exists("sponsor", $context) ? $context["sponsor"] : (function () { throw new RuntimeError('Variable "sponsor" does not exist.', 40, $this->source); })()), "pack", [], "any", false, false, false, 40), "html", null, true);
        yield "</p>
                        </div>
                        <div class=\"col-md-6\">
                            <h6>Image</h6>
                            ";
        // line 44
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsor"]) || array_key_exists("sponsor", $context) ? $context["sponsor"] : (function () { throw new RuntimeError('Variable "sponsor" does not exist.', 44, $this->source); })()), "sponsorPicture", [], "any", false, false, false, 44)) {
            // line 45
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/sponsor_pictures/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsor"]) || array_key_exists("sponsor", $context) ? $context["sponsor"] : (function () { throw new RuntimeError('Variable "sponsor" does not exist.', 45, $this->source); })()), "sponsorPicture", [], "any", false, false, false, 45))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsor"]) || array_key_exists("sponsor", $context) ? $context["sponsor"] : (function () { throw new RuntimeError('Variable "sponsor" does not exist.', 45, $this->source); })()), "nom", [], "any", false, false, false, 45), "html", null, true);
            yield "\" style=\"max-width: 200px; max-height: 200px;\">
                            ";
        } else {
            // line 47
            yield "                                <p>Aucune image disponible</p>
                            ";
        }
        // line 49
        yield "                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        return "sponsor/show.html.twig";
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
        return array (  156 => 49,  152 => 47,  144 => 45,  142 => 44,  135 => 40,  126 => 34,  119 => 30,  105 => 19,  100 => 18,  95 => 15,  91 => 14,  86 => 12,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Sponsors /</span> Détails du Sponsor
            </h4>

            <div class=\"card\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <h5 class=\"card-title mb-0\">Sponsor #{{ sponsor.idSponsor }}</h5>
                    <div>
                        <a href=\"{{ path('sponsor_edit', {'id': sponsor.idSponsor}) }}\" class=\"btn btn-sm btn-primary\">Modifier</a>
                        <a href=\"{{ path('sponsor_main') }}\" class=\"btn btn-sm btn-secondary\">Retour à la liste</a>

                        {# Remove Button #}
                        <form method=\"post\" action=\"{{ path('sponsor_delete', {'id': sponsor.idSponsor}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce sponsor ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ sponsor.idSponsor) }}\">
                            <button class=\"btn btn-sm btn-danger\" type=\"submit\">
                                Supprimer
                            </button>
                        </form>
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <h6>Nom</h6>
                            <p>{{ sponsor.nom }}</p>
                        </div>
                        <div class=\"col-md-6\">
                            <h6>Contact</h6>
                            <p>{{ sponsor.contact }}</p>
                        </div>
                    </div>
                    <div class=\"row mt-3\">
                        <div class=\"col-md-6\">
                            <h6>Pack</h6>
                            <p>{{ sponsor.pack }}</p>
                        </div>
                        <div class=\"col-md-6\">
                            <h6>Image</h6>
                            {% if sponsor.sponsorPicture %}
                                <img src=\"{{ asset('uploads/sponsor_pictures/' ~ sponsor.sponsorPicture) }}\" alt=\"{{ sponsor.nom }}\" style=\"max-width: 200px; max-height: 200px;\">
                            {% else %}
                                <p>Aucune image disponible</p>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "sponsor/show.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-integration\\matchupz-web-integration\\templates\\sponsor\\show.html.twig");
    }
}
