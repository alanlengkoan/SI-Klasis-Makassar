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
class __TwigTemplate_cc5c2ae1a368ef4619aad86b03e2c5967c07ae616977dcb946ae56f34472a505 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/laporan/laporan_kas/tabel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/laporan/laporan_kas/tabel.html.twig"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["keuangan"]) || array_key_exists("keuangan", $context) ? $context["keuangan"] : (function () { throw new RuntimeError('Variable "keuangan" does not exist.', 25, $this->source); })()));
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
            $context["saldo_m"] = ((isset($context["saldo_m"]) || array_key_exists("saldo_m", $context) ? $context["saldo_m"] : (function () { throw new RuntimeError('Variable "saldo_m" does not exist.', 26, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["rows"], "debit", [], "any", false, false, false, 26));
            // line 27
            echo "                            ";
            $context["saldo_k"] = ((isset($context["saldo_k"]) || array_key_exists("saldo_k", $context) ? $context["saldo_k"] : (function () { throw new RuntimeError('Variable "saldo_k" does not exist.', 27, $this->source); })()) - twig_get_attribute($this->env, $this->source, $context["rows"], "kredit", [], "any", false, false, false, 27));
            // line 28
            echo "                            ";
            $context["saldo"] = ((isset($context["saldo_m"]) || array_key_exists("saldo_m", $context) ? $context["saldo_m"] : (function () { throw new RuntimeError('Variable "saldo_m" does not exist.', 28, $this->source); })()) + (isset($context["saldo_k"]) || array_key_exists("saldo_k", $context) ? $context["saldo_k"] : (function () { throw new RuntimeError('Variable "saldo_k" does not exist.', 28, $this->source); })()));
            // line 29
            echo "                            ";
            $context["debit"] = ((isset($context["debit"]) || array_key_exists("debit", $context) ? $context["debit"] : (function () { throw new RuntimeError('Variable "debit" does not exist.', 29, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["rows"], "debit", [], "any", false, false, false, 29));
            // line 30
            echo "                            ";
            $context["kredit"] = ((isset($context["kredit"]) || array_key_exists("kredit", $context) ? $context["kredit"] : (function () { throw new RuntimeError('Variable "kredit" does not exist.', 30, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["rows"], "kredit", [], "any", false, false, false, 30));
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
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga((isset($context["saldo"]) || array_key_exists("saldo", $context) ? $context["saldo"] : (function () { throw new RuntimeError('Variable "saldo" does not exist.', 38, $this->source); })())), "html", null, true);
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
        $context["total"] = ((isset($context["debit"]) || array_key_exists("debit", $context) ? $context["debit"] : (function () { throw new RuntimeError('Variable "debit" does not exist.', 42, $this->source); })()) - (isset($context["kredit"]) || array_key_exists("kredit", $context) ? $context["kredit"] : (function () { throw new RuntimeError('Variable "kredit" does not exist.', 42, $this->source); })()));
        // line 43
        echo "                                <td colspan=\"4\" align=\"center\">Total</td>
                                <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga((isset($context["debit"]) || array_key_exists("debit", $context) ? $context["debit"] : (function () { throw new RuntimeError('Variable "debit" does not exist.', 44, $this->source); })())), "html", null, true);
        echo "</td>
                                <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga((isset($context["kredit"]) || array_key_exists("kredit", $context) ? $context["kredit"] : (function () { throw new RuntimeError('Variable "kredit" does not exist.', 45, $this->source); })())), "html", null, true);
        echo "</td>
                                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 46, $this->source); })())), "html", null, true);
        echo "</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  169 => 46,  165 => 45,  161 => 44,  158 => 43,  156 => 42,  153 => 41,  136 => 38,  132 => 37,  128 => 36,  124 => 35,  120 => 34,  116 => 33,  112 => 32,  109 => 31,  106 => 30,  103 => 29,  100 => 28,  97 => 27,  94 => 26,  76 => 25,  73 => 24,  70 => 23,  67 => 22,  65 => 21,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
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
                            {% set saldo_m = 0 %}
                            {% set saldo_k = 0 %}
                            {% set debit = 0 %}
                            {% set kredit = 0 %}
                            {% for rows in keuangan %}
                            {% set saldo_m = (saldo_m + rows.debit) %}
                            {% set saldo_k = (saldo_k - rows.kredit) %}
                            {% set saldo = (saldo_m + saldo_k) %}
                            {% set debit = debit + rows.debit %}
                            {% set kredit = kredit + rows.kredit %}
                            <tr>
                                <td>{{ loop.index }}</td>
                                <td>{{ rows.tanggal|date('d-m-Y') }}</td>
                                <td>{{ rows.nama_keuangan }}</td>
                                <td>{{ rows.keterangan }}</td>
                                <td>{{ rows.debit|format_rp }}</td>
                                <td>{{ rows.kredit|format_rp }}</td>
                                <td>{{ saldo|format_rp }}</td>
                            </tr>
                            {% endfor %}
                            <tr>
                                {% set total = debit - kredit %}
                                <td colspan=\"4\" align=\"center\">Total</td>
                                <td>{{ debit|format_rp }}</td>
                                <td>{{ kredit|format_rp }}</td>
                                <td>{{ total|format_rp }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>", "admin/laporan/laporan_kas/tabel.html.twig", "P:\\Project\\PHP\\si\\SI-Klasis-Makassar\\templates\\admin\\laporan\\laporan_kas\\tabel.html.twig");
    }
}
