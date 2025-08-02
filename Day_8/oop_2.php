<?php
 class  Student 
 {
    public $name;
    public $age;


    function setDetails($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    function displayDetails() {
        echo "Student Name: " . $this->name . "<br>";
        echo "Student Age: " . $this->age;
    }
}
     
 // creating obj
 $s1 = new Student();
 $s1->setDetails("Anushka Deokar",21);
 $s1->displayDetails();
 




?>