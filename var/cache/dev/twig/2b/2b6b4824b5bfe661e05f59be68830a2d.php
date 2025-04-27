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
    <title>Contrat Export - MatchupZ</title>
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
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            width: 200px;
            height: auto;
            margin-bottom: 10px;
        }
        .header h1 {
            font-size: 28px;
            font-weight: bold;
            color: #0f3849;
            margin-bottom: 10px;
        }
        .content {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .contract-details {
            margin-bottom: 20px;
        }
        .contract-details p {
            font-size: 16px;
            margin-bottom: 10px;
        }
        .contract-details strong {
            color: #0f3849;
        }
        .contract-details .article {
            margin-top: 20px;
            white-space: pre-wrap; /* Preserve line breaks */
        }
        .signature {
            text-align: right;
            margin-top: 40px;
        }
        .signature img {
            max-width: 150px;
            max-height: 75px;
        }
        .signature p {
            font-size: 14px;
            color: #555;
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
            background-color: #0f3849;
            color: #ffffff;
            font-weight: bold;
            text-transform: uppercase;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .footer {
            margin-top: 20px;
            padding: 15px;
            background-color: #0f3849;
            color: #ccc;
            text-align: center;
            font-size: 12px;
            border-radius: 10px;
        }
        .footer a {
            color: #e0e0e0;
            text-decoration: none;
        }
        .footer a:hover {
            color: #ffffff;
        }
        @page {
            size: A4 portrait;
            margin: 20mm;
        }
    </style>
</head>
<body>
    ";
        // line 109
        if ((isset($context["is_single"]) || array_key_exists("is_single", $context) ? $context["is_single"] : (function () { throw new RuntimeError('Variable "is_single" does not exist.', 109, $this->source); })())) {
            // line 110
            yield "        ";
            // line 111
            yield "        ";
            $context["contrat"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 111, $this->source); })()), 0, [], "array", false, false, false, 111);
            // line 112
            yield "        <div class=\"header\">
            <img src=\"file:///";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode((isset($context["logo_path"]) || array_key_exists("logo_path", $context) ? $context["logo_path"] : (function () { throw new RuntimeError('Variable "logo_path" does not exist.', 113, $this->source); })())), "html", null, true);
            yield "\" alt=\"MatchupZ Logo\">
            <h1>";
            // line 114
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 114, $this->source); })()), "titre", [], "any", false, false, false, 114), "html", null, true);
            yield "</h1>
        </div>
        <div class=\"content\">
            <div class=\"contract-details\">
                <p><strong>Contrat du sponsor :</strong> ";
            // line 118
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 118, $this->source); })()), "Sponsor", [], "any", false, false, false, 118)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 118, $this->source); })()), "Sponsor", [], "any", false, false, false, 118), "nom", [], "any", false, false, false, 118), "html", null, true)) : ("N/A"));
            yield "</p>
                <p><strong>De :</strong> ";
            // line 119
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 119, $this->source); })()), "DateDebut", [], "any", false, false, false, 119)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 119, $this->source); })()), "DateDebut", [], "any", false, false, false, 119), "d/m/Y"), "html", null, true)) : ("N/A"));
            yield "</p>
                <p><strong>Jusqu'à :</strong> ";
            // line 120
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 120, $this->source); })()), "DateFin", [], "any", false, false, false, 120)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 120, $this->source); })()), "DateFin", [], "any", false, false, false, 120), "d/m/Y"), "html", null, true)) : ("N/A"));
            yield "</p>
                <p><strong>Montant du contrat :</strong> ";
            // line 121
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 121, $this->source); })()), "Montant", [], "any", false, false, false, 121)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 121, $this->source); })()), "Montant", [], "any", false, false, false, 121), 2, ",", " ") . " TND"), "html", null, true)) : ("N/A"));
            yield "</p>
                <p class=\"article\"><strong>Articles :</strong><br>";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["contrat"] ?? null), "article", [], "any", true, true, false, 122)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 122, $this->source); })()), "article", [], "any", false, false, false, 122), "N/A")) : ("N/A")), "html", null, true);
            yield "</p>
            </div>
            <div class=\"signature\">
                ";
            // line 125
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 125, $this->source); })()), "Signature", [], "any", false, false, false, 125) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 125, $this->source); })()), "Signature", [], "any", false, false, false, 125) != "signatures/signature_contrat_1741119108385.png"))) {
                // line 126
                yield "                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 126, $this->source); })()), "request", [], "any", false, false, false, 126), "server", [], "any", false, false, false, 126), "get", ["DOCUMENT_ROOT"], "method", false, false, false, 126) . "/") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 126, $this->source); })()), "Signature", [], "any", false, false, false, 126))), "html", null, true);
                yield "\" alt=\"Signature\">
                ";
            } else {
                // line 128
                yield "                    <p>Aucune signature</p>
                ";
            }
            // line 130
            yield "            </div>
        </div>
    ";
        } else {
            // line 133
            yield "        ";
            // line 134
            yield "        <div class=\"header\">
            <img src=\"file:///";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode((isset($context["logo_path"]) || array_key_exists("logo_path", $context) ? $context["logo_path"] : (function () { throw new RuntimeError('Variable "logo_path" does not exist.', 135, $this->source); })())), "html", null, true);
            yield "\" alt=\"MatchupZ Logo\">
            <h1>Contrats Export</h1>
            <div class=\"subtitle\">Generated on ";
            // line 137
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
                        <th>Article</th>
                        <th>Signature</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["contrats"]) || array_key_exists("contrats", $context) ? $context["contrats"] : (function () { throw new RuntimeError('Variable "contrats" does not exist.', 154, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["contrat"]) {
                // line 155
                yield "                        <tr>
                            <td>";
                // line 156
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "titre", [], "any", false, false, false, 156), "html", null, true);
                yield "</td>
                            <td>";
                // line 157
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "DateDebut", [], "any", false, false, false, 157), "Y-m-d"), "html", null, true);
                yield "</td>
                            <td>";
                // line 158
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "DateFin", [], "any", false, false, false, 158), "Y-m-d"), "html", null, true);
                yield "</td>
                            <td>";
                // line 159
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Montant", [], "any", false, false, false, 159), "html", null, true);
                yield "</td>
                            <td>";
                // line 160
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Sponsor", [], "any", false, false, false, 160)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Sponsor", [], "any", false, false, false, 160), "nom", [], "any", false, false, false, 160), "html", null, true)) : ("N/A"));
                yield "</td>
                            <td>";
                // line 161
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "article", [], "any", false, false, false, 161), 0, 100) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "article", [], "any", false, false, false, 161)) > 100)) ? ("...") : (""))), "html", null, true);
                yield "</td>
                            <td>
                                ";
                // line 163
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Signature", [], "any", false, false, false, 163) && (CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Signature", [], "any", false, false, false, 163) != "signatures/signature_contrat_1741119108385.png"))) {
                    // line 164
                    yield "                                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 164, $this->source); })()), "request", [], "any", false, false, false, 164), "server", [], "any", false, false, false, 164), "get", ["DOCUMENT_ROOT"], "method", false, false, false, 164) . "/") . CoreExtension::getAttribute($this->env, $this->source, $context["contrat"], "Signature", [], "any", false, false, false, 164))), "html", null, true);
                    yield "\" alt=\"Signature\" style=\"max-width: 100px; max-height: 50px;\" />
                                ";
                } else {
                    // line 166
                    yield "                                    No Signature
                                ";
                }
                // line 168
                yield "                            </td>
                        </tr>
                    ";
                $context['_iterated'] = true;
            }
            // line 170
            if (!$context['_iterated']) {
                // line 171
                yield "                        <tr>
                            <td colspan=\"7\" style=\"text-align: center; color: #555;\">Aucun contrat trouvé</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['contrat'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            yield "                </tbody>
            </table>
        </div>
    ";
        }
        // line 179
        yield "    <div class=\"footer\">
        <p>MatchupZ © ";
        // line 180
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
        return array (  319 => 180,  316 => 179,  310 => 175,  301 => 171,  299 => 170,  293 => 168,  289 => 166,  283 => 164,  281 => 163,  276 => 161,  272 => 160,  268 => 159,  264 => 158,  260 => 157,  256 => 156,  253 => 155,  248 => 154,  228 => 137,  223 => 135,  220 => 134,  218 => 133,  213 => 130,  209 => 128,  203 => 126,  201 => 125,  195 => 122,  191 => 121,  187 => 120,  183 => 119,  179 => 118,  172 => 114,  168 => 113,  165 => 112,  162 => 111,  160 => 110,  158 => 109,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Contrat Export - MatchupZ</title>
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
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            width: 200px;
            height: auto;
            margin-bottom: 10px;
        }
        .header h1 {
            font-size: 28px;
            font-weight: bold;
            color: #0f3849;
            margin-bottom: 10px;
        }
        .content {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .contract-details {
            margin-bottom: 20px;
        }
        .contract-details p {
            font-size: 16px;
            margin-bottom: 10px;
        }
        .contract-details strong {
            color: #0f3849;
        }
        .contract-details .article {
            margin-top: 20px;
            white-space: pre-wrap; /* Preserve line breaks */
        }
        .signature {
            text-align: right;
            margin-top: 40px;
        }
        .signature img {
            max-width: 150px;
            max-height: 75px;
        }
        .signature p {
            font-size: 14px;
            color: #555;
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
            background-color: #0f3849;
            color: #ffffff;
            font-weight: bold;
            text-transform: uppercase;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .footer {
            margin-top: 20px;
            padding: 15px;
            background-color: #0f3849;
            color: #ccc;
            text-align: center;
            font-size: 12px;
            border-radius: 10px;
        }
        .footer a {
            color: #e0e0e0;
            text-decoration: none;
        }
        .footer a:hover {
            color: #ffffff;
        }
        @page {
            size: A4 portrait;
            margin: 20mm;
        }
    </style>
</head>
<body>
    {% if is_single %}
        {# Single Contract Layout #}
        {% set contrat = contrats[0] %}
        <div class=\"header\">
            <img src=\"file:///{{ logo_path|url_encode }}\" alt=\"MatchupZ Logo\">
            <h1>{{ contrat.titre }}</h1>
        </div>
        <div class=\"content\">
            <div class=\"contract-details\">
                <p><strong>Contrat du sponsor :</strong> {{ contrat.Sponsor ? contrat.Sponsor.nom : 'N/A' }}</p>
                <p><strong>De :</strong> {{ contrat.DateDebut ? contrat.DateDebut|date('d/m/Y') : 'N/A' }}</p>
                <p><strong>Jusqu'à :</strong> {{ contrat.DateFin ? contrat.DateFin|date('d/m/Y') : 'N/A' }}</p>
                <p><strong>Montant du contrat :</strong> {{ contrat.Montant ? contrat.Montant|number_format(2, ',', ' ') ~ ' TND' : 'N/A' }}</p>
                <p class=\"article\"><strong>Articles :</strong><br>{{ contrat.article|default('N/A') }}</p>
            </div>
            <div class=\"signature\">
                {% if contrat.Signature and contrat.Signature != 'signatures/signature_contrat_1741119108385.png' %}
                    <img src=\"{{ (app.request.server.get('DOCUMENT_ROOT') ~ '/' ~ contrat.Signature)|url_encode }}\" alt=\"Signature\">
                {% else %}
                    <p>Aucune signature</p>
                {% endif %}
            </div>
        </div>
    {% else %}
        {# Bulk Contracts Layout #}
        <div class=\"header\">
            <img src=\"file:///{{ logo_path|url_encode }}\" alt=\"MatchupZ Logo\">
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
                        <th>Article</th>
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
                            <td>{{ contrat.article|slice(0, 100) ~ (contrat.article|length > 100 ? '...' : '') }}</td>
                            <td>
                                {% if contrat.Signature and contrat.Signature != 'signatures/signature_contrat_1741119108385.png' %}
                                    <img src=\"{{ (app.request.server.get('DOCUMENT_ROOT') ~ '/' ~ contrat.Signature)|url_encode }}\" alt=\"Signature\" style=\"max-width: 100px; max-height: 50px;\" />
                                {% else %}
                                    No Signature
                                {% endif %}
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"7\" style=\"text-align: center; color: #555;\">Aucun contrat trouvé</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    {% endif %}
    <div class=\"footer\">
        <p>MatchupZ © {{ \"now\"|date(\"Y\") }} | Contact: <a href=\"mailto:support@matchupz.com\">support@matchupz.com</a></p>
        <p>Powered by <span style=\"color: #eab700;\">xAI Technology</span></p>
    </div>
</body>
</html>", "contrat/export_pdf.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-integration\\matchupz-web-integration\\templates\\contrat\\export_pdf.html.twig");
    }
}
