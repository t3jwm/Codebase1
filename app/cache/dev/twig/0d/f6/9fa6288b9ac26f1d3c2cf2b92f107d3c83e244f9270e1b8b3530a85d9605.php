<?php

/* AcmeDemoBundle:User:restore.html.twig */
class __TwigTemplate_0df69fa6288b9ac26f1d3c2cf2b92f107d3c83e244f9270e1b8b3530a85d9605 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
   

    ";
        // line 9
        if (array_key_exists("message", $context)) {
            // line 10
            echo "        <p>Success, please check Email to change your password</p>
    ";
        } else {
            // line 12
            echo "        ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
            echo "
    ";
        }
        // line 14
        echo "
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:User:restore.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 14,  42 => 12,  38 => 10,  36 => 9,  31 => 6,  28 => 5,);
    }
}
