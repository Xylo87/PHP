<?php

class Livre {
    
    private string $titre;
    private DateTime $dateParution;
    private int $nbPages;
    private float $prix;
    private Auteur $auteur;

    public function __construct(string $titre, string $dateParution, int $nbPages, float $prix, Auteur $auteur)
    {
        $this->titre = $titre;
        $this->dateParution = new DateTime($dateParution);
        $this->nbPages = $nbPages;
        $this->prix = $prix;
        $this->auteur = $auteur;
        $this->auteur->addLivre($this);
    }



    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of dateParution
     */ 
    public function getDateParution()
    {
        return $this->dateParution;
    }

    public function getDateParutionAnnee()
    {
        return $this->dateParution->format("Y");
    }

    /**
     * Set the value of dateParution
     *
     * @return  self
     */ 
    public function setDateParution(string $dateParution)
    {
        $this->dateParution = new DateTime($dateParution);

        return $this;
    }

    /**
     * Get the value of nbPages
     */ 
    public function getNbPages()
    {
        return $this->nbPages;
    }

    /**
     * Set the value of nbPages
     *
     * @return  self
     */ 
    public function setNbPages($nbPages)
    {
        $this->nbPages = $nbPages;

        return $this;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

 /**
     * Get the value of auteur
     */ 
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set the value of auteur
     *
     * @return  self
     */ 
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }


    
    public function __toString()
    {
        return $this->titre;
    }
}