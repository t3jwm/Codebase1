<?php

/* AcmeDemoBundle:Account:restoreForm.html.twig */
class __TwigTemplate_101fb7c4ffa996169b36e78097132bf98eb5f6120d956460cd35f1abbf695248 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::Baselayout.html.twig");

        $this->blocks = array(
            'CssPlus' => array($this, 'block_CssPlus'),
            'linkPlus' => array($this, 'block_linkPlus'),
            'Javascript' => array($this, 'block_Javascript'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acount_page/css/restore.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
";
    }

    // line 5
    public function block_linkPlus($context, array $blocks = array())
    {
        // line 6
        echo "\t<style>
\tul li {
\tcolor: red;
\t}
\t</style>
\t";
    }

    // line 12
    public function block_Javascript($context, array $blocks = array())
    {
        // line 13
        echo "
";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "<div class=\"row\">
\t
\t\t<div class=\"col-xs-12\" id='col-8' style=\" height: 586px;\">
\t\t<section id=\"content\" style=\"
    margin-top: 25px;
    margin-bottom: 120px;
    height: 264px;\">
\t\t<h1>Restore</h1>
\t\t
\t
\t
\t\t";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
<div class=\"form-group\">
    <label for=\"inputEmail3\" class=\" control-label\" style=\"
 \t text-align: center\">Email</label>
        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("class" => "form-control")));
        echo "
       
       \t\t\t\t\t
      
       
   
 
   

    
  </div>
  
  
  
  
       ";
        // line 47
        if (array_key_exists("errs", $context)) {
            echo " 
 \t\t\t<span style=\"color: red;\">";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["errs"]) ? $context["errs"] : $this->getContext($context, "errs")), "html", null, true);
            echo " </span>
 ";
        }
        // line 50
        echo " ";
        if (array_key_exists("success", $context)) {
            echo " 
 \t\t\t<span style=\"color: blue;\">";
            // line 51
            echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : $this->getContext($context, "success")), "html", null, true);
            echo " </span>
 ";
        }
        // line 53
        echo "  
   
  
  
  
  
  
\t\t\t
  
  <div>
   ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save"), 'widget', array("attr" => array("class" => "btn btn-primary btn-lg active btnRestore")));
        echo "
</div>
\t\t\t\t\t\t
\t\t\t\t\t
  ";
        // line 67
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
        return "AcmeDemoBundle:Account:restoreForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 67,  133 => 63,  121 => 53,  116 => 51,  111 => 50,  106 => 48,  102 => 47,  84 => 32,  77 => 28,  64 => 17,  61 => 16,  56 => 13,  53 => 12,  44 => 6,  41 => 5,  34 => 3,  31 => 2,);
    }
}
