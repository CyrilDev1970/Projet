<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_5290a5a34246a26095d6bb3b1e2a021f3e474a6860c4498366d440b6a0a3d82b extends Twig_Template
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
        $__internal_57b7a5b80ddd872dd185bd6935c27791b3b17a3b7a3c02b48bdeb7e44ca08a99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57b7a5b80ddd872dd185bd6935c27791b3b17a3b7a3c02b48bdeb7e44ca08a99->enter($__internal_57b7a5b80ddd872dd185bd6935c27791b3b17a3b7a3c02b48bdeb7e44ca08a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_710540fdfb63b4930ed14bcca468f9d72b26c8daac46296a62ec0c31582a3b71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_710540fdfb63b4930ed14bcca468f9d72b26c8daac46296a62ec0c31582a3b71->enter($__internal_710540fdfb63b4930ed14bcca468f9d72b26c8daac46296a62ec0c31582a3b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_57b7a5b80ddd872dd185bd6935c27791b3b17a3b7a3c02b48bdeb7e44ca08a99->leave($__internal_57b7a5b80ddd872dd185bd6935c27791b3b17a3b7a3c02b48bdeb7e44ca08a99_prof);

        
        $__internal_710540fdfb63b4930ed14bcca468f9d72b26c8daac46296a62ec0c31582a3b71->leave($__internal_710540fdfb63b4930ed14bcca468f9d72b26c8daac46296a62ec0c31582a3b71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
