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

/* superadmin/layout.html.twig */
class __TwigTemplate_d7394da65c42c276562139d1698da70b8930a61fd9c16cebcb888c213c8c5d2b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "superadmin/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "superadmin/layout.html.twig"));

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
    #error {
        color: red
    }
    </style>
    ";
        // line 26
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
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
                    <a class=\"nav-toggler waves-effect waves-light d-block d-md-none\" href=\"javascript:void(0)\"><i class=\"ti-menu ti-close\"></i></a>
                    <div class=\"navbar-brand\">
                        <span>
                            <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/img/logo.png"), "html", null, true);
        echo "\" alt=\"homepage\" class=\"dark-logo logo\">
                        </span>
                    </div>
                    <a class=\"topbartoggler d-block d-md-none waves-effect waves-light\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><i class=\"ti-more\"></i></a>
                </div>
                <div class=\"navbar-collapse collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav float-left mr-auto ml-3 pl-1\">
                      <h3 class=\"page-title text-truncate text-dark font-weight-medium\">Sistem Informasi Klasis Makassar</h3>
                    </ul>
                    <ul class=\"navbar-nav float-right\">
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"javascript:void(0)\" data-toggle=\"dropdown\"
                                aria-haspopup=\"true\" aria-expanded=\"false\">
                                <span class=\"text-dark\">";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "nama", [], "any", false, false, false, 57), "html", null, true);
        echo "</span>
                                <i data-feather=\"chevron-down\" class=\"svg-icon\"></i>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right user-dd animated flipInY\">
                                <a class=\"dropdown-item\" href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("superadmin_akun");
        echo "\"><i data-feather=\"user\" class=\"svg-icon mr-2 ml-1\"></i>Profile</a>
                                <a class=\"dropdown-item\" href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"> <i data-feather=\"power\" class=\"svg-icon mr-2 ml-1\"></i> Logout </a>
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
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("superadmin");
        echo "\">
                                <i class=\"fa fa-home\"></i>
                                <span class=\"hide-menu\"> Dashboard </span>
                            </a>
                        </li>
                        <li class=\"list-divider\"></li>
                        <li class=\"nav-small-cap\"><span class=\"hide-menu\"> Master </span></li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("superadmin_kategori");
        echo "\">
                                <i class=\"fa fa-list-alt\"></i>
                                <span class=\"hide-menu\"> Kategori Informasi </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("superadmin_jadwal");
        echo "\">
                                <i class=\"fa fa-list-alt\"></i>
                                <span class=\"hide-menu\"> Kategori Jadwal </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("superadmin_keuangan");
        echo "\">
                                <i class=\"fa fa-list-alt\"></i>
                                <span class=\"hide-menu\"> Kategori Keuangan </span>
                            </a>
                        </li>
                        <li class=\"list-divider\"></li>
                        <li class=\"nav-small-cap\"><span class=\"hide-menu\"> Pustaka </span></li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("superadmin_gereja");
        echo "\">
                                <i class=\"fa fa-book\"></i>
                                <span class=\"hide-menu\"> Gereja </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("superadmin_galeri");
        echo "\">
                                <i class=\"fa fa-picture-o\"></i>
                                <span class=\"hide-menu\"> Galeri </span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class=\"page-wrapper\">
            ";
        // line 120
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 121
        echo "            ";
        // line 122
        echo "            <footer class=\"footer text-center text-muted\">
                Copyright &copy;
                <script>
                    document.write(new Date().getFullYear());
                </script>
                <a href=\"https://alanlengkoan.netlify.app/\" target=\"_blank\">AL</a> - Sistem Informasi Penjualan Air Tahu.
            </footer>
        </div>
    </div>

    ";
        // line 133
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/libs/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/dist/js/app-style-switcher.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/dist/js/feather.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/dist/js/sidebarmenu.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/dist/js/custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/c3/d3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/c3/c3.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://unpkg.com/sweetalert/dist/sweetalert.min.js\"></script>
    ";
        // line 145
        echo "
    ";
        // line 146
        $this->displayBlock('javascripts', $context, $blocks);
        // line 147
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

    // line 26
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

    // line 120
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

    // line 146
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
        return "superadmin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 146,  335 => 120,  317 => 26,  298 => 8,  286 => 147,  284 => 146,  281 => 145,  276 => 142,  272 => 141,  268 => 140,  264 => 139,  260 => 138,  256 => 137,  252 => 136,  248 => 135,  244 => 134,  239 => 133,  227 => 122,  225 => 121,  222 => 120,  208 => 108,  199 => 102,  188 => 94,  179 => 88,  170 => 82,  159 => 74,  144 => 62,  140 => 61,  133 => 57,  117 => 44,  98 => 27,  96 => 26,  86 => 18,  82 => 16,  78 => 15,  74 => 14,  70 => 13,  65 => 12,  60 => 9,  56 => 8,  47 => 1,);
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
    #error {
        color: red
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
                    <a class=\"nav-toggler waves-effect waves-light d-block d-md-none\" href=\"javascript:void(0)\"><i class=\"ti-menu ti-close\"></i></a>
                    <div class=\"navbar-brand\">
                        <span>
                            <img src=\"{{ asset('assets/user/img/logo.png') }}\" alt=\"homepage\" class=\"dark-logo logo\">
                        </span>
                    </div>
                    <a class=\"topbartoggler d-block d-md-none waves-effect waves-light\" href=\"javascript:void(0)\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><i class=\"ti-more\"></i></a>
                </div>
                <div class=\"navbar-collapse collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav float-left mr-auto ml-3 pl-1\">
                      <h3 class=\"page-title text-truncate text-dark font-weight-medium\">Sistem Informasi Klasis Makassar</h3>
                    </ul>
                    <ul class=\"navbar-nav float-right\">
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle\" href=\"javascript:void(0)\" data-toggle=\"dropdown\"
                                aria-haspopup=\"true\" aria-expanded=\"false\">
                                <span class=\"text-dark\">{{ app.user.nama }}</span>
                                <i data-feather=\"chevron-down\" class=\"svg-icon\"></i>
                            </a>
                            <div class=\"dropdown-menu dropdown-menu-right user-dd animated flipInY\">
                                <a class=\"dropdown-item\" href=\"{{ path('superadmin_akun') }}\"><i data-feather=\"user\" class=\"svg-icon mr-2 ml-1\"></i>Profile</a>
                                <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\"> <i data-feather=\"power\" class=\"svg-icon mr-2 ml-1\"></i> Logout </a>
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
                            <a class=\"sidebar-link sidebar-link\" href=\"{{ path('superadmin') }}\">
                                <i class=\"fa fa-home\"></i>
                                <span class=\"hide-menu\"> Dashboard </span>
                            </a>
                        </li>
                        <li class=\"list-divider\"></li>
                        <li class=\"nav-small-cap\"><span class=\"hide-menu\"> Master </span></li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"{{ path('superadmin_kategori') }}\">
                                <i class=\"fa fa-list-alt\"></i>
                                <span class=\"hide-menu\"> Kategori Informasi </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"{{ path('superadmin_jadwal') }}\">
                                <i class=\"fa fa-list-alt\"></i>
                                <span class=\"hide-menu\"> Kategori Jadwal </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"{{ path('superadmin_keuangan') }}\">
                                <i class=\"fa fa-list-alt\"></i>
                                <span class=\"hide-menu\"> Kategori Keuangan </span>
                            </a>
                        </li>
                        <li class=\"list-divider\"></li>
                        <li class=\"nav-small-cap\"><span class=\"hide-menu\"> Pustaka </span></li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"{{ path('superadmin_gereja') }}\">
                                <i class=\"fa fa-book\"></i>
                                <span class=\"hide-menu\"> Gereja </span>
                            </a>
                        </li>
                        <li class=\"sidebar-item\">
                            <a class=\"sidebar-link sidebar-link\" href=\"{{ path('superadmin_galeri') }}\">
                                <i class=\"fa fa-picture-o\"></i>
                                <span class=\"hide-menu\"> Galeri </span>
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
                <a href=\"https://alanlengkoan.netlify.app/\" target=\"_blank\">AL</a> - Sistem Informasi Penjualan Air Tahu.
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

</html>", "superadmin/layout.html.twig", "P:\\Project\\PHP\\si\\SI-Klasis-Makassar\\templates\\superadmin\\layout.html.twig");
    }
}
