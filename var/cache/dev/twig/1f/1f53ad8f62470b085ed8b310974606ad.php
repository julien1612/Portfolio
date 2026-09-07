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

/* home/index.html.twig */
class __TwigTemplate_042b379bff203a08f899b294242b64a6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Accueil - Développeur Full Stack";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "
<div id=\"carouselExampleFade\" class=\"carousel slide carousel-fade custom-hero-carousel\" data-bs-ride=\"carousel\">
    <div class=\"carousel-inner\">

        <!-- SLIDE 1 -->
        <div class=\"carousel-item active\">
            <div class=\"carousel-overlay\"></div>
            <img src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/img_1.jpg"), "html", null, true);
        yield "\" class=\"d-block w-100 hero-img\" alt=\"Slide 1\">
            <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-start justify-content-md-center h-100\">
                <h2 class=\"fw-bold text-uppercase\">Web Design</h2>
                <p>Conception graphique & interfaces modernes</p>
            </div>
        </div>

        <!-- SLIDE 2 -->
        <div class=\"carousel-item\">
            <div class=\"carousel-overlay\"></div>
            <img src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/img_4.jpg"), "html", null, true);
        yield "\" class=\"d-block w-100 hero-img\" alt=\"Slide 2\">
            <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-start justify-content-md-center h-100\">
                <h2 class=\"fw-bold text-uppercase\">Développement Full Stack</h2>
                <p>Création d'applications web performantes avec Symfony & React</p>
            </div>
        </div>

        <!-- SLIDE 3 -->
        <div class=\"carousel-item\">
            <div class=\"carousel-overlay\"></div>
            <img src=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/img_3.jpg"), "html", null, true);
        yield "\" class=\"d-block w-100 hero-img\" alt=\"Slide 3\">
            <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-start justify-content-md-center h-100\">
                <h2 class=\"fw-bold text-uppercase\">Solutions Sur Mesure</h2>
                <p>Logos, sites vitrines, e-commerce et applications métier</p>
            </div>
        </div>

    </div>

    <!-- VAGUE DE TRANSITION -->
    <div class=\"custom-shape-divider-bottom\">
        <svg data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1200 120\" preserveAspectRatio=\"none\">
            <path d=\"M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C59.71,118.92,126.31,121.72,188,111.92,233.15,104.7,276.81,81.42,321.39,56.44Z\" fill=\"#0f172a\"></path>
        </svg>
    </div>

    <!-- BOUTONS PREV / NEXT -->
    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleFade\" data-bs-slide=\"prev\">
        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
        <span class=\"visually-hidden\">Précédent</span>
    </button>
    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleFade\" data-bs-slide=\"next\">
        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
        <span class=\"visually-hidden\">Suivant</span>
    </button>
</div>

