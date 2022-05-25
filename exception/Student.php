<?php
class Student{
    public $name;
    public $age;
    public function __construct($name, $age)
    {
        $this->name = $name;
        if ($age<4) {
            throw new Exception("Invalid Age", 10001);
        }
        $this->age = $age;
    }
}


try {
    $std = new Student('Azad Hosen', 2);
} catch (\Throwable $th) {
    echo $th->getCode() .":". $th->getMessage();
}