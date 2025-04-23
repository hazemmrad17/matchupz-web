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

/* user/index.html.twig */
class __TwigTemplate_9ea602cf37bcfd599740eb1776e3715e extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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

        yield "Liste des Utilisateurs";
        
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
        yield "    <div class=\"container py-4\">
        <div class=\"row\">
            ";
        // line 9
        yield "            <div class=\"col-md-8 mb-4\">
                <div class=\"card\">
                    <div class=\"d-flex align-items-end row\">
                        <div class=\"col-sm-7\">
                            <div class=\"card-body\">
                                <h3 class=\"card-title text-primary\">Aperçu des Utilisateurs 👥</h3>
                                <p class=\"mb-4\">
                                    Vous avez <span class=\"fw-bold\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 16, $this->source); })()), "total", [], "any", false, false, false, 16), "html", null, true);
        yield "</span> utilisateurs enregistrés dans le système.
                                </p>
                                <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        yield "\" class=\"btn btn-sm btn-outline-primary\">
                                    <i class=\"fas fa-plus\"></i> Ajouter un Utilisateur
                                </a>
                                <a href=\"#users-list\" class=\"btn btn-sm btn-primary ms-2\">Voir la liste</a>
                            </div>
                        </div>
                        <div class=\"col-sm-5 text-center text-sm-left\">
                            <div class=\"card-body pb-0 px-0 px-md-4\">
                                <img
                                    src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/illustrations/team-light.png"), "html", null, true);
        yield "\"
                                    height=\"170\"
                                    alt=\"\"
                                    data-app-dark-img=\"illustrations/team-dark.png\"
                                    data-app-light-img=\"illustrations/team-light.png\"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 40
        yield "            <div class=\"col-md-4 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body text-center\">
                        <h5 class=\"card-title\">Statistiques par Genre</h5>
                        <div class=\"d-flex justify-content-center my-3\">
                            <div class=\"text-center mx-2\">
                                <div class=\"fs-4 fw-bold\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 46, $this->source); })()), "percentMen", [], "any", false, false, false, 46), "html", null, true);
        yield "%</div>
                                <small>Hommes</small>
                            </div>
                            <div class=\"text-center mx-2\">
                                <div class=\"fs-4 fw-bold\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 50, $this->source); })()), "percentWomen", [], "any", false, false, false, 50), "html", null, true);
        yield "%</div>
                                <small>Femmes</small>
                            </div>
                        </div>
                        <div class=\"progress\" style=\"height: 10px;\">
                            <div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 55, $this->source); })()), "percentMen", [], "any", false, false, false, 55), "html", null, true);
        yield "%\" 
                                 aria-valuenow=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 56, $this->source); })()), "percentMen", [], "any", false, false, false, 56), "html", null, true);
        yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                            <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: ";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 57, $this->source); })()), "percentWomen", [], "any", false, false, false, 57), "html", null, true);
        yield "%\" 
                                 aria-valuenow=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 58, $this->source); })()), "percentWomen", [], "any", false, false, false, 58), "html", null, true);
        yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 66
        yield "        <div class=\"modal fade\" id=\"statsModal\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-sm\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">Statistiques par Âge</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <canvas id=\"ageChart\" height=\"150\"></canvas>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 84
        yield "        <div id=\"users-list\">
            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                <h1 class=\"h3\">Liste des Utilisateurs</h1>
                <div>
                    <a href=\"#\" class=\"btn btn-info me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#statsModal\">
                        <i class=\"bx bx-stats\"></i> Statistiques
                    </a>
                    <a href=\"";
        // line 91
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        yield "\" class=\"btn btn-primary me-2\">
                        <i class=\"bx bx-plus\"></i> Nouveau utilisateur
                    </a>
                    <button id=\"exportPdfBtn\" class=\"btn btn-success me-2\">
                        <i class=\"bx bx-file\"></i> Exporter en PDF
                    </button>
                    <button id=\"sortMenBtn\" class=\"btn btn-warning\">
                        <i class=\"bx bx-sort\"></i> Tri par genre 
                    </button>
                </div>
            </div>

            ";
        // line 104
        yield "            <div class=\"mb-4\">
                <form id=\"searchForm\" method=\"get\" action=\"";
        // line 105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"d-flex align-items-center\">
                    <div class=\"input-group\">
                        <span class=\"input-group-text\"><i class=\"bx bx-search\"></i></span>
                        <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Rechercher par nom, prénom ou email...\" 
                               value=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("searchQuery", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["searchQuery"]) || array_key_exists("searchQuery", $context) ? $context["searchQuery"] : (function () { throw new RuntimeError('Variable "searchQuery" does not exist.', 109, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" id=\"searchInput\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary ms-2\">Rechercher</button>
                </form>
            </div>

            <div class=\"row\" id=\"userList\">
                ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 116, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 117
            yield "                    <div class=\"col-md-6 col-lg-4 mb-4 user-card\" 
                         data-nom=\"";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 118)), "html", null, true);
            yield "\" 
                         data-prenom=\"";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 119)), "html", null, true);
            yield "\" 
                         data-email=\"";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 120)), "html", null, true);
            yield "\"
                         data-genre=\"";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "genre", [], "any", false, false, false, 121)), "html", null, true);
            yield "\">
                        <div class=\"card h-100 shadow-sm\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center mb-3\">
                                    <div class=\"flex-shrink-0 me-3 position-relative\">
                                        ";
            // line 126
            if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "image", [], "any", false, false, false, 126)) {
                // line 127
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "image", [], "any", false, false, false, 127))), "html", null, true);
                yield "\" 
                                                 class=\"rounded-circle avatar-img\" 
                                                 alt=\"";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 129), "html", null, true);
                yield "\">
                                            <span class=\"avatar-status\"></span>
                                        ";
            } else {
                // line 132
                yield "                                            <div class=\"rounded-circle bg-light d-flex align-items-center justify-content-center avatar-img\">
                                                <i class=\"fas fa-user text-muted\"></i>
                                            </div>
                                            <span class=\"avatar-status\"></span>
                                        ";
            }
            // line 137
            yield "                                    </div>
                                    <div>
                                        <h5 class=\"mb-0 fw-bold\">";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 139), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 139), "html", null, true);
            yield "</h5>
                                        <small class=\"text-muted\">";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "role", [], "any", false, false, false, 140), "html", null, true);
            yield "</small>
                                    </div>
                                </div>
                                
                                <div class=\"user-details\">
                                    <div class=\"detail-item\">
                                        <span class=\"detail-label fw-bold\">Email:</span>
                                        <span class=\"detail-value\">";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 147), "html", null, true);
            yield "</span>
                                    </div>
                                    ";
            // line 149
            if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "dateDeNaissance", [], "any", false, false, false, 149)) {
                // line 150
                yield "                                    <div class=\"detail-item\">
                                        <span class=\"detail-label fw-bold\">Date de naissance:</span>
                                        <span class=\"detail-value\">";
                // line 152
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "dateDeNaissance", [], "any", false, false, false, 152), "d/m/Y"), "html", null, true);
                yield "</span>
                                    </div>
                                    <div class=\"detail-item\">
                                        <span class=\"detail-label fw-bold\">Âge:</span>
                                        <span class=\"detail-value\">
                                            ";
                // line 157
                $context["birthYear"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "dateDeNaissance", [], "any", false, false, false, 157), "Y");
                // line 158
                yield "                                            ";
                $context["currentYear"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y");
                // line 159
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["currentYear"]) || array_key_exists("currentYear", $context) ? $context["currentYear"] : (function () { throw new RuntimeError('Variable "currentYear" does not exist.', 159, $this->source); })()) - (isset($context["birthYear"]) || array_key_exists("birthYear", $context) ? $context["birthYear"] : (function () { throw new RuntimeError('Variable "birthYear" does not exist.', 159, $this->source); })())), "html", null, true);
                yield " ans
                                        </span>
                                    </div>
                                    ";
            }
            // line 163
            yield "                                    ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "numTelephone", [], "any", false, false, false, 163)) {
                // line 164
                yield "                                    <div class=\"detail-item\">
                                        <span class=\"detail-label fw-bold\">Téléphone:</span>
                                        <span class=\"detail-value\">";
                // line 166
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "numTelephone", [], "any", false, false, false, 166), "html", null, true);
                yield "</span>
                                    </div>
                                    ";
            }
            // line 169
            yield "                                    <div class=\"detail-item\">
                                        <span class=\"detail-label fw-bold\">Genre:</span>
                                        <span class=\"detail-value\">";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "genre", [], "any", false, false, false, 171), "html", null, true);
            yield "</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"card-footer bg-white border-top-0 d-flex justify-content-end gap-2\">
                                <a href=\"";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id_user" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id_user", [], "any", false, false, false, 177)]), "html", null, true);
            yield "\" 
                                   class=\"btn btn-sm btn-outline-primary px-3\"
                                   onclick=\"return confirm('Êtes-vous sûr de vouloir modifier cet utilisateur ?');\">
                                    Modifier
                                </a>
                                <form method=\"post\" action=\"";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_delete", ["id_user" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id_user", [], "any", false, false, false, 182)]), "html", null, true);
            yield "\" 
                                      onsubmit=\"return confirm('Êtes-vous sûr ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id_user", [], "any", false, false, false, 184))), "html", null, true);
            yield "\">
                                    <button class=\"btn btn-sm btn-outline-danger px-3\">
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        // line 192
        if (!$context['_iterated']) {
            // line 193
            yield "                    <div class=\"col-12\">
                        <div class=\"alert alert-info\">
                            Aucun utilisateur trouvé.
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        yield "            </div>

            ";
        // line 202
        yield "            <div class=\"navigation mt-4 custom-pagination\">
                ";
        // line 203
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 203, $this->source); })()));
        yield "
            </div>
        </div>
    </div>

    ";
        // line 209
        yield "    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialisation du graphique dans la modale
            const modal = document.getElementById('statsModal');
            modal.addEventListener('shown.bs.modal', function () {
                const ctx = document.getElementById('ageChart').getContext('2d');
                const ageChart = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: ['18-30 ans', '31-50 ans', '51+ ans'],
                        datasets: [{
                            data: [
                                ";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ageStats"]) || array_key_exists("ageStats", $context) ? $context["ageStats"] : (function () { throw new RuntimeError('Variable "ageStats" does not exist.', 222, $this->source); })()), "18-30", [], "array", false, false, false, 222), "html", null, true);
        yield ",
                                ";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ageStats"]) || array_key_exists("ageStats", $context) ? $context["ageStats"] : (function () { throw new RuntimeError('Variable "ageStats" does not exist.', 223, $this->source); })()), "31-50", [], "array", false, false, false, 223), "html", null, true);
        yield ",
                                ";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ageStats"]) || array_key_exists("ageStats", $context) ? $context["ageStats"] : (function () { throw new RuntimeError('Variable "ageStats" does not exist.', 224, $this->source); })()), "51+", [], "array", false, false, false, 224), "html", null, true);
        yield "
                            ],
                            backgroundColor: [
                                '#FF6F61',
                                '#6B48FF',
                                '#FFD166'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'bottom',
                                labels: {
                                    font: {
                                        size: 12
                                    }
                                }
                            },
                            title: {
                                display: true,
                                text: 'Répartition des utilisateurs par âge',
                                font: {
                                    size: 14
                                }
                            }
                        }
                    }
                });
            });

            // Recherche dynamique et tri côté client
            const searchInput = document.getElementById('searchInput');
            const userList = document.getElementById('userList');
            const userCards = document.querySelectorAll('.user-card');

            // Fonction pour filtrer par recherche
            function filterCards() {
                const searchTerm = searchInput.value.toLowerCase();

                userCards.forEach(card => {
                    const nom = card.getAttribute('data-nom');
                    const prenom = card.getAttribute('data-prenom');
                    const email = card.getAttribute('data-email');

                    if (nom.includes(searchTerm) || prenom.includes(searchTerm) || email.includes(searchTerm)) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            }

            // Fonction pour trier par genre (hommes d'abord)
            function sortByGender() {
                const cardsArray = Array.from(userCards);
                cardsArray.sort((a, b) => {
                    const genreA = a.getAttribute('data-genre');
                    const genreB = b.getAttribute('data-genre');
                    if (genreA === 'homme' && genreB !== 'homme') return -1;
                    if (genreA !== 'homme' && genreB === 'homme') return 1;
                    return 0;
                });

                // Réorganiser les cartes dans le DOM
                userList.innerHTML = '';
                cardsArray.forEach(card => userList.appendChild(card));

                // Réappliquer le filtre de recherche après le tri
                filterCards();
            }

            // Écouteur pour la recherche
            searchInput.addEventListener('input', filterCards);

            // Écouteur pour le tri par genre
            const sortMenBtn = document.getElementById('sortMenBtn');
            sortMenBtn.addEventListener('click', sortByGender);

            // PDF export button handler
            const exportPdfBtn = document.getElementById('exportPdfBtn');
            exportPdfBtn.addEventListener('click', function () {
                const searchQuery = document.getElementById('searchInput').value;
                const currentPage = new URLSearchParams(window.location.search).get('page') || 1;
                window.location.href = '";
        // line 310
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_export_pdf");
        yield "?search=' + encodeURIComponent(searchQuery) + '&page=' + currentPage;
            });
        });
    </script>

    <style>
        .user-details {
            font-size: 0.9rem;
            line-height: 1イオン1.6;
        }
        .detail-item {
            margin-bottom: 0.5rem;
        }
        .detail-label {
            display: inline-block;
            width: 120px;
        }
        .card {
            border-radius: 8px;
            border: 1px solid #e0e0e0;
        }
        .card-title {
            font-size: 1.1rem;
        }
        .custom-pagination {
            display: flex;
            justify-content: center;
            width: 100%;
        }
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
            padding: 0;
            list-style: none;
            gap: 5px;
        }
        .pagination .page-item .page-link {
            min-width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            padding: 0;
            border-radius: 50%;
            background-color: #f8f9fa;
            color: #007bff;
            border: none;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        .pagination .page-item.active .page-link {
            background-color: #007bff;
            color: white;
        }
        .pagination .page-item .page-link:hover {
            background-color: #0056b3;
            color: white;
            text-decoration: none;
        }
        .pagination .page-item.disabled .page-link {
            background-color: #e9ecef;
            color: #6c757d;
            cursor: not-allowed;
        }
        .pagination .page-item:first-child .page-link,
        .pagination .page-item:last-child .page-link {
            border-radius: 50%;
            font-size: 1.2rem;
            padding: 0 10px;
        }
        .avatar-img {
            width: 40px;
            height: 40px;
            object-fit: cover;
        }
        .position-relative {
            position: relative;
        }
        .avatar-status {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 14px;
            height: 14px;
            background-color: #28a745;
            border: 2px solid #fff;
            border-radius: 50%;
        }
        .modal-sm .modal-content {
            padding: 10px;
        }
        .modal-sm .modal-body {
            padding: 15px;
        }
    </style>
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
        return "user/index.html.twig";
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
        return array (  546 => 310,  457 => 224,  453 => 223,  449 => 222,  434 => 209,  426 => 203,  423 => 202,  419 => 199,  408 => 193,  406 => 192,  393 => 184,  388 => 182,  380 => 177,  371 => 171,  367 => 169,  361 => 166,  357 => 164,  354 => 163,  346 => 159,  343 => 158,  341 => 157,  333 => 152,  329 => 150,  327 => 149,  322 => 147,  312 => 140,  306 => 139,  302 => 137,  295 => 132,  289 => 129,  283 => 127,  281 => 126,  273 => 121,  269 => 120,  265 => 119,  261 => 118,  258 => 117,  253 => 116,  243 => 109,  236 => 105,  233 => 104,  218 => 91,  209 => 84,  190 => 66,  180 => 58,  176 => 57,  172 => 56,  168 => 55,  160 => 50,  153 => 46,  145 => 40,  130 => 27,  118 => 18,  113 => 16,  104 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Utilisateurs{% endblock %}

{% block body %}
    <div class=\"container py-4\">
        <div class=\"row\">
            {# Carte d'aperçu des utilisateurs #}
            <div class=\"col-md-8 mb-4\">
                <div class=\"card\">
                    <div class=\"d-flex align-items-end row\">
                        <div class=\"col-sm-7\">
                            <div class=\"card-body\">
                                <h3 class=\"card-title text-primary\">Aperçu des Utilisateurs 👥</h3>
                                <p class=\"mb-4\">
                                    Vous avez <span class=\"fw-bold\">{{ stats.total }}</span> utilisateurs enregistrés dans le système.
                                </p>
                                <a href=\"{{ path('app_user_new') }}\" class=\"btn btn-sm btn-outline-primary\">
                                    <i class=\"fas fa-plus\"></i> Ajouter un Utilisateur
                                </a>
                                <a href=\"#users-list\" class=\"btn btn-sm btn-primary ms-2\">Voir la liste</a>
                            </div>
                        </div>
                        <div class=\"col-sm-5 text-center text-sm-left\">
                            <div class=\"card-body pb-0 px-0 px-md-4\">
                                <img
                                    src=\"{{ asset('img/illustrations/team-light.png') }}\"
                                    height=\"170\"
                                    alt=\"\"
                                    data-app-dark-img=\"illustrations/team-dark.png\"
                                    data-app-light-img=\"illustrations/team-light.png\"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {# Petite carte pour les statistiques par genre #}
            <div class=\"col-md-4 mb-4\">
                <div class=\"card h-100\">
                    <div class=\"card-body text-center\">
                        <h5 class=\"card-title\">Statistiques par Genre</h5>
                        <div class=\"d-flex justify-content-center my-3\">
                            <div class=\"text-center mx-2\">
                                <div class=\"fs-4 fw-bold\">{{ stats.percentMen }}%</div>
                                <small>Hommes</small>
                            </div>
                            <div class=\"text-center mx-2\">
                                <div class=\"fs-4 fw-bold\">{{ stats.percentWomen }}%</div>
                                <small>Femmes</small>
                            </div>
                        </div>
                        <div class=\"progress\" style=\"height: 10px;\">
                            <div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: {{ stats.percentMen }}%\" 
                                 aria-valuenow=\"{{ stats.percentMen }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                            <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: {{ stats.percentWomen }}%\" 
                                 aria-valuenow=\"{{ stats.percentWomen }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {# Modale pour les statistiques par âge #}
        <div class=\"modal fade\" id=\"statsModal\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-sm\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">Statistiques par Âge</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        <canvas id=\"ageChart\" height=\"150\"></canvas>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Fermer</button>
                    </div>
                </div>
            </div>
        </div>

        {# Liste des utilisateurs #}
        <div id=\"users-list\">
            <div class=\"d-flex justify-content-between align-items-center mb-4\">
                <h1 class=\"h3\">Liste des Utilisateurs</h1>
                <div>
                    <a href=\"#\" class=\"btn btn-info me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#statsModal\">
                        <i class=\"bx bx-stats\"></i> Statistiques
                    </a>
                    <a href=\"{{ path('app_user_new') }}\" class=\"btn btn-primary me-2\">
                        <i class=\"bx bx-plus\"></i> Nouveau utilisateur
                    </a>
                    <button id=\"exportPdfBtn\" class=\"btn btn-success me-2\">
                        <i class=\"bx bx-file\"></i> Exporter en PDF
                    </button>
                    <button id=\"sortMenBtn\" class=\"btn btn-warning\">
                        <i class=\"bx bx-sort\"></i> Tri par genre 
                    </button>
                </div>
            </div>

            {# Barre de recherche #}
            <div class=\"mb-4\">
                <form id=\"searchForm\" method=\"get\" action=\"{{ path('app_user_index') }}\" class=\"d-flex align-items-center\">
                    <div class=\"input-group\">
                        <span class=\"input-group-text\"><i class=\"bx bx-search\"></i></span>
                        <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Rechercher par nom, prénom ou email...\" 
                               value=\"{{ searchQuery|default('') }}\" id=\"searchInput\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary ms-2\">Rechercher</button>
                </form>
            </div>

            <div class=\"row\" id=\"userList\">
                {% for user in users %}
                    <div class=\"col-md-6 col-lg-4 mb-4 user-card\" 
                         data-nom=\"{{ user.nom|lower }}\" 
                         data-prenom=\"{{ user.prenom|lower }}\" 
                         data-email=\"{{ user.email|lower }}\"
                         data-genre=\"{{ user.genre|lower }}\">
                        <div class=\"card h-100 shadow-sm\">
                            <div class=\"card-body\">
                                <div class=\"d-flex align-items-center mb-3\">
                                    <div class=\"flex-shrink-0 me-3 position-relative\">
                                        {% if user.image %}
                                            <img src=\"{{ asset('Uploads/users/' ~ user.image) }}\" 
                                                 class=\"rounded-circle avatar-img\" 
                                                 alt=\"{{ user.nom }}\">
                                            <span class=\"avatar-status\"></span>
                                        {% else %}
                                            <div class=\"rounded-circle bg-light d-flex align-items-center justify-content-center avatar-img\">
                                                <i class=\"fas fa-user text-muted\"></i>
                                            </div>
                                            <span class=\"avatar-status\"></span>
                                        {% endif %}
                                    </div>
                                    <div>
                                        <h5 class=\"mb-0 fw-bold\">{{ user.prenom }} {{ user.nom }}</h5>
                                        <small class=\"text-muted\">{{ user.role }}</small>
                                    </div>
                                </div>
                                
                                <div class=\"user-details\">
                                    <div class=\"detail-item\">
                                        <span class=\"detail-label fw-bold\">Email:</span>
                                        <span class=\"detail-value\">{{ user.email }}</span>
                                    </div>
                                    {% if user.dateDeNaissance %}
                                    <div class=\"detail-item\">
                                        <span class=\"detail-label fw-bold\">Date de naissance:</span>
                                        <span class=\"detail-value\">{{ user.dateDeNaissance|date('d/m/Y') }}</span>
                                    </div>
                                    <div class=\"detail-item\">
                                        <span class=\"detail-label fw-bold\">Âge:</span>
                                        <span class=\"detail-value\">
                                            {% set birthYear = user.dateDeNaissance|date('Y') %}
                                            {% set currentYear = \"now\"|date('Y') %}
                                            {{ currentYear - birthYear }} ans
                                        </span>
                                    </div>
                                    {% endif %}
                                    {% if user.numTelephone %}
                                    <div class=\"detail-item\">
                                        <span class=\"detail-label fw-bold\">Téléphone:</span>
                                        <span class=\"detail-value\">{{ user.numTelephone }}</span>
                                    </div>
                                    {% endif %}
                                    <div class=\"detail-item\">
                                        <span class=\"detail-label fw-bold\">Genre:</span>
                                        <span class=\"detail-value\">{{ user.genre }}</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class=\"card-footer bg-white border-top-0 d-flex justify-content-end gap-2\">
                                <a href=\"{{ path('app_user_edit', {'id_user': user.id_user}) }}\" 
                                   class=\"btn btn-sm btn-outline-primary px-3\"
                                   onclick=\"return confirm('Êtes-vous sûr de vouloir modifier cet utilisateur ?');\">
                                    Modifier
                                </a>
                                <form method=\"post\" action=\"{{ path('app_user_delete', {'id_user': user.id_user}) }}\" 
                                      onsubmit=\"return confirm('Êtes-vous sûr ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id_user) }}\">
                                    <button class=\"btn btn-sm btn-outline-danger px-3\">
                                        Supprimer
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                {% else %}
                    <div class=\"col-12\">
                        <div class=\"alert alert-info\">
                            Aucun utilisateur trouvé.
                        </div>
                    </div>
                {% endfor %}
            </div>

            {# Ajout de la pagination #}
            <div class=\"navigation mt-4 custom-pagination\">
                {{ knp_pagination_render(users) }}
            </div>
        </div>
    </div>

    {# Inclusion de Chart.js #}
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialisation du graphique dans la modale
            const modal = document.getElementById('statsModal');
            modal.addEventListener('shown.bs.modal', function () {
                const ctx = document.getElementById('ageChart').getContext('2d');
                const ageChart = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: ['18-30 ans', '31-50 ans', '51+ ans'],
                        datasets: [{
                            data: [
                                {{ ageStats['18-30'] }},
                                {{ ageStats['31-50'] }},
                                {{ ageStats['51+'] }}
                            ],
                            backgroundColor: [
                                '#FF6F61',
                                '#6B48FF',
                                '#FFD166'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'bottom',
                                labels: {
                                    font: {
                                        size: 12
                                    }
                                }
                            },
                            title: {
                                display: true,
                                text: 'Répartition des utilisateurs par âge',
                                font: {
                                    size: 14
                                }
                            }
                        }
                    }
                });
            });

            // Recherche dynamique et tri côté client
            const searchInput = document.getElementById('searchInput');
            const userList = document.getElementById('userList');
            const userCards = document.querySelectorAll('.user-card');

            // Fonction pour filtrer par recherche
            function filterCards() {
                const searchTerm = searchInput.value.toLowerCase();

                userCards.forEach(card => {
                    const nom = card.getAttribute('data-nom');
                    const prenom = card.getAttribute('data-prenom');
                    const email = card.getAttribute('data-email');

                    if (nom.includes(searchTerm) || prenom.includes(searchTerm) || email.includes(searchTerm)) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            }

            // Fonction pour trier par genre (hommes d'abord)
            function sortByGender() {
                const cardsArray = Array.from(userCards);
                cardsArray.sort((a, b) => {
                    const genreA = a.getAttribute('data-genre');
                    const genreB = b.getAttribute('data-genre');
                    if (genreA === 'homme' && genreB !== 'homme') return -1;
                    if (genreA !== 'homme' && genreB === 'homme') return 1;
                    return 0;
                });

                // Réorganiser les cartes dans le DOM
                userList.innerHTML = '';
                cardsArray.forEach(card => userList.appendChild(card));

                // Réappliquer le filtre de recherche après le tri
                filterCards();
            }

            // Écouteur pour la recherche
            searchInput.addEventListener('input', filterCards);

            // Écouteur pour le tri par genre
            const sortMenBtn = document.getElementById('sortMenBtn');
            sortMenBtn.addEventListener('click', sortByGender);

            // PDF export button handler
            const exportPdfBtn = document.getElementById('exportPdfBtn');
            exportPdfBtn.addEventListener('click', function () {
                const searchQuery = document.getElementById('searchInput').value;
                const currentPage = new URLSearchParams(window.location.search).get('page') || 1;
                window.location.href = '{{ path('app_user_export_pdf') }}?search=' + encodeURIComponent(searchQuery) + '&page=' + currentPage;
            });
        });
    </script>

    <style>
        .user-details {
            font-size: 0.9rem;
            line-height: 1イオン1.6;
        }
        .detail-item {
            margin-bottom: 0.5rem;
        }
        .detail-label {
            display: inline-block;
            width: 120px;
        }
        .card {
            border-radius: 8px;
            border: 1px solid #e0e0e0;
        }
        .card-title {
            font-size: 1.1rem;
        }
        .custom-pagination {
            display: flex;
            justify-content: center;
            width: 100%;
        }
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
            padding: 0;
            list-style: none;
            gap: 5px;
        }
        .pagination .page-item .page-link {
            min-width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            padding: 0;
            border-radius: 50%;
            background-color: #f8f9fa;
            color: #007bff;
            border: none;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        .pagination .page-item.active .page-link {
            background-color: #007bff;
            color: white;
        }
        .pagination .page-item .page-link:hover {
            background-color: #0056b3;
            color: white;
            text-decoration: none;
        }
        .pagination .page-item.disabled .page-link {
            background-color: #e9ecef;
            color: #6c757d;
            cursor: not-allowed;
        }
        .pagination .page-item:first-child .page-link,
        .pagination .page-item:last-child .page-link {
            border-radius: 50%;
            font-size: 1.2rem;
            padding: 0 10px;
        }
        .avatar-img {
            width: 40px;
            height: 40px;
            object-fit: cover;
        }
        .position-relative {
            position: relative;
        }
        .avatar-status {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 14px;
            height: 14px;
            background-color: #28a745;
            border: 2px solid #fff;
            border-radius: 50%;
        }
        .modal-sm .modal-content {
            padding: 10px;
        }
        .modal-sm .modal-body {
            padding: 15px;
        }
    </style>
{% endblock %}", "user/index.html.twig", "C:\\Users\\amine\\Downloads\\matchupz-web-integration\\matchupz-web-integration\\templates\\user\\index.html.twig");
    }
}
