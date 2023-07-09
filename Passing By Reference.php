<?php

function add_five(&#038;$number) {
    $number += 5;
    return $number;
  }

  $n = 15;

  echo add_five($n) . "<br>"; // 20

  echo $n; // 20

  echo '<br>';

  function calculate($n1, $n2) : int {
    return $n1 + $n2;
  }

  echo calculate(10.5, 9.5);

  echo '<br>';

  echo gettype(calculate(10.5, 9.5)); // Integer

?>
