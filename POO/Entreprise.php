<?php

class Entreprise {

    // attributs
    private string $_raisonSociale;
    private DateTime $_dateCreation;
    private string $_adresse;
    private string $_codePostal;
    private string $_ville;

    public function __construct(string $raisonSociale, string $dateCreation, string $adresse, string $codePostal, string $ville)
    {
        $this->_raisonSociale = $raisonSociale;
        $this->_dateCreation = $dateCreation;
        $this->_adresse = $adresse;
        $this->_codePostal = $codePostal;
        $this->_ville = $ville;
    }

}