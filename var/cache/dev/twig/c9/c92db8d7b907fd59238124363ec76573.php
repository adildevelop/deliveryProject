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

/* base.html.twig */
class __TwigTemplate_e7f7ab8b47ca6ef841b79ac84c98c70c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html style=\"font-size: 16px;\" class=\"u-responsive-xl\"><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"keywords\" content=\"TransportationCompany, ​How to Start a Consulting Business\">
    <meta name=\"description\" content=\"\">
    <title>Home</title>
    <link rel=\"stylesheet\" href=\"styles/nicepage.css\" media=\"screen\">
    <link rel=\"stylesheet\" href=\"styles/main.css\" media=\"screen\">
    <script class=\"u-script\" type=\"text/javascript\" src=\"styles/jquery-1.9.1.min.js\" defer=\"\"></script>
    <script class=\"u-script\" type=\"text/javascript\" src=\"styles/nicepage.js\" defer=\"\"></script>
    <link rel=\"stylesheet\" href=\"styles/style.css\">
    <meta name=\"generator\" content=\"Nicepage 4.11.4, nicepage.com\">
    <link id=\"u-theme-google-font\" rel=\"stylesheet\" href=\"styles/theme.css\">
    <link id=\"u-page-google-font\" rel=\"stylesheet\" href=\"styles/page.css\">
    <style class=\"u-style\"> </style>
    <meta name=\"theme-color\" content=\"#0c4265\">
    <meta property=\"og:title\" content=\"Home\">
    <meta property=\"og:type\" content=\"website\">
</head>
<body class=\"u-body u-xl-mode\">
<header class=\"u-clearfix u-header u-header\" id=\"sec-bf8e\"><div class=\"u-clearfix u-sheet u-valign-middle u-sheet-1\">
        <a href=\"/\" class=\"u-image u-logo u-image-1\">
            <img src=\"images/default-logo.png\" class=\"u-logo-image u-logo-image-1\">
        </a>
        <nav class=\"u-menu u-menu-dropdown u-offcanvas u-menu-1 u-enable-responsive\" data-responsive-from=\"XL\">
            <div class=\"menu-collapse\" style=\"font-size: 1rem; letter-spacing: 0px; font-weight: 700;\">
                <a class=\"u-button-style u-custom-border u-custom-border-color u-custom-borders u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base\" href=\"#\">
                    <svg class=\"u-svg-link\" viewBox=\"0 0 24 24\"><use href=\"#menu-hamburger\"></use></svg>
                    <svg class=\"u-svg-content\" version=\"1.1\" id=\"menu-hamburger\" viewBox=\"0 0 16 16\" x=\"0px\" y=\"0px\" xlink=\"http://www.w3.org/1999/xlink\" xmlns=\"http://www.w3.org/2000/svg\"><g><rect y=\"1\" width=\"16\" height=\"2\"></rect><rect y=\"7\" width=\"16\" height=\"2\"></rect><rect y=\"13\" width=\"16\" height=\"2\"></rect>
                        </g></svg>
                </a>
            </div>
            <div class=\"u-custom-menu u-nav-container\">
                <ul class=\"u-nav u-spacing-20 u-unstyled u-nav-1\">
                    <li class=\"u-nav-item\"><a class=\"u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base active\" href=\"/\" style=\"padding: 10px;\">Басты бет</a></li>
                    <li class=\"u-nav-item\"><a class=\"u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base active\" href=\"/login\" style=\"padding: 10px;\">Жүйеге кіру</a></li>
                    <li class=\"u-nav-item\"><a class=\"u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base active\" href=\"/register\" style=\"padding: 10px;\">Жүйеге тіркелу</a></li>
                </ul>
            </div>
            <div class=\"u-custom-menu u-nav-container-collapse\">
                <div class=\"u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav\">
                    <div class=\"u-inner-container-layout u-sidenav-overflow\">
                        <div class=\"u-menu-close\"></div>
                        <p class=\"u-align-center\">Басты мәзір</p>
                        <ul class=\"u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2\">
                            <li class=\"u-nav-item\"><a class=\"u-button-style u-nav-link active\" href=\"/\">Басты бет</a></li>
                            ";
        // line 47
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 48
            yield "                                <li class=\"u-nav-item\"><a class=\"u-button-style u-nav-link active\" href=\"/admin\">Админ-панельге кіру</a></li>
                            ";
        }
        // line 50
        yield "                            ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50)) {
            // line 51
            yield "                                <li class=\"u-nav-item\"><a class=\"u-button-style u-nav-link active\" href=\"/login\">Жүйеге кіру</a></li>
                            ";
        }
        // line 53
        yield "                            <li class=\"u-nav-item\"><a class=\"u-button-style u-nav-link active\" href=\"/register\">Жүйеге тіркелу</a></li>
                            <li class=\"u-nav-item\"><a class=\"u-button-style u-nav-link active\" href=\"/delivery\">Хаттама жіберу</a></li>
                            ";
        // line 55
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55)) {
            // line 56
            yield "                                <li class=\"u-nav-item\"><a class=\"u-button-style u-nav-link active\" href=\"/logout\">Жүйеден шығу</a></li>
                            ";
        }
        // line 58
        yield "                        </ul>
                    </div>
                </div>
                <div class=\"u-black u-menu-overlay u-opacity u-opacity-70\"></div>
            </div>
            <style class=\"offcanvas-style\">            .u-offcanvas .u-sidenav { flex-basis: 250px !important; }            .u-offcanvas:not(.u-menu-open-right) .u-sidenav { margin-left: -250px; }            .u-offcanvas.u-menu-open-right .u-sidenav { margin-right: -250px; }            @keyframes menu-shift-left    { from { left: 0;        } to { left: 250px;  } }            @keyframes menu-unshift-left  { from { left: 250px;  } to { left: 0;        } }            @keyframes menu-shift-right   { from { right: 0;       } to { right: 250px; } }            @keyframes menu-unshift-right { from { right: 250px; } to { right: 0;       } }            </style></nav>
    </div></header>

