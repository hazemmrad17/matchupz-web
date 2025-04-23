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
class __TwigTemplate_dcdcc282a32225322c92c116bab13b25 extends Template
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
            'navigation' => [$this, 'block_navigation'],
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
            border-width: 0.5px; /* Even thinner border */
            border-radius: 8px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05); /* Lighter shadow */
        }
        #weather-info {
            border-left-width: 0.3px; /* Thinner border for weather section */
        }
        #weather-icon {
            margin-bottom: 30px; /* Increased from 10px to 30px to raise the icon further */
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 26
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

        // line 27
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

    <!-- Espaces Sportifs Carousel Start -->
    <div class=\"container-fluid feature bg-light py-5\">
        <div class=\"container py-5 position-relative\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\">Why choose us?</h4>
                <h1 class=\"display-4 mb-4\">Découvrer Nos Espaces Sportifs</h1>
                <p class=\"mb-3\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["espaces_description"]) || array_key_exists("espaces_description", $context) ? $context["espaces_description"] : (function () { throw new RuntimeError('Variable "espaces_description" does not exist.', 46, $this->source); })()), "html", null, true);
        yield "</p>
                <p class=\"mb-0\">Ce site vous permet également de <strong>réserver votre club</strong> préféré et de souscrire à un <strong>abonnement</strong> en toute simplicité.</p>
            </div>

            ";
        // line 50
        $context["images"] = ["stadium1.jpg", "stadium2.jpg", "stadium3.jpg", "stadium4.jpg", "stadium5.jpg"];
        // line 51
        yield "
            ";
        // line 52
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["espacesWithCoords"]) || array_key_exists("espacesWithCoords", $context) ? $context["espacesWithCoords"] : (function () { throw new RuntimeError('Variable "espacesWithCoords" does not exist.', 52, $this->source); })())) > 0)) {
            // line 53
            yield "                <div class=\"espace-carousel owl-carousel mb-5 position-relative\" style=\"z-index: 2;\">
                    ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["espacesWithCoords"]) || array_key_exists("espacesWithCoords", $context) ? $context["espacesWithCoords"] : (function () { throw new RuntimeError('Variable "espacesWithCoords" does not exist.', 54, $this->source); })()));
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
                // line 55
                yield "                        ";
                $context["espace"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "espace", [], "any", false, false, false, 55);
                // line 56
                yield "                        <div class=\"feature-item wow fadeInUp\" data-wow-delay=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((0.2 + (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 56) * 0.2)), "html", null, true);
                yield "s\">
                            <div class=\"feature-img\">
                                <img src=\"";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 58, $this->source); })()), (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 58) % Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 58, $this->source); })()))), [], "array", false, false, false, 58))), "html", null, true);
                yield "\" class=\"img-fluid w-100\" alt=\"Espace Sportif\">
                            </div>
                            <div class=\"feature-content p-4\">
                                <h4 class=\"mb-3\">";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["espace"]) || array_key_exists("espace", $context) ? $context["espace"] : (function () { throw new RuntimeError('Variable "espace" does not exist.', 61, $this->source); })()), "nom_espace", [], "any", false, false, false, 61), "html", null, true);
                yield "</h4>
                                <p class=\"mb-2\"><i class=\"fas fa-map-marker-alt me-2 text-primary\"></i><strong>Adresse:</strong> ";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["espace"]) || array_key_exists("espace", $context) ? $context["espace"] : (function () { throw new RuntimeError('Variable "espace" does not exist.', 62, $this->source); })()), "adresse", [], "any", false, false, false, 62), "html", null, true);
                yield "</p>
                                <p class=\"mb-2\"><i class=\"fas fa-tags me-2 text-primary\"></i><strong>Catégorie:</strong> ";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["espace"]) || array_key_exists("espace", $context) ? $context["espace"] : (function () { throw new RuntimeError('Variable "espace" does not exist.', 63, $this->source); })()), "categorie", [], "any", false, false, false, 63), "html", null, true);
                yield "</p>
                                <p class=\"mb-3\"><i class=\"fas fa-users me-2 text-primary\"></i><strong>Capacité:</strong> ";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["espace"]) || array_key_exists("espace", $context) ? $context["espace"] : (function () { throw new RuntimeError('Variable "espace" does not exist.', 64, $this->source); })()), "capacite", [], "any", false, false, false, 64), "html", null, true);
                yield " personnes</p>
                                <p class=\"mb-3 text-muted\"><i class=\"fas fa-calendar-check me-2 text-success\"></i>Vous pouvez réserver un créneau pour votre club préféré.</p>
                                <a href=\"#\" class=\"btn btn-primary py-2 px-4 show-map-btn\" 
                                   data-lat=\"";
                // line 67
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "latitude", [], "any", true, true, false, 67) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "latitude", [], "any", false, false, false, 67)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "latitude", [], "any", false, false, false, 67), "html", null, true)) : (""));
                yield "\" 
                                   data-lng=\"";
                // line 68
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "longitude", [], "any", true, true, false, 68) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["item"], "longitude", [], "any", false, false, false, 68)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "longitude", [], "any", false, false, false, 68), "html", null, true)) : (""));
                yield "\" 
                                   data-nom=\"";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["espace"]) || array_key_exists("espace", $context) ? $context["espace"] : (function () { throw new RuntimeError('Variable "espace" does not exist.', 69, $this->source); })()), "nom_espace", [], "any", false, false, false, 69), "html", null, true);
                yield "\"
                                   data-weather-temp=\"";
                // line 70
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, true, false, 70), "temp", [], "any", true, true, false, 70) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 70), "temp", [], "any", false, false, false, 70)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 70), "temp", [], "any", false, false, false, 70), "html", null, true)) : ("N/A"));
                yield "\"
                                   data-weather-humidity=\"";
                // line 71
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, true, false, 71), "humidity", [], "any", true, true, false, 71) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 71), "humidity", [], "any", false, false, false, 71)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 71), "humidity", [], "any", false, false, false, 71), "html", null, true)) : ("N/A"));
                yield "\"
                                   data-weather-clouds=\"";
                // line 72
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, true, false, 72), "cloud_pct", [], "any", true, true, false, 72) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 72), "cloud_pct", [], "any", false, false, false, 72)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 72), "cloud_pct", [], "any", false, false, false, 72), "html", null, true)) : ("N/A"));
                yield "\"
                                   data-weather-condition=\"";
                // line 73
                yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, true, false, 73), "condition", [], "any", true, true, false, 73) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 73), "condition", [], "any", false, false, false, 73)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "weather", [], "any", false, false, false, 73), "condition", [], "any", false, false, false, 73), "html", null, true)) : ("cloudy"));
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
            // line 79
            yield "                </div>
            ";
        } else {
            // line 81
            yield "                <div class=\"col-12 text-center\">
                    <p class=\"text-muted\">Aucun espace sportif trouvé.</p>
                </div>
            ";
        }
        // line 85
        yield "
            <div class=\"feature-shaps position-absolute top-0 start-0 w-100 h-100\" style=\"z-index: 1;\"></div>
        </div>
    </div>
    <!-- Espaces Sportifs Carousel End -->

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
                    <!-- Map Section -->
                    <div id=\"map\" style=\"height: 520px; width: 100%;\"></div>
                    <!-- Weather Section -->
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

    // line 132
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

        // line 133
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- Include Mapbox GL JS -->
    <link href=\"https://api.mapbox.com/mapbox-gl-js/v3.7.0/mapbox-gl.css\" rel=\"stylesheet\">
    <script src=\"https://api.mapbox.com/mapbox-gl-js/v3.7.0/mapbox-gl.js\"></script>

    <script>
        new WOW().init();

        \$(document).ready(function(){
            \$(\".espace-carousel\").owlCarousel({
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

            // Map initialization
            let map;
            const accessToken = \"pk.eyJ1IjoiaXNtYWlsMDIiLCJhIjoiY200cmJoajV4MDNibDJtc2VycmE2NnJ2MCJ9.6Nu1GLxUDkC9Odep6mKsmA\";

            function initializeMap(lat, lng, nom) {
                // Set the Mapbox access token
                mapboxgl.accessToken = accessToken;

                // Remove previous map instance if it exists
                if (map) {
                    map.remove();
                }

                // Initialize the Mapbox map
                map = new mapboxgl.Map({
                    container: 'map', // ID of the container element
                    style: 'mapbox://styles/mapbox/streets-v11', // Mapbox style URL
                    center: [lng, lat], // [longitude, latitude]
                    zoom: 15 // Zoom level
                });

                // Add a marker
                new mapboxgl.Marker()
                    .setLngLat([lng, lat])
                    .setPopup(new mapboxgl.Popup().setHTML(`<b>\${nom}</b>`))
                    .addTo(map)
                    .togglePopup(); // Automatically open the popup
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
                    // Update weather info
                    \$('#weather-temp').text(temp);
                    \$('#weather-humidity').text(humidity);
                    \$('#weather-clouds').text(clouds);

                    // Set the weather icon based on condition
                    let iconSrc;
                    if (condition === 'sunny') {
                        iconSrc = '";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/clouds_sun_weather.png"), "html", null, true);
        yield "';
                    } else if (condition === 'rainy') {
                        iconSrc = '";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/rain_weather.png"), "html", null, true);
        yield "';
                    } else {
                        iconSrc = '";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/clouds_sun_weather.png"), "html", null, true);
        yield "';
                    }
                    \$('#weather-icon').attr('src', iconSrc);

                    \$('#mapModal').modal('show');
                } else {
                    alert('Les coordonnées pour cet espace ne sont pas disponibles.');
                }
            });

            // Fix map loading issue by resizing when modal is shown
            \$('#mapModal').on('shown.bs.modal', function () {
                if (map) {
                    setTimeout(function() {
                        map.resize();
                    }, 200); // Small delay to ensure modal is fully visible
                }
            });

            // Add hover effect for weather icon
            \$('#weather-icon').hover(
                function() {
                    \$(this).css('transform', 'scale(1.1)');
                },
                function() {
                    \$(this).css('transform', 'scale(1)');
                }
            );

            // Add hover effect for weather data items
            \$('.weather-item').hover(
                function() {
                    \$(this).css('background-color', 'rgba(250, 250, 250, 0.05)');
                },
                function() {
                    \$(this).css('background-color', 'transparent');
                }
            );
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
        return array (  466 => 211,  461 => 209,  456 => 207,  378 => 133,  365 => 132,  309 => 85,  303 => 81,  299 => 79,  279 => 73,  275 => 72,  271 => 71,  267 => 70,  263 => 69,  259 => 68,  255 => 67,  249 => 64,  245 => 63,  241 => 62,  237 => 61,  231 => 58,  225 => 56,  222 => 55,  205 => 54,  202 => 53,  200 => 52,  197 => 51,  195 => 50,  188 => 46,  167 => 27,  154 => 26,  143 => 23,  130 => 22,  103 => 6,  90 => 5,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseM.html.twig' %}

{% block title %}Matchupz - Nos Espaces{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        #mapModal .modal-content {
            border-width: 0.5px; /* Even thinner border */
            border-radius: 8px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05); /* Lighter shadow */
        }
        #weather-info {
            border-left-width: 0.3px; /* Thinner border for weather section */
        }
        #weather-icon {
            margin-bottom: 30px; /* Increased from 10px to 30px to raise the icon further */
        }
    </style>
{% endblock %}

