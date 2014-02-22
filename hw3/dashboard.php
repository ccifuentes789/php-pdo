<?php
/**
 * Created by PhpStorm.
 * User: CarlosC
 * Date: 2/22/14
 * Time: 11:15 AM
 */


$host = 'itp460.usc.edu';
$dbname = 'music';
$user = 'student';
$pass = 'ttrojan';

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

$songQuery = new ITP\Songs\SongQuery($pdo);
$songs = $songQuery
    ->withArtist()
    ->withGenre()
    ->orderBy('title')
    ->all();
/*
$sql = "
	SELECT title, price, genre, artist_name
	FROM songs
	INNER JOIN artists
	ON songs.artist_id = artists.id
	ON songs.genre_id = genres.id
";*/
//WHERE artist_name LIKE '%$artist%'
$statement  = $pdo->prepare($songQuery);
$statement->execute();
$songs = $statement->fetchAll(PDO::FETCH_OBJ);

foreach($songs as $song){

      echo "<h3>$song->title by $song->artist_name </h3> <br/>";
      echo "$song->price, Genre: $song->genre";
}

