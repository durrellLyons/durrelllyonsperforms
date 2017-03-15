<?php

    class Database {
    
        function __construct() {
            $hostname = 'localhost';
            $username = 'dbaCountry';
            $password = 'Huskies5';
            $database = 'durrelllyonsperforms';
    
            $mysqli = new mysqli($hostname, $username, $password, $database);
            if(mysqli_connect_errno()) {
                echo "Connect Failed: " . mysqli_connect_errno();
                exit();
            } else {
                echo "We Good";
            }
        }
    }
    
    $connect = new Database();

?>