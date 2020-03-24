<?php


class formulaire
{
    private $html = "";
    function __construct($fichier, $method)
    {
        $this->html .= "<form method='$method' action='$fichier'>";
    }
    function ajouterzonetexte(){
        $this->html .= " Votre nom : <input type='text'><br>";
    }
    function ajouterbouton(){
        $this->html .= "<button>Cliquez ici</button>";
    }
    function getform(){
        echo $this->html . "</form>";
    }
}


?>