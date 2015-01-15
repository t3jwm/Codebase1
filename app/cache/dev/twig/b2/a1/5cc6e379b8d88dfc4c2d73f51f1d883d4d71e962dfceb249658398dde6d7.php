<?php

/* AcmeDemoBundle::layout.html.twig */
class __TwigTemplate_b2a15cc6e379b8d88dfc4c2d73f51f1d883d4d71e962dfceb249658398dde6d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>
            ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "        </title>
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "            ";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "        ";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  42 => 5,  36 => 12,  34 => 10,  27 => 5,  21 => 1,  55 => 14,  49 => 10,  45 => 6,  43 => 9,  38 => 6,  35 => 5,  29 => 7,);
    }
}
