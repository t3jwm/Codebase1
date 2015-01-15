<?php

/* AcmeDemoBundle:Account:register.html.twig */
class __TwigTemplate_56be6f273c807b9d6547d21fb99ca6a47b9238f5f8b805ef5f7bf6d53a14c6c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::Baselayout.html.twig");

        $this->blocks = array(
            'linkPlus' => array($this, 'block_linkPlus'),
            'Javascript' => array($this, 'block_Javascript'),
            'CSSForm' => array($this, 'block_CSSForm'),
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

    // line 3
    public function block_linkPlus($context, array $blocks = array())
    {
        // line 4
        echo "\t<style>
\tul li {
\tcolor: red;
\t}
\t</style>
\t";
    }

    // line 10
    public function block_Javascript($context, array $blocks = array())
    {
        // line 11
        echo "
";
    }

    // line 14
    public function block_CSSForm($context, array $blocks = array())
    {
        // line 15
        echo "#col-8 {
//background-color: #3c3c3c;
background-color: rgba(164, 190, 235, 0.8);
//border: solid 1px rgba(0, 0, 0, 0.2);
//border-radius: 10px;
//box-shadow: 0 1px 12px rgba(0, 0, 0, 0.5);
padding: 50px 30px 20px;
}
.control-label {
\tcolor: black;
\tfont-size: 110%;
}
.form-control {
\twidth: 75%;
\tmargin-left:15%;
}
h1{ font-size:28px;
color:#563D64;
}


#content {
\tbackground: #f9f9f9;
\tbackground: -moz-linear-gradient(top,  rgba(248,248,248,1) 0%, rgba(249,249,249,1) 100%);
\tbackground: -webkit-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(209, 216, 235,1) 100%);
\tbackground: -o-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
\tbackground: -ms-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
\tbackground: linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
\tfilter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f8f8f8', endColorstr='#f9f9f9',GradientType=0 );
\t-webkit-box-shadow: 0 1px 0 #fff inset;
\t-moz-box-shadow: 0 1px 0 #fff inset;
\t-ms-box-shadow: 0 1px 0 #fff inset;
\t-o-box-shadow: 0 1px 0 #fff inset;
\tbox-shadow: 0 1px 0 #fff inset;
\tborder: 1px solid #c4c6ca;
\tmargin: 0 auto;
\tpadding: 25px 0 0;
\tposition: relative;
\ttext-align: center;
\ttext-shadow: 0 1px 0 #fff;
\twidth: 550px;
\t
\tbackground-color: rgba(172, 172, 172, 0.3);
border: solid 1px rgba(0, 0, 0, 0.2);
border-radius: 10px;
box-shadow: 0 1px 12px rgba(0, 0, 0, 0.5);
padding: 50px 30px 20px;
}
#content h1 {
\tcolor: #7E7E7E;
\tfont: bold 25px Helvetica, Arial, sans-serif;
\tletter-spacing: -0.05em;
\tline-height: 20px;
\tmargin: 10px 0 30px;
}
#content h1:before,
#content h1:after {
\tcontent: \"\";
\theight: 1px;
\tposition: absolute;
\ttop: 10px;
\twidth: 27%;
}
#content h1:after {
\tbackground: rgb(126,126,126);
\tbackground: -moz-linear-gradient(left,  rgba(126,126,126,1) 0%, rgba(255,255,255,1) 100%);
\tbackground: -webkit-linear-gradient(left,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
\tbackground: -o-linear-gradient(left,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
\tbackground: -ms-linear-gradient(left,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
\tbackground: linear-gradient(left,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
    right: 0;
}
#content h1:before {
\tbackground: rgb(126,126,126);
\tbackground: -moz-linear-gradient(right,  rgba(126,126,126,1) 0%, rgba(255,255,255,1) 100%);
\tbackground: -webkit-linear-gradient(right,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
\tbackground: -o-linear-gradient(right,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
\tbackground: -ms-linear-gradient(right,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
\tbackground: linear-gradient(right,  rgba(126,126,126,1) 0%,rgba(255,255,255,1) 100%);
    left: 0;
}
#content:after,
#content:before {
\tbackground: #f9f9f9;
\tbackground: -moz-linear-gradient(top,  rgba(248,248,248,1) 0%, rgba(249,249,249,1) 100%);
\tbackground: -webkit-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
\tbackground: -o-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
\tbackground: -ms-linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
\tbackground: linear-gradient(top,  rgba(248,248,248,1) 0%,rgba(249,249,249,1) 100%);
\tfilter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f8f8f8', endColorstr='#f9f9f9',GradientType=0 );
\tborder: 1px solid #c4c6ca;
\tcontent: \"\";
\tdisplay: block;
\theight: 100%;
\tleft: -1px;
\tposition: absolute;
\twidth: 100%;
}
#content:after {
\t-webkit-transform: rotate(2deg);
\t-moz-transform: rotate(2deg);
\t-ms-transform: rotate(2deg);
\t-o-transform: rotate(2deg);
\ttransform: rotate(2deg);
\ttop: 0;
\tz-index: -1;
}
#content:before {
\t-webkit-transform: rotate(-3deg);
\t-moz-transform: rotate(-3deg);
\t-ms-transform: rotate(-3deg);
\t-o-transform: rotate(-3deg);
\ttransform: rotate(-3deg);
\ttop: 0;
\tz-index: -2;
}
#content form { margin: 0 20px; position: relative }


";
    }

    // line 135
    public function block_body($context, array $blocks = array())
    {
        // line 136
        echo "<div class=\"row\">
\t
\t\t<div class=\"col-xs-12\" id='col-8'>
\t\t<section id=\"content\">
\t\t<h1>Register</h1>
\t\t
\t
\t";
        // line 143
        if (((isset($context["success"]) ? $context["success"] : $this->getContext($context, "success")) != "")) {
            // line 144
            echo "\t\t\t      \t\t<h4 style = 'test-align: center;'><a style =\"color: blue;\" href=\"";
            echo $this->env->getExtension('routing')->getPath("login_login_homepage");
            echo "\" >Success! CLick here to Login</a></h4> 
\t\t\t      \t\t";
        }
        // line 146
        echo "\t\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t<div class=\"form-group\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\" style=\"
    padding-left: 0px;\">Login</label>
        ";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), "userName"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
       
       
       \t\t\t\t\t";
        // line 153
        if ($this->getAttribute((isset($context["errs"]) ? $context["errs"] : null), "user.userName", array(), "array", true, true)) {
            // line 154
            echo "                        \t  <span style=\"color: red; font-size: 11px;\">  ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errs"]) ? $context["errs"] : $this->getContext($context, "errs")), "user.userName", array(), "array"), "html", null, true);
            echo "</span>
                        \t   
                   \t \t
