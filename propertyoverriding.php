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
        <h3>Property Overriding</h3>
         <a href="index.php">Back</a><br>
         
        <?php
        
        class Buku {
            public $Judul = "dicetak oleh media cahaya sunnah";
        }
        
        class BukuSatu extends Buku {
            //public $JudulSatu = parent ::Judul;
            public $Judul = "24 Kg";
            
        }
        
        $CetekanSatu = new Buku;
        echo "Dipanggil dari class parents -> ".ucwords($CetekanSatu->Judul);
        echo "<hr>";
        $CetakanDua = new BukuSatu;
        echo "Dipanggil dari class child -> ".ucwords($CetakanDua->Judul);
        
        
        
        
        
        ?>
        
         
     
        <fieldset>
        <legend>Script</legend>
        <a target="_blank" href= "script/bahasan1.9.pdf">Script</a>
        </fieldset>
        </div>
    </div>
    
</body>
</html>	