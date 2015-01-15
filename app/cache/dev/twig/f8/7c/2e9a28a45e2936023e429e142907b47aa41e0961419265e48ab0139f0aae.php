<?php

/* AcmeDemoBundle::layout_mail.html.twig */
class __TwigTemplate_f87c2e9a28a45e2936023e429e142907b47aa41e0961419265e48ab0139f0aae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('content', $context, $blocks);
        // line 2
        echo "
";
    }

    // line 1
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::layout_mail.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  27 => 1,  22 => 2,  20 => 1,);
    }
}
