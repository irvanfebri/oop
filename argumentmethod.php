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
        <h3>Argument Method</h3>
         <a href="index.php">Back</a>
        
        <fieldset>
            <legend>Method</legend>
           <p><b>Method</b> di dalam sebuah class atau object tidak berbeda dengan function, 
        karena itu seluruh fitur-fitur function juga bisa kita terapkan. Salah satunya mengirim argument.
        <b>Argument</b> adalah sebutan untuk nilai input yang diberikan pada saat pemanggilan function. Sebagai contoh, PHP memiliki function bawaan
        sqrt() untuk mencari nilai akar kuadrat. Function sqrt() butuh 1 argumen berupa angka yang akan dicari nilai akar kuadratnya.
        Untuk mencari akar kuadrat dari 49, perintahnya adalah sqrt(49), angka 49 di sini merupakan sebuah argument</p>
           
            <a target="_blank" href= "script/bahasan1.4.pdf">Script</a>
        <fieldset>
            <legend>Example</legend>
            <?php
            
            class Penjualan {
                public $Jenis = "Komputer";
                public $Merek = "Aple";
                public $Stock = "30";
                
                public function Pesan (){
                    $this->Stock = $this->Stock - 1;
                    return $this->Jenis." merek ".$this->Merek." terjual.";
                }
                
                public function PesanBorong ($borong=0){
                    $this->Stock = $this->Stock - $borong;
                    return $this->Jenis." merek ".$this->Merek." terjual sebanyak ".$borong;
                }
                
                public function Stock (){
                    return $this->Stock;
                }
            }
            $pesan = new Penjualan;
            echo "saya memangil object Pesan => <b>".$pesan->Pesan()."</b><br>";
            echo "saya memangil object Stock => <b>".$pesan->Stock()."</b><br>";
            echo "saya memangil object Pesan => <b>".$pesan->Pesan()."</b><br>";
            echo "saya memangil object Stock => <b>".$pesan->Stock()."</b><br>";
            echo "saya memangil object Pesan Borong => <b>".$pesan->PesanBorong()."</b><br>";
            echo "saya memangil object Stock => <b>".$pesan->Stock()."</b><br>";
            echo "saya memangil object Pesan Borong => <b>".$pesan->PesanBorong(2)."</b><br>";
            echo "saya memangil object Stock => <b>".$pesan->Stock()."</b><br>";
            echo "saya memangil object Pesan Borong => <b>".$pesan->PesanBorong(22)."</b><br>";
            echo "saya memangil object Stock => <b>".$pesan->Stock()."</b><br>";

            ?>
            
            <a target="_blank" href= "script/bahasan1.11.pdf">Script</a>
        </fieldset>        
        </fieldset>
        
    
    
        </div>
    </div>
</body>
</html>	