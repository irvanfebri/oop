<?php

$list = "3 40";
$list = explode (" ",$list);

for ($i=1; $i<=1000; $i++){
    
    foreach ($list as $val){
        $hasilbagi[]= $val/$i;
    }
}

echo "<pre>";
    print_r ($hasilbagi);
echo "</pre>";






















/*
// ALGO Pangram Character DCODER
    function pangram ($text){
        
        preg_match_all ('!\D!',strtolower($text),$textarr);
        
        $alphabet = "a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z";
        $alphabet = explode (",",$alphabet);
        $countalp = count ($alphabet);
        
        
        for ($i = 0 ; $i <= $countalp - 1 ; $i++){
            if (in_array($alphabet[$i],$textarr[0])){
                $result[] = "YES";
            } else {
                $result[] = "NO";
            }
        }
        
        if (in_array("NO",$result)){
            $answer = "NO";
        } else {
            $answer = "YES";
        }
        
        return $answer.$text;
    }
*/
//echo pangram ('qwertyuioplkjhgfdSAzxcvbnm'); //Hasil hapus "//"
?>


<?php
//Arrange Character
/*
function ascending ($text){
    
    $lentext = strlen ($text);
    preg_match_all ("!\D!",$text,$textarr);
    preg_match_all ("![A-Z]!",$text,$textarrup);
    sort ($textarr[0]);
    
    echo $maxtext = count ($textarr[0]);
    $maxupp = count ($textarrup[0]);
    
    for ($i = 0 ; $i < $maxupp ; $i++){
        $temp = array_shift ($textarr[0]);
        array_push ($textarr[0],$temp);
    }
    
    for ($i = 0 ; $i < $maxtext ; $i++ ){
        $result = "";
        $result .= $textarr[0][1]." ";
    }
}
*/
/*
$text = 'D c a M';
$text = str_replace (" ","",$text);
$text;
$lentext = strlen ($text);
    preg_match_all ("!\D!",$text,$textarr);
    preg_match_all ("![A-Z]!",$text,$textarrup);
    sort ($textarr[0]);
    
    $maxtext = count ($textarr[0]);
    $maxupp = count ($textarrup[0]);
    
    for ($i = 0 ; $i < $maxupp ; $i++){
        $temp = array_shift ($textarr[0]);
        array_push ($textarr[0],$temp);
    }
    
    for ($i = 0 ; $i < $maxtext ; $i++ ){
        $result = "";
        echo $result .= $textarr[0][$i]." ";
    }
    */


?>