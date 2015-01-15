<?php

/* AcmeDemoBundle:Account:restore.html.twig */
class __TwigTemplate_48466fd627cbdfe59f093793741183dd54c48efd5124a34f4205bf95da4d0de1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::Baselayout.html.twig");

        $this->blocks = array(
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

    // line 2
    public function block_CSSForm($context, array $blocks = array())
    {
        // line 3
        echo "body {
\t//background: #DCDDDF url(http://cssdeck.com/uploads/media/items/7/7AF2Qzt.png);
\tcolor: #000;
\tfont: 14px Arial;
\tmargin: 0 auto;
\tpadding: 0;
\tposition: relative;
}
#col-8 {
//background-color: #3c3c3c;
background-color: rgba(164, 190, 235, 0.8);
//border: solid 1px rgba(0, 0, 0, 0.2);
//border-radius: 10px;
//box-shadow: 0 1px 12px rgba(0, 0, 0, 0.5);
padding: 50px 30px 20px;
}
h1{ font-size:28px;}
h2{ font-size:26px;}
h3{ font-size:18px;}
h4{ font-size:16px;}
h5{ font-size:14px;}
h6{ font-size:12px;}
h1,h2,h3,h4,h5,h6{ color:#563D64;}
small{ font-size:10px;}
b, strong{ font-weight:bold;}
a{ text-decoration: none; }
a:hover{ text-decoration: underline; }
.left { float:left; }
.right { float:right; }
.alignleft { float: left; margin-right: 15px; }
.alignright { float: right; margin-left: 15px; }
.clearfix:after,
form:after {
\tcontent: \".\";
\tdisplay: block;
\theight: 0;
\tclear: both;
\tvisibility: hidden;
}
.container { margin: 0px auto; position: relative; width:100%; }
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
\twidth: 480px;
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
#content form input[type=\"text\"],
#content form input[type=\"password\"] {
\t-webkit-border-radius: 3px;
\t-moz-border-radius: 3px;
\t-ms-border-radius: 3px;
\t-o-border-radius: 3px;
\tborder-radius: 3px;
\t-webkit-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
\t-moz-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
\t-ms-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
\t-o-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
\tbox-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
\t-webkit-transition: all 0.5s ease;
\t-moz-transition: all 0.5s ease;
\t-ms-transition: all 0.5s ease;
\t-o-transition: all 0.5s ease;
\ttransition: all 0.5s ease;
\tbackground: #eae7e7 url(http://cssdeck.com/uploads/media/items/8/8bcLQqF.png) no-repeat;
\tborder: 1px solid #c8c8c8;
\tcolor: #777;
\tfont: 13px Helvetica, Arial, sans-serif;
\tmargin: 0 0 10px;
\tpadding: 15px 10px 15px 40px;
\twidth: 80%;
}
#content form input[type=\"text\"]:focus,
#content form input[type=\"password\"]:focus {
\t-webkit-box-shadow: 0 0 2px #ed1c24 inset;
\t-moz-box-shadow: 0 0 2px #ed1c24 inset;
\t-ms-box-shadow: 0 0 2px #ed1c24 inset;
\t-o-box-shadow: 0 0 2px #ed1c24 inset;
\tbox-shadow: 0 0 2px #ed1c24 inset;
\tbackground-color: #fff;
\tborder: 1px solid #ed1c24;
\toutline: none;
}
#username { background-position: 10px 10px !important }
.password { background-position: 10px -53px !important }
#content form input[type=\"submit\"] {
\tbackground: rgb(254,231,154);
\tbackground: -moz-linear-gradient(top,  rgba(254,231,154,1) 0%, rgba(254,193,81,1) 100%);
\tbackground: -webkit-linear-gradient(top,  rgba(254,231,154,1) 0%,rgba(254,193,81,1) 100%);
\tbackground: -o-linear-gradient(top,  rgba(254,231,154,1) 0%,rgba(254,193,81,1) 100%);
\tbackground: -ms-linear-gradient(top,  rgba(254,231,154,1) 0%,rgba(254,193,81,1) 100%);
\tbackground: linear-gradient(top,  rgba(254,231,154,1) 0%,rgba(254,193,81,1) 100%);
\tfilter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fee79a', endColorstr='#fec151',GradientType=0 );
\t-webkit-border-radius: 30px;
\t-moz-border-radius: 30px;
\t-ms-border-radius: 30px;
\t-o-border-radius: 30px;
\tborder-radius: 30px;
\t-webkit-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
\t-moz-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
\t-ms-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
\t-o-box-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
\tbox-shadow: 0 1px 0 rgba(255,255,255,0.8) inset;
\tborder: 1px solid #D69E31;
\tcolor: #85592e;
\tcursor: pointer;
\tfloat: left;
\tfont: bold 15px Helvetica, Arial, sans-serif;
\theight: 35px;
\tmargin: 20px 0 35px 15px;
\tposition: relative;
\ttext-shadow: 0 1px 0 rgba(255,255,255,0.5);
\twidth: 120px;
}
#content form input[type=\"submit\"]:hover {
\tbackground: rgb(254,193,81);
\tbackground: -moz-linear-gradient(top,  rgba(254,193,81,1) 0%, rgba(254,231,154,1) 100%);
\tbackground: -webkit-linear-gradient(top,  rgba(254,193,81,1) 0%,rgba(254,231,154,1) 100%);
\tbackground: -o-linear-gradient(top,  rgba(254,193,81,1) 0%,rgba(254,231,154,1) 100%);
\tbackground: -ms-linear-gradient(top,  rgba(254,193,81,1) 0%,rgba(254,231,154,1) 100%);
\tbackground: linear-gradient(top,  rgba(254,193,81,1) 0%,rgba(254,231,154,1) 100%);
\tfilter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fec151', endColorstr='#fee79a',GradientType=0 );
}
#content form div a {
\tcolor: #004a80;
    float: right;
    font-size: 12px;
    margin: 30px 15px 0 0;
    text-decoration: underline;
}
.button {
\tbackground: rgb(247,249,250);
\tbackground: -moz-linear-gradient(top,  rgba(247,249,250,1) 0%, rgba(240,240,240,1) 100%);
\tbackground: -webkit-linear-gradient(top,  rgba(247,249,250,1) 0%,rgba(240,240,240,1) 100%);
\tbackground: -o-linear-gradient(top,  rgba(247,249,250,1) 0%,rgba(240,240,240,1) 100%);
\tbackground: -ms-linear-gradient(top,  rgba(247,249,250,1) 0%,rgba(240,240,240,1) 100%);
\tbackground: linear-gradient(top,  rgba(247,249,250,1) 0%,rgba(240,240,240,1) 100%);
\tfilter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f7f9fa', endColorstr='#f0f0f0',GradientType=0 );
\t-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
\t-moz-box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
\t-ms-box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
\t-o-box-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
\tbox-shadow: 0 1px 2px rgba(0,0,0,0.1) inset;
\t-webkit-border-radius: 0 0 5px 5px;
\t-moz-border-radius: 0 0 5px 5px;
\t-o-border-radius: 0 0 5px 5px;
\t-ms-border-radius: 0 0 5px 5px;
\tborder-radius: 0 0 5px 5px;
\tborder-top: 1px solid #CFD5D9;
\tpadding: 15px 0;
}
.button a {
\tbackground: url(http://cssdeck.com/uploads/media/items/8/8bcLQqF.png) 0 -112px no-repeat;
\tcolor: #7E7E7E;
\tfont-size: 17px;
\tpadding: 2px 0 2px 40px;
\ttext-decoration: none;
\t-webkit-transition: all 0.3s ease;
\t-moz-transition: all 0.3s ease;
\t-ms-transition: all 0.3s ease;
\t-o-transition: all 0.3s ease;
\ttransition: all 0.3s ease;
}
.button a:hover {
\tbackground-position: 0 -135px;
\tcolor: #00aeef;
}
";
    }

    // line 260
    public function block_body($context, array $blocks = array())
    {
        // line 261
        echo "
<div class=\"row\">
\t\t
\t\t<div class=\"col-xs-12\" id='col-8'>
\t\t<div class=\"container\">
\t<section id=\"content\">
\t\t<form method=\"POST\" action=\"";
        // line 267
        echo twig_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : $this->getContext($context, "link")), "html", null, true);
        echo "\">
\t\t\t<h1>Restore Form</h1>
\t\t\t<div>
\t\t\t\t<input type=\"text\" placeholder=\"Username\" required=\"\" id=\"username\" name = \"userName\" maxlength=\"100\" value=\"";
        // line 270
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo "\" disabled/>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<input type=\"password\" placeholder=\"Password\" required=\"\" class=\"password\" name =\"password\" />
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<input type=\"password\" placeholder=\"Confirm \" required=\"\" class=\"password\" name =\"passwordConfirm\" />
\t\t\t\t
\t\t\t</div>
\t\t ";
        // line 279
        if (array_key_exists("errs", $context)) {
            echo " 
 \t\t\t<span style=\"color: red;\">";
            // line 280
            echo twig_escape_filter($this->env, (isset($context["errs"]) ? $context["errs"] : $this->getContext($context, "errs")), "html", null, true);
            echo " </span>
 ";
        }
        // line 282
        echo "\t\t\t
\t\t\t<div style='margin-left: 30%; margin-right:auto;clear:both;'>
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
        return array (  330 => 282,  325 => 280,  321 => 279,  309 => 270,  303 => 267,  295 => 261,  292 => 260,  32 => 3,  29 => 2,);
    }
}
