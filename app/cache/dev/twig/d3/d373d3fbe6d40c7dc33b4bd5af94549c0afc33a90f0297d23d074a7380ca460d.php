<?php

/* SonataUserBundle:Profile:edit_profile_content.html.twig */
class __TwigTemplate_447d7f036c632e61738cbd85dd3c5ab534f7bee2dabee76990ead2bc573f0e1c extends Twig_Template
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
        $__internal_a5ff2f2178560470538aa73d96d05da0f9bf60158254b52b72844755f568045c = $this->env->getExtension("native_profiler");
        $__internal_a5ff2f2178560470538aa73d96d05da0f9bf60158254b52b72844755f568045c->enter($__internal_a5ff2f2178560470538aa73d96d05da0f9bf60158254b52b72844755f568045c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Profile:edit_profile_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("sonata_user_profile_edit");
        echo "\" method=\"POST\" class=\"form-horizontal\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div class=\"form-actions\">
        <button type=\"submit\" name=\"submit\"  class=\"btn btn-primary pull-right\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sonata_user_submit", array(), "SonataUserBundle"), "html", null, true);
        echo "</button>
    </div>
</form>
";
        
        $__internal_a5ff2f2178560470538aa73d96d05da0f9bf60158254b52b72844755f568045c->leave($__internal_a5ff2f2178560470538aa73d96d05da0f9bf60158254b52b72844755f568045c_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:edit_profile_content.html.twig";
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
/* <form action="{{ path('sonata_user_profile_edit') }}" method="POST" class="form-horizontal">*/
/*     {{ form_widget(form) }}*/
/*     <div class="form-actions">*/
/*         <button type="submit" name="submit"  class="btn btn-primary pull-right">{{ 'sonata_user_submit'|trans({}, 'SonataUserBundle') }}</button>*/
/*     </div>*/
/* </form>*/
/* */
