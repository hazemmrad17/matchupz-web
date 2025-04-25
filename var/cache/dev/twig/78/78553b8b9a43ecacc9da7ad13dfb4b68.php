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
class __TwigTemplate_916d1f9cf902390c40d11f6bbab0a113 extends Template
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

        yield "Edit Club";
        
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
                <span class=\"text-muted fw-light\">Clubs /</span> Edit Club
            </h4>

            <div class=\"col-md-12\">
                <ul class=\"nav nav-pills flex-column flex-md-row mb-3\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" href=\"javascript:void(0);\"><i class=\"bx bx-building me-1\"></i> Club Details</a>
                    </li>
                </ul>

                <div class=\"card mb-4\">
                    <h5 class=\"card-header\">Update Club</h5>
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
                                alt=\"Club Avatar\"
                                class=\"d-block rounded\"
                                height=\"100\"
                                width=\"100\"
                                id=\"uploadedAvatar\"
                            />
                            <div class=\"button-wrapper\">
                                <label for=\"club_photoUrl\" class=\"btn btn-primary me-2 mb-4\" tabindex=\"0\">
                                    <span class=\"d-none d-sm-block\">Upload new photo</span>
                                    <i class=\"bx bx-upload d-block d-sm-none\"></i>
                                </label>
                                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "photoUrl", [], "any", false, false, false, 44), 'widget', ["attr" => ["id" => "club_photoUrl", "class" => "account-file-input", "style" => "display: none;", "accept" => "image/png, image/jpeg"]]);
        // line 51
        yield "
                                <button type=\"button\" class=\"btn btn-outline-secondary account-image-reset mb-4\">
                                    <i class=\"bx bx-reset d-block d-sm-none\"></i>
                                    <span class=\"d-none d-sm-block\">Reset</span>
                                </button>
                                <p class=\"text-muted mb-0\">Allowed JPG or PNG. Max size of 800K</p>
                            </div>
                        </div>
                    </div>
                    <hr class=\"my-0\" />
                    <div class=\"card-body\">
                        <div class=\"row\">
                            ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "children", [], "any", false, false, false, 63));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 64
            yield "                                ";
            if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 64), "name", [], "any", false, false, false, 64) != "submit") && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 64), "name", [], "any", false, false, false, 64) != "_token")) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 64), "name", [], "any", false, false, false, 64) != "photoUrl"))) {
                // line 65
                yield "                                    <div class=\"mb-3 col-md-6\">
                                        ";
                // line 66
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label');
                yield "
                                        ";
                // line 67
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["class" => "form-control"]]);
                yield "
                                    </div>
                                ";
            }
            // line 70
            yield "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        yield "                            ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "_token", [], "any", false, false, false, 71), 'widget');
        yield "
                        </div>
                        <div class=\"mt-2\">
                            <button type=\"submit\" class=\"btn btn-primary me-2\">Update</button>
                            <a href=\"";
        // line 75
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("club_index");
        yield "\" class=\"btn btn-outline-secondary\">Cancel</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
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
                console.log('Form submitted');
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
        return array (  191 => 75,  183 => 71,  177 => 70,  171 => 67,  167 => 66,  164 => 65,  161 => 64,  157 => 63,  143 => 51,  141 => 44,  126 => 32,  120 => 28,  118 => 23,  117 => 21,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit Club{% endblock %}

{% block content %}
    <div class=\"content-wrapper\">
        <div class=\"container-xxl flex-grow-1 container-p-y\">
            <h4 class=\"fw-bold py-3 mb-4\">
                <span class=\"text-muted fw-light\">Clubs /</span> Edit Club
            </h4>

            <div class=\"col-md-12\">
                <ul class=\"nav nav-pills flex-column flex-md-row mb-3\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" href=\"javascript:void(0);\"><i class=\"bx bx-building me-1\"></i> Club Details</a>
                    </li>
                </ul>

                <div class=\"card mb-4\">
                    <h5 class=\"card-header\">Update Club</h5>
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
                                alt=\"Club Avatar\"
                                class=\"d-block rounded\"
                                height=\"100\"
                                width=\"100\"
                                id=\"uploadedAvatar\"
                            />
                            <div class=\"button-wrapper\">
                                <label for=\"club_photoUrl\" class=\"btn btn-primary me-2 mb-4\" tabindex=\"0\">
                                    <span class=\"d-none d-sm-block\">Upload new photo</span>
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
                                <button type=\"button\" class=\"btn btn-outline-secondary account-image-reset mb-4\">
                                    <i class=\"bx bx-reset d-block d-sm-none\"></i>
                                    <span class=\"d-none d-sm-block\">Reset</span>
                                </button>
                                <p class=\"text-muted mb-0\">Allowed JPG or PNG. Max size of 800K</p>
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
                                    </div>
                                {% endif %}
                            {% endfor %}
                            {{ form_widget(form._token) }}
                        </div>
                        <div class=\"mt-2\">
                            <button type=\"submit\" class=\"btn btn-primary me-2\">Update</button>
                            <a href=\"{{ path('club_index') }}\" class=\"btn btn-outline-secondary\">Cancel</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
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
                console.log('Form submitted');
            });
        });
    </script>
{% endblock %}
", "club/edit.html.twig", "C:\\Users\\ibtis\\Downloads\\matchupz-web-joueur\\matchupz-web-joueur\\templates\\club\\edit.html.twig");
    }
}
