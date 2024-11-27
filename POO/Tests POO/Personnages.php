<?php

class Personnages{

    public int $_vie = 80;
    public int $_atk = 20;
    public string $_name;
    private string $_forname;
    private int $_age;

    public function __construct(string $name, string $forname)
    {
        $this->_name = $name;
        $this->_forname = $forname;
    }

    public function fireball(){
        echo "FAYAHHH";
    }

    // public function regenerer(){
    //     $this->_vie = 100;
    // }

    public function regenerer($_vie = null){
        // $this->_vie = 100;

        if (is_null($_vie)) {
            $this->_vie = 100;
        } else {
            $this->_vie += $_vie;
        }
    }

    public function mort() {
        return $this->_vie <= 0;
    }

    public function attack($_cible){
        // $_cible->vie = 20;
        // var_dump($_cible);

        // $this // Attacker
        // $_cible // Defender

        $_cible->_vie -= $this->_atk; 
    }


    // ---> exemple Getter
    public function getForname(){
        return $this->_forname;
    }

    // ---> exemple Setter
    public function setAge($_age){
        $this->_age = $_age;
    }


    // ---> exemple utilité fonction privée
    // private function empecher_negatif() {
    //     if($this->_vie < 0) {
    //         $this->_vie = 0;
    //     }
    // }

    // public function attack2($_cible2) {
    //     $cible2->empecher_negatif(;)
    // }


}