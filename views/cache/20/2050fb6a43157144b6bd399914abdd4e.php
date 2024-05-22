<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pages/home.twig */
class __TwigTemplate_bd698f51076f864d264fa51b25c43eb0 extends Template
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
        // line 2
        yield "<br>

";
        // line 8
        yield "<div class=\"w3-panel w3-pale-blue w3-leftbar w3-border-blue\">
\t";
        // line 9
        yield ($context["content"] ?? null);
        yield "
</div>

<div class=\"w3-panel w3-pale-blue w3-leftbar w3-border-blue\">
\t<p>Ви можете додати цукерки в базу даних</p>
</div>

<table class=\"w3-table-all\">
\t<tr class=\"w3-blue\">
\t\t<th>ID</th>
\t\t<th>Назва товару</th>
\t\t<th>Кількість товару</th>
\t\t<th>Дія</th>
\t</tr>
\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 24
            yield "\t\t<tr class=\"w3-hover-light-grey\">
\t\t\t<td>";
            // line 25
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
\t\t\t<td>";
            // line 26
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["student"], "name", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
\t\t\t<td>";
            // line 27
            ((CoreExtension::getAttribute($this->env, $this->source, $context["student"], "age", [], "any", true, true, false, 27)) ? (yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["student"], "age", [], "any", false, false, false, 27), "html", null, true)) : (yield "0"));
            yield "</td>
\t\t\t<td>
\t\t\t\t<a href=\"/home/delete?id=";
            // line 29
            yield Twig\Extension\EscaperExtension::escape($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 29), "html", null, true);
            yield "\" class=\"w3-button w3-red\">Видалити</a>
\t\t\t</td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "</table>

<div class=\"w3-container w3-blue w3-padding-16 w3-margin-top\">
\t";
        // line 36
        yield from         $this->loadTemplate("form.twig", "pages/home.twig", 36)->unwrap()->yield($context);
        // line 37
        yield "</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/home.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  99 => 37,  97 => 36,  92 => 33,  82 => 29,  77 => 27,  73 => 26,  69 => 25,  66 => 24,  62 => 23,  45 => 9,  42 => 8,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "pages/home.twig", "D:\\for_sql-main\\views\\pages\\home.twig");
    }
}
