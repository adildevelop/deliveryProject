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

/* security/login.html.twig */
class __TwigTemplate_6d272c5f196bdc95cd40fc658bd30dce extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Log in!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"register-form\">
    <form method=\"post\">
        <div class=\"screen-1\">
            <svg class=\"logo\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" width=\"300\" height=\"300\" viewbox=\"0 0 640 480\" xml:space=\"preserve\">
                <g transform=\"matrix(3.31 0 0 3.31 320.4 240.4)\">
                    <circle style=\"stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(61,71,133); fill-rule: nonzero; opacity: 1;\" cx=\"0\" cy=\"0\" r=\"40\"></circle>
                </g>
                <g transform=\"matrix(0.98 0 0 0.98 268.7 213.7)\">
                    <circle style=\"stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;\" cx=\"0\" cy=\"0\" r=\"40\"></circle>
                </g>
                <g transform=\"matrix(1.01 0 0 1.01 362.9 210.9)\">
                    <circle style=\"stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;\" cx=\"0\" cy=\"0\" r=\"40\"></circle>
                </g>
                <g transform=\"matrix(0.92 0 0 0.92 318.5 286.5)\">
                    <circle style=\"stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;\" cx=\"0\" cy=\"0\" r=\"40\"></circle>
                </g>
                <g transform=\"matrix(0.16 -0.12 0.49 0.66 290.57 243.57)\">
                    <polygon style=\"stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;\" points=\"-50,-50 -50,50 50,50 50,-50 \"></polygon>
                </g>
                <g transform=\"matrix(0.16 0.1 -0.44 0.69 342.03 248.34)\">
                    <polygon style=\"stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;\" vector-effect=\"non-scaling-stroke\" points=\"-50,-50 -50,50 50,50 50,-50 \"></polygon>
                </g>
            </svg>

            <div class=\"email\">
                <label for=\"username\">Логин</label>
                <div class=\"sec-2\">
                    <ion-icon name=\"mail-outline\"></ion-icon>
                    <input type=\"text\" name=\"_username\" placeholder=\"Логин енгізіңіз\" value=\"";
        // line 34
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 34, $this->source); })()), "html", null, true);
        yield "\" id=\"username\" autocomplete=\"username\" required autofocus/>
                </div>
            </div>

            <div class=\"password\">
                <label for=\"password\">Пароль</label>
                <div class=\"sec-2\">
                    <ion-icon name=\"lock-closed-outline\"></ion-icon>
                    <input class=\"pas\" type=\"password\" name=\"_password\" placeholder=\"············\" id=\"password\" autocomplete=\"current-password\" required/>
                    <ion-icon class=\"show-hide\" name=\"eye-outline\"></ion-icon>
                </div>
            </div>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 47
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

            <button class=\"login\" type=\"submit\">Кіру</button>

            <div class=\"footer\"><span>Жүйеге тіркелу</span></div>
        </div>
        ";
        // line 53
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 53, $this->source); })())) {
            // line 54
            yield "            <div>";
            yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 54, $this->source); })()), "messageKey", [], "any", false, false, false, 54), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 54, $this->source); })()), "messageData", [], "any", false, false, false, 54), "security"), "html", null, true);
            yield "</div>
        ";
        }
        // line 56
        yield "
        ";
        // line 57
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57)) {
            // line 58
            yield "            <div>
                Сіз жүйеге кірдіңіз: ";
            // line 59
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "userIdentifier", [], "any", false, false, false, 59), "html", null, true);
            yield ", <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Шығу</a>
            </div>
        ";
        }
        // line 62
        yield "    </form>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  169 => 62,  161 => 59,  158 => 58,  156 => 57,  153 => 56,  147 => 54,  145 => 53,  136 => 47,  120 => 34,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block body %}
<div class=\"register-form\">
    <form method=\"post\">
        <div class=\"screen-1\">
            <svg class=\"logo\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" version=\"1.1\" width=\"300\" height=\"300\" viewbox=\"0 0 640 480\" xml:space=\"preserve\">
                <g transform=\"matrix(3.31 0 0 3.31 320.4 240.4)\">
                    <circle style=\"stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(61,71,133); fill-rule: nonzero; opacity: 1;\" cx=\"0\" cy=\"0\" r=\"40\"></circle>
                </g>
                <g transform=\"matrix(0.98 0 0 0.98 268.7 213.7)\">
                    <circle style=\"stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;\" cx=\"0\" cy=\"0\" r=\"40\"></circle>
                </g>
                <g transform=\"matrix(1.01 0 0 1.01 362.9 210.9)\">
                    <circle style=\"stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;\" cx=\"0\" cy=\"0\" r=\"40\"></circle>
                </g>
                <g transform=\"matrix(0.92 0 0 0.92 318.5 286.5)\">
                    <circle style=\"stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;\" cx=\"0\" cy=\"0\" r=\"40\"></circle>
                </g>
                <g transform=\"matrix(0.16 -0.12 0.49 0.66 290.57 243.57)\">
                    <polygon style=\"stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;\" points=\"-50,-50 -50,50 50,50 50,-50 \"></polygon>
                </g>
                <g transform=\"matrix(0.16 0.1 -0.44 0.69 342.03 248.34)\">
                    <polygon style=\"stroke: rgb(0,0,0); stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-dashoffset: 0; stroke-linejoin: miter; stroke-miterlimit: 4; fill: rgb(255,255,255); fill-rule: nonzero; opacity: 1;\" vector-effect=\"non-scaling-stroke\" points=\"-50,-50 -50,50 50,50 50,-50 \"></polygon>
                </g>
            </svg>

            <div class=\"email\">
                <label for=\"username\">Логин</label>
                <div class=\"sec-2\">
                    <ion-icon name=\"mail-outline\"></ion-icon>
                    <input type=\"text\" name=\"_username\" placeholder=\"Логин енгізіңіз\" value=\"{{ last_username }}\" id=\"username\" autocomplete=\"username\" required autofocus/>
                </div>
            </div>

            <div class=\"password\">
                <label for=\"password\">Пароль</label>
                <div class=\"sec-2\">
                    <ion-icon name=\"lock-closed-outline\"></ion-icon>
                    <input class=\"pas\" type=\"password\" name=\"_password\" placeholder=\"············\" id=\"password\" autocomplete=\"current-password\" required/>
                    <ion-icon class=\"show-hide\" name=\"eye-outline\"></ion-icon>
                </div>
            </div>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

            <button class=\"login\" type=\"submit\">Кіру</button>

            <div class=\"footer\"><span>Жүйеге тіркелу</span></div>
        </div>
        {% if error %}
            <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
        {% endif %}

        {% if app.user %}
            <div>
                Сіз жүйеге кірдіңіз: {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Шығу</a>
            </div>
        {% endif %}
    </form>
</div>
{% endblock %}
", "security/login.html.twig", "/var/www/delivery-app/templates/security/login.html.twig");
    }
}
