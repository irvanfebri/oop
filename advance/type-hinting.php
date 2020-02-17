<?php
    declare (strict_types=0);
    $bahasan = "Type Hinting";
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
				
				<fieldset id="Type Hinting">
					<legend>Type Hinting</legend>
                    <p>Type hinting adalah fitur PHP untuk membatasi jenis tipe data parameter yang bisa diterima oleh sebuah function atau method. </p>
                    <hr>
                    <div>
                        <?php
                            
                            function Average (array $value){
                                
                                $sum = 0;
                                
                                for ($i = 0 ; $i < count ($value) ; $i++){
                                    
                                    $sum += $value[$i]; 
                                    
                                }
                                
                                return ("<h3>".$sum/count($value)."</h3>");
                                
                            }
                            
                            function Ask (string $sentence){
                                return ($sentence);
                            }
                            
                            // echo Average (2,4,2,4);
                            // Fatal error: Uncaught TypeError: Argument 1 passed to Average() must be of the type array, int given,
                            echo Average ([2,4,5,2,1]);
                            
                            echo var_dump (Ask (123/2));
                            // Berubah menjadi string....
                        ?>
                        <br>
                        <embed src="../script/type-hinting.pdf" width=600px height="250">
                        <p>Sebaga contoh jika kita mengisi nilai parameter dengan selai array maka akan menghasilak error
                            <em class="error">Fatal error: Uncaught TypeError: Argument 1 passed to Average() must be of the type array, int given</em>
                            yang maksudnya adalah, argumen 1 dari function average harus bertipe array, namun yang diberikan bertipe integer.
                        </p>
                    </div>
                    
                    
                </fieldset>
                
                <fieldset id="Object Type Hinting">
					<legend>Pbject Type Hinting</legend>
                    <p>Type hinting juga bisa diaplikasikan pada object, dimana sebuah function hanya bisa diisi denga class yang dipilih. </p>
                    <hr>
                    <div>
                        <?php
                            
                            class Furniture {
                                public $merek, $tipe, $harga;
                                
                                public function __construct ($merek,$tipe,$harga){
                                    $this->merek = $merek;
                                    $this->tipe = $tipe;
                                    $this->harga = $harga;
                                }
                            }
                            
                            class Electronic {
                                public $merek, $tipe, $harga;
                                
                                public function __construct ($merek,$tipe,$harga){
                                    $this->merek = $merek;
                                    $this->tipe = $tipe;
                                    $this->harga = $harga;
                                }
                            }
                            
                            $obj = new Furniture ("Libalo","Ukir Jepara",280000);
                            $mesinCuci = new Electronic ("Mishima","8 Kg",1900000);
                            
                            function tampilkanLemari (Furniture $jepara){
                                return "<h3>Lemari kayu ini bermerek ".$jepara->merek." tipe hiasan ".$jepara->tipe." dengan harga ". $jepara->harga."</h3>";
                            }
                            
                            echo tampilkanLemari ($obj);
                            
                            // echo tampilkanLemari ($mesinCuci);
                            // Fatal error: Uncaught TypeError: Argument 1 passed to tampilkanLemari()
                            // must be an instance of Furniture, instance of Electronic given,
                            
                        ?>
                        <br>
                        <embed src="../script/type-hinting-objek.pdf" width=600px height="250">
                        
                    </div>
                    <p>
                        yang mendasar pada type hinting object adalah pada function di baris  ke 122. dimana kita membatasi data paramater
                        hanya untuk class Furniture saja. Jika kita isi dengan objek dari class lain, maka akan menghasilkan error.
                        
                    </p>
                    <p><em class="error">Fatal error: Uncaught TypeError: Argument 1 passed to tampilkanLemari() must be an instance of Furniture, instance of Electronic given,</em></p>
                </fieldset>
                
                <fieldset id="Object Type Hinting & Inheretence">
					<legend>Object Type Hinting & Inheretence</legend>
                    <p>Object type hinting bisa berlaku untuk class anak terhadap class parent saja.</p>
                    <hr>
                    <div>
                        <?php
                                class Parents {
                                    public $property;
                                    
                                    public function __construct ($parameter){
                                        $this->property = $parameter;
                                    }
                                    
                                    
                                }
                                
                                interface ParentInterface {
                                    function __construct ($parameter);
                                }
                                
                                trait ParentTrait {
                                    public $property;
                                    
                                    public function __construct ($parameter){
                                        $this->property = $parameter;
                                    }
                                }
                                
                                // =========================== //
                                
                                class Child extends Parents {
                            
                                }
                                
                                class Kid implements ParentInterface {
                                    public $property;
                                    
                                    public function __construct ($parameter){
                                        $this->property = $parameter;
                                    }
                                }
                                
                                class Litler  {
                                    use ParentTrait;
                                }
                                
                                
                                
                                function turunan (Parents $obj){
                                    return $obj->property;
                                }
                                
                                function turunan01 (ParentInterface $obj){
                                    return $obj->property;
                                }
                                
                                function turunan02 (ParentTrait $obj){
                                    return $obj->property;
                                }
                                
                                $object01 = new Child ("<h3>test</h3>");
                                $object02 = new Kid ("<h3>test</h3>");
                                $object03 = new Litler ("<h3>test</h3>");
                                
                                echo turunan ($object01);
                                echo turunan01 ($object02);
                                // echo turunan02 ($object03);
                                // Fatal error: Uncaught TypeError: Argument 1 passed to turunan02() must be an instance of ParentTrait,
                                // instance of Litler given,
                                
                                echo var_dump ($object01 instanceof Parents);
                                echo var_dump ($object02 instanceof ParentInterface);
                                echo var_dump ($object03 instanceof ParentsTrait);
                            ?>
                        <br>
                        <embed src="../script/type-hinting-inheretence.pdf" width=600px height="250">
                        
                    </div>
                    <ol>
                        <li>
                            pada baris ke 151 - 159 saya membuat sebuh class <em class="target">Parents </em>yang berisi property dan method construct
                            dan pada baris ke 175 - 177 saya membuat sebuah class <em class="target">Child</em> yang menurundari class <em class="target">Parents </em>.
                            dan pada baris ke 193 - 195 saya membuat sebuah function <em class="target">turunan</em> dengan parameter <em class="target">$obj</em> dan
                            denga type hintin (harus diisi dari class Parents). Pada baris ke 205 saya menginisialisasi varianbel <em class="target">$oobject01</em>
                            dengan class <em class="target">child</em>. <em class="Strong">dengan begitu type hinting pada object berpengaruh pada
                            class turunan. seperti abstart dan interface, <em class="error">khusus untuk trait tidak</em></em>
                        </li>
                    </ol>
                    <div class="kesimpulan">
                        Dari beberapa percobaan di atas kita bisa simpulkan bahwa type hinting bisa berlaku untuk object, parent object,
                        serta interface, dan untuk <em class="error">trait tidak bisa</em>
                    </div>
                </fieldset>
                
                <fieldset id="Strict Mode">
					<legend>Strict Mode</legend>
                        <p>Membatasi parameter denga type casting untuk tipe data int, var dll yang akan dikonversi langsung dengan fitur
                        tpe jugling dengan cara mensetting php kedalam strict mode.</p>
                        <p> <em class="target">declare(strict_types=1);</em> pada baris ke 1</p>
                        <hr>
                    <div>
                        <?php
                                
                        ?>
                        <br>
                        
                        
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


