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
        <h3>Static Increment</h3>
        <a href="index.php">Back</a><br>
        <fieldset>
            <legend>Menggunakan Static (Increment jalan ?)</legend>
            
            <?php
                class produk {
                    public static $jumlahproduk = 0;
                    
                    public function __construct(){
                        self::$jumlahproduk++;
                        echo "Jumlah produk saat ini ".self::$jumlahproduk;
                    }
                }
                $produkA = new Produk();echo "<br>";
                $produkB = new Produk();echo "<br>";
                $produkC = new Produk();echo "<br>";
                $produkD = new Produk();echo "<br>";
            ?>
            
            <fieldset>
                <legend>Image - 1</legend>
                <img src="image/staticincrement.png" width=300px>
            </fieldset>
            <fieldset>
                <legend>Penjelasan</legend>
                <a target="_blank" href= "script/bahasan1.31.pdf">Script</a><br>
                <ol>
                    <li>Pada baris ke 21 kita membuat static property untuk jumlah produk dengan nilai awal 0.</li>
                    <li>pada baris ke 23 ~ 25 kita membuat methode __construct, yang mana pada baris ke 24 kita membuat fungsi increment untuk
                    variable jumlah produk $jumlahproduk++ atau dengan penulisan lain samadengan $jumlahproduk = $jumlahproduk + 1.</li>
                    <li>pada baris ke 25nya kita memerintahkan agar menampilkan string yang tertulis dan hasil dari property.</li>
                    <li>pada baris ke 28 - 31 kita menginisialisasi class produk kedalam beberapa object. maka hasilnya jumlah produk akan terus
                    meningkat sesuai dengan penambahan otomatis (Increment)</li>
                </ol>
                <blockquote><b>Kesimpulan</b> hal ini terjadi karena property $jumlahstok adalah milik class bukan milik dari object, sehingga
                setiap ada penambahan insisalisasi baru maka nilai dari property $jumlahstok akan merujuk ke property class yang mana sudah
                kita buat tugas increment di property $jumlahstok itu sendiri.</blockquote>
            </fieldset>
        </fieldset>
        <br>
        <hr>
        <br>
        <fieldset>
            <legend>Menggunakan $this (Increment jalan ?)</legend>
            
            <?php
                class produk02 {
                    public $jumlahproduk = 0;
                    
                    public function __construct(){
                        $this->jumlahproduk++;
                        echo "Jumlah produk saat ini ".$this->jumlahproduk;
                    }
                }
                $produkA = new Produk02();echo "<br>";
                $produkB = new Produk02();echo "<br>";
                $produkC = new Produk02();echo "<br>";
                $produkD = new Produk02();echo "<br>";
            ?>
            
            <fieldset>
                <legend>Image - 2</legend>
                <img src="image/staticincrementthis.png" width=300px>
            </fieldset>
            <fieldset>
                <legend>Penjelasan</legend>
                <a target="_blank" href= "script/bahasan1.32.pdf">Script</a><br>
                kode diatas tidak jauh berbeda dengan kode sebelumnya. hanya ada beberapa perubah kode dibeberapa baris.
                <ol>
                    <li>baris ke 62 property kita ubah menjadi property biasa.</li>
                    <li>begitu juga pemanggilan di baris ke 65 dan 66 menjadi $this->.</li>                
                </ol>
                hasil pemanggilan pada baris 69-72 menampilkan nilai dari $jumlahproduk tetap 1, dan tidak ada hasil dari fungsi increment
                yang sudah kita tulis pada baris ke 65.
                <blockquote><b>Kesimpulan</b> hal ini terjadi karena variable $jumlahproduk adalah property dari objek, bukan dari class, yang mana
                ketika kita melakukan inisialisasi ke objek lain, property masing2 objek yang berbeda yang akan digunakan, maka sebab itulah
                tidak ada fungsi increment yang terjadi, dengan katan lain property yang dijalankan property yang berbeda buka property yang sama
                yang dimiliki oleh class contoh pada kasus pertama. </blockquote>
            </fieldset>
        </fieldset>

        </div>
    </div>
    
</body>
</html>

<?php
//Fatal error: Uncaught Error: Call to private Parents::__construct() from invalid context in C:\xampp\htdocs\oop\Visability.php:65 Stack trace: #0 {main} thrown in C:\xampp\htdocs\oop\Visability.php on line 65
//Fatal error: Uncaught Error: Call to private method Parents::hello() from context '' in C:\xampp\htdocs\oop\Visability.php:66 Stack trace: #0 {main} thrown in C:\xampp\htdocs\oop\Visability.php on line 66
?>