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
    <div style=\"position: relative; float: left; width: 10%; background-color:#666; height: 5%; padding: 1% 1% 1% 1%; margin: 0% 1% 1% 1%;\">";
        // line 2
        if (isset($context["doc"])) { $_doc_ = $context["doc"]; } else { $_doc_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_doc_, "data"), "html", null, true);
        echo "</div>
    <div style=\"position: relative; float: left; width: 57%;\">
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
        </p>


        <!-- area foto 2 -->
    </div>

    <div style=\"position: relative;width:25%; height:100%; float:left; padding-right: 20px; margin-bottom:20px;\">
        <img src=\"";
        // line 15
        if (isset($context["doc"])) { $_doc_ = $context["doc"]; } else { $_doc_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_doc_, "foto"), "html", null, true);
        echo "\" style=\"width: 100%\" alt=\"foto\" />
    </div>

</div><br>
<div style=\"clear: both;\"></div>
<hr style=\"background:#FFF; border:0; height:1px\" />
";
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
        return array (  35 => 7,  28 => 4,  22 => 2,  19 => 1,  53 => 7,  51 => 6,  47 => 15,  29 => 3,  26 => 2,  20 => 1,);
    }
}
