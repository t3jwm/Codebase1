<?php

/* AcmeDemoBundle:Demo:homepage2.html.twig */
class __TwigTemplate_1aeaa840710c57c8e99db77413eba4992f71b047b0bc9edb08c8e580590e56e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::Baselayout2.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::Baselayout2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<!-- Header -->
  <!-- Full Page Image Background Carousel Header -->
    <header id=\"myCarousel\" class=\"carousel slide\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class=\"carousel-inner\">
            <div class=\"item active\">
                <!-- Set the first background image using inline CSS below. -->
                <div class=\"fill\"><img id='banner' src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/page1_1.jpg"), "html", null, true);
        echo "\" /></div>
                
                <div class=\"carousel-caption\">
                    <h2></h2>
                </div>
            </div>
            <div class=\"item\">
                <!-- Set the second background image using inline CSS below. -->
                <div class=\"fill\" style=\"background-image:url('http://placehold.it/1900x1080&text=Slide Two');\"></div>
                <div class=\"carousel-caption\">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class=\"item\">
                <!-- Set the third background image using inline CSS below. -->
                <div class=\"fill\" style=\"background-image:url('http://placehold.it/1900x1080&text=Slide Three');\"></div>
                <div class=\"carousel-caption\">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
            <span class=\"icon-prev\"></span>
        </a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
            <span class=\"icon-next\"></span>
        </a>

    </header>
    <!-- /.intro-header -->

    <!-- Page Content -->

    <div class=\"content-section-a\">

        <div class=\"container\">

            <div class=\"row\">
            
                <div class=\"col-lg-12 col-sm-12\" style = \"text-align: center;\">
                  
                
                    <h2 class=\"section-heading\">One great idea is all it takes to change the world</h2>
                    <h3 class=\"lead\">At Patent That, we believe in the power of innovation and we created Patent That to put the power back in 
  your hands.  We want inventors take control of the patent process using intuitive tools built for creative 
\t\t\t\t\t\t\t\t\t\tpeople.</h3>
\t\t\t\t\t\t\t\t\t\t <h3 class=\"lead\">Get started, think big, and accelerate your innovation.</h3>
                </div>
           
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->
     <div class=\"content-section-a\">
    <div class=\"row\">
\t\t
\t
\t\t<div class=\"col-xs-12\" id='page1_3' style = \"text-align: center;\">
\t\t
\t\t\t<div class = \"col-lg-4\" style = \"text-align: center;\">
\t\t\t\t<h3>SIMPLER</h3>
\t\t\t\t<button id='button1_page1_3' class='button_page1_3'>
\t\t\t\t\t<span style='text-align:center; font-size: 15px;'>
\t\t\t\t\tA free-form drawing </br>
\t\t\t\t\tapplication lets you </br>
\t\t\t\t\tcapture thoughts and </br>
\t\t\t\t\tideas at your own </br>
\t\t\t\t\tpace and in your </br>
\t\t\t\t\town way.
\t\t\t\t\t</span>   
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class = \"col-lg-4\" style = \"text-align: center;\">
\t\t\t\t<h3>BETTER</h3>
\t\t\t\t<button id='button2_page1_3' class='button_page1_3'>
\t\t\t\t\t<span style='text-align:center; font-size: 15px;'>
\t\t\t\t\tA free-form drawing </br>
\t\t\t\t\tapplication lets you </br>
\t\t\t\t\tcapture thoughts and </br>
\t\t\t\t\tideas at your own </br>
\t\t\t\t\tpace and in your </br>
\t\t\t\t\town way.
\t\t\t\t\t</span>   
\t\t\t\t</button>
\t\t\t</div>
\t\t\t<div class = \"col-lg-4\" style = \"text-align: center;\">
\t\t\t\t<h3>SMARTER</h3>
\t\t\t\t<button id='button3_page1_3' class='button_page1_3'>
\t\t\t\t\t<span style='text-align:center; font-size: 15px;'>
\t\t\t\t\tA free-form drawing </br>
\t\t\t\t\tapplication lets you </br>
\t\t\t\t\tcapture thoughts and </br>
\t\t\t\t\tideas at your own </br>
\t\t\t\t\tpace and in your </br>
\t\t\t\t\town way.
\t\t\t\t\t</span>   
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>
\t\t
\t
\t
\t</div>
    
     </div>
    <!-- /.content-section-a -->
    
    
    <div class=\"content-section-a\">

        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-lg-5 col-sm-6\">
                    <hr class=\"section-heading-spacer\">
                    <div class=\"clearfix\"></div>
                    <p class=\"lead\">Work on what you want, when you want, across multiple platforms. Our secure cloud based system saves multiple ideas all in one place.</p>
                    <p class=\"lead\">Insert, sketch, doodle, write - the Patent That sketchpad lets you innovate in your own way, with the help of patent expertise.</p>
                </div>
                <div class=\"col-lg-5 col-lg-offset-2 col-sm-6\">
                    <a href=\"#\"><img id='image_page1_4' src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/page1_4.jpg"), "html", null, true);
        echo "\" /></a>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->
    
 <div class=\"content-section-b\" style = 'background-color: #558ED5;'>

        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6\">
                    <hr class=\"section-heading-spacer\">
                    <div class=\"clearfix\"></div>
                    <h3 class=\"section-heading\">At your fingertips are tips, hints, and guidance as to how to flush out your ideas to save time and money when talking to your patent attorney or agent.</h3>
                    <h3 class=\"section-heading\">When you are ready, submit your idea for a low-cost consultation to an advisor who can provide further assistance and help make your invention a patentably reality</h3>
                    
                </div>
                <div class=\"col-lg-5 col-sm-pull-6  col-sm-6\">
                    <img class=\"img-responsive\" src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/page1_5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

        <div class=\"content-section-a\">

        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-lg-5 col-sm-6\">
                    <hr class=\"section-heading-spacer\">
                    <div class=\"clearfix\"></div>
                    <p class=\"lead\">Work on what you want, when you want, across multiple platforms. Our secure cloud based system saves multiple ideas all in one place.</p>
                    <p class=\"lead\">Insert, sketch, doodle, write - the Patent That sketchpad lets you innovate in your own way, with the help of patent expertise.</p>
                </div>
                <div class=\"col-lg-5 col-lg-offset-2 col-sm-6\">
                    <a href=\"#\"><img id='image_page1_4' src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/page1_4.jpg"), "html", null, true);
        echo "\" /></a>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->
   

    <div class=\"banner\">

        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <h2 style = \"margin-left: 20%;\"><a href=\"#\">Get Started!</a></h2>
                </div>
                <div class=\"col-lg-4\">
                  
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->
    
    
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:homepage2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 190,  201 => 168,  175 => 145,  47 => 20,  31 => 6,  28 => 5,);
    }
}
