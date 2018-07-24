<?php

  /* Phase 1 of TDD for Login Functionality: 
      1- Establishing connection to test_db via MySQLi (Object Oriented).
      2- Login testing, based on the Sequence Diagram I designed (https://drive.google.com/a/csumb.edu/file/d/113-7kLn7rxm71gHv5q9XlpC3JemGtLO5/view?usp=sharing)
      3- Prepare and execute statement.
      4- Credential validation.
  */

	session_start();

	if (isset($_POST['username'])) {
			
    /* Establish Connection */
		require '../test_connection.php';
		
    /* SQL Statement, in which it selects all data from customer_table, WHERE the username / password match the input givin below */
		$sql = "SELECT *
				FROM customer_table
				WHERE username = :username
				AND password = :password";
		
    /* Prepare sql statement and execute it with specified parameters */
		$stmt = $dbConn -> prepare($sql);
		$stmt -> execute(array(":username" => $_POST['username'], ":password" => $_POST['password']));
	
		$record = $stmt -> fetch();
	
		//  Validate or revoke credentials: 
    
    // If revoked: 
		if (empty($record)){
			echo '<script language="javascript">';
			  echo 'alert("Revoked!")';
			echo '</script>'; 
		} 
        
    // If validated: assign provided username to current session username and load customer_index.php
    else {
			$_SESSION['username'] = $record['username'];
      
      header("Location: ../path/to/customer_index.php");
			}
	}
?>

// Basic HTML form: 

<html>
<head> TDD - Login </head>
<body>

  <form class="form-signin" method="POST">
    <input type="text" name="username" class="form-control" placeholder="Username" required>
    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
		        
    <button name="loginForm"> Login </button>
  </form>

</body>
</html>
