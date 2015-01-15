<?php

/* AcmeDemoBundle:Account:restore.html.twig */
class __TwigTemplate_0d3e77bb31aad9ea52775a727e7fc321cec0b1fdaa51c18f22fe884076e58a15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::Baselayout.html.twig");

        $this->blocks = array(
            'CssPlus' => array($this, 'block_CssPlus'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::Baselayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_CssPlus($context, array $blocks = array())
    {
        // line 3
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acount_page/css/restoreEmail.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"row\">
\t\t
\t\t<div class=\"col-xs-12\" id='col-8' style=\" height: 586px;\">
\t\t<div class=\"container\">
\t<section id=\"content\" style= \"margin-top: 25px; margin-bottom: 120px;\">
\t\t<form method=\"POST\" action=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
        echo "\">
\t\t\t<h1>Restore Form</h1>
\t\t\t<div>
\t\t\t\t<input type=\"text\" placeholder=\"Username\" required=\"\" id=\"username\" name = \"userName\" maxlength=\"100\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo "\" disabled/>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<input type=\"password\" placeholder=\"Password\" required=\"\" class=\"password\" id=\"password\" name =\"password\" />
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<input type=\"password\" placeholder=\"Confirm \" required=\"\" class=\"password\" id=\"password\" name =\"passwordConfirm\" />
\t\t\t\t
\t\t\t</div>
\t\t\t
\t\t ";
        // line 25
        if (array_key_exists("errs", $context)) {
            echo " 
 \t\t\t<span style=\"color: red;\">";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["errs"]) ? $context["errs"] : $this->getContext($context, "errs")), "html", null, true);
            echo " </span>
 ";
        }
        // line 28
        echo "\t\t\t
\t\t\t<div>
\t\t\t\t<input type=\"submit\" value=\"Restore\" />
\t\t\t\t
\t\t\t
\t\t\t</div>
\t\t\t
\t\t\t<div style='clear: both;'>
\t\t\t
\t\t\t</div>
\t\t\t
\t\t</form><!-- form -->
\t\t

\t</section><!-- content -->
</div><!-- container -->
\t\t</div>
\t\t
\t</div>

 ";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Account:restore.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 28,  73 => 26,  69 => 25,  56 => 15,  50 => 12,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
