<?php
    $bahasan = "Sub Name Space";
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
				
				<fieldset id="Sub Name Space">
					<legend>Sub Name Space</legend>
                    <p>Progamer yang banyak dalam mengerjakan sebuah projek juga bisa saja membuat namesapce yang sama, namun PHP menyediakan
                    solusi untuk ini, yaitu membuat subname space.
                    </p>
                    <hr>
                    <div>
                        <?php
                            include ("file01.php");
                            include ("file02.php");
                            include ("file03.php");
                            
                            
                            $objek02 = new fileo1\Produk();
                            $objek03 = new fileo2\Produk();
                            $objek04 = new subfile\fileo2\Produk();
                            
                            echo $objek02->calling();
                            echo $objek03->calling();
                            echo $objek04->calling();
                            
                        ?>
                        <br>
                        <h5>File Index</h5>
                        <embed src="../../script/namespace-index-sub.pdf" width=600px height="250">
                        <h5>File01</h5>
                        <embed src="../../script/namespace-file01.pdf" width=600px height="250">
                        <h5>File02</h5>
                        <embed src="../../script/namespace-file02.pdf" width=600px height="250">
                        <h5>File03</h5>
                        <embed src="../../script/namespace-file03-sub.pdf" width=600px height="250">
                        
                    </div>
                    <ol>
                        <li>Lihatlah pada file03 pada baris ke 5, kita bisa membuat sub folder, sehingga namespace yang sama bisa
                        dihindarkan dengan membuat subfilenya.
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


