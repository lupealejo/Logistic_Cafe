<?php 
    session_start();

    require_once('../db_connection.php');

    /* Templates */
    include('templates/header.php');
    include('templates/nav.php');

    /* Unit Testing for SQL sample data*/ 
    $sql = "SELECT * FROM menu_items
            WHERE menu = 'Breakfast'";
    $stmt = $conn -> prepare($sql);
    $stmt -> execute();
?>
 
<div class="container">
<?php if(isset($_GET['status']) & !empty($_GET['status'])){ 
			if($_GET['status'] == 'success'){
				echo "<div class=\"alert alert-success\" role=\"alert\">Item Successfully Added to Cart</div>";
			}elseif ($_GET['status'] == 'incart') {
				echo "<div class=\"alert alert-info\" role=\"alert\">Item Already Exists in Cart</div>";
			}elseif ($_GET['status'] == 'failed') {
				echo "<div class=\"alert alert-danger\" role=\"alert\">Failed to Add item, try to Add Again</div>";
			}
	}
?>
	
<div class="row">
<?php while($r = $stmt -> fetch()){ ?>
	  <div class="col-sm-6 col-md-3">
	    <div class="thumbnail">
	      <img src="../Images/Menu/GEAH.jpg"<?php echo $r['image']; ?>" alt="<?php echo $r['title'] ?>">
	      <div class="caption">
	        <h3><?php echo $r['title'] ?></h3>
	        <p><?php echo $r['description'] ?></p>
	        <p><a href="../PHP/addtocart.php?id=<?php echo $r['id']; ?>" class="btn btn-primary" role="button">Add to Cart</a></p>
	      </div>
	    </div>
	  </div>
<?php } ?>
	</div>
 
</div>
 
<?php include('../templates/footer.php'); ?>
