<?php

/* GestionStockBundle:Default:afficher.html.twig */
class __TwigTemplate_fbfbba02bb9fc15687b6c2b500fe7ffa80d6618d12e668b6f3acc6e38aecba37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionStockBundle::template.html.twig", "GestionStockBundle:Default:afficher.html.twig", 1);
        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GestionStockBundle::template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66f0114b272fc61e9a1e4c90d3564aaa77753ebec786fa7734e7f0cd86ba7f3a = $this->env->getExtension("native_profiler");
        $__internal_66f0114b272fc61e9a1e4c90d3564aaa77753ebec786fa7734e7f0cd86ba7f3a->enter($__internal_66f0114b272fc61e9a1e4c90d3564aaa77753ebec786fa7734e7f0cd86ba7f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionStockBundle:Default:afficher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66f0114b272fc61e9a1e4c90d3564aaa77753ebec786fa7734e7f0cd86ba7f3a->leave($__internal_66f0114b272fc61e9a1e4c90d3564aaa77753ebec786fa7734e7f0cd86ba7f3a_prof);

    }

    // line 2
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_de647412f17801e1c01e734f7626244c87b8715051af8d7d4da335f80decdd70 = $this->env->getExtension("native_profiler");
        $__internal_de647412f17801e1c01e734f7626244c87b8715051af8d7d4da335f80decdd70->enter($__internal_de647412f17801e1c01e734f7626244c87b8715051af8d7d4da335f80decdd70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 3
        echo "\t <div class=\"col-md-12\" >
     <div class=\"row\">
          <div class=\"col-sm-6 col-md-4\">
            <div class=\"thumbnail\">
              <img src=\"...\" alt=\"...\">
              <div class=\"caption\">
                <h3>detail sur le stock</h3>
                
                <p>
                  Seuil minimum : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")), "seuilMin", array()), "html", null, true);
        echo ";<br>
                  Quantité : ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")), "quantite", array()), "html", null, true);
        echo "<br>
                  Identifiant Produit   : ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")), "produit", array()), "html", null, true);
        echo "<br>
                </p>
              </div>
            </div>
          </div>
        </div>
        
";
        
        $__internal_de647412f17801e1c01e734f7626244c87b8715051af8d7d4da335f80decdd70->leave($__internal_de647412f17801e1c01e734f7626244c87b8715051af8d7d4da335f80decdd70_prof);

    }

    public function getTemplateName()
    {
        return "GestionStockBundle:Default:afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 14,  55 => 13,  51 => 12,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "GestionStockBundle::template.html.twig" %}*/
/* {% block contenu %}*/
/* 	 <div class="col-md-12" >*/
/*      <div class="row">*/
/*           <div class="col-sm-6 col-md-4">*/
/*             <div class="thumbnail">*/
/*               <img src="..." alt="...">*/
/*               <div class="caption">*/
/*                 <h3>detail sur le stock</h3>*/
/*                 */
/*                 <p>*/
/*                   Seuil minimum : {{ code.seuilMin }};<br>*/
/*                   Quantité : {{ code.quantite }}<br>*/
/*                   Identifiant Produit   : {{ code.produit}}<br>*/
/*                 </p>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         */
/* {% endblock%}*/
