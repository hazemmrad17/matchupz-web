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

/* club/statistics.html.twig */
class __TwigTemplate_9297c03d6409c9420bb32da9b749b849 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/statistics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/statistics.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "club/statistics.html.twig", 1);
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

        yield "Club Statistics";
        
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
        yield "<h4 class=\"fw-bold py-3 mb-4\">Club Statistics</h4>

<div class=\"row\">

    <!-- Total Clubs -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/building.png"), "html", null, true);
        yield "\" alt=\"Clubs\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Total Clubs</span>
                <h3 class=\"card-title mb-2\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalClubs"]) || array_key_exists("totalClubs", $context) ? $context["totalClubs"] : (function () { throw new RuntimeError('Variable "totalClubs" does not exist.', 20, $this->source); })()), "html", null, true);
        yield "</h3>
                <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Updated Today</small>
            </div>
        </div>
    </div>

    <!-- Clubs with Photos -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/image.png"), "html", null, true);
        yield "\" alt=\"Photo\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Clubs with Photo</span>
                <h3 class=\"card-title mb-2\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["clubsWithPhotos"]) || array_key_exists("clubsWithPhotos", $context) ? $context["clubsWithPhotos"] : (function () { throw new RuntimeError('Variable "clubsWithPhotos" does not exist.', 36, $this->source); })()), "html", null, true);
        yield "</h3>
                <small class=\"text-muted\">Out of ";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalClubs"]) || array_key_exists("totalClubs", $context) ? $context["totalClubs"] : (function () { throw new RuntimeError('Variable "totalClubs" does not exist.', 37, $this->source); })()), "html", null, true);
        yield " total clubs</small>
            </div>
        </div>
    </div>

    <!-- Clubs without Photos -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/times.png"), "html", null, true);
        yield "\" alt=\"No Photo\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Clubs without Photo</span>
                <h3 class=\"card-title mb-2\">";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["clubsWithoutPhotos"]) || array_key_exists("clubsWithoutPhotos", $context) ? $context["clubsWithoutPhotos"] : (function () { throw new RuntimeError('Variable "clubsWithoutPhotos" does not exist.', 52, $this->source); })()), "html", null, true);
        yield "</h3>
                <small class=\"text-muted\">Missing logo/photo</small>
            </div>
        </div>
    </div>

    <!-- All Clubs List -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">All Clubs</h5></div>
            <div class=\"card-body\" style=\"max-height: 400px; overflow-y: auto;\">
                <ul class=\"p-0 m-0\">
                    ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["allClubs"]) || array_key_exists("allClubs", $context) ? $context["allClubs"] : (function () { throw new RuntimeError('Variable "allClubs" does not exist.', 64, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["club"]) {
            // line 65
            yield "                        <li class=\"d-flex mb-4 pb-1\">
                            <div class=\"avatar flex-shrink-0 me-3\">
                                ";
            // line 67
            if (CoreExtension::getAttribute($this->env, $this->source, $context["club"], "photoUrl", [], "any", false, false, false, 67)) {
                // line 68
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["club"], "photoUrl", [], "any", false, false, false, 68)), "html", null, true);
                yield "\" alt=\"Club Photo\" class=\"rounded\" />
                                ";
            } else {
                // line 70
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icons/unicons/building.png"), "html", null, true);
                yield "\" alt=\"No Photo\" class=\"rounded\" />
                                ";
            }
            // line 72
            yield "                            </div>
                            <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                <div class=\"me-2\">
                                    <h6 class=\"mb-0\">";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["club"], "nomClub", [], "any", false, false, false, 75), "html", null, true);
            yield "</h6>
                                    <small class=\"text-muted\">
                                        ";
            // line 77
            if (CoreExtension::getAttribute($this->env, $this->source, $context["club"], "photoUrl", [], "any", false, false, false, 77)) {
                yield "Has photo";
            } else {
                yield "No photo";
            }
            // line 78
            yield "                                    </small>
                                </div>
                                <div class=\"user-progress\">
                                    <small class=\"fw-semibold\">ID: ";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["club"], "idClub", [], "any", false, false, false, 81), "html", null, true);
            yield "</small>
                                </div>
                            </div>
                        </li>
                    ";
            $context['_iterated'] = true;
        }
        // line 85
        if (!$context['_iterated']) {
            // line 86
            yield "                        <li>No clubs found.</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['club'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "                </ul>
            </div>
        </div>
    </div>

    <!-- Photo Availability Chart -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Photo Availability</h5></div>
            <div class=\"card-body\"><div id=\"photoChart\"></div></div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 103
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

        // line 104
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new ApexCharts(document.querySelector(\"#photoChart\"), {
                chart: { type: 'pie', height: 350 },
                series: [";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["clubsWithPhotos"]) || array_key_exists("clubsWithPhotos", $context) ? $context["clubsWithPhotos"] : (function () { throw new RuntimeError('Variable "clubsWithPhotos" does not exist.', 109, $this->source); })()), "html", null, true);
        yield ", ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["clubsWithoutPhotos"]) || array_key_exists("clubsWithoutPhotos", $context) ? $context["clubsWithoutPhotos"] : (function () { throw new RuntimeError('Variable "clubsWithoutPhotos" does not exist.', 109, $this->source); })()), "html", null, true);
        yield "],
                labels: ['With Photo', 'Without Photo'],
                colors: ['#17c964', '#f31260']
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
        return "club/statistics.html.twig";
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
        return array (  290 => 109,  281 => 104,  268 => 103,  244 => 88,  237 => 86,  235 => 85,  226 => 81,  221 => 78,  215 => 77,  210 => 75,  205 => 72,  199 => 70,  193 => 68,  191 => 67,  187 => 65,  182 => 64,  167 => 52,  160 => 48,  146 => 37,  142 => 36,  135 => 32,  120 => 20,  113 => 16,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Club Statistics{% endblock %}

{% block body %}
<h4 class=\"fw-bold py-3 mb-4\">Club Statistics</h4>

<div class=\"row\">

    <!-- Total Clubs -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"{{ asset('img/icons/unicons/building.png') }}\" alt=\"Clubs\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Total Clubs</span>
                <h3 class=\"card-title mb-2\">{{ totalClubs }}</h3>
                <small class=\"text-success fw-semibold\"><i class=\"bx bx-up-arrow-alt\"></i> Updated Today</small>
            </div>
        </div>
    </div>

    <!-- Clubs with Photos -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"{{ asset('img/icons/unicons/image.png') }}\" alt=\"Photo\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Clubs with Photo</span>
                <h3 class=\"card-title mb-2\">{{ clubsWithPhotos }}</h3>
                <small class=\"text-muted\">Out of {{ totalClubs }} total clubs</small>
            </div>
        </div>
    </div>

    <!-- Clubs without Photos -->
    <div class=\"col-lg-4 col-md-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"card-title d-flex align-items-start justify-content-between\">
                    <div class=\"avatar flex-shrink-0\">
                        <img src=\"{{ asset('img/icons/unicons/times.png') }}\" alt=\"No Photo\" class=\"rounded\" />
                    </div>
                </div>
                <span class=\"fw-semibold d-block mb-1\">Clubs without Photo</span>
                <h3 class=\"card-title mb-2\">{{ clubsWithoutPhotos }}</h3>
                <small class=\"text-muted\">Missing logo/photo</small>
            </div>
        </div>
    </div>

    <!-- All Clubs List -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">All Clubs</h5></div>
            <div class=\"card-body\" style=\"max-height: 400px; overflow-y: auto;\">
                <ul class=\"p-0 m-0\">
                    {% for club in allClubs %}
                        <li class=\"d-flex mb-4 pb-1\">
                            <div class=\"avatar flex-shrink-0 me-3\">
                                {% if club.photoUrl %}
                                    <img src=\"{{ asset(club.photoUrl) }}\" alt=\"Club Photo\" class=\"rounded\" />
                                {% else %}
                                    <img src=\"{{ asset('img/icons/unicons/building.png') }}\" alt=\"No Photo\" class=\"rounded\" />
                                {% endif %}
                            </div>
                            <div class=\"d-flex w-100 flex-wrap align-items-center justify-content-between gap-2\">
                                <div class=\"me-2\">
                                    <h6 class=\"mb-0\">{{ club.nomClub }}</h6>
                                    <small class=\"text-muted\">
                                        {% if club.photoUrl %}Has photo{% else %}No photo{% endif %}
                                    </small>
                                </div>
                                <div class=\"user-progress\">
                                    <small class=\"fw-semibold\">ID: {{ club.idClub }}</small>
                                </div>
                            </div>
                        </li>
                    {% else %}
                        <li>No clubs found.</li>
                    {% endfor %}
                </ul>
            </div>
        </div>
    </div>

    <!-- Photo Availability Chart -->
    <div class=\"col-12 col-lg-6 mb-4\">
        <div class=\"card\">
            <div class=\"card-header\"><h5 class=\"card-title m-0 me-2\">Photo Availability</h5></div>
            <div class=\"card-body\"><div id=\"photoChart\"></div></div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new ApexCharts(document.querySelector(\"#photoChart\"), {
                chart: { type: 'pie', height: 350 },
                series: [{{ clubsWithPhotos }}, {{ clubsWithoutPhotos }}],
                labels: ['With Photo', 'Without Photo'],
                colors: ['#17c964', '#f31260']
            }).render();
        });
    </script>
{% endblock %}
", "club/statistics.html.twig", "C:\\Users\\louay\\Desktop\\Projet\\web\\matchupz-web-match\\templates\\club\\statistics.html.twig");
    }
}
