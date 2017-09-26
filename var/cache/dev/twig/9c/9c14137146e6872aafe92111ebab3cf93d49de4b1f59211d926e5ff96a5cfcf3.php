<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_6078d66a3b1cce9386b9eab8f49655299b3c02aa4525f8330013081a37aee740 extends Twig_Template
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
        $__internal_cb2cda1d30422eaa4112ca0b775e11d63146755948d7232557413fc3e287ba64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb2cda1d30422eaa4112ca0b775e11d63146755948d7232557413fc3e287ba64->enter($__internal_cb2cda1d30422eaa4112ca0b775e11d63146755948d7232557413fc3e287ba64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_8768e6010ed5402e71f270d50f997e9d918b8c64ea34eefdc281f98c7fc9cd68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8768e6010ed5402e71f270d50f997e9d918b8c64ea34eefdc281f98c7fc9cd68->enter($__internal_8768e6010ed5402e71f270d50f997e9d918b8c64ea34eefdc281f98c7fc9cd68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_cb2cda1d30422eaa4112ca0b775e11d63146755948d7232557413fc3e287ba64->leave($__internal_cb2cda1d30422eaa4112ca0b775e11d63146755948d7232557413fc3e287ba64_prof);

        
        $__internal_8768e6010ed5402e71f270d50f997e9d918b8c64ea34eefdc281f98c7fc9cd68->leave($__internal_8768e6010ed5402e71f270d50f997e9d918b8c64ea34eefdc281f98c7fc9cd68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
