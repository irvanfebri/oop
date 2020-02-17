<?php
    $bahasan = "Autoload Namespace";
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
				
				<fieldset id="Autoload Namespace">
					<legend>Autoload Namespace</legend>
                    <p><em class="strong">Kita masih menggunakan file contoh multiple autoloading</em></p>
                    <p>Jika class yang akan diimport menggunakan <em class="target">namespace</em> maka kita harus
                    memodifikasi alamat path yang dipakai olehh fungsi <em class="target">required</em></p>
                    <h3 class="kesimpulan">Directory file untuk di autoload harus sama dengan directory penulisan namespace</h3>
                    <hr>
                    <div>
                        <?php
                            
                            spl_autoload_register (function ($class){
                                $file = strtolower ($class).".php";
                                
                                if (file_exists ($path01 = "plugin/".$file)){
                                    echo $path01;
                                    require ($path01);
                                }
                                if (file_exists ($path02 = "library/".$file)){
                                    echo $path02;
                                    require ($path02);
                                }
                                
                            });
                            
                            $readScan = new Scanner\Scan ();
                            echo $readScan->run();
                            
                            $barcode = new Barcoder\barcode();
                            echo $barcode->run();
                            
                           
                        ?>
                        <br>
                        <h5>File Index.php</h5>
                        <embed src="../../script/autoload-index-namespace.pdf" width=600px height="250">
                        <h5>scan.php</h5>
                        <embed src="../../script/autoload-scan-namespace.pdf" width=600px height="250">
                        <h5>barcode.php</h5>
                        <embed src="../../script/autoload-barcode-namespace.pdf" width=600px height="250">   
                        
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


