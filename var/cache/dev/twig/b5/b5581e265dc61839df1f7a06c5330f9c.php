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

/* materiel/edit.html.twig */
class __TwigTemplate_5898876adebbf97fe992e18e500f7d89 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiel/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiel/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "materiel/edit.html.twig", 1);
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

        yield "Modifier Matériel #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"content-wrapper\">
    <div class=\"container-xxl flex-grow-1 container-p-y\">
        <h4 class=\"fw-bold py-3 mb-4\">
            <span class=\"text-muted fw-light\">Matériel /</span> Modifier
        </h4>

        <!-- Flash Messages -->
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 14
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 15
                yield "                <div class=\"alert alert-";
                yield ((($context["label"] == "success")) ? ("success") : ("error"));
                yield " alert-dismissible fade show\" role=\"alert\">
                    ";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "
        <div class=\"col-xl\">
            <div class=\"card mb-4\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0\">Modifier Matériel #";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25), "html", null, true);
        yield "</h5>
                    <small class=\"text-muted float-end\">Les champs marqués * sont obligatoires</small>
                </div>
                <div class=\"card-body\">
                    ";
        // line 29
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"mb-3\">
                                    <label class=\"form-label\" for=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "nom", [], "any", false, false, false, 33), "vars", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33), "html", null, true);
        yield "\">Nom du Matériel *</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-box\"></i></span>
                                        ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "nom", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: Ballon de football"]]);
        yield "
                                    </div>
                                    <div class=\"form-text text-danger\">";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "nom", [], "any", false, false, false, 38), 'errors');
        yield "</div>
                                </div>

                                <div class=\"mb-3\">
                                    <label class=\"form-label\" for=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "type", [], "any", false, false, false, 42), "vars", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42), "html", null, true);
        yield "\">Type *</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-tag\"></i></span>
                                        ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "type", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-select", "id" => "materiel_type"]]);
        yield "
                                    </div>
                                    <div class=\"form-text text-danger\">";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "type", [], "any", false, false, false, 47), 'errors');
        yield "</div>
                                </div>

                                <div class=\"mb-3\">
                                    <label class=\"form-label\" for=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "quantite", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "id", [], "any", false, false, false, 51), "html", null, true);
        yield "\">Quantité en Stock *</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-cube\"></i></span>
                                        ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "quantite", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: 10", "required" => false]]);
        yield "
                                    </div>
                                    <div class=\"form-text text-danger\">";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "quantite", [], "any", false, false, false, 56), 'errors');
        yield "</div>
                                </div>

                                <div class=\"mb-3\">
                                    <label class=\"form-label\" for=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "etat", [], "any", false, false, false, 60), "vars", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60), "html", null, true);
        yield "\">État *</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-check-circle\"></i></span>
                                        ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "etat", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                                    </div>
                                    <div class=\"form-text text-danger\">";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "etat", [], "any", false, false, false, 65), 'errors');
        yield "</div>
                                </div>
                            </div>

                            <div class=\"col-md-6\">
                                <div class=\"mb-3\">
                                    <label class=\"form-label\" for=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "prix", [], "any", false, false, false, 71), "vars", [], "any", false, false, false, 71), "id", [], "any", false, false, false, 71), "html", null, true);
        yield "\">Prix Unitaire (€) *</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-euro\"></i></span>
                                        ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "prix", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: 29.99"]]);
        yield "
                                    </div>
                                    <div class=\"form-text text-danger\">";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "prix", [], "any", false, false, false, 76), 'errors');
        yield "</div>
                                </div>

                                <div class=\"mb-3\">
                                    <label class=\"form-label\" for=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "barcode", [], "any", false, false, false, 80), "vars", [], "any", false, false, false, 80), "id", [], "any", false, false, false, 80), "html", null, true);
        yield "\">Code-barres *</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-barcode\"></i></span>
                                        ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "barcode", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: 123456"]]);
        yield "
                                    </div>
                                    <div class=\"form-text text-danger\">";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "barcode", [], "any", false, false, false, 85), 'errors');
        yield "</div>
                                </div>

                                <div class=\"mb-3\">
                                    <label class=\"form-label\" for=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "fournisseur", [], "any", false, false, false, 89), "vars", [], "any", false, false, false, 89), "id", [], "any", false, false, false, 89), "html", null, true);
        yield "\">Fournisseur *</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-building\"></i></span>
                                        ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "fournisseur", [], "any", false, false, false, 92), 'widget', ["attr" => ["class" => "form-select", "id" => "materiel_fournisseur"]]);
        yield ",
