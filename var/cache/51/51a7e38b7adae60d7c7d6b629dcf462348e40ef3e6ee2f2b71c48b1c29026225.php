<?php

/* edit.html.twig */
class __TwigTemplate_81f8b656a606515922d89c99d8a69374fefb4aa308287e3428343d003f2beeb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("crud/edit.html.twig", "edit.html.twig", 1);
        $this->blocks = array(
            'formContent' => array($this, 'block_formContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "crud/edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_formContent($context, array $blocks = array())
    {
        // line 3
        echo "    <input type=\"hidden\" name=\"id\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "id", array()), "html", null, true);
        echo "\" />
    <div class=\"form-group required\">
        <label for=\"nome\" class=\"control-label\">";
        // line 5
        echo gettext("Nome");
        echo "</label>
        <input id=\"nome\" type=\"text\" name=\"nome\" class=\"form-control\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "nome", array()), "html", null, true);
        echo "\" maxlength=\"20\" />
    </div>
";
    }

    public function getTemplateName()
    {
        return "edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  37 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "crud/edit.html.twig" %}*/
/* {% block formContent %}*/
/*     <input type="hidden" name="id" value="{{ model.id }}" />*/
/*     <div class="form-group required">*/
/*         <label for="nome" class="control-label">{% trans %}Nome{% endtrans %}</label>*/
/*         <input id="nome" type="text" name="nome" class="form-control" value="{{ model.nome }}" maxlength="20" />*/
/*     </div>*/
/* {% endblock %}*/
