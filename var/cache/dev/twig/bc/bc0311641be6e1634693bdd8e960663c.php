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

/* partial/header.html.twig */
class __TwigTemplate_e76c1009fb739159f452110cbbc62d3e extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partial/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partial/header.html.twig"));

        // line 1
        yield "<nav class=\"navbar navbar-expand-lg navbar-dark color-nav shadow-sm\">
    <div class=\"container d-flex align-items-center justify-content-between px-3\">

        <a class=\"navbar-brand d-flex align-items-center m-0 p-0 text-decoration-none\" href=\"";
        // line 4
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
            <img src=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/photo_moi.PNG"), "html", null, true);
        yield "\" alt=\"Julien Chassin\" class=\"logo-header\">
            <div class=\"ms-2 ms-sm-3 text-start\">
                <h1 class=\"titleH1 mb-0\">CHASSIN Julien</h1>
                <span class=\"subtitle-header d-block\">Développeur Full Stack</span>
            </div>
        </a>

        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarport\" aria-controls=\"navbarport\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarport\">
            <ul class=\"navbar-nav ms-auto text-center gap-2 mt-3 mt-lg-0\">
                <li class=\"nav-item\">
                    <a class=\"nav-link color-link";
        // line 19
        yield "\">À propos</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link color-link";
        // line 22
        yield "\">Projets</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link color-link";
        // line 25
        yield "\">Compétences</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link color-link";
        // line 28
        yield "\">Contact</a>
                </li>
            </ul>
        </div>

    </div>
</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partial/header.html.twig";
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
        return array (  89 => 28,  84 => 25,  79 => 22,  74 => 19,  57 => 5,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark color-nav shadow-sm\">
    <div class=\"container d-flex align-items-center justify-content-between px-3\">

        <a class=\"navbar-brand d-flex align-items-center m-0 p-0 text-decoration-none\" href=\"{{ path('app_home') }}\">
            <img src=\"{{ asset('pictures/photo_moi.PNG') }}\" alt=\"Julien Chassin\" class=\"logo-header\">
            <div class=\"ms-2 ms-sm-3 text-start\">
                <h1 class=\"titleH1 mb-0\">CHASSIN Julien</h1>
                <span class=\"subtitle-header d-block\">Développeur Full Stack</span>
            </div>
        </a>

        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarport\" aria-controls=\"navbarport\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarport\">
            <ul class=\"navbar-nav ms-auto text-center gap-2 mt-3 mt-lg-0\">
                <li class=\"nav-item\">
                    <a class=\"nav-link color-link{#\" href=\"{{ path('app_home') }}#}\">À propos</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link color-link{#\" href=\"{{ path('app_home') }}#projets\"#}\">Projets</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link color-link{#\" href=\"{{ path('app_home') }}#competences\"#}\">Compétences</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link color-link{#\" href=\"{{ path('app_home') }}#contact\"#}\">Contact</a>
                </li>
            </ul>
        </div>

    </div>
</nav>", "partial/header.html.twig", "/Users/julienchassin/Documents/Portfolio/templates/partial/header.html.twig");
    }
}
