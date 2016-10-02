<?php

/* SonataUserBundle:Profile:edit_authentication_content.html.twig */
class __TwigTemplate_8bec959114074c4c9ed9f0bb20c6da5996a7003d6cb32e465e01151c5f799326 extends Twig_Template
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
        $__internal_b3f7df85f907706505747b6d7b6ec2faacdf72d7be81afa0367361e539f3f60b = $this->env->getExtension("native_profiler");
        $__internal_b3f7df85f907706505747b6d7b6ec2faacdf72d7be81afa0367361e539f3f60b->enter($__internal_b3f7df85f907706505747b6d7b6ec2faacdf72d7be81afa0367361e539f3f60b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Profile:edit_authentication_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("sonata_user_profile_edit_authentication");
        echo "\" method=\"POST\" class=\"form-horizontal\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    <button type=\"submit\" name=\"submit\" class=\"btn btn-primary pull-right\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sonata_user_submit", array(), "SonataUserBundle"), "html", null, true);
        echo "</button>
</form>
";
        
        $__internal_b3f7df85f907706505747b6d7b6ec2faacdf72d7be81afa0367361e539f3f60b->leave($__internal_b3f7df85f907706505747b6d7b6ec2faacdf72d7be81afa0367361e539f3f60b_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:edit_authentication_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  27 => 2,  22 => 1,);
    }
}
/* <form action="{{ path('sonata_user_profile_edit_authentication') }}" method="POST" class="form-horizontal">*/
/*     {{ form_widget(form) }}*/
/* */
/*     <button type="submit" name="submit" class="btn btn-primary pull-right">{{ 'sonata_user_submit'|trans({}, 'SonataUserBundle') }}</button>*/
/* </form>*/
/* */
