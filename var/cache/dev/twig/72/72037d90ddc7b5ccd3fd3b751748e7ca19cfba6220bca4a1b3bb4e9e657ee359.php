<?php

/* tag/tag.new.html.twig */
class __TwigTemplate_cd2065ad88860f1b575dbcf7821a58f7d19569b6dca515c951ca0ba0437bebb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tag/tag.new.html.twig", 1);
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
        $__internal_80373bac259b5cfdc49b319c9c9a5abc8b0c35216ae9a07b76ed752d4ca103b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80373bac259b5cfdc49b319c9c9a5abc8b0c35216ae9a07b76ed752d4ca103b9->enter($__internal_80373bac259b5cfdc49b319c9c9a5abc8b0c35216ae9a07b76ed752d4ca103b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/tag.new.html.twig"));

        $__internal_c063cfc8be0c9e74978859ef195715c631c56c62f96074104c70a9670270e879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c063cfc8be0c9e74978859ef195715c631c56c62f96074104c70a9670270e879->enter($__internal_c063cfc8be0c9e74978859ef195715c631c56c62f96074104c70a9670270e879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/tag.new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80373bac259b5cfdc49b319c9c9a5abc8b0c35216ae9a07b76ed752d4ca103b9->leave($__internal_80373bac259b5cfdc49b319c9c9a5abc8b0c35216ae9a07b76ed752d4ca103b9_prof);

        
        $__internal_c063cfc8be0c9e74978859ef195715c631c56c62f96074104c70a9670270e879->leave($__internal_c063cfc8be0c9e74978859ef195715c631c56c62f96074104c70a9670270e879_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_58ec9e52f66a5149d56807b1cd15734f766d5fdab97accf41bee351b62e83eb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58ec9e52f66a5149d56807b1cd15734f766d5fdab97accf41bee351b62e83eb3->enter($__internal_58ec9e52f66a5149d56807b1cd15734f766d5fdab97accf41bee351b62e83eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_14dccfb927118dfd32eff113513af70b3b441a00d2b6feab27ea92b1aac73955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14dccfb927118dfd32eff113513af70b3b441a00d2b6feab27ea92b1aac73955->enter($__internal_14dccfb927118dfd32eff113513af70b3b441a00d2b6feab27ea92b1aac73955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Création d'un tag</h1>

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
        
        $__internal_14dccfb927118dfd32eff113513af70b3b441a00d2b6feab27ea92b1aac73955->leave($__internal_14dccfb927118dfd32eff113513af70b3b441a00d2b6feab27ea92b1aac73955_prof);

        
        $__internal_58ec9e52f66a5149d56807b1cd15734f766d5fdab97accf41bee351b62e83eb3->leave($__internal_58ec9e52f66a5149d56807b1cd15734f766d5fdab97accf41bee351b62e83eb3_prof);

    }

    public function getTemplateName()
    {
        return "tag/tag.new.html.twig";
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
    <h1>Création d'un tag</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Créer\" />
    {{ form_end(form) }}

{% endblock %}
", "tag/tag.new.html.twig", "/home/laure/e-critures/app/Resources/views/tag/tag.new.html.twig");
    }
}
