<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_1777f099f44d06a6bd844fe66d57e9951547d9a9154a4e11232e0087dad9f3c2 extends Twig_Template
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
        $__internal_0cc72ffdfa050d30f9eaff405fa1fe1d21853e3a44954bc62bfa2ac86b916ff8 = $this->env->getExtension("native_profiler");
        $__internal_0cc72ffdfa050d30f9eaff405fa1fe1d21853e3a44954bc62bfa2ac86b916ff8->enter($__internal_0cc72ffdfa050d30f9eaff405fa1fe1d21853e3a44954bc62bfa2ac86b916ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_0cc72ffdfa050d30f9eaff405fa1fe1d21853e3a44954bc62bfa2ac86b916ff8->leave($__internal_0cc72ffdfa050d30f9eaff405fa1fe1d21853e3a44954bc62bfa2ac86b916ff8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
