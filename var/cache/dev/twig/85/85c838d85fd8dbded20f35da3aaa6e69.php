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
class __TwigTemplate_1d5cc9f5a4f57b9653199a5c8b860d5e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <a href=\"#\" class=\"u-image u-logo u-image-1\">
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
                <ul class=\"u-nav u-spacing-20 u-unstyled u-nav-1\"><li class=\"u-nav-item\"><a class=\"u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base active\" href=\"#\" data-page-id=\"2067939\" style=\"padding: 10px;\">Home</a>
                    </li></ul>
            </div>
            <div class=\"u-custom-menu u-nav-container-collapse\">
                <div class=\"u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav\">
                    <div class=\"u-inner-container-layout u-sidenav-overflow\">
                        <div class=\"u-menu-close\"></div>
                        <ul class=\"u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2\"><li class=\"u-nav-item\"><a class=\"u-button-style u-nav-link active\" href=\"#\" data-page-id=\"2067939\">Home</a>
                            </li></ul>
                    </div>
                </div>
                <div class=\"u-black u-menu-overlay u-opacity u-opacity-70\"></div>
            </div>
            <style class=\"offcanvas-style\">            .u-offcanvas .u-sidenav { flex-basis: 250px !important; }            .u-offcanvas:not(.u-menu-open-right) .u-sidenav { margin-left: -250px; }            .u-offcanvas.u-menu-open-right .u-sidenav { margin-right: -250px; }            @keyframes menu-shift-left    { from { left: 0;        } to { left: 250px;  } }            @keyframes menu-unshift-left  { from { left: 250px;  } to { left: 0;        } }            @keyframes menu-shift-right   { from { right: 0;       } to { right: 250px; } }            @keyframes menu-unshift-right { from { right: 250px; } to { right: 0;       } }            </style></nav>
    </div></header>

<section class=\"u-clearfix u-image u-section-2\" id=\"carousel_58cc\" data-image-width=\"1618\" data-image-height=\"1080\">
    <div class=\"u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1\">
        <div class=\"u-align-left u-container-style u-group u-radius-10 u-shape-round u-white u-group-1 animated customAnimationIn-played\" data-animation-name=\"customAnimationIn\" data-animation-duration=\"750\" data-animation-delay=\"0\" style=\"will-change: transform, opacity; animation-duration: 750ms;\">
            <div class=\"u-container-layout u-valign-middle u-container-layout-1\">
                <h1 class=\"u-text u-text-palette-1-base u-text-1 animated customAnimationIn-played\" data-animation-name=\"customAnimationIn\" data-animation-duration=\"750\" data-animation-delay=\"250\" style=\"will-change: transform, opacity; animation-duration: 750ms;\"> Логистикалық компания
                </h1>
                <p class=\"u-text u-text-2\">\"Біздің компаниямыз жеткізу, тасымалдау және қағаздандыру кезінде қолайлы шешімдер ұсынады. Біздің еңбегіміз - клиенттерге жақсы қызмет көрсету, маңызды кезеңдерде жеткізу және есептілікті ұсыну.\"</p>
                <a href=\"#\" class=\"u-active-palette-1-base u-border-none u-btn u-btn-round u-button-style u-hover-palette-1-base u-palette-3-base u-radius-10 u-btn-2\">Көбірек білу</a>
            </div>
        </div>
    </div>
