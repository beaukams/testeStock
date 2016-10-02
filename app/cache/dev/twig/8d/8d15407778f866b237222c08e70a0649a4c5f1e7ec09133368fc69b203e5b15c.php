<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_7cb95536cc4ab85a28b78839c53593b2697bc245b487b1fee14180f0ea1de272 extends Twig_Template
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
        $__internal_5136cfbf95bb4fddd7ff5ea7a7cf056139d979b34d657ff8ed5f868e5dd57b76 = $this->env->getExtension("native_profiler");
        $__internal_5136cfbf95bb4fddd7ff5ea7a7cf056139d979b34d657ff8ed5f868e5dd57b76->enter($__internal_5136cfbf95bb4fddd7ff5ea7a7cf056139d979b34d657ff8ed5f868e5dd57b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5136cfbf95bb4fddd7ff5ea7a7cf056139d979b34d657ff8ed5f868e5dd57b76->leave($__internal_5136cfbf95bb4fddd7ff5ea7a7cf056139d979b34d657ff8ed5f868e5dd57b76_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1baa4347491bc224c4d2c5d970e5de03df772664816802adbb3cf2b78a3d1dca = $this->env->getExtension("native_profiler");
        $__internal_1baa4347491bc224c4d2c5d970e5de03df772664816802adbb3cf2b78a3d1dca->enter($__internal_1baa4347491bc224c4d2c5d970e5de03df772664816802adbb3cf2b78a3d1dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_1baa4347491bc224c4d2c5d970e5de03df772664816802adbb3cf2b78a3d1dca->leave($__internal_1baa4347491bc224c4d2c5d970e5de03df772664816802adbb3cf2b78a3d1dca_prof);

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
