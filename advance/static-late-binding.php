<?php
    $bahasan = "Static Late Binding";
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
				
				<fieldset id="Binding Early">
					<legend>Binding Early</legend>
                    <p><em class="target">early binding </em>adalah sebutan atau kondisi dimana PHP sudah mengetahui apa yang harus dilakuakn pada awal (proses compile)</p>
                    <hr>
                    <div>
                        <?php
                            class Parents {
                                protected $property = 'hai';
                                
                                public function getProperty (){
                                    return "<h3>Isinya adalah kalimat ".$this->property."</h3>";
                                }
                            }
                            
                            class Child extends Parents {
                                public function getProperty () {
                                    return "<h3>Class Anak : Isinya adalah kalimat ".$this->property."</h3>";
                                }
                            }
                            
                            $objek01 = new Parents ();
                            echo $objek01->getProperty();
                            $objek02 = new Child ();
                            echo $objek02->getProperty();
                        ?>
                        <br>
                        <embed src="../script/binding-early.pdf" width=600px height="250">
                        <ol>
                            <li>Pada baris ke 54 - 59 saya membuat sebuah class dengan propert dan method.</li>
                            <li>Pada baris ke 62 - 66 saya membuat sebuah class yang menurunkan class parent, dengan isi sebuah method yang
                            namanya sama dengan class parent.</li>
                            <li>
                                pada baris ke 68 dan 71 saya menginisialisasi dan memanggil method <em class="target">getProperty()</em>.
                            </li>
                            <li>Namun hasil dari keduanya beda karena disetiap class sudah ada implementasi dari method tersebut tanpa harus menuggun
                            atau mencari data dari object lain.</li>
                        </ol>
                    </div>
                </fieldset>
                
                <fieldset id="Late Binding">
                    <legend>Late Binding</legend>
                    <p><em class="target">Late binding </em>adalah sebutan atau kondisi dimana PHP belummengetahui apa yang harus dilakuakn pada awal (proses compile).
                    PHP akan mentetahui ketika ada sebuah method yang membutuhkan data atau objek untuk dicari agar proses akhir selesai (PHP mengetahuinya pada saat perjalanan).
                    </p>
                    <hr>
                    <div>
                        <?php
                            class Ortu {
                                protected $property = 'hai';
                                
                                public function getProperty (){
                                    return "<h3>Isinya adalah kalimat ".$this->property."</h3>";
                                }
                                
                                public function getInfo () {
                                    return $this->getProperty();
                                }
                            }
                            
                            class Anak extends Ortu {
                                public function getProperty () {
                                    return "<h3>Class Anak : Isinya adalah kalimat ".$this->property."</h3>";
                                }
                            }
                            
                            $obj01 = new Ortu ();
                            echo $obj01->getInfo();
                            
                            $obj02 = new Anak ();
                            echo $obj02->getInfo();
                            
                        ?>
                        <br>
                        <embed src="../script/binding-late.pdf" width=600px height="250">
                        <ol>
                            <li>Fokuskan pada line 103 - 102.  dimana pada baris ke 115 dan 118 kita memanggil dua object dari dua class parent
                            dan child method <em class="target">getInfor()</em> yang mana itu adalah method milik parent.</li>
                            <li>
                                Isi dari method <em class="target">getInfor()</em> adalah method <em class="target">getProperty()</em> yang mana
                                dimasing-masing class memilki method tersebut dengan implementasi yang berbeda. Maka sebab itu keita dijalankan
                                <em class="target">getInfo</em> php mencari dulu method <em class="target">getProperty()</em> disetiap class. Hal tersebutlah
                                dinamana late binding atau running binding, dimana PHP belum mengetahui apa yang harus dilakuakn sbelum object yang dibutuhkan ada.
                            </li>
                        </ol>
                    </div>
                </fieldset>
                
                <fieldset id="Static Late Binding">
                    <legend>Static Late Binding</legend>
                    <p>Static Late Binding, mengakomodir static method yang tidak dapat diturunkan, dengan menggunakan keyword
                        <em class="target">static::</em>
                    </p>
                    <hr>
                    <div>
                        <?php
                        
                            class Adult {
                                public static $property = "Diam Di Tempat";
                                
                                public static function getPro (){
                                    return "<h3>".self::$property."</h3>";
                                }
                                
                                public static function getFromGetPro (){
                                    return static::getPro();
                                }
                            }
                            
                            class Kids extends Adult{
                                public static function getPro () {
                                    return "<h3> saya dari anak ".self::$property."</h3>";
                                }
                            }
                            
                            
                            echo Adult::getFromGetPro(); // Diam Di Tempat
                            echo Kids::getFromGetPro() // Diam Di Tempat
                            
                        ?>
                        <br>
                        <embed src="../script/binding-late-static-false.pdf" width=600px height="250">
                        <ol>
                            <li>pada baris ke 152 dan 154 saya membuat method yang mengmbalikan nilai <em class="target">self::getPro</em>, dimana
                            maksudnya cari method <em class="target">getPro()</em> dari class ini. Namu permasalahnnya ketikda di aplikasikan kepada
                            class anak, dimana method <em class="target">getFromGetPro()</em> selalu merujuk kepada static method parent.</li>
                            <li>Solusinya ialah dengan cara menggati keyword self pada baris ke 153 dengan keyword <em class="target">static</em></li>
                        </ol>
                        <embed src="../script/binding-late-static-true.pdf" width=600px height="250">
                    </div>
                </fieldset>
        </div>
    </div>
    
</body>
</html>

<?php
//Fatal error: Uncaught Error: Call to private Parents::__construct() from invalid context in C:\xampp\htdocs\oop\Visability.php:65 Stack trace: #0 {main} thrown in C:\xampp\htdocs\oop\Visability.php on line 65
//Fatal error: Uncaught Error: Call to private method Parents::hello() from context '' in C:\xampp\htdocs\oop\Visability.php:66 Stack trace: #0 {main} thrown in C:\xampp\htdocs\oop\Visability.php on line 66
?>


