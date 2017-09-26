<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_9a2149ac2c040d3388c79b803fca7cd9813f0477c1f0d35ecd25f1f3a45af415 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_0b041213bc2dc69bee9ff28c8f1aec26a440be296661dfa90022e239ce63c8a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b041213bc2dc69bee9ff28c8f1aec26a440be296661dfa90022e239ce63c8a0->enter($__internal_0b041213bc2dc69bee9ff28c8f1aec26a440be296661dfa90022e239ce63c8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_cb58f4dc7225f904f20189a156a8df30a02f0e2b6c6dc43212669852bccac46c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb58f4dc7225f904f20189a156a8df30a02f0e2b6c6dc43212669852bccac46c->enter($__internal_cb58f4dc7225f904f20189a156a8df30a02f0e2b6c6dc43212669852bccac46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b041213bc2dc69bee9ff28c8f1aec26a440be296661dfa90022e239ce63c8a0->leave($__internal_0b041213bc2dc69bee9ff28c8f1aec26a440be296661dfa90022e239ce63c8a0_prof);

        
        $__internal_cb58f4dc7225f904f20189a156a8df30a02f0e2b6c6dc43212669852bccac46c->leave($__internal_cb58f4dc7225f904f20189a156a8df30a02f0e2b6c6dc43212669852bccac46c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ccf07d613983feaa991caa2810497789607a3a3a275e086f6afcd265922641fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccf07d613983feaa991caa2810497789607a3a3a275e086f6afcd265922641fd->enter($__internal_ccf07d613983feaa991caa2810497789607a3a3a275e086f6afcd265922641fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_014832674f68588db186dd53c2b76c0df435b207553031bb3b71cb01ba1def2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_014832674f68588db186dd53c2b76c0df435b207553031bb3b71cb01ba1def2a->enter($__internal_014832674f68588db186dd53c2b76c0df435b207553031bb3b71cb01ba1def2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_014832674f68588db186dd53c2b76c0df435b207553031bb3b71cb01ba1def2a->leave($__internal_014832674f68588db186dd53c2b76c0df435b207553031bb3b71cb01ba1def2a_prof);

        
        $__internal_ccf07d613983feaa991caa2810497789607a3a3a275e086f6afcd265922641fd->leave($__internal_ccf07d613983feaa991caa2810497789607a3a3a275e086f6afcd265922641fd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/cartel_team/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
