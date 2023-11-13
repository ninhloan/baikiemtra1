<?php

function isPrime($number) {
  if ($number < 2) return false;
  
  for ($i = 2; $i <= sqrt($number); $i++) {
    if ($number % $i == 0) {
      return false;
    }
  }
  
  return true;
}

for ($i = 1; $i <= 100; $i++) {
  if (isPrime($i)) {
    echo $i . " "; 
  }
}
//output 2 3 5 7 11 13 17 19 23 29 31 37 41 43 47 53 59 61 67 71 73 79 83 89 97
?>
