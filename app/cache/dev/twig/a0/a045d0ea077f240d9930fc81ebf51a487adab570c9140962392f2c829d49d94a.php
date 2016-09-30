<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_bfc9c672104df085352d06ed3af271f5611dd3987637cf87dafab361eeba5176 extends Twig_Template
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
        $__internal_e71158d18318c8b5c9bc632b20a9d0849f7270462df82ae5f576dc92c31c40e2 = $this->env->getExtension("native_profiler");
        $__internal_e71158d18318c8b5c9bc632b20a9d0849f7270462df82ae5f576dc92c31c40e2->enter($__internal_e71158d18318c8b5c9bc632b20a9d0849f7270462df82ae5f576dc92c31c40e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_e71158d18318c8b5c9bc632b20a9d0849f7270462df82ae5f576dc92c31c40e2->leave($__internal_e71158d18318c8b5c9bc632b20a9d0849f7270462df82ae5f576dc92c31c40e2_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}*/
/* */
