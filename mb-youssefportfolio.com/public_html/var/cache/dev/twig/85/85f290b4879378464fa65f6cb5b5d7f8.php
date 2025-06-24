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
class __TwigTemplate_48b23d8df64989dc32b0c44b337b6da5 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
    <title>Moubarek BELKERMI</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"/css/style.css\">
    <!-- <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/app.css"), "html", null, true);
        yield "\"> -->
</head>
<body>
 <!-- Boutons pour afficher les différentes sections -->
<div class=\"container text-center my-4\">
    <button class=\"btn btn-secondary mx-2\" onclick=\"showSection('competences')\">Compétences</button>
    <button class=\"btn btn-secondary mx-2\" onclick=\"showSection('experiences')\">Expériences</button>
    <button class=\"btn btn-secondary mx-2\" onclick=\"showSection('formations')\">Formations</button>
</div>

<!-- Section Compétences -->
<div id=\"competences\" class=\"cv-section container my-5\" style=\"display:none;\">
    <h3>Compétences</h3>
    <ul>
        <li>Développement Front-end : HTML, CSS, JavaScript, Bootstrap</li>
        <li>Développement Back-end : PHP, Symfony</li>
        <li>Bases de données : MySQL, PostgreSQL</li>
        <li>Versioning : Git, GitHub</li>
    </ul>
</div>

<!-- Section Expériences -->
<div id=\"experiences\" class=\"cv-section container my-5\" style=\"display:none;\">
    <h3>Expériences</h3>
    <p><strong>Développeur web junior</strong> - XYZ Agency (2021 - présent)</p>
    <p>Responsable de la création de sites web dynamiques avec Symfony et Bootstrap.</p>
    
    <p><strong>Stage en développement</strong> - ABC Company (2020 - 2021)</p>
    <p>Participation au développement de plusieurs projets en utilisant PHP et JavaScript.</p>
</div>

<!-- Section Formations -->
<div id=\"formations\" class=\"cv-section container my-5\" style=\"display:none;\">
    <h3>Formations</h3>
    <p><strong>Licence en informatique</strong> - Université ABC (2017 - 2020)</p>
    <p>Spécialisation en développement web et gestion de bases de données.</p>
</div>

    <!-- Section de présentation -->
   <div class=\"bg-light p-5 text-center\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-4\">
                <img src=\"/images/photodeprofil.jpeg\" class=\"img-fluid rounded-circle\" id=\"profilePhoto\" alt=\"Ma photo\" style=\"max-width: 200px;\">
            </div>
            <div class=\"col-md-8\">
                <h1 class=\"display-4\">Moubarek BELKERMI</h1>
                <p class=\"lead\">Développeur Web & Mobile à la recherche d'une opportunité en tant que développeur junior ou en alternance.</p>
                <a href=\"/cv/CVMB.pdf\" class=\"btn btn-primary\" download=\"MonCV.pdf\">Télécharger mon CV</a>

            </div>
        </div>
    </div>
</div>

    <!-- Formulaire de contact avec Bootstrap et personnalisation -->
<div class=\"container\" id=\"contactFormSection\">
    <h2 class=\"text-center mb-4\">Me Contacter</h2>

    ";
        // line 68
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 68, $this->source); })()), 'form_start', ["attr" => ["id" => "contactForm"]]);
        yield "
        <div class=\"mb-3\">
            <!-- Champ pour le nom -->
            ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 71, $this->source); })()), "name", [], "any", false, false, false, 71), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Votre nom"]);
        yield "
            ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 72, $this->source); })()), "name", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "form-control shadow-sm", "placeholder" => "Entrez votre nom"]]);
        yield "
        </div>

        <div class=\"mb-3\">
            <!-- Champ pour l'email -->
            ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 77, $this->source); })()), "email", [], "any", false, false, false, 77), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Votre email"]);
        yield "
            ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 78, $this->source); })()), "email", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control shadow-sm", "placeholder" => "Entrez votre email"]]);
        yield "
        </div>

        <div class=\"mb-3\">
            <!-- Champ pour le message -->
            ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 83, $this->source); })()), "message", [], "any", false, false, false, 83), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Votre message"]);
        yield "
            ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 84, $this->source); })()), "message", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control shadow-sm", "placeholder" => "Entrez votre message", "rows" => "5"]]);
        yield "
        </div>

        <button type=\"button\" class=\"btn btn-primary btn-lg\" onclick=\"submitContactForm()\">Envoyer</button>
    ";
        // line 88
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 88, $this->source); })()), 'form_end');
        yield "

    <!-- Div pour afficher un message de confirmation ou d'erreur -->
    <div id=\"responseMessage\" class=\"mt-3\"></div>
