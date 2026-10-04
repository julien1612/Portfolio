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

        yield "Accueil - Développeur PHP / Symfony";
        
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
    <!-- HERO CAROUSEL (la vague est découpée en CSS via mask) -->
    <div id=\"carouselExampleFade\" class=\"carousel slide carousel-fade custom-hero-carousel\" data-bs-ride=\"carousel\">
        <div class=\"carousel-inner\">

            <!-- SLIDE 1 -->
            <div class=\"carousel-item active\">
                <div class=\"carousel-overlay\"></div>
                <img src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/img_1.jpg"), "html", null, true);
        yield "\" class=\"d-block w-100 hero-img\" alt=\"Slide 1\">
                <div class=\"carousel-caption\">
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
                <div class=\"carousel-caption\">
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
                <div class=\"carousel-caption\">
                    <h2 class=\"fw-bold text-uppercase\">Solutions Sur Mesure</h2>
                    <p>Sites vitrines, applications et outils métier</p>
                </div>
            </div>

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
        // line 77
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

            <div class=\"row g-4 justify-content-center\">
                ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 115, $this->source); })()));
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
            // line 116
            yield "                    <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 116) * 100), "html", null, true);
            yield "\">
                        <div class=\"card custom-card h-100 overflow-hidden d-flex flex-column\">

                            ";
            // line 119
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["project"], "coverImage", [], "any", false, false, false, 119)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 120
                yield "                                <div class=\"project-img-wrapper\">
                                    <img src=\"";
                // line 121
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("pictures/" . CoreExtension::getAttribute($this->env, $this->source, $context["project"], "coverImage", [], "any", false, false, false, 121))), "html", null, true);
                yield "\" class=\"card-img-top project-img\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "title", [], "any", false, false, false, 121), "html", null, true);
                yield "\">
                                </div>
                            ";
            }
            // line 124
            yield "
                            <div class=\"card-body d-flex flex-column p-4\">
                                <h3 class=\"card-title h4 text-white fw-bold mb-2\">";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "title", [], "any", false, false, false, 126), "html", null, true);
            yield "</h3>

                                <p class=\"card-text text-light opacity-75 fs-6 mb-3 flex-grow-1\">
                                    ";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "shortDescription", [], "any", false, false, false, 129), "html", null, true);
            yield "
                                </p>

                                ";
            // line 132
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["project"], "technologies", [], "any", false, false, false, 132)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 133
                yield "                                    <div class=\"mb-3 d-flex flex-wrap gap-1\">
                                        ";
                // line 134
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "technologies", [], "any", false, false, false, 134));
                foreach ($context['_seq'] as $context["_key"] => $context["tech"]) {
                    // line 135
                    yield "                                            <span class=\"badge bg-dark border border-secondary text-light\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tech"], "html", null, true);
                    yield "</span>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['tech'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 137
                yield "                                    </div>
                                ";
            }
            // line 139
            yield "
                                <button type=\"button\" class=\"btn btn-outline-primary btn-sm rounded-pill mt-auto align-self-start px-3\" data-bs-toggle=\"modal\" data-bs-target=\"#modalProject";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 140), "html", null, true);
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
        // line 146
        if (!$context['_iterated']) {
            // line 147
            yield "                    <div class=\"col-12 text-center text-light opacity-75\">
                        <p class=\"fs-5\">Aucune réalisation publiée pour le moment.</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['project'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        yield "            </div>
        </div>
    </section>

    <!-- MODAUX POPUP PROJETS DYNAMIQUES -->
    ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["projects"]) || array_key_exists("projects", $context) ? $context["projects"] : (function () { throw new RuntimeError('Variable "projects" does not exist.', 156, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 157
            yield "        <div class=\"modal fade\" id=\"modalProject";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 157), "html", null, true);
            yield "\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-xl modal-dialog-centered\">
                <div class=\"modal-content bg-dark text-white border-secondary\">

                    <div class=\"modal-header border-secondary\">
                        <h5 class=\"modal-title fw-bold\">";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "title", [], "any", false, false, false, 162), "html", null, true);
            yield "</h5>
                        <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Fermer\"></button>
                    </div>

                    <div class=\"modal-body p-4\">
                        ";
            // line 167
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["project"], "images", [], "any", true, true, false, 167) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "images", [], "any", false, false, false, 167)))) {
                // line 168
                yield "                            <div id=\"carouselProject";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 168), "html", null, true);
                yield "\" class=\"carousel slide mb-4\" data-bs-ride=\"carousel\">
                                <div class=\"carousel-inner rounded shadow-lg\">
                                    ";
                // line 170
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "images", [], "any", false, false, false, 170));
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
                    // line 171
                    yield "                                        <div class=\"carousel-item ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 171)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "active";
                    }
                    yield "\">
                                            <img src=\"";
                    // line 172
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("pictures/" . CoreExtension::getAttribute($this->env, $this->source, $context["img"], "imageName", [], "any", false, false, false, 172))), "html", null, true);
                    yield "\" class=\"d-block w-100\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "title", [], "any", false, false, false, 172), "html", null, true);
                    yield " capture ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 172), "html", null, true);
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
                // line 175
                yield "                                </div>
                                ";
                // line 176
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["project"], "images", [], "any", false, false, false, 176)) > 1)) {
                    // line 177
                    yield "                                    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselProject";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 177), "html", null, true);
                    yield "\" data-bs-slide=\"prev\">
                                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                    </button>
                                    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselProject";
                    // line 180
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "id", [], "any", false, false, false, 180), "html", null, true);
                    yield "\" data-bs-slide=\"next\">
                                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                    </button>
                                ";
                }
                // line 184
                yield "                            </div>
                        ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 185
