
<?php

class Movie 
{
    private  $id;
    private  $title;
    private  $overview;
    private  $vote_average;
    private  $poster_path;
    private  $original_language;

    public function __construct($id, $title, $overview, $vote, $poster_path, $original_language) 
    {
        $this->id = $id;
        $this->title = $title;  
        $this->overview = $overview;
        $this->vote_average = $vote;
        $this->poster_path = $poster_path;
        $this->original_language = $original_language;
    }

}

$movieString = file_get_contents(__DIR__ . '/model/movie_db.json');
$movieList = json_decode($movieString, true);
$movies = [];

foreach ($movieList as $movie) {
    $movies[] = new Movie($movie['id'], $movie['title'], $movie['overview'], $movie['vote_average'], $movie['poster_path'], $movie['original_language']);
}
var_dump($movies);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style.css">
    <title>PHP - Oop</title>
</head>
<body>
    
</body>
</html>