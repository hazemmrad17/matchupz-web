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

/* user/login.html.twig */
class __TwigTemplate_daca021756f27fb1d10307e3b9c753fd extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "baseF.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $this->parent = $this->loadTemplate("baseF.html.twig", "user/login.html.twig", 1);
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

        yield "Login - MatchupZ";
        
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
        yield "<div class=\"container-fluid py-5\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-4 col-md-6 col-sm-8\">
                <div class=\"card p-4 shadow-sm\" style=\"max-width: 400px; margin: 0 auto;\">
                    <h2 class=\"text-center mb-4\">Login to MatchupZ</h2>

                    <!-- Flash messages -->
                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 15
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 16
                yield "                            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                                ";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "
                    <!-- Google login button -->
                    <div class=\"mb-3 text-center\">
                        <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connect_google");
        yield "\" class=\"btn btn-outline-primary w-100\">
                            <i class=\"bx bxl-google\"></i> Connexion avec Google
                        </a>
                    </div>

                    <hr>

                    <!-- Standard login form -->
                    <form id=\"formAuthentication\" action=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_verif_userF");
        yield "\" method=\"post\" novalidate>
                        <!-- Email -->
                        <div class=\"mb-3\">
                            <label for=\"username\" class=\"form-label\">Email</label>
                            <div class=\"input-group input-group-merge\">
                                <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                                <input
                                    type=\"text\"
                                    id=\"username\"
                                    name=\"_username\"
                                    class=\"form-control\"
                                    placeholder=\"Entrez votre email\"
                                    required
                                />
                            </div>
                        </div>

                        <!-- Face ID Button -->
                        <div class=\"mb-3 text-center\">
                            <button id=\"faceIdBtn\" type=\"button\" class=\"btn btn-outline-success w-100\">
                                <i class=\"bx bx-face\"></i> Se connecter avec Face ID
                            </button>
                        </div>

                        <!-- Password -->
                        <div class=\"mb-3 form-password-toggle\">
                            <label for=\"password\" class=\"form-label\">Mot de passe</label>
                            <div class=\"input-group input-group-merge\">
                                <span class=\"input-group-text\"><i class=\"bx bx-lock-alt\"></i></span>
                                <input
                                    type=\"password\"
                                    id=\"password\"
                                    name=\"_password\"
                                    class=\"form-control\"
                                    placeholder=\"············\"
                                    required
                                />
                                <span class=\"input-group-text cursor-pointer toggle-password\"><i class=\"bx bx-hide\"></i></span>
                            </div>
                        </div>

                        <!-- reCAPTCHA -->
                        <div class=\"mb-3\">
                            ";
        // line 76
        if ((array_key_exists("recaptcha_site_key", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 76, $this->source); })())))) {
            // line 77
            yield "                                <div class=\"g-recaptcha\" data-sitekey=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 77, $this->source); })()), "html", null, true);
            yield "\" data-callback=\"onRecaptchaSuccess\"></div>
                            ";
        } else {
            // line 79
            yield "                                <p style=\"color: red;\">Erreur : Clé de site reCAPTCHA non définie.</p>
                            ";
        }
        // line 81
        yield "                        </div>

                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

                        <div class=\"d-flex justify-content-between align-items-center mb-3\">
                            <button type=\"submit\" class=\"btn btn-primary\">Login</button>
                            <a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password");
        yield "\" class=\"text-muted small\">Forgot Password?</a>
                        </div>
                    </form>

                    <div class=\"text-center\">
                        <p class=\"small\">Don't have an account? <a href=\"";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registerF");
        yield "\">Register</a></p>
                    </div>

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

    // line 102
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 103
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/fonts/boxicons.css"), "html", null, true);
        yield "\" />
    <style>
        .g-recaptcha {
            display: block !important;
            margin-bottom: 15px;
            text-align: center;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 114
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

        // line 115
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- Core JS -->
    <script src=\"";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/popper/popper.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/bootstrap.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/js/menu.js"), "html", null, true);
        yield "\"></script>

    <!-- Main JS -->
    <script src=\"";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>

    <!-- reCAPTCHA Script -->
    <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>

    <!-- face-api.js library -->
    <script defer src=\"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/libs/face-api/face-api.min.js"), "html", null, true);
        yield "\"></script>

    <!-- Password Toggle Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const togglePassword = document.querySelector('.toggle-password');
            const passwordInput = document.getElementById('password');
            const icon = togglePassword ? togglePassword.querySelector('i') : null;

            if (togglePassword && passwordInput && icon) {
                togglePassword.addEventListener('click', function() {
                    const isPassword = passwordInput.getAttribute('type') === 'password';
                    passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
                    icon.classList.toggle('bx-hide');
                    icon.classList.toggle('bx-show');
                });
            }
        });

        function onRecaptchaSuccess(token) {
            console.log(\"reCAPTCHA vérifié avec succès. Jeton :\", token);
        }
    </script>

    <!-- Face ID Script -->
    <script>
        async function initFaceId() {
            console.log('Waiting for face-api.js...');

            // Wait until faceapi is available
            while (typeof faceapi === 'undefined') {
                console.log('face-api.js not loaded yet...');
                await new Promise(resolve => setTimeout(resolve, 100)); // wait 100ms
            }

            console.log('face-api.js ready.');

            const faceIdBtn = document.getElementById('faceIdBtn');
            if (!faceIdBtn) {
                console.error('Face ID button not found.');
                return;
            }

            faceIdBtn.addEventListener('click', async function() {
                const email = document.getElementById('username').value.trim();

                if (!email) {
                    alert('Veuillez entrer votre email avant d\\'utiliser Face ID.');
                    return;
                }

                await Promise.all([
                    faceapi.nets.tinyFaceDetector.loadFromUri('/models'),
                    faceapi.nets.faceRecognitionNet.loadFromUri('/models'),
                    faceapi.nets.faceLandmark68Net.loadFromUri('/models')
                ]);

                // Create video element to show the camera
                const video = document.createElement('video');
                video.setAttribute('autoplay', '');
                video.setAttribute('muted', '');
                video.setAttribute('playsinline', '');
                video.style.width = '320px';
                video.style.height = '240px';
                video.style.border = '2px solid #00f';
                video.style.borderRadius = '8px';
                video.style.display = 'block';
                video.style.margin = '20px auto';
                document.body.appendChild(video);

                try {
                    const stream = await navigator.mediaDevices.getUserMedia({ video: {} });
                    video.srcObject = stream;

                    video.addEventListener('loadeddata', async () => {
                        const detection = await faceapi.detectSingleFace(video, new faceapi.TinyFaceDetectorOptions()).withFaceLandmarks().withFaceDescriptor();

                        if (!detection) {
                            alert(\"❌ Aucun visage détecté, veuillez réessayer.\");
                            stream.getTracks().forEach(track => track.stop());
                            video.remove();
                            return;
                        }

                        console.log('Visage détecté ✅');

                        const userFaceDescriptor = detection.descriptor;

                        // Call Symfony to get stored user image and role
                        const formData = new FormData();
                        formData.append('email', email);

                        fetch('";
        // line 222
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_face_id_authenticate");
        yield "', {
                            method: 'POST',
                            body: formData
                        })
                        .then(response => response.json())
                        .then(async data => {
                            if (!data.success || !data.image) {
                                alert('Utilisateur non trouvé ou image manquante.');
                                stream.getTracks().forEach(track => track.stop());
                                video.remove();
                                return;
                            }

                            const referenceImage = await faceapi.bufferToImage(await fetch(`data:image/jpeg;base64,\${data.image}`).then(res => res.blob()));

                            const referenceDetection = await faceapi.detectSingleFace(referenceImage, new faceapi.TinyFaceDetectorOptions()).withFaceLandmarks().withFaceDescriptor();

                            if (!referenceDetection) {
                                alert('Erreur lors du chargement du visage enregistré.');
                                stream.getTracks().forEach(track => track.stop());
                                video.remove();
                                return;
                            }

                            const distance = faceapi.euclideanDistance(referenceDetection.descriptor, userFaceDescriptor);
                            console.log('Distance:', distance);

                            if (distance < 0.6) {
                                alert('✅ Visage reconnu.');

                                let redirectUrl;
                                if (data.role === 'ADMIN') {
                                    redirectUrl = '";
        // line 254
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "';
                                } else if (data.role === 'Utilisateur') {
                                    redirectUrl = '";
        // line 256
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_acceuil");
        yield "';
                                } else {
                                    alert(\"Role not recognized, redirecting to default page.\");
                                    redirectUrl = '";
        // line 259
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_acceuil");
        yield "'; // Default fallback
                                }
                                window.location.href = redirectUrl;
                            } else {
                                alert('❌ Authentification échouée : visage non reconnu.');
                            }
                        })
                        .catch(error => {
                            console.error('Erreur:', error);
                            alert('Erreur serveur.');
                        })
                        .finally(() => {
                            stream.getTracks().forEach(track => track.stop());
                            video.remove();
                        });
                    });
                } catch (error) {
                    console.error('Erreur caméra:', error);
                    alert('Impossible d\\'accéder à la caméra.');
                }
            });
        }

        window.addEventListener('load', initFaceId);
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
        return "user/login.html.twig";
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
        return array (  484 => 259,  478 => 256,  473 => 254,  438 => 222,  343 => 130,  334 => 124,  328 => 121,  324 => 120,  320 => 119,  316 => 118,  312 => 117,  306 => 115,  293 => 114,  273 => 104,  268 => 103,  255 => 102,  235 => 92,  227 => 87,  220 => 83,  216 => 81,  212 => 79,  206 => 77,  204 => 76,  158 => 33,  147 => 25,  142 => 22,  136 => 21,  126 => 17,  121 => 16,  116 => 15,  112 => 14,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseF.html.twig' %}

{% block title %}Login - MatchupZ{% endblock %}

{% block body %}
<div class=\"container-fluid py-5\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-4 col-md-6 col-sm-8\">
                <div class=\"card p-4 shadow-sm\" style=\"max-width: 400px; margin: 0 auto;\">
                    <h2 class=\"text-center mb-4\">Login to MatchupZ</h2>

                    <!-- Flash messages -->
                    {% for label, messages in app.flashes %}
                        {% for message in messages %}
                            <div class=\"alert alert-{{ label }} alert-dismissible fade show\" role=\"alert\">
                                {{ message }}
                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                            </div>
                        {% endfor %}
                    {% endfor %}

                    <!-- Google login button -->
                    <div class=\"mb-3 text-center\">
                        <a href=\"{{ path('connect_google') }}\" class=\"btn btn-outline-primary w-100\">
                            <i class=\"bx bxl-google\"></i> Connexion avec Google
                        </a>
                    </div>

                    <hr>

                    <!-- Standard login form -->
                    <form id=\"formAuthentication\" action=\"{{ path('app_verif_userF') }}\" method=\"post\" novalidate>
                        <!-- Email -->
                        <div class=\"mb-3\">
                            <label for=\"username\" class=\"form-label\">Email</label>
                            <div class=\"input-group input-group-merge\">
                                <span class=\"input-group-text\"><i class=\"bx bx-envelope\"></i></span>
                                <input
                                    type=\"text\"
                                    id=\"username\"
                                    name=\"_username\"
                                    class=\"form-control\"
                                    placeholder=\"Entrez votre email\"
                                    required
                                />
                            </div>
                        </div>

                        <!-- Face ID Button -->
                        <div class=\"mb-3 text-center\">
                            <button id=\"faceIdBtn\" type=\"button\" class=\"btn btn-outline-success w-100\">
                                <i class=\"bx bx-face\"></i> Se connecter avec Face ID
                            </button>
                        </div>

                        <!-- Password -->
                        <div class=\"mb-3 form-password-toggle\">
                            <label for=\"password\" class=\"form-label\">Mot de passe</label>
                            <div class=\"input-group input-group-merge\">
                                <span class=\"input-group-text\"><i class=\"bx bx-lock-alt\"></i></span>
                                <input
                                    type=\"password\"
                                    id=\"password\"
                                    name=\"_password\"
                                    class=\"form-control\"
                                    placeholder=\"············\"
                                    required
                                />
                                <span class=\"input-group-text cursor-pointer toggle-password\"><i class=\"bx bx-hide\"></i></span>
                            </div>
                        </div>

                        <!-- reCAPTCHA -->
                        <div class=\"mb-3\">
                            {% if recaptcha_site_key is defined and recaptcha_site_key is not empty %}
                                <div class=\"g-recaptcha\" data-sitekey=\"{{ recaptcha_site_key }}\" data-callback=\"onRecaptchaSuccess\"></div>
                            {% else %}
                                <p style=\"color: red;\">Erreur : Clé de site reCAPTCHA non définie.</p>
                            {% endif %}
                        </div>

                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                        <div class=\"d-flex justify-content-between align-items-center mb-3\">
                            <button type=\"submit\" class=\"btn btn-primary\">Login</button>
                            <a href=\"{{ path('app_forgot_password') }}\" class=\"text-muted small\">Forgot Password?</a>
                        </div>
                    </form>

                    <div class=\"text-center\">
                        <p class=\"small\">Don't have an account? <a href=\"{{ path('app_registerF') }}\">Register</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/fonts/boxicons.css') }}\" />
    <style>
        .g-recaptcha {
            display: block !important;
            margin-bottom: 15px;
            text-align: center;
        }
    </style>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <!-- Core JS -->
    <script src=\"{{ asset('assets/vendor/libs/jquery/jquery.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/libs/popper/popper.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/js/menu.js') }}\"></script>

    <!-- Main JS -->
    <script src=\"{{ asset('assets/js/main.js') }}\"></script>

    <!-- reCAPTCHA Script -->
    <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>

    <!-- face-api.js library -->
    <script defer src=\"{{ asset('assets/libs/face-api/face-api.min.js') }}\"></script>

    <!-- Password Toggle Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const togglePassword = document.querySelector('.toggle-password');
            const passwordInput = document.getElementById('password');
            const icon = togglePassword ? togglePassword.querySelector('i') : null;

            if (togglePassword && passwordInput && icon) {
                togglePassword.addEventListener('click', function() {
                    const isPassword = passwordInput.getAttribute('type') === 'password';
                    passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
                    icon.classList.toggle('bx-hide');
                    icon.classList.toggle('bx-show');
                });
            }
        });

        function onRecaptchaSuccess(token) {
            console.log(\"reCAPTCHA vérifié avec succès. Jeton :\", token);
        }
    </script>

    <!-- Face ID Script -->
    <script>
        async function initFaceId() {
            console.log('Waiting for face-api.js...');

            // Wait until faceapi is available
            while (typeof faceapi === 'undefined') {
                console.log('face-api.js not loaded yet...');
                await new Promise(resolve => setTimeout(resolve, 100)); // wait 100ms
            }

            console.log('face-api.js ready.');

            const faceIdBtn = document.getElementById('faceIdBtn');
            if (!faceIdBtn) {
                console.error('Face ID button not found.');
                return;
            }

            faceIdBtn.addEventListener('click', async function() {
                const email = document.getElementById('username').value.trim();

                if (!email) {
                    alert('Veuillez entrer votre email avant d\\'utiliser Face ID.');
                    return;
                }

                await Promise.all([
                    faceapi.nets.tinyFaceDetector.loadFromUri('/models'),
                    faceapi.nets.faceRecognitionNet.loadFromUri('/models'),
                    faceapi.nets.faceLandmark68Net.loadFromUri('/models')
                ]);

                // Create video element to show the camera
                const video = document.createElement('video');
                video.setAttribute('autoplay', '');
                video.setAttribute('muted', '');
                video.setAttribute('playsinline', '');
                video.style.width = '320px';
                video.style.height = '240px';
                video.style.border = '2px solid #00f';
                video.style.borderRadius = '8px';
                video.style.display = 'block';
                video.style.margin = '20px auto';
                document.body.appendChild(video);

                try {
                    const stream = await navigator.mediaDevices.getUserMedia({ video: {} });
                    video.srcObject = stream;

                    video.addEventListener('loadeddata', async () => {
                        const detection = await faceapi.detectSingleFace(video, new faceapi.TinyFaceDetectorOptions()).withFaceLandmarks().withFaceDescriptor();

                        if (!detection) {
                            alert(\"❌ Aucun visage détecté, veuillez réessayer.\");
                            stream.getTracks().forEach(track => track.stop());
                            video.remove();
                            return;
                        }

                        console.log('Visage détecté ✅');

                        const userFaceDescriptor = detection.descriptor;

                        // Call Symfony to get stored user image and role
                        const formData = new FormData();
                        formData.append('email', email);

                        fetch('{{ path('app_face_id_authenticate') }}', {
                            method: 'POST',
                            body: formData
                        })
                        .then(response => response.json())
                        .then(async data => {
                            if (!data.success || !data.image) {
                                alert('Utilisateur non trouvé ou image manquante.');
                                stream.getTracks().forEach(track => track.stop());
                                video.remove();
                                return;
                            }

                            const referenceImage = await faceapi.bufferToImage(await fetch(`data:image/jpeg;base64,\${data.image}`).then(res => res.blob()));

                            const referenceDetection = await faceapi.detectSingleFace(referenceImage, new faceapi.TinyFaceDetectorOptions()).withFaceLandmarks().withFaceDescriptor();

                            if (!referenceDetection) {
                                alert('Erreur lors du chargement du visage enregistré.');
                                stream.getTracks().forEach(track => track.stop());
                                video.remove();
                                return;
                            }

                            const distance = faceapi.euclideanDistance(referenceDetection.descriptor, userFaceDescriptor);
                            console.log('Distance:', distance);

                            if (distance < 0.6) {
                                alert('✅ Visage reconnu.');

                                let redirectUrl;
                                if (data.role === 'ADMIN') {
                                    redirectUrl = '{{ path('app_user_index') }}';
                                } else if (data.role === 'Utilisateur') {
                                    redirectUrl = '{{ path('app_acceuil') }}';
                                } else {
                                    alert(\"Role not recognized, redirecting to default page.\");
                                    redirectUrl = '{{ path('app_acceuil') }}'; // Default fallback
                                }
                                window.location.href = redirectUrl;
                            } else {
                                alert('❌ Authentification échouée : visage non reconnu.');
                            }
                        })
                        .catch(error => {
                            console.error('Erreur:', error);
                            alert('Erreur serveur.');
                        })
                        .finally(() => {
                            stream.getTracks().forEach(track => track.stop());
                            video.remove();
                        });
                    });
                } catch (error) {
                    console.error('Erreur caméra:', error);
                    alert('Impossible d\\'accéder à la caméra.');
                }
            });
        }

        window.addEventListener('load', initFaceId);
    </script>
{% endblock %}
", "user/login.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\user\\login.html.twig");
    }
}
