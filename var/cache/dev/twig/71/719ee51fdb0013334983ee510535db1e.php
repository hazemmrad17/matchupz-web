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
class __TwigTemplate_4e50094761226cb424a73e0f0f015330 extends Template
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
                    <!-- Toast container (positioned at top-right) -->
                    <div class=\"position-fixed top-0 end-0 p-3\" style=\"z-index: 1050;\" id=\"toast-container\"></div>

                    ";
        // line 32
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data", "id" => "materielEditForm", "novalidate" => "novalidate"]]);
        yield "
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"mb-3\">
                                    <label class=\"form-label\" for=\"materiel_nom\">Nom du Matériel *</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-box\"></i></span>
                                        ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "nom", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: Ballon de football"]]);
        yield "
                                    </div>
                                    ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "nom", [], "any", false, false, false, 41), 'errors');
        yield "
                                </div>

                                <div class=\"mb-3\">
                                    <label class=\"form-label\" for=\"materiel_type\">Type *</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-tag\"></i></span>
                                        ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "type", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                                    </div>
                                    ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "type", [], "any", false, false, false, 50), 'errors');
        yield "
                                </div>

                                <div class=\"mb-3\">
                                    <label class=\"form-label\" for=\"materiel_quantite\">Quantité en Stock *</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-cube\"></i></span>
                                        ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "quantite", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: 10"]]);
        yield "
                                    </div>
                                    ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "quantite", [], "any", false, false, false, 59), 'errors');
        yield "
                                </div>

                                <div class=\"mb-3\">
                                    <label class=\"form-label\" for=\"materiel_etat\">État *</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-check-circle\"></i></span>
                                        ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "etat", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                                    </div>
                                    ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "etat", [], "any", false, false, false, 68), 'errors');
        yield "
                                </div>
                            </div>

                            <div class=\"col-md-6\">
                                <div class=\"mb-3\">
                                    <label class=\"form-label\" for=\"materiel_prix\">Prix Unitaire (€) *</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-euro\"></i></span>
                                        ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "prix", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: 29.99"]]);
        yield "
                                    </div>
                                    ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "prix", [], "any", false, false, false, 79), 'errors');
        yield "
                                </div>

                                <div class=\"mb-3\">
                                    <label class=\"form-label\" for=\"materiel_barcode\">Code-barres</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-barcode\"></i></span>
                                        ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "barcode", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: 123456"]]);
        yield "
                                    </div>
                                    ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "barcode", [], "any", false, false, false, 88), 'errors');
        yield "
                                </div>

                                <div class=\"mb-3\">
                                    <label class=\"form-label\" for=\"materiel_fournisseur\">Fournisseur</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-building\"></i></span>
                                        ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "fournisseur", [], "any", false, false, false, 95), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                                    </div>
                                    ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "fournisseur", [], "any", false, false, false, 97), 'errors');
        yield "
                                </div>

                                <div class=\"mb-3\">
                                    <label class=\"form-label\" for=\"materiel_image\">Image</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-image\"></i></span>
                                        ";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "image", [], "any", false, false, false, 104), 'widget', ["attr" => ["class" => "form-control", "accept" => "image/jpeg,image/png,image/gif"]]);
        yield "
                                    </div>
                                    ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "image", [], "any", false, false, false, 106), 'errors');
        yield "
                                    <small class=\"text-muted\">Formats acceptés: JPG, PNG, GIF (Max 2MB). Laissez vide pour conserver l'image actuelle.</small>
                                    ";
        // line 108
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 108, $this->source); })()), "image", [], "any", false, false, false, 108)) {
            // line 109
            yield "                                        <div class=\"mt-2\">
                                            <p>Image actuelle :</p>
                                            <img src=\"";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/materiels/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 111, $this->source); })()), "image", [], "any", false, false, false, 111))), "html", null, true);
            yield "\" alt=\"Image actuelle\" style=\"max-width: 200px;\">
                                        </div>
                                    ";
        }
        // line 114
        yield "                                </div>
                            </div>
                        </div>

                        <div class=\"mt-4\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                <i class=\"bx bx-save me-1\"></i> Mettre à jour
                            </button>
                            <a href=\"";
        // line 122
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_index");
        yield "\" class=\"btn btn-secondary\">
                                <i class=\"bx bx-arrow-back me-1\"></i> Annuler
                            </a>
                        </div>
                    ";
        // line 126
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), 'form_end');
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

    // line 134
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

        // line 135
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        // Form validation with toasts
        document.getElementById('materielEditForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const toastContainer = document.getElementById('toast-container');
            toastContainer.innerHTML = '';

            const nom = document.getElementById('materiel_nom')?.value.trim() || '';
            const type = document.getElementById('materiel_type')?.value || '';
            const quantite = document.getElementById('materiel_quantite')?.value.trim() || '';
            const etat = document.getElementById('materiel_etat')?.value || '';
            const prix = document.getElementById('materiel_prix')?.value.trim() || '';
            const barcode = document.getElementById('materiel_barcode')?.value.trim() || '';
            const fournisseur = document.getElementById('materiel_fournisseur')?.value || '';
            const imageInput = document.getElementById('materiel_image');
            const imageFile = imageInput?.files[0];

            // Validation for Nom
            if (!nom) {
                addToast('Erreur Nom', 'Le champ nom est vide.');
            } else if (nom.length > 255) {
                addToast('Erreur Nom', 'Le nom ne doit pas dépasser 255 caractères.');
            }

            // Validation for Type
            if (!type) {
                addToast('Erreur Type', 'Le champ type est vide.');
            } else if (!['BALLON', 'RAQUETTE', 'FILET', 'CHAUSSURE', 'EQUIPEMENT'].includes(type)) {
                addToast('Erreur Type', 'Veuillez sélectionner un type valide.');
            }

            // Validation for Quantité
            if (!quantite) {
                addToast('Erreur Quantité', 'Le champ quantité est vide.');
            } else if (isNaN(quantite) || parseInt(quantite) < 0) {
                addToast('Erreur Quantité', 'La quantité doit être un nombre positif.');
            }

            // Validation for État
            if (!etat) {
                addToast('Erreur État', 'Le champ état est vide.');
            } else if (!['NEUF', 'BON', 'USE', 'DEFAUT'].includes(etat)) {
                addToast('Erreur État', 'Veuillez sélectionner un état valide.');
            }

            // Validation for Prix
            if (!prix) {
                addToast('Erreur Prix', 'Le champ prix est vide.');
            } else if (isNaN(prix) || parseFloat(prix) < 0) {
                addToast('Erreur Prix', 'Le prix doit être un nombre positif.');
            }

            // Validation for Barcode (optional)
            if (barcode && barcode.length > 255) {
                addToast('Erreur Code-barres', 'Le code-barres ne doit pas dépasser 255 caractères.');
            }

            // Validation for Fournisseur (optional)
            if (fournisseur && fournisseur.length > 255) {
                addToast('Erreur Fournisseur', 'Le fournisseur ne doit pas dépasser 255 caractères.');
            }

            // Validation for Image (optional when editing)
            if (imageFile) {
                const allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
                const maxSize = 2 * 1024 * 1024; // 2MB in bytes

                if (!allowedTypes.includes(imageFile.type)) {
                    addToast('Erreur Image', 'L\\'image doit être au format JPG, PNG ou GIF.');
                }

                if (imageFile.size > maxSize) {
                    addToast('Erreur Image', 'L\\'image ne doit pas dépasser 2 Mo.');
                }
            }

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

        // Prévisualisation de l'image avant upload
        document.addEventListener('DOMContentLoaded', function() {
            const imageFileInput = document.querySelector('#";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 240, $this->source); })()), "image", [], "any", false, false, false, 240), "vars", [], "any", false, false, false, 240), "id", [], "any", false, false, false, 240), "html", null, true);
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
        return array (  453 => 240,  344 => 135,  331 => 134,  313 => 126,  306 => 122,  296 => 114,  290 => 111,  286 => 109,  284 => 108,  279 => 106,  274 => 104,  264 => 97,  259 => 95,  249 => 88,  244 => 86,  234 => 79,  229 => 77,  217 => 68,  212 => 66,  202 => 59,  197 => 57,  187 => 50,  182 => 48,  172 => 41,  167 => 39,  157 => 32,  147 => 25,  141 => 21,  135 => 20,  125 => 16,  120 => 15,  115 => 14,  111 => 13,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
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
                    <!-- Toast container (positioned at top-right) -->
                    <div class=\"position-fixed top-0 end-0 p-3\" style=\"z-index: 1050;\" id=\"toast-container\"></div>

                    {{ form_start(form, {'attr': {'enctype': 'multipart/form-data', 'id': 'materielEditForm', 'novalidate': 'novalidate'}}) }}
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"mb-3\">
                                    <label class=\"form-label\" for=\"materiel_nom\">Nom du Matériel *</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-box\"></i></span>
                                        {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder': 'Ex: Ballon de football'}}) }}
                                    </div>
                                    {{ form_errors(form.nom) }}
                                </div>

                                <div class=\"mb-3\">
                                    <label class=\"form-label\" for=\"materiel_type\">Type *</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-tag\"></i></span>
                                        {{ form_widget(form.type, {'attr': {'class': 'form-select'}}) }}
                                    </div>
                                    {{ form_errors(form.type) }}
                                </div>

                                <div class=\"mb-3\">
                                    <label class=\"form-label\" for=\"materiel_quantite\">Quantité en Stock *</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-cube\"></i></span>
                                        {{ form_widget(form.quantite, {'attr': {'class': 'form-control', 'placeholder': 'Ex: 10'}}) }}
                                    </div>
                                    {{ form_errors(form.quantite) }}
                                </div>

                                <div class=\"mb-3\">
                                    <label class=\"form-label\" for=\"materiel_etat\">État *</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-check-circle\"></i></span>
                                        {{ form_widget(form.etat, {'attr': {'class': 'form-select'}}) }}
                                    </div>
                                    {{ form_errors(form.etat) }}
                                </div>
                            </div>

                            <div class=\"col-md-6\">
                                <div class=\"mb-3\">
                                    <label class=\"form-label\" for=\"materiel_prix\">Prix Unitaire (€) *</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-euro\"></i></span>
                                        {{ form_widget(form.prix, {'attr': {'class': 'form-control', 'placeholder': 'Ex: 29.99'}}) }}
                                    </div>
                                    {{ form_errors(form.prix) }}
                                </div>

                                <div class=\"mb-3\">
                                    <label class=\"form-label\" for=\"materiel_barcode\">Code-barres</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-barcode\"></i></span>
                                        {{ form_widget(form.barcode, {'attr': {'class': 'form-control', 'placeholder': 'Ex: 123456'}}) }}
                                    </div>
                                    {{ form_errors(form.barcode) }}
                                </div>

                                <div class=\"mb-3\">
                                    <label class=\"form-label\" for=\"materiel_fournisseur\">Fournisseur</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-building\"></i></span>
                                        {{ form_widget(form.fournisseur, {'attr': {'class': 'form-select'}}) }}
                                    </div>
                                    {{ form_errors(form.fournisseur) }}
                                </div>

                                <div class=\"mb-3\">
                                    <label class=\"form-label\" for=\"materiel_image\">Image</label>
                                    <div class=\"input-group input-group-merge\">
                                        <span class=\"input-group-text\"><i class=\"bx bx-image\"></i></span>
                                        {{ form_widget(form.image, {'attr': {'class': 'form-control', 'accept': 'image/jpeg,image/png,image/gif'}}) }}
                                    </div>
                                    {{ form_errors(form.image) }}
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
                            <a href=\"{{ path('app_materiel_index') }}\" class=\"btn btn-secondary\">
                                <i class=\"bx bx-arrow-back me-1\"></i> Annuler
                            </a>
                        </div>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        // Form validation with toasts
        document.getElementById('materielEditForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const toastContainer = document.getElementById('toast-container');
            toastContainer.innerHTML = '';

            const nom = document.getElementById('materiel_nom')?.value.trim() || '';
            const type = document.getElementById('materiel_type')?.value || '';
            const quantite = document.getElementById('materiel_quantite')?.value.trim() || '';
            const etat = document.getElementById('materiel_etat')?.value || '';
            const prix = document.getElementById('materiel_prix')?.value.trim() || '';
            const barcode = document.getElementById('materiel_barcode')?.value.trim() || '';
            const fournisseur = document.getElementById('materiel_fournisseur')?.value || '';
            const imageInput = document.getElementById('materiel_image');
            const imageFile = imageInput?.files[0];

            // Validation for Nom
            if (!nom) {
                addToast('Erreur Nom', 'Le champ nom est vide.');
            } else if (nom.length > 255) {
                addToast('Erreur Nom', 'Le nom ne doit pas dépasser 255 caractères.');
            }

            // Validation for Type
            if (!type) {
                addToast('Erreur Type', 'Le champ type est vide.');
            } else if (!['BALLON', 'RAQUETTE', 'FILET', 'CHAUSSURE', 'EQUIPEMENT'].includes(type)) {
                addToast('Erreur Type', 'Veuillez sélectionner un type valide.');
            }

            // Validation for Quantité
            if (!quantite) {
                addToast('Erreur Quantité', 'Le champ quantité est vide.');
            } else if (isNaN(quantite) || parseInt(quantite) < 0) {
                addToast('Erreur Quantité', 'La quantité doit être un nombre positif.');
            }

            // Validation for État
            if (!etat) {
                addToast('Erreur État', 'Le champ état est vide.');
            } else if (!['NEUF', 'BON', 'USE', 'DEFAUT'].includes(etat)) {
                addToast('Erreur État', 'Veuillez sélectionner un état valide.');
            }

            // Validation for Prix
            if (!prix) {
                addToast('Erreur Prix', 'Le champ prix est vide.');
            } else if (isNaN(prix) || parseFloat(prix) < 0) {
                addToast('Erreur Prix', 'Le prix doit être un nombre positif.');
            }

            // Validation for Barcode (optional)
            if (barcode && barcode.length > 255) {
                addToast('Erreur Code-barres', 'Le code-barres ne doit pas dépasser 255 caractères.');
            }

            // Validation for Fournisseur (optional)
            if (fournisseur && fournisseur.length > 255) {
                addToast('Erreur Fournisseur', 'Le fournisseur ne doit pas dépasser 255 caractères.');
            }

            // Validation for Image (optional when editing)
            if (imageFile) {
                const allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
                const maxSize = 2 * 1024 * 1024; // 2MB in bytes

                if (!allowedTypes.includes(imageFile.type)) {
                    addToast('Erreur Image', 'L\\'image doit être au format JPG, PNG ou GIF.');
                }

                if (imageFile.size > maxSize) {
                    addToast('Erreur Image', 'L\\'image ne doit pas dépasser 2 Mo.');
                }
            }

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
{% endblock %}", "materiel/edit.html.twig", "C:\\Users\\ibtis\\Downloads\\matchupz-web-joueur\\matchupz-web-joueur\\templates\\materiel\\edit.html.twig");
    }
}
