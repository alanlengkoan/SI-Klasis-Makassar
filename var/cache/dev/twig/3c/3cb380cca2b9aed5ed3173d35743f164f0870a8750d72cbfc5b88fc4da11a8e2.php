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

/* admin/jadwal/view.html.twig */
class __TwigTemplate_0f9a54555450475b304a177de42799d1163da139e72074395c0bf9186c4b8680 extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/jadwal/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/jadwal/view.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/jadwal/view.html.twig", 1);
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
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<div class=\"page-breadcrumb\">
    <div class=\"row\">
        <div class=\"col-7 align-self-center\">
            <h2 class=\"page-title text-truncate text-dark font-weight-medium mb-1\">";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["halaman"]) || array_key_exists("halaman", $context) ? $context["halaman"] : (function () { throw new RuntimeError('Variable "halaman" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "</h2>
        </div>
    </div>
</div>
";
        // line 19
        echo "
";
        // line 21
        echo "<div class=\"container-fluid\">
    ";
        // line 23
        echo "    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h3 class=\"card-title\">Form</h3>
                    <hr>
                    <form action=\"/admin/jadwal/add\" id=\"form-add\" method=\"post\">
                        ";
        // line 31
        echo "                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add"), "html", null, true);
        echo "\">
                        <input type=\"hidden\" id=\"inpidjadwalrincian\">
                        ";
        // line 34
        echo "
                        <div class=\"form-group\">
                            <h4 class=\"card-title\">Jadwal *</h4>
                            <select style=\"width: 100%\" class=\"form-control form-control-sm\" name=\"inpidjadwal\" id=\"inpidjadwal\">
                                <option value=\"\">- Pilih Kategori -</option>
                                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jadwal"]) || array_key_exists("jadwal", $context) ? $context["jadwal"] : (function () { throw new RuntimeError('Variable "jadwal" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
            // line 40
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "id_jadwal", [], "any", false, false, false, 40), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama", [], "any", false, false, false, 40), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                            </select>
                            <div id=\"error\"></div>
                        </div>
                        <div class=\"form-group\">                            
                            <h4 class=\"card-title\">Nama Keluarga *</h4>
                            <input type=\"text\" class=\"form-control form-control-sm\" name=\"inpnamakel\" id=\"inpnamakel\" placeholder=\"Masukkan Nama Keluarga\" />
                            <div id=\"error\"></div>
                        </div>
                        <div class=\"form-group\">                            
                            <h4 class=\"card-title\">Nama Pelayan *</h4>
                            <input type=\"text\" class=\"form-control form-control-sm\" name=\"inpnamapel\" id=\"inpnamapel\" placeholder=\"Masukkan Nama Palayan\" />
                            <div id=\"error\"></div>
                        </div>
                        <div class=\"form-group\">                            
                            <h4 class=\"card-title\">Alamat *</h4>
                            <textarea class=\"form-control form-control-sm\" name=\"inpalamat\" id=\"inpalamat\" rows=\"2\" placeholder=\"Masukkan Alamat\"></textarea>
                            <div id=\"error\"></div>
                        </div>
                        <div class=\"form-group\">                            
                            <h4 class=\"card-title\">Tanggal Ibadah *</h4>
                            <input type=\"datetime-local\" class=\"form-control form-control-sm\" name=\"inptglibadah\" id=\"inptglibadah\" />
                            <div id=\"error\"></div>
                        </div>
                        <button type=\"submit\" id=\"add\" class=\"btn btn-outline-primary btn-sm btn-rounded\">
                            <i class=\"fas fa-plus\"></i>&nbsp;Tambah
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 74
        echo "    ";
        // line 75
        echo "    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h3 class=\"card-title\">Tabel</h3>
                    <hr>
                    <div class=\"table-responsive\">
                        <table id=\"tabel-jadwal\" class=\"table table-striped table-bordered display no-wrap\" style=\"width:100%\">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Aksi</th>
                                    <th>Jadwal</th>
                                    <th>Nama Keluarga</th>
                                    <th>Nama Pelayan</th>
                                    <th>Tanggal Ibadah</th>
                                    <th>Jam Ibadah</th>
                                    <th>Alamat</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 96, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
            // line 97
            echo "                                <tr>
                                    <td>";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 98), "html", null, true);
            echo "</td>
                                    <td>
                                        <button class=\"btn btn-outline-danger btn-sm btn-rounded\" id=\"upd\" data-id=\"";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "id_jadwal_rincian", [], "any", false, false, false, 100), "html", null, true);
            echo "\">
                                            <i class=\"fas fa-edit\"></i>&nbsp;Ubah
                                        </button>
                                        <button class=\"btn btn-outline-primary btn-sm btn-rounded\" id=\"del\" data-id=\"";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "id_jadwal_rincian", [], "any", false, false, false, 103), "html", null, true);
            echo "\">
                                            <i class=\"fas fa-trash\"></i>&nbsp;Hapus
                                        </button>
                                    </td>
                                    <td>";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama", [], "any", false, false, false, 107), "html", null, true);
            echo "</td>
                                    <td>";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama_keluarga", [], "any", false, false, false, 108), "html", null, true);
            echo "</td>
                                    <td>";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama_pelayan", [], "any", false, false, false, 109), "html", null, true);
            echo "</td>
                                    <td>";
            // line 110
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "tanggal_ibadah", [], "any", false, false, false, 110), "d-m-Y"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 111
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "tanggal_ibadah", [], "any", false, false, false, 111), "H:i"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "alamat", [], "any", false, false, false, 112), "html", null, true);
            echo "</td>
                                </tr>
                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 123
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 127
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 128
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/dist/js/pages/datatable/datatable-basic.init.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js\"></script>

