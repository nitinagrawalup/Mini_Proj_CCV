
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

	<link rel="stylesheet" type="text/css" href="loan_intrest_validate.css">


	
  

</head>
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
    				<div id="collapsable-nav" class="collapse navbar-collapse">
					    <ul id="nav-list" class="nav navbar-nav navbar-right">
					      <li><a href="about.html">About</a></li>
					    </ul> 
  					</div> 
		</nav>
    </header> 

    <div class="transfer container">
        <h1><u>Result</u> </h1>
   <p>
		Loan paid successfully</p>
		<?php
			include 'connection.php';
			session_start();
			$my_acc_no=$_SESSION['acc_no'];
			$x="SELECT * FROM user_info WHERE  acc_no='$my_acc_no'";
			$result1=(mysqli_query($con,$x));
			$acc_bal=mysqli_fetch_array($result1,MYSQLI_ASSOC);
			$a= $acc_bal['loan'];
			if($a>0)
			{
				echo "Loan Amount remaining : Rs $a";
			}
			else
			{
				echo" ";
			}
		?>
    </div>
    
	<footer class="panel-footer ">
		<div class="container">
			<div class="rows">
				<section id="sec" class="col-sm-4">
					<span>Service Available</span>
					<br>
						<p>24 X 7</p>
					     <h4>Devloper</h4>
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


</body>
</html>