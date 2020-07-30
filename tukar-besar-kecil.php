<?php
function tukar_besar_kecil($string){
//kode di sini
$arr = str_split($string) ;
for($i = 0; $i < count($arr); $i++) {
    $ascii[] = ord($arr[$i]);
    $shifted[] = chr($ascii[$i]+1);
    echo $shifted[$i];
}
return "<br>";
}

// TEST CASES
echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"

?>