";
        // line 66
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 67
        yield "
<footer class=\"u-align-center u-clearfix u-footer u-grey-80 u-footer\" id=\"sec-1038\">
    <div class=\"u-clearfix u-sheet u-sheet-1\">
        <p class=\"u-small-text u-text u-text-variant u-text-1\">Логистикалық компания &#169; 2024</p>
    </div>
</footer>
<style>.u-disable-duration * {transition-duration: 0s !important;}</style></body></html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 66
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
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
        return array (  145 => 66,  128 => 67,  126 => 66,  116 => 58,  112 => 56,  110 => 55,  106 => 53,  102 => 51,  99 => 50,  95 => 48,  93 => 47,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html style=\"font-size: 16px;\" class=\"u-responsive-xl\"><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"keywords\" content=\"TransportationCompany, ​How to Start a Consulting Business\">
    <meta name=\"description\" content=\"\">
    <title>Home</title>
    <link rel=\"stylesheet\" href=\"styles/nicepage.css\" media=\"screen\">
    <link rel=\"stylesheet\" href=\"styles/main.css\" media=\"screen\">
    <script class=\"u-script\" type=\"text/javascript\" src=\"styles/jquery-1.9.1.min.js\" defer=\"\"></script>
    <script class=\"u-script\" type=\"text/javascript\" src=\"styles/nicepage.js\" defer=\"\"></script>
    <link rel=\"stylesheet\" href=\"styles/style.css\">
    <meta name=\"generator\" content=\"Nicepage 4.11.4, nicepage.com\">
    <link id=\"u-theme-google-font\" rel=\"stylesheet\" href=\"styles/theme.css\">
    <link id=\"u-page-google-font\" rel=\"stylesheet\" href=\"styles/page.css\">
    <style class=\"u-style\"> </style>
    <meta name=\"theme-color\" content=\"#0c4265\">
    <meta property=\"og:title\" content=\"Home\">
    <meta property=\"og:type\" content=\"website\">
</head>
<body class=\"u-body u-xl-mode\">
<header class=\"u-clearfix u-header u-header\" id=\"sec-bf8e\"><div class=\"u-clearfix u-sheet u-valign-middle u-sheet-1\">
        <a href=\"/\" class=\"u-image u-logo u-image-1\">
            <img src=\"images/default-logo.png\" class=\"u-logo-image u-logo-image-1\">
        </a>
        <nav class=\"u-menu u-menu-dropdown u-offcanvas u-menu-1 u-enable-responsive\" data-responsive-from=\"XL\">
            <div class=\"menu-collapse\" style=\"font-size: 1rem; letter-spacing: 0px; font-weight: 700;\">
                <a class=\"u-button-style u-custom-border u-custom-border-color u-custom-borders u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base\" href=\"#\">
                    <svg class=\"u-svg-link\" viewBox=\"0 0 24 24\"><use href=\"#menu-hamburger\"></use></svg>
                    <svg class=\"u-svg-content\" version=\"1.1\" id=\"menu-hamburger\" viewBox=\"0 0 16 16\" x=\"0px\" y=\"0px\" xlink=\"http://www.w3.org/1999/xlink\" xmlns=\"http://www.w3.org/2000/svg\"><g><rect y=\"1\" width=\"16\" height=\"2\"></rect><rect y=\"7\" width=\"16\" height=\"2\"></rect><rect y=\"13\" width=\"16\" height=\"2\"></rect>
                        </g></svg>
                </a>
            </div>
            <div class=\"u-custom-menu u-nav-container\">
                <ul class=\"u-nav u-spacing-20 u-unstyled u-nav-1\">
                    <li class=\"u-nav-item\"><a class=\"u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base active\" href=\"/\" style=\"padding: 10px;\">Басты бет</a></li>
                    <li class=\"u-nav-item\"><a class=\"u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base active\" href=\"/login\" style=\"padding: 10px;\">Жүйеге кіру</a></li>
                    <li class=\"u-nav-item\"><a class=\"u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base active\" href=\"/register\" style=\"padding: 10px;\">Жүйеге тіркелу</a></li>
                </ul>
            </div>
            <div class=\"u-custom-menu u-nav-container-collapse\">
                <div class=\"u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav\">
                    <div class=\"u-inner-container-layout u-sidenav-overflow\">
                        <div class=\"u-menu-close\"></div>
                        <p class=\"u-align-center\">Басты мәзір</p>
                        <ul class=\"u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2\">
                            <li class=\"u-nav-item\"><a class=\"u-button-style u-nav-link active\" href=\"/\">Басты бет</a></li>
                            {% if is_granted(\"ROLE_ADMIN\") %}
                                <li class=\"u-nav-item\"><a class=\"u-button-style u-nav-link active\" href=\"/admin\">Админ-панельге кіру</a></li>
                            {% endif %}
                            {% if not app.user %}
                                <li class=\"u-nav-item\"><a class=\"u-button-style u-nav-link active\" href=\"/login\">Жүйеге кіру</a></li>
                            {% endif %}
                            <li class=\"u-nav-item\"><a class=\"u-button-style u-nav-link active\" href=\"/register\">Жүйеге тіркелу</a></li>
                            <li class=\"u-nav-item\"><a class=\"u-button-style u-nav-link active\" href=\"/delivery\">Хаттама жіберу</a></li>
                            {% if app.user %}
                                <li class=\"u-nav-item\"><a class=\"u-button-style u-nav-link active\" href=\"/logout\">Жүйеден шығу</a></li>
                            {% endif %}
                        </ul>
                    </div>
                </div>
                <div class=\"u-black u-menu-overlay u-opacity u-opacity-70\"></div>
            </div>
            <style class=\"offcanvas-style\">            .u-offcanvas .u-sidenav { flex-basis: 250px !important; }            .u-offcanvas:not(.u-menu-open-right) .u-sidenav { margin-left: -250px; }            .u-offcanvas.u-menu-open-right .u-sidenav { margin-right: -250px; }            @keyframes menu-shift-left    { from { left: 0;        } to { left: 250px;  } }            @keyframes menu-unshift-left  { from { left: 250px;  } to { left: 0;        } }            @keyframes menu-shift-right   { from { right: 0;       } to { right: 250px; } }            @keyframes menu-unshift-right { from { right: 250px; } to { right: 0;       } }            </style></nav>
    </div></header>

{% block body %}{% endblock %}

<footer class=\"u-align-center u-clearfix u-footer u-grey-80 u-footer\" id=\"sec-1038\">
    <div class=\"u-clearfix u-sheet u-sheet-1\">
        <p class=\"u-small-text u-text u-text-variant u-text-1\">Логистикалық компания &#169; 2024</p>
    </div>
</footer>
<style>.u-disable-duration * {transition-duration: 0s !important;}</style></body></html>", "base.html.twig", "/var/www/delivery-app/templates/base.html.twig");
    }
}
