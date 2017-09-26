<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_0f52fd5d75bf84a2e90fc07ec2872336c4eb2373bdaef862c6473dde17dc8724 extends Twig_Template
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
        $__internal_b7cd210d5818c45ebb2d728c6ce6e623e683f21e5d2b68ac4e8dbb964296ce3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7cd210d5818c45ebb2d728c6ce6e623e683f21e5d2b68ac4e8dbb964296ce3f->enter($__internal_b7cd210d5818c45ebb2d728c6ce6e623e683f21e5d2b68ac4e8dbb964296ce3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_65787065cde2f5e3ea9fdd2142f4a3bd2d85410c37359ab4aab0753b9a086b8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65787065cde2f5e3ea9fdd2142f4a3bd2d85410c37359ab4aab0753b9a086b8f->enter($__internal_65787065cde2f5e3ea9fdd2142f4a3bd2d85410c37359ab4aab0753b9a086b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b7cd210d5818c45ebb2d728c6ce6e623e683f21e5d2b68ac4e8dbb964296ce3f->leave($__internal_b7cd210d5818c45ebb2d728c6ce6e623e683f21e5d2b68ac4e8dbb964296ce3f_prof);

        
        $__internal_65787065cde2f5e3ea9fdd2142f4a3bd2d85410c37359ab4aab0753b9a086b8f->leave($__internal_65787065cde2f5e3ea9fdd2142f4a3bd2d85410c37359ab4aab0753b9a086b8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
