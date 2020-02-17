<!DOCTYPE html>
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
        <h3>Property and Method</h3>
         <a href="index.php">Back</a>
        
        <fieldset>
            <legend>This is useless ?</legend>
            <?php
            class Produk {
                public $NamaBarang = "samsung";
                public $Stock = 40;
                
                public function PesanBarang () {
                    $this->Stock = $this->Stock - 1;
                    return "Barang sudah dipesan sebanyak 1 unit";
                }
                
                public function BorongBarang ($borong){
                    $this->Stock = $this->Stock - $borong;
                    return "Barang sudah dipesan sebanyak ".$borong;
                }
                
                public function StockBarang () {
                    $stock = "Sisa stock barang ".$this->Stock;
                    return $stock;
                }
            }
            $produk1 = new Produk();
            echo $produk1->PesanBarang(); echo "</br>";
            echo $produk1->StockBarang(); echo "</br>";
            echo $produk1->BorongBarang(20); echo "</br>";
            echo $produk1->StockBarang(); echo "</br>";
            
            
            ?>
            <a target="_blank" href= "script/bahasan1.5.pdf">Script</a>
        </fieldset>
        </fieldset>
    
    
        </div>
    </div>
</body>
</html>	