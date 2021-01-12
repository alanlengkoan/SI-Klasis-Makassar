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

/* admin/keuangan/pengeluaran/view.html.twig */
class __TwigTemplate_40c5e6f38fa1d79d3c3afcce161fe1183f2ecc67149bff4132d50939783297c2 extends Template
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
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/keuangan/pengeluaran/view.html.twig", 1);
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
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "<div class=\"page-breadcrumb\">
    <div class=\"row\">
        <div class=\"col-7 align-self-center\">
            <h2 class=\"page-title text-truncate text-dark font-weight-medium mb-1\">";
        // line 14
        echo twig_escape_filter($this->env, ($context["halaman"] ?? null), "html", null, true);
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
                    <form action=\"/admin/pengeluaran/add\" id=\"form-add\" method=\"post\" enctype=\"multipart/form-data\">
                        ";
        // line 31
        echo "                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add"), "html", null, true);
        echo "\">
                        <input type=\"hidden\" id=\"inpidkeuanganrincian\">
                        ";
        // line 34
        echo "
                        <div class=\"form-group\">
                            <h4 class=\"card-title\">Keuangan *</h4>
                            <select style=\"width: 100%\" class=\"form-control form-control-sm\" name=\"inpidkeuangan\" id=\"inpidkeuangan\">
                                <option value=\"\">- Pilih Keuangan -</option>
                                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["keuangan"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
            // line 40
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "id_keuangan", [], "any", false, false, false, 40), "html", null, true);
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
                            <h4 class=\"card-title\">Keluar (Kredit) *</h4>
                            <input type=\"text\" class=\"form-control form-control-sm\" name=\"inpkredit\" id=\"inpkredit\" placeholder=\"Masukkan Uang Keluar\" />
                            <div id=\"error\"></div>
                        </div>
                        <div class=\"form-group\">
                            <h4 class=\"card-title\">Gambar</h4>
                            <div id=\"lihat_gambar\" style=\"padding-bottom: 10px\"></div>
                            <div class=\"input-group mb-3\">
                                <div class=\"input-group-prepend\" style=\"height: 35px;\">
                                    <span class=\"input-group-text\">Gambar</span>
                                </div>
                                <div class=\"custom-file\">
                                    <input type=\"file\" class=\"custom-file-input\" name=\"inpgambar\" id=\"inpgambar\" />
                                    <label class=\"custom-file-label form-control-sm\">Choose file</label>
                                </div>
                            </div>
                            <div id=\"centang_gambar\"></div>
                            <div id=\"error\"></div>
                        </div>
                        <div class=\"form-group\">                            
                            <h4 class=\"card-title\">Keterangan *</h4>
                            <textarea class=\"form-control form-control-sm\" name=\"inpketerangan\" id=\"inpketerangan\" rows=\"2\" placeholder=\"Masukkan Keterangan\"></textarea>
                            <div id=\"error\"></div>
                        </div>
                        <div class=\"form-group\">                            
                            <h4 class=\"card-title\">Tanggal Keluar *</h4>
                            <input type=\"date\" class=\"form-control form-control-sm\" name=\"inptanggal\" id=\"inptanggal\" />
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
        // line 84
        echo "    ";
        // line 85
        echo "    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h3 class=\"card-title\">Tabel</h3>
                    <hr>
                    <div class=\"table-responsive\">
                        <table id=\"tabel-pengeluaran\" class=\"table table-striped table-bordered display no-wrap\" style=\"width:100%\">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Aksi</th>
                                    <th>Keuangan</th>
                                    <th>Keluar (Kredit)</th>
                                    <th>Gambar</th>
                                    <th>Tanggal</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
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
            // line 106
            echo "                                <tr>
                                    <td>";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 107), "html", null, true);
            echo "</td>
                                    <td>
                                        <button class=\"btn btn-outline-danger btn-sm btn-rounded\" id=\"upd\" data-id=\"";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "id_keuangan_rincian", [], "any", false, false, false, 109), "html", null, true);
            echo "\">
                                            <i class=\"fas fa-edit\"></i>&nbsp;Ubah
                                        </button>
                                        <button class=\"btn btn-outline-primary btn-sm btn-rounded\" id=\"del\" data-id=\"";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "id_keuangan_rincian", [], "any", false, false, false, 112), "html", null, true);
            echo "\">
                                            <i class=\"fas fa-trash\"></i>&nbsp;Hapus
                                        </button>
                                    </td>
                                    <td>";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama_keuangan", [], "any", false, false, false, 116), "html", null, true);
            echo "</td>
                                    <td>";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "kredit", [], "any", false, false, false, 117)), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 119
            $context["fotoGambar"] = ("uploads/keuangan/" . twig_get_attribute($this->env, $this->source, $context["rows"], "gambar", [], "any", false, false, false, 119));
            // line 120
            echo "                                        <img src=\"";
            (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "gambar", [], "any", false, false, false, 120), null))) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["fotoGambar"] ?? null)), "html", null, true))) : (print ("//placehold.it/150")));
            echo "\" class=\"mx-auto img-fluid d-block\" width=\"100\" height=\"100\" />
                                    </td>
                                    <td>";
            // line 122
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "tanggal", [], "any", false, false, false, 122), "d-m-Y"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "keterangan", [], "any", false, false, false, 123), "html", null, true);
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
        // line 126
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 134
        echo "</div>
