<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_5905803f5cb4a68e01eb1c433b37c8a99759379ac72c3ac6a4588bccbc59ebde extends Twig_Template
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
        $__internal_e8e7d81d9e8d2994611df4affa858f3465ac099de39233203ca5eb84e3740a8e = $this->env->getExtension("native_profiler");
        $__internal_e8e7d81d9e8d2994611df4affa858f3465ac099de39233203ca5eb84e3740a8e->enter($__internal_e8e7d81d9e8d2994611df4affa858f3465ac099de39233203ca5eb84e3740a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_e8e7d81d9e8d2994611df4affa858f3465ac099de39233203ca5eb84e3740a8e->leave($__internal_e8e7d81d9e8d2994611df4affa858f3465ac099de39233203ca5eb84e3740a8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
