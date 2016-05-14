<?php

/* ADMCCoreBundle:Base:add.html.twig */
class __TwigTemplate_b3fa320ade52018b4b2455be9f8efc32e946a8b71a797773a23b4ab4f2451cd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 6
        $this->parent = $this->loadTemplate("ADMCCoreBundle::layout.html.twig", "ADMCCoreBundle:Base:add.html.twig", 6);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ADMCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d40025f1827931fd4fe4c2739c48e7847371243c675f4dca7824b2b903d9829b = $this->env->getExtension("native_profiler");
        $__internal_d40025f1827931fd4fe4c2739c48e7847371243c675f4dca7824b2b903d9829b->enter($__internal_d40025f1827931fd4fe4c2739c48e7847371243c675f4dca7824b2b903d9829b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ADMCCoreBundle:Base:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d40025f1827931fd4fe4c2739c48e7847371243c675f4dca7824b2b903d9829b->leave($__internal_d40025f1827931fd4fe4c2739c48e7847371243c675f4dca7824b2b903d9829b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_47eb8e5f059d6890ae3fb7e83635b9f69b9bc7c2c8fe14591500c5bbe75b59f2 = $this->env->getExtension("native_profiler");
        $__internal_47eb8e5f059d6890ae3fb7e83635b9f69b9bc7c2c8fe14591500c5bbe75b59f2->enter($__internal_47eb8e5f059d6890ae3fb7e83635b9f69b9bc7c2c8fe14591500c5bbe75b59f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    
    ";
        // line 11
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <h2>Page ajout d'un élément</h2>
    
    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    
    
    
    
";
        
        $__internal_47eb8e5f059d6890ae3fb7e83635b9f69b9bc7c2c8fe14591500c5bbe75b59f2->leave($__internal_47eb8e5f059d6890ae3fb7e83635b9f69b9bc7c2c8fe14591500c5bbe75b59f2_prof);

    }

    public function getTemplateName()
    {
        return "ADMCCoreBundle:Base:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  43 => 11,  40 => 10,  34 => 9,  11 => 6,);
    }
}
/* {# empty Twig template #}*/
/* */
/* */
/* */
/* */
/* {% extends 'ADMCCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/*     */
/*     {{ parent() }}*/
/*     <h2>Page ajout d'un élément</h2>*/
/*     */
/*     {{ form(form) }}*/
/*     */
/*     */
/*     */
/*     */
/* {% endblock %}*/
