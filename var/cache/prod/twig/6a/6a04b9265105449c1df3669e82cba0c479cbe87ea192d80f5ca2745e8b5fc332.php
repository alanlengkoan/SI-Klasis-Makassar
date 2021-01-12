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
class __TwigTemplate_e4f5f617a8b349a60a5258ce4a06541fa235d0f260eeb605e6c628037fa63bfe extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["halaman"]) || array_key_exists("halaman", $context) ? $context["halaman"] : (function () { throw new RuntimeError('Variable "halaman" does not exist.', 3, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["gereja"]) || array_key_exists("gereja", $context) ? $context["gereja"] : (function () { throw new RuntimeError('Variable "gereja" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
            // line 16
            echo "                    <div class=\"row event-item\">
                        <div class=\"col-lg-6\">
                            ";
            // line 18
            $context["fotoAkun"] = ("uploads/akun/" . twig_get_attribute($this->env, $this->source, $context["rows"], "foto", [], "any", false, false, false, 18));
            // line 19
            echo "                            <img src=\"";
            (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "foto", [], "any", false, false, false, 19), null))) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["fotoAkun"]) || array_key_exists("fotoAkun", $context) ? $context["fotoAkun"] : (function () { throw new RuntimeError('Variable "fotoAkun" does not exist.', 19, $this->source); })())), "html", null, true))) : (print ("https://www.gambarunik.id/wp-content/uploads/2019/06/Berbagai-Gambar-Foto-Profil-Kosong-Lucu-Untuk-Status.jpg")));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["galeri"]) || array_key_exists("galeri", $context) ? $context["galeri"] : (function () { throw new RuntimeError('Variable "galeri" does not exist.', 39, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  171 => 57,  163 => 53,  158 => 49,  147 => 44,  142 => 42,  138 => 40,  134 => 39,  126 => 33,  123 => 31,  118 => 27,  106 => 23,  102 => 22,  95 => 19,  93 => 18,  89 => 16,  85 => 15,  77 => 9,  74 => 7,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}{{ halaman }}{% endblock %}

{% block body %}
{# begin:: body #}
<main id=\"main\">
    {# begin:: gereja #}
    <section id=\"events\" class=\"events\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h2> Daftar Gereja Toraja Mamasa <span>Klasis Makassar</span> </h2>
            </div>
            <div class=\"owl-carousel events-carousel\">
                {% for rows in gereja %}
                    <div class=\"row event-item\">
                        <div class=\"col-lg-6\">
                            {% set fotoAkun = 'uploads/akun/'~rows.foto %}
                            <img src=\"{{ (rows.foto != null) ? asset(fotoAkun) : \"https://www.gambarunik.id/wp-content/uploads/2019/06/Berbagai-Gambar-Foto-Profil-Kosong-Lucu-Untuk-Status.jpg\" }}\" class=\"img-fluid\" alt=\"Profil\" />
                        </div>
                        <div class=\"col-lg-6 pt-4 pt-lg-0 content\">
                            <h2>{{ rows.nama }}</h2>
                            <p>{{ rows.tentang[:700]|raw }} <a href=\"/gereja/{{ rows.id_gereja }}\" type=\"button\">Selengkapnya . . .</a></p>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </section>
    {# end:: gereja #}

    {# begin:: galery #}
    <section id=\"gallery\" class=\"gallery mb-5\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h1> Galery </h1>
            </div>
            <div class=\"row no-gutters\">
                {% for rows in galeri %}
                <div class=\"col-lg-3 col-md-4\">
                    <div class=\"gallery-item\">
                        <a href=\"{{ asset('uploads/informasi/'~rows.gambar) }}\" class=\"venobox\"
                            data-gall=\"gallery-item\">
                            <img src=\"{{ asset('uploads/informasi/'~rows.gambar) }}\" alt=\"Galery\" class=\"img-fluid\" />
                        </a>
                    </div>
                </div>
                {% endfor %}
            </div>
        </div>
    </section>
    {# end:: galery #}
</main>
{# end:: body #}
{% endblock %}

{% block javascripts %}{% endblock %}", "index.html.twig", "P:\\Project\\PHP\\si\\SI-Klasis-Makassar\\templates\\index.html.twig");
    }
}
