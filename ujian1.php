<?php
function hitung($string_data) {
    $arrdata = [];
    
    
    if (strpos($string_data, '+') !== false) {
       $arrdata = explode("+", $string_data);
        return (int)$arrdata[0] + (int)$arrdata[1];
    } else if (strpos($string_data, '-') !== false) {
       $arrdata = explode("-", $string_data);
        return (int)$arrdata[0] - (int)$arrdata[1];
    } else if (strpos($string_data, '*') !== false) {
       $arrdata = explode("*", $string_data);
        return (int)$arrdata[0] * (int)$arrdata[1];
    } else if (strpos($string_data, ':') !== false) {
        $arrdata = explode(":", $string_data);
        return (int)$arrdata[0] / (int)$arrdata[1];
    } else if (strpos($string_data, '%') !== false) {
       $arrdata = explode("%", $string_data);
        return (int)$arrdata[0] % (int)$arrdata[1];
    }
  }
  
  
  echo hitung("102*2")." ";
  echo hitung("2+3")." ";
  echo hitung("100:25")." ";
  echo hitung("10%2")." ";
  echo hitung("99-2");

  ?>