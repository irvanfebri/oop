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
        <h3>Final Keyword</h3>
         <a href="index.php">Back</a><br>
         <p>PHP menyediakan keyword <b>Final</b> yang digunakan untuk menutup kemungkinan overridding dan larangan untuk
         penurunan class. sebuah method yang di atur sebagai <b>final</b> tidak dapat di timpa oleh methode lain, dan sebuah
         class yang di atur sebagi <b>final</b> tidak dapat diturunkan (tidak bisa menjadi parent class).</p>
        <fieldset>
            <legend>Penjelasan</legend>
		<?php
		/*
			class Parents {
                final public function Hello(){
                    return "Good Night Parents";
                }
            }
            
            class Son extends Parents {
                public function Hello(){
                    return "Good Night Son";
                }
            }  			//==> Fatal error: Cannot override final method Parents::Hello() in
						//==> C:\xampp\htdocs\oop\finalkeyword.php on line 32
            
			
			final class Parents01  {
				public function Hello() {
					return "Hello mate im parents";
				}
			}
			
			class Son01 extends Parents01 {
				public function Hello(){
					return parent::Hello();  //Fatal error: Class Son01 may not inherit from final class (Parents01)
					}						//in C:\xampp\htdocs\oop\finalkeyword.php on line 48
			}
			*/
				
		?>

        </fieldset>
        <fieldset>
        <legend>Script</legend>
        
		PHP menyediakan keyword final yang bisa dipakai untuk "memutus" overriding dan penurunan.<b>Sebuah method yang
		di set sebagai final, tidak bisa di override oleh method lain di child class</b>. Sedangkan <b>class yang di set sebagai
		final, tidak bisa lagi diturunkan kepada class lain</b><br>
		<a target="_blank" href= "script/bahasan1.19.pdf">Script</a>
        </fieldset>
		
        </div>
    </div>
    
</body>
</html>	