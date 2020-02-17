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
            <fieldset>
                <legend>
                    Contoh Soal (Kasus)
                </legend>
                <p>Buatlah script dengan kasus kita memiliki satu barang dengan jumlah tertentu, dalam proses sehari-hari ada
                pengeluaran barang dan pemasukan barang dengan ketentuan, jika barang sampai dengan angka 0 maka barang tersebut
                tidak dapat berkurang lagi dan muncul pesan error bahwa barang sudah habis, dan jika barang sudah mencapai angka
                100 unit maka barang tidak dapat ditambah lagi dan munculkan pesan error bahwa gudang sudah penuh dan tidak
                dapat menambah barang lagi ?</p>
                <ol> Arahan
                    <li>Stock pertama 45 Unit</li> <!--*45*-->
                    <li>Lakukan pembelian 52 Unit</li> <!--*97*-->
                    <li>Lakukan penjualan 80 Unit</li> <!--*17*-->
                    <li>Lakukan penjulana 20 Unit</li> <!--*17*  error -->
                    <li>Lakukan pembelian 43 Unit</li> <!--*60*-->
                    <li>Lakukan pembelian 42 Unit</li> <!--*60*  error -->
                    <li>Lakukan pembelian 40 Unit</li> <!--*100*-->
                    <li>Lakuaan Penjualan 78 Unit</li> <!--*22*-->
                </ol>
            </fieldset>
            
            <fieldset>
                <legend>Jawaban</legend>
                <?php
                class Produk {
                    public $barang,$merek,$stock;
                    
                    public function JualProduk ($jumlah){
                        $sisa = $this->stock - $jumlah;
                        
                        if ($sisa < 0 ){
                            $pesan = "Maaf barang tidak mencukupi";
                        }
                        else {
                            $this->stock = $this->stock - $jumlah;
                            $pesan = $this->barang." merek ".$this->merek." terjual ".$jumlah." unit";
                        }
                        return $pesan;
                    }
                    
                    public function BeliProduk ($jumlah){
                        $sisa = $this->stock + $jumlah;
                        
                         if ($sisa > 100 ){
                            $pesan = "Maaf gudang tidak mencukupi";
                        }
                        else {
                            $this->stock = $this->stock + $jumlah;
                            $pesan = $this->barang." merek ".$this->merek." bertambah ".$jumlah." unit";
                        }
                        return $pesan;
                    }
                    
                    public function SisaProduk (){
                        return "sisa stock <b>".$this->stock."</b>";
                    }
                }
                //Inisialisasi
                $object = new Produk;
                $object->barang = "Laptop";
                $object->merek = "Manggo";
                $object->stock = 45;
                
                echo $object->SisaProduk()."<br>";
                echo $object->BeliProduk(52)."<br>";
                echo $object->SisaProduk()."<br>";
                echo $object->JualProduk(80)."<br>";
                echo $object->SisaProduk()."<br>";
                echo $object->JualProduk(20)."<br>";
                echo $object->SisaProduk()."<br>";
                echo $object->BeliProduk(43)."<br>";
                echo $object->SisaProduk()."<br>";
                echo $object->BeliProduk(42)."<br>";
                echo $object->SisaProduk()."<br>";
                echo $object->BeliProduk(40)."<br>";
                echo $object->SisaProduk()."<br>";
                echo $object->JualProduk(78)."<br>";
                echo $object->SisaProduk()."<br>";
                
                echo "<hr>";
                $object = new Produk;
                $object->barang = "Mesin Cuci";
                $object->merek = "Samkupu";
                $object->stock = 100;
                
                echo $object->SisaProduk()."<br>";
                echo $object->BeliProduk(52)."<br>";
                echo $object->SisaProduk()."<br>";
                echo $object->JualProduk(80)."<br>";
                echo $object->SisaProduk()."<br>";
                echo $object->JualProduk(20)."<br>";
                echo $object->SisaProduk()."<br>";
                echo $object->BeliProduk(43)."<br>";
                echo $object->SisaProduk()."<br>";
                echo $object->BeliProduk(42)."<br>";
                echo $object->SisaProduk()."<br>";
                echo $object->BeliProduk(40)."<br>";
                echo $object->SisaProduk()."<br>";
                echo $object->JualProduk(78)."<br>";
                echo $object->SisaProduk()."<br>";
                
                ?>
            </fieldset>
            <fieldset>
                <legend>Penjelasan</legend>
                <p>Bukalah script berikut dan bacalah secara seksama penjelasan dibawah ini.</p>
                <a target="_blank" href= "script/bahasan1.10.pdf">Script</a>
                <ul> Keterangan
                    <li>Pada baris ke 2, kita mendeklarasikan class Produk.</li>
                    <li>Pada baris ke 3, kita mendeklarasikan property, ada 3 buah property yang dideklarasi, diantaranya;
                    $barang, $merek dan $stock.</li>
                    <li>Pada baris ke 5, 18 dan 31, kita membuat method dimana pada baris ke 5 dan 18 didalam method tersebut
                    kita buat parameter <i><b>($jumlah)</b></i> yang berguna untuk perintah yang ada didalam method pada baris
                    ke 5 dan 18.</li>
                    <li>Pada baris ke 36 - 39, kita menginisialisasi property dan methode dari sebuah object, yang tujuannya
                    <b>Jika kita ingin menambahkan item baru, maka kita tidak perlu menulis ulang baris kode yang sudah ada, kita
                    hanya tinggal merubah property dan methode nya saja.</b></li>
                    <li>pada baris ke 41 - 55, kita menulis beberapa baris program untuk memanggil object sesuai dengan arahan
                    soal diatas.</li>
                </ul>
            </fieldset>
	
        </div>
    </div>
</body>
</html>	