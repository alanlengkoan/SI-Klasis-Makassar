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

/* gereja_det.html.twig */
class __TwigTemplate_802b97ea1511f4171ffadeb7af5813873b83f0e02188d3d27a0556b7e75fa4c3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gereja_det.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gereja_det.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "gereja_det.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["halaman"]) || array_key_exists("halaman", $context) ? $context["halaman"] : (function () { throw new RuntimeError('Variable "halaman" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/main.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 10
        echo "<h4 class=\"text-light\">
    <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"> Home </a> <span> / ";
        echo twig_escape_filter($this->env, (isset($context["halaman"]) || array_key_exists("halaman", $context) ? $context["halaman"] : (function () { throw new RuntimeError('Variable "halaman" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "
</h4>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "<main id=\"main\">
    ";
        // line 19
        echo "    <section id=\"tentang\" class=\"tentang\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h1> Tentang </h1>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 col-lg-12\">
                    ";
        // line 26
        echo twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 26, $this->source); })()), "tentang", [], "any", false, false, false, 26);
        echo "
                </div>
            </div>
        </div>
        <div class=\"container mt-5\">
            <div class=\"info-wrap\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-md-6 info\">
                        <i class=\"icofont-google-map\"></i>
                        <h4>Lokasi:</h4>
                        <p>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 36, $this->source); })()), "alamat", [], "any", false, false, false, 36), "html", null, true);
        echo "</p>
                    </div>

                    <div class=\"col-lg-3 col-md-6 info mt-4 mt-lg-0\">
                        <i class=\"icofont-clock-time icofont-rotate-90\"></i>
                        <h4>Jam Ibadah:</h4>
                        <p>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 42, $this->source); })()), "jadwal_ibadah", [], "any", false, false, false, 42), "html", null, true);
        echo "</p>
                    </div>

                    <div class=\"col-lg-3 col-md-6 info mt-4 mt-lg-0\">
                        <i class=\"icofont-envelope\"></i>
                        <h4>Email:</h4>
                        <p>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 48, $this->source); })()), "email", [], "any", false, false, false, 48), "html", null, true);
        echo "</p>
                    </div>

                    <div class=\"col-lg-3 col-md-6 info mt-4 mt-lg-0\">
                        <i class=\"icofont-phone\"></i>
                        <h4>Telepon:</h4>
                        <p>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 54, $this->source); })()), "telepon", [], "any", false, false, false, 54), "html", null, true);
        echo "</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    ";
        // line 61
        echo "
    ";
        // line 63
        echo "    <section id=\"jadwal\" class=\"jadwal\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h1>Jadwal Ibadah Minggu</h1>
            </div>
            <div class=\"row\">
                ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jadwal_minggu"]) || array_key_exists("jadwal_minggu", $context) ? $context["jadwal_minggu"] : (function () { throw new RuntimeError('Variable "jadwal_minggu" does not exist.', 69, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
            // line 70
            echo "                    <div class=\"col-12 col-md-6 col-lg-4\">
                        <div class=\"single-latest-sermons mb-100\">
                            <div class=\"sermons-thumbnail\">
                                <img src=\"https://bengkuluekspress.com/wp-content/uploads/2018/12/gereja.jpg\" alt=\"\">
                                <div class=\"sermons-date\">
                                    <h6><span>";
            // line 75
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "tanggal_ibadah", [], "any", false, false, false, 75), "d"), "html", null, true);
            echo "</span>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "tanggal_ibadah", [], "any", false, false, false, 75), "F"), "html", null, true);
            echo "</h6>
                                </div>
                            </div>
                            <div class=\"sermons-content\">
                                <div class=\"sermons-meta-data\">
                                    <p><i class=\"fa fa-user\" aria-hidden=\"true\"></i> Pelayanan: <span>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama_pelayan", [], "any", false, false, false, 80), "html", null, true);
            echo "</span></p>
                                    <p><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> Tanggal: <span>";
            // line 81
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "tanggal_ibadah", [], "any", false, false, false, 81), "d F Y"), "html", null, true);
            echo "</span></p>
                                    <p><i class=\"fa fa-clock\" aria-hidden=\"true\"></i> Jam: <span>";
            // line 82
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "tanggal_ibadah", [], "any", false, false, false, 82), "H : s"), "html", null, true);
            echo " - sampai selesai.</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "            </div>
        </div>
    </section>
    ";
        // line 92
        echo "
    ";
        // line 94
        echo "    <section id=\"jadwal\" class=\"jadwal\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h1>Jadwal Ibadah Harian</h1>
            </div>
            <div class=\"row\">
                ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jadwal"]) || array_key_exists("jadwal", $context) ? $context["jadwal"] : (function () { throw new RuntimeError('Variable "jadwal" does not exist.', 100, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
            // line 101
            echo "                    <div class=\"col-12 col-md-6 col-lg-4\">
                        <div class=\"single-latest-sermons mb-100\">
                            <div class=\"sermons-thumbnail\">
                                <img src=\"https://bengkuluekspress.com/wp-content/uploads/2018/12/gereja.jpg\" alt=\"\">
                                <div class=\"sermons-date\">
                                    <h6><span>";
            // line 106
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "tanggal_ibadah", [], "any", false, false, false, 106), "d"), "html", null, true);
            echo "</span>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "tanggal_ibadah", [], "any", false, false, false, 106), "F"), "html", null, true);
            echo "</h6>
                                </div>
                            </div>
                            <div class=\"sermons-content\">
                                <h4>";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "alamat", [], "any", false, false, false, 110), "html", null, true);
            echo "</h4>
                                <div class=\"sermons-meta-data\">
                                    <p><i class=\"fa fa-user\" aria-hidden=\"true\"></i> Pelayanan: <span>";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama_pelayan", [], "any", false, false, false, 112), "html", null, true);
            echo "</span></p>
                                    <p><i class=\"fa fa-home\" aria-hidden=\"true\"></i> Keluarga: <span>";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama_keluarga", [], "any", false, false, false, 113), "html", null, true);
            echo "</span></p>
                                    <p><i class=\"fa fa-tag\" aria-hidden=\"true\"></i> Kategori: <span>";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama", [], "any", false, false, false, 114), "html", null, true);
            echo "</span></p>
                                    <p><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> Tanggal: <span>";
            // line 115
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "tanggal_ibadah", [], "any", false, false, false, 115), "d F Y"), "html", null, true);
            echo "</span></p>
                                    <p><i class=\"fa fa-clock\" aria-hidden=\"true\"></i> Jam: <span>";
            // line 116
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "tanggal_ibadah", [], "any", false, false, false, 116), "H : s"), "html", null, true);
            echo " - sampai selesai.</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "            </div>
        </div>
    </section>
    ";
        // line 126
        echo "
    ";
        // line 128
        echo "    <section id=\"organization\" class=\"organization\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h1>Penggurus Gereja </h1>
            </div>
            <div class=\"row\">
                ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pengurus"]) || array_key_exists("pengurus", $context) ? $context["pengurus"] : (function () { throw new RuntimeError('Variable "pengurus" does not exist.', 134, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
            // line 135
            echo "                    <div class=\"col-lg-4 col-md-6 mt-4\">
                        <div class=\"member\">
                            <div class=\"pic\">
                                ";
            // line 138
            $context["fotoAkun"] = ("uploads/akun/" . twig_get_attribute($this->env, $this->source, $context["rows"], "foto", [], "any", false, false, false, 138));
            // line 139
            echo "                                <img src=\"";
            (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "foto", [], "any", false, false, false, 139), null))) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["fotoAkun"]) || array_key_exists("fotoAkun", $context) ? $context["fotoAkun"] : (function () { throw new RuntimeError('Variable "fotoAkun" does not exist.', 139, $this->source); })())), "html", null, true))) : (print ("https://www.gambarunik.id/wp-content/uploads/2019/06/Berbagai-Gambar-Foto-Profil-Kosong-Lucu-Untuk-Status.jpg")));
            echo "\" class=\"img-fluid\" alt=\"Profil\" />
                            </div>
                            <div class=\"member-info\">
                                <h4>";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama", [], "any", false, false, false, 142), "html", null, true);
            echo "</h4>
                                <span>";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "jabatan", [], "any", false, false, false, 143), "html", null, true);
            echo "</span>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "            </div>
        </div>
    </section>
    ";
        // line 152
        echo "
    ";
        // line 154
        echo "    <section id=\"gallery\" class=\"gallery\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h1> Galery </h1>
            </div>
            <div class=\"row no-gutters\">
                ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["galeri"]) || array_key_exists("galeri", $context) ? $context["galeri"] : (function () { throw new RuntimeError('Variable "galeri" does not exist.', 160, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
            // line 161
            echo "                <div class=\"col-lg-3 col-md-4\">
                    <div class=\"gallery-item\">
                        <a href=\"";
            // line 163
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/informasi/" . twig_get_attribute($this->env, $this->source, $context["rows"], "gambar", [], "any", false, false, false, 163))), "html", null, true);
            echo "\" class=\"venobox\" data-gall=\"gallery-item\">
                            <img src=\"";
            // line 164
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/informasi/" . twig_get_attribute($this->env, $this->source, $context["rows"], "gambar", [], "any", false, false, false, 164))), "html", null, true);
            echo "\" alt=\"Galery\" class=\"img-fluid\" />
                        </a>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "            </div>
        </div>
    </section>
    ";
        // line 173
        echo "
    ";
        // line 175
        echo "    <section id=\"location\" class=\"location\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h1> Lokasi </h1>
            </div>
        </div>

        <div id=\"map\" style=\"height: 500px; width: 100%;\"></div>
        <input type=\"hidden\" name=\"inplat\" id=\"inplat\" value=\"";
        // line 183
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 183, $this->source); })()), "lat", [], "any", false, false, false, 183), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"inplon\" id=\"inplon\" value=\"";
        // line 184
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 184, $this->source); })()), "lon", [], "any", false, false, false, 184), "html", null, true);
        echo "\" />
    </section>
    ";
        // line 187
        echo "</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 191
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 192
        echo "<script defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyB-JpweDJ7_cA9-KiEq-iMjQzlluOemnWo&callback=initMap\"></script>

