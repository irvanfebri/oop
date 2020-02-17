<?php

    class Elektronik {
        private $fungsi;
        private $daya;
        public function __construct ($fungsi,$daya){
            $this->fungsi = $fungsi;
            $this->data = $daya;
        }
        
        public function getInform (){
            return "<h4>Mesin ini berfungsi untu ".$this->fungsi." dengan daya ".$this->daya."</h4>";
        }
    }

?>