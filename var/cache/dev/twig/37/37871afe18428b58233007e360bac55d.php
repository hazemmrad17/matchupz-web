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

/* materiel/new.html.twig */
class __TwigTemplate_ac5e9c83e830941a71b6844340daefd6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiel/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "materiel/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "materiel/new.html.twig", 1);
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
        yield from $this->loadTemplate("searchbar.html.twig", "materiel/new.html.twig", 4)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "vars", [], "any", false, false, false, 8), "value", [], "any", false, false, false, 8), "id", [], "any", false, false, false, 8)) {
            yield "Modifier Matériel";
        } else {
            yield "Nouveau Matériel";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
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

        // line 12
        yield "<div class=\"content-wrapper\">
    <div class=\"container-xxl flex-grow-1 container-p-y\">
        <h4 class=\"fw-bold py-3 mb-4\">
            <span class=\"text-muted fw-light\">Matériel /</span>
            ";
        // line 16
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "vars", [], "any", false, false, false, 16), "value", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16)) {
            yield "Modifier Équipement";
        } else {
            yield "Nouvel Équipement";
        }
        // line 17
        yield "        </h4>

        <div class=\"col-xl\">
            <div class=\"card mb-4\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0\">
                        ";
        // line 23
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "vars", [], "any", false, false, false, 23), "value", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23)) {
            // line 24
            yield "                            Modifier le Matériel
                        ";
        } else {
            // line 26
            yield "                            Ajouter un Nouveau Matériel
                        ";
        }
        // line 28
        yield "                    </h5>
                    <small class=\"text-muted float-end\">Remplir les détails</small>
                </div>
                <div class=\"card-body\">
                    <!-- Affichage des erreurs globales du formulaire -->
                    ";
        // line 33
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'errors')) {
            // line 34
            yield "                        <div class=\"alert alert-danger\">
                            ";
            // line 35
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'errors');
            yield "
                        </div>
                    ";
        }
        // line 38
        yield "
                    ";
        // line 39
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"materiel_nom\">Nom du Matériel</label>
                            <div class=\"input-group input-group-merge\">
                                <span class=\"input-group-text\"><i class=\"bx bx-box\"></i></span>
                                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "nom", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: Ballon de football"]]);
        yield "
                            </div>
                            ";
        // line 46
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "nom", [], "any", false, false, false, 46), 'errors')) {
            // line 47
            yield "                                <div class=\"text-danger\">
                                    ";
            // line 48
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "nom", [], "any", false, false, false, 48), 'errors');
            yield "
                                </div>
                            ";
        }
        // line 51
        yield "                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"materiel_type\">Type</label>
                            <div class=\"input-group input-group-merge\">
                                <span class=\"input-group-text\"><i class=\"bx bx-tag\"></i></span>
                                ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "type", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                            </div>
                            ";
        // line 59
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "type", [], "any", false, false, false, 59), 'errors')) {
            // line 60
            yield "                                <div class=\"text-danger\">
                                    ";
            // line 61
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "type", [], "any", false, false, false, 61), 'errors');
            yield "
                                </div>
                            ";
        }
        // line 64
        yield "                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"materiel_quantite\">Quantité en Stock</label>
                            <div class=\"input-group input-group-merge\">
                                <span class=\"input-group-text\"><i class=\"bx bx-cube\"></i></span>
                                ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "quantite", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: 10"]]);
        yield "
                            </div>
                            ";
        // line 72
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "quantite", [], "any", false, false, false, 72), 'errors')) {
            // line 73
            yield "                                <div class=\"text-danger\">
                                    ";
            // line 74
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "quantite", [], "any", false, false, false, 74), 'errors');
            yield "
                                </div>
                            ";
        }
        // line 77
        yield "                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"materiel_etat\">État</label>
                            <div class=\"input-group input-group-merge\">
                                <span class=\"input-group-text\"><i class=\"bx bx-check-circle\"></i></span>
                                ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "etat", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                            </div>
                            ";
        // line 85
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "etat", [], "any", false, false, false, 85), 'errors')) {
            // line 86
            yield "                                <div class=\"text-danger\">
                                    ";
            // line 87
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "etat", [], "any", false, false, false, 87), 'errors');
            yield "
                                </div>
                            ";
        }
        // line 90
        yield "                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"materiel_prix\">Prix Unitaire (€)</label>
                            <div class=\"input-group input-group-merge\">
                                <span class=\"input-group-text\"><i class=\"bx bx-euro\"></i></span>
                                ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "prix", [], "any", false, false, false, 96), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: 29.99"]]);
        yield "
                            </div>
                            ";
        // line 98
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "prix", [], "any", false, false, false, 98), 'errors')) {
            // line 99
            yield "                                <div class=\"text-danger\">
                                    ";
            // line 100
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "prix", [], "any", false, false, false, 100), 'errors');
            yield "
                                </div>
                            ";
        }
        // line 103
        yield "                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"materiel_barcode\">Code-barres</label>
                            <div class=\"input-group input-group-merge\">
                                <span class=\"input-group-text\"><i class=\"bx bx-barcode\"></i></span>
                                ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "barcode", [], "any", false, false, false, 109), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: 123456789"]]);
        yield "
                            </div>
                            ";
        // line 111
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "barcode", [], "any", false, false, false, 111), 'errors')) {
            // line 112
            yield "                                <div class=\"text-danger\">
                                    ";
            // line 113
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "barcode", [], "any", false, false, false, 113), 'errors');
            yield "
                                </div>
                            ";
        }
        // line 116
        yield "                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"materiel_fournisseur\">Fournisseur</label>
                            <div class=\"input-group input-group-merge\">
                                <span class=\"input-group-text\"><i class=\"bx bx-building\"></i></span>
                                ";
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "fournisseur", [], "any", false, false, false, 122), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                            </div>
                            ";
        // line 124
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "fournisseur", [], "any", false, false, false, 124), 'errors')) {
            // line 125
            yield "                                <div class=\"text-danger\">
                                    ";
            // line 126
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "fournisseur", [], "any", false, false, false, 126), 'errors');
            yield "
                                </div>
                            ";
        }
        // line 129
        yield "                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"materiel_image\">Image du Matériel</label>
                            <div class=\"input-group input-group-merge\">
                                <span class=\"input-group-text\"><i class=\"bx bx-image\"></i></span>
                                ";
        // line 135
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "image", [], "any", false, false, false, 135), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                            ";
        // line 137
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "image", [], "any", false, false, false, 137), 'errors')) {
            // line 138
            yield "                                <div class=\"text-danger\">
                                    ";
            // line 139
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "image", [], "any", false, false, false, 139), 'errors');
            yield "
                                </div>
                            ";
        }
        // line 142
        yield "                            ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 142, $this->source); })()), "image", [], "any", false, false, false, 142) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "vars", [], "any", false, false, false, 142), "value", [], "any", false, false, false, 142), "id", [], "any", false, false, false, 142))) {
            // line 143
            yield "                                <div class=\"mt-2\">
                                    <p>Image actuelle :</p>
                                    <img src=\"";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/materiels/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 145, $this->source); })()), "image", [], "any", false, false, false, 145))), "html", null, true);
            yield "\" alt=\"Image du matériel\" style=\"max-width: 150px; max-height: 150px;\" class=\"rounded\">
                                </div>
                            ";
        }
        // line 148
        yield "                        </div>

                        <!-- Button Container -->
                        <div class=\"d-flex justify-content-center gap-2 mt-4\">
                            <button type=\"submit\" class=\"btn btn-primary px-4\" style=\"min-width: 150px;\">
                                ";
        // line 153
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "vars", [], "any", false, false, false, 153), "value", [], "any", false, false, false, 153), "id", [], "any", false, false, false, 153)) {
            yield "Mettre à jour";
        } else {
            yield "Créer";
        }
        // line 154
        yield "                            </button>
                            <a href=\"";
        // line 155
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_index");
        yield "\" class=\"btn btn-secondary px-4\" style=\"min-width: 150px;\">Annuler</a>
                        </div>
                    ";
        // line 157
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
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
        return "materiel/new.html.twig";
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
        return array (  409 => 157,  404 => 155,  401 => 154,  395 => 153,  388 => 148,  382 => 145,  378 => 143,  375 => 142,  369 => 139,  366 => 138,  364 => 137,  359 => 135,  351 => 129,  345 => 126,  342 => 125,  340 => 124,  335 => 122,  327 => 116,  321 => 113,  318 => 112,  316 => 111,  311 => 109,  303 => 103,  297 => 100,  294 => 99,  292 => 98,  287 => 96,  279 => 90,  273 => 87,  270 => 86,  268 => 85,  263 => 83,  255 => 77,  249 => 74,  246 => 73,  244 => 72,  239 => 70,  231 => 64,  225 => 61,  222 => 60,  220 => 59,  215 => 57,  207 => 51,  201 => 48,  198 => 47,  196 => 46,  191 => 44,  183 => 39,  180 => 38,  174 => 35,  171 => 34,  169 => 33,  162 => 28,  158 => 26,  154 => 24,  152 => 23,  144 => 17,  138 => 16,  132 => 12,  119 => 11,  103 => 8,  90 => 7,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block searchbar %}
    {% include 'searchbar.html.twig' %}
{% endblock %}

