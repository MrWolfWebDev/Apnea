<?php

/* summaryitem.html */
class __TwigTemplate_17ec8ee7f6868fcbdd2464a3bd591daa extends Twig_Template
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
        echo "<div class=\"summary\">
    <div style=\"position: relative; float: left; width: 10%;\">";
        // line 2
        if (isset($context["doc"])) { $_doc_ = $context["doc"]; } else { $_doc_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_doc_, "data"), "html", null, true);
        echo "</div>
    <div style=\"position: relative; float: left; width: 75%;\">
        <p style=\"font-family:Arial, Helvetica, sans-serif; color:#FFF; font-size:18px; text-transform: uppercase; \">";
        // line 4
        if (isset($context["doc"])) { $_doc_ = $context["doc"]; } else { $_doc_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_doc_, "titolo"), "html", null, true);
        echo "<p>

        <p style=\"font-family:Arial, Helvetica, sans-serif; color:#FFF; font-size:12px;\">
            ";
        // line 7
        if (isset($context["doc"])) { $_doc_ = $context["doc"]; } else { $_doc_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_doc_, "testo"), "html", null, true);
        echo "
        </p></div>
    <div style=\"position: relative; float: left; width:15%;\" >";
        // line 9
        if (isset($context["doc"])) { $_doc_ = $context["doc"]; } else { $_doc_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_doc_, "foto"), "html", null, true);
        echo "</div>
</div>
<div style=\"clear: both;\"></div>";
    }

    public function getTemplateName()
    {
        return "summaryitem.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  35 => 7,  28 => 4,  22 => 2,  19 => 1,);
    }
}
