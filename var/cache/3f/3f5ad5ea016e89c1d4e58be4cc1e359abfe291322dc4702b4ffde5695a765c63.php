<?php

/* 404.html.twig */
class __TwigTemplate_e0b088b1f89b869ca3122061642eb09b9c5abd0f806ba23e00dbb1678961c590 extends Twig_Template
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
    <title>Not found | Novo SGA</title>
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
        <h1>404</h1>
        
        <p>";
        // line 14
        echo gettext("Página não encontrada");
        echo "</p>
        
        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('slim')->base(), "html", null, true);
        echo "\">";
        echo gettext("Início");
        echo "</a>
    </div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 16,  43 => 14,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8" />*/
/*     <title>Not found | Novo SGA</title>*/
/*     <link rel="stylesheet" type="text/css" href="{{ baseUrl() }}/css/login.css" />*/
/*     <link rel="stylesheet" type="text/css" href="{{ baseUrl() }}/css/bootstrap.min.css" />*/
/*     <link rel="shortcut icon" href="{{ baseUrl() }}/images/favicon.png" />*/
/* </head>*/
/* <body>*/
/*     <div class="container">*/
/*         <h1>404</h1>*/
/*         */
/*         <p>{% trans %}Página não encontrada{% endtrans %}</p>*/
/*         */
/*         <a href="{{ baseUrl() }}">{% trans %}Início{% endtrans %}</a>*/
/*     </div>*/
/* </body>*/
/* </html>*/
