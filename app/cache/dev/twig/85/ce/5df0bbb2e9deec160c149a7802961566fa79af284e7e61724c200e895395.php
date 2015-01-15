<?php

/* AcmeDemoBundle:User:mail/restore.html.twig */
class __TwigTemplate_85ce5df0bbb2e9deec160c149a7802961566fa79af284e7e61724c200e895395 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Click this link to change password
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:User:mail/restore.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