<!-- SECTION SERVICES -->
<section id=\"services\" class=\"py-5\">
    <div class=\"container py-4\">
        <h2 class=\"text-center mb-5 fw-bold text-white\" data-aos=\"fade-up\">Mes Services</h2>
        
        <div class=\"row g-4\">
            <!-- CARTE 1 -->
            <div class=\"col-md-4\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                <div class=\"card custom-card h-100 p-4\">
                    <div class=\"card-body text-center\">
                        <i class=\"bi bi-laptop display-4 text-primary mb-3\"></i>
                        <h3 class=\"card-title h4 text-white\">Web Design</h3>
                        <p class=\"card-text text-light\">Design moderne, responsive et adapté à votre image de marque.</p>
                    </div>
                </div>
            </div>

            <!-- CARTE 2 -->
            <div class=\"col-md-4\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                <div class=\"card custom-card h-100 p-4\">
                    <div class=\"card-body text-center\">
                        <i class=\"bi bi-code-slash display-4 text-primary mb-3\"></i>
                        <h3 class=\"card-title h4 text-white\">Développement Full Stack</h3>
                        <p class=\"card-text text-light\">Applications web robustes et évolutives avec Symfony & React.</p>
                    </div>
                </div>
            </div>

            <!-- CARTE 3 -->
            <div class=\"col-md-4\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                <div class=\"card custom-card h-100 p-4\">
                    <div class=\"card-body text-center\">
                        <i class=\"bi bi-gear-wide-connected display-4 text-primary mb-3\"></i>
                        <h3 class=\"card-title h4 text-white\">Sur Mesure</h3>
                        <p class=\"card-text text-light\">E-commerce, API REST et fonctionnalités métiers personnalisées.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
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
        return array (  135 => 33,  122 => 23,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil - Développeur Full Stack{% endblock %}

{% block body %}

<div id=\"carouselExampleFade\" class=\"carousel slide carousel-fade custom-hero-carousel\" data-bs-ride=\"carousel\">
    <div class=\"carousel-inner\">

        <!-- SLIDE 1 -->
        <div class=\"carousel-item active\">
            <div class=\"carousel-overlay\"></div>
            <img src=\"{{ asset('pictures/img_1.jpg') }}\" class=\"d-block w-100 hero-img\" alt=\"Slide 1\">
            <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-start justify-content-md-center h-100\">
                <h2 class=\"fw-bold text-uppercase\">Web Design</h2>
                <p>Conception graphique & interfaces modernes</p>
            </div>
        </div>

        <!-- SLIDE 2 -->
        <div class=\"carousel-item\">
            <div class=\"carousel-overlay\"></div>
            <img src=\"{{ asset('pictures/img_4.jpg') }}\" class=\"d-block w-100 hero-img\" alt=\"Slide 2\">
            <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-start justify-content-md-center h-100\">
                <h2 class=\"fw-bold text-uppercase\">Développement Full Stack</h2>
                <p>Création d'applications web performantes avec Symfony & React</p>
            </div>
        </div>

        <!-- SLIDE 3 -->
        <div class=\"carousel-item\">
            <div class=\"carousel-overlay\"></div>
            <img src=\"{{ asset('pictures/img_3.jpg') }}\" class=\"d-block w-100 hero-img\" alt=\"Slide 3\">
            <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-start justify-content-md-center h-100\">
                <h2 class=\"fw-bold text-uppercase\">Solutions Sur Mesure</h2>
                <p>Logos, sites vitrines, e-commerce et applications métier</p>
            </div>
        </div>

    </div>

    <!-- VAGUE DE TRANSITION -->
    <div class=\"custom-shape-divider-bottom\">
        <svg data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1200 120\" preserveAspectRatio=\"none\">
            <path d=\"M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C59.71,118.92,126.31,121.72,188,111.92,233.15,104.7,276.81,81.42,321.39,56.44Z\" fill=\"#0f172a\"></path>
        </svg>
    </div>

    <!-- BOUTONS PREV / NEXT -->
    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleFade\" data-bs-slide=\"prev\">
        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
        <span class=\"visually-hidden\">Précédent</span>
    </button>
    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleFade\" data-bs-slide=\"next\">
        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
        <span class=\"visually-hidden\">Suivant</span>
    </button>
</div>

<!-- SECTION SERVICES -->
<section id=\"services\" class=\"py-5\">
    <div class=\"container py-4\">
        <h2 class=\"text-center mb-5 fw-bold text-white\" data-aos=\"fade-up\">Mes Services</h2>
        
        <div class=\"row g-4\">
            <!-- CARTE 1 -->
            <div class=\"col-md-4\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                <div class=\"card custom-card h-100 p-4\">
                    <div class=\"card-body text-center\">
                        <i class=\"bi bi-laptop display-4 text-primary mb-3\"></i>
                        <h3 class=\"card-title h4 text-white\">Web Design</h3>
                        <p class=\"card-text text-light\">Design moderne, responsive et adapté à votre image de marque.</p>
                    </div>
                </div>
            </div>

            <!-- CARTE 2 -->
            <div class=\"col-md-4\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                <div class=\"card custom-card h-100 p-4\">
                    <div class=\"card-body text-center\">
                        <i class=\"bi bi-code-slash display-4 text-primary mb-3\"></i>
                        <h3 class=\"card-title h4 text-white\">Développement Full Stack</h3>
                        <p class=\"card-text text-light\">Applications web robustes et évolutives avec Symfony & React.</p>
                    </div>
                </div>
            </div>

            <!-- CARTE 3 -->
            <div class=\"col-md-4\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                <div class=\"card custom-card h-100 p-4\">
                    <div class=\"card-body text-center\">
                        <i class=\"bi bi-gear-wide-connected display-4 text-primary mb-3\"></i>
                        <h3 class=\"card-title h4 text-white\">Sur Mesure</h3>
                        <p class=\"card-text text-light\">E-commerce, API REST et fonctionnalités métiers personnalisées.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{% endblock %}", "home/index.html.twig", "/Users/julienchassin/Documents/Portfolio/templates/home/index.html.twig");
    }
}
