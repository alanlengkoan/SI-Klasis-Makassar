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

/* superadmin/kategori_informasi/view.html.twig */
class __TwigTemplate_1899e17c7f65aed518bd23beba3f41b26e13e581987c2cc3041932261da37429 extends Template
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
        return "superadmin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "superadmin/kategori_informasi/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "superadmin/kategori_informasi/view.html.twig"));

        $this->parent = $this->loadTemplate("superadmin/layout.html.twig", "superadmin/kategori_informasi/view.html.twig", 1);
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
                    <form action=\"/superadmin/kategori/add\" id=\"form-add\" method=\"post\">
                        ";
        // line 31
        echo "                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add"), "html", null, true);
        echo "\">
                        <input type=\"hidden\" id=\"inpidkategori\">
                        ";
        // line 34
        echo "
                        <div class=\"form-group\">                            
                            <h4 class=\"card-title\">Nama Kategori *</h4>
                            <input type=\"text\" class=\"form-control form-control-sm\" name=\"inpnama\" id=\"inpnama\" placeholder=\"Masukkan Kategori\" />
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
        // line 49
        echo "    ";
        // line 50
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
                                    <th>Nama</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["kategori"]) || array_key_exists("kategori", $context) ? $context["kategori"] : (function () { throw new RuntimeError('Variable "kategori" does not exist.', 66, $this->source); })()));
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
            // line 67
            echo "                                <tr>
                                    <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                                    <td>
                                        <button class=\"btn btn-outline-danger btn-sm btn-rounded\" id=\"upd\" data-id=\"";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "id_kategori", [], "any", false, false, false, 70), "html", null, true);
            echo "\">
                                            <i class=\"fas fa-edit\"></i>&nbsp;Ubah
                                        </button>
                                        <button class=\"btn btn-outline-primary btn-sm btn-rounded\" id=\"del\" data-id=\"";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "id_kategori", [], "any", false, false, false, 73), "html", null, true);
            echo "\">
                                            <i class=\"fas fa-trash\"></i>&nbsp;Hapus
                                        </button>
                                    </td>
                                    <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama", [], "any", false, false, false, 77), "html", null, true);
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
        // line 80
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 88
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 92
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 93
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/dist/js/pages/datatable/datatable-basic.init.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js\"></script>

<script>
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

            \$('#inpnama').attr('required', 'required');

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
                url: \"kategori/get\",
                dataType: 'json',
                data: {
                    id: ini.data('id')
                },
                beforeSend: function() {
                    ini.attr('disabled', 'disabled');
                    ini.html('<i class=\"fas fa-spinner\"></i>&nbsp;Menunggu');
                },
                success: function(data) {
                    \$('form').attr('action', 'kategori/upd');
                    \$('form').attr('id', 'form-upd');
                    \$('#inpidkategori').attr('name', 'inpidkategori');
                    \$('#inpidkategori').attr('value', data.id_kategori);
                    \$('#inpnama').val(data.nama);
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

            \$('#inpnama').attr('required', 'required');

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
                        url: \"kategori/del\",
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "superadmin/kategori_informasi/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 94,  267 => 93,  257 => 92,  246 => 88,  237 => 80,  220 => 77,  213 => 73,  207 => 70,  202 => 68,  199 => 67,  182 => 66,  164 => 50,  162 => 49,  146 => 34,  140 => 31,  131 => 23,  128 => 21,  125 => 19,  118 => 14,  113 => 11,  103 => 9,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'superadmin/layout.html.twig' %}

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
                    <form action=\"/superadmin/kategori/add\" id=\"form-add\" method=\"post\">
                        {# begin:: token and id #}
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('add') }}\">
                        <input type=\"hidden\" id=\"inpidkategori\">
                        {# end:: token and id #}

                        <div class=\"form-group\">                            
                            <h4 class=\"card-title\">Nama Kategori *</h4>
                            <input type=\"text\" class=\"form-control form-control-sm\" name=\"inpnama\" id=\"inpnama\" placeholder=\"Masukkan Kategori\" />
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
                                    <th>Nama</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for rows in kategori %}
                                <tr>
                                    <td>{{ loop.index }}</td>
                                    <td>
                                        <button class=\"btn btn-outline-danger btn-sm btn-rounded\" id=\"upd\" data-id=\"{{ rows.id_kategori }}\">
                                            <i class=\"fas fa-edit\"></i>&nbsp;Ubah
                                        </button>
                                        <button class=\"btn btn-outline-primary btn-sm btn-rounded\" id=\"del\" data-id=\"{{ rows.id_kategori }}\">
                                            <i class=\"fas fa-trash\"></i>&nbsp;Hapus
                                        </button>
                                    </td>
                                    <td>{{ rows.nama }}</td>
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

            \$('#inpnama').attr('required', 'required');

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
                url: \"kategori/get\",
                dataType: 'json',
                data: {
                    id: ini.data('id')
                },
                beforeSend: function() {
                    ini.attr('disabled', 'disabled');
                    ini.html('<i class=\"fas fa-spinner\"></i>&nbsp;Menunggu');
                },
                success: function(data) {
                    \$('form').attr('action', 'kategori/upd');
                    \$('form').attr('id', 'form-upd');
                    \$('#inpidkategori').attr('name', 'inpidkategori');
                    \$('#inpidkategori').attr('value', data.id_kategori);
                    \$('#inpnama').val(data.nama);
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

            \$('#inpnama').attr('required', 'required');

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
                        url: \"kategori/del\",
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
{% endblock %}", "superadmin/kategori_informasi/view.html.twig", "P:\\Project\\PHP\\si\\SI-Klasis-Makassar\\templates\\superadmin\\kategori_informasi\\view.html.twig");
    }
}
