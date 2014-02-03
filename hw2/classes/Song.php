<?php
class Song{

    public $title;
    public $artistId;
    public $id;
    public $genreId;
    public $price;
    public $playCount = 0;

	public $sql = "INSERT INTO songs (title, artist_id, genre_id, price, play_count)";
    public $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function setTitle($t){
        $this->title = $t;
    }

    public function setArtistId($a){
        $this->artistId = $a;
    }

    public function setGenreId($g){
        $this->genreId = $g;
    }

    public function setPrice($p){
        $this->price = $p;
    }

    public function save(){
        $this->sql .= "VALUES('$this->title', '$this->artistId', '$this->genreId', '$this->price', '$this->playCount')";
        $statement = $this->pdo->prepare($this->sql);
        return $statement->execute();
    }

    public function getTitle(){
        return $this->title;
    }

    public function getId(){
        return $this->pdo->lastInsertId();
    }
}
?>