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

/* dashboard/index.html.twig */
class __TwigTemplate_40da5116d8209d9b966f203d8112478b extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Dashboard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .stat-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            border: none;
            border-radius: 1rem;
        }

        .stat-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .stat-card .card-body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 130px;
        }

        .stat-card h5 {
            font-size: 1.1rem;
            font-weight: 600;
        }

        .stat-card h2 {
            font-size: 2.8rem;
            font-weight: 800;
            margin: 0;
        }

        .chart-container {
            position: relative;
            height: 320px;
            margin-bottom: 2rem;
        }

        .card-title {
            font-weight: 600;
            font-size: 1.2rem;
        }

        .card {
            border: none;
            border-radius: 1rem;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 56
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 57
        yield "    <div class=\"container-fluid\">
        <div class=\"row g-4 mb-4\">
            ";
        // line 59
        $context["colors"] = ["primary", "success", "info", "danger", "warning"];
        // line 60
        yield "            ";
        $context["labels"] = ["Tickets", "Leads", "Clients", "Dépenses", "Budgets"];
        // line 61
        yield "            ";
        $context["links"] = ["tickets", "leads", "clients", "expenses", "budgets"];
        // line 62
        yield "            ";
        $context["values"] = [CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 62, $this->source); })()), "tickets", [], "any", false, false, false, 62), CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 62, $this->source); })()), "leads", [], "any", false, false, false, 62), CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 62, $this->source); })()), "clients", [], "any", false, false, false, 62), CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 62, $this->source); })()), "expensesTtl", [], "any", false, false, false, 62), CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 62, $this->source); })()), "budgetsTtl", [], "any", false, false, false, 62)];
        // line 63
        yield "
            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 65
            yield "                <div class=\"col-md-4 col-lg-3\">
                    <div class=\"card stat-card bg-";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 66, $this->source); })()), $context["i"], [], "array", false, false, false, 66), "html", null, true);
            yield " text-white\" onclick=\"window.location.href='";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["links"]) || array_key_exists("links", $context) ? $context["links"] : (function () { throw new RuntimeError('Variable "links" does not exist.', 66, $this->source); })()), $context["i"], [], "array", false, false, false, 66), "html", null, true);
            yield "'\">
                        <div class=\"card-body text-center\">
                            <h5 class=\"card-title\">";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 68, $this->source); })()), $context["i"], [], "array", false, false, false, 68), "html", null, true);
            yield "</h5>
                            <h2 class=\"card-text\">";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["values"]) || array_key_exists("values", $context) ? $context["values"] : (function () { throw new RuntimeError('Variable "values" does not exist.', 69, $this->source); })()), $context["i"], [], "array", false, false, false, 69), 2, ",", " "), "html", null, true);
            yield "</h2>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        yield "        </div>

        <div class=\"row g-4\">
            <div class=\"col-md-6\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Priorités des Tickets</h5>
                        <div class=\"chart-container\">
                            <canvas id=\"ticketPrioritiesChart\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Budget par Client</h5>
                        <div class=\"chart-container\">
                            <canvas id=\"budgetByClientChart\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-4 mt-3\">
            <div class=\"col-12\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Dépenses vs Budget</h5>
                        <div class=\"chart-container\">
                            <canvas id=\"expenseVsBudgetChart\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 114
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 115
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const ticketPrioritiesChart = new Chart(document.getElementById('ticketPrioritiesChart'), {
                type: 'doughnut',
                data: {
                    labels: ";
        // line 122
        yield json_encode(Twig\Extension\CoreExtension::keys((isset($context["ticketPriorities"]) || array_key_exists("ticketPriorities", $context) ? $context["ticketPriorities"] : (function () { throw new RuntimeError('Variable "ticketPriorities" does not exist.', 122, $this->source); })())));
        yield ",
                    datasets: [{
                        data: ";
        // line 124
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, Twig\Extension\CoreExtension::keys((isset($context["ticketPriorities"]) || array_key_exists("ticketPriorities", $context) ? $context["ticketPriorities"] : (function () { throw new RuntimeError('Variable "ticketPriorities" does not exist.', 124, $this->source); })())), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticketPriorities"]) || array_key_exists("ticketPriorities", $context) ? $context["ticketPriorities"] : (function () { throw new RuntimeError('Variable "ticketPriorities" does not exist.', 124, $this->source); })()), (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 124, $this->source); })()), [], "any", false, false, false, 124); }));
        yield ",
                        backgroundColor: ['#198754', '#ffc107', '#fd7e14', '#dc3545', '#6c757d', '#9c27b0']
                    }]
                },
                options: {
                    responsive: true,
                    plugins: { legend: { position: 'bottom' } }
                }
            });

            const budgetByClientChart = new Chart(document.getElementById('budgetByClientChart'), {
                type: 'bar',
                data: {
                    labels: ";
        // line 137
        yield json_encode(Twig\Extension\CoreExtension::keys((isset($context["budgetByClient"]) || array_key_exists("budgetByClient", $context) ? $context["budgetByClient"] : (function () { throw new RuntimeError('Variable "budgetByClient" does not exist.', 137, $this->source); })())));
        yield ",
                    datasets: [{
                        label: 'Budget',
                        data: ";
        // line 140
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, Twig\Extension\CoreExtension::keys((isset($context["budgetByClient"]) || array_key_exists("budgetByClient", $context) ? $context["budgetByClient"] : (function () { throw new RuntimeError('Variable "budgetByClient" does not exist.', 140, $this->source); })())), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["budgetByClient"]) || array_key_exists("budgetByClient", $context) ? $context["budgetByClient"] : (function () { throw new RuntimeError('Variable "budgetByClient" does not exist.', 140, $this->source); })()), (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 140, $this->source); })()), [], "any", false, false, false, 140); }));
        yield ",
                        backgroundColor: '#4CAF50'
                    }]
                },
                options: {
                    responsive: true,
                    scales: { y: { beginAtZero: true } },
                    plugins: { legend: { display: false } }
                }
            });

            const expenseVsBudgetChart = new Chart(document.getElementById('expenseVsBudgetChart'), {
                type: 'line',
                data: {
                    labels: ";
        // line 154
        yield json_encode(Twig\Extension\CoreExtension::keys((isset($context["expenseVsBudget"]) || array_key_exists("expenseVsBudget", $context) ? $context["expenseVsBudget"] : (function () { throw new RuntimeError('Variable "expenseVsBudget" does not exist.', 154, $this->source); })())));
        yield ",
                    datasets: [
                        {
                            label: 'Dépenses',
                            data: ";
        // line 158
        yield json_encode(Twig\Extension\CoreExtension::column((isset($context["expenseVsBudget"]) || array_key_exists("expenseVsBudget", $context) ? $context["expenseVsBudget"] : (function () { throw new RuntimeError('Variable "expenseVsBudget" does not exist.', 158, $this->source); })()), "expenses"));
        yield ",
                            borderColor: '#dc3545',
                            fill: false,
                            tension: 0.4
                        },
                        {
                            label: 'Budget',
                            data: ";
        // line 165
        yield json_encode(Twig\Extension\CoreExtension::column((isset($context["expenseVsBudget"]) || array_key_exists("expenseVsBudget", $context) ? $context["expenseVsBudget"] : (function () { throw new RuntimeError('Variable "expenseVsBudget" does not exist.', 165, $this->source); })()), "budget"));
        yield ",
                            borderColor: '#198754',
                            fill: false,
                            tension: 0.4
                        }
                    ]
                },
                options: {
                    responsive: true,
                    plugins: { legend: { position: 'bottom' } },
                    scales: {
                        y: { beginAtZero: true },
                        x: { ticks: { autoSkip: true, maxTicksLimit: 10 } }
                    }
                }
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dashboard/index.html.twig";
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
        return array (  330 => 165,  320 => 158,  313 => 154,  296 => 140,  290 => 137,  274 => 124,  269 => 122,  258 => 115,  248 => 114,  202 => 74,  191 => 69,  187 => 68,  180 => 66,  177 => 65,  173 => 64,  170 => 63,  167 => 62,  164 => 61,  161 => 60,  159 => 59,  155 => 57,  145 => 56,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .stat-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            border: none;
            border-radius: 1rem;
        }

        .stat-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .stat-card .card-body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 130px;
        }

        .stat-card h5 {
            font-size: 1.1rem;
            font-weight: 600;
        }

        .stat-card h2 {
            font-size: 2.8rem;
            font-weight: 800;
            margin: 0;
        }

        .chart-container {
            position: relative;
            height: 320px;
            margin-bottom: 2rem;
        }

        .card-title {
            font-weight: 600;
            font-size: 1.2rem;
        }

        .card {
            border: none;
            border-radius: 1rem;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container-fluid\">
        <div class=\"row g-4 mb-4\">
            {% set colors = ['primary', 'success', 'info', 'danger', 'warning'] %}
            {% set labels = ['Tickets', 'Leads', 'Clients', 'Dépenses', 'Budgets'] %}
            {% set links = ['tickets', 'leads', 'clients', 'expenses', 'budgets'] %}
            {% set values = [stats.tickets, stats.leads, stats.clients, stats.expensesTtl, stats.budgetsTtl] %}

            {% for i in 0..4 %}
                <div class=\"col-md-4 col-lg-3\">
                    <div class=\"card stat-card bg-{{ colors[i] }} text-white\" onclick=\"window.location.href='{{ links[i] }}'\">
                        <div class=\"card-body text-center\">
                            <h5 class=\"card-title\">{{ labels[i] }}</h5>
                            <h2 class=\"card-text\">{{ values[i]|number_format(2, ',', ' ') }}</h2>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>

        <div class=\"row g-4\">
            <div class=\"col-md-6\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Priorités des Tickets</h5>
                        <div class=\"chart-container\">
                            <canvas id=\"ticketPrioritiesChart\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Budget par Client</h5>
                        <div class=\"chart-container\">
                            <canvas id=\"budgetByClientChart\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row g-4 mt-3\">
            <div class=\"col-12\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Dépenses vs Budget</h5>
                        <div class=\"chart-container\">
                            <canvas id=\"expenseVsBudgetChart\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const ticketPrioritiesChart = new Chart(document.getElementById('ticketPrioritiesChart'), {
                type: 'doughnut',
                data: {
                    labels: {{ ticketPriorities|keys|json_encode|raw }},
                    datasets: [{
                        data: {{ ticketPriorities|keys|map(v => attribute(ticketPriorities, v))|json_encode|raw }},
                        backgroundColor: ['#198754', '#ffc107', '#fd7e14', '#dc3545', '#6c757d', '#9c27b0']
                    }]
                },
                options: {
                    responsive: true,
                    plugins: { legend: { position: 'bottom' } }
                }
            });

            const budgetByClientChart = new Chart(document.getElementById('budgetByClientChart'), {
                type: 'bar',
                data: {
                    labels: {{ budgetByClient|keys|json_encode|raw }},
                    datasets: [{
                        label: 'Budget',
                        data: {{ budgetByClient|keys|map(v => attribute(budgetByClient, v))|json_encode|raw }},
                        backgroundColor: '#4CAF50'
                    }]
                },
                options: {
                    responsive: true,
                    scales: { y: { beginAtZero: true } },
                    plugins: { legend: { display: false } }
                }
            });

            const expenseVsBudgetChart = new Chart(document.getElementById('expenseVsBudgetChart'), {
                type: 'line',
                data: {
                    labels: {{ expenseVsBudget|keys|json_encode|raw }},
                    datasets: [
                        {
                            label: 'Dépenses',
                            data: {{ expenseVsBudget|column('expenses')|json_encode|raw }},
                            borderColor: '#dc3545',
                            fill: false,
                            tension: 0.4
                        },
                        {
                            label: 'Budget',
                            data: {{ expenseVsBudget|column('budget')|json_encode|raw }},
                            borderColor: '#198754',
                            fill: false,
                            tension: 0.4
                        }
                    ]
                },
                options: {
                    responsive: true,
                    plugins: { legend: { position: 'bottom' } },
                    scales: {
                        y: { beginAtZero: true },
                        x: { ticks: { autoSkip: true, maxTicksLimit: 10 } }
                    }
                }
            });
        });
    </script>
{% endblock %}", "dashboard/index.html.twig", "D:\\S6\\MrRojo\\crm-newapp\\templates\\dashboard\\index.html.twig");
    }
}
