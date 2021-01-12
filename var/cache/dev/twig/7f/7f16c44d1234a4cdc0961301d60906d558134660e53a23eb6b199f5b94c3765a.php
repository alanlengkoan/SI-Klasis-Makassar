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
class __TwigTemplate_f1fe99e1ab57814fa3b5a446fffdbd49abb3a62f07c2d149cac4d7c80db38777 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "superadmin/akun/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "superadmin/akun/view.html.twig"));

        $this->parent = $this->loadTemplate("superadmin/layout.html.twig", "superadmin/akun/view.html.twig", 1);
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
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<div class=\"page-breadcrumb\">
    <div class=\"row\">
        <div class=\"col-7 align-self-center\">
            <h2 class=\"page-title text-truncate text-dark font-weight-medium mb-1\">";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["halaman"]) || array_key_exists("halaman", $context) ? $context["halaman"] : (function () { throw new RuntimeError('Variable "halaman" does not exist.', 12, $this->source); })()), "html", null, true);
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
        $context["fotoAkun"] = ("uploads/akun/" . twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 42, $this->source); })()), "foto", [], "any", false, false, false, 42));
        // line 43
        echo "                                    <img src=\"";
        (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 43, $this->source); })()), "foto", [], "any", false, false, false, 43), null))) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["fotoAkun"]) || array_key_exists("fotoAkun", $context) ? $context["fotoAkun"] : (function () { throw new RuntimeError('Variable "fotoAkun" does not exist.', 43, $this->source); })())), "html", null, true))) : (print ("//placehold.it/150")));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 65, $this->source); })()), "nama", [], "any", false, false, false, 65), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Email</label>
                                    <div class=\"col-lg-9\">
                                        <input class=\"form-control\" type=\"email\" name=\"inpemail\" id=\"inpemail\"
                                            value=\"";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 72, $this->source); })()), "email", [], "any", false, false, false, 72), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Username</label>
                                    <div class=\"col-lg-9\">
                                        <input class=\"form-control\" type=\"text\" name=\"inpusername\" id=\"inpusername\"
                                            value=\"";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 79, $this->source); })()), "username", [], "any", false, false, false, 79), "html", null, true);
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  287 => 138,  277 => 137,  261 => 128,  227 => 96,  223 => 94,  221 => 93,  205 => 79,  195 => 72,  185 => 65,  177 => 60,  173 => 58,  171 => 57,  154 => 43,  152 => 42,  146 => 39,  142 => 37,  123 => 19,  120 => 17,  113 => 12,  108 => 9,  98 => 7,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'superadmin/layout.html.twig' %}

{% block title %}{{ halaman }}{% endblock %}

{% block stylesheet %}{% endblock %}

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
                        {# begin:: foto #}
                        <div class=\"tab-pane active\" id=\"foto\">
                            <form role=\"form\" action=\"/superadmin/akun/upd_foto\" id=\"form-foto\" method=\"post\" >
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('add') }}\">

                                <div class=\"order-lg-1 text-center\">
                                    {% set fotoAkun = 'uploads/akun/'~data.foto %}
                                    <img src=\"{{ (data.foto != null) ? asset(fotoAkun) : \"//placehold.it/150\" }}\" class=\"mx-auto img-fluid d-block\" id=\"lihat-gambar\" alt=\"Profil\" width=\"100\" />
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
                        {# end:: foto #}
                        {# begin:: akun #}
                        <div class=\"tab-pane\" id=\"akun\">
                            <form role=\"form\" action=\"/superadmin/akun/upd_akun\" id=\"form-akun\" method=\"post\">
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('add') }}\">

                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Nama</label>
                                    <div class=\"col-lg-9\">
                                        <input class=\"form-control\" type=\"text\" name=\"inpnama\" id=\"inpnama\" value=\"{{ data.nama }}\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Email</label>
                                    <div class=\"col-lg-9\">
                                        <input class=\"form-control\" type=\"email\" name=\"inpemail\" id=\"inpemail\"
                                            value=\"{{ data.email }}\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Username</label>
                                    <div class=\"col-lg-9\">
                                        <input class=\"form-control\" type=\"text\" name=\"inpusername\" id=\"inpusername\"
                                            value=\"{{ data.username }}\">
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
                        {# end:: akun #}
                        {# end:: keamanan #}
                        <div class=\"tab-pane\" id=\"keamanan\">
                            <form role=\"form\" action=\"/superadmin/akun/upd_keamanan\" id=\"form-keamanan\" method=\"post\">
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('add') }}\">

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
                        {# end:: keamanan #}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{# end:: body #}
{% endblock %}

{% block javascripts %}
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js\"></script>

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
{% endblock %}", "superadmin/akun/view.html.twig", "P:\\Project\\PHP\\si\\SI-Klasis-Makassar\\templates\\superadmin\\akun\\view.html.twig");
    }
}