</section>
<section class=\"u-align-center u-clearfix u-palette-1-base u-section-3\" id=\"sec-626f\">
    <div class=\"u-clearfix u-sheet u-valign-middle u-sheet-1\">
        <div class=\"u-expanded-width u-list u-list-1\">
            <div class=\"u-repeater u-repeater-1\">
                <div class=\"u-align-center u-container-style u-list-item u-repeater-item u-video-cover\">
                    <div class=\"u-container-layout u-similar-container u-valign-top u-container-layout-1\"><span class=\"u-file-icon u-icon u-text-white u-icon-1 animated customAnimationIn-played\" data-animation-name=\"customAnimationIn\" data-animation-duration=\"1000\" data-animation-delay=\"250\" style=\"will-change: transform, opacity; animation-duration: 1000ms;\"><img src=\"data:image/png;base64,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\" alt=\"\"></span>
                        <h4 class=\"u-text u-text-default u-text-1 animated customAnimationIn-played\" data-animation-name=\"customAnimationIn\" data-animation-duration=\"1250\" data-animation-delay=\"0\" style=\"will-change: transform, opacity; animation-duration: 1250ms;\"> логистика</h4>
                        <p class=\"u-text u-text-2 animated customAnimationIn-played\" data-animation-name=\"customAnimationIn\" data-animation-duration=\"1250\" data-animation-delay=\"0\" style=\"will-change: transform, opacity; animation-duration: 1250ms;\">Біздің еңбегіміз - қызметкерлеріміздің көптеген және кез келген мәселелерді шешу үшін логистикалық білімімен донату.</p>
                    </div>
                </div>
                <div class=\"u-align-center u-container-style u-list-item u-repeater-item u-video-cover\">
                    <div class=\"u-container-layout u-similar-container u-valign-top u-container-layout-2\"><span class=\"u-file-icon u-icon u-text-white u-icon-2 animated customAnimationIn-played\" data-animation-name=\"customAnimationIn\" data-animation-duration=\"1000\" data-animation-delay=\"250\" style=\"will-change: transform, opacity; animation-duration: 1000ms;\"><img src=\"data:image/png;base64,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\" alt=\"\"></span>
                        <h4 class=\"u-text u-text-default u-text-3 animated customAnimationIn-played\" data-animation-name=\"customAnimationIn\" data-animation-duration=\"1250\" data-animation-delay=\"0\" style=\"will-change: transform, opacity; animation-duration: 1250ms;\"> жылдам жеткізу</h4>
                        <p class=\"u-text u-text-4 animated customAnimationIn-played\" data-animation-name=\"customAnimationIn\" data-animation-duration=\"1250\" data-animation-delay=\"0\" style=\"will-change: transform, opacity; animation-duration: 1250ms;\">Біздің көптеген және маманданған қызметкерлеріміз, жылдам жеткізу операцияларын бекітетіп, мүмкіндіктің максималды деңгейін қамтамасыз ету үшін жұмыс істейді.</p>
                    </div>
                </div>
                <div class=\"u-align-center u-container-style u-list-item u-repeater-item u-video-cover\">
                    <div class=\"u-container-layout u-similar-container u-valign-top u-container-layout-3\"><span class=\"u-file-icon u-icon u-text-white u-icon-3 animated customAnimationIn-played\" data-animation-name=\"customAnimationIn\" data-animation-duration=\"1000\" data-animation-delay=\"250\" style=\"will-change: transform, opacity; animation-duration: 1000ms;\"><img src=\"data:image/png;base64,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\" alt=\"\"></span>
                        <h4 class=\"u-text u-text-default u-text-5 animated customAnimationIn-played\" data-animation-name=\"customAnimationIn\" data-animation-duration=\"1250\" data-animation-delay=\"0\" style=\"will-change: transform, opacity; animation-duration: 1250ms;\"> тапсырысты қадағалау</h4>
                        <p class=\"u-text u-text-6 animated customAnimationIn-played\" data-animation-name=\"customAnimationIn\" data-animation-duration=\"1250\" data-animation-delay=\"0\" style=\"will-change: transform, opacity; animation-duration: 1250ms;\">Біздің еңбегіміз - клиенттерге қажетті жүйелерді және көмекті ұсыну.</p>
                    </div>
                </div>
                <div class=\"u-align-center u-container-style u-list-item u-repeater-item u-video-cover\">
                    <div class=\"u-container-layout u-similar-container u-valign-top u-container-layout-4\"><span class=\"u-file-icon u-icon u-text-white u-icon-4 animated customAnimationIn-played\" data-animation-name=\"customAnimationIn\" data-animation-duration=\"1000\" data-animation-delay=\"250\" style=\"will-change: transform, opacity; animation-duration: 1000ms;\"><img src=\"data:image/png;base64,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\" alt=\"\"></span>
                        <h4 class=\"u-text u-text-default u-text-7 animated customAnimationIn-played\" data-animation-name=\"customAnimationIn\" data-animation-duration=\"1250\" data-animation-delay=\"0\" style=\"will-change: transform, opacity; animation-duration: 1250ms;\"> сақтау</h4>
                        <p class=\"u-text u-text-8 animated customAnimationIn-played\" data-animation-name=\"customAnimationIn\" data-animation-duration=\"1250\" data-animation-delay=\"0\" style=\"will-change: transform, opacity; animation-duration: 1250ms;\">Біздің қызметкерлеріміздің мақсаты - клиенттердің мүмкіндіктеріне, тасымалдау операцияларының барлығына және басқа қажетті мәселелерге деген сақтау.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
                        <a href=\"#\" class=\"u-active-palette-1-base u-btn u-btn-round u-button-style u-hover-palette-1-base u-palette-3-base u-radius-10 u-btn-2\">учить больше</a>
                    </div>
                </div>
                <div class=\"u-container-style u-image u-layout-cell u-size-35-lg u-size-35-xl u-size-60-md u-size-60-sm u-size-60-xs u-image-1\" data-image-width=\"1000\" data-image-height=\"877\">
                    <div class=\"u-container-layout u-container-layout-2\"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"u-align-center u-clearfix u-palette-3-base u-section-5\" id=\"carousel_87fe\">
    <div class=\"u-clearfix u-sheet u-valign-middle u-sheet-1\">
        <h2 class=\"u-text u-text-body-alt-color u-text-default u-text-1\"> Біздің компанияның тарихы – құндылықтар тарихы</h2>
        <div class=\"u-expanded-width u-list u-list-1\">
            <div class=\"u-repeater u-repeater-1\">
                <div class=\"u-align-center-md u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-xl u-container-style u-list-item u-repeater-item u-shape-rectangle\">
                    <div class=\"u-container-layout u-similar-container u-container-layout-1\">
                        <div class=\"u-preserve-proportions u-shape u-shape-rectangle u-white u-shape-1\"></div>
                        <p class=\"u-text u-text-2\"> Әр бір құндылық қызметі, жұмыс тәжірибесі және қолданыстағы мамандану бізге жақындатқан келісімді факт. </p>
                    </div>
                </div>
                <div class=\"u-align-center-md u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-xl u-container-style u-list-item u-repeater-item u-shape-rectangle\">
                    <div class=\"u-container-layout u-similar-container u-container-layout-2\">
                        <div class=\"u-preserve-proportions u-shape u-shape-rectangle u-white u-shape-2\"></div>
                        <p class=\"u-text u-text-3\"> Біздің тарихымызда ұзақ мерзімді клиенттерімізбен көптеген ерекше жетістіктер жасалды. </p>
                    </div>
                </div>
                <div class=\"u-align-center-md u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-xl u-container-style u-list-item u-repeater-item u-shape-rectangle\">
                    <div class=\"u-container-layout u-similar-container u-container-layout-3\">
                        <div class=\"u-preserve-proportions u-shape u-shape-rectangle u-white u-shape-3\"></div>
                        <p class=\"u-text u-text-4\"> Құндылық - біздің компанияның кінәларынан бірі. </p>
                    </div>
                </div>
                <div class=\"u-align-center-md u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-xl u-container-style u-list-item u-repeater-item u-shape-rectangle\">
                    <div class=\"u-container-layout u-similar-container u-container-layout-4\">
                        <div class=\"u-preserve-proportions u-shape u-shape-rectangle u-white u-shape-4\"></div>
                        <p class=\"u-text u-text-5\"> Біз қолданыстағы, іске асыру мәселелерін шешу жолында әрқашан тиімді бақылау үшін дәмді жұмыс істейміз. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"u-clearfix u-palette-1-base u-section-6\" id=\"carousel_ed05\">
    <div class=\"u-clearfix u-sheet u-valign-middle u-sheet-1\">
        <div class=\"u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1\">
            <div class=\"u-layout\">
                <div class=\"u-layout-row\">
                    <div class=\"u-container-style u-layout-cell u-shape-rectangle u-size-30-lg u-size-30-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-1\">
                        <div class=\"u-container-layout u-valign-middle-lg u-valign-middle-xl u-valign-middle-xs u-container-layout-1\">
                            <div class=\"u-align-left u-container-style u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-radius-10 u-shape-round u-white u-group-1\">
                                <div class=\"u-container-layout u-valign-middle u-container-layout-2\"><span class=\"u-file-icon u-icon u-text-grey-70 u-icon-1\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAYAAADDPmHLAAAAAXNSR0IArs4c6QAAGvRJREFUeF7tXQuUXEWZrv/2DOkoEHVFDfiAKEbAFySIiGhQISRzqyYBR8AHLK8gKwbEBUEBI4hPQFhU1igCvnAZTDK3amYERMKuiqxEVmXVXQV8LBAEX9OGzEy677/ny6meM337vvr27Zkeu+ucnJwzXY///+9/61b9j+8n0W0dLQHqaO67zIuuAnS4EnQVoKsAHS6BDme/uwN0FaDDJdDh7Hd3gK4CdLgEOpz97g7QVYAOl0CHs9/dAboK0OES6HD2uztAVwE6XAIdzv5c3QFoYGCgODg4uL3Dn18o+8uWLSvuscce/uDg4GSSfOacAkgpVwkhPkJEP/A878wkBjvp94GBgV3Gx8dPE0J8SAhxhdb6M0n8zxkFkFK+VggBhvA/WrlSqRwwMjLyv0lMdsLvUspjhRCfEkIssvw+SUSLPM8rxfHf9gqwcuXKFzmO8wkiOj6EkQ1aazDesa2vr2+J4zhXCSHeEBQCM68zxnxkTiqAUmo3Zr5ACHGuEKIYw8ShWusfdpoGuK67FxFdLoQ4UYjIwB68/Yu01k9GyaftdoB169Y599133ylE9FEhxHOTHiwR/YfneXXanzRurv4upXwaM59HROcLIZ6Wgo/PaK3xEoW2tlIAKeWbhBDYzl6VgrGpLsysjDG6kTFzsC9JKd8phPi4EGKvBuifcBxn36Ghod+HjWkLBVBKvYSZ8eBlAmO+/d0J9Pt5sVh85eDgYKUBwcyZrv39/a/zff8aIcTSBKLLQoiekD7Xa61xO6hrs64AUspThRBg7ukJzN3DzGc5jnM2M+O7F2ynaa2vnzNPNQWha9as6X300Udx5f2AECKo9DUzENGtjuOcVy6XPSJ6RWD6ChEd4Hne/wSXnTUFWLVq1TPK5fJ6IhpIkMXjEIDneV8RQrDrui8kIlz95gXGPVIsFvf9ezEOua67LxF9XQhxcIJ8fi6EeK/W+rvo57quJCKv7kET3ep5Xp2sZ0UB+vr6Dncc52tCiBfGMIft7NpyubxudHR0bHo/13WvIKL3hzD5Qc/z8I2c000pdQozY1fcNYYRyGRdqVS6dvPmzZDVVJNS/kAIcWhgLPu+f/Dw8PCW6X+fUQVYtmxZz6677noJEX1QCFGIYe5Ox3HWDg0NQbvr2vLly5+1yy67PCiEeMb0H5n5r729vS/euHHjH+eiBvT19T2zUCisZ+a3xtDPQoibiOgCz/MeD+vnuu4yIror5LfbtdbLZ0UBpJT7CCGwpQU1czo9v2Pm9xtjbk16gEqp85n5kyH9Yq89SfPO1u94aI7jfJWZnx9Dw312u0+0e0gpbxdCHBmci5mPMMZsrv59RnYA13XfTkTXCSF2j2HuS0KIs7XWT6V5CHB47L777r8KEdhkoVBYvGnTpt+kmWe2+6Q56DHzDuyaS5YsuWrdunXVm1As6Uqppcz8o5BOP9RaT72ELVUAa9S5hojOiqG2RERrPM/7ZqMPw3Xdk4noy8FxODx5noc7c1s3bPmO48B+cVgMoQ8JIY7XWoc9zFj+pJTfEkIcE9JpldZ6CH9vmQJYzf5KhA2/StOWQqFw3KZNm/A9b7hBwbZs2fJTIcQBgcFMREs8z7u/4UlnaIBSak9mvk0I8fKoJZn5m5VK5YzgITgtif39/fv7vv+zkCvkA0uWLHkVdpOWKADMlUIIaN/RMcReXSwWP5DGZx3HsJTSFUKEWQHv0FoflVZYM9nPXvHwjd47Yl18BtfmYdeQUt4ohDgpZJ0TtdZfzV0B7LY2HHPY+yMzn5yT6ZaUUu9g5hvCLGBEdJTneXfM5MNNWst13YOIaFQI8Zywvsz8M2Y+bnh4+BdJcyX9PjAwsGB8fPxqIcQ/hvR9uFgsvixXBUixrX2vXC6fMDo6+n9JxCf97rrua4gId+VqfEDYkPu11ktgQEqabyZ+V0odwcz49u4Wsd4XSqXSOZs3bx5vhh579jrVegv3iJqLiN6bmwJYez7etqhtbUOxWDyh2S0fSgaHCDO/K8UZZhszH2aM+UkzAs1jrFLqGGb+RogFszr9eVrrK5pdSykFz+g1zPzqFHPdmYsCKKUOZOZvR21rQogbisXi6c04a6xWn0NEl6bwG/xNCPEviCCK84WnEFAuXVzXPY2I/jXC+AU7PW5BdbeZRhZfvXr1P5TL5WuFECekGIcX4jKt9YamFUAptZiZYZioscpNIwIPAWbbzNswooIKhcJNQog3JjDnM/ONvu9/aGRkZGsKQbS8i1LqJNAUsRCCNt+utcaBOXOTUq5g5uuJaGHCJH9g5ouWLl16fdWe0JQCwKHj+/69zPzSsIWJ6BLP8y7LzJkQwgoQb3OcEQlL3E1E72unq59148Iku0uIDLY5jrNqaGjoO1nlc9RRRz193rx5VwohzoibA4Yk7Ijz58+/bHBw8K/T+2ZWgIGBgcL4+PiIECLsqoV7+FrP8z6blTl7gsW2GGbImD7tQ0R0nud5G7Ku1Ypx1msJ403Yaf9PjuOsHBoaujfr2jYWEMazlyQ8/GHf98+NCp7NrACu615NRGeHLA7P1Cm4Y2ZlzvoNjBBi/5g5xnDK3bFjxzWjo6MTWddqxTj7Zn4/IrLpUbw0Wuv/zrq2Ukox880JIWG/IKJzPc/D2SyyZVIAe6j5YsSsZ2it12dlzm6bm4QQUdcXn4iuLxQKF23cuPEPWddp4TjYJr7FzKtD1kCQJoJYMz9813XXEhHC46MCRP5CROvGxsY+F3QTh36mGxWE9eXju1X3XWPmzxpj3tvonNX+UkqcYGHUCQZ7VLv8EQEknueFuTqzLpvrOCklglmRmBFscOL0a62xszXcrNkbD35tzOD7mHmVMeaRtAs0tAPY0zi+a2Fv552lUunoNFoXRpw97OHhh9IECxkRQYAPp2VupvtZBcZdv64x8/nGmE9npUlKCW8pwuei2s3FYvHURiOiUivAihUr5vX09PynEOKVIRT8enJy8pDbbrvtT1kYtGFMOMSFBTRiyg0TExMn3n777duyzD8TY6yJF9/9uhwGIvqK53lh9vhUpLmu+zEiujCiM67XF2mtP5ZqskCn1AqglLqYmWGECbYx3/dfm9V2bT8pcIyEJX/gNnGp53nIbslsR8gimEbG2O0ZLwfMzsF2T7lcPiLrQVUphSBY2PPDGgxe76y6dhuhudo3lQKsWrVq70qlgvCs+YFFYHiRxhhcBxtufX19+xHRPUS0IGTwNiI6sd2ud2FMuq77bhvwEvz590R0cFToVpLAXNd9KxHdEvFZfNj3fTU8PPxA0jxxv6dSACnlRiEEsnKD7UNZtx7ECzz22GO4Bx8YMu9WIlrueR58/W3dpJTPFkIg3PpZAUInK5XKISMjI/+VhYEVK1Y8v6enB778OgsrM99LRG4eZu5EBVBKHc3McF8G2wOlUunArIe+mNPyU0T0Rs/zEP/W9k1KietwXdIFM3/cGIPg1yyNXNe9nYjeEjIYEUKH5PHwMXesAth8c2wx+4YQskxrfXcW7lzXPRQ5fSHOEXzz3zoXtn3w3d/ff4jv+/eEyPF3Qoj90sY3BmVo7/pwdQfbX6wd4ZdZ5B42JlYBlFIXMnPd6bLJmDvkuGFrrwuFYuaLjTG4R7d9izv4MfMxxhh8Nhtuq1evfk65XMZVN5j4ycx8tDEGB+bcWqQC9Pf3v8D3fWhakJCx3t7el23YsOGxLFRIKfuFELD0BduWYrF4SDMu4yz0ZB2jlDqTmT8fMn5Ua70y67xRn0Yi+qLneWuyzhs1LlIBpJRwNBwXMvDcNNAjUQtKKXHwe03g9zIzL22HwI00AraJKb8WQjwz0H+CiF7ueR5+a7hZTAR8PoIHv62FQmG/TZs24ROQawtVAOvJwjYUtDc3dfBzXffNRBTm/gSezXm5ctbCyaSU/yyECLPqXaq1/nDWpaPmZeZ3GmOQVJN7C1UApdRlCBwIWS3zwQ9zSSnhIayJ14ev2nGcvT3Pg5dsLjScYXDtCx6MHy6VSvs3E88npcS1L3g2eqRUKu2d9baVJNA6BbD5e78LiS75ntb68KQJY36H4BClU+MfR+y7MSZNGFMTS+c3NGYXe4/WOuxMkGpxC/lSFyybR1BNHAF1CuC67moiqguuIKJ3eZ6HjN5MzcYN/jg42N75/z3TpLMwSCk1GJK8ua1cLu+ZNYEDbERkOfmVSmWvVoa31SmAlBLZKsEonz+VSqW9mtneXNe9gIiCqdvbFy5cuGD9+vUIWWr7tnLlyuc5joPdsTdA7Je01qc3w0DEofsBrXUQ7KGZZerG1ihAX1/fIsdxcIINKsbVWuv3NbOylBKHmLcH5rhba72smXlncqyUEpY9IHPVNN/3lwbz7hulS0oJg1swxW291jo23q/Rdep24Ol/kFLiDQU0W5DB/bN6+6oTSSlx+n9zYOqbFi5cePpc2AGs4Qdm2BcFeNiitU7C7kl8TlJK5PoH4wcv0FqHpcAnzpe2w9Sbbp0zOITUEJEXDFuEhoNOuDQ3M/Md+NesoqVlvNF+ruuuJCKkvNU0Zj7dGINgjczNKhdCxMNAMx61V+c7yuXyd/I+D0wpQAyDudxBpZRPCCHgOUtqP4X/u1KpfCOrDz1pgSy/R3zCxiYmJvZsNlDFehQhn6QGc/AIEV1VxQRKGpD0+3QFCIs6+XO5XF6Yx4OQUgLZOw7xM0jr48x8HRF9Li/PV5Iw4n6XUgJwomb7B33GmH9qZl6MtaF2DQFaEBHczFeOjY19sxkbwZQCSCkBG1KTeUNEGz3PS4rLT8W/lBIJj1HBnnFz/NkmfCAzaFaaTXqtC7REjKLneXWIXI0SaQNussY6/piITs4aO7FTAWD82W233ZAxEnT85JKwiDVc132P4ziLmBlo1kACRRJpYjxCVZhEdFu5XD5jZGTkt40KuNn+NjJnMGSePfLYnQYGBnadmJg4g5mBmrYvEjtTpHlNkWMhZD5eLBYvbzT5ducDiMKTcRznsKGhIUCO5d6Q+fPUU0+9kogOJCIlhABMbJJC/I2ZTzPG/FvuBMVMqJS6kpmDeLu/0lqHpsTlQZtSCjjJiJY6mJmBlB6XJLNzSURO9/T0qEbwkaoKEBZ4OFEulxfk8f1PIxA4oBzHOcn3/ZOI6MUxY3AQOscYg3zBGWlSSgR9BHEIbtJahwEvtIQmG3xyCvCCEvIkH/V9f3naWMGdCiClxBv1tgDl92itX9cSbuInhc8AIdQofhAJbiCE+JjWOiwBI1eSgUZmP4/BRJimMqCyErlixYrdC4XC5USEw2dUdtCfHcdx0+ze1R3g90G4NWa+0hgDt+esNOtzh2EKJtaoZJFcTuFxDCqlDmPm7wX7+L7/irRvWSsEKKUEhOwXIoJqsSRiK92kLCqykT8IQqhpzYQ15ckwEC+YGeFVwajbncvgTfA8DxiELWmu6wKbH7vRVAMiqTEGwSCzmquADO3t27fj+o7aAWENeEwHGWPqnm+1M7bb0BCtSqWyMG+rU9YnJKV8mRACWa5BMyymnHQc5w3NpFrH0eW67s0hUHff1lqvyMpP3uNs8gjyBsN2yi2lUun1UY48hB8DviSY6fuE1joUxSpv4tPOZ+/iSEAJKyaBYggH5XElC9IjpbzT3lCm/9R2EUxKqeOZGbaSsKTdLxtjQvMKkcochrn7S631fmkfzkz1sxB0yBeoVsaavnRLcAGllLC41SgdM19ojPnETPGddp0YewWuiKcYY5B8W9PwCQAjKEgwvX1fa/36tAvPZL+VK1e+ulAowDYRTFMDGTJr+nUUD0qpugMyIFmawUBopbyiPLpCCHgbUUCqBosZClCX2cLMnjEGZ4O2bFJK3L/rtFkI8ROtNYwnuR3OpJQQWI2yMfNAGkTz2RCe9Swik6sOuscW3qg50EIBwgCFb9Baw+jQtk1KiQoiwAqsabCa5WUpHBgYmD8+Pl6HXk5Eb0q6Xs2m4OwVGsm8waprANjYZ3oxSSgA0DaCUTltd8gJCtQmT/4q6GFEOZl58+btn0eCiV2jrtoWbPXtnsMQlV4WDDKFAgA0sAb0oV0POUElkFIiNr/OWEVEK5LAkdK8oa7rvsq6XWu6O47zwqgybGnmnYk+FtADtZWCZXm2aq2BtrrzMwkFQBRQTR06Zl5jjIkCgZoJ+lOtAXTMHTt2PBiCL3Ct1joOSyfV/LaOIa6BNW1iYmLXZoNAUhHQZCdbe6iukprFLNiZfQ0FqDvkENGxcyVDN+IQ+6AxJhY/L41slVIDzAyAhultUmudJa4hzZK59rHZ3YDtqSnJR0Qf8TxvXaQCtIsZOI00ovIYKpXK4mYri891BYD8XNcdsu726eKcCmTFDoAAi+B34t1aazga2r4hodL3fZxua2L1iegcz/PCcuxT8ySlRITUVIGl6kAi2j2pLHvqRVrcMQK+hiuVyp4w9UMBUEfuoOl0zKU8fdAdcZP5gtb63c3I15ZcqQN1LBQK+zQSdNEMDc2OjYo3rFYPgyn428xcU0sOwMJa6zAY2Gbpacl4pdR1zBx82ENa6zBco9Q0REXrTj9EpZ5sFjuGBeQS0Qko1IUdoC5jVwhxs9Y6mMUziyzEL62UWsfMwbTsmvJoGYmHfJC2VhOvn9c1MyNNDQ8Li2iufiLBINyI5wQ+AXcZYxCjNydaxHfuN1prFKtsqtmM5hqLGjOfZIyBJXJONNd1f0hEhwSI/YTW+kIoABxBQc9WqVQqPauZePOZlEzETWC71joY5dwwWUqp+4PlV1D9w/O8MxuebJYGRNwEdpr7EQ/weovYFSQPqNaJJUpniaeaZSOuayWtdVKRiUTylVKfZeb3BDr+WmsdhpyWON9sdHBd1xBRX2DtnYmnZHMCUWw5WMkK+LN1mbCzwUDSmkqps5gZ9XKmt4e01nHRxUnT7vxdSomDZB3i11y6CYThMhHRRz3Pu7gaFYzCiyjAONWYec6cA1zXvZSILg7Qf68xJq6kXCoFQFmcSqXyZPAgmEdSaCoCcugkpURl1pogGpSMQ0WX2LyAYrH4zEbhx3Ogt+EppJSoyBXMozdaa9nwZCEDIg5Rt2itw1DU8lgy1zmklMj6qvkcEtHbPM8brO4AACYIAx2eExZB13W/S0RHBKSWW0xDBHbfeG9v76KseIm5PuGYySzwJKKBaloVmmd6cmidV1AI8VCxWHxpHr71VjFs6xTD4VHjoMnTpR1lEp7t3Ik0MnVd9x1EVIftVI36np4eHobhg2DCdxhjQqtgpCGg1X1QM08IUQdXT0QH5VhCDtdlBIcGi2WggMXerYhGzktuSqmbmPnEwHw/1VrvDHSdUgCkHPX09MAxVINSiYRDYww65xZnlxdz9pR+lRAiiF9UE/SQx3pSSqTOhSWlXq61DsNUzGPZpudwXRcII8GCklMRXzWJBFEAke0aH2Dz9nDCRYTL9JZ74qYNtoRjCEkqUw1ZQr29vS9txwpmSqkjmbkOXHp6VfUaBbDOD+wCQQvaE0T06nZD84wqp1J1dDT9+gQmkFIiCDXMBHzHkiVLjq6WY8173azzSSkRPn9oYPx2a+XdWaE8DCewzjdgJ7i7WCy+uV0OhDZiF6hdzwsw+MTExMQ+rQjZstVSEWdXl5jSakTPRpUg6mwkhLhRa31ydb46BTjmmGMW7tixA1fCumTMqvWoUWJa0T/Ch4GlckM1CaM75iyAgpZvaYdwcauoQGUPFrEq+76/eHh4GC/OzhaFFi6JKAz7xnccZ3kzBY/zUIaYosxbi8XiolYbr5RS62EJDOFla6VSOXC2k2pjyszVIZrG1QuI+hSUbN75rOD7YoeanJzcEoahw8xnzwRyiD184g0Lq6H4y3K5fOTo6Ggd8HMeyp80h5QSJn28vDXPFjhCvu/vG8RYilQAG1GKQohhKJjbfd9fPTw8DFzhGWugafv27XcRUR1yCTM/WKlUDpgpSBul1GJmRmj1riEC+C0zH2mMQeLKjDVbdBshfsFCFqAhFO43FpTJYgffH4FJM2nTsDLVxmlUKjYzGGvVQNnZebY5jnPo0NAQ8PZnrEVZ2SwBwDlcPlMZRP39/a/wfR9Ipi8IEcCPyuXy4WEvRxIqF8KKcR64NSzvXAhRQWZOsVi8tpW3g1WrVr24UqmAucURT/c4rXUwfn9GFEFKGWaIqq6NSt6ntjrHwt738YzC4h9iUUISFQCc9PX1LXccBzUEoiJssO2cqbVGYelcm1XAL0fBzBLRpz3Pi4JIyZWWqMmklChte0nMYpqZz4qDaslCqMV3RLV2ZPyG1V32fd9fGfepTqUAIA6RQ0IIRJaElXlFF1yDrnMc56I8ihv19fUtwcMN8fJNl9VQsVg8tpW7T9oHY5MxUeM3SqYohfvhsbGxa/IItUOgChF9kpnjsAoTr8SpFQCCsFU/cPCLg28DJjCcM7dMTEwMN2KQQZKHEOJI3/ePRwHJBODIzxeLxbXt8PCrSmIthditoqqgo+uTgOAVQgyOjY3d1YgyoGBFoVBAaBcMOYdFKadFDl2jtb4xSYEbUgCrBItx2EgAc6yui7xD5B3Aho6iUMDbxT9E2OCkimhbWPL2RM69PeDVYdwEmEDB6vOMMfj2tl3DNYyZvxazU06nGcqAlwVFOiAXOG4e2bFjx1hPTw9eMsjnucwMcKyjgRqahKYK34QQ4lhjTF1Sa5iwGlYATGLvwahnj4jimUyU3MbM78palXOmtMXCvH4qxA3bahJ+6/u+2wh+YSYFqHKhlEIGLqJmg5lFeTOKt/5Gx3EubjeHVByjfX19hzuOg0pidWVycxYQXoxPT05OXtHIJxc0NKUAVSaATuU4zuUJB5KsPI/6vn9+I1qddaFWjLNl+NZaMMcgZEuzS+IafkNvb+8lWUPTclGAaTvCgcyMQEkETzSTlYPiCbg63WKMqYNpbVZqszHexhMAigfyQQ2GNNVTokhF8W3t+/7Xmy2xk6sCTKfWdd3XEBEYhfHm+cy8FxHhDQgCHCOeDwUlHyGiuyqVip6rb3taxbK7wpscx1HMjBcFCC34F1QK3x6YH2NmxGkguEPnaU9omQKECQOML1iwYCEzPxs5/fPnz9/aaIGDtEKei/2A6+M4zl7MjPC8P8ybN+/xVl9zZ1QB5uJD+XunuasAf+9POIG/rgJ0FaDDJdDh7Hd3gK4CdLgEOpz97g7QVYAOl0CHs9/dAboK0OES6HD2uztAVwE6XAIdzn53B+gqQIdLoMPZ7+4AHa4A/w9DFWcl7DUSswAAAABJRU5ErkJggg==\" alt=\"\"></span>
                                    <p class=\"u-custom-font u-heading-font u-text u-text-grey-60 u-text-1\"> Миссия әуедегі тасымалдағы сапаның эталоны ретінде танылуы керек. Біз бұған ең жақсы адамдарды табу арқылы жетеміз.</p>
                                    <div class=\"u-image u-image-circle u-image-1\" alt=\"\" data-image-width=\"150\" data-image-height=\"150\"></div>
                                    <p class=\"u-custom-font u-font-montserrat u-text u-text-2\">
                                        <span style=\"font-style: italic; font-weight: 700;\">Арман Жексенбаев</span>, біліктілігі жоғары жүргізуші
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"u-align-left u-container-style u-layout-cell u-palette-3-base u-radius-10 u-shape-round u-size-30-lg u-size-30-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-2\">
                        <div class=\"u-container-layout u-valign-middle u-container-layout-3\">
                            <h2 class=\"u-text u-text-body-alt-color u-text-3\">Біздің құндылықтарымыз</h2>
                            <p class=\"u-text u-text-4\">Жылдам жеткізу - біздің компаниямыздың негізгі мақсаты. Біздің көптеген және маманданған қызметкерлеріміз, жылдам жеткізу операцияларын бекітетіп, мүмкіндіктің максималды деңгейін қамтамасыз ету үшін жұмыс істейді.</p>
                            <div class=\"u-align-left u-social-icons u-spacing-20 u-social-icons-1\">
                                <a class=\"u-social-url\" target=\"_blank\" href=\"https://www.facebook.com/\" title=\"facebook\"><span class=\"u-icon u-icon-circle u-social-facebook u-social-icon u-text-white u-icon-2\"><svg class=\"u-svg-link\" preserveAspectRatio=\"xMidYMin slice\" viewBox=\"0 0 112 112\"><use href=\"#svg-f300\"></use></svg><svg class=\"u-svg-content\" viewBox=\"0 0 112 112\" x=\"0px\" y=\"0px\" id=\"svg-f300\"><path d=\"M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z\"></path></svg>


                  </span>
                                </a>
                                <a class=\"u-social-url\" target=\"_blank\" href=\"https://twitter.com/\" title=\"twitter\"><span class=\"u-icon u-icon-circle u-social-icon u-social-twitter u-text-white u-icon-3\"><svg class=\"u-svg-link\" preserveAspectRatio=\"xMidYMin slice\" viewBox=\"0 0 112 112\"><use href=\"#svg-112b\"></use></svg><svg class=\"u-svg-content\" viewBox=\"0 0 112 112\" x=\"0px\" y=\"0px\" id=\"svg-112b\"><path d=\"M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z\"></path></svg>


                  </span>
                                </a>
                                <a class=\"u-social-url\" target=\"_blank\" href=\"https://www.instagram.com/\" title=\"instagram\"><span class=\"u-icon u-icon-circle u-social-icon u-social-instagram u-text-white u-icon-4\"><svg class=\"u-svg-link\" preserveAspectRatio=\"xMidYMin slice\" viewBox=\"0 0 112 112\"><use href=\"#svg-19b1\"></use></svg><svg class=\"u-svg-content\" viewBox=\"0 0 112 112\" x=\"0px\" y=\"0px\" id=\"svg-19b1\"><path d=\"M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z\"></path><path d=\"M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z\"></path><path d=\"M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z\"></path></svg>


                  </span>
                                </a>
                                <a class=\"u-social-url\" target=\"_blank\" href=\"https://linkedin.com/\" title=\"linkedin\"><span class=\"u-icon u-icon-circle u-social-icon u-social-linkedin u-text-white u-icon-5\"><svg class=\"u-svg-link\" preserveAspectRatio=\"xMidYMin slice\" viewBox=\"0 0 112 112\"><use href=\"#svg-1afa\"></use></svg><svg class=\"u-svg-content\" viewBox=\"0 0 112 112\" x=\"0px\" y=\"0px\" id=\"svg-1afa\"><path d=\"M33.8,96.8H14.5v-58h19.3V96.8z M24.1,30.9L24.1,30.9c-6.6,0-10.8-4.5-10.8-10.1c0-5.8,4.3-10.1,10.9-10.1 S34.9,15,35.1,20.8C35.1,26.4,30.8,30.9,24.1,30.9z M103.3,96.8H84.1v-31c0-7.8-2.7-13.1-9.8-13.1c-5.3,0-8.5,3.6-9.9,7.1 c-0.6,1.3-0.6,3-0.6,4.8V97H44.5c0,0,0.3-52.6,0-58h19.3v8.2c2.6-3.9,7.2-9.6,17.4-9.6c12.7,0,22.2,8.4,22.2,26.1V96.8z\"></path></svg>


                  </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"u-align-center u-clearfix u-palette-1-base u-section-7\" id=\"sec-1dea\">
    <div class=\"u-clearfix u-sheet u-valign-middle u-sheet-1\">
        <div class=\"u-expanded-width u-list u-list-1\">
            <div class=\"u-repeater u-repeater-1\">
                <div class=\"u-align-center u-container-style u-custom-item u-list-item u-palette-3-base u-radius-30 u-repeater-item u-shape-round u-list-item-1\">
                    <div class=\"u-container-layout u-similar-container u-container-layout-1\">
                        <img alt=\"\" class=\"u-expanded-width u-image u-image-round u-radius-30 u-image-1\" data-image-width=\"1090\" data-image-height=\"856\" src=\"images/xcxcxc.jpg\">
                        <h3 class=\"u-custom-item u-text u-text-default u-text-1\"> Біздің компания</h3>
                        <p class=\"u-text u-text-2\">Тасымалдау мен логистика бойынша толық қызмет көрсетуші. Мұнда біз өз айырмашылықтымызмен таныламыз - қол жетімділік, біздің тасымалдаушылар мен клиенттерге қызмет көрсетуде қолдау көрсетеміз.</p>
                        <a href=\"#\" class=\"u-active-none u-border-2 u-border-active-palette-3-light-2 u-border-hover-palette-3-light-1 u-border-no-left u-border-no-right u-border-no-top u-border-white u-btn u-button-style u-custom-item u-hover-none u-none u-text-body-alt-color u-btn-1\" data-animation-name=\"\" data-animation-duration=\"0\" data-animation-delay=\"0\" data-animation-direction=\"\">учить больше</a>
                    </div>
                </div>
                <div class=\"u-align-center u-container-style u-custom-item u-list-item u-radius-30 u-repeater-item u-shape-round u-white u-list-item-2\">
                    <div class=\"u-container-layout u-similar-container u-container-layout-2\">
                        <img alt=\"\" class=\"u-expanded-width u-image u-image-round u-radius-30 u-image-2\" data-image-width=\"1090\" data-image-height=\"856\" src=\"images/vbvb.jpg\">
                        <h3 class=\"u-custom-item u-text u-text-default u-text-palette-1-base u-text-3\"> Тасымалдаушылар&nbsp;<br>
                        </h3>
                        <p class=\"u-text u-text-4\">Біздің бағдарламаларымыз жеткізу үшін өзара байланыстықты жақсы басқару, кіру мен талаптарды толтыру және өзгерту, кеңселендіру және алдыңғы бағамен сапаланатын кеңселер бойынша барлық талаптарды орындауға медеу көрсетеді.</p>
                        <a href=\"#\" class=\"u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-border-palette-3-base u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-style u-custom-item u-hover-none u-none u-radius-0 u-text-palette-3-base u-top-left-radius-0 u-top-right-radius-0 u-btn-2\">учить больше</a>
                    </div>
                </div>
                <div class=\"u-align-center u-container-style u-custom-item u-list-item u-palette-3-base u-radius-30 u-repeater-item u-shape-round u-list-item-3\">
                    <div class=\"u-container-layout u-similar-container u-container-layout-3\">
                        <img alt=\"\" class=\"u-expanded-width u-image u-image-round u-radius-30 u-image-3\" data-image-width=\"1090\" data-image-height=\"856\" src=\"images/cvcvcv.jpg\">
                        <h3 class=\"u-custom-item u-text u-text-default u-text-5\">Логистика</h3>
                        <p class=\"u-text u-text-6\">Біздің жұмыстарымыздың негізі. Мұнда біз өз қызметкерлеріміз және технологияларымыз арқылы адамдардың талаптарына сәйкес жеткізу мақсатында қызмет көрсетеміз.</p>
                        <a href=\"#\" class=\"u-active-none u-border-2 u-border-active-palette-3-light-2 u-border-hover-palette-3-light-1 u-border-no-left u-border-no-right u-border-no-top u-border-white u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-style u-custom-item u-hover-none u-none u-radius-0 u-text-body-alt-color u-top-left-radius-0 u-top-right-radius-0 u-btn-3\">учить больше</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"u-align-center u-clearfix u-palette-5-light-2 u-section-8\" id=\"carousel_008f\">
    <div class=\"u-expanded-width u-palette-1-base u-shape u-shape-rectangle u-shape-1\"></div>
    <div class=\"u-clearfix u-layout-wrap u-layout-wrap-1\">
        <div class=\"u-layout\">
            <div class=\"u-layout-row\">
                <div class=\"u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-white u-layout-cell-1\">
                    <div class=\"u-container-layout u-valign-middle u-container-layout-1\">
                        <h3 class=\"u-text u-text-palette-3-base u-text-1\">Компания туралы</h3>
                        <p class=\"u-text u-text-2\">Тактикалық ынтымақтастық пен идеямен бөлісуден бұрын жоғары құнды әрекеттерді жылдам ынталандырыңыз. Сымсыз мүмкіндіктер арқылы сатылатын зияткерлік капиталды монотонектальды түрде жасаңыз. Функционалды тестілеу процедуралары үшін қызметке негізделген желі өнімділігі.</p>
                        <a href=\"#\" class=\"u-active-palette-1-base u-btn u-btn-round u-button-style u-hover-palette-1-base u-palette-3-base u-radius-10 u-btn-2\">учить больше</a>
                    </div>
                </div>
                <div class=\"u-container-style u-image u-layout-cell u-left-cell u-size-30 u-image-1\" data-image-width=\"1200\" data-image-height=\"907\">
                    <div class=\"u-container-layout u-container-layout-2\"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"u-align-center u-clearfix u-palette-5-light-2 u-section-9\" id=\"carousel_8df6\">
    <div class=\"u-clearfix u-sheet u-valign-middle u-sheet-1\">
        <h2 class=\"u-text u-text-default u-text-1\">Көлік шешімдері</h2>
        <div class=\"u-list u-list-1\">
            <div class=\"u-repeater u-repeater-1\">
                <div class=\"u-container-style u-custom-item u-grey-5 u-list-item u-radius-10 u-repeater-item u-shape-round u-list-item-1\">
                    <div class=\"u-container-layout u-similar-container u-valign-top u-container-layout-1\">
                        <p class=\"u-text u-text-2\">Біздің компанияның мәселелерді шешу және клиенттерге қызмет көрсету мақсатында қолданатын маңызды бөлім. Біз сізге тапсырмаларыңызға құндылықтарды тартуға көмектеседік.</p>
                    </div>
                </div>
                <div class=\"u-container-style u-custom-item u-list-item u-repeater-item\">
                    <div class=\"u-container-layout u-similar-container u-valign-top u-container-layout-2\">
                        <p class=\"u-text u-text-3\">Клиенттердің тапсырмаларын тексеруден жұмыс істеу деңгейіне дейінгі жағдайларда қолданылады. Біз өз өнімдеріміз мен көрсеткіштерімізді пайдалана отырып, сіздің тапсырмаларыңызды өте тез және сапалы қабылдауға көмектесеміз.</p>
                    </div>
                </div>
                <div class=\"u-container-style u-custom-item u-list-item u-repeater-item u-shape-rectangle\">
                    <div class=\"u-container-layout u-similar-container u-valign-top u-container-layout-3\">
                        <p class=\"u-text u-text-4\">Біздің маманданған жұмысшыларымыз сіздің тапсырмаларыңызды шешу мақсатында тиімді транспорттық шешімдерді таңдауда көмектеседі. Біздің жетістіктерімізді пайдаланып, сіздің тапсырмаларыңызды қол жетімді жағдайларда жеткізуге көмектесеміз.</p>
                    </div>
                </div>
                <div class=\"u-container-style u-custom-item u-list-item u-palette-3-base u-radius-10 u-repeater-item u-shape-round u-list-item-4\">
                    <div class=\"u-container-layout u-similar-container u-valign-top u-container-layout-4\">
                        <p class=\"u-text u-text-5\">Біздің компаниясының бірінші артықшылығы. Олар клиенттерге қызмет көрсетуге, тапсырмаларды жеткізуге, сапалы қызмет көрсетуге және жағдайларды шешуге құқылы. біздің компаниясының бірінші артықшылығы. Олар клиенттерге қызмет көрсетуге, тапсырмаларды жеткізуге, сапалы қызмет көрсетуге және жағдайларды шешуге құқылы.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"u-clearfix u-palette-3-base u-section-10\" id=\"carousel_fc2e\">
    <div class=\"u-clearfix u-sheet u-valign-middle u-sheet-1\">
        <div class=\"u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1\">
            <div class=\"u-layout\">
                <div class=\"u-layout-row\">
                    <div class=\"u-align-left u-container-style u-image u-layout-cell u-radius-10 u-size-30-lg u-size-30-xl u-size-60-md u-size-60-sm u-size-60-xs u-image-1\" data-image-width=\"1000\" data-image-height=\"990\">
                        <div class=\"u-container-layout u-valign-middle u-container-layout-1\"></div>
                    </div>
                    <div class=\"u-container-style u-layout-cell u-shape-rectangle u-size-30-lg u-size-30-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-2\">
                        <div class=\"u-container-layout u-valign-middle-lg u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-container-layout-2\">
                            <div class=\"u-align-left u-container-style u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-radius-10 u-shape-round u-white u-group-1\">
                                <div class=\"u-container-layout u-valign-middle u-container-layout-3\">
                                    <h2 class=\"u-text u-text-palette-3-base u-text-1\">Біздің миссиямыз</h2>
                                    <p class=\"u-custom-font u-heading-font u-text u-text-grey-60 u-text-2\"> Клиенттерге жақсы қызмет көрсету, тапсырмаларды жеткізуге, жеткізілген тапсырмалардың сапасын сақтау. Біз қызмет көрсету деңгейін арттыру үшін технологияларды және бизнес процестерді жақсы басқару үшін дәмді жұмыс істейміз.</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                <div class=\"u-align-center-sm u-align-center-xs u-container-style u-layout-cell u-palette-3-base u-size-30 u-layout-cell-1\">
                    <div class=\"u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-container-layout-1\">
                        <div class=\"u-list u-list-1\">
                            <div class=\"u-repeater u-repeater-1\">
                                <div class=\"u-container-style u-list-item u-palette-3-base u-repeater-item u-list-item-1\">
                                    <div class=\"u-container-layout u-similar-container u-valign-middle-xl u-container-layout-2\"><span class=\"u-icon u-icon-circle u-text-white u-icon-1\"><svg class=\"u-svg-link\" preserveAspectRatio=\"xMidYMin slice\" viewBox=\"0 0 405.333 405.333\"><use href=\"#svg-9ccf\"></use></svg><svg class=\"u-svg-content\" viewBox=\"0 0 405.333 405.333\" x=\"0px\" y=\"0px\" id=\"svg-9ccf\" style=\"enable-background:new 0 0 405.333 405.333;\"><g><g><path d=\"M373.333,266.88c-25.003,0-49.493-3.904-72.725-11.584c-11.328-3.904-24.171-0.896-31.637,6.699l-46.016,34.752    c-52.779-28.16-86.571-61.931-114.389-114.368l33.813-44.928c8.512-8.533,11.563-20.971,7.915-32.64    C142.592,81.472,138.667,56.96,138.667,32c0-17.643-14.357-32-32-32H32C14.357,0,0,14.357,0,32    c0,205.845,167.488,373.333,373.333,373.333c17.643,0,32-14.357,32-32V298.88C405.333,281.237,390.976,266.88,373.333,266.88z     M384,373.333c0,5.888-4.8,10.667-10.667,10.667c-194.091,0-352-157.909-352-352c0-5.888,4.8-10.667,10.667-10.667h74.667    c5.867,0,10.667,4.779,10.667,10.667c0,27.243,4.267,53.995,12.629,79.36c1.237,3.989,0.235,8.107-3.669,12.16l-38.827,51.413    c-2.453,3.264-2.837,7.637-0.981,11.264c31.637,62.144,70.059,100.587,132.651,132.651c3.605,1.877,8.021,1.493,11.285-0.981    l52.523-39.808c2.859-2.816,7.061-3.797,10.859-2.539c25.515,8.427,52.267,12.693,79.531,12.693    c5.867,0,10.667,4.779,10.667,10.667V373.333z\"></path>
