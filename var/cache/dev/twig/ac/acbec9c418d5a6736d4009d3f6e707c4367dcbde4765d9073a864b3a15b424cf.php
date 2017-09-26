<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_fe41488acc3417521100e0f07c1fec3596110dade835cd2bbecc8d7f60cf9337 extends Twig_Template
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
        $__internal_878377018c7749a6b1fc327f848fcc47099b3b76471944c6635b5885cd7b44a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_878377018c7749a6b1fc327f848fcc47099b3b76471944c6635b5885cd7b44a3->enter($__internal_878377018c7749a6b1fc327f848fcc47099b3b76471944c6635b5885cd7b44a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_c5d4a6831357412fa67c8a4f1d4ff11a076f1fa8b5e9950b474ebe124dc9279d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5d4a6831357412fa67c8a4f1d4ff11a076f1fa8b5e9950b474ebe124dc9279d->enter($__internal_c5d4a6831357412fa67c8a4f1d4ff11a076f1fa8b5e9950b474ebe124dc9279d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_878377018c7749a6b1fc327f848fcc47099b3b76471944c6635b5885cd7b44a3->leave($__internal_878377018c7749a6b1fc327f848fcc47099b3b76471944c6635b5885cd7b44a3_prof);

        
        $__internal_c5d4a6831357412fa67c8a4f1d4ff11a076f1fa8b5e9950b474ebe124dc9279d->leave($__internal_c5d4a6831357412fa67c8a4f1d4ff11a076f1fa8b5e9950b474ebe124dc9279d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
