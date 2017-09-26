<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_bc84ffc6a45284c673bc3d7c9c706e2172ace3dea9bc5b187e0930d79d2e0ecb extends Twig_Template
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
        $__internal_75439a3844fcfe88774764f4ca49116dc3921211e4d8c667339184f28848b6ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75439a3844fcfe88774764f4ca49116dc3921211e4d8c667339184f28848b6ed->enter($__internal_75439a3844fcfe88774764f4ca49116dc3921211e4d8c667339184f28848b6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_d01c7571034e93fd9c346ff24cf973f28f6f790e8a212f2ce1b7701e11222290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d01c7571034e93fd9c346ff24cf973f28f6f790e8a212f2ce1b7701e11222290->enter($__internal_d01c7571034e93fd9c346ff24cf973f28f6f790e8a212f2ce1b7701e11222290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_75439a3844fcfe88774764f4ca49116dc3921211e4d8c667339184f28848b6ed->leave($__internal_75439a3844fcfe88774764f4ca49116dc3921211e4d8c667339184f28848b6ed_prof);

        
        $__internal_d01c7571034e93fd9c346ff24cf973f28f6f790e8a212f2ce1b7701e11222290->leave($__internal_d01c7571034e93fd9c346ff24cf973f28f6f790e8a212f2ce1b7701e11222290_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/var/www/cartel_team/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
