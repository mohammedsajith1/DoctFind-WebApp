<?php

    $database= new mysqli("localhost","root","","doct");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>