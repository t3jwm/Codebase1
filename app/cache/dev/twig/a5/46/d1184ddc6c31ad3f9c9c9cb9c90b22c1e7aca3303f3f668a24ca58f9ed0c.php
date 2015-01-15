<?php

/* AcmeDemoBundle:Account:register.html.twig */
class __TwigTemplate_a546d1184ddc6c31ad3f9c9c9cb9c90b22c1e7aca3303f3f668a24ca58f9ed0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::Baselayout.html.twig");

        $this->blocks = array(
            'CssPlus' => array($this, 'block_CssPlus'),
            'linkPlus' => array($this, 'block_linkPlus'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acount_page/css/register.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
";
    }

    // line 5
    public function block_linkPlus($context, array $blocks = array())
    {
        // line 6
        echo "\t<style>
\t\tul li {
\t\t\tcolor: red;
\t\t}
\t</style>
";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "<div class=\"row\">
\t<div class=\"col-xs-12\" id='col-8'>
\t\t<section class =\"content\">
\t\t<h1 id=\"brandRegister\">Register</h1>
\t\t";
        // line 17
        if (((isset($context["success"]) ? $context["success"] : $this->getContext($context, "success")) != "")) {
            // line 18
            echo "\t\t\t<h4 style = 'test-align: center;'><a style =\"color: blue;\" href=\"";
            echo $this->env->getExtension('routing')->getPath("login_login_homepage");
            echo "\" >Success! CLick here to Login</a></h4> 
\t    ";
        }
        // line 20
        echo "\t\t\t
\t    ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t<div class=\"form-group\">
\t\t\t    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\" style=\"padding-left: 0px;\">Login</label>
\t\t\t        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), "userName"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t       \t\t\t\t\t";
        // line 25
        if ($this->getAttribute((isset($context["errs"]) ? $context["errs"] : null), "user.userName", array(), "array", true, true)) {
            // line 26
            echo "\t\t                        \t  <span style=\"color: red; font-size: 11px;\">  ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errs"]) ? $context["errs"] : $this->getContext($context, "errs")), "user.userName", array(), "array"), "html", null, true);
            echo "</span>
\t\t\t                   \t";
        } else {
            // line 27
            echo "\t
\t\t\t                   \t \t";
            // line 28
            if ($this->getAttribute((isset($context["errs"]) ? $context["errs"] : null), "data.user.userName", array(), "array", true, true)) {
                // line 29
                echo "\t\t\t                        \t <span style=\"color: red; font-size: 11px;\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errs"]) ? $context["errs"] : $this->getContext($context, "errs")), "data.user.userName", array(), "array"), "html", null, true);
                echo "</span>
\t\t\t                   \t \t";
            }
            // line 31
            echo "\t\t                   \t \t";
        }
        // line 32
        echo "\t    \t</div>
\t\t\t  
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"inputEmail3\" class=\"col-sm-2 control-label\" style=\"padding-left: 0px;\">Password</label> 
\t\t\t        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), "password"), "first"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t         \t\t\t\t";
        // line 37
        if ($this->getAttribute((isset($context["errs"]) ? $context["errs"] : null), "data.user.password", array(), "array", true, true)) {
            // line 38
            echo "\t                        \t <span style=\"color: red; font-size: 11px;\">  ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errs"]) ? $context["errs"] : $this->getContext($context, "errs")), "data.user.password", array(), "array"), "html", null, true);
            echo "</span>
\t                   \t \t";
        }
        // line 39
        echo "\t\t       
\t\t\t</div>
\t\t\t  
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"inputEmail3\" class=\"col-sm-2 control-label\" style=\"padding-left: 0px;\">Confirm</label>
\t\t\t        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), "password"), "second"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t        \t\t\t";
        // line 45
        if ($this->getAttribute((isset($context["errs"]) ? $context["errs"] : null), "children[user].children[password]", array(), "array", true, true)) {
            // line 46
            echo "\t                        <span style=\"color: red; font-size: 11px;\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errs"]) ? $context["errs"] : $this->getContext($context, "errs")), "children[user].children[password]", array(), "array"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t";
        } else {
            // line 48
            echo "\t\t                   \t \t";
            if ($this->getAttribute((isset($context["errs"]) ? $context["errs"] : null), "data.user.password", array(), "array", true, true)) {
                // line 49
                echo "\t\t                        \t <span style=\"color: red; font-size: 11px;\">  ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errs"]) ? $context["errs"] : $this->getContext($context, "errs")), "data.user.password", array(), "array"), "html", null, true);
                echo "</span>
