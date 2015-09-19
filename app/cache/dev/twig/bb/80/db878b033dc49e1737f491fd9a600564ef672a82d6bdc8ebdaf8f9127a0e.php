<?php

/* AcmeDemoBundle:Demo:homepage.html.twig */
class __TwigTemplate_bb80db878b033dc49e1737f491fd9a600564ef672a82d6bdc8ebdaf8f9127a0e extends Twig_Template
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        echo " 

<!-- Temporary Stride stylesheet for development only -->
<link rel=\"stylesheet\" href=\"http://stridecreative.com/patentthat/css/stride.css\" />
<div class=\"hp-carousel-wrap\">
<div class=\"row\">
\t<div class=\"col-lg-12 text-center\">
\t\t<div id=\"carousel-example-generic\" class=\"carousel slide\"> 
\t\t\t<!-- Indicators --> 
\t\t\t<!--<ol class=\"carousel-indicators hidden-xs\">
\t\t\t\t\t<li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t</ol>--> 
\t\t\t
\t\t\t<!-- Wrapper for slides -->
\t\t\t<div class=\"carousel-inner\">
\t\t\t\t<div class=\"item active\"> <img class=\"img-responsive img-full\" style=\" min-width: 100%;height: 95%;\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/landing_page/img/Banner1.jpg"), "html", null, true);
        echo "\" /> </div>
\t\t\t</div>
\t\t\t
\t\t\t<!-- Controls --> 
\t\t\t<!-- <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\"> <span class=\"icon-prev\"></span> </a> <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\"> <span class=\"icon-next\"></span> </a> </div>--> 
\t\t</div>
\t</div>
</div>

<!-- Navigation --> 

<!-- Page Content -->

<div class=\"content-section-a\" id=\"page1_2\">
\t<div class=\"container\" >
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12 col-sm-12\">
\t\t\t\t<h1 class=\"section-heading\">A Sketchpad for the Next Generation of Inventors.</h1>
\t\t\t\t<p>At Patent That, we believe in the power of innovation. And we’re on a mission to put that power back in your hands.</p>
\t\t\t\t<p>
\t\t\t\t</p>
\t\t\t\t<p>Our platform helps inventors create, capture, and describe their next great idea, with a simple guide to input the information needed to prepare an invention disclosure and patent application.</p>
\t\t\t\t<p>
\t\t\t\t</p>
\t\t\t\t<p>Build your own portfolio of inventions over time and seek stream-lined patent application assistance when you’re ready to take the next step.
\t\t\t\t<p>
\t\t\t\t</p>
\t\t\t\t<h2>Be Creative  and  Think Big</h2>
\t\t\t\t<p><a href=\"/apppage\" class=\"button\" >GET STARTED &#187;</a></p>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<!-- /.container -->

<div class=\"content-section-b\" id=\"page1_3\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6 col-sm-pull-6  col-sm-6\"> <img src=\"/bundles/landing_page/img/page1_4.jpg\" id=\"image_page1_4\"> </div>
\t\t\t<div class=\"col-lg-5 col-sm-6\">
\t\t\t\t<h3>Built for the Modern Inventor</h3>
\t\t\t\t<ul>
\t\t\t\t\t<li>Our platform allows you to develop your ideas when you want, where you want.</li>
\t\t\t\t\t<li>Flexible free-form sketchpad application allows you to draw and describe your ideas as they evolve.</li>
\t\t\t\t\t<li>Import figures and drawings and then annotate</li>
\t\t\t\t\t<li>Store all your ideas in one place.</li>
\t\t\t\t</ul>
\t\t\t\t<a class=\"button\" href=\"/apppage\">GET STARTED &#187;</a> </div>
\t\t</div>
\t</div>
\t<!-- /.container --> 
</div>
<!-- /.content-section-a -->

<div id=\"page1_4\" class=\"content-section-a\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-5 col-sm-push-6 col-sm-6\"> <img src=\"/bundles/landing_page/img/page1_5.jpg\" style=\" margin-left: auto; margin-right: auto;\" class=\"img-responsive\"> </div>
\t\t\t<div class=\"col-lg-5 col-lg-pull-5 col-sm-pull-6  col-sm-6\">
\t\t\t\t<h3>Simple and Secure</h3>
\t\t\t\t<ul>
\t\t\t\t\t<li>Register in seconds.</li>
\t\t\t\t\t<li>The sketchpad has intuitive, yet robust features, and allows you to modify each drawing or detail whenever you want.</li>
\t\t\t\t\t<li>Your ideas are safe with us - no one will see your concepts without your approval.</li>
\t\t\t\t\t<li>Help is only a click away.</li>
\t\t\t\t</ul>
\t\t\t\t<a href=\"/apppage\" class=\"button\">GET STARTED &#187;</a> </div>
\t\t</div>
\t</div>
\t<!-- /.container --> 
</div>
<!-- /.content-section-b -->
<div class=\"content-section-b\" id=\"page1_5\">
\t<div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-6 col-sm-pull-6  col-sm-6\" ><img id='image_page1_6' class=\"floatright\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/landing_page/img/page1_6.jpg"), "html", null, true);
        echo "\"></div>
\t\t\t<div class=\"col-lg-5 col-sm-6\">
\t\t\t\t<h3>Powerful and Empowering</h3>
\t\t\t\t<ul>
\t\t\t\t\t<li>Accessible on multiple platforms and all devices.</li>
\t\t\t\t\t<li>Build your portfolio of ideas over time at your own pace.</li>
\t\t\t\t\t<li>Save time and money – our patent guide helps you develop the information and materials you need to develop for patenting, minimizing attorney’s fees and expenses. </li>
\t\t\t\t\t<li>Send your idea directly to an attorney when you are ready to take the next step.</li>
\t\t\t\t\t<li>Additional patent resources at your fingertips.</li>
\t\t\t\t</ul>
\t\t\t\t<a href=\"/apppage\" class = \"button\">GET STARTED &#187;</a> </div>
\t\t</div>
\t</div>
\t<!-- /.container --> 
\t
</div>
<!-- /.content-section-a -->

<div class=\"banner\" >
\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\t<h2 id = 'getStart'><a class=\"button alternate\" href=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("page_app");
        echo "\">Get Started! &#187;</a></h2>
\t\t</div>
\t</div>
\t
\t<!-- /.container --> 
\t
</div>
<!-- /.banner --> 

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
        return array (  149 => 113,  125 => 92,  47 => 17,  28 => 2,);
    }
}
