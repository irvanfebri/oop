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
        <h3>Setter, Getter, dan Constructor</h3>
         <a href="index.php">Back</a><br>
         
        <fieldset><legend>Fungsi Setter dan Getter dengan Constructor</legend>
        <p>Metode setter dan getter juga dapat menggunakan constructor, kelebih menambahkankan metode constructor adalah
		saat inisialisasi class sudah langsung menjalankan proses setter, sehingga tidak perlu lagi memanggil methode setter.
		sebagai contoh lihatlah <a target="_blank" href= "script/bahasan1.22.pdf">Script Satu</a>
		, Script berikut adalah perubahan sedikit dari
		<a target="_blank" href= "script/bahasan1.21.pdf">Script Dua</a>.</p>
			<fieldset>
				<?php
					class hasilUjian {
						private $nama,$nilai;
						
						private function setNama ($nama) {
							$lenNama = strlen ($nama);
							
							if ($lenNama <= 15 ) {
								$this->nama = $nama;
							}
							else {
								echo "Error: Nama tidak boleh lebih dari 15 karakter";
							}
						}
						
						private function setNilai ($nilai = 0 ) {
							
							if (is_integer($nilai)){
								$this->nilai = $nilai;
							}
							else {
								echo "Error: Nilai harus berupa angka";
							}
						}
						
						public function __construct ($nama,$nilai){
							$this->setNama($nama);
							$this->setNilai($nilai);
						}
						public function getNama(){
							return $this->nama;
						}
						
						public function getNilai (){
							return $this->nilai;
						}
					}
					echo "<legend>Hasil</legend>";
						$ibrahim = new hasilUjian("musa",88);
						echo "Nama : ".$ibrahim->getNama()."<br>";
						echo "Nik : ".$ibrahim->getNilai()."<br>";
				?>
			</fieldset>
		<ol> Baca dengan perlahan dan awali dengan bismillah.
			<li>Pada baris 23: Kita membuat class hasilujian.</li>
			<li>Pada baris 24: kita membuat dua buah property dan keduanya diset private.</li>
			<li>Pada baris ke 26 - 35 dan 37 - 45 : kita membuat methode setter, dimana methode tersebut berguna untuk
			mengisi nilai kedalam property yang telah kita buat pada baris ke 24. sebelum melakukan pengisian nilai, methode ini
			melakukan validasi dahulu, jika benar maka isi nilai yang diinput kedalam property.<b> berbeda dengan
			script contoh setter getter tanpa constructor, methode ini di set private.</b></li>
			<li>Pada baris ke 51 - 53 dan 55 - 57 : tidak ada yang berbeda, kita membuat methode getter dimana memanggil
			dari property yang telah kita buat.</li>
			<li><b>Pada baris ke 47-49 lah yang berbeda, dimana kita membuat function __construct yang fungsinya memberikan
			nilai ke paramater pada methode setNama() dan setNik()</b>.</li>
			<li>karena memanfaat methode __construct maka kita tidak perlu lagi memanggil methode setter, selain karena kita
			set private namun <b>tugas tersebut sudah dikerjakan pada saat inisialisasi dibaris ke 60. ->Construct.</b></li>
		</ol>
        </fieldset>
        
        <br>

        </div>
    </div>
    
</body>
</html>