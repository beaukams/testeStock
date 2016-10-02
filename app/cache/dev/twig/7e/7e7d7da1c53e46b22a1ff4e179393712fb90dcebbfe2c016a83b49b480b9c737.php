<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_30c0373e36307f668d04299535a2bdc57d7a5d04462c9ee790d7842f832f8c44 extends Twig_Template
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
        $__internal_31dd380f5639499cd3b08ce046806f2077613135582ee91d598e00435e4db51f = $this->env->getExtension("native_profiler");
        $__internal_31dd380f5639499cd3b08ce046806f2077613135582ee91d598e00435e4db51f->enter($__internal_31dd380f5639499cd3b08ce046806f2077613135582ee91d598e00435e4db51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_31dd380f5639499cd3b08ce046806f2077613135582ee91d598e00435e4db51f->leave($__internal_31dd380f5639499cd3b08ce046806f2077613135582ee91d598e00435e4db51f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
