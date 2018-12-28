<?php
// prime number calculator

$n1 = '1';   // start value
$n2 = '100'; // end value

for ($i = $n1; $i <= $n2; $i++)
    {
      if($i % 2 != 1) continue;
      $v = 3;
      $n = sqrt($i);
      while ($i % $v != 0 && $v < $n) $v += 2;
      if((($i % $v == 0 && $i != $v) * 1) == 0) echo $i.' ';
    }
?>
