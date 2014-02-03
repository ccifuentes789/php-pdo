<?php
    class GenreMenu{
        public $genres;
        public $fieldName;
        public $genreMenu = "";

        public function __construct($name, $genreList){

            $this->genres = $genreList;
            $this->fieldName = $name;

            $this->genreMenu.="<select name ='$this->fieldName'>";

            foreach($this->genres as $genre) {
                $genreID = $genre['id'];
                $genreName = $genre['genre'];

                $this->genreMenu .= "<option value='$genreID'>";
                $this->genreMenu .= $genreName;
                $this->genreMenu .= "</option>";
            }
            $this->genreMenu.="</select>";
        }
        public function __toString(){
            return $this->genreMenu;
        }
    }
?>