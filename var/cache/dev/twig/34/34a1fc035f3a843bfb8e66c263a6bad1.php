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

/* espace/espaceF.html.twig */
class __TwigTemplate_ec183a3e83babd9672e5691760569810 extends Template
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
        return "baseM.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace/espaceF.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace/espaceF.html.twig"));

        $this->parent = $this->loadTemplate("baseM.html.twig", "espace/espaceF.html.twig", 1);
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

        yield "Matchupz - Nos Espaces";
        
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
    <style>
        #mapModal .modal-content {
            border-width: 0.5px;
            border-radius: 8px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05);
        }
        #weather-info {
            border-left-width: 0.3px;
        }
        #weather-icon {
            margin-bottom: 30px;
        }
        .recommendation-carousel .feature-item {
            border: 1px solid #007bff;
            background-color: #e7f1ff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .recommendation-carousel .feature-item:hover {
            transform: translateY(-5px);
        }
        .error-message {
            display: none;
            color: #dc3545;
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
        }
        .loading-spinner {
            display: none;
            text-align: center;
            margin-top: 20px;
        }
        .loading-spinner .spinner-border {
            width: 2rem;
            height: 2rem;
        }
        .recommendation-error-container {
            display: none;
            text-align: center;
            margin-top: 20px;
            color: #dc3545;
            font-weight: bold;
        }
        /* Improved fluid and expandable display for recommendation carousel */
        .recommendation-carousel {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: stretch;
            gap: 20px;
            padding: 0 15px;
        }
        .recommendation-carousel .feature-item {
            flex: 1 1 300px; /* Minimum width of 300px, grows to fill space */
            max-width: 400px; /* Maximum width to prevent items from getting too wide */
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .recommendation-carousel .feature-content {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .recommendation-carousel .feature-img img {
            object-fit: cover;
            height: 200px; /* Fixed height for consistency */
            width: 100%;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        @media (max-width: 767px) {
            .recommendation-carousel {
                flex-direction: column;
                gap: 15px;
            }
            .recommendation-carousel .feature-item {
                flex: 0 0 100%;
                max-width: 100%;
            }
            .recommendation-carousel .feature-img img {
                height: 150px;
            }
        }
        @media (min-width: 1200px) {
            .recommendation-carousel .feature-item {
                max-width: 350px; /* Slightly smaller on larger screens for more items */
            }
        }
        /* Tooltip styling for proximity score explanation */
        .proximity-score-container {
            position: relative;
            display: inline-block;
        }
        .proximity-tooltip {
            visibility: hidden;
            width: 220px;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 5px;
            padding: 8px;
            position: absolute;
            z-index: 10;
            bottom: 125%;
            left: 50%;
            transform: translateX(-50%);
            opacity: 0;
            transition: opacity 0.3s;
            font-size: 0.9rem;
        }
        .proximity-tooltip::after {
            content: '';
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #333 transparent transparent transparent;
        }
        .proximity-score-container:hover .proximity-tooltip {
            visibility: visible;
            opacity: 1;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 139
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

        // line 140
        yield "    <!-- Header Start -->
    <div class=\"container-fluid bg-breadcrumb\">
        <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
            <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Nos Espaces</h4>
            <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
                <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
                <li class=\"breadcrumb-item active text-primary\">Feature</li>
            </ol>    
        </div>
    </div>
    <!-- Header End -->

    <!-- Recommendation Form -->
    <div class=\"container py-3\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"card\">
                    <div class=\"card-header bg-primary text-white\">
                        <h5 class=\"mb-0\">Trouver Votre Espace Sportif Idéal</h5>
                    </div>
                    <div class=\"card-body\">
                        <form id=\"recommendation-form\">
                            <div class=\"mb-3\">
                                <label for=\"user-address\" class=\"form-label\">Votre Adresse</label>
                                <input type=\"text\" class=\"form-control\" id=\"user-address\" placeholder=\"Ex: Tunis, Tunisia\">
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"preferred-category\" class=\"form-label\">Catégorie Préférée</label>
                                <select class=\"form-control\" id=\"preferred-category\">
                                    <option value=\"terrain foot\">Terrain Foot</option>
                                    <option value=\"terrain basket\">Terrain Basket</option>
                                    <option value=\"salle gym\">Salle Gym</option>
                                    <option value=\"football\">Football</option>
                                </select>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\" id=\"recommend-btn\">Recommander</button>
                        </form>
                        <div class=\"loading-spinner\" id=\"loading-spinner\">
                            <div class=\"spinner-border text-primary\" role=\"status\">
                                <span class=\"visually-hidden\">Chargement...</span>
                            </div>
                            <p class=\"mt-2\">Génération des recommandations...</p>
                        </div>
                        <div class=\"error-message\" id=\"address-error\">
                            Veuillez entrer une adresse au format \"Ville, Pays\" (ex: Tunis, Tunisia).
                        </div>
                        <div class=\"error-message\" id=\"geocoding-error\">
                            Impossible de convertir l'adresse en coordonnées. Veuillez vérifier l'adresse.
                        </div>
                        <div class=\"error-message\" id=\"recommendation-error\">
                            Erreur lors de la génération des recommandations. Veuillez réessayer.
                        </div>
                        <div class=\"error-message\" id=\"no-data-error\">
                            Aucun espace sportif disponible pour les recommandations. Ajoutez des espaces sportifs via l'interface d'administration.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recommended Espaces Section -->
    <div class=\"container-fluid feature bg-light py-5\" id=\"recommendation-section\" style=\"display: none;\">
        <div class=\"container py-5 position-relative\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\">Recommandations Personnalisées</h4>
                <h1 class=\"display-4 mb-4\">Les espaces sportifs les plus proches :</h1>
                <p class=\"mb-0\">Basé sur votre emplacement et vos préférences.</p>
            </div>
            <div class=\"recommendation-error-container\" id=\"recommendation-carousel-error\">
                Aucun espace sportif trouvé à proximité correspondant à vos critères.
            </div>
            <div class=\"recommendation-carousel mb-5 position-relative\" style=\"z-index: 2;\">
                <!-- Populated by JavaScript -->
            </div>
        </div>
    </div>

    <!-- All Espaces Sportifs Carousel -->
    <div class=\"container-fluid feature bg-light py-5\">
        <div class=\"container py-5 position-relative\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\">Why choose us?</h4>
                <h1 class=\"display-4 mb-4\">Découvrer Nos Espaces Sportifs</h1>
                <p class=\"mb-3\">";
        // line 225
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["espaces_description"]) || array_key_exists("espaces_description", $context) ? $context["espaces_description"] : (function () { throw new RuntimeError('Variable "espaces_description" does not exist.', 225, $this->source); })()), "html", null, true);
        yield "</p>
                <p class=\"mb-0\">Ce site vous permet également de <strong>réserver votre club</strong> préféré et de souscrire à un <strong>abonnement</strong> en toute simplicité.</p>
            </div>

            ";
        // line 229
        $context["images"] = ["stadium1.jpg", "stadium2.jpg", "stadium3.jpg", "stadium4.jpg", "stadium5.jpg"];
        // line 230
        yield "
            ";
        // line 231
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["espacesWithCoords"]) || array_key_exists("espacesWithCoords", $context) ? $context["espacesWithCoords"] : (function () { throw new RuntimeError('Variable "espacesWithCoords" does not exist.', 231, $this->source); })())) > 0)) {
            // line 232
            yield "                <div class=\"espace-carousel owl-carousel mb-5 position-relative\" style=\"z-index: 2;\">
                    ";
            // line 233
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["espacesWithCoords"]) || array_key_exists("espacesWithCoords", $context) ? $context["espacesWithCoords"] : (function () { throw new RuntimeError('Variable "espacesWithCoords" does not exist.', 233, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 234
                yield "                        ";
                $context["espace"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "espace", [], "any", false, false, false, 234);
                // line 235
                yield "                        <div class=\"feature-item wow fadeInUp\" data-wow-delay=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((0.2 + (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 235) * 0.2)), "html", null, true);
                yield "s\">
                            <div class=\"feature-img\">
                                <img src=\"";
                // line 237
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 237, $this->source); })()), (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 237) % Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 237, $this->source); })()))), [], "array", false, false, false, 237))), "html", null, true);
                yield "\" class=\"img-fluid w-100\" alt=\"Espace Sportif\">
                            </div>
                            <div class=\"feature-content p-4\">
                                <h4 class=\"mb-3\">";
                // line 240
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["espace"]) || array_key_exists("espace", $context) ? $context["espace"] : (function () { throw new RuntimeError('Variable "espace" does not exist.', 240, $this->source); })()), "nom_espace", [], "any", false, false, false, 240), "html", null, true);
                yield "</h4>
                                <p class=\"mb-2\"><i class=\"fas fa-map-marker-alt me-2 text-primary\"></i><strong>Adresse:</strong> ";
                // line 241
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["espace"]) || array_key_exists("espace", $context) ? $context["espace"] : (function () { throw new RuntimeError('Variable "espace" does not exist.', 241, $this->source); })()), "adresse", [], "any", false, false, false, 241), "html", null, true);
                yield "</p>
                                <p class=\"mb-2\"><i class=\"fas fa-tags me-2 text-primary\"></i><strong>Catégorie:</strong> ";
                // line 242
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["espace"]) || array_key_exists("espace", $context) ? $context["espace"] : (function () { throw new RuntimeError('Variable "espace" does not exist.', 242, $this->source); })()), "categorie", [], "any", false, false, false, 242), "html", null, true);
                yield "</p>
                                <p class=\"mb-3\"><i class=\"fas fa-users me-2 text-primary\"></i><strong>Capacité:</strong> ";
                // line 243
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["espace"]) || array_key_exists("espace", $context) ? $context["espace"] : (function () { throw new RuntimeError('Variable "espace" does not exist.', 243, $this->source); })()), "capacite", [], "any", false, false, false, 243), "html", null, true);
                yield " personnes</p>
                                <p class=\"mb-3 text-muted\"><i class=\"fas fa-calendar-check me-2 text-success\"></i>Vous pouvez réserver un créneau pour votre club préféré.</p>
                                <a href=\"#\" class=\"btn btn-primary py-2 px-4 show-map-btn\" 
                                   data-lat=\"";
                // line 246
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "latitude", [], "any", true, true, false, 246) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "latitude", [], "any", false, false, false, 246)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "latitude", [], "any", false, false, false, 246), "html", null, true)) : (""));
                yield "\" 
                                   data-lng=\"";
                // line 247
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "longitude", [], "any", true, true, false, 247) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "longitude", [], "any", false, false, false, 247)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "longitude", [], "any", false, false, false, 247), "html", null, true)) : (""));
                yield "\" 
                                   data-nom=\"";
                // line 248
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["espace"]) || array_key_exists("espace", $context) ? $context["espace"] : (function () { throw new RuntimeError('Variable "espace" does not exist.', 248, $this->source); })()), "nom_espace", [], "any", false, false, false, 248), "html", null, true);
                yield "\"
                                   data-weather-temp=\"";
                // line 249
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, true, false, 249), "temp", [], "any", true, true, false, 249) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 249), "temp", [], "any", false, false, false, 249)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 249), "temp", [], "any", false, false, false, 249), "html", null, true)) : ("N/A"));
                yield "\"
                                   data-weather-humidity=\"";
                // line 250
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, true, false, 250), "humidity", [], "any", true, true, false, 250) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 250), "humidity", [], "any", false, false, false, 250)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 250), "humidity", [], "any", false, false, false, 250), "html", null, true)) : ("N/A"));
                yield "\"
                                   data-weather-clouds=\"";
                // line 251
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, true, false, 251), "cloud_pct", [], "any", true, true, false, 251) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 251), "cloud_pct", [], "any", false, false, false, 251)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 251), "cloud_pct", [], "any", false, false, false, 251), "html", null, true)) : ("N/A"));
                yield "\"
                                   data-weather-condition=\"";
                // line 252
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, true, false, 252), "condition", [], "any", true, true, false, 252) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 252), "condition", [], "any", false, false, false, 252)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 252), "condition", [], "any", false, false, false, 252), "html", null, true)) : ("cloudy"));
                yield "\"
                                   data-toggle=\"modal\" 
                                   data-target=\"#mapModal\"><span>En savoir plus</span></a>
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
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 258
            yield "                </div>
            ";
        } else {
            // line 260
            yield "                <div class=\"col-12 text-center\">
                    <p class=\"text-muted\">Aucun espace sportif trouvé.</p>
                </div>
            ";
        }
        // line 264
        yield "
            <div class=\"feature-shaps position-absolute top-0 start-0 w-100 h-100\" style=\"z-index: 1;\"></div>
        </div>
    </div>

    <!-- Map and Weather Modal -->
    <div class=\"modal fade\" id=\"mapModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mapModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-xl\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"mapModalLabel\">Localisation et Météo</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body d-flex flex-row\">
                    <div id=\"map\" style=\"height: 520px; width: 100%;\"></div>
                    <div id=\"weather-info\" class=\"p-4 d-flex flex-column justify-content-center align-items-center\" style=\"width: 25%; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-left: 1px solid #dee2e6; border-radius: 10px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);\">
                        <img id=\"weather-icon\" src=\"\" alt=\"Weather Icon\" class=\"weather-icon\" style=\"width: 120px; height: 120px; border-radius: 10%; box-shadow: 0 4px 8px rgba(223, 217, 217, 0.1); transition: transform 0.3s ease;\">
                        <h6 class=\"mb-4 text-uppercase font-weight-bold text-primary\" style=\"letter-spacing: 1px;\">Météo Actuelle</h6>
                        <div class=\"weather-data w-100\">
                            <p class=\"mb-3 d-flex align-items-center weather-item\" style=\"transition: background-color 0.3s ease;\">
                                <i class=\"fas fa-thermometer-half me-3 text-danger\" style=\"font-size: 1.2rem;\"></i>
                                <span><strong>Température:</strong> <span id=\"weather-temp\"></span>°C</span>
                            </p>
                            <p class=\"mb-3 d-flex align-items-center weather-item\" style=\"transition: background-color 0.3s ease;\">
                                <i class=\"fas fa-tint me-3 text-primary\" style=\"font-size: 1.2rem;\"></i>
                                <span><strong>Humidité:</strong> <span id=\"weather-humidity\"></span>%</span>
                            </p>
                            <p class=\"mb-0 d-flex align-items-center weather-item\" style=\"transition: background-color 0.3s ease;\">
                                <i class=\"fas fa-cloud me-3 text-muted\" style=\"font-size: 1.2rem;\"></i>
                                <span><strong>Nuages:</strong> <span id=\"weather-clouds\"></span>%</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 308
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

        // line 309
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <link href=\"https://api.mapbox.com/mapbox-gl-js/v3.7.0/mapbox-gl.css\" rel=\"stylesheet\">
    <script src=\"https://api.mapbox.com/mapbox-gl-js/v3.7.0/mapbox-gl.js\"></script>

    <script>
        // Function to hide all error messages and spinner
        function resetFeedback() {
            \$('.error-message').hide();
            \$('#loading-spinner').hide();
            \$('#recommend-btn').prop('disabled', false);
            \$('#recommendation-carousel-error').hide();
        }

        new WOW().init();

        \$(document).ready(function(){
            console.log(\"jQuery ready. Initializing carousels...\");
            // Initialize the espace carousel (unchanged)
            \$(\".espace-carousel\").owlCarousel({
                items: 3,
                margin: 30,
                loop: false,
                autoplay: false,
                dots: true,
                nav: false,
                responsive: {
                    0: { items: 1 },
                    768: { items: 2 },
                    992: { items: 3 }
                }
            });

            let map;
            const accessToken = \"pk.eyJ1IjoiaXNtYWlsMDIiLCJhIjoiY200cmJoajV4MDNibDJtc2VycmE2NnJ2MCJ9.6Nu1GLxUDkC9Odep6mKsmA\";

            function initializeMap(lat, lng, nom) {
                console.log(\"Initializing map for:\", nom, lat, lng);
                mapboxgl.accessToken = accessToken;
                if (map) {
                    map.remove();
                }
                map = new mapboxgl.Map({
                    container: 'map',
                    style: 'mapbox://styles/mapbox/streets-v11',
                    center: [lng, lat],
                    zoom: 15
                });
                new mapboxgl.Marker()
                    .setLngLat([lng, lat])
                    .setPopup(new mapboxgl.Popup().setHTML(`<b>\${nom}</b>`))
                    .addTo(map)
                    .togglePopup();
            }

            \$('.show-map-btn').on('click', function(e) {
                e.preventDefault();
                const lat = parseFloat(\$(this).data('lat'));
                const lng = parseFloat(\$(this).data('lng'));
                const nom = \$(this).data('nom');
                const temp = \$(this).data('weather-temp');
                const humidity = \$(this).data('weather-humidity');
                const clouds = \$(this).data('weather-clouds');
                const condition = \$(this).data('weather-condition');

                if (lat && lng && !isNaN(lat) && !isNaN(lng)) {
                    initializeMap(lat, lng, nom);
                    \$('#weather-temp').text(temp);
                    \$('#weather-humidity').text(humidity);
                    \$('#weather-clouds').text(clouds);
                    let iconSrc = condition === 'sunny' ? '";
        // line 378
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/clouds_sun_weather.png"), "html", null, true);
        yield "' :
                                  condition === 'rainy' ? '";
        // line 379
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/rain_weather.png"), "html", null, true);
        yield "' :
                                  '";
        // line 380
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/clouds_sun_weather.png"), "html", null, true);
        yield "';
                    \$('#weather-icon').attr('src', iconSrc);
                    \$('#mapModal').modal('show');
                } else {
                    alert('Les coordonnées pour cet espace ne sont pas disponibles.');
                }
            });

            \$('#mapModal').on('shown.bs.modal', function () {
                if (map) {
                    setTimeout(function() {
                        map.resize();
                    }, 200);
                }
            });

            \$('#weather-icon').hover(
                function() { \$(this).css('transform', 'scale(1.1)'); },
                function() { \$(this).css('transform', 'scale(1)'); }
            );
            \$('.weather-item').hover(
                function() { \$(this).css('background-color', 'rgba(250, 250, 250, 0.05)'); },
                function() { \$(this).css('background-color', 'transparent'); }
            );

            // Recommendation form handling
            const images = ['stadium1.jpg', 'stadium2.jpg', 'stadium3.jpg', 'stadium4.jpg', 'stadium5.jpg'];

            // Address validation function for \"City, Country\" format
            function validateAddress(address) {
                if (!address) {
                    return { isValid: false, message: 'Veuillez entrer une adresse.' };
                }
                const trimmedAddress = address.trim();
                const cityCountryPattern = /^[\\p{L}\\s-]+,\\s*[\\p{L}\\s-]+\$/u;
                if (!cityCountryPattern.test(trimmedAddress)) {
                    return { isValid: false, message: 'L\\'adresse doit être au format \"Ville, Pays\" (ex: Tunis, Tunisia).' };
                }
                return { isValid: true, message: '' };
            }

            async function getRecommendations(address, category) {
                console.log(\"Requesting recommendations for address:\", address, \"category:\", category);
                const response = await fetch('";
        // line 423
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("espace_recommend");
        yield "', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                    body: `address=\${encodeURIComponent(address)}&category=\${encodeURIComponent(category)}`
                });
                const responseBody = await response.text();
                console.log(\"Response status:\", response.status);
                console.log(\"Response body:\", responseBody);
                if (response.ok) {
                    const result = JSON.parse(responseBody);
                    if (result.error) {
                        throw new Error(result.error);
                    }
                    return result;
                } else {
                    throw new Error(`Failed to fetch recommendations: Status \${response.status}, Body: \${responseBody}`);
                }
            }

            function populateCarousel(rankedIds, scores, facilities) {
                console.log(\"Populating carousel with ranked IDs:\", rankedIds, \"Scores:\", scores, \"Facilities:\", facilities);
                \$('.recommendation-carousel').empty();
                let itemsAdded = 0;

                rankedIds.forEach((id, index) => {
                    const facility = facilities.find(f => f.id === id);
                    if (facility) {
                        console.log(\"Found facility for ID\", id, \":\", facility.nom_espace);
                        const itemHtml = `
                            <div class=\"feature-item wow fadeInUp\" data-wow-delay=\"\${0.2 + index * 0.2}s\">
                                <div class=\"feature-img\">
                                    <img src=\"";
        // line 454
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/"), "html", null, true);
        yield "\${images[index % images.length]}\" class=\"img-fluid\" alt=\"Espace Sportif\">
                                </div>
                                <div class=\"feature-content p-4\">
                                    <h4 class=\"mb-3\">\${facility.nom_espace}</h4>
                                    <p class=\"mb-2\"><i class=\"fas fa-map-marker-alt me-2 text-primary\"></i><strong>Adresse:</strong> \${facility.adresse}</p>
                                    <p class=\"mb-2\"><i class=\"fas fa-tags me-2 text-primary\"></i><strong>Catégorie:</strong> \${facility.categorie}</p>
                                    <p class=\"mb-3\"><i class=\"fas fa-users me-2 text-primary\"></i><strong>Capacité:</strong> \${facility.capacite} personnes</p>
                                    <p class=\"mb-3 text-success proximity-score-container\">
                                        <i class=\"fas fa-star me-2\"></i>Score de proximité: \${(scores[index] * 100).toFixed(1)}%
                                        <span class=\"proximity-tooltip\">
                                            Calculé principalement sur la distance (80%), avec des ajustements pour la correspondance de catégorie et la capacité (20%).
                                        </span>
                                    </p>
                                    <a href=\"#\" class=\"btn btn-primary py-2 px-4 show-map-btn\" 
                                       data-lat=\"\${facility.lat}\" 
                                       data-lng=\"\${facility.lon}\" 
                                       data-nom=\"\${facility.nom_espace}\"
                                       data-weather-temp=\"\${facility.weather?.temp ?? 'N/A'}\"
                                       data-weather-humidity=\"\${facility.weather?.humidity ?? 'N/A'}\"
                                       data-weather-clouds=\"\${facility.weather?.cloud_pct ?? 'N/A'}\"
                                       data-weather-condition=\"\${facility.weather?.condition ?? 'cloudy'}\"
                                       data-toggle=\"modal\" 
                                       data-target=\"#mapModal\"><span>En savoir plus</span></a>
                                </div>
                            </div>
                        `;
                        \$('.recommendation-carousel').append(itemHtml);
                        itemsAdded++;
                    } else {
                        console.log(\"No facility found for ID:\", id);
                    }
                });

                if (itemsAdded === 0) {
                    console.log(\"No items added to carousel. Showing error message.\");
                    \$('#recommendation-carousel-error').show();
                    \$('#recommendation-section').show();
                } else {
                    \$('#recommendation-section').show();
                    // No need for Owl Carousel refresh since we're using flexbox
                    console.log(\"Carousel updated with\", itemsAdded, \"items.\");
                }
            }

            \$('#recommendation-form').on('submit', async function(e) {
                e.preventDefault();
                resetFeedback();
                \$('#loading-spinner').show();
                \$('#recommend-btn').prop('disabled', true);

                console.log(\"Form submitted.\");

                const address = \$('#user-address').val();
                const category = \$('#preferred-category').val();
                console.log(\"Address:\", address, \"Category:\", category);

                const validation = validateAddress(address);
                if (!validation.isValid) {
                    \$('#loading-spinner').hide();
                    \$('#address-error').text(validation.message).show();
                    \$('#recommend-btn').prop('disabled', false);
                    return;
                }

                try {
                    const result = await getRecommendations(address, category);
                    console.log(\"Recommendation results:\", result);

                    if (result.ids.length === 0) {
                        console.log(\"No recommendations found.\");
                        \$('#recommendation-carousel-error').show();
                        \$('#recommendation-section').show();
                    } else {
                        populateCarousel(result.ids, result.scores, result.facilities);
                    }
                } catch (e) {
                    console.error(\"Error generating recommendations:\", e);
                    \$('#recommendation-error').text(`Erreur lors de la génération des recommandations: \${e.message}`).show();
                } finally {
                    \$('#loading-spinner').hide();
                    \$('#recommend-btn').prop('disabled', false);
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
        return "espace/espaceF.html.twig";
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
        return array (  694 => 454,  660 => 423,  614 => 380,  610 => 379,  606 => 378,  533 => 309,  520 => 308,  467 => 264,  461 => 260,  457 => 258,  437 => 252,  433 => 251,  429 => 250,  425 => 249,  421 => 248,  417 => 247,  413 => 246,  407 => 243,  403 => 242,  399 => 241,  395 => 240,  389 => 237,  383 => 235,  380 => 234,  363 => 233,  360 => 232,  358 => 231,  355 => 230,  353 => 229,  346 => 225,  259 => 140,  246 => 139,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseM.html.twig' %}

{% block title %}Matchupz - Nos Espaces{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        #mapModal .modal-content {
            border-width: 0.5px;
            border-radius: 8px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05);
        }
        #weather-info {
            border-left-width: 0.3px;
        }
        #weather-icon {
            margin-bottom: 30px;
        }
        .recommendation-carousel .feature-item {
            border: 1px solid #007bff;
            background-color: #e7f1ff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .recommendation-carousel .feature-item:hover {
            transform: translateY(-5px);
        }
        .error-message {
            display: none;
            color: #dc3545;
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
        }
        .loading-spinner {
            display: none;
            text-align: center;
            margin-top: 20px;
        }
        .loading-spinner .spinner-border {
            width: 2rem;
            height: 2rem;
        }
        .recommendation-error-container {
            display: none;
            text-align: center;
            margin-top: 20px;
            color: #dc3545;
            font-weight: bold;
        }
        /* Improved fluid and expandable display for recommendation carousel */
        .recommendation-carousel {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: stretch;
            gap: 20px;
            padding: 0 15px;
        }
        .recommendation-carousel .feature-item {
            flex: 1 1 300px; /* Minimum width of 300px, grows to fill space */
            max-width: 400px; /* Maximum width to prevent items from getting too wide */
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .recommendation-carousel .feature-content {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .recommendation-carousel .feature-img img {
            object-fit: cover;
            height: 200px; /* Fixed height for consistency */
            width: 100%;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        @media (max-width: 767px) {
            .recommendation-carousel {
                flex-direction: column;
                gap: 15px;
            }
            .recommendation-carousel .feature-item {
                flex: 0 0 100%;
                max-width: 100%;
            }
            .recommendation-carousel .feature-img img {
                height: 150px;
            }
        }
        @media (min-width: 1200px) {
            .recommendation-carousel .feature-item {
                max-width: 350px; /* Slightly smaller on larger screens for more items */
            }
        }
        /* Tooltip styling for proximity score explanation */
        .proximity-score-container {
            position: relative;
            display: inline-block;
        }
        .proximity-tooltip {
            visibility: hidden;
            width: 220px;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 5px;
            padding: 8px;
            position: absolute;
            z-index: 10;
            bottom: 125%;
            left: 50%;
            transform: translateX(-50%);
            opacity: 0;
            transition: opacity 0.3s;
            font-size: 0.9rem;
        }
        .proximity-tooltip::after {
            content: '';
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #333 transparent transparent transparent;
        }
        .proximity-score-container:hover .proximity-tooltip {
            visibility: visible;
            opacity: 1;
        }
    </style>
{% endblock %}

{% block body %}
    <!-- Header Start -->
    <div class=\"container-fluid bg-breadcrumb\">
        <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
            <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Nos Espaces</h4>
            <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
                <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
                <li class=\"breadcrumb-item active text-primary\">Feature</li>
            </ol>    
        </div>
    </div>
    <!-- Header End -->

    <!-- Recommendation Form -->
    <div class=\"container py-3\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-8\">
                <div class=\"card\">
                    <div class=\"card-header bg-primary text-white\">
                        <h5 class=\"mb-0\">Trouver Votre Espace Sportif Idéal</h5>
                    </div>
                    <div class=\"card-body\">
                        <form id=\"recommendation-form\">
                            <div class=\"mb-3\">
                                <label for=\"user-address\" class=\"form-label\">Votre Adresse</label>
                                <input type=\"text\" class=\"form-control\" id=\"user-address\" placeholder=\"Ex: Tunis, Tunisia\">
                            </div>
                            <div class=\"mb-3\">
                                <label for=\"preferred-category\" class=\"form-label\">Catégorie Préférée</label>
                                <select class=\"form-control\" id=\"preferred-category\">
                                    <option value=\"terrain foot\">Terrain Foot</option>
                                    <option value=\"terrain basket\">Terrain Basket</option>
                                    <option value=\"salle gym\">Salle Gym</option>
                                    <option value=\"football\">Football</option>
                                </select>
                            </div>
                            <button type=\"submit\" class=\"btn btn-primary\" id=\"recommend-btn\">Recommander</button>
                        </form>
                        <div class=\"loading-spinner\" id=\"loading-spinner\">
                            <div class=\"spinner-border text-primary\" role=\"status\">
                                <span class=\"visually-hidden\">Chargement...</span>
                            </div>
                            <p class=\"mt-2\">Génération des recommandations...</p>
                        </div>
                        <div class=\"error-message\" id=\"address-error\">
                            Veuillez entrer une adresse au format \"Ville, Pays\" (ex: Tunis, Tunisia).
                        </div>
                        <div class=\"error-message\" id=\"geocoding-error\">
                            Impossible de convertir l'adresse en coordonnées. Veuillez vérifier l'adresse.
                        </div>
                        <div class=\"error-message\" id=\"recommendation-error\">
                            Erreur lors de la génération des recommandations. Veuillez réessayer.
                        </div>
                        <div class=\"error-message\" id=\"no-data-error\">
                            Aucun espace sportif disponible pour les recommandations. Ajoutez des espaces sportifs via l'interface d'administration.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recommended Espaces Section -->
    <div class=\"container-fluid feature bg-light py-5\" id=\"recommendation-section\" style=\"display: none;\">
        <div class=\"container py-5 position-relative\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\">Recommandations Personnalisées</h4>
                <h1 class=\"display-4 mb-4\">Les espaces sportifs les plus proches :</h1>
                <p class=\"mb-0\">Basé sur votre emplacement et vos préférences.</p>
            </div>
            <div class=\"recommendation-error-container\" id=\"recommendation-carousel-error\">
                Aucun espace sportif trouvé à proximité correspondant à vos critères.
            </div>
            <div class=\"recommendation-carousel mb-5 position-relative\" style=\"z-index: 2;\">
                <!-- Populated by JavaScript -->
            </div>
        </div>
    </div>

    <!-- All Espaces Sportifs Carousel -->
    <div class=\"container-fluid feature bg-light py-5\">
        <div class=\"container py-5 position-relative\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\">Why choose us?</h4>
                <h1 class=\"display-4 mb-4\">Découvrer Nos Espaces Sportifs</h1>
                <p class=\"mb-3\">{{ espaces_description }}</p>
                <p class=\"mb-0\">Ce site vous permet également de <strong>réserver votre club</strong> préféré et de souscrire à un <strong>abonnement</strong> en toute simplicité.</p>
            </div>

            {% set images = ['stadium1.jpg', 'stadium2.jpg', 'stadium3.jpg', 'stadium4.jpg', 'stadium5.jpg'] %}

            {% if espacesWithCoords|length > 0 %}
                <div class=\"espace-carousel owl-carousel mb-5 position-relative\" style=\"z-index: 2;\">
                    {% for item in espacesWithCoords %}
                        {% set espace = item.espace %}
                        <div class=\"feature-item wow fadeInUp\" data-wow-delay=\"{{ 0.2 + (loop.index0 * 0.2) }}s\">
                            <div class=\"feature-img\">
                                <img src=\"{{ asset('img/' ~ images[loop.index0 % images|length]) }}\" class=\"img-fluid w-100\" alt=\"Espace Sportif\">
                            </div>
                            <div class=\"feature-content p-4\">
                                <h4 class=\"mb-3\">{{ espace.nom_espace }}</h4>
                                <p class=\"mb-2\"><i class=\"fas fa-map-marker-alt me-2 text-primary\"></i><strong>Adresse:</strong> {{ espace.adresse }}</p>
                                <p class=\"mb-2\"><i class=\"fas fa-tags me-2 text-primary\"></i><strong>Catégorie:</strong> {{ espace.categorie }}</p>
                                <p class=\"mb-3\"><i class=\"fas fa-users me-2 text-primary\"></i><strong>Capacité:</strong> {{ espace.capacite }} personnes</p>
                                <p class=\"mb-3 text-muted\"><i class=\"fas fa-calendar-check me-2 text-success\"></i>Vous pouvez réserver un créneau pour votre club préféré.</p>
                                <a href=\"#\" class=\"btn btn-primary py-2 px-4 show-map-btn\" 
                                   data-lat=\"{{ item.latitude ?? '' }}\" 
                                   data-lng=\"{{ item.longitude ?? '' }}\" 
                                   data-nom=\"{{ espace.nom_espace }}\"
                                   data-weather-temp=\"{{ item.weather.temp ?? 'N/A' }}\"
                                   data-weather-humidity=\"{{ item.weather.humidity ?? 'N/A' }}\"
                                   data-weather-clouds=\"{{ item.weather.cloud_pct ?? 'N/A' }}\"
                                   data-weather-condition=\"{{ item.weather.condition ?? 'cloudy' }}\"
                                   data-toggle=\"modal\" 
                                   data-target=\"#mapModal\"><span>En savoir plus</span></a>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            {% else %}
                <div class=\"col-12 text-center\">
                    <p class=\"text-muted\">Aucun espace sportif trouvé.</p>
                </div>
            {% endif %}

            <div class=\"feature-shaps position-absolute top-0 start-0 w-100 h-100\" style=\"z-index: 1;\"></div>
        </div>
    </div>

    <!-- Map and Weather Modal -->
    <div class=\"modal fade\" id=\"mapModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mapModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-xl\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"mapModalLabel\">Localisation et Météo</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body d-flex flex-row\">
                    <div id=\"map\" style=\"height: 520px; width: 100%;\"></div>
                    <div id=\"weather-info\" class=\"p-4 d-flex flex-column justify-content-center align-items-center\" style=\"width: 25%; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-left: 1px solid #dee2e6; border-radius: 10px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);\">
                        <img id=\"weather-icon\" src=\"\" alt=\"Weather Icon\" class=\"weather-icon\" style=\"width: 120px; height: 120px; border-radius: 10%; box-shadow: 0 4px 8px rgba(223, 217, 217, 0.1); transition: transform 0.3s ease;\">
                        <h6 class=\"mb-4 text-uppercase font-weight-bold text-primary\" style=\"letter-spacing: 1px;\">Météo Actuelle</h6>
                        <div class=\"weather-data w-100\">
                            <p class=\"mb-3 d-flex align-items-center weather-item\" style=\"transition: background-color 0.3s ease;\">
                                <i class=\"fas fa-thermometer-half me-3 text-danger\" style=\"font-size: 1.2rem;\"></i>
                                <span><strong>Température:</strong> <span id=\"weather-temp\"></span>°C</span>
                            </p>
                            <p class=\"mb-3 d-flex align-items-center weather-item\" style=\"transition: background-color 0.3s ease;\">
                                <i class=\"fas fa-tint me-3 text-primary\" style=\"font-size: 1.2rem;\"></i>
                                <span><strong>Humidité:</strong> <span id=\"weather-humidity\"></span>%</span>
                            </p>
                            <p class=\"mb-0 d-flex align-items-center weather-item\" style=\"transition: background-color 0.3s ease;\">
                                <i class=\"fas fa-cloud me-3 text-muted\" style=\"font-size: 1.2rem;\"></i>
                                <span><strong>Nuages:</strong> <span id=\"weather-clouds\"></span>%</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <link href=\"https://api.mapbox.com/mapbox-gl-js/v3.7.0/mapbox-gl.css\" rel=\"stylesheet\">
    <script src=\"https://api.mapbox.com/mapbox-gl-js/v3.7.0/mapbox-gl.js\"></script>

    <script>
        // Function to hide all error messages and spinner
        function resetFeedback() {
            \$('.error-message').hide();
            \$('#loading-spinner').hide();
            \$('#recommend-btn').prop('disabled', false);
            \$('#recommendation-carousel-error').hide();
        }

        new WOW().init();

        \$(document).ready(function(){
            console.log(\"jQuery ready. Initializing carousels...\");
            // Initialize the espace carousel (unchanged)
            \$(\".espace-carousel\").owlCarousel({
                items: 3,
                margin: 30,
                loop: false,
                autoplay: false,
                dots: true,
                nav: false,
                responsive: {
                    0: { items: 1 },
                    768: { items: 2 },
                    992: { items: 3 }
                }
            });

            let map;
            const accessToken = \"pk.eyJ1IjoiaXNtYWlsMDIiLCJhIjoiY200cmJoajV4MDNibDJtc2VycmE2NnJ2MCJ9.6Nu1GLxUDkC9Odep6mKsmA\";

            function initializeMap(lat, lng, nom) {
                console.log(\"Initializing map for:\", nom, lat, lng);
                mapboxgl.accessToken = accessToken;
                if (map) {
                    map.remove();
                }
                map = new mapboxgl.Map({
                    container: 'map',
                    style: 'mapbox://styles/mapbox/streets-v11',
                    center: [lng, lat],
                    zoom: 15
                });
                new mapboxgl.Marker()
                    .setLngLat([lng, lat])
                    .setPopup(new mapboxgl.Popup().setHTML(`<b>\${nom}</b>`))
                    .addTo(map)
                    .togglePopup();
            }

            \$('.show-map-btn').on('click', function(e) {
                e.preventDefault();
                const lat = parseFloat(\$(this).data('lat'));
                const lng = parseFloat(\$(this).data('lng'));
                const nom = \$(this).data('nom');
                const temp = \$(this).data('weather-temp');
                const humidity = \$(this).data('weather-humidity');
                const clouds = \$(this).data('weather-clouds');
                const condition = \$(this).data('weather-condition');

                if (lat && lng && !isNaN(lat) && !isNaN(lng)) {
                    initializeMap(lat, lng, nom);
                    \$('#weather-temp').text(temp);
                    \$('#weather-humidity').text(humidity);
                    \$('#weather-clouds').text(clouds);
                    let iconSrc = condition === 'sunny' ? '{{ asset('img/clouds_sun_weather.png') }}' :
                                  condition === 'rainy' ? '{{ asset('img/rain_weather.png') }}' :
                                  '{{ asset('img/clouds_sun_weather.png') }}';
                    \$('#weather-icon').attr('src', iconSrc);
                    \$('#mapModal').modal('show');
                } else {
                    alert('Les coordonnées pour cet espace ne sont pas disponibles.');
                }
            });

            \$('#mapModal').on('shown.bs.modal', function () {
                if (map) {
                    setTimeout(function() {
                        map.resize();
                    }, 200);
                }
            });

            \$('#weather-icon').hover(
                function() { \$(this).css('transform', 'scale(1.1)'); },
                function() { \$(this).css('transform', 'scale(1)'); }
            );
            \$('.weather-item').hover(
                function() { \$(this).css('background-color', 'rgba(250, 250, 250, 0.05)'); },
                function() { \$(this).css('background-color', 'transparent'); }
            );

            // Recommendation form handling
            const images = ['stadium1.jpg', 'stadium2.jpg', 'stadium3.jpg', 'stadium4.jpg', 'stadium5.jpg'];

            // Address validation function for \"City, Country\" format
            function validateAddress(address) {
                if (!address) {
                    return { isValid: false, message: 'Veuillez entrer une adresse.' };
                }
                const trimmedAddress = address.trim();
                const cityCountryPattern = /^[\\p{L}\\s-]+,\\s*[\\p{L}\\s-]+\$/u;
                if (!cityCountryPattern.test(trimmedAddress)) {
                    return { isValid: false, message: 'L\\'adresse doit être au format \"Ville, Pays\" (ex: Tunis, Tunisia).' };
                }
                return { isValid: true, message: '' };
            }

            async function getRecommendations(address, category) {
                console.log(\"Requesting recommendations for address:\", address, \"category:\", category);
                const response = await fetch('{{ path('espace_recommend') }}', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                    body: `address=\${encodeURIComponent(address)}&category=\${encodeURIComponent(category)}`
                });
                const responseBody = await response.text();
                console.log(\"Response status:\", response.status);
                console.log(\"Response body:\", responseBody);
                if (response.ok) {
                    const result = JSON.parse(responseBody);
                    if (result.error) {
                        throw new Error(result.error);
                    }
                    return result;
                } else {
                    throw new Error(`Failed to fetch recommendations: Status \${response.status}, Body: \${responseBody}`);
                }
            }

            function populateCarousel(rankedIds, scores, facilities) {
                console.log(\"Populating carousel with ranked IDs:\", rankedIds, \"Scores:\", scores, \"Facilities:\", facilities);
                \$('.recommendation-carousel').empty();
                let itemsAdded = 0;

                rankedIds.forEach((id, index) => {
                    const facility = facilities.find(f => f.id === id);
                    if (facility) {
                        console.log(\"Found facility for ID\", id, \":\", facility.nom_espace);
                        const itemHtml = `
                            <div class=\"feature-item wow fadeInUp\" data-wow-delay=\"\${0.2 + index * 0.2}s\">
                                <div class=\"feature-img\">
                                    <img src=\"{{ asset('img/') }}\${images[index % images.length]}\" class=\"img-fluid\" alt=\"Espace Sportif\">
                                </div>
                                <div class=\"feature-content p-4\">
                                    <h4 class=\"mb-3\">\${facility.nom_espace}</h4>
                                    <p class=\"mb-2\"><i class=\"fas fa-map-marker-alt me-2 text-primary\"></i><strong>Adresse:</strong> \${facility.adresse}</p>
                                    <p class=\"mb-2\"><i class=\"fas fa-tags me-2 text-primary\"></i><strong>Catégorie:</strong> \${facility.categorie}</p>
                                    <p class=\"mb-3\"><i class=\"fas fa-users me-2 text-primary\"></i><strong>Capacité:</strong> \${facility.capacite} personnes</p>
                                    <p class=\"mb-3 text-success proximity-score-container\">
                                        <i class=\"fas fa-star me-2\"></i>Score de proximité: \${(scores[index] * 100).toFixed(1)}%
                                        <span class=\"proximity-tooltip\">
                                            Calculé principalement sur la distance (80%), avec des ajustements pour la correspondance de catégorie et la capacité (20%).
                                        </span>
                                    </p>
                                    <a href=\"#\" class=\"btn btn-primary py-2 px-4 show-map-btn\" 
                                       data-lat=\"\${facility.lat}\" 
                                       data-lng=\"\${facility.lon}\" 
                                       data-nom=\"\${facility.nom_espace}\"
                                       data-weather-temp=\"\${facility.weather?.temp ?? 'N/A'}\"
                                       data-weather-humidity=\"\${facility.weather?.humidity ?? 'N/A'}\"
                                       data-weather-clouds=\"\${facility.weather?.cloud_pct ?? 'N/A'}\"
                                       data-weather-condition=\"\${facility.weather?.condition ?? 'cloudy'}\"
                                       data-toggle=\"modal\" 
                                       data-target=\"#mapModal\"><span>En savoir plus</span></a>
                                </div>
                            </div>
                        `;
                        \$('.recommendation-carousel').append(itemHtml);
                        itemsAdded++;
                    } else {
                        console.log(\"No facility found for ID:\", id);
                    }
                });

                if (itemsAdded === 0) {
                    console.log(\"No items added to carousel. Showing error message.\");
                    \$('#recommendation-carousel-error').show();
                    \$('#recommendation-section').show();
                } else {
                    \$('#recommendation-section').show();
                    // No need for Owl Carousel refresh since we're using flexbox
                    console.log(\"Carousel updated with\", itemsAdded, \"items.\");
                }
            }

            \$('#recommendation-form').on('submit', async function(e) {
                e.preventDefault();
                resetFeedback();
                \$('#loading-spinner').show();
                \$('#recommend-btn').prop('disabled', true);

                console.log(\"Form submitted.\");

                const address = \$('#user-address').val();
                const category = \$('#preferred-category').val();
                console.log(\"Address:\", address, \"Category:\", category);

                const validation = validateAddress(address);
                if (!validation.isValid) {
                    \$('#loading-spinner').hide();
                    \$('#address-error').text(validation.message).show();
                    \$('#recommend-btn').prop('disabled', false);
                    return;
                }

                try {
                    const result = await getRecommendations(address, category);
                    console.log(\"Recommendation results:\", result);

                    if (result.ids.length === 0) {
                        console.log(\"No recommendations found.\");
                        \$('#recommendation-carousel-error').show();
                        \$('#recommendation-section').show();
                    } else {
                        populateCarousel(result.ids, result.scores, result.facilities);
                    }
                } catch (e) {
                    console.error(\"Error generating recommendations:\", e);
                    \$('#recommendation-error').text(`Erreur lors de la génération des recommandations: \${e.message}`).show();
                } finally {
                    \$('#loading-spinner').hide();
                    \$('#recommend-btn').prop('disabled', false);
                }
            });
        });
    </script>
{% endblock %}", "espace/espaceF.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\espace\\espaceF.html.twig");
    }
}
