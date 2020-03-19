<h1>TP6</h1>
<hr>
<h2>Exercice 1</h2>
<hr>
<?php
    echo "<h3>Question 1</h3>";
    class equipe {
        private $nom;
        private $nombreTitres;
        const constante = "Nombre d'équipe :";
        static $nombreEquipe;
        function display(){
            echo "L'équipe " . $this->nom . " a " . $this->nombreTitres . " de titres\n";
        }
        function getName(){
            return $this->nom;
        }
        function getNbTitres(){
            return $this->nombreTitres;
        }
        function setName ($name){
            $this->nom = $name;
        }
        function setNTitres($val){
            $this->nombreTitres = $val;
        }
        function __construct($name, $titres)
        {
            $this->nom = $name;
            $this->nombreTitres = $titres;
            ++self::$nombreEquipe;
        }

        function __destruct()
        {
           echo "Destructor\n";
        }
        static function getNbEquipes(){
            return self::$nombreEquipe;
        }
    }
    echo "<h3>Question 2</h3>";
    /*$e1 = new equipe();
    $e1->nom = "Equipe_1";
    $e1->nombreTitres = 2;
    $e1->display();*/
    echo "<h3>Question 3</h3>";
    $e2 = new equipe();
    $e2->setName("Equipe_2");
    $e2->setNTitres(0);
    $e2->display();
    echo "<h3>Question 9</h3>";
    echo $e2::constante . $e2->getNbTitres() ;


?>