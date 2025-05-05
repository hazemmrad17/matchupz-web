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

/* user/_form.html.twig */
class __TwigTemplate_408b484a00e36fab1ad75616ec6e55de extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["id" => "userForm", "novalidate" => "novalidate"]]);
        yield "
    ";
        // line 2
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'errors');
        yield "

    ";
        // line 5
        yield "    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"mb-3\">
                <label class=\"form-label\">Nom*</label>
                ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "nom", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez le nom"]]);
        // line 14
        yield "
                ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "nom", [], "any", false, false, false, 15), 'errors');
        yield "
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"mb-3\">
                <label class=\"form-label\">Prénom*</label>
                ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "prenom", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez le prénom"]]);
        // line 26
        yield "
                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "prenom", [], "any", false, false, false, 27), 'errors');
        yield "
            </div>
        </div>
    </div>

    ";
        // line 33
        yield "    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"mb-3\">
                <label class=\"form-label\">Email*</label>
                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "email", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "email@exemple.com"]]);
        // line 42
        yield "
                ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "email", [], "any", false, false, false, 43), 'errors');
        yield "
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"mb-3\">
                <label class=\"form-label\">Téléphone</label>
                ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "num_telephone", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "00 00 00 00 00"]]);
        // line 54
        yield "
                ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "num_telephone", [], "any", false, false, false, 55), 'errors');
        yield "
            </div>
        </div>
    </div>

    ";
        // line 61
        yield "    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"mb-3\">
                <label class=\"form-label\">Mot de passe</label>
                ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "password", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Laisser vide pour ne pas modifier", "autocomplete" => "new-password"]]);
        // line 71
        yield "
                <small class=\"text-muted\">Minimum 8 caractères</small>
                ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "password", [], "any", false, false, false, 73), 'errors');
        yield "
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"mb-3\">
                <label class=\"form-label\">Rôle*</label>
                ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "role", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 83
        yield "
                ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "role", [], "any", false, false, false, 84), 'errors');
        yield "
            </div>
        </div>
    </div>

    ";
        // line 90
        yield "    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"mb-3\">
                <label class=\"form-label\">Date de naissance</label>
                ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 94), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 98
        yield "
                ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 99), 'errors');
        yield "
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"mb-3\">
                <label class=\"form-label\">Genre</label>
                <div class=\"d-flex gap-4\">
                    ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "genre", [], "any", false, false, false, 106));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 107
            yield "                        <div class=\"form-check\">
                            ";
            // line 108
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["class" => "form-check-input"]]);
            // line 112
            yield "
                            ";
            // line 113
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["label_attr" => ["class" => "form-check-label"]]);
            // line 117
            yield "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        yield "                </div>
                ";
        // line 121
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "genre", [], "any", false, false, false, 121), 'errors');
        yield "
            </div>
        </div>
    </div>

    ";
        // line 127
        yield "    <div class=\"mb-3\">
        <label class=\"form-label\">Photo de profil</label>
        ";
        // line 129
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 129, $this->source); })()), "image", [], "any", false, false, false, 129)) {
            // line 130
            yield "            <div class=\"mb-2\">
                <img src=\"";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 131, $this->source); })()), "image", [], "any", false, false, false, 131))), "html", null, true);
            yield "\" 
                     class=\"rounded-circle\"
                     width=\"100\" 
                     height=\"100\"
                     alt=\"Photo actuelle\">
                <p class=\"text-muted small mt-1\">Photo actuelle</p>
            </div>
        ";
        }
        // line 139
        yield "        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "image", [], "any", false, false, false, 139), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 143
        yield "
        <small class=\"text-muted\">Formats acceptés: JPG, PNG (max 2MB)</small>
        ";
        // line 145
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "image", [], "any", false, false, false, 145), 'errors');
        yield "
    </div>

    ";
        // line 149
        yield "    <div class=\"d-flex justify-content-between mt-4\">
        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"bx bx-save me-1\"></i> ";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 151, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
        </button>
        <div>
            <a href=\"";
        // line 154
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"btn btn-secondary me-2\">
                <i class=\"bx bx-arrow-back me-1\"></i> Annuler
            </a>
            ";
        // line 157
        if (array_key_exists("delete_form", $context)) {
            // line 158
            yield "                ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 158, $this->source); })()), 'form_start', ["attr" => ["class" => "d-inline"]]);
            yield "
                    <button class=\"btn btn-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur?')\">
                        <i class=\"bx bx-trash me-1\"></i> Supprimer
                    </button>
                ";
            // line 162
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new RuntimeError('Variable "delete_form" does not exist.', 162, $this->source); })()), 'form_end');
            yield "
            ";
        }
        // line 164
        yield "        </div>
    </div>
