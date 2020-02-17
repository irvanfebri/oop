<?php
    $bahasan = "SPL Autoload Register";
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
				
				<fieldset id="SPL Autoload Register">
					<legend>SPL Autoload Register</legend>
                    <p>fungsi ini dipakai untuk menampung nama class yang tidak terdefinisi.</p>
                    <p>Fungsi ini membutuhkan satubuah argumen, yaitu nama class 'string'</p>
                    <hr>
                    <div>
                        <?php
                            spl_autoload_register ('autoload');
                            
                            function autoload ($check){
                                echo "<h3>$check not found</h3>";
                                die ('
                                     <br><embed src="../script/autoload-spl-auto-register.pdf" width=600px height="250">
                                     </div></fieldset>
                                     <ol>
                                     <li>
                                        Pada baris ke 55 saya membuat function <em class="target">spl_autoload_register</em>
                                        yang mana function tersebut akan berjalan jika ada nama class yang dipanggil tidak terssedia.
                                        
                                     </li>
                                     <li>
                                        Parameter argumen tersebut adalah nama function tampungan yang akan dijalankan dimana didalam function tersebut
                                        pula membutuhkan satu argumen untuk menampung nama class yang tidak tersedia.
                                     </li>
                                     <li>
                                        function penampungan tersebut bisa dipisah dengan nama function lain atau memakai anonymous function.
                                     </li>
                                     <li>
                                        Pada baris ke 65 saya membuat objek dari class Produk, yg mana class tersebut tidak tersedia.
                                        
                                     </li>
                                     <li>
                                        karena class tersebut tidak tersedia maka PHP akan mencari function <em class="target">spl_autoload_register()</em>
                                        dan menjalankan function tersebut.
                                     </li>
                                     <li>
                                        Function auto register tersebut berisi function tampungan, dimana function tersebut akan berjalan ketika
                                        function auto register dijalankan.
                                     </li>
                                     </ol>
                                     </div></div></body></html>
                                     ');
                            }
                            
                            $new = new Produk ();
                        ?>
                        <br>
                        <embed src="../script/function-is-obj.pdf" width=600px height="250">
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


