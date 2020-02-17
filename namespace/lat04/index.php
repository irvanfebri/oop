<?php
    $bahasan = "Group use declaration";
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
				
				<fieldset id="Group use declaration">
					<legend>Group use declaration</legend>
                    <p>
                        Group use declarations merupakan fitur namespace yang baru ditambahkan pada PHP 7.
                        Fitur ini dipakai untuk meng-import banyak namespace sekaligus,
                        namun dengan syarat namespace yang akan di import memiliki struktur tertentu. 
                    </p>
                    <hr>
                    <div>
                        <?php
                            include ("file01.php");
                            include ("file02.php");
                            include ("file03.php");
                            
                            //use subfile\file\fileo1;
                            //use subfile\file\fileo2 as filedua;
                            //use subfile\file\fileo3\Produk as Produk;
                            
                            // same as
                            
                            use subfile\file\{fileo1, fileo2 as filedua , fileo3\Produk as Produk};
                            
                            $objek01 = new fileo1\Produk();
                            $objek02 = new filedua\Produk();
                            $objek03 = new Produk();
                            
                            echo "<pre>";
                                echo $objek01->calling();
                                echo $objek02->calling();
                                echo $objek03->calling();
                                
                            echo "</pre>";                          
                        ?>
                        <br>
                        <h5>File Index</h5>
                        <embed src="../../script/namespace-index-group.pdf" width=600px height="250">
                        <h5>File01</h5>
                        <embed src="../../script/namespace-file01-useas.pdf" width=600px height="250">
                        <h5>File02</h5>
                        <embed src="../../script/namespace-file02-useas.pdf" width=600px height="250">
                        <h5>File03</h5>
                        <embed src="../../script/namespace-file03-useas.pdf" width=600px height="250">
                        
                    </div>
                    <ol>
                        <li>
                            lihatlah difile index pada baris 68, diamana kode tersebut adalah shortcut instan yang sama seperti pada baris 62 - 64.
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


