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

/* espace/export_pdf.html.twig */
class __TwigTemplate_218d878baf0ea19e2f32faa6203b7670 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace/export_pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace/export_pdf.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Espaces Sportifs Export - MatchupZ</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }
        body {
            background-color: #f8f8f8;
            color: #1a1a1a;
            padding: 20px;
            line-height: 1.6;
        }
        .header {
            background-color: #0f3849;
            padding: 20px;
            border-radius: 10px 10px 0 0;
            text-align: center;
            color: #ffffff;
            box-shadow: 0 4px 8px rgba(5, 27, 53, 0.4);
        }
        .header h1 {
            font-size: 36px;
            margin-bottom: 10px;
            text-transform: uppercase;
        }
        .header img {
            width: 160px;
            height: auto;
            vertical-align: middle;
            margin-bottom: 10px;
        }
        .header .subtitle {
            font-size: 18px;
            color: #dcdcdc;
        }
        .content {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 0 0 10px 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: -10px;
        }
        h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 15px;
            border-bottom: 2px solid #aaa;
            display: inline-block;
            padding-bottom: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 13px;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #3a3a3a;
            color: #f0f0f0;
            font-weight: bold;
            text-transform: uppercase;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e0e0e0;
            transition: background-color 0.3s ease-in-out;
        }
        .footer {
            margin-top: 20px;
            padding: 15px;
            background-color: #0f3849;
            color: #ccc;
            text-align: center;
            font-size: 12px;
            border-radius: 10px;
            box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.1);
        }
        .footer a {
            color: #e0e0e0;
            text-decoration: none;
        }
        .footer a:hover {
            color: #ffffff;
        }
        @page {
            size: A4 landscape;
            margin: 20mm;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <img src=\"file:///";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode((isset($context["logo_path"]) || array_key_exists("logo_path", $context) ? $context["logo_path"] : (function () { throw new RuntimeError('Variable "logo_path" does not exist.', 106, $this->source); })())), "html", null, true);
        yield "\" alt=\"MatchupZ Logo\">
        <h1>Espaces Sportifs Export</h1>
        <div class=\"subtitle\">Generated on ";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y H:i"), "html", null, true);
        yield "</div>
    </div>
    <div class=\"content\">
        <h2>Liste des Espaces Sportifs</h2>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Adresse</th>
                    <th>Catégorie</th>
                    <th>Capacité</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["espaces"]) || array_key_exists("espaces", $context) ? $context["espaces"] : (function () { throw new RuntimeError('Variable "espaces" does not exist.', 122, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["espace"]) {
            // line 123
            yield "                    <tr>
                        <td>";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "nom_espace", [], "any", false, false, false, 124), "html", null, true);
            yield "</td>
                        <td>";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "adresse", [], "any", false, false, false, 125), "html", null, true);
            yield "</td>
                        <td>";
            // line 126
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "categorie", [], "any", true, true, false, 126) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "categorie", [], "any", false, false, false, 126)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "categorie", [], "any", false, false, false, 126), "html", null, true)) : ("N/A"));
            yield "</td>
                        <td>";
            // line 127
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "capacite", [], "any", true, true, false, 127) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "capacite", [], "any", false, false, false, 127)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "capacite", [], "any", false, false, false, 127), "html", null, true)) : ("N/A"));
            yield "</td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 129
        if (!$context['_iterated']) {
            // line 130
            yield "                    <tr>
                        <td colspan=\"4\" style=\"text-align: center; color: #555;\">Aucun espace sportif trouvé</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['espace'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        yield "            </tbody>
        </table>
    </div>
    <div class=\"footer\">
        <p>MatchupZ © ";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " | Contact: <a href=\"mailto:support@matchupz.com\">support@matchupz.com</a></p>
        <p>Powered by <span style=\"color: #eab700;\">xAI Technology</span></p>
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
        return "espace/export_pdf.html.twig";
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
        return array (  221 => 138,  215 => 134,  206 => 130,  204 => 129,  197 => 127,  193 => 126,  189 => 125,  185 => 124,  182 => 123,  177 => 122,  160 => 108,  155 => 106,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Espaces Sportifs Export - MatchupZ</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }
        body {
            background-color: #f8f8f8;
            color: #1a1a1a;
            padding: 20px;
            line-height: 1.6;
        }
        .header {
            background-color: #0f3849;
            padding: 20px;
            border-radius: 10px 10px 0 0;
            text-align: center;
            color: #ffffff;
            box-shadow: 0 4px 8px rgba(5, 27, 53, 0.4);
        }
        .header h1 {
            font-size: 36px;
            margin-bottom: 10px;
            text-transform: uppercase;
        }
        .header img {
            width: 160px;
            height: auto;
            vertical-align: middle;
            margin-bottom: 10px;
        }
        .header .subtitle {
            font-size: 18px;
            color: #dcdcdc;
        }
        .content {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 0 0 10px 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: -10px;
        }
        h2 {
            color: #333;
            font-size: 24px;
            margin-bottom: 15px;
            border-bottom: 2px solid #aaa;
            display: inline-block;
            padding-bottom: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 13px;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #3a3a3a;
            color: #f0f0f0;
            font-weight: bold;
            text-transform: uppercase;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e0e0e0;
            transition: background-color 0.3s ease-in-out;
        }
        .footer {
            margin-top: 20px;
            padding: 15px;
            background-color: #0f3849;
            color: #ccc;
            text-align: center;
            font-size: 12px;
            border-radius: 10px;
            box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.1);
        }
        .footer a {
            color: #e0e0e0;
            text-decoration: none;
        }
        .footer a:hover {
            color: #ffffff;
        }
        @page {
            size: A4 landscape;
            margin: 20mm;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <img src=\"file:///{{ logo_path|url_encode }}\" alt=\"MatchupZ Logo\">
        <h1>Espaces Sportifs Export</h1>
        <div class=\"subtitle\">Generated on {{ \"now\"|date(\"d/m/Y H:i\") }}</div>
    </div>
    <div class=\"content\">
        <h2>Liste des Espaces Sportifs</h2>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Adresse</th>
                    <th>Catégorie</th>
                    <th>Capacité</th>
                </tr>
            </thead>
            <tbody>
                {% for espace in espaces %}
                    <tr>
                        <td>{{ espace.nom_espace }}</td>
                        <td>{{ espace.adresse }}</td>
                        <td>{{ espace.categorie ?? 'N/A' }}</td>
                        <td>{{ espace.capacite ?? 'N/A' }}</td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"4\" style=\"text-align: center; color: #555;\">Aucun espace sportif trouvé</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
    <div class=\"footer\">
        <p>MatchupZ © {{ \"now\"|date(\"Y\") }} | Contact: <a href=\"mailto:support@matchupz.com\">support@matchupz.com</a></p>
        <p>Powered by <span style=\"color: #eab700;\">xAI Technology</span></p>
    </div>
</body>
</html>", "espace/export_pdf.html.twig", "C:\\Users\\MSI\\Desktop\\matchupz-web-0\\templates\\espace\\export_pdf.html.twig");
    }
}
