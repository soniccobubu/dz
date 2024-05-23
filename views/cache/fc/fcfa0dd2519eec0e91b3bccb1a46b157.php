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

/* nav.twig */
class __TwigTemplate_4adfec6fa16e9b1d26fbf78f51b7c801 extends Template
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
        yield "<ul>
    <li><a href=\"/\">
            HOME
        </a></li>
    <li><a href=\"/about\">ABOUT</a></li>
    <li><a href=\"/contacts\">CONTACTS</a></li>
    <li><a href=\"/footer\">FOOTER</a></li>
    <li><a href=\"/catalogue\">CATALOGUE</a></li>
    ";
        // line 9
        if (($context["isUserLoggedIn"] ?? null)) {
            // line 10
            yield "        <a href=\"/logout\" class=\"w3-bar-item w3-right\">
            LOGOUT
        </a>
    ";
        } else {
            // line 14
            yield "        <a href=\"/login\" class=\"w3-bar-item w3-right\">
            LOGIN
        </a>
    ";
        }
        // line 18
        yield "
</ul>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "nav.twig";
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
        return array (  62 => 18,  56 => 14,  50 => 10,  48 => 9,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "nav.twig", "D:\\for_sql-main\\views\\nav.twig");
    }
}
