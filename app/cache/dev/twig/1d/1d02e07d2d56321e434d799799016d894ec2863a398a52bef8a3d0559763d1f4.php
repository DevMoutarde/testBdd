<?php

/* base.html.twig */
class __TwigTemplate_7ae8c67ca4852dcd0143c28532f495a37ff990c00edec38df8b4f733db6e0ec1 extends Twig_Template
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
        $__internal_fc0273455a9a6b31645e7335ed62c1161c2d634caf8ace879f937ea452de0330 = $this->env->getExtension("native_profiler");
        $__internal_fc0273455a9a6b31645e7335ed62c1161c2d634caf8ace879f937ea452de0330->enter($__internal_fc0273455a9a6b31645e7335ed62c1161c2d634caf8ace879f937ea452de0330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_fc0273455a9a6b31645e7335ed62c1161c2d634caf8ace879f937ea452de0330->leave($__internal_fc0273455a9a6b31645e7335ed62c1161c2d634caf8ace879f937ea452de0330_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b83eeee8fca397101f908d18f3e4457cfaee235076dcbaa16b4167eee49535aa = $this->env->getExtension("native_profiler");
        $__internal_b83eeee8fca397101f908d18f3e4457cfaee235076dcbaa16b4167eee49535aa->enter($__internal_b83eeee8fca397101f908d18f3e4457cfaee235076dcbaa16b4167eee49535aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b83eeee8fca397101f908d18f3e4457cfaee235076dcbaa16b4167eee49535aa->leave($__internal_b83eeee8fca397101f908d18f3e4457cfaee235076dcbaa16b4167eee49535aa_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_27556d14969d1fadd023c75eddb747027d6d82b88c4cb774dd21eef960242b5d = $this->env->getExtension("native_profiler");
        $__internal_27556d14969d1fadd023c75eddb747027d6d82b88c4cb774dd21eef960242b5d->enter($__internal_27556d14969d1fadd023c75eddb747027d6d82b88c4cb774dd21eef960242b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_27556d14969d1fadd023c75eddb747027d6d82b88c4cb774dd21eef960242b5d->leave($__internal_27556d14969d1fadd023c75eddb747027d6d82b88c4cb774dd21eef960242b5d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_98ce109a8e862a611ec07532217423fe6a3abbcd1cb5a685ba4cbcea32a354d8 = $this->env->getExtension("native_profiler");
        $__internal_98ce109a8e862a611ec07532217423fe6a3abbcd1cb5a685ba4cbcea32a354d8->enter($__internal_98ce109a8e862a611ec07532217423fe6a3abbcd1cb5a685ba4cbcea32a354d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_98ce109a8e862a611ec07532217423fe6a3abbcd1cb5a685ba4cbcea32a354d8->leave($__internal_98ce109a8e862a611ec07532217423fe6a3abbcd1cb5a685ba4cbcea32a354d8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_22a58be329b8c3cad91a2c1710aab09e9f587388690c7b2d6e63640fcebe7fb7 = $this->env->getExtension("native_profiler");
        $__internal_22a58be329b8c3cad91a2c1710aab09e9f587388690c7b2d6e63640fcebe7fb7->enter($__internal_22a58be329b8c3cad91a2c1710aab09e9f587388690c7b2d6e63640fcebe7fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_22a58be329b8c3cad91a2c1710aab09e9f587388690c7b2d6e63640fcebe7fb7->leave($__internal_22a58be329b8c3cad91a2c1710aab09e9f587388690c7b2d6e63640fcebe7fb7_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
