<?php

/* PharmaciePharmacienBundle:Pharmacien:accueil.html.twig */
class __TwigTemplate_658738a74abca20b3b86462cc9c92016ebce178f7ef7953d1370fcf0b4f7a811 extends Twig_Template
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
        $__internal_e286a1ef21d85d24de9236a6568897b1bcb2c81001dac11fb1b8c692de9fc10f = $this->env->getExtension("native_profiler");
        $__internal_e286a1ef21d85d24de9236a6568897b1bcb2c81001dac11fb1b8c692de9fc10f->enter($__internal_e286a1ef21d85d24de9236a6568897b1bcb2c81001dac11fb1b8c692de9fc10f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PharmaciePharmacienBundle:Pharmacien:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e286a1ef21d85d24de9236a6568897b1bcb2c81001dac11fb1b8c692de9fc10f->leave($__internal_e286a1ef21d85d24de9236a6568897b1bcb2c81001dac11fb1b8c692de9fc10f_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_82a361a4f0d66d05227d2a0abb8406cd62500b8e0ebc4c1cab27e42ea521d772 = $this->env->getExtension("native_profiler");
        $__internal_82a361a4f0d66d05227d2a0abb8406cd62500b8e0ebc4c1cab27e42ea521d772->enter($__internal_82a361a4f0d66d05227d2a0abb8406cd62500b8e0ebc4c1cab27e42ea521d772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        // line 4
        echo "    
        <span class=\"navbar-brand\" href=\"#\"><p id=\"heure\"></p></span>
    
";
        
        $__internal_82a361a4f0d66d05227d2a0abb8406cd62500b8e0ebc4c1cab27e42ea521d772->leave($__internal_82a361a4f0d66d05227d2a0abb8406cd62500b8e0ebc4c1cab27e42ea521d772_prof);

    }

    // line 9
    public function block_logout($context, array $blocks = array())
    {
        $__internal_a942fb998f61c09971a88bc1513c067ff337a592d8654bbf4128f62a579aaaeb = $this->env->getExtension("native_profiler");
        $__internal_a942fb998f61c09971a88bc1513c067ff337a592d8654bbf4128f62a579aaaeb->enter($__internal_a942fb998f61c09971a88bc1513c067ff337a592d8654bbf4128f62a579aaaeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logout"));

        // line 10
        echo "
    <li class=\"dropdown\">
        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"color: white\"><span class=\"glyphicon glyphicon-user\"></span><span class=\"caret\"></span></a>
        <ul class=\"dropdown-menu\">
            <li><a href=\"\">Déconnexion</a></li>
        </ul>
    </li>             
";
        
        $__internal_a942fb998f61c09971a88bc1513c067ff337a592d8654bbf4128f62a579aaaeb->leave($__internal_a942fb998f61c09971a88bc1513c067ff337a592d8654bbf4128f62a579aaaeb_prof);

    }

    // line 19
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_20854682da7f307386d86ea9338c894ae107b68e93ac21f0dacdb4c6f3cdb02c = $this->env->getExtension("native_profiler");
        $__internal_20854682da7f307386d86ea9338c894ae107b68e93ac21f0dacdb4c6f3cdb02c->enter($__internal_20854682da7f307386d86ea9338c894ae107b68e93ac21f0dacdb4c6f3cdb02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_20854682da7f307386d86ea9338c894ae107b68e93ac21f0dacdb4c6f3cdb02c->leave($__internal_20854682da7f307386d86ea9338c894ae107b68e93ac21f0dacdb4c6f3cdb02c_prof);

    }

    // line 21
    public function block_menuCentre($context, array $blocks = array())
    {
        $__internal_65ad0cfc2ac547d68896719dca9cfc4dfdc5eae2929150704d6609a6595a6405 = $this->env->getExtension("native_profiler");
        $__internal_65ad0cfc2ac547d68896719dca9cfc4dfdc5eae2929150704d6609a6595a6405->enter($__internal_65ad0cfc2ac547d68896719dca9cfc4dfdc5eae2929150704d6609a6595a6405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menuCentre"));

        // line 22
        echo "        
    ";
        
        $__internal_65ad0cfc2ac547d68896719dca9cfc4dfdc5eae2929150704d6609a6595a6405->leave($__internal_65ad0cfc2ac547d68896719dca9cfc4dfdc5eae2929150704d6609a6595a6405_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_14bcfb17dbfc08b3deb8a9856ac9f54f58ff2ed50a6384ac8395acaf1eab626f = $this->env->getExtension("native_profiler");
        $__internal_14bcfb17dbfc08b3deb8a9856ac9f54f58ff2ed50a6384ac8395acaf1eab626f->enter($__internal_14bcfb17dbfc08b3deb8a9856ac9f54f58ff2ed50a6384ac8395acaf1eab626f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_14bcfb17dbfc08b3deb8a9856ac9f54f58ff2ed50a6384ac8395acaf1eab626f->leave($__internal_14bcfb17dbfc08b3deb8a9856ac9f54f58ff2ed50a6384ac8395acaf1eab626f_prof);

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
