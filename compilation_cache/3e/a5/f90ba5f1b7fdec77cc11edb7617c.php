<?php

/* videoitem.html */
class __TwigTemplate_3ea5f90ba5f1b7fdec77cc11edb7617c extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["docs"]) ? $context["docs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
            // line 2
            echo "
";
            // line 3
            if (($this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "Gallery") == 10)) {
                // line 4
                echo "<figure>
    <p>reset</p>
    <figcaption>
        <strong>";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "Titolo"), "html", null, true);
                echo "<BR>
            <p style=\"font-weight:normal; font-size:12px;\"><br><br>Clicca per visualizzare il video</p></strong>
    </figcaption>

    <a href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "Path"), "html", null, true);
                echo "\" rel=\"prettyPhoto\"><img src=\"images/gallery/vid.jpg\" alt=\"CLUB APNEA\" /></a>
</figure>
";
            }
            // line 14
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "videoitem.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 14,  40 => 11,  33 => 7,  28 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }
}
