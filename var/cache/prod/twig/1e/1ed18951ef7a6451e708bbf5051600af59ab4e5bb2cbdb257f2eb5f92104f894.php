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

/* berita.html.twig */
class __TwigTemplate_26965d8d6fc154a039b52956bb3426babaf8423ec7e289af61a34e12ce20f295 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
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
        $this->parent = $this->loadTemplate("layout.html.twig", "berita.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["halaman"] ?? null), "html", null, true);
    }

    // line 5
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<h4 class=\"text-light\">
    <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"> Home </a> <span> / ";
        echo twig_escape_filter($this->env, ($context["halaman"] ?? null), "html", null, true);
        echo "
</h4>
";
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "<main id=\"main\">
    <section id=\"about\" class=\"about\">
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["berita"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
            // line 17
            echo "                    <div class=\"col-lg-4 col-md-6 mb-4\">
                        <div class=\"post-entry-1 h-100\">
                            <a href=\"/berita/";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "id_informasi", [], "any", false, false, false, 19), "html", null, true);
            echo "\">
                                <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/informasi/" . twig_get_attribute($this->env, $this->source, $context["rows"], "gambar", [], "any", false, false, false, 20))), "html", null, true);
            echo "\" alt=\"Image\" class=\"img-fluid\" />
                            </a>
                            <div class=\"post-entry-1-contents\">
                                <h2><a href=\"/berita/";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "id_informasi", [], "any", false, false, false, 23), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "judul", [], "any", false, false, false, 23), "html", null, true);
            echo "</a></h2>
                                <span class=\"meta d-inline-block mb-3\">
                                    ";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "tanggal_publish", [], "any", false, false, false, 25), "d-m-Y"), "html", null, true);
            echo "
                                    <span class=\"mx-2\">by</span> ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "gereja", [], "any", false, false, false, 26), "html", null, true);
            echo "
                                </span>
                                ";
            // line 28
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "isi", [], "any", false, false, false, 28), 0, 500);
            echo " <a href=\"/berita/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "id_informasi", [], "any", false, false, false, 28), "html", null, true);
            echo "\">Selengkapnya . . .</a>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            </div>
        </div>
    </section>
</main>
";
    }

    // line 39
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "berita.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 39,  129 => 33,  116 => 28,  111 => 26,  107 => 25,  100 => 23,  94 => 20,  90 => 19,  86 => 17,  82 => 16,  76 => 12,  72 => 11,  63 => 7,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "berita.html.twig", "P:\\Project\\PHP\\si\\SI-Klasis-Makassar\\templates\\berita.html.twig");
    }
}
