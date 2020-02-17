<!DOCTYPE html>
<html>
<head>
	<meta Charset="utf-8">
	<title>Class and Object</title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="mystyle.css">
</head>
<body>
    <div class="container">
        <div class="item">
        <h3>Final Keyword</h3>
         <a href="index.php">Back</a><br>
        <?php
		/*
            class Parents {
				public $namaDepan,$namaBelakang,$jenisKelamin;
				
				public function __construct($namaDepan,$namaBelakang,$jenisKelamin){
					$this->namaDepan = $namaDepan;
					$this->namaBelakang = $namaBelakang;
					$this->jenisKelamin = $jenisKelamin;
				}
				
				public function Perkenalan() {
					return "Hello ".$this->namaDepan;
				}
			}
			
			class Son extends Parents {
				
			}
			
			
			$object = new Parents ("Jhon","Mirana","Laki");
			echo "<br>";
			echo $object->namaDepan;
			echo "<br>";
			echo $object->Perkenalan();
			echo "<br>";
			$object2 = new Son("Mirana","Emily","Wanita");
			echo "<br>";
			echo $object2->Perkenalan();
		*/
		
		//Private akses ========================= 
		/*
		class Parents {
			private $nama,$umur,$jenisKelamin;
			
			public function __construct ($nama,$umur,$jenisKelamin){
				$this->nama = $nama;
				$this->umur = $umur;
				$this->jenisKelamin = $jenisKelamin;
			}
			
			protected function Hello () {
				return "Heloo my name ".$this->nama;
			}
			
		}
		
		class Sons Extends Parents {
			public function Hello01 (){
				return $this->Hello()." ini dari turunan Parents";
			}
		}
		
		$object = new Parents("farras","23","laki");
		//echo $object-> hello();
		echo "<br>";
		$object01 = new Sons("farras","23","laki");
		echo $object01->Hello01();
		*/
		
		
		//======Protected Akses======//
		class Parenst {
			private $nama,$pekerjaan,$tempatTinggal;
			
			public function __construct ($nama,$pekerjaan,$tempatTinggal){
			$this->nama = $nama;
			$this->tempatTinggal = $tempatTinggal;
			$this->pekerjaan = $pekerjaan;
			}
		}
		
		class Sons extends Parenst{
			public function HelloSons (){
				return "Hello ".$this->nama;
			}
			
		}
	
		
        ?>
        
        
        <br>
		<a target="_blank" href= "script/bahasan1.19.pdf">Script</a>

        </div>
    </div>
    
</body>
</html>

<?php
//Fatal error: Uncaught Error: Call to private Parents::__construct() from invalid context in C:\xampp\htdocs\oop\Visability.php:65 Stack trace: #0 {main} thrown in C:\xampp\htdocs\oop\Visability.php on line 65
//Fatal error: Uncaught Error: Call to private method Parents::hello() from context '' in C:\xampp\htdocs\oop\Visability.php:66 Stack trace: #0 {main} thrown in C:\xampp\htdocs\oop\Visability.php on line 66
?>