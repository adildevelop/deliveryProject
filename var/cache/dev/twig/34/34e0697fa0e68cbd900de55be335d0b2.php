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

/* delivery/index.html.twig */
class __TwigTemplate_2217e1091316c23ab409f32f91b21625 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "delivery/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "delivery/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "delivery/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "    <section class=\"u-clearfix u-image u-section-4\" id=\"carousel_e7fb\" data-image-width=\"1980\" data-image-height=\"1141\">
        <div class=\"u-clearfix u-layout-wrap u-layout-wrap-1\">
            <div class=\"u-layout\">
                <div class=\"u-layout-row\">
                    <div class=\"u-align-left u-container-style u-layout-cell u-shape-rectangle u-size-25-lg u-size-25-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-1\">
                        <div class=\"u-container-layout u-valign-middle u-container-layout-1\">
                            <h2 class=\"u-text u-text-1\">
                                <span style=\"font-weight: 700;\"></span>Кез келген тапсырма мен бюджет үшін көлік шешімдерін зерттеңіз
                            </h2>
                            <p class=\"u-text u-text-2\">Сіздің тапсырмаларыңызға, бюджетіңізге ыңғайлы көлік шешімдерін таңдауға көмектеседі.</p>
                        </div>
                    </div>
                    <div class=\"u-container-style u-image u-layout-cell u-size-35-lg u-size-35-xl u-size-60-md u-size-60-sm u-size-60-xs u-image-1\" data-image-width=\"1000\" data-image-height=\"877\">
                        <div class=\"u-container-layout u-container-layout-2\"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"u-clearfix u-white u-section-11\" id=\"carousel_36e3\">
        <div class=\"u-expanded-width u-grey-5 u-shape u-shape-rectangle u-shape-1\"></div>
        <div class=\"u-clearfix u-gutter-26 u-layout-wrap u-layout-wrap-1\">
            <div class=\"u-layout\">
                <div class=\"u-layout-row\">
                    <div class=\"u-align-center u-container-style u-layout-cell u-size-30 u-white u-layout-cell-1\">
                        <div class=\"u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-container-layout-5\">
                            <h2 class=\"u-text u-text-default u-text-7\">Хаттама жіберу</h2>
                            <div class=\"u-align-center u-form u-form-1\">
                                <form action=\"/delivery\" method=\"POST\" class=\"u-clearfix u-form-spacing-28 u-form-vertical u-inner-form\" style=\"padding: 10px\" name=\"form\">
                                    <input type=\"hidden\" id=\"siteId\" name=\"siteId\" value=\"79320\" wfd-invisible=\"true\">
                                    <input type=\"hidden\" id=\"pageId\" name=\"pageId\" value=\"2067939\" wfd-invisible=\"true\">
                                    <div class=\"u-form-email u-form-group u-form-group-2\">
                                        <label for=\"email-5a14\" class=\"u-form-control-hidden u-label\" wfd-invisible=\"true\">Email</label>
                                        <input type=\"text\" placeholder=\"Жіберуші адресі\" name=\"senderAddress\" class=\"u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white\" required=\"\">
                                    </div>
                                    <div class=\"u-form-email u-form-group u-form-group-2\">
                                        <label for=\"email-5a14\" class=\"u-form-control-hidden u-label\" wfd-invisible=\"true\">Email</label>
                                        <input type=\"text\" placeholder=\"Жеткізу адресі\" name=\"receiverAddress\" class=\"u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white\" required=\"\">
                                    </div>
                                    <div class=\"u-form-email u-form-group u-form-group-2\">
                                        <label for=\"email-5a14\" class=\"u-form-control-hidden u-label\" wfd-invisible=\"true\">Email</label>
                                        <input type=\"text\" placeholder=\"Хаттама түрі\" name=\"deliveryType\" class=\"u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white\" required=\"\">
                                    </div>
                                    <div class=\"u-form-group u-form-name u-form-group-1\">
                                        <label for=\"name-5a14\" class=\"u-form-control-hidden u-label\" wfd-invisible=\"true\">Name</label>
                                        <input type=\"text\" placeholder=\"Қабылдаушының аты-жөні\" name=\"receiverName\" class=\"u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white\" required=\"\">
                                    </div>
                                    <div class=\"u-form-group u-form-name u-form-group-1\">
                                        <label for=\"name-5a14\" class=\"u-form-control-hidden u-label\" wfd-invisible=\"true\">Name</label>
                                        <input type=\"text\" placeholder=\"Жіберушінің аты-жөні\" name=\"senderName\" class=\"u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white\" required=\"\">
                                    </div>
                                    <div class=\"u-form-email u-form-group u-form-group-2\">
                                        <label for=\"email-5a14\" class=\"u-form-control-hidden u-label\" wfd-invisible=\"true\">Email</label>
                                        <input type=\"text\" placeholder=\"Қабылдаушының телефон нөмірі\" name=\"phone\" class=\"u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white\" required=\"\">
                                    </div>
                                    <div class=\"u-align-left u-form-group u-form-submit u-form-group-4\">
                                        <input type=\"submit\" value=\"Жіберу\" class=\"u-active-palette-1-base u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-dark-1 u-palette-3-base u-radius-10 u-btn-1\">
                                    </div>
                                    <div class=\"u-form-send-message u-form-send-success\" wfd-invisible=\"true\"> Хаттама жіберілді! </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
        return "delivery/index.html.twig";
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
        return array (  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <section class=\"u-clearfix u-image u-section-4\" id=\"carousel_e7fb\" data-image-width=\"1980\" data-image-height=\"1141\">
        <div class=\"u-clearfix u-layout-wrap u-layout-wrap-1\">
            <div class=\"u-layout\">
                <div class=\"u-layout-row\">
                    <div class=\"u-align-left u-container-style u-layout-cell u-shape-rectangle u-size-25-lg u-size-25-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-1\">
                        <div class=\"u-container-layout u-valign-middle u-container-layout-1\">
                            <h2 class=\"u-text u-text-1\">
                                <span style=\"font-weight: 700;\"></span>Кез келген тапсырма мен бюджет үшін көлік шешімдерін зерттеңіз
                            </h2>
                            <p class=\"u-text u-text-2\">Сіздің тапсырмаларыңызға, бюджетіңізге ыңғайлы көлік шешімдерін таңдауға көмектеседі.</p>
                        </div>
                    </div>
                    <div class=\"u-container-style u-image u-layout-cell u-size-35-lg u-size-35-xl u-size-60-md u-size-60-sm u-size-60-xs u-image-1\" data-image-width=\"1000\" data-image-height=\"877\">
                        <div class=\"u-container-layout u-container-layout-2\"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"u-clearfix u-white u-section-11\" id=\"carousel_36e3\">
        <div class=\"u-expanded-width u-grey-5 u-shape u-shape-rectangle u-shape-1\"></div>
        <div class=\"u-clearfix u-gutter-26 u-layout-wrap u-layout-wrap-1\">
            <div class=\"u-layout\">
                <div class=\"u-layout-row\">
                    <div class=\"u-align-center u-container-style u-layout-cell u-size-30 u-white u-layout-cell-1\">
                        <div class=\"u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-container-layout-5\">
                            <h2 class=\"u-text u-text-default u-text-7\">Хаттама жіберу</h2>
                            <div class=\"u-align-center u-form u-form-1\">
                                <form action=\"/delivery\" method=\"POST\" class=\"u-clearfix u-form-spacing-28 u-form-vertical u-inner-form\" style=\"padding: 10px\" name=\"form\">
                                    <input type=\"hidden\" id=\"siteId\" name=\"siteId\" value=\"79320\" wfd-invisible=\"true\">
                                    <input type=\"hidden\" id=\"pageId\" name=\"pageId\" value=\"2067939\" wfd-invisible=\"true\">
                                    <div class=\"u-form-email u-form-group u-form-group-2\">
                                        <label for=\"email-5a14\" class=\"u-form-control-hidden u-label\" wfd-invisible=\"true\">Email</label>
                                        <input type=\"text\" placeholder=\"Жіберуші адресі\" name=\"senderAddress\" class=\"u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white\" required=\"\">
                                    </div>
                                    <div class=\"u-form-email u-form-group u-form-group-2\">
                                        <label for=\"email-5a14\" class=\"u-form-control-hidden u-label\" wfd-invisible=\"true\">Email</label>
                                        <input type=\"text\" placeholder=\"Жеткізу адресі\" name=\"receiverAddress\" class=\"u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white\" required=\"\">
                                    </div>
                                    <div class=\"u-form-email u-form-group u-form-group-2\">
                                        <label for=\"email-5a14\" class=\"u-form-control-hidden u-label\" wfd-invisible=\"true\">Email</label>
                                        <input type=\"text\" placeholder=\"Хаттама түрі\" name=\"deliveryType\" class=\"u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white\" required=\"\">
                                    </div>
                                    <div class=\"u-form-group u-form-name u-form-group-1\">
                                        <label for=\"name-5a14\" class=\"u-form-control-hidden u-label\" wfd-invisible=\"true\">Name</label>
                                        <input type=\"text\" placeholder=\"Қабылдаушының аты-жөні\" name=\"receiverName\" class=\"u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white\" required=\"\">
                                    </div>
                                    <div class=\"u-form-group u-form-name u-form-group-1\">
                                        <label for=\"name-5a14\" class=\"u-form-control-hidden u-label\" wfd-invisible=\"true\">Name</label>
                                        <input type=\"text\" placeholder=\"Жіберушінің аты-жөні\" name=\"senderName\" class=\"u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white\" required=\"\">
                                    </div>
                                    <div class=\"u-form-email u-form-group u-form-group-2\">
                                        <label for=\"email-5a14\" class=\"u-form-control-hidden u-label\" wfd-invisible=\"true\">Email</label>
                                        <input type=\"text\" placeholder=\"Қабылдаушының телефон нөмірі\" name=\"phone\" class=\"u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white\" required=\"\">
                                    </div>
                                    <div class=\"u-align-left u-form-group u-form-submit u-form-group-4\">
                                        <input type=\"submit\" value=\"Жіберу\" class=\"u-active-palette-1-base u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-dark-1 u-palette-3-base u-radius-10 u-btn-1\">
                                    </div>
                                    <div class=\"u-form-send-message u-form-send-success\" wfd-invisible=\"true\"> Хаттама жіберілді! </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}", "delivery/index.html.twig", "/var/www/delivery-app/templates/delivery/index.html.twig");
    }
}