\t                   \t";
        } else {
            // line 158
            echo "\t   \t\t\t\t\t\t
\t                   \t \t";
            // line 159
            if ($this->getAttribute((isset($context["errs"]) ? $context["errs"] : null), "data.user.userName", array(), "array", true, true)) {
                // line 160
                echo "\t                        \t <span style=\"color: red; font-size: 11px;\"> User name already taken</span>
\t                   \t \t";
            }
            // line 162
            echo "                   \t \t";
        }
        // line 163
        echo "      
       
   
 
   

    
  </div>
  
  <div class=\"form-group\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\" style=\"padding-left: 0px;\">Password</label>
   
     
        ";
        // line 176
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), "password"), "first"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        
         \t\t\t\t";
        // line 178
        if ($this->getAttribute((isset($context["errs"]) ? $context["errs"] : null), "data.user.password", array(), "array", true, true)) {
            // line 179
            echo "                        \t <span style=\"color: red; font-size: 11px;\">  ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errs"]) ? $context["errs"] : $this->getContext($context, "errs")), "data.user.password", array(), "array"), "html", null, true);
            echo "</span>
                   \t \t";
        }
        // line 181
        echo "                   \t \t
                   \t \t
                   \t
                   \t \t
                   \t \t
       
   
  </div>
  
  <div class=\"form-group\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\" style=\"padding-left: 0px;\">Confirm</label>
    
     
        ";
        // line 194
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), "password"), "second"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        \t\t\t\t";
        // line 195
        if ($this->getAttribute((isset($context["errs"]) ? $context["errs"] : null), "children[user].children[password]", array(), "array", true, true)) {
            // line 196
            echo "                        \t  <span style=\"color: red; font-size: 11px;\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errs"]) ? $context["errs"] : $this->getContext($context, "errs")), "children[user].children[password]", array(), "array"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t";
        } else {
            // line 198
            echo "                   \t \t
                   \t \t ";
            // line 199
            if ($this->getAttribute((isset($context["errs"]) ? $context["errs"] : null), "data.user.password", array(), "array", true, true)) {
                // line 200
                echo "                        \t <span style=\"color: red; font-size: 11px;\">  ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errs"]) ? $context["errs"] : $this->getContext($context, "errs")), "data.user.password", array(), "array"), "html", null, true);
                echo "</span>
                   \t \t";
            }
            // line 202
            echo "                   \t \t\t";
        }
        // line 203
        echo "    
  </div>
  
   <div class=\"form-group\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\" style=\"padding-left: 0px;\">First name</label>
    
      
        ";
        // line 210
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), "firstName"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
 \t\t\t\t\t\t";
        // line 211
        if ($this->getAttribute((isset($context["errs"]) ? $context["errs"] : null), "data.user.firstName", array(), "array", true, true)) {
            // line 212
            echo "                        \t <span style=\"color: red; font-size: 11px;\">  ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errs"]) ? $context["errs"] : $this->getContext($context, "errs")), "data.user.firstName", array(), "array"), "html", null, true);
            echo "</span>
                   \t \t";
        }
        // line 214
        echo "    
  </div>
  
   <div class=\"form-group\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\" style=\"padding-left: 0px;\">Last name</label>
    
    
        
      ";
        // line 222
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), "lastName"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
 ";
        // line 223
        if ($this->getAttribute((isset($context["errs"]) ? $context["errs"] : null), "data.user.lastName", array(), "array", true, true)) {
            // line 224
            echo "                        \t <span style=\"color: red; font-size: 11px;\">  ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errs"]) ? $context["errs"] : $this->getContext($context, "errs")), "data.user.firstName", array(), "array"), "html", null, true);
            echo " </span>
                   \t \t";
        }
        // line 226
        echo "   
  </div>
  
  <div class=\"form-group\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\" style=\"padding-left: 0px;\">Email</label>
    
     
        ";
        // line 233
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), "email"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
 ";
        // line 234
        if ($this->getAttribute((isset($context["errs"]) ? $context["errs"] : null), "data.user.email", array(), "array", true, true)) {
            // line 235
            echo "                        \t <span style=\"color: red; font-size: 11px;\">  ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["errs"]) ? $context["errs"] : $this->getContext($context, "errs")), "data.user.email", array(), "array"), "html", null, true);
            echo " </span>
                   \t \t";
        }
        // line 237
        echo "         
        
    
  </div>
  
    
  <div class=\"form-group\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\" style=\"padding-left: 0px; text-al\">Language</label>
   
  
        ";
        // line 247
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), "language"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
           ";
        // line 248
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), "language"), 'errors');
        echo "
      
      
    
  </div>
  
  <button class = 'btn btn-primary btn-lg active' type = 'reset' style = \"margin-right: 10px;\">Reset</button>\t
   ";
        // line 255
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Register"), 'widget', array("attr" => array("class" => "btn btn-primary btn-lg active")));
        echo "

\t\t\t\t\t\t
\t\t\t\t\t
  ";
        // line 259
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "





</section>
\t\t</div>
\t\t
\t</div>
\t



  

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
        return array (  399 => 259,  392 => 255,  382 => 248,  378 => 247,  366 => 237,  360 => 235,  358 => 234,  354 => 233,  345 => 226,  339 => 224,  337 => 223,  333 => 222,  323 => 214,  317 => 212,  315 => 211,  311 => 210,  302 => 203,  299 => 202,  293 => 200,  291 => 199,  288 => 198,  282 => 196,  280 => 195,  276 => 194,  261 => 181,  255 => 179,  253 => 178,  248 => 176,  233 => 163,  230 => 162,  226 => 160,  224 => 159,  221 => 158,  213 => 154,  211 => 153,  205 => 150,  197 => 146,  191 => 144,  189 => 143,  180 => 136,  177 => 135,  54 => 15,  51 => 14,  46 => 11,  43 => 10,  34 => 4,  31 => 3,);
    }
}
