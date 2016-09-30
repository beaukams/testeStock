<?php

/* GestionStockBundle:Stock:afficher.html.twig */
class __TwigTemplate_9ebd0314539d7f1218a59eb14bd4ab77c265541dbd0ead374f36bba7a17f8ab2 extends Twig_Template
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
        $__internal_057f6217609b21e12847db4b6841eab382387a0629a326f6a5b234856a550cd6 = $this->env->getExtension("native_profiler");
        $__internal_057f6217609b21e12847db4b6841eab382387a0629a326f6a5b234856a550cd6->enter($__internal_057f6217609b21e12847db4b6841eab382387a0629a326f6a5b234856a550cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionStockBundle:Stock:afficher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_057f6217609b21e12847db4b6841eab382387a0629a326f6a5b234856a550cd6->leave($__internal_057f6217609b21e12847db4b6841eab382387a0629a326f6a5b234856a550cd6_prof);

    }

    // line 2
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_073276a9193ba812d00045143040c24daf37a70f8db976a915eaf7e0613f6751 = $this->env->getExtension("native_profiler");
        $__internal_073276a9193ba812d00045143040c24daf37a70f8db976a915eaf7e0613f6751->enter($__internal_073276a9193ba812d00045143040c24daf37a70f8db976a915eaf7e0613f6751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_073276a9193ba812d00045143040c24daf37a70f8db976a915eaf7e0613f6751->leave($__internal_073276a9193ba812d00045143040c24daf37a70f8db976a915eaf7e0613f6751_prof);

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
