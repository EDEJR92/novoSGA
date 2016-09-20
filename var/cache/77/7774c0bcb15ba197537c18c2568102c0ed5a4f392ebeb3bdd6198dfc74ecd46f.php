<?php

/* 500.html.twig */
class __TwigTemplate_14d27655ae8095042a0f752aa2deca22c9f7418bd32563aa4ad16c079c0a6f5b extends Twig_Template
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
    <meta charset=\"utf-8\" />
    <title>Error | Novo SGA</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/css/login.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/css/bootstrap.min.css\" />
    <link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "/images/favicon.png\" />
</head>
<body>
    <div class=\"container\">
        <h1>Oops!</h1>
        
        <h2>";
        // line 14
        echo gettext("Mensagem");
        echo "</h2>
        <pre>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "message", array()), "html", null, true);
        echo "</pre>
        
        <h2>Trace</h2>
        <pre>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "traceAsString", array()), "html", null, true);
        echo "</pre>
    </div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "500.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 18,  47 => 15,  43 => 14,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8" />*/
/*     <title>Error | Novo SGA</title>*/
/*     <link rel="stylesheet" type="text/css" href="{{ baseUrl() }}/css/login.css" />*/
/*     <link rel="stylesheet" type="text/css" href="{{ baseUrl() }}/css/bootstrap.min.css" />*/
/*     <link rel="shortcut icon" href="{{ baseUrl() }}/images/favicon.png" />*/
/* </head>*/
/* <body>*/
/*     <div class="container">*/
/*         <h1>Oops!</h1>*/
/*         */
/*         <h2>{% trans %}Mensagem{% endtrans %}</h2>*/
/*         <pre>{{ exception.message }}</pre>*/
/*         */
/*         <h2>Trace</h2>*/
/*         <pre>{{ exception.traceAsString }}</pre>*/
/*     </div>*/
/* </body>*/
/* </html>*/
