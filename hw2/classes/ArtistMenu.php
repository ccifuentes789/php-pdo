<?php
class ArtistMenu{
    public $artists;
    public $fieldName;
    public $artistMenu = "";

    public function __construct($name, $artistList){

        $this->artists = $artistList;
        $this->fieldName = $name;

        $this->artistMenu.="<select name ='$this->fieldName'>";

        foreach($this->artists as $artist) {
            $artistID = $artist['id'];
            $artistName = $artist['artist_name'];

            $this->artistMenu .= "<option value='$artistID'>";
            $this->artistMenu .= $artistName;
            $this->artistMenu .= "</option>";
        }
        $this->artistMenu.="</select>";
    }
    public function __toString(){
        return $this->artistMenu;
    }

}
?>