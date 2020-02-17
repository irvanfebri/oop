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
        <h3>Constant Variable</h3>
        <a href="index.php">Back</a><br>
        <fieldset>
            <legend>Menggunakan Constant</legend>
            <fieldset>
                <?php
                    class Induk {
                        public const HAI = "Assalamualaikum";
                        public static $Great = "Waalaikum Sallam";
                    }
                    echo Induk::$Great." ".Induk::HAI."<b> [ Ini dari baris ke ".__LINE__." memanggil property langsung dari class]</b><br>";
                    echo "Jika property constant dimasukan nilai baru makan aka timbul erro. <b>Parse error: syntax error, unexpected '='</b>";
                ?>
            </fieldset>
        </fieldset>
            <br>
        
        <fieldset>
            <legend>Mengakses constantat property yang visibilitynya private / protected.    </legend>
            <fieldset>
            <?php
            
            class Contoh01 {
                protected const HAI = "Hello";
            }
            //echo Contoh01::HAI;
            echo "jika kita mengakses property constant yang visability di set protected atau private akan menghasilkan error
            . <b>[Fatal error: Uncaught Error: Cannot access protected const Contoh01::HAI in C:\xampp\htdocs\oop\constant.php:39 Stack trace: #0 {main} thrown in C:\xampp\htdocs\oop\constant.php]</b>";
            ?>
            
            </fieldset>
            
        </fieldset>
        
        <br>
        <fieldset>
            <legend>
                Class Constant diturunkan <i>Inhretence</i>.
            </legend>
            <?php
            
                class Produk {
                    protected $jenis;
                    protected $harga;
                    protected const PAJAK = 10/100;
                    
                    }
                
                class Rumah extends Produk {
                    public function hargaSetelahPajak($harga){
                        $this->harga = $harga;
                        $jumlah = ($this->harga) * (1-Produk::PAJAK);
                        return number_format ($jumlah,2);
                    }
                }
                
                $rumah = new Rumah;
                $produk = new Produk;
                echo $rumah->hargaSetelahPajak(20000);
            
            ?>
            <p>Berdasarkan script diatas membuktikan bahwa property constanta dapat diturunkan ke class anak.</p>
        </fieldset>        
        </div>
    </div>
    
</body>
</html>

<?php
//Fatal error: Uncaught Error: Call to private Parents::__construct() from invalid context in C:\xampp\htdocs\oop\Visability.php:65 Stack trace: #0 {main} thrown in C:\xampp\htdocs\oop\Visability.php on line 65
//Fatal error: Uncaught Error: Call to private method Parents::hello() from context '' in C:\xampp\htdocs\oop\Visability.php:66 Stack trace: #0 {main} thrown in C:\xampp\htdocs\oop\Visability.php on line 66
?>