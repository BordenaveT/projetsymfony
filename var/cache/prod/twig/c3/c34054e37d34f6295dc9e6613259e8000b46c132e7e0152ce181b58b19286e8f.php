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

/* base.html.twig */
class __TwigTemplate_2bbe69084eee00701bda222fc3e76e41d13a527d8df66468fade7bf94ae77e74 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>
\t\t<link
\t\trel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
\t\t";
        // line 12
        echo "\t\t";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "
\t\t";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "\t</head>
\t<body>

\t\t";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "\t</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!
\t\t\t";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "\t\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
\t\t";
    }

    // line 16
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "\t\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
\t\t";
    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  106 => 22,  99 => 17,  95 => 16,  88 => 13,  84 => 12,  76 => 6,  70 => 23,  68 => 22,  63 => 19,  61 => 16,  58 => 15,  55 => 12,  50 => 8,  48 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/Users/clementpons/Desktop/STAGE_SLAM/project Symfony/templates/base.html.twig");
    }
}
