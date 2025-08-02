//loop through indexed array

<!DOCTYPE html>
<html>

<body>
    <?php
        $cars = array("Volvo","BMW","Toyota");
        foreach ($cars as $x)
        {

            echo "$x <br>";
        }
       // pushing array element 
        array_push($cars, "Ford");
        var_dump($cars);

        ?>
        </body>
    </html>