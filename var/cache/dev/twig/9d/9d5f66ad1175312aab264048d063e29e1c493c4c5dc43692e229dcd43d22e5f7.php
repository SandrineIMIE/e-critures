<?php

/* base.html.twig */
class __TwigTemplate_d81bae7d5325a7f23ba92e849144467ab8ed2421c201cbf1d70c17582ad76de7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a0a25d7930e45739ff756bc9eb8469c8bda262792741b664f429565d443da39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a0a25d7930e45739ff756bc9eb8469c8bda262792741b664f429565d443da39->enter($__internal_2a0a25d7930e45739ff756bc9eb8469c8bda262792741b664f429565d443da39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_bb7e1490a3c4407480addfebb30b94f46688d84b962b3816edcbda3288c6d84f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb7e1490a3c4407480addfebb30b94f46688d84b962b3816edcbda3288c6d84f->enter($__internal_bb7e1490a3c4407480addfebb30b94f46688d84b962b3816edcbda3288c6d84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
";
        // line 10
        $this->loadTemplate("default/menu.html.twig", "base.html.twig", 10)->display($context);
        // line 11
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_2a0a25d7930e45739ff756bc9eb8469c8bda262792741b664f429565d443da39->leave($__internal_2a0a25d7930e45739ff756bc9eb8469c8bda262792741b664f429565d443da39_prof);

        
        $__internal_bb7e1490a3c4407480addfebb30b94f46688d84b962b3816edcbda3288c6d84f->leave($__internal_bb7e1490a3c4407480addfebb30b94f46688d84b962b3816edcbda3288c6d84f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_393ceee9c14e484dd1014b3f798c6d3d0cfcde8725663b2af2781799bbabe063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_393ceee9c14e484dd1014b3f798c6d3d0cfcde8725663b2af2781799bbabe063->enter($__internal_393ceee9c14e484dd1014b3f798c6d3d0cfcde8725663b2af2781799bbabe063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f17fe87e2ad258bbfba2e58c72c528996cec1283bd872aae5a148a338a15629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f17fe87e2ad258bbfba2e58c72c528996cec1283bd872aae5a148a338a15629->enter($__internal_6f17fe87e2ad258bbfba2e58c72c528996cec1283bd872aae5a148a338a15629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f17fe87e2ad258bbfba2e58c72c528996cec1283bd872aae5a148a338a15629->leave($__internal_6f17fe87e2ad258bbfba2e58c72c528996cec1283bd872aae5a148a338a15629_prof);

        
        $__internal_393ceee9c14e484dd1014b3f798c6d3d0cfcde8725663b2af2781799bbabe063->leave($__internal_393ceee9c14e484dd1014b3f798c6d3d0cfcde8725663b2af2781799bbabe063_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0d7f27befa2f238e0f1aab9195c09c05523c47bbda681e2ff118caa3cdbd9980 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d7f27befa2f238e0f1aab9195c09c05523c47bbda681e2ff118caa3cdbd9980->enter($__internal_0d7f27befa2f238e0f1aab9195c09c05523c47bbda681e2ff118caa3cdbd9980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_790548a59251641960268c50ad6a3e83a01d93d56086b9ec35cd4931fc74f13e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_790548a59251641960268c50ad6a3e83a01d93d56086b9ec35cd4931fc74f13e->enter($__internal_790548a59251641960268c50ad6a3e83a01d93d56086b9ec35cd4931fc74f13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_790548a59251641960268c50ad6a3e83a01d93d56086b9ec35cd4931fc74f13e->leave($__internal_790548a59251641960268c50ad6a3e83a01d93d56086b9ec35cd4931fc74f13e_prof);

        
        $__internal_0d7f27befa2f238e0f1aab9195c09c05523c47bbda681e2ff118caa3cdbd9980->leave($__internal_0d7f27befa2f238e0f1aab9195c09c05523c47bbda681e2ff118caa3cdbd9980_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f2f30cf2e238847b1a8c2a351516bbe84e3ef28c183112920694af74b252a71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f2f30cf2e238847b1a8c2a351516bbe84e3ef28c183112920694af74b252a71->enter($__internal_6f2f30cf2e238847b1a8c2a351516bbe84e3ef28c183112920694af74b252a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_21e5400ea7d763a4d416606ff60e20133aa45e3ad4dfe19dc00e25318d00447c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21e5400ea7d763a4d416606ff60e20133aa45e3ad4dfe19dc00e25318d00447c->enter($__internal_21e5400ea7d763a4d416606ff60e20133aa45e3ad4dfe19dc00e25318d00447c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_21e5400ea7d763a4d416606ff60e20133aa45e3ad4dfe19dc00e25318d00447c->leave($__internal_21e5400ea7d763a4d416606ff60e20133aa45e3ad4dfe19dc00e25318d00447c_prof);

        
        $__internal_6f2f30cf2e238847b1a8c2a351516bbe84e3ef28c183112920694af74b252a71->leave($__internal_6f2f30cf2e238847b1a8c2a351516bbe84e3ef28c183112920694af74b252a71_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1a0f2edb8fdb06426503b98a97085282fc97527c5bfbe66be795017ebcf5f063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a0f2edb8fdb06426503b98a97085282fc97527c5bfbe66be795017ebcf5f063->enter($__internal_1a0f2edb8fdb06426503b98a97085282fc97527c5bfbe66be795017ebcf5f063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_db1317ce5d7ec6eae3fbaabb4c9336a69f485a9eade899039404b7dfc235a573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db1317ce5d7ec6eae3fbaabb4c9336a69f485a9eade899039404b7dfc235a573->enter($__internal_db1317ce5d7ec6eae3fbaabb4c9336a69f485a9eade899039404b7dfc235a573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_db1317ce5d7ec6eae3fbaabb4c9336a69f485a9eade899039404b7dfc235a573->leave($__internal_db1317ce5d7ec6eae3fbaabb4c9336a69f485a9eade899039404b7dfc235a573_prof);

        
        $__internal_1a0f2edb8fdb06426503b98a97085282fc97527c5bfbe66be795017ebcf5f063->leave($__internal_1a0f2edb8fdb06426503b98a97085282fc97527c5bfbe66be795017ebcf5f063_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 12,  103 => 11,  86 => 6,  68 => 5,  56 => 13,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
{% include 'default/menu.html.twig' %}
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/laure/e-critures/app/Resources/views/base.html.twig");
    }
}
