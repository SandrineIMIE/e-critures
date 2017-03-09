<?php

/* default/menu.html.twig */
class __TwigTemplate_7d6b0e905c9d8904f1bb3f7ee8244612d756b18c34649c60ba7cb79f780766da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_197983207be912ac6de0de6be7f4d4aeaf5230bdf92b64f7390aea3d794dad86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_197983207be912ac6de0de6be7f4d4aeaf5230bdf92b64f7390aea3d794dad86->enter($__internal_197983207be912ac6de0de6be7f4d4aeaf5230bdf92b64f7390aea3d794dad86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/menu.html.twig"));

        $__internal_de148a0e1fe805b46d58a2b2c4c320671a300e6d56d3ecdd9820c85245eba545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de148a0e1fe805b46d58a2b2c4c320671a300e6d56d3ecdd9820c85245eba545->enter($__internal_de148a0e1fe805b46d58a2b2c4c320671a300e6d56d3ecdd9820c85245eba545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/menu.html.twig"));

        // line 1
        echo "<ul>
    <li> Lister
        <ul>
            <li> <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_index");
        echo "\">des projets</a></li>
            <li> <a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_index");
        echo "\">des catégories</a>&nbsp;</li>
            <li> <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rights_index");
        echo "\">des droits</a></li>
            <li> <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_index");
        echo "\">des tags</a></li>
        </ul>
    </li>
    <li>Créer
        <ul>
            <li> <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_new");
        echo "\">un projet</a></li>
            <li> <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_new");
        echo "\">une catégorie</a></li>
            <li> <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rights_new");
        echo "\"> un droit</a></li>
            <li> <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_new");
        echo "\">un tag</a></li>
        </ul>
    </li>
</ul>";
        
        $__internal_197983207be912ac6de0de6be7f4d4aeaf5230bdf92b64f7390aea3d794dad86->leave($__internal_197983207be912ac6de0de6be7f4d4aeaf5230bdf92b64f7390aea3d794dad86_prof);

        
        $__internal_de148a0e1fe805b46d58a2b2c4c320671a300e6d56d3ecdd9820c85245eba545->leave($__internal_de148a0e1fe805b46d58a2b2c4c320671a300e6d56d3ecdd9820c85245eba545_prof);

    }

    public function getTemplateName()
    {
        return "default/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 15,  58 => 14,  54 => 13,  50 => 12,  42 => 7,  38 => 6,  34 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul>
    <li> Lister
        <ul>
            <li> <a href=\"{{ path('project_index') }}\">des projets</a></li>
            <li> <a href=\"{{ path('category_index') }}\">des catégories</a>&nbsp;</li>
            <li> <a href=\"{{ path('rights_index') }}\">des droits</a></li>
            <li> <a href=\"{{ path('tag_index') }}\">des tags</a></li>
        </ul>
    </li>
    <li>Créer
        <ul>
            <li> <a href=\"{{ path('project_new') }}\">un projet</a></li>
            <li> <a href=\"{{ path('category_new') }}\">une catégorie</a></li>
            <li> <a href=\"{{ path('rights_new') }}\"> un droit</a></li>
            <li> <a href=\"{{ path('tag_new') }}\">un tag</a></li>
        </ul>
    </li>
</ul>", "default/menu.html.twig", "/home/laure/e-critures/app/Resources/views/default/menu.html.twig");
    }
}
