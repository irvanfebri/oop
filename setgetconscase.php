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
        
        <fieldset>
            <legend>
                
            </legend>
            <p>Kali ini saya menantang anda untuk memodifikasi class Produk dengan skenario berikut:
            <br>
            Class Produk akan memiliki 2 property, yakni $sku dan $stok yang di set sebagai private.
            Buatlah method setter dan getter untuk kedua property ini dengan aturan sebagai berikut:
            <li>Property $sku hanya bisa diisi kode barang dalam format "AAA000",
            dimana 3 karakter awal berupa alphabet dalam huruf besar, kemudian diikuti oleh 3 karakter
            angka 0 – 9. Jika format yang diinput tidak sesuai, tampilkan pesan error.</li>
            <li>Property $stok hanya bisa menerima angka integer dan harus positif.
            Jika diinput integer negatif atau 0, tampilkan pesan error.  Kedua setter di set seb
            agai private dan dijalankan dari constructor.  Getter untuk $sku dan $stok tidak perlu pemrosesan,
            cukup kembalikan nilai saja. Berikut contoh instansiasi class Produk dan hasil yang diharapkan:</li>
            </p>
        <fieldset>
            
            <fieldset>
                <legend>Penjelasan dari script</legend>
                <a target="_blank" href= "script/bahasan1.23.pdf">Script Dua</a>
                <ol>
                    Bukalah link diatas dan perhatikan script dan penjelasan berikut.
                    <li>baris 36 : membuat class produk</li>
                    <li>baris 37 : mendefinisikan property sku dan stok</li>
                    <li>baris 39~47 dan 49~55 : membuat methode setter dan diset private yang berfungsi sebagai proses validasi</li>
                    <li>baris 57~60 : membuat methode __construct yang diset public,<b> berguna untuk memasukan nilai kedalam
                    methode setter pada saat class tersebut pertama kali di inisialisasi pada baris ke 69~70</b>.</li>
                    <li>baris 62~64 65~67 : membuat methode getter dengan hanya mengembalikan nilai property.</li>
                    <li>baris 69~70 : hasil tidak menghasilkan error karena lulus proses validasi.</li>
                    <li>baris 72~73 : hasil menatakan salah.</li>
                    <li>baris 75~76 : tidak tertampil karena script dibawah baris 72~73 di matikan kare die()</li>
                </ol>
            </fieldset>
            <?php
                class produk {
                    private $sku,$stok;
                    
                    private function setSku ($sku){
                        $valSku = preg_match ('/[A-Z]{3}[0-9]{3}/',$sku);
                        
                        if ($valSku){
                            $this->sku = $sku;
                        } else {
                            die ('Sesuaikan denga format SKU yang berlaku');
                        }
                    }
                    
                    private function setStok ($stok){
                        if (is_integer($stok) and $stok >0 ){
                            $this->stok = $stok;
                        } else {
                            die ('Stok masukan dengan nilai');
                        }
                    }
                    
                    public function __construct ($sku,$stok){
                        $this->setSku($sku);
                        $this->setStok ($stok);
                    }
                    
                    public function getSku (){
                        return $this->sku;
                    }
                    public function getStok (){
                        return $this->stok;
                    }
                }
                $produk01 = new produk ('AAA231',4);
                echo 'Stock produk '.$produk01->getSku()." sebanyak ".$produk01->getStok()."<br>";
                
                $produk01 = new produk ('AAA23s1',4); //salah sku
                echo 'Stock produk '.$produk01->getSku()." sebanyak ".$produk01->getStok()."<br>";
                
                $produk02 = new Produk('LNV023',100);
                echo "Stok produk ".$produk02->getSku().": ".$produk02->getStok()." buah";
            ?>
            
        </fieldset>
        <a target="_blank" href= "script/bahasan1.21.pdf">Script Dua</a>
        </fieldset>
        
        </div>
    </div>
    
</body>
</html>