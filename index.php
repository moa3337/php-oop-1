<?php

class Movie {
    public $title;
    public $director;
    public $year;
    public $rating; 
    public $vote;

    /*public function setVote($rating) {
        if($rating > 7.5) {
            $this->vote = "good movie";
        }
    }

    public function getVote() {
        return $this->vote;
    }*/

    function __construct($_vote) {
        $this->vote = $_vote;
    }
}

$movie1 = new Movie(5);
$movie1->title = "Nomadlend";
$movie1->director = "Chloè Zhao";
$movie1->year = "2019";
$movie1->rating = 9.5;
echo $movie1->vote;
//$vote_movie1 = $movie1->getVote();

$movie2 = new Movie();
$movie2->title = "Creed III";
$movie2->director = "Mchael B. Jordan";
$movie2->year = "2023";
$movie2->rating = 7.1;
//$vote_movie2 = $movie2->getVote();

var_dump($movie1);

?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Movies</title>
</head>
<body>
    
</body>
</html>