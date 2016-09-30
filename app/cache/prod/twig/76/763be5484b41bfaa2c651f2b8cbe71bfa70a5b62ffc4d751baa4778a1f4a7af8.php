<?php

/* GestionStockBundle:Default:afficher.html.twig */
class __TwigTemplate_17d1f8f82ddd7f3e28eed2acaa4dfd9c8860fd19287c2cbec085039b2ca7f51a extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_contenu($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : null), "seuilMin", array()), "html", null, true);
        echo ";<br>
                  Quantité : ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : null), "quantite", array()), "html", null, true);
        echo "<br>
                  Identifiant Produit   : ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : null), "produit", array()), "html", null, true);
        echo "<br>
                </p>
              </div>
            </div>
          </div>
        </div>
        
";
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
        return array (  50 => 14,  46 => 13,  42 => 12,  31 => 3,  28 => 2,  11 => 1,);
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
