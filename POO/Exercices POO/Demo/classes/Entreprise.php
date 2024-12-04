<?php

class Entreprise {

    // attributs
    private string $_raisonSociale;
    private DateTime $_dateCreation;
    private string $_adresse;
    private string $_codePostal;
    private string $_ville;
    private array $_contrats;

    public function __construct(string $raisonSociale, string $dateCreation, string $adresse, string $codePostal, string $ville)
    {
        $this->_raisonSociale = $raisonSociale;
        $this->_dateCreation = new DateTime($dateCreation);
        $this->_adresse = $adresse;
        $this->_codePostal = $codePostal;
        $this->_ville = $ville;
        $this->_contrats = [];
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
        return $this." a été créé le ".$this->getDateCreation()->format("d.m.Y")." et se situe à l'adresse ".
        $this->getAdresseComplete();
    }

    /**
     * Get the value of _contrats
     */ 
    public function get_contrats()
    {
        return $this->_contrats;
    }

    /**
     * Set the value of _contrats
     *
     * @return  self
     */ 
    public function set_contrats($_contrats)
    {
        $this->_contrats = $_contrats;

        return $this;
    }



    public function addContrat(Contrat $_contrat) {
        $this->_contrats[] = $_contrat;
    }
    


    public function afficherEmployes() {
        $result = "<h2>Employés de $this</h2>";

        foreach ($this->_contrats as $_contrat) {
            $result .= $_contrat->get_employe()." (".$_contrat->get_dateEmbauche()." en ".$_contrat->get_typeContrat().")<br>";
        }

        return $result;
    }

    public function __toString()
    {
        return $this->_raisonSociale;
    }
}