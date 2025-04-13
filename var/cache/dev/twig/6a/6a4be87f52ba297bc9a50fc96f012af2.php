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
class __TwigTemplate_5a74d86fe6c14a6b2fee7155c354fcfb extends Template
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "enctype" => "multipart/form-data"]]);
        yield "
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"mb-3\">
                                    ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "nom", [], "any", false, false, false, 33), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nom du Matériel *"]);
        yield "
                                    ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "nom", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom du matériel", "required" => "required"]]);
        yield "
                                    <div class=\"invalid-feedback\">
                                        ";
        // line 36
        yield (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "nom", [], "any", false, false, false, 36), 'errors')) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "nom", [], "any", false, false, false, 36), 'errors')) : ("Veuillez entrer un nom."));
        yield "
                                    </div>
                                </div>
                                
                                <div class=\"mb-3\">
                                    ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "type", [], "any", false, false, false, 41), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Type *"]);
        yield "
                                    ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "type", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-select", "required" => "required"]]);
        yield "
                                    <div class=\"invalid-feedback\">
                                        ";
        // line 44
        yield (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "type", [], "any", false, false, false, 44), 'errors')) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "type", [], "any", false, false, false, 44), 'errors')) : ("Veuillez sélectionner un type."));
        yield "
                                    </div>
                                </div>
                                
                                <div class=\"mb-3\">
                                    ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "quantite", [], "any", false, false, false, 49), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Quantité *"]);
        yield "
                                    ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "quantite", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Quantité en stock", "required" => "required", "min" => "0"]]);
        yield "
                                    <div class=\"invalid-feedback\">
                                        ";
        // line 52
        yield (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "quantite", [], "any", false, false, false, 52), 'errors')) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "quantite", [], "any", false, false, false, 52), 'errors')) : ("Veuillez entrer une quantité valide."));
        yield "
                                    </div>
                                </div>
                                
                                <div class=\"mb-3\">
                                    ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "etat", [], "any", false, false, false, 57), 'label', ["label_attr" => ["class" => "form-label"], "label" => "État *"]);
        yield "
                                    ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "etat", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-select", "required" => "required"]]);
        yield "
                                    <div class=\"invalid-feedback\">
                                        ";
        // line 60
        yield (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "etat", [], "any", false, false, false, 60), 'errors')) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "etat", [], "any", false, false, false, 60), 'errors')) : ("Veuillez sélectionner un état."));
        yield "
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"col-md-6\">
                                <div class=\"mb-3\">
                                    ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "prix", [], "any", false, false, false, 67), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Prix Unitaire (€) *"]);
        yield "
                                    <div class=\"input-group\">
                                        <span class=\"input-group-text\">€</span>
                                        ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "prix", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Prix unitaire", "required" => "required", "step" => "0.01", "min" => "0"]]);
        yield "
                                    </div>
                                    <div class=\"invalid-feedback\">
                                        ";
        // line 73
        yield (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "prix", [], "any", false, false, false, 73), 'errors')) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "prix", [], "any", false, false, false, 73), 'errors')) : ("Veuillez entrer un prix valide."));
        yield "
                                    </div>
                                </div>
                                
                                <div class=\"mb-3\">
                                    ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "barcode", [], "any", false, false, false, 78), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Code-barres"]);
        yield "
                                    ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "barcode", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Code-barres"]]);
        yield "
                                    <div class=\"invalid-feedback\">
                                        ";
        // line 81
        yield (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "barcode", [], "any", false, false, false, 81), 'errors')) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "barcode", [], "any", false, false, false, 81), 'errors')) : ("Veuillez entrer un code-barres valide."));
        yield "
                                    </div>
                                </div>
                                
                                <div class=\"mb-3\">
                                    ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "fournisseur", [], "any", false, false, false, 86), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Fournisseur"]);
        yield "
                                    ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "fournisseur", [], "any", false, false, false, 87), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                                    <div class=\"invalid-feedback\">
                                        ";
        // line 89
        yield (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "fournisseur", [], "any", false, false, false, 89), 'errors')) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "fournisseur", [], "any", false, false, false, 89), 'errors')) : ("Veuillez sélectionner un fournisseur."));
        yield "
                                    </div>
                                </div>
                                
                                <div class=\"mb-3\">
                                    ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "image", [], "any", false, false, false, 94), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Image"]);
        yield "
                                    ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "image", [], "any", false, false, false, 95), 'widget', ["attr" => ["class" => "form-control", "accept" => "image/jpeg,image/png,image/gif"]]);
        yield "
                                    <div class=\"invalid-feedback\">
                                        ";
        // line 97
        yield (($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "image", [], "any", false, false, false, 97), 'errors')) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "image", [], "any", false, false, false, 97), 'errors')) : ("Veuillez sélectionner une image valide."));
        yield "
                                    </div>
                                    <small class=\"text-muted\">Formats acceptés: JPG, PNG, GIF (Max 2MB). Laissez vide pour conserver l'image actuelle.</small>
                                    ";
        // line 100
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 100, $this->source); })()), "image", [], "any", false, false, false, 100)) {
            // line 101
            yield "                                        <div class=\"mt-2\">
                                            <p>Image actuelle :</p>
                                            <img src=\"";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/materiels/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 103, $this->source); })()), "image", [], "any", false, false, false, 103))), "html", null, true);
            yield "\" alt=\"Image actuelle\" style=\"max-width: 200px;\">
                                        </div>
                                    ";
        }
        // line 106
        yield "                                </div>
                            </div>
                        </div>
                        
                        <div class=\"mt-4\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"bx bx-save me-1\"></i> Mettre à jour
                            </button>
                            <a href=\"";
        // line 114
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_index");
        yield "\" class=\"btn btn-outline-secondary\">
                                <i class=\"bx bx-arrow-back me-1\"></i> Annuler
                            </a>
                        </div>
                    ";
        // line 118
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap Validation Script -->
<script>
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            var forms = document.getElementsByClassName('needs-validation');
            Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 145
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

        // line 146
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        // Prévisualisation de l'image avant upload
        document.addEventListener('DOMContentLoaded', function() {
            const imageFileInput = document.querySelector('#";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "image", [], "any", false, false, false, 150), "vars", [], "any", false, false, false, 150), "id", [], "any", false, false, false, 150), "html", null, true);
        yield "');
            const imagePreview = document.createElement('div');
            imagePreview.className = 'mt-2';
            imagePreview.innerHTML = '<img id=\"imagePreview\" src=\"#\" alt=\"Prévisualisation\" style=\"max-width: 200px; display: none;\">';
            imageFileInput.parentNode.appendChild(imagePreview);
            
            imageFileInput.addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const preview = document.getElementById('imagePreview');
                        preview.src = e.target.result;
                        preview.style.display = 'block';
                    };
                    reader.readAsDataURL(file);
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
        return array (  387 => 150,  379 => 146,  366 => 145,  329 => 118,  322 => 114,  312 => 106,  306 => 103,  302 => 101,  300 => 100,  294 => 97,  289 => 95,  285 => 94,  277 => 89,  272 => 87,  268 => 86,  260 => 81,  255 => 79,  251 => 78,  243 => 73,  237 => 70,  231 => 67,  221 => 60,  216 => 58,  212 => 57,  204 => 52,  199 => 50,  195 => 49,  187 => 44,  182 => 42,  178 => 41,  170 => 36,  165 => 34,  161 => 33,  154 => 29,  147 => 25,  141 => 21,  135 => 20,  125 => 16,  120 => 15,  115 => 14,  111 => 13,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
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
                    {{ form_start(form, {'attr': {'class': 'needs-validation', 'enctype': 'multipart/form-data'}}) }}
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"mb-3\">
                                    {{ form_label(form.nom, 'Nom du Matériel *', {'label_attr': {'class': 'form-label'}}) }}
                                    {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder': 'Nom du matériel', 'required': 'required'}}) }}
                                    <div class=\"invalid-feedback\">
                                        {{ form_errors(form.nom) ?: 'Veuillez entrer un nom.' }}
                                    </div>
                                </div>
                                
                                <div class=\"mb-3\">
                                    {{ form_label(form.type, 'Type *', {'label_attr': {'class': 'form-label'}}) }}
                                    {{ form_widget(form.type, {'attr': {'class': 'form-select', 'required': 'required'}}) }}
                                    <div class=\"invalid-feedback\">
                                        {{ form_errors(form.type) ?: 'Veuillez sélectionner un type.' }}
                                    </div>
                                </div>
                                
                                <div class=\"mb-3\">
                                    {{ form_label(form.quantite, 'Quantité *', {'label_attr': {'class': 'form-label'}}) }}
                                    {{ form_widget(form.quantite, {'attr': {'class': 'form-control', 'placeholder': 'Quantité en stock', 'required': 'required', 'min': '0'}}) }}
                                    <div class=\"invalid-feedback\">
                                        {{ form_errors(form.quantite) ?: 'Veuillez entrer une quantité valide.' }}
                                    </div>
                                </div>
                                
                                <div class=\"mb-3\">
                                    {{ form_label(form.etat, 'État *', {'label_attr': {'class': 'form-label'}}) }}
                                    {{ form_widget(form.etat, {'attr': {'class': 'form-select', 'required': 'required'}}) }}
                                    <div class=\"invalid-feedback\">
                                        {{ form_errors(form.etat) ?: 'Veuillez sélectionner un état.' }}
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"col-md-6\">
                                <div class=\"mb-3\">
                                    {{ form_label(form.prix, 'Prix Unitaire (€) *', {'label_attr': {'class': 'form-label'}}) }}
                                    <div class=\"input-group\">
                                        <span class=\"input-group-text\">€</span>
                                        {{ form_widget(form.prix, {'attr': {'class': 'form-control', 'placeholder': 'Prix unitaire', 'required': 'required', 'step': '0.01', 'min': '0'}}) }}
                                    </div>
                                    <div class=\"invalid-feedback\">
                                        {{ form_errors(form.prix) ?: 'Veuillez entrer un prix valide.' }}
                                    </div>
                                </div>
                                
                                <div class=\"mb-3\">
                                    {{ form_label(form.barcode, 'Code-barres', {'label_attr': {'class': 'form-label'}}) }}
                                    {{ form_widget(form.barcode, {'attr': {'class': 'form-control', 'placeholder': 'Code-barres'}}) }}
                                    <div class=\"invalid-feedback\">
                                        {{ form_errors(form.barcode) ?: 'Veuillez entrer un code-barres valide.' }}
                                    </div>
                                </div>
                                
                                <div class=\"mb-3\">
                                    {{ form_label(form.fournisseur, 'Fournisseur', {'label_attr': {'class': 'form-label'}}) }}
                                    {{ form_widget(form.fournisseur, {'attr': {'class': 'form-select'}}) }}
                                    <div class=\"invalid-feedback\">
                                        {{ form_errors(form.fournisseur) ?: 'Veuillez sélectionner un fournisseur.' }}
                                    </div>
                                </div>
                                
                                <div class=\"mb-3\">
                                    {{ form_label(form.image, 'Image', {'label_attr': {'class': 'form-label'}}) }}
                                    {{ form_widget(form.image, {'attr': {'class': 'form-control', 'accept': 'image/jpeg,image/png,image/gif'}}) }}
                                    <div class=\"invalid-feedback\">
                                        {{ form_errors(form.image) ?: 'Veuillez sélectionner une image valide.' }}
                                    </div>
                                    <small class=\"text-muted\">Formats acceptés: JPG, PNG, GIF (Max 2MB). Laissez vide pour conserver l'image actuelle.</small>
                                    {% if materiel.image %}
                                        <div class=\"mt-2\">
                                            <p>Image actuelle :</p>
                                            <img src=\"{{ asset('Uploads/materiels/' ~ materiel.image) }}\" alt=\"Image actuelle\" style=\"max-width: 200px;\">
                                        </div>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"mt-4\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"bx bx-save me-1\"></i> Mettre à jour
                            </button>
                            <a href=\"{{ path('app_materiel_index') }}\" class=\"btn btn-outline-secondary\">
                                <i class=\"bx bx-arrow-back me-1\"></i> Annuler
                            </a>
                        </div>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap Validation Script -->
<script>
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            var forms = document.getElementsByClassName('needs-validation');
            Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        // Prévisualisation de l'image avant upload
        document.addEventListener('DOMContentLoaded', function() {
            const imageFileInput = document.querySelector('#{{ form.image.vars.id }}');
            const imagePreview = document.createElement('div');
            imagePreview.className = 'mt-2';
            imagePreview.innerHTML = '<img id=\"imagePreview\" src=\"#\" alt=\"Prévisualisation\" style=\"max-width: 200px; display: none;\">';
            imageFileInput.parentNode.appendChild(imagePreview);
            
            imageFileInput.addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const preview = document.getElementById('imagePreview');
                        preview.src = e.target.result;
                        preview.style.display = 'block';
                    };
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
{% endblock %}", "materiel/edit.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\materiel\\edit.html.twig");
    }
}
