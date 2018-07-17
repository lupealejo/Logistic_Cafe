<?php

    session_start();

    require_once('db_connection.php');
    include('templates/header.php');
    include('templates/nav.php');

    // Determines whether variable (username) is set or not. 

    // If username is NOT set in this session: 
    if(!isset($_SESSION['username'])){

        // Go to login.php
        header("Location: login.php");
    }

    else {
        echo "";
    }

?>

<html>
	
	<head>
        
        <!-- Icon --> 
        <link rel="shortcut icon" type="image/x-icon" href="Images/favicon.ico" />
        
        <!-- CSS -->
		<link rel="stylesheet" type="text/css" href="../CSS/index.css"/>
	</head>
	
	<body>
		
		<img src="Images/Index_Image4.jpg" id='image'>
        
        <br /> 
        <br /> 
        
        <div id="context">
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique quam eu diam feugiat maximus. Nunc lobortis fermentum ex, quis faucibus lacus aliquam vel. Nunc blandit at nisi a suscipit. Integer feugiat, odio vel congue auctor, urna orci lobortis arcu, id iaculis mauris arcu lacinia nisi. Maecenas bibendum nunc a urna porta cursus. Fusce rutrum, nulla ac volutpat placerat, neque tellus hendrerit nibh, et tincidunt dolor risus non mauris. Quisque sit amet aliquam diam, eu tincidunt justo. In hac habitasse platea dictumst. Curabitur commodo tincidunt tincidunt. Vestibulum vel tortor lacinia, volutpat quam ut, egestas ligula. Phasellus feugiat nibh in efficitur varius. Donec condimentum ultricies consectetur. Aenean placerat sapien ac neque egestas pulvinar. Quisque est sem, malesuada vel orci tempus, vestibulum malesuada nisi. In convallis eros enim, tempor fringilla enim hendrerit at.

            Pellentesque ac velit nunc. Etiam eu ligula posuere, maximus turpis sed, eleifend metus. Fusce at odio porta, congue est nec, vehicula felis. Donec mattis odio quis turpis euismod, vel bibendum eros hendrerit. Praesent sed lacus eleifend, aliquam neque eu, accumsan felis. Ut et libero blandit, elementum nisl a, condimentum massa. Donec sed tortor at justo tincidunt consectetur. Aenean eu mauris diam. </p>
         </div>

<?php include('templates/footer.php'); ?>