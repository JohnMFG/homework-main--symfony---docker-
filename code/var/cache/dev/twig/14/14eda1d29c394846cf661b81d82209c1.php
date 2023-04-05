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

/* pages/edit.html.twig */
class __TwigTemplate_f503735da36c5a4c8c98c25ed6f7f580 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <main>
        <div class=\"py-5 bg-light\">
            <div class=\"container\">
                <form class=\"form-container\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
        echo "\" method=\"post\">
                <div class=\"input-row flex-container\">
                <p>Title name</p>
                <input type=\"text\" name=\"articleTitle\" required>
                <p>Choose image</p>
                <input type=\"text\" name=\"image\" required>
                <p>Article text</p>
                <textarea name=\"articleText\" rows=\"8\" placeholder=\"Your Message*\" required></textarea>
                <div class=\"mobile-center\">
                    <button type=\"submit\" name=\"submit\">Save</button>
                </div>
                </div>
                </form>
                <div class=\"py-5 text-center\">
                    <h1 class=\"fw-bold\">LAAAAAAAABBASSS</h1>
                    <p class=\"text-muted\">X minutes</p>
                </div>

                <img class=\"img-fluid\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 25, $this->source); })()), "image", [], "any", false, false, false, 25), "html", null, true);
        echo "\" alt=\"\">

                <div class=\"lead mb-4 py-5\">";
        // line 27
        echo twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 27, $this->source); })()), "text", [], "any", false, false, false, 27);
        echo "</div>

                <div class=\"d-grid gap-2 d-sm-flex justify-content-sm-center\">
                    <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" type=\"button\" class=\"btn btn-secondary btn-lg px-4 gap-3\">Back</a>
                </div>
            </div>
        </div>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "pages/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 30,  90 => 27,  85 => 25,  64 => 7,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block main %}
    <main>
        <div class=\"py-5 bg-light\">
            <div class=\"container\">
                <form class=\"form-container\" action=\"{{article.id}}\" method=\"post\">
                <div class=\"input-row flex-container\">
                <p>Title name</p>
                <input type=\"text\" name=\"articleTitle\" required>
                <p>Choose image</p>
                <input type=\"text\" name=\"image\" required>
                <p>Article text</p>
                <textarea name=\"articleText\" rows=\"8\" placeholder=\"Your Message*\" required></textarea>
                <div class=\"mobile-center\">
                    <button type=\"submit\" name=\"submit\">Save</button>
                </div>
                </div>
                </form>
                <div class=\"py-5 text-center\">
                    <h1 class=\"fw-bold\">LAAAAAAAABBASSS</h1>
                    <p class=\"text-muted\">X minutes</p>
                </div>

                <img class=\"img-fluid\" src=\"{{ article.image }}\" alt=\"\">

                <div class=\"lead mb-4 py-5\">{{ article.text | raw }}</div>

                <div class=\"d-grid gap-2 d-sm-flex justify-content-sm-center\">
                    <a href=\"{{ path('home') }}\" type=\"button\" class=\"btn btn-secondary btn-lg px-4 gap-3\">Back</a>
                </div>
            </div>
        </div>
    </main>
{% endblock %}
", "pages/edit.html.twig", "/code/templates/pages/edit.html.twig");
    }
}
