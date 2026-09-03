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

\t<div class=\"container-fluid \">
\t\t<img src=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pictures/photo_moi.PNG"), "html", null, true);
        yield "\" alt=\"Julien Chassin\" class=\"logo-header ms-3 \">
\t\t<h1 class=\"titleH1 mb-0 ms-3 ms-lg-5 fs-4 fs-lg-2 display-lg-6\">CHASSIN Julien<br>Développeur Full Stack</h1>

\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarLBPG\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>

\t\t<div class=\"collapse navbar-collapse\" id=\"navbarLBPG\">
\t\t\t<ul class=\"navbar-nav ms-auto text-center gap-2 mt-3 mt-lg-0\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link color-link ";
        // line 14
        yield "\">À propos</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link color-link ";
        // line 17
        yield "\">Projets</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link color-link ";
        // line 20
        yield "\">Compétences</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link color-link me-3\" ";
        // line 23
        yield "\">Contact</a>
\t\t\t\t</li>
\t\t\t\t";
        // line 30
        yield "\t\t\t</ul>
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
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  85 => 30,  81 => 23,  76 => 20,  71 => 17,  66 => 14,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark color-nav shadow-sm\">

\t<div class=\"container-fluid \">
\t\t<img src=\"{{ asset('pictures/photo_moi.PNG') }}\" alt=\"Julien Chassin\" class=\"logo-header ms-3 \">
\t\t<h1 class=\"titleH1 mb-0 ms-3 ms-lg-5 fs-4 fs-lg-2 display-lg-6\">CHASSIN Julien<br>Développeur Full Stack</h1>

\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarLBPG\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>

\t\t<div class=\"collapse navbar-collapse\" id=\"navbarLBPG\">
\t\t\t<ul class=\"navbar-nav ms-auto text-center gap-2 mt-3 mt-lg-0\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link color-link {#{{ app.request.get('_route') == 'app_home' ? 'active' : '' }}\" href=\"{{ path('app_home') }}#}\">À propos</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link color-link {#{{ app.request.get('_route') == 'app_article' ? 'active' : '' }}\" href=\"{{ path('app_article') }}#}\">Projets</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link color-link {#{{ app.request.get('_route') == 'app_contact' ? 'active' : '' }}\" href=\"{{ path('app_contact') }}#}\">Compétences</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link color-link me-3\" {#{{ app.request.get('_route') == 'app_soutenir' ? 'active' : '' }}\" href=\"{{ path('app_soutenir') }}#}\">Contact</a>
\t\t\t\t</li>
\t\t\t\t{#<li class=\"nav-item d-flex align-items-center\">
\t\t\t\t\t<a class=\"nav-link nav-btn-soutenir px-4 ms-lg-3\" href=\"https://www.helloasso.com/associations/le-bonheur-des-petits-guerriers\">
\t\t\t\t\t\tMon CV
\t\t\t\t\t</a>
\t\t\t\t</li>#}
\t\t\t</ul>
\t\t</div>
\t</div>
</nav>
", "partial/header.html.twig", "/Users/julienchassin/Documents/Portfolio/templates/partial/header.html.twig");
    }
}
