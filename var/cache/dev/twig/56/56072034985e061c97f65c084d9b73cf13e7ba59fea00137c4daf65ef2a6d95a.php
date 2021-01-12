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
class __TwigTemplate_95f0db68694dce836caba869f846e25e817003eb96252dc1974c5476d7077f00 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/informasi/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/informasi/view.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/informasi/view.html.twig", 1);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["kategori"]) || array_key_exists("kategori", $context) ? $context["kategori"] : (function () { throw new RuntimeError('Variable "kategori" does not exist.', 40, $this->source); })()));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 102, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 137
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  441 => 223,  354 => 139,  349 => 138,  339 => 137,  328 => 133,  319 => 125,  301 => 121,  287 => 118,  282 => 116,  278 => 115,  274 => 114,  270 => 113,  263 => 109,  257 => 106,  252 => 104,  249 => 103,  232 => 102,  209 => 81,  207 => 80,  169 => 43,  158 => 41,  154 => 40,  146 => 34,  140 => 31,  131 => 23,  128 => 21,  125 => 19,  118 => 14,  113 => 11,  103 => 9,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
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
                    <form action=\"/admin/informasi/add\" id=\"form-add\" method=\"post\" enctype=\"multipart/form-data\">
                        {# begin:: token and id #}
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('add') }}\">
                        <input type=\"hidden\" id=\"inpidinformasi\">
                        {# end:: token and id #}

                        <div class=\"form-group\">
                            <h4 class=\"card-title\">Kategori *</h4>
                            <select style=\"width: 100%\" class=\"form-control form-control-sm\" name=\"inpidkategori\"
                                id=\"inpidkategori\">
                                <option value=\"\">- Pilih Kategori -</option>
                                {% for rows in kategori %}
                                <option value=\"{{ rows.id_kategori }}\">{{ rows.nama }}</option>
                                {% endfor %}
                            </select>
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
    {# end:: form #}
    {# begin:: tabel #}
    <div class=\"row\">
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
                                {% for rows in data %}
                                <tr>
                                    <td>{{ loop.index }}</td>
                                    <td>
                                        <button class=\"btn btn-outline-danger btn-sm btn-rounded\" id=\"upd\" data-id=\"{{ rows.id_informasi }}\">
                                            <i class=\"fas fa-edit\"></i>&nbsp;Ubah
                                        </button>
                                        <button class=\"btn btn-outline-primary btn-sm btn-rounded\" id=\"del\" data-id=\"{{ rows.id_informasi }}\">
                                            <i class=\"fas fa-trash\"></i>&nbsp;Hapus
                                        </button>
                                    </td>
                                    <td>{{ rows.nama_kategori }}</td>
                                    <td>{{ rows.judul }}</td>
                                    <td>{{ rows.isi|raw }}</td>
                                    <td>{{ rows.tanggal_publish|date('d-m-Y H:i') }}</td>
                                    <td>
                                        <button class=\"btn {{ (rows.status == '1') ? 'btn-outline-success' : 'btn-outline-danger' }} btn-sm btn-rounded\" id=\"sts\" data-sts=\"{{ rows.status }}\" data-id=\"{{ rows.id_informasi }}\"><i class=\"fas {{ (rows.status == '1') ? 'fa-unlock' : 'fa-lock' }}\"></i>&nbsp;{{ (rows.status == '1') ? 'Aktif' : 'Tidak Aktif' }}</button>
                                    </td>
                                    <td>
                                        <img src=\"{{ asset('uploads/informasi/'~rows.gambar) }}\" width=\"100\" heigth=\"100\" />
                                    </td>
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

                    var lokasi_gambar = \"{{ asset('uploads/informasi/') }}\"+data.gambar;
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
{% endblock %}", "admin/informasi/view.html.twig", "P:\\Project\\PHP\\si\\SI-Klasis-Makassar\\templates\\admin\\informasi\\view.html.twig");
    }
}
