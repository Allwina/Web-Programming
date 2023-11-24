<?php
$jsonobj ='{"name":"John","age":30,"email":"john@abc.com"}';
$obj =json_decode($jsonobj);
var_dump($obj);
echo "<br/> Name :".$obj->name ."<br/>Age :".$obj ->age.
"<br/>Email :".$obj ->email."<br/>";
?>