<?php

    function connection(){
        $host = "mydb1.c3saackuoh4e.ap-southeast-2.rds.amazonaws.com";
        $username = "admin";
        $password = "chanzkie15";
        $database = "patient_system";
    
        $con = new mysqli($host, $username, $password, $database);
    
        if($con->connect_error){
            echo $con->connect_error;
        }else{
            return $con;
        }

    }

