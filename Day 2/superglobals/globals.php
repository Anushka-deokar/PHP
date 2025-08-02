<!DOCTYPE html>
<html>
    <body>
        <?php
         $x =10;
         $y =5;

         function addnum(){
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
         }
        addnum();
        echo $z;


        //referring global varible inside function
        $num = 75;
  
         function myfunction() {
          echo $GLOBALS['num'];
           }

           myfunction()



         ?>

</body>
<html>  