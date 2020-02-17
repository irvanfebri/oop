<?php
    $bahasan = "Name Space";
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
				
				<fieldset id="Name Space">
					<legend>Name Space</legend>
                    <p>Name space berguna ketika kita mengerjakan sebuah sistem bersama dengan developer lain, dimana memungkinkan
                    lebih dari satu developer membuat sebuah class yang sama. PHP akan mengeluarkan error jika ada dua class atau lebih dengan
                    nama yang sama. solusinya kita dapat menggunakan name class pada setiap file</p>
                    <hr>
                    <div>
                        <?php
                            include ("file01.php");
                            include ("file02.php");
                            
                            // $objek01 = new Produk();
                            //  Uncaught Error: Class 'Produk' not found
                        
                            $objek02 = new fileo1\Produk();
                            $objek03 = new fileo2\Produk();
                            
                            echo $objek02->calling();
                            echo $objek03->calling();
                            
                        ?>
                        <br>
                        <h5>File Index</h5>
                        <embed src="../../script/namespace-index.pdf" width=600px height="250">
                        <h5>File01</h5>
                        <embed src="../../script/namespace-file01.pdf" width=600px height="250">
                        <h5>File02</h5>
                        <embed src="../../script/namespace-file02.pdf" width=600px height="250">   
                        
                        <ol>
                            <li>pada baris ke 59 saya mengisi objek dengan sebuah class produk, dimana class produk ini ada didalam file01 dan file02
                                yang telah saya include. namun menghasilkan <em class="error"> Uncaught Error: Class 'Produk' not found</em>.
                                <em class="strong">Hal ini terjadi karena class produk yang ada dimasing2 file sudah diberi name space masing2</em> maka
                                untuk memanggilnya ada dua cara
                                <ol>
                                    <li>Dengan memberikan keyword name space dan nama nya ex <em class="target">namespace aloha</em></li>
                                    <li>Dengan cara saat mengisi objek dengan nama class dengan cara menyisipkan namespace sebelum nama class
                                    . ex <em class="target">$objek = new fileo1/NamaClass () </em>Seperti pada baris 62 dan 63 pada file index
                                    </li>
                                </ol>
                            </li>
                            <li>
                                pada baris ke 65 dan 66 saya memanggil method dari masing2 objek dengan nama yang sama namun nilai kembaliannya berbeda,
                                karena memang dari class yang berbeda.
                            </li>
                        </ol>
                        <div class="kesimpulan">
                            Cara penulisan namespace harus diawal atau baris pertama di kode PHP kecuali bisa didahululi dengan komen dan
                            <a class="target" href="../../advance/type-hinting.php">strict mode, pembatasan tipe data pada parameter</a>. dapat dilihat di file02
                        </div>
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