";
    }

    // line 138
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 139
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/dist/js/pages/datatable/datatable-basic.init.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js\"></script>

<script>
    // untuk datatable
    var untukDataTabel = function() {
        \$('#tabel-pengeluaran').DataTable();
    }();

    // untuk tambah data
    var untukTambahData = function() {
        \$('#form-add').submit(function(e) {
            e.preventDefault();

            \$('#inpidkeuangan').attr('required', 'required');
            \$('#inptotal').attr('required', 'required');
            \$('#inpketerangan').attr('required', 'required');
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
                url: \"pengeluaran/get\",
                dataType: 'json',
                data: {
                    id: ini.data('id')
                },
                beforeSend: function() {
                    ini.attr('disabled', 'disabled');
                    ini.html('<i class=\"fas fa-spinner\"></i>&nbsp;Menunggu');
                },
                success: function(data) {
                    \$('form').attr('action', '/admin/pengeluaran/upd');
                    \$('form').attr('id', 'form-upd');

                    var lokasi_gambar = \"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/keuangan/"), "html", null, true);
        echo "\"+data.gambar;
                    \$('#lihat_gambar').html(`<img src=\"`+(data.gambar != null ? lokasi_gambar : '//placehold.it/150')+`\" width=\"100\" heigth=\"100\" />`);
                    \$('#centang_gambar').html(`<input type=\"checkbox\" name=\"ubah_gambar\" id=\"ubah_gambar\" /> Ubah gambar!`);

                    \$('#inpidkeuanganrincian').attr('name', 'inpidkeuanganrincian');
                    \$('#inpidkeuanganrincian').attr('value', data.id_keuangan_rincian);
                    \$('#inpidkeuangan').val(data.id_keuangan);
                    \$('#inpdebit').val(data.debit);
                    \$('#inpgambar').attr('disabled', 'disabled');
                    \$('#inpgambar').removeAttr('id');
                    \$('#inpketerangan').val(data.keterangan);
                    \$('#inptanggal').val(data.tanggal);
                    \$('#add').html('<i class=\"fas fa-save\"></i>&nbsp;Simpan');
                    ini.removeAttr('disabled');
                    ini.html('<i class=\"fas fa-edit\"></i>&nbsp;Ubah');
                }
            });
        });
    }();

    // untuk ubah gambar
    var untukUbahGambar = function(){
        \$(document).on('click', '#ubah_gambar', function () {
            var ini = \$(this);
            if (ini.is(':checked')) {
                \$(\"input[name*='inpgambar']\").removeAttr('disabled');
                \$(\"input[name*='inpgambar']\").attr('id', 'inpgambar');
            } else {
                \$(\"input[name*='inpgambar']\").attr('disabled', 'disabled');
                \$(\"input[name*='inpgambar']\").removeAttr('id');
                \$(\"input[name*='inpgambar']\").removeAttr('required');
                ini.parent().parent().find('#error').empty();
            }
        });
    }();

     // untuk ubah data
    var untukUbahData = function() {
        \$(document).on('submit', '#form-upd', function (e) {
            e.preventDefault();

            \$('#inpidkeuangan').attr('required', 'required');
            \$('#inpdebit').attr('required', 'required');
            \$('#inpketerangan').attr('required', 'required');
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
                        url: \"pengeluaran/del\",
                        dataType: 'json',
                        data: {
                            id: ini.data('id')
                        },
                        beforeSend: function () {
                            ini.attr('disabled', 'disabled');
                            ini.html('<i class=\"fas fa-spinner\"></i>&nbsp;Menunggu');
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
                    });
                } else {
                    return false;
                }
            });
        });
    }();
</script>
";
    }

    public function getTemplateName()
    {
        return "admin/keuangan/pengeluaran/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 207,  292 => 140,  287 => 139,  283 => 138,  278 => 134,  269 => 126,  252 => 123,  248 => 122,  242 => 120,  240 => 119,  235 => 117,  231 => 116,  224 => 112,  218 => 109,  213 => 107,  210 => 106,  193 => 105,  171 => 85,  169 => 84,  126 => 42,  115 => 40,  111 => 39,  104 => 34,  98 => 31,  89 => 23,  86 => 21,  83 => 19,  76 => 14,  71 => 11,  67 => 9,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/keuangan/pengeluaran/view.html.twig", "P:\\Project\\PHP\\si\\SI-Klasis-Makassar\\templates\\admin\\keuangan\\pengeluaran\\view.html.twig");
    }
}
