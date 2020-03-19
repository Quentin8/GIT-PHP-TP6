<h1>TP6</h1>
<hr>
<h2>Exercice 1</h2>
<hr>
<?php
    echo "<h3>Question 1</h3>";
    class equipe {
        public $nom;
        public $nombreTitres;
        function display(){
            echo "L'équipe " . $this->nom . " a " . $this->nombreTitres . " de titres";
        }
    }
    echo "<h3>Question 2</h3>";
    $e1 = new equipe();
    $e1->nom = "Equipe_1";
    $e1->nombreTitres = 2;
    $e1->display();
    echo "<h3>Question 3</h3>";


?>