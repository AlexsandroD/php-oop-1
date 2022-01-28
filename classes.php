<?php

class Movie {
        public $titolo ;
        public $voto;
        public $lingua;
        public $durata ;
        public $genere;
        
     public function __construct($_titolo,$_voto,$_lingua,$_durata,$_genere) {

        $this->titolo  = $_titolo;
        $this->voto = $_voto;
        $this->lingua = $_lingua;
        $this->durata  = $_durata;
        $this->genere = $_genere;
    }

    public function getLeng() {
        if($this->lingua == 'EN') {
         $this->lingua ="Lingua originale";
        }
        return $this->lingua;
    }
}
?>

 
