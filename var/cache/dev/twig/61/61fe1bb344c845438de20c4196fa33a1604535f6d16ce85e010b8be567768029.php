<?php

/* category/category.new.html.twig */
class __TwigTemplate_bc4cc514960ff234c06d0e645197402c9166e759c2381d5658e097d266adc8ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "category/category.new.html.twig", 1);
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
        $__internal_f310d5599d3ebba0b446a2ebeb244355b5a04d4c0ef39aeb3d1a6f5d1023315a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f310d5599d3ebba0b446a2ebeb244355b5a04d4c0ef39aeb3d1a6f5d1023315a->enter($__internal_f310d5599d3ebba0b446a2ebeb244355b5a04d4c0ef39aeb3d1a6f5d1023315a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/category.new.html.twig"));

        $__internal_465b9c085b641c79efe0360574bacef0acdd3d51a574042ace7d093fc54497b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_465b9c085b641c79efe0360574bacef0acdd3d51a574042ace7d093fc54497b9->enter($__internal_465b9c085b641c79efe0360574bacef0acdd3d51a574042ace7d093fc54497b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/category.new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f310d5599d3ebba0b446a2ebeb244355b5a04d4c0ef39aeb3d1a6f5d1023315a->leave($__internal_f310d5599d3ebba0b446a2ebeb244355b5a04d4c0ef39aeb3d1a6f5d1023315a_prof);

        
        $__internal_465b9c085b641c79efe0360574bacef0acdd3d51a574042ace7d093fc54497b9->leave($__internal_465b9c085b641c79efe0360574bacef0acdd3d51a574042ace7d093fc54497b9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9752a52bc36c6b0223abcc6d8d2ee4be57deba93fec0fff7aa6a5c65784e261b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9752a52bc36c6b0223abcc6d8d2ee4be57deba93fec0fff7aa6a5c65784e261b->enter($__internal_9752a52bc36c6b0223abcc6d8d2ee4be57deba93fec0fff7aa6a5c65784e261b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_137958a51c4b895c945cbb675c39633fcebdd34da674454e3ebf34f7c7c9e3e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_137958a51c4b895c945cbb675c39633fcebdd34da674454e3ebf34f7c7c9e3e5->enter($__internal_137958a51c4b895c945cbb675c39633fcebdd34da674454e3ebf34f7c7c9e3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Création d'une catégorie </h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Créer\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "


";
        
        $__internal_137958a51c4b895c945cbb675c39633fcebdd34da674454e3ebf34f7c7c9e3e5->leave($__internal_137958a51c4b895c945cbb675c39633fcebdd34da674454e3ebf34f7c7c9e3e5_prof);

        
        $__internal_9752a52bc36c6b0223abcc6d8d2ee4be57deba93fec0fff7aa6a5c65784e261b->leave($__internal_9752a52bc36c6b0223abcc6d8d2ee4be57deba93fec0fff7aa6a5c65784e261b_prof);

    }

    public function getTemplateName()
    {
        return "category/category.new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Création d'une catégorie </h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Créer\" />
    {{ form_end(form) }}


{% endblock %}
", "category/category.new.html.twig", "/home/laure/e-critures/app/Resources/views/category/category.new.html.twig");
    }
}
