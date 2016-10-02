<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_2927b5cc49c79487e92f9a66fbd478a0f796efa874ed8be59f4d1dbe960cba1d extends Twig_Template
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
        $__internal_4aeb608f71c63130760c8a5f37bd28278133687a4088fa39428707524a9463b5 = $this->env->getExtension("native_profiler");
        $__internal_4aeb608f71c63130760c8a5f37bd28278133687a4088fa39428707524a9463b5->enter($__internal_4aeb608f71c63130760c8a5f37bd28278133687a4088fa39428707524a9463b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4aeb608f71c63130760c8a5f37bd28278133687a4088fa39428707524a9463b5->leave($__internal_4aeb608f71c63130760c8a5f37bd28278133687a4088fa39428707524a9463b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
