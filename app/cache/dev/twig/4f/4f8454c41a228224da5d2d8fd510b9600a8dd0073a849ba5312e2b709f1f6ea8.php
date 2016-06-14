<?php

/* base.html.twig */
class __TwigTemplate_76111d662a5052e656b9d487b0d6639ddc6ff612037425c4ac0a20e6c3096d03 extends Twig_Template
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
        $__internal_df3ec2d357ba24f0cbc06d41e2b38afd0f9731c6f231d97166f2d533aca4ea5a = $this->env->getExtension("native_profiler");
        $__internal_df3ec2d357ba24f0cbc06d41e2b38afd0f9731c6f231d97166f2d533aca4ea5a->enter($__internal_df3ec2d357ba24f0cbc06d41e2b38afd0f9731c6f231d97166f2d533aca4ea5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
       <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-3.0.0.min.js"), "html", null, true);
        echo "\"></script>
\t   <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
       <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
       <link rel=\"stylesheet\" href=\" ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo " \" />
       <link rel=\"stylesheet\" href=\" ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jquery-ui.min.css"), "html", null, true);
        echo " \" />
     <link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
     <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    </head>
    <body>
        ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </body>
</html>
";
        
        $__internal_df3ec2d357ba24f0cbc06d41e2b38afd0f9731c6f231d97166f2d533aca4ea5a->leave($__internal_df3ec2d357ba24f0cbc06d41e2b38afd0f9731c6f231d97166f2d533aca4ea5a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_82833ec6b04dda4cd092eb58a4fea4a1a6c7433dc8c407e1c678b942fdca9e9e = $this->env->getExtension("native_profiler");
        $__internal_82833ec6b04dda4cd092eb58a4fea4a1a6c7433dc8c407e1c678b942fdca9e9e->enter($__internal_82833ec6b04dda4cd092eb58a4fea4a1a6c7433dc8c407e1c678b942fdca9e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_82833ec6b04dda4cd092eb58a4fea4a1a6c7433dc8c407e1c678b942fdca9e9e->leave($__internal_82833ec6b04dda4cd092eb58a4fea4a1a6c7433dc8c407e1c678b942fdca9e9e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b7051cbbb1e8853a987115a0ca17bef0d469a35ec409dc615dca862afffb85d6 = $this->env->getExtension("native_profiler");
        $__internal_b7051cbbb1e8853a987115a0ca17bef0d469a35ec409dc615dca862afffb85d6->enter($__internal_b7051cbbb1e8853a987115a0ca17bef0d469a35ec409dc615dca862afffb85d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b7051cbbb1e8853a987115a0ca17bef0d469a35ec409dc615dca862afffb85d6->leave($__internal_b7051cbbb1e8853a987115a0ca17bef0d469a35ec409dc615dca862afffb85d6_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_45b670135868c84d7f047998929f5ac918523931217069364e265a58c5adb264 = $this->env->getExtension("native_profiler");
        $__internal_45b670135868c84d7f047998929f5ac918523931217069364e265a58c5adb264->enter($__internal_45b670135868c84d7f047998929f5ac918523931217069364e265a58c5adb264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_45b670135868c84d7f047998929f5ac918523931217069364e265a58c5adb264->leave($__internal_45b670135868c84d7f047998929f5ac918523931217069364e265a58c5adb264_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d7d6da26af4a2ecb287d3cead203fe917cd679140fce1baab2afc5d8013667ba = $this->env->getExtension("native_profiler");
        $__internal_d7d6da26af4a2ecb287d3cead203fe917cd679140fce1baab2afc5d8013667ba->enter($__internal_d7d6da26af4a2ecb287d3cead203fe917cd679140fce1baab2afc5d8013667ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d7d6da26af4a2ecb287d3cead203fe917cd679140fce1baab2afc5d8013667ba->leave($__internal_d7d6da26af4a2ecb287d3cead203fe917cd679140fce1baab2afc5d8013667ba_prof);

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
        return array (  115 => 18,  104 => 17,  93 => 6,  81 => 5,  72 => 19,  69 => 18,  67 => 17,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*        <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>*/
/* 	   <script src="{{ asset('js/jquery-ui.min.js') }}"></script>*/
/*        <script src="{{ asset('js/main.js') }}"></script>*/
/*        <link rel="stylesheet" href=" {{asset('css/main.css')}} " />*/
/*        <link rel="stylesheet" href=" {{asset('css/jquery-ui.min.css')}} " />*/
/*      <link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>*/
/*      <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
