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
           ";
        // line 106
        if ((isset($context["logo_data"]) || array_key_exists("logo_data", $context) ? $context["logo_data"] : (function () { throw new RuntimeError('Variable "logo_data" does not exist.', 106, $this->source); })())) {
            // line 107
            yield "               <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["logo_data"]) || array_key_exists("logo_data", $context) ? $context["logo_data"] : (function () { throw new RuntimeError('Variable "logo_data" does not exist.', 107, $this->source); })()), "html", null, true);
            yield "\" alt=\"MatchupZ Logo\">
           ";
        }
        // line 109
        yield "           <h1>Espaces Sportifs Export</h1>
           <div class=\"subtitle\">Generated on ";
        // line 110
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
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["espaces"]) || array_key_exists("espaces", $context) ? $context["espaces"] : (function () { throw new RuntimeError('Variable "espaces" does not exist.', 124, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["espace"]) {
            // line 125
            yield "                       <tr>
                           <td>";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "nomEspace", [], "any", false, false, false, 126), "html", null, true);
            yield "</td>
                           <td>";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "adresse", [], "any", false, false, false, 127), "html", null, true);
            yield "</td>
                           <td>";
            // line 128
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "categorie", [], "any", true, true, false, 128) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "categorie", [], "any", false, false, false, 128)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "categorie", [], "any", false, false, false, 128), "html", null, true)) : ("N/A"));
            yield "</td>
                           <td>";
            // line 129
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "capacite", [], "any", true, true, false, 129) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "capacite", [], "any", false, false, false, 129)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["espace"], "capacite", [], "any", false, false, false, 129), "html", null, true)) : ("N/A"));
            yield "</td>
                       </tr>
                   ";
            $context['_iterated'] = true;
        }
        // line 131
        if (!$context['_iterated']) {
            // line 132
            yield "                       <tr>
                           <td colspan=\"4\" style=\"text-align: center; color: #555;\">Aucun espace sportif trouvé</td>
                       </tr>
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['espace'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        yield "               </tbody>
           </table>
       </div>
       <div class=\"footer\">
           <p>MatchupZ © ";
        // line 140
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
        return array (  227 => 140,  221 => 136,  212 => 132,  210 => 131,  203 => 129,  199 => 128,  195 => 127,  191 => 126,  188 => 125,  183 => 124,  166 => 110,  163 => 109,  157 => 107,  155 => 106,  48 => 1,);
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
           {% if logo_data %}
               <img src=\"{{ logo_data }}\" alt=\"MatchupZ Logo\">
           {% endif %}
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
                           <td>{{ espace.nomEspace }}</td>
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
   </html>", "espace/export_pdf.html.twig", "C:\\Users\\Ismail\\Desktop\\matchupz\\templates\\espace\\export_pdf.html.twig");
    }
}
