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
class __TwigTemplate_650cbe88e2a883933cd9112a93cb10f2 extends Template
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
        yield "    <!-- Header Start -->
    <div class=\"container-fluid bg-breadcrumb\">
        <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
            <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Notre Matériel</h4>
            <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
                <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
                <li class=\"breadcrumb-item active text-primary\">Matériel</li>
            </ol>    
        </div>
    </div>
    <!-- Header End -->

    <!-- Materiel Carousel Start -->
    <div class=\"container-fluid feature bg-light py-5\">
        <div class=\"container py-5 position-relative\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\">Nos Équipements</h4>
                <h1 class=\"display-4 mb-4\">Découvrez Notre Matériel de Qualité</h1>
                <p class=\"mb-3\">Nous mettons à votre disposition des équipements professionnels pour optimiser vos performances sportives.</p>
                <p class=\"mb-0\">Explorez notre inventaire et trouvez le matériel adapté à vos besoins.</p>
            </div>

            ";
        // line 29
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 29, $this->source); })())) > 0)) {
            // line 30
            yield "                <div class=\"materiel-carousel owl-carousel mb-5 position-relative\" style=\"z-index: 2;\">
                    ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 31, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["materiel"]) {
                // line 32
                yield "                        <div class=\"feature-item wow fadeInUp\" data-wow-delay=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((0.2 + (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 32) * 0.2)), "html", null, true);
                yield "s\">
                            <div class=\"feature-img\">
                                ";
                // line 34
                if (CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "image", [], "any", false, false, false, 34)) {
                    // line 35
                    yield "                                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/materiels/" . CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "image", [], "any", false, false, false, 35))), "html", null, true);
                    yield "\" class=\"img-fluid w-100\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "nom", [], "any", false, false, false, 35), "html", null, true);
                    yield "\">
                                ";
                } else {
                    // line 37
                    yield "                                    <div style=\"width: 100%; height: 200px; display: flex; align-items: center; justify-content: center; background-color: #f8f9fa;\">
                                        <i class=\"fas fa-camera fa-3x text-muted\"></i>
                                    </div>
                                ";
                }
                // line 41
                yield "                            </div>
                            <div class=\"feature-content p-4\">
                                <h4 class=\"mb-3\">";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "nom", [], "any", false, false, false, 43), "html", null, true);
                yield "</h4>
                                <p class=\"mb-2\"><i class=\"fas fa-tags me-2 text-primary\"></i><strong>Type:</strong> ";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "type", [], "any", false, false, false, 44), ["_" => " "]))), "html", null, true);
                yield "</p>
                                <p class=\"mb-2\"><i class=\"fas fa-boxes me-2 text-primary\"></i><strong>Quantité:</strong> ";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "quantite", [], "any", false, false, false, 45), "html", null, true);
                yield "</p>
                                <p class=\"mb-2\"><i class=\"fas fa-check-circle me-2 text-primary\"></i><strong>État:</strong> 
                                    <span class=\"badge ";
                // line 47
                yield (((CoreExtension::getAttribute($this->env, $this->source,                 // line 48
$context["materiel"], "etat", [], "any", false, false, false, 48) == "NEUF")) ? ("bg-primary") : ((((CoreExtension::getAttribute($this->env, $this->source,                 // line 49
$context["materiel"], "etat", [], "any", false, false, false, 49) == "BON")) ? ("bg-success") : ((((CoreExtension::getAttribute($this->env, $this->source,                 // line 50
$context["materiel"], "etat", [], "any", false, false, false, 50) == "USE")) ? ("bg-warning") : ((((CoreExtension::getAttribute($this->env, $this->source,                 // line 51
$context["materiel"], "etat", [], "any", false, false, false, 51) == "DEFAUT")) ? ("bg-danger") : ("bg-secondary"))))))));
                // line 52
                yield "\">
                                        ";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "etat", [], "any", false, false, false, 53), ["_" => " "]))), "html", null, true);
                yield "
                                    </span>
                                </p>
                                <p class=\"mb-2\"><i class=\"fas fa-barcode me-2 text-primary\"></i><strong>Code-barres:</strong> ";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "barcode", [], "any", true, true, false, 56)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "barcode", [], "any", false, false, false, 56), "N/A")) : ("N/A")), "html", null, true);
                yield "</p>
                                <p class=\"mb-3\"><i class=\"fas fa-store me-2 text-primary\"></i><strong>Fournisseur:</strong> 
                                    ";
                // line 58
                if (CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "fournisseur", [], "any", false, false, false, 58)) {
                    // line 59
                    yield "                                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_showF", ["id_fournisseur" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "fournisseur", [], "any", false, false, false, 59), "idFournisseur", [], "any", false, false, false, 59)]), "html", null, true);
                    yield "\">
                                            ";
                    // line 60
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "fournisseur", [], "any", false, false, false, 60), "nom", [], "any", false, false, false, 60), "html", null, true);
                    yield "
                                        </a>
                                    ";
                } else {
                    // line 63
                    yield "                                        Aucun fournisseur
                                    ";
                }
                // line 65
                yield "                                </p>
                                <a href=\"";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_showF", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["materiel"], "id", [], "any", false, false, false, 66)]), "html", null, true);
                yield "\" class=\"btn btn-primary py-2 px-4\"></a>
                            </div>
                        </div>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['materiel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            yield "                </div>

                <!-- Pagination -->
                <div class=\"row mt-5\">
                    <div class=\"col-12 text-center\">
                        <div class=\"navigation\">
                            ";
            // line 76
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 76, $this->source); })()), null, [], ["align" => "center", "rounded" => true, "size" => "sm"]);
            // line 80
            yield "
                        </div>
                    </div>
                </div>
            ";
        } else {
            // line 85
            yield "                <div class=\"col-12 text-center\">
                    <p class=\"text-muted\">Aucun matériel trouvé.</p>
                </div>
            ";
        }
        // line 89
        yield "
            <div class=\"feature-shaps position-absolute top-0 start-0 w-100 h-100\" style=\"z-index: 1;\"></div>
        </div>
    </div>
    <!-- Materiel Carousel End -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 96
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

        // line 97
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        new WOW().init();

        \$(document).ready(function(){
            \$(\".materiel-carousel\").owlCarousel({
                items: 3,
                margin: 30,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3500,
                smartSpeed: 800,
                dots: true,
                nav: false,
                responsive: {
                    0:{ items:1 },
                    768:{ items:2 },
                    992:{ items:3 }
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
        return array (  297 => 97,  284 => 96,  268 => 89,  262 => 85,  255 => 80,  253 => 76,  245 => 70,  227 => 66,  224 => 65,  220 => 63,  214 => 60,  209 => 59,  207 => 58,  202 => 56,  196 => 53,  193 => 52,  191 => 51,  190 => 50,  189 => 49,  188 => 48,  187 => 47,  182 => 45,  178 => 44,  174 => 43,  170 => 41,  164 => 37,  156 => 35,  154 => 34,  148 => 32,  131 => 31,  128 => 30,  126 => 29,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseM.html.twig' %}

{% block title %}Liste du Matériel{% endblock %}

{% block body %}
    <!-- Header Start -->
    <div class=\"container-fluid bg-breadcrumb\">
        <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
            <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Notre Matériel</h4>
            <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
                <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
                <li class=\"breadcrumb-item active text-primary\">Matériel</li>
            </ol>    
        </div>
    </div>
    <!-- Header End -->

    <!-- Materiel Carousel Start -->
    <div class=\"container-fluid feature bg-light py-5\">
        <div class=\"container py-5 position-relative\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\">Nos Équipements</h4>
                <h1 class=\"display-4 mb-4\">Découvrez Notre Matériel de Qualité</h1>
                <p class=\"mb-3\">Nous mettons à votre disposition des équipements professionnels pour optimiser vos performances sportives.</p>
                <p class=\"mb-0\">Explorez notre inventaire et trouvez le matériel adapté à vos besoins.</p>
            </div>

            {% if pagination|length > 0 %}
                <div class=\"materiel-carousel owl-carousel mb-5 position-relative\" style=\"z-index: 2;\">
                    {% for materiel in pagination %}
                        <div class=\"feature-item wow fadeInUp\" data-wow-delay=\"{{ 0.2 + (loop.index0 * 0.2) }}s\">
                            <div class=\"feature-img\">
                                {% if materiel.image %}
                                    <img src=\"{{ asset('Uploads/materiels/' ~ materiel.image) }}\" class=\"img-fluid w-100\" alt=\"{{ materiel.nom }}\">
                                {% else %}
                                    <div style=\"width: 100%; height: 200px; display: flex; align-items: center; justify-content: center; background-color: #f8f9fa;\">
                                        <i class=\"fas fa-camera fa-3x text-muted\"></i>
                                    </div>
                                {% endif %}
                            </div>
                            <div class=\"feature-content p-4\">
                                <h4 class=\"mb-3\">{{ materiel.nom }}</h4>
                                <p class=\"mb-2\"><i class=\"fas fa-tags me-2 text-primary\"></i><strong>Type:</strong> {{ materiel.type|replace({'_': ' '})|lower|capitalize }}</p>
                                <p class=\"mb-2\"><i class=\"fas fa-boxes me-2 text-primary\"></i><strong>Quantité:</strong> {{ materiel.quantite }}</p>
                                <p class=\"mb-2\"><i class=\"fas fa-check-circle me-2 text-primary\"></i><strong>État:</strong> 
                                    <span class=\"badge {{ 
                                        materiel.etat == 'NEUF' ? 'bg-primary' : 
                                        (materiel.etat == 'BON' ? 'bg-success' :
                                        (materiel.etat == 'USE' ? 'bg-warning' : 
                                        (materiel.etat == 'DEFAUT' ? 'bg-danger' : 'bg-secondary'))) 
                                    }}\">
                                        {{ materiel.etat|replace({'_': ' '})|lower|capitalize }}
                                    </span>
                                </p>
                                <p class=\"mb-2\"><i class=\"fas fa-barcode me-2 text-primary\"></i><strong>Code-barres:</strong> {{ materiel.barcode|default('N/A') }}</p>
                                <p class=\"mb-3\"><i class=\"fas fa-store me-2 text-primary\"></i><strong>Fournisseur:</strong> 
                                    {% if materiel.fournisseur %}
                                        <a href=\"{{ path('app_fournisseur_showF', {'id_fournisseur': materiel.fournisseur.idFournisseur}) }}\">
                                            {{ materiel.fournisseur.nom }}
                                        </a>
                                    {% else %}
                                        Aucun fournisseur
                                    {% endif %}
                                </p>
                                <a href=\"{{ path('app_materiel_showF', {'id': materiel.id}) }}\" class=\"btn btn-primary py-2 px-4\"></a>
                            </div>
                        </div>
                    {% endfor %}
                </div>

                <!-- Pagination -->
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
            {% else %}
                <div class=\"col-12 text-center\">
                    <p class=\"text-muted\">Aucun matériel trouvé.</p>
                </div>
            {% endif %}

            <div class=\"feature-shaps position-absolute top-0 start-0 w-100 h-100\" style=\"z-index: 1;\"></div>
        </div>
    </div>
    <!-- Materiel Carousel End -->
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        new WOW().init();

        \$(document).ready(function(){
            \$(\".materiel-carousel\").owlCarousel({
                items: 3,
                margin: 30,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3500,
                smartSpeed: 800,
                dots: true,
                nav: false,
                responsive: {
                    0:{ items:1 },
                    768:{ items:2 },
                    992:{ items:3 }
                }
            });
        });
    </script>
{% endblock %}", "materiel/indexF.html.twig", "C:\\Users\\ibtis\\Downloads\\matchupz-web-joueur\\matchupz-web-joueur\\templates\\materiel\\indexF.html.twig");
    }
}
