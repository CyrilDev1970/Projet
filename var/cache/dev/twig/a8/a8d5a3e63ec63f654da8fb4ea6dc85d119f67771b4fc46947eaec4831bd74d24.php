<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_cd51f700ad647e562be98ad3b02868fd8b86a17a5ef2bd8021a18c9de9ad2f5d extends Twig_Template
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
        $__internal_5d0b7f6dde8fd0bbdc33bde5068318fc977a00d071c3540afbba15e2748ddf6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d0b7f6dde8fd0bbdc33bde5068318fc977a00d071c3540afbba15e2748ddf6f->enter($__internal_5d0b7f6dde8fd0bbdc33bde5068318fc977a00d071c3540afbba15e2748ddf6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_3dc8248b040d310c94edb75121bb7916335d6ae2ab1c893963376b8edb8f751e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dc8248b040d310c94edb75121bb7916335d6ae2ab1c893963376b8edb8f751e->enter($__internal_3dc8248b040d310c94edb75121bb7916335d6ae2ab1c893963376b8edb8f751e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_5d0b7f6dde8fd0bbdc33bde5068318fc977a00d071c3540afbba15e2748ddf6f->leave($__internal_5d0b7f6dde8fd0bbdc33bde5068318fc977a00d071c3540afbba15e2748ddf6f_prof);

        
        $__internal_3dc8248b040d310c94edb75121bb7916335d6ae2ab1c893963376b8edb8f751e->leave($__internal_3dc8248b040d310c94edb75121bb7916335d6ae2ab1c893963376b8edb8f751e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
