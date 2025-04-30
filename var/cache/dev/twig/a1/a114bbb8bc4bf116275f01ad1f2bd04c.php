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

/* club/edit.html.twig */
class __TwigTemplate_357928b9034cb2bbb9ebd7be5fd6623e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "club/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "club/edit.html.twig", 1);
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

        yield "Modifier Club";
        
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
        yield "    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Clubs /</span> Modifier un club
            </h4>

            <div class=\"col-md-12\">
                <ul class=\"nav nav-pills flex-column flex-md-row mb-3\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" href=\"javascript:void(0);\"><i class=\"bx bx-building me-1\"></i> Détails du club</a>
                    </li>
                </ul>

                <div class=\"card mb-4\">
                    <h5 class=\"card-header\">Modifier le club</h5>
                    ";
        // line 21
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_start', ["method" => "POST", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_edit", ["idClub" => CoreExtension::getAttribute($this->env, $this->source,         // line 23
(isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 23, $this->source); })()), "idClub", [], "any", false, false, false, 23)]), "attr" => ["novalidate" => "novalidate", "id" => "formClubSettings"]]);
        // line 28
        yield "
                    <div class=\"card-body\">
                        <div class=\"d-flex align-items-start align-items-sm-center gap-4\">
                            <img
                                src=\"";
        // line 32
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 32, $this->source); })()), "photoUrl", [], "any", false, false, false, 32)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, (isset($context["club"]) || array_key_exists("club", $context) ? $context["club"] : (function () { throw new RuntimeError('Variable "club" does not exist.', 32, $this->source); })()), "photoUrl", [], "any", false, false, false, 32)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/avatars/default-club.png"), "html", null, true)));
        yield "\"
                                alt=\"Avatar du club\"
                                class=\"d-block rounded\"
                                height=\"100\"
                                width=\"100\"
                                id=\"uploadedAvatar\"
                            />
                            <div class=\"button-wrapper\">
                                <label for=\"club_photoUrl\" class=\"btn btn-primary me-2 mb-4\" tabindex=\"0\">
                                    <span class=\"d-none d-sm-block\">Uploader une nouvelle photo</span>
                                    <i class=\"bx bx-upload d-block d-sm-none\"></i>
                                </label>
                                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "photoUrl", [], "any", false, false, false, 44), 'widget', ["attr" => ["id" => "club_photoUrl", "class" => "account-file-input", "style" => "display: none;", "accept" => "image/png, image/jpeg"]]);
        // line 51
        yield "
                                ";
        // line 52
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "photoUrl", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "errors", [], "any", false, false, false, 52)) > 0)) {
            // line 53
            yield "                                    <div class=\"invalid-feedback d-block\">
                                        ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "photoUrl", [], "any", false, false, false, 54), "vars", [], "any", false, false, false, 54), "errors", [], "any", false, false, false, 54));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 55
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 55), "html", null, true);
                yield "<br>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            yield "                                    </div>
                                ";
        }
        // line 59
        yield "                                <button type=\"button\" class=\"btn btn-outline-secondary account-image-reset mb-4\">
                                    <i class=\"bx bx-reset d-block d-sm-none\"></i>
                                    <span class=\"d-none d-sm-block\">Réinitialiser</span>
                                </button>
                                <p class=\"text-muted mb-0\">Formats autorisés : JPG ou PNG. Taille max : 800 Ko</p>
                            </div>
                        </div>
                    </div>
                    <hr class=\"my-0\" />
                    <div class=\"card-body\">
                        <div class=\"row\">
                            ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "children", [], "any", false, false, false, 70));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 71
            yield "                                ";
            if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 71), "name", [], "any", false, false, false, 71) != "submit") && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 71), "name", [], "any", false, false, false, 71) != "_token")) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 71), "name", [], "any", false, false, false, 71) != "photoUrl"))) {
                // line 72
                yield "                                    <div class=\"mb-3 col-md-6\">
                                        ";
                // line 73
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label');
                yield "
                                        ";
                // line 74
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["class" => "form-control"]]);
                yield "
                                        ";
                // line 75
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 75), "errors", [], "any", false, false, false, 75)) > 0)) {
                    // line 76
                    yield "                                            <div class=\"invalid-feedback d-block\">
                                                ";
                    // line 77
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 77), "errors", [], "any", false, false, false, 77));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 78
                        yield "                                                    ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 78), "html", null, true);
                        yield "<br>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 80
                    yield "                                            </div>
                                        ";
                }
                // line 82
                yield "                                    </div>
                                ";
            }
            // line 84
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "                            ";
        // line 86
        yield "                            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "_token", [], "any", false, false, false, 86), 'widget');
        yield "
                        </div>
                        <div class=\"mt-2\">
                            <button type=\"submit\" class=\"btn btn-primary me-2\">Enregistrer</button>
                            <a href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_index");
        yield "\" class=\"btn btn-outline-secondary\">Annuler</a>
                        </div>
                    </div>
                    ";
        // line 93
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 100
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

        // line 101
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Gestion de l'upload d'image
            const uploadInput = document.getElementById('club_photoUrl');
            const uploadedAvatar = document.getElementById('uploadedAvatar');
            const resetButton = document.querySelector('.account-image-reset');
            const form = document.getElementById('formClubSettings');
            const originalImage = uploadedAvatar.src;

            uploadInput.addEventListener('change', function (e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        uploadedAvatar.src = e.target.result;
                    };
                    reader.readAsDataURL(file);
                }
            });

            resetButton.addEventListener('click', function () {
                uploadedAvatar.src = originalImage;
                uploadInput.value = '';
            });

            form.addEventListener('submit', function (e) {
                console.log('Formulaire soumis'); // Debug
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
        return "club/edit.html.twig";
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
        return array (  278 => 101,  265 => 100,  248 => 93,  242 => 90,  234 => 86,  232 => 85,  226 => 84,  222 => 82,  218 => 80,  209 => 78,  205 => 77,  202 => 76,  200 => 75,  196 => 74,  192 => 73,  189 => 72,  186 => 71,  182 => 70,  169 => 59,  165 => 57,  156 => 55,  152 => 54,  149 => 53,  147 => 52,  144 => 51,  142 => 44,  127 => 32,  121 => 28,  119 => 23,  118 => 21,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier Club{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Clubs /</span> Modifier un club
            </h4>

            <div class=\"col-md-12\">
                <ul class=\"nav nav-pills flex-column flex-md-row mb-3\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" href=\"javascript:void(0);\"><i class=\"bx bx-building me-1\"></i> Détails du club</a>
                    </li>
                </ul>

                <div class=\"card mb-4\">
                    <h5 class=\"card-header\">Modifier le club</h5>
                    {{ form_start(form, {
                        'method': 'POST',
                        'action': path('club_edit', {'idClub': club.idClub}),
                        'attr': {
                            'novalidate': 'novalidate',
                            'id': 'formClubSettings'
                        }
                    }) }}
                    <div class=\"card-body\">
                        <div class=\"d-flex align-items-start align-items-sm-center gap-4\">
                            <img
                                src=\"{{ club.photoUrl ? asset(club.photoUrl) : asset('/img/avatars/default-club.png') }}\"
                                alt=\"Avatar du club\"
                                class=\"d-block rounded\"
                                height=\"100\"
                                width=\"100\"
                                id=\"uploadedAvatar\"
                            />
                            <div class=\"button-wrapper\">
                                <label for=\"club_photoUrl\" class=\"btn btn-primary me-2 mb-4\" tabindex=\"0\">
                                    <span class=\"d-none d-sm-block\">Uploader une nouvelle photo</span>
                                    <i class=\"bx bx-upload d-block d-sm-none\"></i>
                                </label>
                                {{ form_widget(form.photoUrl, {
                                    'attr': {
                                        'id': 'club_photoUrl',
                                        'class': 'account-file-input',
                                        'style': 'display: none;',
                                        'accept': 'image/png, image/jpeg'
                                    }
                                }) }}
                                {% if form.photoUrl.vars.errors|length > 0 %}
                                    <div class=\"invalid-feedback d-block\">
                                        {% for error in form.photoUrl.vars.errors %}
                                            {{ error.message }}<br>
                                        {% endfor %}
                                    </div>
                                {% endif %}
                                <button type=\"button\" class=\"btn btn-outline-secondary account-image-reset mb-4\">
                                    <i class=\"bx bx-reset d-block d-sm-none\"></i>
                                    <span class=\"d-none d-sm-block\">Réinitialiser</span>
                                </button>
                                <p class=\"text-muted mb-0\">Formats autorisés : JPG ou PNG. Taille max : 800 Ko</p>
                            </div>
                        </div>
                    </div>
                    <hr class=\"my-0\" />
                    <div class=\"card-body\">
                        <div class=\"row\">
                            {% for child in form.children %}
                                {% if child.vars.name != 'submit' and child.vars.name != '_token' and child.vars.name != 'photoUrl' %}
                                    <div class=\"mb-3 col-md-6\">
                                        {{ form_label(child) }}
                                        {{ form_widget(child, {'attr': {'class': 'form-control'}}) }}
                                        {% if child.vars.errors|length > 0 %}
                                            <div class=\"invalid-feedback d-block\">
                                                {% for error in child.vars.errors %}
                                                    {{ error.message }}<br>
                                                {% endfor %}
                                            </div>
                                        {% endif %}
                                    </div>
                                {% endif %}
                            {% endfor %}
                            {# Rendu manuel du jeton CSRF #}
                            {{ form_widget(form._token) }}
                        </div>
                        <div class=\"mt-2\">
                            <button type=\"submit\" class=\"btn btn-primary me-2\">Enregistrer</button>
                            <a href=\"{{ path('club_index') }}\" class=\"btn btn-outline-secondary\">Annuler</a>
                        </div>
                    </div>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Gestion de l'upload d'image
            const uploadInput = document.getElementById('club_photoUrl');
            const uploadedAvatar = document.getElementById('uploadedAvatar');
            const resetButton = document.querySelector('.account-image-reset');
            const form = document.getElementById('formClubSettings');
            const originalImage = uploadedAvatar.src;

            uploadInput.addEventListener('change', function (e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function (e) {
                        uploadedAvatar.src = e.target.result;
                    };
                    reader.readAsDataURL(file);
                }
            });

            resetButton.addEventListener('click', function () {
                uploadedAvatar.src = originalImage;
                uploadInput.value = '';
            });

            form.addEventListener('submit', function (e) {
                console.log('Formulaire soumis'); // Debug
            });
        });
    </script>
{% endblock %}", "club/edit.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\club\\edit.html.twig");
    }
}
