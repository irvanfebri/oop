                <?php
            
                class Mother {
                    public $nama="Muhammad Farras Ma'ruf";
                    public $umur=23;
                    
                    public function Biodata () {
                        return "Nama saya ".$this->nama." dan umur saya ".$this->umur." tahun.";
                    }
                }
                
                class Daughter {
                    public $tempat = "Bogor";
                    
                    public function DataDiri () {
                        return "Nama saya ".$this->nama." dan umur saya ".$this->umur." tahun, saya lahir
                        di ".$this->tempat;
                    }
                }
                
                class Son extends Mother {
                    public $hobi = "Naik gunung";
                    
                    public function Cerita () {
                        return $this->Biodata()." dan hobi saya ".$this->hobi;
                    }
                }
                
                
                $daughter = new Daughter; // menginisialisasi
                $son = new Son; // menginisialisasi
                
                
                
            ?>
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
        <h3>Inheritance</h3>
         <a href="index.php">Back</a>
        <p>Inheritance adalah sebuah konsep turunan, dimana didalam konsep tersebut akan terbagi class secara umum menjadi 2 jenis,
        <em>Class Mother</em> dan <em>Class Child.</em> Mudah memahaminya, seluruh property atau method yang berada di dalam <em>
            Class Mother</em> dapat diakses didalam <em>Class Child.</em></p>
        <ol>
            <li><p><img src="image/inheretence1.png" width=400px></p>Langkah pertama coba kalian perhatikan kode diatas, tidak
            ada yang spesial dari kode diatas, sama seperti yang telah kita pelajari. didalam class tersebut teradapa 2 property dan
            satu method.<a target="_blank" href= "script/bahasan1.7.pdf">Script</a></li><hr>
            <li><p><img src="image/inheretence2.png" width=400px></p>Pada langkah ke dua ini saya membuat class baru dengan nama
            class daughter, dimana ada satu method Function DataDiri () yang menggunakan property dari Class Mother <b><em>$this->nama dan
            $this->umur</em></b> .<fieldset><legend>Hasil</legend><?php echo $daughter->DataDiri(); ?></fieldset>Jika kita memanggil property
            dari <b>Class Mother</b> maka akan muncul error yang kurang lebih mengatakan bahwa property (nama dan umur) tidak terdefinisi,
             karena property (nama dan umur) hanya terdefinisi didalam <b>Class Mother </b>saja.<hr></li>
            <li><p><img src="image/inheretence3.png" width=400px></p>Kali ini saya membuat satu lagi <b>Class Son</b>, dengan tambahan kalimat
            <b><em>Extend</em></b>, agar mudahnya, kurang lebih -> <address>buat class Son, sebagai turunan dari Mother, Property dan
            Method dari Mother, dapat dibaca dari <b>Class Son</b></address><a target="_blank" href= "script/bahasan1.8.pdf">Script</a><hr>
            
            <fieldset><legend>Hasil</legend><?php echo "<b>{$son->Cerita()}</b>"; ?></fieldset>  
            </li>
        </ol>
            

            
            
        </div>
    </div>
</body>
</html>	