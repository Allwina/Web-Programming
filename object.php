<?php
class Car{
    public $name;
    public $year;
    public function start(){
        echo " Hey,Good Morning " .$this->name;
    }
}
$mycar = new Car();
$mycar ->name ="Allwina";
$mycar ->year ="4";
$mycar ->start();
?>
