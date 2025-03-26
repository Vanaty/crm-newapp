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

/* security/login.html.twig */
class __TwigTemplate_f6d50a78ac76efe0ac4be71c54293f57 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        yield "Login";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h3 class=\"card-title text-center mb-4\">Login</h3>
                    <form id=\"loginForm\">
                        <div class=\"mb-3\">
                            <label for=\"username\" class=\"form-label\">Username</label>
                            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" required>
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"password\" class=\"form-label\">Password</label>
                            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" required>
                        </div>
                        <div class=\"alert alert-danger\" style=\"display: none;\" id=\"loginError\"></div>
                        <button type=\"submit\" class=\"btn btn-primary w-100\">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const errorElement = document.getElementById('loginError');
    
    fetch('";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login_check");
        yield "', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            username: username,
            password: password
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.token) {
            // Store the token in localStorage
            localStorage.setItem('api_token', data.token);
            window.location.href = '";
        // line 53
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "';
        } else {
            errorElement.textContent = data.message || 'Login failed';
            errorElement.style.display = 'block';
        }
    })
    .catch(error => {
        errorElement.textContent = 'An error occurred during login';
        errorElement.style.display = 'block';
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
        return "security/login.html.twig";
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
        return array (  137 => 53,  119 => 38,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Login{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h3 class=\"card-title text-center mb-4\">Login</h3>
                    <form id=\"loginForm\">
                        <div class=\"mb-3\">
                            <label for=\"username\" class=\"form-label\">Username</label>
                            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" required>
                        </div>
                        <div class=\"mb-3\">
                            <label for=\"password\" class=\"form-label\">Password</label>
                            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" required>
                        </div>
                        <div class=\"alert alert-danger\" style=\"display: none;\" id=\"loginError\"></div>
                        <button type=\"submit\" class=\"btn btn-primary w-100\">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const errorElement = document.getElementById('loginError');
    
    fetch('{{ path('app_login_check') }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            username: username,
            password: password
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.token) {
            // Store the token in localStorage
            localStorage.setItem('api_token', data.token);
            window.location.href = '{{ path('app_dashboard') }}';
        } else {
            errorElement.textContent = data.message || 'Login failed';
            errorElement.style.display = 'block';
        }
    })
    .catch(error => {
        errorElement.textContent = 'An error occurred during login';
        errorElement.style.display = 'block';
    });
});
</script>
{% endblock %}
", "security/login.html.twig", "D:\\S6\\MrRojo\\crm-newapp\\templates\\security\\login.html.twig");
    }
}
