<!DOCTYPE html>
<html>
    <body>
        <?php

         echo $_SERVER['PHP_SELF'];   // Returns the filename of the currently executing script
         echo "<br>";
         echo $_SERVER['SERVER_NAME'];  // Returns the name of the host server 
         echo "<br>";
         echo $_SERVER['HTTP_HOST'];
         echo "<br>";
         echo $_SERVER['SCRIPT_FILENAME'];  //  Returns the absolute pathname of the currently executing script
         echo "<br>";
         echo $_SERVER['HTTP_USER_AGENT'];  // contains info about web browser and os

         ?>

</body>
<html>  