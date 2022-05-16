<?php

//phpinfo()

class Movie {

        public $name;
        public $genre;
        public $year;
        
        // creo un contruct con la durata del film
        public function __construct($_duration) {
            $this->duration= $_duration . ' min';
        }
        
        // creo una funzione che calcola quanto tempo fa è uscito il film
        public function movieAge(){
            
            // calcolo la data del film sottraendo l'anno di uscita del film alla data di oggi
            $filmAge = date("Y") - $this->year;

            return $filmAge;
        }

    }

    

    //creo i film e passo la durata al construct
    $theIncredibleHulk = new Movie(112);

    $avengersEndgame = new Movie(182);

    $spiderman2 = new Movie(127);


    //The Incredible Hulk 
    $theIncredibleHulk->title = 'The Incredible Hulk';

    $theIncredibleHulk->genre = 'Azione/Sci-fi';

    $theIncredibleHulk->year = 2008;

    //Avengers Endgame
    $avengersEndgame->title = 'Avengers Endgame';

    $avengersEndgame->genre = 'Azione/Sci-fi';

    $avengersEndgame->year = 2019;

    //spider-man 2
    $spiderman2->title = 'spider-man 2';

    $spiderman2->genre = 'Azione/Avventura';

    $spiderman2->year = 2004;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Films Card</title>
</head>
<body>
    <div class="card-container">

        <!-- Stampo i film -->
        <div class="movie-card">
            <?php
                echo('<p> Title: ' . $theIncredibleHulk->title . '</p>');
                echo('<p> Genre: ' . $theIncredibleHulk->genre . '</p>');
                echo('<p> Durata: ' . $theIncredibleHulk->duration . '</p>');
                echo('<p>' . $theIncredibleHulk->title . ' came out ' . $theIncredibleHulk->movieAge() . ' years ago</p>');
            ?>
        </div>
        <div class="movie-card">
            <?php
                echo('<p> Title: ' . $avengersEndgame->title . '</p>');
                echo('<p> Genre: ' . $avengersEndgame->genre . '</p>');
                echo('<p> Duration: ' . $avengersEndgame->duration . '</p>');
                echo('<p>' . $avengersEndgame->title . ' came out ' . $avengersEndgame->movieAge() . ' years ago</p>');
            ?>
        </div>
        <div class="movie-card">
            <?php
                echo('<p> Title: ' . $spiderman2->title . '</p>');
                echo('<p> Genre: ' . $spiderman2->genre . '</p>');
                echo('<p> Durata: ' . $spiderman2->duration . '</p>');
                echo('<p>' . $spiderman2->title . ' came out ' . $spiderman2->movieAge() . ' years ago</p>');
            ?>
        </div>       
    </div>   
</body>
</html>


    
