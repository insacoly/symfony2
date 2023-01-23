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

/* coly/moncv.html.twig */
class __TwigTemplate_2f3162f422f5c74d99ec5911df41cbb8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coly/moncv.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coly/moncv.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "coly/moncv.html.twig", 1);
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

        echo "Mon CV";
        
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

#div1, #div2, #div3 {
    display: inline-block;
    width: 33.33%; /* each div will take up one third of the container width */
    text-align:center;
    color:white;
}


/**.footer {
    position: absolute;
    bottom: 0;
    width: 100%;
}**/
.list-unstyled{
  color:white;

}
.col-sm-5{
  color:white;

}
.col-sm-12{
  color:white;

}
.entete{
   text-align: center;
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
.inscription{
  color:white;

}
.contener{
  display: flex;
}
.div2{
  flex: 1;
}
.div3{
  flex: 1;
}










</style>
<div>
      <h1 class=\"entete\">ADMINISTRATEUR RESEAU</h1><br>

      <div id=\"div1\">
          <h2>FORMATION</h2>
          <ul>
            <li>DIPLOME BACCALAUREAT SCIENTIFIQUE</li><br>
            <li>INFORMATIQUE RESEAU ET TELECOMMUNICATION</li>
          
          </ul>

      </div><br><br>


      <div class=\"contener\">
          <div id=\"div2\">
              <h2>COMPETENCES</h2>

              <ul>
                <li>Connaissance des protocoles de réseau tels que TCP/IP, DNS, DHCP, etc. </li><br>
                <li>Connaissance des  équipements de réseau tels que les commutateurs  </li><br>
                <li>Connaissance des systèmes d'exploitation de réseau tels que linux </li><br>
                <li>Connaissance des outils de surveillance de réseau tels que Wireshark </li><br>
                <li>Connaissance des technologies de virtualisation de réseau telles que les VLANS  </li><br>
                
              
              </ul>
          </div>

          <div id=\"div3\">
              <h2>EXPERIENCES</h2>
                  
              <ul>
                <li>Realisation d'un projet qui consite a identifier la configuration d'un reseau<br> et d'ajouter des postes sur le reseau </li><br>
                <li>resalisation d'un projet sur les diffferents apparail utuliser dans les reseaus informatique  </li><br>
              </ul>
          </div><br><br>
      </div>
      <div>
        <h2 class=\"inscription\">Pour obtenir mon CV veuillez vous inscrire</h2>
        <a class=\"btn btn-dark bg-black btn-lg\" href=\"contact\" role=\"button\" >INSCRIPTION</a>

      </div><br><br>









      <footer class=\"footer\">
          <div class=\"container\">
              <div class=\"row\">
                  <div class=\"col-sm-5\">
                      <h4>Contact</h4>
                      <ul class=\"list-unstyled\">
                          <li>Address:21 rue jean jaures ,Roanne</li>
                          <li>Phone: 07 25 65 85</li>
                          <li>Email: <a class=\"lien\" href=\"insa.coly@etu.univ-st-etienne.fr\">insa.coly@etu.univ-st-etienne.fr</a></li>
                      </ul>
                  </div>
                  <div class=\"col-sm-5\">
                      <h4>suivez moi sur mes réseaux sociaux</h4>
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
        return "coly/moncv.html.twig";
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

{% block title %}Mon CV{% endblock %}

{% block body %}
<style>

#div1, #div2, #div3 {
    display: inline-block;
    width: 33.33%; /* each div will take up one third of the container width */
    text-align:center;
    color:white;
}


/**.footer {
    position: absolute;
    bottom: 0;
    width: 100%;
}**/
.list-unstyled{
  color:white;

}
.col-sm-5{
  color:white;

}
.col-sm-12{
  color:white;

}
.entete{
   text-align: center;
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
.inscription{
  color:white;

}
.contener{
  display: flex;
}
.div2{
  flex: 1;
}
.div3{
  flex: 1;
}










</style>
<div>
      <h1 class=\"entete\">ADMINISTRATEUR RESEAU</h1><br>

      <div id=\"div1\">
          <h2>FORMATION</h2>
          <ul>
            <li>DIPLOME BACCALAUREAT SCIENTIFIQUE</li><br>
            <li>INFORMATIQUE RESEAU ET TELECOMMUNICATION</li>
          
          </ul>

      </div><br><br>


      <div class=\"contener\">
          <div id=\"div2\">
              <h2>COMPETENCES</h2>

              <ul>
                <li>Connaissance des protocoles de réseau tels que TCP/IP, DNS, DHCP, etc. </li><br>
                <li>Connaissance des  équipements de réseau tels que les commutateurs  </li><br>
                <li>Connaissance des systèmes d'exploitation de réseau tels que linux </li><br>
                <li>Connaissance des outils de surveillance de réseau tels que Wireshark </li><br>
                <li>Connaissance des technologies de virtualisation de réseau telles que les VLANS  </li><br>
                
              
              </ul>
          </div>

          <div id=\"div3\">
              <h2>EXPERIENCES</h2>
                  
              <ul>
                <li>Realisation d'un projet qui consite a identifier la configuration d'un reseau<br> et d'ajouter des postes sur le reseau </li><br>
                <li>resalisation d'un projet sur les diffferents apparail utuliser dans les reseaus informatique  </li><br>
              </ul>
          </div><br><br>
      </div>
      <div>
        <h2 class=\"inscription\">Pour obtenir mon CV veuillez vous inscrire</h2>
        <a class=\"btn btn-dark bg-black btn-lg\" href=\"contact\" role=\"button\" >INSCRIPTION</a>

      </div><br><br>









      <footer class=\"footer\">
          <div class=\"container\">
              <div class=\"row\">
                  <div class=\"col-sm-5\">
                      <h4>Contact</h4>
                      <ul class=\"list-unstyled\">
                          <li>Address:21 rue jean jaures ,Roanne</li>
                          <li>Phone: 07 25 65 85</li>
                          <li>Email: <a class=\"lien\" href=\"insa.coly@etu.univ-st-etienne.fr\">insa.coly@etu.univ-st-etienne.fr</a></li>
                      </ul>
                  </div>
                  <div class=\"col-sm-5\">
                      <h4>suivez moi sur mes réseaux sociaux</h4>
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



{% endblock %}", "coly/moncv.html.twig", "C:\\Users\\userlocal\\Documents\\GitHub\\symfony2\\templates\\coly\\moncv.html.twig");
    }
}
