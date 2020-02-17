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
        <h3>Setter dan Getter</h3>
         <a href="index.php">Back</a><br>
         <p>Getter dan setter adalah sebutan untuk method yang mengisi (set) dan mengambil nilai (get) dari sebuah property, dimana dalam kasus
         nyata kita akan meng-set property sebagai private, dan karena property yang di set sebagai private tidak bisa diakses selain didalam
         class, maka untuk menampilkan dan merubah nilai property tersebut harus menggunakan cara lain, cara lain yang dikenal adalah methode Setter dan Getter.
         </p>
        <fieldset><legend>Penjelasan 1 </legend>
        <?php
        
		class Produk {
            private $barang,$stock;
            
            public function setStock ($jumlah = 0){
                $this->stock = $this->stock + $jumlah;
            }
            
            public function getStock (){
                return "Jumlah stock ".$this->stock;
            }
        }
            $object = new Produk;
            echo $object->getStock()."<br>";
            $object->setStock(20);
            echo $object->getStock()."<br>";
            
            
        ?>
        <a target="_blank" href= "script/bahasan1.19.pdf">Script</a>
        <hr>
        <ol>Lihat lah script diatas dan bacalah penjelasan dibawah ini.
            <li>pada baris 21 didalam class Proud, saya membuat property dan di set <i>Private</i>, dimana property tersebut tidak dapat diakses
            kecuali didalam class Produk.</li>
            <li>Kita bertujuan mengisi property <b>Barang</b> & <b>Stock</b> namun karena property diset sebagai private kita tidak bisa memberikan
            nilai ke property tersebut diluar class.</li>
            <li>Oleh sebeba itu di baris ke 26 saya membuat function yang di set <i>Public</i> dengan fungsi memberikan nilai ke propery stock.<br>
            <b>Fungsi setStock sekarang sudah berisi perintah memberikan nilai kedalam property yang diset <i>Private</i></b>.</li>
            <li>Sama kasusnya jika property atau methode yang diset sebagai private maka kita tidak dapat memanggil diluar class, begitu juga untuk menampilkan
            hasil dengan "echo", maka tidak akan bisa, karena untuk pemanggilan data melalui objek akan memanggil property tersebut dimana akan
            menghasilkan error sebab property yang dipanggil di set sebagai private. <b>cara lainnya adalah kita membuat sebuah methode yang kita set sebagai public
            dimana methode tersebut kita beri tugas untuk memanggil property yang diset private.</b></li>
            <li>Pada baris ke-30, saya membuat methide getStock() dimana fungsi tersebut mengambil nilai dari property stock.</li>
        </ol>
        </fieldset>
        <fieldset>
            <legend>
                Manfaat methode setter dan getter
            </legend>
            sebagia contoh lihat lah <a target="_blank" href= "script/bahasan1.20.pdf">Script</a>, scirp tersebut akan menghasilkan keluaran
            <b>
            <?php
                class Mother {
                    public $namaPanjang,$nilaiUjian;                    
                }
                
                $jane = new Mother;
                $jane->namaPanjang = "Jane Youth";
                $jane->nilaiUjian = "80";
                echo $jane->namaPanjang." Nilai -> ".$jane->nilaiUjian;
            ?></b>
            namun bagaimana jika ada seseorang yang menginput property <b><i>nilaiUjian</i></b> dengan string "Delapan Puluh", bukan integrer (80) ?, apakah bisa kita
            membuat validasi jika nilai yang dimasukan harus bertipe integrer bukan string di sebuah property ? jawabannya <b>tidak</b>,
            dengan methode setter dan getter inilah masalah tersebut dapat diatasi.
            <hr>
            <fieldset>sebagai contoh kasus diatas buatlah sebuah class dimana ada 2 property, nama dan nilaiujian, dengan syarat
            nama tidak boleh lebih dari 15 karakter dan nilai ujian harus bertipe itegerer.</fieldset><hr>
            <?php
                class hasilUjian {
                    private $nama,$nilai;
                    
                    public function setNama ($nama) {
                        $lenNama = strlen ($nama);
                        
                        if ($lenNama <= 15 ) {
                            $this->nama = $nama;
                        }
                        else {
                            echo "Error: Nama tidak boleh lebih dari 15 karakter";
                        }
                    }
                    
                    public function setNilai ($nilai = 0 ) {
                        
                        if (is_integer($nilai)){
                            $this->nilai = $nilai;
                        }
                        else {
                            echo "Error: Nilai harus berupa angka";
                        }
                    }
                        
                    public function getNama(){
                        return $this->nama;
                    }
                    
                    public function getNilai (){
                        return $this->nilai;
                    }
                }
                echo "<fieldset><legend>Ibrahim</legend>";
                    $ibrahim = new hasilUjian;
                    $ibrahim->setNama("Ibrahim Mahmudin");
                    echo "<br>";
                    $ibrahim->setNilai("Tujuh Puluh Delapan");
                    echo "<br>";
                    echo $ibrahim->getNama()."<br>";
                    echo $ibrahim->getNilai()."<br>";
                echo "</legend>";
                
                echo "<fieldset><legend>Musa</legend>";
                    $musa = new hasilUjian;
                    $musa->setNama("Musa");
                    echo "<br>";
                    $musa->setNilai(88);
                    echo "<br>";
                    echo $musa->getNama()."<br>";
                    echo $musa->getNilai()."<br>";
                echo "</legend>";
            ?>
        
        </fieldset>
        
        <br>
		<a target="_blank" href= "script/bahasan1.21.pdf">Script</a>

        </div>
    </div>
    
</body>
</html>

<?php
//Fatal error: Uncaught Error: Call to private Parents::__construct() from invalid context in C:\xampp\htdocs\oop\Visability.php:65 Stack trace: #0 {main} thrown in C:\xampp\htdocs\oop\Visability.php on line 65
//Fatal error: Uncaught Error: Call to private method Parents::hello() from context '' in C:\xampp\htdocs\oop\Visability.php:66 Stack trace: #0 {main} thrown in C:\xampp\htdocs\oop\Visability.php on line 66
?>