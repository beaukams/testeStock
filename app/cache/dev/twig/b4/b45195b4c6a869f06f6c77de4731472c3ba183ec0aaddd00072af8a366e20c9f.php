<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_dcd1e9b82a5f7db634a15debdf261719a05f73006a50ac1f2d0fcbf464d3ecec extends Twig_Template
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
        $__internal_b2e8ecfefdf606c2f3844d33d16497c39d07dc95352b96b0205005032b2f47d7 = $this->env->getExtension("native_profiler");
        $__internal_b2e8ecfefdf606c2f3844d33d16497c39d07dc95352b96b0205005032b2f47d7->enter($__internal_b2e8ecfefdf606c2f3844d33d16497c39d07dc95352b96b0205005032b2f47d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_b2e8ecfefdf606c2f3844d33d16497c39d07dc95352b96b0205005032b2f47d7->leave($__internal_b2e8ecfefdf606c2f3844d33d16497c39d07dc95352b96b0205005032b2f47d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
