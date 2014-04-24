<?php

/* galleryitem.html */
class __TwigTemplate_566e9e0e5f16fbb5b5bf45fe26ff907f extends Twig_Template
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
        if (($this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "Gallery") == (isset($context["gallery"]) ? $context["gallery"] : null))) {
            // line 2
            echo "
<li>
    <img src=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "Path"), "html", null, true);
            echo "\" alt=\"alt text\" />
</li>

";
        }
    }

    public function getTemplateName()
    {
        return "galleryitem.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  21 => 2,  58 => 7,  43 => 5,  40 => 4,  23 => 3,  19 => 1,);
    }
}
