<?php
    $bahasan = "exception";
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
				
				<fieldset id="Exception">
					<legend>Exception</legend>
                    <p>Exception dasar terdiri dari try dan catch. Mekanisme kerjanya, kita harus membuat function atau method kemungkinan kondisi
                    error yang akan terjadi dengan keywoard <em class="target">throw</em> & membuat objek <em class="target">Exception</em>.</p>
                    <p>Masukan sebuah function kedalam codeblock try, <em class="strong">menguji apakah kode berikut mengashilkan error atau tidal</em></p>
                    <p>JIka iya, maka PHP akan melemparnya dan akan ditangkap oleh keywoard <em class="target">catch</em> untuk ditampilkan informasi
                    mengenai error yang terjadi</p>
                    <hr>
                    <div>
                        <?php
                            
                            function foo ($a){
                                if ($a === 0 ){
                                    throw new Exception ("Tidak dapat dibagi dengan no",201);
                                }
                                else {
                                    return "<h3>Angka yang dipilih adalah </h3>";
                                }
                            }
                            
                            try {
                                echo foo (24);
                                echo foo (0);
                                echo foo (20);
                            }
                            
                            catch (Exception $e) {
                                echo "Pesan error : ".$e->getMessage()    ."<br>";
                                echo "Kode error : ".$e->getCode()    ."<br>";
                                echo "File error : ".$e->getFile()    ."<br>";
                                echo "Garis error : ".$e->getLine()    ."<br>";
                                echo "Trace error : ".$e->getTraceAsString()    ."<br>";
                                
                                echo "<pre>";
                                print_r ($e->getTrace());
                                print_r (get_class_methods ('Exception'));
                                echo "</pre>";
                            }
                            
                        ?>
                        <br>
                        <embed src="../script/function-is-obj.pdf" width=600px height="250">
                    </div>
                    
                    <p>Dapat dilihat pada baris ke 65 dan 67, saya memanggil function foo () tiga kali, namun mengapa yang keluar
                    hanya 2 nilai, nilai dari function 1 dan function 2 (error).<em class="strong">Hal ini terjadi karena
                    pada code block try ketika ada function yang dilempar error, langsung menuju code block catch tanpa balik lagi
                    ke code block try.</em></p>
                <p>
                    Solusi untuk penggunaan function lebih dari satu dan memiliki masing2 exception,maka kita bisa membuat exception u/ setiap
                    function yang dipanggil.
                </p>
                </fieldset>
                
                <fieldset id="Exception Catch Funtion Terpisah">
					<legend>Exception Catch Funtion Terpisah</legend>
                    <p>Untuk menangkap error kita bisa dengan membuat function terpisah sesuai dengan kebutuhan</p>
                    <hr>
                    <div>
                        <?php
                            
                            function  isString ($text){
                                $result = is_string ($text);
                                $len = strlen ($text);
                                
                                if (!$result){
                                    throw new Exception ("<h3>Input harus berupa string</h3>");
                                }
                                elseif ($len >30){
                                    throw new Exception ("<h3>Tidak boleh lebih dari 30 karakter</h3>");
                                }
                                return "<h3>$text</h3>";
                            }
                            
                            function showError ($e){
                                return $e->getMessage();
                            }
                            
                            try {
                                echo isString ("Hai farras apa kabar"); // No error
                                echo isString (271295); // Error
                                echo isString ("Hai farras apa kabarHai farras apa kabarHai farras apa kabarHai
                                               farras apa kabarHai farras apa kabar"); // Error
                            }
                            catch ( Exception $e ){
                                echo showError ($e);
                            }
                            
                        ?>
                        <br>
                        <embed src="../script/exception-lebih-dari-satu.pdf" width=600px height="250">
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