<div class=\"form-text text-danger\">";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "fournisseur", [], "any", false, false, false, 93), 'errors');
        yield "</div>
                                    </div>
                                    <div class=\"form-text text-danger\">";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "fournisseur", [], "any", false, false, false, 95), 'errors');
        yield "</div>
                                </div>

                                <div class=\"mb-3\">
                                    <label class=\"form-label\" for=\"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "image", [], "any", false, false, false, 99), "vars", [], "any", false, false, false, 99), "id", [], "any", false, false, false, 99), "html", null, true);
        yield "\">Image du Matériel</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-image\"></i></span>
                                        ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "image", [], "any", false, false, false, 102), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    </div>
                                    <div class=\"form-text text-danger\">";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "image", [], "any", false, false, false, 104), 'errors');
        yield "</div>
                                    <small class=\"text-muted\">Formats acceptés: JPG, JPEG, PNG (Max 5MB). Laissez vide pour conserver l'image actuelle.</small>
                                    ";
        // line 106
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 106, $this->source); })()), "image", [], "any", false, false, false, 106)) {
            // line 107
            yield "                                        <div class=\"mt-2\">
                                            <p>Image actuelle :</p>
                                            <img src=\"";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/materiels/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 109, $this->source); })()), "image", [], "any", false, false, false, 109))), "html", null, true);
            yield "\" alt=\"Image actuelle\" style=\"max-width: 200px;\">
                                        </div>
                                    ";
        }
        // line 112
        yield "                                    <!-- Bouton d'analyse et conteneur pour les résultats -->
                                    <div class=\"mt-3\">
                                        <button type=\"button\" class=\"btn btn-outline-info\" id=\"analyzeImage\">
                                            <i class=\"bx bx-brain me-1\"></i> Analyser l'image avec IA
                                        </button>
                                        <div id=\"imageAnalysisResult\" class=\"mt-2\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"mt-4\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"bx bx-save me-1\"></i> Mettre à jour
                            </button>
                            <a href=\"";
        // line 127
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_index");
        yield "\" class=\"btn btn-secondary\">
                                <i class=\"bx bx-arrow-back me-1\"></i> Annuler
                            </a>
                        </div>
                    ";
        // line 131
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), 'form_end');
        yield "

                    ";
        // line 133
        yield Twig\Extension\CoreExtension::include($this->env, $context, "materiel/_delete_form.html.twig");
        yield "
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// --- AJAX update of fournisseur when type changes ---
document.addEventListener('DOMContentLoaded', function() {
    const typeSelect = document.getElementById('materiel_type');
    const fournisseurSelect = document.getElementById('materiel_fournisseur');
    if (typeSelect && fournisseurSelect) {
        typeSelect.addEventListener('change', function() {
            const selectedType = this.value;
            if (!selectedType) {
                fournisseurSelect.innerHTML = '<option value=\"\">Sélectionner un fournisseur</option>';
                return;
            }
            fetch('/materiel/fournisseurs-by-type/' + encodeURIComponent(selectedType))
                .then(response => response.json())
                .then(data => {
                    let options = '<option value=\"\">Sélectionner un fournisseur</option>';
                    data.forEach(f => {
                        options += `<option value=\"\${f.id}\">\${f.nom}</option>`;
                    });
                    fournisseurSelect.innerHTML = options;
                });
        });
    }
});
</script>

    <!-- Script JavaScript pour l'analyse d'image -->
