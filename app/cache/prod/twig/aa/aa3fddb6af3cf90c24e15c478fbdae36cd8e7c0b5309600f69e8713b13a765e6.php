<?php

/* GestionStockBundle:Stock:afficher.html.twig */
class __TwigTemplate_d2102243c9c5cd41c1c54f103c13fc7f455cb976935544c46ca099188d61d181 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionStockBundle::template.html.twig", "GestionStockBundle:Stock:afficher.html.twig", 1);
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

              <div class=\"caption\">
                <h3>detail sur le stock</h3>
                
                <p>
                  Seuil minimum : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stock"]) ? $context["stock"] : null), "seuilMin", array()), "html", null, true);
        echo ";<br>
                  Quantité : ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stock"]) ? $context["stock"] : null), "quantite", array()), "html", null, true);
        echo "<br>
                  Identifiant Produit   : ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stock"]) ? $context["stock"] : null), "produit", array()), "html", null, true);
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
        return "GestionStockBundle:Stock:afficher.html.twig";
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
/* */
/*               <div class="caption">*/
/*                 <h3>detail sur le stock</h3>*/
/*                 */
/*                 <p>*/
/*                   Seuil minimum : {{ stock.seuilMin }};<br>*/
/*                   Quantité : {{ stock.quantite }}<br>*/
/*                   Identifiant Produit   : {{ stock.produit }}<br>*/
/*                 </p>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         */
/* {% endblock%}*/
