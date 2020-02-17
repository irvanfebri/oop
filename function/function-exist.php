<?php
    $bahasan = "exist";
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
				
				<fieldset id="exist">
					<legend>exist</legend>
                    <p>fungsi dengan akhiran __exist berguna untuk mengetahui apakah sebuah class, method , property, intarface, dan trait tersedia atau tidak
                    </p>
                    <ol>
                        <li>
                            Fungsi <em class="target">class_exists()</em> dipakai untuk memeriksa apakah sebuah class tersedia atau tidak, fungsi ini membutuhkan
                            satu buah argumen wajib, yaitu nama class yang ingin dicari. yang <em class="strong">perlu di perhatikan juga adalah fungsi ini bisa juga
                            mengcheck eksis atau tidaknya class bawaan</em>.
                        </li>
                        
                        <li>
                            <em class="target">method_exists()</em> untuk mengecheck apakah method eksis didalam sebuah objek atau tidak.
                            method ini membutuhkan dua argumen, pertama adalah nama objek "string", dan kedua adalah nama method 'string'.
                        </li>
                        
                        <li>
                            <em class="target">property_exists()</em> membutuhkan dua buah argumen, pertama adalah nama class 'string' ataupun nama
                            objek 'string', dan kedua adalah nama property.
                        </li>
                        
                        <li>
                            <em class="target">interface_exists()</em> membutuhkan satu buah argumen, nama interface 'string'
                        </li>
                        
                    </ol>
                    <div class="kesimpulan">
                        serta string argumen ini
                            bersifat case insensitive.
                    </div>
                    <hr>
                    <div>
                        <?php
                            class Produk {
                                
                            }
                            
                            trait PajakEkspor {
                                
                            }
                            
                            interface Method {
                                function MethodBarang ();
                            }
                            
                            class Barang extends Produk implements Method {
                                use PajakEkspor;
                                
                                public $propsatu = "Saya property satu";
                                public $propdua = "Saya property dua";
                                public $proptiga = "Saya property tiga";
                                public $propempat = "Saya property empat";
                                function MethodBarang () {
                                    return $this->propsatu." ".$this->propdua." ".$this->proptiga." ".$this->propempat."<br>";
                                }
                                function MethodSendiri () {
                                    return 'i come from my self';
                                }
                            }
                            
                            echo "<pre>";
                                echo "<h3>class_exists</h3>";
                                echo "Class produk : ";
                                var_dump (class_exists ("produk",0));
                                echo"<br>";
                                echo "Class barang : ";
                                var_dump (class_exists ("baranG",0));
                                echo"<br>";
                                echo "Class PDOStatement : ";
                                var_dump (class_exists ("PDOStatement",0));
                                echo"<br>";
                                
                                echo "<h3>metho_exists</h3>";
                                
                                $objek = new Barang ();
                                
                                echo "Method 'MethodBarang' pada object \$objek : ";
                                var_dump (method_exists  ($objek,"methodbarang"));
                                echo"<br>";
                                echo "Method 'MethodSaja' pada object \$objek : ";
                                var_dump (method_exists  ($objek,"methodsaja"));
                                echo"<br>";
                                
                                echo "<h3>property_exists</h3>";
                                echo "Property 'propertysatu' pada object \$objek : ";
                                var_dump (property_exists ($objek,"propsatu"));
                                echo"<br>";
                                echo "Property 'prop' pada class 'Barang' : ";
                                var_dump (property_exists ('barang',"propsatu"));
                                echo"<br>";
                                echo "Property 'propduasatu' pada class \$objek : ";
                                var_dump (property_exists ($objek,"propduasatu"));
                                echo"<br>";
                                
                                echo "<h3>interface_exists</h3>";
                                echo "Class 'Barang'  : ";
                                var_dump (interface_exists ("Barang"));
                                echo"<br>";
                                echo "Interface 'Method'  : ";
                                var_dump (interface_exists ("Method"));
                                echo"<br>";
                                
                                echo "<h3>trait_exists</h3>";
                                echo "Trait 'PajakEkspor'  : ";
                                var_dump (trait_exists ("pajakekspor"));
                                echo"<br>";
                                
                            echo "</pre>";
                            
                            
                        ?>
                        <br>
                        <embed src="../script/function-exists.pdf" width=600px height="250">
                            
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


