<?php

/* GestionStockBundle:Produit:afficher.html.twig */
class __TwigTemplate_b6534a5b9a863e151209451645890690f3e9b8b6634e3a1bae00d3ba47741072 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionStockBundle::template.html.twig", "GestionStockBundle:Produit:afficher.html.twig", 1);
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
                <h3>detail du produit</h3>
                
                <p>
                 libellé : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : null), "libelle", array()), "html", null, true);
        echo ";<br>
                 code barre: ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : null), "codebarre", array()), "html", null, true);
        echo "<br>
                 prix    : ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : null), "prixunitaire", array()), "html", null, true);
        echo "<br>
                 date de péremption   : ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : null), "dateperemption", array()), "m-d-Y"), "html", null, true);
        echo "<br>
                 Réference : ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : null), "reference", array()), "html", null, true);
        echo "   
                 Catégorie : ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : null), "categorie", array()), "html", null, true);
        echo "   
                </p>
              </div>
            </div>
          </div>
        </div>
        
";
    }

    public function getTemplateName()
    {
        return "GestionStockBundle:Produit:afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  58 => 16,  54 => 15,  50 => 14,  46 => 13,  42 => 12,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "GestionStockBundle::template.html.twig" %}*/
/* {% block contenu %}*/
/* 	 <div class="col-md-12" >*/
/*      <div class="row">*/
/*           <div class="col-sm-6 col-md-4">*/
/*             <div class="thumbnail">*/
/*             */
/*               <div class="caption">*/
/*                 <h3>detail du produit</h3>*/
/*                 */
/*                 <p>*/
/*                  libellé : {{ code.libelle }};<br>*/
/*                  code barre: {{ code.codebarre }}<br>*/
/*                  prix    : {{ code.prixunitaire}}<br>*/
/*                  date de péremption   : {{code.dateperemption|date('m-d-Y') }}<br>*/
/*                  Réference : {{code.reference }}   */
/*                  Catégorie : {{code.categorie }}   */
/*                 </p>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         */
/* {% endblock%}*/
/* */