\t\t                   \t \t";
            }
            // line 51
            echo "\t\t                 ";
        }
        echo "    
\t\t\t </div>
\t\t\t <div class=\"form-group\">
\t\t\t    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\" style=\"padding-left: 0px;\">First name</label>
\t\t\t        ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), "firstName"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t \t\t\t\t\t\t";
        // line 56
        if ($this->getAttribute((isset($context["errs"]) ? $context["errs"] : null), "data.user.firstName", array(), "array", true, true)) {
            // line 57
            echo "\t\t\t                        \t <span style=\"color: red; font-size: 11px;\">  ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errs"]) ? $context["errs"] : $this->getContext($context, "errs")), "data.user.firstName", array(), "array"), "html", null, true);
            echo "</span>
\t\t\t                   \t \t";
        }
        // line 59
        echo "\t\t\t    
\t\t\t </div>
\t\t\t  
\t\t\t <div class=\"form-group\">
\t\t\t \t\t<label for=\"inputEmail3\" class=\"col-sm-2 control-label\" style=\"padding-left: 0px;\">Last name</label>  
\t\t\t      \t";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), "lastName"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t \t\t";
        // line 65
        if ($this->getAttribute((isset($context["errs"]) ? $context["errs"] : null), "data.user.lastName", array(), "array", true, true)) {
            // line 66
            echo "\t                 \t<span style=\"color: red; font-size: 11px;\">  ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errs"]) ? $context["errs"] : $this->getContext($context, "errs")), "data.user.firstName", array(), "array"), "html", null, true);
            echo " </span>
\t\t\t        ";
        }
        // line 67
        echo "  
\t\t\t  </div>
\t\t\t  
\t\t\t  <div class=\"form-group\">
\t\t\t    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\" style=\"padding-left: 0px;\">Email</label>
\t\t\t        ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), "email"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t \t\t";
        // line 73
        if ($this->getAttribute((isset($context["errs"]) ? $context["errs"] : null), "data.user.email", array(), "array", true, true)) {
            // line 74
            echo "\t                     <span style=\"color: red; font-size: 11px;\">  ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errs"]) ? $context["errs"] : $this->getContext($context, "errs")), "data.user.email", array(), "array"), "html", null, true);
            echo " </span>
\t                ";
        }
        // line 75
        echo "  
\t\t\t  </div>
\t\t\t  
\t\t\t    
\t\t\t  <div class=\"form-group\">
\t\t\t    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\" style=\"padding-left: 0px; text-al\">Language</label>
\t\t\t        ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), "language"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t        ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), "language"), 'errors');
        echo " 
\t\t\t  </div>
\t\t\t  
\t\t  <button class = 'btn btn-primary btn-lg active' type = 'reset' id =\"btnReset\" >Reset</button>\t
\t\t\t   ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Register"), 'widget', array("attr" => array("class" => "btn btn-primary btn-lg active btnRegister")));
        echo "\t\t\t\t
\t  \t";
        // line 87
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</section>
\t</div>
</div>
 ";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Account:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 87,  227 => 86,  220 => 82,  216 => 81,  208 => 75,  202 => 74,  200 => 73,  196 => 72,  189 => 67,  183 => 66,  181 => 65,  177 => 64,  170 => 59,  164 => 57,  162 => 56,  158 => 55,  150 => 51,  144 => 49,  141 => 48,  135 => 46,  133 => 45,  129 => 44,  122 => 39,  116 => 38,  114 => 37,  110 => 36,  104 => 32,  101 => 31,  95 => 29,  93 => 28,  90 => 27,  84 => 26,  82 => 25,  78 => 24,  72 => 21,  69 => 20,  63 => 18,  61 => 17,  55 => 13,  52 => 12,  43 => 6,  40 => 5,  33 => 3,  30 => 2,);
    }
}
