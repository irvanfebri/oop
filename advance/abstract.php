<?php
    $bahasan = "Abstract Class";
?>
<!DOCTYPE html>
<html>
<head>
	<meta Charset="utf-8">
	<title>Class and Object</title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../mystyle.css">
    
    <script>
        window.addEventListener ("load",function (){   
           var olLis = document.getElementsByTagName ("ol")[0];
           var fieldNode = document.getElementsByTagName ("fieldset");
           var backTop = document.getElementById ("header");
           
           
           backTop.addEventListener ("click",function () {
            window.location.assign ("#");
           });
           
           
           for (var i = 0 ; i < fieldNode.length ; i++){
            var newLi = document.createElement ("li");
            var newText = document.createTextNode (fieldNode[i].getAttribute("id"));
            var aNode = document.createElement ("a");
            aNode.appendChild (newText);
            newLi.appendChild (aNode);
            aNode.setAttribute ("href","#"+fieldNode[i].getAttribute("id"));    
            olLis.appendChild (newLi);
            
            
           }         
        });
    </script>
</head>
<body>
<div class="header" id="header">Home</div>
	
	<!-- Code HTML -->
    <div class="container">
        <div class="item">
            <h3><?php  echo $bahasan ?></h3>
            <a href="index.php">Back</a><br>
            <ol id="here-home"> 
                
            </ol>
			<ol id="here-home-header"> 
                
            </ol>
				<fieldset id="pengertian-abstract">
					<legend id="abstarct-method">Abstract Method</legend>
					<embed src="../script/abstract-method.pdf" width=600px height="250">
                    <p>Error yg terjadi pada baris ke 20 disebabkan kita mengisi implementeasi dari abstract method. Dimana
                    aturan dari abstract method yang berada dalam abstract class hanya menulis method signature saja tanpa
                    implementasi. <B>Contoh dibawah adalah penulisan abstarc method yang benar</B></p>
					<embed src="../script/abstract-method-true.pdf" width=600px height="250">
                        
                    <div>
                        
                        <!-- Code PHP -->
                        <?php
                        
                            abstract class Denah {
                                
                                abstract public function luasBangunan ();
                                
                            }
                        
                            class RumahTipeA extends Denah {
                                public function luasBangunan (){
                                    return (450*200)." meter kubik";
                                }
                            }
                            
                            $rumahBRR = new RumahTipeA ();
                            echo "<h3>".$rumahBRR->luasBangunan()."</h3>";
                            
                        ?>
                        
                    </div>
                        
                        
				</fieldset>
				
				<fieldset id="Abstract Method dan parameter">
					<legend>Abstract Method dan Parameter</legend>
                    
                    <P>Abstract method yang memiliki sebuah argumen didalam method signature, maka method turunan ke anak
                    harus memiliki parameter yang sama, jika tidak maka akan menghasilkan error <em class="error">must be compatible with</em></P>
                    <div>
                    <?php
                    
                        abstract class Motor {
                            abstract function kecepatanMotor ($mesin,$berat);
                        }
                        
                        class Yamaha extends Motor {
                            public function kecepatanMotor ($mesin,$berat){
                                
                                return "<h3>".(($mesin/$berat) * 100)." Km/Hour</h3>";
                                
                            }
                        }
                    
                        $YZR25 = new Yamaha ();
                        echo $YZR25->kecepatanMotor (250,5);
                    ?>
                    </div>
                    <embed src="../script/abstract-method-parameter.pdf" width=600px height="250">
				</fieldset>
                
                <fieldset id="Visibility Abstarct Method">
					<legend>Visibility Abstarct Method</legend>
                    
                    <P>Untuk visibility, abstract method harus sama atau lebih luas dari method turunan. Jika tidak
                    maka akan menghasilkan error <em class="error"> Access level to MobilSport::checkHarga() must be protected or weaker</em></P>
                    <p><em class="strong">Abstract method tidak bisa di set sebagai protected</em>, karena menyalahi kegunaan abstract itu sendiri,
                    pengimplementasi yg wajib bagi class child.</p>
                    <div>
                    <?php
                    
                        abstract class Mobil {
                            protected abstract function kecepatanMobil ($mesin,$berat);
                            protected abstract function checkHarga ();
                        }
                        
                        class MobilSport extends Mobil {
                            public function kecepatanMobil ($mesin,$berat){
                                return "<h3>".(($mesin/$berat) * 100)." Km/Hour</h3>";
                            }
                            
                            public function checkHarga (){
                                return "Rp 2.000.000.000";
                            }
                        }
                        // Fatal error: Access level to MobilSport::kecepatanMobil() must be public (as in class Mobil)
                        // in C:\xampp\htdocs\oop\advance\abstract.php on line 118
                        
                    ?>
                    </div>
                    <embed src="../script/abstract-method-visibility.pdf" width=600px height="250">
				</fieldset>
                
                <fieldset id="Abstract Class Diturunkan ke Abstract Class lain">
					<legend>Abstract Class Diturunkan ke Abstract Class lain</legend>
                    
                    <P>Abstract class bisa diturunkan kepada abstract class lainnya</p>
                    <p>Abstract method yang menjadi turunan abstract method lainya <em class="strong">tidak perlu memiliki method signature dari parent.</em>
                    seperti pada baris ke 144 dan 148, dimana method checkHarga() tidak perlu ditulis kembali signature-nya atau implementasinya
                    di dalam abstract class meja.
                    </p>
                    <p>Namun didalam class biasa (Child dari Meja dan produk) kedua method yang ada didadalam abstract class harus ditulis semuanya.</p>
                    <div>
                    <?php
                    
                        abstract class Produk {
                            abstract function checkHarga ();
                        }
                        
                        abstract class Meja extends Produk {
                            abstract function jenisMeja ();
                        }
                        
                        class Jepara extends Meja {
                            function checkHarga () {
                                return "<h3>Harga barang Rp 120.000.000</h3>";
                            }
                            
                            function jenisMeja () {
                                return "<h3>Meja Belajar</h3>";
                            }
                        }
                        
                        $mejaModel3 = new Jepara;
                        echo $mejaModel3->checkHarga();
                        echo $mejaModel3->jenisMeja();
                    ?>
                    </div>
                    <embed src="../script/abstract-method-turunan.pdf" width=600px height="250">
				</fieldset>
                
                <fieldset id="Function atau method generik">
					<legend>Function atau method generik</legend>
                    
                    <P>functin generik bertujuan untuk mengakses semua class turunan dari class parent.</p>
                    <div>
                        <?php
                        
                            abstract class Model {
                                abstract function checkKualitas ();
                                abstract function checkHarga ();
                            }
                            
                            class LenganPanjang extends Model{
                                function checkKualitas () {
                                    return "Kulitas A";
                                }
                                
                                function checkHarga () {
                                    return "Rp 20.000";
                                }
                            }
                            
                            class LenganPendek extends Model {
                                function checkKualitas () {
                                    return "Kulitas B";
                                }
                                
                                function checkHarga () {
                                    return "Rp 50.000";
                                }
                            }
                            
                            class BajuKoko extends Model {
                                function checkKualitas () {
                                    return "Kulitas C";
                                }
                                
                                function checkHarga () {
                                    return "Rp 27.000";
                                }
                            }
                            
                            class Gamis extends Model {
                                function checkKualitas () {
                                    return "Kulitas A+";
                                }
                                
                                function checkHarga () {
                                    return "Rp 120.000";
                                }
                            }
                            
                            $keke = new LenganPanjang;
                            $kemeja = new LenganPendek;
                            $danish = new BajuKoko;
                            $dho = new Gamis;
                            
                            function allKualitas ($jenisBaju){
                                echo "<h5>".$jenisBaju->checkKualitas ()." ".$jenisBaju->checkHarga()."</h5>";
                            }
                            
                            allKualitas ($keke);
                            allKualitas ($kemeja);
                            allKualitas ($danish);
                            allKualitas ($dho);
                            
                        ?>
                    </div>
                    <embed src="../script/abstract-method-generic.pdf" width=600px height="250">
                    <p>Dapat dilihat pada baris ke 214 dan 216 dimana terdapat function yang menampilkan object value dari method <em class="target">checkKualitas()</em>
                    dan <em class="target">checkHarga()</em>
                    barang.</p>
                    <p>Pada baris 218 - 221, kita memanggil function dengan para meter objet, hasil yg ditampilkan adalah nilai method2 dari object tersebut.
                    hal ini terjadi karena pada baris 214 dan 216 didalam function <em class="target">allKualitas()</em> kita memerintahkan untuk menampilkan
                    method <em class="target">checkKualitas()</em> & <em class="target">checkHarga()</em>
                    </p>
				</fieldset>
                
                <fieldset id="Property, static dan method (biasa)">
					<legend>Property, static dan method (biasa)</legend>
                    
                    <P>Abastract class kita bisa menggunakan  property, property static, dan method biasa <em class="strong">tanpa harus
                    menulisnya kembali di dalam class turunan.</em></p>
                    <div>
                    <?php
                    
                        abstract class Percetakan {
                            
                            public $penerbit = "Anak Shalih Pustaka";
                            public static $PAJAK = 10/100;
                            
                            public abstract function hargaPerRim ($harga,$rim);
                            
                        }
                        
                        class Modul extends Percetakan {
                            
                            
                            
                            public function hargaPerRim ($harga,$rim){
                                $hasil = $harga * $rim + ($this::$PAJAK * ($harga * $rim));
                                return "<h3>Rp ".$hasil." Penerbit ".$this->penerbit."</h3>";
                            }
                            
                        }
                        
                        $MatematikaDasar = new Modul;
                        echo $MatematikaDasar->hargaPerRim(250000,2);
                        
                    ?>
                    </div>
                    <embed src="../script/abstract-method-statprometh.pdf" width=600px height="250">
				</fieldset>
        </div>
    </div>
    
</body>
</html>

<?php
//Fatal error: Uncaught Error: Call to private Parents::__construct() from invalid context in C:\xampp\htdocs\oop\Visability.php:65 Stack trace: #0 {main} thrown in C:\xampp\htdocs\oop\Visability.php on line 65
//Fatal error: Uncaught Error: Call to private method Parents::hello() from context '' in C:\xampp\htdocs\oop\Visability.php:66 Stack trace: #0 {main} thrown in C:\xampp\htdocs\oop\Visability.php on line 66
?>