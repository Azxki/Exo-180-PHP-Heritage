<?php

class Maison extends Habitation {
    public $jardin;
    public $etages;
    public $garage;

    public function __construct(string $pays, string $ville, int $postal, int $chambres,
                                int $pieces, bool $jardin, int $etages, bool $garage)
    {
        parent::__construct($pays, $ville, $postal, $chambres, $pieces);

        $this->etages = $etages;
        $this->jardin = $jardin;
        $this->garage = $garage;
    }

    /**
     * @return mixed
     */
    public function getJardin()
    {
        return $this->jardin;
    }

    /**
     * @param mixed $jardin
     */
    public function setJardin($jardin): void
    {
        $this->jardin = $jardin;
    }

    /**
     * @return mixed
     */
    public function getEtages()
    {
        return $this->etages;
    }

    /**
     * @param mixed $etages
     */
    public function setEtages($etages): void
    {
        $this->etages = $etages;
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