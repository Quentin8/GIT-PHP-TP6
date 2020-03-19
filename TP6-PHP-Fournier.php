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
        static $nombreEquipe = 0;
        function display(){
            echo "L'équipe " . $this->nom . " a " . $this->nombreTitres . " de titres<br>";
            echo self::constante . self::getNbEquipes() ."\n" ;
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
           echo "Destructor<br>";
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
    $e3 = new equipe();
    $e4 = new equipe();
    $e5 = new equipe();
    $e2->setName("PSG");
    $e2->setNTitres(15);
    $e2->display();




?>