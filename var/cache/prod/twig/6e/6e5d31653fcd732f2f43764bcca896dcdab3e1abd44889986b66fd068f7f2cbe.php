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

/* superadmin/gereja/view.html.twig */
class __TwigTemplate_eaa7785134a133516e9ddd945df39de8b40436f3d6d6d13458fd8423e75c80ed extends Template
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
        $this->parent = $this->loadTemplate("superadmin/layout.html.twig", "superadmin/gereja/view.html.twig", 1);
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
                    <form action=\"/superadmin/gereja/add\" id=\"form-add\" method=\"post\">
                        ";
        // line 31
        echo "                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add"), "html", null, true);
        echo "\">
                        ";
        // line 33
        echo "
                        <div class=\"form-group\">                            
                            <h4 class=\"card-title\">Nama *</h4>
                            <input type=\"text\" class=\"form-control form-control-sm\" name=\"inpnama\" id=\"inpnama\" placeholder=\"Masukkan Nama\" />
                            <div id=\"error\"></div>
                        </div>
                        <div class=\"form-group\">                            
                            <h4 class=\"card-title\">Tentang *</h4>
                            <input type=\"text\" class=\"form-control form-control-sm\" name=\"inptentang\" id=\"inptentang\" placeholder=\"Masukkan Tentang\" />
                            <div id=\"error\"></div>
                        </div>
                        <div class=\"form-group\">                            
                            <h4 class=\"card-title\">Alamat *</h4>
                            <input type=\"text\" class=\"form-control form-control-sm\" name=\"inpalamat\" id=\"inpalamat\" placeholder=\"Masukkan Alamat\" />
                            <div id=\"error\"></div>
                        </div>
                        <hr>
                        <div class=\"form-group\">                            
                            <h4 class=\"card-title\">Email *</h4>
                            <input type=\"text\" class=\"form-control form-control-sm\" name=\"inpemail\" id=\"inpemail\" placeholder=\"Masukkan E-Mail\" />
                            <div id=\"error\"></div>
                        </div>
                        <div class=\"form-group\">                            
                            <h4 class=\"card-title\">Telepon *</h4>
                            <input type=\"text\" class=\"form-control form-control-sm\" name=\"inptelepon\" id=\"inptelepon\" placeholder=\"Masukkan Telepon\" />
                            <div id=\"error\"></div>
                        </div>
                        <div class=\"form-group\">                            
                            <h4 class=\"card-title\">Twitter</h4>
                            <input type=\"text\" class=\"form-control form-control-sm\" name=\"inptwitter\" id=\"inptwitter\" placeholder=\"Masukkan Link Twitter\" />
                            <div id=\"error\"></div>
                        </div>
                        <div class=\"form-group\">                            
                            <h4 class=\"card-title\">Instagram</h4>
                            <input type=\"text\" class=\"form-control form-control-sm\" name=\"inpinstagram\" id=\"inpinstagram\" placeholder=\"Masukkan Link Instagram\" />
                            <div id=\"error\"></div>
                        </div>
                        <div class=\"form-group\">                            
                            <h4 class=\"card-title\">Facebook</h4>
                            <input type=\"text\" class=\"form-control form-control-sm\" name=\"inpfacebook\" id=\"inpfacebook\" placeholder=\"Masukkan Link Facebook\" />
                            <div id=\"error\"></div>
                        </div>
                        <div class=\"form-group\">                            
                            <h4 class=\"card-title\">Youtube</h4>
                            <input type=\"text\" class=\"form-control form-control-sm\" name=\"inpyoutube\" id=\"inpyoutube\" placeholder=\"Masukkan Link Youtube\" />
                            <div id=\"error\"></div>
                        </div>
                        <hr>
                        <div class=\"form-group\">                            
                            <h4 class=\"card-title\">Username *</h4>
                            <input type=\"text\" class=\"form-control form-control-sm\" name=\"inpusername\" id=\"inpusername\" placeholder=\"Masukkan Username\" />
                            <div id=\"error\"></div>
                        </div>
                        <div class=\"form-group\">                            
                            <h4 class=\"card-title\">Password *</h4>
                            <input type=\"password\" class=\"form-control form-control-sm\" name=\"inppassword\" id=\"inppassword\" placeholder=\"Masukkan Password\" />
                            <div id=\"error\"></div>
                        </div>
                        <button type=\"submit\" id=\"add\" class=\"btn btn-outline-primary btn-sm btn-rounded\">
                            <i class=\"fas fa-arrow-right\"></i>&nbsp;Daftar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 100
        echo "    ";
        // line 101
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
                                    <th>Email</th>
                                    <th>Telepon</th>
                                    <th>Alamat</th>
                                    <th>Tentang</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["gereja"] ?? null));
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
            // line 122
            echo "                                <tr>
                                    <td>";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 123), "html", null, true);
            echo "</td>
                                    <td>
                                        <button class=\"btn btn-outline-danger btn-sm btn-rounded\" id=\"del\" data-id=\"";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "id_gereja", [], "any", false, false, false, 125), "html", null, true);
            echo "\">
                                            <i class=\"fas fa-trash\"></i>&nbsp;Hapus
                                        </button>
                                    </td>
                                    <td>";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama", [], "any", false, false, false, 129), "html", null, true);
            echo "</td>
                                    <td>";
            // line 130
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "email", [], "any", false, false, false, 130), null))) ? (print ("Belum ada email.")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "email", [], "any", false, false, false, 130), "html", null, true))));
            echo "</td>
                                    <td>";
            // line 131
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "telepon", [], "any", false, false, false, 131), null))) ? (print ("Belum ada telepon.")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "telepon", [], "any", false, false, false, 131), "html", null, true))));
            echo "</td>
                                    <td>";
            // line 132
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "alamat", [], "any", false, false, false, 132), null))) ? (print ("Belum ada alamat.")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "alamat", [], "any", false, false, false, 132), "html", null, true))));
            echo "</td>
                                    <td>";
            // line 133
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "tentang", [], "any", false, false, false, 133), null))) ? (print ("Belum ada tentang.")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "tentang", [], "any", false, false, false, 133), "html", null, true))));
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
        // line 136
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 144
        echo "</div>
";
    }

    // line 148
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 149
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/dist/js/pages/datatable/datatable-basic.init.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js\"></script>

<script>
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
            \$('#inpemail').attr('required', 'required');
            \$('#inptelepon').attr('required', 'required');
            \$('#inpalamat').attr('required', 'required');
            \$('#inptentang').attr('required', 'required');
            
            \$('#inpnamagereja').attr('required', 'required');
            \$('#inpusername').attr('required', 'required');
            \$('#inppassword').attr('required', 'required');

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
                        url: \"gereja/del\",
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
        return "superadmin/gereja/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 150,  278 => 149,  274 => 148,  269 => 144,  260 => 136,  243 => 133,  239 => 132,  235 => 131,  231 => 130,  227 => 129,  220 => 125,  215 => 123,  212 => 122,  195 => 121,  173 => 101,  171 => 100,  103 => 33,  98 => 31,  89 => 23,  86 => 21,  83 => 19,  76 => 14,  71 => 11,  67 => 9,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "superadmin/gereja/view.html.twig", "P:\\Project\\PHP\\si\\SI-Klasis-Makassar\\templates\\superadmin\\gereja\\view.html.twig");
    }
}
