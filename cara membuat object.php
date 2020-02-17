<!DOCTYPE html>
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
            
    <h3>Property and Method</h3>
    <a href="index.php">Back</a>
	<p>Property dan method adalah sebutan lain dari variable dan function yang berada didalam class. Didalam penulisan
    Property dan Method ini harus diawali dengan <i>Access Modifier</i>, dimana berfungsi sebagai hak akses dari Property dan Method.</p>.
    <p>Berikut contoh penulisan Object, dimana Property dan Method dimasukan kedalam class.</p>
    
    <fieldset>
        <legend>Pembuataan Object Materi</legend>
        <?php
        
        
        class Materi {
            public $Bahasan = "Prinsip dasar Islam";
            public $WaktuBelajar = "2 Hari";
            public function TakeMapel () {
                return "InsyaAllah kelas akan dimulai pada bulan depan .........";
            }
        }
        $pelajaran1 = new Materi();
        
        
        echo "<img width=500px src=image/bahasan1.1.png>"." | <a target=_blank href= script/bahasan1.1.pdf>Script</a>";
        ?><hr>
        <p>Pada baris terakhir saya menginisialisasi kan class Materi kedalam variable $pelajaran.</p>
        <address>Inisialisasi sederhananya memberikan nilai kesuatu variable, arti lengkapnya<b>Inisialisasi (Initialization)
        adalah tugas pemberian nilai awal yang dilakukan saat deklarasi variabel atau obyek.</b>
        Inisialisasi sangat disarankan untuk dilakukan setiap mendirikan sebuah deklarasi.</address>
    </fieldset>
    
    <fieldset>
        <legend>Mengakses Property dan Method</legend>        
        <?php
        echo "<fieldset>";
        echo "<legend>Hasil</legend>";
        echo $pelajaran1 ->Bahasan; echo "</br>";
        echo $pelajaran1 ->WaktuBelajar; echo "</br>";
        echo $pelajaran1 ->TakeMapel (); echo "</br>";
        echo "</fieldset>";
        ?>
        <hr>
        <img width="300px" src="image/bahasan1.2.png"> | <a target="_blank" href= "script/bahasan1.2.pdf">Script</a>
        <hr>
        <p>Dalam pemprograman berbasis object, yang kita akan akses adalah objectnya, bukan class nya. Sehingga
        untuk mengakses property dan method dari contoh diatas kita menggunakan variable $pelajaran lalu tanda panah (->) dan Property atau Method
        yang ingin diakses.</p>
        
    </fieldset>
    
    <fieldset>
        <legend>Mengisi nilai dalam Property</legend>        
        <?php
        
        
        $pelajaran2 = new Materi();
        $pelajaran2 ->Bahasan = "Aqidah Ahlu Sunnah Wal Jamaah";
        $pelajaran2 ->WaktuBelajar = "2 Minggu";
        
        
        
        echo "<fieldset>";
        echo "<legend>Hasil</legend>";
        echo $pelajaran2->Bahasan; echo "</br>";
        echo $pelajaran2->WaktuBelajar; echo "</br>";
        echo $pelajaran2->TakeMapel(); echo "</br>";
        echo "</fieldset>";
        ?>
        <hr>
        <img width="300px" src="image/bahasan1.3.png"> | <a target="_blank" href= "script/bahasan1.3.pdf">Script</a>
        <hr>
        <p>Memasukan nilai kedalam object tidak jauh berbeda dengan memasukan nilai kedalam variable.</p>
        
    </fieldset>
        </div>
    </div>
</body>
</html>	