<?php

$host = "localhost";
$dbname = "438";
$username = "root";
$password = "foobar";

$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// Setting Errorhandling to Exception
$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    

         $sql = "SELECT * FROM zip_code " .
                " WHERE zip = " . $_GET['zip_code'];
         $stmt = $dbConn->query($sql);
         $results = $stmt->fetchAll();
         
         echo "{";
         foreach ($results as $record){
             echo "\"city\":" . "\"" . $record['city'] . "\",";
             echo "\"latitude\":" . "\"" . $record['latitude'] . "\"," ;
             echo "\"longitude\":" . "\"" . $record['longitude'] . "\"" ;
           //echo "\"state\":" . "\"" . $record['state'] . "\"," ;
           //echo "\"county\":" . "\"" . $record['county'] . "\"," ;
           //echo "\"area\":" . "\"" . $record['areaCode'] . "\"," ;
              ;
         }
         echo "}";

?>