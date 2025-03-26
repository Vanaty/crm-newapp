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
class __TwigTemplate_5348a1e8a7930065d5b746a6dd9fb2a1 extends Template
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

        yield "Connexion";
        
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
        .login-container {
            max-width: 400px;
            margin: 2rem auto;
        }
        .google-btn {
            background-color: #fff;
            color: #757575;
            border: 1px solid #ddd;
            padding: 0.5rem 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: all 0.3s ease;
            width: 100%;
            margin-bottom: 1rem;
        }
        .google-btn:hover {
            background-color: #f8f9fa;
            border-color: #ddd;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        .google-btn i {
            font-size: 1.2rem;
        }
        .divider {
            text-align: center;
            margin: 1rem 0;
            position: relative;
        }
        .divider::before,
        .divider::after {
            content: \"\";
            position: absolute;
            top: 50%;
            width: 45%;
            height: 1px;
            background-color: #ddd;
        }
        .divider::before { left: 0; }
        .divider::after { right: 0; }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 53
        yield "<div class=\"container\">
    <div class=\"login-container\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h2 class=\"text-center mb-4\">Connexion</h2>

                ";
        // line 59
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "request", [], "any", false, false, false, 59), "get", ["error"], "method", false, false, false, 59)) {
            // line 60
            yield "                    <div class=\"alert alert-danger\">
                        ";
            // line 61
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "request", [], "any", false, false, false, 61), "get", ["error"], "method", false, false, false, 61);
            yield "
                    </div>
                ";
        }
        // line 64
        yield "
                ";
        // line 65
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "request", [], "any", false, false, false, 65), "get", ["success"], "method", false, false, false, 65)) {
            // line 66
            yield "                    <div class=\"alert alert-success\">
                        ";
            // line 67
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "request", [], "any", false, false, false, 67), "get", ["success"], "method", false, false, false, 67);
            yield "
                    </div>
                ";
        }
        // line 70
        yield "
                ";
        // line 71
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 71, $this->source); })())) {
            // line 72
            yield "                    <div class=\"alert alert-danger\">
                        ";
            // line 73
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", true, true, false, 73)) {
                // line 74
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 74, $this->source); })()), "messageKey", [], "any", false, false, false, 74), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 74, $this->source); })()), "messageData", [], "any", false, false, false, 74), "security"), "html", null, true);
                yield "
                        ";
            } else {
                // line 76
                yield "                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 76, $this->source); })()), "html", null, true);
                yield "
                        ";
            }
            // line 78
            yield "                    </div>
                ";
        }
        // line 80
        yield "
                <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("connect_google");
        yield "\" class=\"btn google-btn\">
                    <i aria-hidden=\"true\" class=\"fab fa-google\"></i>
                    Se connecter avec Google
                </a>

                <div class=\"divider\">
                    <span class=\"px-2 bg-white\">ou</span>
                </div>

                <form action=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login_check");
        yield "\" method=\"post\" id=\"loginForm\">
                    <div class=\"mb-3\">
                        <label for=\"username\" class=\"form-label\">Nom d'utilisateur</label>
                        <input type=\"text\" value=\"";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 93, $this->source); })()), "html", null, true);
        yield "\" name=\"username\" id=\"username\" class=\"form-control\" required autofocus>
                    </div>

                    <div class=\"mb-3\">
                        <label for=\"password\" class=\"form-label\">Mot de passe</label>
                        <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control\" required>
                    </div>

                    <div class=\"mb-3\">
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\" id=\"remember_me\">
                            <label class=\"form-check-label\" for=\"remember_me\">
                                Se souvenir de moi
                            </label>
                        </div>
                    </div>

                    <button class=\"btn btn-primary w-100\" type=\"submit\" id=\"loginButton\">
                        Se connecter
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 120
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 121
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('loginForm');
        const button = document.getElementById('loginButton');

        form.addEventListener('submit', async function(e) {
            e.preventDefault();
            button.disabled = true;
            button.innerHTML = '<span class=\"spinner-border spinner-border-sm\" role=\"status\" aria-hidden=\"true\"></span> Connexion...';

            try {
                const formData = new FormData(form);
                const response = await fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'Accept': 'application/json'
                    }
                });

                const data = await response.json();

                if (data.status === 'error' || response.status === 401) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Erreur',
                        text: data.message || 'Identifiants invalides'
                    });
                } else if (data.status === 'success' || data.redirect) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Succès',
                        text: data.message || 'Connexion réussie',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        window.location.href = data.redirect;
                    });
                }
            } catch (error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Erreur',
                    text: 'Une erreur est survenue lors de la connexion'
                });
            } finally {
                button.disabled = false;
                button.innerHTML = 'Se connecter';
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
        return array (  275 => 121,  265 => 120,  231 => 93,  225 => 90,  213 => 81,  210 => 80,  206 => 78,  200 => 76,  194 => 74,  192 => 73,  189 => 72,  187 => 71,  184 => 70,  178 => 67,  175 => 66,  173 => 65,  170 => 64,  164 => 61,  161 => 60,  159 => 59,  151 => 53,  141 => 52,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .login-container {
            max-width: 400px;
            margin: 2rem auto;
        }
        .google-btn {
            background-color: #fff;
            color: #757575;
            border: 1px solid #ddd;
            padding: 0.5rem 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: all 0.3s ease;
            width: 100%;
            margin-bottom: 1rem;
        }
        .google-btn:hover {
            background-color: #f8f9fa;
            border-color: #ddd;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        .google-btn i {
            font-size: 1.2rem;
        }
        .divider {
            text-align: center;
            margin: 1rem 0;
            position: relative;
        }
        .divider::before,
        .divider::after {
            content: \"\";
            position: absolute;
            top: 50%;
            width: 45%;
            height: 1px;
            background-color: #ddd;
        }
        .divider::before { left: 0; }
        .divider::after { right: 0; }
    </style>
{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"login-container\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h2 class=\"text-center mb-4\">Connexion</h2>

                {% if app.request.get('error') %}
                    <div class=\"alert alert-danger\">
                        {{ app.request.get('error')|raw }}
                    </div>
                {% endif %}

                {% if app.request.get('success') %}
                    <div class=\"alert alert-success\">
                        {{ app.request.get('success')|raw }}
                    </div>
                {% endif %}

                {% if error %}
                    <div class=\"alert alert-danger\">
                        {% if error.messageKey is defined %}
                            {{ error.messageKey|trans(error.messageData, 'security') }}
                        {% else %}
                            {{ error }}
                        {% endif %}
                    </div>
                {% endif %}

                <a href=\"{{ path('connect_google') }}\" class=\"btn google-btn\">
                    <i aria-hidden=\"true\" class=\"fab fa-google\"></i>
                    Se connecter avec Google
                </a>

                <div class=\"divider\">
                    <span class=\"px-2 bg-white\">ou</span>
                </div>

                <form action=\"{{ path('app_login_check') }}\" method=\"post\" id=\"loginForm\">
                    <div class=\"mb-3\">
                        <label for=\"username\" class=\"form-label\">Nom d'utilisateur</label>
                        <input type=\"text\" value=\"{{ last_username }}\" name=\"username\" id=\"username\" class=\"form-control\" required autofocus>
                    </div>

                    <div class=\"mb-3\">
                        <label for=\"password\" class=\"form-label\">Mot de passe</label>
                        <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control\" required>
                    </div>

                    <div class=\"mb-3\">
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\" id=\"remember_me\">
                            <label class=\"form-check-label\" for=\"remember_me\">
                                Se souvenir de moi
                            </label>
                        </div>
                    </div>

                    <button class=\"btn btn-primary w-100\" type=\"submit\" id=\"loginButton\">
                        Se connecter
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('loginForm');
        const button = document.getElementById('loginButton');

        form.addEventListener('submit', async function(e) {
            e.preventDefault();
            button.disabled = true;
            button.innerHTML = '<span class=\"spinner-border spinner-border-sm\" role=\"status\" aria-hidden=\"true\"></span> Connexion...';

            try {
                const formData = new FormData(form);
                const response = await fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'Accept': 'application/json'
                    }
                });

                const data = await response.json();

                if (data.status === 'error' || response.status === 401) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Erreur',
                        text: data.message || 'Identifiants invalides'
                    });
                } else if (data.status === 'success' || data.redirect) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Succès',
                        text: data.message || 'Connexion réussie',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(() => {
                        window.location.href = data.redirect;
                    });
                }
            } catch (error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Erreur',
                    text: 'Une erreur est survenue lors de la connexion'
                });
            } finally {
                button.disabled = false;
                button.innerHTML = 'Se connecter';
            }
        });
    });
    </script>
{% endblock %}
", "security/login.html.twig", "D:\\S6\\MrRojo\\crm-newapp\\templates\\security\\login.html.twig");
    }
}
