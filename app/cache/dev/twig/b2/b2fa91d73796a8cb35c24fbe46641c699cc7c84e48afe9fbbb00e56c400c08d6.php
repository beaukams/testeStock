<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_3fc7bda08e46e96fe734388d5b7922d9de6bc69c286cebc6898af719673d71c6 extends Twig_Template
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
        $__internal_c22f894c1a4b8e0cda7b12b11913a547fd9f5d76af49efc79d72899ba994bd93 = $this->env->getExtension("native_profiler");
        $__internal_c22f894c1a4b8e0cda7b12b11913a547fd9f5d76af49efc79d72899ba994bd93->enter($__internal_c22f894c1a4b8e0cda7b12b11913a547fd9f5d76af49efc79d72899ba994bd93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_c22f894c1a4b8e0cda7b12b11913a547fd9f5d76af49efc79d72899ba994bd93->leave($__internal_c22f894c1a4b8e0cda7b12b11913a547fd9f5d76af49efc79d72899ba994bd93_prof);

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
