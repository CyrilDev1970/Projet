<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_8da44bcdea30fb3bce82794837dbb5297a9a1ca912ab6945a5c0372627a7abcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_e329083a8062c27e928ecda544ff7c5da6907e3a8ccae893de2217655024aaab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e329083a8062c27e928ecda544ff7c5da6907e3a8ccae893de2217655024aaab->enter($__internal_e329083a8062c27e928ecda544ff7c5da6907e3a8ccae893de2217655024aaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_d88e80220f378b0d6c866f0d6dd64e7d5860739a1f4899c52814c3b22db23bae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d88e80220f378b0d6c866f0d6dd64e7d5860739a1f4899c52814c3b22db23bae->enter($__internal_d88e80220f378b0d6c866f0d6dd64e7d5860739a1f4899c52814c3b22db23bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e329083a8062c27e928ecda544ff7c5da6907e3a8ccae893de2217655024aaab->leave($__internal_e329083a8062c27e928ecda544ff7c5da6907e3a8ccae893de2217655024aaab_prof);

        
        $__internal_d88e80220f378b0d6c866f0d6dd64e7d5860739a1f4899c52814c3b22db23bae->leave($__internal_d88e80220f378b0d6c866f0d6dd64e7d5860739a1f4899c52814c3b22db23bae_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d1449ab2984749d83af74bfa4293a710aa7a261320c2e67571583ec302553c2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1449ab2984749d83af74bfa4293a710aa7a261320c2e67571583ec302553c2b->enter($__internal_d1449ab2984749d83af74bfa4293a710aa7a261320c2e67571583ec302553c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7f752da6a8105ac28a825497783925c2094ff44e18fc58ab3237d26b62883dc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f752da6a8105ac28a825497783925c2094ff44e18fc58ab3237d26b62883dc7->enter($__internal_7f752da6a8105ac28a825497783925c2094ff44e18fc58ab3237d26b62883dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_7f752da6a8105ac28a825497783925c2094ff44e18fc58ab3237d26b62883dc7->leave($__internal_7f752da6a8105ac28a825497783925c2094ff44e18fc58ab3237d26b62883dc7_prof);

        
        $__internal_d1449ab2984749d83af74bfa4293a710aa7a261320c2e67571583ec302553c2b->leave($__internal_d1449ab2984749d83af74bfa4293a710aa7a261320c2e67571583ec302553c2b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/cartel_team/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
