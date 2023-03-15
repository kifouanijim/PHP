<?php

class Vehicule
{
    private string $Matriculation;
    private string $Type;
    private string $Statut;
    private Conducteur $conducteur;

    public function __construct(string $Matriculation,string $Type,string $Statut){
        $this->Matriculation = $Matriculation;
        $this->Statut = $Statut;
        $this->Type = $Type;

    }

    /**
     * @return string
     */
    public function getMatriculation(): string
    {
        return $this->Matriculation;
    }

    /**
     * @return string
     */
    public function getStatut(): string
    {
        return $this->Statut;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }

    /**
     * @return Conducteur
     */
    public function getConducteur(): Conducteur
    {
        return $this->conducteur;
    }

    /**
     * @param Conducteur $conducteur
     */
    public function setConducteur(Conducteur $conducteur): void
    {
        $this->conducteur = $conducteur;
    }

    /**
     * @param string $Matriculation
     */
    public function setMatriculation(string $Matriculation): void
    {
        $this->Matriculation = $Matriculation;
    }

    /**
     * @param string $Statut
     */
    public function setStatut(string $Statut): void
    {
        $this->Statut = $Statut;
    }

    /**
     * @param string $Type
     */
    public function setType(string $Type): void
    {
        $this->Type = $Type;
    }
}