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

	<link rel="stylesheet" type="text/css" href="transfer_fail.css">


	
  

</head>
<body>
    <?php
        include 'connection.php';

        session_start();
        $my_acc_no=$_SESSION['acc_no'];
                
        $x="SELECT acc_balance FROM user_info WHERE  acc_no='$my_acc_no'";
        $result1=(mysqli_query($con,$x));
        $acc_bal=mysqli_fetch_array($result1,MYSQLI_ASSOC);
        $a= $acc_bal['acc_balance'];
    ?>

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
    <?php

        include 'connection.php';
        $my_acc_no=$_SESSION['acc_no'];
            
        $x="SELECT * FROM user_info WHERE  acc_no='$my_acc_no'";
        $result1=(mysqli_query($con,$x));
        $acc_info=mysqli_fetch_array($result1,MYSQLI_ASSOC);

        if($acc_info['loan']>0)
        {
          $z=$acc_info['loan'];
          $k=$acc_info['loantype'];
        }
        else
        {
          $z="Not Taken";
          $k="No Loan Taken";
        }
        if($acc_info['deposit']>0)
        {
          $y=$acc_info['deposit'];
        }
        else
        {
          $y="No Deposits";
        }
        


    ?>

    <h1 style="text-align:center"><u>User Information</u></h1>
     
    <hr>
    <table class="table table-striped table-hover table-dark ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Fields</th>
      <th scope="col">User Details</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>First Name</td>
      <td><?php echo $acc_info['fname']?></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Last Name</td>
      <td><?php echo $acc_info['lname']?></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Address</td>
      <td><?php echo $acc_info['address1']?></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>City</td>
      <td><?php echo $acc_info['city']?></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>ZIP</td>
      <td><?php echo $acc_info['zip']?></td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Password</td>
      <td><?php echo $acc_info['password']?></td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>Phone Number</td>
      <td> <?php echo $acc_info['phone']?></td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>E-mail</td>
      <td><?php echo $acc_info['email']?></td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>Account Type</td>
      <td><?php echo $acc_info['account']?></td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>Username</td>
      <td><?php  echo $acc_info['username']?></td>
    </tr>
    <tr>
      <th scope="row">11</th>
      <td>Account Number</td>
      <td><?php echo $acc_info['acc_no']?></td>
    </tr>
    <tr>
    <th scope="row">12</th>
      <td>Account Balance</td>
      <td><?php echo $acc_info['acc_balance']?></td>
    </tr>
    <tr>
      <th scope="row">13</th>
      <td>Loan</td>
      <td><?php echo $z?></td>
    </tr>
    <tr>
      <th scope="row">14</th>
      <td>Deposit</td>
      <td><?php echo $y?></td>
    </tr>
    <tr>
      <th scope="row">15</th>
      <td>Loan Type</td>
      <td><?php echo $k?></td>
    </tr>
  </tbody>
</table>

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

	<script src="js/script.js"></script>

</body>