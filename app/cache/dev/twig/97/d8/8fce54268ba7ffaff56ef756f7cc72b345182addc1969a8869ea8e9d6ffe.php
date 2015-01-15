<?php

/* AcmeDemoBundle:User:showImage.html.twig */
class __TwigTemplate_97d88fce54268ba7ffaff56ef756f7cc72b345182addc1969a8869ea8e9d6ffe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "  ";
        if (array_key_exists("filePaths", $context)) {
            // line 2
            echo "                        ";
            if (((isset($context["numImage"]) ? $context["numImage"] : $this->getContext($context, "numImage")) > 0)) {
                // line 3
                echo "                            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(0, ((isset($context["numImage"]) ? $context["numImage"] : $this->getContext($context, "numImage")) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 4
                    echo "

                            <li class=\"thumbnail\">
                                <a style=\"background:url(";
                    // line 7
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(($this->getAttribute((isset($context["filePaths"]) ? $context["filePaths"] : $this->getContext($context, "filePaths")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array") . ".jpeg")), "html", null, true);
                    echo " );\"
                                   title=\"Image 1\" href=\"";
                    // line 8
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["filePaths"]) ? $context["filePaths"] : $this->getContext($context, "filePaths")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array")), "html", null, true);
                    echo ".jpeg?";
                    echo twig_escape_filter($this->env, twig_random($this->env, 1000), "html", null, true);
                    echo "\">
                                   <img src=\"";
                    // line 9
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["filePaths"]) ? $context["filePaths"] : $this->getContext($context, "filePaths")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array")), "html", null, true);
                    echo ".jpeg?";
                    echo twig_escape_filter($this->env, twig_random($this->env, 1000), "html", null, true);
                    echo " \" />
                                </a>
                                <p style= \"text-align: center;\">";
                    // line 11
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["picnames"]) ? $context["picnames"] : $this->getContext($context, "picnames")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "html", null, true);
                    echo "</p>
                                <p class=\"btn-group\">

                                    <button onclick =  \"renameImage('";
                    // line 14
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imgId"]) ? $context["imgId"] : $this->getContext($context, "imgId")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "html", null, true);
                    echo "','";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                    echo "')\" class=\"btn btn-xs btn-info\" >Rename</button>

                                    <button onclick =  \"sendImage('";
                    // line 16
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imgId"]) ? $context["imgId"] : $this->getContext($context, "imgId")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "html", null, true);
                    echo "')\" class=\"btn btn-success btn-xs\" >Send</button>


                                    <button onclick =  \"deleteImage('";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imgId"]) ? $context["imgId"] : $this->getContext($context, "imgId")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "html", null, true);
                    echo "','";
                    echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                    echo "')\" class=\"btn btn-danger btn-xs\" >Delete</button>
                                    

                                </p>
                            </li>



                            

                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "                        ";
            } else {
                // line 31
                echo "                            <p style=\"font-style:italic\">The gallery is empty !</p>
                        ";
            }
            // line 33
            echo "                        ";
        }
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:User:showImage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 33,  93 => 31,  90 => 30,  71 => 19,  65 => 16,  58 => 14,  52 => 11,  45 => 9,  39 => 8,  35 => 7,  30 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
