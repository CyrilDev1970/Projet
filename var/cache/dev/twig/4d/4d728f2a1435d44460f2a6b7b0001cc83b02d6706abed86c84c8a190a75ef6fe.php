<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_46badc8b4b6e4068b77294a33514b427c0c9333f4652b375a159293378ec6091 extends Twig_Template
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
        $__internal_0d28887b12c25e83ad002643ce704cf51e3a6c9386821ca2086666b614b007a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d28887b12c25e83ad002643ce704cf51e3a6c9386821ca2086666b614b007a4->enter($__internal_0d28887b12c25e83ad002643ce704cf51e3a6c9386821ca2086666b614b007a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_fe6df5f4d198f5c07b366b60b25dd209fdc31641d6f42cc533a55759666f2289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe6df5f4d198f5c07b366b60b25dd209fdc31641d6f42cc533a55759666f2289->enter($__internal_fe6df5f4d198f5c07b366b60b25dd209fdc31641d6f42cc533a55759666f2289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_0d28887b12c25e83ad002643ce704cf51e3a6c9386821ca2086666b614b007a4->leave($__internal_0d28887b12c25e83ad002643ce704cf51e3a6c9386821ca2086666b614b007a4_prof);

        
        $__internal_fe6df5f4d198f5c07b366b60b25dd209fdc31641d6f42cc533a55759666f2289->leave($__internal_fe6df5f4d198f5c07b366b60b25dd209fdc31641d6f42cc533a55759666f2289_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
