<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_d9472803cfe37cd037591df0d43afb397e3b837f111e16ff69b6263f5a47a3fa extends Twig_Template
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
        $__internal_d776f27af74951c61d3d712820ccb9d0b0d99c5422734fd3f4d1d11000354342 = $this->env->getExtension("native_profiler");
        $__internal_d776f27af74951c61d3d712820ccb9d0b0d99c5422734fd3f4d1d11000354342->enter($__internal_d776f27af74951c61d3d712820ccb9d0b0d99c5422734fd3f4d1d11000354342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d776f27af74951c61d3d712820ccb9d0b0d99c5422734fd3f4d1d11000354342->leave($__internal_d776f27af74951c61d3d712820ccb9d0b0d99c5422734fd3f4d1d11000354342_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
