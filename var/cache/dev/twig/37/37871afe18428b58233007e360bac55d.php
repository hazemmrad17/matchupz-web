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
                    <!-- Toast container (positioned at top-right) -->
                    <div class=\"position-fixed top-0 end-0 p-3\" style=\"z-index: 1050;\" id=\"toast-container\"></div>

                    ";
        // line 35
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data", "id" => "materielForm", "novalidate" => "novalidate"]]);
        yield "
                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"materiel_nom\">Nom du Matériel</label>
                            <div class=\"input-group input-group-merge\">
                                <span class=\"input-group-text\"><i class=\"bx bx-box\"></i></span>
                                ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "nom", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: Ballon de football"]]);
        yield "
                            </div>
                            ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "nom", [], "any", false, false, false, 42), 'errors');
        yield "
                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"materiel_type\">Type</label>
                            <div class=\"input-group input-group-merge\">
                                <span class=\"input-group-text\"><i class=\"bx bx-tag\"></i></span>
                                ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "type", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                            </div>
                            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "type", [], "any", false, false, false, 51), 'errors');
        yield "
                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"materiel_quantite\">Quantité en Stock</label>
                            <div class=\"input-group input-group-merge\">
                                <span class=\"input-group-text\"><i class=\"bx bx-cube\"></i></span>
                                ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "quantite", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: 10"]]);
        yield "
                            </div>
                            ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "quantite", [], "any", false, false, false, 60), 'errors');
        yield "
                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"materiel_etat\">État</label>
                            <div class=\"input-group input-group-merge\">
                                <span class=\"input-group-text\"><i class=\"bx bx-check-circle\"></i></span>
                                ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "etat", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                            </div>
                            ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "etat", [], "any", false, false, false, 69), 'errors');
        yield "
                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"materiel_prix\">Prix Unitaire (€)</label>
                            <div class=\"input-group input-group-merge\">
                                <span class=\"input-group-text\"><i class=\"bx bx-euro\"></i></span>
                                ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "prix", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: 29.99"]]);
        yield "
                            </div>
                            ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "prix", [], "any", false, false, false, 78), 'errors');
        yield "
                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"materiel_fournisseur\">Fournisseur</label>
                            <div class=\"input-group input-group-merge\">
                                <span class=\"input-group-text\"><i class=\"bx bx-building\"></i></span>
                                ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "fournisseur", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                            </div>
                            ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "fournisseur", [], "any", false, false, false, 87), 'errors');
        yield "
                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"materiel_image\">Image du Matériel</label>
                            <div class=\"input-group input-group-merge\">
                                <span class=\"input-group-text\"><i class=\"bx bx-image\"></i></span>
                                ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "image", [], "any", false, false, false, 94), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                            </div>
                            ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "image", [], "any", false, false, false, 96), 'errors');
        yield "
                            ";
        // line 97
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 97, $this->source); })()), "image", [], "any", false, false, false, 97) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "vars", [], "any", false, false, false, 97), "value", [], "any", false, false, false, 97), "id", [], "any", false, false, false, 97))) {
            // line 98
            yield "                                <div class=\"mt-2\">
                                    <p>Image actuelle :</p>
                                    <img src=\"";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/materiels/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["materiel"]) || array_key_exists("materiel", $context) ? $context["materiel"] : (function () { throw new RuntimeError('Variable "materiel" does not exist.', 100, $this->source); })()), "image", [], "any", false, false, false, 100))), "html", null, true);
            yield "\" alt=\"Image du matériel\" style=\"max-width: 150px; max-height: 150px;\" class=\"rounded\">
                                </div>
                            ";
        }
        // line 103
        yield "                        </div>

                        <!-- Button Container -->
                        <div class=\"d-flex justify-content-center gap-2 mt-4\">
                            <button type=\"submit\" class=\"btn btn-primary px-4\" style=\"min-width: 150px;\">
                                ";
        // line 108
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "vars", [], "any", false, false, false, 108), "value", [], "any", false, false, false, 108), "id", [], "any", false, false, false, 108)) {
            yield "Mettre à jour";
        } else {
            yield "Créer";
        }
        // line 109
        yield "                            </button>
                            <a href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_materiel_index");
        yield "\" class=\"btn btn-secondary px-4\" style=\"min-width: 150px;\">Annuler</a>
                        </div>
                    ";
        // line 112
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
            
        </div>
    </div>
</div>

