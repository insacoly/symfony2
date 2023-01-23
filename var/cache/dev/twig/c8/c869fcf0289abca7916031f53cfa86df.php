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

/* coly/portfolio.html.twig */
class __TwigTemplate_234e00dbecd69bddf2ec9df93fe75787 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coly/portfolio.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coly/portfolio.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "coly/portfolio.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mon portfolio";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
<style>
/**.footer {
    position: absolute;
    bottom: 0;
    width: 100%;
}**/
/**.footer {
    position: absolute;
    bottom: 0;
    width: 90%;
}**/

.tous{
    color:white;
}.entete{
    text-align: center;
}
.gauche{
  color:white;
  padding-left: 50px;
  margin-top: 20px;

}
.droite{
  color:white;
  padding-left: 50px;
  margin-top: 20px

} 


</style>



<div class=\"tous\">
    <div class=\"gauche\">
        <h1 class=\"entete\">COMPETENCES</h1><br>

        <div id=\"div1\" style=\" left:80px;\">
            <h2 class=\"gauche\">reseau informatique </h2>
            <ul class=\"droite\">
                <li>Configuration du matériel Cisco (switchs)</li><br>
                <li>Simulation de réseaux sur Cisco Packet Tracer</li><br>
                <li>Sécurisation : VLAN, ACL</li><br>
                <li>Détection de pannes </li><br>
                <li>Maîtrise de plusieurs protocoles réseau : ARP, ICMP, STP, HTTP, </li><br>
            
            </ul>

        </div><br><br>


        <div class=\"contener\">
            <div class=\"droite\">
                <h2>DEVELOPPEMENT WEB</h2>

                <ul>

                    <li>HTML, CSS</li><br>
                    <li>Symfony</li>

                </ul>
            </div><br><br>

            <div class=\"droite\">
                <h2>Télécommunications</h2>
                    
                <ul>
                    <li>Étude des système de transmission</li><br>
                    <li>Fibre optique</li>
                </ul>
            </div><br><br>
    </div>





    
    
    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-5\">
                    <h4>Contact</h4>
                    <ul class=\"list-unstyled\">
                        <li>Address:21 rue jean jaures ,Roanne</li>
                        <li>Phone: 07 25 65 85 </li>
                        <li>Email: <a href=\"insa.coly@etu.univ-st-etienne.fr\">insa.coly@etu.univ-st-etienne.fr</a></li>
                    </ul>
                </div>
                <div class=\"col-sm-6\">
                    <h4>suivez moi sur mes réseaux sociaux</h4>
                    <ul class=\"list-unstyled list-inline\"> 
                        <li><a href=\"#\"><i class=\"fab fa-twitter\">twitter</i></a></li>
                        <li><a href=\"#\"><i class=\"fab fa-linkedin\"></i>linkedin</a></li>
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
        return "coly/portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 7,  78 => 6,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}Mon portfolio{% endblock %}

{% block body %}

<style>
/**.footer {
    position: absolute;
    bottom: 0;
    width: 100%;
}**/
/**.footer {
    position: absolute;
    bottom: 0;
    width: 90%;
}**/

.tous{
    color:white;
}.entete{
    text-align: center;
}
.gauche{
  color:white;
  padding-left: 50px;
  margin-top: 20px;

}
.droite{
  color:white;
  padding-left: 50px;
  margin-top: 20px

} 


</style>



<div class=\"tous\">
    <div class=\"gauche\">
        <h1 class=\"entete\">COMPETENCES</h1><br>

        <div id=\"div1\" style=\" left:80px;\">
            <h2 class=\"gauche\">reseau informatique </h2>
            <ul class=\"droite\">
                <li>Configuration du matériel Cisco (switchs)</li><br>
                <li>Simulation de réseaux sur Cisco Packet Tracer</li><br>
                <li>Sécurisation : VLAN, ACL</li><br>
                <li>Détection de pannes </li><br>
                <li>Maîtrise de plusieurs protocoles réseau : ARP, ICMP, STP, HTTP, </li><br>
            
            </ul>

        </div><br><br>


        <div class=\"contener\">
            <div class=\"droite\">
                <h2>DEVELOPPEMENT WEB</h2>

                <ul>

                    <li>HTML, CSS</li><br>
                    <li>Symfony</li>

                </ul>
            </div><br><br>

            <div class=\"droite\">
                <h2>Télécommunications</h2>
                    
                <ul>
                    <li>Étude des système de transmission</li><br>
                    <li>Fibre optique</li>
                </ul>
            </div><br><br>
    </div>





    
    
    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-5\">
                    <h4>Contact</h4>
                    <ul class=\"list-unstyled\">
                        <li>Address:21 rue jean jaures ,Roanne</li>
                        <li>Phone: 07 25 65 85 </li>
                        <li>Email: <a href=\"insa.coly@etu.univ-st-etienne.fr\">insa.coly@etu.univ-st-etienne.fr</a></li>
                    </ul>
                </div>
                <div class=\"col-sm-6\">
                    <h4>suivez moi sur mes réseaux sociaux</h4>
                    <ul class=\"list-unstyled list-inline\"> 
                        <li><a href=\"#\"><i class=\"fab fa-twitter\">twitter</i></a></li>
                        <li><a href=\"#\"><i class=\"fab fa-linkedin\"></i>linkedin</a></li>
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
    

{% endblock %}", "coly/portfolio.html.twig", "C:\\Users\\userlocal\\Documents\\GitHub\\symfony2\\templates\\coly\\portfolio.html.twig");
    }
}
