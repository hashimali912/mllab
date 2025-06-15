<?php 
$inputFile = 'input.txt'; 
$outputFile = 'output.txt'; 
if (file_exists($inputFile)) { 
$data = file_get_contents($inputFile); 
if ($data !== false) { 
$writeSuccess = file_put_contents($outputFile, $data); 
if ($writeSuccess !== false) { 
echo "Data successfully written to $outputFile\n"; 
} else { 
echo "Failed to write data to $outputFile\n"; 
} 
} else { 
echo "Failed to read data from $inputFile\n"; 
} 
} else { 
echo "$inputFile does not exist\n"; 
} 
?> 