<?php

/* tag/tag.list.html.twig */
class __TwigTemplate_24238a24fb7391ed90e31f5a497631c910715f05b9188cd3fe15f153e7dbc775 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tag/tag.list.html.twig", 1);
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
        $__internal_734f0d1e15b16c9bebf6994ff5fae0440ad51e6d70b8be2d9a250c527b91a4ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_734f0d1e15b16c9bebf6994ff5fae0440ad51e6d70b8be2d9a250c527b91a4ec->enter($__internal_734f0d1e15b16c9bebf6994ff5fae0440ad51e6d70b8be2d9a250c527b91a4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/tag.list.html.twig"));

        $__internal_f4925166e24119633d44cce2c109c850bd8001a9333d835a441947467fba8e80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4925166e24119633d44cce2c109c850bd8001a9333d835a441947467fba8e80->enter($__internal_f4925166e24119633d44cce2c109c850bd8001a9333d835a441947467fba8e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tag/tag.list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_734f0d1e15b16c9bebf6994ff5fae0440ad51e6d70b8be2d9a250c527b91a4ec->leave($__internal_734f0d1e15b16c9bebf6994ff5fae0440ad51e6d70b8be2d9a250c527b91a4ec_prof);

        
        $__internal_f4925166e24119633d44cce2c109c850bd8001a9333d835a441947467fba8e80->leave($__internal_f4925166e24119633d44cce2c109c850bd8001a9333d835a441947467fba8e80_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fddd0163a75fb3312180917985aa6c758344d50a3533da8753c1c6b9eccc5d0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fddd0163a75fb3312180917985aa6c758344d50a3533da8753c1c6b9eccc5d0f->enter($__internal_fddd0163a75fb3312180917985aa6c758344d50a3533da8753c1c6b9eccc5d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d7ce44c4c6cbd7b730be5877334e111c9b011bbf92a39155b67f9b604032baa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ce44c4c6cbd7b730be5877334e111c9b011bbf92a39155b67f9b604032baa2->enter($__internal_d7ce44c4c6cbd7b730be5877334e111c9b011bbf92a39155b67f9b604032baa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Liste des tags</h1>

    <table>
        <thead>
            <tr>
                <th>Nom du Tag</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 15
            echo "            <tr>
                          <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            echo "</td>
                <td>
                            ";
            // line 19
            echo "                            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_edit", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>

                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </tbody>
    </table>

";
        
        $__internal_d7ce44c4c6cbd7b730be5877334e111c9b011bbf92a39155b67f9b604032baa2->leave($__internal_d7ce44c4c6cbd7b730be5877334e111c9b011bbf92a39155b67f9b604032baa2_prof);

        
        $__internal_fddd0163a75fb3312180917985aa6c758344d50a3533da8753c1c6b9eccc5d0f->leave($__internal_fddd0163a75fb3312180917985aa6c758344d50a3533da8753c1c6b9eccc5d0f_prof);

    }

    public function getTemplateName()
    {
        return "tag/tag.list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 24,  73 => 19,  68 => 16,  65 => 15,  61 => 14,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Liste des tags</h1>

    <table>
        <thead>
            <tr>
                <th>Nom du Tag</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for tag in tags %}
            <tr>
                          <td>{{ tag.name }}</td>
                <td>
                            {#<a href=\"{{ path('tag_show', { 'id': tag.id }) }}\">Voir</a>&nbsp;#}
                            <a href=\"{{ path('tag_edit', { 'id': tag.id }) }}\">Modifier</a>

                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

{% endblock %}
", "tag/tag.list.html.twig", "/home/laure/e-critures/app/Resources/views/tag/tag.list.html.twig");
    }
}
