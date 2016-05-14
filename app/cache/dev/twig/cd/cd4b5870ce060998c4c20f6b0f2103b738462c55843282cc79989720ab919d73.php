<?php

/* ADMCCoreBundle:Base:view.html.twig */
class __TwigTemplate_ec7ca7c510abfb355ec7c48ae19eed9dc56645abb80b7653ff5675999f2483ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("ADMCCoreBundle::layout.html.twig", "ADMCCoreBundle:Base:view.html.twig", 2);
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
        $__internal_d168cf9fbb0977981ce44bc605448a20d25419614e85ad3f43c354572c69adf6 = $this->env->getExtension("native_profiler");
        $__internal_d168cf9fbb0977981ce44bc605448a20d25419614e85ad3f43c354572c69adf6->enter($__internal_d168cf9fbb0977981ce44bc605448a20d25419614e85ad3f43c354572c69adf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ADMCCoreBundle:Base:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d168cf9fbb0977981ce44bc605448a20d25419614e85ad3f43c354572c69adf6->leave($__internal_d168cf9fbb0977981ce44bc605448a20d25419614e85ad3f43c354572c69adf6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ea5147466c3907d69fdb0d3faf277a832262e72eea06e22c57d57d46bff3455 = $this->env->getExtension("native_profiler");
        $__internal_6ea5147466c3907d69fdb0d3faf277a832262e72eea06e22c57d57d46bff3455->enter($__internal_6ea5147466c3907d69fdb0d3faf277a832262e72eea06e22c57d57d46bff3455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
    ";
        // line 7
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <h2>Affichage d'un élément</h2>
    
    <p> ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo " </p>
    
    
    
    
    
";
        
        $__internal_6ea5147466c3907d69fdb0d3faf277a832262e72eea06e22c57d57d46bff3455->leave($__internal_6ea5147466c3907d69fdb0d3faf277a832262e72eea06e22c57d57d46bff3455_prof);

    }

    public function getTemplateName()
    {
        return "ADMCCoreBundle:Base:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  43 => 7,  40 => 6,  34 => 5,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends 'ADMCCoreBundle::layout.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/*     */
/*     {{ parent() }}*/
/*     <h2>Affichage d'un élément</h2>*/
/*     */
/*     <p> {{ user.nom }} {{ user.prenom }} </p>*/
/*     */
/*     */
/*     */
/*     */
/*     */
/* {% endblock %}*/
