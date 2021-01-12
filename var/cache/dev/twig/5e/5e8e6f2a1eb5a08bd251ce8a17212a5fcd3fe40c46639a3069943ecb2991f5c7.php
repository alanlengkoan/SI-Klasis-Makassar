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

/* admin/akun/view.html.twig */
class __TwigTemplate_3fda698d8315925188bd12961ccda4ea3c8e5a9b46702d4d746a9f6313becbfc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/akun/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/akun/view.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/akun/view.html.twig", 1);
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
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div class=\"page-breadcrumb\">
    <div class=\"row\">
        <div class=\"col-7 align-self-center\">
            <h2 class=\"page-title text-truncate text-dark font-weight-medium mb-1\">";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["halaman"]) || array_key_exists("halaman", $context) ? $context["halaman"] : (function () { throw new RuntimeError('Variable "halaman" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "</h2>
        </div>
    </div>
</div>
";
        // line 15
        echo "
";
        // line 17
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
                            <a href=\"#\" data-target=\"#lokasi\" data-toggle=\"tab\" class=\"nav-link\">Lokasi</a>
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
        // line 38
        echo "                        <div class=\"tab-pane active\" id=\"foto\">
                            <form role=\"form\" action=\"/admin/akun/upd_foto\" id=\"form-foto\" method=\"post\" >

                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add"), "html", null, true);
        echo "\">

                                <div class=\"order-lg-1 text-center\">
                                    ";
        // line 44
        $context["fotoAkun"] = ("uploads/akun/" . twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 44, $this->source); })()), "foto", [], "any", false, false, false, 44));
        // line 45
        echo "                                    <img src=\"";
        (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 45, $this->source); })()), "foto", [], "any", false, false, false, 45), null))) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["fotoAkun"]) || array_key_exists("fotoAkun", $context) ? $context["fotoAkun"] : (function () { throw new RuntimeError('Variable "fotoAkun" does not exist.', 45, $this->source); })())), "html", null, true))) : (print ("//placehold.it/150")));
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
        // line 59
        echo "                        ";
        // line 60
        echo "                        <div class=\"tab-pane\" id=\"lokasi\">
                            <form role=\"form\" action=\"/admin/akun/upd_lokasi\" id=\"form-lokasi\" method=\"post\">
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add"), "html", null, true);
        echo "\">

                                <div class=\"text-center\">
                                    <div id=\"map\" style=\"height: 400px; width: 100%;\"></div>
                                    <input type=\"hidden\" name=\"inplat\" id=\"inplat\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 66, $this->source); })()), "lat", [], "any", false, false, false, 66), "html", null, true);
        echo "\" readonly=\"readonly\" />
                                    <input type=\"hidden\" name=\"inplon\" id=\"inplon\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 67, $this->source); })()), "lon", [], "any", false, false, false, 67), "html", null, true);
        echo "\" readonly=\"readonly\" />
                                    <br>
                                    <button type=\"submit\" id=\"add-lokasi\" class=\"btn btn-primary btn-sm btn-rounded\">
                                        <i class=\"fas fa-plus\"></i>&nbsp;Simpan
                                    </button>
                                </div>
                            </form>
                        </div>
                        ";
        // line 76
        echo "                        ";
        // line 77
        echo "                        <div class=\"tab-pane\" id=\"akun\">
                            <form role=\"form\" action=\"/admin/akun/upd_akun\" id=\"form-akun\" method=\"post\">
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add"), "html", null, true);
        echo "\">

                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Nama *</label>
                                    <div class=\"col-lg-9\">
                                        <input class=\"form-control\" type=\"text\" name=\"inpnama\" id=\"inpnama\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 84, $this->source); })()), "nama", [], "any", false, false, false, 84), "html", null, true);
        echo "\">
                                        <div id=\"error\"></div>
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Jadwal Ibadah *</label>
                                    <div class=\"col-lg-9\">
                                        <input class=\"form-control\" type=\"text\" name=\"inpjadwalibadah\" id=\"inpjadwalibadah\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 91, $this->source); })()), "jadwal_ibadah", [], "any", false, false, false, 91), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Tentang *</label>
                                    <div class=\"col-lg-9\">
                                        <textarea class=\"form-control\" name=\"inptentang\" id=\"inptentang\" placeholder=\"Masukkan tentang\">";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 97, $this->source); })()), "tentang", [], "any", false, false, false, 97), "html", null, true);
        echo "</textarea>
                                        <div id=\"error\"></div>
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Alamat *</label>
                                    <div class=\"col-lg-9\">
                                        <textarea class=\"form-control\" name=\"inpalamat\" id=\"inpalamat\" rows=\"2\">";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 104, $this->source); })()), "alamat", [], "any", false, false, false, 104), "html", null, true);
        echo "</textarea>
                                        <div id=\"error\"></div>
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">E-mail *</label>
                                    <div class=\"col-lg-9\">
                                        <input class=\"form-control\" type=\"email\" name=\"inpemail\" id=\"inpemail\" value=\"";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 111, $this->source); })()), "email", [], "any", false, false, false, 111), "html", null, true);
        echo "\">
                                        <div id=\"error\"></div>
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Telepon *</label>
                                    <div class=\"col-lg-9\">
                                        <input class=\"form-control\" type=\"text\" name=\"inptelepon\" id=\"inptelepon\" value=\"";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 118, $this->source); })()), "telepon", [], "any", false, false, false, 118), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Twitter</label>
                                    <div class=\"col-lg-9\">
                                        <input class=\"form-control\" type=\"text\" name=\"inptwitter\" id=\"inptwitter\" value=\"";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 124, $this->source); })()), "twitter", [], "any", false, false, false, 124), "html", null, true);
        echo "\" placeholder=\"Masukkan link Twitter\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Instagram</label>
                                    <div class=\"col-lg-9\">
                                        <input class=\"form-control\" type=\"text\" name=\"inpinstagram\" id=\"inpinstagram\" value=\"";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 130, $this->source); })()), "instagram", [], "any", false, false, false, 130), "html", null, true);
        echo "\" placeholder=\"Masukkan link Instagram\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Facebook</label>
                                    <div class=\"col-lg-9\">
                                        <input class=\"form-control\" type=\"text\" name=\"inpfacebook\" id=\"inpfacebook\" value=\"";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 136, $this->source); })()), "facebook", [], "any", false, false, false, 136), "html", null, true);
        echo "\" placeholder=\"Masukkan link Facebook\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Youtube</label>
                                    <div class=\"col-lg-9\">
                                        <input class=\"form-control\" type=\"text\" name=\"inpyoutube\" id=\"inpyoutube\" value=\"";
        // line 142
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 142, $this->source); })()), "youtube", [], "any", false, false, false, 142), "html", null, true);
        echo "\" placeholder=\"Masukkan link Youtube\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Username *</label>
                                    <div class=\"col-lg-9\">
                                        <input class=\"form-control\" type=\"text\" name=\"inpusername\" id=\"inpusername\" value=\"";
        // line 148
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 148, $this->source); })()), "username", [], "any", false, false, false, 148), "html", null, true);
        echo "\">
                                        <div id=\"error\"></div>
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
        // line 163
        echo "                        ";
        // line 164
        echo "                        <div class=\"tab-pane\" id=\"keamanan\">
                            <form role=\"form\" action=\"/admin/akun/upd_keamanan\" id=\"form-keamanan\" method=\"post\">
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add"), "html", null, true);
        echo "\">

                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Password Lama *</label>
                                    <div class=\"col-lg-9\">
                                        <input class=\"form-control\" type=\"password\" name=\"inppasswordlama\" id=\"inppasswordlama\" placeholder=\"Masukkan password lama Anda\">
                                        <div id=\"error\"></div>
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Password Baru *</label>
                                    <div class=\"col-lg-9\">
                                        <input class=\"form-control\" type=\"password\" name=\"inppasswordbaru\" id=\"inppasswordbaru\" placeholder=\"Masukkan password baru Anda\">
                                        <div id=\"error\"></div>
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Ulangi Password Baru *</label>
                                    <div class=\"col-lg-9\">
                                        <input class=\"form-control\" type=\"password\" name=\"inpkonfirmasipassword\" id=\"inpkonfirmasipassword\" placeholder=\"Konfirmasi password baru\">
                                        <div id=\"error\"></div>
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
        // line 200
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

    // line 209
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 210
        echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js\"></script>
