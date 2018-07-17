<?php

// Database connection variables
$host 		= 'localhost'; 
$dbname 	= '438'; 
$username 	= 'root'; 
$password 	= 'foobar';


// Establishes database connection: 
    try {

        $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    }

    catch (Exception $e) {
        echo "Unable to connect to database"; 
        exit(); 
    }

// Shows error when connecting to database: 
$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

?>
