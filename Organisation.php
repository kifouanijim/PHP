<?php

class Organisation
{
    private string $Nom;
    private string $Ville;
    private array $garage = [];


    public function __construct(string $Nom,string $Ville){
        $this->Nom = $Nom;
        $this->Ville = $Ville;
    }



    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->Nom;
    }

    /**
     * @return string
     */
    public function getVille(): string
    {
        return $this->Ville;
    }

    /**
     * @param string $Nom
     */
    public function setNom(string $Nom): void
    {
        $this->Nom = $Nom;
    }

    /**
     * @param string $Ville
     */
    public function setVille(string $Ville): void
    {
        $this->Ville = $Ville;
    }

    /**
     * @return array
     */
    public function getGarage(): array
    {
        return $this->garage;
    }

    /**
     * @param array $garage
     */
    public function setGarage(array $garage): void
    {
        $this->garage = $garage;
    }


}