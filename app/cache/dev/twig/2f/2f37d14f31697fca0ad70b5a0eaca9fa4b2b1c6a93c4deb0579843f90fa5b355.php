<?php

/* GestionStockBundle:Produit:afficher.html.twig */
class __TwigTemplate_bfab9136484678f819f2ec2a5f31ba69307ace42c0d6a6a475da1fe50921e769 extends Twig_Template
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
        $__internal_2165cdc971ddee7079ab807eed683f811e4035b34cd12f74a925281d15d4e370 = $this->env->getExtension("native_profiler");
        $__internal_2165cdc971ddee7079ab807eed683f811e4035b34cd12f74a925281d15d4e370->enter($__internal_2165cdc971ddee7079ab807eed683f811e4035b34cd12f74a925281d15d4e370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionStockBundle:Produit:afficher.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2165cdc971ddee7079ab807eed683f811e4035b34cd12f74a925281d15d4e370->leave($__internal_2165cdc971ddee7079ab807eed683f811e4035b34cd12f74a925281d15d4e370_prof);

    }

    // line 2
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_de7d4d881e8764a48e1c49d59e605aa0444f9c036b3f63a17efbe3360089aeff = $this->env->getExtension("native_profiler");
        $__internal_de7d4d881e8764a48e1c49d59e605aa0444f9c036b3f63a17efbe3360089aeff->enter($__internal_de7d4d881e8764a48e1c49d59e605aa0444f9c036b3f63a17efbe3360089aeff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")), "libelle", array()), "html", null, true);
        echo ";<br>
                 code barre: ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")), "codebarre", array()), "html", null, true);
        echo "<br>
                 prix    : ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")), "prixunitaire", array()), "html", null, true);
        echo "<br>
                 date de péremption   : ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")), "dateperemption", array()), "m-d-Y"), "html", null, true);
        echo "<br>
                 Réference : ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")), "reference", array()), "html", null, true);
        echo "   
                 Catégorie : ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")), "categorie", array()), "html", null, true);
        echo "   
                </p>
              </div>
            </div>
          </div>
        </div>
        
";
        
        $__internal_de7d4d881e8764a48e1c49d59e605aa0444f9c036b3f63a17efbe3360089aeff->leave($__internal_de7d4d881e8764a48e1c49d59e605aa0444f9c036b3f63a17efbe3360089aeff_prof);

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
        return array (  71 => 17,  67 => 16,  63 => 15,  59 => 14,  55 => 13,  51 => 12,  40 => 3,  34 => 2,  11 => 1,);
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
