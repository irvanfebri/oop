<?php
    namespace subindex;
    $bahasan = "Global dan Relative name space";
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
				
				<fieldset id="Global dan Relative name space">
					<legend>Global dan Relative name space</legend>
                    <p>
                        Global namespace adalah ruang kode program tanpa namespace.
                    </p>
                    <p>
                        Relative namespace adalah ruang kode program dengan namespace.
                    </p>
                    <p>
                        dari perngertian tersebut yg akan kita bahas adalah, kodeprogram yang ada di relative name space tidak dapat mengakses
                        kode program yang ada didalam global namespace <em class="strong">tanpa mundur ke gloal namespaceya</em>.
                    </p>
                    <hr>
                    <div>
                        <?php
                            class Produk {
                                public function calling () {
                                    return "<h3>saya ada di class ".__CLASS__." di name space ".__namespace__."</h3>"; 
                                }
                            }
                            include ("file01.php");
                            
                            $obj = new Produk();
                            echo "<pre>".$obj->calling()."</pre>";
                            
                            //$objGlobal = new stdClass();
                            $obGlobal = new \stdClass();
                            
                            //$obj2 = new subsatu\Produk();
                            //Uncaught Error: Class 'subindex\subsatu\Produk'
                            
                            $obj2 = new \subsatu\Produk();
                            echo "<pre>".$obj2->calling()."</pre>"; 
                                                     
                        ?>
                        <br>
                        <h5>File Index</h5>
                        <embed src="../../script/namespace-index-globalrealtive.pdf" width=600px height="250">
                        <h5>File01</h5>
                        <embed src="../../script/namespace-file01-globalrelative.pdf" width=600px height="250">
                        
                    </div>
                        <ol>
                            <li>Didalam file ini dibaris 1 saya membuat sebuh namespace <em class="target">subindex</em>. atau dengan kata
                                lain, seluruh program yang ada di file ini berada didalam relativename space.</li>
                            <li>
                                Pada baris 71 saya mengisi objek dengan class produk, dan pada baris ke 72 saya emanggil fungsi
                                <em class="targe">calling()</em>yang menampilka nama class dan namespace. dapat dilihat objek berasal dari
                                class <em class="strong">subindex\produk</em> atau dengan kata lain berada didalam relativen namespace
                            </li>
                            <li>
                                Pada baris ke 74 saya membuat objek dengan class bawaan <em class="target">stdClass()</em>, akantetapimenghaslikan error
                                <em class="error"> Uncaught Error: Class 'subindex\stdClass  not found in'</em> yang menyatakan bahwa subindex\stdClass.
                                Memang, <em class="strong">karena stdClass ada didalam global namespace, sehingga tidak bisa diakses dari
                                relative namespace</em>
                            </li>
                            <li>
                                Pada baris ke 75 saya kembali membuat objek dengan class bawaan <em class="target">stdClass()</em>, namun dengan
                                tambahan karakter backslash <em class="target">\</em> setelah keyword news dan sebelum class <em class="target">stdClass()</em>.
                                Itu adalah perintah kepada PHP untuk mundur satu langkah <em class="litle">(karena namespace ini hanya terdiri dari single folder
                                atau tidak ada subfolder lainya)</em> ke global namespace. Maka sebab itu class bawaan dapat diakses.
                            </li>
                            <li>
                                Pada baris ke 69 saya menginclude file01 yang berada didalam file01.php. dimana file01.php tersebut saya isi dengan
                                namespace <em class="target">subsatu</em>. untuk mengakses class yang ada didalam file01.php dan berada didalam
                                relative namespace, pada baris ke 80 setelah keyword new saya memerintah php menggunakan karakter backslash <em class="target">\</em>
                                untuk mundur ke globalnamespace, lalu masuk kenamespace subsatu dan class produk lalu dialiaskan. dan pada baris ke 81
                                saya echo method dari objektersebut.
                            </li>
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