<script>
    // untuk datatable
    var untukDataTabel = function() {
        \$('#tabel-jadwal').DataTable();
    }();

    // untuk tambah data
    var untukTambahData = function() {
        var parsleyConfig = {
            errorsContainer: function(parsleyField) {
                var \$err = parsleyField.\$element.siblings('#error');
                return \$err;
            }
        }

        \$('#form-add').parsley(parsleyConfig);

        \$('#form-add').submit(function(e) {
            e.preventDefault();

            \$('#inpidjadwal').attr('required', 'required');
            \$('#inpnamakel').attr('required', 'required');
            \$('#inpnamapel').attr('required', 'required');
            \$('#inpalamat').attr('required', 'required');
            \$('#inptglibadah').attr('required', 'required');

            if (\$('#form-add').parsley().isValid() == true) {
                \$.ajax({
                    method: \$(this).attr('method'),
                    url: \$(this).attr('action'),
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    beforeSend: function() {
                        \$('#add').attr('disabled', 'disabled');
                        \$('#add').html('<i class=\"fas fa-spinner\"></i>&nbsp;Menunggu');
                    },
                    success: function(response) {
                        swal({
                            title: response.title,
                            text: response.text,
                            icon: response.type,
                            button: response.button,
                        })
                        .then((value) => {
                            location.reload();
                        });
                    }
                })
            }
        });
    }();

    // untuk get id
    var untukGetIdData = function() {
        \$(document).on('click', '#upd', function() {
            var ini = \$(this);

            \$.ajax({
                type: \"post\",
                url: \"jadwal/get\",
                dataType: 'json',
                data: {
                    id: ini.data('id')
                },
                beforeSend: function() {
                    ini.attr('disabled', 'disabled');
                    ini.html('<i class=\"fas fa-spinner\"></i>&nbsp;Menunggu');
                },
                success: function(data) {
                    \$('form').attr('action', 'jadwal/upd');
                    \$('form').attr('id', 'form-upd');
                    \$('#inpidjadwalrincian').attr('name', 'inpidjadwalrincian');
                    \$('#inpidjadwalrincian').val(data.id_jadwal_rincian);

                    \$('#inpidjadwal').val(data.id_jadwal);
                    \$('#inpnamakel').val(data.nama_keluarga);
                    \$('#inpnamapel').val(data.nama_pelayan);
                    \$('#inpalamat').val(data.alamat);
                    \$('#inptglibadah').val(data.tanggal_ibadah);
                    \$('#add').html('<i class=\"fas fa-save\"></i>&nbsp;Simpan');
                    ini.removeAttr('disabled');
                    ini.html('<i class=\"fas fa-edit\"></i>&nbsp;Ubah');
                }
            });
        });
    }();

    // untuk ubah data
    var untukUbahData = function() {
        var parsleyConfig = {
            errorsContainer: function(parsleyField) {
                var \$err = parsleyField.\$element.siblings('#error');
                return \$err;
            }
        }

        \$('#form-upd').parsley(parsleyConfig);

        \$(document).on('submit', '#form-upd', function (e) {
            e.preventDefault();

            \$('#inpidjadwal').attr('required', 'required');
            \$('#inpnamakel').attr('required', 'required');
            \$('#inpnamapel').attr('required', 'required');
            \$('#inpalamat').attr('required', 'required');
            \$('#inptglibadah').attr('required', 'required');

            if (\$('#form-upd').parsley().isValid() == true) {
                \$.ajax({
                    method: \$(this).attr('method'),
                    url: \$(this).attr('action'),
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    beforeSend: function () {
                        \$('#add').attr('disabled', 'disabled');
                        \$('#add').html('<i class=\"fas fa-spinner\"></i>&nbsp;Menunggu');
                    },
                    success: function (response) {
                        swal({
                            title: response.title,
                            text: response.text,
                            icon: response.type,
                            button: response.button,
                        })
                        .then((value) => {
                            location.reload();
                        });
                    }
                })
            }
        });
    }();

    // untuk hapus data
    var untukHapusData = function() {
        \$(document).on('click', '#del', function() {
            var ini = \$(this);

            swal({
                title: \"Apakah Anda yakin ingin menghapusnya?\",
                text: \"Data yang telah dihapus tidak dapat dikembalikan!\",
                icon: \"warning\",
                buttons: true,
                dangerMode: true,
            })
            .then((del) => {
                if (del) {
                    \$.ajax({
                        type: \"post\",
                        url: \"jadwal/del\",
                        dataType: 'json',
                        data: {
                            id: ini.data('id')
                        },
                        beforeSend: function() {
                            ini.attr('disabled', 'disabled');
                            ini.html('<i class=\"fas fa-spinner\"></i>&nbsp;Menunggu');
                        },
                        success: function(response) {
                            swal({
                                title: response.title,
                                text: response.text,
                                icon: response.type,
                                button: response.button,
                            })
                            .then((value) => {
                                location.reload();
                            });
                        }
                    });
                } else {
                    return false;
                }
            });
        });
    }();
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/jadwal/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 129,  331 => 128,  321 => 127,  310 => 123,  301 => 115,  284 => 112,  280 => 111,  276 => 110,  272 => 109,  268 => 108,  264 => 107,  257 => 103,  251 => 100,  246 => 98,  243 => 97,  226 => 96,  203 => 75,  201 => 74,  168 => 42,  157 => 40,  153 => 39,  146 => 34,  140 => 31,  131 => 23,  128 => 21,  125 => 19,  118 => 14,  113 => 11,  103 => 9,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html.twig' %}