<script>
    // untuk google maps
    function initMap() {
        var getLat = \$('#inplat').val();
        var getLon = \$('#inplon').val();

        var lokasi = {
            lat: -5.161084,
            lng: 119.431017
        };

        if (getLat != \"\" && getLon != \"\") {
            lokasi = {
                lat: parseFloat(getLat),
                lng: parseFloat(getLon)
            };
        }

        var map = new google.maps.Map(
            document.getElementById('map'), {
                center: lokasi,
                zoom: 15,
            });

        var marker = new google.maps.Marker({
            position: lokasi,
            map: map,
            title: 'Lokasi',
        });
    }
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gereja_det.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  460 => 192,  450 => 191,  439 => 187,  434 => 184,  430 => 183,  420 => 175,  417 => 173,  412 => 169,  401 => 164,  397 => 163,  393 => 161,  389 => 160,  381 => 154,  378 => 152,  373 => 148,  362 => 143,  358 => 142,  351 => 139,  349 => 138,  344 => 135,  340 => 134,  332 => 128,  329 => 126,  324 => 122,  312 => 116,  308 => 115,  304 => 114,  300 => 113,  296 => 112,  291 => 110,  282 => 106,  275 => 101,  271 => 100,  263 => 94,  260 => 92,  255 => 88,  243 => 82,  239 => 81,  235 => 80,  225 => 75,  218 => 70,  214 => 69,  206 => 63,  203 => 61,  194 => 54,  185 => 48,  176 => 42,  167 => 36,  154 => 26,  145 => 19,  142 => 17,  132 => 15,  117 => 11,  114 => 10,  104 => 9,  91 => 6,  81 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}{{ halaman }}{% endblock %}

