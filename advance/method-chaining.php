<?php
    $bahasan = "Method Chaining";
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
				
				<fieldset id="Method Chaining">
					<legend>Method Chaining</legend>
                    <p>Method chaining adalah istilah untuk menyebut penulisan method yang bisa disambung atau dirangkai satu sama lain, karena itu disebut dengan chaining (rantai)</p>
                    <p>Untuk melakukan ini kita diharuskan <em class="strong">mengembalikan obejek itu sendiri ketika memanggil sebuah method</em>, sehingga rangkain selanjutnya
                    dalam memanggil method yang lain sama seperti penulisan objek lalu method nya <em class="target">$objek->method();</em>.</p>
                    <p>Untuk mengmbalikan objek itu sendiri dari method dengan mengmbalikan dengan return variable <em class="target">$this</em>.</p>
                    <hr>
                    <div>
                        <?php
                            class Furniture {
                                private $jenis;
                                private $stock;
                                private $harga;
                                
                                public function setJenis ($jenis) {
                                    $this->jenis = $jenis;
                                    return $this;
                                }
                                
                                public function setStock ($stock) {
                                    $this->stock = $stock;
                                    return $this;
                                }
                                
                                public function setHarga ($harga) {
                                    $this->harga = $harga;
                                    return $this;
                                }
                            }
                            
                            $lemari = new Furniture ();
                            
                            $lemari->setJenis("Vintage")->setStock (24) -> setHarga (180000);
                        
                            print_r ($lemari);
                        ?>
                        <br>
                        <embed src="../script/advance-chain.pdf" width=600px height="250">
                        <img src="../image/method-chain.png">
                    </div>
                    
                    
                </fieldset>
                
                <fieldset id="Latihan Mysqli">
					<legend>Latihan</legend>
                    <p><img src="../image/chain-latihan.png"></p>
                    <hr>
                    <div>
                            <?php
                                class DisplayDatabase {
                                    private $select,$from,$where;
                                    
                                    public function setSelect ($select){
                                        $this->select = "SELECT ".$select;
                                        return $this;
                                    }
                                    
                                    public function setTable ($table){
                                        $this->from = "FROM ".$table;
                                        return $this;
                                    }
                                    
                                    public function setCondition ($condition){
                                        $this->where = "WHERE ".$condition;
                                        return $this;
                                    }
                                    
                                    public function getQuery () {
                                        return "\"".$this->select." ".$this->from." ".$this->where."\"";
                                    }
                                }
                                
                                $siswa = new DisplayDatabase ();
                                $siswa->setSelect ("nama,nim")->setTable("siswa")->setCondition("nim = '1430.01.20'");
                                
                                echo "<h3>".$siswa->getQuery()."</h3>";
                            ?>
                        <br>
                        <embed src="../script/advance-chain-exe.pdf" width=600px height="250">
                        
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


