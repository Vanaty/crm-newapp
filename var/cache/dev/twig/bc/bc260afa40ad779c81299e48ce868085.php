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

/* base.html.twig */
class __TwigTemplate_24b271472889bd0dc33747912df497de extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 7
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 16
        yield "
        ";
        // line 17
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 22
        yield "    </head>
    <body>
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light mb-4\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">CRM</a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav me-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
        // line 33
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "get", ["_route"], "method", false, false, false, 33) == "app_dashboard")) {
            yield "active";
        }
        yield "\" 
                               href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\">Dashboard</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
        // line 37
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "request", [], "any", false, false, false, 37), "get", ["_route"], "method", false, false, false, 37) == "app_dashboard_leads")) {
            yield "active";
        }
        yield "\" 
                               href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_leads");
        yield "\">Leads</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
        // line 41
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, false, 41), "get", ["_route"], "method", false, false, false, 41) == "app_dashboard_tickets")) {
            yield "active";
        }
        yield "\" 
                               href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard_tickets");
        yield "\">Tickets</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
        // line 45
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "request", [], "any", false, false, false, 45), "get", ["_route"], "method", false, false, false, 45) == "app_expenses")) {
            yield "active";
        }
        yield "\" 
                               href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_expenses");
        yield "\">Dépenses</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
        // line 49
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "request", [], "any", false, false, false, 49), "get", ["_route"], "method", false, false, false, 49) == "app_settings_budget_alert")) {
            yield "active";
        }
        yield "\" 
                               href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_settings_budget_alert");
        yield "\">BudgetAlert</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
        // line 53
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "request", [], "any", false, false, false, 53), "get", ["_route"], "method", false, false, false, 53) == "expense_import")) {
            yield "active";
        }
        yield "\" 
                               href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("expense_import");
        yield "\">Import</a>
                        </li>
                    </ul>
                    ";
        // line 57
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57)) {
            // line 58
            yield "                        <ul class=\"navbar-nav\">
                            <li class=\"nav-item\">
                                <a href=\"";
            // line 60
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"nav-link text-danger\" id=\"logoutBtn\">
                                    <i class=\"fas fa-sign-out-alt me-1\"></i>Déconnexion
                                </a>
                            </li>
                        </ul>
                    ";
        }
        // line 66
        yield "                </div>
            </div>
        </nav>
        <div class=\"container\">
            ";
        // line 70
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 71
        yield "        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const logoutBtn = document.getElementById('logoutBtn');
                if (logoutBtn) {
                    logoutBtn.addEventListener('click', async function(e) {
                        e.preventDefault();
                        
                        const result = await Swal.fire({
                            title: 'Déconnexion',
                            text: 'Êtes-vous sûr de vouloir vous déconnecter ?',
                            icon: 'question',
                            showCancelButton: true,
                            confirmButtonColor: '#dc3545',
                            cancelButtonColor: '#6c757d',
                            confirmButtonText: 'Oui, me déconnecter',
                            cancelButtonText: 'Annuler'
                        });

                        if (result.isConfirmed) {
                            window.location.href = this.href;
                        }
                    });
                }
            });
        </script>
    </body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        yield "            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
            <style>
                .nav-link.active {
                    font-weight: bold;
                    color: #0d6efd !important;
                }
            </style>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        yield "            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
            <script src=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/api-interceptor.js"), "html", null, true);
        yield "\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 70
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  281 => 70,  270 => 19,  267 => 18,  257 => 17,  242 => 8,  232 => 7,  215 => 5,  178 => 71,  176 => 70,  170 => 66,  161 => 60,  157 => 58,  155 => 57,  149 => 54,  143 => 53,  137 => 50,  131 => 49,  125 => 46,  119 => 45,  113 => 42,  107 => 41,  101 => 38,  95 => 37,  89 => 34,  83 => 33,  73 => 26,  67 => 22,  65 => 17,  62 => 16,  60 => 7,  55 => 5,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {% block stylesheets %}
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
            <style>
                .nav-link.active {
                    font-weight: bold;
                    color: #0d6efd !important;
                }
            </style>
        {% endblock %}

        {% block javascripts %}
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
            <script src=\"{{ asset('js/api-interceptor.js') }}\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11\"></script>
        {% endblock %}
    </head>
    <body>
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light mb-4\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"{{ path('app_dashboard') }}\">CRM</a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                    <ul class=\"navbar-nav me-auto\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link {% if app.request.get('_route') == 'app_dashboard' %}active{% endif %}\" 
                               href=\"{{ path('app_dashboard') }}\">Dashboard</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link {% if app.request.get('_route') == 'app_dashboard_leads' %}active{% endif %}\" 
                               href=\"{{ path('app_dashboard_leads') }}\">Leads</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link {% if app.request.get('_route') == 'app_dashboard_tickets' %}active{% endif %}\" 
                               href=\"{{ path('app_dashboard_tickets') }}\">Tickets</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link {% if app.request.get('_route') == 'app_expenses' %}active{% endif %}\" 
                               href=\"{{ path('app_expenses') }}\">Dépenses</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link {% if app.request.get('_route') == 'app_settings_budget_alert' %}active{% endif %}\" 
                               href=\"{{ path('app_settings_budget_alert') }}\">BudgetAlert</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link {% if app.request.get('_route') == 'expense_import' %}active{% endif %}\" 
                               href=\"{{ path('expense_import') }}\">Import</a>
                        </li>
                    </ul>
                    {% if app.user %}
                        <ul class=\"navbar-nav\">
                            <li class=\"nav-item\">
                                <a href=\"{{ path('app_logout') }}\" class=\"nav-link text-danger\" id=\"logoutBtn\">
                                    <i class=\"fas fa-sign-out-alt me-1\"></i>Déconnexion
                                </a>
                            </li>
                        </ul>
                    {% endif %}
                </div>
            </div>
        </nav>
        <div class=\"container\">
            {% block body %}{% endblock %}
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const logoutBtn = document.getElementById('logoutBtn');
                if (logoutBtn) {
                    logoutBtn.addEventListener('click', async function(e) {
                        e.preventDefault();
                        
                        const result = await Swal.fire({
                            title: 'Déconnexion',
                            text: 'Êtes-vous sûr de vouloir vous déconnecter ?',
                            icon: 'question',
                            showCancelButton: true,
                            confirmButtonColor: '#dc3545',
                            cancelButtonColor: '#6c757d',
                            confirmButtonText: 'Oui, me déconnecter',
                            cancelButtonText: 'Annuler'
                        });

                        if (result.isConfirmed) {
                            window.location.href = this.href;
                        }
                    });
                }
            });
        </script>
    </body>
</html>
", "base.html.twig", "D:\\S6\\MrRojo\\crm-newapp\\templates\\base.html.twig");
    }
}
