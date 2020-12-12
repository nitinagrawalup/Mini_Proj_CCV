<!DOCTYPE html>
<html>
<head>
	<title>My New Responsive Website</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA_Compatible" content="IE=edge">
	<meta http-equiv="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	
	<link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="after_login.css">

	<style>
		h1
  {
    text-align: center;
    padding-top: 20px;
  }
  .map
  {
    text-align: center;
    border: solid 2px black;
  }
  .map:hover
  {
    border-color: red;
  }
  .map span{
    background-color: #000;
  }
	</style>
	
  

</head>
<?php

	include 'connection.php';
	

	session_start();
	$x=$_SESSION['acc_no'];
	$S="SELECT username FROM user_info WHERE acc_no ='$x' ";
	 $result= mysqli_query($con,$S);
	 $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

	//echo $S;


?>
<body>

	<header>
		<nav  id="header-nav" class="navbar navbar-default">
			<div class="container">
    			<div class="navbar-header">
    				<a href="#" class="pull-left visible-lg visible-md">
    					<div class="logo-img" >
    						<img src='https://akm-img-a-in.tosshub.com/sites/btmt/images/stories/bank_2_660x450_031219055726.jpg' alt="loading">
    					</div>
    				</a>
    				<div class="navbar-brand">
    					<a href="#"><h1 id="sm">My Bank</h1></a>
    				</div>

    					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapsable-nav">
					      <span class="icon-bar"></span>
					      <span class="icon-bar"></span>
					      <span class="icon-bar"></span>
					    </button>
    			</div>
    				<div id="collapsable-nav navbarSupportedContent" class="collapse navbar-collapse">
					    <ul id="nav-list" class="nav navbar-nav navbar-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                                <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                            </svg> &nbsp; <p style="font-size:1.2em;"><?php echo $row["username"];?></p>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item link" href="profile.php"><p>Profile</p></a>
                                <div class="dropdown-divider "><hr width=100%></div>
                                <a class="dropdown-item link" href="logout.php"><p>Logout<p></a>
                            </div>
                        </li>
					    </ul> 
                    </div>   
		</nav>
    </header> 

    <div class="slideshow-container container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides ">
            
            <img src="5.jpg">
            <div class="text">Caption Text</div>
            </div>

            <div class="mySlides ">
            <img src="4.jpg" >
            <div class="text">Caption Two</div>
            </div>

            <div class="mySlides ">
            <img src="3.jpg">
            <div class="text">Caption Three</div>
            </div>

            <!-- Next and previous buttons -->
           </div>
            <br>

            <!-- The dots/circles -->
            <div style="text-align:center">
            <span class="dot" onclick=""></span>
            <span class="dot" onclick=""></span>
            <span class="dot" onclick=""></span>
</div>

<div class="hd container">
		  <h1 >Facilities Available</h1>
	  </div>
	  <div class="below-img container"> 
		  
		 <div class="below col-sm-4 col-md-4 col-lg-4">
			<a class="link"  href="loan.php">
			<h3>
				Loan
			</h3>
			
		</a>
		  </div>
		  <div class="below col-sm-4 col-md-4 col-lg-4">
			<a class="link"  href="transfer.php">
			<h3>
				Transfer
			</h3>
			
		</a>
	  	  </div>	
		  <div class="below col-sm-4 col-md-4 col-lg-4">
			<a class="link"  href="add_money.php">
			<h3>
				Add Money
			</h3>
			
		</a>
			
			</div>
			<div class="below col-sm-4 col-md-4 col-lg-4">
				<a class="link"  href="loan_intrest_calculate.php">
				<h3>
                    Loan Amount Calculator			
                </h3>
			  </div>
			  <div class="below col-sm-4 col-md-4 col-lg-4">
				<a class="link"  href="deposit.php">
				<h3>
					Deposit
				</h3>
				
			</a>
				</div>	
			  <div class="below col-sm-4 col-md-4 col-lg-4">
				<a class="link"  href="deposit_calculate.php">
				<h3>
  					Pay Loan
				</h3>
				</a>
			 </div>
		</div>
		
		<div class="container">
		<h1>
			Nearest Branch
			<hr width="90%">
		</h1>
		
		<div class="map" id="mm" class="col-md-4 col-sm-12 col-xs-12"><a href="https://goo.gl/maps/dtkkVmSGCN2wn4LN7" target="_blank"><div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3571.0806813574836!2d80.33311991498871!3d26.485346983313466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7f9a18f7778b71de!2sHotel%20Deep%20Mayur!5e0!3m2!1sen!2sin!4v1592814772740!5m2!1sen!2sin" width="100%" height="260px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div></a></div>

	   </div>

	   <footer class="panel-footer ">
		<div class="container">
			<div class="rows">
				<section id="sec" class="col-sm-4">
					<span>Service Available</span>
					<br>
						<p>24 X 7</p>
					<h4><span>Developer</span></h4>
					<ul>
						<li>Shahrukh</li>
					</ul>
					<hr class="visible-xs">
				</section>
				<section id="sec1" class="col-sm-4">
					<span>Address</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<p class="p">&#x2192;  &nbsp; <a href="#mm">11/268 Suther Ganj ,Kanpur<a/></p>
					<hr class="visible-xs">
				</section>
				<section id="sec2" class="col-sm-4">
					<span>Aim</span>
					<br>
					<p>
						The aim of our is to provide security and confidence in the economy. If banks were allowed to go bankrupt and consumers lost savings; it would cause widespread financial panic and many consumers would withdraw their savings and hold as cash.
					</p>
				</section>
			</div>
		</div>
			
		<div class="text-center">
			<a href="#">&copy; Copyright My Bank 2020</a>
		</div>
	</footer>

      
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="after_login.js"></script>
</body>
</html>