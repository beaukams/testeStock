<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_517126e7d10157a05caa0d7528920ffe25b5713c89e63aa5651ed35a98b1ca0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6a5ea91ba65836cbba1e894e796d6e5b4ec199ff7b8b3eed20b4259d842c183 = $this->env->getExtension("native_profiler");
        $__internal_f6a5ea91ba65836cbba1e894e796d6e5b4ec199ff7b8b3eed20b4259d842c183->enter($__internal_f6a5ea91ba65836cbba1e894e796d6e5b4ec199ff7b8b3eed20b4259d842c183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6a5ea91ba65836cbba1e894e796d6e5b4ec199ff7b8b3eed20b4259d842c183->leave($__internal_f6a5ea91ba65836cbba1e894e796d6e5b4ec199ff7b8b3eed20b4259d842c183_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_759124e47e54652c5365b13def69a9964cf78bfd3fb8eb208795c8321d1467f6 = $this->env->getExtension("native_profiler");
        $__internal_759124e47e54652c5365b13def69a9964cf78bfd3fb8eb208795c8321d1467f6->enter($__internal_759124e47e54652c5365b13def69a9964cf78bfd3fb8eb208795c8321d1467f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_759124e47e54652c5365b13def69a9964cf78bfd3fb8eb208795c8321d1467f6->leave($__internal_759124e47e54652c5365b13def69a9964cf78bfd3fb8eb208795c8321d1467f6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3df8ef6430ac40208f54971d5a04c0a0d6e3d7e6bad448d0926c9d15d89396d1 = $this->env->getExtension("native_profiler");
        $__internal_3df8ef6430ac40208f54971d5a04c0a0d6e3d7e6bad448d0926c9d15d89396d1->enter($__internal_3df8ef6430ac40208f54971d5a04c0a0d6e3d7e6bad448d0926c9d15d89396d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3df8ef6430ac40208f54971d5a04c0a0d6e3d7e6bad448d0926c9d15d89396d1->leave($__internal_3df8ef6430ac40208f54971d5a04c0a0d6e3d7e6bad448d0926c9d15d89396d1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1dd5b2a61d1b2d577b83da17f6a697b5426622a9376cb670dce21840f966656 = $this->env->getExtension("native_profiler");
        $__internal_e1dd5b2a61d1b2d577b83da17f6a697b5426622a9376cb670dce21840f966656->enter($__internal_e1dd5b2a61d1b2d577b83da17f6a697b5426622a9376cb670dce21840f966656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e1dd5b2a61d1b2d577b83da17f6a697b5426622a9376cb670dce21840f966656->leave($__internal_e1dd5b2a61d1b2d577b83da17f6a697b5426622a9376cb670dce21840f966656_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
