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

/* partial/footer.html.twig */
class __TwigTemplate_e72a382d399cd87d703bdc7ee894e62a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partial/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partial/footer.html.twig"));

        // line 1
        yield "<footer class=\"py-4 text-white border-top border-secondary-subtle\" style=\"background-color: #080d1e;\">
    <div class=\"container\">
        <div class=\"row align-items-center gy-3\">
            
            ";
        // line 6
        yield "            <div class=\"col-md-4 text-center text-md-start\">
                <span class=\"fw-bold fs-5 text-light\">Julien Chassin</span>
                <p class=\"small text-white mb-0 mt-1\">Développeur PHP / Symfony</p>
            </div>

            ";
        // line 12
        yield "            <div class=\"col-md-4 text-center\">
                <div class=\"d-flex justify-content-center gap-3 fs-5\">
                    <a href=\"https://github.com/ton-github\" target=\"_blank\" class=\" text-white-hover transition-all\" title=\"GitHub\">
                        <i class=\"bi bi-github\"></i>
                    </a>
                    <a href=\"https://linkedin.com/in/ton-linkedin\" target=\"_blank\" class=\" text-white-hover transition-all\" title=\"LinkedIn\">
                        <i class=\"bi bi-linkedin\"></i>
                    </a>
                    <a href=\"https://www.malt.fr/profile/ton-profil\" target=\"_blank\" class=\" text-white-hover transition-all\" title=\"Malt Freelance\">
                        <i class=\"bi bi-briefcase-fill\"></i>
                    </a>
                </div>
            </div>

            ";
        // line 27
        yield "            <div class=\"col-md-4 text-center text-md-end\">
                <p class=\"small text-white mb-0\">
                    &copy; ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " — Réalisé avec Symfony 7
                </p>
                <a href=\"#\" class=\"small text-decoration-none\" data-bs-toggle=\"modal\" data-bs-target=\"#legalModal\">
                    Mentions légales & RGPD
                </a>
            </div>

        </div>
    </div>
</footer>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partial/footer.html.twig";
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
        return array (  81 => 29,  77 => 27,  61 => 12,  54 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<footer class=\"py-4 text-white border-top border-secondary-subtle\" style=\"background-color: #080d1e;\">
    <div class=\"container\">
        <div class=\"row align-items-center gy-3\">
            
            {# Colonne 1 : Nom & Spécialité #}
            <div class=\"col-md-4 text-center text-md-start\">
                <span class=\"fw-bold fs-5 text-light\">Julien Chassin</span>
                <p class=\"small text-white mb-0 mt-1\">Développeur PHP / Symfony</p>
            </div>

            {# Colonne 2 : Liens Réseaux / Plateformes #}
            <div class=\"col-md-4 text-center\">
                <div class=\"d-flex justify-content-center gap-3 fs-5\">
                    <a href=\"https://github.com/ton-github\" target=\"_blank\" class=\" text-white-hover transition-all\" title=\"GitHub\">
                        <i class=\"bi bi-github\"></i>
                    </a>
                    <a href=\"https://linkedin.com/in/ton-linkedin\" target=\"_blank\" class=\" text-white-hover transition-all\" title=\"LinkedIn\">
                        <i class=\"bi bi-linkedin\"></i>
                    </a>
                    <a href=\"https://www.malt.fr/profile/ton-profil\" target=\"_blank\" class=\" text-white-hover transition-all\" title=\"Malt Freelance\">
                        <i class=\"bi bi-briefcase-fill\"></i>
                    </a>
                </div>
            </div>

            {# Colonne 3 : Copyright & Mentions #}
            <div class=\"col-md-4 text-center text-md-end\">
                <p class=\"small text-white mb-0\">
                    &copy; {{ \"now\"|date(\"Y\") }} — Réalisé avec Symfony 7
                </p>
                <a href=\"#\" class=\"small text-decoration-none\" data-bs-toggle=\"modal\" data-bs-target=\"#legalModal\">
                    Mentions légales & RGPD
                </a>
            </div>

        </div>
    </div>
</footer>", "partial/footer.html.twig", "/Users/julienchassin/Documents/Portfolio/templates/partial/footer.html.twig");
    }
}
