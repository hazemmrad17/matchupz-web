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

/* front_base.html.twig */
class __TwigTemplate_814e406ad57ebd44b86129fd44378843 extends Template
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
            'title' => [$this, 'block_title'],
            'subtitle' => [$this, 'block_subtitle'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"description\" content=\"Footballism - Offline Browser Experience\" />
    <meta name=\"keywords\" content=\"footballism, offline browser, web mirror, httrack\" />
    <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <style type=\"text/css\">
        body {
            margin: 0; padding: 0; margin-bottom: 15px; margin-top: 8px;
            background: #77b;
        }
        body, td {
            font: 14px \"Trebuchet MS\", Verdana, Arial, Helvetica, sans-serif;
        }
        #subTitle {
            background: #000; color: #fff; padding: 4px; font-weight: bold;
        }
        #siteNavigation a, #siteNavigation .current {
            font-weight: bold; color: #448;
        }
        #siteNavigation a:link { text-decoration: none; }
        #siteNavigation a:visited { text-decoration: none; }
        #siteNavigation .current { background-color: #ccd; }
        #siteNavigation a:hover { text-decoration: none; background-color: #fff; color: #000; }
        #siteNavigation a:active { text-decoration: none; background-color: #ccc; }
        a:link { text-decoration: underline; color: #00f; }
        a:visited { text-decoration: underline; color: #000; }
        a:hover { text-decoration: underline; color: #c00; }
        a:active { text-decoration: underline; }
        #pageContent {
            clear: both;
            border-bottom: 6px solid #000;
            padding: 10px; padding-top: 20px;
            line-height: 1.65em;
            background-image: url(";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("backblue.gif"), "html", null, true);
        yield ");
            background-repeat: no-repeat;
            background-position: top right;
        }
        #pageContent, #siteNavigation {
            background-color: #ccd;
        }
        .imgLeft { float: left; margin-right: 10px; margin-bottom: 10px; }
        .imgRight { float: right; margin-left: 10px; margin-bottom: 10px; }
        hr { height: 1px; color: #000; background-color: #000; margin-bottom: 15px; }
        h1 { margin: 0; font-weight: bold; font-size: 2em; }
        h2 { margin: 0; font-weight: bold; font-size: 1.6em; }
        h3 { margin: 0; font-weight: bold; font-size: 1.3em; }
        h4 { margin: 0; font-weight: bold; font-size: 1.18em; }
        .blak { background-color: #000; }
        .hide { display: none; }
        .tableWidth { min-width: 400px; }
        .tblRegular { border-collapse: collapse; }
        .tblRegular td { padding: 6px; background-image: url(";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fade.gif"), "html", null, true);
        yield "); border: 2px solid #99c; }
        .tblHeaderColor, .tblHeaderColor td { background: #99c; }
        .tblNoBorder td { border: 0; }
    </style>
</head>

<body>
    <table width=\"76%\" border=\"0\" align=\"center\" cellspacing=\"0\" cellpadding=\"3\" class=\"tableWidth\">
        <tr>
            <td id=\"subTitle\">";
        // line 63
        yield from $this->unwrap()->yieldBlock('subtitle', $context, $blocks);
        yield "</td>
        </tr>
    </table>
    <table width=\"76%\" border=\"0\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\" class=\"tableWidth\">
        <tr class=\"blak\">
            <td>
                <table width=\"100%\" border=\"0\" align=\"center\" cellspacing=\"1\" cellpadding=\"0\">
                    <tr>
                        <td>
                            <table width=\"100%\" border=\"0\" align=\"center\" cellspacing=\"0\" cellpadding=\"10\">
                                <tr>
                                    <td id=\"pageContent\">
                                        ";
        // line 75
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 76
        yield "                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table width=\"76%\" border=\"0\" align=\"center\" valign=\"bottom\" cellspacing=\"0\" cellpadding=\"0\">
        <tr>
            <td id=\"footer\"><small>&copy; 2025 Footballism - Powered by HTTrack</small></td>
        </tr>
    </table>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
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

        yield "Footballism";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_subtitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subtitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subtitle"));

        yield "Footballism";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 75
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "front_base.html.twig";
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
        return array (  213 => 75,  190 => 63,  167 => 7,  141 => 76,  139 => 75,  124 => 63,  112 => 54,  91 => 36,  59 => 7,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"description\" content=\"Footballism - Offline Browser Experience\" />
    <meta name=\"keywords\" content=\"footballism, offline browser, web mirror, httrack\" />
    <title>{% block title %}Footballism{% endblock %}</title>
    <style type=\"text/css\">
        body {
            margin: 0; padding: 0; margin-bottom: 15px; margin-top: 8px;
            background: #77b;
        }
        body, td {
            font: 14px \"Trebuchet MS\", Verdana, Arial, Helvetica, sans-serif;
        }
        #subTitle {
            background: #000; color: #fff; padding: 4px; font-weight: bold;
        }
        #siteNavigation a, #siteNavigation .current {
            font-weight: bold; color: #448;
        }
        #siteNavigation a:link { text-decoration: none; }
        #siteNavigation a:visited { text-decoration: none; }
        #siteNavigation .current { background-color: #ccd; }
        #siteNavigation a:hover { text-decoration: none; background-color: #fff; color: #000; }
        #siteNavigation a:active { text-decoration: none; background-color: #ccc; }
        a:link { text-decoration: underline; color: #00f; }
        a:visited { text-decoration: underline; color: #000; }
        a:hover { text-decoration: underline; color: #c00; }
        a:active { text-decoration: underline; }
        #pageContent {
            clear: both;
            border-bottom: 6px solid #000;
            padding: 10px; padding-top: 20px;
            line-height: 1.65em;
            background-image: url({{ asset('backblue.gif') }});
            background-repeat: no-repeat;
            background-position: top right;
        }
        #pageContent, #siteNavigation {
            background-color: #ccd;
        }
        .imgLeft { float: left; margin-right: 10px; margin-bottom: 10px; }
        .imgRight { float: right; margin-left: 10px; margin-bottom: 10px; }
        hr { height: 1px; color: #000; background-color: #000; margin-bottom: 15px; }
        h1 { margin: 0; font-weight: bold; font-size: 2em; }
        h2 { margin: 0; font-weight: bold; font-size: 1.6em; }
        h3 { margin: 0; font-weight: bold; font-size: 1.3em; }
        h4 { margin: 0; font-weight: bold; font-size: 1.18em; }
        .blak { background-color: #000; }
        .hide { display: none; }
        .tableWidth { min-width: 400px; }
        .tblRegular { border-collapse: collapse; }
        .tblRegular td { padding: 6px; background-image: url({{ asset('fade.gif') }}); border: 2px solid #99c; }
        .tblHeaderColor, .tblHeaderColor td { background: #99c; }
        .tblNoBorder td { border: 0; }
    </style>
</head>

<body>
    <table width=\"76%\" border=\"0\" align=\"center\" cellspacing=\"0\" cellpadding=\"3\" class=\"tableWidth\">
        <tr>
            <td id=\"subTitle\">{% block subtitle %}Footballism{% endblock %}</td>
        </tr>
    </table>
    <table width=\"76%\" border=\"0\" align=\"center\" cellspacing=\"0\" cellpadding=\"0\" class=\"tableWidth\">
        <tr class=\"blak\">
            <td>
                <table width=\"100%\" border=\"0\" align=\"center\" cellspacing=\"1\" cellpadding=\"0\">
                    <tr>
                        <td>
                            <table width=\"100%\" border=\"0\" align=\"center\" cellspacing=\"0\" cellpadding=\"10\">
                                <tr>
                                    <td id=\"pageContent\">
                                        {% block body %}{% endblock %}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table width=\"76%\" border=\"0\" align=\"center\" valign=\"bottom\" cellspacing=\"0\" cellpadding=\"0\">
        <tr>
            <td id=\"footer\"><small>&copy; 2025 Footballism - Powered by HTTrack</small></td>
        </tr>
    </table>
</body>
</html>", "front_base.html.twig", "C:\\Users\\Hazem Mrad\\Desktop\\integration\\New folder - Copy\\New folder\\matchupz-web-0\\templates\\front_base.html.twig");
    }
}
