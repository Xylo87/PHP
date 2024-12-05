<?php

class Compte {
    private string $libelle;
    private float $soldeInitial;
    private string $devise;
    private Titulaire $titulaire;

public function __construct(string $libelle, float $soldeInitial, string $devise, Titulaire $titulaire) {
    $this->libelle = $libelle;
    $this->soldeInitial = $soldeInitial;
    $this->devise = $devise;
    $this->titulaire = $titulaire;
    $this->titulaire->addCompte($this);
    }



    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of soldeInitial
     */ 
    public function getSoldeInitial()
    {
        return $this->soldeInitial;
    }

    /**
     * Set the value of soldeInitial
     *
     * @return  self
     */ 
    public function setSoldeInitial($soldeInitial)
    {
        $this->soldeInitial = $soldeInitial;
    }

    /**
     * Get the value of devise
     */ 
    public function getDevise()
    {
        return $this->devise;
    }

    /**
     * Set the value of devise
     *
     * @return  self
     */ 
    public function setDevise($devise)
    {
        $this->devise = $devise;

        return $this;
    }

    /**
     * Get the value of titulaire
     */ 
    public function getTitulaire()
    {
        return $this->titulaire;
    }

    /**
     * Set the value of titulaire
     *
     * @return  self
     */ 
    public function setTitulaire($titulaire)
    {
        $this->titulaire = $titulaire;

        return $this;
    }



    public function __toString()
    {
        return $this->titulaire;
    }



    public function getInfosCompte() {
        $result = "<h2>Compte bancaire appartenant à : $this->titulaire</h2>
        <ul><li>Libellé : ".$this->getLibelle().
        "</li><li>Solde initial : ".$this->getSoldeInitial().
        "</li><li>Devise : ".$this->getDevise();
       return $result
        ."</ul>";
    }



    // public function credit(float $montant) {
    //     $result = "<h2>Crédit du compte bancaire appartenant à : $this->titulaire</h2>
    //     <ul><li>Libellé : ".$this->getLibelle().
    //     "</li><li>Nouveau solde : ".$this->setSoldeInitial($this->getSoldeInitial() + $montant).$this->getSoldeInitial().
    //     "</li><li>Devise : ".$this->getDevise();
    //     return $result
    //     ."</ul>";
    // }    

    // public function debit(float $montant) {
    //     $result = "<h2>Débit du compte bancaire appartenant à : $this->titulaire</h2>
    //     <ul><li>Libellé : ".$this->getLibelle().
    //     "</li><li>Nouveau solde : ".$this->setSoldeInitial($this->getSoldeInitial() - $montant).$this->getSoldeInitial().
    //     "</li><li>Devise : ".$this->getDevise();
    //     return $result
    //     ."</ul>";
    // }



    // CRÉDIT SIMPLIFIÉ

    public function credit(float $montant) {
        $this->soldeInitial += $montant;
        echo "Le compte ".$this->libelle." de ".$this->titulaire." a bien été credité de $montant ".$this->devise."<br>
        Nouveau solde : ".$this->soldeInitial." ".$this->devise;
    }

    // DÉBIT SIMPLIFIÉ

    public function debit(float $montant) {
        $this->soldeInitial -= $montant;
        echo "Le compte ".$this->libelle." de ".$this->titulaire." a bien été débité de $montant ".$this->devise."<br>
        Nouveau solde : ".$this->soldeInitial." ".$this->devise;
    }

    public function virement(Compte $compteCible, float $montant) {
        $this->debit($montant); // on débite le compte "source"
        $compteCible->credit($montant); // on crédite le compte "cible"
    }
}