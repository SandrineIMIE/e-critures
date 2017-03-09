<?php

/* rights/rights.list.html.twig */
class __TwigTemplate_6eeae85f0108dcb24a5f3f82f3bcad35b28fbcb2e80391b9c517b92fd7047fe2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "rights/rights.list.html.twig", 1);
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
        $__internal_e2884ed75d66aaeb338ebfdfa1d5df4568800415fb9724a1ae9018ad33b37f85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2884ed75d66aaeb338ebfdfa1d5df4568800415fb9724a1ae9018ad33b37f85->enter($__internal_e2884ed75d66aaeb338ebfdfa1d5df4568800415fb9724a1ae9018ad33b37f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rights/rights.list.html.twig"));

        $__internal_588b303689148afd7d5a4b4de47dd4521edd5e94bd1716aeaf06c1ef42797b72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_588b303689148afd7d5a4b4de47dd4521edd5e94bd1716aeaf06c1ef42797b72->enter($__internal_588b303689148afd7d5a4b4de47dd4521edd5e94bd1716aeaf06c1ef42797b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rights/rights.list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2884ed75d66aaeb338ebfdfa1d5df4568800415fb9724a1ae9018ad33b37f85->leave($__internal_e2884ed75d66aaeb338ebfdfa1d5df4568800415fb9724a1ae9018ad33b37f85_prof);

        
        $__internal_588b303689148afd7d5a4b4de47dd4521edd5e94bd1716aeaf06c1ef42797b72->leave($__internal_588b303689148afd7d5a4b4de47dd4521edd5e94bd1716aeaf06c1ef42797b72_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce9509cf2b3c40bd373e2e3a38da21fd51fdbc0c3eff8e0fed9daefeaba56831 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce9509cf2b3c40bd373e2e3a38da21fd51fdbc0c3eff8e0fed9daefeaba56831->enter($__internal_ce9509cf2b3c40bd373e2e3a38da21fd51fdbc0c3eff8e0fed9daefeaba56831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0ff1c9495d354a6b3de2a3b6c897e067322a3b131fdf51c02f21cd3fe2ffa7b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ff1c9495d354a6b3de2a3b6c897e067322a3b131fdf51c02f21cd3fe2ffa7b0->enter($__internal_0ff1c9495d354a6b3de2a3b6c897e067322a3b131fdf51c02f21cd3fe2ffa7b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Liste des droits</h1>
<ul>
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rights"] ?? $this->getContext($context, "rights")));
        foreach ($context['_seq'] as $context["_key"] => $context["right"]) {
            // line 7
            echo "            <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["right"], "type", array()), "html", null, true);
            echo "
               <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rights_edit", array("id" => $this->getAttribute($context["right"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['right'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>


";
        
        $__internal_0ff1c9495d354a6b3de2a3b6c897e067322a3b131fdf51c02f21cd3fe2ffa7b0->leave($__internal_0ff1c9495d354a6b3de2a3b6c897e067322a3b131fdf51c02f21cd3fe2ffa7b0_prof);

        
        $__internal_ce9509cf2b3c40bd373e2e3a38da21fd51fdbc0c3eff8e0fed9daefeaba56831->leave($__internal_ce9509cf2b3c40bd373e2e3a38da21fd51fdbc0c3eff8e0fed9daefeaba56831_prof);

    }

    public function getTemplateName()
    {
        return "rights/rights.list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 11,  62 => 8,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Liste des droits</h1>
<ul>
        {% for right in rights %}
            <li>{{ right.type }}
               <a href=\"{{ path('rights_edit', { 'id': right.id }) }}\">Modifier</a>
            </li>
        {% endfor %}
</ul>


{% endblock %}
", "rights/rights.list.html.twig", "/home/laure/e-critures/app/Resources/views/rights/rights.list.html.twig");
    }
}
