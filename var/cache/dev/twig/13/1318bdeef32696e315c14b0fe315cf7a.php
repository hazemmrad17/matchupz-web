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

/* materiel/indexF.html.twig */
class __TwigTemplate_db3aef79c45e650e101e62b2d996dad5 extends Template
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
        return "baseM.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiel/indexF.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiel/indexF.html.twig"));

        $this->parent = $this->loadTemplate("baseM.html.twig", "materiel/indexF.html.twig", 1);
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

        yield "Liste du Matériel";
        
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
    .materiel-bg {
        background: url(\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/materiel-bg.jpg"), "html", null, true);
        yield "\") no-repeat center center/cover;
        background-size: cover;
        padding: 5rem 0;
        position: relative;
        color: white;
    }
    .materiel-bg::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
    }
    .materiel-card {
        transition: all 0.3s ease;
        border: none;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        height: 100%;
        background: white;
    }
    .materiel-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    }
    .materiel-img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        background-color: #f8f9fa;
    }
    .no-img-placeholder {
        width: 100%;
        height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f8f9fa;
    }
    .type-badge {
        background: #0d6efd;
        color: white;
        padding: 3px 12px;
        border-radius: 50px;
        font-size: 0.8rem;
        display: inline-block;
        margin-bottom: 1rem;
    }
    .etat-badge {
        padding: 3px 12px;
        border-radius: 50px;
        font-size: 0.8rem;
        display: inline-block;
    }
    .position-relative {
        position: relative;
    }
    .z-index-1 {
        position: relative;
        z-index: 1;
    }
    .card-body {
        padding: 2rem;
        text-align: center;
    }
    .card-title {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 1rem;
    }
    .detail-item {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 0.75rem;
        font-size: 0.95rem;
    }
    .detail-item i {
        font-size: 1rem;
        color: #0d6efd;
        margin-right: 0.75rem;
        width: 20px;
        text-align: center;
    }
    .detail-item p {
        margin: 0;
        color: #555;
    }
    .btn-details {
        margin-top: 1rem;
    }
</style>

<!-- Hero Section with Background Image -->
<div class=\"materiel-bg\">
    <div class=\"container position-relative z-index-1 text-center\">
        <h1 class=\"display-4 fw-bold mb-4\">Notre Matériel</h1>
        <p class=\"lead mb-0\">Découvrez notre équipement de qualité professionnelle</p>
    </div>
</div>

