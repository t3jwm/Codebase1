<?php

/* AcmeDemoBundle:Account:register.html.twig */
class __TwigTemplate_b5aadadc198d32b39a37f4cbc0bec6fdac5cb047a972e95827aeeb55a39b6453 extends Twig_Template
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
\tmargin-left:24%;
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
\twidth: 75%;
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
\t\t<div class=\"col-xs-2\"></div>
\t\t<div class=\"col-xs-8\" id='col-8'>
\t\t<section id=\"content\">
\t\t<h1>Register</h1>
\t\t
\t
\t\t";
        // line 143
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t<div class=\"form-group\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Login</label>
        ";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), "userName"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
         ";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), "userName"), 'errors');
        echo "
    
  </div>
  
  <div class=\"form-group\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Password</label>
   
     
        ";
        // line 155
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), "password"), "first"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
         ";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), "password"), "first"), 'errors');
        echo "
   
  </div>
  
  <div class=\"form-group\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Confirm</label>
    
     
        ";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), "password"), "second"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
         ";
        // line 165
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), "password"), "second"), 'errors');
        echo "
    
  </div>
  
   <div class=\"form-group\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">First name</label>
    
      
        ";
        // line 173
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), "firstName"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
         ";
        // line 174
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), "firstName"), 'errors');
        echo "
    
  </div>
  
   <div class=\"form-group\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Last name</label>
    
    
        
      ";
        // line 183
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), "lastName"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
          ";
        // line 184
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), "lastName"), 'errors');
        echo "
   
  </div>
  
  <div class=\"form-group\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Email</label>
    
     
        ";
        // line 192
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), "email"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
         ";
        // line 193
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), "email"), 'errors');
        echo "
    
  </div>
  
    
  <div class=\"form-group\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Language</label>
   
  
        ";
        // line 202
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), "language"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
           ";
        // line 203
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), "language"), 'errors');
        echo "
      
      
    
  </div>
  
  
   ";
        // line 210
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Register"), 'widget', array("attr" => array("class" => "btn btn-primary btn-lg active")));
        echo "
<h3 style = 'color: blue; text-align:center;'>";
        // line 211
        echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : $this->getContext($context, "success")), "html", null, true);
        echo "</h3>
\t\t\t\t\t\t";
        // line 212
        if (((isset($context["success"]) ? $context["success"] : $this->getContext($context, "success")) != "")) {
            // line 213
            echo "\t\t\t      \t\t<h4 style = 'test-align: center;'><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login_login_homepage");
            echo "\" >CLick here to Login</a></h4> 
\t\t\t      \t\t";
        }
        // line 215
        echo "\t\t\t\t\t
  ";
        // line 216
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t




</section>
\t\t</div>
\t\t<div class=\"col-xs-2\"></div>
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
        return array (  320 => 216,  317 => 215,  311 => 213,  309 => 212,  305 => 211,  301 => 210,  291 => 203,  287 => 202,  275 => 193,  271 => 192,  260 => 184,  256 => 183,  244 => 174,  240 => 173,  229 => 165,  225 => 164,  214 => 156,  210 => 155,  199 => 147,  195 => 146,  189 => 143,  180 => 136,  177 => 135,  54 => 15,  51 => 14,  46 => 11,  43 => 10,  34 => 4,  31 => 3,);
    }
}
