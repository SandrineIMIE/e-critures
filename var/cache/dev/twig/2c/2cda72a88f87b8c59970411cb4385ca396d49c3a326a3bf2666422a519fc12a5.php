<?php

/* project/project.new.html.twig */
class __TwigTemplate_462058d09bf80eaa41498a78ff8bd0e246d8f9a0072775b865d056ab077524ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "project/project.new.html.twig", 1);
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
        $__internal_81bb38b1b70502e3b909a0d781187f6b96f1622fc50d6ffd78a30082c8a94acb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81bb38b1b70502e3b909a0d781187f6b96f1622fc50d6ffd78a30082c8a94acb->enter($__internal_81bb38b1b70502e3b909a0d781187f6b96f1622fc50d6ffd78a30082c8a94acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/project.new.html.twig"));

        $__internal_49da1a93de1a6a58acddaea9e96954ba1626a1a5c2be3dd9860b232c8fc19615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49da1a93de1a6a58acddaea9e96954ba1626a1a5c2be3dd9860b232c8fc19615->enter($__internal_49da1a93de1a6a58acddaea9e96954ba1626a1a5c2be3dd9860b232c8fc19615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/project.new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81bb38b1b70502e3b909a0d781187f6b96f1622fc50d6ffd78a30082c8a94acb->leave($__internal_81bb38b1b70502e3b909a0d781187f6b96f1622fc50d6ffd78a30082c8a94acb_prof);

        
        $__internal_49da1a93de1a6a58acddaea9e96954ba1626a1a5c2be3dd9860b232c8fc19615->leave($__internal_49da1a93de1a6a58acddaea9e96954ba1626a1a5c2be3dd9860b232c8fc19615_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8e243742656f4ddbeda28243994c31014940d4b67eaa79e0ce2397b3fe9e357 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8e243742656f4ddbeda28243994c31014940d4b67eaa79e0ce2397b3fe9e357->enter($__internal_d8e243742656f4ddbeda28243994c31014940d4b67eaa79e0ce2397b3fe9e357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c52119e30d257a88c729c6d28649e80609d3e3662db409e5e71a56cb2b360218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c52119e30d257a88c729c6d28649e80609d3e3662db409e5e71a56cb2b360218->enter($__internal_c52119e30d257a88c729c6d28649e80609d3e3662db409e5e71a56cb2b360218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Création d'un projet </h1>

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
        
        $__internal_c52119e30d257a88c729c6d28649e80609d3e3662db409e5e71a56cb2b360218->leave($__internal_c52119e30d257a88c729c6d28649e80609d3e3662db409e5e71a56cb2b360218_prof);

        
        $__internal_d8e243742656f4ddbeda28243994c31014940d4b67eaa79e0ce2397b3fe9e357->leave($__internal_d8e243742656f4ddbeda28243994c31014940d4b67eaa79e0ce2397b3fe9e357_prof);

    }

    public function getTemplateName()
    {
        return "project/project.new.html.twig";
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
    <h1>Création d'un projet </h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Créer\" />
    {{ form_end(form) }}

{% endblock %}
", "project/project.new.html.twig", "/home/laure/e-critures/app/Resources/views/project/project.new.html.twig");
    }
}
