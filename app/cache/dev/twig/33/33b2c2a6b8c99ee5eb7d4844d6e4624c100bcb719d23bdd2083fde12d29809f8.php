<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_2a44cba08ffa1d7754b3a066534be623ad0cab52f31bb7831ef1d6b5f191fd39 extends Twig_Template
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
        $__internal_b54a37bf7f93a0b0e2d46d8551a5cf93f760462311143c35d30be69b3961f31e = $this->env->getExtension("native_profiler");
        $__internal_b54a37bf7f93a0b0e2d46d8551a5cf93f760462311143c35d30be69b3961f31e->enter($__internal_b54a37bf7f93a0b0e2d46d8551a5cf93f760462311143c35d30be69b3961f31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b54a37bf7f93a0b0e2d46d8551a5cf93f760462311143c35d30be69b3961f31e->leave($__internal_b54a37bf7f93a0b0e2d46d8551a5cf93f760462311143c35d30be69b3961f31e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
