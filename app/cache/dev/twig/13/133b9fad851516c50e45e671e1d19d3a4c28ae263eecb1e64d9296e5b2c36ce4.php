<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_27d31b535efe30a63139f229148637577c9428519ade59cc8e2bc192a08a0ef7 extends Twig_Template
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
        $__internal_015119a48813d4563c9b072bec53ddf1a6c65d6d9dd9e57cd149802debf601f7 = $this->env->getExtension("native_profiler");
        $__internal_015119a48813d4563c9b072bec53ddf1a6c65d6d9dd9e57cd149802debf601f7->enter($__internal_015119a48813d4563c9b072bec53ddf1a6c65d6d9dd9e57cd149802debf601f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_015119a48813d4563c9b072bec53ddf1a6c65d6d9dd9e57cd149802debf601f7->leave($__internal_015119a48813d4563c9b072bec53ddf1a6c65d6d9dd9e57cd149802debf601f7_prof);

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