{% block navigation %}
    {# Navigation block remains unchanged — omitted for brevity #}
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

    <!-- Espaces Sportifs Carousel Start -->
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
    <!-- Espaces Sportifs Carousel End -->

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
                    <!-- Map Section -->
                    <div id=\"map\" style=\"height: 520px; width: 100%;\"></div>
                    <!-- Weather Section -->
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
    <!-- Include Mapbox GL JS -->
    <link href=\"https://api.mapbox.com/mapbox-gl-js/v3.7.0/mapbox-gl.css\" rel=\"stylesheet\">
    <script src=\"https://api.mapbox.com/mapbox-gl-js/v3.7.0/mapbox-gl.js\"></script>

    <script>
        new WOW().init();

        \$(document).ready(function(){
            \$(\".espace-carousel\").owlCarousel({
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

            // Map initialization
            let map;
            const accessToken = \"pk.eyJ1IjoiaXNtYWlsMDIiLCJhIjoiY200cmJoajV4MDNibDJtc2VycmE2NnJ2MCJ9.6Nu1GLxUDkC9Odep6mKsmA\";

            function initializeMap(lat, lng, nom) {
                // Set the Mapbox access token
                mapboxgl.accessToken = accessToken;

                // Remove previous map instance if it exists
                if (map) {
                    map.remove();
                }

                // Initialize the Mapbox map
                map = new mapboxgl.Map({
                    container: 'map', // ID of the container element
                    style: 'mapbox://styles/mapbox/streets-v11', // Mapbox style URL
                    center: [lng, lat], // [longitude, latitude]
                    zoom: 15 // Zoom level
                });

                // Add a marker
                new mapboxgl.Marker()
                    .setLngLat([lng, lat])
                    .setPopup(new mapboxgl.Popup().setHTML(`<b>\${nom}</b>`))
                    .addTo(map)
                    .togglePopup(); // Automatically open the popup
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
                    // Update weather info
                    \$('#weather-temp').text(temp);
                    \$('#weather-humidity').text(humidity);
                    \$('#weather-clouds').text(clouds);

                    // Set the weather icon based on condition
                    let iconSrc;
                    if (condition === 'sunny') {
                        iconSrc = '{{ asset('img/clouds_sun_weather.png') }}';
                    } else if (condition === 'rainy') {
                        iconSrc = '{{ asset('img/rain_weather.png') }}';
                    } else {
                        iconSrc = '{{ asset('img/clouds_sun_weather.png') }}';
                    }
                    \$('#weather-icon').attr('src', iconSrc);

                    \$('#mapModal').modal('show');
                } else {
                    alert('Les coordonnées pour cet espace ne sont pas disponibles.');
                }
            });

            // Fix map loading issue by resizing when modal is shown
            \$('#mapModal').on('shown.bs.modal', function () {
                if (map) {
                    setTimeout(function() {
                        map.resize();
                    }, 200); // Small delay to ensure modal is fully visible
                }
            });

            // Add hover effect for weather icon
            \$('#weather-icon').hover(
                function() {
                    \$(this).css('transform', 'scale(1.1)');
                },
                function() {
                    \$(this).css('transform', 'scale(1)');
                }
            );

            // Add hover effect for weather data items
            \$('.weather-item').hover(
                function() {
                    \$(this).css('background-color', 'rgba(250, 250, 250, 0.05)');
                },
                function() {
                    \$(this).css('background-color', 'transparent');
                }
            );
        });
    </script>
{% endblock %}", "espace/espaceF.html.twig", "C:\\Users\\Ismail\\Desktop\\matchupz\\templates\\espace\\espaceF.html.twig");
    }
}