<!-- Materiel Cards Section -->
<div class=\"container py-5\">
    <div class=\"row g-4\">
        ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 115, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["materiel"]) {
            // line 116
            yield "        <div class=\"col-md-6 col-lg-4\">
            <div class=\"materiel-card card h-100\">
                ";
            // line 118
            if (CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "image", [], "any", false, false, false, 118)) {
                // line 119
                yield "                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/materiels/" . CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "image", [], "any", false, false, false, 119))), "html", null, true);
                yield "\" class=\"materiel-img\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "nom", [], "any", false, false, false, 119), "html", null, true);
                yield "\">
                ";
            } else {
                // line 121
                yield "                <div class=\"no-img-placeholder\">
                    <i class=\"fas fa-camera fa-3x text-muted\"></i>
                </div>
                ";
            }
            // line 125
            yield "                <div class=\"card-body\">
                    <span class=\"type-badge\">";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "type", [], "any", false, false, false, 126), ["_" => " "]))), "html", null, true);
            yield "</span>
                    <h3 class=\"card-title\">";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "nom", [], "any", false, false, false, 127), "html", null, true);
            yield "</h3>
                    <div class=\"text-center mt-3\">
                        <div class=\"detail-item\">
                            <i class=\"fas fa-boxes\"></i>
                            <p>Quantité: ";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "quantite", [], "any", false, false, false, 131), "html", null, true);
            yield "</p>
                        </div>
                        <div class=\"detail-item\">
                            <i class=\"fas fa-check-circle\"></i>
                            <p>
                                <span class=\"etat-badge ";
            // line 136
            yield (((CoreExtension::getAttribute($this->env, $this->source,             // line 137
$context["materiel"], "etat", [], "any", false, false, false, 137) == "NEUF")) ? ("bg-primary") : ((((CoreExtension::getAttribute($this->env, $this->source,             // line 138
$context["materiel"], "etat", [], "any", false, false, false, 138) == "USE")) ? ("bg-warning") : ("bg-danger"))));
            // line 139
            yield "\">
                                    ";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "etat", [], "any", false, false, false, 140), ["_" => " "]))), "html", null, true);
            yield "
                                </span>
                            </p>
                        </div>
                        <div class=\"detail-item\">
                            <i class=\"fas fa-barcode\"></i>
                            <p>";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "barcode", [], "any", false, false, false, 146), "html", null, true);
            yield "</p>
                        </div>
                        <div class=\"detail-item\">
                            <i class=\"fas fa-store\"></i>
                            <p>
                                ";
            // line 151
            if (CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "fournisseur", [], "any", false, false, false, 151)) {
                // line 152
                yield "                                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_showF", ["id_fournisseur" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "fournisseur", [], "any", false, false, false, 152), "id_fournisseur", [], "any", false, false, false, 152)]), "html", null, true);
                yield "\">
                                        ";
                // line 153
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "fournisseur", [], "any", false, false, false, 153), "nom", [], "any", false, false, false, 153), "html", null, true);
                yield "
                                    </a>
                                ";
            } else {
                // line 156
                yield "                                    Aucun fournisseur
                                ";
            }
            // line 158
            yield "                            </p>
                        </div>
                    </div>
                    <a href=\"";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_showF", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 161)]), "html", null, true);
            yield "\" 
                       class=\"btn btn-outline-primary btn-details stretched-link\">
                       Voir détails <i class=\"fas fa-arrow-right ms-2\"></i>
                    </a>
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        // line 168
        if (!$context['_iterated']) {
            // line 169
            yield "        <div class=\"col-12 text-center py-5\">
            <div class=\"alert alert-info\">
                Aucun matériel disponible pour le moment
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['materiel'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        yield "    </div>

    ";
        // line 177
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 177, $this->source); })())) > 0)) {
            // line 178
            yield "    <div class=\"row mt-5\">
        <div class=\"col-12 text-center\">
            <div class=\"navigation\">
                ";
            // line 181
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 181, $this->source); })()), null, [], ["align" => "center", "rounded" => true, "size" => "sm"]);
            // line 185
            yield "
            </div>
        </div>
    </div>
    ";
        }
        // line 190
        yield "</div>
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
        return "materiel/indexF.html.twig";
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
        return array (  352 => 190,  345 => 185,  343 => 181,  338 => 178,  336 => 177,  332 => 175,  321 => 169,  319 => 168,  307 => 161,  302 => 158,  298 => 156,  292 => 153,  287 => 152,  285 => 151,  277 => 146,  268 => 140,  265 => 139,  263 => 138,  262 => 137,  261 => 136,  253 => 131,  246 => 127,  242 => 126,  239 => 125,  233 => 121,  225 => 119,  223 => 118,  219 => 116,  214 => 115,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseM.html.twig' %}

{% block title %}Liste du Matériel{% endblock %}

{% block body %}
<style>
    .materiel-bg {
        background: url(\"{{ asset('assets/img/materiel-bg.jpg') }}\") no-repeat center center/cover;
        background-size: cover;
        padding: 5rem 0;
        position: relative;
        color: white;
    }
    .materiel-bg::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
    }
    .materiel-card {
        transition: all 0.3s ease;
        border: none;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        height: 100%;
        background: white;
    }
    .materiel-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    }
    .materiel-img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        background-color: #f8f9fa;
    }
    .no-img-placeholder {
        width: 100%;
        height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f8f9fa;
    }
    .type-badge {
        background: #0d6efd;
        color: white;
        padding: 3px 12px;
        border-radius: 50px;
        font-size: 0.8rem;
        display: inline-block;
        margin-bottom: 1rem;
    }
    .etat-badge {
        padding: 3px 12px;
        border-radius: 50px;
        font-size: 0.8rem;
        display: inline-block;
    }
    .position-relative {
        position: relative;
    }
    .z-index-1 {
        position: relative;
        z-index: 1;
    }
    .card-body {
        padding: 2rem;
        text-align: center;
    }
    .card-title {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 1rem;
    }
    .detail-item {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 0.75rem;
        font-size: 0.95rem;
    }
    .detail-item i {
        font-size: 1rem;
        color: #0d6efd;
        margin-right: 0.75rem;
        width: 20px;
        text-align: center;
    }
    .detail-item p {
        margin: 0;
        color: #555;
    }
    .btn-details {
        margin-top: 1rem;
    }
