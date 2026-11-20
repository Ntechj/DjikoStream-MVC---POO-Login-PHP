<?php

class Oeuvre {

    public $titre;
    public $type;
    public $genre;
    public $note;
    public $anneeSortie;

    public function __construct($titre, $type, $genre, $note, $anneeSortie) {

        $this->titre = $titre;
        $this->type = $type;
        $this->genre = $genre;
        $this->note = $note;
        $this->anneeSortie = $anneeSortie;

    }

};