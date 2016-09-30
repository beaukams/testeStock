<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_1b6b451aabdc8304543b55737027059d247fdfe14e06a22c547e17c26adba8f7 extends Twig_Template
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
        $__internal_eb53bfa5953d04cbc7bcf1a5db78db2acd82d99df79300568d447a30f6b3e017 = $this->env->getExtension("native_profiler");
        $__internal_eb53bfa5953d04cbc7bcf1a5db78db2acd82d99df79300568d447a30f6b3e017->enter($__internal_eb53bfa5953d04cbc7bcf1a5db78db2acd82d99df79300568d447a30f6b3e017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_eb53bfa5953d04cbc7bcf1a5db78db2acd82d99df79300568d447a30f6b3e017->leave($__internal_eb53bfa5953d04cbc7bcf1a5db78db2acd82d99df79300568d447a30f6b3e017_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
