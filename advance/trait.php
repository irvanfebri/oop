<?php
    $bahasan = "Trait";
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
            <ol id="here-home"> 
                
            </ol>
				
				<fieldset id="pengertian-trait">
					<legend>Trait</legend>
                    <p>Trait merupakan jala keluar dair multiple inheretence. dimana PHP hanya membatasi turunan class dengan hanya satu turunan class.
                    Jika kita membuat class dari dua turunan class parent maka akan menghasilkan error <br><em class="error">Parse error: syntax error, unexpected ',', expecting</em></p>
                    <p>Multiple inhetence sendiri dapat menimbulkan masalah yang disebut <em class="strong">Diamon Problem</em> dimana tiap method dari
                    tiap class parent memiliki nama yang sama.</p>
                    <p>Trait hampir sama dengan <a class="link" href="interface.php">Interface</a>,namun yang membedakannya adalah trait dapat membuat implementasi.</p>
                    
                    <div class="kesimpulan"></div>
                    <legend>Error</legend>
					<embed src="../script/trait-error.pdf" width=600px height="250">
                    
                    <div>
                        <?php
                            class phone {
                                protected function software () {
                                    return "this phone is a regular phone";
                                }
                            }
                            
                            trait smartPhone {
                                public function OperationgSystem () {
                                    return "add value to make a smarter phone";
                                }
                            }
                            
                            class phoneTouch extends phone {
                                use smartPhone;
                                
                                public function watts (){
                                    return "Wats is about 400HTZ";
                                }
                                public function capability () {
                                    return "<h3>".$this->software()." ".$this->OperationgSystem()."</h3>";
                                }
                            }
                            
                            $samsung = new phoneTouch();
                            echo $samsung->capability();
                        ?>
                        <legend>True</legend>
                        <embed src="../script/trait-true.pdf" width=600px height="250">
                    </div>
                </fieldset>
                
                <fieldset id="Urutan-Prioritas-Trait">
					<legend>Urutan Prioritas Trait</legend>
                    <ol>
                        <li>Method dalam class itu sendiri</li>
                        <li>Method milik trait</li>
                        <li>Method milik parent</li>
                    </ol>
                    <p></p>
                    
                    <div class="kesimpulan"></div>
                    
                    <div>
                        <?php
                            class Produk {
                                public function sumber () {
                                    return "<h4>Saya dari Parent</h4>";
                                }
                            }
                            
                            trait ProdukTrait {
                                public function sumber () {
                                    return "<h4>Saya dari Trait</h4>";
                                }
                            }
                            
                            
                            class TurunanProdukSatu extends Produk {
                                use ProdukTrait;
                                public function sumber (){
                                    return "<h4>Saya dari dalam Class</h4>";
                                }
                            }
                            
                            class TurunanProdukDua extends Produk {
                                use ProdukTrait;
                            }
                            
                            class TurunanProdukTiga extends Produk {
                                
                            }
                            
                            
                            $prove = new TurunanProdukSatu();
                            echo $prove->sumber();
                            // Dari class
                            
                            $proveDua = new TurunanProdukDua();
                            echo $proveDua->sumber();
                            // Dari trait
                            
                            $proveDua = new TurunanProdukTiga();
                            echo $proveDua->sumber();
                            // Dari parent
                            
                        ?>
                    </div>
                    <br>
                    <embed src="../script/trait-prioritas.pdf" width=600px height="250">
                    <p>Jika didalam sebuah class yang menggunakan trait dan turunan dari sebuah parent class, lalu memiliki nama method yg sama.
                    maka prioritas yang didahulukan adalah metho di class, trait lalu parent.</p>
                    <ul>
                        <li>Pada baris ke 118-120 saya membuat <em class="target">trait class Produk Trait </em></li>
                        <li>Pada baris ke saya membuat Class <em class="target">TurunanProdukSatu()</em>
                            turunan dari parent <em class="target">Produk</em> dan memanggil trait pada baris ke 124 serta membuat method dengen
                            implementasinya.</li>
                        <li>Pada baris ke 130 - 132 saya membuat class <em class="target">TurunanProdukDua()</em> turunan dari
                            <em class="target">Produk</em> dan menggunakan trait.</li>
                        <li>Pada baris ke 134 - 136 saya membuat class <em class="target">TurunanProdukTiga()</em> turunan dari
                            <em class="target">Produk</em>.</li>
                        <li>Pada baris 139-149 kita bisa menggambilka kesimpulan prioritas method sebagai mana yang tercatat pada list diatas.</li>
                    </ul>
                </fieldset>
                
                <fieldset id="Conflict-Resulution">
					<legend>Conflict Resulution</legend>
                    <p>Sebuah class dapat menggunakan lebih dari satu trait, namun bagaimana jika didalam trait-trait tersebut terdapat dua method
                    dengan nama yang sama ? maka akan menghasilkan error <br>
                    <embed src="../script/trait-conflict-false.pdf" width=600px height="250">
                    <br>
                    <em class="error">Fatal error: Trait method MethodTrait has not been applied, because there are collisions with other trait methods</em></p>
                    
                    <p>Solusinya kita bisa menggunaka syntax <em class="strong">insteadof</em> untuk memilih method mana yang dipakai dari method
                    method yang berada didalam trait. dan syntax <em class="strong">as</em> untuk membuat nama alias dari method yang berada dalam trait lainnya</p>
                    <div class="kesimpulan"></div>
                    
                    <div>
                        <?php
                            
                            trait TraitSatu {
                                public function MethodTrait () {
                                    return "<h3>Saya dari trait 1</h3>";
                                }
                            }
                            
                            trait TraitDua {
                                public function MethodTrait () {
                                    return "<h3>Saya dari trait 2</h3>";
                                }
                            }
                            
                            trait TraitTiga {
                                public function MethodTrait () {
                                    return "<h3>Saya dari trait 3</h3>";
                                }
                            }
                            
                            class TraitUser {
                                use TraitSatu, TraitDua, TraitTiga {
                                    TraitSatu::MethodTrait insteadof TraitDua, TraitTiga;
                                    TraitTiga::MethodTrait as AliasTiga;
                                    TraitDua::MethodTrait as AliasDua;
                                }
                                
                            }
                            
                            $contoh = new TraitUser();
                            echo $contoh->MethodTrait();
                            echo $contoh->AliasDua();
                            echo $contoh->AliasTiga();  
                            
                        ?>
                    </div>
                    <br>
                    <embed src="../script/trait-conflict-true.pdf" width=600px height="250">
                    <p>Pada baris ke 202 saya menggunaka tiga trait sekaligus, dimana semua trait memiliki <em class="target">MethodTrait()</em> yg sama
                    (nama method-nya)</p>
                    <p>
                        pada baris ke 203 saya memerintahkan php untuk membuat <em class="target">MethodTrait()</em> dari Class <em class="target">TraitSatu</em>
                        sebagai method yang dipilih (default). sehinggia ketika kita memanggil <em class="target">MethodTrait()</em> maka method yang berada
                        di <em class="target">TraitSatu</em> lah yang akan dipilih.
                    </p>
                    <p>
                        Karena method <em class="target">MethodTrait()</em> kepemilikan <em class="target">TraitSatu</em> telah ditetapkan, maka jika kita
                        tetap ingin memanggil method dari trait lainnya dapat menggunakan sytax <em class="strong">as</em> untuk merubah (alias) nama method
                        dari trait, sehingga berbedanya nama method tiap trait dapat kita gunakan saat pemanggilan dari object, contoh padabaris ke 210 - 213.
                    </p>
                </fieldset>
                
                <fieldset id="trait-dalam-trait">
					<legend>Trait dalam trait</legend>
                    <p>Trait bisa dimasukan kedalam trait lain, sehingga class yang menggunakan trait turunan dari trait lain dapat menggunakan
                    semua method atau property yang ada didalam trait parent.</p>
                    <p>Syntax yang digunakan dalam turunan ke sesama trait sama seperti penggunaan di class biasa, yaitu menggunakna syntax
                    <em class="strong">use</em>.</p>
                    
                    <div>
                        <?php
                            
                            trait TraitParent {
                                public function SatuMethod () {
                                    return "<h4>Aku trait dari <em class=target>TraitParent</em></h4>";
                                }
                            }
                            
                            trait TraitTurunanSatu {
                                use TraitParent;
                                
                                public function DuaMethod (){
                                    return "<h4>Aku trait anak dari <em class=target>TraitParent</em> & parent dari <em class=target>TraitTurunanDua</em></h4>";
                                }
                            }
                            
                            trait TraitTurunanDua {
                                use TraitTurunanSatu;
                            }
                            
                            class ClassTrait {
                                use TraitTurunanDua;
                            }
                            
                            $example = new ClassTrait ();
                            echo $example->SatuMethod();
                            echo $example->DuaMethod();
                        ?>
                        
                        
                    </div>
                    <embed src="../script/trait-dalam-trait.pdf" width=600px height="250">
                </fieldset>
                
                <fieldset id="trait-property-constanta">
					<legend>Trait Property & Constanta</legend>
                    <p>Trait bisa mengandung property namun tidak bisa mengandung konstanta, jika kita memaksa menaruh konstanta maka akan menghasil
                    kan error <br>
                    <em class="error">Fatal error: Traits cannot have constants</em>
                    .</p>
                    
                    <div>
                        <?php
                                
                            trait ParentOne {
                                public $asetSatu = "Saya property dari Trait";
                                // public const KONSTANTA = "Saya konstanta, akan error";
                            }
                            
                            class AmbilPro {
                                use ParentOne;
                                
                                public $asetGabungan = "Ini saya ambil dari kalimat -> ";
                                
                                public function getValue () {
                                    return "<h3>Ini saya ambil dari kalimat -> ".$this->asetSatu."</h3>";
                                }
                            }
                            
                            $hail = new AmbilPro ();
                            echo $hail->getValue();
                        ?>
                        
                        
                    </div>
                    <embed src="../script/trait-property-const.pdf" width=600px height="250">
                </fieldset>
                
                <fieldset id="trait-Static">
					<legend>Trait Static Property & Method</legend>
                    <p>Trait bisa berisi Static Property dan Method. Cara pemanggilan juga sama, yaitu
                    <em class="strong">memanggil langsung dari classnya , bukan object-nya</em>.</p>
                    
                    <div>
                        <?php
                                
                            trait ParentOneStatic {
                                public static $ProStat = "This is Static Property dari trait";
                                
                                public static function MethStat (){
                                    return "<h4>kalimat ini -> <em class=strong>".ParentOneStatic::$ProStat."</em> dari <em class=target>
                                    staticProStat</em>.</h4>";
                                }
                            }
                            
                            class AmbilProStatic {
                                use ParentOneStatic;
                            }                           
                            echo AmbilProStatic::MethStat();
                            
                        ?>
                        
                        
                    </div>
                    <embed src="../script/trait-static.pdf" width=600px height="250">
                </fieldset>
                
                <fieldset id="trait-Abstract-method">
					<legend>Trait Abstract Method</legend>
                    <p>Trait bisa berisi abstract method, sehingga class yang menggunakan trait tersebut harus mengimplementasikan
                    method tersebut. jika tidak makan akan muncul error yang sama jika kita tidak mengimplementasikan abstract method yang
                    berada di class parent atau trait parent.<br>
                    <em class="error">Fatal error: Class regulerClass contains 1 abstract method and must therefore be declared abstract or implement the remaining methods</em></p>
                    
                    <div>
                        <?php
                                
                            trait NoAbstract {
                                
                                public function NoAbs () {
                                    return "Buka dari method abstract";
                                }
                                
                            }
                            
                            trait AbstractYes {
                                public abstract function AbsYes ();
                            }
                            
                            class regulerClass {
                                use NoAbstract , AbstractYes;
                                
                                public function AbsYes () {
                                    return "<h3>Saya dari abstract method yang berada di trait <em class=target>AbstractYes</em></h3>";
                                }
                            }
                            
                            $hasil = new regulerClass ();
                            echo $hasil->AbsYes();
                            
                        ?>
                        
                        
                    </div>
                    <embed src="../script/trait-abstract.pdf" width=600px height="250">
                </fieldset>
                
                <fieldset id="trait-Accsess-modifier">
					<legend>Trait Accsess Modifier</legend>
                    <p>Pada saat menggunakan trait, kita dapat merubah hak ases sebuah method yang ada didalam trait menggunakan syntax
                    <em class="target">method_name as accsess_modifer</em>. contoh : <em class="target">haloo as protected</em>. 
                    </p>
                    
                    <div>
                        <?php
                            
                            trait lastTrait {
                                protected function Oke () {
                                    return "<h4>its oke now, become public</h4>";
                                }
                            }
                            
                            class call {
                                use lastTrait {Oke as public;}
                            }
                            
                            $result = new call ();
                            echo $result->Oke();
                        ?>
                        
                        
                    </div>
                    <embed src="../script/trait-accsess-modifier.pdf" width=600px height="250">
                    <p>Padabaris ke 389 saya membuat trait dan method pada baris ke 390 di seti sebagai protected, seharusnya pemanggilan
                    data pada baris ke 400 akan mengeluarkan error. hal itu tidak terjadi karena <em class="strong">pada baris ke 396, saya
                    merubah accsess modifier method dari trait <em class="target">lastTrait</em> menjadi public.</em></p>
                </fieldset>
        </div>
    </div>
    
</body>
</html>

<?php
//Fatal error: Uncaught Error: Call to private Parents::__construct() from invalid context in C:\xampp\htdocs\oop\Visability.php:65 Stack trace: #0 {main} thrown in C:\xampp\htdocs\oop\Visability.php on line 65
//Fatal error: Uncaught Error: Call to private method Parents::hello() from context '' in C:\xampp\htdocs\oop\Visability.php:66 Stack trace: #0 {main} thrown in C:\xampp\htdocs\oop\Visability.php on line 66
?>


