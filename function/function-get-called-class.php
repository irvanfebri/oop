<?php
    $bahasan = "Get Called Class";
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
				
				<fieldset id="Get Called Class">
					<legend>Get Called Class</legend>
                    <p>fungsi ini mengembalikan sebuah nama class ketika method dari class tersebut dipanggil.</p>
                    <p><em class="strong">fungsi ini berguna untuk late static binding</em></p>
                    <hr>
                    <div>
                        <?php
                            class Parents {
                                
                                public static function setMethod () {
                                    return "<h4>Saya dari parent ".get_called_class()."</h4>";
                                }
                                
                                public static function getMethod (){
                                    return self::setMethod();
                                }
                                
                            }
                            
                            class Son extends Parents {
                                public static function setMethod () {
                                    return "<h4>Saya dari Son & ".get_called_class()."</h4>";
                                }
                            }
                            
                            
                            echo "<h3>tanpa keyword static</h3>";
                            echo Parents::getMethod();
                            echo Son::getMethod();
                        ?>
                        <br>
                        <embed src="../script/function-get-called-class.pdf" width=600px height="250">
                        <ol>
                            <li>Lihatlah pada baris ke 62, saya tidak menggunakan keyword static, saya menggunakan <em class="error">self</em>
                            , yang menyebabkan terjadinya late static binding. namun didalam method yang dipanggil saya menaruh function <em class="target">
                                get_called_class()
                            </em> yang mengembalikan nama class dari method yang dipanggil.
                            </li>
                        </ol>
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


