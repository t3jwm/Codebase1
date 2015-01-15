<?php

/* AcmeDemoBundle:Account:login.html.twig */
class __TwigTemplate_03c0ac869c9d544dce4e93abb37df4d05882da8f931ca65c12c98c8e1db7da9b extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acount_page/css/login.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<div class=\"row\">
\t\t
\t<div class=\"col-xs-12\" id='col-8'>
\t\t<div class=\"container\" style=\"height: 516px;\">
\t\t\t<section id=\"content\" style=\"height: 400px;\">
\t\t\t\t<form method=\"POST\" action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("login_login_homepage");
        echo "\">
\t\t\t\t\t<h1>Login Form</h1>
\t\t\t\t\t<div style=\"margin-top: 60px;\">
\t\t\t\t\t\t<input type=\"text\" placeholder=\"Username\" required=\"\" id=\"username\" name = \"userName\" maxlength=\"100\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<input type=\"password\" placeholder=\"Password\" required=\"\" id=\"password\" name =\"password\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div id = \"btnLogin\">
\t\t\t\t\t\t<input type=\"submit\" value=\"Log in\" style=\" margin-bottom: 5px;  margin-top: 10px;\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div style='clear: both;'>
\t\t\t\t\t\t";
        // line 25
        if (((isset($context["isLoginSuccess"]) ? $context["isLoginSuccess"] : $this->getContext($context, "isLoginSuccess")) != "")) {
            // line 26
            echo "\t\t\t      \t\t\t<h4 style = 'color: red;'>UserName or Password don't match, Try a gain!</h4> 
\t\t\t      \t\t";
        }
        // line 28
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("restore");
        echo "\" style=\"color: blue;\">Forgot the password</a>
\t\t\t\t</form><!-- form -->
\t\t\t\t
\t\t\t\t<div class=\"button\" id= \"btnRegister\">
\t\t\t\t\t<a style = 'text-align: center;' href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("account_register");
        echo "\">Register now</a>
\t\t\t\t</div><!-- button -->
\t\t\t</section><!-- content -->
\t\t</div><!-- container -->
\t</div>
\t\t
</div>

 ";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Account:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 33,  74 => 29,  71 => 28,  67 => 26,  65 => 25,  50 => 13,  42 => 7,  39 => 6,  32 => 3,  29 => 2,);
    }
}
