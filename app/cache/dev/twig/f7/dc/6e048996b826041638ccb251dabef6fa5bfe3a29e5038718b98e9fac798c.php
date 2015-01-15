<?php

/* AcmeDemoBundle:Demo:register.html.twig */
class __TwigTemplate_f7dc6e048996b826041638ccb251dabef6fa5bfe3a29e5038718b98e9fac798c extends Twig_Template
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
        echo "\t
\t";
    }

    // line 6
    public function block_Javascript($context, array $blocks = array())
    {
        // line 7
        echo "window.onload = function () {
\tdocument.getElementById(\"password\").onchange = validatePassword;
\tdocument.getElementById(\"passwordRe\").onchange = validatePassword;
}
function validatePassword(){
var pass2=document.getElementById(\"passwordRe\").value;
var pass1=document.getElementById(\"password\").value;
if(pass1!=pass2)
\tdocument.getElementById(\"passwordRe\").setCustomValidity(\"Passwords Don't Match\");
else
\tdocument.getElementById(\"passwordRe\").setCustomValidity('');\t 
//empty string means no validation error
}

";
    }

    // line 23
    public function block_CSSForm($context, array $blocks = array())
    {
        // line 24
        echo "#col-8 {
//background-color: #3c3c3c;
background-color: rgba(65,74,90, 0.8);
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
\twidth: 79%;
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

    // line 143
    public function block_body($context, array $blocks = array())
    {
        // line 144
        echo "<div class=\"row\">
\t\t<div class=\"col-xs-2\"></div>
\t\t<div class=\"col-xs-8\" id='col-8'>
\t\t<section id=\"content\">
\t\t\t<form class=\"form-horizontal\" role=\"form\" method=\"POST\" action=\"";
        // line 148
        echo $this->env->getExtension('routing')->getPath("account_register");
        echo "\">
\t\t\t
\t\t\t<h1>Register</h1>
  <div class=\"form-group\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Login</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" class=\"form-control\" placeholder=\"User Name\" required=\"true\" name= \"userName\" id='userName'>
    </div>
  </div>
  
  <div class=\"form-group\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Password</label>
    <div class=\"col-sm-10\">
      <input type=\"password\" class=\"form-control\" placeholder=\"Password\" required=\"true\" name= 'password' id='password' min=\"3\" max=\"5\" >
    </div>
  </div>
  
  <div class=\"form-group\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Confirmation</label>
    <div class=\"col-sm-10\">
      <input type=\"password\" class=\"form-control\"  placeholder=\"Repeat Password\" required=\"true\" name= \"passwordRe\" id='passwordRe' >
    </div>
  </div>
  
   <div class=\"form-group\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">First name</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" class=\"form-control\"  placeholder=\"First Name\" required=\"true\" name= \"firstName\" id='firstName' >
    </div>
  </div>
  
    <div class=\"form-group\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Last name</label>
    <div class=\"col-sm-10\">
      <input type=\"text\" class=\"form-control\"  placeholder=\"Last Name\" required=\"true\" name= \"lastName\" id='lastName' >
    </div>
  </div>
  
  <div class=\"form-group\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Email</label>
    <div class=\"col-sm-10\">
      <input type=\"email\" class=\"form-control\"  placeholder=\"Email\" required=\"true\" name= \"email\" id='email' >
    </div>
  </div>
  
    
  <div class=\"form-group\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">Language</label>
    <div class=\"col-sm-10\" style='width: 30%;'>
      <select name='language' id='language' class=\"form-control\" >
\t\t  <option value=\"English\">Volvo</option>
\t\t  <option value=\"France\">Saab</option>
\t\t  <option value=\"Vietnamese\">Mercedes</option>
\t\t  <option value=\"Chinese\">Audi</option>
\t\t</select>
      
      
    </div>
  </div>
  
  
  

  <div class=\"form-group\">
    <div class=\"col-sm-offset-2 col-sm-10\">
      
      <button type=\"submit\" class=\"btn btn-primary btn-lg active\" style='margin-left: -19%;'>Submit</button>
    </div>
  </div>
</form>
</section>
\t\t</div>
\t\t<div class=\"col-xs-2\"></div>
\t</div>
\t
\t

 ";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 148,  188 => 144,  185 => 143,  63 => 24,  60 => 23,  42 => 7,  39 => 6,  34 => 4,  31 => 3,);
    }
}
