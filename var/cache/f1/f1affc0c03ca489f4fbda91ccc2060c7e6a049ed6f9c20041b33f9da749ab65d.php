<?php

/* blocks.html.twig */
class __TwigTemplate_c2ea3f1a603a9a8d9f91e027f94751eeed93a157283fc352ccc76d2aacbee540 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'module_page_header' => array($this, 'block_module_page_header'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('head', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('module_page_header', $context, $blocks);
    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
    }

    // line 5
    public function block_module_page_header($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"header\">
        <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resources')->getCallable(), array($this->env, "images/icon.png", $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "chave", array()))), "html", null, true);
        echo "\" />
        <h2>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "nome", array()), "html", null, true);
        echo "</h2>
        <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "descricao", array()), "html", null, true);
        echo "</p>
    </div>
";
    }

    public function getTemplateName()
    {
        return "blocks.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 9,  48 => 8,  44 => 7,  41 => 6,  38 => 5,  33 => 2,  29 => 5,  26 => 4,  24 => 2,  21 => 1,);
    }
}
/* */
/* {% block head %}*/
/* {% endblock %}*/
/* */
/* {% block module_page_header %}*/
/*     <div class="header">*/
/*         <img src="{{ resources('images/icon.png', module.chave) }}" />*/
/*         <h2>{{ module.nome }}</h2>*/
/*         <p>{{ module.descricao }}</p>*/
/*     </div>*/
/* {% endblock %}*/
/* */