";
        // line 166
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user/_form.html.twig";
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
        return array (  279 => 166,  275 => 164,  270 => 162,  262 => 158,  260 => 157,  254 => 154,  248 => 151,  244 => 149,  238 => 145,  234 => 143,  231 => 139,  220 => 131,  217 => 130,  215 => 129,  211 => 127,  203 => 121,  200 => 120,  192 => 117,  190 => 113,  187 => 112,  185 => 108,  182 => 107,  178 => 106,  168 => 99,  165 => 98,  163 => 94,  157 => 90,  149 => 84,  146 => 83,  144 => 79,  135 => 73,  131 => 71,  129 => 65,  123 => 61,  115 => 55,  112 => 54,  110 => 49,  101 => 43,  98 => 42,  96 => 37,  90 => 33,  82 => 27,  79 => 26,  77 => 21,  68 => 15,  65 => 14,  63 => 9,  57 => 5,  52 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'id': 'userForm', 'novalidate': 'novalidate'}}) }}
    {{ form_errors(form) }}

    {# Section Informations de base #}
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"mb-3\">
                <label class=\"form-label\">Nom*</label>
                {{ form_widget(form.nom, {
                    'attr': {
                        'class': 'form-control',
                        'placeholder': 'Entrez le nom'
                    }
                }) }}
                {{ form_errors(form.nom) }}
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"mb-3\">
                <label class=\"form-label\">Prénom*</label>
                {{ form_widget(form.prenom, {
                    'attr': {
                        'class': 'form-control',
                        'placeholder': 'Entrez le prénom'
                    }
                }) }}
                {{ form_errors(form.prenom) }}
            </div>
        </div>
    </div>

    {# Section Contact #}
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"mb-3\">
                <label class=\"form-label\">Email*</label>
                {{ form_widget(form.email, {
                    'attr': {
                        'class': 'form-control',
                        'placeholder': 'email@exemple.com'
                    }
                }) }}
                {{ form_errors(form.email) }}
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"mb-3\">
                <label class=\"form-label\">Téléphone</label>
                {{ form_widget(form.num_telephone, {
                    'attr': {
                        'class': 'form-control',
                        'placeholder': '00 00 00 00 00'
                    }
                }) }}
                {{ form_errors(form.num_telephone) }}
            </div>
        </div>
    </div>

    {# Section Sécurité #}
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"mb-3\">
                <label class=\"form-label\">Mot de passe</label>
                {{ form_widget(form.password, {
                    'attr': {
                        'class': 'form-control',
                        'placeholder': 'Laisser vide pour ne pas modifier',
                        'autocomplete': 'new-password'
                    }
                }) }}
                <small class=\"text-muted\">Minimum 8 caractères</small>
                {{ form_errors(form.password) }}
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"mb-3\">
                <label class=\"form-label\">Rôle*</label>
                {{ form_widget(form.role, {
                    'attr': {
                        'class': 'form-select'
                    }
                }) }}
                {{ form_errors(form.role) }}
            </div>
        </div>
    </div>

    {# Section Informations supplémentaires #}
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"mb-3\">
                <label class=\"form-label\">Date de naissance</label>
                {{ form_widget(form.date_de_naissance, {
                    'attr': {
                        'class': 'form-control'
                    }
                }) }}
                {{ form_errors(form.date_de_naissance) }}
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"mb-3\">
                <label class=\"form-label\">Genre</label>
                <div class=\"d-flex gap-4\">
                    {% for child in form.genre %}
                        <div class=\"form-check\">
                            {{ form_widget(child, {
                                'attr': {
                                    'class': 'form-check-input'
                                }
                            }) }}
                            {{ form_label(child, null, {
                                'label_attr': {
                                    'class': 'form-check-label'
                                }
                            }) }}
                        </div>
                    {% endfor %}
                </div>
                {{ form_errors(form.genre) }}
            </div>
        </div>
    </div>

    {# Section Photo de profil #}
    <div class=\"mb-3\">
        <label class=\"form-label\">Photo de profil</label>
        {% if user.image %}
            <div class=\"mb-2\">
                <img src=\"{{ asset('uploads/users/' ~ user.image) }}\" 
                     class=\"rounded-circle\"
                     width=\"100\" 
                     height=\"100\"
                     alt=\"Photo actuelle\">
                <p class=\"text-muted small mt-1\">Photo actuelle</p>
            </div>
        {% endif %}
        {{ form_widget(form.image, {
            'attr': {
                'class': 'form-control'
            }
        }) }}
        <small class=\"text-muted\">Formats acceptés: JPG, PNG (max 2MB)</small>
        {{ form_errors(form.image) }}
    </div>

    {# Boutons de soumission #}
    <div class=\"d-flex justify-content-between mt-4\">
        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"bx bx-save me-1\"></i> {{ button_label|default('Enregistrer') }}
        </button>
        <div>
            <a href=\"{{ path('app_user_index') }}\" class=\"btn btn-secondary me-2\">
                <i class=\"bx bx-arrow-back me-1\"></i> Annuler
            </a>
            {% if delete_form is defined %}
                {{ form_start(delete_form, {'attr': {'class': 'd-inline'}}) }}
                    <button class=\"btn btn-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur?')\">
                        <i class=\"bx bx-trash me-1\"></i> Supprimer
                    </button>
                {{ form_end(delete_form) }}
            {% endif %}
        </div>
    </div>
{{ form_end(form) }}", "user/_form.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\user\\_form.html.twig");
    }
}
