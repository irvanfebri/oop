<?php
    $bahasan = "Interface";
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
				
				<fieldset id="pengertian-interface">
					<legend>Interface</legend>
                    <p>Inter face adalah mekanisme didalam OOP PHP untuk membuat perjanjian implementasi khusus. (Diwajibkan ada implementasi)</p>
                    <p>Setiap class yang menggunakan interface akan <em class="strong">dipaksa membuat ulang method tersebut</em>.</p>
                    <ol>
                        Perbedaan dengan abstract
                        <li>Interface hanya bisa berisi method signature dan constant saja, jika diisi selai itu akan menghasilkan<br>
                        <em class="error">Fatal error: Class_name contains 1 abstract method
                        and must therefore be declared abstract or implement the remaining methods (Class_Name::Method_Name)</em>.</li>
                        <li>Interface tidak ada di struktur hierarki sehingga tidak ada hubungan child parent.</li>
                        <li>Menggunakan keyword <em class="target">Implement    </em></li>
                    </ol>
                    
                    <div class="kesimpulan">Jadi antara abstract dan interface yang mana dipilih ? kita bisa pilih tergantung dengan kondisi, jika method signature
                    tersebut sering dipakai, maka penggunaan abstract lebih diutamakan, sedangkan jika method signature jarang dipakai, maka penggunaa
                    interface pilihan utama.</div>
					<embed src="../script/interface.pdf" width=600px height="250">
                        
                    <div>
                        <?php
                            interface Jaminan {
                                public const UMUR = 1/2;
                                
                                public function garansi ($use_full_life);
                            }
                            
                            class AirCondition implements Jaminan {
                                public function garansi ($use_full_life){
                                    return "<h3> Garansi ".$this::UMUR * $use_full_life." tahun</h3>";
                                }
                            }
                            
                            $hanoy = new AirCondition ();
                            
                            echo $hanoy->garansi(2);
                        ?>
                    </div>
				</fieldset>
                
                <fieldset id="interface-visability">
					<legend>interface-visability</legend>
                    <p>Interface hanya bisa di setting sebagai <em class="target">Public class</em>. Jika interface di setting sebagai
                    <em class="target">protected atau private</em> makan akan menghasilkan error. <br>
                    <em class="error">Fatal error: Access type for interface method Class_Name::Method_Name() must be omitted</em></p>
					<embed src="../script/interface-visability.pdf" width=600px height="250">
                        
                    <div>
                        <?php
                            interface Eksport {
                                function hargaEksport ();
                            }
                            // Fatal error: Access type for interface method
                            // Eksport::hargaEksport() must be omitted
                        ?>
                    </div>
				</fieldset>
                
                <fieldset id="interface-inheretance">
					<legend>interface-inheretance</legend>
                    <p>Interface dapat diturunkan kepada interface lain, dimana method signature yang ada diparent, juga harus diimplementasikan
                    terhadap class yang menggunakan interface yang ada child dari parent. </p>
					<embed src="../script/interface-inheretence.pdf" width=600px height="250">
                        
                    <div>
                        <?php
                            interface DasarSatu {
                                public function methodSatu ();
                            }
                            
                            interface DasarDua extends DasarSatu {
                                public function methodDua ();
                            }
                            
                            interface DasarTiga extends DasarDua {
                                public function methodTiga ();
                            }
                            
                            class Pelaksana implements DasarDua,DasarTiga {
                                
                                public function methodSatu(){
                                    return "Saya Satu";
                                }
                                
                                public function methodDua(){
                                    return "Saya Dua";
                                }
                                
                                public function methodTiga(){
                                    return "Saya Tiga";
                                }   
                            }
                            
                            $kementrian_pembelian = new Pelaksana(); 
                            echo $kementrian_pembelian->methodSatu();
                            
                        ?>
                    </div>
                    <p>Pada baris ke 125 saya mencoba mengimplementasi interface <em class="target">DasarDua</em> & <em class="target">DasarTiga</em></p>
                    <p>Namun pada baris ke 127 - 129, kita harus mengimplementasikan <em class="target">methodSatu()</em> yang mana itu adalah
                    implementasi dari method signature yang ada di interface <em class="target">DasarSatu</em> yg tidak kita implements-kan di baris 125</p>
                    <p>Hal tersebut terjadi karena kita membuat <em class="strong">inheretence untuk setiap interface pada baris ke 113-123</em></p>
                </fieldset>
        </div>
    </div>
    
</body>
</html>

<?php
//Fatal error: Uncaught Error: Call to private Parents::__construct() from invalid context in C:\xampp\htdocs\oop\Visability.php:65 Stack trace: #0 {main} thrown in C:\xampp\htdocs\oop\Visability.php on line 65
//Fatal error: Uncaught Error: Call to private method Parents::hello() from context '' in C:\xampp\htdocs\oop\Visability.php:66 Stack trace: #0 {main} thrown in C:\xampp\htdocs\oop\Visability.php on line 66
?>