<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* coly/index.html.twig */
class __TwigTemplate_812c5220ec9b4af5be8e78c0803bbcdb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coly/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coly/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "coly/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mon site web professionel";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
.list-unstyled{
    color:white;
}
.col-sm-5{
    color:white;
}
.col-sm-12{
    color:white;
}


.div1{
    color:white;
}


.ecriture{
    padding-left: 50px;
    font-family: Arial, sans-serif;
    
}
.debut{
    text-align: center;
}
.img{
    padding-left: 50px;

}
.entete{
    color:white;

}
.lien{
    color:#CD5C5C;

}
.fab1{
    color:#CD5C5C;
    
}
.lyco{
    color:#CD5C5C;

}
.div1 .gauche{
    margin-top:80px;
    margin-left:250px;
}

    




</style>

<div>
    <div class=\"div1\">
    <h1 class=\"debut\" >WELCOME TO MY WEBSITE  </h1>
    <p class=\"ecriture\" id=\"gauche\">Hello, my name is my name is and I am a student in computer networks and telecommunications.<br>
     I am passionate about computer networks and I have [number] years of experience in the field.<br>
     I am happy to be able to share my knowledge and expertise with you.<br></p>


    </div>
    <div>
    <img class=\"img\"  src=\"/image du site/insa.jpg\" alt=\"Description of image\" width=\"40%\" height=\"40%\" id=\"my-image\" class=\"img-responsive\">
    </div>

    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-5\">
                    <h4>Contact</h4>
                    <ul class=\"list-unstyled\">
                        <li> Address:21 rue jean jaures ,Roanne</li>
                        <li>Phone: 07 25 65 85</li>
                        <li>Email: <a class=\"lien\" href=\"insa.coly@etu.univ-st-etienne.fr\">insa.coly@etu.univ-st-etienne.fr</a></li>
                    </ul>
                </div>
                <div class=\"col-sm-3\">
                    <h4 class=\"entete\">suivez moi sur mes réseaux sociaux</h4>
                    <ul class=\"list-unstyled list-inline\"> 
                        <li><a href=\"#\"><i class=\"fab1\">twitter</i></a></li>
                        <li><a href=\"#\"><i class=\"lyco\"></i>linkedin</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"copyright\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <p>Copyright &copy; 2022-2023 R&T | All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>


    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "coly/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon site web professionel{% endblock %}

{% block body %}
<style>
.list-unstyled{
    color:white;
}
.col-sm-5{
    color:white;
}
.col-sm-12{
    color:white;
}


.div1{
    color:white;
}


.ecriture{
    padding-left: 50px;
    font-family: Arial, sans-serif;
    
}
.debut{
    text-align: center;
}
.img{
    padding-left: 50px;

}
.entete{
    color:white;

}
.lien{
    color:#CD5C5C;

}
.fab1{
    color:#CD5C5C;
    
}
.lyco{
    color:#CD5C5C;

}
.div1 .gauche{
    margin-top:80px;
    margin-left:250px;
}

    




</style>

<div>
    <div class=\"div1\">
    <h1 class=\"debut\" >WELCOME TO MY WEBSITE  </h1>
    <p class=\"ecriture\" id=\"gauche\">Hello, my name is my name is and I am a student in computer networks and telecommunications.<br>
     I am passionate about computer networks and I have [number] years of experience in the field.<br>
     I am happy to be able to share my knowledge and expertise with you.<br></p>


    </div>
    <div>
    <img class=\"img\"  src=\"/image du site/insa.jpg\" alt=\"Description of image\" width=\"40%\" height=\"40%\" id=\"my-image\" class=\"img-responsive\">
    </div>

    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-5\">
                    <h4>Contact</h4>
                    <ul class=\"list-unstyled\">
                        <li> Address:21 rue jean jaures ,Roanne</li>
                        <li>Phone: 07 25 65 85</li>
                        <li>Email: <a class=\"lien\" href=\"insa.coly@etu.univ-st-etienne.fr\">insa.coly@etu.univ-st-etienne.fr</a></li>
                    </ul>
                </div>
                <div class=\"col-sm-3\">
                    <h4 class=\"entete\">suivez moi sur mes réseaux sociaux</h4>
                    <ul class=\"list-unstyled list-inline\"> 
                        <li><a href=\"#\"><i class=\"fab1\">twitter</i></a></li>
                        <li><a href=\"#\"><i class=\"lyco\"></i>linkedin</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"copyright\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <p>Copyright &copy; 2022-2023 R&T | All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>


    
{% endblock %}
", "coly/index.html.twig", "C:\\Users\\userlocal\\Documents\\GitHub\\symfony2\\templates\\coly\\index.html.twig");
    }
}
