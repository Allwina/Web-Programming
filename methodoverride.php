<?php
class myClass{
    public $name;
    function __construct($n){
     $this->name = $n;
}
public function sayHello(){
    echo "Hello! ".$this->name;
}
}
class childClass extends myClass{
    public function sayHello1()
    {
        echo "<br/> I won't tell my name";
        echo "<br/> Override";
    }
}
$object1 = new childClass("Bobby");
$object1 ->sayHello();
$object = new childClass("Bobby");
$object ->sayHello1();

?>