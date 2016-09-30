<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_171e130a9ae80680793ec5eeca5d1829ef9420cd95bec7fedf7e22448cf160d4 extends Twig_Template
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
        $__internal_21d8f06e79d19142778a8c6773ae7c0ccc156eaa4562d12aa8a42e82e4a769fa = $this->env->getExtension("native_profiler");
        $__internal_21d8f06e79d19142778a8c6773ae7c0ccc156eaa4562d12aa8a42e82e4a769fa->enter($__internal_21d8f06e79d19142778a8c6773ae7c0ccc156eaa4562d12aa8a42e82e4a769fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_21d8f06e79d19142778a8c6773ae7c0ccc156eaa4562d12aa8a42e82e4a769fa->leave($__internal_21d8f06e79d19142778a8c6773ae7c0ccc156eaa4562d12aa8a42e82e4a769fa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
