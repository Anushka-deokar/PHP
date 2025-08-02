<!DOCTYPE html>
<html>
    <body>
        <?php 

          //Arithmetic Operators
          $a = 10;
           $b = 5;

             echo "Addition: " . ($a + $b) . "<br>";   
            echo "Subtraction: " . ($a - $b) . "<br>"; 
             echo "Multiplication: " . ($a * $b) . "<br>"; 
             echo "Division: " . ($a / $b) . "<br>"; 
              echo "Modulus: " . ($a % $b) . "<br>"; 


              //assignment operators

              $x = 10;  
              $y = 5;
              echo "Initial values: x = $x, y = $y\n";
              echo "<br>";
              // Addition Assignment
               $x += 5; // Equivalent to $x = $x + 5
               echo "After x += 5: x = $x\n";
               echo "<br>";
                 // Subtraction Assignment
               $x -= 3; // Equivalent to $x = $x - 3
               echo "After x -= 3: x = $x\n";
               echo "<br>";
                 // Multiplication Assignment
                $x *= 2; // Equivalent to $x = $x * 2
                echo "After x *= 2: x = $x\n";
                echo "<br>";
                    // Division Assignment
              $x /= 4; // Equivalent to $x = $x / 4
                  echo "After x /= 4: x = $x\n";
                  echo "<br>";
                       // Modulus Assignment
                   $x %= 3; // Equivalent to $x = $x % 3
                  echo "After x %= 3: x = $x\n";
                  echo "<br>";


                  // Array Operators in PHP

                 // Union
                 $a = ["a" => "Apple", "b" => "Banana"];
                 $b = ["c" => "Cherry", "d" => "Date"];
                 $result = $a + $b;
                 echo "Union: ";
                  print_r($result);

                   echo "\n";

                    // Equality
                  $a = [1, 2, 3];
                  $b = [1, 2, 3];
                  echo "Equality: ";
                  var_dump($a == $b);

                      echo "\n";

                 // Identity
                 $a = [1, 2, 3];
                 $b = [1, 2, 3];
                 echo "Identity: ";
                 var_dump($a === $b);

                 echo "\n";

                 

         ?>

</body>
<html>  