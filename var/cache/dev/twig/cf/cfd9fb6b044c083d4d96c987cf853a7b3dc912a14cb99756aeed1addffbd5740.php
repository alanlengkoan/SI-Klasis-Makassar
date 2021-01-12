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

/* tentang.html.twig */
class __TwigTemplate_ba99c69b0edfcc0541d62b0dddc979be580086962747e3881320241623a0aa85 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tentang.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tentang.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "tentang.html.twig", 1);
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
        echo "<style>
    .highcharts-figure,
    .highcharts-data-table table {
        min-width: 360px;
        max-width: 800px;
        margin: 1em auto;
    }

    .highcharts-data-table table {
        font-family: Verdana, sans-serif;
        border-collapse: collapse;
        border: 1px solid #EBEBEB;
        margin: 10px auto;
        text-align: center;
        width: 100%;
        max-width: 500px;
    }

    .highcharts-data-table caption {
        padding: 1em 0;
        font-size: 1.2em;
        color: #555;
    }

    .highcharts-data-table th {
        font-weight: 600;
        padding: 0.5em;
    }

    .highcharts-data-table td,
    .highcharts-data-table th,
    .highcharts-data-table caption {
        padding: 0.5em;
    }

    .highcharts-data-table thead tr,
    .highcharts-data-table tr:nth-child(even) {
        background: #f8f8f8;
    }

    .highcharts-data-table tr:hover {
        background: #f1f7ff;
    }

    #container h4 {
        text-transform: none;
        font-size: 14px;
        font-weight: normal;
    }

    #container p {
        font-size: 13px;
        line-height: 16px;
    }

    @media screen and (max-width: 600px) {
        #container h4 {
            font-size: 2.3vw;
            line-height: 3vw;
        }

        #container p {
            font-size: 2.3vw;
            line-height: 3vw;
        }
    }
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 76
        echo "<h4 class=\"text-light\">
    <a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"> Home </a> <span> / ";
        echo twig_escape_filter($this->env, (isset($context["halaman"]) || array_key_exists("halaman", $context) ? $context["halaman"] : (function () { throw new RuntimeError('Variable "halaman" does not exist.', 77, $this->source); })()), "html", null, true);
        echo "
</h4>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 81
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 83
        echo "<main id=\"main\">
    <section id=\"about\" class=\"about\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-5 align-items-stretch video-box\" style='background-image: url(\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/img/logo.png"), "html", null, true);
        echo "\");'>
                    <a href=\"https://www.youtube.com/watch?v=8MoCeia_aPc\" class=\"venobox play-btn mb-4\" data-vbtype=\"video\" data-autoplay=\"true\"></a>
                </div>
                <div class=\"col-lg-7 d-flex flex-column justify-content-center align-items-stretch\">
                    <div class=\"content\">
                        <h3>Sejarah Singkat Gereja Toraja Mamasa</h3>
                        <p>
                            Gereja Toraja Mamasa merupakan “buah karya” Roh Kudus melalui orang-orang percaya dalam wadah Indishe Kerk (GPI) dan CGK melalui ZCGK (Zending van Christelijke Gereformeerde Kerken). Pendeta Indesche Kerk yang diutus pertama ke Mamasa melakukan penginjilan adalah  Ds. Kyftenbelt sekitar awal bulan Oktober 1913. Berdasarkan seminar Eklesiologi yang dilakasanakan di Sumarorong tahun 2013 disepakati bahwa 12 Oktober 1913 tenaga Zendeling Indesche Kerk tiba di Mamasa, kehadiran penginjil tersebut  yang menjadi  acuan masuknya Injil Mamasa. Beberapa orang zendeling untuk berkarya di wilayah Toraja Barat (Mamasa) yaitu :  Ds.Kyftenbelt (1913), Ds. Hessing, Ds. Leeuwen, Ds.Tumbelaka (1919-1921), Ds. Akkerman (1924), dan Ds. A. A. van Dalen (1925).
                        </p>
                        <p>
                            <strong>Pada tahun 1928</strong>, Indesche Kerk (GPI) memberikan kesempatan kepada badan zending ZCGK  (Zending Christelijk Gereformerde Kerken) di Belanda  untuk melanjutkan Pekabaran Injil di Mamasa. ZCGK pun dengan segera mengirimkan tenaga pendeta pertama, yaitu Ds.Ari Bikker. Beliau tiba di Mamasa pada tanggal 21 Januari 1928 untuk menggantikan Ds.Van Dalen pendeta utusan Indesche Kerk sebelumnya. Setibanya di Mamasa,  Ds.Ari Bikker melakukan konsolidasi dengan sejumlah guru sekolah yang telah lebih dahulu  dipekerjakan oleh Indesche Kerk. Menurut informasi sejarah, para guru tersebut antara lain : J. Latuihamallo, Kounter, Saroinsong, Manusama, Levianus, A.Soselisa, Tetelepta, Pattikayhatu, Th.Marwa, Syahaya, Taehutu, Raranta, Pattiasina, J. Piris. Gedung gereja yang pertama kali dibangun oleh ZCGK  di Mamasa berada di daerah Tawalian. Peletakan batu pertama dilaksanakan pada tanggal 16 Juni 1929 dan selesai Desember 1932.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id=\"about\" class=\"about\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <figure class=\"highcharts-figure\">
                        <div id=\"container\"></div>
                        <p class=\"highcharts-description\">
                            Organization charts are a common case of hierarchical network charts,
                            where the parent/child relationships between nodes are visualized.
                            Highcharts includes a dedicated organization chart type that streamlines
                            the process of creating these types of visualizations.
                        </p>
                    </figure>
                </div>
            </div>
        </div>
    </section>
