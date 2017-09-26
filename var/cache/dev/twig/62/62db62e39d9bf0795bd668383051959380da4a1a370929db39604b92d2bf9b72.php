<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_701dcdd97d37dad2e87d66c4193097c3165f41f9a0e608fa8208817dd4d44b31 extends Twig_Template
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
        $__internal_5084692a1348c0c6ce6fa87a0cbe55c554b1c5eadcd5831002c20227d2323074 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5084692a1348c0c6ce6fa87a0cbe55c554b1c5eadcd5831002c20227d2323074->enter($__internal_5084692a1348c0c6ce6fa87a0cbe55c554b1c5eadcd5831002c20227d2323074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_ae62867396e0dbae526a963aca0c0e8ed5307353f785e589f465eab83cee4f3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae62867396e0dbae526a963aca0c0e8ed5307353f785e589f465eab83cee4f3c->enter($__internal_ae62867396e0dbae526a963aca0c0e8ed5307353f785e589f465eab83cee4f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_5084692a1348c0c6ce6fa87a0cbe55c554b1c5eadcd5831002c20227d2323074->leave($__internal_5084692a1348c0c6ce6fa87a0cbe55c554b1c5eadcd5831002c20227d2323074_prof);

        
        $__internal_ae62867396e0dbae526a963aca0c0e8ed5307353f785e589f465eab83cee4f3c->leave($__internal_ae62867396e0dbae526a963aca0c0e8ed5307353f785e589f465eab83cee4f3c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
