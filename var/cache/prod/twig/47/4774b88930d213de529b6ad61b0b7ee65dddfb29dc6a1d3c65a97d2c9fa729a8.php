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
class __TwigTemplate_faf756c041f1a71777a5032db2a9104a298666193235e22da24ea5b003ffd17c extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "gereja_det.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["halaman"] ?? null), "html", null, true);
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/main.css"), "html", null, true);
        echo "\">
";
    }

    // line 9
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "<h4 class=\"text-light\">
    <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"> Home </a> <span> / ";
        echo twig_escape_filter($this->env, ($context["halaman"] ?? null), "html", null, true);
        echo "
</h4>
";
    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_get_attribute($this->env, $this->source, ($context["detail"] ?? null), "tentang", [], "any", false, false, false, 26);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detail"] ?? null), "alamat", [], "any", false, false, false, 36), "html", null, true);
        echo "</p>
                    </div>

                    <div class=\"col-lg-3 col-md-6 info mt-4 mt-lg-0\">
                        <i class=\"icofont-clock-time icofont-rotate-90\"></i>
                        <h4>Jam Ibadah:</h4>
                        <p>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detail"] ?? null), "jadwal_ibadah", [], "any", false, false, false, 42), "html", null, true);
        echo "</p>
                    </div>

                    <div class=\"col-lg-3 col-md-6 info mt-4 mt-lg-0\">
                        <i class=\"icofont-envelope\"></i>
                        <h4>Email:</h4>
                        <p>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detail"] ?? null), "email", [], "any", false, false, false, 48), "html", null, true);
        echo "</p>
                    </div>

                    <div class=\"col-lg-3 col-md-6 info mt-4 mt-lg-0\">
                        <i class=\"icofont-phone\"></i>
                        <h4>Telepon:</h4>
                        <p>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detail"] ?? null), "telepon", [], "any", false, false, false, 54), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["jadwal_minggu"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["jadwal"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["pengurus"] ?? null));
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
            (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "foto", [], "any", false, false, false, 139), null))) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["fotoAkun"] ?? null)), "html", null, true))) : (print ("https://www.gambarunik.id/wp-content/uploads/2019/06/Berbagai-Gambar-Foto-Profil-Kosong-Lucu-Untuk-Status.jpg")));
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
        $context['_seq'] = twig_ensure_traversable(($context["galeri"] ?? null));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detail"] ?? null), "lat", [], "any", false, false, false, 183), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"inplon\" id=\"inplon\" value=\"";
        // line 184
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["detail"] ?? null), "lon", [], "any", false, false, false, 184), "html", null, true);
        echo "\" />
    </section>
    ";
        // line 187
        echo "</main>
";
    }

    // line 191
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  394 => 192,  390 => 191,  385 => 187,  380 => 184,  376 => 183,  366 => 175,  363 => 173,  358 => 169,  347 => 164,  343 => 163,  339 => 161,  335 => 160,  327 => 154,  324 => 152,  319 => 148,  308 => 143,  304 => 142,  297 => 139,  295 => 138,  290 => 135,  286 => 134,  278 => 128,  275 => 126,  270 => 122,  258 => 116,  254 => 115,  250 => 114,  246 => 113,  242 => 112,  237 => 110,  228 => 106,  221 => 101,  217 => 100,  209 => 94,  206 => 92,  201 => 88,  189 => 82,  185 => 81,  181 => 80,  171 => 75,  164 => 70,  160 => 69,  152 => 63,  149 => 61,  140 => 54,  131 => 48,  122 => 42,  113 => 36,  100 => 26,  91 => 19,  88 => 17,  84 => 15,  75 => 11,  72 => 10,  68 => 9,  61 => 6,  57 => 5,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "gereja_det.html.twig", "P:\\Project\\PHP\\si\\SI-Klasis-Makassar\\templates\\gereja_det.html.twig");
    }
}
