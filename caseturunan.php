    <!DOCTYPE html>
<html>
<head>
	<meta Charset="utf-8">
	<title>Class and Object</title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="mystyle.css">
</head>
<body>
    <div class="container">
        <div class="item">
        <h3>Inheritance</h3>
         <a href="index.php">Back</a>
        <p>Kasus: Sebuah perusahaan memintan membuat sistem informasi untuk produk yang dijual dan dibelinya, ada 3 produk yang diperdagangkan
        <li>Laptop</li><li>Handphone</li><li>Televisi</li>dimana dari setiap Produk tersebut memiliki masing-masing 2 merek, dimana setiap produk ada penjualan
        dan pembelian yang terjadi, dengan kasus tambahan bahwa jika barang yang dibeli atau barang yang dijual melebihi stock dan kurang dari 0 maka munculkan pesan error
        setiap barang.</p>
        
        
        <hr>
        <?php
            class Produk {
                public $barang,$merek,$harga,$stock,$kapasitas;
                
                public function __construct($a,$b,$c,$d,$e){
                    $this->barang = $a;
                    $this->merek = $b;
                    $this->harga = $c;
                    $this->stock = $d;
                    $this->kapasitas = $e;
                }
                
                public function BeliBarang ($add){
                    $stockadd = $this->stock + $add;
                    
                    if ($stockadd > $this->kapasitas){
                        $result = "Gudang untuk ".$this->barang." ".$this->merek." penuh, tidak dapat menambah barang<br>";
                        $result .= "Stock ".$this->barang." ".$this->merek." sebanyak ".$this->stock."<br>";
                    }
                    else {
                        $this->stock = $this->stock + $add;
                        $result = $this->barang." ".$this->merek." bertambah ".$add."<br>";
                        $result .= "Stock ".$this->barang." ".$this->merek." sebanyak ".$this->stock."<br>";
                    }
                    return $result;
                }
                
                public function JualBarang($sell){
                    $stockdeduct = $this->stock - $sell;
                    
                    if($stockdeduct < 0 ){
                        $result = $this->barang." ".$this->merek." tidak mencukupi untuk dijual<br>";
                        $result .= "stock barang tersedia sebanyak ".$this->stock;
                    }
                    else {
                        $this->stock = $this->stock - $sell;
                        $result = $this->barang." ".$this->merek." terjual ".$sell."<br>";
                        $result .= "sisa stock barangsebanyak ".$this->stock;
                    }
                    return $result;
                }
                
            }
            
            class Laptop extends Produk {
                public $inci;
                
                function __construct($a,$b,$c,$d,$e,$f){
                    parent::__construct($a,$b,$c,$d,$e);
                    $this->inci = $f;
                    
                }
                function RincianBarang (){
                    echo "Jenis Barang : ".$this->barang."<br>";
                    echo "Merek Barang : ".$this->merek."<br>";
                    echo "Harga Barang : ".$this->harga."<br>";
                    echo "Stock Barang : ".$this->stock."<br>";
                    echo "Inci Barang : ".$this->inci."<br>";
                }
            }          
            
            class Handphone extends Produk {
                public $prosesor;
            }
            
            class MesinCuci extends Produk {
                public $tipe;
            }
            
            
            //Pemanggilan
            echo "<fieldset>";
            echo "<legend>Object Laptop</legend>";
            echo "<fieldset>";
            echo "<legend>Laptop Micako</legend>";
            $laptop = new Laptop("Laptop","Micako","2.800.000",0,"12,5 Inch",20);
            echo $laptop->RincianBarang();

            echo "<hr>";
            echo $laptop->BeliBarang(12);
            echo $laptop->BeliBarang(2);
            echo $laptop->JualBarang(11);
            echo "<hr>";
            echo $laptop->RincianBarang();
            echo "</fieldset>";
            
            echo "<fieldset>";
            echo "<legend>Laptop Manggo</legend>";
            $laptop1 = new Laptop ("Laptop","Manggo","30.000.000",0,"16,7 Inch",70);
            echo $laptop1->RincianBarang();
            
            echo "<hr>";
            echo $laptop1->BeliBarang(84);
            echo $laptop1->BeliBarang(64);
            echo $laptop1->JualBarang(11);
            echo "<hr>";
            echo $laptop1->RincianBarang();
            echo "</fieldset>";
            
            echo "</fieldset>";
            
        ?>
        <fieldset>
            <legend>
                Berikut adalah script
            </legend>
            <a target="_blank" href= "script/bahasan1.14.pdf">Script</a>
        </fieldset>
        
        </div>
    </div>
</body>
</html>	