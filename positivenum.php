<?php
$number = -1; 
while ($number <= 0) {
    $number = (int)readline("Enter a positive number: ");
    if ($number <= 0) {
        echo "enter a positive number.\n";
    }
}
echo "enter  a positive number: $number";
?>
