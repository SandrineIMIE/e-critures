<?php

/* tag/tag.show.html.twig */
class __TwigTemplate_2d7ceb38f03aa5f1e8ace1f7cb732bb49548e62deb067040b24a63b796fdb9fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tag/tag.show.html.twig", 1);
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
        $__internal_4c8f8e7f3a136e925e1c495d9eb1390cac57a39ec9442095f990a331ae2d54aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c8f8e7f3a136e925e1c495d9eb1390cac57a39ec9442095f990a331ae2d54aa->enter($__internal_4c8f8e7f3a136e925e1c495d9eb1390cac57a39ec9442095f990a331ae2d54aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/tag.show.html.twig"));

        $__internal_c3b398b1bab009cce36f29be885d1d424351e13792156426f1a2401bff261031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3b398b1bab009cce36f29be885d1d424351e13792156426f1a2401bff261031->enter($__internal_c3b398b1bab009cce36f29be885d1d424351e13792156426f1a2401bff261031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/tag.show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c8f8e7f3a136e925e1c495d9eb1390cac57a39ec9442095f990a331ae2d54aa->leave($__internal_4c8f8e7f3a136e925e1c495d9eb1390cac57a39ec9442095f990a331ae2d54aa_prof);

        
        $__internal_c3b398b1bab009cce36f29be885d1d424351e13792156426f1a2401bff261031->leave($__internal_c3b398b1bab009cce36f29be885d1d424351e13792156426f1a2401bff261031_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_40330f702c90763a7c289bc432602f56de942a7f97112f98b204a06962f54bcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40330f702c90763a7c289bc432602f56de942a7f97112f98b204a06962f54bcf->enter($__internal_40330f702c90763a7c289bc432602f56de942a7f97112f98b204a06962f54bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_549de9bfaa5db4f572df40f3b50c5b17c5a8f3e693fabed0f29ec7721a6cfa5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549de9bfaa5db4f572df40f3b50c5b17c5a8f3e693fabed0f29ec7721a6cfa5f->enter($__internal_549de9bfaa5db4f572df40f3b50c5b17c5a8f3e693fabed0f29ec7721a6cfa5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tag</h1>

    <table>
        <tbody>
            <tr>
                <th>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["tag"] ?? $this->getContext($context, "tag")), "name", array()), "html", null, true);
        echo "</th>
                <td><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_edit", array("id" => $this->getAttribute(($context["tag"] ?? $this->getContext($context, "tag")), "id", array()))), "html", null, true);
        echo "\">Modifier</a> &nbsp;
                    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                    <input type=\"submit\" value=\"Delete\">
                    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
                </td>
            </tr>
        </tbody>
    </table>

";
        
        $__internal_549de9bfaa5db4f572df40f3b50c5b17c5a8f3e693fabed0f29ec7721a6cfa5f->leave($__internal_549de9bfaa5db4f572df40f3b50c5b17c5a8f3e693fabed0f29ec7721a6cfa5f_prof);

        
        $__internal_40330f702c90763a7c289bc432602f56de942a7f97112f98b204a06962f54bcf->leave($__internal_40330f702c90763a7c289bc432602f56de942a7f97112f98b204a06962f54bcf_prof);

    }

    public function getTemplateName()
    {
        return "tag/tag.show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  64 => 11,  60 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Tag</h1>

    <table>
        <tbody>
            <tr>
                <th>{{ tag.name }}</th>
                <td><a href=\"{{ path('tag_edit', { 'id': tag.id }) }}\">Modifier</a> &nbsp;
                    {{ form_start(delete_form) }}
                    <input type=\"submit\" value=\"Delete\">
                    {{ form_end(delete_form) }}
                </td>
            </tr>
        </tbody>
    </table>

{% endblock %}
", "tag/tag.show.html.twig", "/home/laure/e-critures/app/Resources/views/tag/tag.show.html.twig");
    }
}
