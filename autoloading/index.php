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
        <a href="../index.php">Back</a><br>
        <p>Autoloading adalah fitur didalam PHP untuk mengimport file secara otomatis.</p>
        <ol>
            <li>
                Autoloading baru akan dijalankan ketika sebuah class yang belum ada (tersedia) dipanggil kedalam kode.
            </li>
            <li>
                Nama file yang akan diimport harus sama dengan nama class (atau memiliki pola yang sama) dengan nama class yang belum
                ada (tersedia) di panggil kedalam kode.
            </li>
            <li>
                Jika class tersebut berada didalam namespace, struktur folder harus mengikuti penulisan namespaces
            </li>
        </ol>
        
        <ol>
            <li><a href="spl-autoload-register.php">Autoload Register()</a></li>
            <li><a href="lat01/index.php">Penerapan Autoload</a></li>
            <li><a href="lat02/index.php">Multiple Auto Loader (Different Folder)</a></li>
            <li><a href="lat03/index.php">Autoload Name Space</a></li>
        </ol>
    </div>
    
    
	
	

</body>
</html>	