</style>

<!-- Hero Section with Background Image -->
<div class=\"materiel-bg\">
    <div class=\"container position-relative z-index-1 text-center\">
        <h1 class=\"display-4 fw-bold mb-4\">Notre Matériel</h1>
        <p class=\"lead mb-0\">Découvrez notre équipement de qualité professionnelle</p>
    </div>
</div>

<!-- Materiel Cards Section -->
<div class=\"container py-5\">
    <div class=\"row g-4\">
        {% for materiel in pagination %}
        <div class=\"col-md-6 col-lg-4\">
            <div class=\"materiel-card card h-100\">
                {% if materiel.image %}
                <img src=\"{{ asset('Uploads/materiels/' ~ materiel.image) }}\" class=\"materiel-img\" alt=\"{{ materiel.nom }}\">
                {% else %}
                <div class=\"no-img-placeholder\">
                    <i class=\"fas fa-camera fa-3x text-muted\"></i>
                </div>
                {% endif %}
                <div class=\"card-body\">
                    <span class=\"type-badge\">{{ materiel.type|replace({'_': ' '})|lower|capitalize }}</span>
                    <h3 class=\"card-title\">{{ materiel.nom }}</h3>
                    <div class=\"text-center mt-3\">
                        <div class=\"detail-item\">
                            <i class=\"fas fa-boxes\"></i>
                            <p>Quantité: {{ materiel.quantite }}</p>
                        </div>
                        <div class=\"detail-item\">
                            <i class=\"fas fa-check-circle\"></i>
                            <p>
                                <span class=\"etat-badge {{ 
                                    materiel.etat == 'NEUF' ? 'bg-primary' : 
                                    (materiel.etat == 'USE' ? 'bg-warning' : 'bg-danger') 
                                }}\">
                                    {{ materiel.etat|replace({'_': ' '})|lower|capitalize }}
                                </span>
                            </p>
                        </div>
                        <div class=\"detail-item\">
                            <i class=\"fas fa-barcode\"></i>
                            <p>{{ materiel.barcode }}</p>
                        </div>
                        <div class=\"detail-item\">
                            <i class=\"fas fa-store\"></i>
                            <p>
                                {% if materiel.fournisseur %}
                                    <a href=\"{{ path('app_fournisseur_showF', {'id_fournisseur': materiel.fournisseur.id_fournisseur}) }}\">
                                        {{ materiel.fournisseur.nom }}
                                    </a>
                                {% else %}
                                    Aucun fournisseur
                                {% endif %}
                            </p>
                        </div>
                    </div>
                    <a href=\"{{ path('app_materiel_showF', {'id': materiel.id}) }}\" 
                       class=\"btn btn-outline-primary btn-details stretched-link\">
                       Voir détails <i class=\"fas fa-arrow-right ms-2\"></i>
                    </a>
                </div>
            </div>
        </div>
        {% else %}
        <div class=\"col-12 text-center py-5\">
            <div class=\"alert alert-info\">
                Aucun matériel disponible pour le moment
            </div>
        </div>
        {% endfor %}
    </div>

    {% if pagination|length > 0 %}
    <div class=\"row mt-5\">
        <div class=\"col-12 text-center\">
            <div class=\"navigation\">
                {{ knp_pagination_render(pagination, null, {}, {
                    'align': 'center',
                    'rounded': true,
                    'size': 'sm'
                }) }}
            </div>
        </div>
    </div>
    {% endif %}
</div>
{% endblock %}", "materiel/indexF.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\materiel\\indexF.html.twig");
    }
}
