<?php
 $num1 = 8;
 $num2 = 5;
 $result = 0;
 $resultdiv =null;
 if($num1 > $num2){
   for ($i=0; $i < $num2 ; $i++) {
     $result = $result + $num1;
   }
   echo "{$i}<br>";
   echo "{$num1}x {$num2}={$result}";
 }else {
   for ($i=0; $i < $num1 ; $i++) {
     $result = $result + $num2;
   }
   echo "{$i}<br>";
   echo "{$num1}x {$num2}={$result}<br>";
 }

echo "<br>";
$div1 = 40;
$div2 = 8;
 while ($div1 >= $div2) {
   $div1 = $div1 - $div2;
    $resultdiv =  $resultdiv +1;

 }
 
 echo "{$resultdiv}";








 ?>
