<?php

class Appartement extends Habitation {
    public $garage;

    public function __construct(string $pays, string $ville, int $postal, int $chambres,
                                int $pieces, bool $garage)
    {
        parent::__construct($pays, $ville, $postal, $chambres, $pieces);

        $this->garage = $garage;
    }
    /**
     * @return mixed
     */
    public function getGarage()
    {
        return $this->garage;
    }

    /**
     * @param mixed $garage
     */
    public function setGarage($garage): void
    {
        $this->garage = $garage;
    }
}