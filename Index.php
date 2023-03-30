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

    public function __toString(){
        return $this->titolo. " " .$this->genere. " " .$this->durata;
    }
}

$film1 = new Movie("Smetto quando voglio","Comico",110);

$film2 = new Movie("Profondo rosso","Horror",130);

$film3 = new Movie("La grande bellezza","Drammatico",170);

var_dump($film1,$film2,$film3);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>

<body>
    <div>
        <h1>Esercizio OOP</h1>
    </div>
    <div>
        <ul>
            <li>
                <?php echo $film1 ?>
            </li>
            <li>
                <?php echo $film2 ?>
            </li>
            <li>
                <?php echo $film3 ?>
            </li>
        </ul>
    </div>
</body>

</html>