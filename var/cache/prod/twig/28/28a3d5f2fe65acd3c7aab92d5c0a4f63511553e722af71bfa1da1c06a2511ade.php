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

/* admin/laporan/laporan_kas/tabel.html.twig */
class __TwigTemplate_8a93b2d8bc618bbd9ae23f5b3b17e7003fb8646c1d758211e6230f8283de2396 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"row\">
    <div class=\"col-12\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h3 class=\"card-title\">Tabel</h3>
                <hr>
                <div class=\"table-responsive\">
                    <table class=\"table table-striped table-bordered display no-wrap\" style=\"width:100%\">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Tanggal</th>
                                <th>Keuangan</th>
                                <th>Keterangan</th>
                                <th>Masuk (Debit)</th>
                                <th>Keluar (Kredit)</th>
                                <th>Saldo</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 21
        $context["saldo_m"] = 0;
        // line 22
        echo "                            ";
        $context["saldo_k"] = 0;
        // line 23
        echo "                            ";
        $context["debit"] = 0;
        // line 24
        echo "                            ";
        $context["kredit"] = 0;
        // line 25
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["keuangan"] ?? null));
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
            // line 26
            echo "                            ";
            $context["saldo_m"] = (($context["saldo_m"] ?? null) + twig_get_attribute($this->env, $this->source, $context["rows"], "debit", [], "any", false, false, false, 26));
            // line 27
            echo "                            ";
            $context["saldo_k"] = (($context["saldo_k"] ?? null) - twig_get_attribute($this->env, $this->source, $context["rows"], "kredit", [], "any", false, false, false, 27));
            // line 28
            echo "                            ";
            $context["saldo"] = (($context["saldo_m"] ?? null) + ($context["saldo_k"] ?? null));
            // line 29
            echo "                            ";
            $context["debit"] = (($context["debit"] ?? null) + twig_get_attribute($this->env, $this->source, $context["rows"], "debit", [], "any", false, false, false, 29));
            // line 30
            echo "                            ";
            $context["kredit"] = (($context["kredit"] ?? null) + twig_get_attribute($this->env, $this->source, $context["rows"], "kredit", [], "any", false, false, false, 30));
            // line 31
            echo "                            <tr>
                                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "tanggal", [], "any", false, false, false, 33), "d-m-Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama_keuangan", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "keterangan", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "debit", [], "any", false, false, false, 36)), "html", null, true);
            echo "</td>
                                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "kredit", [], "any", false, false, false, 37)), "html", null, true);
            echo "</td>
                                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(($context["saldo"] ?? null)), "html", null, true);
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
        // line 41
        echo "                            <tr>
                                ";
        // line 42
        $context["total"] = (($context["debit"] ?? null) - ($context["kredit"] ?? null));
        // line 43
        echo "                                <td colspan=\"4\" align=\"center\">Total</td>
                                <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(($context["debit"] ?? null)), "html", null, true);
        echo "</td>
                                <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(($context["kredit"] ?? null)), "html", null, true);
        echo "</td>
                                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(($context["total"] ?? null)), "html", null, true);
        echo "</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "admin/laporan/laporan_kas/tabel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 46,  159 => 45,  155 => 44,  152 => 43,  150 => 42,  147 => 41,  130 => 38,  126 => 37,  122 => 36,  118 => 35,  114 => 34,  110 => 33,  106 => 32,  103 => 31,  100 => 30,  97 => 29,  94 => 28,  91 => 27,  88 => 26,  70 => 25,  67 => 24,  64 => 23,  61 => 22,  59 => 21,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/laporan/laporan_kas/tabel.html.twig", "P:\\Project\\PHP\\si\\SI-Klasis-Makassar\\templates\\admin\\laporan\\laporan_kas\\tabel.html.twig");
    }
}
