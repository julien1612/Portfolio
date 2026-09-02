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
\t<div class=\"container-fluid\">
\t\t<a class=\"navbar-brand d-flex align-items-center\" href=";
        // line 3
        yield ">
\t\t\t<img src=\"";
        // line 4
        yield "\" alt=\"Logo\" class=\"logo-header\">
\t\t\t<h1 class=\"titleH1 mb-0 ms-3 fs-4 fs-lg-2 display-lg-6\">Le Bonheur des Petits Guerriers</h1>
\t\t</a>

\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarLBPG\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>

\t\t<div class=\"collapse navbar-collapse\" id=\"navbarLBPG\">
\t\t\t<ul class=\"navbar-nav ms-auto text-center gap-2 mt-3 mt-lg-0\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link color-link ";
        // line 15
        yield "\">L'association</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link color-link ";
        // line 18
        yield "\">Actualités</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link color-link ";
        // line 21
        yield "\">Contact</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link color-link ";
        // line 24
        yield "\">Nous soutenir</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item d-flex align-items-center\">
\t\t\t\t\t<a class=\"nav-link nav-btn-soutenir px-4 ms-lg-3\" href=\"https://www.helloasso.com/associations/le-bonheur-des-petits-guerriers\">
\t\t\t\t\t\tFaire un don
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</nav>
";
        
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
    public function getDebugInfo(): array
    {
        return array (  83 => 24,  78 => 21,  73 => 18,  68 => 15,  55 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark color-nav shadow-sm\">
\t<div class=\"container-fluid\">
\t\t<a class=\"navbar-brand d-flex align-items-center\" href={#{{ path('app_home') }}#}>
\t\t\t<img src=\"{#{{ asset('pictures/logo.webp') }}#}\" alt=\"Logo\" class=\"logo-header\">
\t\t\t<h1 class=\"titleH1 mb-0 ms-3 fs-4 fs-lg-2 display-lg-6\">Le Bonheur des Petits Guerriers</h1>
\t\t</a>

\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarLBPG\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>

\t\t<div class=\"collapse navbar-collapse\" id=\"navbarLBPG\">
\t\t\t<ul class=\"navbar-nav ms-auto text-center gap-2 mt-3 mt-lg-0\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link color-link {#{{ app.request.get('_route') == 'app_home' ? 'active' : '' }}\" href=\"{{ path('app_home') }}#}\">L'association</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link color-link {#{{ app.request.get('_route') == 'app_article' ? 'active' : '' }}\" href=\"{{ path('app_article') }}#}\">Actualités</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link color-link {#{{ app.request.get('_route') == 'app_contact' ? 'active' : '' }}\" href=\"{{ path('app_contact') }}#}\">Contact</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link color-link {#{{ app.request.get('_route') == 'app_soutenir' ? 'active' : '' }}\" href=\"{{ path('app_soutenir') }}#}\">Nous soutenir</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item d-flex align-items-center\">
\t\t\t\t\t<a class=\"nav-link nav-btn-soutenir px-4 ms-lg-3\" href=\"https://www.helloasso.com/associations/le-bonheur-des-petits-guerriers\">
\t\t\t\t\t\tFaire un don
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
</nav>
", "partial/header.html.twig", "/Users/julienchassin/Documents/Portfolio/templates/partial/header.html.twig");
    }
}