{% block stylesheets %}
<link rel=\"stylesheet\" href=\"{{ asset('assets/user/main.css') }}\">
{% endblock %}

{% block header %}
<h4 class=\"text-light\">
    <a href=\"{{ path('home') }}\"> Home </a> <span> / {{ halaman }}
</h4>
{% endblock %}

{% block body %}
{# begin:: body #}
<main id=\"main\">
    {# begin:: tentang #}
    <section id=\"tentang\" class=\"tentang\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h1> Tentang </h1>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6 col-lg-12\">
                    {{ detail.tentang|raw }}
                </div>
            </div>
        </div>
        <div class=\"container mt-5\">
            <div class=\"info-wrap\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-md-6 info\">
                        <i class=\"icofont-google-map\"></i>
                        <h4>Lokasi:</h4>
                        <p>{{ detail.alamat }}</p>
                    </div>

                    <div class=\"col-lg-3 col-md-6 info mt-4 mt-lg-0\">
                        <i class=\"icofont-clock-time icofont-rotate-90\"></i>
                        <h4>Jam Ibadah:</h4>
                        <p>{{ detail.jadwal_ibadah }}</p>
                    </div>

                    <div class=\"col-lg-3 col-md-6 info mt-4 mt-lg-0\">
                        <i class=\"icofont-envelope\"></i>
                        <h4>Email:</h4>
                        <p>{{ detail.email }}</p>
                    </div>

                    <div class=\"col-lg-3 col-md-6 info mt-4 mt-lg-0\">
                        <i class=\"icofont-phone\"></i>
                        <h4>Telepon:</h4>
                        <p>{{ detail.telepon }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {# end:: tentang #}

    {# begin:: jadwal ibadah minggu #}
    <section id=\"jadwal\" class=\"jadwal\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h1>Jadwal Ibadah Minggu</h1>
            </div>
            <div class=\"row\">
                {% for rows in jadwal_minggu %}
                    <div class=\"col-12 col-md-6 col-lg-4\">
                        <div class=\"single-latest-sermons mb-100\">
                            <div class=\"sermons-thumbnail\">
                                <img src=\"https://bengkuluekspress.com/wp-content/uploads/2018/12/gereja.jpg\" alt=\"\">
                                <div class=\"sermons-date\">
                                    <h6><span>{{ rows.tanggal_ibadah|date('d') }}</span>{{ rows.tanggal_ibadah|date('F') }}</h6>
                                </div>
                            </div>
                            <div class=\"sermons-content\">
                                <div class=\"sermons-meta-data\">
                                    <p><i class=\"fa fa-user\" aria-hidden=\"true\"></i> Pelayanan: <span>{{ rows.nama_pelayan }}</span></p>
                                    <p><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> Tanggal: <span>{{ rows.tanggal_ibadah|date('d F Y') }}</span></p>
                                    <p><i class=\"fa fa-clock\" aria-hidden=\"true\"></i> Jam: <span>{{ rows.tanggal_ibadah|date('H : s') }} - sampai selesai.</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </section>
    {# end:: jadwal ibadah minggu #}

    {# begin:: jadwal ibadah harian #}
    <section id=\"jadwal\" class=\"jadwal\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h1>Jadwal Ibadah Harian</h1>
            </div>
            <div class=\"row\">
                {% for rows in jadwal %}
                    <div class=\"col-12 col-md-6 col-lg-4\">
                        <div class=\"single-latest-sermons mb-100\">
                            <div class=\"sermons-thumbnail\">
                                <img src=\"https://bengkuluekspress.com/wp-content/uploads/2018/12/gereja.jpg\" alt=\"\">
                                <div class=\"sermons-date\">
                                    <h6><span>{{ rows.tanggal_ibadah|date('d') }}</span>{{ rows.tanggal_ibadah|date('F') }}</h6>
                                </div>
                            </div>
                            <div class=\"sermons-content\">
                                <h4>{{ rows.alamat }}</h4>
                                <div class=\"sermons-meta-data\">
                                    <p><i class=\"fa fa-user\" aria-hidden=\"true\"></i> Pelayanan: <span>{{ rows.nama_pelayan }}</span></p>
                                    <p><i class=\"fa fa-home\" aria-hidden=\"true\"></i> Keluarga: <span>{{ rows.nama_keluarga }}</span></p>
                                    <p><i class=\"fa fa-tag\" aria-hidden=\"true\"></i> Kategori: <span>{{ rows.nama }}</span></p>
                                    <p><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i> Tanggal: <span>{{ rows.tanggal_ibadah|date('d F Y') }}</span></p>
                                    <p><i class=\"fa fa-clock\" aria-hidden=\"true\"></i> Jam: <span>{{ rows.tanggal_ibadah|date('H : s') }} - sampai selesai.</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </section>
    {# end:: jadwal ibadah harian #}

    {# begin:: pengurus #}
    <section id=\"organization\" class=\"organization\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h1>Penggurus Gereja </h1>
            </div>
            <div class=\"row\">
                {% for rows in pengurus %}
                    <div class=\"col-lg-4 col-md-6 mt-4\">
                        <div class=\"member\">
                            <div class=\"pic\">
                                {% set fotoAkun = 'uploads/akun/'~rows.foto %}
                                <img src=\"{{ (rows.foto != null) ? asset(fotoAkun) : \"https://www.gambarunik.id/wp-content/uploads/2019/06/Berbagai-Gambar-Foto-Profil-Kosong-Lucu-Untuk-Status.jpg\" }}\" class=\"img-fluid\" alt=\"Profil\" />
                            </div>
                            <div class=\"member-info\">
                                <h4>{{ rows.nama }}</h4>
                                <span>{{ rows.jabatan }}</span>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </section>
    {# end:: pengurus #}

    {# begin:: galery #}
    <section id=\"gallery\" class=\"gallery\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h1> Galery </h1>
            </div>
            <div class=\"row no-gutters\">
                {% for rows in galeri %}
                <div class=\"col-lg-3 col-md-4\">
                    <div class=\"gallery-item\">
                        <a href=\"{{ asset('uploads/informasi/'~rows.gambar) }}\" class=\"venobox\" data-gall=\"gallery-item\">
                            <img src=\"{{ asset('uploads/informasi/'~rows.gambar) }}\" alt=\"Galery\" class=\"img-fluid\" />
                        </a>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
    </section>
    {# end:: galery #}

    {# begin:: location #}
    <section id=\"location\" class=\"location\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h1> Lokasi </h1>
            </div>
        </div>

        <div id=\"map\" style=\"height: 500px; width: 100%;\"></div>
        <input type=\"hidden\" name=\"inplat\" id=\"inplat\" value=\"{{ detail.lat }}\" />
        <input type=\"hidden\" name=\"inplon\" id=\"inplon\" value=\"{{ detail.lon }}\" />
    </section>
    {# end:: location #}
</main>
{# end:: body #}
{% endblock %}

{% block javascripts %}
<script defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyB-JpweDJ7_cA9-KiEq-iMjQzlluOemnWo&callback=initMap\"></script>

<script>
    // untuk google maps
    function initMap() {
        var getLat = \$('#inplat').val();
        var getLon = \$('#inplon').val();

        var lokasi = {
            lat: -5.161084,
            lng: 119.431017
        };

        if (getLat != \"\" && getLon != \"\") {
            lokasi = {
                lat: parseFloat(getLat),
                lng: parseFloat(getLon)
            };
        }

        var map = new google.maps.Map(
            document.getElementById('map'), {
                center: lokasi,
                zoom: 15,
            });

        var marker = new google.maps.Marker({
            position: lokasi,
            map: map,
            title: 'Lokasi',
        });
    }
</script>
{% endblock %}", "gereja_det.html.twig", "P:\\Project\\PHP\\si\\SI-Klasis-Makassar\\templates\\gereja_det.html.twig");
    }
}
