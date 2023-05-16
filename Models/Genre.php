<?php
class Genre{
    public $names;

    public function __construct($names)
    {
        $this->names = $names;
    }
    public function getAllGenres(){
        $genres = '';
        foreach ($this->names as $name) {
            $genres .= "<span class='me-1 text-capitalize'>$name</span>";
        }
        return $genres;
    }
}