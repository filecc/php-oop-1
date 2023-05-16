<?php

class Movie{
    public $title;
    public $original_title;
    public $nationality;
    public $date;
    public $vote;
    public $image;
    public $genre;

    public function __construct($title, $original_title, $nationality, $date, $vote, $image, $genre)
    {
        $this->title = $title;
        $this->original_title = $original_title;
        $this->nationality = $nationality;
        $this->date = $date;
        $this->vote = $vote;
        $this->image = $image;
        $this->genre = $genre;
    }
    public function getImage(){
        return "<img class='card-img-top h-100' src='$this->image' alt='$this->title'>";
    }
    public function getInfo(){
        $date = explode("-", $this->date);
        return "<span class='card-text d-block'>$this->nationality - $date[0] - $this->vote</span>";
    }

    
}