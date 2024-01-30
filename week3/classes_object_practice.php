<?php
// __construct() and __destruct() must not declare a return type; otherwise a fatal error is emitted.
//All magic methods, with the exception of __construct(), __destruct(), and __clone(), must be declared as public



   class A
    {
        public $i = 0; //property of class A
        public function inc() //method of class A
        {
            $this->i++;
        }
        public function reset() //method of class A
        {
            $this->i = 10;
        }
    }

    $obj1 = new A();
    print_r($obj1); echo "<br>";

    $obj1->inc(); //call to inc() method of the class to which obj1 belongs
    print_r($obj1); echo "<br>";
    
    $obj1->reset();
    $obj1->i = 10;  echo "<br><br>";

    $obj2 = new A();
    $obj2 -> inc();
    print_r($obj1); echo "<br>";
    
    $obj1->inc();
    print_r($obj2);


 ?>