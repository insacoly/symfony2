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

/* coly/contact.html.twig */
class __TwigTemplate_488a649dd3a863a10d3d7d24a9e0bfda extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coly/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "coly/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "coly/contact.html.twig", 1);
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

        echo "Mes contacts";
        
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
.inscription{
  color:white;
  padding-left: 50px;
  margin-top: 20px;
  
  
  

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
 <form action=\"image du site/CV.pdf\" target=\"_blank\">

\t\t<h2 class=\"inscription\">FORMULAIRE</h2>

\t\t<div>

        <label for=\"nom\" class=\"gauche\">Last Name</label>

        <input type=\"text\" name=\"nom\" id=\"nom\" required>

\t\t</div>

\t\t<div>

\t\t\t<label for=\"prenom\" class=\"droite\">First Name</label>

\t\t\t<input type=\"text\" name=\"prenom\" id=\"prenom\" required>

\t\t</div>\t

\t\t<div>

\t\t\t<label for=\"email\" class=\"droite\"> Email </label>

\t\t\t<input type=\"text\" name=\"email\" id=\"email\" placeholder=\"example123@gmail.com\" required>



\t\t</div>

  <input type=\"submit\">

 </form>


    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "coly/contact.html.twig";
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

{% block title %}Mes contacts{% endblock %}

{% block body %}
<style>
.inscription{
  color:white;
  padding-left: 50px;
  margin-top: 20px;
  
  
  

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
 <form action=\"image du site/CV.pdf\" target=\"_blank\">

\t\t<h2 class=\"inscription\">FORMULAIRE</h2>

\t\t<div>

        <label for=\"nom\" class=\"gauche\">Last Name</label>

        <input type=\"text\" name=\"nom\" id=\"nom\" required>

\t\t</div>

\t\t<div>

\t\t\t<label for=\"prenom\" class=\"droite\">First Name</label>

\t\t\t<input type=\"text\" name=\"prenom\" id=\"prenom\" required>

\t\t</div>\t

\t\t<div>

\t\t\t<label for=\"email\" class=\"droite\"> Email </label>

\t\t\t<input type=\"text\" name=\"email\" id=\"email\" placeholder=\"example123@gmail.com\" required>



\t\t</div>

  <input type=\"submit\">

 </form>


    
{% endblock %}
", "coly/contact.html.twig", "C:\\Users\\userlocal\\Documents\\GitHub\\symfony2\\templates\\coly\\contact.html.twig");
    }
}
