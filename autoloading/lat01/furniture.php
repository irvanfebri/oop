<?php

    class Furniture {
        private $jenis;
        private $harga;
        public function __construct ($jenis,$harga){
            $this->jenis = $jenis;
            $this->harga = $harga;
        }
        
        public function getInform (){
            return "<h4>Jenis ukiran adalah ".$this->jenis." dengan harga ".$this->harga."</h4>";
        }
    }

?>