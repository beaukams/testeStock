<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_87be698735a59ae8ed8cc6d231289a0ace491f2620f1749bb213d2e197fc01ba extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba0caf35efc19c9390e3b3b63df6efdfb58f3ee6cb862209728a25da9658abc8 = $this->env->getExtension("native_profiler");
        $__internal_ba0caf35efc19c9390e3b3b63df6efdfb58f3ee6cb862209728a25da9658abc8->enter($__internal_ba0caf35efc19c9390e3b3b63df6efdfb58f3ee6cb862209728a25da9658abc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba0caf35efc19c9390e3b3b63df6efdfb58f3ee6cb862209728a25da9658abc8->leave($__internal_ba0caf35efc19c9390e3b3b63df6efdfb58f3ee6cb862209728a25da9658abc8_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c86c9b45c1971c32d47a68550bfd5c12c808b4f4092f6da253a7c5c54d887f8f = $this->env->getExtension("native_profiler");
        $__internal_c86c9b45c1971c32d47a68550bfd5c12c808b4f4092f6da253a7c5c54d887f8f->enter($__internal_c86c9b45c1971c32d47a68550bfd5c12c808b4f4092f6da253a7c5c54d887f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_c86c9b45c1971c32d47a68550bfd5c12c808b4f4092f6da253a7c5c54d887f8f->leave($__internal_c86c9b45c1971c32d47a68550bfd5c12c808b4f4092f6da253a7c5c54d887f8f_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     <input type="checkbox" name="idx[]" value="{{ admin.id(object) }}">*/
/* {% endblock %}*/
/* */
