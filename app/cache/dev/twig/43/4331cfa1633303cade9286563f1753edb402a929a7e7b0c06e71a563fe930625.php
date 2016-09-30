<?php

/* GestionStockBundle:Default:modifier.html.twig */
class __TwigTemplate_7ae09d1083723c31dd32e879cc7f98cb6c3fb8c90b3f837fadc740a46421db13 extends Twig_Template
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
        $__internal_acc43816e6403b46ebf841717014521b753b07266006525c2eeb68120e219910 = $this->env->getExtension("native_profiler");
        $__internal_acc43816e6403b46ebf841717014521b753b07266006525c2eeb68120e219910->enter($__internal_acc43816e6403b46ebf841717014521b753b07266006525c2eeb68120e219910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GestionStockBundle:Default:modifier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acc43816e6403b46ebf841717014521b753b07266006525c2eeb68120e219910->leave($__internal_acc43816e6403b46ebf841717014521b753b07266006525c2eeb68120e219910_prof);

    }

    // line 2
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_90ee4d5a72dc64b0fae505e8a23ef5c9d3342da9bac9d395c1f77bcacce90d75 = $this->env->getExtension("native_profiler");
        $__internal_90ee4d5a72dc64b0fae505e8a23ef5c9d3342da9bac9d395c1f77bcacce90d75->enter($__internal_90ee4d5a72dc64b0fae505e8a23ef5c9d3342da9bac9d395c1f77bcacce90d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 3
        echo "\t <br><br>
\t <div class=\"well\">
        <em><center><h2>Modifier le Stock ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")), "id", array()), "html", null, true);
        echo " </h2></center></em>
        </br>
\t\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'errors');
        echo "
\t\t<div class=\"form-group\">
\t\t    ";
        // line 11
        echo "\t\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "quantite", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Quantité"));
        echo "

\t\t    ";
        // line 14
        echo "\t\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "quantite", array()), 'errors');
        echo "

\t\t    <div class=\"col-sm-4\">
\t\t        ";
        // line 18
        echo "\t\t        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "quantite", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    </div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t    ";
        // line 24
        echo "\t\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "seuilmin", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Seuil Minimum"));
        echo "

\t\t    ";
        // line 27
        echo "\t\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "seuilmin", array()), 'errors');
        echo "

\t\t    <div class=\"col-sm-4\">
\t\t        ";
        // line 31
        echo "\t\t        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "seuilmin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    </div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t    ";
        // line 37
        echo "\t\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "produit", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Produit ID"));
        echo "

\t\t    ";
        // line 40
        echo "\t\t    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "produit", array()), 'errors');
        echo "

\t\t    <div class=\"col-sm-4\">
\t\t        ";
        // line 44
        echo "\t\t        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "produit", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t    </div>
\t\t</div>
\t
\t   </br>
        <span style=\"margin-left:30%\">";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "Modifier", array()), 'widget', array("label" => "Modifier", "attr" => array("class" => "btn btn-primary")));
        echo "</span>

         <span style=\"margin-left:25%\">";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "Annuler", array()), 'widget', array("label" => "Annuler", "attr" => array("class" => "btn btn-warning")));
        echo "</span>

\t\t";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'widget');
        echo "
\t\t ";
        // line 54
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_end');
        echo "\t
\t\t </div>
\t";
        
        $__internal_90ee4d5a72dc64b0fae505e8a23ef5c9d3342da9bac9d395c1f77bcacce90d75->leave($__internal_90ee4d5a72dc64b0fae505e8a23ef5c9d3342da9bac9d395c1f77bcacce90d75_prof);

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
        return array (  138 => 54,  134 => 53,  129 => 51,  124 => 49,  115 => 44,  108 => 40,  102 => 37,  93 => 31,  86 => 27,  80 => 24,  71 => 18,  64 => 14,  58 => 11,  53 => 8,  49 => 7,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
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
