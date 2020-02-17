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
        <h3>Methode Overriding</h3>
         <a href="index.php">Back</a><br>
         <p>Inheritance menawarkan fleksibilitas namun juga masalah tersendiri, untuk penjelasan dapat dilihat dibawah ini.</p>
		 <fieldset>
			<legend>Penjelasan</legend>
			<a target="_blank" href= "script/bahasan1.15.pdf">Script</a>
			<ol>Untuk penjelasan lihatlah petunjuk urut diabwah ini
				<li>Pertama bukalah link diatas ini.</li>
				<li>Saya membuat 2 buah class, <i>Class Mom dan Daughter</i>, dimana
				disetiap class saya membuat methode dengan nama kedua methode tersebut sama, <b>Function Hello()</b>.</li>
				<li>Pada baris ke <b>33</b> saya menginisialisasi variable dengan memanggil methode hello() dari class Daughter,
				dimana nama methode tersebut sama dengan methode dari class parent <i>Mom</i> / class Daughter adalah turunan dari class Mom. Pertanyaanya, methode manakah yang
				akan terpakai, methode dari class Mom (parent) atau class daughter (child).</li>
			
			<?php
				//Contoh I
				class Mom {
					public function Hello(){
						return "<b>Hello aku mom</b>";
					}
				}
				
				class Daughter extends Mom {
					public function Hello(){
						return "<b>Hello aku daughter turunan mom</b>";
					}
					
					public function Hello01(){
						return parent::Hello();
					}
				}
				$object = new Daughter;
				echo "<div class=guess href=#>". $object->Hello() ."</div>";
			?>
				<li>Bukalah gambar merah diatas, dan lihat hasilnya.</li>
				<li>Hasil tersebut terjadi karena, <b>function Hello()</b> yang berasal dari class Mom (Parent)
				 tertiban dengan class Daughter (Child/turunan) karena memiliki nama Methode yang sama,
				 sehingga methode <b>Hello() dari class Mom (parent)</b> tidak dapat diakses lagi dari class Daughter (child) meskipun
				 class Daughter (child) adalah turunan dari class Mom (parent).</li>
			</ol>
			<h3>Lalu bagaimana jika kita mau memanggil methode dari class parent jika sudah tertiban dengan methode child ?</h3>
			<p>Kita dapat menggunakan <i>Konstant khusus <b>parent.</b></i><br>
			konstant parent mirip seperti $this, tapi yang diakses adalah class parent. berbeda dengan $this yang menggunakan
			operator tanda panah (->), konstant parent menggunakan titik dua duakali (::), sehingga untuk mengakses class parent
			 dari class child yang memiliki nama methode yang sama perintahnya adalah <b>{ parent::Hello() }</b><BR>LIHATLAH
			 PENJELASAN DIBAWAH INI!!!.</p>
			
			<ol>
				<li>Pertama bukalah link ini -> <a target="_blank" href= "script/bahasan1.16.pdf">Script</a> </li>
				<li>Pada baris 29 - 39 tidak ada yang berbeda dengan contoh diatas, yaitu saya membuat dua buah class, class parent
				dan class child (Turunan) dimana class child dapat mengakses property atau methode dari class parent.</li>
				<li>Pada kasus diatas kita sudah tidak dapat mengakses methode Hello() class parent dari class child karena
				methode Hello() parent sudah tertiban dengan methode Hello() class child.</li>
				<li>bagaimanacaranya jika kita juga ingin mengakses methode Hello() yang berada didalam class parents?
				 Untuk mengakses methode Hello() class parent kita dapat menggunakan konstant <b>parent::</b> .</li>
				<li>Pada baris ke 41 - 43 saya membuat methode baru didalam class child, yang berisi perintah ambil segala perintah
				yang berada di methode dalam class parent. <b><i>Nama class saya buat berbeda hanya sebagai penghubung
				pemanggilan class parent yang tertiban.</i></b></li>
				<li>Pada baris ke 45 seperti diatas hanya menginisialisasi objek $object dengan class Daughter.</li>
				<li>Pada baris ke 46 dan 47 , saya ingin memanggil methode Hello()dari child dan methode Hello() dari parent
				yang memiliki nama yang sama.</li>
				berikut adalah hasilnya <br>
				<?php
				echo "<div>". $object->Hello() ."</div>";
				echo "<div>". $object->Hello01() ."</div>";
				?>
				<li>Dengan menggunakan konstant parent sekarang kita dapat memanggil methode dari class parent walaupun sudah tertiban
				dengan methode child.</li>
			</ol>
		 </fieldset>     
        <fieldset>
        <legend>Lalu ?</legend>
		<h3>Bukankah kita bisa mengtasi masalah tersebut dengan menghindari penggunaan nama methode yang sama antar
		class parent dan class child ?</h3>
		<p>Benar, namun ada dalam beberapa kondisi kita harus menggunakan nama methode yang sama yang berada didalam class
		parent dan child, sebagai contoh jika kita menggunakan methode khusus , yaitu methode constructor yang mana methode tersebut
		kita tidak dapat beri nama.</p>
		<ol>click link disamping unutk melihat penjelasannya -><a href= "constructoroverriding.php">Go___</a>
		</ol>
        
        </fieldset>
        </div>
    </div>
    
</body>
</html>	