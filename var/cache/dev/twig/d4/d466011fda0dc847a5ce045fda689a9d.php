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

/* schedule/mainF.html.twig */
class __TwigTemplate_eaa8f852c7e33f30f9a50d822dba03ac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "schedule/mainF.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "schedule/mainF.html.twig"));

        $this->parent = $this->loadTemplate("baseM.html.twig", "schedule/mainF.html.twig", 1);
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

        yield "Matchupz - Horaires";
        
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
            <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Horaires des matchs</h4>
            <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                <li class=\"breadcrumb-item active text-primary\">Horaires</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Schedules Start -->
    <div class=\"container-fluid courses overflow-hidden py-5\" style=\"margin-bottom: 90px;\">
        <div class=\"container py-5\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\">Nos horaires</h4>
                <h1 class=\"display-4 text-white mb-4\">Matchs à venir et en cours</h1>
                <p class=\"text-white mb-0\">
                    Restez informé de tous les matchs programmés. Les matchs en cours sont listés ci-dessous.
                </p>
            </div>

            <!-- Ongoing Matches -->
            <div class=\"mb-5\">
                <h3 class=\"text-primary mb-4\">Matchs en cours</h3>
                ";
        // line 32
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["ongoingSchedules"]) || array_key_exists("ongoingSchedules", $context) ? $context["ongoingSchedules"] : (function () { throw new RuntimeError('Variable "ongoingSchedules" does not exist.', 32, $this->source); })())) > 0)) {
            // line 33
            yield "                    <div class=\"row gy-4 gx-0 justify-content-center\">
                        ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ongoingSchedules"]) || array_key_exists("ongoingSchedules", $context) ? $context["ongoingSchedules"] : (function () { throw new RuntimeError('Variable "ongoingSchedules" does not exist.', 34, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
                // line 35
                yield "                            <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((0.2 + ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 35) % 3) * 0.2)), "html", null, true);
                yield "s\">
                                <div class=\"courses-item\">
                                    <div class=\"courses-item-inner p-4\">
                                        <div class=\"d-flex justify-content-between mb-4\">
                                            <div class=\"courses-icon-img p-3\">
                                                <img src=\"";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/icon-" . ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 40) % 6) + 1)) . ".png")), "html", null, true);
                yield "\" class=\"img-fluid\" alt=\"\">
                                            </div>
                                            <div class=\"data-info d-flex flex-column\">
                                                <div class=\"courses-date\">
                                                    <p class=\"mb-1\">Date : ";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "dateMatch", [], "any", false, false, false, 44), "Y-m-d"), "html", null, true);
                yield "</p>
                                                    <p class=\"mb-0\">Heure : ";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "startTime", [], "any", false, false, false, 45), "H:i"), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "endTime", [], "any", false, false, false, 45), "H:i"), "html", null, true);
                yield "</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href=\"";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_showF", ["idSchedule" => CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "idSchedule", [], "any", false, false, false, 49)]), "html", null, true);
                yield "\" class=\"d-inline-block h4 mb-3\">
                                            ";
                // line 50
                if (CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 50)) {
                    // line 51
                    yield "                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 51), "c1", [], "any", false, false, false, 51), "html", null, true);
                    yield " contre ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 51), "c2", [], "any", false, false, false, 51), "html", null, true);
                    yield "
                                            ";
                } else {
                    // line 53
                    yield "                                                Match à déterminer
                                            ";
                }
                // line 55
                yield "                                        </a>
                                        <p class=\"mb-4\">
                                            <strong>Lieu :</strong> ";
                // line 57
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "espaceSportif", [], "any", false, false, false, 57)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "espaceSportif", [], "any", false, false, false, 57), "nomEspace", [], "any", false, false, false, 57), "html", null, true)) : ("N/A"));
                yield "<br>
                                            ";
                // line 58
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 58) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 58), "sportType", [], "any", false, false, false, 58))) {
                    // line 59
                    yield "                                                <strong>Sport :</strong> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 59), "sportType", [], "any", false, false, false, 59), "html", null, true);
                    yield "
                                            ";
                }
                // line 61
                yield "                                        </p>
                                        <a href=\"";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_showF", ["idSchedule" => CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "idSchedule", [], "any", false, false, false, 62)]), "html", null, true);
                yield "\" class=\"btn btn-primary py-2 px-4\">
                                            <span>Voir les détails</span>
                                        </a>
                                    </div>
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
            unset($context['_seq'], $context['_key'], $context['schedule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            yield "                    </div>
                ";
        } else {
            // line 71
            yield "                    <p class=\"text-white\">Aucun match n'est actuellement en cours.</p>
                ";
        }
        // line 73
        yield "            </div>

            <!-- All Schedules -->
            <div>
                <h3 class=\"text-primary mb-4\">Tous les horaires</h3>
                <div class=\"row gy-4 gx-0 justify-content-center\">
                    ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 79, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
            // line 80
            yield "                        <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((0.2 + ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 80) % 3) * 0.2)), "html", null, true);
            yield "s\">
                            <div class=\"courses-item\">
                                <div class=\"courses-item-inner p-4\">
                                    <div class=\"d-flex justify-content-between mb-4\">
                                        <div class=\"courses-icon-img p-3\">
                                            <img src=\"";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/icon-" . ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 85) % 6) + 1)) . ".png")), "html", null, true);
            yield "\" class=\"img-fluid\" alt=\"\">
                                        </div>
                                        <div class=\"data-info d-flex flex-column\">
                                            <div class=\"courses-date\">
                                                <p class=\"mb-1\">Date : ";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "dateMatch", [], "any", false, false, false, 89), "Y-m-d"), "html", null, true);
            yield "</p>
                                                <p class=\"mb-0\">Heure : ";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "startTime", [], "any", false, false, false, 90), "H:i"), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "endTime", [], "any", false, false, false, 90), "H:i"), "html", null, true);
            yield "</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a href=\"";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_showF", ["idSchedule" => CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "idSchedule", [], "any", false, false, false, 94)]), "html", null, true);
            yield "\" class=\"d-inline-block h4 mb-3\">
                                        ";
            // line 95
            if (CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 95)) {
                // line 96
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 96), "c1", [], "any", false, false, false, 96), "html", null, true);
                yield " contre ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 96), "c2", [], "any", false, false, false, 96), "html", null, true);
                yield "
                                        ";
            } else {
                // line 98
                yield "                                            Match à déterminer
                                        ";
            }
            // line 100
            yield "                                    </a>
                                    <p class=\"mb-4\">
                                        <strong>Lieu :</strong> ";
            // line 102
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "espaceSportif", [], "any", false, false, false, 102)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "espaceSportif", [], "any", false, false, false, 102), "nomEspace", [], "any", false, false, false, 102), "html", null, true)) : ("N/A"));
            yield "<br>
                                        ";
            // line 103
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 103) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 103), "sportType", [], "any", false, false, false, 103))) {
                // line 104
                yield "                                            <strong>Sport :</strong> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 104), "sportType", [], "any", false, false, false, 104), "html", null, true);
                yield "
                                        ";
            }
            // line 106
            yield "                                    </p>
                                    <a href=\"";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_showF", ["idSchedule" => CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "idSchedule", [], "any", false, false, false, 107)]), "html", null, true);
            yield "\" class=\"btn btn-primary py-2 px-4\">
                                        <span>Voir les détails</span>
                                    </a>
                                </div>
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
        // line 113
        if (!$context['_iterated']) {
            // line 114
            yield "                        <div class=\"col-12 text-center\">
                            <p class=\"text-white\">Aucun horaire disponible pour le moment.</p>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['schedule'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        yield "                </div>
            </div>

            <div class=\"col-12 text-center wow fadeInUp\" data-wow-delay=\"0.2s\">
                <a href=\"";
        // line 122
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("schedule_new");
        yield "\" class=\"btn btn-primary py-3 px-5\">
                    <span>Ajouter un nouvel horaire</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Schedules End -->
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
        return "schedule/mainF.html.twig";
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
        return array (  376 => 122,  370 => 118,  361 => 114,  359 => 113,  340 => 107,  337 => 106,  331 => 104,  329 => 103,  325 => 102,  321 => 100,  317 => 98,  309 => 96,  307 => 95,  303 => 94,  294 => 90,  290 => 89,  283 => 85,  274 => 80,  256 => 79,  248 => 73,  244 => 71,  240 => 69,  219 => 62,  216 => 61,  210 => 59,  208 => 58,  204 => 57,  200 => 55,  196 => 53,  188 => 51,  186 => 50,  182 => 49,  173 => 45,  169 => 44,  162 => 40,  153 => 35,  136 => 34,  133 => 33,  131 => 32,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseM.html.twig' %}

{% block title %}Matchupz - Horaires{% endblock %}

{% block body %}
    <!-- Header Start -->
    <div class=\"container-fluid bg-breadcrumb\">
        <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
            <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Horaires des matchs</h4>
            <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
                <li class=\"breadcrumb-item active text-primary\">Horaires</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Schedules Start -->
    <div class=\"container-fluid courses overflow-hidden py-5\" style=\"margin-bottom: 90px;\">
        <div class=\"container py-5\">
            <div class=\"text-center mx-auto pb-5 wow fadeInUp\" data-wow-delay=\"0.2s\" style=\"max-width: 800px;\">
                <h4 class=\"text-primary\">Nos horaires</h4>
                <h1 class=\"display-4 text-white mb-4\">Matchs à venir et en cours</h1>
                <p class=\"text-white mb-0\">
                    Restez informé de tous les matchs programmés. Les matchs en cours sont listés ci-dessous.
                </p>
            </div>

            <!-- Ongoing Matches -->
            <div class=\"mb-5\">
                <h3 class=\"text-primary mb-4\">Matchs en cours</h3>
                {% if ongoingSchedules|length > 0 %}
                    <div class=\"row gy-4 gx-0 justify-content-center\">
                        {% for schedule in ongoingSchedules %}
                            <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"{{ 0.2 + (loop.index0 % 3) * 0.2 }}s\">
                                <div class=\"courses-item\">
                                    <div class=\"courses-item-inner p-4\">
                                        <div class=\"d-flex justify-content-between mb-4\">
                                            <div class=\"courses-icon-img p-3\">
                                                <img src=\"{{ asset('img/icon-' ~ ((loop.index0 % 6) + 1) ~ '.png') }}\" class=\"img-fluid\" alt=\"\">
                                            </div>
                                            <div class=\"data-info d-flex flex-column\">
                                                <div class=\"courses-date\">
                                                    <p class=\"mb-1\">Date : {{ schedule.dateMatch|date('Y-m-d') }}</p>
                                                    <p class=\"mb-0\">Heure : {{ schedule.startTime|date('H:i') }} - {{ schedule.endTime|date('H:i') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <a href=\"{{ path('schedule_showF', {'idSchedule': schedule.idSchedule}) }}\" class=\"d-inline-block h4 mb-3\">
                                            {% if schedule.matchEntity %}
                                                {{ schedule.matchEntity.c1 }} contre {{ schedule.matchEntity.c2 }}
                                            {% else %}
                                                Match à déterminer
                                            {% endif %}
                                        </a>
                                        <p class=\"mb-4\">
                                            <strong>Lieu :</strong> {{ schedule.espaceSportif ? schedule.espaceSportif.nomEspace : 'N/A' }}<br>
                                            {% if schedule.matchEntity and schedule.matchEntity.sportType %}
                                                <strong>Sport :</strong> {{ schedule.matchEntity.sportType }}
                                            {% endif %}
                                        </p>
                                        <a href=\"{{ path('schedule_showF', {'idSchedule': schedule.idSchedule}) }}\" class=\"btn btn-primary py-2 px-4\">
                                            <span>Voir les détails</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                {% else %}
                    <p class=\"text-white\">Aucun match n'est actuellement en cours.</p>
                {% endif %}
            </div>

            <!-- All Schedules -->
            <div>
                <h3 class=\"text-primary mb-4\">Tous les horaires</h3>
                <div class=\"row gy-4 gx-0 justify-content-center\">
                    {% for schedule in schedules %}
                        <div class=\"col-md-6 col-lg-4 wow fadeInUp\" data-wow-delay=\"{{ 0.2 + (loop.index0 % 3) * 0.2 }}s\">
                            <div class=\"courses-item\">
                                <div class=\"courses-item-inner p-4\">
                                    <div class=\"d-flex justify-content-between mb-4\">
                                        <div class=\"courses-icon-img p-3\">
                                            <img src=\"{{ asset('img/icon-' ~ ((loop.index0 % 6) + 1) ~ '.png') }}\" class=\"img-fluid\" alt=\"\">
                                        </div>
                                        <div class=\"data-info d-flex flex-column\">
                                            <div class=\"courses-date\">
                                                <p class=\"mb-1\">Date : {{ schedule.dateMatch|date('Y-m-d') }}</p>
                                                <p class=\"mb-0\">Heure : {{ schedule.startTime|date('H:i') }} - {{ schedule.endTime|date('H:i') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a href=\"{{ path('schedule_showF', {'idSchedule': schedule.idSchedule}) }}\" class=\"d-inline-block h4 mb-3\">
                                        {% if schedule.matchEntity %}
                                            {{ schedule.matchEntity.c1 }} contre {{ schedule.matchEntity.c2 }}
                                        {% else %}
                                            Match à déterminer
                                        {% endif %}
                                    </a>
                                    <p class=\"mb-4\">
                                        <strong>Lieu :</strong> {{ schedule.espaceSportif ? schedule.espaceSportif.nomEspace : 'N/A' }}<br>
                                        {% if schedule.matchEntity and schedule.matchEntity.sportType %}
                                            <strong>Sport :</strong> {{ schedule.matchEntity.sportType }}
                                        {% endif %}
                                    </p>
                                    <a href=\"{{ path('schedule_showF', {'idSchedule': schedule.idSchedule}) }}\" class=\"btn btn-primary py-2 px-4\">
                                        <span>Voir les détails</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    {% else %}
                        <div class=\"col-12 text-center\">
                            <p class=\"text-white\">Aucun horaire disponible pour le moment.</p>
                        </div>
                    {% endfor %}
                </div>
            </div>

            <div class=\"col-12 text-center wow fadeInUp\" data-wow-delay=\"0.2s\">
                <a href=\"{{ path('schedule_new') }}\" class=\"btn btn-primary py-3 px-5\">
                    <span>Ajouter un nouvel horaire</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Schedules End -->
{% endblock %}", "schedule/mainF.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\matchupz-web-0\\templates\\schedule\\mainF.html.twig");
    }
}
