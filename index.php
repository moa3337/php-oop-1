<?php

class Movie {
    public $title;
    public $director;
    public $year;
    public $rating; 

    public function getRating() {
        if ($this->rating < 7) {
            return "Good Movie";
        } else {
            return "Masterpiece";
        }
    }
}

$movie1 = new Movie();
$movie1->title = "Nomadlend";
$movie1->director = "Chloè Zhao";
$movie1->year = "2019";
$movie1->rating = 9.2;
$rating1 = $movie1->getRating();

//var_dump($movie1);

$movie2 = new Movie();
$movie2->title = "Creed III";
$movie2->director = "Mchael B. Jordan";
$movie2->year = "2023";
$movie2->rating = 5.9;
$rating2 = $movie2->getRating(); 

$movie3 = new Movie();
$movie3->title = "The Warriors";
$movie3->director = "Walter Hill";
$movie3->year = "1979";
$movie3->rating = 7.6;
$rating3 = $movie3->getRating();

?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>php Movies</title>
</head>
<body class="container mt-5">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Director</th>
                <th scope="col">Year</th>
                <th scope="col">Rating</th>
                <th scope="col">Our opinion</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            
            <tr>
                <th scope="row">1</th>
                <td><h6><?php echo $movie1->title; ?></h6></td>
                <td><?php echo $movie1->director; ?></td>
                <td><?php echo $movie1->year; ?></td>
                <td><?php echo $movie1->rating; ?></td>
                <td><?php echo $movie1->getRating(); ?></td>
            </tr>

            <tr>
                <th scope="row">2</th>
              <td><h6><?php echo $movie2->title; ?></h6></td>
              <td><?php echo $movie2->director; ?></td>
              <td><?php echo $movie2->year; ?></td>
              <td><?php echo $movie2->rating; ?></td>
              <td><?php echo $movie2->getRating(); ?></td>
            </tr>

            <tr>
                <th scope="row">3</th>
              <td><h6><?php echo $movie3->title; ?></h6></td>
              <td><?php echo $movie3->director; ?></td>
              <td><?php echo $movie3->year; ?></td>
              <td><?php echo $movie3->rating; ?></td>
              <td><?php echo $movie3->getRating(); ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>

