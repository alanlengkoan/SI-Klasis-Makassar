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

/* superadmin/akun/view.html.twig */
class __TwigTemplate_fa26e9021436faa15b534d9fcdf0edb4a142660b66be223e069243e72c05b924 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
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
        $this->parent = $this->loadTemplate("superadmin/layout.html.twig", "superadmin/akun/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["halaman"] ?? null), "html", null, true);
    }

    // line 5
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "<div class=\"page-breadcrumb\">
    <div class=\"row\">
        <div class=\"col-7 align-self-center\">
            <h2 class=\"page-title text-truncate text-dark font-weight-medium mb-1\">";
        // line 12
        echo twig_escape_filter($this->env, ($context["halaman"] ?? null), "html", null, true);
        echo "</h2>
        </div>
    </div>
</div>
";
        // line 17
        echo "
";
        // line 19
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <ul class=\"nav nav-tabs\">
                        <li class=\"nav-item\">
                            <a href=\"#\" data-target=\"#foto\" data-toggle=\"tab\" class=\"nav-link active\">Foto</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#\" data-target=\"#akun\" data-toggle=\"tab\" class=\"nav-link\">Akun</a>
                        </li>
                        <li class=\"nav-item\">
                            <a href=\"#\" data-target=\"#keamanan\" data-toggle=\"tab\" class=\"nav-link\">Keamanan</a>
                        </li>
                    </ul>
                    <div class=\"tab-content py-4\">
                        ";
        // line 37
        echo "                        <div class=\"tab-pane active\" id=\"foto\">
                            <form role=\"form\" action=\"/superadmin/akun/upd_foto\" id=\"form-foto\" method=\"post\" >
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add"), "html", null, true);
        echo "\">

                                <div class=\"order-lg-1 text-center\">
                                    ";
        // line 42
        $context["fotoAkun"] = ("uploads/akun/" . twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "foto", [], "any", false, false, false, 42));
        // line 43
        echo "                                    <img src=\"";
        (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "foto", [], "any", false, false, false, 43), null))) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["fotoAkun"] ?? null)), "html", null, true))) : (print ("//placehold.it/150")));
        echo "\" class=\"mx-auto img-fluid d-block\" id=\"lihat-gambar\" alt=\"Profil\" width=\"100\" />
                                    <h6 class=\"mt-2\">Upload a different photo</h6>
                                    <label class=\"custom-file\">
                                        <input type=\"file\" id=\"inpfotoakun\" name=\"inpfotoakun\" class=\"custom-file-input\">
                                        <span class=\"custom-file-control\">Choose file</span>
                                    </label>
                                    <br><br>
                                    <button type=\"submit\" id=\"add-foto\" class=\"btn btn-primary btn-sm btn-rounded\">
                                        <i class=\"fas fa-plus\"></i>&nbsp;Simpan
                                    </button>
                                </div>
                            </form>
                        </div>
                        ";
        // line 57
        echo "                        ";
        // line 58
        echo "                        <div class=\"tab-pane\" id=\"akun\">
                            <form role=\"form\" action=\"/superadmin/akun/upd_akun\" id=\"form-akun\" method=\"post\">
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add"), "html", null, true);
        echo "\">

                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Nama</label>
                                    <div class=\"col-lg-9\">
                                        <input class=\"form-control\" type=\"text\" name=\"inpnama\" id=\"inpnama\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "nama", [], "any", false, false, false, 65), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Email</label>
                                    <div class=\"col-lg-9\">
                                        <input class=\"form-control\" type=\"email\" name=\"inpemail\" id=\"inpemail\"
                                            value=\"";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email", [], "any", false, false, false, 72), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Username</label>
                                    <div class=\"col-lg-9\">
                                        <input class=\"form-control\" type=\"text\" name=\"inpusername\" id=\"inpusername\"
                                            value=\"";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "username", [], "any", false, false, false, 79), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\"></label>
                                    <div class=\"col-lg-9\">
                                        <button type=\"submit\" id=\"add-akun\" class=\"btn btn-primary btn-sm btn-rounded\">
                                            <i class=\"fas fa-plus\"></i>&nbsp;Simpan
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        ";
        // line 93
        echo "                        ";
        // line 94
        echo "                        <div class=\"tab-pane\" id=\"keamanan\">
                            <form role=\"form\" action=\"/superadmin/akun/upd_keamanan\" id=\"form-keamanan\" method=\"post\">
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add"), "html", null, true);
        echo "\">

                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Password Lama</label>
                                    <div class=\"col-lg-9\">
                                        <input class=\"form-control\" type=\"password\" name=\"inppasswordlama\" id=\"inppasswordlama\" placeholder=\"Masukkan password lama Anda\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Password Baru</label>
                                    <div class=\"col-lg-9\">
                                        <input class=\"form-control\" type=\"password\" name=\"inppasswordbaru\" id=\"inppasswordbaru\" placeholder=\"Masukkan password baru Anda\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Ulangi Password
                                        Baru</label>
                                    <div class=\"col-lg-9\">
                                        <input class=\"form-control\" type=\"password\" name=\"inpkonfirmasipassword\" id=\"inpkonfirmasipassword\" placeholder=\"Konfirmasi password baru\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\"></label>
                                    <div class=\"col-lg-9\">
                                        <button type=\"submit\" id=\"add-keamanan\" class=\"btn btn-primary btn-sm btn-rounded\">
                                            <i class=\"fas fa-plus\"></i>&nbsp;Simpan
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        ";
        // line 128
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 137
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 138
        echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js\"></script>

