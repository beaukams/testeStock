<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_0d3bec35d3dd6ab2d420e9bfd26edfb12ee5b3cd70503f19fde37a33d68caecf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40e87fe0258bf2ba572fb1dadd588dc1ae8a50a411a8ed82d648024cc4918d28 = $this->env->getExtension("native_profiler");
        $__internal_40e87fe0258bf2ba572fb1dadd588dc1ae8a50a411a8ed82d648024cc4918d28->enter($__internal_40e87fe0258bf2ba572fb1dadd588dc1ae8a50a411a8ed82d648024cc4918d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_40e87fe0258bf2ba572fb1dadd588dc1ae8a50a411a8ed82d648024cc4918d28->leave($__internal_40e87fe0258bf2ba572fb1dadd588dc1ae8a50a411a8ed82d648024cc4918d28_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans([], 'FOSUserBundle') }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
