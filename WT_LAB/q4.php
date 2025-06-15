<?php
function isPrime($n) {
  if ($n < 2) return false;
  for ($i = 2; $i <= sqrt($n); $i++)
    if ($n % $i == 0) return false;
  return true;
}

echo "Prime numbers from 1 to 50: ";
for ($i = 1; $i <= 50; $i++)
  if (isPrime($i)) echo "$i ";
?>