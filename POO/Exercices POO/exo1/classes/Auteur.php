<?php

class Auteur {
    
    private string $nom;
    private string $prenom;
    private array $livres;

    public function __construct(string $nom, string $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->livres = [];
    }



    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of livres
     */ 
    public function getLivres()
    {
        return $this->livres;
    }

    /**
     * Set the value of livres
     *
     * @return  self
     */ 
    public function setLivres($livres)
    {
        $this->livres = $livres;

        return $this;
    }



    public function addLivre($livre) {
        $this->livres[] = $livre;
    }



public function afficherBibliographie() {
    $result = "<h2> Livres de $this </h2>";

    foreach ($this->livres as $livre) {
        $result .= $livre." (".$livre->getDateParutionAnnee().") : ".$livre->getNbPages()." pages / "
        .$livre->getPrix()."€ <br>";
    }
    return $result;
    }



    public function __toString()
    {
        return $this->prenom." ".$this->nom;
    }
}