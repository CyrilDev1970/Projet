<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_71e9dcbef320040219a1db1e2fb8b698e8c8d462086ee2564e2982396dc53d5e extends Twig_Template
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
        $__internal_1838a67ed30bdeab00f6b311eede1404e5bb8ada740c27a76becf63bf1bafce4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1838a67ed30bdeab00f6b311eede1404e5bb8ada740c27a76becf63bf1bafce4->enter($__internal_1838a67ed30bdeab00f6b311eede1404e5bb8ada740c27a76becf63bf1bafce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_69a5fc6cc82ea083f17f7bd065500d5b07cd2f45a47d75da72b0974d3700724f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69a5fc6cc82ea083f17f7bd065500d5b07cd2f45a47d75da72b0974d3700724f->enter($__internal_69a5fc6cc82ea083f17f7bd065500d5b07cd2f45a47d75da72b0974d3700724f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_1838a67ed30bdeab00f6b311eede1404e5bb8ada740c27a76becf63bf1bafce4->leave($__internal_1838a67ed30bdeab00f6b311eede1404e5bb8ada740c27a76becf63bf1bafce4_prof);

        
        $__internal_69a5fc6cc82ea083f17f7bd065500d5b07cd2f45a47d75da72b0974d3700724f->leave($__internal_69a5fc6cc82ea083f17f7bd065500d5b07cd2f45a47d75da72b0974d3700724f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
