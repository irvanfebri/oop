<?php
    $bahasan = "Magic Method - get";
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
				
				<fieldset id="Get">
					<legend>Magic method get</legend>
                    <p>Magic method <em class="target">__get</em> akan dijalankan ketika kita memanggil property yg tidak ada dalam sebuah object</p>
                    <p>Method <em class="target">__get</em> membutuhkan satu argumen wajib, yaitu nama property yg ingin dipanggil.</p>
                    
                    <div class="kesimpulan"></div>
                    <div>
                        <?php
                            class hello {
                                
                                public $great = "<h3>Assalamualaikum</h3>";
                                
                                public function __get ($prop){
                                    echo "<h3>".$prop." tidak tersedia didalam class ".__CLASS__."</h3>";
                                }                          
                            }
                            
                            $say = new hello ();
                            echo $say->salam;
                            
                            echo $say->great;
                        ?>
                        <legend>True</legend>
                        <embed src="../script/magic-method-get.pdf" width=600px height="250">
                    </div>
                    <ol>
                        <li>pada baris ke 68 saya memanggil property <em class="target">salam</em> dari object <em class="target">$say</em>.</li>
                        <li>Didalam class <em class="target">hello</em> pada baris ke 58 - 64 tidak ada property dengan nama <em class="target">salam</em>.</li>
                        <li>Maka secara automatis PHP akan mencari method <em class="target">__get</em> sebelum mengeluarkan error.</li>
                        <li>Namun ketika memanggil property <em class="target">great</em> PHP langsung mengeluarkan nilai dari property tersebut.</li>
                    </ol>
                </fieldset>
                
                <fieldset id="Getter otomatis">
					<legend>Getter Otomatis</legend>
                    <p>Dengan menggunakan magic method ini, kita bisa membuat fungsi getter otomatis.</p>
                    <p>Berikut akan saya berikan contoh getter manual dengan getter menggunakan magic method <em class="target">_get</em>.</p>
                    <div>
                        <?php
                            class Produk {
                                private $merek = "hiaho";
                                
                                public function __get ($nameProp){
                                    if ($nameProp == "merek"){
                                        return "<h3> magic method __get -> ".strtoupper ($this->merek) ."</h3>";
                                    }
                                    else {
                                        return "<h3>$nameProp tidak tersedia</h3>";
                                    }
                                }
                                
                                public function getJenis () {
                                    return "<h3> getter manual -> ".strtoupper ($this->merek) ."</h3>";
                                }
                            }
                            
                            $mesinCuci = new Produk ();
                            echo $mesinCuci->getJenis();
                            echo $mesinCuci->merek;
                            echo $mesinCuci->jenis;
                        ?>
                        <legend>True</legend>
                        <embed src="../script/magic-method-get-1.pdf" width=600px height="250">
                    </div>
                    
                    <div class="kesimpulan">
                        Di balik keunggulannya, membuat getter dengan <em class="target">__get()</em> juga memiliki kelemahan.
                        Pertama, penulisan kode program menjadi agak susah dibaca. Kedua, PHP butuh waktu pemrosesan yang sedikit lebih lama
                            pada saat memproses <em class="target">__get()</em> dibandingkan jika ditulis menjadi method terpisah. Dan ketiga, mungkin tidak semua orang di
                        tim kita paham cara kerja dari magic method ini, akibatnya butuh waktu untuk menjelaskan seperti apa cara kerja dari <em class="target">__get()</em>. 
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


