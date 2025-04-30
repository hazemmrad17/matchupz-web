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

/* user/password_reset.html.twig */
class __TwigTemplate_279b6560c35595e37b352a5d06f80c7b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/password_reset.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/password_reset.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .header {
            padding-bottom: 20px;
        }
        .header h1 {
            color: #333333;
            font-size: 24px;
            margin: 0;
        }
        .content {
            font-size: 16px;
            color: #333333;
            line-height: 1.5;
            text-align: left;
        }
        .code {
            font-size: 24px;
            font-weight: bold;
            color: #007bff;
            text-align: center;
            margin: 20px 0;
            background-color: #f8f9fa;
            padding: 10px;
            border-radius: 4px;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #ffffff;
            background-color: #007bff;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 20px;
        }
        .footer {
            font-size: 12px;
            color: #777777;
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"header\">
            <h1>Bienvenue chez Matchupz !</h1>
        </div>
        <div class=\"content\">
            <p>Bonjour ";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["userName"]) || array_key_exists("userName", $context) ? $context["userName"] : (function () { throw new RuntimeError('Variable "userName" does not exist.', 69, $this->source); })()), "html", null, true);
        yield ",</p>
            <p>Nous sommes ravis de vous accueillir dans la communauté Matchupz ! Vous avez demandé à réinitialiser votre mot de passe. Voici votre code pour confirmer votre identité :</p>
            <div class=\"code\">";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["resetCode"]) || array_key_exists("resetCode", $context) ? $context["resetCode"] : (function () { throw new RuntimeError('Variable "resetCode" does not exist.', 71, $this->source); })()), "html", null, true);
        yield "</div>
            <p>Entrez ce code sur la page de réinitialisation pour définir un nouveau mot de passe. Si vous n'avez pas initié cette demande, vous pouvez ignorer cet email en toute sécurité.</p>
            <p>Merci de faire partie de Matchupz !</p>
            <a href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_reset_password");
        yield "\" class=\"button\">Réinitialiser mon mot de passe</a>
        </div>
        <div class=\"footer\">
            <p>© ";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Matchupz. Tous droits réservés.</p>
        </div>
    </div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "user/password_reset.html.twig";
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
        return array (  135 => 77,  129 => 74,  123 => 71,  118 => 69,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .header {
            padding-bottom: 20px;
        }
        .header h1 {
            color: #333333;
            font-size: 24px;
            margin: 0;
        }
        .content {
            font-size: 16px;
            color: #333333;
            line-height: 1.5;
            text-align: left;
        }
        .code {
            font-size: 24px;
            font-weight: bold;
            color: #007bff;
            text-align: center;
            margin: 20px 0;
            background-color: #f8f9fa;
            padding: 10px;
            border-radius: 4px;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #ffffff;
            background-color: #007bff;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 20px;
        }
        .footer {
            font-size: 12px;
            color: #777777;
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"header\">
            <h1>Bienvenue chez Matchupz !</h1>
        </div>
        <div class=\"content\">
            <p>Bonjour {{ userName }},</p>
            <p>Nous sommes ravis de vous accueillir dans la communauté Matchupz ! Vous avez demandé à réinitialiser votre mot de passe. Voici votre code pour confirmer votre identité :</p>
            <div class=\"code\">{{ resetCode }}</div>
            <p>Entrez ce code sur la page de réinitialisation pour définir un nouveau mot de passe. Si vous n'avez pas initié cette demande, vous pouvez ignorer cet email en toute sécurité.</p>
            <p>Merci de faire partie de Matchupz !</p>
            <a href=\"{{ url('app_reset_password') }}\" class=\"button\">Réinitialiser mon mot de passe</a>
        </div>
        <div class=\"footer\">
            <p>© {{ \"now\"|date(\"Y\") }} Matchupz. Tous droits réservés.</p>
        </div>
    </div>
</body>
</html>", "user/password_reset.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\user\\password_reset.html.twig");
    }
}
