

<?php
$names = array("");
$n =(int)readline("Enter the total number?");
for($i=0;$i<$n;$i++)
{
    $new = readline("Enter the name");
    array_push($names,$new);
}
sort($names);
$clength = count($names);
for($x = 0; $x < $clength; $x++) {
  echo $names[$x] ." ";
}
?>

