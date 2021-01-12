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
class __TwigTemplate_a416fda54a8d162c796781b4ac68cac2507423afa616b53471088b6242923350 extends Template
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 64), "nama", [], "any", false, false, false, 64), "html", null, true);
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
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome";
    }

    // line 28
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 155
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 182
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  350 => 182,  344 => 155,  338 => 28,  331 => 8,  325 => 183,  323 => 182,  320 => 181,  315 => 178,  311 => 177,  307 => 176,  303 => 175,  299 => 174,  295 => 173,  291 => 172,  287 => 171,  283 => 170,  278 => 169,  265 => 157,  263 => 156,  260 => 155,  246 => 143,  235 => 135,  226 => 129,  214 => 120,  206 => 115,  191 => 103,  182 => 97,  173 => 91,  162 => 83,  146 => 70,  141 => 68,  134 => 64,  114 => 47,  94 => 29,  92 => 28,  80 => 18,  76 => 16,  72 => 15,  68 => 14,  64 => 13,  59 => 12,  54 => 9,  50 => 8,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/layout.html.twig", "P:\\Project\\PHP\\si\\SI-Klasis-Makassar\\templates\\admin\\layout.html.twig");
    }
}
