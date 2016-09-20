<?php

/* print.html.twig */
class __TwigTemplate_e00355f61bb9005b539955959c84bbd2c97912da2f5c6ead2ce3af4fd99069fb extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atendimento"]) ? $context["atendimento"] : null), "senha", array()), "html", null, true);
        echo "</title>
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/css/style.css?v=";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/css/bootstrap.min.css?v=";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/css/print.css?v=";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "\" />
    <link rel=\"shortcut icon\" href=\"images/favicon.png\" />
</head>
<body onload=\"window.print()\">
    <div id=\"senha\">
        <div id=\"senha-header\">
         <h3> ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atendimento"]) ? $context["atendimento"] : null), "unidade", array()), "html", null, true);
        echo " <h3/> 
         <h4> ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atendimento"]) ? $context["atendimento"] : null), "servico", array()), "html", null, true);
        echo " <h4/> <br />
        </div>
        <div id=\"senha-body\">
            ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atendimento"]) ? $context["atendimento"] : null), "senha", array()), "html", null, true);
        echo "
            <span class=\"descricao\">
                ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["atendimento"]) ? $context["atendimento"] : null), "nomeCliente", array()), "html", null, true);
        echo "
            </span>
        </div>
         <span class=\"data\">";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["now"]) ? $context["now"] : null), "d/m/Y H:i"), "html", null, true);
        echo "</span>
    </div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "print.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 23,  67 => 20,  62 => 18,  56 => 15,  52 => 14,  41 => 8,  35 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <title>{{ atendimento.senha }}</title>*/
/*     <link type="text/css" rel="stylesheet" href="{{ baseUrl() }}/css/style.css?v={{ version }}" />*/
/*     <link type="text/css" rel="stylesheet" href="{{ baseUrl() }}/css/bootstrap.min.css?v={{ version }}" />*/
/*     <link type="text/css" rel="stylesheet" href="{{ baseUrl() }}/css/print.css?v={{ version }}" />*/
/*     <link rel="shortcut icon" href="images/favicon.png" />*/
/* </head>*/
/* <body onload="window.print()">*/
/*     <div id="senha">*/
/*         <div id="senha-header">*/
/*          <h3> {{ atendimento.unidade }} <h3/> */
/*          <h4> {{ atendimento.servico }} <h4/> <br />*/
/*         </div>*/
/*         <div id="senha-body">*/
/*             {{ atendimento.senha }}*/
/*             <span class="descricao">*/
/*                 {{ atendimento.nomeCliente }}*/
/*             </span>*/
/*         </div>*/
/*          <span class="data">{{ now|date('d/m/Y H:i') }}</span>*/
/*     </div>*/
/* </body>*/
/* </html>*/
/* */
