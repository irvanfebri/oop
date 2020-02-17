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
            <h3>Constructor dan Destructor</h3>
             <a href="index.php">Back</a>
            <p>Constructor adalah method khusus yang otomatis dijalankan ketika sebuah object dibuat (Inisialisasi dengan perintah new)
            <b>$object = new function</b>.</p>
            <p>Dengan constructor, kita bisa membuat "persiapan" untuk sebuah object, seperti mengisi nilai awal atau membuka koneksi
            ke database. Sebaliknya, destructor bisa dipakai untuk proses "pembersihan" setelah object dihapus seperti menutup koneksi ke
            database, tujuannya agar ruang memory bisa kembali kosong.</p>
            <fieldset>
                <legend>Contoh tanpa fungsi constructor.</legend>
                    <?php
                        class ProdukA1 {
                            public $Barang,$Merek,$Jumlah;
                        }
                        $object01 = new ProdukA1;
                        $object01->Barang="Laptop";
                        $object01->Merek="Banana";
                        $object01->Jumlah="29";
                        echo "<pre>";
                        print_r ($object01);
                        echo "</pre>";
                    ?>
                <a target="_blank" href= "script/bahasan1.12.pdf">Script</a>
                <ul>Lihatlah pada script diatas bersamaan dengan penjelasan dibawah ini.
                    <li>Pada baris ke 2 - 3, sepertibiasa kita mendeklarasikan Class ProdukA1 dan propertynya.</li>
                    <li><b>"Point Berbeda"</b> Pada baris ke 6, kita menginisialisasikan Object ProdukA1 ke variable $object01, namun pada baris ini
                    tidak ada method kusus yang dijalankan, hanya sebatas proses Inisialisasi saja.</li>
                    <li>Pada baris ke 7 - 9, baru kita memasukan nilai kedalam property ProdukA1, <b>yang mana proses ini jika menggunakan
                    magic method yang akan kita bahas nanti akan berjalan pada saat proses Inisialisasi diawal (menggunakan perintah new)</b></li>
                </ul>
                
            </fieldset>
            <fieldset>
                <legend>Fungsi Constructor</legend>
                <?php
                    class ProdukB1 {
                        public $Barang,$Merek,$Stock;        
                        
                        public function __construct ($a,$b,$c){
                            $this->Barang = $a;
                            $this->Merek = $b;
                            $this->Stock = $c;
                        }
                    }
                    $object02 = new ProdukB1("Mesin Cuci","Samsule",5);
                    echo "<pre>";
                    print_r ($object01);
                    echo "</pre>";
                ?>
                <a target="_blank" href= "script/bahasan1.13.pdf">Script</a>
                <ul>Lihatlah pada script diatas bersamaan dengan penjelasan dibawah ini.
                    <li>Pada baris ke 2 - 3, sepertibiasa kita mendeklarasikan Class ProdukB1 dan propertynya.</li>
                    <li><b>"Point Berbeda"</b> Pada baris ke 5, kita mendefinisikan methode menggunakan magic method <b>[__construct(arg1,arg,2,arg3...
                    )],dimana magic methode ini akan langsung berjalan pada saat dinisialisasikan pada baris 11.</b> .</li>
                    <li>Pada baris ke 11, kita menginisialisasikan class ProdukB1 ke object.</b></li>
                    <li>Setelah baris ke 11 kita sudah tidak perlu memberikan nilai lagi setiap propherty, karena sudah otomatis di
                    masukan/dijalankan pada baris ke 11.</li>
                    <li>seperti pada penjelas diatas <i>kita bisa membuat "persiapan" untuk sebuah object, seperti mengisi nilai awal</i>, dimana
                    kita tidak perlu mengisi lagi setipa property, kita hanya memasukan di argumen dari magic method __construct, dan sudah langsung
                    terisis sesuai dengan perintah yang ada di magic __construct tersebut (Perintah memberikan nilai pada tiap Property).</li>
                </ul>
            </fieldset>
        </div>
    </div>
</body>
</html>	