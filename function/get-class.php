<?php
    $bahasan = "get_class_****";
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
				
				<fieldset id="get_class()">
					<legend>get_class()</legend>
                    <p>Fungsi get_class() dipakai untuk mencari <em class="strong">nama class dari sebuah object atau variabel.</em>
                        Fungsi ini butuh argument berupa <em class="strong">variabel yang akan di cari nama class-nya</em>. Hasilnya berupa string yang berisi nama class.
                    </p>
                    <p>
                        Fungsi get_class_vars() dipakai untuk mencari <em class="strong">daftar property yang ada di dalam sebuah class.</em>
                        Fungsi ini butuh sebuah argument berupa <em class="strong">string nama class</em>. Hasilnya berupa array dari nama property yang ada.
                    </p>
                    <p>
                        Fungsi get_class_methods() dipakai untuk mencari <em class="strong">daftar method yang ada di dalam sebuah class.</em>
                        Fungsi ini butuh sebuah argument berupa <em class="strong">string nama class</em>. Hasilnya berupa array dari nama method yang ada. 
                    </p>
                    <p>
                        Fungsi get_object_vars() dipakai untuk mencari <em class="strong">daftar property yang ada di dalam sebuah object.</em>
                        Fungsi ini butuh sebuah argument berupa <em class="strong">variabel</em>. Hasilnya berupa array dari nama property yang ada.
                    </p>
                    <hr>
                    <div>
                        <?php
                            class Produk {
                                public $merek,$stock,$harga;
                                
                                public function __construct ($merek,$stock,$harga) {
                                    $this->merek = $merek;
                                    $this->stock = $stock;
                                    $this->harga = $harga;
                                }
                                
                                public function checkMerek () {
                                    
                                }
                                
                                public function checkStock () {
                                    
                                }
                                
                                public function checkHarga (){
                                    
                                }
                                
                                public function addRedStock () {
                                    
                                }
                            }
                            
                            class Elektronik extends Produk {
                                
                            }
                            
                            $obj01 = new Elektronik ("Xiomi",29,170000);
                            
                            echo "<h3>".get_class ($obj01)."</h3>";
                            echo "<pre>"; print_r (get_class_vars ("Elektronik")); echo "</pre>";
                            echo "<pre>"; print_r ($ar = get_class_methods ("Elektronik")); echo "</pre>";
                            echo "<pre>"; print_r (get_object_vars ($obj01))."</h3>"; echo "</pre>";
                        ?>
                        <br>
                        <embed src="../script/function-get-class.pdf" width=600px height="250">
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


