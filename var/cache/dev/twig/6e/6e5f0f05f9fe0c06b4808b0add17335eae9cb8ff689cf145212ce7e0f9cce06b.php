<?php

/* rights/rights.edit.html.twig */
class __TwigTemplate_b01defcdc7f1eae298e9966a8f49907d6d68358fc525ac7ba1ae7c4230f55d0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "rights/rights.edit.html.twig", 1);
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
        $__internal_1c8555f1fa4375470a2451580afa98cfabfd78ef5526e079a6aa995c8ebd241e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c8555f1fa4375470a2451580afa98cfabfd78ef5526e079a6aa995c8ebd241e->enter($__internal_1c8555f1fa4375470a2451580afa98cfabfd78ef5526e079a6aa995c8ebd241e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rights/rights.edit.html.twig"));

        $__internal_7ff2c95e1be7dc015068f4a99dbe9a9c9e13a0521517a6ab1da02b8c9976a303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ff2c95e1be7dc015068f4a99dbe9a9c9e13a0521517a6ab1da02b8c9976a303->enter($__internal_7ff2c95e1be7dc015068f4a99dbe9a9c9e13a0521517a6ab1da02b8c9976a303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rights/rights.edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c8555f1fa4375470a2451580afa98cfabfd78ef5526e079a6aa995c8ebd241e->leave($__internal_1c8555f1fa4375470a2451580afa98cfabfd78ef5526e079a6aa995c8ebd241e_prof);

        
        $__internal_7ff2c95e1be7dc015068f4a99dbe9a9c9e13a0521517a6ab1da02b8c9976a303->leave($__internal_7ff2c95e1be7dc015068f4a99dbe9a9c9e13a0521517a6ab1da02b8c9976a303_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c868e98d2727ec570e186e6ed365193e13ae1df892a6bad45e512b9257e6a21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c868e98d2727ec570e186e6ed365193e13ae1df892a6bad45e512b9257e6a21->enter($__internal_8c868e98d2727ec570e186e6ed365193e13ae1df892a6bad45e512b9257e6a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2592404c178522ccb72785dacecc7ca8bcf89631984ebd4acec055d463a80eb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2592404c178522ccb72785dacecc7ca8bcf89631984ebd4acec055d463a80eb3->enter($__internal_2592404c178522ccb72785dacecc7ca8bcf89631984ebd4acec055d463a80eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Right edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Modifier\">
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end');
        echo "

    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Supprimer\">
    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "

    <p><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rights_new");
        echo "\">Créer un nouveau droit</a> <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rights_index");
        echo "\">Retour à la liste</a>
    </p>
";
        
        $__internal_2592404c178522ccb72785dacecc7ca8bcf89631984ebd4acec055d463a80eb3->leave($__internal_2592404c178522ccb72785dacecc7ca8bcf89631984ebd4acec055d463a80eb3_prof);

        
        $__internal_8c868e98d2727ec570e186e6ed365193e13ae1df892a6bad45e512b9257e6a21->leave($__internal_8c868e98d2727ec570e186e6ed365193e13ae1df892a6bad45e512b9257e6a21_prof);

    }

    public function getTemplateName()
    {
        return "rights/rights.edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 15,  72 => 13,  67 => 11,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Right edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Modifier\">
    {{ form_end(edit_form) }}

    {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Supprimer\">
    {{ form_end(delete_form) }}

    <p><a href=\"{{ path('rights_new') }}\">Créer un nouveau droit</a> <a href=\"{{ path('rights_index') }}\">Retour à la liste</a>
    </p>
{% endblock %}
", "rights/rights.edit.html.twig", "/home/laure/e-critures/app/Resources/views/rights/rights.edit.html.twig");
    }
}
