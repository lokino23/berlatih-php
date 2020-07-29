<?php

function palindrome_angka($angka) {
  // tulis kode di sini
  while (true){
    $nilai =strval($angka+1);
    $nilaibaru = "" ;
    for ($i = (strlen($nilai)-1); $i >= 0; $i--) {
      $nilaibaru .= $nilai[$i];
    }
    if($nilaibaru == $nilai){
      $res = $nilai . "<br>";
      return $res ;
    } else{ 
      $angka += 1 ;
    }
  }

}

// TEST CASES
echo palindrome_angka(8) ;// 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>