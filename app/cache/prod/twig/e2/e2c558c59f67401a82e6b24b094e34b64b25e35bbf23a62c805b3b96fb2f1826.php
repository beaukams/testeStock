<?php

/* GestionStockBundle:Default:supprimer.html.twig */
class __TwigTemplate_8fa5b2ec45c4152ff6d6e2390c248e65b010b81d7a5e27eb133fa4be9912cad6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionStockBundle::template.html.twig", "GestionStockBundle:Default:supprimer.html.twig", 1);
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
        echo "   <br><br>
   <div class=\"well\">
        <strong><center><h2>Supprimer le Stock ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : null), "libelle", array()), "html", null, true);
        echo " </h2></center></strong>
        </br>
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'errors');
        echo "
   
    <div class=\"form-group\">
        ";
        // line 12
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "quantite", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Quantité"));
        echo "

        ";
        // line 15
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "quantite", array()), 'errors');
        echo "

        <div class=\"col-sm-4\">
            ";
        // line 19
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "quantite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 25
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "produit", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Produit ID"));
        echo "

        ";
        // line 28
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "produit", array()), 'errors');
        echo "

        <div class=\"col-sm-4\">
            ";
        // line 32
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "produit", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 38
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "seuilmin", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Seuil Minimum"));
        echo "

        ";
        // line 41
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "seuilmin", array()), 'errors');
        echo "

        <div class=\"col-sm-4\">
            ";
        // line 45
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "seuilmin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

        </br>
   
        <span style=\"margin-left:30%\">";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "Supprimer", array()), 'widget', array("label" => "Supprimer", "attr" => array("class" => "btn btn-danger")));
        echo "</span>

        <span style=\"margin-left:25%\">";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "Annuler", array()), 'widget', array("label" => "Annuler", "attr" => array("class" => "btn btn-warning")));
        echo "</span>

    ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'widget');
        echo "
     ";
        // line 56
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'form_end');
        echo " 
     </div>
  ";
    }

    public function getTemplateName()
    {
        return "GestionStockBundle:Default:supprimer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 56,  127 => 55,  122 => 53,  117 => 51,  107 => 45,  100 => 41,  94 => 38,  85 => 32,  78 => 28,  72 => 25,  63 => 19,  56 => 15,  50 => 12,  44 => 8,  40 => 7,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "GestionStockBundle::template.html.twig" %}*/
/*    {% block contenu %}*/
/*    <br><br>*/
/*    <div class="well">*/
/*         <strong><center><h2>Supprimer le Stock {{code.libelle}} </h2></center></strong>*/
/*         </br>*/
/*     {{ form_start(formulaire, {'attr': {'class': 'form-horizontal'}}) }}*/
/*     {{ form_errors(formulaire) }}*/
/*    */
/*     <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(formulaire.quantite, "Quantité", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(formulaire.quantite) }}*/
/* */
/*         <div class="col-sm-4">*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(formulaire.quantite, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(formulaire.produit, "Produit ID", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(formulaire.produit) }}*/
/* */
/*         <div class="col-sm-4">*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(formulaire.produit, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*         {# Génération du label. #}*/
/*         {{ form_label(formulaire.seuilmin, "Seuil Minimum", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(formulaire.seuilmin) }}*/
/* */
/*         <div class="col-sm-4">*/
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(formulaire.seuilmin, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*         </br>*/
/*    */
/*         <span style="margin-left:30%">{{ form_widget(formulaire.Supprimer, {'label': 'Supprimer', 'attr': {'class': 'btn btn-danger'}}) }}</span>*/
/* */
/*         <span style="margin-left:25%">{{ form_widget(formulaire.Annuler, {'label': 'Annuler', 'attr': {'class': 'btn btn-warning'}}) }}</span>*/
/* */
/*     {{ form_widget(formulaire) }}*/
/*      {{ form_end(formulaire) }} */
/*      </div>*/
/*   {%endblock%}*/
