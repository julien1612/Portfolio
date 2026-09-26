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
class __TwigTemplate_e9c1c7d6a2d1746a5fcb47a5ab8a58dc extends Template
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
                    <h2 class=\"fw-bold text-uppercase\">Développement web</h2>
                    <p>Création d'applications web performantes avec PHP & Symfony</p>
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
                    <p>Sites vitrines, applications et outils métier</p>
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
                    <h2 class=\"fw-bold text-white mb-4\" id=\"apropos\">À propos</h2>

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
                        <a href=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/CV_CHASSIN_Julien.pdf"), "html", null, true);
        yield "\" download class=\"btn btn-outline-light btn-lg rounded-pill px-4\">Télécharger mon CV</a>
                    </div>
                </div>

                <!-- COLONNE POINTS CLÉS -->
                <div class=\"col-lg-5\" data-aos=\"fade-left\">
                    <div class=\"card custom-card p-4\">
                        <div class=\"card-body\">
                            <h3 class=\"h5 text-white mb-4 fw-bold\">Compétences</h3>

                            <ul class=\"list-unstyled text-light mb-0\">
                                <li class=\"mb-3 d-flex align-items-center\">
                                    <i class=\"bi-database text-primary fs-5 me-3\"></i>
                                    <span><strong>Back-end & BDD :</strong> PHP 8, Symfony 7, Doctrine ORM, MySQL / SQLite, conception d'API REST</span>
                                </li>
                                <li class=\"mb-3 d-flex align-items-center\">
                                    <i class=\"bi-palette text-primary fs-5 me-3\"></i>
                                    <span><strong>Front-end & UI :</strong> Intégration SCSS / Bootstrap 5, Twig, JavaScript vanilla, interfaces responsive</span>
                                </li>
                                <li class=\"mb-3 d-flex align-items-center\">
                                    <i class=\"bi-gear-fill text-primary fs-5 me-3\"></i>
                                    <span><strong>Méthodes & Outils :</strong> Git / GitHub, EasyAdmin, LiipImagine, respect des normes PSR, sensibilisation à la sécurité</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECTION PROJETS DYNAMIQUE -->
    <section id=\"projets\" class=\"py-5\">
        <div class=\"container py-4\">
            <h2 class=\"text-center mb-5 fw-bold text-white\" data-aos=\"fade-up\">Mes Réalisations</h2>

            <div class=\"row g-4\">
                ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 122, $this->source); })()));
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
            // line 123
            yield "                    <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 123) * 100), "html", null, true);
            yield "\">
                        <div class=\"card custom-card h-100 overflow-hidden d-flex flex-column\">
                            
                            ";
            // line 126
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["project"], "coverImage", [], "any", false, false, false, 126)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 127
                yield "                                <div class=\"project-img-wrapper\">
                                    <img src=\"";
                // line 128
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("pictures/" . CoreExtension::getAttribute($this->env, $this->source, $context["project"], "coverImage", [], "any", false, false, false, 128))), "html", null, true);
                yield "\" class=\"card-img-top project-img\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "title", [], "any", false, false, false, 128), "html", null, true);
                yield "\">
                                </div>
                            ";
            }
            // line 131
            yield "
                            <div class=\"card-body d-flex flex-column p-4\">
                                <h3 class=\"card-title h4 text-white fw-bold mb-2\">";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "title", [], "any", false, false, false, 133), "html", null, true);
            yield "</h3>
                                
                                <p class=\"card-text text-light opacity-75 fs-6 mb-3 flex-grow-1\">
                                    ";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "shortDescription", [], "any", false, false, false, 136), "html", null, true);
            yield "
                                </p>

                                ";
            // line 139
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["project"], "technologies", [], "any", false, false, false, 139)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 140
                yield "                                    <div class=\"mb-3 d-flex flex-wrap gap-1\">
                                        ";
                // line 141
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "technologies", [], "any", false, false, false, 141));
                foreach ($context['_seq'] as $context["_key"] => $context["tech"]) {
                    // line 142
                    yield "                                            <span class=\"badge bg-dark border border-secondary text-light\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tech"], "html", null, true);
                    yield "</span>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['tech'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 144
                yield "                                    </div>
                                ";
            }
            // line 146
            yield "
                                <button type=\"button\" class=\"btn btn-outline-primary btn-sm rounded-pill mt-auto align-self-start px-3\" data-bs-toggle=\"modal\" data-bs-target=\"#modalProject";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 147), "html", null, true);
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
        // line 153
        if (!$context['_iterated']) {
            // line 154
            yield "                    <div class=\"col-12 text-center text-light opacity-75\">
                        <p class=\"fs-5\">Aucune réalisation publiée pour le moment.</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['project'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        yield "            </div>
        </div>
    </section>

    <!-- MODAUX POPUP PROJETS DYNAMIQUES -->
    ";
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 163, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 164
            yield "        <div class=\"modal fade\" id=\"modalProject";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 164), "html", null, true);
            yield "\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-xl modal-dialog-centered\">
                <div class=\"modal-content bg-dark text-white border-secondary\">
                    
                    <div class=\"modal-header border-secondary\">
                        <h5 class=\"modal-title fw-bold\">";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "title", [], "any", false, false, false, 169), "html", null, true);
            yield "</h5>
                        <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Fermer\"></button>
                    </div>

                    <div class=\"modal-body p-4\">
                        ";
            // line 175
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "images", [], "any", true, true, false, 175) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "images", [], "any", false, false, false, 175)))) {
                // line 176
                yield "                            <div id=\"carouselProject";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 176), "html", null, true);
                yield "\" class=\"carousel slide mb-4\" data-bs-ride=\"carousel\">
                                <div class=\"carousel-inner rounded shadow-lg\">
                                    ";
                // line 178
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "images", [], "any", false, false, false, 178));
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
                    // line 179
                    yield "                                        <div class=\"carousel-item ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 179)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "active";
                    }
                    yield "\">
                                            <img src=\"";
                    // line 180
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("pictures/" . CoreExtension::getAttribute($this->env, $this->source, $context["img"], "imageName", [], "any", false, false, false, 180))), "html", null, true);
                    yield "\" class=\"d-block w-100\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "title", [], "any", false, false, false, 180), "html", null, true);
                    yield " capture ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 180), "html", null, true);
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
                // line 183
                yield "                                </div>
                                ";
                // line 184
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["project"], "images", [], "any", false, false, false, 184)) > 1)) {
                    // line 185
                    yield "                                    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselProject";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 185), "html", null, true);
                    yield "\" data-bs-slide=\"prev\">
                                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                    </button>
                                    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselProject";
                    // line 188
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 188), "html", null, true);
                    yield "\" data-bs-slide=\"next\">
                                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                    </button>
                                ";
                }
                // line 192
                yield "                            </div>
                        ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 193
