<?php
    class Teacher{

        //access modifires public, private & protected
        static public $totalStudent; //access local mothod, child class or any where can access
        static private $className; //only can access own/local class or method
        static protected $Subject; //can access local & child class without outside class between base or child
        
        static function myClass($n=7){//create static method
            echo("i am taking in class {$n} "."total student of ". self::$totalStudent."\n");
        }
        public function subject(){//non static method
            echo $this->subject."\n";
            echo self::$subject;//called static propertiy from own class
        }
    }

     class Student extends Teacher{
        
        //method override 
       static function myClass($classNo=1){
         
        echo "i am taking in class {$classNo} "."total student of " . self::$totalStudent."\n";
        parent::myClass();
       }
    }

    $obj = new Teacher();
    
    // Teacher::$totalStudent = 50;
    // Teacher::myClass(7);

    $objStd = new Student();
    Student::$totalStudent = 100;
    Student::myClass(8);
    