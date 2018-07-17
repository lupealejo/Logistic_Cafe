<html>

<head>
	
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
</head>

<nav class="navbar navbar-default" style="font-family:'Trebuchet MS', Helvetica, sans-serif;">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
 
  <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li> 
            <div class="dropdown">
            <button class="dropbtn">Menu</button>
                <div class="dropdown-content">
                    <a href="#">Breakfast</a>
                    <a href="#">Lunch</a>
                    <a href="#">Dinner</a>
                    <a href="#">Beverages</a>
                    <a href="#">Happy Hour</a>
                </div>
             </div>
        </li>
        <li> 
            <div class="dropdown">
                <button class="dropbtn">Gallery</button>
            </div>
        </li>
        <li> 
            <div class="dropdown">
            <button class="dropbtn">Services</button>
                <div class="dropdown-content">
                    <a href="#">Reservations</a>
                    <a href="#">Hours</a>
                    <a href="#">Catering</a>
                    <a href="#">Delivery</a>
                </div>
             </div>
        </li>
        <li> 
            <div class="dropdown">
                <button class="dropbtn">About Us</button>
                <div class="dropdown-content">
                    <a href="#">History</a>
                    <a href="#">Contact Us</a>
                </div>
             </div>
        </li>
        <li> 
            <div class="dropdown">
                <button class="dropbtn">Location</button>
            </div>
        </li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        
        <li>
          <a href="cart.php" >
              
          <?php
            $items = $_SESSION['cart'];
            $cartitems = explode(",", $items);
            echo count($cartitems);
          ?> Items in Cart
              
           </a>
        </li>
        <li><a href="login.php">Log In </a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>