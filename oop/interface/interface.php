<?php
interface BaseAnimal{
    public function isAlive();
    public function canEat($param1, $param2);
    public function breed();
}

class Animal implements BaseAnimal{
    public function isAlive(){
        return 'this is is BaseAnimal';
    }
    public function canEat($param1, $param2){

    }
    public function breed(){

    }

}
interface  BaseHuman extends BaseAnimal{
    function calTalk();
}

abstract class AbstractHuman implements BaseHuman{
    abstract public function run();
    public function isWork(){

    }
}
class Human extends AbstractHuman{
    function calTalk(){
        return 'came form Human class';
    }
    public function isAlive(){
        return 'this is is BaseAnimal';
    }
    public function canEat($param1, $param2){

    }
    public function breed(){

    }
     public function run(){

    }
}

$obj = new Human();
echo $obj->calTalk();
$obj instanceof BaseHuman;
