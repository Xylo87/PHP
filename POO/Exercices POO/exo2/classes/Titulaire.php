<?php

class Titulaire {
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;
    private string $ville;
    private array $comptes;

public function __construct(string $nom, string $prenom, string $dateNaissance, string $ville) {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->dateNaissance = new DateTime ($dateNaissance);
    $this->ville = $ville;
    $this->comptes = [];
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
     * Get the value of dateNaissance
     */ 
    public function getDateNaissance()
    {
        return $this->dateNaissance->format("d-m-Y");
    }

    /**
     * Set the value of dateNaissance
     *
     * @return  self
     */ 
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

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
     * Get the value of ville
     */ 
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     *
     * @return  self
     */ 
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get the value of comptes
     */ 
    public function getComptes()
    {
        return $this->comptes;
    }

    /**
     * Set the value of comptes
     *
     * @return  self
     */ 
    public function setComptes($comptes)
    {
        $this->comptes = $comptes;

        return $this;
    }



    public function addCompte(Compte $compte) {
        $this->comptes[] = $compte;
    }



    public function __toString() {
        return $this->prenom." ".$this->nom;
    }



    public function getInfosTitulaire() {
        $result = "<h2>Titulaire : $this</h2>
        <ul><li>Né le : ".$this->getDateNaissance().
        "</li><li>Habite à : ".$this->getVille().
        "</li><li>Comptes bancaires : </li><ul>";
        foreach ($this->comptes as $compte) {
            $result .= "<li>".$compte->getLibelle()."</li>";
        }
        return $result."</ul></ul>";
    }
}
