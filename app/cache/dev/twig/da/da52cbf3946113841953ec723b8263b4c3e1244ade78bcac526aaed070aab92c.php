<?php

/* ADMCCoreBundle::layout.html.twig */
class __TwigTemplate_8298891c336afe0a3e89513ae34aa2d377d66887681754302f3942db92f73532 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_382cb05be0f19e066e35d6672b105129ac0a31bdb9771d315a7c878d8c7b004d = $this->env->getExtension("native_profiler");
        $__internal_382cb05be0f19e066e35d6672b105129ac0a31bdb9771d315a7c878d8c7b004d->enter($__internal_382cb05be0f19e066e35d6672b105129ac0a31bdb9771d315a7c878d8c7b004d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ADMCCoreBundle::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>

<head>
    
    <meta charset =\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    
    ";
        // line 10
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 14
        echo "    
    <title>ADMC</title>
    
</head>


<body>
    
    ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "    
    
</body>
";
        
        $__internal_382cb05be0f19e066e35d6672b105129ac0a31bdb9771d315a7c878d8c7b004d->leave($__internal_382cb05be0f19e066e35d6672b105129ac0a31bdb9771d315a7c878d8c7b004d_prof);

    }

    // line 10
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_470677e59ff062e087509b19da0d27715686b58adcdceebb1c2f843e00a9c1eb = $this->env->getExtension("native_profiler");
        $__internal_470677e59ff062e087509b19da0d27715686b58adcdceebb1c2f843e00a9c1eb->enter($__internal_470677e59ff062e087509b19da0d27715686b58adcdceebb1c2f843e00a9c1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 11
        echo "        
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
    ";
        
        $__internal_470677e59ff062e087509b19da0d27715686b58adcdceebb1c2f843e00a9c1eb->leave($__internal_470677e59ff062e087509b19da0d27715686b58adcdceebb1c2f843e00a9c1eb_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_345ede4b8e7b20c0752f4d1436004dc779c89208f5dbcc20396cd36789e90944 = $this->env->getExtension("native_profiler");
        $__internal_345ede4b8e7b20c0752f4d1436004dc779c89208f5dbcc20396cd36789e90944->enter($__internal_345ede4b8e7b20c0752f4d1436004dc779c89208f5dbcc20396cd36789e90944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "        <h1>Page principale</h1>
        
        
    ";
        
        $__internal_345ede4b8e7b20c0752f4d1436004dc779c89208f5dbcc20396cd36789e90944->leave($__internal_345ede4b8e7b20c0752f4d1436004dc779c89208f5dbcc20396cd36789e90944_prof);

    }

    public function getTemplateName()
    {
        return "ADMCCoreBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  79 => 23,  73 => 22,  64 => 11,  58 => 10,  48 => 27,  46 => 22,  36 => 14,  34 => 10,  24 => 2,);
    }
}
/* {# empty Twig template #}*/
/* */
/* <!DOCTYPE html>*/
/* */
/* <head>*/
/*     */
/*     <meta charset ="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     */
/*     {% block stylesheet %}*/
/*         */
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*     {% endblock %}*/
/*     */
/*     <title>ADMC</title>*/
/*     */
/* </head>*/
/* */
/* */
/* <body>*/
/*     */
/*     {% block body %}*/
/*         <h1>Page principale</h1>*/
/*         */
/*         */
/*     {% endblock %}*/
/*     */
/*     */
/* </body>*/
/* */
