<?php
class A{

    private $name;
    private $age;
    private $roll;

    public function __construct($name='',$age='', $roll=''){
        $this->name = $name;
        $this->age = $age;
        $this->roll = $roll;
    }
    public function __get($property){
        return $property;
    }
    public function __set($property, $value){
        $this->age = $value;
    }
    public function __toString(){
        
    }
}

$obj = new A();
echo $obj->name = 10;