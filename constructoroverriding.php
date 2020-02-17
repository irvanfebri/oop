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
        <h3>Constructor Overriding</h3>
         <a href="index.php">Back</a><br>
         <p>Benar, namun ada dalam beberapa kondisi kita harus menggunakan nama methode yang sama yang berada didalam class
		parent dan child, sebagai contoh jika kita menggunakan methode khusus , yaitu methode constructor yang mana methode tersebut
		kita tidak dapat beri nama.</p>
        <fieldset>
            <legend>Penjelasan</legend>
		<?php
			class Produk {
				public $barang,$merek,$stock=0;
				public function __construct ($barang,$merek,$stock){
					$this->barang = $barang;
					$this->merek = $merek;
					$this->stock = $stock;
				}
			}
			
			class Televisi extends Produk {
				public $ukuranLayar;
				public function __construct ($barang,$merek,$stock,$ukuranLayar){
					$this->ukuranLayar = $ukuranLayar;
					parent::__construct($barang,$merek,$stock);
				}
			}
			
			class MesinCuci extends Produk {
				public $jenisMesinCuci;
				public function __construct ($barang,$merek,$stock,$jenisMesinCuci){
					$this->jenisMesinCuci = $jenisMesinCuci;
					parent::__construct($barang,$merek,$stock);
				}
			}
			
			class Handphone extends Produk {
				public $Operationsystem;
				public function __construct ($barang,$merek,$stock,$Operationsysyem){
					$this->Operationsystem = $Operationsysyem;
					parent::__construct($barang,$merek,$stock);
				}
			}
			$object = new Produk("Produk","Merek","stock");
			echo "<pre>";
				print_r ($object);
			echo "</pre>";
			$object = new Televisi("Komputer","Dell","2","24 Inch");
			echo "<pre>";
				print_r ($object);
			echo "</pre>";
			$object = new MesinCuci("Mesin Cuci","Samsung","52","Top Input");
			echo "<pre>";
				print_r ($object);
			echo "</pre>";
			$object = new Handphone ("a","b","c","d");
			echo "<pre>";
				print_r ($object);
			echo "</pre>";
		?>

        </fieldset>
        <fieldset>
        <legend>Script</legend>
        <a target="_blank" href= "script/bahasan1.17.pdf">Script</a>
		<ol>
			<li>Pada baris ke 22-29 saya membuat class parent (Produk),dimana saya membuat methode __consctruct.</li>
			<li>pada baris ke 31-37 saya membuat class child (turunan) dengan nama class Televisi,
			dimana saya membuat methode __consctruct juga didalam class child.</li>
			<li>pada baris ke 35 saya memanggil methode __consctruct dari parent (pengambilan ini hanya bisa diambil jika
			antara class memiliki hubungan heriarki (Parent dan Child).</li>
			<li>Fokus pada baris 33 dan 34 nya, dari method __construct yang saya ambil dari parent, saya menambahkan nya
			didalam methode __construct child satu parameter ($ukuranLayar).</li>
			<li>Memanfaatkan penggunaan <i>(parents::)</i> sehingga kita tidak perlu lagi menulis ulang kode dan menghindari
			duplikat data.</li>
		</ol>
        </fieldset>
        </div>
    </div>
    
</body>
</html>	