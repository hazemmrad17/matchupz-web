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

/* schedule/export_pdf.html.twig */
class __TwigTemplate_db539b5e6728d9725a018a3d20fc5b40 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "schedule/export_pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "schedule/export_pdf.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Schedules Export - MatchupZ</title>
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
        tr.ongoing {
            background-color: #e6ffed;
        }
        tr.past {
            background-color: #ffe6e6;
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
        <img src=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo_white.png")), "html", null, true);
        yield "\" alt=\"MatchupZ Logo\">
        <h1>Schedules Export</h1>
        <div class=\"subtitle\">Generated on ";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y H:i"), "html", null, true);
        yield "</div>
    </div>
    <div class=\"content\">
        <h2>Liste des Plannings</h2>
        <table>
            <thead>
                <tr>
                    <th>Date du Match</th>
                    <th>Heure de Début</th>
                    <th>Heure de Fin</th>
                    <th>Match</th>
                    <th>Lieu Sportif</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["schedules"]) || array_key_exists("schedules", $context) ? $context["schedules"] : (function () { throw new RuntimeError('Variable "schedules" does not exist.', 129, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["schedule"]) {
            // line 130
            yield "                    ";
            $context["now"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "U");
            // line 131
            yield "                    ";
            $context["dateMatch"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "dateMatch", [], "any", false, false, false, 131), "U");
            // line 132
            yield "                    ";
            $context["startTime"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "dateMatch", [], "any", false, false, false, 132), $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "startTime", [], "any", false, false, false, 132), "H:i:s")), "U");
            // line 133
            yield "                    ";
            $context["endTime"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "dateMatch", [], "any", false, false, false, 133), $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "endTime", [], "any", false, false, false, 133), "H:i:s")), "U");
            // line 134
            yield "                    ";
            $context["isOngoing"] = (((isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 134, $this->source); })()) >= (isset($context["startTime"]) || array_key_exists("startTime", $context) ? $context["startTime"] : (function () { throw new RuntimeError('Variable "startTime" does not exist.', 134, $this->source); })())) && ((isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 134, $this->source); })()) <= (isset($context["endTime"]) || array_key_exists("endTime", $context) ? $context["endTime"] : (function () { throw new RuntimeError('Variable "endTime" does not exist.', 134, $this->source); })())));
            // line 135
            yield "                    ";
            $context["isPast"] = (((isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 135, $this->source); })()) > (isset($context["endTime"]) || array_key_exists("endTime", $context) ? $context["endTime"] : (function () { throw new RuntimeError('Variable "endTime" does not exist.', 135, $this->source); })())) || ((isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 135, $this->source); })()) > (isset($context["dateMatch"]) || array_key_exists("dateMatch", $context) ? $context["dateMatch"] : (function () { throw new RuntimeError('Variable "dateMatch" does not exist.', 135, $this->source); })())));
            // line 136
            yield "
                    <tr class=\"";
            // line 137
            if ((isset($context["isOngoing"]) || array_key_exists("isOngoing", $context) ? $context["isOngoing"] : (function () { throw new RuntimeError('Variable "isOngoing" does not exist.', 137, $this->source); })())) {
                yield "ongoing";
            } elseif ((isset($context["isPast"]) || array_key_exists("isPast", $context) ? $context["isPast"] : (function () { throw new RuntimeError('Variable "isPast" does not exist.', 137, $this->source); })())) {
                yield "past";
            }
            yield "\">
                        <td>";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "dateMatch", [], "any", false, false, false, 138), "d/m/Y"), "html", null, true);
            yield "</td>
                        <td>";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "startTime", [], "any", false, false, false, 139), "H:i"), "html", null, true);
            yield "</td>
                        <td>";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "endTime", [], "any", false, false, false, 140), "H:i"), "html", null, true);
            yield "</td>
                        <td>";
            // line 141
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 141)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 141), "c1", [], "any", false, false, false, 141) . " vs ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "matchEntity", [], "any", false, false, false, 141), "c2", [], "any", false, false, false, 141)), "html", null, true)) : ("N/A"));
            yield "</td>
                        <td>";
            // line 142
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "espaceSportif", [], "any", false, false, false, 142)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["schedule"], "espaceSportif", [], "any", false, false, false, 142), "nom_espace", [], "any", false, false, false, 142), "html", null, true)) : ("N/A"));
            yield "</td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 144
        if (!$context['_iterated']) {
            // line 145
            yield "                    <tr>
                        <td colspan=\"5\" style=\"text-align: center; color: #555;\">Aucun schedule trouvé</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['schedule'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        yield "            </tbody>
        </table>
    </div>
    <div class=\"footer\">
        <p>MatchupZ © ";
        // line 153
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
        return "schedule/export_pdf.html.twig";
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
        return array (  258 => 153,  252 => 149,  243 => 145,  241 => 144,  234 => 142,  230 => 141,  226 => 140,  222 => 139,  218 => 138,  210 => 137,  207 => 136,  204 => 135,  201 => 134,  198 => 133,  195 => 132,  192 => 131,  189 => 130,  184 => 129,  166 => 114,  161 => 112,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Schedules Export - MatchupZ</title>
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
        tr.ongoing {
            background-color: #e6ffed;
        }
        tr.past {
            background-color: #ffe6e6;
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
        <img src=\"{{ absolute_url(asset('img/logo_white.png')) }}\" alt=\"MatchupZ Logo\">
        <h1>Schedules Export</h1>
        <div class=\"subtitle\">Generated on {{ \"now\"|date(\"d/m/Y H:i\") }}</div>
    </div>
    <div class=\"content\">
        <h2>Liste des Plannings</h2>
        <table>
            <thead>
                <tr>
                    <th>Date du Match</th>
                    <th>Heure de Début</th>
                    <th>Heure de Fin</th>
                    <th>Match</th>
                    <th>Lieu Sportif</th>
                </tr>
            </thead>
            <tbody>
                {% for schedule in schedules %}
                    {% set now = \"now\"|date(\"U\") %}
                    {% set dateMatch = schedule.dateMatch|date(\"U\") %}
                    {% set startTime = schedule.dateMatch|date_modify(schedule.startTime|date(\"H:i:s\"))|date(\"U\") %}
                    {% set endTime = schedule.dateMatch|date_modify(schedule.endTime|date(\"H:i:s\"))|date(\"U\") %}
                    {% set isOngoing = (now >= startTime and now <= endTime) %}
                    {% set isPast = (now > endTime or now > dateMatch) %}

                    <tr class=\"{% if isOngoing %}ongoing{% elseif isPast %}past{% endif %}\">
                        <td>{{ schedule.dateMatch|date('d/m/Y') }}</td>
                        <td>{{ schedule.startTime|date('H:i') }}</td>
                        <td>{{ schedule.endTime|date('H:i') }}</td>
                        <td>{{ schedule.matchEntity ? schedule.matchEntity.c1 ~ ' vs ' ~ schedule.matchEntity.c2 : 'N/A' }}</td>
                        <td>{{ schedule.espaceSportif ? schedule.espaceSportif.nom_espace : 'N/A' }}</td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"5\" style=\"text-align: center; color: #555;\">Aucun schedule trouvé</td>
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
</html>", "schedule/export_pdf.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\schedule\\export_pdf.html.twig");
    }
}
