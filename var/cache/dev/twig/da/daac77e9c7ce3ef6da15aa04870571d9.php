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

/* joueur/new.html.twig */
class __TwigTemplate_0180e00496856fdaea4abfc598d3258d extends Template
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
            'searchbar' => [$this, 'block_searchbar'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "joueur/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "joueur/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    ";
        yield from $this->loadTemplate("searchbar.html.twig", "joueur/new.html.twig", 4)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Joueurs /</span> Nouveau Joueur
            </h4>

            <div class=\"col-xl\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Ajouter un Nouveau Joueur</h5>
                        <small class=\"text-muted float-end\">Remplir les détails</small>
                    </div>
                    <div class=\"card-body\">
                        <!-- Toast container for flash messages -->
                        <div class=\"position-fixed top-0 end-0 p-3\" style=\"z-index: 1050;\" id=\"toast-container\">
                            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "flashes", [], "any", false, false, false, 23));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 24
            yield "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
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
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 25
                yield "                                    <div id=\"toast-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 25), "html", null, true);
                yield "\" class=\"bs-toast toast fade bg-";
                yield ((($context["label"] == "success")) ? ("success") : ("danger"));
                yield "\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
                                        <div class=\"toast-header\">
                                            <i class=\"bx bx-bell me-2\"></i>
                                            <div class=\"me-auto fw-semibold\">";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["label"]), "html", null, true);
                yield "</div>
                                            <small>Maintenant</small>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                                        </div>
                                        <div class=\"toast-body\">";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</div>
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
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "                        </div>

                        ";
        // line 38
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data", "id" => "playerForm", "novalidate" => "novalidate"]]);
        yield "
                            <!-- Joueur Fields -->
                            <div class=\"mb-3\">
                                ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "nom", [], "any", false, false, false, 41), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                    ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "nom", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: Dupont", "maxlength" => "50"]]);
        yield "
                                </div>
                                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "nom", [], "any", false, false, false, 46), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "prenom", [], "any", false, false, false, 50), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Prénom"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                    ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "prenom", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: Jean", "maxlength" => "50"]]);
        yield "
                                </div>
                                ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "prenom", [], "any", false, false, false, 55), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "dateNaissance", [], "any", false, false, false, 59), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date de Naissance"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                    ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "dateNaissance", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                                ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "dateNaissance", [], "any", false, false, false, 64), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "poste", [], "any", false, false, false, 68), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Poste"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-target-lock\"></i></span>
                                    ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "poste", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                                ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "poste", [], "any", false, false, false, 73), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "taille", [], "any", false, false, false, 77), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Taille (m)"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-ruler\"></i></span>
                                    ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "taille", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 1.85", "step" => "0.01", "min" => "0", "max" => "3"]]);
        yield "
                                </div>
                                ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "taille", [], "any", false, false, false, 82), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "poids", [], "any", false, false, false, 86), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Poids (kg)"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-scale\"></i></span>
                                    ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "poids", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 75", "step" => "0.1", "min" => "0", "max" => "500"]]);
        yield "
                                </div>
                                ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "poids", [], "any", false, false, false, 91), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "email", [], "any", false, false, false, 95), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Email"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                                    ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "email", [], "any", false, false, false, 98), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: email@exemple.com", "maxlength" => "100"]]);
        yield "
                                </div>
                                ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "email", [], "any", false, false, false, 100), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "telephone", [], "any", false, false, false, 104), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Téléphone"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-phone\"></i></span>
                                    ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "telephone", [], "any", false, false, false, 107), 'widget', ["attr" => ["class" => "form-control phone-mask", "placeholder" => "ex: +33 6 12 34 56 78", "maxlength" => "20"]]);
        yield "
                                </div>
                                ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "telephone", [], "any", false, false, false, 109), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "statut", [], "any", false, false, false, 113), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Statut"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-id-card\"></i></span>
                                    ";
        // line 116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "statut", [], "any", false, false, false, 116), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                                ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "statut", [], "any", false, false, false, 118), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "profilePicture", [], "any", false, false, false, 122), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Photo de Profil"]);
        yield "
                                ";
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "profilePicture", [], "any", false, false, false, 123), 'widget', ["attr" => ["class" => "form-control", "accept" => "image/jpeg,image/png"]]);
        yield "
                                <small class=\"form-text text-muted\">Formats acceptés : JPEG, PNG (max 2Mo)</small>
                                ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "profilePicture", [], "any", false, false, false, 125), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <!-- Evaluation Physique Fields -->
                            <h5 class=\"mt-4\">Évaluation Physique</h5>
                            <div class=\"mb-3\">
                                ";
        // line 131
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "evaluationPhysique", [], "any", false, false, false, 131), "dateEvaluation", [], "any", false, false, false, 131), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Date d'Évaluation"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                    ";
        // line 134
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "evaluationPhysique", [], "any", false, false, false, 134), "dateEvaluation", [], "any", false, false, false, 134), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                </div>
                                ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "evaluationPhysique", [], "any", false, false, false, 136), "dateEvaluation", [], "any", false, false, false, 136), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 140
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "evaluationPhysique", [], "any", false, false, false, 140), "niveauEndurance", [], "any", false, false, false, 140), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Niveau d'Endurance (0-10)"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-heart\"></i></span>
                                    ";
        // line 143
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "evaluationPhysique", [], "any", false, false, false, 143), "niveauEndurance", [], "any", false, false, false, 143), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 8.5", "step" => "0.1", "min" => "0", "max" => "10"]]);
        yield "
                                </div>
                                ";
        // line 145
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "evaluationPhysique", [], "any", false, false, false, 145), "niveauEndurance", [], "any", false, false, false, 145), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 149
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "evaluationPhysique", [], "any", false, false, false, 149), "forcePhysique", [], "any", false, false, false, 149), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Force Physique (0-10)"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-dumbbell\"></i></span>
                                    ";
        // line 152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "evaluationPhysique", [], "any", false, false, false, 152), "forcePhysique", [], "any", false, false, false, 152), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 7.0", "step" => "0.1", "min" => "0", "max" => "10"]]);
        yield "
                                </div>
                                ";
        // line 154
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), "evaluationPhysique", [], "any", false, false, false, 154), "forcePhysique", [], "any", false, false, false, 154), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 158
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "evaluationPhysique", [], "any", false, false, false, 158), "vitesse", [], "any", false, false, false, 158), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Vitesse (0-10)"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-run\"></i></span>
                                    ";
        // line 161
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "evaluationPhysique", [], "any", false, false, false, 161), "vitesse", [], "any", false, false, false, 161), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 9.0", "step" => "0.1", "min" => "0", "max" => "10"]]);
        yield "
                                </div>
                                ";
        // line 163
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "evaluationPhysique", [], "any", false, false, false, 163), "vitesse", [], "any", false, false, false, 163), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 167
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "evaluationPhysique", [], "any", false, false, false, 167), "etatBlessure", [], "any", false, false, false, 167), 'label', ["label_attr" => ["class" => "form-label"], "label" => "État de Blessure"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-band-aid\"></i></span>
                                    ";
        // line 170
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "evaluationPhysique", [], "any", false, false, false, 170), "etatBlessure", [], "any", false, false, false, 170), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: Aucun", "maxlength" => "255"]]);
        yield "
                                </div>
                                ";
        // line 172
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "evaluationPhysique", [], "any", false, false, false, 172), "etatBlessure", [], "any", false, false, false, 172), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <!-- Performance Joueur Fields -->
                            <h5 class=\"mt-4\">Performance du Joueur</h5>
                            <div class=\"mb-3\">
                                ";
        // line 178
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 178), "saison", [], "any", false, false, false, 178), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Saison"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                    ";
        // line 181
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 181), "saison", [], "any", false, false, false, 181), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 2023-2024", "maxlength" => "9"]]);
        yield "
                                </div>
                                ";
        // line 183
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 183), "saison", [], "any", false, false, false, 183), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 187
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 187), "nombreMatches", [], "any", false, false, false, 187), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nombre de Matches"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-football\"></i></span>
                                    ";
        // line 190
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 190), "nombreMatches", [], "any", false, false, false, 190), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 10", "min" => "0"]]);
        yield "
                                </div>
                                ";
        // line 192
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 192), "nombreMatches", [], "any", false, false, false, 192), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 196
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 196), "minutesJouees", [], "any", false, false, false, 196), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Minutes Jouées"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-time\"></i></span>
                                    ";
        // line 199
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 199, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 199), "minutesJouees", [], "any", false, false, false, 199), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 900", "min" => "0"]]);
        yield "
                                </div>
                                ";
        // line 201
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 201), "minutesJouees", [], "any", false, false, false, 201), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 205
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 205), "butsMarques", [], "any", false, false, false, 205), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Buts Marqués"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-target-lock\"></i></span>
                                    ";
        // line 208
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 208, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 208), "butsMarques", [], "any", false, false, false, 208), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 5", "min" => "0"]]);
        yield "
                                </div>
                                ";
        // line 210
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 210, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 210), "butsMarques", [], "any", false, false, false, 210), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 214
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 214, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 214), "passesDecisives", [], "any", false, false, false, 214), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Passes Décisives"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-target-lock\"></i></span>
                                    ";
        // line 217
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 217), "passesDecisives", [], "any", false, false, false, 217), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 3", "min" => "0"]]);
        yield "
                                </div>
                                ";
        // line 219
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 219, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 219), "passesDecisives", [], "any", false, false, false, 219), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 223
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 223, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 223), "cartonsJaunes", [], "any", false, false, false, 223), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Cartons Jaunes"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-card\"></i></span>
                                    ";
        // line 226
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 226, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 226), "cartonsJaunes", [], "any", false, false, false, 226), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 2", "min" => "0"]]);
        yield "
                                </div>
                                ";
        // line 228
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 228, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 228), "cartonsJaunes", [], "any", false, false, false, 228), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <div class=\"mb-3\">
                                ";
        // line 232
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 232, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 232), "cartonsRouges", [], "any", false, false, false, 232), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Cartons Rouges"]);
        yield " <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-card\"></i></span>
                                    ";
        // line 235
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 235, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 235), "cartonsRouges", [], "any", false, false, false, 235), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "ex: 0", "min" => "0"]]);
        yield "
                                </div>
                                ";
        // line 237
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 237, $this->source); })()), "performanceJoueur", [], "any", false, false, false, 237), "cartonsRouges", [], "any", false, false, false, 237), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
                            </div>

                            <!-- Form Buttons -->
                            <button type=\"submit\" class=\"btn btn-primary\">Créer</button>
                            <a href=\"";
        // line 242
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("joueur_main");
        yield "\" class=\"btn btn-secondary\">Annuler</a>
                        ";
        // line 243
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 243, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Client-Side Validation Script -->
    <script>
        document.getElementById('playerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const toastContainer = document.getElementById('toast-container');
            toastContainer.innerHTML = ''; // Clear previous toasts

            // Joueur Fields
            const nom = document.getElementById('joueur_nom')?.value.trim() || '';
            const prenom = document.getElementById('joueur_prenom')?.value.trim() || '';
            const dateNaissance = document.getElementById('joueur_dateNaissance')?.value || '';
            const poste = document.getElementById('joueur_poste')?.value || '';
            const taille = document.getElementById('joueur_taille')?.value.trim() || '';
            const poids = document.getElementById('joueur_poids')?.value.trim() || '';
            const email = document.getElementById('joueur_email')?.value.trim() || '';
            const telephone = document.getElementById('joueur_telephone')?.value.trim() || '';
            const statut = document.getElementById('joueur_statut')?.value || '';
            const profilePicture = document.getElementById('joueur_profilePicture')?.files[0];

            // Evaluation Physique Fields
            const dateEvaluation = document.getElementById('joueur_evaluationPhysique_dateEvaluation')?.value || '';
            const niveauEndurance = document.getElementById('joueur_evaluationPhysique_niveauEndurance')?.value.trim() || '';
            const forcePhysique = document.getElementById('joueur_evaluationPhysique_forcePhysique')?.value.trim() || '';
            const vitesse = document.getElementById('joueur_evaluationPhysique_vitesse')?.value.trim() || '';
            const etatBlessure = document.getElementById('joueur_evaluationPhysique_etatBlessure')?.value.trim() || '';

            // Performance Joueur Fields
            const saison = document.getElementById('joueur_performanceJoueur_saison')?.value.trim() || '';
            const nombreMatches = document.getElementById('joueur_performanceJoueur_nombreMatches')?.value.trim() || '';
            const minutesJouees = document.getElementById('joueur_performanceJoueur_minutesJouees')?.value.trim() || '';
            const butsMarques = document.getElementById('joueur_performanceJoueur_butsMarques')?.value.trim() || '';
            const passesDecisives = document.getElementById('joueur_performanceJoueur_passesDecisives')?.value.trim() || '';
            const cartonsJaunes = document.getElementById('joueur_performanceJoueur_cartonsJaunes')?.value.trim() || '';
            const cartonsRouges = document.getElementById('joueur_performanceJoueur_cartonsRouges')?.value.trim() || '';

            // Validation for Joueur Fields
            if (!nom) addToast('Erreur Nom', 'Le champ nom est vide.');
            else if (nom.length > 50) addToast('Erreur Nom', 'Le nom ne doit pas dépasser 50 caractères.');

            if (!prenom) addToast('Erreur Prénom', 'Le champ prénom est vide.');
            else if (prenom.length > 50) addToast('Erreur Prénom', 'Le prénom ne doit pas dépasser 50 caractères.');

            if (!dateNaissance) addToast('Erreur Date', 'Le champ date de naissance est vide.');
            else {
                const birthDate = new Date(dateNaissance);
                const today = new Date();
                if (birthDate > today) addToast('Erreur Date', 'La date de naissance ne peut pas être dans le futur.');
            }

            if (!poste) addToast('Erreur Poste', 'Le champ poste est vide.');
            else if (!['GK','RB','LB','RWB','LWB','SW','DM','CM','AM','RM','LM','RW','LW','CF','ST','SS'].includes(poste)) addToast('Erreur Poste', 'Veuillez sélectionner un poste valide.');

            if (!taille) addToast('Erreur Taille', 'Le champ taille est vide.');
            else {
                const tailleNum = parseFloat(taille);
                if (isNaN(tailleNum) || tailleNum <= 0) addToast('Erreur Taille', 'La taille doit être un nombre positif.');
                else if (tailleNum > 3) addToast('Erreur Taille', 'La taille semble irréaliste (max 3m).');
            }

            if (!poids) addToast('Erreur Poids', 'Le champ poids est vide.');
            else {
                const poidsNum = parseFloat(poids);
                if (isNaN(poidsNum) || poidsNum <= 0) addToast('Erreur Poids', 'Le poids doit être un nombre positif.');
                else if (poidsNum > 500) addToast('Erreur Poids', 'Le poids semble irréaliste (max 500kg).');
            }

            if (!email) addToast('Erreur Email', 'Le champ email est vide.');
            else if (!isValidEmail(email)) addToast('Erreur Email', 'Veuillez entrer un email valide.');
            else if (email.length > 100) addToast('Erreur Email', 'L\\'email ne doit pas dépasser 100 caractères.');

            if (!telephone) addToast('Erreur Téléphone', 'Le champ téléphone est vide.');
            else if (!isValidPhone(telephone)) addToast('Erreur Téléphone', 'Veuillez entrer un numéro de téléphone valide.');
            else if (telephone.length > 20) addToast('Erreur Téléphone', 'Le numéro ne doit pas dépasser 20 caractères.');

            if (!statut) addToast('Erreur Statut', 'Le champ statut est vide.');
            else if (!['Actif','Blessé','Suspendu',''].includes(statut)) addToast('Erreur Statut', 'Veuillez sélectionner un statut valide.');

            if (profilePicture) {
                const validTypes = ['image/jpeg', 'image/png'];
                if (!validTypes.includes(profilePicture.type)) addToast('Erreur Photo', 'La photo doit être au format JPEG ou PNG.');
                if (profilePicture.size > 2 * 1024 * 1024) addToast('Erreur Photo', 'La photo ne doit pas dépasser 2Mo.');
            }

            // Validation for Evaluation Physique Fields
            if (!dateEvaluation) addToast('Erreur Date Évaluation', 'Le champ date d\\'évaluation est requis.');
            else {
                const evalDate = new Date(dateEvaluation);
                const today = new Date();
                if (evalDate > today) addToast('Erreur Date Évaluation', 'La date d\\'évaluation ne peut pas être dans le futur.');
            }

            if (!niveauEndurance) addToast('Erreur Endurance', 'Le champ niveau d\\'endurance est requis.');
            else {
                const enduranceNum = parseFloat(niveauEndurance);
                if (isNaN(enduranceNum) || enduranceNum < 0 || enduranceNum > 10) addToast('Erreur Endurance', 'Le niveau d\\'endurance doit être entre 0 et 10.');
            }

            if (!forcePhysique) addToast('Erreur Force', 'Le champ force physique est requis.');
            else {
                const forceNum = parseFloat(forcePhysique);
                if (isNaN(forceNum) || forceNum < 0 || forceNum > 10) addToast('Erreur Force', 'La force physique doit être entre 0 et 10.');
            }

            if (!vitesse) addToast('Erreur Vitesse', 'Le champ vitesse est requis.');
            else {
                const vitesseNum = parseFloat(vitesse);
                if (isNaN(vitesseNum) || vitesseNum < 0 || vitesseNum > 10) addToast('Erreur Vitesse', 'La vitesse doit être entre 0 et 10.');
            }

            if (!etatBlessure) addToast('Erreur État Blessure', 'Le champ état de blessure est requis.');
            else if (etatBlessure.length > 255) addToast('Erreur État Blessure', 'L\\'état de blessure ne doit pas dépasser 255 caractères.');

            // Validation for Performance Joueur Fields
            if (!saison) addToast('Erreur Saison', 'Le champ saison est requis.');
            else if (saison.length > 9) addToast('Erreur Saison', 'La saison ne doit pas dépasser 9 caractères (ex: 2023-2024).');
            else if (!/^\\d{4}-\\d{4}\$/.test(saison)) addToast('Erreur Saison', 'La saison doit être au format AAAA-AAAA (ex: 2023-2024).');

            if (!nombreMatches) addToast('Erreur Matches', 'Le champ nombre de matches est requis.');
            else if (isNaN(parseInt(nombreMatches)) || parseInt(nombreMatches) < 0) addToast('Erreur Matches', 'Le nombre de matches doit être un entier positif ou zéro.');

            if (!minutesJouees) addToast('Erreur Minutes', 'Le champ minutes jouées est requis.');
            else if (isNaN(parseInt(minutesJouees)) || parseInt(minutesJouees) < 0) addToast('Erreur Minutes', 'Les minutes jouées doivent être un entier positif ou zéro.');

            if (!butsMarques) addToast('Erreur Buts', 'Le champ buts marqués est requis.');
            else if (isNaN(parseInt(butsMarques)) || parseInt(butsMarques) < 0) addToast('Erreur Buts', 'Les buts marqués doivent être un entier positif ou zéro.');

            if (!passesDecisives) addToast('Erreur Passes', 'Le champ passes décisives est requis.');
            else if (isNaN(parseInt(passesDecisives)) || parseInt(passesDecisives) < 0) addToast('Erreur Passes', 'Les passes décisives doivent être un entier positif ou zéro.');

            if (!cartonsJaunes) addToast('Erreur Jaunes', 'Le champ cartons jaunes est requis.');
            else if (isNaN(parseInt(cartonsJaunes)) || parseInt(cartonsJaunes) < 0) addToast('Erreur Jaunes', 'Les cartons jaunes doivent être un entier positif ou zéro.');

            if (!cartonsRouges) addToast('Erreur Rouges', 'Le champ cartons rouges est requis.');
            else if (isNaN(parseInt(cartonsRouges)) || parseInt(cartonsRouges) < 0) addToast('Erreur Rouges', 'Les cartons rouges doivent être un entier positif ou zéro.');

            // Submit if no errors
            if (toastContainer.children.length === 0) {
                this.submit();
            } else {
                const toastElements = toastContainer.querySelectorAll('.toast');
                toastElements.forEach(toast => new bootstrap.Toast(toast, { autohide: true, delay: 5000 }).show());
            }
        });

        function addToast(title, message) {
            const toastContainer = document.getElementById('toast-container');
            const toastId = 'toast-' + Date.now();
            const toastHTML = `
                <div id=\"\${toastId}\" class=\"bs-toast toast fade bg-danger\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
                    <div class=\"toast-header\">
                        <i class=\"bx bx-bell me-2\"></i>
                        <div class=\"me-auto fw-semibold\">\${title}</div>
                        <small>Maintenant</small>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"toast-body\">\${message}</div>
                </div>
            `;
            toastContainer.innerHTML += toastHTML;
        }

        function isValidEmail(email) {
            const re = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
            return re.test(email);
        }

        function isValidPhone(phone) {
            const re = /^\\+?[\\d\\s-]{9,}\$/;
            return re.test(phone);
        }

        // Initialize toasts on page load
        document.addEventListener('DOMContentLoaded', function() {
            const toastElements = document.querySelectorAll('.toast');
            toastElements.forEach(toast => new bootstrap.Toast(toast, { autohide: true, delay: 5000 }).show());
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
        return "joueur/new.html.twig";
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
        return array (  593 => 243,  589 => 242,  581 => 237,  576 => 235,  570 => 232,  563 => 228,  558 => 226,  552 => 223,  545 => 219,  540 => 217,  534 => 214,  527 => 210,  522 => 208,  516 => 205,  509 => 201,  504 => 199,  498 => 196,  491 => 192,  486 => 190,  480 => 187,  473 => 183,  468 => 181,  462 => 178,  453 => 172,  448 => 170,  442 => 167,  435 => 163,  430 => 161,  424 => 158,  417 => 154,  412 => 152,  406 => 149,  399 => 145,  394 => 143,  388 => 140,  381 => 136,  376 => 134,  370 => 131,  361 => 125,  356 => 123,  352 => 122,  345 => 118,  340 => 116,  334 => 113,  327 => 109,  322 => 107,  316 => 104,  309 => 100,  304 => 98,  298 => 95,  291 => 91,  286 => 89,  280 => 86,  273 => 82,  268 => 80,  262 => 77,  255 => 73,  250 => 71,  244 => 68,  237 => 64,  232 => 62,  226 => 59,  219 => 55,  214 => 53,  208 => 50,  201 => 46,  196 => 44,  190 => 41,  184 => 38,  180 => 36,  174 => 35,  157 => 32,  150 => 28,  141 => 25,  123 => 24,  119 => 23,  102 => 8,  89 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Joueurs /</span> Nouveau Joueur
            </h4>

            <div class=\"col-xl\">
                <div class=\"card mb-4\">
                    <div class=\"card-header d-flex justify-content-between align-items-center\">
                        <h5 class=\"mb-0\">Ajouter un Nouveau Joueur</h5>
                        <small class=\"text-muted float-end\">Remplir les détails</small>
                    </div>
                    <div class=\"card-body\">
                        <!-- Toast container for flash messages -->
                        <div class=\"position-fixed top-0 end-0 p-3\" style=\"z-index: 1050;\" id=\"toast-container\">
                            {% for label, messages in app.flashes %}
                                {% for message in messages %}
                                    <div id=\"toast-{{ loop.index0 }}\" class=\"bs-toast toast fade bg-{{ label == 'success' ? 'success' : 'danger' }}\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
                                        <div class=\"toast-header\">
                                            <i class=\"bx bx-bell me-2\"></i>
                                            <div class=\"me-auto fw-semibold\">{{ label|capitalize }}</div>
                                            <small>Maintenant</small>
                                            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                                        </div>
                                        <div class=\"toast-body\">{{ message }}</div>
                                    </div>
                                {% endfor %}
                            {% endfor %}
                        </div>

                        {{ form_start(form, {'attr': {'enctype': 'multipart/form-data', 'id': 'playerForm', 'novalidate': 'novalidate'}}) }}
                            <!-- Joueur Fields -->
                            <div class=\"mb-3\">
                                {{ form_label(form.nom, 'Nom', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                    {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder': 'ex: Dupont', 'maxlength': '50'}}) }}
                                </div>
                                {{ form_errors(form.nom, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.prenom, 'Prénom', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-user\"></i></span>
                                    {{ form_widget(form.prenom, {'attr': {'class': 'form-control', 'placeholder': 'ex: Jean', 'maxlength': '50'}}) }}
                                </div>
                                {{ form_errors(form.prenom, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.dateNaissance, 'Date de Naissance', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                    {{ form_widget(form.dateNaissance, {'attr': {'class': 'form-control'}}) }}
                                </div>
                                {{ form_errors(form.dateNaissance, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.poste, 'Poste', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-target-lock\"></i></span>
                                    {{ form_widget(form.poste, {'attr': {'class': 'form-control'}}) }}
                                </div>
                                {{ form_errors(form.poste, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.taille, 'Taille (m)', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-ruler\"></i></span>
                                    {{ form_widget(form.taille, {'attr': {'class': 'form-control', 'placeholder': 'ex: 1.85', 'step': '0.01', 'min': '0', 'max': '3'}}) }}
                                </div>
                                {{ form_errors(form.taille, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.poids, 'Poids (kg)', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-scale\"></i></span>
                                    {{ form_widget(form.poids, {'attr': {'class': 'form-control', 'placeholder': 'ex: 75', 'step': '0.1', 'min': '0', 'max': '500'}}) }}
                                </div>
                                {{ form_errors(form.poids, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.email, 'Email', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                                    {{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder': 'ex: email@exemple.com', 'maxlength': '100'}}) }}
                                </div>
                                {{ form_errors(form.email, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.telephone, 'Téléphone', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-phone\"></i></span>
                                    {{ form_widget(form.telephone, {'attr': {'class': 'form-control phone-mask', 'placeholder': 'ex: +33 6 12 34 56 78', 'maxlength': '20'}}) }}
                                </div>
                                {{ form_errors(form.telephone, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.statut, 'Statut', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-id-card\"></i></span>
                                    {{ form_widget(form.statut, {'attr': {'class': 'form-control'}}) }}
                                </div>
                                {{ form_errors(form.statut, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.profilePicture, 'Photo de Profil', {'label_attr': {'class': 'form-label'}}) }}
                                {{ form_widget(form.profilePicture, {'attr': {'class': 'form-control', 'accept': 'image/jpeg,image/png'}}) }}
                                <small class=\"form-text text-muted\">Formats acceptés : JPEG, PNG (max 2Mo)</small>
                                {{ form_errors(form.profilePicture, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <!-- Evaluation Physique Fields -->
                            <h5 class=\"mt-4\">Évaluation Physique</h5>
                            <div class=\"mb-3\">
                                {{ form_label(form.evaluationPhysique.dateEvaluation, 'Date d\\'Évaluation', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                    {{ form_widget(form.evaluationPhysique.dateEvaluation, {'attr': {'class': 'form-control'}}) }}
                                </div>
                                {{ form_errors(form.evaluationPhysique.dateEvaluation, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.evaluationPhysique.niveauEndurance, 'Niveau d\\'Endurance (0-10)', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-heart\"></i></span>
                                    {{ form_widget(form.evaluationPhysique.niveauEndurance, {'attr': {'class': 'form-control', 'placeholder': 'ex: 8.5', 'step': '0.1', 'min': '0', 'max': '10'}}) }}
                                </div>
                                {{ form_errors(form.evaluationPhysique.niveauEndurance, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.evaluationPhysique.forcePhysique, 'Force Physique (0-10)', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-dumbbell\"></i></span>
                                    {{ form_widget(form.evaluationPhysique.forcePhysique, {'attr': {'class': 'form-control', 'placeholder': 'ex: 7.0', 'step': '0.1', 'min': '0', 'max': '10'}}) }}
                                </div>
                                {{ form_errors(form.evaluationPhysique.forcePhysique, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.evaluationPhysique.vitesse, 'Vitesse (0-10)', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-run\"></i></span>
                                    {{ form_widget(form.evaluationPhysique.vitesse, {'attr': {'class': 'form-control', 'placeholder': 'ex: 9.0', 'step': '0.1', 'min': '0', 'max': '10'}}) }}
                                </div>
                                {{ form_errors(form.evaluationPhysique.vitesse, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.evaluationPhysique.etatBlessure, 'État de Blessure', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-band-aid\"></i></span>
                                    {{ form_widget(form.evaluationPhysique.etatBlessure, {'attr': {'class': 'form-control', 'placeholder': 'ex: Aucun', 'maxlength': '255'}}) }}
                                </div>
                                {{ form_errors(form.evaluationPhysique.etatBlessure, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <!-- Performance Joueur Fields -->
                            <h5 class=\"mt-4\">Performance du Joueur</h5>
                            <div class=\"mb-3\">
                                {{ form_label(form.performanceJoueur.saison, 'Saison', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-calendar\"></i></span>
                                    {{ form_widget(form.performanceJoueur.saison, {'attr': {'class': 'form-control', 'placeholder': 'ex: 2023-2024', 'maxlength': '9'}}) }}
                                </div>
                                {{ form_errors(form.performanceJoueur.saison, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.performanceJoueur.nombreMatches, 'Nombre de Matches', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-football\"></i></span>
                                    {{ form_widget(form.performanceJoueur.nombreMatches, {'attr': {'class': 'form-control', 'placeholder': 'ex: 10', 'min': '0'}}) }}
                                </div>
                                {{ form_errors(form.performanceJoueur.nombreMatches, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.performanceJoueur.minutesJouees, 'Minutes Jouées', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-time\"></i></span>
                                    {{ form_widget(form.performanceJoueur.minutesJouees, {'attr': {'class': 'form-control', 'placeholder': 'ex: 900', 'min': '0'}}) }}
                                </div>
                                {{ form_errors(form.performanceJoueur.minutesJouees, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.performanceJoueur.butsMarques, 'Buts Marqués', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-target-lock\"></i></span>
                                    {{ form_widget(form.performanceJoueur.butsMarques, {'attr': {'class': 'form-control', 'placeholder': 'ex: 5', 'min': '0'}}) }}
                                </div>
                                {{ form_errors(form.performanceJoueur.butsMarques, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.performanceJoueur.passesDecisives, 'Passes Décisives', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-target-lock\"></i></span>
                                    {{ form_widget(form.performanceJoueur.passesDecisives, {'attr': {'class': 'form-control', 'placeholder': 'ex: 3', 'min': '0'}}) }}
                                </div>
                                {{ form_errors(form.performanceJoueur.passesDecisives, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.performanceJoueur.cartonsJaunes, 'Cartons Jaunes', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-card\"></i></span>
                                    {{ form_widget(form.performanceJoueur.cartonsJaunes, {'attr': {'class': 'form-control', 'placeholder': 'ex: 2', 'min': '0'}}) }}
                                </div>
                                {{ form_errors(form.performanceJoueur.cartonsJaunes, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <div class=\"mb-3\">
                                {{ form_label(form.performanceJoueur.cartonsRouges, 'Cartons Rouges', {'label_attr': {'class': 'form-label'}}) }} <span class=\"text-danger\">*</span>
                                <div class=\"input-group input-group-merge\">
                                    <span class=\"input-group-text\"><i class=\"bx bx-card\"></i></span>
                                    {{ form_widget(form.performanceJoueur.cartonsRouges, {'attr': {'class': 'form-control', 'placeholder': 'ex: 0', 'min': '0'}}) }}
                                </div>
                                {{ form_errors(form.performanceJoueur.cartonsRouges, {'attr': {'class': 'text-danger'}}) }}
                            </div>

                            <!-- Form Buttons -->
                            <button type=\"submit\" class=\"btn btn-primary\">Créer</button>
                            <a href=\"{{ path('joueur_main') }}\" class=\"btn btn-secondary\">Annuler</a>
                        {{ form_end(form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Client-Side Validation Script -->
    <script>
        document.getElementById('playerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const toastContainer = document.getElementById('toast-container');
            toastContainer.innerHTML = ''; // Clear previous toasts

            // Joueur Fields
            const nom = document.getElementById('joueur_nom')?.value.trim() || '';
            const prenom = document.getElementById('joueur_prenom')?.value.trim() || '';
            const dateNaissance = document.getElementById('joueur_dateNaissance')?.value || '';
            const poste = document.getElementById('joueur_poste')?.value || '';
            const taille = document.getElementById('joueur_taille')?.value.trim() || '';
            const poids = document.getElementById('joueur_poids')?.value.trim() || '';
            const email = document.getElementById('joueur_email')?.value.trim() || '';
            const telephone = document.getElementById('joueur_telephone')?.value.trim() || '';
            const statut = document.getElementById('joueur_statut')?.value || '';
            const profilePicture = document.getElementById('joueur_profilePicture')?.files[0];

            // Evaluation Physique Fields
            const dateEvaluation = document.getElementById('joueur_evaluationPhysique_dateEvaluation')?.value || '';
            const niveauEndurance = document.getElementById('joueur_evaluationPhysique_niveauEndurance')?.value.trim() || '';
            const forcePhysique = document.getElementById('joueur_evaluationPhysique_forcePhysique')?.value.trim() || '';
            const vitesse = document.getElementById('joueur_evaluationPhysique_vitesse')?.value.trim() || '';
            const etatBlessure = document.getElementById('joueur_evaluationPhysique_etatBlessure')?.value.trim() || '';

            // Performance Joueur Fields
            const saison = document.getElementById('joueur_performanceJoueur_saison')?.value.trim() || '';
            const nombreMatches = document.getElementById('joueur_performanceJoueur_nombreMatches')?.value.trim() || '';
            const minutesJouees = document.getElementById('joueur_performanceJoueur_minutesJouees')?.value.trim() || '';
            const butsMarques = document.getElementById('joueur_performanceJoueur_butsMarques')?.value.trim() || '';
            const passesDecisives = document.getElementById('joueur_performanceJoueur_passesDecisives')?.value.trim() || '';
            const cartonsJaunes = document.getElementById('joueur_performanceJoueur_cartonsJaunes')?.value.trim() || '';
            const cartonsRouges = document.getElementById('joueur_performanceJoueur_cartonsRouges')?.value.trim() || '';

            // Validation for Joueur Fields
            if (!nom) addToast('Erreur Nom', 'Le champ nom est vide.');
            else if (nom.length > 50) addToast('Erreur Nom', 'Le nom ne doit pas dépasser 50 caractères.');

            if (!prenom) addToast('Erreur Prénom', 'Le champ prénom est vide.');
            else if (prenom.length > 50) addToast('Erreur Prénom', 'Le prénom ne doit pas dépasser 50 caractères.');

            if (!dateNaissance) addToast('Erreur Date', 'Le champ date de naissance est vide.');
            else {
                const birthDate = new Date(dateNaissance);
                const today = new Date();
                if (birthDate > today) addToast('Erreur Date', 'La date de naissance ne peut pas être dans le futur.');
            }

            if (!poste) addToast('Erreur Poste', 'Le champ poste est vide.');
            else if (!['GK','RB','LB','RWB','LWB','SW','DM','CM','AM','RM','LM','RW','LW','CF','ST','SS'].includes(poste)) addToast('Erreur Poste', 'Veuillez sélectionner un poste valide.');

            if (!taille) addToast('Erreur Taille', 'Le champ taille est vide.');
            else {
                const tailleNum = parseFloat(taille);
                if (isNaN(tailleNum) || tailleNum <= 0) addToast('Erreur Taille', 'La taille doit être un nombre positif.');
                else if (tailleNum > 3) addToast('Erreur Taille', 'La taille semble irréaliste (max 3m).');
            }

            if (!poids) addToast('Erreur Poids', 'Le champ poids est vide.');
            else {
                const poidsNum = parseFloat(poids);
                if (isNaN(poidsNum) || poidsNum <= 0) addToast('Erreur Poids', 'Le poids doit être un nombre positif.');
                else if (poidsNum > 500) addToast('Erreur Poids', 'Le poids semble irréaliste (max 500kg).');
            }

            if (!email) addToast('Erreur Email', 'Le champ email est vide.');
            else if (!isValidEmail(email)) addToast('Erreur Email', 'Veuillez entrer un email valide.');
            else if (email.length > 100) addToast('Erreur Email', 'L\\'email ne doit pas dépasser 100 caractères.');

            if (!telephone) addToast('Erreur Téléphone', 'Le champ téléphone est vide.');
            else if (!isValidPhone(telephone)) addToast('Erreur Téléphone', 'Veuillez entrer un numéro de téléphone valide.');
            else if (telephone.length > 20) addToast('Erreur Téléphone', 'Le numéro ne doit pas dépasser 20 caractères.');

            if (!statut) addToast('Erreur Statut', 'Le champ statut est vide.');
            else if (!['Actif','Blessé','Suspendu',''].includes(statut)) addToast('Erreur Statut', 'Veuillez sélectionner un statut valide.');

            if (profilePicture) {
                const validTypes = ['image/jpeg', 'image/png'];
                if (!validTypes.includes(profilePicture.type)) addToast('Erreur Photo', 'La photo doit être au format JPEG ou PNG.');
                if (profilePicture.size > 2 * 1024 * 1024) addToast('Erreur Photo', 'La photo ne doit pas dépasser 2Mo.');
            }

            // Validation for Evaluation Physique Fields
            if (!dateEvaluation) addToast('Erreur Date Évaluation', 'Le champ date d\\'évaluation est requis.');
            else {
                const evalDate = new Date(dateEvaluation);
                const today = new Date();
                if (evalDate > today) addToast('Erreur Date Évaluation', 'La date d\\'évaluation ne peut pas être dans le futur.');
            }

            if (!niveauEndurance) addToast('Erreur Endurance', 'Le champ niveau d\\'endurance est requis.');
            else {
                const enduranceNum = parseFloat(niveauEndurance);
                if (isNaN(enduranceNum) || enduranceNum < 0 || enduranceNum > 10) addToast('Erreur Endurance', 'Le niveau d\\'endurance doit être entre 0 et 10.');
            }

            if (!forcePhysique) addToast('Erreur Force', 'Le champ force physique est requis.');
            else {
                const forceNum = parseFloat(forcePhysique);
                if (isNaN(forceNum) || forceNum < 0 || forceNum > 10) addToast('Erreur Force', 'La force physique doit être entre 0 et 10.');
            }

            if (!vitesse) addToast('Erreur Vitesse', 'Le champ vitesse est requis.');
            else {
                const vitesseNum = parseFloat(vitesse);
                if (isNaN(vitesseNum) || vitesseNum < 0 || vitesseNum > 10) addToast('Erreur Vitesse', 'La vitesse doit être entre 0 et 10.');
            }

            if (!etatBlessure) addToast('Erreur État Blessure', 'Le champ état de blessure est requis.');
            else if (etatBlessure.length > 255) addToast('Erreur État Blessure', 'L\\'état de blessure ne doit pas dépasser 255 caractères.');

            // Validation for Performance Joueur Fields
            if (!saison) addToast('Erreur Saison', 'Le champ saison est requis.');
            else if (saison.length > 9) addToast('Erreur Saison', 'La saison ne doit pas dépasser 9 caractères (ex: 2023-2024).');
            else if (!/^\\d{4}-\\d{4}\$/.test(saison)) addToast('Erreur Saison', 'La saison doit être au format AAAA-AAAA (ex: 2023-2024).');

            if (!nombreMatches) addToast('Erreur Matches', 'Le champ nombre de matches est requis.');
            else if (isNaN(parseInt(nombreMatches)) || parseInt(nombreMatches) < 0) addToast('Erreur Matches', 'Le nombre de matches doit être un entier positif ou zéro.');

            if (!minutesJouees) addToast('Erreur Minutes', 'Le champ minutes jouées est requis.');
            else if (isNaN(parseInt(minutesJouees)) || parseInt(minutesJouees) < 0) addToast('Erreur Minutes', 'Les minutes jouées doivent être un entier positif ou zéro.');

            if (!butsMarques) addToast('Erreur Buts', 'Le champ buts marqués est requis.');
            else if (isNaN(parseInt(butsMarques)) || parseInt(butsMarques) < 0) addToast('Erreur Buts', 'Les buts marqués doivent être un entier positif ou zéro.');

            if (!passesDecisives) addToast('Erreur Passes', 'Le champ passes décisives est requis.');
            else if (isNaN(parseInt(passesDecisives)) || parseInt(passesDecisives) < 0) addToast('Erreur Passes', 'Les passes décisives doivent être un entier positif ou zéro.');

            if (!cartonsJaunes) addToast('Erreur Jaunes', 'Le champ cartons jaunes est requis.');
            else if (isNaN(parseInt(cartonsJaunes)) || parseInt(cartonsJaunes) < 0) addToast('Erreur Jaunes', 'Les cartons jaunes doivent être un entier positif ou zéro.');

            if (!cartonsRouges) addToast('Erreur Rouges', 'Le champ cartons rouges est requis.');
            else if (isNaN(parseInt(cartonsRouges)) || parseInt(cartonsRouges) < 0) addToast('Erreur Rouges', 'Les cartons rouges doivent être un entier positif ou zéro.');

            // Submit if no errors
            if (toastContainer.children.length === 0) {
                this.submit();
            } else {
                const toastElements = toastContainer.querySelectorAll('.toast');
                toastElements.forEach(toast => new bootstrap.Toast(toast, { autohide: true, delay: 5000 }).show());
            }
        });

        function addToast(title, message) {
            const toastContainer = document.getElementById('toast-container');
            const toastId = 'toast-' + Date.now();
            const toastHTML = `
                <div id=\"\${toastId}\" class=\"bs-toast toast fade bg-danger\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
                    <div class=\"toast-header\">
                        <i class=\"bx bx-bell me-2\"></i>
                        <div class=\"me-auto fw-semibold\">\${title}</div>
                        <small>Maintenant</small>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"toast-body\">\${message}</div>
                </div>
            `;
            toastContainer.innerHTML += toastHTML;
        }

        function isValidEmail(email) {
            const re = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+\$/;
            return re.test(email);
        }

        function isValidPhone(phone) {
            const re = /^\\+?[\\d\\s-]{9,}\$/;
            return re.test(phone);
        }

        // Initialize toasts on page load
        document.addEventListener('DOMContentLoaded', function() {
            const toastElements = document.querySelectorAll('.toast');
            toastElements.forEach(toast => new bootstrap.Toast(toast, { autohide: true, delay: 5000 }).show());
        });
    </script>
{% endblock %}", "joueur/new.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\joueur\\new.html.twig");
    }
}
