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

/* pages/login.twig */
class __TwigTemplate_e457f58cd13ff2c51844376d4eeb10be extends Template
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
        yield "<div class=\"w3-card-4\">
    <form class=\"w3-container\" method=\"post\">
        <p>
            <label class=\"w3-text-brown\" for=\"login\">
                <b>Login</b>
            </label>
            <input class=\"w3-input w3-border w3-sand\" name=\"login\" id=\"login\" type=\"text\">
        </p>
        <p>
            <button class=\"w3-btn w3-teal\">Login</button>
        </p>
    </form>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/login.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("", "pages/login.twig", "D:\\for_sql-main\\views\\pages\\login.twig");
    }
}
