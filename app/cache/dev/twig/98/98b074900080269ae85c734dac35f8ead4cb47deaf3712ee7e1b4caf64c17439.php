<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_cec64005d942d28c02d4dc79514966f902ad57e8d8d599b22fc790998f4c51c1 extends Twig_Template
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
        $__internal_11b14ee6f2b6afbcec22730d5ad2fdcc835061ff7985172775af85b2d9d4f52e = $this->env->getExtension("native_profiler");
        $__internal_11b14ee6f2b6afbcec22730d5ad2fdcc835061ff7985172775af85b2d9d4f52e->enter($__internal_11b14ee6f2b6afbcec22730d5ad2fdcc835061ff7985172775af85b2d9d4f52e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_11b14ee6f2b6afbcec22730d5ad2fdcc835061ff7985172775af85b2d9d4f52e->leave($__internal_11b14ee6f2b6afbcec22730d5ad2fdcc835061ff7985172775af85b2d9d4f52e_prof);

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
