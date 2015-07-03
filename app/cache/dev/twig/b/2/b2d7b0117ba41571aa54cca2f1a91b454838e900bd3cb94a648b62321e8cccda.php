<?php

/* adminBundle:Default:adminUser.html.twig */
class __TwigTemplate_b2d7b0117ba41571aa54cca2f1a91b454838e900bd3cb94a648b62321e8cccda extends Twig_Template
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
        echo "<header style=\"width: 100%; height: 50px; background-color: grey\">
    <font color=\"white\">BIENVENUE SUR VIDEOLUDIQUE</font>
</header>

<div align=\"left\"><h1>Partie Administration</h1></div>
<form action=\"decoAdmin\" method=\"post\" >
    <div align=\"right\"><button>Deconnexion</button></div>
</form>

<div align=\"center\">

        <div>
            <h3 style=\"text-align:left \">Ajouter des vidéos :</h3>

            <form action=\"adminUser\" method=\"post\">
                <p>
                    <input class=\"input-text\" type=\"text\" id=\"urlVideo\" name=\"urlVideo\" size=\"30\" value=\"Entrer l'url de la vidéo\" />
                </p>
                <p>
                    <button id=\"AjouterVideo\">Ajouter</button>
                </p>
                </br>
            </form>
        </div>

        <h3>Vidéo en ligne</h3>

</div>
<div style=\"text-align: center; width: auto\">
    ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) ? $context["videos"] : $this->getContext($context, "videos")));
        foreach ($context['_seq'] as $context["_key"] => $context["currentVideo"]) {
            // line 31
            echo "    <div style=\"display:inline-block;margin:18px; width: 400px; height:200px;\">
            <video style=\"height:200Px;width:auto\" controls=\"controls\">
                <source src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["currentVideo"], "url", array()), "html", null, true);
            echo "\" type=\"video/mp4\" />
            </video></br>

            <form action=\"DeleteVideo\" method=\"post\" >
                <button id=\"DeleteVideo\" name=\"DeleteVideo\">supprimer</button>
                <input type=\"hidden\" name=\"idVideo\" value=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["currentVideo"], "id", array()), "html", null, true);
            echo "\"/>
            </form>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currentVideo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
</div>





";
    }

    public function getTemplateName()
    {
        return "adminBundle:Default:adminUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 42,  66 => 38,  58 => 33,  54 => 31,  50 => 30,  19 => 1,);
    }
}
