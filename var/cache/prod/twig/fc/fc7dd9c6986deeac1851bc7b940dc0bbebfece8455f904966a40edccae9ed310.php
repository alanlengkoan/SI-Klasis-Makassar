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
class __TwigTemplate_ef8802c556241ea455c04b72ac8b67b151c15533b60199cbaae393f5e871ca97 extends Template
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
        $context["current_path"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 41), "get", [0 => "_route"], "method", false, false, false, 41);
        // line 42
        echo "                <ul>
                    <li class=\"";
        // line 43
        echo ((((0 === twig_compare(($context["current_path"] ?? null), "home")) || (0 === twig_compare(($context["current_path"] ?? null), "index")))) ? ("active") : (""));
        echo "\"> <a href=\"/\">Beranda</a> </li>
                    ";
        // line 44
        if ( !twig_test_empty(($context["gereja"] ?? null))) {
            // line 45
            echo "                    <li class=\"drop-down ";
            echo ((((0 === twig_compare(($context["current_path"] ?? null), "gereja")) || (0 === twig_compare(($context["current_path"] ?? null), "gereja_detail")))) ? ("active") : (""));
            echo "\">
                        <a href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gereja");
            echo "\">Gereja</a>
                        <ul>
                            ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["gereja"] ?? null));
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
        echo (((0 === twig_compare(($context["current_path"] ?? null), "berita"))) ? ("active") : (""));
        echo "\"> <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("berita");
        echo "\">Berita</a> </li>
                    <li class=\"";
        // line 55
        echo (((0 === twig_compare(($context["current_path"] ?? null), "galeri"))) ? ("active") : (""));
        echo "\"> <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("galeri");
        echo "\">Galeri</a> </li>
                    <li class=\"";
        // line 56
        echo (((0 === twig_compare(($context["current_path"] ?? null), "kontak"))) ? ("active") : (""));
        echo "\"> <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("kontak");
        echo "\">Kontak</a> </li>
                    <li class=\"";
        // line 57
        echo (((0 === twig_compare(($context["current_path"] ?? null), "tentang"))) ? ("active") : (""));
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
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Beranda";
    }

    // line 24
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 76
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 86
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 119
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  316 => 119,  310 => 86,  304 => 76,  298 => 24,  291 => 7,  285 => 120,  283 => 119,  278 => 117,  274 => 116,  270 => 115,  266 => 114,  262 => 113,  258 => 112,  254 => 111,  250 => 110,  226 => 88,  224 => 87,  221 => 86,  211 => 77,  209 => 76,  198 => 68,  185 => 58,  179 => 57,  173 => 56,  167 => 55,  160 => 54,  155 => 51,  144 => 49,  140 => 48,  135 => 46,  130 => 45,  128 => 44,  124 => 43,  121 => 42,  119 => 41,  101 => 25,  99 => 24,  94 => 22,  91 => 21,  87 => 19,  83 => 18,  79 => 17,  75 => 16,  71 => 15,  67 => 14,  63 => 13,  59 => 11,  54 => 8,  50 => 7,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout.html.twig", "P:\\Project\\PHP\\si\\SI-Klasis-Makassar\\templates\\layout.html.twig");
    }
}