</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 125
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 126
        echo "<script src=\"https://code.highcharts.com/highcharts.js\"></script>
<script src=\"https://code.highcharts.com/modules/sankey.js\"></script>
<script src=\"https://code.highcharts.com/modules/organization.js\"></script>
<script src=\"https://code.highcharts.com/modules/exporting.js\"></script>
<script src=\"https://code.highcharts.com/modules/accessibility.js\"></script>

<script>
    Highcharts.chart('container', {
        chart: {
            height: 800,
            inverted: true
        },

        title: {
            text: 'STRUKTUR PENGURUS BADAN PEKERJA MAJELIS KLASIS MAKASSAR GEREJA TORAJA MAMASA PERIODE 2016 - 2021'
        },

        accessibility: {
            point: {
                descriptionFormatter: function (point) {
                    var nodeName = point.toNode.name,
                        nodeId = point.toNode.id,
                        nodeDesc = nodeName === nodeId ? nodeName : nodeName + ', ' + nodeId,
                        parentDesc = point.fromNode.id;
                    return point.index + '. ' + nodeDesc + ', reports to ' + parentDesc + '.';
                }
            }
        },

        series: [{
            type: 'organization',
            name: 'Highsoft',
            keys: ['from', 'to'],
            data: [
                ['GG', 'G1'],
                ['GG', 'G2'],
                ['GG', 'T4'],
                ['GG', 'T3'],
                ['GG', 'T2'],
                ['GG', 'T1'],
                ['GG', 'R1'],
                ['GG', 'R2'],
                ['GG', 'R3'],
                ['GG', 'R4'],
                ['R2', 'L1'],
                ['R2', 'L2'],
                ['R2', 'L3'],
            ],
            levels: [{
                level: 0,
                color: 'silver',
                dataLabels: {
                    color: 'black'
                },
                height: 25
            }, {
                level: 1,
                color: 'silver',
                dataLabels: {
                    color: 'black'
                },
                height: 25
            }, {
                level: 2,
                color: '#980104'
            }, {
                level: 4,
                color: '#359154'
            }],
            nodes: [{
                id: 'GG',
                title: 'BPMK',
                name: 'Pdt. Adibing. M.Th.',
                color: '#007ad0',
            },
            {
                id: 'G1',
                title: 'MPK',
                name: 'Pdt. Pelipus P,S.sos.',
                color: '#007ad0',
                column: 1,
                offset: '-75%'
            },
            {
                id: 'G2',
                title: 'BPPK',
                name: 'Pdt.Dr. Yusuf Mangumban',
                color: '#007ad0',
                column: 1,
                offset: '75%'
            },
            {
                id: 'T1',
                title: 'Bendahara Umum',
                name: 'Sym. Dra. Sientje SR. Dundu',
                color: '#007ad0',
                column: 2,
                offset: '75%'
            },
            {
                id: 'T2',
                title: 'Sekretariat Umum',
                name: 'Pdt. Krissandar T.P., M.Th.',
                color: '#007ad0',
                column: 3,
                offset: '-75%'
            },
            {
                id: 'T3',
                title: 'Wakil Bendahara',
                name: 'Sym. Selvi Jayanti P., SKM.',
                color: '#007ad0',
                column: 4,
                offset: '75%'
            },
            {
                id: 'T4',
                title: 'Wakil Sekretaris',
                name: 'Pnt. Tangdi B. Illang, S.PAK.',
                color: '#007ad0',
                column: 5,
                offset: '-75%'
            },
            {
                id: 'R1',
                title: 'Ketua I',
                name: 'Pdt. Rudi Kole Lella, M.Th.',
                color: 'yellow',
                column: 6
            },
            {
                id: 'R2',
                title: 'Ketua II',
                name: 'Pnt. Robinson S.Pd.',
                color: 'yellow',
                column: 6
            },
            {
                id: 'R3',
                title: 'Ketua III',
                name: 'Sym. Elias Robert, SE.',
                color: 'yellow',
                column: 6
            },
            {
                id: 'R4',
                title: 'Ketua IV',
                name: 'Pnt. Drs. Markus Kain, MM.',
                color: 'yellow',
                column: 6
            },
            {
                id: 'L1',
                title: 'Ketua PPr-GTM',
                name: 'Pnt. Dra. Milka, MM.',
                color: 'green',
                layout: 'hanging'
            },
            {
                id: 'L2',
                title: 'Ketua PKB-GTM',
                name: 'Pnt. Bastian T., S.Sos.',
                color: 'green',
                layout: 'hanging'
            },
            {
                id: 'L3',
                title: 'Ketua PP-GTM',
                name: 'Sym. Nelwan J., SH.',
                color: 'green',
                layout: 'hanging'
            },
            ],
            colorByPoint: false,
            color: '#007ad0',
            dataLabels: {
                color: 'white'
            },
            borderColor: 'white',
            nodeWidth: 65
        }],
        tooltip: {
            outside: true
        },
        exporting: {
            allowHTML: true,
            sourceWidth: 800,
            sourceHeight: 600
        }

    });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tentang.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 126,  258 => 125,  212 => 87,  206 => 83,  196 => 81,  181 => 77,  178 => 76,  168 => 75,  91 => 6,  81 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}{{ halaman }}{% endblock %}

