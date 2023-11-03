<?php
$mon =array("Jan"=>"first","Feb"=>"second","Mar"=>"Third");
foreach($mon as $monname => $monvalue)
print("<p>$monname is the $monvalue month </p>");
$str="May god bless you";
$words = explode(" ",$str);
foreach($words as $wrd)
echo $wrd;
?>
