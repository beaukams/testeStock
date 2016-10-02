<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_886b58f83f3dbbd339ee68c4d4d1495d7eeb2742b5895628b4e0666fd3c606c5 extends Twig_Template
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
        $__internal_62f18cb685e814dc46013d2d48681f3f8a2b9d7bca82e8eb34793b32292e61dc = $this->env->getExtension("native_profiler");
        $__internal_62f18cb685e814dc46013d2d48681f3f8a2b9d7bca82e8eb34793b32292e61dc->enter($__internal_62f18cb685e814dc46013d2d48681f3f8a2b9d7bca82e8eb34793b32292e61dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_62f18cb685e814dc46013d2d48681f3f8a2b9d7bca82e8eb34793b32292e61dc->leave($__internal_62f18cb685e814dc46013d2d48681f3f8a2b9d7bca82e8eb34793b32292e61dc_prof);

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
