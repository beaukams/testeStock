<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_6bc718c92c16e712b4842acf9dafaf01845191f2853aac5d738826da0c9d7f8c extends Twig_Template
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
        $__internal_3e21ea2c39dddb05dd2eff9f19e458562e2bf65fa36f72c5bded3396e5a20f35 = $this->env->getExtension("native_profiler");
        $__internal_3e21ea2c39dddb05dd2eff9f19e458562e2bf65fa36f72c5bded3396e5a20f35->enter($__internal_3e21ea2c39dddb05dd2eff9f19e458562e2bf65fa36f72c5bded3396e5a20f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3e21ea2c39dddb05dd2eff9f19e458562e2bf65fa36f72c5bded3396e5a20f35->leave($__internal_3e21ea2c39dddb05dd2eff9f19e458562e2bf65fa36f72c5bded3396e5a20f35_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
