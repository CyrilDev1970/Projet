<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_07b4791d008cf6a17e007b23476c3758428ce296fcaf86d66a9bd6b5aa1f992b extends Twig_Template
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
        $__internal_9f74abe973b3acd0e032b88fd026c27a46d2aedd449f38798aa9b8a7eb537747 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f74abe973b3acd0e032b88fd026c27a46d2aedd449f38798aa9b8a7eb537747->enter($__internal_9f74abe973b3acd0e032b88fd026c27a46d2aedd449f38798aa9b8a7eb537747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_43700daea0e5700b6f0fc86cad4669e02c2e5b29d108489d25391bf9072110f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43700daea0e5700b6f0fc86cad4669e02c2e5b29d108489d25391bf9072110f2->enter($__internal_43700daea0e5700b6f0fc86cad4669e02c2e5b29d108489d25391bf9072110f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_9f74abe973b3acd0e032b88fd026c27a46d2aedd449f38798aa9b8a7eb537747->leave($__internal_9f74abe973b3acd0e032b88fd026c27a46d2aedd449f38798aa9b8a7eb537747_prof);

        
        $__internal_43700daea0e5700b6f0fc86cad4669e02c2e5b29d108489d25391bf9072110f2->leave($__internal_43700daea0e5700b6f0fc86cad4669e02c2e5b29d108489d25391bf9072110f2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "/var/www/cartel_team/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list_content.html.twig");
    }
}
