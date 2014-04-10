<?php

/* summaryitem.php */
class __TwigTemplate_bc8b1d911bb465cfb142689a869dbe01 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "DataIns"), "html", null, true);
        echo "</div>
    <div style=\"position: relative; float: left; width: 57%;\">
        <p style=\"font-family:Arial, Helvetica, sans-serif; color:#FFF; font-size:18px; text-transform: uppercase; \">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "Titolo"), "html", null, true);
        echo "<p>

        <p style=\"font-family:Arial, Helvetica, sans-serif; color:#FFF; font-size:12px;\">
            ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "Testo"), "html", null, true);
        echo "
        </p>


        <!-- area foto 2 -->
    </div>

    <div style=\"position: relative;width:25%; height:100%; float:left; padding-right: 20px; margin-bottom:20px;\">
        <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["doc"]) ? $context["doc"] : null), "Foto"), "html", null, true);
        echo "\" style=\"width: 100%\" alt=\"foto\" />
    </div>

</div><br>
<div style=\"clear: both;\"></div>
<hr style=\"background:#FFF; border:0; height:1px\" />
";
    }

    public function getTemplateName()
    {
        return "summaryitem.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 15,  33 => 7,  27 => 4,  22 => 2,  19 => 1,  52 => 7,  50 => 6,  46 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }
}
