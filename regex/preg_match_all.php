<!DOCTYPE html>
<html>
    <body>
        <?php
                  $str = "The rain in SPAIN falls mainly on the plains.";
                  $pattern = "/ain/i";
                  echo preg_match_all($pattern, $str);


                  // find all numbers is string

                  $pattern = "/\d+/"; 
                  $string = "Order ID: 12345, Price: 500, Discount: 25";

                    preg_match_all($pattern, $string, $matches);
                    var_dump($matches[0]);

                    //If there are no didgits

                    $pattern = "/\d+/"; 
                     $string = " Regular Expression simple string";

                   echo  preg_match_all($pattern, $string, $matches);
                  

                   

         ?>

</body>
<html>  