<?php

/* SonataAdminBundle:CRUD:list__action.html.twig */
class __TwigTemplate_f6868f3d1c3410c7ac702f55d36087d81c21052571dd10ffb372134251eba3c0 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73fb158721ef941bfa2b6b7979e03e424b6903c3249b12e54f391aa8735fb79d = $this->env->getExtension("native_profiler");
        $__internal_73fb158721ef941bfa2b6b7979e03e424b6903c3249b12e54f391aa8735fb79d->enter($__internal_73fb158721ef941bfa2b6b7979e03e424b6903c3249b12e54f391aa8735fb79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73fb158721ef941bfa2b6b7979e03e424b6903c3249b12e54f391aa8735fb79d->leave($__internal_73fb158721ef941bfa2b6b7979e03e424b6903c3249b12e54f391aa8735fb79d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_dec40c8be8dec9cf5e27b59bf317ccb73f1187a4e7c08e3819f60c36c1b4a878 = $this->env->getExtension("native_profiler");
        $__internal_dec40c8be8dec9cf5e27b59bf317ccb73f1187a4e7c08e3819f60c36c1b4a878->enter($__internal_dec40c8be8dec9cf5e27b59bf317ccb73f1187a4e7c08e3819f60c36c1b4a878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <div class=\"btn-group\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "actions", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["actions"]) {
            // line 17
            echo "            ";
            $this->loadTemplate($this->getAttribute($context["actions"], "template", array()), "SonataAdminBundle:CRUD:list__action.html.twig", 17)->display($context);
            // line 18
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
";
        
        $__internal_dec40c8be8dec9cf5e27b59bf317ccb73f1187a4e7c08e3819f60c36c1b4a878->leave($__internal_dec40c8be8dec9cf5e27b59bf317ccb73f1187a4e7c08e3819f60c36c1b4a878_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  62 => 18,  59 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
/*     <div class="btn-group">*/
/*         {% for actions in field_description.options.actions %}*/
/*             {% include actions.template %}*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
