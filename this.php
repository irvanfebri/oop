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
            <legend>This is useless ?</legend>
            <?php
            
            class Produk {
                public $tanggal;
                public $bulan;
                public $tahun;
                
                public function Bulan() {
                    switch ($this->bulan){
                        case 1:
                            $bulan="Januari";
                            break;
                        case 2:
                            $bulan= "Februari";
                            break;
                        case 3:
                            $bulan= "maret";
                            break;
                        case 4:
                            $bulan= "april";
                            break;
                        case 5:
                            $bulan= "mei";
                            break;
                        case 6:
                            $bulan= "juni";
                            break;
                        case 7:
                            $bulan= "juli";
                            break;
                        case 8:
                            $bulan= "agustus";
                            break;
                        case 9:
                            $bulan= "september";
                            break;
                        case 10:
                            $bulan= "oktober";
                            break;
                        case 11:
                            $bulan= "november";
                            break;
                        case 12:
                            $bulan= "desember";
                            break;
                    }
                    return ucfirst($bulan);
                }
                
                public function Lahir () {
                return "Saya lahir tanggal ".$this->tanggal." pada bulan ".$this->Bulan()." tahun ".$this->tahun;
                }
                
            }
            echo "<fieldset>";
            echo "<legend>Dengan \$this</legend>";
            $siswa1 = new Produk;
            $siswa1 ->tanggal =27;
            $siswa1 ->tahun =1995;
            $siswa1 ->bulan = 12;
            $siswa1 ->Bulan();
            echo $siswa1 ->Lahir();
            
            echo "<fieldset>"; 
            ?>
            <a target="_blank" href= "script/bahasan1.4.pdf">Script</a>
        </fieldset>
        </fieldset>
    
    
        </div>
    </div>
</body>
</html>	