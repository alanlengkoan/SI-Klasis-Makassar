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

/* admin/informasi/view.html.twig */
class __TwigTemplate_e88f721a8c17c22e088c9797fb1f25678af238e27b5e25b2680e66a80349e558 extends Template
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
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/informasi/view.html.twig", 1);
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
                    <form action=\"/admin/informasi/add\" id=\"form-add\" method=\"post\" enctype=\"multipart/form-data\">
                        ";
        // line 31
        echo "                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add"), "html", null, true);
        echo "\">
                        <input type=\"hidden\" id=\"inpidinformasi\">
                        ";
        // line 34
        echo "
                        <div class=\"form-group\">
                            <h4 class=\"card-title\">Kategori *</h4>
                            <select style=\"width: 100%\" class=\"form-control form-control-sm\" name=\"inpidkategori\"
                                id=\"inpidkategori\">
                                <option value=\"\">- Pilih Kategori -</option>
                                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["kategori"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
            // line 41
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "id_kategori", [], "any", false, false, false, 41), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama", [], "any", false, false, false, 41), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                            </select>
                            <div id=\"error\"></div>
                        </div>
                        <div class=\"form-group\">                            
                            <h4 class=\"card-title\">Judul *</h4>
                            <input type=\"text\" class=\"form-control form-control-sm\" name=\"inpjudul\" id=\"inpjudul\" placeholder=\"Masukkan Judul\" />
                            <div id=\"error\"></div>
                        </div>
                        <div class=\"form-group\">
                            <h4 class=\"card-title\">Gambar *</h4>
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
                            <h4 class=\"card-title\">Isi *</h4>
                            <textarea name=\"inpisi\" id=\"inpisi\"></textarea>
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
        // line 80
        echo "    ";
        // line 81
        echo "    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h3 class=\"card-title\">Tabel</h3>
                    <hr>
                    <div class=\"table-responsive\">
                        <table id=\"tabel-informasi\" class=\"table table-striped table-bordered display no-wrap\" style=\"width:100%\">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Aksi</th>
                                    <th>Kategori</th>
                                    <th>Judul</th>
                                    <th>Isi</th>
                                    <th>Tanggal Posting</th>
                                    <th>Status Lihat</th>
                                    <th>Gambar</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 102
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
            // line 103
            echo "                                <tr>
                                    <td>";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 104), "html", null, true);
            echo "</td>
                                    <td>
                                        <button class=\"btn btn-outline-danger btn-sm btn-rounded\" id=\"upd\" data-id=\"";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "id_informasi", [], "any", false, false, false, 106), "html", null, true);
            echo "\">
                                            <i class=\"fas fa-edit\"></i>&nbsp;Ubah
                                        </button>
                                        <button class=\"btn btn-outline-primary btn-sm btn-rounded\" id=\"del\" data-id=\"";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "id_informasi", [], "any", false, false, false, 109), "html", null, true);
            echo "\">
                                            <i class=\"fas fa-trash\"></i>&nbsp;Hapus
                                        </button>
                                    </td>
                                    <td>";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama_kategori", [], "any", false, false, false, 113), "html", null, true);
            echo "</td>
                                    <td>";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "judul", [], "any", false, false, false, 114), "html", null, true);
            echo "</td>
                                    <td>";
            // line 115
            echo twig_get_attribute($this->env, $this->source, $context["rows"], "isi", [], "any", false, false, false, 115);
            echo "</td>
                                    <td>";
            // line 116
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "tanggal_publish", [], "any", false, false, false, 116), "d-m-Y H:i"), "html", null, true);
            echo "</td>
                                    <td>
                                        <button class=\"btn ";
            // line 118
            echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "status", [], "any", false, false, false, 118), "1"))) ? ("btn-outline-success") : ("btn-outline-danger"));
            echo " btn-sm btn-rounded\" id=\"sts\" data-sts=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "status", [], "any", false, false, false, 118), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "id_informasi", [], "any", false, false, false, 118), "html", null, true);
            echo "\"><i class=\"fas ";
            echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "status", [], "any", false, false, false, 118), "1"))) ? ("fa-unlock") : ("fa-lock"));
            echo "\"></i>&nbsp;";
            echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "status", [], "any", false, false, false, 118), "1"))) ? ("Aktif") : ("Tidak Aktif"));
            echo "</button>
                                    </td>
                                    <td>
                                        <img src=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/informasi/" . twig_get_attribute($this->env, $this->source, $context["rows"], "gambar", [], "any", false, false, false, 121))), "html", null, true);
            echo "\" width=\"100\" heigth=\"100\" />
                                    </td>
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
        // line 125
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 133
        echo "</div>
