<?php
    namespace subsatu {
        class Produk {
            function calling (){
                return "<h3>saya ada di class ".__CLASS__." di name space ".__namespace__."</h3>";    
            }
        }          
        $obj = new Produk();
        echo $obj->calling();
    }
    
    
    
    namespace subdua {
        class Produk {
            function calling (){
                return "<h3>saya ada di class ".__CLASS__." di name space ".__namespace__."</h3>";    
            }
        }
        $obj2 = new Produk();
        echo $obj2->calling();
    }
    
    namespace {
        class Produk {
            function calling (){
                return "<h3>saya ada di class ".__CLASS__." di name space ".__namespace__."</h3>";    
            }
        }
        $obj2 = new Produk();
        echo $obj2->calling();
    }
    
?>