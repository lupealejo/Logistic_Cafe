<?php 

    /* Phase 1 of TDD for Menu Page Functionality:
      1- Establishing connection to test_db via MySQLi (Object Oriented).
      2- Preparing and executing SQL statements. 
      3- Fetch values.
      4- Display specified data (image, title, description). 
      5- Add chosen item to cart.
    */

    session_start();
    
    /* Testing connection */
    
    require_once('../test_connection.php');
    
    /* In this test case, ALL (*) data is chosen from table menu_items WHERE the column named menu is specified as Dinner. */
    
    $sql = "SELECT * FROM 'some_table'
            WHERE menu = 'the_correct_menu'";

     
    /* The SQL statement is prepared, and executed. */
    
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();

?>

<html> 

<head> Test-Driven Development </head>
<body>

   <!-- Fetching values -->
   
   <?php while($test = $stmt -> fetch()){ ?>
   
        <!--  This test code will theoretically display the image associated to the specific menu item. -->
        
	      <img src="../path/to/image.jpg"<?php echo $r['image']; ?>" alt="<?php echo $r['title'] ?>">

          <!-- This test code will display the title and the description associated to the specific menu item. --> 

	        <h3><?php echo $test['title'] ?></h3>
	        <p><?php echo $test['description'] ?></p>

          <!-- This test code will add the chosen item to the cart --> 

	        <p> <a href="../path/to/addtocart.php?id= <?php echo $r['id']; ?>" class="some_bootstrap_button"> Add to Cart </a> </p>
          
  <?php } ?>
  
</body>
</html>





 
