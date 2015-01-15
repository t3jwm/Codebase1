<?php

/* AcmeDemoBundle:Demo:homepage.html.twig */
class __TwigTemplate_af0492d976b6fa6c838417e68e25a89af8834758007c3e7830d859782f1296d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::Baselayout.html.twig");

        $this->blocks = array(
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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t<div class=\"row\">
\t\t<div class=\"col-xs-2\"></div>
\t\t<div class=\"col-xs-8\">
\t\t\t<a href=\"#\"><img id='banner' src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/page1_1.jpg"), "html", null, true);
        echo "\" /></a>
\t\t</div>
\t\t<div class=\"col-xs-2\"></div>
\t</div>
\t
\t<div class=\"row\">
\t\t<div class=\"col-xs-2\"></div>
\t\t<div class=\"col-xs-8\" id='page1_2' >
\t\t<a href=\"#\"><img class='triangle' src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/triangle.png"), "html", null, true);
        echo "\" /></a>
\t\t<h4 style='margin-top:8%; text-align: center;'>\tOne great idea is all it takes to change the world.</h4></br>
\t\t<h4 style='margin-top:0%; text-align: center;'>\tAt Patent That, we believe in the power of innovation and we created Patent That to put the power back in 
  your hands.  We want inventors take control of the patent process using intuitive tools built for creative 
\t\t\t\t\t\t\t\t\t\tpeople. </h4></br>
\t\t\t   
   <h3 style='margin-bottom:5%; text-align: center;'>\tGet started, think big, and accelerate your innovation. </h3>
\t\t\t 
\t\t<span>\t
\t\t</div>
\t\t<div class=\"col-xs-2\"></div>
\t</div>
\t
\t<div class=\"row\">
\t\t
\t\t<div class=\"col-xs-2\"></div>
\t\t<div class=\"col-xs-8\" id='page1_3'>
\t\t<a href=\"#\"><img class='triangle' src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/triangle.png"), "html", null, true);
        echo "\" /></a>
\t\t</br></br></br>
\t\t<span id='text1_page1_3'>SIMPLER</span>
\t\t<span id='text2_page1_3'>BETTER</span>
\t\t<span id='text3_page1_3'>SMARTER</span>
\t\t\t<button id='button1_page1_3' class='button_page1_3'>
\t\t\t<span style='text-align:center;'>
\t\t\tA free-form drawing </br>
\t\t\tapplication lets you </br>
\t\t\tcapture thoughts and </br>
\t\t\tideas at your own </br>
\t\t\tpace and in your </br>
\t\t\town way.
\t\t\t</span>   
\t\t\t</button>
\t\t\t<button id='button2_page1_3' class='button_page1_3'>
\t\t\t<span style='text-align:center;'>
\t\t\tA free-form drawing </br>
\t\t\tapplication lets you </br>
\t\t\tcapture thoughts and </br>
\t\t\tideas at your own </br>
\t\t\tpace and in your </br>
\t\t\town way.
\t\t\t</span>   
\t\t\t</button>
\t\t\t<button id='button3_page1_3' class='button_page1_3'>
\t\t\t<span style='text-align:center;'>
\t\t\tA free-form drawing </br>
\t\t\tapplication lets you </br>
\t\t\tcapture thoughts and </br>
\t\t\tideas at your own </br>
\t\t\tpace and in your </br>
\t\t\town way.
\t\t\t</span>   
\t\t\t</button>
\t\t</div>
\t\t<div class=\"col-xs-2\"></div>
\t
\t
\t</div>
\t
\t<div class=\"row\">
\t\t<div class=\"col-xs-2\"></div>
\t\t<div class=\"col-xs-8\" id='page1_4'>
\t\t\t<a href=\"#\"><img class='triangle' src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/triangle.png"), "html", null, true);
        echo "\" /></a>
\t\t\t<div class=\"row\">
\t\t\t<div id='page1_4_left'>
\t\t\t\t<p>Work on what you want, when you want, across multiple platforms.  Our secure cloud based system saves multiple ideas all in one place.  </p></br>
\t\t\t\t<p>Insert, sketch, doodle, write - the Patent That sketchpad lets you innovate in your own way, with the help of patent expertise. </p>
\t\t\t</div>
\t\t\t
\t\t\t<div id='page1_4_right'>
\t\t\t\t<a href=\"#\"><img id='image_page1_4' src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/page1_4.jpg"), "html", null, true);
        echo "\" /></a>
\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-xs-2\"></div>
\t</div>
\t
\t<div class=\"row\">
\t\t<div class=\"col-xs-2\"></div>
\t\t<div class=\"col-xs-8\" id='page1_5'>
\t\t\t<a href=\"#\"><img class='triangle' src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/triangle.png"), "html", null, true);
        echo "\" /></a>
\t\t\t<div class=\"row\">
\t\t\t<div id='page1_5_left'>
\t\t\t\t<a href=\"#\"><img id='image_page1_5' src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/page1_5.jpg"), "html", null, true);
        echo "\" /></a>
\t\t\t</div>
\t\t\t
\t\t\t<div id='page1_5_right'>
\t\t\t\t<span style='font-size: 180%;'>At your fingertips are tips, hints, and guidance as to how to flush out your ideas to save time and money when talking to your patent attorney or agent.</br>
\t\t\t\t When you are ready, submit your idea for a low-cost consultation to an advisor who can provide further assistance and help make your invention a patentably reality
\t\t\t\t</span>
\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-xs-2\"></div>
\t</div>
\t
\t<div class=\"row\">
\t\t<div class=\"col-xs-2\"></div>
\t\t<div class=\"col-xs-8\" id='page1_6'>
\t\t\t<a href=\"#\"><img class='triangle' src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/triangle.png"), "html", null, true);
        echo "\" /></a>
\t\t<span id='text_image1_6' >Get Started!</span>
\t\t<a href=\"#\"><img id='image_page1_6' src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/page1_6.jpg"), "html", null, true);
        echo "\" /></a>
\t\t</div>
\t\t<div class=\"col-xs-2\"></div>
\t\t
\t</div>
\t
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 117,  163 => 115,  144 => 99,  138 => 96,  125 => 86,  114 => 78,  67 => 34,  47 => 17,  36 => 9,  31 => 6,  28 => 5,);
    }
}
