<?php

/* loginBundle:Default:index.html.twig */
class __TwigTemplate_a34bc251058ad60818988d0b6d9118a8f65d45c377e7014cb8c5f167221d6b7f extends Twig_Template
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
        echo "<h1>Connexion</h1>

<div id=\"login\">
    <div align=\"center\">
        <div id=\"logoAccueil\"></div>
    </div>

    <h2>Entrer vos identifiants</h2>

    <form action=\"/TestForm\" method=\"post\" >
        <p>
            <input class=\"input-text\" type=\"text\" id=\"identifiant\" name=\"identifiant\" size=\"30\" value=\"Identifiant\" onblur=\"if(this.value=='')this.value='Identifiant';\"onclick=\"if(this.value=='Identifiant')this.value='';\"/>
        </p>
        <p>
            <input class=\"input-text\" type=\"password\" id=\"mdp\" name=\"mdp\" size=\"30\" value=\"Mot de passe\" onblur=\"if(this.value=='')this.value='Mot de passe';\" onclick=\"if(this.value=='Mot de passe')this.value='';\" />
        </p>
        <p>
            <button id=\"connexion\">Connexion</button>
        </p>
        </br>
    </form>
</div>



";
    }

    public function getTemplateName()
    {
        return "loginBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
