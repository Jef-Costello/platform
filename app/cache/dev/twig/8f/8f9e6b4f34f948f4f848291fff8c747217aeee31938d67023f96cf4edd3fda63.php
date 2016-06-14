<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c40c514793461e45e884d5e99c5d2af0ea202a8719adce588562a1f149c003ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a69bd0894924102d8146a031c8a9a16778fc15f1bcef804ca186a7b84317e323 = $this->env->getExtension("native_profiler");
        $__internal_a69bd0894924102d8146a031c8a9a16778fc15f1bcef804ca186a7b84317e323->enter($__internal_a69bd0894924102d8146a031c8a9a16778fc15f1bcef804ca186a7b84317e323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a69bd0894924102d8146a031c8a9a16778fc15f1bcef804ca186a7b84317e323->leave($__internal_a69bd0894924102d8146a031c8a9a16778fc15f1bcef804ca186a7b84317e323_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f5bd9e96f5014e99f280200222774f56c46e7bc5785e34aeb04a08b13a762e39 = $this->env->getExtension("native_profiler");
        $__internal_f5bd9e96f5014e99f280200222774f56c46e7bc5785e34aeb04a08b13a762e39->enter($__internal_f5bd9e96f5014e99f280200222774f56c46e7bc5785e34aeb04a08b13a762e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f5bd9e96f5014e99f280200222774f56c46e7bc5785e34aeb04a08b13a762e39->leave($__internal_f5bd9e96f5014e99f280200222774f56c46e7bc5785e34aeb04a08b13a762e39_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_589915c2cd757426c2e09fd9bfd7dbe841a1d85dd62235f9b1ba477c3a9365ec = $this->env->getExtension("native_profiler");
        $__internal_589915c2cd757426c2e09fd9bfd7dbe841a1d85dd62235f9b1ba477c3a9365ec->enter($__internal_589915c2cd757426c2e09fd9bfd7dbe841a1d85dd62235f9b1ba477c3a9365ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_589915c2cd757426c2e09fd9bfd7dbe841a1d85dd62235f9b1ba477c3a9365ec->leave($__internal_589915c2cd757426c2e09fd9bfd7dbe841a1d85dd62235f9b1ba477c3a9365ec_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a42f97f3306f309acc505d2917c3d46dad1c29856c2f2f2d8257a2d758377f7 = $this->env->getExtension("native_profiler");
        $__internal_9a42f97f3306f309acc505d2917c3d46dad1c29856c2f2f2d8257a2d758377f7->enter($__internal_9a42f97f3306f309acc505d2917c3d46dad1c29856c2f2f2d8257a2d758377f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9a42f97f3306f309acc505d2917c3d46dad1c29856c2f2f2d8257a2d758377f7->leave($__internal_9a42f97f3306f309acc505d2917c3d46dad1c29856c2f2f2d8257a2d758377f7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
