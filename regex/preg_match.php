<!DOCTYPE html>
<html>
    <body>
        <?php

          $str = "Anushka Deokar";
          $pattern = "/Deokar/i";
          echo preg_match($pattern, $str);
           echo "<br>";


          $pattern = "/deokar/i";
          echo preg_match($pattern, $str);
          echo "<br>";

          $pattern = "/anushka deokar/i";
          echo preg_match($pattern, $str);
          echo "<br>";

          $pattern = "/anushka Deokar1/i";
          echo preg_match($pattern, $str);
          echo "<br>";

         
          //To extract digits from a string
          $str1 = " Order ID 123345";
          $pattern = "/\d+/";

          if(preg_match($pattern,$str1,$matches)){
            echo "Found Number" . $matches[0];
            echo "<br>";


            //To validate email
            $email = "anushka21@gmail.com";
            $pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

               if (preg_match($pattern, $email)) {
                   echo "Valid email!";
                 } 
                 else
                  {
                  echo "Invalid email!";
              }

          }


         ?>

</body>
<html>   