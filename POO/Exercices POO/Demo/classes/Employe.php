<?php

class Employe {

    private string $_nom;
    private string $_prenom;
    private string $_email;
    private array $_contrats;



    public function __construct(string $nom, string $prenom, string $email)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_email = $email;
        $this->_contrats = [];
    }

    
    /**
     * Get the value of _nom
     */ 
    public function get_nom()
    {
        return $this->_nom;
    }

    /**
     * Set the value of _nom
     *
     * @return  self
     */ 
    public function set_nom($_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }

    /**
     * Get the value of _prenom
     */ 
    public function get_prenom()
    {
        return $this->_prenom;
    }

    /**
     * Set the value of _prenom
     *
     * @return  self
     */ 
    public function set_prenom($_prenom)
    {
        $this->_prenom = $_prenom;

        return $this;
    }

    /**
     * Get the value of _email
     */ 
    public function get_email()
    {
        return $this->_email;
    }

    /**
     * Set the value of _email
     *
     * @return  self
     */ 
    public function set_email($_email)
    {
        $this->_email = $_email;

        return $this;
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



    public function addContrat(Contrat $contrat) {
        $this->_contrats[] = $contrat;
    }
    

    public function afficherEntreprises() {
        $result = "<h2>Entreprises de $this</h2>";

        foreach ($this->_contrats as $_contrat) {
            $result .= $_contrat->get_entreprise()." (".$_contrat->get_dateEmbauche()." en ".$_contrat->get_typeContrat().")<br>";
        }

        return $result;
    }



    public function __toString()
    {
        return $this->_prenom." ".$this->_nom;
    }
}