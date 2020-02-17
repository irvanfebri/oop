<!DOCTYPE html>
    <!DOCTYPE html>
<html>
<head>
	<meta Charset="utf-8">
	<title>PHP</title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../mystyle.css">
</head>
<body>
    <div class="container">
        <a href="index.php">Back</a><br>
        <p>Magic Method, <em class="strong">Method khusus yang dijalankan jika sebuah kondisi terjadi.</em></p>
        <ol>
            <li><a href="tostring.php">Magic Method tostring</a></li>
            <li><a href="get.php">Magic Method get</a></li>
            <li><a href="set.php">Magic Method set</a></li>
            <li><a href="call.php">Magic Method call</a></li>
            <li><a href="callstatic.php">Magic Method call static</a></li>
            <li><a href="isset-empty.php">isset dan empty</a></li>
            <li><a href="unset.php">unset dan __unset</a></li>
        </ol>
        <div class="kesimpulan">
            Di dalam PHP, seluruh magic method yang sudah kita bahas ini dikenal dengan istilah overloading,
            yakni membuat property dan method secara dinamis (dimana property dan method tersebut tidak ada sebelumnya).
            Lebih jauh lagi, method __get(), __set(), __isset() dan __unset() dipakai untuk membuat property overloading.
            Sedangkan method __call() dan __callStatic() dipakai untuk membuat method overloading
        </div>
    </div>
    
    
	
	

</body>
</html>	