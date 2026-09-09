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
            <path d=\"M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C59.71,118.92,126.31,121.72,188,111.92,233.15,104.7,276.81,81.42,321.39,56.44Z\" fill=\"currentColor\"></path>
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

<!-- SECTION À PROPOS -->
<section id=\"about\" class=\"py-5\">
    <div class=\"container py-4\">
        <div class=\"row align-items-center g-5\">
            
            <!-- COLONNE TEXTE -->
            <div class=\"col-lg-7\" data-aos=\"fade-right\">
                <h2 class=\"fw-bold text-white mb-4\">À propos</h2>
                
                <p class=\"text-light lead\">
                    Développeur Web spécialisé sur l'écosystème <strong>PHP / Symfony</strong>, je conçois des applications sur-mesure, fiables et orientées métier.
                </p>
                
                <p class=\"text-light opacity-75\">
                    Après <strong>15 ans d'engagement aux urgences et au SMUR</strong>, j'ai réorienté ma passion de la résolution de problèmes vers le développement web et le support SIRH. De ce parcours exigeant, j'ai conservé une rigueur absolue, une grande réactivité face aux situations critiques et une capacité d'analyse éprouvée sous pression.
                </p>

                <p class=\"text-light opacity-75\">
                    Aujourd'hui, j'allie cette méthode à une solide maîtrise de <strong>Symfony</strong> et des enjeux fonctionnels (gestion de données, outils RH, API) pour délivrer du code propre, sécurisé et pensé pour les utilisateurs.
                </p>

                <!-- BOUTONS D'ACTION -->
                <div class=\"d-flex gap-3 mt-4\">
                    <a href=\"#contact\" class=\"btn btn-primary btn-lg rounded-pill px-4\">Me contacter</a>
                    <a href=\"#\" class=\"btn btn-outline-light btn-lg rounded-pill px-4\">Télécharger mon CV</a>
                </div>
            </div>

            <!-- COLONNE POINTS CLÉS -->
            <div class=\"col-lg-5\" data-aos=\"fade-left\">
                <div class=\"card custom-card p-4\">
                    <div class=\"card-body\">
                        <h3 class=\"h5 text-white mb-4 fw-bold\">Mes forces :</h3>
                        
                        <ul class=\"list-unstyled text-light mb-0\">
                            <li class=\"mb-3 d-flex align-items-center\">
                                <i class=\"bi bi-shield-check text-primary fs-5 me-3\"></i>
                                <span><strong>Rigueur & Sang-froid :</strong> 15 ans d'expérience SMUR/Urgences</span>
                            </li>
                            <li class=\"mb-3 d-flex align-items-center\">
                                <i class=\"bi bi-code-slash text-primary fs-5 me-3\"></i>
                                <span><strong>Core Stack :</strong> PHP 8, Symfony, Doctrine, Twig</span>
                            </li>
                            <li class=\"mb-3 d-flex align-items-center\">
                                <i class=\"bi bi-cpu text-primary fs-5 me-3\"></i>
                                <span><strong>Expertise :</strong> Applications sur-mesure & Gestion de données</span>
                            </li>
                            <li class=\"d-flex align-items-center\">
                                <i class=\"bi bi-check-circle-fill text-primary fs-5 me-3\"></i>
                                <span><strong>Intégration :</strong> SCSS, Bootstrap 5, JavaScript</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SECTION PROJETS -->
