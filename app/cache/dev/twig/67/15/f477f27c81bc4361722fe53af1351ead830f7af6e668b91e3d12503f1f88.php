<?php

/* AcmeDemoBundle:User:mail/restoreConfirm.html.twig */
class __TwigTemplate_6715f477f27c81bc4361722fe53af1351ead830f7af6e668b91e3d12503f1f88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout_mail.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout_mail.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo ", Ð’Ð°Ñˆ Ð¿Ð°Ñ€Ð¾Ð»ÑŒ Ð½Ð° Ñ�Ð°Ð¹Ñ‚Ðµ ";
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : $this->getContext($context, "site_name")), "html", null, true);
        echo " Ð±Ñ‹Ð» ÑƒÑ�Ð¿ÐµÑˆÐ½Ð¾ Ð¸Ð·Ð¼ÐµÐ½ÐµÐ½!

Ð”Ð»Ñ� Ð²Ñ…Ð¾Ð´Ð° Ð¸Ñ�Ð¿Ð¾Ð»ÑŒÐ·ÑƒÐ¹Ñ‚Ðµ Ð½Ð¾Ð²Ñ‹Ð¹ Ð¿Ð°Ñ€Ð¾Ð»ÑŒ: ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["password"]) ? $context["password"] : $this->getContext($context, "password")), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:User:mail/restoreConfirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  31 => 4,  28 => 3,);
    }
}
