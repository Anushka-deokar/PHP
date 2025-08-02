<?php
class Student {
  public $name;
  public $age;

  // Constructor with default values
  function __construct($name = "Anushka", $age = 21) {
    $this->name = $name;
    $this->age = $age;
  }

  function get_name() {
    return $this->name;
  }

  function get_age() {
    return $this->age;
  }
}


$student1 = new Student();


$student2 = new Student("Riya");


$student3 = new Student("John", 22);


echo $student1->get_name() . " - " . $student1->get_age() . "<br>";
echo $student2->get_name() . " - " . $student2->get_age() . "<br>";
echo $student3->get_name() . " - " . $student3->get_age();
?>
