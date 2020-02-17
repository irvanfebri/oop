<?php
$bahasan = "Perbandingan Object";
?>
<!DOCTYPE html>
<html>
<head>
<meta Charset="utf-8">
<title>Class and Object</title>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../mystyle.css">

<script>
window.addEventListener ("load",function (){   
   var olLis = document.getElementsByTagName ("ol")[0];
   var fieldNode = document.getElementsByTagName ("fieldset");
   var backTop = document.getElementById ("header");
   
   
   backTop.addEventListener ("click",function () {
    window.location.assign ("#");
   });
   
   
   for (var i = 0 ; i < fieldNode.length ; i++){
    var newLi = document.createElement ("li");
    var newText = document.createTextNode (fieldNode[i].getAttribute("id"));
    var aNode = document.createElement ("a");
    aNode.appendChild (newText);
    newLi.appendChild (aNode);
    aNode.setAttribute ("href","#"+fieldNode[i].getAttribute("id"));    
    olLis.appendChild (newLi);
   }         
});
</script>
</head>
<body>
<div class="header" id="header">Home</div>

<!-- Code HTML -->
<div class="container">
<div class="item">
    <h3><?php  echo $bahasan ?></h3>
    <a href="index.php">Back</a><br>
    <ol id="here-home"></ol>
        
        <fieldset id="unet & __unset">
            <legend>Perbandingan Object</legend>
            <p>Didalam PHP dalam melakukan perbandingan dua buat variable dapat menggunakan "==" dan "===". <em class="target">==</em> akan
            menghasilkan true jika nilai kedua variable sama. dan <em class="target">===</em> menghasilkan nilai boolean true jika kedua
            variable mengacu pada memory yang sama.</p>
            <p>Mengingat kata memory yang sama, didalam php men-<em>copy</em> variable dengan variable yang lain memilki dua cara,
            <em class="target">copy by value </em> dengan keyword <em class="target">=</em> dan copy by reference dengan keyword <em class="target">
                =&</em>.
            </p>
            
            <p>menggunakan keyword <em class="target">=</em> untuk mecopy object, akan berlaku copy by reference, berbeda dengan bukan
            object.</p>
            <hr>
            <div>
                <?php
                    class Produk {
                        public $merek;
                        
                        public function __construct ($merek){
                            $this->merek = $merek;
                        }
                        
                        public function __set ($name,$value){
                            $this->$name = $value;
                        }
                    }
                    
                    $komputer = new Produk ("Apple");
                    $miniKomputer = $komputer;
                    $komputerGede = new Produk ("Apple");
                    
                    echo "<pre>";
                    print_r ($miniKomputer);
                    print_r ($komputer);
                    print_r ($komputerGede);
                    echo "</pre>";
                    
                    echo "<h3> Perbandingan pada baris ".__LINE__." ";
                    var_dump ($miniKomputer == $komputerGede );
                    echo "</h3>";
                    echo "<h3> Perbandingan pada baris ".__LINE__." ";
                    var_dump ($miniKomputer === $komputerGede );
                    echo "</h3>";
                    
                    
                    $miniKomputer->daya = 1000;
                    echo "<pre>";
                    print_r ($miniKomputer);
                    print_r ($komputer);
                    print_r ($komputerGede);
                    echo "</pre>";
                    echo "<h3> Perbandingan pada baris ".__LINE__." ";
                    var_dump ($miniKomputer === $komputer );
                    echo "</h3>";
                ?>
                <br>
                <embed src="../script/advance-perbandinga.pdf" width=600px height="250">
            </div>
            <div class="kesimpulan">
                Jika kita mengcopy obecjt menggunakan keyword <em class="target">=</em>, maka scara otomatis PHP akan menganggap
                copy alamat penyimpanannya. sehingga object yg satu dan yang laiinya akan terubah juga.
                <br>
                <em class="strong">Untuk keperluan meng-<em>Copy</em> Nilai saja PHP menyediakan magic method clone.
            </div>
            
        </fieldset>
</div>
</div>

</body>
</html>

<?php
//Fatal error: Uncaught Error: Call to private Parents::__construct() from invalid context in C:\xampp\htdocs\oop\Visability.php:65 Stack trace: #0 {main} thrown in C:\xampp\htdocs\oop\Visability.php on line 65
//Fatal error: Uncaught Error: Call to private method Parents::hello() from context '' in C:\xampp\htdocs\oop\Visability.php:66 Stack trace: #0 {main} thrown in C:\xampp\htdocs\oop\Visability.php on line 66
?>


