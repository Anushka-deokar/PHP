

<?php
class Fruit {

  public $name;
  public $color;


  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
echo "<br>";


$banana = new Fruit();
$banana->name = "Banana2";   //setting directly value outside class withut method


echo "Setting directly: " . $banana->name . "<br>";

echo "<br>";

// to check if instance of cllass
$apple = new Fruit();
var_dump($apple instanceof Fruit);

?>


 
