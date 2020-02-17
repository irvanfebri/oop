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
            <h3>Class dan Object</h3>
            <a href="index.php">Back</a>
            <?php
            
            class Pelajaran {
                public $mapel;
                public $tingkat;
                public $target;
                
                public function dataPelajaran() {
                    return "Fokus pelajaran ".$this->mapel." untuk tingkat ".$this->tingkat.
                    " dan ditargetkan selesai pada".$this->target."dan targe1t";
                }
            }
            /*
            $php1 = new Pelajaran();
            echo "Mata Pelajaran = ".$php1 ->mapel; echo "</br>";
            echo "Tingkat Kesulitan = ".$php1 ->tingkat; echo "</br>";
            echo "Target Pembelajaran = ".$php1 ->target; echo "</br>";
            echo "Catatan = ".$php1 ->dataPelajaran(); echo "</br>";
            */
            
            
            $php2 = new Pelajaran();
            $php2 -> mapel = "PHP Operator";
            $php2 -> tingkat = "beginer";
            $php2 -> target = "1 hari";
            
            echo $php2 -> dataPelajaran ();
        
            ?>
            <hr>
            <?php
            class Produk {
                public $jenis = "PHP BOOK Advanced";
                public $merek = "Cover Hard";
                public $stock = 100;
                
                public function pesanproduk (){
                    $this->stock = $this->stock - 1;
                    return "Barang ".$this->jenis." sudah dipesan sebanyak 1 unit";
                }
                
                public function stockbarang () {
                    return "sisa stock ".$this->stock;
                }
            }
            
            $pesan1 = new Produk ();
            echo $pesan1 ->pesanproduk(); echo "</br>";
            echo $pesan1 ->pesanproduk(); echo "</br>";
            echo $pesan1 ->pesanproduk(); echo "</br>";
            echo $pesan1 ->pesanproduk(); echo "</br>";
            echo $pesan1 ->pesanproduk(); echo "</br>";
            echo $pesan1 ->pesanproduk(); echo "</br>";
            echo $pesan1 ->pesanproduk(); echo "</br>";
            echo $pesan1 ->pesanproduk(); echo "</br>";
            echo $pesan1 ->pesanproduk(); echo "</br>";
            echo $pesan1 ->stockbarang(); echo "</br>";
            
           
            ?>
        </div>
    </div>

</body>
</html>	