<?php
    class Movie {
        public $title;
        public $genre; 
        public $releaseMonth; 
        public $releaseYear;

        function __construct($_title, $_genre, $_releaseMonth, $_releaseYear) {
            $this->title = $_title;
            $this->genre = $_genre;
            $this->releaseMonth = $_releaseMonth;
            $this->releaseYear = $_releaseYear;
        }

        // Calc the release date doing the sum of month and year of release
        public function calcReleaseDate() {
            return $this->releaseMonth . '/' . $this->releaseYear;
        }
    }

    // Type the infos (title, genre, month and year of release - in this order)
    $movie1 = new Movie('The Desperate Hour', 'Thriller', '09', '2003');
    $movie2 = new Movie('Chernobyl Abyss', 'Drama', '04', '2018');
    $movie3 = new Movie('WarHunt', 'Action', '07', '2022');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Object oriented programming</title>
</head>
<body>
    
    <h2> Feel free to watch this movies! </h2>

    <div class="movie-cards-container">

        <div class="movie-card">
            <h4> Title: <?php echo $movie1->title ?> </h4>

            <h4> Genre: <?php echo $movie1->genre ?> </h4>

            <h4> Release date: <?php echo $movie1->calcReleaseDate() ?> </h4>
        </div>

        <div class="movie-card">
            <h4> Title: <?php echo $movie2->title ?> </h4>

            <h4> Genre: <?php echo $movie2->genre ?> </h4>

            <h4> Release date: <?php echo $movie2->calcReleaseDate() ?> </h4>
        </div>

        <div class="movie-card">
            <h4> Title: <?php echo $movie3->title ?> </h4>

            <h4> Genre: <?php echo $movie3->genre ?> </h4>

            <h4> Release date: <?php echo $movie3->calcReleaseDate() ?> </h4>
        </div>

    </div>


</body>
</html>