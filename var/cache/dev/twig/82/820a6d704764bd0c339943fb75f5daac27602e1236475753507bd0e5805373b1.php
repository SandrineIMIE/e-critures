<?php

/* rights/rights.new.html.twig */
class __TwigTemplate_4d25d44a7c6c375b4171eedf888083b55dc516771b56c3de3f33ffc01355c33e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "rights/rights.new.html.twig", 1);
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
        $__internal_650b152f1ce44daa52a296223ff5b231165e4a47e5c8531365089589473c4296 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_650b152f1ce44daa52a296223ff5b231165e4a47e5c8531365089589473c4296->enter($__internal_650b152f1ce44daa52a296223ff5b231165e4a47e5c8531365089589473c4296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rights/rights.new.html.twig"));

        $__internal_134b43d8fc9520966a2cdc8a8d2e2c08ede88496c4575104055b54606302bd99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_134b43d8fc9520966a2cdc8a8d2e2c08ede88496c4575104055b54606302bd99->enter($__internal_134b43d8fc9520966a2cdc8a8d2e2c08ede88496c4575104055b54606302bd99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rights/rights.new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_650b152f1ce44daa52a296223ff5b231165e4a47e5c8531365089589473c4296->leave($__internal_650b152f1ce44daa52a296223ff5b231165e4a47e5c8531365089589473c4296_prof);

        
        $__internal_134b43d8fc9520966a2cdc8a8d2e2c08ede88496c4575104055b54606302bd99->leave($__internal_134b43d8fc9520966a2cdc8a8d2e2c08ede88496c4575104055b54606302bd99_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4adeeb0f7e3eac559fe4210698fd75c79dcdedb62a430ee14226696782ea1e0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4adeeb0f7e3eac559fe4210698fd75c79dcdedb62a430ee14226696782ea1e0a->enter($__internal_4adeeb0f7e3eac559fe4210698fd75c79dcdedb62a430ee14226696782ea1e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f7e4648cde12c33323065f8ae3c63173dcf15207950575f43d3af12222243086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e4648cde12c33323065f8ae3c63173dcf15207950575f43d3af12222243086->enter($__internal_f7e4648cde12c33323065f8ae3c63173dcf15207950575f43d3af12222243086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Création de droits d'auteurs</h1>

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

    <p>
    </p>
";
        
        $__internal_f7e4648cde12c33323065f8ae3c63173dcf15207950575f43d3af12222243086->leave($__internal_f7e4648cde12c33323065f8ae3c63173dcf15207950575f43d3af12222243086_prof);

        
        $__internal_4adeeb0f7e3eac559fe4210698fd75c79dcdedb62a430ee14226696782ea1e0a->leave($__internal_4adeeb0f7e3eac559fe4210698fd75c79dcdedb62a430ee14226696782ea1e0a_prof);

    }

    public function getTemplateName()
    {
        return "rights/rights.new.html.twig";
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
    <h1>Création de droits d'auteurs</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Créer\" />
    {{ form_end(form) }}

    <p>
    </p>
{% endblock %}
", "rights/rights.new.html.twig", "/home/laure/e-critures/app/Resources/views/rights/rights.new.html.twig");
    }
}