<script>
    document.getElementById('analyzeImageAI').addEventListener('click', async () => {
        const formData = new FormData();
        const imageInput = document.querySelector('input[name=\"materiel[image]\"]');
        console.log('Input image trouvé:', imageInput);
        if (!imageInput || !imageInput.files[0]) {
            alert('Veuillez sélectionner une image.');
            return;
        }
        formData.append('image', imageInput.files[0]);
        console.log('Fichier image ajouté:', imageInput.files[0].name);

        const resultDiv = document.getElementById('imageAnalysisResult');
        resultDiv.innerHTML = '<div class=\"spinner-border text-primary\" role=\"status\"><span class=\"visually-hidden\">Chargement...</span></div>';

        try {
            console.log('Envoi de la requête à:', '";
        // line 183
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_analyze_image_AI");
        yield "');
            const response = await fetch('";
        // line 184
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_analyze_image_AI");
        yield "', {
                method: 'POST',
                body: formData,
            });
            console.log('Statut de la réponse:', response.status);
            if (!response.ok) {
                const errorData = await response.json();
                throw new Error(errorData.error || `Erreur HTTP: \${response.status} \${response.statusText}`);
            }
            const data = await response.json();
            if (data.error) {
                resultDiv.innerHTML = `<div class=\"alert alert-danger\">\${data.error}</div>`;
            } else {
                const labels = data.labels.map(l => `\${l.label} (\${(l.score * 100).toFixed(1)}%)`).join(', ');
                resultDiv.innerHTML = `
                    <div class=\"alert alert-info\">
                        <strong>Objets détectés :</strong> \${labels}<br>
                        <strong>Type suggéré :</strong> \${data.suggestedType || 'Non déterminé'}
                    </div>
                `;
                if (data.suggestedType) {
                    const typeSelect = document.querySelector('select[name=\"materiel[type]\"]');
                    typeSelect.value = data.suggestedType;
                    if (typeSelect.value && data.suggestedType !== typeSelect.value) {
                        resultDiv.innerHTML += `
                            <div class=\"alert alert-warning\">
                                Attention : Le type sélectionné (\${typeSelect.options[typeSelect.selectedIndex].text}) ne correspond pas au type suggéré (\${data.suggestedType}).
                            </div>
                        `;
                    }
                }
            }
        } catch (error) {
            console.error('Erreur:', error);
            resultDiv.innerHTML = `
                <div class=\"alert alert-danger\">Erreur lors de l'analyse de l'image: \${error.message}</div>
            `;
        }
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
        return "materiel/edit.html.twig";
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
        return array (  406 => 184,  402 => 183,  349 => 133,  344 => 131,  337 => 127,  320 => 112,  314 => 109,  310 => 107,  308 => 106,  303 => 104,  298 => 102,  292 => 99,  285 => 95,  280 => 93,  276 => 92,  270 => 89,  263 => 85,  258 => 83,  252 => 80,  245 => 76,  240 => 74,  234 => 71,  225 => 65,  220 => 63,  214 => 60,  207 => 56,  202 => 54,  196 => 51,  189 => 47,  184 => 45,  178 => 42,  171 => 38,  166 => 36,  160 => 33,  153 => 29,  146 => 25,  140 => 21,  134 => 20,  124 => 16,  119 => 15,  114 => 14,  110 => 13,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier Matériel #{{ materiel.id }}{% endblock %}

{% block content %}
<div class=\"content-wrapper\">
    <div class=\"container-xxl flex-grow-1 container-p-y\">
        <h4 class=\"fw-bold py-3 mb-4\">
            <span class=\"text-muted fw-light\">Matériel /</span> Modifier
        </h4>

        <!-- Flash Messages -->
        {% for label, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"alert alert-{{ label == 'success' ? 'success' : 'error' }} alert-dismissible fade show\" role=\"alert\">
                    {{ message }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            {% endfor %}
        {% endfor %}

        <div class=\"col-xl\">
            <div class=\"card mb-4\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0\">Modifier Matériel #{{ materiel.id }}</h5>
                    <small class=\"text-muted float-end\">Les champs marqués * sont obligatoires</small>
                </div>
                <div class=\"card-body\">
                    {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"mb-3\">
                                    <label class=\"form-label\" for=\"{{ form.nom.vars.id }}\">Nom du Matériel *</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-box\"></i></span>
                                        {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder': 'Ex: Ballon de football'}}) }}
                                    </div>
                                    <div class=\"form-text text-danger\">{{ form_errors(form.nom) }}</div>
                                </div>

                                <div class=\"mb-3\">
                                    <label class=\"form-label\" for=\"{{ form.type.vars.id }}\">Type *</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-tag\"></i></span>
                                        {{ form_widget(form.type, {'attr': {'class': 'form-select', 'id': 'materiel_type'}}) }}
                                    </div>
                                    <div class=\"form-text text-danger\">{{ form_errors(form.type) }}</div>
                                </div>

                                <div class=\"mb-3\">
                                    <label class=\"form-label\" for=\"{{ form.quantite.vars.id }}\">Quantité en Stock *</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-cube\"></i></span>
                                        {{ form_widget(form.quantite, {'attr': {'class': 'form-control', 'placeholder': 'Ex: 10', 'required': false}}) }}
                                    </div>
                                    <div class=\"form-text text-danger\">{{ form_errors(form.quantite) }}</div>
                                </div>

                                <div class=\"mb-3\">
                                    <label class=\"form-label\" for=\"{{ form.etat.vars.id }}\">État *</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-check-circle\"></i></span>
                                        {{ form_widget(form.etat, {'attr': {'class': 'form-select'}}) }}
                                    </div>
                                    <div class=\"form-text text-danger\">{{ form_errors(form.etat) }}</div>
                                </div>
                            </div>

                            <div class=\"col-md-6\">
                                <div class=\"mb-3\">
                                    <label class=\"form-label\" for=\"{{ form.prix.vars.id }}\">Prix Unitaire (€) *</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-euro\"></i></span>
                                        {{ form_widget(form.prix, {'attr': {'class': 'form-control', 'placeholder': 'Ex: 29.99'}}) }}
                                    </div>
                                    <div class=\"form-text text-danger\">{{ form_errors(form.prix) }}</div>
                                </div>

                                <div class=\"mb-3\">
                                    <label class=\"form-label\" for=\"{{ form.barcode.vars.id }}\">Code-barres *</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-barcode\"></i></span>
                                        {{ form_widget(form.barcode, {'attr': {'class': 'form-control', 'placeholder': 'Ex: 123456'}}) }}
                                    </div>
                                    <div class=\"form-text text-danger\">{{ form_errors(form.barcode) }}</div>
                                </div>

                                <div class=\"mb-3\">
                                    <label class=\"form-label\" for=\"{{ form.fournisseur.vars.id }}\">Fournisseur *</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-building\"></i></span>
                                        {{ form_widget(form.fournisseur, {'attr': {'class': 'form-select', 'id': 'materiel_fournisseur'}}) }},
<div class=\"form-text text-danger\">{{ form_errors(form.fournisseur) }}</div>
                                    </div>
                                    <div class=\"form-text text-danger\">{{ form_errors(form.fournisseur) }}</div>
                                </div>

                                <div class=\"mb-3\">
                                    <label class=\"form-label\" for=\"{{ form.image.vars.id }}\">Image du Matériel</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-image\"></i></span>
                                        {{ form_widget(form.image, {'attr': {'class': 'form-control'}}) }}
                                    </div>
                                    <div class=\"form-text text-danger\">{{ form_errors(form.image) }}</div>
                                    <small class=\"text-muted\">Formats acceptés: JPG, JPEG, PNG (Max 5MB). Laissez vide pour conserver l'image actuelle.</small>
                                    {% if materiel.image %}
                                        <div class=\"mt-2\">
                                            <p>Image actuelle :</p>
                                            <img src=\"{{ asset('Uploads/materiels/' ~ materiel.image) }}\" alt=\"Image actuelle\" style=\"max-width: 200px;\">
                                        </div>
                                    {% endif %}
                                    <!-- Bouton d'analyse et conteneur pour les résultats -->
                                    <div class=\"mt-3\">
                                        <button type=\"button\" class=\"btn btn-outline-info\" id=\"analyzeImage\">
                                            <i class=\"bx bx-brain me-1\"></i> Analyser l'image avec IA
                                        </button>
                                        <div id=\"imageAnalysisResult\" class=\"mt-2\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"mt-4\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"bx bx-save me-1\"></i> Mettre à jour
                            </button>
                            <a href=\"{{ path('app_materiel_index') }}\" class=\"btn btn-secondary\">
                                <i class=\"bx bx-arrow-back me-1\"></i> Annuler
                            </a>
                        </div>
                    {{ form_end(form) }}

                    {{ include('materiel/_delete_form.html.twig') }}
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// --- AJAX update of fournisseur when type changes ---
document.addEventListener('DOMContentLoaded', function() {
    const typeSelect = document.getElementById('materiel_type');
    const fournisseurSelect = document.getElementById('materiel_fournisseur');
    if (typeSelect && fournisseurSelect) {
        typeSelect.addEventListener('change', function() {
            const selectedType = this.value;
            if (!selectedType) {
                fournisseurSelect.innerHTML = '<option value=\"\">Sélectionner un fournisseur</option>';
                return;
            }
            fetch('/materiel/fournisseurs-by-type/' + encodeURIComponent(selectedType))
                .then(response => response.json())
                .then(data => {
                    let options = '<option value=\"\">Sélectionner un fournisseur</option>';
                    data.forEach(f => {
                        options += `<option value=\"\${f.id}\">\${f.nom}</option>`;
                    });
                    fournisseurSelect.innerHTML = options;
                });
        });
    }
});
</script>

    <!-- Script JavaScript pour l'analyse d'image -->
<script>
    document.getElementById('analyzeImageAI').addEventListener('click', async () => {
        const formData = new FormData();
        const imageInput = document.querySelector('input[name=\"materiel[image]\"]');
        console.log('Input image trouvé:', imageInput);
        if (!imageInput || !imageInput.files[0]) {
            alert('Veuillez sélectionner une image.');
            return;
        }
        formData.append('image', imageInput.files[0]);
        console.log('Fichier image ajouté:', imageInput.files[0].name);

        const resultDiv = document.getElementById('imageAnalysisResult');
        resultDiv.innerHTML = '<div class=\"spinner-border text-primary\" role=\"status\"><span class=\"visually-hidden\">Chargement...</span></div>';

        try {
            console.log('Envoi de la requête à:', '{{ path('app_materiel_analyze_image_AI') }}');
            const response = await fetch('{{ path('app_materiel_analyze_image_AI') }}', {
                method: 'POST',
                body: formData,
            });
            console.log('Statut de la réponse:', response.status);
            if (!response.ok) {
                const errorData = await response.json();
                throw new Error(errorData.error || `Erreur HTTP: \${response.status} \${response.statusText}`);
            }
            const data = await response.json();
            if (data.error) {
                resultDiv.innerHTML = `<div class=\"alert alert-danger\">\${data.error}</div>`;
            } else {
                const labels = data.labels.map(l => `\${l.label} (\${(l.score * 100).toFixed(1)}%)`).join(', ');
                resultDiv.innerHTML = `
                    <div class=\"alert alert-info\">
                        <strong>Objets détectés :</strong> \${labels}<br>
                        <strong>Type suggéré :</strong> \${data.suggestedType || 'Non déterminé'}
                    </div>
                `;
                if (data.suggestedType) {
                    const typeSelect = document.querySelector('select[name=\"materiel[type]\"]');
                    typeSelect.value = data.suggestedType;
                    if (typeSelect.value && data.suggestedType !== typeSelect.value) {
                        resultDiv.innerHTML += `
                            <div class=\"alert alert-warning\">
                                Attention : Le type sélectionné (\${typeSelect.options[typeSelect.selectedIndex].text}) ne correspond pas au type suggéré (\${data.suggestedType}).
                            </div>
                        `;
                    }
                }
            }
        } catch (error) {
            console.error('Erreur:', error);
            resultDiv.innerHTML = `
                <div class=\"alert alert-danger\">Erreur lors de l'analyse de l'image: \${error.message}</div>
            `;
        }
    });
</script>
{% endblock %}", "materiel/edit.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\materiel\\edit.html.twig");
    }
}
