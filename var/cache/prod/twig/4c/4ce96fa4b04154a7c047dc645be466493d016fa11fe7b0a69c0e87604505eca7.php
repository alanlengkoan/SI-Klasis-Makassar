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

/* admin/laporan/laporan_kas/view.html.twig */
class __TwigTemplate_b8beef9d3d9d282475d9af70f661f4942f54e7dcb2ca9e996a55396b3a3f22ae extends Template
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
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/laporan/laporan_kas/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["halaman"] ?? null), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<div class=\"page-breadcrumb\">
    <div class=\"row\">
        <div class=\"col-7 align-self-center\">
            <h2 class=\"page-title text-truncate text-dark font-weight-medium mb-1\">";
        // line 10
        echo twig_escape_filter($this->env, ($context["halaman"] ?? null), "html", null, true);
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
    ";
        // line 19
        echo "    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h3 class=\"card-title\">Form</h3>
                    <hr>
                    <form action=\"/admin/laporan_keuangan\" id=\"form-add\" method=\"post\">
                        <div class=\"form-group\">                            
                            <h4 class=\"card-title\">Dari *</h4>
                            <input type=\"date\" class=\"form-control form-control-sm\" name=\"inpbegin\" id=\"inpbegin\" />
                            <div id=\"error\"></div>
                        </div>
                        <div class=\"form-group\">                            
                            <h4 class=\"card-title\">Sampai *</h4>
                            <input type=\"date\" class=\"form-control form-control-sm\" name=\"inpend\" id=\"inpend\" />
                            <div id=\"error\"></div>
                        </div>
                        <button type=\"submit\" id=\"show\" class=\"btn btn-outline-primary btn-sm btn-rounded\">
                            <i class=\"fas fa-eye\"></i>&nbsp;Lihat
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 45
        echo "
    ";
        // line 47
        echo "    <div id=\"lihat-tabel\"></div>
    ";
        // line 49
        echo "</div>
";
    }

    // line 53
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js\"></script>

<script>
    // untuk lihat data
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

            \$('#inpbegin').attr('required', 'required');
            \$('#inpend').attr('required', 'required');

            if (\$('#form-add').parsley().isValid() == true) {
                \$.ajax({
                    method: \$(this).attr('method'),
                    url: \$(this).attr('action'),
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    dataType: 'html',
                    beforeSend: function() {
                        \$('#show').attr('disabled', 'disabled');
                        \$('#show').html('<i class=\"fas fa-spinner\"></i>&nbsp;Menunggu');
                    },
                    success: function(data) {
                        \$('#lihat-tabel').html(data);

                        \$('#show').removeAttr('disabled');
                        \$('#show').html('<i class=\"fas fa-eye\"></i>&nbsp;Lihat');
                    }
                })
            }
        });
    }();
</script>
";
    }

    public function getTemplateName()
    {
        return "admin/laporan/laporan_kas/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 54,  115 => 53,  110 => 49,  107 => 47,  104 => 45,  77 => 19,  74 => 17,  71 => 15,  64 => 10,  59 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/laporan/laporan_kas/view.html.twig", "P:\\Project\\PHP\\si\\SI-Klasis-Makassar\\templates\\admin\\laporan\\laporan_kas\\view.html.twig");
    }
}
