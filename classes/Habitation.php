<?php

class Habitation {
    public $pays;
    public $ville;
    public $postal;
    public $chambres;
    public $pieces;

    public function __construct(string $pays, string $ville,int $postal,int $chambres,int $pieces)
    {
        $this -> setPays($pays);
        $this -> setVille($ville);
        $this -> setPostal($postal);
        $this -> setChambres($chambres);
        $this -> setPieces($pieces);
    }

    /**
     * @return mixed
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * @param mixed $pays
     */
    public function setPays($pays): void
    {
        $this->pays = $pays;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville): void
    {
        $this->ville = $ville;
    }

    /**
     * @return mixed
     */
    public function getPostal()
    {
        return $this->postal;
    }

    /**
     * @param mixed $postal
     */
    public function setPostal($postal): void
    {
        $this->postal = $postal;
    }

    /**
     * @return mixed
     */
    public function getChambres()
    {
        return $this->chambres;
    }

    /**
     * @param mixed $chambres
     */
    public function setChambres($chambres): void
    {
        $this->chambres = $chambres;
    }

    /**
     * @return mixed
     */
    public function getPieces()
    {
        return $this->pieces;
    }

    /**
     * @param mixed $pieces
     */
    public function setPieces($pieces): void
    {
        $this->pieces = $pieces;
    }

}