<script>
    document.getElementById('materielForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const toastContainer = document.getElementById('toast-container');
        toastContainer.innerHTML = '';

        const nom = document.getElementById('materiel_nom')?.value.trim() || '';
        const type = document.getElementById('materiel_type')?.value || '';
        const quantite = document.getElementById('materiel_quantite')?.value.trim() || '';
        const etat = document.getElementById('materiel_etat')?.value || '';
        const prix = document.getElementById('materiel_prix')?.value.trim() || '';
        const fournisseur = document.getElementById('materiel_fournisseur')?.value || '';
        const imageInput = document.getElementById('materiel_image');
        const imageFile = imageInput?.files[0];
        const isEditing = !!document.getElementById('materiel_image').closest('form').querySelector('input[name=\"materiel[_token]\"]').value;

        // Validation for Nom
        if (!nom) {
            addToast('Erreur Nom', 'Le champ nom est vide.');
        } else if (nom.length > 255) {
            addToast('Erreur Nom', 'Le nom ne doit pas dépasser 255 caractères.');
        }

        // Validation for Type
        if (!type) {
            addToast('Erreur Type', 'Le champ type est vide.');
        } else if (![' EQUIPEMENT_SPORTIF','ACCESSOIRE_ENTRAINEMENT','MATERIEL_JEU','TENUE_SPORTIVE','EQUIPEMENT_PROTECTION','INFRASTRUCTURE'].includes(type)) {
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
        } else if (!['NEUF', 'USE', 'ENDOMMAGE'].includes(etat)) {
            addToast('Erreur État', 'Veuillez sélectionner un état valide.');
        }

        // Validation for Prix
        if (!prix) {
            addToast('Erreur Prix', 'Le champ prix est vide.');
        } else if (isNaN(prix) || parseFloat(prix) < 0) {
            addToast('Erreur Prix', 'Le prix doit être un nombre positif.');
        }

        // Validation for Fournisseur (optional field)
        if (fournisseur && fournisseur.length > 255) {
            addToast('Erreur Fournisseur', 'Le fournisseur ne doit pas dépasser 255 caractères.');
        }

        // Validation for Image
        if (!isEditing && !imageFile) {
            addToast('Erreur Image', 'Veuillez sélectionner une image pour un nouveau matériel.');
        } else if (imageFile) {
            const allowedTypes = ['image/jpeg', 'image/png', 'image/jpg'];
            const maxSize = 5 * 1024 * 1024; // 5MB in bytes

            if (!allowedTypes.includes(imageFile.type)) {
                addToast('Erreur Image', 'L\\'image doit être au format JPG, JPEG ou PNG.');
            }

            if (imageFile.size > maxSize) {
                addToast('Erreur Image', 'L\\'image ne doit pas dépasser 5 Mo.');
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
        return array (  311 => 112,  306 => 110,  303 => 109,  297 => 108,  290 => 103,  284 => 100,  280 => 98,  278 => 97,  274 => 96,  269 => 94,  259 => 87,  254 => 85,  244 => 78,  239 => 76,  229 => 69,  224 => 67,  214 => 60,  209 => 58,  199 => 51,  194 => 49,  184 => 42,  179 => 40,  171 => 35,  162 => 28,  158 => 26,  154 => 24,  152 => 23,  144 => 17,  138 => 16,  132 => 12,  119 => 11,  103 => 8,  90 => 7,  78 => 4,  65 => 3,  42 => 1,);
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
                    <!-- Toast container (positioned at top-right) -->
                    <div class=\"position-fixed top-0 end-0 p-3\" style=\"z-index: 1050;\" id=\"toast-container\"></div>

                    {{ form_start(form, {'attr': {'enctype': 'multipart/form-data', 'id': 'materielForm', 'novalidate': 'novalidate'}}) }}
                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"materiel_nom\">Nom du Matériel</label>
                            <div class=\"input-group input-group-merge\">
                                <span class=\"input-group-text\"><i class=\"bx bx-box\"></i></span>
                                {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder': 'Ex: Ballon de football'}}) }}
                            </div>
                            {{ form_errors(form.nom) }}
                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"materiel_type\">Type</label>
                            <div class=\"input-group input-group-merge\">
                                <span class=\"input-group-text\"><i class=\"bx bx-tag\"></i></span>
                                {{ form_widget(form.type, {'attr': {'class': 'form-select'}}) }}
                            </div>
                            {{ form_errors(form.type) }}
                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"materiel_quantite\">Quantité en Stock</label>
                            <div class=\"input-group input-group-merge\">
                                <span class=\"input-group-text\"><i class=\"bx bx-cube\"></i></span>
                                {{ form_widget(form.quantite, {'attr': {'class': 'form-control', 'placeholder': 'Ex: 10'}}) }}
                            </div>
                            {{ form_errors(form.quantite) }}
                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"materiel_etat\">État</label>
                            <div class=\"input-group input-group-merge\">
                                <span class=\"input-group-text\"><i class=\"bx bx-check-circle\"></i></span>
                                {{ form_widget(form.etat, {'attr': {'class': 'form-select'}}) }}
                            </div>
                            {{ form_errors(form.etat) }}
                        </div>

                        <div class=\"mb-3\">
                            <label class=\"form-label\" for=\"materiel_prix\">Prix Unitaire (€)</label>
                            <div class=\"input-group input-group-merge\">
                                <span class=\"input-group-text\"><i class=\"bx bx-euro\"></i></span>
                                {{ form_widget(form.prix, {'attr': {'class': 'form-control', 'placeholder': 'Ex: 29.99'}}) }}
                            </div>
                            {{ form_errors(form.prix) }}
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
                            <label class=\"form-label\" for=\"materiel_image\">Image du Matériel</label>
                            <div class=\"input-group input-group-merge\">
                                <span class=\"input-group-text\"><i class=\"bx bx-image\"></i></span>
                                {{ form_widget(form.image, {'attr': {'class': 'form-control'}}) }}
                            </div>
                            {{ form_errors(form.image) }}
                            {% if materiel.image and form.vars.value.id %}
                                <div class=\"mt-2\">
                                    <p>Image actuelle :</p>
                                    <img src=\"{{ asset('uploads/materiels/' ~ materiel.image) }}\" alt=\"Image du matériel\" style=\"max-width: 150px; max-height: 150px;\" class=\"rounded\">
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

<script>
    document.getElementById('materielForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const toastContainer = document.getElementById('toast-container');
        toastContainer.innerHTML = '';

        const nom = document.getElementById('materiel_nom')?.value.trim() || '';
        const type = document.getElementById('materiel_type')?.value || '';
        const quantite = document.getElementById('materiel_quantite')?.value.trim() || '';
        const etat = document.getElementById('materiel_etat')?.value || '';
        const prix = document.getElementById('materiel_prix')?.value.trim() || '';
        const fournisseur = document.getElementById('materiel_fournisseur')?.value || '';
        const imageInput = document.getElementById('materiel_image');
        const imageFile = imageInput?.files[0];
        const isEditing = !!document.getElementById('materiel_image').closest('form').querySelector('input[name=\"materiel[_token]\"]').value;

        // Validation for Nom
        if (!nom) {
            addToast('Erreur Nom', 'Le champ nom est vide.');
        } else if (nom.length > 255) {
            addToast('Erreur Nom', 'Le nom ne doit pas dépasser 255 caractères.');
        }

        // Validation for Type
        if (!type) {
            addToast('Erreur Type', 'Le champ type est vide.');
        } else if (![' EQUIPEMENT_SPORTIF','ACCESSOIRE_ENTRAINEMENT','MATERIEL_JEU','TENUE_SPORTIVE','EQUIPEMENT_PROTECTION','INFRASTRUCTURE'].includes(type)) {
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
        } else if (!['NEUF', 'USE', 'ENDOMMAGE'].includes(etat)) {
            addToast('Erreur État', 'Veuillez sélectionner un état valide.');
        }

        // Validation for Prix
        if (!prix) {
            addToast('Erreur Prix', 'Le champ prix est vide.');
        } else if (isNaN(prix) || parseFloat(prix) < 0) {
            addToast('Erreur Prix', 'Le prix doit être un nombre positif.');
        }

        // Validation for Fournisseur (optional field)
        if (fournisseur && fournisseur.length > 255) {
            addToast('Erreur Fournisseur', 'Le fournisseur ne doit pas dépasser 255 caractères.');
        }

        // Validation for Image
        if (!isEditing && !imageFile) {
            addToast('Erreur Image', 'Veuillez sélectionner une image pour un nouveau matériel.');
        } else if (imageFile) {
            const allowedTypes = ['image/jpeg', 'image/png', 'image/jpg'];
            const maxSize = 5 * 1024 * 1024; // 5MB in bytes

            if (!allowedTypes.includes(imageFile.type)) {
                addToast('Erreur Image', 'L\\'image doit être au format JPG, JPEG ou PNG.');
            }

            if (imageFile.size > maxSize) {
                addToast('Erreur Image', 'L\\'image ne doit pas dépasser 5 Mo.');
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
</script>
{% endblock %}", "materiel/new.html.twig", "C:\\Users\\ibtis\\Downloads\\matchupz-web-joueur\\matchupz-web-joueur\\templates\\materiel\\new.html.twig");
    }
}