</div>

<!-- Footer -->
<footer class=\"bg-light text-center text-lg-start mt-5\">
    <div class=\"container p-4\">

        <!-- Section : Coordonnées -->
        <section class=\"\">
            <div class=\"row\">
                <!-- Colonne 1 : Coordonnées -->
                <div class=\"col-lg-6 col-md-12 mb-4 mb-md-0\">
                    <h5 class=\"text-uppercase\">Contact</h5>
                    <p>
                        Email : belkermi.moubarek@gmail.com<br>
                        Téléphone : +33 6 00 00 00 00
                    </p>
                </div>

                <!-- Colonne 2 : Liens sociaux -->
                <div class=\"col-lg-6 col-md-12 mb-4 mb-md-0\">
                    <h5 class=\"text-uppercase\">Suivez-moi</h5>
                    <ul class=\"list-unstyled\">
                        <li>
                            <a href=\"https://www.linkedin.com/feed/update/urn:li:activity:7246476552618524672/\" class=\"text-dark\" target=\"_blank\">LinkedIn</a>
                        </li>
                        <li>
                            <a href=\"https://github.com/BM-Y\" class=\"text-dark\" target=\"_blank\">GitHub</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

    </div>

    <!-- Copyright -->
    <div class=\"text-center p-3 bg-dark text-white\">
        &copy; 2024 Moubarek BELKERMI | Développeur Web & Mobile
    </div>
</footer>


    <!-- Inclusion du fichier JavaScript -->
    ";
        // line 135
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 139
        yield "
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
    
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 135
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 136
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/app.js"), "html", null, true);
        yield "\"></script> <!-- Fichier JS pour rendre les sections du CV interactives -->
        <!-- <script src=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/app.js"), "html", null, true);
        yield "\"></script> -->
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
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  239 => 137,  234 => 136,  224 => 135,  211 => 139,  209 => 135,  159 => 88,  152 => 84,  148 => 83,  140 => 78,  136 => 77,  128 => 72,  124 => 71,  118 => 68,  56 => 9,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Moubarek BELKERMI</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"/css/style.css\">
    <!-- <link rel=\"stylesheet\" href=\"{{ asset('build/app.css') }}\"> -->
</head>
<body>
 <!-- Boutons pour afficher les différentes sections -->
<div class=\"container text-center my-4\">
    <button class=\"btn btn-secondary mx-2\" onclick=\"showSection('competences')\">Compétences</button>
    <button class=\"btn btn-secondary mx-2\" onclick=\"showSection('experiences')\">Expériences</button>
    <button class=\"btn btn-secondary mx-2\" onclick=\"showSection('formations')\">Formations</button>
</div>

<!-- Section Compétences -->
<div id=\"competences\" class=\"cv-section container my-5\" style=\"display:none;\">
    <h3>Compétences</h3>
    <ul>
        <li>Développement Front-end : HTML, CSS, JavaScript, Bootstrap</li>
        <li>Développement Back-end : PHP, Symfony</li>
        <li>Bases de données : MySQL, PostgreSQL</li>
        <li>Versioning : Git, GitHub</li>
    </ul>
</div>

<!-- Section Expériences -->
<div id=\"experiences\" class=\"cv-section container my-5\" style=\"display:none;\">
    <h3>Expériences</h3>
    <p><strong>Développeur web junior</strong> - XYZ Agency (2021 - présent)</p>
    <p>Responsable de la création de sites web dynamiques avec Symfony et Bootstrap.</p>
    
    <p><strong>Stage en développement</strong> - ABC Company (2020 - 2021)</p>
    <p>Participation au développement de plusieurs projets en utilisant PHP et JavaScript.</p>
</div>

<!-- Section Formations -->
<div id=\"formations\" class=\"cv-section container my-5\" style=\"display:none;\">
    <h3>Formations</h3>
    <p><strong>Licence en informatique</strong> - Université ABC (2017 - 2020)</p>
    <p>Spécialisation en développement web et gestion de bases de données.</p>
