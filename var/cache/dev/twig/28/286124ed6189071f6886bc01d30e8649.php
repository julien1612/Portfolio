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
class __TwigTemplate_8361ecdd04bff62d66c0a08f150201d2 extends Template
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
    <!-- HERO CAROUSEL -->
    <div id=\"carouselExampleFade\" class=\"carousel slide carousel-fade custom-hero-carousel\" data-bs-ride=\"carousel\">
        <div class=\"carousel-inner\">

            <!-- SLIDE 1 -->
            <div class=\"carousel-item active\">
                <div class=\"carousel-overlay\"></div>
                <img src=\"";
        // line 14
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
        // line 24
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
        // line 34
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
            <svg data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 1200 120\" preserveaspectratio=\"none\">
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
                        <a href=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/CV_CHASSIN_Julien.pdf"), "html", null, true);
        yield "\" download class=\"btn btn-outline-light btn-lg rounded-pill px-4\">Télécharger mon CV</a>
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
                                    <span><strong>Core Stack :</strong> PHP 7.3, Symfony, Doctrine, Twig</span>
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

    <!-- SECTION PROJETS DYNAMIQUE -->
    <section id=\"projects\" class=\"py-5\">
        <div class=\"container py-4\">
            <h2 class=\"text-center mb-5 fw-bold text-white\" data-aos=\"fade-up\">Mes Réalisations</h2>

            <div class=\"row g-4\">
                ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 127, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 128
            yield "                    <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 128) * 100), "html", null, true);
            yield "\">
                        <div class=\"card custom-card h-100 overflow-hidden d-flex flex-column\">
                            
                            ";
            // line 131
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["project"], "coverImage", [], "any", false, false, false, 131)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 132
                yield "                                <div class=\"project-img-wrapper\">
                                    <img src=\"";
                // line 133
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("pictures/" . CoreExtension::getAttribute($this->env, $this->source, $context["project"], "coverImage", [], "any", false, false, false, 133))), "portfolio_webp"), "html", null, true);
                yield "\" class=\"card-img-top project-img\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "title", [], "any", false, false, false, 133), "html", null, true);
                yield "\">
                                </div>
                            ";
            }
            // line 136
            yield "
                            <div class=\"card-body d-flex flex-column p-4\">
                                <h3 class=\"card-title h4 text-white fw-bold mb-2\">";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "title", [], "any", false, false, false, 138), "html", null, true);
            yield "</h3>
                                
                                <p class=\"card-text text-light opacity-75 fs-6 mb-3 flex-grow-1\">
                                    ";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "shortDescription", [], "any", false, false, false, 141), "html", null, true);
            yield "
                                </p>

                                ";
            // line 144
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["project"], "technologies", [], "any", false, false, false, 144)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 145
                yield "                                    <div class=\"mb-3 d-flex flex-wrap gap-1\">
                                        ";
                // line 146
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "technologies", [], "any", false, false, false, 146));
                foreach ($context['_seq'] as $context["_key"] => $context["tech"]) {
                    // line 147
                    yield "                                            <span class=\"badge bg-dark border border-secondary text-light\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tech"], "html", null, true);
                    yield "</span>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['tech'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 149
                yield "                                    </div>
                                ";
            }
            // line 151
            yield "
                                <button type=\"button\" class=\"btn btn-outline-primary btn-sm rounded-pill mt-auto align-self-start px-3\" data-bs-toggle=\"modal\" data-bs-target=\"#modalProject";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 152), "html", null, true);
            yield "\">
                                    Voir le projet
                                </button>
                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 158
        if (!$context['_iterated']) {
            // line 159
            yield "                    <div class=\"col-12 text-center text-light opacity-75\">
                        <p class=\"fs-5\">Aucune réalisation publiée pour le moment.</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['project'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        yield "            </div>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- MODAUX POPUP PROJETS DYNAMIQUES            -->
    <!-- ========================================== -->
    ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 170, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 171
            yield "        <div class=\"modal fade\" id=\"modalProject";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 171), "html", null, true);
            yield "\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-xl modal-dialog-centered\">
                <div class=\"modal-content bg-dark text-white border-secondary\">
                    
                    <div class=\"modal-header border-secondary\">
                        <h5 class=\"modal-title fw-bold\">";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "title", [], "any", false, false, false, 176), "html", null, true);
            yield "</h5>
                        <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Fermer\"></button>
                    </div>

                    <div class=\"modal-body p-4\">
                        ";
            // line 182
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "images", [], "any", true, true, false, 182) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "images", [], "any", false, false, false, 182)))) {
                // line 183
                yield "                            <div id=\"carouselProject";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 183), "html", null, true);
                yield "\" class=\"carousel slide mb-4\" data-bs-ride=\"carousel\">
                                <div class=\"carousel-inner rounded shadow-lg\">
                                    ";
                // line 185
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "images", [], "any", false, false, false, 185));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                    // line 186
                    yield "                                        <div class=\"carousel-item ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 186)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "active";
                    }
                    yield "\">
                                            <img src=\"";
                    // line 187
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("pictures/" . $context["img"])), "portfolio_webp"), "html", null, true);
                    yield "\" class=\"d-block w-100\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "title", [], "any", false, false, false, 187), "html", null, true);
                    yield " capture ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 187), "html", null, true);
                    yield "\">
                                        </div>
                                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 190
                yield "                                </div>
                                ";
                // line 191
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["project"], "images", [], "any", false, false, false, 191)) > 1)) {
                    // line 192
                    yield "                                    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselProject";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 192), "html", null, true);
                    yield "\" data-bs-slide=\"prev\">
                                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                    </button>
                                    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselProject";
                    // line 195
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 195), "html", null, true);
                    yield "\" data-bs-slide=\"next\">
                                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                    </button>
                                ";
                }
                // line 199
                yield "                            </div>
                        ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 200
