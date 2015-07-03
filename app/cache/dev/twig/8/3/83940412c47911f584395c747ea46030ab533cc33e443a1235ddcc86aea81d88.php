<?php

/* AccueilBundle:Default:index.html.twig */
class __TwigTemplate_83940412c47911f584395c747ea46030ab533cc33e443a1235ddcc86aea81d88 extends Twig_Template
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
        echo "<h1>Video Ludique ISITECH</h1>

<div>
    <a href=\"/LoginRedirect\">Se Connecter</a>
</div>

<div>
    <h2>WELCOME</h2>
    <p>
        ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["intro"]) ? $context["intro"] : $this->getContext($context, "intro")), "html", null, true);
        echo "
    </p>
</div>




";
    }

    public function getTemplateName()
    {
        return "AccueilBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  19 => 1,);
    }
}
