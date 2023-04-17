<?php
        $con=mysqli_connect("localhost","root","","db_food");
        if(!$con){
            echo "sorry i could not connect to the database";
            exit;
        }
        else
        echo"connected";
   ?>  
    