{% block stylesheets %}
<style>
    .highcharts-figure,
    .highcharts-data-table table {
        min-width: 360px;
        max-width: 800px;
        margin: 1em auto;
    }

    .highcharts-data-table table {
        font-family: Verdana, sans-serif;
        border-collapse: collapse;
        border: 1px solid #EBEBEB;
        margin: 10px auto;
        text-align: center;
        width: 100%;
        max-width: 500px;
    }

    .highcharts-data-table caption {
        padding: 1em 0;
        font-size: 1.2em;
        color: #555;
    }

    .highcharts-data-table th {
        font-weight: 600;
        padding: 0.5em;
    }

    .highcharts-data-table td,
    .highcharts-data-table th,
    .highcharts-data-table caption {
        padding: 0.5em;
    }

    .highcharts-data-table thead tr,
    .highcharts-data-table tr:nth-child(even) {
        background: #f8f8f8;
    }

    .highcharts-data-table tr:hover {
        background: #f1f7ff;
    }

    #container h4 {
        text-transform: none;
        font-size: 14px;
        font-weight: normal;
    }

    #container p {
        font-size: 13px;
        line-height: 16px;
    }

    @media screen and (max-width: 600px) {
        #container h4 {
            font-size: 2.3vw;
            line-height: 3vw;
        }

        #container p {
            font-size: 2.3vw;
            line-height: 3vw;
        }
    }
</style>
{% endblock %}

{% block header %}
<h4 class=\"text-light\">
    <a href=\"{{ path('home') }}\"> Home </a> <span> / {{ halaman }}
</h4>
{% endblock %}

