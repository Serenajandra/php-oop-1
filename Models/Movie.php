<?php
class Movie
{
    public $genere;
    public $attoriProtagonisti;
    public $poster;
    public $trama;
    public $note;
    public $regista;
    public $produttore;

    function __construct(string $titoloOriginale, int $releaseDate)
    {
        $this->titoloOriginale = $titoloOriginale;
        $this->releaseDate = $releaseDate;
    }

    public function MovieAge($releaseDate)
    {
        if ($releaseDate > 2015) {
            $this->note = "Film recente";
        }
    }
}