<script>
    // untuk upload foto
    var untukUploadFoto = function () {
        \$(\"#inpfotoakun\").change(function () {
            cekLokasiFoto(this);
        });
    }();

    // untuk ubah foto
    var untukUbahFoto = function() {
        var parsleyConfig = {
            errorsContainer: function(parsleyField) {
                var \$err = parsleyField.\$element.siblings('#error');
                return \$err;
            }
        }

        \$('#form-foto').parsley(parsleyConfig);

        \$('#form-foto').submit(function(e) {
            e.preventDefault();

            \$('#inpfotoprofil').attr('required', 'required');

            if (\$('#form-foto').parsley().isValid() == true) {
                \$.ajax({
                    method: \$(this).attr('method'),
                    url: \$(this).attr('action'),
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    beforeSend: function() {
                        \$('#add-foto').attr('disabled', 'disabled');
                        \$('#add-foto').html('<i class=\"fas fa-spinner\"></i>&nbsp;Waiting');
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

    // untuk ubah akun
    var untukUbahAkun = function() {
        var parsleyConfig = {
            errorsContainer: function(parsleyField) {
                var \$err = parsleyField.\$element.siblings('#error');
                return \$err;
            }
        }

        \$('#form-akun').parsley(parsleyConfig);

        \$('#form-akun').submit(function(e) {
            e.preventDefault();

            \$('#inpnama').attr('required', 'required');
            \$('#inpemail').attr('required', 'required');
            \$('#inpusername').attr('required', 'required');

            if (\$('#form-akun').parsley().isValid() == true) {
                \$.ajax({
                    method: \$(this).attr('method'),
                    url: \$(this).attr('action'),
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    beforeSend: function() {
                        \$('#add-akun').attr('disabled', 'disabled');
                        \$('#add-akun').html('<i class=\"fas fa-spinner\"></i>&nbsp;Waiting');
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

    // untuk ubah keamanan
    var untukUbahKeamanan = function() {
        var parsleyConfig = {
            errorsContainer: function(parsleyField) {
                var \$err = parsleyField.\$element.siblings('#error');
                return \$err;
            }
        }

        \$('#form-keamanan').parsley(parsleyConfig);

        \$('#form-keamanan').submit(function(e) {
            e.preventDefault();

            \$('#inppasswordlama').attr('required', 'required');
            \$('#inppasswordbaru').attr('required', 'required');
            \$('#inpkonfirmasipassword').attr('required', 'required');

            if (\$('#form-keamanan').parsley().isValid() == true) {
                \$.ajax({
                    method: \$(this).attr('method'),
                    url: \$(this).attr('action'),
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    beforeSend: function() {
                        \$('#add-keamanan').attr('disabled', 'disabled');
                        \$('#add-keamanan').html('<i class=\"fas fa-spinner\"></i>&nbsp;Waiting');
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

    // untuk baca lokasi gambar
    function cekLokasiFoto(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                \$('#lihat-gambar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "superadmin/akun/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 138,  229 => 137,  219 => 128,  185 => 96,  181 => 94,  179 => 93,  163 => 79,  153 => 72,  143 => 65,  135 => 60,  131 => 58,  129 => 57,  112 => 43,  110 => 42,  104 => 39,  100 => 37,  81 => 19,  78 => 17,  71 => 12,  66 => 9,  62 => 7,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "superadmin/akun/view.html.twig", "P:\\Project\\PHP\\si\\SI-Klasis-Makassar\\templates\\superadmin\\akun\\view.html.twig");
    }
}
