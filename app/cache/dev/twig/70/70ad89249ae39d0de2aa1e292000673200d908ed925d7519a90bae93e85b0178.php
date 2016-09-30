<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_5eec79836aa76e10227ef0c512f95593ca4818144809816f4839e71183780589 extends Twig_Template
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
        $__internal_f35b49128b8b5d0aebbb4eda5bf62fc1de7a74df8ef41892bd56378407c2bb0f = $this->env->getExtension("native_profiler");
        $__internal_f35b49128b8b5d0aebbb4eda5bf62fc1de7a74df8ef41892bd56378407c2bb0f->enter($__internal_f35b49128b8b5d0aebbb4eda5bf62fc1de7a74df8ef41892bd56378407c2bb0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f35b49128b8b5d0aebbb4eda5bf62fc1de7a74df8ef41892bd56378407c2bb0f->leave($__internal_f35b49128b8b5d0aebbb4eda5bf62fc1de7a74df8ef41892bd56378407c2bb0f_prof);

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
