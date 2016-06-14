<?php

/* setup/index.html.twig */
class __TwigTemplate_ef1ad2c12e1daa8c835b305a3f0e9d84d75063b94302c114d461b98f53ee95d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "setup/index.html.twig", 1);
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
        $__internal_e8e7f439d473680a518858cf6969277e1d7c504367574f130790f17c8aa4f46b = $this->env->getExtension("native_profiler");
        $__internal_e8e7f439d473680a518858cf6969277e1d7c504367574f130790f17c8aa4f46b->enter($__internal_e8e7f439d473680a518858cf6969277e1d7c504367574f130790f17c8aa4f46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "setup/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8e7f439d473680a518858cf6969277e1d7c504367574f130790f17c8aa4f46b->leave($__internal_e8e7f439d473680a518858cf6969277e1d7c504367574f130790f17c8aa4f46b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_68266150a53a8d18d299fd65edd7ba79420de6d858887f5feac142f2c35873aa = $this->env->getExtension("native_profiler");
        $__internal_68266150a53a8d18d299fd65edd7ba79420de6d858887f5feac142f2c35873aa->enter($__internal_68266150a53a8d18d299fd65edd7ba79420de6d858887f5feac142f2c35873aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>user list</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>City</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 16
            echo "            <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "name", array()), "html", null, true);
            echo "</td>
                 <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "streetAddress", array()), "html", null, true);
            echo "</td>
                 <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "city", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </tbody>
    </table>

    <ul>
       
    </ul>
      <div id='object'></div>'
   
     <div id='time'></div>
     <div id='rec'></div>
     <div id='pl'></div><div id='stop'></div>
      <div id='slide'></div>
";
        
        $__internal_68266150a53a8d18d299fd65edd7ba79420de6d858887f5feac142f2c35873aa->leave($__internal_68266150a53a8d18d299fd65edd7ba79420de6d858887f5feac142f2c35873aa_prof);

    }

    public function getTemplateName()
    {
        return "setup/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 22,  68 => 19,  64 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>user list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <th>Address</th>*/
/*                 <th>City</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for user in users %}*/
/*             <tr>*/
/*                 <td>{{ user.name }}</td>*/
/*                  <td>{{ user.streetAddress }}</td>*/
/*                  <td>{{ user.city }}</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*        */
/*     </ul>*/
/*       <div id='object'></div>'*/
/*    */
/*      <div id='time'></div>*/
/*      <div id='rec'></div>*/
/*      <div id='pl'></div><div id='stop'></div>*/
/*       <div id='slide'></div>*/
/* {% endblock %}*/
/* */
