<?php

    // session_start();

    require_once('db_connection.php');
    include('templates/header.php');
    include('templates/nav.php');

    /*
        if (isset($_POST['username']) && 
            isset($_POST['password']) && 
            isset($_POST['firstname']) && 
            isset($_POST['lastname']) &&
            isset($_POST['email']))

            {

                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $fistname = $_POST['firstname'];
                $lastname = $_POST['lastname'];

                $sql = "INSERT INTO users (firstname, lastname, username, password, email) 
                        VALUES ('$fistname', '$lastname','$username', '$password', '$email')";

                $stmt = $dbConn -> prepare($sql);
                $stmt -> execute();

                if($stmt){
                    $smsg = "User Created Successfully.";
                }else{
                    $smsg = 'User Registration Failed';
                }

                echo '&nbsp; &nbsp; &nbsp' . $smsg;
            }

    */
		
?>

<html>
<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		 
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
		 
		<link rel="stylesheet" href="CSS/style.css" >
		 
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
        <!-- Title -->
        <title> LCG - Register </title>
</head>

<body>
    
    <div class="container">
        <form name="registration" action="index.php" class="form-signin" method="POST">
            
            <img src="/Images/register_logo.jpg"> 
            
            <label for="fistname" class="sr-only">Firstname</label>
		    <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Firstname" required autofocus>
            
            <label for="lastname" class="sr-only">Lastname</label>
		    <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Lastname" required autofocus>
            
            <label for="email" class="sr-only">Email</label>
		    <input type="password" name="email" id="email" class="form-control" placeholder="Email" required autofocus>
            
            <label for="username" class="sr-only">Username</label>
		    <input type="text" name="username" id="username" class="form-control" placeholder="Username" required autofocus>
		        
            <label for="password" class="sr-only">Password</label>
		    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required autofocus>
            
            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"><b>Already a Member?</b></span>
			    <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>  
            </div>
            
        </form>
    </div>
        
</body>
</html>