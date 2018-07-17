<?php

	require "db_connection.php";
	
	$sql = "CREATE TABLE IF NOT EXISTS users (
			id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
			firstname varchar (50) NOT NULL,
			lastname varchar (50) NOT NULL,
			email varchar(50) NOT NULL, 
			username varchar (50) NOT NULL,
			password varchar (50) NOT NULL,
            image varchar (50) NOT NULL)"; 
	
	$stmt = $dbConn -> prepare($sql);
	$stmt -> execute();
	
	$sql = "INSERT INTO users (firstname, lastname,email, username, password, image) 
			VALUES (:firstname, :lastname, :email, :username, :password, :image)";
	
	$stmt = $dbConn -> prepare($sql);
