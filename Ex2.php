<?php
     $number1 = $_GET["number1"];
     $number2 = $_GET["number2"];
     if ($number1 > $number2){
         echo "Max : " . $number1;
 }else{
     echo "Mix : " . $number2;
 }
?>
