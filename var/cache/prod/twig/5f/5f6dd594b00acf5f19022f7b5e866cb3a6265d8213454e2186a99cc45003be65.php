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

/* index.html.twig */
class __TwigTemplate_0842b42ece6d6bc9449b38507186ce22da5c629f213289ac794cfa876ebe56c5 extends Template
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
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
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
        echo "<main id=\"main\">
    ";
        // line 9
        echo "    <section id=\"events\" class=\"events\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h2> Daftar Gereja Toraja Mamasa <span>Klasis Makassar</span> </h2>
            </div>
            <div class=\"owl-carousel events-carousel\">
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["gereja"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
            // line 16
            echo "                    <div class=\"row event-item\">
                        <div class=\"col-lg-6\">
                            ";
            // line 18
            $context["fotoAkun"] = ("uploads/akun/" . twig_get_attribute($this->env, $this->source, $context["rows"], "foto", [], "any", false, false, false, 18));
            // line 19
            echo "                            <img src=\"";
            (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "foto", [], "any", false, false, false, 19), null))) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["fotoAkun"] ?? null)), "html", null, true))) : (print ("https://www.gambarunik.id/wp-content/uploads/2019/06/Berbagai-Gambar-Foto-Profil-Kosong-Lucu-Untuk-Status.jpg")));
            echo "\" class=\"img-fluid\" alt=\"Profil\" />
                        </div>
                        <div class=\"col-lg-6 pt-4 pt-lg-0 content\">
                            <h2>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama", [], "any", false, false, false, 22), "html", null, true);
            echo "</h2>
                            <p>";
            // line 23
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "tentang", [], "any", false, false, false, 23), 0, 700);
            echo " <a href=\"/gereja/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "id_gereja", [], "any", false, false, false, 23), "html", null, true);
            echo "\" type=\"button\">Selengkapnya . . .</a></p>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "            </div>
        </div>
    </section>
    ";
        // line 31
        echo "
    ";
        // line 33
        echo "    <section id=\"gallery\" class=\"gallery mb-5\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h1> Galery </h1>
            </div>
            <div class=\"row no-gutters\">
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["galeri"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
            // line 40
            echo "                <div class=\"col-lg-3 col-md-4\">
                    <div class=\"gallery-item\">
                        <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/informasi/" . twig_get_attribute($this->env, $this->source, $context["rows"], "gambar", [], "any", false, false, false, 42))), "html", null, true);
            echo "\" class=\"venobox\"
                            data-gall=\"gallery-item\">
                            <img src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/informasi/" . twig_get_attribute($this->env, $this->source, $context["rows"], "gambar", [], "any", false, false, false, 44))), "html", null, true);
            echo "\" alt=\"Galery\" class=\"img-fluid\" />
                        </a>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            </div>
        </div>
    </section>
    ";
        // line 53
        echo "</main>
";
    }

    // line 57
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 57,  148 => 53,  143 => 49,  132 => 44,  127 => 42,  123 => 40,  119 => 39,  111 => 33,  108 => 31,  103 => 27,  91 => 23,  87 => 22,  80 => 19,  78 => 18,  74 => 16,  70 => 15,  62 => 9,  59 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.html.twig", "P:\\Project\\PHP\\si\\SI-Klasis-Makassar\\templates\\index.html.twig");
    }
}
