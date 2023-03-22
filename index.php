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
$movie1 = $movie1->getRating();
echo "<br/>";

var_dump($movie1);

$movie2 = new Movie();
$movie2->title = "Creed III";
$movie2->director = "Mchael B. Jordan";
$movie2->year = "2023";
$movie2->rating = 5.9;
$movie2 = $movie2->getRating();

$movie3 = new Movie();
$movie3->title = "The Warriors";
$movie3->director = "Walter Hill";
$movie3->year = "1979";
$movie3->rating = 7.6;
$movie3 = $movie3->getRating();

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
    <table>
  <thead>
    <tr>
      <th>Title</th>
      <th>Director</th>
      <th>Year</th>
      <th>Rating</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $movie1->title; ?></td>
      <td><?php echo $movie1->director; ?></td>
      <td><?php echo $movie1->year; ?></td>
      <td><?php echo $movie1->getRatingString(); ?></td>
    </tr>
    <tr>
      <td><?php echo $movie2->title; ?></td>
      <td><?php echo $movie2->director; ?></td>
      <td><?php echo $movie2->year; ?></td>
      <td><?php echo $movie2->getRatingString(); ?></td>
    </tr>
  </tbody>
</table>
</body>
</html>

