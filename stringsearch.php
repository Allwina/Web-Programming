<?php
$myString = readline("Enter the string");
$search = readline("Enter string to be searched");

if ( strstr( $myString, $search ) ) {
  echo "Text found";
} else {
  echo "Text not found";
}
?>