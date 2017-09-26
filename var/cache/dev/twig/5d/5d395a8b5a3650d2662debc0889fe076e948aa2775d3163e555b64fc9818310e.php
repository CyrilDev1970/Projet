<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_a5c8d6d4c9dddecdabcaebb193989c6d212e511f40565b9d9d4f7ac5db97348e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_c82045565d4d6480b2ac80b6c1bd4a321a488e93578449adc1647e7805713401 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c82045565d4d6480b2ac80b6c1bd4a321a488e93578449adc1647e7805713401->enter($__internal_c82045565d4d6480b2ac80b6c1bd4a321a488e93578449adc1647e7805713401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_830fc8d73c447a97a9603d3ebf65a972925454d1c5c6e38d758455327f7a0490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_830fc8d73c447a97a9603d3ebf65a972925454d1c5c6e38d758455327f7a0490->enter($__internal_830fc8d73c447a97a9603d3ebf65a972925454d1c5c6e38d758455327f7a0490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c82045565d4d6480b2ac80b6c1bd4a321a488e93578449adc1647e7805713401->leave($__internal_c82045565d4d6480b2ac80b6c1bd4a321a488e93578449adc1647e7805713401_prof);

        
        $__internal_830fc8d73c447a97a9603d3ebf65a972925454d1c5c6e38d758455327f7a0490->leave($__internal_830fc8d73c447a97a9603d3ebf65a972925454d1c5c6e38d758455327f7a0490_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6a827e07c3bb401e0f739cd1c4177070dca51de342701032ec8d6bb3aa540841 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a827e07c3bb401e0f739cd1c4177070dca51de342701032ec8d6bb3aa540841->enter($__internal_6a827e07c3bb401e0f739cd1c4177070dca51de342701032ec8d6bb3aa540841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d4da9f07e1aec24d00aeafbc13ba64d2aa13a5f2042be705229df2b6cac3d9d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4da9f07e1aec24d00aeafbc13ba64d2aa13a5f2042be705229df2b6cac3d9d1->enter($__internal_d4da9f07e1aec24d00aeafbc13ba64d2aa13a5f2042be705229df2b6cac3d9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_d4da9f07e1aec24d00aeafbc13ba64d2aa13a5f2042be705229df2b6cac3d9d1->leave($__internal_d4da9f07e1aec24d00aeafbc13ba64d2aa13a5f2042be705229df2b6cac3d9d1_prof);

        
        $__internal_6a827e07c3bb401e0f739cd1c4177070dca51de342701032ec8d6bb3aa540841->leave($__internal_6a827e07c3bb401e0f739cd1c4177070dca51de342701032ec8d6bb3aa540841_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/cartel_team/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
