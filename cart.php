<?php 
require_once('db_connection.php'); 
include('templates/header.php'); 
include('templates/nav.php');
?>
 
<div class="container">
<?php 
$items = $_SESSION['cart'];
$cartitems = explode(",", $items);
?>
	<div class="row">
	  <table class="table">
	  	<tr>
	  		<th>S.NO</th>
	  		<th>Item Name</th>
	  		<th>Price</th>
	  	</tr>
		<?php
		$total = '';
		$i=1;
		 foreach ($cartitems as $key=>$id) {
			$sql = "SELECT * FROM Menu_Items WHERE id = $id";
			
			$stmt = $dbConn->query($sql);
         	$r = $stmt->fetch();
		?>	  	
	  	<tr>
	  		<td><?php echo $i; ?></td>
	  		<td><a href="delcart.php?remove=<?php echo $key; ?>"><img src="../Images/Trash_Icon.png";></a> <?php echo $r['title']; ?></td>
	  		<td>$<?php echo $r['price']; ?></td>
	  	</tr>
		<?php 
			$total = $total + $r['price'];
			$i++; 
			} 
		?>
		<tr>
			<td><strong>Total Price</strong></td>
			<td><strong>$<?php echo $total; ?></strong></td>
			<td><a href="#" class=""></a></td>
		</tr>
	  </table>
	  
	</div>
 
	<div id="left_side">
	<h2 style='border:1px #000000 solid '> Shipping Information </h2>
	
	<br />
	<br />

	<form method="post" id="main">
		<table>	
			<tr>
				<td>First Name:</td>
				<td><input required placeholder="First Name" size="40" type="text" name="firstName" id="lastName" /></td>
			</tr>
			<tr>
				<td>Last Name:</td>
				<td><input required placeholder="Last Name" size="40" type="text" name="lastName" id="lastName" /></td>
			</tr>
			<tr>
				<td>Address:</td>
				<td><input required placeholder="Address" size="40" type="text" name="address" id="address" /></td>
			</tr>
			<tr>
				<td>Zip Code:</td>
				<td><input required placeholder="Zip Code"type="text" id="zip" size="7" name="zip" /></td>
			</tr>
			<tr>
				<td>City:</td>
				<td><input required placeholder="City" type="text" id="city" name="city" /></td>
			</tr>
			<tr>
				<td>Date of Birth:</td>
				<td><input type="text" name="jqueryDate" placeholder="mm/dd/yyyy"><br></td>
			</tr>
			<tr>
				<td>Phone:</td>
				<td><input required type="tel" placeholder="(XXX) XXX-XXXX" /></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input required placeholder="name@example.com" type="text" name="email" /></td>
			</tr>
		</table>
		
			<!-- ************************************************************************************************************** --> 
			<br> 
			<br> 
		
			<h2 style='border:1px #000000 solid;'>Payment Information </h2>
			<h3 class="title">Credit Card Information: </h3>
	 		<table> 
				<tr>
					<td>			
					<table> 
						<tr> 
							<td><input type="text" placeholder="Card Holder Name" size="31"></td>
						</tr>
						<tr id="lineup">
							<td>
							<input type="text" placeholder="Card Number">
							<input type="text" placeholder="CVV" size="4">
							<i class="fa fa-question-circle" id="hoverElement"></i>
							</td>
				 		</tr>
						<tr>
							<td>
						  		<div id="month">
						    			<select name="Month">
											<option value="january">January</option>
											<option value="february">February</option>
											<option value="march">March</option>
											<option value="april">April</option>
											<option value="may">May</option>
											<option value="june">June</option>
											<option value="july">July</option>
											<option value="august">August</option>
											<option value="september">September</option>
											<option value="october">October</option>
											<option value="november">November</option>
											<option value="december">December</option>
									</select>
						  		</div>
						 		<div id="year">
						    			<select name="Year">
							      			<option value="2016">2016</option>
							      			<option value="2017">2017</option>
											<option value="2018">2018</option>
											<option value="2019">2019</option>
											<option value="2020">2020</option>
											<option value="2021">2021</option>
											<option value="2022">2022</option>
											<option value="2023">2023</option>
											<option value="2024">2024</option>
						   			 </select>
								</div>
					      		</td>
						</tr>
					</table>
					</td> 
				</tr> 
			</table> 
	
			<!-- ************************************************************************************************************** -->
		
			<h3> Billing Address: </h3> 
			<p id="billing"> Same as Shipping <input type="checkbox" onclick="SetBilling(this.checked);" checked="checked" /> </p>
		
			<div id="billingaddress" style="display:none;">
				<table> 
					<tr>
						<td>First Name:</td>
						<td><input placeholder="First Name" size="40" type="text" name="firstName" id="lastName" /></td>
					</tr>
					<tr>
						<td>Last Name:</td>
						<td><input placeholder="Last Name" size="40" type="text" name="lastName" id="lastName" /></td>
					</tr>
					<tr>
						<td>Address:</td>
						<td><input placeholder="Address" size="40" type="text" name="address" id="address" /></td>
					</tr>
					<tr>
	
						<td>Zip Code:</td>
						<td><input placeholder="Zip Code"type="text" id="zip2" size="7" name="zip2" /></td>
					</tr>
					<tr>
						<td>City:</td>
						<td><input placeholder="City" type="text" id="city2" name="city2" /></td>
					</tr>
				</table>
			</div> 	<!-- Closing deliveryaddress -->
		
			<br> <br> 

			<button type="submit" value="Checkout">Checkout</button>
			<button type="reset" value="Reset">Reset</button> 
	
		</form> <!-- Cloing main form --> 
		</div> <!-- Closing left_side -->

	</div> <!-- Close wrapper --> 
	
	<script>
		$(document).ready(function() {
			    
			$("#Invisible").hide()
				$("#hoverElement").hover(
					function () {
						$('#Invisible').stop().fadeTo("slow", 0.33);
					}, 
					function () {
						$('#Invisible').stop().fadeOut("slow");
					}
			);
			    
			});


			$("input[type='tel']").each(function(){
				$(this).on("change keyup paste", function (e) {
			    		var output,
			      		$this = $(this),
			      		input = $this.val();

			    		if(e.keyCode != 8) {
			      			input = input.replace(/[^0-9]/g, ''); 	
			      			var area = input.substr(0, 3);
			      			var pre = input.substr(3, 3);
			      			var tel = input.substr(6, 4);
			      		
						if (area.length < 3) {
							output = "(" + area;
			      			} 
						else if (area.length == 3 && pre.length < 3) {
							output = "(" + area + ")" + " " + pre;
			     	 		} 
						else if (area.length == 3 && pre.length == 3) {
							output = "(" + area + ")" + " " + pre + "-" + tel;
			      			}
			      			
						$this.val(output);
			    		}
			  	});
			});
			
			// Date: ------------------------------------------------------------------------------------------ 
			var $jqDate = jQuery('input[name="jqueryDate"]'); //Put input DOM element into a jQuery Object

			$jqDate.bind('keyup','keydown', function(e){ //Bind keyup/keydown to the input
	
				if(e.which !== 8) {	// To accomdate for backspacing, detect which key was pressed - if backspace, do nothing:
					var numChars = $jqDate.val().length;
						
					if(numChars === 2 || numChars === 5){
						var thisVal = $jqDate.val();
						thisVal += '/';
						$jqDate.val(thisVal);
					}
				  }
			});
			
			// Location: --------------------------------------------------------------------------------------
			$("#zip").change(function(){
				
				$.ajax({
					type: "get",
					url: "PHP/zip.php",
					dataType: "json",
					data: { "zip_code": $("#zip").val() },
					success: function(data,status) {
						$("#city").val(data["city"]);
						$("#state").val(data["state"]);
					}, 
					complete: function(data,status) {
					//alert(status);
				}
	         
	         }); 
		});

			$("#zip2").change(function(){
				$.ajax({
					type: "get",
					url: "PHP/zip.php",
					dataType: "json",
					data: { "zip_code": $("#zip2").val() },
					success: function(data,status) {
						$("#city2").val(data["city"]);
					},
					complete: function(data,status) {
					//alert(status);
					}
				});
			});
			
			// Billing Address: --------------------------------------------------------------------------------
			function SetBilling(checked) {
				if (checked) {
					document.getElementById('billingaddress').style.display="none";
				} 
				else {
					document.getElementById('billingaddress').style.display="block";
				}
			}

		</script>
 
<?php include('../templates/footer.php'); ?>