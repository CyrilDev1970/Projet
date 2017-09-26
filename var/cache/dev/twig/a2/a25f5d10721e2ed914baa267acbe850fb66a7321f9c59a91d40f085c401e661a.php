<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_f423f2843e5d1c0d130d905c1bed80167d69872a5c423eb802e4ec14d12432ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1020e3a4d4d8309f4b6cf11745b8b566ad3dc6759777e2d1ed7422336ad37295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1020e3a4d4d8309f4b6cf11745b8b566ad3dc6759777e2d1ed7422336ad37295->enter($__internal_1020e3a4d4d8309f4b6cf11745b8b566ad3dc6759777e2d1ed7422336ad37295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_c98692404085490c019634ad50c236e7e0f7cf55314ad118f2ed36db7125a119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c98692404085490c019634ad50c236e7e0f7cf55314ad118f2ed36db7125a119->enter($__internal_c98692404085490c019634ad50c236e7e0f7cf55314ad118f2ed36db7125a119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1020e3a4d4d8309f4b6cf11745b8b566ad3dc6759777e2d1ed7422336ad37295->leave($__internal_1020e3a4d4d8309f4b6cf11745b8b566ad3dc6759777e2d1ed7422336ad37295_prof);

        
        $__internal_c98692404085490c019634ad50c236e7e0f7cf55314ad118f2ed36db7125a119->leave($__internal_c98692404085490c019634ad50c236e7e0f7cf55314ad118f2ed36db7125a119_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d697b994a4b410271a96619f3025174a7ea6e0566c8f81d2624c8f393e60bd9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d697b994a4b410271a96619f3025174a7ea6e0566c8f81d2624c8f393e60bd9b->enter($__internal_d697b994a4b410271a96619f3025174a7ea6e0566c8f81d2624c8f393e60bd9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_928e91ed51f114e8eaa880d363c114faf9a89004db9b156030f0d64116507718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_928e91ed51f114e8eaa880d363c114faf9a89004db9b156030f0d64116507718->enter($__internal_928e91ed51f114e8eaa880d363c114faf9a89004db9b156030f0d64116507718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_928e91ed51f114e8eaa880d363c114faf9a89004db9b156030f0d64116507718->leave($__internal_928e91ed51f114e8eaa880d363c114faf9a89004db9b156030f0d64116507718_prof);

        
        $__internal_d697b994a4b410271a96619f3025174a7ea6e0566c8f81d2624c8f393e60bd9b->leave($__internal_d697b994a4b410271a96619f3025174a7ea6e0566c8f81d2624c8f393e60bd9b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/cartel_team/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
