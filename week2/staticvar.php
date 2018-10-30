<?php
    function mynum(){
        static $x = 0;
        echo $x;
        $x++;
   } 
   myname();
   echo "<br>";
   mynum();
   echo "<br>";
   mynum();
?>