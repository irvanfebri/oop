<?php
    $bahasan = "Clone";
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
            <ol id="here-home"></ol>
				
				<fieldset id="Clone">
					<legend>Object Clone</legend>
                    <p>Sebagaimana yang telah kita bahasa sebelumbyam menggunakan asignment "sama dengan" <em class="target">=</em> akan mengcopy
                    memory (<em>reference</em>) dari sebuah object atau disebut dengan <em class="strong">copy by reference</em>.</p>
                    <p>Untuk meng-copy nilai dari object-nya saja kita dapat menggunaan perintah <em class="target">clone</em></p>
                    <hr>
                    <div>
                        <?php
                            class Produk {
                                public $merek;
                                public $from = "".__CLASS__."";
                                public function __construct ($merek){
                                    $this->merek = $merek;
                                }
                            }
                            
                            class Barang {
                                public $from = "".__CLASS__."";
                            }
                            
                            class jasa {
                                public $from = "".__CLASS__."";
                            }
                            
                            $objectProdukSatu = new Produk ("merek");
                            $objectBarangSatu = new Barang ();
                            $objectJasaSatu = new Jasa ();
                            
                            echo "<pre>";
                                echo "<h3>Data Awal</h3>";
                                print_r ($objectProdukSatu);
                                print_r ($objectBarangSatu);
                                print_r ($objectJasaSatu);
                                var_dump ($objectBarangSatu == $objectJasaSatu);
                                var_dump ($objectBarangSatu === $objectJasaSatu);
                            echo "</pre>";
                            
                            echo "<h3>Clone</h3>";
                            echo "<pre>";
                                $objectBarangSatu = clone $objectJasaSatu;
                                print_r ($objectProdukSatu);
                                print_r ($objectBarangSatu);
                                print_r ($objectJasaSatu);
                                var_dump ($objectBarangSatu == $objectJasaSatu); // true
                                var_dump ($objectBarangSatu === $objectJasaSatu); // false
                            echo "</pre>";
                            
                            echo "<h3>Tanpa Clone</h3>";
                            echo "<pre>";
                                $objectBarangSatu = $objectJasaSatu;
                                print_r ($objectProdukSatu);
                                print_r ($objectBarangSatu);
                                print_r ($objectJasaSatu);
                                var_dump ($objectBarangSatu == $objectJasaSatu); // true
                                var_dump ($objectBarangSatu === $objectJasaSatu); // true
                            echo "</pre>";
                        ?>
                        <br>
                        <embed src="../script/advance-clone.pdf" width=600px height="250">
                    </div>
                    <ol>
                        <li>
                            Pada baris ke 64 - 67 saya membuat class barang dan jasa dengan property adalah nama class itu sendiri.
                        </li>
                        <li>
                            Pada baris ke 73 - 74 saya membuat object untuk class jasa dan barang.
                        </li>
                        <li>
                            Pada baris ke 81 dan 82 saya membandingkan menggunakana operator asignment <em class="target">==</em> dan <em class="target">===</em>
                            yang mana <em class="target">==</em> akan bernilai true jika yang dibandingkan kedua object yang memiliki nilai yang sama. dan
                            <em class="target">===</em> akan bernilai true jika yang dibandingkan dua object yang bernilai sama dan refrence nya sama.
                        </li>
                        <li>
                            Pada baris ke 87 saya  membuat clone untuk object <em class="target">$objectBarangSatu</em> kedalam variable <em class="target">$objectJasaSatu</em>
                        </li>
                        <li>
                            Pada baris ke 91 - 92 saya membadingkan kembali kedua object, dan hasilnya, menggunakan <em class="target">==</em> menghasilkan true
                            sedangkan <em class="target">===</em> menghasilkan flase. sehingga dapat ditarik kesimpulan <em class="strong">keyword clone
                            hanya mengcopy value dari sebuah object, dan bukan reference nya (Alamat Memorynya) yang mana jika ita mengubah nilai salah
                            satu dari object tersebut maka tidak akan mempengaruhi object lainnya.</em>
                        </li>
                        <li>
                            Pada baris 92 saya melakukan percobaan dengan memberikan nilai kepada object <em class="target">$objectJasaSatu</em> mengunakana
                            operarator sama dengan saja <em class="target">=</em>. yang mana kita telah ketahui, didalam PHP Object berbeda dengan prosedural
                            . samadengan satu <em class="target">=</em> didalam PHP Prosedural adalah copy value, sedangkan di object adalah copy by reference.
                        </li>
                        <li>
                            Pada baris ke 101 - 102 saya membandingkan kedua object, dari hasilnya yang didapat kedua nya bernilai true, karena selain
                            nilainya sama, alamat memory nya juga sama. sehingga ketika kita merubah nilai dari object yang satu, akan merubah object yang lainnya.
                        </li>
                    </ol>
                    
                </fieldset>
                
                <fieldset id="Method _ _Clone">
					<legend>Method  _ _Clone</legend>
                    <p>Method <em class="target"> __clone </em>
                    akan dijalankan jika terjadi sebuah class yang ada di object di cloning oleh object lain.</p>
                    <hr>
                    <div>
                        <?php
                            class HandPhone {
                                
                                public $from = __CLASS__;
                                public function __clone (){
                                    echo "<h4> ".__CLASS__."telah di clone</h4>";
                                }
                            }
                            
                            class TelePhone {
                                public $from = __CLASS__;
                            }
                            
                            echo "<pre>";
                            echo "<h3>Sebelum Cloning</h3>";
                            $hp = new HandPhone ();
                            $tp = new TelePhone ();
                            
                            print_r ($hp);
                            print_r ($tp);
                            
                            var_dump ($hp == $tp);
                            var_dump ($hp === $tp);
                            echo "</pre>";
                            
                            echo "<pre>";
                            echo "<h3>Setelah Cloning</h3>";
                            $hp = new HandPhone ();
                            $tp = clone $hp;
                            
                            print_r ($hp);
                            print_r ($tp);
                            
                            var_dump ($hp == $tp);
                            var_dump ($hp === $tp);
                            echo "</pre>";
                        ?>
                        <br>
                        <embed src="../script/advance-clone-__clone.pdf" width=600px height="250">
                    </div>
                    
                </fieldset>
                
                <fieldset id="Shallow Copy and Deep Copy">
					<legend>Shallow Copy and Deep Copy</legend>
                    <p>Shallow Copy adalah <em class="strong">peniruana refrence yang terjadi dari sebuah object yang di cloning menggunakan keyword clone kepada
                    property yang merujuk pada sebuah object (property dapat berisi object) yang mana property yang lain tetap mengcopy sebuah value
                    kecuali property yang berisi object itu sendiri.</em></p>
                    <p>Pengertian gampang dari deep copy adalah, kita turun dari objek kedalam property yang berisikan object, ditingkatan ini
                    kita gunakan keyword clone untuk mencopy value (Bukan reference) dari property ini dengan menggunakan fungsi
                    <em class="target">__clone</em>.</p>
                    <hr>
                    <div>
                        <?php
                            class Furniture {
                                public $stock;
                                
                                public $kayu;
                                public $model;
                                
                                public function __construct ($stock,$jeniskayu,$model){
                                    $this->stock = $stock;
                                    $this->kayu = $jeniskayu;
                                    $this->model = $model;
                                }
                                
                                public function __clone (){
                                    
                                    $this->model = clone $this->model;
                                    
                                }
                            }
                            
                            class JenisKayu {
                                public $jenis;
                                public $model;
                                public $UkuranKehalusan;
                                
                                public function __construct ($jenis,$model,$UkuranKehalusan){
                                    $this->jenis = $jenis;
                                    $this->model = $model;
                                    $this->UkuranKehalusan = $UkuranKehalusan;
                                }
                            }
                            
                            class Model {
                                public $bentuk;
                                public $ukiran;
                        
                                public function __construct ($bentuk,$ukiran){
                                    $this->bentuk = $bentuk;
                                    $this->ukiran = $ukiran;
                                }
                                
                                
                            }
                            $kayuJati = new JenisKayu ("Kayu Kuat","segi panjang","Sangat Halus");
                            
                            $jepara = new Model ("Panjang","Ukir");
                            $lemari = new Furniture (29,$kayuJati,$jepara);
                            
                            // Clone Tempat Tidur ke lemari
                            $tempatTidur = clone $lemari;
                            
                            // Shallow Copy Mengubah Property
                            $tempatTidur->stock =40;
                            
                            // Shallow Copy Mengubah Objek
                            $tempatTidur->kayu->jenis="Kayu lentur";
                            
                            // Deep Copy
                            $lemari->model->ukiran = "Ukir kelik";
                            $tempatTidur->model->ukiran = "Ukir Kotak Kotak";
                            
                            echo "<pre>";
                                print_r ($lemari);
                                print_r ($tempatTidur);
                            echo "</pre>";
                        ?>
                        <br>
                        <embed src="../script/advance-clone-deepandshallow.pdf" width=600px height="250">
                    </div>
                    <ol>
                        <li>Pada baris ke 202 - 212 saya membuat class Furniture dengan 1 property yang akan diisi dengan nilai dan 2 propery
                        kayu dan model yang akan disini dengan objek.</li>
                        <li>Pada baris ke 214 - 217 saya membuat magic method __clone untuk men-cloning property model, sehingga yang dicopy hanya
                        value saja (Bukan referencenya)</li>
                        <li>Pada baris 259 - 260 saya mengisi property dari objek furniter dari lemari dan tempat tidur dengan sebuah nilai.</li>
                        <li>Cara kerja nya adalah ketika PHP mengerjakan baris 259 dan 260 maka magic method pada baris 214 - 217 akan berjalan, yang
                        bukan lain isinya adalah mengcopy property valu dari model. makan dengan cara kerja tersebut inilah yang dinamakan deep copy.
                        clone dengan menelusuri kedalam propery yang berisikan objek</li>
                    </ol>
                </fieldset>
        </div>
    </div>
    
</body>
</html>

<?php
//Fatal error: Uncaught Error: Call to private Parents::__construct() from invalid context in C:\xampp\htdocs\oop\Visability.php:65 Stack trace: #0 {main} thrown in C:\xampp\htdocs\oop\Visability.php on line 65
//Fatal error: Uncaught Error: Call to private method Parents::hello() from context '' in C:\xampp\htdocs\oop\Visability.php:66 Stack trace: #0 {main} thrown in C:\xampp\htdocs\oop\Visability.php on line 66
?>


