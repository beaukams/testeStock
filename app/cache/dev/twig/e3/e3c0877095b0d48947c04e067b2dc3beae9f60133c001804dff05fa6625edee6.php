<?php

/* PharmaciePharmacienBundle:Pharmacien:accueil.html.twig */
class __TwigTemplate_d4e54e6a6d578216d2288c650e528ea8f060516811665676d1f0281806b512de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PharmaciePharmacienBundle::template.html.twig", "PharmaciePharmacienBundle:Pharmacien:accueil.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'logout' => array($this, 'block_logout'),
            'contenu' => array($this, 'block_contenu'),
            'menuCentre' => array($this, 'block_menuCentre'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PharmaciePharmacienBundle::template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e314c1608b90668a5163ffce1f04d29845b1bd5cca402eb369080b8d87760ce5 = $this->env->getExtension("native_profiler");
        $__internal_e314c1608b90668a5163ffce1f04d29845b1bd5cca402eb369080b8d87760ce5->enter($__internal_e314c1608b90668a5163ffce1f04d29845b1bd5cca402eb369080b8d87760ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PharmaciePharmacienBundle:Pharmacien:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e314c1608b90668a5163ffce1f04d29845b1bd5cca402eb369080b8d87760ce5->leave($__internal_e314c1608b90668a5163ffce1f04d29845b1bd5cca402eb369080b8d87760ce5_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_2924537d8406f23dc747ab83c5c281c9f52e17f0b556d14eab7816bd7bea4ed8 = $this->env->getExtension("native_profiler");
        $__internal_2924537d8406f23dc747ab83c5c281c9f52e17f0b556d14eab7816bd7bea4ed8->enter($__internal_2924537d8406f23dc747ab83c5c281c9f52e17f0b556d14eab7816bd7bea4ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 4
        echo "    
        <span class=\"navbar-brand\" href=\"#\"><p id=\"heure\"></p></span>
    
";
        
        $__internal_2924537d8406f23dc747ab83c5c281c9f52e17f0b556d14eab7816bd7bea4ed8->leave($__internal_2924537d8406f23dc747ab83c5c281c9f52e17f0b556d14eab7816bd7bea4ed8_prof);

    }

    // line 9
    public function block_logout($context, array $blocks = array())
    {
        $__internal_3f284a0b6db745578e1dc5c1bc3d87be0f544f6c97dee465094459402e76f457 = $this->env->getExtension("native_profiler");
        $__internal_3f284a0b6db745578e1dc5c1bc3d87be0f544f6c97dee465094459402e76f457->enter($__internal_3f284a0b6db745578e1dc5c1bc3d87be0f544f6c97dee465094459402e76f457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logout"));

        // line 10
        echo "
    <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"color: white\"><span class=\"glyphicon glyphicon-user\"></span><span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
            <li><a href=\"\">Déconnexion</a></li>
        </ul>
    </li>             
";
        
        $__internal_3f284a0b6db745578e1dc5c1bc3d87be0f544f6c97dee465094459402e76f457->leave($__internal_3f284a0b6db745578e1dc5c1bc3d87be0f544f6c97dee465094459402e76f457_prof);

    }

    // line 19
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_ba55c972e3848cd4247a4bb1cb878642358ad5f284a98172e81100fb11981c89 = $this->env->getExtension("native_profiler");
        $__internal_ba55c972e3848cd4247a4bb1cb878642358ad5f284a98172e81100fb11981c89->enter($__internal_ba55c972e3848cd4247a4bb1cb878642358ad5f284a98172e81100fb11981c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 20
        echo " <div id=\"container\" class=\"container container-fluid\">
    ";
        // line 21
        $this->displayBlock('menuCentre', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 46
        echo "</div>
";
        
        $__internal_ba55c972e3848cd4247a4bb1cb878642358ad5f284a98172e81100fb11981c89->leave($__internal_ba55c972e3848cd4247a4bb1cb878642358ad5f284a98172e81100fb11981c89_prof);

    }

    // line 21
    public function block_menuCentre($context, array $blocks = array())
    {
        $__internal_4996c928ec07bd0c8774055f69719917d50ff06aa3428f301668c39426ce9bad = $this->env->getExtension("native_profiler");
        $__internal_4996c928ec07bd0c8774055f69719917d50ff06aa3428f301668c39426ce9bad->enter($__internal_4996c928ec07bd0c8774055f69719917d50ff06aa3428f301668c39426ce9bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuCentre"));

        // line 22
        echo "        
    ";
        
        $__internal_4996c928ec07bd0c8774055f69719917d50ff06aa3428f301668c39426ce9bad->leave($__internal_4996c928ec07bd0c8774055f69719917d50ff06aa3428f301668c39426ce9bad_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_71b18c5d805e29b08a98e986a025e1d4556785d53ed7a472daadd02caa7f08ad = $this->env->getExtension("native_profiler");
        $__internal_71b18c5d805e29b08a98e986a025e1d4556785d53ed7a472daadd02caa7f08ad->enter($__internal_71b18c5d805e29b08a98e986a025e1d4556785d53ed7a472daadd02caa7f08ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "        <div class=\"row\">
            <div class=\"col-sm-6 col-md-4\" id=\"portofolioPresentation\">
                <div class=\"thumbnail\">
                    <h4>Vente de produits</h4>
                    <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmaciepharmacien/images/cash.png")), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"col-sm-6 col-md-4\" id=\"portofolioPresentation\">
                <div class=\"thumbnail\">
                     <h4>Comptabilité</h4>
                   <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmaciepharmacien/images/compta.jpg")), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"col-sm-6 col-md-4\" id=\"portofolioPresentation\">
                <div class=\"thumbnail\">
                    <h4>Statistiques</h4>
                    <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()) . $this->env->getExtension('asset')->getAssetUrl("bundles/pharmaciepharmacien/images/statistique.jpg")), "html", null, true);
        echo "\">
                </div>
            </div>
        </div>
    ";
        
        $__internal_71b18c5d805e29b08a98e986a025e1d4556785d53ed7a472daadd02caa7f08ad->leave($__internal_71b18c5d805e29b08a98e986a025e1d4556785d53ed7a472daadd02caa7f08ad_prof);

    }

    public function getTemplateName()
    {
        return "PharmaciePharmacienBundle:Pharmacien:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 41,  131 => 35,  122 => 29,  116 => 25,  110 => 24,  102 => 22,  96 => 21,  88 => 46,  85 => 24,  83 => 21,  80 => 20,  74 => 19,  60 => 10,  54 => 9,  44 => 4,  38 => 3,  11 => 1,);
    }
}
/* {% extends "PharmaciePharmacienBundle::template.html.twig" %}*/
/* */
/* {% block titre %}*/
/*     */
/*         <span class="navbar-brand" href="#"><p id="heure"></p></span>*/
/*     */
/* {% endblock %}*/
/* */
/* {% block logout %}*/
/* */
/*     <li class="dropdown">*/
/*         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white"><span class="glyphicon glyphicon-user"></span><span class="caret"></span></a>*/
/*         <ul class="dropdown-menu">*/
/*             <li><a href="">Déconnexion</a></li>*/
/*         </ul>*/
/*     </li>             */
/* {% endblock %}*/
/* */
/* {% block contenu%}*/
/*  <div id="container" class="container container-fluid">*/
/*     {% block menuCentre %}*/
/*         */
/*     {% endblock %}*/
/*     {% block content %}*/
/*         <div class="row">*/
/*             <div class="col-sm-6 col-md-4" id="portofolioPresentation">*/
/*                 <div class="thumbnail">*/
/*                     <h4>Vente de produits</h4>*/
/*                     <img src="{{ app.request.schemeAndHttpHost ~ asset('bundles/pharmaciepharmacien/images/cash.png') }}">*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-sm-6 col-md-4" id="portofolioPresentation">*/
/*                 <div class="thumbnail">*/
/*                      <h4>Comptabilité</h4>*/
/*                    <img src="{{ app.request.schemeAndHttpHost ~ asset('bundles/pharmaciepharmacien/images/compta.jpg') }}">*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-sm-6 col-md-4" id="portofolioPresentation">*/
/*                 <div class="thumbnail">*/
/*                     <h4>Statistiques</h4>*/
/*                     <img src="{{ app.request.schemeAndHttpHost ~ asset('bundles/pharmaciepharmacien/images/statistique.jpg') }}">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endblock %}*/
/* </div>*/
/* {% endblock %}*/
/* */
