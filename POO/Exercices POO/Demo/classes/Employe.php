<?php

class Employe {

    private string $_nom;
    private string $_prenom;
    private string $_email;
    private Entreprise $_entreprise;


    public function __construct(string $nom, string $prenom, string $email, Entreprise $entreprise)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_email = $email;
        $this->_entreprise = $entreprise;
        $this->_entreprise->addEmploye($this);
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
     * Get the value of _entreprise
     */ 
    public function get_entreprise()
    {
        return $this->_entreprise;
    }

    /**
     * Set the value of _entreprise
     *
     * @return  self
     */ 
    public function set_entreprise($_entreprise)
    {
        $this->_entreprise = $_entreprise;

        return $this;
    }

    public function getInfos() {
        return $this." travaille dans l'entreprise ".$this->_entreprise;
    }

    public function __toString()
    {
        return $this->_prenom." ".$this->_nom;
    }

}