<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_170017f08bbc5c39c552cbaf211561f7a8d06bc0686c2017c2d52d1c4a4b6eb1 extends Twig_Template
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
        $__internal_28308fe26dc0b61839812cfa09b3c6eda1c65c809804fff0b0469a6bbca36ee9 = $this->env->getExtension("native_profiler");
        $__internal_28308fe26dc0b61839812cfa09b3c6eda1c65c809804fff0b0469a6bbca36ee9->enter($__internal_28308fe26dc0b61839812cfa09b3c6eda1c65c809804fff0b0469a6bbca36ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_28308fe26dc0b61839812cfa09b3c6eda1c65c809804fff0b0469a6bbca36ee9->leave($__internal_28308fe26dc0b61839812cfa09b3c6eda1c65c809804fff0b0469a6bbca36ee9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
