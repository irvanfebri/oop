<?php
    $bahasan = "Autoloader using spl";
?>
<!DOCTYPE html>
<html>
<head>
	<meta Charset="utf-8">
	<title>Class and Object</title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../../mystyle.css">
    
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
            <a href="../index.php">Back</a><br>
            <ol id="here-home"></ol>
				
				<fieldset id="Autoloader using spl">
					<legend>Autoloader using spl</legend>
                    <p>
                        Dengan memanfaat function <em class="target">spl_autoload_register()</em> yang ter trigger jika ada class
                        yang dibutuhkan namun tidak tersedia, kita dapat memanfaatkan ini untuk load file lain secara otomatis.
                    </p>
                    <hr>
                    <div>
                        <?php
                            spl_autoload_register ("searchClass");
                            
                            function searchClass ($className){
                                if (file_exists ("$className.php")){
                                    require ("$className.php");
                                }
                            }
                            
                            $lemari = new Furniture("Jepara",20000000);
                            $mesinCuci = new Elektronik ("Mencuci Baju","200 Watt");
                            //$motor = new MotorRodaDua ("Yamaha","250cc");
                            //Fatal error: Uncaught Error: Class 'MotorRodaDua' not found in 
                            
                            echo $lemari->getInform();
                            echo $mesinCuci->getInform();
                            
                            //spl_autoload_register (function ($className){
                            //    
                            //    if (file_exists ("$className.php")){
                            //        require ("$className.php");
                            //    }
                            //    
                            //});
                            
                        ?>
                        <br>
                        <h5>File Index.php</h5>
                        <embed src="../../script/autoload-index.pdf" width=600px height="250">
                        <h5>elektronik.php</h5>
                        <embed src="../../script/autoload-elektronik.pdf" width=600px height="250">
                        <h5>furnituer.php</h5>
                        <embed src="../../script/autoload-furniture.pdf" width=600px height="250">   
                        
                    </div>
                </fieldset>
                <ol>
                    <li>
                        Pada baris 57 saya membuat function <em class="target">spl_autoload_register()</em>
                        untuk menjalankan autoload (auto import file kedalam index.php)
                    </li>
                    <li>
                        Pada baris ke 59 - 62 saya membuat funtion untuk diapai difunction <em class="target">spl_autoload_register()</em>
                        sebagai perintah untuk import file jika nama class tidaktersedia.
                        <em class="strong">kita dapat membuat funtion terpisah dan kita juga bisa menggabungkan langsung di
                        function <em class="target">spl_autoload_register()</em>nya menggunakan function anonymous. contoh ada di comment pada
                        baris ke 74 - 79..
                        </em>
                    </li>
                    <li>
                        Pada baris ke 65 dan 66 saya membuat objek dari class Furniture dan Elektronik yang ada didalam file
                        elektronik.php dan furniture.php. Dimana ketika class tersebut dipanggil sebenarnya belumtersedia didalam kode index.php
                        Karena PHP tidak menemukan clas tersebut, PHP mencari function <em class="target">spl_autoload_register()</em> yang perintahnya
                        kurang lebih untuk mengimport file. jika ada maka class akan tersedia (ter import), dan tidak menghasillkan error.
                        JIka tidak ada class tersebut walaupun sudah mengimport beberap file maka PHP akan mengeluarkan error
                        <em class="error">Fatal error: Uncaught Error: Class 'MotorRodaDua' not found in</em> sebagai mana pad baris ke67 - 68
                    </li>
                    <li><em class="strong">Yang harus diperhatikan disini adala, nama class yang dicari dan nama file harus memiliki nama yang
                    sama.</em></li>
                </ol>
        </div>
    </div>
    
</body>
</html>

<?php
//Fatal error: Uncaught Error: Call to private Parents::__construct() from invalid context in C:\xampp\htdocs\oop\Visability.php:65 Stack trace: #0 {main} thrown in C:\xampp\htdocs\oop\Visability.php on line 65
//Fatal error: Uncaught Error: Call to private method Parents::hello() from context '' in C:\xampp\htdocs\oop\Visability.php:66 Stack trace: #0 {main} thrown in C:\xampp\htdocs\oop\Visability.php on line 66
?>


