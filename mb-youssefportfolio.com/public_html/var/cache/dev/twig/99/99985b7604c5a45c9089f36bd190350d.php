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
class __TwigTemplate_62ecd8c2a889c6f13b9c1a49463ae325 extends Template
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
    <title>CV Moubarek BELKERMI</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"/css/style.css\">
</head>
<body>
    <!-- Barre de navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"#\">Mon CV en ligne</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav ms-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" href=\"#\">Accueil</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#competences\">Compétences</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#experiences\">Expériences</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#formations\">Formations</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#contact\">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Section de présentation -->
    <div class=\"bg-light p-5 text-center\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <!-- Photo de toi -->
                <div class=\"col-md-4\">
                    <img src=\"/images/photodeprofil.jpeg\" class=\"img-fluid rounded-circle\" alt=\"Ma photo\" style=\"max-width: 200px;\">
                </div>
                <!-- Texte de présentation -->
                <div class=\"col-md-8\">
                    <h1 class=\"display-4\">Moubarek BELKERMI</h1>
                    <p class=\"lead\">Développeur Web & Mobile à la recherche d'une opportunité en tant que développeur junior ou en alternance.</p>
                    <a href=\"/cv/CVMB.pdf\" class=\"btn btn-primary\">Télécharger mon CV</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Compétences -->
    <!-- (les autres sections que tu as déjà) -->

    <!-- Section Contact avec formulaire -->
    <div class=\"container my-5\" id=\"contact\">
        <h2 class=\"text-center mb-4\">Me Contacter</h2>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <form action=\"send_email.php\" method=\"POST\">
                    <div class=\"mb-3\">
                        <label for=\"name\" class=\"form-label\">Nom</label>
                        <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"Votre nom\" required>
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"email\" class=\"form-label\">Adresse email</label>
                        <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"nom@example.com\" required>
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"message\" class=\"form-label\">Message</label>
                        <textarea class=\"form-control\" id=\"message\" name=\"message\" rows=\"4\" placeholder=\"Votre message\" required></textarea>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class=\"bg-light text-center py-4\">
        <p>&copy; 2024 Moubarek BELKERMI | Développeur Web & Mobile</p>
    </footer>

    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
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
    <title>CV Moubarek BELKERMI</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"/css/style.css\">
</head>
<body>
    <!-- Barre de navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"#\">Mon CV en ligne</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav ms-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" href=\"#\">Accueil</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#competences\">Compétences</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#experiences\">Expériences</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#formations\">Formations</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#contact\">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Section de présentation -->
    <div class=\"bg-light p-5 text-center\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <!-- Photo de toi -->
                <div class=\"col-md-4\">
                    <img src=\"/images/photodeprofil.jpeg\" class=\"img-fluid rounded-circle\" alt=\"Ma photo\" style=\"max-width: 200px;\">
                </div>
                <!-- Texte de présentation -->
                <div class=\"col-md-8\">
                    <h1 class=\"display-4\">Moubarek BELKERMI</h1>
                    <p class=\"lead\">Développeur Web & Mobile à la recherche d'une opportunité en tant que développeur junior ou en alternance.</p>
                    <a href=\"/cv/CVMB.pdf\" class=\"btn btn-primary\">Télécharger mon CV</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Compétences -->
    <!-- (les autres sections que tu as déjà) -->

    <!-- Section Contact avec formulaire -->
    <div class=\"container my-5\" id=\"contact\">
        <h2 class=\"text-center mb-4\">Me Contacter</h2>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <form action=\"send_email.php\" method=\"POST\">
                    <div class=\"mb-3\">
                        <label for=\"name\" class=\"form-label\">Nom</label>
                        <input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"Votre nom\" required>
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"email\" class=\"form-label\">Adresse email</label>
                        <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"nom@example.com\" required>
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"message\" class=\"form-label\">Message</label>
                        <textarea class=\"form-control\" id=\"message\" name=\"message\" rows=\"4\" placeholder=\"Votre message\" required></textarea>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class=\"bg-light text-center py-4\">
        <p>&copy; 2024 Moubarek BELKERMI | Développeur Web & Mobile</p>
    </footer>

    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
</body>
</html>
", "home/index.html.twig", "C:\\Users\\youss\\Desktop\\my_portfolio\\templates\\home\\index.html.twig");
    }
}
