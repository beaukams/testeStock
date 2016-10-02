<?php

/* GestionStockBundle:Stock:afficher.html.twig */
class __TwigTemplate_5414be599fea8f8dd7d0fdb3cf2a48547fb81a98c16b5eb204da2c9556f7346a extends Twig_Template
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
        $__internal_825006908b1822eed6a817a3307c82f38d71e0bbd675068c249f855629cf1473 = $this->env->getExtension("native_profiler");
        $__internal_825006908b1822eed6a817a3307c82f38d71e0bbd675068c249f855629cf1473->enter($__internal_825006908b1822eed6a817a3307c82f38d71e0bbd675068c249f855629cf1473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionStockBundle:Stock:afficher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_825006908b1822eed6a817a3307c82f38d71e0bbd675068c249f855629cf1473->leave($__internal_825006908b1822eed6a817a3307c82f38d71e0bbd675068c249f855629cf1473_prof);

    }

    // line 2
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_c423a9cb70fa42b570a580f574d02b94169b40dc5c408dec811513f2beae529a = $this->env->getExtension("native_profiler");
        $__internal_c423a9cb70fa42b570a580f574d02b94169b40dc5c408dec811513f2beae529a->enter($__internal_c423a9cb70fa42b570a580f574d02b94169b40dc5c408dec811513f2beae529a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stock"]) ? $context["stock"] : $this->getContext($context, "stock")), "seuilMin", array()), "html", null, true);
        echo ";<br>
                  Quantité : ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stock"]) ? $context["stock"] : $this->getContext($context, "stock")), "quantite", array()), "html", null, true);
        echo "<br>
                  Identifiant Produit   : ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["stock"]) ? $context["stock"] : $this->getContext($context, "stock")), "produit", array()), "html", null, true);
        echo "<br>
                </p>
              </div>
            </div>
          </div>
        </div>
        
";
        
        $__internal_c423a9cb70fa42b570a580f574d02b94169b40dc5c408dec811513f2beae529a->leave($__internal_c423a9cb70fa42b570a580f574d02b94169b40dc5c408dec811513f2beae529a_prof);

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
        return array (  59 => 14,  55 => 13,  51 => 12,  40 => 3,  34 => 2,  11 => 1,);
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
