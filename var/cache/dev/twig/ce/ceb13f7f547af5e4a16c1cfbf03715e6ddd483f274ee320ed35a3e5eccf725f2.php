<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_c1378f42193d4f7b23b1915b7440c50c6a8ff2b6d8a416c16bef78faf3ae96e3 extends Twig_Template
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
        $__internal_e91993e0b90befebad114828781c59c501751bf2504c14f25cc2171bf796d646 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e91993e0b90befebad114828781c59c501751bf2504c14f25cc2171bf796d646->enter($__internal_e91993e0b90befebad114828781c59c501751bf2504c14f25cc2171bf796d646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_c8b6b2b1fae721e68540bfcb49befd2fe03bdc87532aebd2d20c80a0775eb846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8b6b2b1fae721e68540bfcb49befd2fe03bdc87532aebd2d20c80a0775eb846->enter($__internal_c8b6b2b1fae721e68540bfcb49befd2fe03bdc87532aebd2d20c80a0775eb846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_e91993e0b90befebad114828781c59c501751bf2504c14f25cc2171bf796d646->leave($__internal_e91993e0b90befebad114828781c59c501751bf2504c14f25cc2171bf796d646_prof);

        
        $__internal_c8b6b2b1fae721e68540bfcb49befd2fe03bdc87532aebd2d20c80a0775eb846->leave($__internal_c8b6b2b1fae721e68540bfcb49befd2fe03bdc87532aebd2d20c80a0775eb846_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
