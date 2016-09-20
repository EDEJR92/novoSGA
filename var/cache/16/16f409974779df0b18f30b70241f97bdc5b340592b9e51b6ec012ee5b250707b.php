<?php

/* relatorio.html.twig */
class __TwigTemplate_272f235b6af4154823bb34232e6af99d906f1c894ef5bd66a6568e47e7486606 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["relatorio"]) ? $context["relatorio"] : null), "titulo", array()), "html", null, true);
        echo "</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), array($this->env, "css/bootstrap.min.css")), "html", null, true);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), array($this->env, "css/style.css")), "html", null, true);
        echo "\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), array($this->env, "css/relatorio.css", $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave", array()))), "html", null, true);
        echo "\" />
    <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), array($this->env, "images/favicon.png")), "html", null, true);
        echo "\" />
</head>
<body>
    <div id=\"report\" class=\"container\">
        <div id=\"report-header\">
            <a href=\"javascript:window.print()\" class=\"print\">
                <span class=\"glyphicon glyphicon-print\"></span>
                ";
        // line 16
        echo gettext("Imprimir");
        // line 17
        echo "            </a>
            <h1>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["relatorio"]) ? $context["relatorio"] : null), "titulo", array()), "html", null, true);
        echo "</h1>
        </div>
        <div id=\"report-body\">
            ";
        // line 21
        $this->loadTemplate((isset($context["page"]) ? $context["page"] : null), "relatorio.html.twig", 21)->display($context);
        // line 22
        echo "        </div>
        <div id=\"report-footer\">
            <p>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["relatorio"]) ? $context["relatorio"] : null), "titulo", array()), "html", null, true);
        echo " - Novo SGA v";
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
        echo "</p>
        </div>
    </div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "relatorio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 24,  64 => 22,  62 => 21,  56 => 18,  53 => 17,  51 => 16,  41 => 9,  37 => 8,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <title>{{ relatorio.titulo }}</title>*/
/*     <link rel="stylesheet" type="text/css" href="{{ resources('css/bootstrap.min.css') }}" />*/
/*     <link type="text/css" rel="stylesheet" href="{{ resources('css/style.css') }}" />*/
/*     <link type="text/css" rel="stylesheet" href="{{ resources('css/relatorio.css', module.chave) }}" />*/
/*     <link rel="shortcut icon" href="{{ resources('images/favicon.png') }}" />*/
/* </head>*/
/* <body>*/
/*     <div id="report" class="container">*/
/*         <div id="report-header">*/
/*             <a href="javascript:window.print()" class="print">*/
/*                 <span class="glyphicon glyphicon-print"></span>*/
/*                 {% trans %}Imprimir{% endtrans %}*/
/*             </a>*/
/*             <h1>{{ relatorio.titulo }}</h1>*/
/*         </div>*/
/*         <div id="report-body">*/
/*             {% include page %}*/
/*         </div>*/
/*         <div id="report-footer">*/
/*             <p>{{ relatorio.titulo }} - Novo SGA v{{ version }}</p>*/
/*         </div>*/
/*     </div>*/
/* </body>*/
/* </html>*/
