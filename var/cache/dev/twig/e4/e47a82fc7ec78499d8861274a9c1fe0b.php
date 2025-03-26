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
            transition: transform 0.2s;
        }
        .stat-card:hover {
            transform: translateY(-5px);
        }
        .chart-container {
            position: relative;
            height: 300px;
            margin-bottom: 2rem;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 23
        yield "    ";
        // line 24
        yield "    <div class=\"row mb-4\">
        <div class=\"col-md-4\">
            <div class=\"card stat-card bg-primary text-white\">
                <div class=\"card-body\" onclick=\"window.location.href='leads'\">
                    <h5 class=\"card-title\">Tickets</h5>
                    <h2 class=\"card-text\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 29, $this->source); })()), "tickets", [], "any", false, false, false, 29), "html", null, true);
        yield "</h2>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card stat-card bg-success text-white\" onclick=\"window.location.href='tickets'\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Leads</h5>
                    <h2 class=\"card-text\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 37, $this->source); })()), "leads", [], "any", false, false, false, 37), "html", null, true);
        yield "</h2>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card stat-card bg-info text-white\" onclick=\"window.location.href='clients'\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Clients</h5>
                    <h2 class=\"card-text\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 45, $this->source); })()), "clients", [], "any", false, false, false, 45), "html", null, true);
        yield "</h2>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 52
        yield "    <div class=\"row mb-4\">
        <div class=\"col-md-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Priorités des Tickets</h5>
                    <div class=\"chart-container\">
                        <canvas id=\"ticketPrioritiesChart\"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Budget par Client</h5>
                    <div class=\"chart-container\">
                        <canvas id=\"budgetByClientChart\"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 76
        yield "    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Dépenses vs Budget</h5>
                    <div class=\"chart-container\">
                        <canvas id=\"expenseVsBudgetChart\"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 90
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Ticket Priorities Donut Chart
            new Chart(document.getElementById('ticketPrioritiesChart'), {
                type: 'doughnut',
                data: {
                    labels: ";
        // line 99
        yield json_encode(Twig\Extension\CoreExtension::keys((isset($context["ticketPriorities"]) || array_key_exists("ticketPriorities", $context) ? $context["ticketPriorities"] : (function () { throw new RuntimeError('Variable "ticketPriorities" does not exist.', 99, $this->source); })())));
        yield ",
                    datasets: [{
                        data: ";
        // line 101
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, Twig\Extension\CoreExtension::keys((isset($context["ticketPriorities"]) || array_key_exists("ticketPriorities", $context) ? $context["ticketPriorities"] : (function () { throw new RuntimeError('Variable "ticketPriorities" does not exist.', 101, $this->source); })())), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticketPriorities"]) || array_key_exists("ticketPriorities", $context) ? $context["ticketPriorities"] : (function () { throw new RuntimeError('Variable "ticketPriorities" does not exist.', 101, $this->source); })()), (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 101, $this->source); })()), [], "any", false, false, false, 101); }));
        yield ",
                        backgroundColor: [
                            '#28a745', // Low
                            '#ffc107', // Medium
                            '#fd7e14', // High
                            '#dc3545', // Critical
                            '#6c757d', // Closed
                            '#9c27b0'  // Urgent
                        ]
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            });

            // Budget by Client Bar Chart
            new Chart(document.getElementById('budgetByClientChart'), {
                type: 'bar',
                data: {
                    labels: ";
        // line 122
        yield json_encode(Twig\Extension\CoreExtension::keys((isset($context["budgetByClient"]) || array_key_exists("budgetByClient", $context) ? $context["budgetByClient"] : (function () { throw new RuntimeError('Variable "budgetByClient" does not exist.', 122, $this->source); })())));
        yield ",
                    datasets: [{
                        label: 'Budget',
                        data: ";
        // line 125
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, Twig\Extension\CoreExtension::keys((isset($context["budgetByClient"]) || array_key_exists("budgetByClient", $context) ? $context["budgetByClient"] : (function () { throw new RuntimeError('Variable "budgetByClient" does not exist.', 125, $this->source); })())), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["budgetByClient"]) || array_key_exists("budgetByClient", $context) ? $context["budgetByClient"] : (function () { throw new RuntimeError('Variable "budgetByClient" does not exist.', 125, $this->source); })()), (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 125, $this->source); })()), [], "any", false, false, false, 125); }));
        yield ",
                        backgroundColor: '#4CAF50'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Expense vs Budget Timeline
            new Chart(document.getElementById('expenseVsBudgetChart'), {
                type: 'line',
                data: {
                    labels: ";
        // line 144
        yield json_encode(Twig\Extension\CoreExtension::keys((isset($context["expenseVsBudget"]) || array_key_exists("expenseVsBudget", $context) ? $context["expenseVsBudget"] : (function () { throw new RuntimeError('Variable "expenseVsBudget" does not exist.', 144, $this->source); })())));
        yield ",
                    datasets: [{
                        label: 'Dépenses',
                        data: ";
        // line 147
        yield json_encode(Twig\Extension\CoreExtension::column((isset($context["expenseVsBudget"]) || array_key_exists("expenseVsBudget", $context) ? $context["expenseVsBudget"] : (function () { throw new RuntimeError('Variable "expenseVsBudget" does not exist.', 147, $this->source); })()), "expenses"));
        yield ",
                        borderColor: '#dc3545',
                        fill: false
                    }, {
                        label: 'Budget',
                        data: ";
        // line 152
        yield json_encode(Twig\Extension\CoreExtension::column((isset($context["expenseVsBudget"]) || array_key_exists("expenseVsBudget", $context) ? $context["expenseVsBudget"] : (function () { throw new RuntimeError('Variable "expenseVsBudget" does not exist.', 152, $this->source); })()), "budget"));
        yield ",
                        borderColor: '#28a745',
                        fill: false
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
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
        return array (  299 => 152,  291 => 147,  285 => 144,  263 => 125,  257 => 122,  233 => 101,  228 => 99,  216 => 91,  206 => 90,  186 => 76,  161 => 52,  152 => 45,  141 => 37,  130 => 29,  123 => 24,  121 => 23,  111 => 22,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .stat-card {
            transition: transform 0.2s;
        }
        .stat-card:hover {
            transform: translateY(-5px);
        }
        .chart-container {
            position: relative;
            height: 300px;
            margin-bottom: 2rem;
        }
    </style>
{% endblock %}

{% block body %}
    {# Statistics Cards #}
    <div class=\"row mb-4\">
        <div class=\"col-md-4\">
            <div class=\"card stat-card bg-primary text-white\">
                <div class=\"card-body\" onclick=\"window.location.href='leads'\">
                    <h5 class=\"card-title\">Tickets</h5>
                    <h2 class=\"card-text\">{{ stats.tickets }}</h2>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card stat-card bg-success text-white\" onclick=\"window.location.href='tickets'\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Leads</h5>
                    <h2 class=\"card-text\">{{ stats.leads }}</h2>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card stat-card bg-info text-white\" onclick=\"window.location.href='clients'\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Clients</h5>
                    <h2 class=\"card-text\">{{ stats.clients }}</h2>
                </div>
            </div>
        </div>
    </div>

    {# Charts Row 1 #}
    <div class=\"row mb-4\">
        <div class=\"col-md-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Priorités des Tickets</h5>
                    <div class=\"chart-container\">
                        <canvas id=\"ticketPrioritiesChart\"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Budget par Client</h5>
                    <div class=\"chart-container\">
                        <canvas id=\"budgetByClientChart\"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {# Charts Row 2 #}
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Dépenses vs Budget</h5>
                    <div class=\"chart-container\">
                        <canvas id=\"expenseVsBudgetChart\"></canvas>
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
        document.addEventListener('DOMContentLoaded', function() {
            // Ticket Priorities Donut Chart
            new Chart(document.getElementById('ticketPrioritiesChart'), {
                type: 'doughnut',
                data: {
                    labels: {{ ticketPriorities|keys|json_encode|raw }},
                    datasets: [{
                        data: {{ ticketPriorities|keys|map(v => attribute(ticketPriorities, v))|json_encode|raw }},
                        backgroundColor: [
                            '#28a745', // Low
                            '#ffc107', // Medium
                            '#fd7e14', // High
                            '#dc3545', // Critical
                            '#6c757d', // Closed
                            '#9c27b0'  // Urgent
                        ]
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            });

            // Budget by Client Bar Chart
            new Chart(document.getElementById('budgetByClientChart'), {
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
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // Expense vs Budget Timeline
            new Chart(document.getElementById('expenseVsBudgetChart'), {
                type: 'line',
                data: {
                    labels: {{ expenseVsBudget|keys|json_encode|raw }},
                    datasets: [{
                        label: 'Dépenses',
                        data: {{ expenseVsBudget|column('expenses')|json_encode|raw }},
                        borderColor: '#dc3545',
                        fill: false
                    }, {
                        label: 'Budget',
                        data: {{ expenseVsBudget|column('budget')|json_encode|raw }},
                        borderColor: '#28a745',
                        fill: false
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>
{% endblock %}
", "dashboard/index.html.twig", "D:\\S6\\MrRojo\\crm-newapp\\templates\\dashboard\\index.html.twig");
    }
}
