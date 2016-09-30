<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_9f8f404be913e8ebba21b2d0ab6591ecd1f3b8f57f55ae3be0fbeba8cff98dbb extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4de8dead95a70e9fe9bb8642c4d703b4c7cb770bb15a8cf69b523b470f8d20d = $this->env->getExtension("native_profiler");
        $__internal_e4de8dead95a70e9fe9bb8642c4d703b4c7cb770bb15a8cf69b523b470f8d20d->enter($__internal_e4de8dead95a70e9fe9bb8642c4d703b4c7cb770bb15a8cf69b523b470f8d20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4de8dead95a70e9fe9bb8642c4d703b4c7cb770bb15a8cf69b523b470f8d20d->leave($__internal_e4de8dead95a70e9fe9bb8642c4d703b4c7cb770bb15a8cf69b523b470f8d20d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f8ceccc6d785ad7550411c36a43b672549f9d64f6b1591d24ff886ecce26ce7d = $this->env->getExtension("native_profiler");
        $__internal_f8ceccc6d785ad7550411c36a43b672549f9d64f6b1591d24ff886ecce26ce7d->enter($__internal_f8ceccc6d785ad7550411c36a43b672549f9d64f6b1591d24ff886ecce26ce7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_f8ceccc6d785ad7550411c36a43b672549f9d64f6b1591d24ff886ecce26ce7d->leave($__internal_f8ceccc6d785ad7550411c36a43b672549f9d64f6b1591d24ff886ecce26ce7d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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
/* {% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}*/
/* */
