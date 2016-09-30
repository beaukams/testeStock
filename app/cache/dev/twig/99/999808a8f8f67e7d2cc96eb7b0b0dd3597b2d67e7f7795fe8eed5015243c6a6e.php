<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_fbd1d209ccbd2ce7bbf93e06de0494e61dc6b72769000f8b9204b1c695393646 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_403dbfaa0b106ec174b77274bb536224ab23271ab4892b1067ec13c0d6ece192 = $this->env->getExtension("native_profiler");
        $__internal_403dbfaa0b106ec174b77274bb536224ab23271ab4892b1067ec13c0d6ece192->enter($__internal_403dbfaa0b106ec174b77274bb536224ab23271ab4892b1067ec13c0d6ece192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_403dbfaa0b106ec174b77274bb536224ab23271ab4892b1067ec13c0d6ece192->leave($__internal_403dbfaa0b106ec174b77274bb536224ab23271ab4892b1067ec13c0d6ece192_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_517ac65646ca305bab6e14be4e726faf3fb32302e9de4bce11cdd07e5712273d = $this->env->getExtension("native_profiler");
        $__internal_517ac65646ca305bab6e14be4e726faf3fb32302e9de4bce11cdd07e5712273d->enter($__internal_517ac65646ca305bab6e14be4e726faf3fb32302e9de4bce11cdd07e5712273d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_517ac65646ca305bab6e14be4e726faf3fb32302e9de4bce11cdd07e5712273d->leave($__internal_517ac65646ca305bab6e14be4e726faf3fb32302e9de4bce11cdd07e5712273d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends base_template %}*/
/* */
/* {% block field %}*/
/*     <span class="edit">*/
/*         {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}*/
/*     </span>*/
/* {% endblock %}*/
/* */
