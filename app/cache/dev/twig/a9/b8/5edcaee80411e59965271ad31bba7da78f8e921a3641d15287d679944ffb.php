<?php

/* AcmeDemoBundle:Demo:homepage.html.twig */
class __TwigTemplate_a9b85edcaee80411e59965271ad31bba7da78f8e921a3641d15287d679944ffb extends Twig_Template
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
        echo "

     <div class=\"row\">
            
                <div class=\"col-lg-12 text-center\" style=\"padding-left:0; padding-right: 0;\">
                    <div id=\"carousel-example-generic\" class=\"carousel slide\">
                        <!-- Indicators -->
                        <ol class=\"carousel-indicators hidden-xs\">
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                            <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class=\"carousel-inner\">
                            <div class=\"item active\">
                                
                                <img class=\"img-responsive img-full\" style=\" min-width: 100%;\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/landing_page/img/intro-bg.jpg"), "html", null, true);
        echo "\" />
                            </div>
                            <div class=\"item\">
                                 <img class=\"img-responsive img-full\" style=\" min-width: 100%;\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/landing_page/img/intro-bg.jpg"), "html", null, true);
        echo "\" />
                            </div>
                            <div class=\"item\">
                                 <img class=\"img-responsive img-full\" style=\" min-width: 100%;\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/landing_page/img/intro-bg.jpg"), "html", null, true);
        echo "\" />
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
                            <span class=\"icon-prev\"></span>
                        </a>
                        <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
                            <span class=\"icon-next\"></span>
                        </a>
                    </div>
                    
                </div>
            </div>
       
    <!-- Navigation -->
    
    <!-- Page Content -->

    <div class=\"content-section-a\" id = \"page1_2\">

        <div class=\"container\" >

            <div class=\"row\">
            
                <div class=\"col-lg-12 col-sm-12\" style = \"text-align: center;\">
                  
                \t<hr class=\"star-light\">
                    <h2 class=\"section-heading\" style = \"font-weight: 700;\">One great idea is all it takes to change the world</h2>
                    <h3 class=\"lead\" style = \"font-weight: 700;\">At Patent That, we believe in the power of innovation and we created Patent That to put the power back in 
  your hands.  We want inventors take control of the patent process using intuitive tools built for creative 
\t\t\t\t\t\t\t\t\t\tpeople.</h3>
\t\t\t\t\t\t\t\t\t\t <h3 class=\"lead\" style = \"font-weight: 700;\">Get started, think big, and accelerate your innovation.</h3>
                </div>
           
            </div>

        </div>
        </div>
        <!-- /.container -->


    
    
    <div class=\"content-section-a\" id = \"page1_4\">

        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-lg-5 col-sm-6\">
                <h3 class ='banner_page1_3'><a href=\"#\"><b>SIMPLER</b></a></h3>
                    <hr class=\"section-heading-spacer\" style=\"border-top: 3px solid #FFFFFF;margin-top: 0px;\">
                    <div class=\"clearfix\"></div>
                    <p class=\"lead\" style = \"font-weight: 700; color: white;\">Work on what you want, when you want, across multiple platforms. Our secure cloud based system saves multiple ideas all in one place.</p>
                    <p class=\"lead\" style = \"font-weight: 700; color: white;\">Insert, sketch, doodle, write - the Patent That sketchpad lets you innovate in your own way, with the help of patent expertise.</p>
                \t<hr class=\"section-heading-spacer\" style=\"border-top: 3px solid #FFFFFF;\">
                </div>
                <div class=\"col-lg-5 col-lg-offset-2 col-sm-6\">
                    <a href=\"#\"><img id='image_page1_4' src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/landing_page/img/page1_4.jpg"), "html", null, true);
        echo "\" /></a>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->
    
 <div class=\"content-section-b\" id='page1_5'>

        <div class=\"container\">

            <div class=\"row\">
          
                <div class=\"col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6\">
                  <h3 class ='banner_page1_3'><a href=\"#\" style =\"color: #04356f\"><b>BETTER</b></a></h3>
                    <hr class=\"section-heading-spacer\" style =\"border-top: 3px solid #3a77c0;\">
                    <div class=\"clearfix\"></div>
                    <h3 class=\"section-heading\" \">At your fingertips are tips, hints, and guidance as to how to flush out your ideas to save time and money when talking to your patent attorney or agent.</h3>
                    <h3 class=\"section-heading\">When you are ready, submit your idea for a low-cost consultation to an advisor who can provide further assistance and help make your invention a patentably reality</h3>
                    <hr class=\"section-heading-spacer\" style =\"border-top: 3px solid #3a77c0;\">
                </div>
                <div class=\"col-lg-5 col-sm-pull-6  col-sm-6\" >
                    <img class=\"img-responsive\" style=\" margin-left: auto; margin-right: auto;\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/landing_page/img/page1_5.jpg"), "html", null, true);
        echo "\">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->     

    <div class=\"content-section-a\" id =\"page1_6\">

        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-lg-5 col-sm-6\">
               \t<h3 class ='banner_page1_3'><a href=\"#\"><b>SMARTER</b></a></h3>
                    <hr class=\"section-heading-spacer\" style=\"border-top: 3px solid #FFFFFF;margin-top: 0px;\">
                    <div class=\"clearfix\"></div>
                    <p class=\"lead\" style = \"font-weight: 700; color: white;\">Work on what you want, when you want, across multiple platforms. Our secure cloud based system saves multiple ideas all in one place.</p>
                    <p class=\"lead\" style = \"font-weight: 700; color: white;\">Insert, sketch, doodle, write - the Patent That sketchpad lets you innovate in your own way, with the help of patent expertise.</p>
                \t<hr class=\"section-heading-spacer\" style=\"border-top: 3px solid #FFFFFF;\">
                </div>
                <div class=\"col-lg-5 col-lg-offset-2 col-sm-6\">
                    <a href=\"#\"><img id='image_page1_4' src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/landing_page/img/page1_4.jpg"), "html", null, true);
        echo "\" /></a>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->
   

    <div class=\"banner\" >


            <div class=\"row\" >
                <div class=\"col-lg-12\">
                    <h2 id = 'getStart'><a href=\"";
        // line 153
        echo $this->env->getExtension('routing')->getPath("page_app");
        echo "\">Get Started!</a></h2>
                </div>
          
            </div>

       
        <!-- /.container -->

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
        return array (  198 => 153,  179 => 137,  152 => 113,  124 => 88,  62 => 29,  56 => 26,  50 => 23,  31 => 6,  28 => 5,);
    }
}
