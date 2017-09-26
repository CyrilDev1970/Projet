<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_d599e78673aafc722f9d52a3cf6838097ef8d784a9466cf99558947bb9d65088 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_21019d546084a6f25d6eb893456e12ff46e0f1bcb5978555662bd25952ca42aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21019d546084a6f25d6eb893456e12ff46e0f1bcb5978555662bd25952ca42aa->enter($__internal_21019d546084a6f25d6eb893456e12ff46e0f1bcb5978555662bd25952ca42aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_4f4b61e3dd70ef9c8e43e4b45260cf25edd7cb73af5afa251637c207cc4b704f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f4b61e3dd70ef9c8e43e4b45260cf25edd7cb73af5afa251637c207cc4b704f->enter($__internal_4f4b61e3dd70ef9c8e43e4b45260cf25edd7cb73af5afa251637c207cc4b704f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21019d546084a6f25d6eb893456e12ff46e0f1bcb5978555662bd25952ca42aa->leave($__internal_21019d546084a6f25d6eb893456e12ff46e0f1bcb5978555662bd25952ca42aa_prof);

        
        $__internal_4f4b61e3dd70ef9c8e43e4b45260cf25edd7cb73af5afa251637c207cc4b704f->leave($__internal_4f4b61e3dd70ef9c8e43e4b45260cf25edd7cb73af5afa251637c207cc4b704f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_976652c110bcd757db9ed54b9580499074f9c73e7b82a19e2651d2093eac6070 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_976652c110bcd757db9ed54b9580499074f9c73e7b82a19e2651d2093eac6070->enter($__internal_976652c110bcd757db9ed54b9580499074f9c73e7b82a19e2651d2093eac6070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4d5b374ef92d4eb32c1245487a4c85301f74bea2e56d9eac36d1132d6026c595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d5b374ef92d4eb32c1245487a4c85301f74bea2e56d9eac36d1132d6026c595->enter($__internal_4d5b374ef92d4eb32c1245487a4c85301f74bea2e56d9eac36d1132d6026c595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_4d5b374ef92d4eb32c1245487a4c85301f74bea2e56d9eac36d1132d6026c595->leave($__internal_4d5b374ef92d4eb32c1245487a4c85301f74bea2e56d9eac36d1132d6026c595_prof);

        
        $__internal_976652c110bcd757db9ed54b9580499074f9c73e7b82a19e2651d2093eac6070->leave($__internal_976652c110bcd757db9ed54b9580499074f9c73e7b82a19e2651d2093eac6070_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/cartel_team/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
