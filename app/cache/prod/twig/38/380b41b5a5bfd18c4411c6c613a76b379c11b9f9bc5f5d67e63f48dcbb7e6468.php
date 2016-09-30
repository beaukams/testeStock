<?php

/* GestionStockBundle:Default:modifier.html.twig */
class __TwigTemplate_6c0a43c1c8ea276234915c2b7e317cfefd40d407032a011d412f292895a24046 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GestionStockBundle::template.html.twig", "GestionStockBundle:Default:modifier.html.twig", 1);
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
        echo "\t <br><br>
\t <div class=\"well\">
        <em><center><h2>Modifier le Stock ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : null), "id", array()), "html", null, true);
        echo " </h2></center></em>
        </br>
\t\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'errors');
        echo "
\t\t<div class=\"form-group\">
\t\t    ";
        // line 11
        echo "\t\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "quantite", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Quantité"));
        echo "

\t\t    ";
        // line 14
        echo "\t\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "quantite", array()), 'errors');
        echo "

\t\t    <div class=\"col-sm-4\">
\t\t        ";
        // line 18
        echo "\t\t        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "quantite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    </div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t    ";
        // line 24
        echo "\t\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "seuilmin", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Seuil Minimum"));
        echo "

\t\t    ";
        // line 27
        echo "\t\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "seuilmin", array()), 'errors');
        echo "

\t\t    <div class=\"col-sm-4\">
\t\t        ";
        // line 31
        echo "\t\t        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "seuilmin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    </div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t    ";
        // line 37
        echo "\t\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "produit", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Produit ID"));
        echo "

\t\t    ";
        // line 40
        echo "\t\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "produit", array()), 'errors');
        echo "

\t\t    <div class=\"col-sm-4\">
\t\t        ";
        // line 44
        echo "\t\t        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "produit", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    </div>
\t\t</div>
\t
\t   </br>
        <span style=\"margin-left:30%\">";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "Modifier", array()), 'widget', array("label" => "Modifier", "attr" => array("class" => "btn btn-primary")));
        echo "</span>

         <span style=\"margin-left:25%\">";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "Annuler", array()), 'widget', array("label" => "Annuler", "attr" => array("class" => "btn btn-warning")));
        echo "</span>

\t\t";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'widget');
        echo "
\t\t ";
        // line 54
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'form_end');
        echo "\t
\t\t </div>
\t";
    }

    public function getTemplateName()
    {
        return "GestionStockBundle:Default:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 54,  125 => 53,  120 => 51,  115 => 49,  106 => 44,  99 => 40,  93 => 37,  84 => 31,  77 => 27,  71 => 24,  62 => 18,  55 => 14,  49 => 11,  44 => 8,  40 => 7,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "GestionStockBundle::template.html.twig" %}*/
/* 	 {% block contenu %}*/
/* 	 <br><br>*/
/* 	 <div class="well">*/
/*         <em><center><h2>Modifier le Stock {{code.id}} </h2></center></em>*/
/*         </br>*/
/* 		{{ form_start(formulaire, {'attr': {'class': 'form-horizontal'}}) }}*/
/* 		{{ form_errors(formulaire) }}*/
/* 		<div class="form-group">*/
/* 		    {# Génération du label. #}*/
/* 		    {{ form_label(formulaire.quantite, "Quantité", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/* */
/* 		    {# Affichage des erreurs pour ce champ précis. #}*/
/* 		    {{ form_errors(formulaire.quantite) }}*/
/* */
/* 		    <div class="col-sm-4">*/
/* 		        {# Génération de l'input. #}*/
/* 		        {{ form_widget(formulaire.quantite, {'attr': {'class': 'form-control'}}) }}*/
/* 		    </div>*/
/* 		</div>*/
/* */
/* 		<div class="form-group">*/
/* 		    {# Génération du label. #}*/
/* 		    {{ form_label(formulaire.seuilmin, "Seuil Minimum", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/* */
/* 		    {# Affichage des erreurs pour ce champ précis. #}*/
/* 		    {{ form_errors(formulaire.seuilmin) }}*/
/* */
/* 		    <div class="col-sm-4">*/
/* 		        {# Génération de l'input. #}*/
/* 		        {{ form_widget(formulaire.seuilmin, {'attr': {'class': 'form-control'}}) }}*/
/* 		    </div>*/
/* 		</div>*/
/* */
/* 		<div class="form-group">*/
/* 		    {# Génération du label. #}*/
/* 		    {{ form_label(formulaire.produit, "Produit ID", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/* */
/* 		    {# Affichage des erreurs pour ce champ précis. #}*/
/* 		    {{ form_errors(formulaire.produit) }}*/
/* */
/* 		    <div class="col-sm-4">*/
/* 		        {# Génération de l'input. #}*/
/* 		        {{ form_widget(formulaire.produit, {'attr': {'class': 'form-control'}}) }}*/
/* 		    </div>*/
/* 		</div>*/
/* 	*/
/* 	   </br>*/
/*         <span style="margin-left:30%">{{ form_widget(formulaire.Modifier, {'label': 'Modifier', 'attr': {'class': 'btn btn-primary'}}) }}</span>*/
/* */
/*          <span style="margin-left:25%">{{ form_widget(formulaire.Annuler, {'label': 'Annuler', 'attr': {'class': 'btn btn-warning'}}) }}</span>*/
/* */
/* 		{{ form_widget(formulaire) }}*/
/* 		 {{ form_end(formulaire) }}	*/
/* 		 </div>*/
/* 	{%endblock%}*/
