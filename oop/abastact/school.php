<?php
abstract class School{
    abstract function myClass();

}

class Attandence extends School{
  function myClass(){
      echo "ovverride to base class";
  }
}

$obj = new Attandence();
$obj->myClass;
 