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

/* contrat/contrat_front.html.twig */
class __TwigTemplate_0d42995d52451a475a566bc9e37c5436 extends Template
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
        return "front/baseM.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/contrat_front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/contrat_front.html.twig"));

        $this->parent = $this->loadTemplate("front/baseM.html.twig", "contrat/contrat_front.html.twig", 1);
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

        yield "Contrats";
        
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
        yield "<style>
    .contrat-card {
        position: relative;
        background: #fdfcf8;
        border: 1px solid #dcdcdc;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.08);
        padding: 2rem;
        height: 100%;
        transition: 0.3s ease;
        font-family: 'Georgia', serif;
    }

    .contrat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
    }

    .contrat-card::before {
        content: '';
        position: absolute;
        top: 0; left: 0;
        width: 100%;
        height: 100%;
        border-radius: 12px;
        z-index: 1;
        pointer-events: none;
        opacity: 0.12;
    }

    .contrat-card.gold::before {
        background: linear-gradient(45deg, #FFD700, #FFECB3);
    }

    .contrat-card.silver::before {
        background: linear-gradient(45deg, #C0C0C0, #E0E0E0);
    }

    .contrat-card.bronze::before {
        background: linear-gradient(45deg, #CD7F32, #E8C7A3);
    }

    .contrat-content {
        position: relative;
        z-index: 2;
    }

    .contrat-content h5 {
        font-size: 1.25rem;
        margin-bottom: 1rem;
        border-bottom: 1px dashed #aaa;
        padding-bottom: 0.5rem;
    }

    .contrat-content p {
        margin-bottom: 0.5rem;
        font-size: 0.95rem;
    }

    .stamp-icon {
        position: absolute;
        bottom: 15px;
        right: 15px;
        z-index: 3;
        font-size: 2.5rem;
        color: #d9534f;
        opacity: 0.7;
        transform: rotate(-15deg);
    }
</style>

<div class=\"container py-5\">
    <div class=\"row\">
        ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 79, $this->source); })()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["contrat"]) {
            // line 80
            yield "            ";
            $context["pack"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "sponsor", [], "any", false, false, false, 80), "pack", [], "any", false, false, false, 80));
            // line 81
            yield "            <div class=\"col-md-6 col-lg-4 mb-4\">
                <div class=\"contrat-card ";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pack"]) || array_key_exists("pack", $context) ? $context["pack"] : (function () { throw new RuntimeError('Variable "pack" does not exist.', 82, $this->source); })()), "html", null, true);
            yield " wow fadeInUp\" data-wow-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((0.2 + (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 82) * 0.2)), "html", null, true);
            yield "s\">
                    <div class=\"contrat-content\">
                        <h5>
                            <i class=\"fa fa-file-contract text-primary me-2\"></i>
                            ";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Titre", [], "any", false, false, false, 86), "html", null, true);
            yield "
                        </h5>

                        <p><strong>Sponsor:</strong> ";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "sponsor", [], "any", false, false, false, 89), "nom", [], "any", false, false, false, 89), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "sponsor", [], "any", false, false, false, 89), "pack", [], "any", false, false, false, 89), "html", null, true);
            yield ")</p>
                        <p><strong>Date Début:</strong> ";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "DateDebut", [], "any", false, false, false, 90), "d/m/Y"), "html", null, true);
            yield "</p>
                        <p><strong>Date Fin:</strong> ";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "DateFin", [], "any", false, false, false, 91), "d/m/Y"), "html", null, true);
            yield "</p>
                        <p><strong>Montant:</strong> ";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Montant", [], "any", false, false, false, 92), "html", null, true);
            yield " €</p>
                        <p><strong>Signature:</strong> ";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Signature", [], "any", false, false, false, 93), "html", null, true);
            yield "</p>

                        <a href=\"#\" class=\"btn btn-outline-dark mt-3\">
                            Détails <i class=\"fa fa-arrow-right ms-2\"></i>
                        </a>
                    </div>

                    <i class=\"fas fa-stamp stamp-icon\"></i>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 103
        if (!$context['_iterated']) {
            // line 104
            yield "            <div class=\"text-center\">
                <p>Aucun contrat trouvé.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['contrat'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        yield "    </div>

    <div class=\"text-center mt-5\">
        <a href=\"";
        // line 111
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrat_front");
        yield "\" class=\"btn btn-primary px-4 py-2\">
            <i class=\"fas fa-arrow-left me-2\"></i>Retour à la liste
        </a>
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
        return "contrat/contrat_front.html.twig";
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
        return array (  271 => 111,  266 => 108,  257 => 104,  255 => 103,  232 => 93,  228 => 92,  224 => 91,  220 => 90,  214 => 89,  208 => 86,  199 => 82,  196 => 81,  193 => 80,  175 => 79,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/baseM.html.twig' %}

{% block title %}Contrats{% endblock %}

{% block body %}
<style>
    .contrat-card {
        position: relative;
        background: #fdfcf8;
        border: 1px solid #dcdcdc;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.08);
        padding: 2rem;
        height: 100%;
        transition: 0.3s ease;
        font-family: 'Georgia', serif;
    }

    .contrat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
    }

    .contrat-card::before {
        content: '';
        position: absolute;
        top: 0; left: 0;
        width: 100%;
        height: 100%;
        border-radius: 12px;
        z-index: 1;
        pointer-events: none;
        opacity: 0.12;
    }

    .contrat-card.gold::before {
        background: linear-gradient(45deg, #FFD700, #FFECB3);
    }

    .contrat-card.silver::before {
        background: linear-gradient(45deg, #C0C0C0, #E0E0E0);
    }

    .contrat-card.bronze::before {
        background: linear-gradient(45deg, #CD7F32, #E8C7A3);
    }

    .contrat-content {
        position: relative;
        z-index: 2;
    }

    .contrat-content h5 {
        font-size: 1.25rem;
        margin-bottom: 1rem;
        border-bottom: 1px dashed #aaa;
        padding-bottom: 0.5rem;
    }

    .contrat-content p {
        margin-bottom: 0.5rem;
        font-size: 0.95rem;
    }

    .stamp-icon {
        position: absolute;
        bottom: 15px;
        right: 15px;
        z-index: 3;
        font-size: 2.5rem;
        color: #d9534f;
        opacity: 0.7;
        transform: rotate(-15deg);
    }
</style>

<div class=\"container py-5\">
    <div class=\"row\">
        {% for contrat in contrats %}
            {% set pack = contrat.sponsor.pack|lower %}
            <div class=\"col-md-6 col-lg-4 mb-4\">
                <div class=\"contrat-card {{ pack }} wow fadeInUp\" data-wow-delay=\"{{ 0.2 + loop.index0 * 0.2 }}s\">
                    <div class=\"contrat-content\">
                        <h5>
                            <i class=\"fa fa-file-contract text-primary me-2\"></i>
                            {{ contrat.Titre }}
                        </h5>

                        <p><strong>Sponsor:</strong> {{ contrat.sponsor.nom }} ({{ contrat.sponsor.pack }})</p>
                        <p><strong>Date Début:</strong> {{ contrat.DateDebut|date('d/m/Y') }}</p>
                        <p><strong>Date Fin:</strong> {{ contrat.DateFin|date('d/m/Y') }}</p>
                        <p><strong>Montant:</strong> {{ contrat.Montant }} €</p>
                        <p><strong>Signature:</strong> {{ contrat.Signature }}</p>

                        <a href=\"#\" class=\"btn btn-outline-dark mt-3\">
                            Détails <i class=\"fa fa-arrow-right ms-2\"></i>
                        </a>
                    </div>

                    <i class=\"fas fa-stamp stamp-icon\"></i>
                </div>
            </div>
        {% else %}
            <div class=\"text-center\">
                <p>Aucun contrat trouvé.</p>
            </div>
        {% endfor %}
    </div>

    <div class=\"text-center mt-5\">
        <a href=\"{{ path('contrat_front') }}\" class=\"btn btn-primary px-4 py-2\">
            <i class=\"fas fa-arrow-left me-2\"></i>Retour à la liste
        </a>
    </div>
</div>
{% endblock %}
", "contrat/contrat_front.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\contrat\\contrat_front.html.twig");
    }
}
