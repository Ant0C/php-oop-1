<?php

class Movie{
    public $titolo;
    public $genere;
    public $durata;

    function __construct($_titolo,$_genere,$_durata){
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->durata = $_durata;
    }
}

$Film1 = new Movie("Smetto quando voglio","Comico",110);

$Film2 = new Movie("Profondo rosso","Horror",130);

$Film3 = new Movie("La grande bellezza","Drammatico",170);

var_dump($Film1,$Film2,$Film3)

?>