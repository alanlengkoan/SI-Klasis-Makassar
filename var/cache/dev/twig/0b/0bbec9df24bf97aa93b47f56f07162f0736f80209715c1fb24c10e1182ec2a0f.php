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

/* admin/layout.html.twig */
class __TwigTemplate_05d5112d8e0123780bd50741037b8b87791c47da468ae5cd6ed5a2136eae99de extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/img/logo.png"), "html", null, true);
        echo "\">

    ";
        // line 12
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/c3/c3.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/libs/chartist/dist/chartist.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/jvector/jquery-jvectormap-2.0.2.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/dist/css/style.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
    ";
        // line 18
        echo "
    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>

    <style>
    .parsley-errors-list {
        color: red;
        list-style-type: none;
        padding: 0;
    }
    </style>
    ";
        // line 28
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "</head>

<body>
    <div class=\"preloader\">
        <div class=\"lds-ripple\">
            <div class=\"lds-pos\"></div>
            <div class=\"lds-pos\"></div>
        </div>
    </div>
    <div id=\"main-wrapper\" data-theme=\"light\" data-layout=\"vertical\" data-navbarbg=\"skin6\" data-sidebartype=\"full\"
        data-sidebar-position=\"fixed\" data-header-position=\"fixed\" data-boxed-layout=\"full\">
        <header class=\"topbar\" data-navbarbg=\"skin6\">
            <nav class=\"navbar top-navbar navbar-expand-md\">
                <div class=\"navbar-header\" data-logobg=\"skin6\">
                    <a class=\"nav-toggler waves-effect waves-light d-block d-md-none\" href=\"javascript:void(0)\"><i
                            class=\"ti-menu ti-close\"></i></a>
                    <div class=\"navbar-brand\">
                        <span>
                            <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/img/logo.png"), "html", null, true);
        echo "\" alt=\"homepage\" class=\"dark-logo logo\">
                        </span>
                    </div>
                    <a class=\"topbartoggler d-block d-md-none waves-effect waves-light\" href=\"javascript:void(0)\"
                        data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                        aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><i
                            class=\"ti-more\"></i></a>
                </div>
                <div class=\"navbar-collapse collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav float-left mr-auto ml-3 pl-1\">
                        <h3 class=\"page-title text-truncate text-dark font-weight-medium\">Sistem Informasi Klasis
                            Makassar</h3>
                    </ul>
                    <ul class=\"navbar-nav float-right\">
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"javascript:void(0)\" data-toggle=\"dropdown\"
                                aria-haspopup=\"true\" aria-expanded=\"false\">
                                <span class=\"text-dark\">";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64), "nama", [], "any", false, false, false, 64), "html", null, true);
        echo "</span>
                                <i data-feather=\"chevron-down\" class=\"svg-icon\"></i>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right user-dd animated flipInY\">
                                <a class=\"dropdown-item\" href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_akun");
        echo "\"><i data-feather=\"user\"
                                        class=\"svg-icon mr-2 ml-1\"></i>Profile</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"> <i data-feather=\"power\"
                                        class=\"svg-icon mr-2 ml-1\"></i> Logout </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class=\"left-sidebar\" data-sidebarbg=\"skin6\">
            <div class=\"scroll-sidebar\" data-sidebarbg=\"skin6\">
                <nav class=\"sidebar-nav\">
                    <ul id=\"sidebarnav\">
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\">
                                <i class=\"fa fa-home\"></i>
                                <span class=\"hide-menu\"> Dashboard </span>
                            </a>
                        </li>
                        <li class=\"list-divider\"></li>
                        <li class=\"nav-small-cap\"><span class=\"hide-menu\"> Pustaka </span></li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_informasi");
        echo "\">
                                <i class=\"fa fa-info\"></i>
                                <span class=\"hide-menu\"> Informasi </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_profil");
        echo "\">
                                <i class=\"fa fa-list-alt\"></i>
                                <span class=\"hide-menu\"> Profil </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_pengurus");
        echo "\">
                                <i class=\"fa fa-users\"></i>
                                <span class=\"hide-menu\"> Pengurus </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link has-arrow\" href=\"javascript:void(0)\" aria-expanded=\"false\">
                                <i class=\"fa fa-money\"></i>
                                <span class=\"hide-menu\">Keuangan </span>
                            </a>
                            <ul aria-expanded=\"false\" class=\"collapse  first-level base-level-line\">
                                <li class=\"sidebar-item\">
                                    <a href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_pemasukan");
        echo "\" class=\"sidebar-link\">
                                        <span class=\"hide-menu\"> Pemasukan </span>
                                    </a>
                                </li>
                                <li class=\"sidebar-item\">
                                    <a href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_pengeluaran");
        echo "\" class=\"sidebar-link\">
                                        <span class=\"hide-menu\"> Pengeluaran </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"list-divider\"></li>
                        <li class=\"nav-small-cap\"><span class=\"hide-menu\"> Jadwal </span></li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_jadwal_minggu");
        echo "\">
                                <i class=\"fa fa-calendar\"></i>
                                <span class=\"hide-menu\"> Ibadah Minggu </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_jadwal");
        echo "\">
                                <i class=\"fa fa-calendar\"></i>
                                <span class=\"hide-menu\"> Ibadah Harian </span>
                            </a>
                        </li>
                        <li class=\"list-divider\"></li>
                        <li class=\"nav-small-cap\"><span class=\"hide-menu\"> Laporan </span></li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"";
        // line 143
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_keuangan");
        echo "\">
                                <i class=\"fa fa-file\"></i>
                                <span class=\"hide-menu\"> Laporan Keuangan </span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class=\"page-wrapper\">
            ";
        // line 155
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 156
        echo "            ";
        // line 157
        echo "            <footer class=\"footer text-center text-muted\">
                Copyright &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script>
                <a href=\"https://alanlengkoan.netlify.app/\" target=\"_blank\">AL</a> - Sistem Informasi Penjualan Air
                Tahu.
            </footer>
        </div>
    </div>

    ";
        // line 169
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/libs/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/dist/js/app-style-switcher.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/dist/js/feather.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/dist/js/sidebarmenu.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/dist/js/custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/c3/d3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/c3/c3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>
    ";
        // line 181
        echo "
    ";
        // line 182
        $this->displayBlock('javascripts', $context, $blocks);
        // line 183
        echo "</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
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

    // line 155
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

    // line 182
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
        return "admin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 182,  380 => 155,  362 => 28,  343 => 8,  331 => 183,  329 => 182,  326 => 181,  321 => 178,  317 => 177,  313 => 176,  309 => 175,  305 => 174,  301 => 173,  297 => 172,  293 => 171,  289 => 170,  284 => 169,  271 => 157,  269 => 156,  266 => 155,  252 => 143,  241 => 135,  232 => 129,  220 => 120,  212 => 115,  197 => 103,  188 => 97,  179 => 91,  168 => 83,  152 => 70,  147 => 68,  140 => 64,  120 => 47,  100 => 29,  98 => 28,  86 => 18,  82 => 16,  78 => 15,  74 => 14,  70 => 13,  65 => 12,  60 => 9,  56 => 8,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}Welcome{% endblock %}</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('assets/user/img/logo.png') }}\">

    {# begin:: asset public css #}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/admin/extra-libs/c3/c3.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/admin/libs/chartist/dist/chartist.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/admin/extra-libs/jvector/jquery-jvectormap-2.0.2.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/admin/dist/css/style.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/admin/font-awesome/css/font-awesome.min.css') }}\" />
    {# end:: asset public css #}

    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>

    <style>
    .parsley-errors-list {
        color: red;
        list-style-type: none;
        padding: 0;
    }
    </style>
    {% block stylesheets %}{% endblock %}
</head>

<body>
    <div class=\"preloader\">
        <div class=\"lds-ripple\">
            <div class=\"lds-pos\"></div>
            <div class=\"lds-pos\"></div>
        </div>
    </div>
    <div id=\"main-wrapper\" data-theme=\"light\" data-layout=\"vertical\" data-navbarbg=\"skin6\" data-sidebartype=\"full\"
        data-sidebar-position=\"fixed\" data-header-position=\"fixed\" data-boxed-layout=\"full\">
        <header class=\"topbar\" data-navbarbg=\"skin6\">
            <nav class=\"navbar top-navbar navbar-expand-md\">
                <div class=\"navbar-header\" data-logobg=\"skin6\">
                    <a class=\"nav-toggler waves-effect waves-light d-block d-md-none\" href=\"javascript:void(0)\"><i
                            class=\"ti-menu ti-close\"></i></a>
                    <div class=\"navbar-brand\">
                        <span>
                            <img src=\"{{ asset('assets/user/img/logo.png') }}\" alt=\"homepage\" class=\"dark-logo logo\">
                        </span>
                    </div>
                    <a class=\"topbartoggler d-block d-md-none waves-effect waves-light\" href=\"javascript:void(0)\"
                        data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                        aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><i
                            class=\"ti-more\"></i></a>
                </div>
                <div class=\"navbar-collapse collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav float-left mr-auto ml-3 pl-1\">
                        <h3 class=\"page-title text-truncate text-dark font-weight-medium\">Sistem Informasi Klasis
                            Makassar</h3>
                    </ul>
                    <ul class=\"navbar-nav float-right\">
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"javascript:void(0)\" data-toggle=\"dropdown\"
                                aria-haspopup=\"true\" aria-expanded=\"false\">
                                <span class=\"text-dark\">{{ app.user.nama }}</span>
                                <i data-feather=\"chevron-down\" class=\"svg-icon\"></i>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right user-dd animated flipInY\">
                                <a class=\"dropdown-item\" href=\"{{ path('admin_akun') }}\"><i data-feather=\"user\"
                                        class=\"svg-icon mr-2 ml-1\"></i>Profile</a>
                                <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\"> <i data-feather=\"power\"
                                        class=\"svg-icon mr-2 ml-1\"></i> Logout </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class=\"left-sidebar\" data-sidebarbg=\"skin6\">
            <div class=\"scroll-sidebar\" data-sidebarbg=\"skin6\">
                <nav class=\"sidebar-nav\">
                    <ul id=\"sidebarnav\">
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"{{ path('admin') }}\">
                                <i class=\"fa fa-home\"></i>
                                <span class=\"hide-menu\"> Dashboard </span>
                            </a>
                        </li>
                        <li class=\"list-divider\"></li>
                        <li class=\"nav-small-cap\"><span class=\"hide-menu\"> Pustaka </span></li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"{{ path('admin_informasi') }}\">
                                <i class=\"fa fa-info\"></i>
                                <span class=\"hide-menu\"> Informasi </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"{{ path('admin_profil') }}\">
                                <i class=\"fa fa-list-alt\"></i>
                                <span class=\"hide-menu\"> Profil </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"{{ path('admin_pengurus') }}\">
                                <i class=\"fa fa-users\"></i>
                                <span class=\"hide-menu\"> Pengurus </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link has-arrow\" href=\"javascript:void(0)\" aria-expanded=\"false\">
                                <i class=\"fa fa-money\"></i>
                                <span class=\"hide-menu\">Keuangan </span>
                            </a>
                            <ul aria-expanded=\"false\" class=\"collapse  first-level base-level-line\">
                                <li class=\"sidebar-item\">
                                    <a href=\"{{ path('admin_pemasukan') }}\" class=\"sidebar-link\">
                                        <span class=\"hide-menu\"> Pemasukan </span>
                                    </a>
                                </li>
                                <li class=\"sidebar-item\">
                                    <a href=\"{{ path('admin_pengeluaran') }}\" class=\"sidebar-link\">
                                        <span class=\"hide-menu\"> Pengeluaran </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=\"list-divider\"></li>
                        <li class=\"nav-small-cap\"><span class=\"hide-menu\"> Jadwal </span></li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"{{ path('admin_jadwal_minggu') }}\">
                                <i class=\"fa fa-calendar\"></i>
                                <span class=\"hide-menu\"> Ibadah Minggu </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"{{ path('admin_jadwal') }}\">
                                <i class=\"fa fa-calendar\"></i>
                                <span class=\"hide-menu\"> Ibadah Harian </span>
                            </a>
                        </li>
                        <li class=\"list-divider\"></li>
                        <li class=\"nav-small-cap\"><span class=\"hide-menu\"> Laporan </span></li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"{{ path('admin_keuangan') }}\">
                                <i class=\"fa fa-file\"></i>
                                <span class=\"hide-menu\"> Laporan Keuangan </span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class=\"page-wrapper\">
            {# begin:: body #}
            {% block body %}{% endblock %}
            {# end:: body #}
            <footer class=\"footer text-center text-muted\">
                Copyright &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script>
                <a href=\"https://alanlengkoan.netlify.app/\" target=\"_blank\">AL</a> - Sistem Informasi Penjualan Air
                Tahu.
            </footer>
        </div>
    </div>

    {# begin:: asset public js #}
    <script src=\"{{ asset('assets/admin/libs/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('assets/admin/dist/js/app-style-switcher.js') }}\"></script>
    <script src=\"{{ asset('assets/admin/dist/js/feather.min.js') }}\"></script>
    <script src=\"{{ asset('assets/admin/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}\"></script>
    <script src=\"{{ asset('assets/admin/dist/js/sidebarmenu.js') }}\"></script>
    <script src=\"{{ asset('assets/admin/dist/js/custom.min.js') }}\"></script>
    <script src=\"{{ asset('assets/admin/extra-libs/c3/d3.min.js') }}\"></script>
    <script src=\"{{ asset('assets/admin/extra-libs/c3/c3.min.js') }}\"></script>
    <script src=\"{{ asset('assets/admin/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js') }}\"></script>
    <script src=\"{{ asset('assets/admin/extra-libs/jvector/jquery-jvectormap-world-mill-en.js') }}\"></script>
    <script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>
    {# end:: asset public js #}

    {% block javascripts %}{% endblock %}
</body>

</html>", "admin/layout.html.twig", "P:\\Project\\PHP\\si\\SI-Klasis-Makassar\\templates\\admin\\layout.html.twig");
    }
}
