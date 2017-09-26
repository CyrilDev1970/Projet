<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_674099ca901fd8c9ca9d64eee22cba8aeb1e939a3f260cf57c0421b1596fe5d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_1fd12eed1593b0dff51ae642499ec7f1521b5013ab715bcb3156001b494e2b20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fd12eed1593b0dff51ae642499ec7f1521b5013ab715bcb3156001b494e2b20->enter($__internal_1fd12eed1593b0dff51ae642499ec7f1521b5013ab715bcb3156001b494e2b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_4d4993f6fd560d55894532d79f19d856830a117ffa68dcbd5fe8b810faf9dfdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d4993f6fd560d55894532d79f19d856830a117ffa68dcbd5fe8b810faf9dfdd->enter($__internal_4d4993f6fd560d55894532d79f19d856830a117ffa68dcbd5fe8b810faf9dfdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fd12eed1593b0dff51ae642499ec7f1521b5013ab715bcb3156001b494e2b20->leave($__internal_1fd12eed1593b0dff51ae642499ec7f1521b5013ab715bcb3156001b494e2b20_prof);

        
        $__internal_4d4993f6fd560d55894532d79f19d856830a117ffa68dcbd5fe8b810faf9dfdd->leave($__internal_4d4993f6fd560d55894532d79f19d856830a117ffa68dcbd5fe8b810faf9dfdd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d0776bc4cfcc066666f8bd9f08ca5bafeedba74f5e3a2d76d9aae69dc7ec1939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0776bc4cfcc066666f8bd9f08ca5bafeedba74f5e3a2d76d9aae69dc7ec1939->enter($__internal_d0776bc4cfcc066666f8bd9f08ca5bafeedba74f5e3a2d76d9aae69dc7ec1939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7551b73e5439218138bb125ff430e0ee1d5d46a28dca14e91257ca94cc728bea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7551b73e5439218138bb125ff430e0ee1d5d46a28dca14e91257ca94cc728bea->enter($__internal_7551b73e5439218138bb125ff430e0ee1d5d46a28dca14e91257ca94cc728bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_7551b73e5439218138bb125ff430e0ee1d5d46a28dca14e91257ca94cc728bea->leave($__internal_7551b73e5439218138bb125ff430e0ee1d5d46a28dca14e91257ca94cc728bea_prof);

        
        $__internal_d0776bc4cfcc066666f8bd9f08ca5bafeedba74f5e3a2d76d9aae69dc7ec1939->leave($__internal_d0776bc4cfcc066666f8bd9f08ca5bafeedba74f5e3a2d76d9aae69dc7ec1939_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/cartel_team/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
