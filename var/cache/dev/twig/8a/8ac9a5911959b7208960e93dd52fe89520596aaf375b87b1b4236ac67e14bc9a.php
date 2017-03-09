<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_12f738d54aff3bf3f6a56dc81f2505fdcba5d762d3d028c6a50f1a44ad74da5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1e1d1a9de997dbc7569804a3442788620d8e3b809876ca3747bd8a4ae862408f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e1d1a9de997dbc7569804a3442788620d8e3b809876ca3747bd8a4ae862408f->enter($__internal_1e1d1a9de997dbc7569804a3442788620d8e3b809876ca3747bd8a4ae862408f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0d0b034b8b1e6942345ed89d8c43cfe309f7341da616794e6053961a9c1724ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d0b034b8b1e6942345ed89d8c43cfe309f7341da616794e6053961a9c1724ae->enter($__internal_0d0b034b8b1e6942345ed89d8c43cfe309f7341da616794e6053961a9c1724ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e1d1a9de997dbc7569804a3442788620d8e3b809876ca3747bd8a4ae862408f->leave($__internal_1e1d1a9de997dbc7569804a3442788620d8e3b809876ca3747bd8a4ae862408f_prof);

        
        $__internal_0d0b034b8b1e6942345ed89d8c43cfe309f7341da616794e6053961a9c1724ae->leave($__internal_0d0b034b8b1e6942345ed89d8c43cfe309f7341da616794e6053961a9c1724ae_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4d8fbbfe237952a7359b9e08e31cc4f1451803f52537e22b1fd863aa56268675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d8fbbfe237952a7359b9e08e31cc4f1451803f52537e22b1fd863aa56268675->enter($__internal_4d8fbbfe237952a7359b9e08e31cc4f1451803f52537e22b1fd863aa56268675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9dbf23dcb36f97ea126fa53e7433c13aa36b2e5d6a6459116b93125026571f46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dbf23dcb36f97ea126fa53e7433c13aa36b2e5d6a6459116b93125026571f46->enter($__internal_9dbf23dcb36f97ea126fa53e7433c13aa36b2e5d6a6459116b93125026571f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9dbf23dcb36f97ea126fa53e7433c13aa36b2e5d6a6459116b93125026571f46->leave($__internal_9dbf23dcb36f97ea126fa53e7433c13aa36b2e5d6a6459116b93125026571f46_prof);

        
        $__internal_4d8fbbfe237952a7359b9e08e31cc4f1451803f52537e22b1fd863aa56268675->leave($__internal_4d8fbbfe237952a7359b9e08e31cc4f1451803f52537e22b1fd863aa56268675_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_69dd4a187b76b0162839ccbec5f1a0314a41fa500ffeb49d908ba629fa777a28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69dd4a187b76b0162839ccbec5f1a0314a41fa500ffeb49d908ba629fa777a28->enter($__internal_69dd4a187b76b0162839ccbec5f1a0314a41fa500ffeb49d908ba629fa777a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d86cf4c6da6f5b68a347549de089b6a111bd7aad7b5d72211791c6be90a33ab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d86cf4c6da6f5b68a347549de089b6a111bd7aad7b5d72211791c6be90a33ab1->enter($__internal_d86cf4c6da6f5b68a347549de089b6a111bd7aad7b5d72211791c6be90a33ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d86cf4c6da6f5b68a347549de089b6a111bd7aad7b5d72211791c6be90a33ab1->leave($__internal_d86cf4c6da6f5b68a347549de089b6a111bd7aad7b5d72211791c6be90a33ab1_prof);

        
        $__internal_69dd4a187b76b0162839ccbec5f1a0314a41fa500ffeb49d908ba629fa777a28->leave($__internal_69dd4a187b76b0162839ccbec5f1a0314a41fa500ffeb49d908ba629fa777a28_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a7f3b41a2f4220158946854a009fa07c13dfcfd235e580b233a565be0111a0d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7f3b41a2f4220158946854a009fa07c13dfcfd235e580b233a565be0111a0d0->enter($__internal_a7f3b41a2f4220158946854a009fa07c13dfcfd235e580b233a565be0111a0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fd7a9018f4fc407882dbcea7f127861dedcae6c79e6563001effb747fc6278a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7a9018f4fc407882dbcea7f127861dedcae6c79e6563001effb747fc6278a5->enter($__internal_fd7a9018f4fc407882dbcea7f127861dedcae6c79e6563001effb747fc6278a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_fd7a9018f4fc407882dbcea7f127861dedcae6c79e6563001effb747fc6278a5->leave($__internal_fd7a9018f4fc407882dbcea7f127861dedcae6c79e6563001effb747fc6278a5_prof);

        
        $__internal_a7f3b41a2f4220158946854a009fa07c13dfcfd235e580b233a565be0111a0d0->leave($__internal_a7f3b41a2f4220158946854a009fa07c13dfcfd235e580b233a565be0111a0d0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/laure/e-critures/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
