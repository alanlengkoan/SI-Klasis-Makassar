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

/* kontak.html.twig */
class __TwigTemplate_86f0ca600bc17284857d629a7e005c623c49c7ab7be775a5bc83dc6cddcd5191 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "kontak.html.twig", 1);
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
    <section id=\"contact\" class=\"contact\">
        <div class=\"container\">
            <div class=\"info-wrap\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-md-6 info\">
                        <i class=\"icofont-google-map\"></i>
                        <h4>Lokasi:</h4>
                        <p>Kompleks Perumahan JE Residence, No.2, Jl. Inspeksi Kanal Racing, RT.005/RW.008, Kel. Tamamaung, Kec. Panakkukang, Makassar, Sulawesi Selatan</p>
                    </div>

                    <div class=\"col-lg-3 col-md-6 info mt-4 mt-lg-0\">
                        <i class=\"icofont-clock-time icofont-rotate-90\"></i>
                        <h4>Jam Operasional:</h4>
                        <p>Monday-Saturday:<br>11:00 AM - 2300 PM</p>
                    </div>

                    <div class=\"col-lg-3 col-md-6 info mt-4 mt-lg-0\">
                        <i class=\"icofont-envelope\"></i>
                        <h4>Email:</h4>
                        <p>info@example.com<br>contact@example.com</p>
                    </div>
                    <div class=\"col-lg-3 col-md-6 info mt-4 mt-lg-0\">
                        <i class=\"icofont-phone\"></i>
                        <h4>Telepon:</h4>
                        <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id=\"map\" style=\"height: 500px;width: 100%;position: relative;overflow: hidden;\">
        <iframe style=\"height: 500px; width: 100%;\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d993.4131453659148!2d119.42336782915007!3d-5.159475999765986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNcKwMDknMzQuMSJTIDExOcKwMjUnMjYuMSJF!5e0!3m2!1sid!2sid!4v1605096938918!5m2!1sid!2sid\" frameborder=\"0\" allowfullscreen></iframe>
    </div>
</main>
";
    }

    // line 50
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "kontak.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 50,  76 => 12,  72 => 11,  63 => 7,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "kontak.html.twig", "P:\\Project\\PHP\\si\\SI-Klasis-Makassar\\templates\\kontak.html.twig");
    }
}
