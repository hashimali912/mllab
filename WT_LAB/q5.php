<?php
$input = "Hello, this is a sample string for PHP string manipulation.";

// a. String length
echo "Length: " . strlen($input) . "\n";

// b. Word count
echo "Words: " . str_word_count($input) . "\n";

// c. Reverse string
echo "Reversed: " . strrev($input) . "\n";

// d. Search for "sample"
$search = "sample";
$pos = strpos($input, $search);
if ($pos !== false)
    echo "Found '$search' at position: $pos \n";
else
    echo "'$search' not found.\n";
?>