<script src=\"https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js\"></script>
<script defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyB-JpweDJ7_cA9-KiEq-iMjQzlluOemnWo&callback=initMap\"></script>

<script>
    // untuk textarea editor
    CKEDITOR.replace('inptentang', {
        language: 'en',
    });

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

    // untuk ubah lokasi
    var untukUbahLokasi = function() {
        var parsleyConfig = {
            errorsContainer: function(parsleyField) {
                var \$err = parsleyField.\$element.siblings('#error');
                return \$err;
            }
        }

        \$('#form-lokasi').parsley(parsleyConfig);

        \$('#form-lokasi').submit(function(e) {
            e.preventDefault();

            if (\$('#form-lokasi').parsley().isValid() == true) {
                \$.ajax({
                    method: \$(this).attr('method'),
                    url: \$(this).attr('action'),
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    beforeSend: function() {
                        \$('#add-lokasi').attr('disabled', 'disabled');
                        \$('#add-lokasi').html('<i class=\"fas fa-spinner\"></i>&nbsp;Waiting');
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

    // untuk akun data
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

            CKEDITOR.instances.inptentang.updateElement();

            \$('#inpnama').attr('required', 'required');
            \$('#inpjadwalibadah').attr('required', 'required');
            \$('#inptentang').attr('required', 'required');
            \$('#inpalamat').attr('required', 'required');
            \$('#inpemail').attr('required', 'required');
            \$('#inptelepon').attr('required', 'required');
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

    // untuk google maps
    function initMap() {
        var getLat = \$('#inplat').val();
        var getLon = \$('#inplon').val();

        var lokasi = {
            lat: parseFloat(getLat),
            lng: parseFloat(getLon)
        };

        var map = new google.maps.Map(
            document.getElementById('map'), {
                center: lokasi,
                zoom: 15,
            });

        if (getLat != \"\" && getLon != \"\") {
            var marker = new google.maps.Marker({
                position: lokasi,
                map: map,
                draggable: true,
                title: 'Lokasi',
            });

            marker.addListener('drag', handleEvent);
            marker.addListener('dragend', handleEvent);

            var infowindow = new google.maps.InfoWindow({
                content: 'Drag untuk pindah lokasi'
            });

            infowindow.open(map, marker);
        } else {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    getLocation(pos['lat'], pos['lng']);

                    var marker = new google.maps.Marker({
                        position: pos,
                        map: map,
                        draggable: true,
                        title: 'Lokasi',
                    });

                    marker.addListener('drag', handleEvent);
                    marker.addListener('dragend', handleEvent);

                    var infowindow = new google.maps.InfoWindow({
                        content: 'Drag untuk pindah lokasi'
                    });

                    infowindow.open(map, marker);

                    map.setCenter(pos);
                }, function () {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                handleLocationError(false, infoWindow, map.getCenter());
            }
        }
    }

    // untuk mengisi latitude dan longitude
    function handleEvent(event) {
        document.getElementById('inplat').value = event.latLng.lat();
        document.getElementById('inplon').value = event.latLng.lng();
    }

    // untuk hasil pencarian lokasi
    function getLocation(lat, lon) {
        document.getElementById('inplat').value = lat;
        document.getElementById('inplon').value = lon;
    }

    // untuk menghandle error geolocation
    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
            'Error: The Geolocation service failed.' :
            'Error: Your browser doesn\\'t support geolocation.');
        infoWindow.open(map);
    }

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
        return "admin/akun/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 210,  367 => 209,  351 => 200,  315 => 166,  311 => 164,  309 => 163,  292 => 148,  283 => 142,  274 => 136,  265 => 130,  256 => 124,  247 => 118,  237 => 111,  227 => 104,  217 => 97,  208 => 91,  198 => 84,  190 => 79,  186 => 77,  184 => 76,  173 => 67,  169 => 66,  162 => 62,  158 => 60,  156 => 59,  139 => 45,  137 => 44,  131 => 41,  126 => 38,  104 => 17,  101 => 15,  94 => 10,  89 => 7,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html.twig' %}

{% block title %}{{ halaman }}{% endblock %}

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
                            <a href=\"#\" data-target=\"#lokasi\" data-toggle=\"tab\" class=\"nav-link\">Lokasi</a>
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
                            <form role=\"form\" action=\"/admin/akun/upd_foto\" id=\"form-foto\" method=\"post\" >

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
                        {# begin:: lokasi #}
                        <div class=\"tab-pane\" id=\"lokasi\">
                            <form role=\"form\" action=\"/admin/akun/upd_lokasi\" id=\"form-lokasi\" method=\"post\">
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('add') }}\">

                                <div class=\"text-center\">
                                    <div id=\"map\" style=\"height: 400px; width: 100%;\"></div>
                                    <input type=\"hidden\" name=\"inplat\" id=\"inplat\" value=\"{{ data.lat }}\" readonly=\"readonly\" />
                                    <input type=\"hidden\" name=\"inplon\" id=\"inplon\" value=\"{{ data.lon }}\" readonly=\"readonly\" />
                                    <br>
                                    <button type=\"submit\" id=\"add-lokasi\" class=\"btn btn-primary btn-sm btn-rounded\">
                                        <i class=\"fas fa-plus\"></i>&nbsp;Simpan
                                    </button>
                                </div>
                            </form>
                        </div>
                        {# end:: lokasi #}
                        {# begin:: akun #}
                        <div class=\"tab-pane\" id=\"akun\">
                            <form role=\"form\" action=\"/admin/akun/upd_akun\" id=\"form-akun\" method=\"post\">
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('add') }}\">

                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Nama *</label>
                                    <div class=\"col-lg-9\">
                                        <input class=\"form-control\" type=\"text\" name=\"inpnama\" id=\"inpnama\" value=\"{{ data.nama }}\">
                                        <div id=\"error\"></div>
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Jadwal Ibadah *</label>
                                    <div class=\"col-lg-9\">
                                        <input class=\"form-control\" type=\"text\" name=\"inpjadwalibadah\" id=\"inpjadwalibadah\" value=\"{{ data.jadwal_ibadah }}\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Tentang *</label>
                                    <div class=\"col-lg-9\">
                                        <textarea class=\"form-control\" name=\"inptentang\" id=\"inptentang\" placeholder=\"Masukkan tentang\">{{ data.tentang }}</textarea>
                                        <div id=\"error\"></div>
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Alamat *</label>
                                    <div class=\"col-lg-9\">
                                        <textarea class=\"form-control\" name=\"inpalamat\" id=\"inpalamat\" rows=\"2\">{{ data.alamat }}</textarea>
                                        <div id=\"error\"></div>
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">E-mail *</label>
                                    <div class=\"col-lg-9\">
                                        <input class=\"form-control\" type=\"email\" name=\"inpemail\" id=\"inpemail\" value=\"{{ data.email }}\">
                                        <div id=\"error\"></div>
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Telepon *</label>
                                    <div class=\"col-lg-9\">
                                        <input class=\"form-control\" type=\"text\" name=\"inptelepon\" id=\"inptelepon\" value=\"{{ data.telepon }}\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Twitter</label>
                                    <div class=\"col-lg-9\">
                                        <input class=\"form-control\" type=\"text\" name=\"inptwitter\" id=\"inptwitter\" value=\"{{ data.twitter }}\" placeholder=\"Masukkan link Twitter\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Instagram</label>
                                    <div class=\"col-lg-9\">
                                        <input class=\"form-control\" type=\"text\" name=\"inpinstagram\" id=\"inpinstagram\" value=\"{{ data.instagram }}\" placeholder=\"Masukkan link Instagram\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Facebook</label>
                                    <div class=\"col-lg-9\">
                                        <input class=\"form-control\" type=\"text\" name=\"inpfacebook\" id=\"inpfacebook\" value=\"{{ data.facebook }}\" placeholder=\"Masukkan link Facebook\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Youtube</label>
                                    <div class=\"col-lg-9\">
                                        <input class=\"form-control\" type=\"text\" name=\"inpyoutube\" id=\"inpyoutube\" value=\"{{ data.youtube }}\" placeholder=\"Masukkan link Youtube\">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Username *</label>
                                    <div class=\"col-lg-9\">
                                        <input class=\"form-control\" type=\"text\" name=\"inpusername\" id=\"inpusername\" value=\"{{ data.username }}\">
                                        <div id=\"error\"></div>
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
                            <form role=\"form\" action=\"/admin/akun/upd_keamanan\" id=\"form-keamanan\" method=\"post\">
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('add') }}\">

                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Password Lama *</label>
                                    <div class=\"col-lg-9\">
                                        <input class=\"form-control\" type=\"password\" name=\"inppasswordlama\" id=\"inppasswordlama\" placeholder=\"Masukkan password lama Anda\">
                                        <div id=\"error\"></div>
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Password Baru *</label>
                                    <div class=\"col-lg-9\">
                                        <input class=\"form-control\" type=\"password\" name=\"inppasswordbaru\" id=\"inppasswordbaru\" placeholder=\"Masukkan password baru Anda\">
                                        <div id=\"error\"></div>
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label class=\"col-lg-3 col-form-label form-control-label\">Ulangi Password Baru *</label>
                                    <div class=\"col-lg-9\">
                                        <input class=\"form-control\" type=\"password\" name=\"inpkonfirmasipassword\" id=\"inpkonfirmasipassword\" placeholder=\"Konfirmasi password baru\">
                                        <div id=\"error\"></div>
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
<script src=\"https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js\"></script>
<script defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyB-JpweDJ7_cA9-KiEq-iMjQzlluOemnWo&callback=initMap\"></script>

<script>
    // untuk textarea editor
    CKEDITOR.replace('inptentang', {
        language: 'en',
    });

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

    // untuk ubah lokasi
    var untukUbahLokasi = function() {
        var parsleyConfig = {
            errorsContainer: function(parsleyField) {
                var \$err = parsleyField.\$element.siblings('#error');
                return \$err;
            }
        }

        \$('#form-lokasi').parsley(parsleyConfig);

        \$('#form-lokasi').submit(function(e) {
            e.preventDefault();

            if (\$('#form-lokasi').parsley().isValid() == true) {
                \$.ajax({
                    method: \$(this).attr('method'),
                    url: \$(this).attr('action'),
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    beforeSend: function() {
                        \$('#add-lokasi').attr('disabled', 'disabled');
                        \$('#add-lokasi').html('<i class=\"fas fa-spinner\"></i>&nbsp;Waiting');
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

    // untuk akun data
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

            CKEDITOR.instances.inptentang.updateElement();

            \$('#inpnama').attr('required', 'required');
            \$('#inpjadwalibadah').attr('required', 'required');
            \$('#inptentang').attr('required', 'required');
            \$('#inpalamat').attr('required', 'required');
            \$('#inpemail').attr('required', 'required');
            \$('#inptelepon').attr('required', 'required');
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

    // untuk google maps
    function initMap() {
        var getLat = \$('#inplat').val();
        var getLon = \$('#inplon').val();

        var lokasi = {
            lat: parseFloat(getLat),
            lng: parseFloat(getLon)
        };

        var map = new google.maps.Map(
            document.getElementById('map'), {
                center: lokasi,
                zoom: 15,
            });

        if (getLat != \"\" && getLon != \"\") {
            var marker = new google.maps.Marker({
                position: lokasi,
                map: map,
                draggable: true,
                title: 'Lokasi',
            });

            marker.addListener('drag', handleEvent);
            marker.addListener('dragend', handleEvent);

            var infowindow = new google.maps.InfoWindow({
                content: 'Drag untuk pindah lokasi'
            });

            infowindow.open(map, marker);
        } else {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function (position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    getLocation(pos['lat'], pos['lng']);

                    var marker = new google.maps.Marker({
                        position: pos,
                        map: map,
                        draggable: true,
                        title: 'Lokasi',
                    });

                    marker.addListener('drag', handleEvent);
                    marker.addListener('dragend', handleEvent);

                    var infowindow = new google.maps.InfoWindow({
                        content: 'Drag untuk pindah lokasi'
                    });

                    infowindow.open(map, marker);

                    map.setCenter(pos);
                }, function () {
                    handleLocationError(true, infoWindow, map.getCenter());
                });
            } else {
                handleLocationError(false, infoWindow, map.getCenter());
            }
        }
    }

    // untuk mengisi latitude dan longitude
    function handleEvent(event) {
        document.getElementById('inplat').value = event.latLng.lat();
        document.getElementById('inplon').value = event.latLng.lng();
    }

    // untuk hasil pencarian lokasi
    function getLocation(lat, lon) {
        document.getElementById('inplat').value = lat;
        document.getElementById('inplon').value = lon;
    }

    // untuk menghandle error geolocation
    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
            'Error: The Geolocation service failed.' :
            'Error: Your browser doesn\\'t support geolocation.');
        infoWindow.open(map);
    }

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
{% endblock %}", "admin/akun/view.html.twig", "P:\\Project\\PHP\\si\\SI-Klasis-Makassar\\templates\\admin\\akun\\view.html.twig");
    }
}
