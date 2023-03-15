<?php

class Conducteur
{
    private string $NomC;
    private string $prenomC;

    public function __construct(string $NomC,string $prenomC){
        $this->NomC = $NomC;
        $this->prenomC = $prenomC;
    }

    /**
     * @return string
     */
    public function getNomC(): string
    {
        return $this->NomC;
    }

    /**
     * @return string
     */
    public function getPrenomC(): string
    {
        return $this->prenomC;
    }

    /**
     * @param string $NomC
     */
    public function setNomC(string $NomC): void
    {
        $this->NomC = $NomC;
    }

    /**
     * @param string $prenomC
     */
    public function setPrenomC(string $prenomC): void
    {
        $this->prenomC = $prenomC;
    }
}