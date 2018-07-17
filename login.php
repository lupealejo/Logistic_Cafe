<?php

    /* Templates */
    include('templates/header.php');
    include('templates/nav.php');

?>

<?php

	session_start();
	
	if (isset($_POST['username'])){
			
		require 'db_connection.php';
		
		$sql = "SELECT *
				FROM users
				WHERE username = :username
				AND password = :password";
		
		$stmt = $dbConn -> prepare($sql);
		$stmt -> execute(array(":username" => $_POST['username'], ":password" => $_POST['password']));
		
		$record = $stmt -> fetch();
	
		// If username and / or password not it database: 
		if (empty($record)){
			echo '<script language="javascript">';
			echo 'alert("Wrong username and / or password!")';
			echo '</script>'; 
		} 
        
        // Else, take you to index.php
        else {
			$_SESSION['username'] = $record['username'];
            $_SESSION['picture'] = $record['image'];
			$_SESSION['name'] = $record['firstname'] . " " . $record['lastname'];
            
            header("Location: index.php");
			}
	}

?>

<!DOCTYPE html>
<html lang="en">
	
<head> 
    <!-- Title --> 
    <title> Login </title>
    
    <!-- Icon --> 
    <link rel="shortcut icon" type="image/x-icon" href="Images/favicon.ico" />
        
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		 
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
		 
    <link rel="stylesheet" href="../CSS/style.css" >
		 
    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="styles.css">
    
    <style> 
    
        .btn btn-lg btn-primary btn-block {
                background-color: #40a044;
        }
        
        <style>
        
        /* Customizing bootstrap navbar */
        
        .navbar {
          min-height: 20px;
        }
        
        .nav navbar-nav navbar-right {
            padding: 0px; 
        }
        
        .navbar-brand {
          padding: 0 10px;
          height: 15px;
          line-height: 15px;
        }

        .navbar-toggle {
          /* (80px - button height 34px) / 2 = 23px */
          margin-top: 10x;
          padding: 5px 5px !important;
        }

        @media (min-width: 768px) {
          .navbar-nav > li > a {
            /* (80px - line-height of 27px) / 2 = 26.5px */
            padding-top: 8.5px;
            padding-bottom: 10.5px;
            line-height: 15px;
          }
        }

        .dropbtn {
            font-family:"Trebuchet MS", Helvetica, sans-serif;  
            background-color: #6ad86e;
            color: white;
            font-weight: bold; 
            padding: 8px;
            font-size: 13px;
            border: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            font-family:"Trebuchet MS", Helvetica, sans-serif; 
            display: none;
            position: absolute;
            font-weight: bold; 
            background-color: white;
            min-width: 130px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            font-family:"Trebuchet MS", Helvetica, sans-serif; 
            color: black;
            padding: 10px 12px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {background-color: #ededed;}

        .dropdown:hover .dropdown-content {display: block;}

        .dropdown:hover .dropbtn {background-color: #40a044;}
		
        li {
            padding-right: 3px; 
        }
   
	</style>
    
    </style>
    
</head>
<body>
    <div class="container">
        <form class="form-signin" method="POST">
            
            <img src="/Images/login_logo-2.jpg">
            
            <label for="inputUsername" class="sr-only">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username" required>
		        
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
		        
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="loginForm">Login</button>
            <a class="btn btn-lg btn-primary btn-block" href="register.php">Register</a>
		      
        </form>
	</div>

<!-- Footer --> 
<?php include('templates/footer.php'); ?>