{% block title %}
    {% if form.vars.value.id %}Modifier Matériel{% else %}Nouveau Matériel{% endif %}
{% endblock %}

{% block content %}
<div class=\"content-wrapper\">
    <div class=\"container-xxl flex-grow-1 container-p-y\">
        <h4 class=\"fw-bold py-3 mb-4\">
            <span class=\"text-muted fw-light\">Matériel /</span>
            {% if form.vars.value.id %}Modifier Équipement{% else %}Nouvel Équipement{% endif %}
        </h4>

        <div class=\"col-xl\">
            <div class=\"card mb-4\">
                <div class=\"card-header d-flex justify-content-between align-items-center\">
                    <h5 class=\"mb-0\">
                        {% if form.vars.value.id %}
                            Modifier le Matériel
                        {% else %}
                            Ajouter un Nouveau Matériel
                        {% endif %}
                    </h5>
                    <small class=\"text-muted float-end\">Remplir les détails</small>
                </div>
                <div class=\"card-body\">
                    <!-- Affichage des erreurs globales du formulaire -->
                    {% if form_errors(form) %}
                        <div class=\"alert alert-danger\">
                            {{ form_errors(form) }}
                        </div>
                    {% endif %}

                    {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"materiel_nom\">Nom du Matériel</label>
                            <div class=\"input-group input-group-merge\">
                                <span class=\"input-group-text\"><i class=\"bx bx-box\"></i></span>
                                {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder': 'Ex: Ballon de football'}}) }}
                            </div>
                            {% if form_errors(form.nom) %}
                                <div class=\"text-danger\">
                                    {{ form_errors(form.nom) }}
                                </div>
                            {% endif %}
                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"materiel_type\">Type</label>
                            <div class=\"input-group input-group-merge\">
                                <span class=\"input-group-text\"><i class=\"bx bx-tag\"></i></span>
                                {{ form_widget(form.type, {'attr': {'class': 'form-select'}}) }}
                            </div>
                            {% if form_errors(form.type) %}
                                <div class=\"text-danger\">
                                    {{ form_errors(form.type) }}
                                </div>
                            {% endif %}
                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"materiel_quantite\">Quantité en Stock</label>
                            <div class=\"input-group input-group-merge\">
                                <span class=\"input-group-text\"><i class=\"bx bx-cube\"></i></span>
                                {{ form_widget(form.quantite, {'attr': {'class': 'form-control', 'placeholder': 'Ex: 10'}}) }}
                            </div>
                            {% if form_errors(form.quantite) %}
                                <div class=\"text-danger\">
                                    {{ form_errors(form.quantite) }}
                                </div>
                            {% endif %}
                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"materiel_etat\">État</label>
                            <div class=\"input-group input-group-merge\">
                                <span class=\"input-group-text\"><i class=\"bx bx-check-circle\"></i></span>
                                {{ form_widget(form.etat, {'attr': {'class': 'form-select'}}) }}
                            </div>
                            {% if form_errors(form.etat) %}
                                <div class=\"text-danger\">
                                    {{ form_errors(form.etat) }}
                                </div>
                            {% endif %}
                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"materiel_prix\">Prix Unitaire (€)</label>
                            <div class=\"input-group input-group-merge\">
                                <span class=\"input-group-text\"><i class=\"bx bx-euro\"></i></span>
                                {{ form_widget(form.prix, {'attr': {'class': 'form-control', 'placeholder': 'Ex: 29.99'}}) }}
                            </div>
                            {% if form_errors(form.prix) %}
                                <div class=\"text-danger\">
                                    {{ form_errors(form.prix) }}
                                </div>
                            {% endif %}
                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"materiel_barcode\">Code-barres</label>
                            <div class=\"input-group input-group-merge\">
                                <span class=\"input-group-text\"><i class=\"bx bx-barcode\"></i></span>
                                {{ form_widget(form.barcode, {'attr': {'class': 'form-control', 'placeholder': 'Ex: 123456789'}}) }}
                            </div>
                            {% if form_errors(form.barcode) %}
                                <div class=\"text-danger\">
                                    {{ form_errors(form.barcode) }}
                                </div>
                            {% endif %}
                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"materiel_fournisseur\">Fournisseur</label>
                            <div class=\"input-group input-group-merge\">
                                <span class=\"input-group-text\"><i class=\"bx bx-building\"></i></span>
                                {{ form_widget(form.fournisseur, {'attr': {'class': 'form-select'}}) }}
                            </div>
                            {% if form_errors(form.fournisseur) %}
                                <div class=\"text-danger\">
                                    {{ form_errors(form.fournisseur) }}
                                </div>
                            {% endif %}
                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"materiel_image\">Image du Matériel</label>
                            <div class=\"input-group input-group-merge\">
                                <span class=\"input-group-text\"><i class=\"bx bx-image\"></i></span>
                                {{ form_widget(form.image, {'attr': {'class': 'form-control'}}) }}
                            </div>
                            {% if form_errors(form.image) %}
                                <div class=\"text-danger\">
                                    {{ form_errors(form.image) }}
                                </div>
                            {% endif %}
                            {% if materiel.image and form.vars.value.id %}
                                <div class=\"mt-2\">
                                    <p>Image actuelle :</p>
                                    <img src=\"{{ asset('Uploads/materiels/' ~ materiel.image) }}\" alt=\"Image du matériel\" style=\"max-width: 150px; max-height: 150px;\" class=\"rounded\">
                                </div>
                            {% endif %}
                        </div>

                        <!-- Button Container -->
                        <div class=\"d-flex justify-content-center gap-2 mt-4\">
                            <button type=\"submit\" class=\"btn btn-primary px-4\" style=\"min-width: 150px;\">
                                {% if form.vars.value.id %}Mettre à jour{% else %}Créer{% endif %}
                            </button>
                            <a href=\"{{ path('app_materiel_index') }}\" class=\"btn btn-secondary px-4\" style=\"min-width: 150px;\">Annuler</a>
                        </div>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "materiel/new.html.twig", "C:\\Users\\ibtis\\Downloads\\matchupz-web-joueur\\matchupz-web-joueur\\templates\\materiel\\new.html.twig");
    }
}
