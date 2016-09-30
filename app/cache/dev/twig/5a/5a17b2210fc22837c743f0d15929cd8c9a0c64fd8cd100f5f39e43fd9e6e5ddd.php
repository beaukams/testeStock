<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_e155bdb98401ebc795006e9e6221c5dcf02a32f605d74c79dab099eb1a4517fb extends Twig_Template
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
        $__internal_0aeacbbbb87f7361e931f5bed4a48cd8c367d42cfdcf8cc3efaf042e1e2e4418 = $this->env->getExtension("native_profiler");
        $__internal_0aeacbbbb87f7361e931f5bed4a48cd8c367d42cfdcf8cc3efaf042e1e2e4418->enter($__internal_0aeacbbbb87f7361e931f5bed4a48cd8c367d42cfdcf8cc3efaf042e1e2e4418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_0aeacbbbb87f7361e931f5bed4a48cd8c367d42cfdcf8cc3efaf042e1e2e4418->leave($__internal_0aeacbbbb87f7361e931f5bed4a48cd8c367d42cfdcf8cc3efaf042e1e2e4418_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  29 => 2,  22 => 1,);
    }
}
/* <form action="{{ path('fos_user_registration_register') }}" {{ form_enctype(form) }} method="POST" class="fos_user_registration_register">*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*     </div>*/
/* </form>*/
/* */
