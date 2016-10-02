<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_bc005fbefe68a882e34b0cd6cb46fbd2d43527e3e270d119bd4546f0f8cb0092 extends Twig_Template
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
        $__internal_f7216dede2dbd993d21801917f14908171ff8938fe576df1260260aad121b3d2 = $this->env->getExtension("native_profiler");
        $__internal_f7216dede2dbd993d21801917f14908171ff8938fe576df1260260aad121b3d2->enter($__internal_f7216dede2dbd993d21801917f14908171ff8938fe576df1260260aad121b3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_f7216dede2dbd993d21801917f14908171ff8938fe576df1260260aad121b3d2->leave($__internal_f7216dede2dbd993d21801917f14908171ff8938fe576df1260260aad121b3d2_prof);

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