</g>
</g></svg></span>
                                        <h5 class=\"u-text u-text-1\">Бізге қоңырау шалыңыз</h5>
                                        <p class=\"u-text u-text-2\">8 (777) 123-45-67, 8 (702) 777-77-77</p>
                                    </div>
                                </div>
                                <div class=\"u-container-style u-list-item u-palette-3-base u-repeater-item u-list-item-2\">
                                    <div class=\"u-container-layout u-similar-container u-valign-middle-xl u-container-layout-3\"><span class=\"u-icon u-icon-circle u-text-white u-icon-2\"><svg class=\"u-svg-link\" preserveAspectRatio=\"xMidYMin slice\" viewBox=\"0 0 512 512\"><use href=\"#svg-ff8a\"></use></svg><svg class=\"u-svg-content\" viewBox=\"0 0 512 512\" x=\"0px\" y=\"0px\" id=\"svg-ff8a\" style=\"enable-background:new 0 0 512 512;\"><g><g><path d=\"M256,0C156.748,0,76,80.748,76,180c0,33.534,9.289,66.26,26.869,94.652l142.885,230.257    c2.737,4.411,7.559,7.091,12.745,7.091c0.04,0,0.079,0,0.119,0c5.231-0.041,10.063-2.804,12.75-7.292L410.611,272.22    C427.221,244.428,436,212.539,436,180C436,80.748,355.252,0,256,0z M384.866,256.818L258.272,468.186l-129.905-209.34    C113.734,235.214,105.8,207.95,105.8,180c0-82.71,67.49-150.2,150.2-150.2S406.1,97.29,406.1,180    C406.1,207.121,398.689,233.688,384.866,256.818z\"></path>
