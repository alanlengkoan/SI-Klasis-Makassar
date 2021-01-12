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

/* superadmin/galeri/view.html.twig */
class __TwigTemplate_ce6f1147feee8de2c1a644db3477d1c1f55993c4dc9c4c10af326f201245deed extends Template
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
        $this->parent = $this->loadTemplate("superadmin/layout.html.twig", "superadmin/galeri/view.html.twig", 1);
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
                    <h3 class=\"card-title\">Tabel</h3>
                    <hr>
                    <div class=\"table-responsive\">
                        <table id=\"tabel-galeri\" class=\"table table-striped table-bordered display no-wrap\" style=\"width:100%\">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Kategori</th>
                                    <th>Judul</th>
                                    <th>Isi</th>
                                    <th>Tanggal Posting</th>
                                    <th>Status Lihat</th>
                                    <th>Status Galeri</th>
                                    <th>Gambar</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 44
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
            // line 45
            echo "                                <tr>
                                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama_kategori", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "judul", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                                    <td>";
            // line 49
            echo twig_get_attribute($this->env, $this->source, $context["rows"], "isi", [], "any", false, false, false, 49);
            echo "</td>
                                    <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "tanggal_publish", [], "any", false, false, false, 50), "d-m-Y H:i"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 51
            echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "status", [], "any", false, false, false, 51), "1"))) ? ("Aktif") : ("Tidak Aktif"));
            echo "</td>
                                    <td>
                                        <button class=\"btn ";
            // line 53
            echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "status_galeri", [], "any", false, false, false, 53), "1"))) ? ("btn-outline-success") : ("btn-outline-danger"));
            echo " btn-sm btn-rounded\" id=\"sts\" data-sts=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "status_galeri", [], "any", false, false, false, 53), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "id_informasi", [], "any", false, false, false, 53), "html", null, true);
            echo "\"><i class=\"fas ";
            echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "status_galeri", [], "any", false, false, false, 53), "1"))) ? ("fa-unlock") : ("fa-lock"));
            echo "\"></i>&nbsp;";
            echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "status_galeri", [], "any", false, false, false, 53), "1"))) ? ("Aktif") : ("Tidak Aktif"));
            echo "</button>
                                    </td>
                                    <td>
                                        <img src=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/informasi/" . twig_get_attribute($this->env, $this->source, $context["rows"], "gambar", [], "any", false, false, false, 56))), "html", null, true);
            echo "\" width=\"100\"
                                            heigth=\"100\" />
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
        // line 61
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 69
        echo "</div>
";
    }

    // line 73
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo ".
<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/dist/js/pages/datatable/datatable-basic.init.js"), "html", null, true);
        echo "\"></script>

<script>
    // untuk datatable
    var untukDataTabel = function() {
        \$('#tabel-galeri').DataTable();
    }();

    // untuk hapus data
    var untukStatusData = function() {
        \$(document).on('click', '#sts', function() {
            var id = \$(this).data('id');
            var sts = \$(this).data('sts');

            \$.ajax({
                type: \"post\",
                url: \"galeri/upd_status\",
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
</script>
";
    }

    public function getTemplateName()
    {
        return "superadmin/galeri/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 75,  210 => 74,  204 => 73,  199 => 69,  190 => 61,  171 => 56,  157 => 53,  152 => 51,  148 => 50,  144 => 49,  140 => 48,  136 => 47,  132 => 46,  129 => 45,  112 => 44,  89 => 23,  86 => 21,  83 => 19,  76 => 14,  71 => 11,  67 => 9,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "superadmin/galeri/view.html.twig", "P:\\Project\\PHP\\si\\SI-Klasis-Makassar\\templates\\superadmin\\galeri\\view.html.twig");
    }
}