";
    }

    // line 137
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/dist/js/pages/datatable/datatable-basic.init.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js\"></script>
<script src=\"https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js\"></script>

<script>
    // untuk textarea editor
    CKEDITOR.replace('inpisi', {
        language: 'en',
    });

    // untuk datatable
    var untukDataTabel = function() {
        \$('#tabel-informasi').DataTable();
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

            \$('#inpidkategori').attr('required', 'required');
            \$('#inpjudul').attr('required', 'required');
            \$('#inpgambar').attr('required', 'required');
            \$('#inpisi').attr('required', 'required');

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
                url: \"informasi/get\",
                dataType: 'json',
                data: {
                    id: ini.data('id')
                },
                beforeSend: function() {
                    ini.attr('disabled', 'disabled');
                    ini.html('<i class=\"fas fa-spinner\"></i>&nbsp;Menunggu');
                },
                success: function(data) {
                    \$('form').attr('action', 'informasi/upd');
                    \$('form').attr('id', 'form-upd');
                    \$('#inpidinformasi').attr('name', 'inpidinformasi');
                    \$('#inpidinformasi').val(data.id_informasi);

                    var lokasi_gambar = \"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/informasi/"), "html", null, true);
        echo "\"+data.gambar;
                    \$('#lihat_gambar').html(`<img src=\"`+lokasi_gambar+`\" width=\"100\" heigth=\"100\" />`);
                    \$('#centang_gambar').html(`<input type=\"checkbox\" name=\"ubah_gambar\" id=\"ubah_gambar\" /> Ubah gambar!`);

                    \$('#inpidkategori').val(data.id_kategori);
                    \$('#inpjudul').val(data.judul);
                    \$('#inpgambar').attr('disabled', 'disabled');
                    \$('#inpgambar').removeAttr('id');
                    CKEDITOR.instances.inpisi.setData(data.isi)
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
        var parsleyConfig = {
            errorsContainer: function(parsleyField) {
                var \$err = parsleyField.\$element.siblings('#error');
                return \$err;
            }
        }

        \$('#form-upd').parsley(parsleyConfig);

        \$(document).on('submit', '#form-upd', function (e) {
            e.preventDefault();

            CKEDITOR.instances.inpisi.updateElement();

            \$('#inpidkategori').attr('required', 'required');
            \$('#inpjudul').attr('required', 'required');
            \$('#inpisi').attr('required', 'required');

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
    var untukStatusData = function() {
        \$(document).on('click', '#sts', function() {
            var id = \$(this).data('id');
            var sts = \$(this).data('sts');

            \$.ajax({
                type: \"post\",
                url: \"informasi/upd_status\",
                dataType: 'json',
                data: {
                    id: id,
                    status: sts
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
                        url: \"informasi/del\",
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
    }

    public function getTemplateName()
    {
        return "admin/informasi/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 223,  300 => 139,  295 => 138,  291 => 137,  286 => 133,  277 => 125,  259 => 121,  245 => 118,  240 => 116,  236 => 115,  232 => 114,  228 => 113,  221 => 109,  215 => 106,  210 => 104,  207 => 103,  190 => 102,  167 => 81,  165 => 80,  127 => 43,  116 => 41,  112 => 40,  104 => 34,  98 => 31,  89 => 23,  86 => 21,  83 => 19,  76 => 14,  71 => 11,  67 => 9,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/informasi/view.html.twig", "P:\\Project\\PHP\\si\\SI-Klasis-Makassar\\templates\\admin\\informasi\\view.html.twig");
    }
}
