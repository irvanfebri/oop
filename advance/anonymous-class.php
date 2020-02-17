<?php
    $bahasan = "Anonymous Class";
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
				
				<fieldset id="Anonymous Class">
					<legend>Anonymous Class</legend>
                    <p>Anonymous Class adalahs sebuah class tanpat nama yang kita bisa menginstasiasi satu kali saja.</p>
                    <hr>
                    <div>
                        <?php
                            $objek01 = new class (){
                                public $property01 = __CLASS__;
                                public function getInfo () {
                                    return "<h3>saya dari class ".$this->property01."</h3>";
                                }
                            };
                            
                            echo ($objek01->getInfo());
                        ?>
                        <br>
                        <embed src="../script/anonymous.pdf" width=600px height="250">
                    </div>
                </fieldset>
                
                <fieldset id="Anonymous Class Turunan">
					<legend>Anonymous Class Turunan</legend>
                    <p>Anonymous Class dapat menurunkan property dan method dari parents ataupun implement.</p>
                    <hr>
                    <div>
                    <?php
                    
                        class Parents {
                            private $classs = __CLASS__;
                            public function Asal () {
                                return "<h3>Halo, saya turunan dari class ".$this->classs."</h3>";
                            }
                        }
                        
                        interface ParentsInterface {
                            
                            public function AsalInterface ();
                            
                        }
                        
                        trait ParentsTrait {
                            private $classs = __TRAIT__;
                            public function AsalTrait () {
                                return "<h3>Halo, saya turunan dari trait ".$this->classs."</h3>";
                            }
                        }
                    
                        $objek02 = new class ()extends Parents implements ParentsInterface{
                            use ParentsTrait;
                            
                            public function AsalInterface (){
                                return "<h3>Halo, saya dari class ".__CLASS__."</h3>";
                            }
                        };
                        
                        echo $objek02->Asal();
                        echo $objek02->AsalTrait();
                        echo $objek02->AsalInterface();
                        
                    ?>
                        <br>
                        <embed src="../script/anonymous-inheretence.pdf" width=600px height="250">
                    </div>
                </fieldset>
                
                <fieldset id="Anonymous Class Costruct">
					<legend>Anonymous Class Construct</legend>
                    <p>Anonymous Class dapat memiliki method construct.</p>
                    <hr>
                    <div>
                        <?php
                        
                            $new01 = new class ([2,5]){
                                
                                public function __construct (array $angka1){
                                    $hasil = ($angka1[0] + $angka1[1]);
                                    echo "<h3>".$hasil."</h3>";
                                }
                                
                            };
                            
                        ?>
                        <br>
                        <embed src="../script/anonymous-construct.pdf" width=600px height="250">
                    </div>
                </fieldset>
                
                
                <fieldset id="Praktik Penggunan Anonymous Class">
					<legend>Praktik Penggunan Anonymous Class</legend>
                    <p>Pada prakteknya, anonymous class biasa dipakai sebagai nilai input untuk sebuah argumen</p>
                    <hr>
                    <div>
                        <?php
                        
                            function hitungJarak ( object $objk ){ // type hinting
                                $hasil = $objk -> kecepatan * $objk-> waktu;
                                return "<h3>$hasil</h3>";
                            }
                            
                            echo hitungJarak (new class () {
                                public $kecepatan = 20/5;
                                public $waktu = 5;
                            })
                            
                        ?>
                        <br>
                        <embed src="../script/anonymous-real.pdf" width=600px height="250">
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


