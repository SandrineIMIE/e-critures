<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_490088ef8c2d536ba9aa3e4da532e3c9d5d6875dde7bb492995d7d77f4e311f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e5d8b1f8d192917c8d0bec15c216837e1cda7e3d1521e943b45785069872301 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e5d8b1f8d192917c8d0bec15c216837e1cda7e3d1521e943b45785069872301->enter($__internal_6e5d8b1f8d192917c8d0bec15c216837e1cda7e3d1521e943b45785069872301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0e15fc82319af9382b227cbf21a133baca492e41379224e01abf24a65b8e1e5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e15fc82319af9382b227cbf21a133baca492e41379224e01abf24a65b8e1e5a->enter($__internal_0e15fc82319af9382b227cbf21a133baca492e41379224e01abf24a65b8e1e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e5d8b1f8d192917c8d0bec15c216837e1cda7e3d1521e943b45785069872301->leave($__internal_6e5d8b1f8d192917c8d0bec15c216837e1cda7e3d1521e943b45785069872301_prof);

        
        $__internal_0e15fc82319af9382b227cbf21a133baca492e41379224e01abf24a65b8e1e5a->leave($__internal_0e15fc82319af9382b227cbf21a133baca492e41379224e01abf24a65b8e1e5a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ea293811b0c4da70fba6d8bad240aa1a4ba4198508b532042d11617dfc2d3881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea293811b0c4da70fba6d8bad240aa1a4ba4198508b532042d11617dfc2d3881->enter($__internal_ea293811b0c4da70fba6d8bad240aa1a4ba4198508b532042d11617dfc2d3881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7e94af3c8be65f429fa837ee323ea768f8674cb25823daba97533283c8cbf00d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e94af3c8be65f429fa837ee323ea768f8674cb25823daba97533283c8cbf00d->enter($__internal_7e94af3c8be65f429fa837ee323ea768f8674cb25823daba97533283c8cbf00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7e94af3c8be65f429fa837ee323ea768f8674cb25823daba97533283c8cbf00d->leave($__internal_7e94af3c8be65f429fa837ee323ea768f8674cb25823daba97533283c8cbf00d_prof);

        
        $__internal_ea293811b0c4da70fba6d8bad240aa1a4ba4198508b532042d11617dfc2d3881->leave($__internal_ea293811b0c4da70fba6d8bad240aa1a4ba4198508b532042d11617dfc2d3881_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d0b1fff48b7dd6c0e1491751570d702d97505908cfdc4446b7d6ed54f4c5f250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0b1fff48b7dd6c0e1491751570d702d97505908cfdc4446b7d6ed54f4c5f250->enter($__internal_d0b1fff48b7dd6c0e1491751570d702d97505908cfdc4446b7d6ed54f4c5f250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_519acc5540cb2a18a6158ca5fe99bc8b1e63b6ec45878cd010de4098303f71c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_519acc5540cb2a18a6158ca5fe99bc8b1e63b6ec45878cd010de4098303f71c6->enter($__internal_519acc5540cb2a18a6158ca5fe99bc8b1e63b6ec45878cd010de4098303f71c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_519acc5540cb2a18a6158ca5fe99bc8b1e63b6ec45878cd010de4098303f71c6->leave($__internal_519acc5540cb2a18a6158ca5fe99bc8b1e63b6ec45878cd010de4098303f71c6_prof);

        
        $__internal_d0b1fff48b7dd6c0e1491751570d702d97505908cfdc4446b7d6ed54f4c5f250->leave($__internal_d0b1fff48b7dd6c0e1491751570d702d97505908cfdc4446b7d6ed54f4c5f250_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_05a4bb1349bf76974a77b7dce0304c973f67591c3fbd02f2c94f97c7c98f596c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05a4bb1349bf76974a77b7dce0304c973f67591c3fbd02f2c94f97c7c98f596c->enter($__internal_05a4bb1349bf76974a77b7dce0304c973f67591c3fbd02f2c94f97c7c98f596c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0106ee788e222492ba4c2d9ab31f9ff2ae75f6c55394eda190417498af646682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0106ee788e222492ba4c2d9ab31f9ff2ae75f6c55394eda190417498af646682->enter($__internal_0106ee788e222492ba4c2d9ab31f9ff2ae75f6c55394eda190417498af646682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0106ee788e222492ba4c2d9ab31f9ff2ae75f6c55394eda190417498af646682->leave($__internal_0106ee788e222492ba4c2d9ab31f9ff2ae75f6c55394eda190417498af646682_prof);

        
        $__internal_05a4bb1349bf76974a77b7dce0304c973f67591c3fbd02f2c94f97c7c98f596c->leave($__internal_05a4bb1349bf76974a77b7dce0304c973f67591c3fbd02f2c94f97c7c98f596c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/laure/e-critures/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
