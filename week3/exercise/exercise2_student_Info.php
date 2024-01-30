<?php 


    class Student {
        //Properties of class student are name,age,grade.
        public $name;
        public $age;
        public $grade;

        public function displayInfo() {
            echo "Name: $this->name <br> Age: $this->age <br> Grade: $this->grade ";
        }
    }

    // Example Usage:
    $student1 = new Student();
    $student1->name = "Ankit";
    $student1->age = 22;
    $student1->grade = "A";
    $student1->displayInfo(); // Output: Name: Ankit, Age: 22, Grade: A


?>