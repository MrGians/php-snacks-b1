<!-- 
SNACK 4 (BONUS)
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta. 
-->

<?php 

$random_num = [];

while (count($random_num) < 15) {

  $number = rand(1, 20);
  if (!in_array($number, $random_num)) $random_num[] = $number;

}

var_dump($random_num);

?>