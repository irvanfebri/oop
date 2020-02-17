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
        <h3>Static Methode</h3>
        <a href="index.php">Back</a><br>
        <fieldset>
            sama dengan static property, static methode juga hanya bisa diakses dari class tidak dari object. lihatlah
            contoh dibawah dan penjelasannya.
            <legend>Contoh 1</legend>
            <fieldset><legend>Image</legend>
            <img src="image/staticmet.png" width=300px>
            </fieldset>
            <fieldset><legend>Result</legend>
            
            <?php
            
                class Produk {
                    public static $stok = 100;
                    
                    public static function checkStok (){
                        return "Total stok ada 100";
                    }
                }
                echo "<fieldset>";
                echo Produk::checkStok();
                echo "</fieldset>";
            ?>
            <a target="_blank" href= "script/bahasan1.27.pdf">Script</a>
            <p>Pada baris 30 - 31 kita membuat methode getter dimana mengambil nilai dari
            static property di baris ke 28. seharusnya stock 100 bukan ditulis langsung di dalam function chec stok namun
            mengambil nilai dari property $stock.</p>
            </fieldset>
            
            <fieldset>
                <legend>Image-2-</legend>
                <img src="image/staticmet2.png" width=300px>
            </fieldset>
            <fieldset>
                <legend>Result - 2</legend>
                
                <?php
                
                    class Produk01 {
                        public static $stok = 100;
                        
                        public static function checkStok (){
                            return "Total stok ada".Produk::$stok;
                        }
                        
                        public static function checkStok01 (){
                            return "Total stok ada".self::$stok;
                        }
                        
                    }
                    echo "<fieldset>";
                    echo Produk01::checkStok()."<br>";
                    echo Produk01::checkStok01()."<br>";
                    echo "</fieldset>";
                ?>
                <a target="_blank" href= "script/bahasan1.28.pdf">Script</a><br>
                Pada baris ke 56 dan 60 kita sudah membuat methode getter dimana jumlah stok 100 sudah kita tidak tulis
                secara langsung namun memanggil dari static property stok.<br>
                dalam mengakses static property kita bisa menulis
                <li>[ nama_class::$property ] ,atau</li>
                <li>[ <i>Self</i>::$property ]</li>
                kedua cara tersebut diperbolehkan didalam php. pengertian self itu sendiri adalah nama class dimana kode tersebut
                dijalankan.
            </fieldset>
        </fieldset>
       <br><br>
       <fieldset>
        <legend>Turunan static methode</legend>
       
       <fieldset>
        <legend>Image- parent dan child static methode</legend>
        <img src="image/staticmet3.png" width=400px>
       </fieldset>
       <fieldset>
        <legend>Result</legend>
        
        <?php
            class siswa {
                public static $nama = "farras";
            }
            
            class rapor extends siswa {
                public static   function hasil(){
                    return "Rapor ini adalah milik ".siswa::$nama;
                }
            }
            
            class ijazah extends siswa {
                public static function hasil(){
                    return "Ijazah ini adalah milik ".parent::$nama;
                }
            }
            
            class nilaiUN extends siswa {
                public static function hasil(){
                    return "nilaiUN ini adalah milik ".self::$nama;
                }
            }
            
            echo rapor::hasil();echo"<br>";
            echo ijazah::hasil();echo"<br>";
            echo nilaiUN::hasil();echo"<br>";
            
        ?>
        <a target="_blank" href= "script/bahasan1.29.pdf">Script</a><br>
        
        
       </fieldset>
       <fieldset><legend>Mengakses static methode atau property dari methode biasa</legend>
       
        <?php
        
            class Peliharaan {
                public static $hewan = "kucing";
                public static $jenis = "anggora";
                public static $warna = "putih";
                
                public static function kondisi(){
                    return self::$hewan." jenis ".self::$jenis." warna ".self::$warna;
                }

            }
            
            class pemesanan extends Peliharaan{
                public function cekKuncing() {
                    return Peliharaan::kondisi();
                }
            }
            $object = new pemesanan;
            echo $object->cekKuncing();
            
        
        ?>
        </fieldset>
       <a target="_blank" href= "script/bahasan1.27.pdf">Script</a><br>
       dari baris ke 138-142 kita bisa melihat bahwa kita bisa menurunkan static methode dari parent ke dalam methode biasa.
    </fieldset>
        <br>
		<a target="_blank" href= "script/bahasan1.27.pdf">Script</a>
        </div>
    </div>
    
</body>
</html>

<?php
//Fatal error: Uncaught Error: Call to private Parents::__construct() from invalid context in C:\xampp\htdocs\oop\Visability.php:65 Stack trace: #0 {main} thrown in C:\xampp\htdocs\oop\Visability.php on line 65
//Fatal error: Uncaught Error: Call to private method Parents::hello() from context '' in C:\xampp\htdocs\oop\Visability.php:66 Stack trace: #0 {main} thrown in C:\xampp\htdocs\oop\Visability.php on line 66
?>