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
        $this->_dateCreation = new DateTime($dateCreation);
        $this->_adresse = $adresse;
        $this->_codePostal = $codePostal;
        $this->_ville = $ville;
    }

    public function getRaisonSociale() : string
    {
        return $this->_raisonSociale;
    }

    public function setRaisonSociale(string $_raisonSociale){
        $this->_raisonSociale = $_raisonSociale;
    }

    public function getDateCreation() : DateTime
    {
        return $this->_dateCreation;
    }

    public function setDateCreation($_dateCreation){
        $this->_dateCreation = $_dateCreation;
    }

    public function get_adresse() : string
    {
        return $this->_adresse;
    }

    public function set_adresse(string $_adresse)
    {
        $this->_adresse = $_adresse;
    }
    
    public function get_codePostal() : string
    {
        return $this->_codePostal;
    }

    public function set_codePostal(string $_codePostal)
    {
        $this->_codePostal = $_codePostal;
    }
    
    public function get_ville() : string
    {
        return $this->_ville;
    }

    public function set_ville(string $_ville)
    {
        $this->_ville = $_ville;
    }

    public function getAdresseComplete() {
        return $this->_adresse." ".$this->_codePostal." ".$this->_ville;
    }

    public function getInfos(){
        return $this->getRaisonSociale()." a été créé le ".$this->getDateCreation()->format("d.m.Y")." et se situe à l'adresse ".
        $this->getAdresseComplete();
    }

    public function __toString()
    {
        return $this->_raisonSociale." (".$this->_dateCreation->format("Y").")";
    }

}
