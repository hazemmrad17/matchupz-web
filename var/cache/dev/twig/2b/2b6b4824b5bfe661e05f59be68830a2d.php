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

/* contrat/export_pdf.html.twig */
class __TwigTemplate_dd1e2041a4ea86b3c6db057dc98b6c2a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/export_pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contrat/export_pdf.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Contrats Export - MatchupZ</title>
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "request", [], "any", false, false, false, 106), "server", [], "any", false, false, false, 106), "get", ["DOCUMENT_ROOT"], "method", false, false, false, 106) . "/img/logo_white.png")), "html", null, true);
        yield "\" alt=\"MatchupZ Logo\">
        <h1>Contrats Export</h1>
        <div class=\"subtitle\">Generated on ";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y H:i"), "html", null, true);
        yield "</div>
    </div>
    <div class=\"content\">
        <h2>Liste des Contrats</h2>
        <table>
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Date Debut</th>
                    <th>Date fin</th>
                    <th>Montant</th>
                    <th>Sponsor</th>
                    <th>Signature</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 124, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["contrat"]) {
            // line 125
            yield "                    <tr>
                        <td>";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "titre", [], "any", false, false, false, 126), "html", null, true);
            yield "</td>
                        <td>";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "DateDebut", [], "any", false, false, false, 127), "Y-m-d"), "html", null, true);
            yield "</td>
                        <td>";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "DateFin", [], "any", false, false, false, 128), "Y-m-d"), "html", null, true);
            yield "</td>
                        <td>";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Montant", [], "any", false, false, false, 129), "html", null, true);
            yield "</td>
                        <td>";
            // line 130
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Sponsor", [], "any", false, false, false, 130)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Sponsor", [], "any", false, false, false, 130), "nom", [], "any", false, false, false, 130), "html", null, true)) : ("N/A"));
            yield "</td>
                        <td>
                            ";
            // line 132
            if (CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Signature", [], "any", false, false, false, 132)) {
                // line 133
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Signature", [], "any", false, false, false, 133)), "html", null, true);
                yield "\" alt=\"Signature\" style=\"max-width: 100px; max-height: 50px;\" />
                            ";
            } else {
                // line 135
                yield "                                    No Signature
                            ";
            }
            // line 137
            yield "                            </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 139
        if (!$context['_iterated']) {
            // line 140
            yield "                    <tr>
                        <td colspan=\"3\" style=\"text-align: center; color: #555;\">Aucun sponsor trouvé</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['contrat'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        yield "            </tbody>
        </table>
    </div>
    <div class=\"footer\">
        <p>MatchupZ © ";
        // line 148
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
        return "contrat/export_pdf.html.twig";
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
        return array (  243 => 148,  237 => 144,  228 => 140,  226 => 139,  220 => 137,  216 => 135,  210 => 133,  208 => 132,  203 => 130,  199 => 129,  195 => 128,  191 => 127,  187 => 126,  184 => 125,  179 => 124,  160 => 108,  155 => 106,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Contrats Export - MatchupZ</title>
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
        <img src=\"file:///{{ (app.request.server.get('DOCUMENT_ROOT') ~ '/img/logo_white.png')|url_encode }}\" alt=\"MatchupZ Logo\">
        <h1>Contrats Export</h1>
        <div class=\"subtitle\">Generated on {{ \"now\"|date(\"d/m/Y H:i\") }}</div>
    </div>
    <div class=\"content\">
        <h2>Liste des Contrats</h2>
        <table>
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Date Debut</th>
                    <th>Date fin</th>
                    <th>Montant</th>
                    <th>Sponsor</th>
                    <th>Signature</th>
                </tr>
            </thead>
            <tbody>
                {% for contrat in contrats %}
                    <tr>
                        <td>{{ contrat.titre }}</td>
                        <td>{{ contrat.DateDebut|date('Y-m-d') }}</td>
                        <td>{{ contrat.DateFin|date('Y-m-d') }}</td>
                        <td>{{ contrat.Montant }}</td>
                        <td>{{ contrat.Sponsor ? contrat.Sponsor.nom : 'N/A' }}</td>
                        <td>
                            {% if contrat.Signature %}
                                <img src=\"{{ asset(contrat.Signature) }}\" alt=\"Signature\" style=\"max-width: 100px; max-height: 50px;\" />
                            {% else %}
                                    No Signature
                            {% endif %}
                            </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"3\" style=\"text-align: center; color: #555;\">Aucun sponsor trouvé</td>
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
</html>", "contrat/export_pdf.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-integration\\matchupz-web-integration\\templates\\contrat\\export_pdf.html.twig");
    }
}
