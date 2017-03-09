<?php

/* rights/rights.show.html.twig */
class __TwigTemplate_245d15d4707db87cb5cf2d784cf20e27b6900a48c4712c8c28e03ea29cf022a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "rights/rights.show.html.twig", 1);
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
        $__internal_52d7ba0b1e34d17028c9fd9694fb129b267bce16b8f5e34dac95ea24dc9b5560 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52d7ba0b1e34d17028c9fd9694fb129b267bce16b8f5e34dac95ea24dc9b5560->enter($__internal_52d7ba0b1e34d17028c9fd9694fb129b267bce16b8f5e34dac95ea24dc9b5560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rights/rights.show.html.twig"));

        $__internal_d3bf63628f682090e569a08bd7a9f8ced1a658ca4e0252861121be1fbf395bc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3bf63628f682090e569a08bd7a9f8ced1a658ca4e0252861121be1fbf395bc6->enter($__internal_d3bf63628f682090e569a08bd7a9f8ced1a658ca4e0252861121be1fbf395bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rights/rights.show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52d7ba0b1e34d17028c9fd9694fb129b267bce16b8f5e34dac95ea24dc9b5560->leave($__internal_52d7ba0b1e34d17028c9fd9694fb129b267bce16b8f5e34dac95ea24dc9b5560_prof);

        
        $__internal_d3bf63628f682090e569a08bd7a9f8ced1a658ca4e0252861121be1fbf395bc6->leave($__internal_d3bf63628f682090e569a08bd7a9f8ced1a658ca4e0252861121be1fbf395bc6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_feed2deb587f69057e1f0221377030d703e731c5a047e8760cc71e3b690e82a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feed2deb587f69057e1f0221377030d703e731c5a047e8760cc71e3b690e82a9->enter($__internal_feed2deb587f69057e1f0221377030d703e731c5a047e8760cc71e3b690e82a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_daa77a331984515f71fdd72b2db8c40eb57cc5338a6fc9a8d3e8856b8fbaa056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa77a331984515f71fdd72b2db8c40eb57cc5338a6fc9a8d3e8856b8fbaa056->enter($__internal_daa77a331984515f71fdd72b2db8c40eb57cc5338a6fc9a8d3e8856b8fbaa056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Droits d'auteur</h1>

    <table>
        <tbody>
            <tr>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["right"] ?? $this->getContext($context, "right")), "type", array()), "html", null, true);
        echo "</th>
                <td><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rights_edit", array("id" => $this->getAttribute(($context["right"] ?? $this->getContext($context, "right")), "id", array()))), "html", null, true);
        echo "\">modifier</a>   ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                    <input type=\"submit\" value=\"Delete\">
                    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "</td>
            </tr>
        </tbody>
    </table>

<p><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rights_index");
        echo "\">retour à la liste/a></p>

";
        
        $__internal_daa77a331984515f71fdd72b2db8c40eb57cc5338a6fc9a8d3e8856b8fbaa056->leave($__internal_daa77a331984515f71fdd72b2db8c40eb57cc5338a6fc9a8d3e8856b8fbaa056_prof);

        
        $__internal_feed2deb587f69057e1f0221377030d703e731c5a047e8760cc71e3b690e82a9->leave($__internal_feed2deb587f69057e1f0221377030d703e731c5a047e8760cc71e3b690e82a9_prof);

    }

    public function getTemplateName()
    {
        return "rights/rights.show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 17,  67 => 12,  60 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Droits d'auteur</h1>

    <table>
        <tbody>
            <tr>
                <th>{{ right.type }}</th>
                <td><a href=\"{{ path('rights_edit', { 'id': right.id }) }}\">modifier</a>   {{ form_start(delete_form) }}
                    <input type=\"submit\" value=\"Delete\">
                    {{ form_end(delete_form) }}</td>
            </tr>
        </tbody>
    </table>

<p><a href=\"{{ path('rights_index') }}\">retour à la liste/a></p>

{% endblock %}
", "rights/rights.show.html.twig", "/home/laure/e-critures/app/Resources/views/rights/rights.show.html.twig");
    }
}