$context["project"], "coverImage", [], "any", false, false, false, 200)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 201
                yield "                            <div class=\"text-center mb-4\">
                                <img src=\"";
                // line 202
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("pictures/" . CoreExtension::getAttribute($this->env, $this->source, $context["project"], "coverImage", [], "any", false, false, false, 202))), "portfolio_webp"), "html", null, true);
                yield "\" class=\"img-fluid rounded shadow-lg\" style=\"max-height: 400px;\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "title", [], "any", false, false, false, 202), "html", null, true);
                yield "\">
                            </div>
                        ";
            }
            // line 205
            yield "
                        <div class=\"lead text-light opacity-90 mb-4\">
                            ";
            // line 207
            yield CoreExtension::getAttribute($this->env, $this->source, $context["project"], "fullDescription", [], "any", false, false, false, 207);
            yield "
                        </div>

                        ";
            // line 210
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["project"], "technologies", [], "any", false, false, false, 210)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 211
                yield "                            <div class=\"d-flex flex-wrap gap-2 mb-3\">
                                ";
                // line 212
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "technologies", [], "any", false, false, false, 212));
                foreach ($context['_seq'] as $context["_key"] => $context["tech"]) {
                    // line 213
                    yield "                                    <span class=\"badge bg-primary\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tech"], "html", null, true);
                    yield "</span>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['tech'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 215
                yield "                            </div>
                        ";
            }
            // line 217
            yield "                    </div>

                    <div class=\"modal-footer border-secondary justify-content-between\">
                        <div>
                            ";
            // line 221
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["project"], "githubUrl", [], "any", false, false, false, 221)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 222
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "githubUrl", [], "any", false, false, false, 222), "html", null, true);
                yield "\" target=\"_blank\" class=\"btn btn-outline-light rounded-pill me-2\">
                                    <i class=\"bi bi-github me-2\"></i>Voir sur GitHub
                                </a>
                            ";
            }
            // line 226
            yield "                            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["project"], "websiteUrl", [], "any", false, false, false, 226)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 227
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "websiteUrl", [], "any", false, false, false, 227), "html", null, true);
                yield "\" target=\"_blank\" class=\"btn btn-outline-info rounded-pill\">
                                    <i class=\"bi bi-globe me-2\"></i>Visiter le site
                                </a>
                            ";
            }
            // line 231
            yield "                        </div>
                        <button type=\"button\" class=\"btn btn-secondary rounded-pill\" data-bs-dismiss=\"modal\">Fermer</button>
                    </div>

                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['project'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        yield "
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
        return array (  535 => 239,  522 => 231,  514 => 227,  511 => 226,  503 => 222,  501 => 221,  495 => 217,  491 => 215,  482 => 213,  478 => 212,  475 => 211,  473 => 210,  467 => 207,  463 => 205,  455 => 202,  452 => 201,  450 => 200,  447 => 199,  440 => 195,  433 => 192,  431 => 191,  428 => 190,  407 => 187,  400 => 186,  383 => 185,  377 => 183,  374 => 182,  366 => 176,  357 => 171,  353 => 170,  344 => 163,  335 => 159,  333 => 158,  314 => 152,  311 => 151,  307 => 149,  298 => 147,  294 => 146,  291 => 145,  289 => 144,  283 => 141,  277 => 138,  273 => 136,  265 => 133,  262 => 132,  260 => 131,  253 => 128,  235 => 127,  190 => 85,  136 => 34,  123 => 24,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil - Développeur Full Stack{% endblock %}

{% block body %}

    <!-- HERO CAROUSEL -->
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
            <svg data-name=\"Layer 1\" xmlns=\"http://www.w3.org/2000/svg\" viewbox=\"0 0 1200 120\" preserveaspectratio=\"none\">
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
                        <a href=\"{{ asset('pictures/CV_CHASSIN_Julien.pdf') }}\" download class=\"btn btn-outline-light btn-lg rounded-pill px-4\">Télécharger mon CV</a>
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
                                    <span><strong>Core Stack :</strong> PHP 7.3, Symfony, Doctrine, Twig</span>
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

    <!-- SECTION PROJETS DYNAMIQUE -->
    <section id=\"projects\" class=\"py-5\">
        <div class=\"container py-4\">
            <h2 class=\"text-center mb-5 fw-bold text-white\" data-aos=\"fade-up\">Mes Réalisations</h2>

            <div class=\"row g-4\">
                {% for project in projects %}
                    <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"{{ loop.index * 100 }}\">
                        <div class=\"card custom-card h-100 overflow-hidden d-flex flex-column\">
                            
                            {% if project.coverImage %}
                                <div class=\"project-img-wrapper\">
                                    <img src=\"{{ asset('pictures/' ~ project.coverImage) | imagine_filter('portfolio_webp') }}\" class=\"card-img-top project-img\" alt=\"{{ project.title }}\">
                                </div>
                            {% endif %}

                            <div class=\"card-body d-flex flex-column p-4\">
                                <h3 class=\"card-title h4 text-white fw-bold mb-2\">{{ project.title }}</h3>
                                
                                <p class=\"card-text text-light opacity-75 fs-6 mb-3 flex-grow-1\">
                                    {{ project.shortDescription }}
                                </p>

                                {% if project.technologies %}
                                    <div class=\"mb-3 d-flex flex-wrap gap-1\">
                                        {% for tech in project.technologies %}
                                            <span class=\"badge bg-dark border border-secondary text-light\">{{ tech }}</span>
                                        {% endfor %}
                                    </div>
                                {% endif %}

                                <button type=\"button\" class=\"btn btn-outline-primary btn-sm rounded-pill mt-auto align-self-start px-3\" data-bs-toggle=\"modal\" data-bs-target=\"#modalProject{{ project.id }}\">
                                    Voir le projet
                                </button>
                            </div>
                        </div>
                    </div>
                {% else %}
                    <div class=\"col-12 text-center text-light opacity-75\">
                        <p class=\"fs-5\">Aucune réalisation publiée pour le moment.</p>
                    </div>
                {% endfor %}
            </div>
        </div>
    </section>

    <!-- ========================================== -->
    <!-- MODAUX POPUP PROJETS DYNAMIQUES            -->
    <!-- ========================================== -->
    {% for project in projects %}
        <div class=\"modal fade\" id=\"modalProject{{ project.id }}\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-xl modal-dialog-centered\">
                <div class=\"modal-content bg-dark text-white border-secondary\">
                    
                    <div class=\"modal-header border-secondary\">
                        <h5 class=\"modal-title fw-bold\">{{ project.title }}</h5>
                        <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Fermer\"></button>
                    </div>

                    <div class=\"modal-body p-4\">
                        {# Galerie Carousel d'images complémentaires si présentes #}
                        {% if project.images is defined and project.images is not empty %}
                            <div id=\"carouselProject{{ project.id }}\" class=\"carousel slide mb-4\" data-bs-ride=\"carousel\">
                                <div class=\"carousel-inner rounded shadow-lg\">
                                    {% for img in project.images %}
                                        <div class=\"carousel-item {% if loop.first %}active{% endif %}\">
                                            <img src=\"{{ asset('pictures/' ~ img) | imagine_filter('portfolio_webp') }}\" class=\"d-block w-100\" alt=\"{{ project.title }} capture {{ loop.index }}\">
                                        </div>
                                    {% endfor %}
                                </div>
                                {% if project.images|length > 1 %}
                                    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselProject{{ project.id }}\" data-bs-slide=\"prev\">
                                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                    </button>
                                    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselProject{{ project.id }}\" data-bs-slide=\"next\">
                                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                    </button>
                                {% endif %}
                            </div>
                        {% elseif project.coverImage %}
                            <div class=\"text-center mb-4\">
                                <img src=\"{{ asset('pictures/' ~ project.coverImage) | imagine_filter('portfolio_webp') }}\" class=\"img-fluid rounded shadow-lg\" style=\"max-height: 400px;\" alt=\"{{ project.title }}\">
                            </div>
                        {% endif %}

                        <div class=\"lead text-light opacity-90 mb-4\">
                            {{ project.fullDescription|raw }}
                        </div>

                        {% if project.technologies %}
                            <div class=\"d-flex flex-wrap gap-2 mb-3\">
                                {% for tech in project.technologies %}
                                    <span class=\"badge bg-primary\">{{ tech }}</span>
                                {% endfor %}
                            </div>
                        {% endif %}
                    </div>

                    <div class=\"modal-footer border-secondary justify-content-between\">
                        <div>
                            {% if project.githubUrl %}
                                <a href=\"{{ project.githubUrl }}\" target=\"_blank\" class=\"btn btn-outline-light rounded-pill me-2\">
                                    <i class=\"bi bi-github me-2\"></i>Voir sur GitHub
                                </a>
                            {% endif %}
                            {% if project.websiteUrl %}
                                <a href=\"{{ project.websiteUrl }}\" target=\"_blank\" class=\"btn btn-outline-info rounded-pill\">
                                    <i class=\"bi bi-globe me-2\"></i>Visiter le site
                                </a>
                            {% endif %}
                        </div>
                        <button type=\"button\" class=\"btn btn-secondary rounded-pill\" data-bs-dismiss=\"modal\">Fermer</button>
                    </div>

                </div>
            </div>
        </div>
    {% endfor %}

{% endblock %}
", "home/index.html.twig", "/Users/julienchassin/Documents/Portfolio/templates/home/index.html.twig");
    }
}
