<?php

/* category/category.list.html.twig */
class __TwigTemplate_99d392aa359a6b08a739fea210e32d811a3da997f077fa39423b541e5bf5e444 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "category/category.list.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b189bc7bf5c8da468cc02cb469dd2f7b021212137bbfbdcd8737ef55b980cec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b189bc7bf5c8da468cc02cb469dd2f7b021212137bbfbdcd8737ef55b980cec->enter($__internal_2b189bc7bf5c8da468cc02cb469dd2f7b021212137bbfbdcd8737ef55b980cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/category.list.html.twig"));

        $__internal_1933f36646869291107c16b27d704fc9f70d63386829994968fd7d96883320fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1933f36646869291107c16b27d704fc9f70d63386829994968fd7d96883320fa->enter($__internal_1933f36646869291107c16b27d704fc9f70d63386829994968fd7d96883320fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/category.list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b189bc7bf5c8da468cc02cb469dd2f7b021212137bbfbdcd8737ef55b980cec->leave($__internal_2b189bc7bf5c8da468cc02cb469dd2f7b021212137bbfbdcd8737ef55b980cec_prof);

        
        $__internal_1933f36646869291107c16b27d704fc9f70d63386829994968fd7d96883320fa->leave($__internal_1933f36646869291107c16b27d704fc9f70d63386829994968fd7d96883320fa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_39b22151066ee248b7991367e11e7fafd324911848e387d755fb1e23a1809272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39b22151066ee248b7991367e11e7fafd324911848e387d755fb1e23a1809272->enter($__internal_39b22151066ee248b7991367e11e7fafd324911848e387d755fb1e23a1809272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_12dd14fbbfefcd03850be9a4353a4bfc2b42a105cbe6c69591d6054fb184e625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12dd14fbbfefcd03850be9a4353a4bfc2b42a105cbe6c69591d6054fb184e625->enter($__internal_12dd14fbbfefcd03850be9a4353a4bfc2b42a105cbe6c69591d6054fb184e625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Liste des catégories</h1>
<ul>
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 7
            echo "    <li>  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "
        <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_edit", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
     </li>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</ul>

";
        
        $__internal_12dd14fbbfefcd03850be9a4353a4bfc2b42a105cbe6c69591d6054fb184e625->leave($__internal_12dd14fbbfefcd03850be9a4353a4bfc2b42a105cbe6c69591d6054fb184e625_prof);

        
        $__internal_39b22151066ee248b7991367e11e7fafd324911848e387d755fb1e23a1809272->leave($__internal_39b22151066ee248b7991367e11e7fafd324911848e387d755fb1e23a1809272_prof);

    }

    public function getTemplateName()
    {
        return "category/category.list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  62 => 8,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Liste des catégories</h1>
<ul>
        {% for category in categories %}
    <li>  {{ category.name }}
        <a href=\"{{ path('category_edit', { 'id': category.id }) }}\">Modifier</a>
     </li>

        {% endfor %}
</ul>

{% endblock %}
", "category/category.list.html.twig", "/home/laure/e-critures/app/Resources/views/category/category.list.html.twig");
    }
}
