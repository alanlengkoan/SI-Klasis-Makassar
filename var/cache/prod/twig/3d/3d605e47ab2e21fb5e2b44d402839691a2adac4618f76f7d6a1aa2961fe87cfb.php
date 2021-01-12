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

/* berita_det.html.twig */
class __TwigTemplate_eae677bd658248e2fa5787d937225c82e87aaf9992b86a0c337e2d63dcdda328 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "berita_det.html.twig", 1);
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
    }

    // line 7
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<h4 class=\"text-light\">
    <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"> Home </a> <span> / ";
        echo twig_escape_filter($this->env, ($context["halaman"] ?? null), "html", null, true);
        echo "
</h4>
";
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "<main id=\"main\">
    <section id=\"about\" class=\"about\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 ftco-animate\">
                    <h2 class=\"mb-3\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["berita"] ?? null), "judul", [], "any", false, false, false, 20), "html", null, true);
        echo "</h2>
                    <p><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/informasi/" . twig_get_attribute($this->env, $this->source, ($context["berita"] ?? null), "gambar", [], "any", false, false, false, 21))), "html", null, true);
        echo "\" alt=\"Images\" class=\"img-fluid\"></p>
                    ";
        // line 22
        echo twig_get_attribute($this->env, $this->source, ($context["berita"] ?? null), "isi", [], "any", false, false, false, 22);
        echo "
                </div>
            </div>
        </div>
    </section>
</main>
";
    }

    // line 31
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "berita_det.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 31,  98 => 22,  94 => 21,  90 => 20,  83 => 15,  79 => 13,  70 => 9,  67 => 8,  63 => 7,  57 => 5,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "berita_det.html.twig", "P:\\Project\\PHP\\si\\SI-Klasis-Makassar\\templates\\berita_det.html.twig");
    }
}
