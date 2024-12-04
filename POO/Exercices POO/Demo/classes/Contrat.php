<?php

class Contrat {
    private Entreprise $_entreprise;
    private Employe $_employe;
    private DateTime $_dateEmbauche;
    private string $_typeContrat;

    public function __construct(Entreprise $entreprise, Employe $employe, string $dateEmbauche, string $typeContrat) {
        $this->_entreprise = $entreprise;
        $this->_employe = $employe;
        $this->_dateEmbauche = new DateTime ($dateEmbauche);
        $this->_typeContrat = $typeContrat;
        $this->_entreprise->addContrat($this);
        $this->_employe->addContrat($this);
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

    /**
     * Get the value of _employe
     */ 
    public function get_employe()
    {
        return $this->_employe;
    }

    /**
     * Set the value of _employe
     *
     * @return  self
     */ 
    public function set_employe($_employe)
    {
        $this->_employe = $_employe;

        return $this;
    }

    /**
     * Get the value of _dateEmbauche
     */ 
    public function get_dateEmbauche()
    {
        return $this->_dateEmbauche->format("d-m-Y");
    }

    /**
     * Set the value of _dateEmbauche
     *
     * @return  self
     */ 
    public function set_dateEmbauche(string $_dateEmbauche)
    {
        $this->_dateEmbauche = new DateTime($_dateEmbauche);

        return $this;
    }

    /**
     * Get the value of _typeContrat
     */ 
    public function get_typeContrat()
    {
        return $this->_typeContrat;
    }

    /**
     * Set the value of _typeContrat
     *
     * @return  self
     */ 
    public function set_typeContrat($_typeContrat)
    {
        $this->_typeContrat = $_typeContrat;

        return $this;
    }
}