$context["project"], "coverImage", [], "any", false, false, false, 185)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 186
                yield "                            <div class=\"text-center mb-4\">
                                <img src=\"";
                // line 187
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("pictures/" . CoreExtension::getAttribute($this->env, $this->source, $context["project"], "coverImage", [], "any", false, false, false, 187))), "html", null, true);
                yield "\" class=\"img-fluid rounded shadow-lg\" style=\"max-height: 400px;\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "title", [], "any", false, false, false, 187), "html", null, true);
                yield "\">
                            </div>
                        ";
            }
            // line 190
            yield "
                        <div class=\"lead text-light opacity-90 mb-4\">
                            ";
            // line 192
            yield CoreExtension::getAttribute($this->env, $this->source, $context["project"], "fullDescription", [], "any", false, false, false, 192);
            yield "
                        </div>

                        ";
            // line 195
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["project"], "technologies", [], "any", false, false, false, 195)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 196
                yield "                            <div class=\"d-flex flex-wrap gap-2 mb-3\">
                                ";
                // line 197
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "technologies", [], "any", false, false, false, 197));
                foreach ($context['_seq'] as $context["_key"] => $context["tech"]) {
                    // line 198
                    yield "                                    <span class=\"badge bg-primary\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tech"], "html", null, true);
                    yield "</span>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['tech'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 200
                yield "                            </div>
                        ";
            }
            // line 202
            yield "                    </div>

                    <div class=\"modal-footer border-secondary justify-content-between\">
                        <div>
                            ";
            // line 206
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["project"], "githubUrl", [], "any", false, false, false, 206)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 207
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "githubUrl", [], "any", false, false, false, 207), "html", null, true);
                yield "\" target=\"_blank\" class=\"btn btn-outline-light rounded-pill me-2\">
                                    <i class=\"bi bi-github me-2\"></i>Voir sur GitHub
                                </a>
                            ";
            }
            // line 211
            yield "                            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["project"], "websiteUrl", [], "any", false, false, false, 211)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 212
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["project"], "websiteUrl", [], "any", false, false, false, 212), "html", null, true);
                yield "\" target=\"_blank\" class=\"btn btn-outline-info rounded-pill\">
                                    <i class=\"bi bi-globe me-2\"></i>Visiter le site
                                </a>
                            ";
            }
            // line 216
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
        // line 224
        yield "
    <!-- SECTION CONTACT -->
    <section id=\"contact\" class=\"py-5 text-white\">
        <div class=\"container\">
            <h2 class=\"text-center mb-2 fw-bold\">Me contacter</h2>
            <p class=\"text-center text-white-50 mb-5\">
                Vous avez un projet Symfony, un besoin en sous-traitance ou une maintenance ? Écrivez-moi !
            </p>

            <div class=\"row justify-content-center\">
                <div class=\"col-md-10 col-lg-8\">

                    ";
        // line 237
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 237, $this->source); })()), "flashes", ["success"], "method", false, false, false, 237));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 238
            yield "                        <div class=\"alert alert-success alert-dismissible fade show d-flex align-items-center mb-4\" role=\"alert\">
                            <i class=\"bi bi-check-circle-fill me-2 fs-5\"></i>
                            <div>";
            // line 240
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "</div>
                            <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 244
        yield "
                    ";
        // line 246
        yield "                    <div class=\"card custom-card p-4 p-md-5\">
                        ";
        // line 247
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 247, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation"]]);
        yield "

                        ";
        // line 249
        if ((($tmp = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 249, $this->source); })()), 'errors')) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 250
            yield "                            <div class=\"alert alert-danger mb-4\">
                                ";
            // line 251
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 251, $this->source); })()), 'errors');
            yield "
                            </div>
                        ";
        }
        // line 254
        yield "
                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                ";
        // line 257
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 257, $this->source); })()), "name", [], "any", false, false, false, 257), 'label', ["label_attr" => ["class" => "form-label text-light fw-semibold"], "label" => "Nom / Entreprise"]);
        yield "
                                ";
        // line 258
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 258, $this->source); })()), "name", [], "any", false, false, false, 258), 'widget', ["attr" => ["class" => "form-control custom-input"]]);
        yield "
                                <div class=\"text-danger small mt-1\">";
        // line 259
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 259, $this->source); })()), "name", [], "any", false, false, false, 259), 'errors');
        yield "</div>
                            </div>

                            <div class=\"col-md-6 mb-3\">
                                ";
        // line 263
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 263, $this->source); })()), "email", [], "any", false, false, false, 263), 'label', ["label_attr" => ["class" => "form-label text-light fw-semibold"], "label" => "Adresse e-mail"]);
        yield "
                                ";
        // line 264
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 264, $this->source); })()), "email", [], "any", false, false, false, 264), 'widget', ["attr" => ["class" => "form-control custom-input"]]);
        yield "
                                <div class=\"text-danger small mt-1\">";
        // line 265
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 265, $this->source); })()), "email", [], "any", false, false, false, 265), 'errors');
        yield "</div>
                            </div>
                        </div>

                        <div class=\"mb-3\">
                            ";
        // line 270
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 270, $this->source); })()), "subject", [], "any", false, false, false, 270), 'label', ["label_attr" => ["class" => "form-label text-light fw-semibold"], "label" => "Sujet"]);
        yield "
                            ";
        // line 271
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 271, $this->source); })()), "subject", [], "any", false, false, false, 271), 'widget', ["attr" => ["class" => "form-control custom-input"]]);
        yield "
                            <div class=\"text-danger small mt-1\">";
        // line 272
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 272, $this->source); })()), "subject", [], "any", false, false, false, 272), 'errors');
        yield "</div>
                        </div>

                        <div class=\"mb-4\">
                            ";
        // line 276
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 276, $this->source); })()), "message", [], "any", false, false, false, 276), 'label', ["label_attr" => ["class" => "form-label text-light fw-semibold"], "label" => "Votre message"]);
        yield "
                            ";
        // line 277
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 277, $this->source); })()), "message", [], "any", false, false, false, 277), 'widget', ["attr" => ["class" => "form-control custom-input", "rows" => "5"]]);
        yield "
                            <div class=\"text-danger small mt-1\">";
        // line 278
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 278, $this->source); })()), "message", [], "any", false, false, false, 278), 'errors');
        yield "</div>
                        </div>

                        <div class=\"form-privacy-note mb-4 p-3 rounded\">
                            <div class=\"d-flex align-items-start gap-2\">
                                <i class=\"bi bi-shield-lock-fill text-info fs-5\"></i>
                                <span class=\"small\">
                                    En soumettant ce formulaire, vous acceptez que les données saisies soient transmises directement à ma boîte e-mail dans le cadre de notre relation professionnelle. Vos données ne sont ni revendues, ni conservées en base de données.
                                </span>
                            </div>
                        </div>

                        ";
        // line 291
        yield "                        <div class=\"d-flex justify-content-center\">
                            ";
        // line 292
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["contactForm"] ?? null), "submit", [], "any", true, true, false, 292)) {
            // line 293
            yield "                                ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 293, $this->source); })()), "submit", [], "any", false, false, false, 293), 'widget', ["attr" => ["class" => "btn btn-primary btn-lg custom-submit-btn"]]);
            yield "
                            ";
        } else {
            // line 295
            yield "                                <button type=\"submit\" class=\"btn btn-primary btn-lg custom-submit-btn\">
                                    <span>Envoyer le message</span>
                                    <i class=\"bi bi-send-fill ms-2\"></i>
                                </button>
                            ";
        }
        // line 300
        yield "                        </div>

                        ";
        // line 302
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 302, $this->source); })()), 'form_end');
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
        return array (  671 => 302,  667 => 300,  660 => 295,  654 => 293,  652 => 292,  649 => 291,  634 => 278,  630 => 277,  626 => 276,  619 => 272,  615 => 271,  611 => 270,  603 => 265,  599 => 264,  595 => 263,  588 => 259,  584 => 258,  580 => 257,  575 => 254,  569 => 251,  566 => 250,  564 => 249,  559 => 247,  556 => 246,  553 => 244,  543 => 240,  539 => 238,  534 => 237,  520 => 224,  507 => 216,  499 => 212,  496 => 211,  488 => 207,  486 => 206,  480 => 202,  476 => 200,  467 => 198,  463 => 197,  460 => 196,  458 => 195,  452 => 192,  448 => 190,  440 => 187,  437 => 186,  435 => 185,  432 => 184,  425 => 180,  418 => 177,  416 => 176,  413 => 175,  392 => 172,  385 => 171,  368 => 170,  362 => 168,  360 => 167,  352 => 162,  343 => 157,  339 => 156,  332 => 151,  323 => 147,  321 => 146,  302 => 140,  299 => 139,  295 => 137,  286 => 135,  282 => 134,  279 => 133,  277 => 132,  271 => 129,  265 => 126,  261 => 124,  253 => 121,  250 => 120,  248 => 119,  241 => 116,  223 => 115,  182 => 77,  136 => 34,  123 => 24,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil - Développeur PHP / Symfony{% endblock %}

{% block body %}

    <!-- HERO CAROUSEL (la vague est découpée en CSS via mask) -->
    <div id=\"carouselExampleFade\" class=\"carousel slide carousel-fade custom-hero-carousel\" data-bs-ride=\"carousel\">
        <div class=\"carousel-inner\">

            <!-- SLIDE 1 -->
            <div class=\"carousel-item active\">
                <div class=\"carousel-overlay\"></div>
                <img src=\"{{ asset('pictures/img_1.jpg') }}\" class=\"d-block w-100 hero-img\" alt=\"Slide 1\">
                <div class=\"carousel-caption\">
                    <h2 class=\"fw-bold text-uppercase\">Web Design</h2>
                    <p>Conception graphique & interfaces modernes</p>
                </div>
            </div>

            <!-- SLIDE 2 -->
            <div class=\"carousel-item\">
                <div class=\"carousel-overlay\"></div>
                <img src=\"{{ asset('pictures/img_4.jpg') }}\" class=\"d-block w-100 hero-img\" alt=\"Slide 2\">
                <div class=\"carousel-caption\">
                    <h2 class=\"fw-bold text-uppercase\">Développement web</h2>
                    <p>Création d'applications web performantes avec PHP & Symfony</p>
                </div>
            </div>

            <!-- SLIDE 3 -->
            <div class=\"carousel-item\">
                <div class=\"carousel-overlay\"></div>
                <img src=\"{{ asset('pictures/img_3.jpg') }}\" class=\"d-block w-100 hero-img\" alt=\"Slide 3\">
                <div class=\"carousel-caption\">
                    <h2 class=\"fw-bold text-uppercase\">Solutions Sur Mesure</h2>
                    <p>Sites vitrines, applications et outils métier</p>
                </div>
            </div>

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

            <div class=\"row g-4 justify-content-center\">
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
            <p class=\"text-center text-white-50 mb-5\">
                Vous avez un projet Symfony, un besoin en sous-traitance ou une maintenance ? Écrivez-moi !
            </p>

            <div class=\"row justify-content-center\">
                <div class=\"col-md-10 col-lg-8\">

                    {# Messages Flash #}
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

                        {% if form_errors(contactForm) %}
                            <div class=\"alert alert-danger mb-4\">
                                {{ form_errors(contactForm) }}
                            </div>
                        {% endif %}

                        <div class=\"row\">
                            <div class=\"col-md-6 mb-3\">
                                {{ form_label(contactForm.name, 'Nom / Entreprise', {'label_attr': {'class': 'form-label text-light fw-semibold'}}) }}
                                {{ form_widget(contactForm.name, {'attr': {'class': 'form-control custom-input'}}) }}
                                <div class=\"text-danger small mt-1\">{{ form_errors(contactForm.name) }}</div>
                            </div>

                            <div class=\"col-md-6 mb-3\">
                                {{ form_label(contactForm.email, 'Adresse e-mail', {'label_attr': {'class': 'form-label text-light fw-semibold'}}) }}
                                {{ form_widget(contactForm.email, {'attr': {'class': 'form-control custom-input'}}) }}
                                <div class=\"text-danger small mt-1\">{{ form_errors(contactForm.email) }}</div>
                            </div>
                        </div>

                        <div class=\"mb-3\">
                            {{ form_label(contactForm.subject, 'Sujet', {'label_attr': {'class': 'form-label text-light fw-semibold'}}) }}
                            {{ form_widget(contactForm.subject, {'attr': {'class': 'form-control custom-input'}}) }}
                            <div class=\"text-danger small mt-1\">{{ form_errors(contactForm.subject) }}</div>
                        </div>

                        <div class=\"mb-4\">
                            {{ form_label(contactForm.message, 'Votre message', {'label_attr': {'class': 'form-label text-light fw-semibold'}}) }}
                            {{ form_widget(contactForm.message, {'attr': {'class': 'form-control custom-input', 'rows': '5'}}) }}
                            <div class=\"text-danger small mt-1\">{{ form_errors(contactForm.message) }}</div>
                        </div>

                        <div class=\"form-privacy-note mb-4 p-3 rounded\">
                            <div class=\"d-flex align-items-start gap-2\">
                                <i class=\"bi bi-shield-lock-fill text-info fs-5\"></i>
                                <span class=\"small\">
                                    En soumettant ce formulaire, vous acceptez que les données saisies soient transmises directement à ma boîte e-mail dans le cadre de notre relation professionnelle. Vos données ne sont ni revendues, ni conservées en base de données.
                                </span>
                            </div>
                        </div>

                        {# Bouton centré, largeur plafonnée par le SCSS (max 280px) #}
                        <div class=\"d-flex justify-content-center\">
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
