<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0b0ad4263d379055fb73f54e032e575e75e67954236cd3422b3514e51cd7388c extends Twig_Template
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
        $__internal_e2867274f00a6549516a0873b48c897441621e8878f95cd0e5c9f3cd9cbcf573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2867274f00a6549516a0873b48c897441621e8878f95cd0e5c9f3cd9cbcf573->enter($__internal_e2867274f00a6549516a0873b48c897441621e8878f95cd0e5c9f3cd9cbcf573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_2585d4634ea2375e83aedc7566d8b7ab7fab3eb802031c40a12ddaa3934c7833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2585d4634ea2375e83aedc7566d8b7ab7fab3eb802031c40a12ddaa3934c7833->enter($__internal_2585d4634ea2375e83aedc7566d8b7ab7fab3eb802031c40a12ddaa3934c7833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_e2867274f00a6549516a0873b48c897441621e8878f95cd0e5c9f3cd9cbcf573->leave($__internal_e2867274f00a6549516a0873b48c897441621e8878f95cd0e5c9f3cd9cbcf573_prof);

        
        $__internal_2585d4634ea2375e83aedc7566d8b7ab7fab3eb802031c40a12ddaa3934c7833->leave($__internal_2585d4634ea2375e83aedc7566d8b7ab7fab3eb802031c40a12ddaa3934c7833_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
