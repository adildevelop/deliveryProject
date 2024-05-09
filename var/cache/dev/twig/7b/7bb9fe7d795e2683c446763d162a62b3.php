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

/* registration/register.html.twig */
class __TwigTemplate_97d7ce85c10414fffa17b3a8b3f80afb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        yield "Register";
        
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
        yield "    <div class=\"register-form\">
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
                    <label for=\"registration_form_username\">Логин</label>
                    <div class=\"sec-2\">
                        <ion-icon name=\"mail-outline\"></ion-icon>
                        <input type=\"text\" name=\"registration_form[username]\" placeholder=\"Логин енгізіңіз\" id=\"registration_form_username\" autocomplete=\"username\" required autofocus/>
                    </div>
                </div>

                <div class=\"password\">
                    <label for=\"registration_form_plainPassword\">Пароль</label>
                    <div class=\"sec-2\">
                        <ion-icon name=\"lock-closed-outline\"></ion-icon>
                        <input class=\"pas\" type=\"password\" name=\"registration_form[plainPassword]\" id=\"registration_form_plainPassword\" placeholder=\"*********\" required/>
                        <ion-icon class=\"show-hide\" name=\"eye-outline\"></ion-icon>
                    </div>
                </div>

                <div class=\"password\">
                    <label for=\"registration_form_agreeTerms\" class=\"required\">Сервис қызметтерімен келісу</label>
                    <input type=\"checkbox\" id=\"registration_form_agreeTerms\" name=\"registration_form[agreeTerms]\" required>
                </div>

                <input type=\"hidden\" id=\"registration_form__token\" name=\"registration_form[_token]\" value=\"";
        // line 52
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("registration_form"), "html", null, true);
        yield "\">

                <button class=\"login\" type=\"submit\">Тіркелу</button>

                <div class=\"footer\"><span>Жүйеге кіру</span></div>
            </div>
        </form>
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
        return "registration/register.html.twig";
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
        return array (  138 => 52,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

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
                    <label for=\"registration_form_username\">Логин</label>
                    <div class=\"sec-2\">
                        <ion-icon name=\"mail-outline\"></ion-icon>
                        <input type=\"text\" name=\"registration_form[username]\" placeholder=\"Логин енгізіңіз\" id=\"registration_form_username\" autocomplete=\"username\" required autofocus/>
                    </div>
                </div>

                <div class=\"password\">
                    <label for=\"registration_form_plainPassword\">Пароль</label>
                    <div class=\"sec-2\">
                        <ion-icon name=\"lock-closed-outline\"></ion-icon>
                        <input class=\"pas\" type=\"password\" name=\"registration_form[plainPassword]\" id=\"registration_form_plainPassword\" placeholder=\"*********\" required/>
                        <ion-icon class=\"show-hide\" name=\"eye-outline\"></ion-icon>
                    </div>
                </div>

                <div class=\"password\">
                    <label for=\"registration_form_agreeTerms\" class=\"required\">Сервис қызметтерімен келісу</label>
                    <input type=\"checkbox\" id=\"registration_form_agreeTerms\" name=\"registration_form[agreeTerms]\" required>
                </div>

                <input type=\"hidden\" id=\"registration_form__token\" name=\"registration_form[_token]\" value=\"{{ csrf_token('registration_form') }}\">

                <button class=\"login\" type=\"submit\">Тіркелу</button>

                <div class=\"footer\"><span>Жүйеге кіру</span></div>
            </div>
        </form>
    </div>
{% endblock %}
", "registration/register.html.twig", "/var/www/delivery-app/templates/registration/register.html.twig");
    }
}
