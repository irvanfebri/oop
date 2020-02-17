<?php
    $bahasan = "get_declared";
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
				
				<fieldset id="get Declared">
					<legend>get Declared</legend>
                    <p>get_declared_ dipakai untuk mencari informasi apa saya nama class, interface dan trait yang bisa diakses.</p>
                    <ol>
                        Ada 3 fungsi yang menggunakan awal <em class="target">get_declared</em>
                        <li>get_declared_classes() dipakai untuk menampilkan daftar nama class yang bisa diakses saat ini.</li>
                        <li>
                            Fungsi get_declared_interfaces() dipakai untuk menampilkan daftar nama interface
                        </li>
                        <li>
                             fungsi get_declared_traits() dipakai untuk menampilkan daftar nama trait
                        </li>
                    </ol>
                    <p class="strong">Daftar nama class, interface dan trait ini tidak hanya yang ditulis di halaman saat ini, tapi seluruhnya termasuk bawaan PHP. Ketiganya tidak butuh argument apapun.</p>
                    <hr>
                    <div>
                        <?php
                            class Produk {
                                
                            }
                            
                            trait PajakEkspor {
                                
                            }
                            
                            interface Method {
                                function Method ();
                            }
                            
                            class Barang extends Produk implements Method {
                                use PajakEkspor;
                                function Method () {
                                    
                                }
                            }
                            
                            echo "<pre>";
                                
                                print_r (get_declared_classes());
                                print_r (get_declared_interfaces());
                                print_r (get_declared_traits());
                                
                                
                                
                            echo "</pre>";
                            
                            
                        ?>
                        <br>
                        <embed src="../script/function-get-declared.pdf" width=600px height="250">
                            <p>
                                dari hasil diatas dapat dilihat, class dan interface memiliki class bawaan, sedangan untuk trait tidak memiliki
                                class bawaan.
                            </p>
                            <p>
                                Class interface dan traityang dibuat ada pada baris terakhir dari class bawaan
                            </p>
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


