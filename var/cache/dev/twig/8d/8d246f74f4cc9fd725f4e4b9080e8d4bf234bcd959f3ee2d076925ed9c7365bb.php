<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_f6217e166b994556adba263301db96e59c16bbb339fedd6cb1926679508bc20e extends Twig_Template
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
        $__internal_99220bd4fc25f4aabd7c65ee19a68d10e0019d2b1dcac058af904d930e686532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99220bd4fc25f4aabd7c65ee19a68d10e0019d2b1dcac058af904d930e686532->enter($__internal_99220bd4fc25f4aabd7c65ee19a68d10e0019d2b1dcac058af904d930e686532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_8095ded4c5d3715878c966f6d96783d3f4dd2ea31f6176a4494ce909e604c537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8095ded4c5d3715878c966f6d96783d3f4dd2ea31f6176a4494ce909e604c537->enter($__internal_8095ded4c5d3715878c966f6d96783d3f4dd2ea31f6176a4494ce909e604c537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_99220bd4fc25f4aabd7c65ee19a68d10e0019d2b1dcac058af904d930e686532->leave($__internal_99220bd4fc25f4aabd7c65ee19a68d10e0019d2b1dcac058af904d930e686532_prof);

        
        $__internal_8095ded4c5d3715878c966f6d96783d3f4dd2ea31f6176a4494ce909e604c537->leave($__internal_8095ded4c5d3715878c966f6d96783d3f4dd2ea31f6176a4494ce909e604c537_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/cartel_team/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