<section id=\"projects\" class=\"py-5\">
    <div class=\"container py-4\">
        <h2 class=\"text-center mb-5 fw-bold text-white\" data-aos=\"fade-up\">Mes Réalisations</h2>
        
        <div class=\"row g-4\">
            
            <!-- PROJET 1 : LE BONHEUR DES PETITS GUERRIERS -->
            <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                <div class=\"card custom-card h-100 overflow-hidden d-flex flex-column\">
                    <div class=\"project-img-wrapper\">
                        <img src=\"";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/lbpg_1.png"), "html", null, true);
        yield "\" class=\"card-img-top project-img\" alt=\"Le Bonheur des Petits Guerriers\">
                    </div>
                    <div class=\"card-body d-flex flex-column p-4\">
                        <h3 class=\"card-title h4 text-white fw-bold mb-2\">Le Bonheur des Petits Guerriers</h3>
                        <p class=\"card-text text-light opacity-75 fs-6 mb-3 flex-grow-1\">
                            Site complet pour une association soutenant les enfants hospitalisés : présentation de l'histoire, collectes de dons, contact et actualités.
                        </p>
                        <div class=\"mb-3 d-flex flex-wrap gap-1\">
                            <span class=\"badge bg-dark border border-secondary text-light\">PHP 8</span>
                            <span class=\"badge bg-dark border border-secondary text-light\">Symfony</span>
                            <span class=\"badge bg-dark border border-secondary text-light\">Twig</span>
                            <span class=\"badge bg-dark border border-secondary text-light\">Bootstrap 5</span>
                        </div>
                        <a href=\"#\" class=\"btn btn-outline-primary btn-sm rounded-pill mt-auto align-self-start px-3\">Voir le projet</a>
                    </div>
                </div>
            </div>

            <!-- PROJET 2 : PUYVANLIFE -->
            <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                <div class=\"card custom-card h-100 overflow-hidden d-flex flex-column\">
                    <div class=\"project-img-wrapper\">
                        <img src=\"";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/pvl_1.png"), "html", null, true);
        yield "\" class=\"card-img-top project-img\" alt=\"PuyVanLife\">
                    </div>
                    <div class=\"card-body d-flex flex-column p-4\">
                        <h3 class=\"card-title h4 text-white fw-bold mb-2\">PuyVanLife</h3>
                        <p class=\"card-text text-light opacity-75 fs-6 mb-3 flex-grow-1\">
                            Plateforme de référencement de spots pour vans et camping-cars dans le Puy-de-Dôme avec carte interactive interactive et météo en temps réel.
                        </p>
                        <div class=\"mb-3 d-flex flex-wrap gap-1\">
                            <span class=\"badge bg-dark border border-secondary text-light\">PHP 8</span>
                            <span class=\"badge bg-dark border border-secondary text-light\">Symfony</span>
                            <span class=\"badge bg-dark border border-secondary text-light\">Leaflet JS</span>
                            <span class=\"badge bg-dark border border-secondary text-light\">API Météo</span>
                        </div>
                        <a href=\"#\" class=\"btn btn-outline-primary btn-sm rounded-pill mt-auto align-self-start px-3\">Voir le projet</a>
                    </div>
                </div>
            </div>

            <!-- PROJET 3 : MEDIC-ASSET -->
            <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                <div class=\"card custom-card h-100 overflow-hidden d-flex flex-column\">
                    <div class=\"project-img-wrapper project-img-wrapper-mockup d-flex align-items-center justify-content-center p-3\">
                        <img src=\"";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/m-a.png"), "html", null, true);
        yield "\" class=\"img-fluid rounded-3 shadow-lg project-img-contain\" alt=\"Medic-asset Extension\">
                    </div>
                    <div class=\"card-body d-flex flex-column p-4\">
                        <h3 class=\"card-title h4 text-white fw-bold mb-2\">Medic-asset</h3>
                        <p class=\"card-text text-light opacity-75 fs-6 mb-3 flex-grow-1\">
                            Extension Google Chrome de productivité : repère les fichiers CSS/JS cassés en dev et ouvre directement l'éditeur de code pour les corriger.
                        </p>
                        <div class=\"mb-3 d-flex flex-wrap gap-1\">
                            <span class=\"badge bg-dark border border-secondary text-light\">JavaScript ES6</span>
                            <span class=\"badge bg-dark border border-secondary text-light\">Chrome API</span>
                            <span class=\"badge bg-dark border border-secondary text-light\">HTML/CSS</span>
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
        return array (  286 => 175,  261 => 153,  236 => 131,  135 => 33,  122 => 23,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
            <path d=\"M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C59.71,118.92,126.31,121.72,188,111.92,233.15,104.7,276.81,81.42,321.39,56.44Z\" fill=\"currentColor\"></path>
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

<!-- SECTION À PROPOS -->
<section id=\"about\" class=\"py-5\">
    <div class=\"container py-4\">
        <div class=\"row align-items-center g-5\">
            
            <!-- COLONNE TEXTE -->
            <div class=\"col-lg-7\" data-aos=\"fade-right\">
                <h2 class=\"fw-bold text-white mb-4\">À propos</h2>
                
                <p class=\"text-light lead\">
                    Développeur Web spécialisé sur l'écosystème <strong>PHP / Symfony</strong>, je conçois des applications sur-mesure, fiables et orientées métier.
                </p>
                
                <p class=\"text-light opacity-75\">
                    Après <strong>15 ans d'engagement aux urgences et au SMUR</strong>, j'ai réorienté ma passion de la résolution de problèmes vers le développement web et le support SIRH. De ce parcours exigeant, j'ai conservé une rigueur absolue, une grande réactivité face aux situations critiques et une capacité d'analyse éprouvée sous pression.
                </p>

                <p class=\"text-light opacity-75\">
                    Aujourd'hui, j'allie cette méthode à une solide maîtrise de <strong>Symfony</strong> et des enjeux fonctionnels (gestion de données, outils RH, API) pour délivrer du code propre, sécurisé et pensé pour les utilisateurs.
                </p>

                <!-- BOUTONS D'ACTION -->
                <div class=\"d-flex gap-3 mt-4\">
                    <a href=\"#contact\" class=\"btn btn-primary btn-lg rounded-pill px-4\">Me contacter</a>
                    <a href=\"#\" class=\"btn btn-outline-light btn-lg rounded-pill px-4\">Télécharger mon CV</a>
                </div>
            </div>

            <!-- COLONNE POINTS CLÉS -->
            <div class=\"col-lg-5\" data-aos=\"fade-left\">
                <div class=\"card custom-card p-4\">
                    <div class=\"card-body\">
                        <h3 class=\"h5 text-white mb-4 fw-bold\">Mes forces :</h3>
                        
                        <ul class=\"list-unstyled text-light mb-0\">
                            <li class=\"mb-3 d-flex align-items-center\">
                                <i class=\"bi bi-shield-check text-primary fs-5 me-3\"></i>
                                <span><strong>Rigueur & Sang-froid :</strong> 15 ans d'expérience SMUR/Urgences</span>
                            </li>
                            <li class=\"mb-3 d-flex align-items-center\">
                                <i class=\"bi bi-code-slash text-primary fs-5 me-3\"></i>
                                <span><strong>Core Stack :</strong> PHP 8, Symfony, Doctrine, Twig</span>
                            </li>
                            <li class=\"mb-3 d-flex align-items-center\">
                                <i class=\"bi bi-cpu text-primary fs-5 me-3\"></i>
                                <span><strong>Expertise :</strong> Applications sur-mesure & Gestion de données</span>
                            </li>
                            <li class=\"d-flex align-items-center\">
                                <i class=\"bi bi-check-circle-fill text-primary fs-5 me-3\"></i>
                                <span><strong>Intégration :</strong> SCSS, Bootstrap 5, JavaScript</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- SECTION PROJETS -->
<section id=\"projects\" class=\"py-5\">
    <div class=\"container py-4\">
        <h2 class=\"text-center mb-5 fw-bold text-white\" data-aos=\"fade-up\">Mes Réalisations</h2>
        
        <div class=\"row g-4\">
            
            <!-- PROJET 1 : LE BONHEUR DES PETITS GUERRIERS -->
            <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                <div class=\"card custom-card h-100 overflow-hidden d-flex flex-column\">
                    <div class=\"project-img-wrapper\">
                        <img src=\"{{ asset('pictures/lbpg_1.png') }}\" class=\"card-img-top project-img\" alt=\"Le Bonheur des Petits Guerriers\">
                    </div>
                    <div class=\"card-body d-flex flex-column p-4\">
                        <h3 class=\"card-title h4 text-white fw-bold mb-2\">Le Bonheur des Petits Guerriers</h3>
                        <p class=\"card-text text-light opacity-75 fs-6 mb-3 flex-grow-1\">
                            Site complet pour une association soutenant les enfants hospitalisés : présentation de l'histoire, collectes de dons, contact et actualités.
                        </p>
                        <div class=\"mb-3 d-flex flex-wrap gap-1\">
                            <span class=\"badge bg-dark border border-secondary text-light\">PHP 8</span>
                            <span class=\"badge bg-dark border border-secondary text-light\">Symfony</span>
                            <span class=\"badge bg-dark border border-secondary text-light\">Twig</span>
                            <span class=\"badge bg-dark border border-secondary text-light\">Bootstrap 5</span>
                        </div>
                        <a href=\"#\" class=\"btn btn-outline-primary btn-sm rounded-pill mt-auto align-self-start px-3\">Voir le projet</a>
                    </div>
                </div>
            </div>

            <!-- PROJET 2 : PUYVANLIFE -->
            <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                <div class=\"card custom-card h-100 overflow-hidden d-flex flex-column\">
                    <div class=\"project-img-wrapper\">
                        <img src=\"{{ asset('pictures/pvl_1.png') }}\" class=\"card-img-top project-img\" alt=\"PuyVanLife\">
                    </div>
                    <div class=\"card-body d-flex flex-column p-4\">
                        <h3 class=\"card-title h4 text-white fw-bold mb-2\">PuyVanLife</h3>
                        <p class=\"card-text text-light opacity-75 fs-6 mb-3 flex-grow-1\">
                            Plateforme de référencement de spots pour vans et camping-cars dans le Puy-de-Dôme avec carte interactive interactive et météo en temps réel.
                        </p>
                        <div class=\"mb-3 d-flex flex-wrap gap-1\">
                            <span class=\"badge bg-dark border border-secondary text-light\">PHP 8</span>
                            <span class=\"badge bg-dark border border-secondary text-light\">Symfony</span>
                            <span class=\"badge bg-dark border border-secondary text-light\">Leaflet JS</span>
                            <span class=\"badge bg-dark border border-secondary text-light\">API Météo</span>
                        </div>
                        <a href=\"#\" class=\"btn btn-outline-primary btn-sm rounded-pill mt-auto align-self-start px-3\">Voir le projet</a>
                    </div>
                </div>
            </div>

            <!-- PROJET 3 : MEDIC-ASSET -->
            <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                <div class=\"card custom-card h-100 overflow-hidden d-flex flex-column\">
                    <div class=\"project-img-wrapper project-img-wrapper-mockup d-flex align-items-center justify-content-center p-3\">
                        <img src=\"{{ asset('pictures/m-a.png') }}\" class=\"img-fluid rounded-3 shadow-lg project-img-contain\" alt=\"Medic-asset Extension\">
                    </div>
                    <div class=\"card-body d-flex flex-column p-4\">
                        <h3 class=\"card-title h4 text-white fw-bold mb-2\">Medic-asset</h3>
                        <p class=\"card-text text-light opacity-75 fs-6 mb-3 flex-grow-1\">
                            Extension Google Chrome de productivité : repère les fichiers CSS/JS cassés en dev et ouvre directement l'éditeur de code pour les corriger.
                        </p>
                        <div class=\"mb-3 d-flex flex-wrap gap-1\">
                            <span class=\"badge bg-dark border border-secondary text-light\">JavaScript ES6</span>
                            <span class=\"badge bg-dark border border-secondary text-light\">Chrome API</span>
                            <span class=\"badge bg-dark border border-secondary text-light\">HTML/CSS</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{% endblock %}", "home/index.html.twig", "/Users/julienchassin/Documents/Portfolio/templates/home/index.html.twig");
    }
}
