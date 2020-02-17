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
        <h3>Static Property</h3>
        <a href="index.php">Back</a><br>
        <fieldset><legend>hasil memanggil property dari object atau class langsung</legend>
            <p>Sebuah methode dan property hanya bisa diakses dari objeck, bukan classnya, sebagai contoh
            
            <fieldset><legend>Contoh</legend>
            <?php
                class contoh1 {
                    public $test = "december";
                    }
                
                $object = new contoh1;
                echo "<b>Baris -> ".__line__ ." </b>".$object->test."<br>"; //diakses dari object
                //echo "<b>Baris -> ".__line__ ." </b>".contoh1::$test; //diakses langsung dari class
                echo "<img width=1100px src=image/static.png>"; 
            ?>
            
            </fieldset>
            <br>
            <a target="_blank" href= "script/bahasan1.24.pdf">Script</a></p>
            <p><strong>lihatlah pada baris ke 30</strong> saya memanggil property <i>$test</i> langsung dari class,
            namun menghasilkan pesan error dengan arti (<b>Bahwa kita telah mengakases propeerty static yang belum
            terdeklarasi.</b> hal tersebut terjadi karena pada baris ke 22 kita membuat property tidak dengan static.</p>
        </fieldset>
        <br>
        <fieldset>
            <legend>set property sebagai static property dan memangil static property tersebut</legend>
            <fieldset>
                <?php
                    class Example {
                        public static $greet = "Assalamualaikum";
                    }
                    $object01 = new Example();
                    echo $object01->greet;
                    echo "<hr>";
                    echo "<b>baris -> ".__line__." </b>".Example::$greet;
                ?>
            </fieldset>
            <br>
            <a target="_blank" href= "script/bahasan1.25.pdf">Script</a>
            <ol>
                <li>pada baris ke 44 setelah access modifier ada tulisan static, yang artinya property <i>$greet</i> adalah
                property static.</li>
                <li>pada baris ke 46 - 47 kita mencoba memanggil propoerty tersebut dari object, ternyata m
                enghasilkan error yang kuranglebih maksudnya "<b><i>kesalahan akibat memanggil property static dari object.</i></b></li>
                <li>pada baris ke 49 kita memanggil static property langsung dari class-nya, maka munculah hasil dari pemanggilan
                tersebut.</li>
            </ol>
            <b><i><blockquote>Sehingga dapat disimpulkan bahwa static property adalah milik class dimana
            tidak dapat mengakses static property melalui object dan sebaliknya, property yang bukan static tidak
            dapat diakses langsung dari classnya.</blockquote></b></i>
        </fieldset>
        <br>
        <fieldset>
            <legend>Static property diturunkan</legend>
            <fieldset>
            <?php
                class mom{
                    public static $name = "the 27th December";
                }
                
                class son extends mom {
                    //property static bisa diakses dari son;
                }
                echo "ini memanggil dari class parent.  <b>Baris ke ->".__line__." </b>".mom::$name;
                echo "<br>";
                echo "ini memanggil dari class parent.  <b>Baris ke ->".__line__." </b>".son::$name;
            ?>
            </fieldset>
            <ol>
                Bukalah link berikut (<a target="_blank" href= "script/bahasan1.26.pdf">Script</a>)
                <li>pada baris ke 72 kita membuat property static.</li>
                <li>
                    baris ke 75 adalah turunan dari class mom, sehingga property atau methode yang berada di class induk
                    dapat kita akses.
                </li>
                <li>pada baris ke 78 saya memanggil static property dari class induk dan pada baris ke 80 saya memanggil static
                property dari class child.</li>
            </ol>
            <b><i><blockquote>Sehingga dapat disimpulkan bahwa static property dapat diakses langsung dari class
            induk atau dari class child.</blockquote></b></i>
            
        </fieldset>
        <br>
		<a target="_blank" href= "script/bahasan1.26.pdf">Script</a>

        </div>
    </div>
    
</body>
</html>

<?php
//Fatal error: Uncaught Error: Call to private Parents::__construct() from invalid context in C:\xampp\htdocs\oop\Visability.php:65 Stack trace: #0 {main} thrown in C:\xampp\htdocs\oop\Visability.php on line 65
//Fatal error: Uncaught Error: Call to private method Parents::hello() from context '' in C:\xampp\htdocs\oop\Visability.php:66 Stack trace: #0 {main} thrown in C:\xampp\htdocs\oop\Visability.php on line 66
?>