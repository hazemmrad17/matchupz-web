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

/* sponsor/gemini.html.twig */
class __TwigTemplate_216a97e24c0406dd91b4a16593843276 extends Template
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
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "baseM.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sponsor/gemini.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sponsor/gemini.html.twig"));

        $this->parent = $this->loadTemplate("baseM.html.twig", "sponsor/gemini.html.twig", 1);
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

        yield "Gemini Chat";
        
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
        yield "<style>
    .chat-header {
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                    url(\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/chat-bg.jpg"), "html", null, true);
        yield "\");
        background-size: cover;
        background-position: center;
        padding: 6rem 0;
        color: white;
        text-align: center;
    }

    .chat-title {
        font-size: 2.2rem;
        font-weight: bold;
        text-align: center;
        margin-bottom: 3rem;
        font-family: 'Georgia', serif;
        color: #333;
        position: relative;
    }

    .chat-title::after {
        content: '';
        width: 60px;
        height: 4px;
        background-color: #007bff;
        display: block;
        margin: 0.5rem auto 0;
        border-radius: 2px;
    }

    .chat-card {
        border-radius: 15px;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        padding: 1.5rem;
        height: 100%;
        overflow: hidden;
        position: relative;
        z-index: 2;
    }

    .chat-card:hover {
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    .chat-area {
        height: 400px;
        overflow-y: auto;
        border: 1px solid #ccc;
        border-radius: 10px;
        padding: 1rem;
        background-color: #f7f7f7;
        margin-bottom: 1.5rem;
    }

    .chat-area::-webkit-scrollbar {
        width: 8px;
    }

    .chat-area::-webkit-scrollbar-thumb {
        background-color: #888;
        border-radius: 4px;
    }

    .message {
        margin-bottom: 1rem;
        padding: 0.75rem;
        border-radius: 10px;
        font-size: 0.9rem;
    }

    .user-message {
        background-color: #DCF8C6;
        margin-left: 10%;
    }

    .gemini-message {
        background-color: #E0E0E0;
        margin-right: 10%;
    }

    .form-control {
        font-size: 0.9rem;
        padding: 8px;
        border-radius: 8px;
    }

    .btn-primary {
        width: 100%;
        padding: 10px;
        font-size: 0.9rem;
        border-radius: 8px;
    }

    .input-group {
        margin-top: 1rem;
    }
</style>

<div class=\"container-fluid bg-breadcrumb\">
    <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
        <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Gemini Chat</h4>
        <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
            <li class=\"breadcrumb-item active\">Gemini Chat</li>
        </ol>    
    </div>
</div>

<div class=\"container py-5\">
    <h2 class=\"chat-title wow fadeInUp\" data-wow-delay=\"0.2s\">Posez vos questions sur Matchupz</h2>
    <div class=\"row\">
        <div class=\"col-12 wow fadeInUp\" data-wow-delay=\"0.4s\">
            <div class=\"chat-card\">
                <div id=\"chat-area\" class=\"chat-area\">
                    ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["chat_history"]) || array_key_exists("chat_history", $context) ? $context["chat_history"] : (function () { throw new RuntimeError('Variable "chat_history" does not exist.', 122, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 123
            yield "                        <div class=\"message ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 123) == "Moi")) ? ("user-message") : ("gemini-message"));
            yield "\">
                            <strong>";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "sender", [], "any", false, false, false, 124), "html", null, true);
            yield ":</strong> ";
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 124), "html", null, true));
            yield "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        yield "                </div>
                <form id=\"chat-form\" class=\"mt-3\">
                    <div class=\"input-group\">
                        <textarea id=\"user-input\" name=\"message\" class=\"form-control\" rows=\"2\" placeholder=\"Posez votre question sur Matchupz...\" required></textarea>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary mt-2\">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js\"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Initialize WOW.js for animations
        new WOW().init();

        document.getElementById('chat-form').addEventListener('submit', async (e) => {
            e.preventDefault();
            const userInput = document.getElementById('user-input').value;
            if (!userInput.trim()) return;

            // Add user message to chat area
            const chatArea = document.getElementById('chat-area');
            const userMessage = document.createElement('div');
            userMessage.className = 'message user-message';
            userMessage.innerHTML = `<strong>Moi:</strong> \${userInput.replace(/\\n/g, '<br>')}`;
            chatArea.appendChild(userMessage);

            // Clear input
            document.getElementById('user-input').value = '';

            try {
                const response = await fetch('";
        // line 161
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gemini_chat_ask");
        yield "', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-Token': '";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("gemini_chat"), "html", null, true);
        yield "'
                    },
                    body: JSON.stringify({ message: userInput })
                });

                if (!response.ok) {
                    throw new Error(`HTTP error! Status: \${response.status}`);
                }

                const data = await response.json();
                const geminiMessage = document.createElement('div');
                geminiMessage.className = 'message gemini-message';
                geminiMessage.innerHTML = `<strong>Gemini:</strong> \${data.response.replace(/\\n/g, '<br>')}`;
                chatArea.appendChild(geminiMessage);

                // Scroll to bottom
                chatArea.scrollTop = chatArea.scrollHeight;
            } catch (error) {
                console.error('Error:', error);
                const errorMessage = document.createElement('div');
                errorMessage.className = 'message gemini-message';
                errorMessage.innerHTML = `<strong>Gemini:</strong> Erreur lors de la communication avec l'API : \${error.message}`;
                chatArea.appendChild(errorMessage);
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
        return "sponsor/gemini.html.twig";
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
        return array (  287 => 165,  280 => 161,  244 => 127,  233 => 124,  228 => 123,  224 => 122,  209 => 110,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseM.html.twig' %}

{% block title %}Gemini Chat{% endblock %}

{% block body %}
<style>
    .chat-header {
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                    url(\"{{ asset('assets/img/chat-bg.jpg') }}\");
        background-size: cover;
        background-position: center;
        padding: 6rem 0;
        color: white;
        text-align: center;
    }

    .chat-title {
        font-size: 2.2rem;
        font-weight: bold;
        text-align: center;
        margin-bottom: 3rem;
        font-family: 'Georgia', serif;
        color: #333;
        position: relative;
    }

    .chat-title::after {
        content: '';
        width: 60px;
        height: 4px;
        background-color: #007bff;
        display: block;
        margin: 0.5rem auto 0;
        border-radius: 2px;
    }

    .chat-card {
        border-radius: 15px;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        padding: 1.5rem;
        height: 100%;
        overflow: hidden;
        position: relative;
        z-index: 2;
    }

    .chat-card:hover {
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    .chat-area {
        height: 400px;
        overflow-y: auto;
        border: 1px solid #ccc;
        border-radius: 10px;
        padding: 1rem;
        background-color: #f7f7f7;
        margin-bottom: 1.5rem;
    }

    .chat-area::-webkit-scrollbar {
        width: 8px;
    }

    .chat-area::-webkit-scrollbar-thumb {
        background-color: #888;
        border-radius: 4px;
    }

    .message {
        margin-bottom: 1rem;
        padding: 0.75rem;
        border-radius: 10px;
        font-size: 0.9rem;
    }

    .user-message {
        background-color: #DCF8C6;
        margin-left: 10%;
    }

    .gemini-message {
        background-color: #E0E0E0;
        margin-right: 10%;
    }

    .form-control {
        font-size: 0.9rem;
        padding: 8px;
        border-radius: 8px;
    }

    .btn-primary {
        width: 100%;
        padding: 10px;
        font-size: 0.9rem;
        border-radius: 8px;
    }

    .input-group {
        margin-top: 1rem;
    }
</style>

<div class=\"container-fluid bg-breadcrumb\">
    <div class=\"container text-center py-5\" style=\"max-width: 900px;\">
        <h4 class=\"text-white display-4 mb-4 wow fadeInDown\" data-wow-delay=\"0.1s\">Gemini Chat</h4>
        <ol class=\"breadcrumb d-flex justify-content-center mb-0 wow fadeInDown\" data-wow-delay=\"0.3s\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\">Accueil</a></li>
            <li class=\"breadcrumb-item active\">Gemini Chat</li>
        </ol>    
    </div>
</div>

<div class=\"container py-5\">
    <h2 class=\"chat-title wow fadeInUp\" data-wow-delay=\"0.2s\">Posez vos questions sur Matchupz</h2>
    <div class=\"row\">
        <div class=\"col-12 wow fadeInUp\" data-wow-delay=\"0.4s\">
            <div class=\"chat-card\">
                <div id=\"chat-area\" class=\"chat-area\">
                    {% for message in chat_history %}
                        <div class=\"message {{ message.sender == 'Moi' ? 'user-message' : 'gemini-message' }}\">
                            <strong>{{ message.sender }}:</strong> {{ message.message|nl2br }}
                        </div>
                    {% endfor %}
                </div>
                <form id=\"chat-form\" class=\"mt-3\">
                    <div class=\"input-group\">
                        <textarea id=\"user-input\" name=\"message\" class=\"form-control\" rows=\"2\" placeholder=\"Posez votre question sur Matchupz...\" required></textarea>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary mt-2\">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js\"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Initialize WOW.js for animations
        new WOW().init();

        document.getElementById('chat-form').addEventListener('submit', async (e) => {
            e.preventDefault();
            const userInput = document.getElementById('user-input').value;
            if (!userInput.trim()) return;

            // Add user message to chat area
            const chatArea = document.getElementById('chat-area');
            const userMessage = document.createElement('div');
            userMessage.className = 'message user-message';
            userMessage.innerHTML = `<strong>Moi:</strong> \${userInput.replace(/\\n/g, '<br>')}`;
            chatArea.appendChild(userMessage);

            // Clear input
            document.getElementById('user-input').value = '';

            try {
                const response = await fetch('{{ path('gemini_chat_ask') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-Token': '{{ csrf_token('gemini_chat') }}'
                    },
                    body: JSON.stringify({ message: userInput })
                });

                if (!response.ok) {
                    throw new Error(`HTTP error! Status: \${response.status}`);
                }

                const data = await response.json();
                const geminiMessage = document.createElement('div');
                geminiMessage.className = 'message gemini-message';
                geminiMessage.innerHTML = `<strong>Gemini:</strong> \${data.response.replace(/\\n/g, '<br>')}`;
                chatArea.appendChild(geminiMessage);

                // Scroll to bottom
                chatArea.scrollTop = chatArea.scrollHeight;
            } catch (error) {
                console.error('Error:', error);
                const errorMessage = document.createElement('div');
                errorMessage.className = 'message gemini-message';
                errorMessage.innerHTML = `<strong>Gemini:</strong> Erreur lors de la communication avec l'API : \${error.message}`;
                chatArea.appendChild(errorMessage);
            }
        });
    });
</script>
{% endblock %}", "sponsor/gemini.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-integration\\matchupz-web-integration\\templates\\sponsor\\gemini.html.twig");
    }
}
