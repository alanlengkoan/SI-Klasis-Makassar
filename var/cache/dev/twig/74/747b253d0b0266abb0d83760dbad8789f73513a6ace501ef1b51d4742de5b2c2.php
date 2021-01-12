<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* layout.html.twig */
class __TwigTemplate_a7c5f3c53341910e0ae9102bd66d4789f814f97f0c8cdcb20ded2efa4e5d4d3b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <title>Klasis Makassar | ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/img/logo.png"), "html", null, true);
        echo "\">
    
    ";
        // line 11
        echo "    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i\">
    <link rel=\"stylesheet\" href=\"https://pro.fontawesome.com/releases/v5.10.0/css/all.css\" integrity=\"sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p\" crossorigin=\"anonymous\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/vendor/icofont/icofont.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/vendor/animate.css/animate.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/vendor/venobox/venobox.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/vendor/owl.carousel/assets/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/css/style.css"), "html", null, true);
        echo "\">
    ";
        // line 21
        echo "
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 24
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "</head>

<body>
    <section id=\"topbar\" class=\"d-none d-lg-flex align-items-center fixed-top topbar-transparent\">
        <div class=\"container text-right\">
            <i class=\"icofont-phone\"></i> +1 5589 55488 55
            <i class=\"icofont-email\"></i> example@mail.com
        </div>
    </section>

    <header id=\"header\" class=\"fixed-top d-flex align-items-center header-transparent\">
        <div class=\"container d-flex align-items-center\">
            <div class=\"logo mr-auto\">
                <h1 class=\"text-light\"><span>Klasis Makassar</span></h1>
            </div>
            <nav class=\"nav-menu d-none d-lg-block\">
                ";
        // line 41
        $context["current_path"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "request", [], "any", false, false, false, 41), "get", [0 => "_route"], "method", false, false, false, 41);
        // line 42
        echo "                <ul>
                    <li class=\"";
        // line 43
        echo ((((0 === twig_compare((isset($context["current_path"]) || array_key_exists("current_path", $context) ? $context["current_path"] : (function () { throw new RuntimeError('Variable "current_path" does not exist.', 43, $this->source); })()), "home")) || (0 === twig_compare((isset($context["current_path"]) || array_key_exists("current_path", $context) ? $context["current_path"] : (function () { throw new RuntimeError('Variable "current_path" does not exist.', 43, $this->source); })()), "index")))) ? ("active") : (""));
        echo "\"> <a href=\"/\">Beranda</a> </li>
                    ";
        // line 44
        if ( !twig_test_empty((isset($context["gereja"]) || array_key_exists("gereja", $context) ? $context["gereja"] : (function () { throw new RuntimeError('Variable "gereja" does not exist.', 44, $this->source); })()))) {
            // line 45
            echo "                    <li class=\"drop-down ";
            echo ((((0 === twig_compare((isset($context["current_path"]) || array_key_exists("current_path", $context) ? $context["current_path"] : (function () { throw new RuntimeError('Variable "current_path" does not exist.', 45, $this->source); })()), "gereja")) || (0 === twig_compare((isset($context["current_path"]) || array_key_exists("current_path", $context) ? $context["current_path"] : (function () { throw new RuntimeError('Variable "current_path" does not exist.', 45, $this->source); })()), "gereja_detail")))) ? ("active") : (""));
            echo "\">
                        <a href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gereja");
            echo "\">Gereja</a>
                        <ul>
                            ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["gereja"]) || array_key_exists("gereja", $context) ? $context["gereja"] : (function () { throw new RuntimeError('Variable "gereja" does not exist.', 48, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
                // line 49
                echo "                            <li><a href=\"/gereja/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "id_gereja", [], "any", false, false, false, 49), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama", [], "any", false, false, false, 49), "html", null, true);
                echo "</a></li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                        </ul>
                    </li>
                    ";
        }
        // line 54
        echo "                    <li class=\"";
        echo (((0 === twig_compare((isset($context["current_path"]) || array_key_exists("current_path", $context) ? $context["current_path"] : (function () { throw new RuntimeError('Variable "current_path" does not exist.', 54, $this->source); })()), "berita"))) ? ("active") : (""));
        echo "\"> <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("berita");
        echo "\">Berita</a> </li>
                    <li class=\"";
        // line 55
        echo (((0 === twig_compare((isset($context["current_path"]) || array_key_exists("current_path", $context) ? $context["current_path"] : (function () { throw new RuntimeError('Variable "current_path" does not exist.', 55, $this->source); })()), "galeri"))) ? ("active") : (""));
        echo "\"> <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("galeri");
        echo "\">Galeri</a> </li>
                    <li class=\"";
        // line 56
        echo (((0 === twig_compare((isset($context["current_path"]) || array_key_exists("current_path", $context) ? $context["current_path"] : (function () { throw new RuntimeError('Variable "current_path" does not exist.', 56, $this->source); })()), "kontak"))) ? ("active") : (""));
        echo "\"> <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("kontak");
        echo "\">Kontak</a> </li>
                    <li class=\"";
        // line 57
        echo (((0 === twig_compare((isset($context["current_path"]) || array_key_exists("current_path", $context) ? $context["current_path"] : (function () { throw new RuntimeError('Variable "current_path" does not exist.', 57, $this->source); })()), "tentang"))) ? ("active") : (""));
        echo "\"> <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tentang");
        echo "\">Tentang</a> </li>
                    <li class=\"book-a-table text-center\"> <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Login</a> </li>
                </ul>
            </nav>
        </div>
    </header>

    <section id=\"hero\">
        <div class=\"hero-container\">
            <div id=\"heroCarousel\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
                <div class=\"carousel-inner\" role=\"listbox\">
                    <div class=\"carousel-item active\" style=\"background: url('";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/img/evening-1.jpg"), "html", null, true);
        echo "');\">
                        <div class=\"carousel-container\">
                            <div class=\"carousel-content\">
                                <h2 class=\"animate__animated animate__fadeInDown\">
                                    <span>Sistem Informasi</span>
                                    <br>
                                    Gereja Toraja Mamasa Klasis Makassar
                                </h2>
                                ";
        // line 76
        $this->displayBlock('header', $context, $blocks);
        // line 77
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    ";
        // line 86
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 87
        echo "    ";
        // line 88
        echo "
    <footer id=\"footer\">
        <div class=\"container\">
            <h3>Klasis Makassar</h3>
            <p>Terwujudnya Gereja Toraja Mamasa yang Utuh, Mandiri, dan Misioner.</p>
            <div class=\"social-links\">
                <a href=\"#\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
                <a href=\"#\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
                <a href=\"#\" class=\"whatsapp\"><i class=\"bx bxl-whatsapp\"></i></a>
            </div>
            <div class=\"copyright\">
                Copyright &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script>
                <a href=\"https://alanlengkoan.netlify.app/\" target=\"_blank\">AL</a> - Sistem Informasi Klasis Makassar.
            </div>
        </div>
    </footer>

    <a href=\"#\" class=\"back-to-top\"><i class=\"icofont-simple-up\"></i></a>

    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/vendor/jquery.easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/vendor/jquery-sticky/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/vendor/venobox/venobox.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/vendor/owl.carousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/js/main.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 119
        $this->displayBlock('javascripts', $context, $blocks);
        // line 120
        echo "</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Beranda";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 86
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 119
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 119,  358 => 86,  340 => 76,  322 => 24,  303 => 7,  291 => 120,  289 => 119,  284 => 117,  280 => 116,  276 => 115,  272 => 114,  268 => 113,  264 => 112,  260 => 111,  256 => 110,  232 => 88,  230 => 87,  227 => 86,  217 => 77,  215 => 76,  204 => 68,  191 => 58,  185 => 57,  179 => 56,  173 => 55,  166 => 54,  161 => 51,  150 => 49,  146 => 48,  141 => 46,  136 => 45,  134 => 44,  130 => 43,  127 => 42,  125 => 41,  107 => 25,  105 => 24,  100 => 22,  97 => 21,  93 => 19,  89 => 18,  85 => 17,  81 => 16,  77 => 15,  73 => 14,  69 => 13,  65 => 11,  60 => 8,  56 => 7,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <title>Klasis Makassar | {% block title %}Beranda{% endblock %}</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('assets/user/img/logo.png') }}\">
    
    {# begin:: asset public css #}
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i\">
    <link rel=\"stylesheet\" href=\"https://pro.fontawesome.com/releases/v5.10.0/css/all.css\" integrity=\"sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p\" crossorigin=\"anonymous\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('assets/user/vendor/bootstrap/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/user/vendor/icofont/icofont.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/user/vendor/boxicons/css/boxicons.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/user/vendor/animate.css/animate.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/user/vendor/venobox/venobox.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/user/vendor/owl.carousel/assets/owl.carousel.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/user/css/style.css') }}\">
    {# end:: asset public css #}

    <script src=\"{{ asset('assets/user/vendor/jquery/jquery.min.js') }}\"></script>

    {% block stylesheets %}{% endblock %}
</head>

<body>
    <section id=\"topbar\" class=\"d-none d-lg-flex align-items-center fixed-top topbar-transparent\">
        <div class=\"container text-right\">
            <i class=\"icofont-phone\"></i> +1 5589 55488 55
            <i class=\"icofont-email\"></i> example@mail.com
        </div>
    </section>

    <header id=\"header\" class=\"fixed-top d-flex align-items-center header-transparent\">
        <div class=\"container d-flex align-items-center\">
            <div class=\"logo mr-auto\">
                <h1 class=\"text-light\"><span>Klasis Makassar</span></h1>
            </div>
            <nav class=\"nav-menu d-none d-lg-block\">
                {% set current_path = app.request.get('_route') %}
                <ul>
                    <li class=\"{{ (current_path == 'home') or (current_path == 'index') ? 'active' : '' }}\"> <a href=\"/\">Beranda</a> </li>
                    {% if gereja is not empty %}
                    <li class=\"drop-down {{ (current_path == 'gereja') or (current_path == 'gereja_detail') ? 'active' : '' }}\">
                        <a href=\"{{ path('gereja') }}\">Gereja</a>
                        <ul>
                            {% for rows in gereja %}
                            <li><a href=\"/gereja/{{ rows.id_gereja }}\">{{ rows.nama }}</a></li>
                            {% endfor %}
                        </ul>
                    </li>
                    {% endif %}
                    <li class=\"{{ (current_path == 'berita') ? 'active' : '' }}\"> <a href=\"{{ path('berita') }}\">Berita</a> </li>
                    <li class=\"{{ (current_path == 'galeri') ? 'active' : '' }}\"> <a href=\"{{ path('galeri') }}\">Galeri</a> </li>
                    <li class=\"{{ (current_path == 'kontak') ? 'active' : '' }}\"> <a href=\"{{ path('kontak') }}\">Kontak</a> </li>
                    <li class=\"{{ (current_path == 'tentang') ? 'active' : '' }}\"> <a href=\"{{ path('tentang') }}\">Tentang</a> </li>
                    <li class=\"book-a-table text-center\"> <a href=\"{{ path('app_login') }}\">Login</a> </li>
                </ul>
            </nav>
        </div>
    </header>

    <section id=\"hero\">
        <div class=\"hero-container\">
            <div id=\"heroCarousel\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
                <div class=\"carousel-inner\" role=\"listbox\">
                    <div class=\"carousel-item active\" style=\"background: url('{{ asset('assets/user/img/evening-1.jpg') }}');\">
                        <div class=\"carousel-container\">
                            <div class=\"carousel-content\">
                                <h2 class=\"animate__animated animate__fadeInDown\">
                                    <span>Sistem Informasi</span>
                                    <br>
                                    Gereja Toraja Mamasa Klasis Makassar
                                </h2>
                                {% block header %}{% endblock %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {# begin:: content #}
    {% block body %}{% endblock %}
    {# end:: content #}

    <footer id=\"footer\">
        <div class=\"container\">
            <h3>Klasis Makassar</h3>
            <p>Terwujudnya Gereja Toraja Mamasa yang Utuh, Mandiri, dan Misioner.</p>
            <div class=\"social-links\">
                <a href=\"#\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
                <a href=\"#\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
                <a href=\"#\" class=\"whatsapp\"><i class=\"bx bxl-whatsapp\"></i></a>
            </div>
            <div class=\"copyright\">
                Copyright &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script>
                <a href=\"https://alanlengkoan.netlify.app/\" target=\"_blank\">AL</a> - Sistem Informasi Klasis Makassar.
            </div>
        </div>
    </footer>

    <a href=\"#\" class=\"back-to-top\"><i class=\"icofont-simple-up\"></i></a>

    <script src=\"{{ asset('assets/user/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
    <script src=\"{{ asset('assets/user/vendor/jquery.easing/jquery.easing.min.js') }}\"></script>
    <script src=\"{{ asset('assets/user/vendor/php-email-form/validate.js') }}\"></script>
    <script src=\"{{ asset('assets/user/vendor/jquery-sticky/jquery.sticky.js') }}\"></script>
    <script src=\"{{ asset('assets/user/vendor/isotope-layout/isotope.pkgd.min.js') }}\"></script>
    <script src=\"{{ asset('assets/user/vendor/venobox/venobox.min.js') }}\"></script>
    <script src=\"{{ asset('assets/user/vendor/owl.carousel/owl.carousel.min.js') }}\"></script>
    <script src=\"{{ asset('assets/user/js/main.js') }}\"></script>

    {% block javascripts %}{% endblock %}
</body>

</html>", "layout.html.twig", "P:\\Project\\PHP\\si\\SI-Klasis-Makassar\\templates\\layout.html.twig");
    }
}