</g>
</g><g><g><path d=\"M256,90c-49.626,0-90,40.374-90,90c0,49.309,39.717,90,90,90c50.903,0,90-41.233,90-90C346,130.374,305.626,90,256,90z     M256,240.2c-33.257,0-60.2-27.033-60.2-60.2c0-33.084,27.116-60.2,60.2-60.2s60.1,27.116,60.1,60.2    C316.1,212.683,289.784,240.2,256,240.2z\"></path>
</g>
</g></svg></span>
                                        <h5 class=\"u-text u-text-3\">Орналасу адресі</h5>
                                        <p class=\"u-text u-text-4\">Сатыбалдина көшесі, 2. Юго-Восточный ауданы, Қазыбек би ауданы, Қарағанды, Қарағанды қ.</p>
                                    </div>
                                </div>
                                <div class=\"u-container-style u-list-item u-palette-3-base u-repeater-item u-list-item-3\">
                                    <div class=\"u-container-layout u-similar-container u-valign-middle-xl u-container-layout-4\"><span class=\"u-icon u-icon-circle u-text-white u-icon-3\"><svg class=\"u-svg-link\" preserveAspectRatio=\"xMidYMin slice\" viewBox=\"0 0 512.00042 512\"><use href=\"#svg-279b\"></use></svg><svg class=\"u-svg-content\" viewBox=\"0 0 512.00042 512\" id=\"svg-279b\"><path d=\"m172.578125 310.394531v2.308594h67.191406c6.414063 0 12.054688 7.953125 12.054688 17.183594 0 9.234375-5.640625 17.695312-12.054688 17.695312h-91.300781c-7.183594 0-17.441406-4.871093-17.441406-12.308593v-24.878907c0-40.265625 80.789062-63.347656 80.789062-95.917969 0-8.207031-5.128906-18.210937-19.492187-18.210937-10.257813 0-19.234375 5.128906-19.234375 19.238281 0 7.4375-7.953125 14.617188-21.03125 14.617188-10.257813 0-17.953125-4.617188-17.953125-20.773438 0-31.289062 28.726562-49.242187 57.960937-49.242187 29.753906 0 59.757813 18.722656 59.757813 53.089843 0 55.652344-79.246094 73.863282-79.246094 97.199219zm216.199219-20.773437c0-9.230469-4.101563-18.464844-12.308594-18.464844h-11.027344v-17.953125c0-8.460937-10.003906-12.054687-20.007812-12.054687-10 0-20.003906 3.59375-20.003906 12.054687v17.953125h-22.054688l45.394531-91.046875c.769531-1.792969 1.28125-3.332031 1.28125-4.871094 0-9.234375-13.078125-15.132812-20.003906-15.132812-6.414063 0-12.824219 2.820312-16.671875 10.257812l-59.242188 116.183594c-1.539062 2.820313-2.054687 5.640625-2.054687 7.691406 0 8.976563 5.898437 13.851563 13.335937 13.851563h60.015626v27.183594c0 8.207031 10.003906 12.3125 20.003906 12.3125 10.003906 0 20.007812-4.105469 20.007812-12.3125v-27.183594h11.027344c6.15625 0 12.308594-9.234375 12.308594-18.46875zm-48.105469 167.53125c-17.921875 7.503906-36.804687 12.554687-56.128906 15.003906-10.957031 1.390625-18.710938 11.402344-17.320313 22.359375 1.386719 10.925781 11.367188 18.714844 22.355469 17.324219 22.90625-2.90625 45.292969-8.894532 66.546875-17.792969 10.1875-4.269531 14.988281-15.984375 10.71875-26.171875-4.265625-10.1875-15.980469-14.992188-26.171875-10.722656zm116.710937-72.226563c-8.769531-6.710937-21.324218-5.039062-28.039062 3.730469-11.757812 15.367188-25.519531 29.113281-40.898438 40.855469-8.78125 6.699219-10.464843 19.25-3.765624 28.03125 6.714843 8.792969 19.269531 10.453125 28.035156 3.761719 18.199218-13.894532 34.484375-30.15625 48.398437-48.339844 6.710938-8.773438 5.039063-21.324219-3.730469-28.039063zm37.125-117.773437c-10.949218-1.386719-20.964843 6.371094-22.351562 17.328125-2.445312 19.320312-7.484375 38.199219-14.980469 56.121093-4.261719 10.1875.542969 21.90625 10.730469 26.167969 10.148438 4.246094 21.890625-.496093 26.171875-10.730469 8.886719-21.253906 14.863281-43.636718 17.761719-66.535156 1.386718-10.957031-6.371094-20.964844-17.332032-22.351562zm-265.167968 205.003906c-107.941406-13.691406-189.339844-106.214844-189.339844-215.210938 0-119.894531 97.023438-216.945312 216.941406-216.945312 108.996094 0 201.511719 81.398438 215.207032 189.34375 1.390624 10.957031 11.414062 18.714844 22.355468 17.324219 10.957032-1.390625 18.714844-11.398438 17.324219-22.359375-16.101563-126.933594-124.492187-224.308594-254.886719-224.308594-142.003906 0-256.941406 114.921875-256.941406 256.945312 0 130.527344 97.496094 238.804688 224.304688 254.894532 10.929687 1.382812 20.964843-6.335938 22.359374-17.324219 1.390626-10.957031-6.367187-20.96875-17.324218-22.359375zm0 0\"></path></svg></span>
                                        <h5 class=\"u-text u-text-5\">Жұмыс жасау тәртібі</h5>
                                        <p class=\"u-text u-text-6\">
                                            Пн – Пт: 10:00 – 20:00 <br>
                                            Сб – Вс: Жабылуда
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"u-align-center u-container-style u-layout-cell u-size-30 u-white u-layout-cell-2\">
                    <div class=\"u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-container-layout-5\">
                        <h2 class=\"u-text u-text-default u-text-7\">Бізбен хабарласу</h2>
                        <div class=\"u-align-left u-form u-form-1\">
                            <form action=\"#\" method=\"POST\" class=\"u-clearfix u-form-spacing-28 u-form-vertical u-inner-form\" style=\"padding: 10px\" source=\"email\" name=\"form\">
                                <input type=\"hidden\" id=\"siteId\" name=\"siteId\" value=\"79320\" wfd-invisible=\"true\">
                                <input type=\"hidden\" id=\"pageId\" name=\"pageId\" value=\"2067939\" wfd-invisible=\"true\">
                                <div class=\"u-form-group u-form-name u-form-group-1\">
                                    <label for=\"name-5a14\" class=\"u-form-control-hidden u-label\" wfd-invisible=\"true\">Name</label>
                                    <input type=\"text\" placeholder=\"Есіміңіз\" id=\"name-5a14\" name=\"name\" class=\"u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white\" required=\"\">
                                </div>
                                <div class=\"u-form-email u-form-group u-form-group-2\">
                                    <label for=\"email-5a14\" class=\"u-form-control-hidden u-label\" wfd-invisible=\"true\">Email</label>
                                    <input type=\"email\" placeholder=\"Поштаңыз\" id=\"email-5a14\" name=\"email\" class=\"u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white\" required=\"\">
                                </div>
                                <div class=\"u-form-group u-form-message u-form-group-3\">
                                    <label for=\"message-5a14\" class=\"u-form-control-hidden u-label\" wfd-invisible=\"true\">Message</label>
                                    <textarea placeholder=\"\" rows=\"4\" cols=\"50\" id=\"message-5a14\" name=\"message\" class=\"u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white\" required=\"\"></textarea>
                                </div>
                                <div class=\"u-align-left u-form-group u-form-submit u-form-group-4\">
                                    <a href=\"#\" class=\"u-active-palette-1-base u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-dark-1 u-palette-3-base u-radius-10 u-btn-1\">Хабарласу</a>
                                    <input type=\"submit\" value=\"submit\" class=\"u-form-control-hidden\" wfd-invisible=\"true\">
                                </div>
                                <div class=\"u-form-send-message u-form-send-success\" wfd-invisible=\"true\"> Thank you! Your message has been sent. </div>
                                <div class=\"u-form-send-error u-form-send-message\" wfd-invisible=\"true\"> Unable to send your message. Please fix errors then try again. </div>
                                <input type=\"hidden\" value=\"\" name=\"recaptchaResponse\" wfd-invisible=\"true\">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


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
    public function getDebugInfo()
    {
        return array ();
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
        <a href=\"#\" class=\"u-image u-logo u-image-1\">
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
                <ul class=\"u-nav u-spacing-20 u-unstyled u-nav-1\"><li class=\"u-nav-item\"><a class=\"u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-palette-2-base active\" href=\"#\" data-page-id=\"2067939\" style=\"padding: 10px;\">Home</a>
                    </li></ul>
            </div>
            <div class=\"u-custom-menu u-nav-container-collapse\">
                <div class=\"u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav\">
                    <div class=\"u-inner-container-layout u-sidenav-overflow\">
                        <div class=\"u-menu-close\"></div>
                        <ul class=\"u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2\"><li class=\"u-nav-item\"><a class=\"u-button-style u-nav-link active\" href=\"#\" data-page-id=\"2067939\">Home</a>
                            </li></ul>
                    </div>
                </div>
                <div class=\"u-black u-menu-overlay u-opacity u-opacity-70\"></div>
            </div>
            <style class=\"offcanvas-style\">            .u-offcanvas .u-sidenav { flex-basis: 250px !important; }            .u-offcanvas:not(.u-menu-open-right) .u-sidenav { margin-left: -250px; }            .u-offcanvas.u-menu-open-right .u-sidenav { margin-right: -250px; }            @keyframes menu-shift-left    { from { left: 0;        } to { left: 250px;  } }            @keyframes menu-unshift-left  { from { left: 250px;  } to { left: 0;        } }            @keyframes menu-shift-right   { from { right: 0;       } to { right: 250px; } }            @keyframes menu-unshift-right { from { right: 250px; } to { right: 0;       } }            </style></nav>
    </div></header>

<section class=\"u-clearfix u-image u-section-2\" id=\"carousel_58cc\" data-image-width=\"1618\" data-image-height=\"1080\">
    <div class=\"u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1\">
        <div class=\"u-align-left u-container-style u-group u-radius-10 u-shape-round u-white u-group-1 animated customAnimationIn-played\" data-animation-name=\"customAnimationIn\" data-animation-duration=\"750\" data-animation-delay=\"0\" style=\"will-change: transform, opacity; animation-duration: 750ms;\">
            <div class=\"u-container-layout u-valign-middle u-container-layout-1\">
                <h1 class=\"u-text u-text-palette-1-base u-text-1 animated customAnimationIn-played\" data-animation-name=\"customAnimationIn\" data-animation-duration=\"750\" data-animation-delay=\"250\" style=\"will-change: transform, opacity; animation-duration: 750ms;\"> Логистикалық компания
                </h1>
                <p class=\"u-text u-text-2\">\"Біздің компаниямыз жеткізу, тасымалдау және қағаздандыру кезінде қолайлы шешімдер ұсынады. Біздің еңбегіміз - клиенттерге жақсы қызмет көрсету, маңызды кезеңдерде жеткізу және есептілікті ұсыну.\"</p>
                <a href=\"#\" class=\"u-active-palette-1-base u-border-none u-btn u-btn-round u-button-style u-hover-palette-1-base u-palette-3-base u-radius-10 u-btn-2\">Көбірек білу</a>
            </div>
        </div>
    </div>
</section>
<section class=\"u-align-center u-clearfix u-palette-1-base u-section-3\" id=\"sec-626f\">
    <div class=\"u-clearfix u-sheet u-valign-middle u-sheet-1\">
        <div class=\"u-expanded-width u-list u-list-1\">
            <div class=\"u-repeater u-repeater-1\">
                <div class=\"u-align-center u-container-style u-list-item u-repeater-item u-video-cover\">
                    <div class=\"u-container-layout u-similar-container u-valign-top u-container-layout-1\"><span class=\"u-file-icon u-icon u-text-white u-icon-1 animated customAnimationIn-played\" data-animation-name=\"customAnimationIn\" data-animation-duration=\"1000\" data-animation-delay=\"250\" style=\"will-change: transform, opacity; animation-duration: 1000ms;\"><img src=\"data:image/png;base64,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\" alt=\"\"></span>
                        <h4 class=\"u-text u-text-default u-text-1 animated customAnimationIn-played\" data-animation-name=\"customAnimationIn\" data-animation-duration=\"1250\" data-animation-delay=\"0\" style=\"will-change: transform, opacity; animation-duration: 1250ms;\"> логистика</h4>
                        <p class=\"u-text u-text-2 animated customAnimationIn-played\" data-animation-name=\"customAnimationIn\" data-animation-duration=\"1250\" data-animation-delay=\"0\" style=\"will-change: transform, opacity; animation-duration: 1250ms;\">Біздің еңбегіміз - қызметкерлеріміздің көптеген және кез келген мәселелерді шешу үшін логистикалық білімімен донату.</p>
                    </div>
                </div>
                <div class=\"u-align-center u-container-style u-list-item u-repeater-item u-video-cover\">
                    <div class=\"u-container-layout u-similar-container u-valign-top u-container-layout-2\"><span class=\"u-file-icon u-icon u-text-white u-icon-2 animated customAnimationIn-played\" data-animation-name=\"customAnimationIn\" data-animation-duration=\"1000\" data-animation-delay=\"250\" style=\"will-change: transform, opacity; animation-duration: 1000ms;\"><img src=\"data:image/png;base64,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\" alt=\"\"></span>
                        <h4 class=\"u-text u-text-default u-text-3 animated customAnimationIn-played\" data-animation-name=\"customAnimationIn\" data-animation-duration=\"1250\" data-animation-delay=\"0\" style=\"will-change: transform, opacity; animation-duration: 1250ms;\"> жылдам жеткізу</h4>
                        <p class=\"u-text u-text-4 animated customAnimationIn-played\" data-animation-name=\"customAnimationIn\" data-animation-duration=\"1250\" data-animation-delay=\"0\" style=\"will-change: transform, opacity; animation-duration: 1250ms;\">Біздің көптеген және маманданған қызметкерлеріміз, жылдам жеткізу операцияларын бекітетіп, мүмкіндіктің максималды деңгейін қамтамасыз ету үшін жұмыс істейді.</p>
                    </div>
                </div>
                <div class=\"u-align-center u-container-style u-list-item u-repeater-item u-video-cover\">
                    <div class=\"u-container-layout u-similar-container u-valign-top u-container-layout-3\"><span class=\"u-file-icon u-icon u-text-white u-icon-3 animated customAnimationIn-played\" data-animation-name=\"customAnimationIn\" data-animation-duration=\"1000\" data-animation-delay=\"250\" style=\"will-change: transform, opacity; animation-duration: 1000ms;\"><img src=\"data:image/png;base64,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\" alt=\"\"></span>
                        <h4 class=\"u-text u-text-default u-text-5 animated customAnimationIn-played\" data-animation-name=\"customAnimationIn\" data-animation-duration=\"1250\" data-animation-delay=\"0\" style=\"will-change: transform, opacity; animation-duration: 1250ms;\"> тапсырысты қадағалау</h4>
                        <p class=\"u-text u-text-6 animated customAnimationIn-played\" data-animation-name=\"customAnimationIn\" data-animation-duration=\"1250\" data-animation-delay=\"0\" style=\"will-change: transform, opacity; animation-duration: 1250ms;\">Біздің еңбегіміз - клиенттерге қажетті жүйелерді және көмекті ұсыну.</p>
                    </div>
                </div>
                <div class=\"u-align-center u-container-style u-list-item u-repeater-item u-video-cover\">
                    <div class=\"u-container-layout u-similar-container u-valign-top u-container-layout-4\"><span class=\"u-file-icon u-icon u-text-white u-icon-4 animated customAnimationIn-played\" data-animation-name=\"customAnimationIn\" data-animation-duration=\"1000\" data-animation-delay=\"250\" style=\"will-change: transform, opacity; animation-duration: 1000ms;\"><img src=\"data:image/png;base64,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\" alt=\"\"></span>
                        <h4 class=\"u-text u-text-default u-text-7 animated customAnimationIn-played\" data-animation-name=\"customAnimationIn\" data-animation-duration=\"1250\" data-animation-delay=\"0\" style=\"will-change: transform, opacity; animation-duration: 1250ms;\"> сақтау</h4>
                        <p class=\"u-text u-text-8 animated customAnimationIn-played\" data-animation-name=\"customAnimationIn\" data-animation-duration=\"1250\" data-animation-delay=\"0\" style=\"will-change: transform, opacity; animation-duration: 1250ms;\">Біздің қызметкерлеріміздің мақсаты - клиенттердің мүмкіндіктеріне, тасымалдау операцияларының барлығына және басқа қажетті мәселелерге деген сақтау.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
                        <a href=\"#\" class=\"u-active-palette-1-base u-btn u-btn-round u-button-style u-hover-palette-1-base u-palette-3-base u-radius-10 u-btn-2\">учить больше</a>
                    </div>
                </div>
                <div class=\"u-container-style u-image u-layout-cell u-size-35-lg u-size-35-xl u-size-60-md u-size-60-sm u-size-60-xs u-image-1\" data-image-width=\"1000\" data-image-height=\"877\">
                    <div class=\"u-container-layout u-container-layout-2\"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"u-align-center u-clearfix u-palette-3-base u-section-5\" id=\"carousel_87fe\">
    <div class=\"u-clearfix u-sheet u-valign-middle u-sheet-1\">
        <h2 class=\"u-text u-text-body-alt-color u-text-default u-text-1\"> Біздің компанияның тарихы – құндылықтар тарихы</h2>
        <div class=\"u-expanded-width u-list u-list-1\">
            <div class=\"u-repeater u-repeater-1\">
                <div class=\"u-align-center-md u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-xl u-container-style u-list-item u-repeater-item u-shape-rectangle\">
                    <div class=\"u-container-layout u-similar-container u-container-layout-1\">
                        <div class=\"u-preserve-proportions u-shape u-shape-rectangle u-white u-shape-1\"></div>
                        <p class=\"u-text u-text-2\"> Әр бір құндылық қызметі, жұмыс тәжірибесі және қолданыстағы мамандану бізге жақындатқан келісімді факт. </p>
                    </div>
                </div>
                <div class=\"u-align-center-md u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-xl u-container-style u-list-item u-repeater-item u-shape-rectangle\">
                    <div class=\"u-container-layout u-similar-container u-container-layout-2\">
                        <div class=\"u-preserve-proportions u-shape u-shape-rectangle u-white u-shape-2\"></div>
                        <p class=\"u-text u-text-3\"> Біздің тарихымызда ұзақ мерзімді клиенттерімізбен көптеген ерекше жетістіктер жасалды. </p>
                    </div>
                </div>
                <div class=\"u-align-center-md u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-xl u-container-style u-list-item u-repeater-item u-shape-rectangle\">
                    <div class=\"u-container-layout u-similar-container u-container-layout-3\">
                        <div class=\"u-preserve-proportions u-shape u-shape-rectangle u-white u-shape-3\"></div>
                        <p class=\"u-text u-text-4\"> Құндылық - біздің компанияның кінәларынан бірі. </p>
                    </div>
                </div>
                <div class=\"u-align-center-md u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-xl u-container-style u-list-item u-repeater-item u-shape-rectangle\">
                    <div class=\"u-container-layout u-similar-container u-container-layout-4\">
                        <div class=\"u-preserve-proportions u-shape u-shape-rectangle u-white u-shape-4\"></div>
                        <p class=\"u-text u-text-5\"> Біз қолданыстағы, іске асыру мәселелерін шешу жолында әрқашан тиімді бақылау үшін дәмді жұмыс істейміз. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"u-clearfix u-palette-1-base u-section-6\" id=\"carousel_ed05\">
    <div class=\"u-clearfix u-sheet u-valign-middle u-sheet-1\">
        <div class=\"u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1\">
            <div class=\"u-layout\">
                <div class=\"u-layout-row\">
                    <div class=\"u-container-style u-layout-cell u-shape-rectangle u-size-30-lg u-size-30-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-1\">
                        <div class=\"u-container-layout u-valign-middle-lg u-valign-middle-xl u-valign-middle-xs u-container-layout-1\">
                            <div class=\"u-align-left u-container-style u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-radius-10 u-shape-round u-white u-group-1\">
                                <div class=\"u-container-layout u-valign-middle u-container-layout-2\"><span class=\"u-file-icon u-icon u-text-grey-70 u-icon-1\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAYAAADDPmHLAAAAAXNSR0IArs4c6QAAGvRJREFUeF7tXQuUXEWZrv/2DOkoEHVFDfiAKEbAFySIiGhQISRzqyYBR8AHLK8gKwbEBUEBI4hPQFhU1igCvnAZTDK3amYERMKuiqxEVmXVXQV8LBAEX9OGzEy677/ny6meM337vvr27Zkeu+ucnJwzXY///+9/61b9j+8n0W0dLQHqaO67zIuuAnS4EnQVoKsAHS6BDme/uwN0FaDDJdDh7Hd3gK4CdLgEOpz97g7QVYAOl0CHs9/dAboK0OES6HD2uztAVwE6XAIdzv5c3QFoYGCgODg4uL3Dn18o+8uWLSvuscce/uDg4GSSfOacAkgpVwkhPkJEP/A878wkBjvp94GBgV3Gx8dPE0J8SAhxhdb6M0n8zxkFkFK+VggBhvA/WrlSqRwwMjLyv0lMdsLvUspjhRCfEkIssvw+SUSLPM8rxfHf9gqwcuXKFzmO8wkiOj6EkQ1aazDesa2vr2+J4zhXCSHeEBQCM68zxnxkTiqAUmo3Zr5ACHGuEKIYw8ShWusfdpoGuK67FxFdLoQ4UYjIwB68/Yu01k9GyaftdoB169Y599133ylE9FEhxHOTHiwR/YfneXXanzRurv4upXwaM59HROcLIZ6Wgo/PaK3xEoW2tlIAKeWbhBDYzl6VgrGpLsysjDG6kTFzsC9JKd8phPi4EGKvBuifcBxn36Ghod+HjWkLBVBKvYSZ8eBlAmO+/d0J9Pt5sVh85eDgYKUBwcyZrv39/a/zff8aIcTSBKLLQoiekD7Xa61xO6hrs64AUspThRBg7ukJzN3DzGc5jnM2M+O7F2ynaa2vnzNPNQWha9as6X300Udx5f2AECKo9DUzENGtjuOcVy6XPSJ6RWD6ChEd4Hne/wSXnTUFWLVq1TPK5fJ6IhpIkMXjEIDneV8RQrDrui8kIlz95gXGPVIsFvf9ezEOua67LxF9XQhxcIJ8fi6EeK/W+rvo57quJCKv7kET3ep5Xp2sZ0UB+vr6Dncc52tCiBfGMIft7NpyubxudHR0bHo/13WvIKL3hzD5Qc/z8I2c000pdQozY1fcNYYRyGRdqVS6dvPmzZDVVJNS/kAIcWhgLPu+f/Dw8PCW6X+fUQVYtmxZz6677noJEX1QCFGIYe5Ox3HWDg0NQbvr2vLly5+1yy67PCiEeMb0H5n5r729vS/euHHjH+eiBvT19T2zUCisZ+a3xtDPQoibiOgCz/MeD+vnuu4yIror5LfbtdbLZ0UBpJT7CCGwpQU1czo9v2Pm9xtjbk16gEqp85n5kyH9Yq89SfPO1u94aI7jfJWZnx9Dw312u0+0e0gpbxdCHBmci5mPMMZsrv59RnYA13XfTkTXCSF2j2HuS0KIs7XWT6V5CHB47L777r8KEdhkoVBYvGnTpt+kmWe2+6Q56DHzDuyaS5YsuWrdunXVm1As6Uqppcz8o5BOP9RaT72ELVUAa9S5hojOiqG2RERrPM/7ZqMPw3Xdk4noy8FxODx5noc7c1s3bPmO48B+cVgMoQ8JIY7XWoc9zFj+pJTfEkIcE9JpldZ6CH9vmQJYzf5KhA2/StOWQqFw3KZNm/A9b7hBwbZs2fJTIcQBgcFMREs8z7u/4UlnaIBSak9mvk0I8fKoJZn5m5VK5YzgITgtif39/fv7vv+zkCvkA0uWLHkVdpOWKADMlUIIaN/RMcReXSwWP5DGZx3HsJTSFUKEWQHv0FoflVZYM9nPXvHwjd47Yl18BtfmYdeQUt4ohDgpZJ0TtdZfzV0B7LY2HHPY+yMzn5yT6ZaUUu9g5hvCLGBEdJTneXfM5MNNWst13YOIaFQI8Zywvsz8M2Y+bnh4+BdJcyX9PjAwsGB8fPxqIcQ/hvR9uFgsvixXBUixrX2vXC6fMDo6+n9JxCf97rrua4gId+VqfEDYkPu11ktgQEqabyZ+V0odwcz49u4Wsd4XSqXSOZs3bx5vhh579jrVegv3iJqLiN6bmwJYez7etqhtbUOxWDyh2S0fSgaHCDO/K8UZZhszH2aM+UkzAs1jrFLqGGb+RogFszr9eVrrK5pdSykFz+g1zPzqFHPdmYsCKKUOZOZvR21rQogbisXi6c04a6xWn0NEl6bwG/xNCPEviCCK84WnEFAuXVzXPY2I/jXC+AU7PW5BdbeZRhZfvXr1P5TL5WuFECekGIcX4jKt9YamFUAptZiZYZioscpNIwIPAWbbzNswooIKhcJNQog3JjDnM/ONvu9/aGRkZGsKQbS8i1LqJNAUsRCCNt+utcaBOXOTUq5g5uuJaGHCJH9g5ouWLl16fdWe0JQCwKHj+/69zPzSsIWJ6BLP8y7LzJkQwgoQb3OcEQlL3E1E72unq59148Iku0uIDLY5jrNqaGjoO1nlc9RRRz193rx5VwohzoibA4Yk7Ijz58+/bHBw8K/T+2ZWgIGBgcL4+PiIECLsqoV7+FrP8z6blTl7gsW2GGbImD7tQ0R0nud5G7Ku1Ypx1msJ403Yaf9PjuOsHBoaujfr2jYWEMazlyQ8/GHf98+NCp7NrACu615NRGeHLA7P1Cm4Y2ZlzvoNjBBi/5g5xnDK3bFjxzWjo6MTWddqxTj7Zn4/IrLpUbw0Wuv/zrq2Ukox880JIWG/IKJzPc/D2SyyZVIAe6j5YsSsZ2it12dlzm6bm4QQUdcXn4iuLxQKF23cuPEPWddp4TjYJr7FzKtD1kCQJoJYMz9813XXEhHC46MCRP5CROvGxsY+F3QTh36mGxWE9eXju1X3XWPmzxpj3tvonNX+UkqcYGHUCQZ7VLv8EQEknueFuTqzLpvrOCklglmRmBFscOL0a62xszXcrNkbD35tzOD7mHmVMeaRtAs0tAPY0zi+a2Fv552lUunoNFoXRpw97OHhh9IECxkRQYAPp2VupvtZBcZdv64x8/nGmE9npUlKCW8pwuei2s3FYvHURiOiUivAihUr5vX09PynEOKVIRT8enJy8pDbbrvtT1kYtGFMOMSFBTRiyg0TExMn3n777duyzD8TY6yJF9/9uhwGIvqK53lh9vhUpLmu+zEiujCiM67XF2mtP5ZqskCn1AqglLqYmWGECbYx3/dfm9V2bT8pcIyEJX/gNnGp53nIbslsR8gimEbG2O0ZLwfMzsF2T7lcPiLrQVUphSBY2PPDGgxe76y6dhuhudo3lQKsWrVq70qlgvCs+YFFYHiRxhhcBxtufX19+xHRPUS0IGTwNiI6sd2ud2FMuq77bhvwEvz590R0cFToVpLAXNd9KxHdEvFZfNj3fTU8PPxA0jxxv6dSACnlRiEEsnKD7UNZtx7ECzz22GO4Bx8YMu9WIlrueR58/W3dpJTPFkIg3PpZAUInK5XKISMjI/+VhYEVK1Y8v6enB778OgsrM99LRG4eZu5EBVBKHc3McF8G2wOlUunArIe+mNPyU0T0Rs/zEP/W9k1KietwXdIFM3/cGIPg1yyNXNe9nYjeEjIYEUKH5PHwMXesAth8c2wx+4YQskxrfXcW7lzXPRQ5fSHOEXzz3zoXtn3w3d/ff4jv+/eEyPF3Qoj90sY3BmVo7/pwdQfbX6wd4ZdZ5B42JlYBlFIXMnPd6bLJmDvkuGFrrwuFYuaLjTG4R7d9izv4MfMxxhh8Nhtuq1evfk65XMZVN5j4ycx8tDEGB+bcWqQC9Pf3v8D3fWhakJCx3t7el23YsOGxLFRIKfuFELD0BduWYrF4SDMu4yz0ZB2jlDqTmT8fMn5Ua70y67xRn0Yi+qLneWuyzhs1LlIBpJRwNBwXMvDcNNAjUQtKKXHwe03g9zIzL22HwI00AraJKb8WQjwz0H+CiF7ueR5+a7hZTAR8PoIHv62FQmG/TZs24ROQawtVAOvJwjYUtDc3dfBzXffNRBTm/gSezXm5ctbCyaSU/yyECLPqXaq1/nDWpaPmZeZ3GmOQVJN7C1UApdRlCBwIWS3zwQ9zSSnhIayJ14ev2nGcvT3Pg5dsLjScYXDtCx6MHy6VSvs3E88npcS1L3g2eqRUKu2d9baVJNA6BbD5e78LiS75ntb68KQJY36H4BClU+MfR+y7MSZNGFMTS+c3NGYXe4/WOuxMkGpxC/lSFyybR1BNHAF1CuC67moiqguuIKJ3eZ6HjN5MzcYN/jg42N75/z3TpLMwSCk1GJK8ua1cLu+ZNYEDbERkOfmVSmWvVoa31SmAlBLZKsEonz+VSqW9mtneXNe9gIiCqdvbFy5cuGD9+vUIWWr7tnLlyuc5joPdsTdA7Je01qc3w0DEofsBrXUQ7KGZZerG1ihAX1/fIsdxcIINKsbVWuv3NbOylBKHmLcH5rhba72smXlncqyUEpY9IHPVNN/3lwbz7hulS0oJg1swxW291jo23q/Rdep24Ol/kFLiDQU0W5DB/bN6+6oTSSlx+n9zYOqbFi5cePpc2AGs4Qdm2BcFeNiitU7C7kl8TlJK5PoH4wcv0FqHpcAnzpe2w9Sbbp0zOITUEJEXDFuEhoNOuDQ3M/Md+NesoqVlvNF+ruuuJCKkvNU0Zj7dGINgjczNKhdCxMNAMx61V+c7yuXyd/I+D0wpQAyDudxBpZRPCCHgOUtqP4X/u1KpfCOrDz1pgSy/R3zCxiYmJvZsNlDFehQhn6QGc/AIEV1VxQRKGpD0+3QFCIs6+XO5XF6Yx4OQUgLZOw7xM0jr48x8HRF9Li/PV5Iw4n6XUgJwomb7B33GmH9qZl6MtaF2DQFaEBHczFeOjY19sxkbwZQCSCkBG1KTeUNEGz3PS4rLT8W/lBIJj1HBnnFz/NkmfCAzaFaaTXqtC7REjKLneXWIXI0SaQNussY6/piITs4aO7FTAWD82W233ZAxEnT85JKwiDVc132P4ziLmBlo1kACRRJpYjxCVZhEdFu5XD5jZGTkt40KuNn+NjJnMGSePfLYnQYGBnadmJg4g5mBmrYvEjtTpHlNkWMhZD5eLBYvbzT5ducDiMKTcRznsKGhIUCO5d6Q+fPUU0+9kogOJCIlhABMbJJC/I2ZTzPG/FvuBMVMqJS6kpmDeLu/0lqHpsTlQZtSCjjJiJY6mJmBlB6XJLNzSURO9/T0qEbwkaoKEBZ4OFEulxfk8f1PIxA4oBzHOcn3/ZOI6MUxY3AQOscYg3zBGWlSSgR9BHEIbtJahwEvtIQmG3xyCvCCEvIkH/V9f3naWMGdCiClxBv1tgDl92itX9cSbuInhc8AIdQofhAJbiCE+JjWOiwBI1eSgUZmP4/BRJimMqCyErlixYrdC4XC5USEw2dUdtCfHcdx0+ze1R3g90G4NWa+0hgDt+esNOtzh2EKJtaoZJFcTuFxDCqlDmPm7wX7+L7/irRvWSsEKKUEhOwXIoJqsSRiK92kLCqykT8IQqhpzYQ15ckwEC+YGeFVwajbncvgTfA8DxiELWmu6wKbH7vRVAMiqTEGwSCzmquADO3t27fj+o7aAWENeEwHGWPqnm+1M7bb0BCtSqWyMG+rU9YnJKV8mRACWa5BMyymnHQc5w3NpFrH0eW67s0hUHff1lqvyMpP3uNs8gjyBsN2yi2lUun1UY48hB8DviSY6fuE1joUxSpv4tPOZ+/iSEAJKyaBYggH5XElC9IjpbzT3lCm/9R2EUxKqeOZGbaSsKTdLxtjQvMKkcochrn7S631fmkfzkz1sxB0yBeoVsaavnRLcAGllLC41SgdM19ojPnETPGddp0YewWuiKcYY5B8W9PwCQAjKEgwvX1fa/36tAvPZL+VK1e+ulAowDYRTFMDGTJr+nUUD0qpugMyIFmawUBopbyiPLpCCHgbUUCqBosZClCX2cLMnjEGZ4O2bFJK3L/rtFkI8ROtNYwnuR3OpJQQWI2yMfNAGkTz2RCe9Swik6sOuscW3qg50EIBwgCFb9Baw+jQtk1KiQoiwAqsabCa5WUpHBgYmD8+Pl6HXk5Eb0q6Xs2m4OwVGsm8waprANjYZ3oxSSgA0DaCUTltd8gJCtQmT/4q6GFEOZl58+btn0eCiV2jrtoWbPXtnsMQlV4WDDKFAgA0sAb0oV0POUElkFIiNr/OWEVEK5LAkdK8oa7rvsq6XWu6O47zwqgybGnmnYk+FtADtZWCZXm2aq2BtrrzMwkFQBRQTR06Zl5jjIkCgZoJ+lOtAXTMHTt2PBiCL3Ct1joOSyfV/LaOIa6BNW1iYmLXZoNAUhHQZCdbe6iukprFLNiZfQ0FqDvkENGxcyVDN+IQ+6AxJhY/L41slVIDzAyAhultUmudJa4hzZK59rHZ3YDtqSnJR0Qf8TxvXaQCtIsZOI00ovIYKpXK4mYri891BYD8XNcdsu726eKcCmTFDoAAi+B34t1aazga2r4hodL3fZxua2L1iegcz/PCcuxT8ySlRITUVIGl6kAi2j2pLHvqRVrcMQK+hiuVyp4w9UMBUEfuoOl0zKU8fdAdcZP5gtb63c3I15ZcqQN1LBQK+zQSdNEMDc2OjYo3rFYPgyn428xcU0sOwMJa6zAY2Gbpacl4pdR1zBx82ENa6zBco9Q0REXrTj9EpZ5sFjuGBeQS0Qko1IUdoC5jVwhxs9Y6mMUziyzEL62UWsfMwbTsmvJoGYmHfJC2VhOvn9c1MyNNDQ8Li2iufiLBINyI5wQ+AXcZYxCjNydaxHfuN1prFKtsqtmM5hqLGjOfZIyBJXJONNd1f0hEhwSI/YTW+kIoABxBQc9WqVQqPauZePOZlEzETWC71joY5dwwWUqp+4PlV1D9w/O8MxuebJYGRNwEdpr7EQ/weovYFSQPqNaJJUpniaeaZSOuayWtdVKRiUTylVKfZeb3BDr+WmsdhpyWON9sdHBd1xBRX2DtnYmnZHMCUWw5WMkK+LN1mbCzwUDSmkqps5gZ9XKmt4e01nHRxUnT7vxdSomDZB3i11y6CYThMhHRRz3Pu7gaFYzCiyjAONWYec6cA1zXvZSILg7Qf68xJq6kXCoFQFmcSqXyZPAgmEdSaCoCcugkpURl1pogGpSMQ0WX2LyAYrH4zEbhx3Ogt+EppJSoyBXMozdaa9nwZCEDIg5Rt2itw1DU8lgy1zmklMj6qvkcEtHbPM8brO4AACYIAx2eExZB13W/S0RHBKSWW0xDBHbfeG9v76KseIm5PuGYySzwJKKBaloVmmd6cmidV1AI8VCxWHxpHr71VjFs6xTD4VHjoMnTpR1lEp7t3Ik0MnVd9x1EVIftVI36np4eHobhg2DCdxhjQqtgpCGg1X1QM08IUQdXT0QH5VhCDtdlBIcGi2WggMXerYhGzktuSqmbmPnEwHw/1VrvDHSdUgCkHPX09MAxVINSiYRDYww65xZnlxdz9pR+lRAiiF9UE/SQx3pSSqTOhSWlXq61DsNUzGPZpudwXRcII8GCklMRXzWJBFEAke0aH2Dz9nDCRYTL9JZ74qYNtoRjCEkqUw1ZQr29vS9txwpmSqkjmbkOXHp6VfUaBbDOD+wCQQvaE0T06nZD84wqp1J1dDT9+gQmkFIiCDXMBHzHkiVLjq6WY8173azzSSkRPn9oYPx2a+XdWaE8DCewzjdgJ7i7WCy+uV0OhDZiF6hdzwsw+MTExMQ+rQjZstVSEWdXl5jSakTPRpUg6mwkhLhRa31ydb46BTjmmGMW7tixA1fCumTMqvWoUWJa0T/Ch4GlckM1CaM75iyAgpZvaYdwcauoQGUPFrEq+76/eHh4GC/OzhaFFi6JKAz7xnccZ3kzBY/zUIaYosxbi8XiolYbr5RS62EJDOFla6VSOXC2k2pjyszVIZrG1QuI+hSUbN75rOD7YoeanJzcEoahw8xnzwRyiD184g0Lq6H4y3K5fOTo6Ggd8HMeyp80h5QSJn28vDXPFjhCvu/vG8RYilQAG1GKQohhKJjbfd9fPTw8DFzhGWugafv27XcRUR1yCTM/WKlUDpgpSBul1GJmRmj1riEC+C0zH2mMQeLKjDVbdBshfsFCFqAhFO43FpTJYgffH4FJM2nTsDLVxmlUKjYzGGvVQNnZebY5jnPo0NAQ8PZnrEVZ2SwBwDlcPlMZRP39/a/wfR9Ipi8IEcCPyuXy4WEvRxIqF8KKcR64NSzvXAhRQWZOsVi8tpW3g1WrVr24UqmAucURT/c4rXUwfn9GFEFKGWaIqq6NSt6ntjrHwt738YzC4h9iUUISFQCc9PX1LXccBzUEoiJssO2cqbVGYelcm1XAL0fBzBLRpz3Pi4JIyZWWqMmklChte0nMYpqZz4qDaslCqMV3RLV2ZPyG1V32fd9fGfepTqUAIA6RQ0IIRJaElXlFF1yDrnMc56I8ihv19fUtwcMN8fJNl9VQsVg8tpW7T9oHY5MxUeM3SqYohfvhsbGxa/IItUOgChF9kpnjsAoTr8SpFQCCsFU/cPCLg28DJjCcM7dMTEwMN2KQQZKHEOJI3/ePRwHJBODIzxeLxbXt8PCrSmIthditoqqgo+uTgOAVQgyOjY3d1YgyoGBFoVBAaBcMOYdFKadFDl2jtb4xSYEbUgCrBItx2EgAc6yui7xD5B3Aho6iUMDbxT9E2OCkimhbWPL2RM69PeDVYdwEmEDB6vOMMfj2tl3DNYyZvxazU06nGcqAlwVFOiAXOG4e2bFjx1hPTw9eMsjnucwMcKyjgRqahKYK34QQ4lhjTF1Sa5iwGlYATGLvwahnj4jimUyU3MbM78palXOmtMXCvH4qxA3bahJ+6/u+2wh+YSYFqHKhlEIGLqJmg5lFeTOKt/5Gx3EubjeHVByjfX19hzuOg0pidWVycxYQXoxPT05OXtHIJxc0NKUAVSaATuU4zuUJB5KsPI/6vn9+I1qddaFWjLNl+NZaMMcgZEuzS+IafkNvb+8lWUPTclGAaTvCgcyMQEkETzSTlYPiCbg63WKMqYNpbVZqszHexhMAigfyQQ2GNNVTokhF8W3t+/7Xmy2xk6sCTKfWdd3XEBEYhfHm+cy8FxHhDQgCHCOeDwUlHyGiuyqVip6rb3taxbK7wpscx1HMjBcFCC34F1QK3x6YH2NmxGkguEPnaU9omQKECQOML1iwYCEzPxs5/fPnz9/aaIGDtEKei/2A6+M4zl7MjPC8P8ybN+/xVl9zZ1QB5uJD+XunuasAf+9POIG/rgJ0FaDDJdDh7Hd3gK4CdLgEOpz97g7QVYAOl0CHs9/dAboK0OES6HD2uztAVwE6XAIdzn53B+gqQIdLoMPZ7+4AHa4A/w9DFWcl7DUSswAAAABJRU5ErkJggg==\" alt=\"\"></span>
                                    <p class=\"u-custom-font u-heading-font u-text u-text-grey-60 u-text-1\"> Миссия әуедегі тасымалдағы сапаның эталоны ретінде танылуы керек. Біз бұған ең жақсы адамдарды табу арқылы жетеміз.</p>
                                    <div class=\"u-image u-image-circle u-image-1\" alt=\"\" data-image-width=\"150\" data-image-height=\"150\"></div>
                                    <p class=\"u-custom-font u-font-montserrat u-text u-text-2\">
                                        <span style=\"font-style: italic; font-weight: 700;\">Арман Жексенбаев</span>, біліктілігі жоғары жүргізуші
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"u-align-left u-container-style u-layout-cell u-palette-3-base u-radius-10 u-shape-round u-size-30-lg u-size-30-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-2\">
                        <div class=\"u-container-layout u-valign-middle u-container-layout-3\">
                            <h2 class=\"u-text u-text-body-alt-color u-text-3\">Біздің құндылықтарымыз</h2>
                            <p class=\"u-text u-text-4\">Жылдам жеткізу - біздің компаниямыздың негізгі мақсаты. Біздің көптеген және маманданған қызметкерлеріміз, жылдам жеткізу операцияларын бекітетіп, мүмкіндіктің максималды деңгейін қамтамасыз ету үшін жұмыс істейді.</p>
                            <div class=\"u-align-left u-social-icons u-spacing-20 u-social-icons-1\">
                                <a class=\"u-social-url\" target=\"_blank\" href=\"https://www.facebook.com/\" title=\"facebook\"><span class=\"u-icon u-icon-circle u-social-facebook u-social-icon u-text-white u-icon-2\"><svg class=\"u-svg-link\" preserveAspectRatio=\"xMidYMin slice\" viewBox=\"0 0 112 112\"><use href=\"#svg-f300\"></use></svg><svg class=\"u-svg-content\" viewBox=\"0 0 112 112\" x=\"0px\" y=\"0px\" id=\"svg-f300\"><path d=\"M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z\"></path></svg>


                  </span>
                                </a>
                                <a class=\"u-social-url\" target=\"_blank\" href=\"https://twitter.com/\" title=\"twitter\"><span class=\"u-icon u-icon-circle u-social-icon u-social-twitter u-text-white u-icon-3\"><svg class=\"u-svg-link\" preserveAspectRatio=\"xMidYMin slice\" viewBox=\"0 0 112 112\"><use href=\"#svg-112b\"></use></svg><svg class=\"u-svg-content\" viewBox=\"0 0 112 112\" x=\"0px\" y=\"0px\" id=\"svg-112b\"><path d=\"M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z\"></path></svg>


                  </span>
                                </a>
                                <a class=\"u-social-url\" target=\"_blank\" href=\"https://www.instagram.com/\" title=\"instagram\"><span class=\"u-icon u-icon-circle u-social-icon u-social-instagram u-text-white u-icon-4\"><svg class=\"u-svg-link\" preserveAspectRatio=\"xMidYMin slice\" viewBox=\"0 0 112 112\"><use href=\"#svg-19b1\"></use></svg><svg class=\"u-svg-content\" viewBox=\"0 0 112 112\" x=\"0px\" y=\"0px\" id=\"svg-19b1\"><path d=\"M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z\"></path><path d=\"M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z\"></path><path d=\"M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z\"></path></svg>


                  </span>
                                </a>
                                <a class=\"u-social-url\" target=\"_blank\" href=\"https://linkedin.com/\" title=\"linkedin\"><span class=\"u-icon u-icon-circle u-social-icon u-social-linkedin u-text-white u-icon-5\"><svg class=\"u-svg-link\" preserveAspectRatio=\"xMidYMin slice\" viewBox=\"0 0 112 112\"><use href=\"#svg-1afa\"></use></svg><svg class=\"u-svg-content\" viewBox=\"0 0 112 112\" x=\"0px\" y=\"0px\" id=\"svg-1afa\"><path d=\"M33.8,96.8H14.5v-58h19.3V96.8z M24.1,30.9L24.1,30.9c-6.6,0-10.8-4.5-10.8-10.1c0-5.8,4.3-10.1,10.9-10.1 S34.9,15,35.1,20.8C35.1,26.4,30.8,30.9,24.1,30.9z M103.3,96.8H84.1v-31c0-7.8-2.7-13.1-9.8-13.1c-5.3,0-8.5,3.6-9.9,7.1 c-0.6,1.3-0.6,3-0.6,4.8V97H44.5c0,0,0.3-52.6,0-58h19.3v8.2c2.6-3.9,7.2-9.6,17.4-9.6c12.7,0,22.2,8.4,22.2,26.1V96.8z\"></path></svg>


                  </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"u-align-center u-clearfix u-palette-1-base u-section-7\" id=\"sec-1dea\">
    <div class=\"u-clearfix u-sheet u-valign-middle u-sheet-1\">
        <div class=\"u-expanded-width u-list u-list-1\">
            <div class=\"u-repeater u-repeater-1\">
                <div class=\"u-align-center u-container-style u-custom-item u-list-item u-palette-3-base u-radius-30 u-repeater-item u-shape-round u-list-item-1\">
                    <div class=\"u-container-layout u-similar-container u-container-layout-1\">
                        <img alt=\"\" class=\"u-expanded-width u-image u-image-round u-radius-30 u-image-1\" data-image-width=\"1090\" data-image-height=\"856\" src=\"images/xcxcxc.jpg\">
                        <h3 class=\"u-custom-item u-text u-text-default u-text-1\"> Біздің компания</h3>
                        <p class=\"u-text u-text-2\">Тасымалдау мен логистика бойынша толық қызмет көрсетуші. Мұнда біз өз айырмашылықтымызмен таныламыз - қол жетімділік, біздің тасымалдаушылар мен клиенттерге қызмет көрсетуде қолдау көрсетеміз.</p>
                        <a href=\"#\" class=\"u-active-none u-border-2 u-border-active-palette-3-light-2 u-border-hover-palette-3-light-1 u-border-no-left u-border-no-right u-border-no-top u-border-white u-btn u-button-style u-custom-item u-hover-none u-none u-text-body-alt-color u-btn-1\" data-animation-name=\"\" data-animation-duration=\"0\" data-animation-delay=\"0\" data-animation-direction=\"\">учить больше</a>
                    </div>
                </div>
                <div class=\"u-align-center u-container-style u-custom-item u-list-item u-radius-30 u-repeater-item u-shape-round u-white u-list-item-2\">
                    <div class=\"u-container-layout u-similar-container u-container-layout-2\">
                        <img alt=\"\" class=\"u-expanded-width u-image u-image-round u-radius-30 u-image-2\" data-image-width=\"1090\" data-image-height=\"856\" src=\"images/vbvb.jpg\">
                        <h3 class=\"u-custom-item u-text u-text-default u-text-palette-1-base u-text-3\"> Тасымалдаушылар&nbsp;<br>
                        </h3>
                        <p class=\"u-text u-text-4\">Біздің бағдарламаларымыз жеткізу үшін өзара байланыстықты жақсы басқару, кіру мен талаптарды толтыру және өзгерту, кеңселендіру және алдыңғы бағамен сапаланатын кеңселер бойынша барлық талаптарды орындауға медеу көрсетеді.</p>
                        <a href=\"#\" class=\"u-active-none u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-border-palette-3-base u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-style u-custom-item u-hover-none u-none u-radius-0 u-text-palette-3-base u-top-left-radius-0 u-top-right-radius-0 u-btn-2\">учить больше</a>
                    </div>
                </div>
                <div class=\"u-align-center u-container-style u-custom-item u-list-item u-palette-3-base u-radius-30 u-repeater-item u-shape-round u-list-item-3\">
                    <div class=\"u-container-layout u-similar-container u-container-layout-3\">
                        <img alt=\"\" class=\"u-expanded-width u-image u-image-round u-radius-30 u-image-3\" data-image-width=\"1090\" data-image-height=\"856\" src=\"images/cvcvcv.jpg\">
                        <h3 class=\"u-custom-item u-text u-text-default u-text-5\">Логистика</h3>
                        <p class=\"u-text u-text-6\">Біздің жұмыстарымыздың негізі. Мұнда біз өз қызметкерлеріміз және технологияларымыз арқылы адамдардың талаптарына сәйкес жеткізу мақсатында қызмет көрсетеміз.</p>
                        <a href=\"#\" class=\"u-active-none u-border-2 u-border-active-palette-3-light-2 u-border-hover-palette-3-light-1 u-border-no-left u-border-no-right u-border-no-top u-border-white u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-style u-custom-item u-hover-none u-none u-radius-0 u-text-body-alt-color u-top-left-radius-0 u-top-right-radius-0 u-btn-3\">учить больше</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"u-align-center u-clearfix u-palette-5-light-2 u-section-8\" id=\"carousel_008f\">
    <div class=\"u-expanded-width u-palette-1-base u-shape u-shape-rectangle u-shape-1\"></div>
    <div class=\"u-clearfix u-layout-wrap u-layout-wrap-1\">
        <div class=\"u-layout\">
            <div class=\"u-layout-row\">
                <div class=\"u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-white u-layout-cell-1\">
                    <div class=\"u-container-layout u-valign-middle u-container-layout-1\">
                        <h3 class=\"u-text u-text-palette-3-base u-text-1\">Компания туралы</h3>
                        <p class=\"u-text u-text-2\">Тактикалық ынтымақтастық пен идеямен бөлісуден бұрын жоғары құнды әрекеттерді жылдам ынталандырыңыз. Сымсыз мүмкіндіктер арқылы сатылатын зияткерлік капиталды монотонектальды түрде жасаңыз. Функционалды тестілеу процедуралары үшін қызметке негізделген желі өнімділігі.</p>
                        <a href=\"#\" class=\"u-active-palette-1-base u-btn u-btn-round u-button-style u-hover-palette-1-base u-palette-3-base u-radius-10 u-btn-2\">учить больше</a>
                    </div>
                </div>
                <div class=\"u-container-style u-image u-layout-cell u-left-cell u-size-30 u-image-1\" data-image-width=\"1200\" data-image-height=\"907\">
                    <div class=\"u-container-layout u-container-layout-2\"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"u-align-center u-clearfix u-palette-5-light-2 u-section-9\" id=\"carousel_8df6\">
    <div class=\"u-clearfix u-sheet u-valign-middle u-sheet-1\">
        <h2 class=\"u-text u-text-default u-text-1\">Көлік шешімдері</h2>
        <div class=\"u-list u-list-1\">
            <div class=\"u-repeater u-repeater-1\">
                <div class=\"u-container-style u-custom-item u-grey-5 u-list-item u-radius-10 u-repeater-item u-shape-round u-list-item-1\">
                    <div class=\"u-container-layout u-similar-container u-valign-top u-container-layout-1\">
                        <p class=\"u-text u-text-2\">Біздің компанияның мәселелерді шешу және клиенттерге қызмет көрсету мақсатында қолданатын маңызды бөлім. Біз сізге тапсырмаларыңызға құндылықтарды тартуға көмектеседік.</p>
                    </div>
                </div>
                <div class=\"u-container-style u-custom-item u-list-item u-repeater-item\">
                    <div class=\"u-container-layout u-similar-container u-valign-top u-container-layout-2\">
                        <p class=\"u-text u-text-3\">Клиенттердің тапсырмаларын тексеруден жұмыс істеу деңгейіне дейінгі жағдайларда қолданылады. Біз өз өнімдеріміз мен көрсеткіштерімізді пайдалана отырып, сіздің тапсырмаларыңызды өте тез және сапалы қабылдауға көмектесеміз.</p>
                    </div>
                </div>
                <div class=\"u-container-style u-custom-item u-list-item u-repeater-item u-shape-rectangle\">
                    <div class=\"u-container-layout u-similar-container u-valign-top u-container-layout-3\">
                        <p class=\"u-text u-text-4\">Біздің маманданған жұмысшыларымыз сіздің тапсырмаларыңызды шешу мақсатында тиімді транспорттық шешімдерді таңдауда көмектеседі. Біздің жетістіктерімізді пайдаланып, сіздің тапсырмаларыңызды қол жетімді жағдайларда жеткізуге көмектесеміз.</p>
                    </div>
                </div>
                <div class=\"u-container-style u-custom-item u-list-item u-palette-3-base u-radius-10 u-repeater-item u-shape-round u-list-item-4\">
                    <div class=\"u-container-layout u-similar-container u-valign-top u-container-layout-4\">
                        <p class=\"u-text u-text-5\">Біздің компаниясының бірінші артықшылығы. Олар клиенттерге қызмет көрсетуге, тапсырмаларды жеткізуге, сапалы қызмет көрсетуге және жағдайларды шешуге құқылы. біздің компаниясының бірінші артықшылығы. Олар клиенттерге қызмет көрсетуге, тапсырмаларды жеткізуге, сапалы қызмет көрсетуге және жағдайларды шешуге құқылы.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"u-clearfix u-palette-3-base u-section-10\" id=\"carousel_fc2e\">
    <div class=\"u-clearfix u-sheet u-valign-middle u-sheet-1\">
        <div class=\"u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1\">
            <div class=\"u-layout\">
                <div class=\"u-layout-row\">
                    <div class=\"u-align-left u-container-style u-image u-layout-cell u-radius-10 u-size-30-lg u-size-30-xl u-size-60-md u-size-60-sm u-size-60-xs u-image-1\" data-image-width=\"1000\" data-image-height=\"990\">
                        <div class=\"u-container-layout u-valign-middle u-container-layout-1\"></div>
                    </div>
                    <div class=\"u-container-style u-layout-cell u-shape-rectangle u-size-30-lg u-size-30-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-2\">
                        <div class=\"u-container-layout u-valign-middle-lg u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-container-layout-2\">
                            <div class=\"u-align-left u-container-style u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-radius-10 u-shape-round u-white u-group-1\">
                                <div class=\"u-container-layout u-valign-middle u-container-layout-3\">
                                    <h2 class=\"u-text u-text-palette-3-base u-text-1\">Біздің миссиямыз</h2>
                                    <p class=\"u-custom-font u-heading-font u-text u-text-grey-60 u-text-2\"> Клиенттерге жақсы қызмет көрсету, тапсырмаларды жеткізуге, жеткізілген тапсырмалардың сапасын сақтау. Біз қызмет көрсету деңгейін арттыру үшін технологияларды және бизнес процестерді жақсы басқару үшін дәмді жұмыс істейміз.</p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                <div class=\"u-align-center-sm u-align-center-xs u-container-style u-layout-cell u-palette-3-base u-size-30 u-layout-cell-1\">
                    <div class=\"u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-container-layout-1\">
                        <div class=\"u-list u-list-1\">
                            <div class=\"u-repeater u-repeater-1\">
                                <div class=\"u-container-style u-list-item u-palette-3-base u-repeater-item u-list-item-1\">
                                    <div class=\"u-container-layout u-similar-container u-valign-middle-xl u-container-layout-2\"><span class=\"u-icon u-icon-circle u-text-white u-icon-1\"><svg class=\"u-svg-link\" preserveAspectRatio=\"xMidYMin slice\" viewBox=\"0 0 405.333 405.333\"><use href=\"#svg-9ccf\"></use></svg><svg class=\"u-svg-content\" viewBox=\"0 0 405.333 405.333\" x=\"0px\" y=\"0px\" id=\"svg-9ccf\" style=\"enable-background:new 0 0 405.333 405.333;\"><g><g><path d=\"M373.333,266.88c-25.003,0-49.493-3.904-72.725-11.584c-11.328-3.904-24.171-0.896-31.637,6.699l-46.016,34.752    c-52.779-28.16-86.571-61.931-114.389-114.368l33.813-44.928c8.512-8.533,11.563-20.971,7.915-32.64    C142.592,81.472,138.667,56.96,138.667,32c0-17.643-14.357-32-32-32H32C14.357,0,0,14.357,0,32    c0,205.845,167.488,373.333,373.333,373.333c17.643,0,32-14.357,32-32V298.88C405.333,281.237,390.976,266.88,373.333,266.88z     M384,373.333c0,5.888-4.8,10.667-10.667,10.667c-194.091,0-352-157.909-352-352c0-5.888,4.8-10.667,10.667-10.667h74.667    c5.867,0,10.667,4.779,10.667,10.667c0,27.243,4.267,53.995,12.629,79.36c1.237,3.989,0.235,8.107-3.669,12.16l-38.827,51.413    c-2.453,3.264-2.837,7.637-0.981,11.264c31.637,62.144,70.059,100.587,132.651,132.651c3.605,1.877,8.021,1.493,11.285-0.981    l52.523-39.808c2.859-2.816,7.061-3.797,10.859-2.539c25.515,8.427,52.267,12.693,79.531,12.693    c5.867,0,10.667,4.779,10.667,10.667V373.333z\"></path>
</g>
</g></svg></span>
                                        <h5 class=\"u-text u-text-1\">Бізге қоңырау шалыңыз</h5>
                                        <p class=\"u-text u-text-2\">8 (777) 123-45-67, 8 (702) 777-77-77</p>
                                    </div>
                                </div>
                                <div class=\"u-container-style u-list-item u-palette-3-base u-repeater-item u-list-item-2\">
                                    <div class=\"u-container-layout u-similar-container u-valign-middle-xl u-container-layout-3\"><span class=\"u-icon u-icon-circle u-text-white u-icon-2\"><svg class=\"u-svg-link\" preserveAspectRatio=\"xMidYMin slice\" viewBox=\"0 0 512 512\"><use href=\"#svg-ff8a\"></use></svg><svg class=\"u-svg-content\" viewBox=\"0 0 512 512\" x=\"0px\" y=\"0px\" id=\"svg-ff8a\" style=\"enable-background:new 0 0 512 512;\"><g><g><path d=\"M256,0C156.748,0,76,80.748,76,180c0,33.534,9.289,66.26,26.869,94.652l142.885,230.257    c2.737,4.411,7.559,7.091,12.745,7.091c0.04,0,0.079,0,0.119,0c5.231-0.041,10.063-2.804,12.75-7.292L410.611,272.22    C427.221,244.428,436,212.539,436,180C436,80.748,355.252,0,256,0z M384.866,256.818L258.272,468.186l-129.905-209.34    C113.734,235.214,105.8,207.95,105.8,180c0-82.71,67.49-150.2,150.2-150.2S406.1,97.29,406.1,180    C406.1,207.121,398.689,233.688,384.866,256.818z\"></path>
</g>
</g><g><g><path d=\"M256,90c-49.626,0-90,40.374-90,90c0,49.309,39.717,90,90,90c50.903,0,90-41.233,90-90C346,130.374,305.626,90,256,90z     M256,240.2c-33.257,0-60.2-27.033-60.2-60.2c0-33.084,27.116-60.2,60.2-60.2s60.1,27.116,60.1,60.2    C316.1,212.683,289.784,240.2,256,240.2z\"></path>
</g>
</g></svg></span>
                                        <h5 class=\"u-text u-text-3\">Орналасу адресі</h5>
                                        <p class=\"u-text u-text-4\">Сатыбалдина көшесі, 2. Юго-Восточный ауданы, Қазыбек би ауданы, Қарағанды, Қарағанды қ.</p>
                                    </div>
                                </div>
                                <div class=\"u-container-style u-list-item u-palette-3-base u-repeater-item u-list-item-3\">
                                    <div class=\"u-container-layout u-similar-container u-valign-middle-xl u-container-layout-4\"><span class=\"u-icon u-icon-circle u-text-white u-icon-3\"><svg class=\"u-svg-link\" preserveAspectRatio=\"xMidYMin slice\" viewBox=\"0 0 512.00042 512\"><use href=\"#svg-279b\"></use></svg><svg class=\"u-svg-content\" viewBox=\"0 0 512.00042 512\" id=\"svg-279b\"><path d=\"m172.578125 310.394531v2.308594h67.191406c6.414063 0 12.054688 7.953125 12.054688 17.183594 0 9.234375-5.640625 17.695312-12.054688 17.695312h-91.300781c-7.183594 0-17.441406-4.871093-17.441406-12.308593v-24.878907c0-40.265625 80.789062-63.347656 80.789062-95.917969 0-8.207031-5.128906-18.210937-19.492187-18.210937-10.257813 0-19.234375 5.128906-19.234375 19.238281 0 7.4375-7.953125 14.617188-21.03125 14.617188-10.257813 0-17.953125-4.617188-17.953125-20.773438 0-31.289062 28.726562-49.242187 57.960937-49.242187 29.753906 0 59.757813 18.722656 59.757813 53.089843 0 55.652344-79.246094 73.863282-79.246094 97.199219zm216.199219-20.773437c0-9.230469-4.101563-18.464844-12.308594-18.464844h-11.027344v-17.953125c0-8.460937-10.003906-12.054687-20.007812-12.054687-10 0-20.003906 3.59375-20.003906 12.054687v17.953125h-22.054688l45.394531-91.046875c.769531-1.792969 1.28125-3.332031 1.28125-4.871094 0-9.234375-13.078125-15.132812-20.003906-15.132812-6.414063 0-12.824219 2.820312-16.671875 10.257812l-59.242188 116.183594c-1.539062 2.820313-2.054687 5.640625-2.054687 7.691406 0 8.976563 5.898437 13.851563 13.335937 13.851563h60.015626v27.183594c0 8.207031 10.003906 12.3125 20.003906 12.3125 10.003906 0 20.007812-4.105469 20.007812-12.3125v-27.183594h11.027344c6.15625 0 12.308594-9.234375 12.308594-18.46875zm-48.105469 167.53125c-17.921875 7.503906-36.804687 12.554687-56.128906 15.003906-10.957031 1.390625-18.710938 11.402344-17.320313 22.359375 1.386719 10.925781 11.367188 18.714844 22.355469 17.324219 22.90625-2.90625 45.292969-8.894532 66.546875-17.792969 10.1875-4.269531 14.988281-15.984375 10.71875-26.171875-4.265625-10.1875-15.980469-14.992188-26.171875-10.722656zm116.710937-72.226563c-8.769531-6.710937-21.324218-5.039062-28.039062 3.730469-11.757812 15.367188-25.519531 29.113281-40.898438 40.855469-8.78125 6.699219-10.464843 19.25-3.765624 28.03125 6.714843 8.792969 19.269531 10.453125 28.035156 3.761719 18.199218-13.894532 34.484375-30.15625 48.398437-48.339844 6.710938-8.773438 5.039063-21.324219-3.730469-28.039063zm37.125-117.773437c-10.949218-1.386719-20.964843 6.371094-22.351562 17.328125-2.445312 19.320312-7.484375 38.199219-14.980469 56.121093-4.261719 10.1875.542969 21.90625 10.730469 26.167969 10.148438 4.246094 21.890625-.496093 26.171875-10.730469 8.886719-21.253906 14.863281-43.636718 17.761719-66.535156 1.386718-10.957031-6.371094-20.964844-17.332032-22.351562zm-265.167968 205.003906c-107.941406-13.691406-189.339844-106.214844-189.339844-215.210938 0-119.894531 97.023438-216.945312 216.941406-216.945312 108.996094 0 201.511719 81.398438 215.207032 189.34375 1.390624 10.957031 11.414062 18.714844 22.355468 17.324219 10.957032-1.390625 18.714844-11.398438 17.324219-22.359375-16.101563-126.933594-124.492187-224.308594-254.886719-224.308594-142.003906 0-256.941406 114.921875-256.941406 256.945312 0 130.527344 97.496094 238.804688 224.304688 254.894532 10.929687 1.382812 20.964843-6.335938 22.359374-17.324219 1.390626-10.957031-6.367187-20.96875-17.324218-22.359375zm0 0\"></path></svg></span>
                                        <h5 class=\"u-text u-text-5\">Жұмыс жасау тәртібі</h5>
                                        <p class=\"u-text u-text-6\">
                                            Пн – Пт: 10:00 – 20:00 <br>
                                            Сб – Вс: Жабылуда
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"u-align-center u-container-style u-layout-cell u-size-30 u-white u-layout-cell-2\">
                    <div class=\"u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-container-layout-5\">
                        <h2 class=\"u-text u-text-default u-text-7\">Бізбен хабарласу</h2>
                        <div class=\"u-align-left u-form u-form-1\">
                            <form action=\"#\" method=\"POST\" class=\"u-clearfix u-form-spacing-28 u-form-vertical u-inner-form\" style=\"padding: 10px\" source=\"email\" name=\"form\">
                                <input type=\"hidden\" id=\"siteId\" name=\"siteId\" value=\"79320\" wfd-invisible=\"true\">
                                <input type=\"hidden\" id=\"pageId\" name=\"pageId\" value=\"2067939\" wfd-invisible=\"true\">
                                <div class=\"u-form-group u-form-name u-form-group-1\">
                                    <label for=\"name-5a14\" class=\"u-form-control-hidden u-label\" wfd-invisible=\"true\">Name</label>
                                    <input type=\"text\" placeholder=\"Есіміңіз\" id=\"name-5a14\" name=\"name\" class=\"u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white\" required=\"\">
                                </div>
                                <div class=\"u-form-email u-form-group u-form-group-2\">
                                    <label for=\"email-5a14\" class=\"u-form-control-hidden u-label\" wfd-invisible=\"true\">Email</label>
                                    <input type=\"email\" placeholder=\"Поштаңыз\" id=\"email-5a14\" name=\"email\" class=\"u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white\" required=\"\">
                                </div>
                                <div class=\"u-form-group u-form-message u-form-group-3\">
                                    <label for=\"message-5a14\" class=\"u-form-control-hidden u-label\" wfd-invisible=\"true\">Message</label>
                                    <textarea placeholder=\"\" rows=\"4\" cols=\"50\" id=\"message-5a14\" name=\"message\" class=\"u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white\" required=\"\"></textarea>
                                </div>
                                <div class=\"u-align-left u-form-group u-form-submit u-form-group-4\">
                                    <a href=\"#\" class=\"u-active-palette-1-base u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-dark-1 u-palette-3-base u-radius-10 u-btn-1\">Хабарласу</a>
                                    <input type=\"submit\" value=\"submit\" class=\"u-form-control-hidden\" wfd-invisible=\"true\">
                                </div>
                                <div class=\"u-form-send-message u-form-send-success\" wfd-invisible=\"true\"> Thank you! Your message has been sent. </div>
                                <div class=\"u-form-send-error u-form-send-message\" wfd-invisible=\"true\"> Unable to send your message. Please fix errors then try again. </div>
                                <input type=\"hidden\" value=\"\" name=\"recaptchaResponse\" wfd-invisible=\"true\">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<footer class=\"u-align-center u-clearfix u-footer u-grey-80 u-footer\" id=\"sec-1038\">
    <div class=\"u-clearfix u-sheet u-sheet-1\">
        <p class=\"u-small-text u-text u-text-variant u-text-1\">Логистикалық компания &#169; 2024</p>
    </div>
</footer>
<style>.u-disable-duration * {transition-duration: 0s !important;}</style></body></html>", "base.html.twig", "/var/www/delivery-app/templates/base.html.twig");
    }
}
