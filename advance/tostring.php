<?php
    $bahasan = "Magic Method - tostring";
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
            <ol id="here-home"> 
                
            </ol>
				
				<fieldset id="__torstring">
					<legend>Magic method tostring</legend>
                    <p>Jika kita membuat sebuah class dan tidak mengisi property atau method ataupun impelemntasinya, dan kita membut sebuah obecjt
                    lalu memanggil object tersebut dengan perintah echo, maka akan menghasilkan sebuah error.</p>
                    <p><em class="error">Fatal error: Uncaught Error: Object of class hello could not be converted to string</em></p>
                    <p>yang kurang lebih
                    menyatakan objek dari class tertentu tidak bisa dikonversi kedalam string.</p>
                    
                    <div class="kesimpulan"></div>
                    <div>
                    <?php
                        class hello {
                            
                        }
                        
                        $say = new hello ();
                        // echo $say;
                        // Fatal error: Uncaught Error: Object of class hello could not be converted to string
                        
                        class halo {
                            
                            public function __toString (){
                                return "<h3>saya berasal dari class ".__CLASS__." dan method ".__METHOD__."</h3>";
                            }
                            
                        }
                        $bicara = new halo ();
                        echo $bicara->__toString();
                    
                    
                    ?>
                        <legend>True</legend>
                        <embed src="../script/tostring.pdf" width=600px height="250">
                    </div>
                </fieldset>
                
                <fieldset id="Turunan __torstring">
					<legend>Turunan Magic method tostring</legend>
                    <p>Method toString juga akan diturunkan kedalam class anak.</p>
                    
                    <div class="kesimpulan"></div>
                    <div>
                    <?php
                        class kalimat extends halo {
                            
                        }
                        $talk = new kalimat ();
                        echo $talk->__toString();
                    ?>
                        <legend>True</legend>
                        <embed src="../script/tostring-inheretence.pdf" width=600px height="250">
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


