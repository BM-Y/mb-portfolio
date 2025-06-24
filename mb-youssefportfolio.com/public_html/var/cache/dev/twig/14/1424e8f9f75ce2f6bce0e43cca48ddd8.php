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
class __TwigTemplate_358ff05e703c895563f48df1b46fd9b3 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>CV Interactif</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <style>
        /* Cacher les sections par défaut */
        .cv-section {
            display: none;
        }
    </style>
</head>
<body>

    <div class=\"container my-5\">
        <h2 class=\"text-center mb-4\">Mon CV</h2>

        <!-- Boutons pour afficher les sections -->
        <div class=\"d-flex justify-content-center mb-3\">
            <button class=\"btn btn-secondary mx-2\" onclick=\"showSection('competences')\">Compétences</button>
            <button class=\"btn btn-secondary mx-2\" onclick=\"showSection('experiences')\">Expériences</button>
            <button class=\"btn btn-secondary mx-2\" onclick=\"showSection('formations')\">Formations</button>
        </div>

        <!-- Section Compétences -->
        <div id=\"competences\" class=\"cv-section\">
            <h3>Compétences</h3>
            <p>HTML, CSS, JavaScript, Symfony, PHP, MySQL...</p>
        </div>

        <!-- Section Expériences -->
        <div id=\"experiences\" class=\"cv-section\">
            <h3>Expériences</h3>
            <p>Développeur web chez XYZ (2020 - présent)</p>
            <p>Stage de développement chez ABC (2019 - 2020)</p>
        </div>

        <!-- Section Formations -->
        <div id=\"formations\" class=\"cv-section\">
            <h3>Formations</h3>
            <p>Licence en informatique - Université ABC (2017 - 2020)</p>
            <p>Certificat en Développement Web - École XYZ (2020)</p>
        </div>
    </div>

    <!-- Script JavaScript pour gérer l'interaction -->
    <script>
        function showSection(sectionId) {
            // Masquer toutes les sections d'abord
            var sections = document.querySelectorAll('.cv-section');
            sections.forEach(function(section) {
                section.style.display = 'none';
            });

            // Afficher la section sélectionnée
            document.getElementById(sectionId).style.display = 'block';
        }
    </script>

</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
    public function getDebugInfo(): array
    {
        return array (  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>CV Interactif</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <style>
        /* Cacher les sections par défaut */
        .cv-section {
            display: none;
        }
    </style>
</head>
<body>

    <div class=\"container my-5\">
        <h2 class=\"text-center mb-4\">Mon CV</h2>

        <!-- Boutons pour afficher les sections -->
        <div class=\"d-flex justify-content-center mb-3\">
            <button class=\"btn btn-secondary mx-2\" onclick=\"showSection('competences')\">Compétences</button>
            <button class=\"btn btn-secondary mx-2\" onclick=\"showSection('experiences')\">Expériences</button>
            <button class=\"btn btn-secondary mx-2\" onclick=\"showSection('formations')\">Formations</button>
        </div>

        <!-- Section Compétences -->
        <div id=\"competences\" class=\"cv-section\">
            <h3>Compétences</h3>
            <p>HTML, CSS, JavaScript, Symfony, PHP, MySQL...</p>
        </div>

        <!-- Section Expériences -->
        <div id=\"experiences\" class=\"cv-section\">
            <h3>Expériences</h3>
            <p>Développeur web chez XYZ (2020 - présent)</p>
            <p>Stage de développement chez ABC (2019 - 2020)</p>
        </div>

        <!-- Section Formations -->
        <div id=\"formations\" class=\"cv-section\">
            <h3>Formations</h3>
            <p>Licence en informatique - Université ABC (2017 - 2020)</p>
            <p>Certificat en Développement Web - École XYZ (2020)</p>
        </div>
    </div>

    <!-- Script JavaScript pour gérer l'interaction -->
    <script>
        function showSection(sectionId) {
            // Masquer toutes les sections d'abord
            var sections = document.querySelectorAll('.cv-section');
            sections.forEach(function(section) {
                section.style.display = 'none';
            });

            // Afficher la section sélectionnée
            document.getElementById(sectionId).style.display = 'block';
        }
    </script>

</body>
</html>
", "home/index.html.twig", "C:\\Users\\youss\\Desktop\\my_portfolio\\templates\\home\\index.html.twig");
    }
}
