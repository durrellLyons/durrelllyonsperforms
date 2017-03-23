<?php
    
class dbConnector {
    
    private $hostname;
    private $username;
    private $password;
    private $database;
    
    public function __construct() {
        $this->hostname = 'localhost';
        $this->username = 'dbaCountry';
        $this->password = 'Huskies5';
        $this->database = 'durrelllyonsperforms';
    }
    
    public function connect() {
        $this->mysqli = new mysqli($this->hostname, $this->username, $this->password, $this->database);
        if(mysqli_connect_errno()) {
            echo "Connect Failed: " . mysqli_connect_errno();
            exit();
        }
        return $this->mysqli;
    }
}

?>