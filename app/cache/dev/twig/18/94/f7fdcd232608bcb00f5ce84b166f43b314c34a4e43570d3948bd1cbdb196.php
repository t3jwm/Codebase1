<?php

/* AcmeDemoBundle:Account:login.html.twig */
class __TwigTemplate_1894f7fdcd232608bcb00f5ce84b166f43b314c34a4e43570d3948bd1cbdb196 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::Baselayout.html.twig");

        $this->blocks = array(
            'CssPlus' => array($this, 'block_CssPlus'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
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
\t\t<div class=\"container\" style=\"height: 600px;\">
\t\t\t<section id=\"content\" style=\"height: 424px;\">
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
        echo "\" style=\"color: blue;\">Forgot Your Password?</a>
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
        // line 40
        $this->displayBlock('footer', $context, $blocks);
        // line 71
        echo " ";
    }

    // line 40
    public function block_footer($context, array $blocks = array())
    {
        // line 41
        echo "   \t<footer class = \"footer navbar-fixed-bottom\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                     <ul class=\"list-inline quicklinks\" style=\" margin-top: 0px;\">
                        <li><a href=\"#\" style='color: white; font-size: 13px;'>Terms of Service </a>
                        </li>
                        <li><a href=\"#\" style='color: white; font-size: 13px;'>Privacy Policy </a>
                        </li>
                    </ul>
                </div>
                <div class=\"col-md-4\">
                    <ul class=\"list-inline quicklinks\" style=\" margin-top: 0px;\">
                        <li><a href=\"#\" style='color: white; font-size: 13px;'>About </a>
                        </li>
                        <li><a href=\"#\" style='color: white; font-size: 13px;'>Follow </a>
                        </li>
                        
                    </ul>
                </div>
                <div class=\"col-md-4\" >
                    
                    <span class=\"copyright\" style='color: white; font-size: 13px;'>&copy 2014 Green Mountain Apps LLC. All rights reserved.</span>
                </div>
            </div>
        </div>
    </footer>
   \t
    
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
        return array (  101 => 41,  98 => 40,  94 => 71,  92 => 40,  82 => 33,  75 => 29,  72 => 28,  68 => 26,  66 => 25,  51 => 13,  43 => 7,  40 => 6,  33 => 3,  30 => 2,);
    }
}
