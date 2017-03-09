<?php

/* project/project.list.html.twig */
class __TwigTemplate_203f70cb55834f47826e14b87f30cbe3aa4810201cdf73412e7c568b0acdc593 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "project/project.list.html.twig", 1);
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
        $__internal_32a8138f61bbe0a61ee09bc634ec8249641f25d1904d18607e07a7bc222ebf85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32a8138f61bbe0a61ee09bc634ec8249641f25d1904d18607e07a7bc222ebf85->enter($__internal_32a8138f61bbe0a61ee09bc634ec8249641f25d1904d18607e07a7bc222ebf85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/project.list.html.twig"));

        $__internal_4b48293cfe4ca30382390e19c568e54aae72b45fe894523ed2f02936551faf88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b48293cfe4ca30382390e19c568e54aae72b45fe894523ed2f02936551faf88->enter($__internal_4b48293cfe4ca30382390e19c568e54aae72b45fe894523ed2f02936551faf88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/project.list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32a8138f61bbe0a61ee09bc634ec8249641f25d1904d18607e07a7bc222ebf85->leave($__internal_32a8138f61bbe0a61ee09bc634ec8249641f25d1904d18607e07a7bc222ebf85_prof);

        
        $__internal_4b48293cfe4ca30382390e19c568e54aae72b45fe894523ed2f02936551faf88->leave($__internal_4b48293cfe4ca30382390e19c568e54aae72b45fe894523ed2f02936551faf88_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_acec21fdf53658f7236ae7f1af01874214828c7f48431a460ad7762141cac9b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acec21fdf53658f7236ae7f1af01874214828c7f48431a460ad7762141cac9b8->enter($__internal_acec21fdf53658f7236ae7f1af01874214828c7f48431a460ad7762141cac9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_53363465fe9681f7ee8858c4dcab4a3aa692395592ea3de078b262530528b02c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53363465fe9681f7ee8858c4dcab4a3aa692395592ea3de078b262530528b02c->enter($__internal_53363465fe9681f7ee8858c4dcab4a3aa692395592ea3de078b262530528b02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Liste de tous les projets</h1>

    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Description</th>
                <th>Statut</th>
                <th>Crée le </th>
                <th>Modifié le </th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? $this->getContext($context, "projects")));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            if ($this->getAttribute($context["project"], "statut", array())) {
                echo "Terminé ";
            } else {
                echo "En cours ";
            }
            echo "</td>
                <td>";
            // line 23
            if ($this->getAttribute($context["project"], "createdat", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["project"], "createdat", array()), "d/m/Y - H:i"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["project"], "editedat", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["project"], "editedat", array()), "d/m/Y - H:i"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_show", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
            echo "\">Voir</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_edit", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
            echo "\">Editer</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

";
        
        $__internal_53363465fe9681f7ee8858c4dcab4a3aa692395592ea3de078b262530528b02c->leave($__internal_53363465fe9681f7ee8858c4dcab4a3aa692395592ea3de078b262530528b02c_prof);

        
        $__internal_acec21fdf53658f7236ae7f1af01874214828c7f48431a460ad7762141cac9b8->leave($__internal_acec21fdf53658f7236ae7f1af01874214828c7f48431a460ad7762141cac9b8_prof);

    }

    public function getTemplateName()
    {
        return "project/project.list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 37,  109 => 31,  103 => 28,  94 => 24,  88 => 23,  80 => 22,  76 => 21,  72 => 20,  69 => 19,  65 => 18,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Liste de tous les projets</h1>

    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Description</th>
                <th>Statut</th>
                <th>Crée le </th>
                <th>Modifié le </th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for project in projects %}
            <tr>
                <td>{{ project.title }}</td>
                <td>{{ project.description }}</td>
                <td>{% if project.statut %}Terminé {% else %}En cours {% endif %}</td>
                <td>{% if project.createdat %}{{ project.createdat|date('d/m/Y - H:i') }}{% endif %}</td>
                <td>{% if project.editedat %}{{ project.editedat|date('d/m/Y - H:i') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('project_show', { 'id': project.id }) }}\">Voir</a>
                        </li>
                        <li>
                            <a href=\"{{ path('project_edit', { 'id': project.id }) }}\">Editer</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}
", "project/project.list.html.twig", "/home/laure/e-critures/app/Resources/views/project/project.list.html.twig");
    }
}
