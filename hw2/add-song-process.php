<?php

require_once 'db.php';
require('classes/Song.php');

$song = new Song($pdo);
$song->setTitle($_POST['title']);
$song->setArtistId($_POST['artist']);
$song->setGenreId($_POST['genre']);
$song->setPrice($_POST['price']);
$response = $song->save();

/*
echo $song->getTitle()  . "<br />";
echo $song->price . "<br />";
echo $song->artistId  . "<br />";
echo $song->genreId  . "<br />";
echo $song->playCount;*/
?>

<?php if ($response === true) : ?>
    <p>The song <?php echo $song->getTitle() ?>
        with an ID of <?php echo $song->getId() ?>
        was inserted successfully!</p>
<?php else : ?>
    <p>There was an error adding your song.</p>
<?php endif ?>