{% block body %}
{# begin:: body #}
<main id=\"main\">
    <section id=\"about\" class=\"about\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-5 align-items-stretch video-box\" style='background-image: url(\"{{ asset('assets/user/img/logo.png') }}\");'>
                    <a href=\"https://www.youtube.com/watch?v=8MoCeia_aPc\" class=\"venobox play-btn mb-4\" data-vbtype=\"video\" data-autoplay=\"true\"></a>
                </div>
                <div class=\"col-lg-7 d-flex flex-column justify-content-center align-items-stretch\">
                    <div class=\"content\">
                        <h3>Sejarah Singkat Gereja Toraja Mamasa</h3>
                        <p>
                            Gereja Toraja Mamasa merupakan “buah karya” Roh Kudus melalui orang-orang percaya dalam wadah Indishe Kerk (GPI) dan CGK melalui ZCGK (Zending van Christelijke Gereformeerde Kerken). Pendeta Indesche Kerk yang diutus pertama ke Mamasa melakukan penginjilan adalah  Ds. Kyftenbelt sekitar awal bulan Oktober 1913. Berdasarkan seminar Eklesiologi yang dilakasanakan di Sumarorong tahun 2013 disepakati bahwa 12 Oktober 1913 tenaga Zendeling Indesche Kerk tiba di Mamasa, kehadiran penginjil tersebut  yang menjadi  acuan masuknya Injil Mamasa. Beberapa orang zendeling untuk berkarya di wilayah Toraja Barat (Mamasa) yaitu :  Ds.Kyftenbelt (1913), Ds. Hessing, Ds. Leeuwen, Ds.Tumbelaka (1919-1921), Ds. Akkerman (1924), dan Ds. A. A. van Dalen (1925).
                        </p>
                        <p>
                            <strong>Pada tahun 1928</strong>, Indesche Kerk (GPI) memberikan kesempatan kepada badan zending ZCGK  (Zending Christelijk Gereformerde Kerken) di Belanda  untuk melanjutkan Pekabaran Injil di Mamasa. ZCGK pun dengan segera mengirimkan tenaga pendeta pertama, yaitu Ds.Ari Bikker. Beliau tiba di Mamasa pada tanggal 21 Januari 1928 untuk menggantikan Ds.Van Dalen pendeta utusan Indesche Kerk sebelumnya. Setibanya di Mamasa,  Ds.Ari Bikker melakukan konsolidasi dengan sejumlah guru sekolah yang telah lebih dahulu  dipekerjakan oleh Indesche Kerk. Menurut informasi sejarah, para guru tersebut antara lain : J. Latuihamallo, Kounter, Saroinsong, Manusama, Levianus, A.Soselisa, Tetelepta, Pattikayhatu, Th.Marwa, Syahaya, Taehutu, Raranta, Pattiasina, J. Piris. Gedung gereja yang pertama kali dibangun oleh ZCGK  di Mamasa berada di daerah Tawalian. Peletakan batu pertama dilaksanakan pada tanggal 16 Juni 1929 dan selesai Desember 1932.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id=\"about\" class=\"about\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <figure class=\"highcharts-figure\">
                        <div id=\"container\"></div>
                        <p class=\"highcharts-description\">
                            Organization charts are a common case of hierarchical network charts,
                            where the parent/child relationships between nodes are visualized.
                            Highcharts includes a dedicated organization chart type that streamlines
                            the process of creating these types of visualizations.
                        </p>
                    </figure>
                </div>
            </div>
        </div>
    </section>
</main>
{# end:: body #}
{% endblock %}

{% block javascripts %}
<script src=\"https://code.highcharts.com/highcharts.js\"></script>
<script src=\"https://code.highcharts.com/modules/sankey.js\"></script>
<script src=\"https://code.highcharts.com/modules/organization.js\"></script>
<script src=\"https://code.highcharts.com/modules/exporting.js\"></script>
<script src=\"https://code.highcharts.com/modules/accessibility.js\"></script>

<script>
    Highcharts.chart('container', {
        chart: {
            height: 800,
            inverted: true
        },

        title: {
            text: 'STRUKTUR PENGURUS BADAN PEKERJA MAJELIS KLASIS MAKASSAR GEREJA TORAJA MAMASA PERIODE 2016 - 2021'
        },

        accessibility: {
            point: {
                descriptionFormatter: function (point) {
                    var nodeName = point.toNode.name,
                        nodeId = point.toNode.id,
                        nodeDesc = nodeName === nodeId ? nodeName : nodeName + ', ' + nodeId,
                        parentDesc = point.fromNode.id;
                    return point.index + '. ' + nodeDesc + ', reports to ' + parentDesc + '.';
                }
            }
        },

        series: [{
            type: 'organization',
            name: 'Highsoft',
            keys: ['from', 'to'],
            data: [
                ['GG', 'G1'],
                ['GG', 'G2'],
                ['GG', 'T4'],
                ['GG', 'T3'],
                ['GG', 'T2'],
                ['GG', 'T1'],
                ['GG', 'R1'],
                ['GG', 'R2'],
                ['GG', 'R3'],
                ['GG', 'R4'],
                ['R2', 'L1'],
                ['R2', 'L2'],
                ['R2', 'L3'],
            ],
            levels: [{
                level: 0,
                color: 'silver',
                dataLabels: {
                    color: 'black'
                },
                height: 25
            }, {
                level: 1,
                color: 'silver',
                dataLabels: {
                    color: 'black'
                },
                height: 25
            }, {
                level: 2,
                color: '#980104'
            }, {
                level: 4,
                color: '#359154'
            }],
            nodes: [{
                id: 'GG',
                title: 'BPMK',
                name: 'Pdt. Adibing. M.Th.',
                color: '#007ad0',
            },
            {
                id: 'G1',
                title: 'MPK',
                name: 'Pdt. Pelipus P,S.sos.',
                color: '#007ad0',
                column: 1,
                offset: '-75%'
            },
            {
                id: 'G2',
                title: 'BPPK',
                name: 'Pdt.Dr. Yusuf Mangumban',
                color: '#007ad0',
                column: 1,
                offset: '75%'
            },
            {
                id: 'T1',
                title: 'Bendahara Umum',
                name: 'Sym. Dra. Sientje SR. Dundu',
                color: '#007ad0',
                column: 2,
                offset: '75%'
            },
            {
                id: 'T2',
                title: 'Sekretariat Umum',
                name: 'Pdt. Krissandar T.P., M.Th.',
                color: '#007ad0',
                column: 3,
                offset: '-75%'
            },
            {
                id: 'T3',
                title: 'Wakil Bendahara',
                name: 'Sym. Selvi Jayanti P., SKM.',
                color: '#007ad0',
                column: 4,
                offset: '75%'
            },
            {
                id: 'T4',
                title: 'Wakil Sekretaris',
                name: 'Pnt. Tangdi B. Illang, S.PAK.',
                color: '#007ad0',
                column: 5,
                offset: '-75%'
            },
            {
                id: 'R1',
                title: 'Ketua I',
                name: 'Pdt. Rudi Kole Lella, M.Th.',
                color: 'yellow',
                column: 6
            },
            {
                id: 'R2',
                title: 'Ketua II',
                name: 'Pnt. Robinson S.Pd.',
                color: 'yellow',
                column: 6
            },
            {
                id: 'R3',
                title: 'Ketua III',
                name: 'Sym. Elias Robert, SE.',
                color: 'yellow',
                column: 6
            },
            {
                id: 'R4',
                title: 'Ketua IV',
                name: 'Pnt. Drs. Markus Kain, MM.',
                color: 'yellow',
                column: 6
            },
            {
                id: 'L1',
                title: 'Ketua PPr-GTM',
                name: 'Pnt. Dra. Milka, MM.',
                color: 'green',
                layout: 'hanging'
            },
            {
                id: 'L2',
                title: 'Ketua PKB-GTM',
                name: 'Pnt. Bastian T., S.Sos.',
                color: 'green',
                layout: 'hanging'
            },
            {
                id: 'L3',
                title: 'Ketua PP-GTM',
                name: 'Sym. Nelwan J., SH.',
                color: 'green',
                layout: 'hanging'
            },
            ],
            colorByPoint: false,
            color: '#007ad0',
            dataLabels: {
                color: 'white'
            },
            borderColor: 'white',
            nodeWidth: 65
        }],
        tooltip: {
            outside: true
        },
        exporting: {
            allowHTML: true,
            sourceWidth: 800,
            sourceHeight: 600
        }

    });
</script>
{% endblock %}", "tentang.html.twig", "P:\\Project\\PHP\\si\\SI-Klasis-Makassar\\templates\\tentang.html.twig");
    }
}