</div>

    <!-- Section de présentation -->
   <div class=\"bg-light p-5 text-center\">
    <div class=\"container\">
        <div class=\"row align-items-center\">
            <div class=\"col-md-4\">
                <img src=\"/images/photodeprofil.jpeg\" class=\"img-fluid rounded-circle\" id=\"profilePhoto\" alt=\"Ma photo\" style=\"max-width: 200px;\">
            </div>
            <div class=\"col-md-8\">
                <h1 class=\"display-4\">Moubarek BELKERMI</h1>
                <p class=\"lead\">Développeur Web & Mobile à la recherche d'une opportunité en tant que développeur junior ou en alternance.</p>
                <a href=\"/cv/CVMB.pdf\" class=\"btn btn-primary\" download=\"MonCV.pdf\">Télécharger mon CV</a>

            </div>
        </div>
    </div>
</div>

    <!-- Formulaire de contact avec Bootstrap et personnalisation -->
<div class=\"container\" id=\"contactFormSection\">
    <h2 class=\"text-center mb-4\">Me Contacter</h2>

    {{ form_start(contactForm, {'attr': {'id': 'contactForm'}}) }}
        <div class=\"mb-3\">
            <!-- Champ pour le nom -->
            {{ form_label(contactForm.name, 'Votre nom', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(contactForm.name, {'attr': {'class': 'form-control shadow-sm', 'placeholder': 'Entrez votre nom'}}) }}
        </div>

        <div class=\"mb-3\">
            <!-- Champ pour l'email -->
            {{ form_label(contactForm.email, 'Votre email', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(contactForm.email, {'attr': {'class': 'form-control shadow-sm', 'placeholder': 'Entrez votre email'}}) }}
        </div>

        <div class=\"mb-3\">
            <!-- Champ pour le message -->
            {{ form_label(contactForm.message, 'Votre message', {'label_attr': {'class': 'form-label'}}) }}
            {{ form_widget(contactForm.message, {'attr': {'class': 'form-control shadow-sm', 'placeholder': 'Entrez votre message', 'rows': '5'}}) }}
        </div>

        <button type=\"button\" class=\"btn btn-primary btn-lg\" onclick=\"submitContactForm()\">Envoyer</button>
    {{ form_end(contactForm) }}

    <!-- Div pour afficher un message de confirmation ou d'erreur -->
    <div id=\"responseMessage\" class=\"mt-3\"></div>
</div>

<!-- Footer -->
<footer class=\"bg-light text-center text-lg-start mt-5\">
    <div class=\"container p-4\">

        <!-- Section : Coordonnées -->
        <section class=\"\">
            <div class=\"row\">
                <!-- Colonne 1 : Coordonnées -->
                <div class=\"col-lg-6 col-md-12 mb-4 mb-md-0\">
                    <h5 class=\"text-uppercase\">Contact</h5>
                    <p>
                        Email : belkermi.moubarek@gmail.com<br>
                        Téléphone : +33 6 00 00 00 00
                    </p>
                </div>

                <!-- Colonne 2 : Liens sociaux -->
                <div class=\"col-lg-6 col-md-12 mb-4 mb-md-0\">
                    <h5 class=\"text-uppercase\">Suivez-moi</h5>
                    <ul class=\"list-unstyled\">
                        <li>
                            <a href=\"https://www.linkedin.com/feed/update/urn:li:activity:7246476552618524672/\" class=\"text-dark\" target=\"_blank\">LinkedIn</a>
                        </li>
                        <li>
                            <a href=\"https://github.com/BM-Y\" class=\"text-dark\" target=\"_blank\">GitHub</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

    </div>

    <!-- Copyright -->
    <div class=\"text-center p-3 bg-dark text-white\">
        &copy; 2024 Moubarek BELKERMI | Développeur Web & Mobile
    </div>
</footer>


    <!-- Inclusion du fichier JavaScript -->
    {% block javascripts %}
        <script src=\"{{ asset('js/app.js') }}\"></script> <!-- Fichier JS pour rendre les sections du CV interactives -->
        <!-- <script src=\"{{ asset('build/app.js') }}\"></script> -->
    {% endblock %}

    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"></script>
    
</body>
</html>
", "home/index.html.twig", "C:\\Users\\youss\\Desktop\\my_portfolio\\templates\\home\\index.html.twig");
    }
}
