<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_c6d98632d4052ab5d69d8296de4d5a45bccb0c9aad8d3dc088a13097861e3386 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_e91101b82b80ba506c16738899f3f79aff43006931f99632b432198606647bb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e91101b82b80ba506c16738899f3f79aff43006931f99632b432198606647bb6->enter($__internal_e91101b82b80ba506c16738899f3f79aff43006931f99632b432198606647bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_2b354f1df40e233f1f361d22bcbb9ee9864daff3792c328a1e6d6e831f88dab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b354f1df40e233f1f361d22bcbb9ee9864daff3792c328a1e6d6e831f88dab6->enter($__internal_2b354f1df40e233f1f361d22bcbb9ee9864daff3792c328a1e6d6e831f88dab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e91101b82b80ba506c16738899f3f79aff43006931f99632b432198606647bb6->leave($__internal_e91101b82b80ba506c16738899f3f79aff43006931f99632b432198606647bb6_prof);

        
        $__internal_2b354f1df40e233f1f361d22bcbb9ee9864daff3792c328a1e6d6e831f88dab6->leave($__internal_2b354f1df40e233f1f361d22bcbb9ee9864daff3792c328a1e6d6e831f88dab6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8f2757aef2e44f3928ae8c2b7bdc0c47d39fc0e9e201824bf5c1ac8cfa8c190e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f2757aef2e44f3928ae8c2b7bdc0c47d39fc0e9e201824bf5c1ac8cfa8c190e->enter($__internal_8f2757aef2e44f3928ae8c2b7bdc0c47d39fc0e9e201824bf5c1ac8cfa8c190e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b476163605d55f583cb8c7130481729ee13a8f59108e3b238cadfabf613476f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b476163605d55f583cb8c7130481729ee13a8f59108e3b238cadfabf613476f1->enter($__internal_b476163605d55f583cb8c7130481729ee13a8f59108e3b238cadfabf613476f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_b476163605d55f583cb8c7130481729ee13a8f59108e3b238cadfabf613476f1->leave($__internal_b476163605d55f583cb8c7130481729ee13a8f59108e3b238cadfabf613476f1_prof);

        
        $__internal_8f2757aef2e44f3928ae8c2b7bdc0c47d39fc0e9e201824bf5c1ac8cfa8c190e->leave($__internal_8f2757aef2e44f3928ae8c2b7bdc0c47d39fc0e9e201824bf5c1ac8cfa8c190e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/cartel_team/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