{% block title %}{{ halaman }}{% endblock %}

{% block stylesheets %}
<link href=\"{{ asset('assets/admin/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}\" rel=\"stylesheet\"/>
{% endblock %}

{% block body %}
{# begin:: head #}
<div class=\"page-breadcrumb\">
    <div class=\"row\">
        <div class=\"col-7 align-self-center\">
            <h2 class=\"page-title text-truncate text-dark font-weight-medium mb-1\">{{ halaman }}</h2>
        </div>
    </div>
</div>
{# end:: head #}

{# begin:: body #}
<div class=\"container-fluid\">
    {# begin:: form #}
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h3 class=\"card-title\">Form</h3>
                    <hr>
                    <form action=\"/admin/jadwal/add\" id=\"form-add\" method=\"post\">
                        {# begin:: token and id #}
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('add') }}\">
                        <input type=\"hidden\" id=\"inpidjadwalrincian\">
                        {# end:: token and id #}

                        <div class=\"form-group\">
                            <h4 class=\"card-title\">Jadwal *</h4>
                            <select style=\"width: 100%\" class=\"form-control form-control-sm\" name=\"inpidjadwal\" id=\"inpidjadwal\">
                                <option value=\"\">- Pilih Kategori -</option>
                                {% for rows in jadwal %}
                                <option value=\"{{ rows.id_jadwal }}\">{{ rows.nama }}</option>
                                {% endfor %}
                            </select>
                            <div id=\"error\"></div>
                        </div>
                        <div class=\"form-group\">                            
                            <h4 class=\"card-title\">Nama Keluarga *</h4>
                            <input type=\"text\" class=\"form-control form-control-sm\" name=\"inpnamakel\" id=\"inpnamakel\" placeholder=\"Masukkan Nama Keluarga\" />
                            <div id=\"error\"></div>
                        </div>
                        <div class=\"form-group\">                            
                            <h4 class=\"card-title\">Nama Pelayan *</h4>
                            <input type=\"text\" class=\"form-control form-control-sm\" name=\"inpnamapel\" id=\"inpnamapel\" placeholder=\"Masukkan Nama Palayan\" />
                            <div id=\"error\"></div>
                        </div>
                        <div class=\"form-group\">                            
                            <h4 class=\"card-title\">Alamat *</h4>
                            <textarea class=\"form-control form-control-sm\" name=\"inpalamat\" id=\"inpalamat\" rows=\"2\" placeholder=\"Masukkan Alamat\"></textarea>
                            <div id=\"error\"></div>
                        </div>
                        <div class=\"form-group\">                            
                            <h4 class=\"card-title\">Tanggal Ibadah *</h4>
                            <input type=\"datetime-local\" class=\"form-control form-control-sm\" name=\"inptglibadah\" id=\"inptglibadah\" />
                            <div id=\"error\"></div>
                        </div>
                        <button type=\"submit\" id=\"add\" class=\"btn btn-outline-primary btn-sm btn-rounded\">
                            <i class=\"fas fa-plus\"></i>&nbsp;Tambah
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {# end:: form #}
    {# begin:: tabel #}
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h3 class=\"card-title\">Tabel</h3>
                    <hr>
                    <div class=\"table-responsive\">
                        <table id=\"tabel-jadwal\" class=\"table table-striped table-bordered display no-wrap\" style=\"width:100%\">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Aksi</th>
                                    <th>Jadwal</th>
                                    <th>Nama Keluarga</th>
                                    <th>Nama Pelayan</th>
                                    <th>Tanggal Ibadah</th>
                                    <th>Jam Ibadah</th>
                                    <th>Alamat</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for rows in data %}
                                <tr>
                                    <td>{{ loop.index }}</td>
                                    <td>
                                        <button class=\"btn btn-outline-danger btn-sm btn-rounded\" id=\"upd\" data-id=\"{{ rows.id_jadwal_rincian }}\">
                                            <i class=\"fas fa-edit\"></i>&nbsp;Ubah
                                        </button>
                                        <button class=\"btn btn-outline-primary btn-sm btn-rounded\" id=\"del\" data-id=\"{{ rows.id_jadwal_rincian }}\">
                                            <i class=\"fas fa-trash\"></i>&nbsp;Hapus
                                        </button>
                                    </td>
                                    <td>{{ rows.nama }}</td>
                                    <td>{{ rows.nama_keluarga }}</td>
                                    <td>{{ rows.nama_pelayan }}</td>
                                    <td>{{ rows.tanggal_ibadah|date('d-m-Y') }}</td>
                                    <td>{{ rows.tanggal_ibadah|date('H:i') }}</td>
                                    <td>{{ rows.alamat }}</td>
                                </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {# end:: tabel #}
</div>
{# end:: body #}
{% endblock %}

{% block javascripts %}
<script src=\"{{ asset('assets/admin/extra-libs/datatables.net/js/jquery.dataTables.min.js') }}\"></script>
<script src=\"{{ asset('assets/admin/dist/js/pages/datatable/datatable-basic.init.js') }}\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js\"></script>

<script>
    // untuk datatable
    var untukDataTabel = function() {
        \$('#tabel-jadwal').DataTable();
    }();

    // untuk tambah data
    var untukTambahData = function() {
        var parsleyConfig = {
            errorsContainer: function(parsleyField) {
                var \$err = parsleyField.\$element.siblings('#error');
                return \$err;
            }
        }

        \$('#form-add').parsley(parsleyConfig);

        \$('#form-add').submit(function(e) {
            e.preventDefault();

            \$('#inpidjadwal').attr('required', 'required');
            \$('#inpnamakel').attr('required', 'required');
            \$('#inpnamapel').attr('required', 'required');
            \$('#inpalamat').attr('required', 'required');
            \$('#inptglibadah').attr('required', 'required');

            if (\$('#form-add').parsley().isValid() == true) {
                \$.ajax({
                    method: \$(this).attr('method'),
                    url: \$(this).attr('action'),
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    beforeSend: function() {
                        \$('#add').attr('disabled', 'disabled');
                        \$('#add').html('<i class=\"fas fa-spinner\"></i>&nbsp;Menunggu');
                    },
                    success: function(response) {
                        swal({
                            title: response.title,
                            text: response.text,
                            icon: response.type,
                            button: response.button,
                        })
                        .then((value) => {
                            location.reload();
                        });
                    }
                })
            }
        });
    }();

    // untuk get id
    var untukGetIdData = function() {
        \$(document).on('click', '#upd', function() {
            var ini = \$(this);

            \$.ajax({
                type: \"post\",
                url: \"jadwal/get\",
                dataType: 'json',
                data: {
                    id: ini.data('id')
                },
                beforeSend: function() {
                    ini.attr('disabled', 'disabled');
                    ini.html('<i class=\"fas fa-spinner\"></i>&nbsp;Menunggu');
                },
                success: function(data) {
                    \$('form').attr('action', 'jadwal/upd');
                    \$('form').attr('id', 'form-upd');
                    \$('#inpidjadwalrincian').attr('name', 'inpidjadwalrincian');
                    \$('#inpidjadwalrincian').val(data.id_jadwal_rincian);

                    \$('#inpidjadwal').val(data.id_jadwal);
                    \$('#inpnamakel').val(data.nama_keluarga);
                    \$('#inpnamapel').val(data.nama_pelayan);
                    \$('#inpalamat').val(data.alamat);
                    \$('#inptglibadah').val(data.tanggal_ibadah);
                    \$('#add').html('<i class=\"fas fa-save\"></i>&nbsp;Simpan');
                    ini.removeAttr('disabled');
                    ini.html('<i class=\"fas fa-edit\"></i>&nbsp;Ubah');
                }
            });
        });
    }();

    // untuk ubah data
    var untukUbahData = function() {
        var parsleyConfig = {
            errorsContainer: function(parsleyField) {
                var \$err = parsleyField.\$element.siblings('#error');
                return \$err;
            }
        }

        \$('#form-upd').parsley(parsleyConfig);

        \$(document).on('submit', '#form-upd', function (e) {
            e.preventDefault();

            \$('#inpidjadwal').attr('required', 'required');
            \$('#inpnamakel').attr('required', 'required');
            \$('#inpnamapel').attr('required', 'required');
            \$('#inpalamat').attr('required', 'required');
            \$('#inptglibadah').attr('required', 'required');

            if (\$('#form-upd').parsley().isValid() == true) {
                \$.ajax({
                    method: \$(this).attr('method'),
                    url: \$(this).attr('action'),
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    beforeSend: function () {
                        \$('#add').attr('disabled', 'disabled');
                        \$('#add').html('<i class=\"fas fa-spinner\"></i>&nbsp;Menunggu');
                    },
                    success: function (response) {
                        swal({
                            title: response.title,
                            text: response.text,
                            icon: response.type,
                            button: response.button,
                        })
                        .then((value) => {
                            location.reload();
                        });
                    }
                })
            }
        });
    }();

    // untuk hapus data
    var untukHapusData = function() {
        \$(document).on('click', '#del', function() {
            var ini = \$(this);

            swal({
                title: \"Apakah Anda yakin ingin menghapusnya?\",
                text: \"Data yang telah dihapus tidak dapat dikembalikan!\",
                icon: \"warning\",
                buttons: true,
                dangerMode: true,
            })
            .then((del) => {
                if (del) {
                    \$.ajax({
                        type: \"post\",
                        url: \"jadwal/del\",
                        dataType: 'json',
                        data: {
                            id: ini.data('id')
                        },
                        beforeSend: function() {
                            ini.attr('disabled', 'disabled');
                            ini.html('<i class=\"fas fa-spinner\"></i>&nbsp;Menunggu');
                        },
                        success: function(response) {
                            swal({
                                title: response.title,
                                text: response.text,
                                icon: response.type,
                                button: response.button,
                            })
                            .then((value) => {
                                location.reload();
                            });
                        }
                    });
                } else {
                    return false;
                }
            });
        });
    }();
</script>
{% endblock %}", "admin/jadwal/view.html.twig", "P:\\Project\\PHP\\si\\SI-Klasis-Makassar\\templates\\admin\\jadwal\\view.html.twig");
    }
}