$context["project"], "coverImage", [], "any", false, false, false, 193)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 194
                yield "                            <div class=\"text-center mb-4\">
                                <img src=\"";
                // line 195
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("pictures/" . CoreExtension::getAttribute($this->env, $this->source, $context["project"], "coverImage", [], "any", false, false, false, 195))), "html", null, true);
                yield "\" class=\"img-fluid rounded shadow-lg\" style=\"max-height: 400px;\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "title", [], "any", false, false, false, 195), "html", null, true);
                yield "\">
                            </div>
                        ";
            }
            // line 198
            yield "
                        <div class=\"lead text-light opacity-90 mb-4\">
                            ";
            // line 200
            yield CoreExtension::getAttribute($this->env, $this->source, $context["project"], "fullDescription", [], "any", false, false, false, 200);
            yield "
                        </div>

                        ";
            // line 203
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["project"], "technologies", [], "any", false, false, false, 203)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 204
                yield "                            <div class=\"d-flex flex-wrap gap-2 mb-3\">
                                ";
                // line 205
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "technologies", [], "any", false, false, false, 205));
                foreach ($context['_seq'] as $context["_key"] => $context["tech"]) {
                    // line 206
                    yield "                                    <span class=\"badge bg-primary\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tech"], "html", null, true);
                    yield "</span>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['tech'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 208
                yield "                            </div>
                        ";
            }
            // line 210
            yield "                    </div>

                    <div class=\"modal-footer border-secondary justify-content-between\">
                        <div>
                            ";
            // line 214
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["project"], "githubUrl", [], "any", false, false, false, 214)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 215
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "githubUrl", [], "any", false, false, false, 215), "html", null, true);
                yield "\" target=\"_blank\" class=\"btn btn-outline-light rounded-pill me-2\">
                                    <i class=\"bi bi-github me-2\"></i>Voir sur GitHub
                                </a>
                            ";
            }
            // line 219
            yield "                            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["project"], "websiteUrl", [], "any", false, false, false, 219)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 220
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "websiteUrl", [], "any", false, false, false, 220), "html", null, true);
                yield "\" target=\"_blank\" class=\"btn btn-outline-info rounded-pill\">
                                    <i class=\"bi bi-globe me-2\"></i>Visiter le site
                                </a>
                            ";
            }
            // line 224
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
        // line 232
        yield "
    <!-- SECTION CONTACT -->
    <section id=\"contact\" class=\"py-5 text-white\">
    <div class=\"container\">
        <h2 class=\"text-center mb-2 fw-bold\">Me contacter</h2>
        <p class=\"text-center text-white-50 mb-5 \">
            Vous avez un projet Symfony, un besoin en sous-traitance ou une maintenance ? Écrivez-moi !
        </p>

        <div class=\"row justify-content-center\">
            <div class=\"col-md-10 col-lg-8\">

                ";
        // line 245
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 245, $this->source); })()), "flashes", ["success"], "method", false, false, false, 245));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 246
            yield "                    <div class=\"alert alert-success alert-dismissible fade show d-flex align-items-center mb-4\" role=\"alert\">
                        <i class=\"bi bi-check-circle-fill me-2 fs-5\"></i>
                        <div>";
            // line 248
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
                        <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 252
        yield "
                ";
        // line 254
        yield "                <div class=\"card custom-card p-4 p-md-5\">
                    ";
        // line 255
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 255, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation"]]);
        yield "

                        ";
        // line 258
        yield "                        ";
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 258, $this->source); })()), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 259
            yield "                            <div class=\"alert alert-danger mb-4\">
                                ";
            // line 260
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 260, $this->source); })()), 'errors');
            yield "
                            </div>
                        ";
        }
        // line 263
        yield "
                        ";
        // line 265
        yield "                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                ";
        // line 267
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 267, $this->source); })()), "name", [], "any", false, false, false, 267), 'label', ["label_attr" => ["class" => "form-label text-light fw-semibold"], "label" => "Nom / Entreprise"]);
        yield "
                                ";
        // line 268
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 268, $this->source); })()), "name", [], "any", false, false, false, 268), 'widget', ["attr" => ["class" => "form-control custom-input", "placeholder" => "Ex: Jean Dupont"]]);
        yield "
                                <div class=\"text-danger small mt-1\">";
        // line 269
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 269, $this->source); })()), "name", [], "any", false, false, false, 269), 'errors');
        yield "</div>
                            </div>

                            <div class=\"col-md-6 mb-3\">
                                ";
        // line 273
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 273, $this->source); })()), "email", [], "any", false, false, false, 273), 'label', ["label_attr" => ["class" => "form-label text-light fw-semibold"], "label" => "Adresse e-mail"]);
        yield "
                                ";
        // line 274
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 274, $this->source); })()), "email", [], "any", false, false, false, 274), 'widget', ["attr" => ["class" => "form-control custom-input", "placeholder" => "nom@exemple.fr"]]);
        yield "
                                <div class=\"text-danger small mt-1\">";
        // line 275
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 275, $this->source); })()), "email", [], "any", false, false, false, 275), 'errors');
        yield "</div>
                            </div>
                        </div>

                        ";
        // line 280
        yield "                        <div class=\"mb-3\">
                            ";
        // line 281
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 281, $this->source); })()), "subject", [], "any", false, false, false, 281), 'label', ["label_attr" => ["class" => "form-label text-light fw-semibold"], "label" => "Sujet"]);
        yield "
                            ";
        // line 282
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 282, $this->source); })()), "subject", [], "any", false, false, false, 282), 'widget', ["attr" => ["class" => "form-control custom-input", "placeholder" => "Ex: Demande de devis / Alternance"]]);
        yield "
                            <div class=\"text-danger small mt-1\">";
        // line 283
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 283, $this->source); })()), "subject", [], "any", false, false, false, 283), 'errors');
        yield "</div>
                        </div>

                        ";
        // line 287
        yield "                        <div class=\"mb-4\">
                            ";
        // line 288
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 288, $this->source); })()), "message", [], "any", false, false, false, 288), 'label', ["label_attr" => ["class" => "form-label text-light fw-semibold"], "label" => "Votre message"]);
        yield "
                            ";
        // line 289
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 289, $this->source); })()), "message", [], "any", false, false, false, 289), 'widget', ["attr" => ["class" => "form-control custom-input", "rows" => "5", "placeholder" => "Détaillez votre besoin..."]]);
        yield "
                            <div class=\"text-danger small mt-1\">";
        // line 290
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 290, $this->source); })()), "message", [], "any", false, false, false, 290), 'errors');
        yield "</div>
                        </div>

                        ";
        // line 294
        yield "                        <div class=\"form-privacy-note mb-4 p-3 rounded\">
                            <div class=\"d-flex align-items-start gap-2\">
                                <i class=\"bi bi-shield-lock-fill text-info fs-5 mt-n1\"></i>
                                <span class=\"small text-muted\">
                                    En soumettant ce formulaire, vous acceptez que les données saisies soient transmises directement à ma boîte e-mail dans le cadre de notre relation professionnelle. Vos données ne sont ni revendues, ni conservées en base de données.
                                </span>
                            </div>
                        </div>

                        ";
        // line 304
        yield "                        <div class=\"d-grid\">
                            ";
        // line 305
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["contactForm"] ?? null), "submit", [], "any", true, true, false, 305)) {
            // line 306
            yield "                                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 306, $this->source); })()), "submit", [], "any", false, false, false, 306), 'widget', ["attr" => ["class" => "btn btn-primary btn-lg custom-submit-btn"]]);
            yield "
                            ";
        } else {
            // line 308
            yield "                                <button type=\"submit\" class=\"btn btn-primary btn-lg custom-submit-btn\">
                                    <span>Envoyer le message</span>
                                    <i class=\"bi bi-send-fill ms-2\"></i>
                                </button>
                            ";
        }
        // line 313
        yield "                        </div>

                    ";
        // line 315
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 315, $this->source); })()), 'form_end');
        yield "
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
        return array (  688 => 315,  684 => 313,  677 => 308,  671 => 306,  669 => 305,  666 => 304,  655 => 294,  649 => 290,  645 => 289,  641 => 288,  638 => 287,  632 => 283,  628 => 282,  624 => 281,  621 => 280,  614 => 275,  610 => 274,  606 => 273,  599 => 269,  595 => 268,  591 => 267,  587 => 265,  584 => 263,  578 => 260,  575 => 259,  572 => 258,  567 => 255,  564 => 254,  561 => 252,  551 => 248,  547 => 246,  542 => 245,  528 => 232,  515 => 224,  507 => 220,  504 => 219,  496 => 215,  494 => 214,  488 => 210,  484 => 208,  475 => 206,  471 => 205,  468 => 204,  466 => 203,  460 => 200,  456 => 198,  448 => 195,  445 => 194,  443 => 193,  440 => 192,  433 => 188,  426 => 185,  424 => 184,  421 => 183,  400 => 180,  393 => 179,  376 => 178,  370 => 176,  367 => 175,  359 => 169,  350 => 164,  346 => 163,  339 => 158,  330 => 154,  328 => 153,  309 => 147,  306 => 146,  302 => 144,  293 => 142,  289 => 141,  286 => 140,  284 => 139,  278 => 136,  272 => 133,  268 => 131,  260 => 128,  257 => 127,  255 => 126,  248 => 123,  230 => 122,  189 => 84,  136 => 34,  123 => 24,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
                    <h2 class=\"fw-bold text-uppercase\">Développement web</h2>
                    <p>Création d'applications web performantes avec PHP & Symfony</p>
                </div>
            </div>

            <!-- SLIDE 3 -->
            <div class=\"carousel-item\">
                <div class=\"carousel-overlay\"></div>
                <img src=\"{{ asset('pictures/img_3.jpg') }}\" class=\"d-block w-100 hero-img\" alt=\"Slide 3\">
                <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-start justify-content-md-center h-100\">
                    <h2 class=\"fw-bold text-uppercase\">Solutions Sur Mesure</h2>
                    <p>Sites vitrines, applications et outils métier</p>
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
                    <h2 class=\"fw-bold text-white mb-4\" id=\"apropos\">À propos</h2>

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
                        <a href=\"{{ asset('pictures/CV_CHASSIN_Julien.pdf') }}\" download class=\"btn btn-outline-light btn-lg rounded-pill px-4\">Télécharger mon CV</a>
                    </div>
                </div>

                <!-- COLONNE POINTS CLÉS -->
                <div class=\"col-lg-5\" data-aos=\"fade-left\">
                    <div class=\"card custom-card p-4\">
                        <div class=\"card-body\">
                            <h3 class=\"h5 text-white mb-4 fw-bold\">Compétences</h3>

                            <ul class=\"list-unstyled text-light mb-0\">
                                <li class=\"mb-3 d-flex align-items-center\">
                                    <i class=\"bi-database text-primary fs-5 me-3\"></i>
                                    <span><strong>Back-end & BDD :</strong> PHP 8, Symfony 7, Doctrine ORM, MySQL / SQLite, conception d'API REST</span>
                                </li>
                                <li class=\"mb-3 d-flex align-items-center\">
                                    <i class=\"bi-palette text-primary fs-5 me-3\"></i>
                                    <span><strong>Front-end & UI :</strong> Intégration SCSS / Bootstrap 5, Twig, JavaScript vanilla, interfaces responsive</span>
                                </li>
                                <li class=\"mb-3 d-flex align-items-center\">
                                    <i class=\"bi-gear-fill text-primary fs-5 me-3\"></i>
                                    <span><strong>Méthodes & Outils :</strong> Git / GitHub, EasyAdmin, LiipImagine, respect des normes PSR, sensibilisation à la sécurité</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECTION PROJETS DYNAMIQUE -->
    <section id=\"projets\" class=\"py-5\">
        <div class=\"container py-4\">
            <h2 class=\"text-center mb-5 fw-bold text-white\" data-aos=\"fade-up\">Mes Réalisations</h2>

            <div class=\"row g-4\">
                {% for project in projects %}
                    <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"{{ loop.index * 100 }}\">
                        <div class=\"card custom-card h-100 overflow-hidden d-flex flex-column\">
                            
                            {% if project.coverImage %}
                                <div class=\"project-img-wrapper\">
                                    <img src=\"{{ asset('pictures/' ~ project.coverImage) }}\" class=\"card-img-top project-img\" alt=\"{{ project.title }}\">
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

    <!-- MODAUX POPUP PROJETS DYNAMIQUES -->
    {% for project in projects %}
        <div class=\"modal fade\" id=\"modalProject{{ project.id }}\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-xl modal-dialog-centered\">
                <div class=\"modal-content bg-dark text-white border-secondary\">
                    
                    <div class=\"modal-header border-secondary\">
                        <h5 class=\"modal-title fw-bold\">{{ project.title }}</h5>
                        <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Fermer\"></button>
                    </div>

                    <div class=\"modal-body p-4\">
                        {# Galerie Carousel d'images complémentaires #}
                        {% if project.images is defined and project.images is not empty %}
                            <div id=\"carouselProject{{ project.id }}\" class=\"carousel slide mb-4\" data-bs-ride=\"carousel\">
                                <div class=\"carousel-inner rounded shadow-lg\">
                                    {% for img in project.images %}
                                        <div class=\"carousel-item {% if loop.first %}active{% endif %}\">
                                            <img src=\"{{ asset('pictures/' ~ img.imageName) }}\" class=\"d-block w-100\" alt=\"{{ project.title }} capture {{ loop.index }}\">
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
                                <img src=\"{{ asset('pictures/' ~ project.coverImage) }}\" class=\"img-fluid rounded shadow-lg\" style=\"max-height: 400px;\" alt=\"{{ project.title }}\">
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

    <!-- SECTION CONTACT -->
    <section id=\"contact\" class=\"py-5 text-white\">
    <div class=\"container\">
        <h2 class=\"text-center mb-2 fw-bold\">Me contacter</h2>
        <p class=\"text-center text-white-50 mb-5 \">
            Vous avez un projet Symfony, un besoin en sous-traitance ou une maintenance ? Écrivez-moi !
        </p>

        <div class=\"row justify-content-center\">
            <div class=\"col-md-10 col-lg-8\">

                {# Affichage des messages de confirmation #}
                {% for message in app.flashes('success') %}
                    <div class=\"alert alert-success alert-dismissible fade show d-flex align-items-center mb-4\" role=\"alert\">
                        <i class=\"bi bi-check-circle-fill me-2 fs-5\"></i>
                        <div>{{ message }}</div>
                        <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                {% endfor %}

                {# Card du formulaire #}
                <div class=\"card custom-card p-4 p-md-5\">
                    {{ form_start(contactForm, {'attr': {'class': 'needs-validation'}}) }}

                        {# Erreurs globales du formulaire #}
                        {% if form_errors(contactForm) %}
                            <div class=\"alert alert-danger mb-4\">
                                {{ form_errors(contactForm) }}
                            </div>
                        {% endif %}

                        {# Ligne 1 : Nom + Email côte à côte sur PC #}
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                {{ form_label(contactForm.name, 'Nom / Entreprise', {'label_attr': {'class': 'form-label text-light fw-semibold'}}) }}
                                {{ form_widget(contactForm.name, {'attr': {'class': 'form-control custom-input', 'placeholder': 'Ex: Jean Dupont'}}) }}
                                <div class=\"text-danger small mt-1\">{{ form_errors(contactForm.name) }}</div>
                            </div>

                            <div class=\"col-md-6 mb-3\">
                                {{ form_label(contactForm.email, 'Adresse e-mail', {'label_attr': {'class': 'form-label text-light fw-semibold'}}) }}
                                {{ form_widget(contactForm.email, {'attr': {'class': 'form-control custom-input', 'placeholder': 'nom@exemple.fr'}}) }}
                                <div class=\"text-danger small mt-1\">{{ form_errors(contactForm.email) }}</div>
                            </div>
                        </div>

                        {# Sujet #}
                        <div class=\"mb-3\">
                            {{ form_label(contactForm.subject, 'Sujet', {'label_attr': {'class': 'form-label text-light fw-semibold'}}) }}
                            {{ form_widget(contactForm.subject, {'attr': {'class': 'form-control custom-input', 'placeholder': 'Ex: Demande de devis / Alternance'}}) }}
                            <div class=\"text-danger small mt-1\">{{ form_errors(contactForm.subject) }}</div>
                        </div>

                        {# Message #}
                        <div class=\"mb-4\">
                            {{ form_label(contactForm.message, 'Votre message', {'label_attr': {'class': 'form-label text-light fw-semibold'}}) }}
                            {{ form_widget(contactForm.message, {'attr': {'class': 'form-control custom-input', 'rows': '5', 'placeholder': 'Détaillez votre besoin...'}}) }}
                            <div class=\"text-danger small mt-1\">{{ form_errors(contactForm.message) }}</div>
                        </div>

                        {# Mention Légale & Protection des données #}
                        <div class=\"form-privacy-note mb-4 p-3 rounded\">
                            <div class=\"d-flex align-items-start gap-2\">
                                <i class=\"bi bi-shield-lock-fill text-info fs-5 mt-n1\"></i>
                                <span class=\"small text-muted\">
                                    En soumettant ce formulaire, vous acceptez que les données saisies soient transmises directement à ma boîte e-mail dans le cadre de notre relation professionnelle. Vos données ne sont ni revendues, ni conservées en base de données.
                                </span>
                            </div>
                        </div>

                        {# Bouton d'envoi #}
                        <div class=\"d-grid\">
                            {% if contactForm.submit is defined %}
                                {{ form_widget(contactForm.submit, {'attr': {'class': 'btn btn-primary btn-lg custom-submit-btn'}}) }}
                            {% else %}
                                <button type=\"submit\" class=\"btn btn-primary btn-lg custom-submit-btn\">
                                    <span>Envoyer le message</span>
                                    <i class=\"bi bi-send-fill ms-2\"></i>
                                </button>
                            {% endif %}
                        </div>

                    {{ form_end(contactForm) }}
                </div>

            </div>
        </div>
    </div>
</section>
{% endblock %}", "home/index.html.twig", "/Users/julienchassin/Documents/Portfolio/templates/home/index.html.twig");
    }
}
